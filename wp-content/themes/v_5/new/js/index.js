$(function(){
	$('.jsSlideBox').each(function(){
		var that = $(this);
		$(this).find('.jsSlideList').on('init', function(event, slick){
			initLazyload();
		})
		$(this).find('.jsSlideList').slick({
			slidesToShow: 4,
			variableWidth: false,
			slidesToScroll: 1,
			dots: false,
			pauseOnFocus: false,
			pauseOnHover: false,
			autoplay: false,
			arrows: true,
			prevArrow: that.find('.comArrow li.prev'),
			nextArrow: that.find('.comArrow li.next'),
			responsive: [
				{
					breakpoint: 1000,
					settings: {
						slidesToShow: 1,
					}
				}
			],
		});
	})

	$(window).on('scroll',function(){
		$('.jsSlideList').each(function(){
			if($(window).scrollTop() > $(this).offset().top - $(window).height()){
				if(!$(this).hasClass('active')){
					$(this).addClass('active');
					$(this).find('img.lazy:visible').each(function(){
						$(this).attr('src',$(this).attr('data-original'));
						$(this).removeAttr('style');
					});
				}
			}
		})

		if($(window).scrollTop() > $(window).height()*2){
			$('.fixPhoto').addClass('hide');
		}else {
			$('.fixPhoto').removeClass('hide');
		}

		if(!$('.menuBox:visible').length){
			if($(window).scrollTop() > $('#main .mainBox').offset().top - 50){
				$('#gHeader').removeClass('whiteShow');
			}else {
				$('#gHeader').addClass('whiteShow');
			}
		}
	}).trigger('scroll');

	$('.newsSec .comNewsLink li a').on('click',function(){
		var ind = $(this).parent().index();
		$(this).parent().addClass('on').siblings().removeClass('on');
		$('#main .newsSec .tabBox').hide();
		$('#main .newsSec .tabBox').eq(ind).show();
		if($('#main .newsSec .tabBox:visible img:not(.show)').length){
			$('#main .newsSec .tabBox:visible img.lazy:visible:not(.show)').lazyload({
				threshold: $(window).height(),
				effect: 'fadeIn',
				effect_speed: 1000,
				failure_limit: 0,
				placeholder: spaceImg,
				load: function () {
					setLazyImg()
					$(this).addClass('show');
				}
			});
		}

		return false;
	});
});

$(window).on('load',function(){
	setTimeout(function(){
		$('.fixPhoto,.mainVisual').addClass('active');
	},200);
	
	new SimpleBar($('.simpleBar')[0], { autoHide: false });
})