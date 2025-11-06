$(function(){
	setLazyImgH();
	$(window).on('resize',function () {
		setLazyImgH();
	}).trigger('resize');

	$('.phoList.left').infiniteslide({
		'speed': 50, 
		'direction': 'left', 
		'pauseonhover': false, 
		'responsive': true, 
		'clone': 4
	});
	$('.phoList.right').infiniteslide({
		'speed': 50, 
		'direction': 'right', 
		'pauseonhover': false, 
		'responsive': true, 
		'clone': 4
	});

	$(window).on('scroll',function(){
		$('.phoList').each(function(){
			if($(window).scrollTop() > $(this).offset().top - $(window).height() - 200){
				if(!$(this).hasClass('show')){
					$(this).find('img').each(function(){
						$(this).attr('src',$(this).attr('data-original'));
						$(this).addClass('on');
					});
					$(this).addClass('show');
				}
			}
		})

		if($(window).scrollTop() > $('#main .brand .textBox').offset().top){
			$('.mainImg').addClass('hide');
		}else {
			$('.mainImg').removeClass('hide');
		}
	}).trigger('scroll');
});

function setLazyImgH() {
	if (!$('img.lazySlide:visible').length) return;
	$('img.lazySlide:visible').each(function () {
		if ($(this).attr('src') == $(this).data('original')) {
			$(this).width('').height('');
		} else {
			if (!$(this).attr('src')) $(this).attr('src', spaceImg);
			var size = $(this).data('size');
			if (!size) return;
			size = size.split('x');
			var h = $(this).parent().height();
			$(this).height(h).width(size[0] / size[1] * h);
		}
	});
}