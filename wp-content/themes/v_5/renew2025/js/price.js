$(function(){
	$('.jsCatSelect').on('change',function(){
		var catVal = $(this).val();
		if(catVal){
			$('.jsBox .priceBox').addClass('hide');
			$('.jsBox .priceBox').each(function(){
				if(catVal == $(this).attr('data-category')){
					$(this).removeClass('hide');
				}
			})
		}else {
			$('.jsBox .priceBox').removeClass('hide');
		}
	});

	$('.jsMenuSelect').on('change',function(){
		var menuVal = $(this).val();
		$('.jsBox .priceBox').removeClass('hide02');
		if(menuVal){
			$('.jsBox .priceBox .subBox').addClass('hide');
			$('.jsBox .priceBox .subBox').each(function(){
				if(menuVal == $(this).attr('data-menu')){
					$(this).removeClass('hide');
				}
			})
			$('.jsBox .priceBox:not(:has(".subBox:visible"))').addClass('hide02')
		}else {
			$('.jsBox .priceBox .subBox').removeClass('hide');
		}
	});
});