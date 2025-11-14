var spaceImg = 'data:image/gif;base64,R0lGODlhAQABAJEAAAAAMwAAAP///wAAACH5BAEAAAIALAAAAAABAAEAAAICVAEAOw==';
$(function(){
	$('a:not([href^="#"],[href^="tel:"],[href^="mailto:"],[target],.noFade)').on('click', function (e) {
		let thisurl = window.location.pathname;
		e.preventDefault();
		var url = $(this).attr('href');
		hash = url.replace(thisurl,'').charAt(0);
		if (url !== '' && hash != '#') {
			$('body').removeClass('hideCover');
			setTimeout(function () {
				window.location = url;
			}, 400);
		}
		return false;
	});


	if(navigator.userAgent.indexOf('iPad') > 0 || (navigator.userAgent.indexOf('Macintosh') > -1 && 'ontouchend' in document) || (navigator.userAgent.indexOf('Android') > 0 && navigator.userAgent.indexOf('Mobile') ==-1)){
		$('body').addClass('pad');
	}

	if($('#wpadminbar').length){
		$('#wpadminbar img').addClass('noCheckImg');
	}

	BackgroundCheck.init({
		targets: '.target',
		images: $('img:visible:not(.noCheckImg)')
	});


	var state = false;
	var scrollpos;
	var statePop = false;
	var scrollPop;
	$('.menu').on('click', function(){
		if(state == false) {
			scrollpos = $(window).scrollTop();
			$('body').addClass('fixed').css({'top': -scrollpos}); 
			$('.jsMenuBox').fadeIn();
			$('.menu').addClass('on nolink');
			$('.menu').removeClass('hover');
			$('.menu').addClass('active');
			if($('.menuBg').length){
				$('.menuBg').fadeIn();
			}
			setTimeout(function(){
				$('.menu').removeClass('active nolink');
			},600);
			$('#gHeader').addClass('white');

			$('.jsMenuBox .popLazy:not(.visible)').each(function(){
				var src = $(this).data('src');
				$(this).attr('src',src);
				var that = $(this);
				that.removeAttr('style');
				imagesLoaded( $(this)[0], function() {
					setTimeout(function(){
						that.addClass('visible');
					},100);
				});
			});

			state = true;
		} else {
			$('body').removeClass('fixed').css({'top': 0});
			window.scrollTo( 0 , scrollpos ); 
			$('.jsMenuBox').fadeOut();
			$('.menu').removeClass('hover');
			$('.menu').addClass('active nolink');
			setTimeout(function(){
				$('.menu').removeClass('on');
			},400);
			setTimeout(function(){
				$('.menu').removeClass('active nolink');
			},600);
			if($('.menuBg').length){
				$('.menuBg').fadeOut();
			}
			$('#gHeader').removeClass('white');
			state = false;
		}
		return false;
	});

	$('.menuBox .comMenuBg .menuNaviList a').on('click',function(){
		$('body').removeClass('fixed').css({'top': 0});
		window.scrollTo( 0 , scrollpos ); 
		$('.jsMenuBox').fadeOut();
		$('.menu').removeClass('hover');
		$('.menu').addClass('active nolink');
		setTimeout(function(){
			$('.menu').removeClass('on');
		},400);
		setTimeout(function(){
			$('.menu').removeClass('active nolink');
		},600);
		if($('.menuBg').length){
			$('.menuBg').fadeOut();
		}
		$('#gHeader').removeClass('white');
		state = false;
	});

	if($('.pop').length){
		$('.popLink').on('click',function(){
			var pop = $(this).data('pop');
			$('.pop[data-pop="'+pop+'"]').addClass('show');
			if(statePop == false && state == false) {
				scrollPop = $(window).scrollTop(); 
				$('body').addClass('fixed').css({'top': -scrollPop});
			}

			$('.pop .popLazy:not(.visible)').each(function(){
				var src = $(this).data('src');
				$(this).attr('src',src);
				var that = $(this);
				that.removeAttr('style');
				imagesLoaded( $(this)[0], function() {
					setTimeout(function(){
						that.addClass('visible');
					},100);
				});
			});
			
			statePop = true;
			return false;
		});

		$('.popClose,.popBg').on('click',function(){
			$('.pop').removeClass('show');
			if(state == false){
				$('body').removeClass('fixed').css({'top': 0});
				window.scrollTo( 0 , scrollPop );
			}
			statePop = false;
			return false;
		});
	}

	if(window.innerWidth > 999){
		$('#gHeader .language,.comLanguage').hover(function(){
			if(!$(this).hasClass('on')){
				$(this).addClass("on");
				$(this).find('ul').stop().fadeToggle();
			}
		},function(){
			if($(this).hasClass('on')){
				$(this).removeClass("on");
				$(this).find('ul').stop().fadeToggle();
			}
		});
	}else {
		$('#gHeader .language,.comLanguage').on('click',function(){
			$(this).toggleClass("on");
			$(this).find('ul').stop().fadeToggle();
		});

		$(document).on('click', function(evt){
			if($('#gHeader .language ul:visible').length){
				if( !$(evt.target).closest($("#gHeader .language")).length ){
					$('#gHeader .language ul').fadeOut();
					$('#gHeader .language').removeClass('on');
				}
			}
			if($('.comLanguage ul:visible').length){
				if( !$(evt.target).closest($(".comLanguage")).length ){
					$('.comLanguage ul').fadeOut();
					$('.comLanguage').removeClass('on');
				}
			}
		});
	}

	$(window).on('scroll',function(){
		if($(window).scrollTop() > $(window).height()){
			$('.fixLink').addClass('show');
			if($(window).scrollTop() > $('#gFooter').offset().top - $(window).height()){
				$('.fixLink').removeClass('show');
			}
		}else{
			$('.fixLink').removeClass('show');
		}
	}).trigger('scroll');
});

$(window).on('load',function(){
	$('body').addClass('hideCover');
	$('.dli-loading-1').addClass('hide');

	setLazyImgPop();
	setLazyImg();
	initLazyload();

	$(window).resize(function () {
		setTimeout(setLazyImg, 100);
		setTimeout(setLazyImgPop, 100);
	}).trigger('resize');
})

function initLazyload() {
	if (!$('img.lazy:visible').length) return;
	$('img.lazy:visible').lazyload({
		threshold: $(window).height(),
		effect: 'fadeIn',
		effect_speed: 1000,
		failure_limit: 0,
		placeholder: spaceImg,
		load: function () {
			setLazyImg();
			BackgroundCheck.refresh();
		}
	});
}

function setLazyImg() {
	if (!$('img.lazy:visible').length) return;
	$('img.lazy:visible').each(function () {
		if ($(this).attr('src') == $(this).data('original')) {
			$(this).width('').height('');
		} else {
			if (!$(this).attr('src')) $(this).attr('src', spaceImg);
			var size = $(this).data('size');
			if (!size) return;
			size = size.split('x');
			var w = $(this).parent().width();
			$(this).width(w).height(size[1] / size[0] * w);
		}
	});	
}

function setLazyImgPop() {
	if (!$('img.popLazy').length) return;
	$('img.popLazy').each(function () {
		if ($(this).attr('src') == $(this).data('src')) {
			$(this).width('').height('');
		} else {
			if (!$(this).attr('src')) $(this).attr('src', spaceImg);
			var size = $(this).data('size');
			if (!size) return;
			size = size.split('x');
			var w = $(this).parent().width();
			$(this).width(w).height(size[1] / size[0] * w);
		}
	});
}