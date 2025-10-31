$(function(){
	$('#main .detailBox .info10 dt').on('click',function(){
		$(this).toggleClass('on');
		$(this).next('dd').slideToggle();
		return false;
	});

	$('#main .naviLink p').on('click',function(){
		if(window.innerWidth < 897){
			$(this).toggleClass('on');
			$(this).next().stop().slideToggle();
		}
	});
})

$(window).on('load',function(){
	$(window).on('scroll',function(){
		$('.detailBox [data-target]').each(function() {
			if($(window).scrollTop() > $(this).offset().top - $('#gHeader').innerHeight() - 100){
				var ind = $(this).attr('data-target');
				$('#main .naviLink li').eq(ind).addClass('on').siblings().removeClass('on');
			}
		});
	}).trigger('scroll');

	$('.simpleBar').each(function(){
		new SimpleBar($(this)[0], { autoHide: false });
	});

	$('#main .detailBox .info09 .comCaseList').on('init', function(event, slick){
		initLazyload();
	})
	$('#main .detailBox .info09 .comCaseList').slick({
		slidesToShow: 3,
		variableWidth: false,
		slidesToScroll: 1,
		dots: true,
		pauseOnFocus: false,
		pauseOnHover: false,
		autoplay: false,
		arrows: true,
		prevArrow: '#main .detailBox .info09 .comArrow li.prev',
		nextArrow: '#main .detailBox .info09 .comArrow li.next',
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