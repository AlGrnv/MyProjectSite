$(document).ready(function() {

	// var hash = window.location.hash.substr(1);
	// var href = $('.preview-box a').each(function(){
	// 	var href = $(this).attr('href');
	// 	if(hash==href.substr(0,href.length-5)){
	// 		var toLoad = hash+'.html #content-box';
	// 		$('#content-box').load(toLoad);
	// 	}
	// });

	// $('.preview-box a').click(function(){

	// 	var toLoad = $(this).attr('href')+' #content-box';
	// 	$('#content-box').hide('fast',loadContent);
	// 	$('#load').remove();
	// 	$('[id^=sr_sl_section_].showroom-page').append('<span id="load">LOADING...</span>');

	// 	$('#load').fadeIn('normal');
	// 	window.location.hash = $(this).attr('href').substr(0,$(this).attr('href').length-5);
	// 	function loadContent() {
	// 		$('#content-box').load(toLoad,'',showNewContent())
	// 	}
	// 	function showNewContent() {
	// 		$('#content-box').show('normal',hideLoader());
	// 	}
	// 	function hideLoader() {
	// 		$('#load').fadeOut('normal');
	// 	}
	// 	return false;

	// });


	

	var previewBoxLink =  $('.preview-box [class^=item-]')
	var contentBox = $('#content-box');
	var hash = window.location.hash.substr(1);
	var loader =$('.loader');
	// var href = 
	$(previewBoxLink).each(function(){
		var href = $(this).attr('href');
		if(hash==href.substr(0,href.length-5)){
			var toLoad = hash+'.html #load-content';
			$('#content-box').load(toLoad);
		}
	});
	
	$(previewBoxLink).on('click', function(){

		var toLoad = $(this).attr('href')+' #load-content';
		//$(contentBox).hide('fast',loadContent);
		$(contentBox).hide(100,loadContent);
		$(loader).remove();
		 // var indicLoad = $('#indicatorLoad')
		 // $(indicLoad).append('<span id="load">LOADING...</span>');
		// $(indicLoad).html(<span id="load"></span>);
		// $('#load').fadeIn();
		window.location.hash = $(this).attr('href').substr(0,$(this).attr('href').length-5);
		function loadContent() {
			$(contentBox).load(toLoad,'',showNewContent())
		}
		function showNewContent() {
			//$(contentBox).show('normal');
			$(contentBox).show(100);
		}
		function hideLoader() {
			// $('#load').fadeOut('normal');
			// $('#load').fadeOut();
			$(contentBox).html("<h1>showroom</h1>");

		}
		return false;

	});

	

	// var previewBoxLink = $('.preview-box a');
	// previewBoxLink.click(function() {
  //   $.ajax({
  //     url: $(this).attr('data_target'),
  //     cache: false,
  //     success: function(html){
  //         $('#content-box').html(html);
  //     }
  //   });
  //   return false;
  // });

	var card1 = $('.card1');
	var card2 = $('.card2');
	var card3 = $('.card3');
	var card4 = $('.card4');
	var trCdIt1 = $('.trigger-card-item-1');
	var trCdIt2 = $('.trigger-card-item-2');
	var trCdIt3 = $('.trigger-card-item-3');
	var trCdIt4 = $('.trigger-card-item-4');
	$(card1).on('click', function() {
			$('#content-box #load-content').html("<h1>showroom</h1>");
	});
	$(trCdIt1).on('click', function() {
			$('#content-box #load-content').html("<h1>showroom</h1>");
	});
	$(card2).on('click', function() {
			$('#content-box #load-content').html("<h1>showroom</h1>");
	});
	$(trCdIt2).on('click', function() {
			$('#content-box #load-content').html("<h1>showroom</h1>");
	});
	$(card3).on('click', function() {
			$('#content-box #load-content').html("<h1>showroom</h1>");
	});
	$(trCdIt3).on('click', function() {
			$('#content-box #load-content').html("<h1>showroom</h1>");
	});
	$(card4).on('click', function() {
			$('#content-box #load-content').html("<h1>showroom</h1>");
	});
	$(trCdIt4).on('click', function() {
			$('#content-box #load-content').html("<h1>showroom</h1>");
	});
});
