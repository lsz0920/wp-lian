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

	var tocHtml = '';
	$('.infoBox h1').each(function(i){
		$(this).parents('.infoBox').attr('data-target',i);
		$(this).parents('.infoBox').attr('id','toc'+i);
		if(i == 0){
			tocHtml = '<li class="on"><a href="#toc'+i+'">'+$(this).text()+'</a></li>';
		}else {
			tocHtml = tocHtml + '<li><a href="#toc'+i+'">'+$(this).text()+'</a></li>';
		}
		$('#main .naviLink .toc').html(tocHtml);
	});

	$('#main .naviLink .toc a').on('click',function() {
		var $target = $(this.hash);
		$target = $target.length && $target || $('[name=' + this.hash.slice(1) +']');
		if ($target.length) {
			var targetOffset = $target.offset().top - $('#gHeader').innerHeight() - 50;
			$('html,body').animate({scrollTop: targetOffset}, 1000);
			return false;
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