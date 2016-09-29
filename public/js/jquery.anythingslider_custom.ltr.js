var pre_img_1=new Image;
pre_img_1.src='images/loader.gif';
var pre_img_2=new Image;
pre_img_2.src='images/slider-dbg.png';



$(window).load(function() {
      initSlider();
});

function initSlider(){
	$('#sliderLoader').fadeOut();
	$('#slider').anythingSlider({
		//easing : "Linear",
		autoPlay            : true,
		delay               : 4000,      // How long between slideshow transitions in AutoPlay mode (in milliseconds)
		resumeDelay         : 5000,     // Resume slideshow after user interaction, only if autoplayLocked is true (in milliseconds).
		hashTags            : false,
		onSlideInit         : function(e, slider) {
			//console.debug(slider.targetPage);
			slider.$nav.attr('class','thumbNav');
			slider.$nav.addClass('nav-color-'+slider.targetPage);
		}, // Callback when slide initiates, before control animation
		animationTime       : 500
	}).anythingSliderFx({
			inFx: {
				'.slide-3 .caption-top' : {
					left: 1,
					duration: 400
				},
				'.slide-5 .caption-top' : {
					left: 0,
					duration: 400
				},
				//'.slide-2 .caption-text' : { left: 1, opacity: 0.8, duration: 400},
				//'.slide-2 .caption-top' : { left: 1, duration: 400},
				'#rebate-img' : {
					right: 0,
					duration: 400
				},
				'.slide-4 .caption-head' : {
					top: 0,
					opacity: 0.8,
					duration: 400
				},
				'.slide-4 .caption-text' : {
					top: 0,
					opacity: 0.8,
					duration: 400
				}
				//'.slide-5 img' : { width: '100%', top: '0%', left: '0%', duration: 400,easing : 'easeOutBounce' } ,
				//'.slide-1 img' : { opacity: 1, duration: 400}
		},
		outFx: {
			'.slide-3 .caption-top, .slide-5 .caption-top'   : {
				left: -750,
				duration: 400
			},
			'.slide-5 .caption-top'   : {
				left: -750,
				duration: 400
			},
			//'.slide-2 .caption-text'   : { left: 750, opacity: 0, duration: 400},
			//'.slide-2 .caption-top'   : { left: 750, duration: 400},
			'#rebate-img'   : {
				right: -600,
				duration: 400
			},
			'.slide-4 .caption-head'   : {
				top: -600,
				opacity: 0,
				duration: 400
			},
			'.slide-4 .caption-text'   : {
				top: 600,
				opacity: 0,
				duration: 400
			}
		//'.slide-5 img'            : { width: '10%', top: '50%', left: '50%', duration: 350 },
		//'.slide-1 img'    : { opacity: 0, duration: 350 }
		}
	});
};
