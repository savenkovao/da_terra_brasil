jQuery(document).ready(function($) {
	
	// brgr menu
		var $brgrMenu = $('#brgr-menu');
		var $headerLineNav = $('.header-line-nav');
		var count = 0;

		$brgrMenu.on('click', activate);

		function activate() {
			count++;
			if (count%2 == 0) {
				$headerLineNav .removeClass('active');
				$brgrMenu.removeClass('active');
				count = 0;
			} else {
				$headerLineNav .addClass('active');
				$brgrMenu.addClass('active');
			}
		}

	// page scroll animation

		$("#header-menu").on("click","a", function (event) {
			
			var id = $(this).attr('href');
			
			if ( id.match(/#\w/g) ){
				event.preventDefault();
				var top = $(id).offset().top;
			}

			$('body,html').animate({scrollTop: top}, 1500);
		});


	// footer year change
		var $yearStr = $('#footer-txt__year');
		var year = new Date().getFullYear();
		$yearStr.html(year);

	// stories block slider

		var $slider = $('#stories-slider');
		var $slInner = $('#stories-slider__inner');
		var $slides = $('.stories-slider-item');
		var $firstSlide = $('.stories-slider-item').first();
		var $arrLeft = $('#stories-slider__arr-l');
		var $arrRight = $('#stories-slider__arr-r');
		var slItemsNumber = $slInner.children().length;
		var slItemMargin = 0;

		$.each($slides, function(index, value){
			if (index % 2 == 0) {
				$(this).addClass('green');
			} else if (index % 2 == 1) {
				$(this).addClass('yellow');
			}
			
		});

		$arrLeft.click(browse);
		$arrRight.click(browse);
		$(window).resize(resize);

		var currentScreenWidth;
		var previousScreenWidth = getScreenWidth();

		function getScreenWidth() {
			currentScreenWidth = $slider.width();
			return currentScreenWidth;
		}

function resize() {
	getScreenWidth();

	if ((previousScreenWidth >= 768 && currentScreenWidth >= 768) || (previousScreenWidth < 768 && currentScreenWidth < 768)) {
		browseSlide();
	} else {
		slItemMargin = 0;
		browse();
	}
	previousScreenWidth = currentScreenWidth;
}



		function browse() {
			var direct = $(this).attr('data-direct');
			var browseCount;

			if ($( window ).width() > 768) {
				if ( slItemsNumber/2 <= 1) {
					browseCount = 0;
				} else {
					if (browseCount%2 == 0) {
						browseCount = Math.floor(slItemsNumber/2)-1;
					} else {
						browseCount = Math.floor(slItemsNumber/2);
					}					
				}
			} else {
				browseCount = slItemsNumber - 1;
			}

			browseSlide(direct, browseCount);
		}

		function browseSlide(direct, browseCount) {
			if (direct == 'left') {				
				if(slItemMargin < 0){
					slItemMargin += currentScreenWidth;
					$firstSlide.css({marginLeft: slItemMargin + 'px'});
				}
			} else if ( direct == 'right'){
				slItemMargin -= currentScreenWidth;
				if (slItemMargin <= 0 && slItemMargin >= -browseCount * currentScreenWidth){
					$firstSlide.css({marginLeft: slItemMargin + 'px'});
				}
			}	else if ( direct == undefined) {
				slItemMargin *= currentScreenWidth/previousScreenWidth;
				$firstSlide.css({marginLeft: slItemMargin + 'px'});
				console.log('else ' + slItemMargin);
			}


			if (slItemMargin <= -browseCount * currentScreenWidth){
				slItemMargin = -browseCount * currentScreenWidth;
				console.log('elsdsdsse');
			}
		}

});