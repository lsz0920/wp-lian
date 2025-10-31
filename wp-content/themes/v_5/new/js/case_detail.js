$(function(){
	new Swiper("#main .imgBox .photoBox", {
		loop: true,
		effect: 'fade',
		fadeEffect: {
			crossFade: true
		},
		speed: 600,
		slidesPerView: 1,
		spaceBetween: 0,
		navigation: {
			nextEl: ".next",
			prevEl: ".prev",
		},
		pagination: {
			el: ".swiper-pagination",
			clickable: true,
		},
	});
})