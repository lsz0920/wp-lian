$(function(){
	$('#main .info dt').on('click',function(){
		if(window.innerWidth < 1000){
			$(this).toggleClass('on');
			$(this).next().slideToggle();
		}
	})

	$('.menuSec .info').each(function(){
		if($(this).find('dl:visible').length == 0){
			$(this).addClass('hide');
		}
	})
});