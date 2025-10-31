$(function(){
	if(window.innerWidth < 1000){
		$('.fixVideo video').attr('src','/img/lian-reserve/index/movie_sp.mp4');
	}
	$('#main .bigPhoBox .enImg').infiniteslide({
		'speed': 50, 
		'direction': 'left', 
		'pauseonhover': false, 
		'responsive': true, 
		'clone': 4
	});
});
$(window).on('load',function(){
	$('.mainVisual').addClass('active');

	$(window).on('scroll',function(){
		if($(window).scrollTop() > 1){
			$('.fixVideo').addClass('shadowhide');
		}else {
			$('.fixVideo').removeClass('shadowhide');
		}
		if($(window).scrollTop() > 200){
			$('.fixVideo').addClass('on');
		}else {
			$('.fixVideo').removeClass('on');
		}

		if($(window).scrollTop() > $('.mainVisual .visual02 .top .textBox').offset().top - $(window).height() + 200){
			$('.mainVisual .visual02').addClass('active');
		}else {
			$('.mainVisual .visual02').removeClass('active');
		}

		if($(window).scrollTop() > $('.mainVisual .visual02').offset().top + 700){
			$('.mainVisual .visualInfo').addClass('active');
		}else {
			$('.mainVisual .visualInfo').removeClass('active');
		}

		if($(window).scrollTop() > $('#main .mainBox').offset().top - $(window).height()){
			$('.comScroll').addClass('nofix');
		}else {
			$('.comScroll').removeClass('nofix');
		}
	}).trigger('scroll');
})