$(document).ready(function() {
        var panelOne = $('.panel-form.one').height(),
            panelTwo = $('.panel-form.two')[0].scrollHeight;

			$('.panel-form.two').not('.panel-form.two.active').on('click', function(e) {
				e.preventDefault();
				$('.panel-toggle').addClass('visible');
				$('.panel-form.one').addClass('hidden');
				$('.panel-form.two').addClass('active');
				$('.wrapper-form').animate({
					'height': panelTwo
				},92);
			});

			$('.panel-toggle').on('click', function(e) {
				e.preventDefault();
				$(this).removeClass('visible');
				$('.panel-form.one').removeClass('hidden');
				$('.panel-form.two').removeClass('active');
				$('.wrapper-form').animate({
					'height': panelOne
				},92);
			});
        });
