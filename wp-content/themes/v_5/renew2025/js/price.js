$(function(){
	$('.jsCatSelect').on('change',function(){
		var catVal = $(this).val();
		if(catVal){
			$('.priceBox').addClass('hide');
			$('.priceBox').each(function(){
				if(catVal == $(this).attr('data-category')){
					$(this).removeClass('hide');
				}
			})
		}else {
			$('.priceBox').removeClass('hide');
		}
	});

	$('.jsMenuSelect').on('change',function(){
		var menuVal = $(this).val();
		$('.priceBox').removeClass('hide02');
		if(menuVal){
			$('.priceBox .subBox').addClass('hide');
			$('.priceBox .subBox').each(function(){
				if(menuVal == $(this).attr('data-menu')){
					$(this).removeClass('hide');
				}
			})
			$('.priceBox:not(:has(".subBox:visible"))').addClass('hide02')
		}else {
			$('.priceBox .subBox').removeClass('hide');
		}
	});
});