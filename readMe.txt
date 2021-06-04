
	#content-box.content-box-active
	.pagination-active
	
	  var fullPage = $('#fullpage');
	  var wrapSlider = $('.wrap-slider');
	  var btn1 =$('.btn1');
	  var btn2 =$('.btn2');
	  var panelFormTwo = $('.panel-form.two:before');
	  var usernamePanelTwo = $('#username-panel-two');
	  var btnb1 =$('.btn1');
	  var btnb2 =$('.btn2');
	  var modalComment = $('.js-click-modal-comment');
	  var modalFeedback = $('.js-click-modal-feedback');
	  var closeModalComment = $('.js-close-modal-comment');
	  var closeModalFeedback = $('.js-close-modal-feedback');	
	  var trigger = $('.trigger-card-home');
	  var card1 = $('.card1');
	  var card2 = $('.card2');
	  var card3 = $('.card3');
	  var card4 = $('.card4');
	  var trCdIt1 = $('.trigger-card-item-1');
	  var trCdIt2 = $('.trigger-card-item-2');
	  var trCdIt3 = $('.trigger-card-item-3');
	  var trCdIt4 = $('.trigger-card-item-4');
	  var contentBox = $('#content-box');
	  var pagination = $('.pagination');
	  var trCdBtn = $('.trigger-card-btn'); 
  	  var trCdLink = $("a.trigger-card-link"); 
	  var footerComment =  $('#footer_comment');
	  var footerFeedback = $('#footer_feedback');
	  var modalBottom =$('#modal-bottom');
	  var modalRight = $('.modal-right');
      var modalLeft =  $('.modal-left');
      var slSlControl00 = $('#slick-slide-control00');
      var slSlControl01 = $('#slick-slide-control01');
	  var slSlControl02 = $('#slick-slide-control02');
	  var slSlControl03 = $('#slick-slide-control03');
	  var slSlControl04 = $('#slick-slide-control04');
      var btnTopBox = $('#btn-top-box');
      
      
 -----------------------------------------------------------     
 $(document).ready(function(){

  var fullPage = $('#fullpage');
  var wrapSlider = $('.wrap-slider');
  var btn1 =$('.btn1');
  var btn2 =$('.btn2');
  var panelFormTwo = $('.panel-form.two:before');
  var usernamePanelTwo = $('#username-panel-two');
  var btnb1 =$('.btn1');
  var btnb2 =$('.btn2');
  var modalComment = $('.js-click-modal-comment');
  var modalFeedback = $('.js-click-modal-feedback');
  var closeModalComment = $('.js-close-modal-comment');
  var closeModalFeedback = $('.js-close-modal-feedback');	
  var trigger = $('.trigger-card-home');
  var card1 = $('.card1');
  var card2 = $('.card2');
  var card3 = $('.card3');
  var card4 = $('.card4');
  var trCdIt1 = $('.trigger-card-item-1');
  var trCdIt2 = $('.trigger-card-item-2');
  var trCdIt3 = $('.trigger-card-item-3');
  var trCdIt4 = $('.trigger-card-item-4');
  var contentBox = $('#content-box');
  var pagination = $('.pagination');
  var trCdBtn = $('.trigger-card-btn'); 
  var trCdLink = $("a.trigger-card-link"); 
  var footerComment =  $('#footer_comment');
  var footerFeedback = $('#footer_feedback');
  var modalBottom =$('#modal-bottom');
  var modalRight = $('.modal-right');
  var modalLeft =  $('.modal-left');
  var slSlControl00 = $('#slick-slide-control00');
  var slSlControl01 = $('#slick-slide-control01');
  var slSlControl02 = $('#slick-slide-control02');
  var slSlControl03 = $('#slick-slide-control03');
  var slSlControl04 = $('#slick-slide-control04');
  var btnTopBox = $('#btn-top-box');





  $('#fullpage').fullpage({
    sectionSelector: '.section',
    slideSelector: '.slide',
    navigation: true,
    controlArrows: false,
    slidesNavigation: true,
    autoScrolling:true,
    scrollHorizontally: true,
    anchors:['firstPage', 'secondPage'],
    menu:'#menu',
    navigation:true,
    showActiveTooltip:true,
    fitToSection:true,
    lazyLoad: true,
    mode: 'fade',
  });
  
  // fullPage.fullpage({
  //   sectionSelector: '.section',
  //   slideSelector: '.slide',
  //   navigation: true,
  //   controlArrows: false,
  //   slidesNavigation: true,
  //   autoScrolling:true,
  //   scrollHorizontally: true,
  //   anchors:['firstPage', 'secondPage'],
  //   menu:'#menu',
  //   navigation:true,
  //   showActiveTooltip:true,
  //   fitToSection:true,
  //   lazyLoad: true,
  //   mode: 'fade',
  // });
  //methods
  $.fn.fullpage.setAllowScrolling(false);

  
  $('.wrap-slider').slick({
    dots: true,
    arrows:false,
    infinite: true,
    speed: 500,
    fade: true,
    cssEase: 'linear',
    slidesToShow: 1
  });display: none;
  


  // wrapSlider.slick({
  //   dots: true,
  //   arrows:false,
  //   infinite: true,
  //   speed: 500,
  //   fade: true,
  //   cssEase: 'linear',
  //   slidesToShow: 1
  // });display: none;
  


  // $('.btn2').on('click',function(){
  //   $('.sf-input').focus();
  // });


  // $('.btn3').on('click',function(){
  //     
  // });$('#username-panel-one').focus();
  // });


  $('.panel-form.two:before').on('click',function(){
      $('#username-panel-two').focus();
  });
  


  $('.js-click-modal-comment').on('click',function(){
      $('#footer_comment').focus();
  });

  $('.js-click-modal-feedback').on('click',function(){
      $('#footer_feedback').focus();
  });
  


  $('.js-click-modal-comment').on('click',function(){
    $('#modal-bottom').addClass('modal-open');
    $('.modal-right').addClass('modal-hidden');
  });

  // modalComment.on('click',function(){
  //   footerComment.focus();
  //   modalBottom.addClass('modal-open');
  //   modalRight.addClass('modal-hidden');
  // });
 

  $('.js-close-modal-comment').on('click',function(){
    $('#modal-bottom').removeClass('modal-open');
    $('.modal-right').removeClass('modal-hidden');
  });
  // closeModalComment.on('click',function(){
  //   modalBottom.removeClass('modal-open');
  //   modalRight.removeClass('modal-hidden');
  // });


  $('.js-click-modal-feedback').on('click', function(){
    $('#modal-bottom').addClass('modal-open');
    $('.modal-left').addClass('modal-hidden');
  });
  // modalFeedback.on('click', function(){
  //   footerFeedback.focus();
  //   modalBottom.addClass('modal-open');
  //   modalLeft.addClass('modal-hidden');
  // });
  

  $('.js-close-modal-feedback').on('click',function(){
    $('#modal-bottom').removeClass('modal-open');
    $('.modal-left').removeClass('modal-hidden');
  });
  // closeModalFeedback.on('click',function(){
  //   modalBottom.removeClass('modal-open');
  //   modalLeft.removeClass('modal-hidden');
  // });


  // $('.btn1').on('click',function(){
  //   $('.sf-input').focus();
  // });
  btn1.on('click',function(){
    $('.sf-input').focus();
  });


  // $('.btn2').on('click',function(){
  //   $('#username-panel-one').focus();
  // }); 


  // $('.panel-form.two:before').on('click',function(){
  //   $('#username-panel-two').focus();
  // });
  panelFormTwo.on('click',function(){ 
    usernamePanelTwo.focus();
  });



  // $('.btnb1').on('click',function(){
  //   $('#footer_comment').focus();
  // });
  btnb1.on('click',function(){
    footerComment.focus();
  });

  
  // $('.btnb2').on('click',function(){
  //   $('#footer_feedback').focus();
  // });
  btnb2.on('click',function(){
    footerFeedback.focus();
  });


  

  $('.trigger-card-home').on('click', function() {
    $('#slick-slide-control00').click();
  });
  // trigger.on('click', function() {
  //   slSlControl00.click();

  // });



  $('.card1').on('click', function() {
    $('#slick-slide-control01').click();

  });
  $('.trigger-card-item-1').on('click', function() {
    $('#slick-slide-control01').click();

  });
  // card1.on('click', function() {
  //   slSlControl01.click();
  //   contentBox.css("display","inline-block");
  //   pagination.css("display","inline-block");
  // }); 
  // trCdIt1.on('click', function() {
  //   slSlControl01.click();
  //   contentBox.css("display","inline-block");
  //   pagination.css("display","inline-block");  
  // });

  $('.card2').on('click', function() {
    $('#slick-slide-control02').click();

  });
  $('.trigger-card-item-2').on('click', function() {
    $('#slick-slide-control02').click();

  });
  // card2.on('click', function() {
  //   slSlControl02.click();
  //   contentBox.css("display","inline-block");
  //   pagination.css("display","inline-block");
  // });
  // trCdIt2.on('click', function() {
  //   slSlControl02.click();
  //   contentBox.css("display","inline-block");
  //   pagination.css("display","inline-block");
  // });



  $('.card3').on('click', function() {
    $('#slick-slide-control03').click();

  });
  $('.trigger-card-item-3').on('click', function() {
    $('#slick-slide-control03').click();

  });
  // card3.on('click', function() {
  //   slSlControl03.click();
  //   contentBox.css("display","inline-block");
  //   pagination.css("display","inline-block");
  // });
  // trCdIt3.on('click', function() {
  //   slSlControl03.click();
  //   contentBox.css("display","inline-block");
  //   pagination.css("display","inline-block");
  // });

  $('.card4').on('click', function() {
    $('#slick-slide-control04').click();

  });
  $('.trigger-card-item-4').on('click', function() {
    $('#slick-slide-control04').click();

  });
  // card4.on('click', function() {
  //   slSlControl04.click();
  //   contentBox.css("display","inline-block");
  //   pagination.css("display","inline-block");
  // });
  
  // trCdIt4.on('click', function() {
  //   slSlControl04.click();
  //   contentBox.css("display","inline-block");
  //   pagination.css("display","inline-block");

  // });

  


  
  // $('.trigger-card-item-1').on('click', function() {
  //   $('#slick-slide-control01').click();
  // });
  // $('.trigger-card-item-2').on('click', function() {
  //   $('#slick-slide-control02').click();
  // });
  // $('.trigger-card-item-3').on('click', function() {
  //   $('#slick-slide-control03').click();
  // });
  // $('.trigger-card-item-4').on('click', function() {
  //   $('#slick-slide-control04').click();
  // });



  $('.trigger-card-btn').on('click', function() {
    $('#btn-top-box').click();
  });

  // trCdBtn.on('click', function() {
  //   btnTopBox.click();
  // });


  $("a.trigger-card-link").click(function(){
    var _href = $(this).attr("href");
    $("html, body").animate({scrollTop: $(_href).offset().top+"px"});
    return false;
  });

  // trCdLink.on('click',function(){
  //   var _href = $(this).attr("href");
  //   $("html, body").animate({scrollTop: $(_href).offset().top+"px"});
  //   return false;
  // });

});

      
      
      
      
