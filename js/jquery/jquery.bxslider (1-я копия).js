/**
 * bxslider v4.2.12
 * Copyright 2013-2015 Steven Wanderski
 * Written while drinking Belgian ales and listening to jazz
 * Licensed under MIT (http://opensource.org/licenses/MIT)
 */

;(function($) {

  var defaults = {

    // GENERAL
    mode: 'horizontal',
    slideSelector: '',
    infiniteLoop: true,
    hideControlOnEnd: false,
    speed: 500,
    easing: null,
    slideMargin: 0,
    startSlide: 0,
    randomStart: false,
    captions: false,
    ticker: false,
    tickerHover: false,
    adaptiveHeight: false,
    adaptiveHeightSpeed: 500,
    video: false,
    useCSS: true,
    preloadImages: 'visible',
    responsive: true,
    slideZIndex: 50,
    wrapperClass: 'bx-wrapper',

    // TOUCH
    touchEnabled: true,
    swipeThreshold: 50,
    oneToOneTouch: true,
    preventDefaultSwipeX: true,
    preventDefaultSwipeY: false,

    // ACCESSIBILITY
    ariaLive: true,
    ariaHidden: true,

    // KEYBOARD
    keyboardEnabled: false,

    // PAGER
    pager: true,
    pagerType: 'full',
    pagerShortSeparator: ' / ',
    pagerSelector: null,
    buildPager: null,
    pagerCustom: null,

    // CONTROLS
    controls: true,
    nextText: 'Next',
    prevText: 'Prev',
    nextSelector: null,
    prevSelector: null,
    autoControls: false,
    startText: 'Start',
    stopText: 'Stop',
    autoControlsCombine: false,
    autoControlsSelector: null,

    // AUTO
    auto: false,
    pause: 4000,
    autoStart: true,
    autoDirection: 'next',
    stopAutoOnClick: false,
    autoHover: false,
    autoDelay: 0,
    autoSlideForOnePage: false,

    // CAROUSEL
    minSlides: 1,
    maxSlides: 1,
    moveSlides: 0,
    slideWidth: 0,
    shrinkItems: false,

    // CALLBACKS
    onslider2Load: function() { return true; },
    onSlideBefore: function() { return true; },
    onSlideAfter: function() { return true; },
    onSlideNext: function() { return true; },
    onSlidePrev: function() { return true; },
    onslider2Resize: function() { return true; }
  };

  $.fn.bxslider = function(options) {

    if (this.length === 0) {
      return this;
    }

    // support multiple elements
    if (this.length > 1) {
      this.each(function() {
        $(this).bxslider(options);
      });
      return this;
    }

    // create a namespace to be used throughout the plugin
    var slider2 = {},
    // set a reference to our slider2 element
    el = this,
    // get the original window dimens (thanks a lot IE)
    windowWidth = $(window).width(),
    windowHeight = $(window).height();

    // Return if slider2 is already initialized
    if ($(el).data('bxslider')) { return; }

    /**
     * ===================================================================================
     * = PRIVATE FUNCTIONS
     * ===================================================================================
     */

    /**
     * Initializes namespace settings to be used throughout plugin
     */
    var init = function() {
      // Return if slider2 is already initialized
      if ($(el).data('bxslider')) { return; }
      // merge user-supplied options with the defaults
      slider2.settings = $.extend({}, defaults, options);
      // parse slideWidth setting
      slider2.settings.slideWidth = parseInt(slider2.settings.slideWidth);
      // store the original children
      slider2.children = el.children(slider2.settings.slideSelector);
      // check if actual number of slides is less than minSlides / maxSlides
      if (slider2.children.length < slider2.settings.minSlides) { slider2.settings.minSlides = slider2.children.length; }
      if (slider2.children.length < slider2.settings.maxSlides) { slider2.settings.maxSlides = slider2.children.length; }
      // if random start, set the startSlide setting to random number
      if (slider2.settings.randomStart) { slider2.settings.startSlide = Math.floor(Math.random() * slider2.children.length); }
      // store active slide information
      slider2.active = { index: slider2.settings.startSlide };
      // store if the slider2 is in carousel mode (displaying / moving multiple slides)
      slider2.carousel = slider2.settings.minSlides > 1 || slider2.settings.maxSlides > 1 ? true : false;
      // if carousel, force preloadImages = 'all'
      if (slider2.carousel) { slider2.settings.preloadImages = 'all'; }
      // calculate the min / max width thresholds based on min / max number of slides
      // used to setup and update carousel slides dimensions
      slider2.minThreshold = (slider2.settings.minSlides * slider2.settings.slideWidth) + ((slider2.settings.minSlides - 1) * slider2.settings.slideMargin);
      slider2.maxThreshold = (slider2.settings.maxSlides * slider2.settings.slideWidth) + ((slider2.settings.maxSlides - 1) * slider2.settings.slideMargin);
      // store the current state of the slider2 (if currently animating, working is true)
      slider2.working = false;
      // initialize the controls object
      slider2.controls = {};
      // initialize an auto interval
      slider2.interval = null;
      // determine which property to use for transitions
      slider2.animProp = slider2.settings.mode === 'vertical' ? 'top' : 'left';
      // determine if hardware acceleration can be used
      slider2.usingCSS = slider2.settings.useCSS && slider2.settings.mode !== 'fade' && (function() {
        // create our test div element
        var div = document.createElement('div'),
        // css transition properties
        props = ['WebkitPerspective', 'MozPerspective', 'OPerspective', 'msPerspective'];
        // test for each property
        for (var i = 0; i < props.length; i++) {
          if (div.style[props[i]] !== undefined) {
            slider2.cssPrefix = props[i].replace('Perspective', '').toLowerCase();
            slider2.animProp = '-' + slider2.cssPrefix + '-transform';
            return true;
          }
        }
        return false;
      }());
      // if vertical mode always make maxSlides and minSlides equal
      if (slider2.settings.mode === 'vertical') { slider2.settings.maxSlides = slider2.settings.minSlides; }
      // save original style data
      el.data('origStyle', el.attr('style'));
      el.children(slider2.settings.slideSelector).each(function() {
        $(this).data('origStyle', $(this).attr('style'));
      });

      // perform all DOM / CSS modifications
      setup();
    };

    /**
     * Performs all DOM and CSS modifications
     */
    var setup = function() {
      var preloadSelector = slider2.children.eq(slider2.settings.startSlide); // set the default preload selector (visible)

      // wrap el in a wrapper
      el.wrap('<div class="' + slider2.settings.wrapperClass + '"><div class="bx-viewport"></div></div>');
      // store a namespace reference to .bx-viewport
      slider2.viewport = el.parent();

      // add aria-live if the setting is enabled and ticker mode is disabled
      if (slider2.settings.ariaLive && !slider2.settings.ticker) {
        slider2.viewport.attr('aria-live', 'polite');
      }
      // add a loading div to display while images are loading
      slider2.loader = $('<div class="bx-loading" />');
      slider2.viewport.prepend(slider2.loader);
      // set el to a massive width, to hold any needed slides
      // also strip any margin and padding from el
      el.css({
        width: slider2.settings.mode === 'horizontal' ? (slider2.children.length * 1000 + 215) + '%' : 'auto',
        position: 'relative'
      });
      // if using CSS, add the easing property
      if (slider2.usingCSS && slider2.settings.easing) {
        el.css('-' + slider2.cssPrefix + '-transition-timing-function', slider2.settings.easing);
      // if not using CSS and no easing value was supplied, use the default JS animation easing (swing)
      } else if (!slider2.settings.easing) {
        slider2.settings.easing = 'swing';
      }
      // make modifications to the viewport (.bx-viewport)
      slider2.viewport.css({
        width: '100%',
        overflow: 'hidden',
        position: 'relative'
      });
      slider2.viewport.parent().css({
        maxWidth: getViewportMaxWidth()
      });
      // apply css to all slider2 children
      slider2.children.css({
        float: slider2.settings.mode === 'horizontal' ? 'left' : 'none',
        listStyle: 'none',
        position: 'relative'
      });
      // apply the calculated width after the float is applied to prevent scrollbar interference
      slider2.children.css('width', getSlideWidth());
      // if slideMargin is supplied, add the css
      if (slider2.settings.mode === 'horizontal' && slider2.settings.slideMargin > 0) { slider2.children.css('marginRight', slider2.settings.slideMargin); }
      if (slider2.settings.mode === 'vertical' && slider2.settings.slideMargin > 0) { slider2.children.css('marginBottom', slider2.settings.slideMargin); }
      // if "fade" mode, add positioning and z-index CSS
      if (slider2.settings.mode === 'fade') {
        slider2.children.css({
          position: 'absolute',
          zIndex: 0,
          display: 'none'
        });
        // prepare the z-index on the showing element
        slider2.children.eq(slider2.settings.startSlide).css({zIndex: slider2.settings.slideZIndex, display: 'block'});
      }
      // create an element to contain all slider2 controls (pager, start / stop, etc)
      slider2.controls.el = $('<div class="bx-controls" />');
      // if captions are requested, add them
      if (slider2.settings.captions) { appendCaptions(); }
      // check if startSlide is last slide
      slider2.active.last = slider2.settings.startSlide === getPagerQty() - 1;
      // if video is true, set up the fitVids plugin
      if (slider2.settings.video) { el.fitVids(); }
      if (slider2.settings.preloadImages === 'all' || slider2.settings.ticker) { preloadSelector = slider2.children; }
      // only check for control addition if not in "ticker" mode
      if (!slider2.settings.ticker) {
        // if controls are requested, add them
        if (slider2.settings.controls) { appendControls(); }
        // if auto is true, and auto controls are requested, add them
        if (slider2.settings.auto && slider2.settings.autoControls) { appendControlsAuto(); }
        // if pager is requested, add it
        if (slider2.settings.pager) { appendPager(); }
        // if any control option is requested, add the controls wrapper
        if (slider2.settings.controls || slider2.settings.autoControls || slider2.settings.pager) { slider2.viewport.after(slider2.controls.el); }
      // if ticker mode, do not allow a pager
      } else {
        slider2.settings.pager = false;
      }
      loadElements(preloadSelector, start);
    };

    var loadElements = function(selector, callback) {
      var total = selector.find('img:not([src=""]), iframe').length,
      count = 0;
      if (total === 0) {
        callback();
        return;
      }
      selector.find('img:not([src=""]), iframe').each(function() {
        $(this).one('load error', function() {
          if (++count === total) { callback(); }
        }).each(function() {
          if (this.complete) { $(this).trigger('load'); }
        });
      });
    };

    /**
     * Start the slider2
     */
    var start = function() {
      // if infinite loop, prepare additional slides
      if (slider2.settings.infiniteLoop && slider2.settings.mode !== 'fade' && !slider2.settings.ticker) {
        var slice    = slider2.settings.mode === 'vertical' ? slider2.settings.minSlides : slider2.settings.maxSlides,
        sliceAppend  = slider2.children.slice(0, slice).clone(true).addClass('bx-clone'),
        slicePrepend = slider2.children.slice(-slice).clone(true).addClass('bx-clone');
        if (slider2.settings.ariaHidden) {
          sliceAppend.attr('aria-hidden', true);
          slicePrepend.attr('aria-hidden', true);
        }
        el.append(sliceAppend).prepend(slicePrepend);
      }
      // remove the loading DOM element
      slider2.loader.remove();
      // set the left / top position of "el"
      setSlidePosition();
      // if "vertical" mode, always use adaptiveHeight to prevent odd behavior
      if (slider2.settings.mode === 'vertical') { slider2.settings.adaptiveHeight = true; }
      // set the viewport height
      slider2.viewport.height(getViewportHeight());
      // make sure everything is positioned just right (same as a window resize)
      el.redrawslider2();
      // onslider2Load callback
      slider2.settings.onslider2Load.call(el, slider2.active.index);
      // slider2 has been fully initialized
      slider2.initialized = true;
      // bind the resize call to the window
      if (slider2.settings.responsive) { $(window).bind('resize', resizeWindow); }
      // if auto is true and has more than 1 page, start the show
      if (slider2.settings.auto && slider2.settings.autoStart && (getPagerQty() > 1 || slider2.settings.autoSlideForOnePage)) { initAuto(); }
      // if ticker is true, start the ticker
      if (slider2.settings.ticker) { initTicker(); }
      // if pager is requested, make the appropriate pager link active
      if (slider2.settings.pager) { updatePagerActive(slider2.settings.startSlide); }
      // check for any updates to the controls (like hideControlOnEnd updates)
      if (slider2.settings.controls) { updateDirectionControls(); }
      // if touchEnabled is true, setup the touch events
      if (slider2.settings.touchEnabled && !slider2.settings.ticker) { initTouch(); }
      // if keyboardEnabled is true, setup the keyboard events
      if (slider2.settings.keyboardEnabled && !slider2.settings.ticker) {
        $(document).keydown(keyPress);
      }
    };

    /**
     * Returns the calculated height of the viewport, used to determine either adaptiveHeight or the maxHeight value
     */
    var getViewportHeight = function() {
      var height = 0;
      // first determine which children (slides) should be used in our height calculation
      var children = $();
      // if mode is not "vertical" and adaptiveHeight is false, include all children
      if (slider2.settings.mode !== 'vertical' && !slider2.settings.adaptiveHeight) {
        children = slider2.children;
      } else {
        // if not carousel, return the single active child
        if (!slider2.carousel) {
          children = slider2.children.eq(slider2.active.index);
        // if carousel, return a slice of children
        } else {
          // get the individual slide index
          var currentIndex = slider2.settings.moveSlides === 1 ? slider2.active.index : slider2.active.index * getMoveBy();
          // add the current slide to the children
          children = slider2.children.eq(currentIndex);
          // cycle through the remaining "showing" slides
          for (i = 1; i <= slider2.settings.maxSlides - 1; i++) {
            // if looped back to the start
            if (currentIndex + i >= slider2.children.length) {
              children = children.add(slider2.children.eq(i - 1));
            } else {
              children = children.add(slider2.children.eq(currentIndex + i));
            }
          }
        }
      }
      // if "vertical" mode, calculate the sum of the heights of the children
      if (slider2.settings.mode === 'vertical') {
        children.each(function(index) {
          height += $(this).outerHeight();
        });
        // add user-supplied margins
        if (slider2.settings.slideMargin > 0) {
          height += slider2.settings.slideMargin * (slider2.settings.minSlides - 1);
        }
      // if not "vertical" mode, calculate the max height of the children
      } else {
        height = Math.max.apply(Math, children.map(function() {
          return $(this).outerHeight(false);
        }).get());
      }

      if (slider2.viewport.css('box-sizing') === 'border-box') {
        height += parseFloat(slider2.viewport.css('padding-top')) + parseFloat(slider2.viewport.css('padding-bottom')) +
              parseFloat(slider2.viewport.css('border-top-width')) + parseFloat(slider2.viewport.css('border-bottom-width'));
      } else if (slider2.viewport.css('box-sizing') === 'padding-box') {
        height += parseFloat(slider2.viewport.css('padding-top')) + parseFloat(slider2.viewport.css('padding-bottom'));
      }

      return height;
    };

    /**
     * Returns the calculated width to be used for the outer wrapper / viewport
     */
    var getViewportMaxWidth = function() {
      var width = '100%';
      if (slider2.settings.slideWidth > 0) {
        if (slider2.settings.mode === 'horizontal') {
          width = (slider2.settings.maxSlides * slider2.settings.slideWidth) + ((slider2.settings.maxSlides - 1) * slider2.settings.slideMargin);
        } else {
          width = slider2.settings.slideWidth;
        }
      }
      return width;
    };

    /**
     * Returns the calculated width to be applied to each slide
     */
    var getSlideWidth = function() {
      var newElWidth = slider2.settings.slideWidth, // start with any user-supplied slide width
      wrapWidth      = slider2.viewport.width();    // get the current viewport width
      // if slide width was not supplied, or is larger than the viewport use the viewport width
      if (slider2.settings.slideWidth === 0 ||
        (slider2.settings.slideWidth > wrapWidth && !slider2.carousel) ||
        slider2.settings.mode === 'vertical') {
        newElWidth = wrapWidth;
      // if carousel, use the thresholds to determine the width
      } else if (slider2.settings.maxSlides > 1 && slider2.settings.mode === 'horizontal') {
        if (wrapWidth > slider2.maxThreshold) {
          return newElWidth;
        } else if (wrapWidth < slider2.minThreshold) {
          newElWidth = (wrapWidth - (slider2.settings.slideMargin * (slider2.settings.minSlides - 1))) / slider2.settings.minSlides;
        } else if (slider2.settings.shrinkItems) {
          newElWidth = Math.floor((wrapWidth + slider2.settings.slideMargin) / (Math.ceil((wrapWidth + slider2.settings.slideMargin) / (newElWidth + slider2.settings.slideMargin))) - slider2.settings.slideMargin);
        }
      }
      return newElWidth;
    };

    /**
     * Returns the number of slides currently visible in the viewport (includes partially visible slides)
     */
    var getNumberSlidesShowing = function() {
      var slidesShowing = 1,
      childWidth = null;
      if (slider2.settings.mode === 'horizontal' && slider2.settings.slideWidth > 0) {
        // if viewport is smaller than minThreshold, return minSlides
        if (slider2.viewport.width() < slider2.minThreshold) {
          slidesShowing = slider2.settings.minSlides;
        // if viewport is larger than maxThreshold, return maxSlides
        } else if (slider2.viewport.width() > slider2.maxThreshold) {
          slidesShowing = slider2.settings.maxSlides;
        // if viewport is between min / max thresholds, divide viewport width by first child width
        } else {
          childWidth = slider2.children.first().width() + slider2.settings.slideMargin;
          slidesShowing = Math.floor((slider2.viewport.width() +
            slider2.settings.slideMargin) / childWidth);
        }
      // if "vertical" mode, slides showing will always be minSlides
      } else if (slider2.settings.mode === 'vertical') {
        slidesShowing = slider2.settings.minSlides;
      }
      return slidesShowing;
    };

    /**
     * Returns the number of pages (one full viewport of slides is one "page")
     */
    var getPagerQty = function() {
      var pagerQty = 0,
      breakPoint = 0,
      counter = 0;
      // if moveSlides is specified by the user
      if (slider2.settings.moveSlides > 0) {
        if (slider2.settings.infiniteLoop) {
          pagerQty = Math.ceil(slider2.children.length / getMoveBy());
        } else {
          // when breakpoint goes above children length, counter is the number of pages
          while (breakPoint < slider2.children.length) {
            ++pagerQty;
            breakPoint = counter + getNumberSlidesShowing();
            counter += slider2.settings.moveSlides <= getNumberSlidesShowing() ? slider2.settings.moveSlides : getNumberSlidesShowing();
          }
        }
      // if moveSlides is 0 (auto) divide children length by sides showing, then round up
      } else {
        pagerQty = Math.ceil(slider2.children.length / getNumberSlidesShowing());
      }
      return pagerQty;
    };

    /**
     * Returns the number of individual slides by which to shift the slider2
     */
    var getMoveBy = function() {
      // if moveSlides was set by the user and moveSlides is less than number of slides showing
      if (slider2.settings.moveSlides > 0 && slider2.settings.moveSlides <= getNumberSlidesShowing()) {
        return slider2.settings.moveSlides;
      }
      // if moveSlides is 0 (auto)
      return getNumberSlidesShowing();
    };

    /**
     * Sets the slider2's (el) left or top position
     */
    var setSlidePosition = function() {
      var position, lastChild, lastShowingIndex;
      // if last slide, not infinite loop, and number of children is larger than specified maxSlides
      if (slider2.children.length > slider2.settings.maxSlides && slider2.active.last && !slider2.settings.infiniteLoop) {
        if (slider2.settings.mode === 'horizontal') {
          // get the last child's position
          lastChild = slider2.children.last();
          position = lastChild.position();
          // set the left position
          setPositionProperty(-(position.left - (slider2.viewport.width() - lastChild.outerWidth())), 'reset', 0);
        } else if (slider2.settings.mode === 'vertical') {
          // get the last showing index's position
          lastShowingIndex = slider2.children.length - slider2.settings.minSlides;
          position = slider2.children.eq(lastShowingIndex).position();
          // set the top position
          setPositionProperty(-position.top, 'reset', 0);
        }
      // if not last slide
      } else {
        // get the position of the first showing slide
        position = slider2.children.eq(slider2.active.index * getMoveBy()).position();
        // check for last slide
        if (slider2.active.index === getPagerQty() - 1) { slider2.active.last = true; }
        // set the respective position
        if (position !== undefined) {
          if (slider2.settings.mode === 'horizontal') { setPositionProperty(-position.left, 'reset', 0); }
          else if (slider2.settings.mode === 'vertical') { setPositionProperty(-position.top, 'reset', 0); }
        }
      }
    };

    /**
     * Sets the el's animating property position (which in turn will sometimes animate el).
     * If using CSS, sets the transform property. If not using CSS, sets the top / left property.
     *
     * @param value (int)
     *  - the animating property's value
     *
     * @param type (string) 'slide', 'reset', 'ticker'
     *  - the type of instance for which the function is being
     *
     * @param duration (int)
     *  - the amount of time (in ms) the transition should occupy
     *
     * @param params (array) optional
     *  - an optional parameter containing any variables that need to be passed in
     */
    var setPositionProperty = function(value, type, duration, params) {
      var animateObj, propValue;
      // use CSS transform
      if (slider2.usingCSS) {
        // determine the translate3d value
        propValue = slider2.settings.mode === 'vertical' ? 'translate3d(0, ' + value + 'px, 0)' : 'translate3d(' + value + 'px, 0, 0)';
        // add the CSS transition-duration
        el.css('-' + slider2.cssPrefix + '-transition-duration', duration / 1000 + 's');
        if (type === 'slide') {
          // set the property value
          el.css(slider2.animProp, propValue);
          if (duration !== 0) {
            // bind a callback method - executes when CSS transition completes
            el.bind('transitionend webkitTransitionEnd oTransitionEnd MSTransitionEnd', function(e) {
              //make sure it's the correct one
              if (!$(e.target).is(el)) { return; }
              // unbind the callback
              el.unbind('transitionend webkitTransitionEnd oTransitionEnd MSTransitionEnd');
              updateAfterSlideTransition();
            });
          } else { //duration = 0
            updateAfterSlideTransition();
          }
        } else if (type === 'reset') {
          el.css(slider2.animProp, propValue);
        } else if (type === 'ticker') {
          // make the transition use 'linear'
          el.css('-' + slider2.cssPrefix + '-transition-timing-function', 'linear');
          el.css(slider2.animProp, propValue);
          if (duration !== 0) {
            el.bind('transitionend webkitTransitionEnd oTransitionEnd MSTransitionEnd', function(e) {
              //make sure it's the correct one
              if (!$(e.target).is(el)) { return; }
              // unbind the callback
              el.unbind('transitionend webkitTransitionEnd oTransitionEnd MSTransitionEnd');
              // reset the position
              setPositionProperty(params.resetValue, 'reset', 0);
              // start the loop again
              tickerLoop();
            });
          } else { //duration = 0
            setPositionProperty(params.resetValue, 'reset', 0);
            tickerLoop();
          }
        }
      // use JS animate
      } else {
        animateObj = {};
        animateObj[slider2.animProp] = value;
        if (type === 'slide') {
          el.animate(animateObj, duration, slider2.settings.easing, function() {
            updateAfterSlideTransition();
          });
        } else if (type === 'reset') {
          el.css(slider2.animProp, value);
        } else if (type === 'ticker') {
          el.animate(animateObj, duration, 'linear', function() {
            setPositionProperty(params.resetValue, 'reset', 0);
            // run the recursive loop after animation
            tickerLoop();
          });
        }
      }
    };

    /**
     * Populates the pager with proper amount of pages
     */
    var populatePager = function() {
      var pagerHtml = '',
      linkContent = '',
      pagerQty = getPagerQty();
      // loop through each pager item
      for (var i = 0; i < pagerQty; i++) {
        linkContent = '';
        // if a buildPager function is supplied, use it to get pager link value, else use index + 1
        if (slider2.settings.buildPager && $.isFunction(slider2.settings.buildPager) || slider2.settings.pagerCustom) {
          linkContent = slider2.settings.buildPager(i);
          slider2.pagerEl.addClass('bx-custom-pager');
        } else {
          linkContent = i + 1;
          slider2.pagerEl.addClass('bx-default-pager');
        }
        // var linkContent = slider2.settings.buildPager && $.isFunction(slider2.settings.buildPager) ? slider2.settings.buildPager(i) : i + 1;
        // add the markup to the string
        pagerHtml += '<div class="bx-pager-item"><a href="" data-slide-index="' + i + '" class="bx-pager-link">' + linkContent + '</a></div>';
      }
      // populate the pager element with pager links
      slider2.pagerEl.html(pagerHtml);
    };

    /**
     * Appends the pager to the controls element
     */
    var appendPager = function() {
      if (!slider2.settings.pagerCustom) {
        // create the pager DOM element
        slider2.pagerEl = $('<div class="bx-pager" />');
        // if a pager selector was supplied, populate it with the pager
        if (slider2.settings.pagerSelector) {
          $(slider2.settings.pagerSelector).html(slider2.pagerEl);
        // if no pager selector was supplied, add it after the wrapper
        } else {
          slider2.controls.el.addClass('bx-has-pager').append(slider2.pagerEl);
        }
        // populate the pager
        populatePager();
      } else {
        slider2.pagerEl = $(slider2.settings.pagerCustom);
      }
      // assign the pager click binding
      slider2.pagerEl.on('click touchend', 'a', clickPagerBind);
    };

    /**
     * Appends prev / next controls to the controls element
     */
    var appendControls = function() {
      slider2.controls.next = $('<a class="bx-next" href="">' + slider2.settings.nextText + '</a>');
      slider2.controls.prev = $('<a class="bx-prev" href="">' + slider2.settings.prevText + '</a>');
      // bind click actions to the controls
      slider2.controls.next.bind('click touchend', clickNextBind);
      slider2.controls.prev.bind('click touchend', clickPrevBind);
      // if nextSelector was supplied, populate it
      if (slider2.settings.nextSelector) {
        $(slider2.settings.nextSelector).append(slider2.controls.next);
      }
      // if prevSelector was supplied, populate it
      if (slider2.settings.prevSelector) {
        $(slider2.settings.prevSelector).append(slider2.controls.prev);
      }
      // if no custom selectors were supplied
      if (!slider2.settings.nextSelector && !slider2.settings.prevSelector) {
        // add the controls to the DOM
        slider2.controls.directionEl = $('<div class="bx-controls-direction" />');
        // add the control elements to the directionEl
        slider2.controls.directionEl.append(slider2.controls.prev).append(slider2.controls.next);
        // slider2.viewport.append(slider2.controls.directionEl);
        slider2.controls.el.addClass('bx-has-controls-direction').append(slider2.controls.directionEl);
      }
    };

    /**
     * Appends start / stop auto controls to the controls element
     */
    var appendControlsAuto = function() {
      slider2.controls.start = $('<div class="bx-controls-auto-item"><a class="bx-start" href="">' + slider2.settings.startText + '</a></div>');
      slider2.controls.stop = $('<div class="bx-controls-auto-item"><a class="bx-stop" href="">' + slider2.settings.stopText + '</a></div>');
      // add the controls to the DOM
      slider2.controls.autoEl = $('<div class="bx-controls-auto" />');
      // bind click actions to the controls
      slider2.controls.autoEl.on('click', '.bx-start', clickStartBind);
      slider2.controls.autoEl.on('click', '.bx-stop', clickStopBind);
      // if autoControlsCombine, insert only the "start" control
      if (slider2.settings.autoControlsCombine) {
        slider2.controls.autoEl.append(slider2.controls.start);
      // if autoControlsCombine is false, insert both controls
      } else {
        slider2.controls.autoEl.append(slider2.controls.start).append(slider2.controls.stop);
      }
      // if auto controls selector was supplied, populate it with the controls
      if (slider2.settings.autoControlsSelector) {
        $(slider2.settings.autoControlsSelector).html(slider2.controls.autoEl);
      // if auto controls selector was not supplied, add it after the wrapper
      } else {
        slider2.controls.el.addClass('bx-has-controls-auto').append(slider2.controls.autoEl);
      }
      // update the auto controls
      updateAutoControls(slider2.settings.autoStart ? 'stop' : 'start');
    };

    /**
     * Appends image captions to the DOM
     */
    var appendCaptions = function() {
      // cycle through each child
      slider2.children.each(function(index) {
        // get the image title attribute
        var title = $(this).find('img:first').attr('title');
        // append the caption
        if (title !== undefined && ('' + title).length) {
          $(this).append('<div class="bx-caption"><span>' + title + '</span></div>');
        }
      });
    };

    /**
     * Click next binding
     *
     * @param e (event)
     *  - DOM event object
     */
    var clickNextBind = function(e) {
      e.preventDefault();
      if (slider2.controls.el.hasClass('disabled')) { return; }
      // if auto show is running, stop it
      if (slider2.settings.auto && slider2.settings.stopAutoOnClick) { el.stopAuto(); }
      el.goToNextSlide();
    };

    /**
     * Click prev binding
     *
     * @param e (event)
     *  - DOM event object
     */
    var clickPrevBind = function(e) {
      e.preventDefault();
      if (slider2.controls.el.hasClass('disabled')) { return; }
      // if auto show is running, stop it
      if (slider2.settings.auto && slider2.settings.stopAutoOnClick) { el.stopAuto(); }
      el.goToPrevSlide();
    };

    /**
     * Click start binding
     *
     * @param e (event)
     *  - DOM event object
     */
    var clickStartBind = function(e) {
      el.startAuto();
      e.preventDefault();
    };

    /**
     * Click stop binding
     *
     * @param e (event)
     *  - DOM event object
     */
    var clickStopBind = function(e) {
      el.stopAuto();
      e.preventDefault();
    };

    /**
     * Click pager binding
     *
     * @param e (event)
     *  - DOM event object
     */
    var clickPagerBind = function(e) {
      var pagerLink, pagerIndex;
      e.preventDefault();
      if (slider2.controls.el.hasClass('disabled')) {
        return;
      }
      // if auto show is running, stop it
      if (slider2.settings.auto  && slider2.settings.stopAutoOnClick) { el.stopAuto(); }
      pagerLink = $(e.currentTarget);
      if (pagerLink.attr('data-slide-index') !== undefined) {
        pagerIndex = parseInt(pagerLink.attr('data-slide-index'));
        // if clicked pager link is not active, continue with the goToSlide call
        if (pagerIndex !== slider2.active.index) { el.goToSlide(pagerIndex); }
      }
    };

    /**
     * Updates the pager links with an active class
     *
     * @param slideIndex (int)
     *  - index of slide to make active
     */
    var updatePagerActive = function(slideIndex) {
      // if "short" pager type
      var len = slider2.children.length; // nb of children
      if (slider2.settings.pagerType === 'short') {
        if (slider2.settings.maxSlides > 1) {
          len = Math.ceil(slider2.children.length / slider2.settings.maxSlides);
        }
        slider2.pagerEl.html((slideIndex + 1) + slider2.settings.pagerShortSeparator + len);
        return;
      }
      // remove all pager active classes
      slider2.pagerEl.find('a').removeClass('active');
      // apply the active class for all pagers
      slider2.pagerEl.each(function(i, el) { $(el).find('a').eq(slideIndex).addClass('active'); });
    };

    /**
     * Performs needed actions after a slide transition
     */
    var updateAfterSlideTransition = function() {
      // if infinite loop is true
      if (slider2.settings.infiniteLoop) {
        var position = '';
        // first slide
        if (slider2.active.index === 0) {
          // set the new position
          position = slider2.children.eq(0).position();
        // carousel, last slide
        } else if (slider2.active.index === getPagerQty() - 1 && slider2.carousel) {
          position = slider2.children.eq((getPagerQty() - 1) * getMoveBy()).position();
        // last slide
        } else if (slider2.active.index === slider2.children.length - 1) {
          position = slider2.children.eq(slider2.children.length - 1).position();
        }
        if (position) {
          if (slider2.settings.mode === 'horizontal') { setPositionProperty(-position.left, 'reset', 0); }
          else if (slider2.settings.mode === 'vertical') { setPositionProperty(-position.top, 'reset', 0); }
        }
      }
      // declare that the transition is complete
      slider2.working = false;
      // onSlideAfter callback
      slider2.settings.onSlideAfter.call(el, slider2.children.eq(slider2.active.index), slider2.oldIndex, slider2.active.index);
    };

    /**
     * Updates the auto controls state (either active, or combined switch)
     *
     * @param state (string) "start", "stop"
     *  - the new state of the auto show
     */
    var updateAutoControls = function(state) {
      // if autoControlsCombine is true, replace the current control with the new state
      if (slider2.settings.autoControlsCombine) {
        slider2.controls.autoEl.html(slider2.controls[state]);
      // if autoControlsCombine is false, apply the "active" class to the appropriate control
      } else {
        slider2.controls.autoEl.find('a').removeClass('active');
        slider2.controls.autoEl.find('a:not(.bx-' + state + ')').addClass('active');
      }
    };

    /**
     * Updates the direction controls (checks if either should be hidden)
     */
    var updateDirectionControls = function() {
      if (getPagerQty() === 1) {
        slider2.controls.prev.addClass('disabled');
        slider2.controls.next.addClass('disabled');
      } else if (!slider2.settings.infiniteLoop && slider2.settings.hideControlOnEnd) {
        // if first slide
        if (slider2.active.index === 0) {
          slider2.controls.prev.addClass('disabled');
          slider2.controls.next.removeClass('disabled');
        // if last slide
        } else if (slider2.active.index === getPagerQty() - 1) {
          slider2.controls.next.addClass('disabled');
          slider2.controls.prev.removeClass('disabled');
        // if any slide in the middle
        } else {
          slider2.controls.prev.removeClass('disabled');
          slider2.controls.next.removeClass('disabled');
        }
      }
    };

    /**
     * Initializes the auto process
     */
    var initAuto = function() {
      // if autoDelay was supplied, launch the auto show using a setTimeout() call
      if (slider2.settings.autoDelay > 0) {
        var timeout = setTimeout(el.startAuto, slider2.settings.autoDelay);
      // if autoDelay was not supplied, start the auto show normally
      } else {
        el.startAuto();

        //add focus and blur events to ensure its running if timeout gets paused
        $(window).focus(function() {
          el.startAuto();
        }).blur(function() {
          el.stopAuto();
        });
      }
      // if autoHover is requested
      if (slider2.settings.autoHover) {
        // on el hover
        el.hover(function() {
          // if the auto show is currently playing (has an active interval)
          if (slider2.interval) {
            // stop the auto show and pass true argument which will prevent control update
            el.stopAuto(true);
            // create a new autoPaused value which will be used by the relative "mouseout" event
            slider2.autoPaused = true;
          }
        }, function() {
          // if the autoPaused value was created be the prior "mouseover" event
          if (slider2.autoPaused) {
            // start the auto show and pass true argument which will prevent control update
            el.startAuto(true);
            // reset the autoPaused value
            slider2.autoPaused = null;
          }
        });
      }
    };

    /**
     * Initializes the ticker process
     */
    var initTicker = function() {
      var startPosition = 0,
      position, transform, value, idx, ratio, property, newSpeed, totalDimens;
      // if autoDirection is "next", append a clone of the entire slider2
      if (slider2.settings.autoDirection === 'next') {
        el.append(slider2.children.clone().addClass('bx-clone'));
      // if autoDirection is "prev", prepend a clone of the entire slider2, and set the left position
      } else {
        el.prepend(slider2.children.clone().addClass('bx-clone'));
        position = slider2.children.first().position();
        startPosition = slider2.settings.mode === 'horizontal' ? -position.left : -position.top;
      }
      setPositionProperty(startPosition, 'reset', 0);
      // do not allow controls in ticker mode
      slider2.settings.pager = false;
      slider2.settings.controls = false;
      slider2.settings.autoControls = false;
      // if autoHover is requested
      if (slider2.settings.tickerHover) {
        if (slider2.usingCSS) {
          idx = slider2.settings.mode === 'horizontal' ? 4 : 5;
          slider2.viewport.hover(function() {
            transform = el.css('-' + slider2.cssPrefix + '-transform');
            value = parseFloat(transform.split(',')[idx]);
            setPositionProperty(value, 'reset', 0);
          }, function() {
            totalDimens = 0;
            slider2.children.each(function(index) {
              totalDimens += slider2.settings.mode === 'horizontal' ? $(this).outerWidth(true) : $(this).outerHeight(true);
            });
            // calculate the speed ratio (used to determine the new speed to finish the paused animation)
            ratio = slider2.settings.speed / totalDimens;
            // determine which property to use
            property = slider2.settings.mode === 'horizontal' ? 'left' : 'top';
            // calculate the new speed
            newSpeed = ratio * (totalDimens - (Math.abs(parseInt(value))));
            tickerLoop(newSpeed);
          });
        } else {
          // on el hover
          slider2.viewport.hover(function() {
            el.stop();
          }, function() {
            // calculate the total width of children (used to calculate the speed ratio)
            totalDimens = 0;
            slider2.children.each(function(index) {
              totalDimens += slider2.settings.mode === 'horizontal' ? $(this).outerWidth(true) : $(this).outerHeight(true);
            });
            // calculate the speed ratio (used to determine the new speed to finish the paused animation)
            ratio = slider2.settings.speed / totalDimens;
            // determine which property to use
            property = slider2.settings.mode === 'horizontal' ? 'left' : 'top';
            // calculate the new speed
            newSpeed = ratio * (totalDimens - (Math.abs(parseInt(el.css(property)))));
            tickerLoop(newSpeed);
          });
        }
      }
      // start the ticker loop
      tickerLoop();
    };

    /**
     * Runs a continuous loop, news ticker-style
     */
    var tickerLoop = function(resumeSpeed) {
      var speed = resumeSpeed ? resumeSpeed : slider2.settings.speed,
      position = {left: 0, top: 0},
      reset = {left: 0, top: 0},
      animateProperty, resetValue, params;

      // if "next" animate left position to last child, then reset left to 0
      if (slider2.settings.autoDirection === 'next') {
        position = el.find('.bx-clone').first().position();
      // if "prev" animate left position to 0, then reset left to first non-clone child
      } else {
        reset = slider2.children.first().position();
      }
      animateProperty = slider2.settings.mode === 'horizontal' ? -position.left : -position.top;
      resetValue = slider2.settings.mode === 'horizontal' ? -reset.left : -reset.top;
      params = {resetValue: resetValue};
      setPositionProperty(animateProperty, 'ticker', speed, params);
    };

    /**
     * Check if el is on screen
     */
    var isOnScreen = function(el) {
      var win = $(window),
      viewport = {
        top: win.scrollTop(),
        left: win.scrollLeft()
      },
      bounds = el.offset();

      viewport.right = viewport.left + win.width();
      viewport.bottom = viewport.top + win.height();
      bounds.right = bounds.left + el.outerWidth();
      bounds.bottom = bounds.top + el.outerHeight();

      return (!(viewport.right < bounds.left || viewport.left > bounds.right || viewport.bottom < bounds.top || viewport.top > bounds.bottom));
    };

    /**
     * Initializes keyboard events
     */
    var keyPress = function(e) {
      var activeElementTag = document.activeElement.tagName.toLowerCase(),
      tagFilters = 'input|textarea',
      p = new RegExp(activeElementTag,['i']),
      result = p.exec(tagFilters);

      if (result == null && isOnScreen(el)) {
        if (e.keyCode === 39) {
          clickNextBind(e);
          return false;
        } else if (e.keyCode === 37) {
          clickPrevBind(e);
          return false;
        }
      }
    };

    /**
     * Initializes touch events
     */
    var initTouch = function() {
      // initialize object to contain all touch values
      slider2.touch = {
        start: {x: 0, y: 0},
        end: {x: 0, y: 0}
      };
      slider2.viewport.bind('touchstart MSPointerDown pointerdown', onTouchStart);

      //for browsers that have implemented pointer events and fire a click after
      //every pointerup regardless of whether pointerup is on same screen location as pointerdown or not
      slider2.viewport.on('click', '.bxslider a', function(e) {
        if (slider2.viewport.hasClass('click-disabled')) {
          e.preventDefault();
          slider2.viewport.removeClass('click-disabled');
        }
      });
    };

    /**
     * Event handler for "touchstart"
     *
     * @param e (event)
     *  - DOM event object
     */
    var onTouchStart = function(e) {
      //disable slider2 controls while user is interacting with slides to avoid slider2 freeze that happens on touch devices when a slide swipe happens immediately after interacting with slider2 controls
      slider2.controls.el.addClass('disabled');

      if (slider2.working) {
        e.preventDefault();
        slider2.controls.el.removeClass('disabled');
      } else {
        // record the original position when touch starts
        slider2.touch.originalPos = el.position();
        var orig = e.originalEvent,
        touchPoints = (typeof orig.changedTouches !== 'undefined') ? orig.changedTouches : [orig];
        // record the starting touch x, y coordinates
        slider2.touch.start.x = touchPoints[0].pageX;
        slider2.touch.start.y = touchPoints[0].pageY;

        if (slider2.viewport.get(0).setPointerCapture) {
          slider2.pointerId = orig.pointerId;
          slider2.viewport.get(0).setPointerCapture(slider2.pointerId);
        }
        // bind a "touchmove" event to the viewport
        slider2.viewport.bind('touchmove MSPointerMove pointermove', onTouchMove);
        // bind a "touchend" event to the viewport
        slider2.viewport.bind('touchend MSPointerUp pointerup', onTouchEnd);
        slider2.viewport.bind('MSPointerCancel pointercancel', onPointerCancel);
      }
    };

    /**
     * Cancel Pointer for Windows Phone
     *
     * @param e (event)
     *  - DOM event object
     */
    var onPointerCancel = function(e) {
      /* onPointerCancel handler is needed to deal with situations when a touchend
      doesn't fire after a touchstart (this happens on windows phones only) */
      setPositionProperty(slider2.touch.originalPos.left, 'reset', 0);

      //remove handlers
      slider2.controls.el.removeClass('disabled');
      slider2.viewport.unbind('MSPointerCancel pointercancel', onPointerCancel);
      slider2.viewport.unbind('touchmove MSPointerMove pointermove', onTouchMove);
      slider2.viewport.unbind('touchend MSPointerUp pointerup', onTouchEnd);
      if (slider2.viewport.get(0).releasePointerCapture) {
        slider2.viewport.get(0).releasePointerCapture(slider2.pointerId);
      }
    };

    /**
     * Event handler for "touchmove"
     *
     * @param e (event)
     *  - DOM event object
     */
    var onTouchMove = function(e) {
      var orig = e.originalEvent,
      touchPoints = (typeof orig.changedTouches !== 'undefined') ? orig.changedTouches : [orig],
      // if scrolling on y axis, do not prevent default
      xMovement = Math.abs(touchPoints[0].pageX - slider2.touch.start.x),
      yMovement = Math.abs(touchPoints[0].pageY - slider2.touch.start.y),
      value = 0,
      change = 0;

      // x axis swipe
      if ((xMovement * 3) > yMovement && slider2.settings.preventDefaultSwipeX) {
        e.preventDefault();
      // y axis swipe
      } else if ((yMovement * 3) > xMovement && slider2.settings.preventDefaultSwipeY) {
        e.preventDefault();
      }
      if (slider2.settings.mode !== 'fade' && slider2.settings.oneToOneTouch) {
        // if horizontal, drag along x axis
        if (slider2.settings.mode === 'horizontal') {
          change = touchPoints[0].pageX - slider2.touch.start.x;
          value = slider2.touch.originalPos.left + change;
        // if vertical, drag along y axis
        } else {
          change = touchPoints[0].pageY - slider2.touch.start.y;
          value = slider2.touch.originalPos.top + change;
        }
        setPositionProperty(value, 'reset', 0);
      }
    };

    /**
     * Event handler for "touchend"
     *
     * @param e (event)
     *  - DOM event object
     */
    var onTouchEnd = function(e) {
      slider2.viewport.unbind('touchmove MSPointerMove pointermove', onTouchMove);
      //enable slider2 controls as soon as user stops interacing with slides
      slider2.controls.el.removeClass('disabled');
      var orig    = e.originalEvent,
      touchPoints = (typeof orig.changedTouches !== 'undefined') ? orig.changedTouches : [orig],
      value       = 0,
      distance    = 0;
      // record end x, y positions
      slider2.touch.end.x = touchPoints[0].pageX;
      slider2.touch.end.y = touchPoints[0].pageY;
      // if fade mode, check if absolute x distance clears the threshold
      if (slider2.settings.mode === 'fade') {
        distance = Math.abs(slider2.touch.start.x - slider2.touch.end.x);
        if (distance >= slider2.settings.swipeThreshold) {
          if (slider2.touch.start.x > slider2.touch.end.x) {
            el.goToNextSlide();
          } else {
            el.goToPrevSlide();
          }
          el.stopAuto();
        }
      // not fade mode
      } else {
        // calculate distance and el's animate property
        if (slider2.settings.mode === 'horizontal') {
          distance = slider2.touch.end.x - slider2.touch.start.x;
          value = slider2.touch.originalPos.left;
        } else {
          distance = slider2.touch.end.y - slider2.touch.start.y;
          value = slider2.touch.originalPos.top;
        }
        // if not infinite loop and first / last slide, do not attempt a slide transition
        if (!slider2.settings.infiniteLoop && ((slider2.active.index === 0 && distance > 0) || (slider2.active.last && distance < 0))) {
          setPositionProperty(value, 'reset', 200);
        } else {
          // check if distance clears threshold
          if (Math.abs(distance) >= slider2.settings.swipeThreshold) {
            if (distance < 0) {
              el.goToNextSlide();
            } else {
              el.goToPrevSlide();
            }
            el.stopAuto();
          } else {
            // el.animate(property, 200);
            setPositionProperty(value, 'reset', 200);
          }
        }
      }
      slider2.viewport.unbind('touchend MSPointerUp pointerup', onTouchEnd);
      if (slider2.viewport.get(0).releasePointerCapture) {
        slider2.viewport.get(0).releasePointerCapture(slider2.pointerId);
      }
    };

    /**
     * Window resize event callback
     */
    var resizeWindow = function(e) {
      // don't do anything if slider2 isn't initialized.
      if (!slider2.initialized) { return; }
      // Delay if slider2 working.
      if (slider2.working) {
        window.setTimeout(resizeWindow, 10);
      } else {
        // get the new window dimens (again, thank you IE)
        var windowWidthNew = $(window).width(),
        windowHeightNew = $(window).height();
        // make sure that it is a true window resize
        // *we must check this because our dinosaur friend IE fires a window resize event when certain DOM elements
        // are resized. Can you just die already?*
        if (windowWidth !== windowWidthNew || windowHeight !== windowHeightNew) {
          // set the new window dimens
          windowWidth = windowWidthNew;
          windowHeight = windowHeightNew;
          // update all dynamic elements
          el.redrawslider2();
          // Call user resize handler
          slider2.settings.onslider2Resize.call(el, slider2.active.index);
        }
      }
    };

    /**
     * Adds an aria-hidden=true attribute to each element
     *
     * @param startVisibleIndex (int)
     *  - the first visible element's index
     */
    var applyAriaHiddenAttributes = function(startVisibleIndex) {
      var numberOfSlidesShowing = getNumberSlidesShowing();
      // only apply attributes if the setting is enabled and not in ticker mode
      if (slider2.settings.ariaHidden && !slider2.settings.ticker) {
        // add aria-hidden=true to all elements
        slider2.children.attr('aria-hidden', 'true');
        // get the visible elements and change to aria-hidden=false
        slider2.children.slice(startVisibleIndex, startVisibleIndex + numberOfSlidesShowing).attr('aria-hidden', 'false');
      }
    };

    /**
     * Returns index according to present page range
     *
     * @param slideOndex (int)
     *  - the desired slide index
     */
    var setSlideIndex = function(slideIndex) {
      if (slideIndex < 0) {
        if (slider2.settings.infiniteLoop) {
          return getPagerQty() - 1;
        }else {
          //we don't go to undefined slides
          return slider2.active.index;
        }
      // if slideIndex is greater than children length, set active index to 0 (this happens during infinite loop)
      } else if (slideIndex >= getPagerQty()) {
        if (slider2.settings.infiniteLoop) {
          return 0;
        } else {
          //we don't move to undefined pages
          return slider2.active.index;
        }
      // set active index to requested slide
      } else {
        return slideIndex;
      }
    };

    /**
     * ===================================================================================
     * = PUBLIC FUNCTIONS
     * ===================================================================================
     */

    /**
     * Performs slide transition to the specified slide
     *
     * @param slideIndex (int)
     *  - the destination slide's index (zero-based)
     *
     * @param direction (string)
     *  - INTERNAL USE ONLY - the direction of travel ("prev" / "next")
     */
    el.goToSlide = function(slideIndex, direction) {
      // onSlideBefore, onSlideNext, onSlidePrev callbacks
      // Allow transition canceling based on returned value
      var performTransition = true,
      moveBy = 0,
      position = {left: 0, top: 0},
      lastChild = null,
      lastShowingIndex, eq, value, requestEl;
      // store the old index
      slider2.oldIndex = slider2.active.index;
      //set new index
      slider2.active.index = setSlideIndex(slideIndex);

      // if plugin is currently in motion, ignore request
      if (slider2.working || slider2.active.index === slider2.oldIndex) { return; }
      // declare that plugin is in motion
      slider2.working = true;

      performTransition = slider2.settings.onSlideBefore.call(el, slider2.children.eq(slider2.active.index), slider2.oldIndex, slider2.active.index);

      // If transitions canceled, reset and return
      if (typeof (performTransition) !== 'undefined' && !performTransition) {
        slider2.active.index = slider2.oldIndex; // restore old index
        slider2.working = false; // is not in motion
        return;
      }

      if (direction === 'next') {
        // Prevent canceling in future functions or lack there-of from negating previous commands to cancel
        if (!slider2.settings.onSlideNext.call(el, slider2.children.eq(slider2.active.index), slider2.oldIndex, slider2.active.index)) {
          performTransition = false;
        }
      } else if (direction === 'prev') {
        // Prevent canceling in future functions or lack there-of from negating previous commands to cancel
        if (!slider2.settings.onSlidePrev.call(el, slider2.children.eq(slider2.active.index), slider2.oldIndex, slider2.active.index)) {
          performTransition = false;
        }
      }

      // check if last slide
      slider2.active.last = slider2.active.index >= getPagerQty() - 1;
      // update the pager with active class
      if (slider2.settings.pager || slider2.settings.pagerCustom) { updatePagerActive(slider2.active.index); }
      // // check for direction control update
      if (slider2.settings.controls) { updateDirectionControls(); }
      // if slider2 is set to mode: "fade"
      if (slider2.settings.mode === 'fade') {
        // if adaptiveHeight is true and next height is different from current height, animate to the new height
        if (slider2.settings.adaptiveHeight && slider2.viewport.height() !== getViewportHeight()) {
          slider2.viewport.animate({height: getViewportHeight()}, slider2.settings.adaptiveHeightSpeed);
        }
        // fade out the visible child and reset its z-index value
        slider2.children.filter(':visible').fadeOut(slider2.settings.speed).css({zIndex: 0});
        // fade in the newly requested slide
        slider2.children.eq(slider2.active.index).css('zIndex', slider2.settings.slideZIndex + 1).fadeIn(slider2.settings.speed, function() {
          $(this).css('zIndex', slider2.settings.slideZIndex);
          updateAfterSlideTransition();
        });
      // slider2 mode is not "fade"
      } else {
        // if adaptiveHeight is true and next height is different from current height, animate to the new height
        if (slider2.settings.adaptiveHeight && slider2.viewport.height() !== getViewportHeight()) {
          slider2.viewport.animate({height: getViewportHeight()}, slider2.settings.adaptiveHeightSpeed);
        }
        // if carousel and not infinite loop
        if (!slider2.settings.infiniteLoop && slider2.carousel && slider2.active.last) {
          if (slider2.settings.mode === 'horizontal') {
            // get the last child position
            lastChild = slider2.children.eq(slider2.children.length - 1);
            position = lastChild.position();
            // calculate the position of the last slide
            moveBy = slider2.viewport.width() - lastChild.outerWidth();
          } else {
            // get last showing index position
            lastShowingIndex = slider2.children.length - slider2.settings.minSlides;
            position = slider2.children.eq(lastShowingIndex).position();
          }
          // horizontal carousel, going previous while on first slide (infiniteLoop mode)
        } else if (slider2.carousel && slider2.active.last && direction === 'prev') {
          // get the last child position
          eq = slider2.settings.moveSlides === 1 ? slider2.settings.maxSlides - getMoveBy() : ((getPagerQty() - 1) * getMoveBy()) - (slider2.children.length - slider2.settings.maxSlides);
          lastChild = el.children('.bx-clone').eq(eq);
          position = lastChild.position();
        // if infinite loop and "Next" is clicked on the last slide
        } else if (direction === 'next' && slider2.active.index === 0) {
          // get the last clone position
          position = el.find('> .bx-clone').eq(slider2.settings.maxSlides).position();
          slider2.active.last = false;
        // normal non-zero requests
        } else if (slideIndex >= 0) {
          //parseInt is applied to allow floats for slides/page
          requestEl = slideIndex * parseInt(getMoveBy());
          position = slider2.children.eq(requestEl).position();
        }

        /* If the position doesn't exist
         * (e.g. if you destroy the slider2 on a next click),
         * it doesn't throw an error.
         */
        if (typeof (position) !== 'undefined') {
          value = slider2.settings.mode === 'horizontal' ? -(position.left - moveBy) : -position.top;
          // plugin values to be animated
          setPositionProperty(value, 'slide', slider2.settings.speed);
        } else {
          slider2.working = false;
        }
      }
      if (slider2.settings.ariaHidden) { applyAriaHiddenAttributes(slider2.active.index * getMoveBy()); }
    };

    /**
     * Transitions to the next slide in the show
     */
    el.goToNextSlide = function() {
      // if infiniteLoop is false and last page is showing, disregard call
      if (!slider2.settings.infiniteLoop && slider2.active.last) { return; }
      var pagerIndex = parseInt(slider2.active.index) + 1;
      el.goToSlide(pagerIndex, 'next');
    };

    /**
     * Transitions to the prev slide in the show
     */
    el.goToPrevSlide = function() {
      // if infiniteLoop is false and last page is showing, disregard call
      if (!slider2.settings.infiniteLoop && slider2.active.index === 0) { return; }
      var pagerIndex = parseInt(slider2.active.index) - 1;
      el.goToSlide(pagerIndex, 'prev');
    };

    /**
     * Starts the auto show
     *
     * @param preventControlUpdate (boolean)
     *  - if true, auto controls state will not be updated
     */
    el.startAuto = function(preventControlUpdate) {
      // if an interval already exists, disregard call
      if (slider2.interval) { return; }
      // create an interval
      slider2.interval = setInterval(function() {
        if (slider2.settings.autoDirection === 'next') {
          el.goToNextSlide();
        } else {
          el.goToPrevSlide();
        }
      }, slider2.settings.pause);
      // if auto controls are displayed and preventControlUpdate is not true
      if (slider2.settings.autoControls && preventControlUpdate !== true) { updateAutoControls('stop'); }
    };

    /**
     * Stops the auto show
     *
     * @param preventControlUpdate (boolean)
     *  - if true, auto controls state will not be updated
     */
    el.stopAuto = function(preventControlUpdate) {
      // if no interval exists, disregard call
      if (!slider2.interval) { return; }
      // clear the interval
      clearInterval(slider2.interval);
      slider2.interval = null;
      // if auto controls are displayed and preventControlUpdate is not true
      if (slider2.settings.autoControls && preventControlUpdate !== true) { updateAutoControls('start'); }
    };

    /**
     * Returns current slide index (zero-based)
     */
    el.getCurrentSlide = function() {
      return slider2.active.index;
    };

    /**
     * Returns current slide element
     */
    el.getCurrentSlideElement = function() {
      return slider2.children.eq(slider2.active.index);
    };

    /**
     * Returns a slide element
     * @param index (int)
     *  - The index (zero-based) of the element you want returned.
     */
    el.getSlideElement = function(index) {
      return slider2.children.eq(index);
    };

    /**
     * Returns number of slides in show
     */
    el.getSlideCount = function() {
      return slider2.children.length;
    };

    /**
     * Return slider2.working variable
     */
    el.isWorking = function() {
      return slider2.working;
    };

    /**
     * Update all dynamic slider2 elements
     */
    el.redrawslider2 = function() {
      // resize all children in ratio to new screen size
      slider2.children.add(el.find('.bx-clone')).outerWidth(getSlideWidth());
      // adjust the height
      slider2.viewport.css('height', getViewportHeight());
      // update the slide position
      if (!slider2.settings.ticker) { setSlidePosition(); }
      // if active.last was true before the screen resize, we want
      // to keep it last no matter what screen size we end on
      if (slider2.active.last) { slider2.active.index = getPagerQty() - 1; }
      // if the active index (page) no longer exists due to the resize, simply set the index as last
      if (slider2.active.index >= getPagerQty()) { slider2.active.last = true; }
      // if a pager is being displayed and a custom pager is not being used, update it
      if (slider2.settings.pager && !slider2.settings.pagerCustom) {
        populatePager();
        updatePagerActive(slider2.active.index);
      }
      if (slider2.settings.ariaHidden) { applyAriaHiddenAttributes(slider2.active.index * getMoveBy()); }
    };

    /**
     * Destroy the current instance of the slider2 (revert everything back to original state)
     */
    el.destroyslider2 = function() {
      // don't do anything if slider2 has already been destroyed
      if (!slider2.initialized) { return; }
      slider2.initialized = false;
      $('.bx-clone', this).remove();
      slider2.children.each(function() {
        if ($(this).data('origStyle') !== undefined) {
          $(this).attr('style', $(this).data('origStyle'));
        } else {
          $(this).removeAttr('style');
        }
      });
      if ($(this).data('origStyle') !== undefined) {
        this.attr('style', $(this).data('origStyle'));
      } else {
        $(this).removeAttr('style');
      }
      $(this).unwrap().unwrap();
      if (slider2.controls.el) { slider2.controls.el.remove(); }
      if (slider2.controls.next) { slider2.controls.next.remove(); }
      if (slider2.controls.prev) { slider2.controls.prev.remove(); }
      if (slider2.pagerEl && slider2.settings.controls && !slider2.settings.pagerCustom) { slider2.pagerEl.remove(); }
      $('.bx-caption', this).remove();
      if (slider2.controls.autoEl) { slider2.controls.autoEl.remove(); }
      clearInterval(slider2.interval);
      if (slider2.settings.responsive) { $(window).unbind('resize', resizeWindow); }
      if (slider2.settings.keyboardEnabled) { $(document).unbind('keydown', keyPress); }
      //remove self reference in data
      $(this).removeData('bxslider');
    };

    /**
     * Reload the slider2 (revert all DOM changes, and re-initialize)
     */
    el.reloadslider2 = function(settings) {
      if (settings !== undefined) { options = settings; }
      el.destroyslider2();
      init();
      //store reference to self in order to access public functions later
      $(el).data('bxslider', this);
    };

    init();

    $(el).data('bxslider', this);

    // returns the current jQuery object
    return this;
  };

})(jQuery);
