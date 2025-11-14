$(function(){
	$('.jsCatSelect').on('change',function(){
		var catVal = $(this).val();
		if(catVal){
			$('.jsBox .whiteBg').addClass('hide');
			$('.jsBox .whiteBg').each(function(){
				if(catVal == $(this).attr('data-category')){
					$(this).removeClass('hide');
				}
			})
		}else {
			$('.jsBox .whiteBg').removeClass('hide');
		}
	});

	$('.jsMenuSelect').on('change',function(){
		var menuVal = $(this).val();
		$('.jsBox .whiteBg').removeClass('hide02');
		if(menuVal){
			$('.jsBox .whiteBg .subBox').addClass('hide');
			$('.jsBox .whiteBg .subBox').each(function(){
				if(menuVal == $(this).attr('data-menu')){
					$(this).removeClass('hide');
				}
			})
			$('.jsBox .whiteBg:not(:has(".subBox:visible"))').addClass('hide02')
		}else {
			$('.jsBox .whiteBg .subBox').removeClass('hide');
		}
	});
});