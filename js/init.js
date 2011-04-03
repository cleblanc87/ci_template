/* SLIDER SETTINGS */
$(function(){
	
	$('.slider').mobilyslider({
		content: '.sliderContent',
		children: 'div',
		transition: 'fade',
		animationSpeed: 500,
		autoplay: true,
		autoplaySpeed: 4600,
		pauseOnHover: true,
		bullets: false,
		arrows: true,
		animationStart: function(){},
		animationComplete: function(){}
	});
	
});
