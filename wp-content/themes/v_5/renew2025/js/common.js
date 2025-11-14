var spaceImg = 'data:image/gif;base64,R0lGODlhAQABAJEAAAAAMwAAAP///wAAACH5BAEAAAIALAAAAAABAAEAAAICVAEAOw==';
var gheader = $('#gHeader');
if($('#reserveHeader').length){
	gheader = $('#reserveHeader');
}
$(function(){
	$('a[href*=\\#]:not([href=\\#])').on('click',function() {
	if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
			var $target = $(this.hash);
			$target = $target.length && $target || $('[name=' + this.hash.slice(1) +']');
			if ($target.length) {
				if($(this).parents('.menuBox').length){
					setTimeout(function(){
						var targetOffset = $target.offset().top - gheader.innerHeight() - 50;
						$('html,body').animate({scrollTop: targetOffset}, 1000);
					},100);
				}else{
					var targetOffset = $target.offset().top - gheader.innerHeight() - 50;
					$('html,body').animate({scrollTop: targetOffset}, 1000);
				}
				return false;
			}
		}
	});

	if(navigator.userAgent.indexOf('iPad') > 0 || (navigator.userAgent.indexOf('Macintosh') > -1 && 'ontouchend' in document) || (navigator.userAgent.indexOf('Android') > 0 && navigator.userAgent.indexOf('Mobile') ==-1)){
		$('body').addClass('pad');
	}

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

	$('.jsHoverTxt .scrTxt').each(function(){
		$(this).children().addBack().contents().each(function() {
			if (this.nodeType == 3) {
				$(this).replaceWith($(this).text().replace(/(\S)/g, '<span class="scrSpan">$1</span>'));
			}
		});
		
		$(this).find('.scrSpan').each(function(i){
			$(this).css('animation-delay',i*0.025+'s');
		});
	});

	$('.fadeTxt').each(function(){
		$(this).children().addBack().contents().each(function() {
			if (this.nodeType == 3) {
				$(this).replaceWith($(this).text().replace(/(\S)/g, '<span class="fadeSpan">$1</span>'));
			}
		});
		
		$(this).find('.fadeSpan').each(function(i){
			$(this).css('animation-delay',i*0.15+'s');
		});
	});
	if($('.mainImg').length){
		$('.fadeTxt').each(function(){
			$(this).find('.fadeSpan').each(function(i){
				$(this).css('animation-delay',i*0.02+1.5+'s');
			});
		});
	}

	if($('#wpadminbar').length){
		$('#wpadminbar img').addClass('noCheckImg');
	}

	BackgroundCheck.init({
		targets: '.target',
		images: $('img:visible:not(.noCheckImg)')
	});

	$('.fadeAni').each(function(){
		$(this).find('.fade').each(function(i){
			$(this).css('transition-delay',0.1+0.1*i+'s');
		});
	});


	if(window.innerWidth > 999){
		$('.menu').mouseenter(function(){
			$(this).addClass('hover');
			setTimeout(function(){
				$('.menu').removeClass('hover');
			},600);
		}).mouseleave(function(){
			$(this).removeClass('hover');
		});
	}

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
			gheader.addClass('white');

			$('.jsMenuBox .popLazy:not(.visible)').each(function(){
				var src = $(this).data('src');
				$(this).attr('src',src);
				var that = $(this);
				that.removeAttr('style');
				imagesLoaded( $(this), function() {
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
			gheader.removeClass('white');
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
		gheader.removeClass('white');
		state = false;
	});

	if(window.innerWidth > 999){
		$(window).on('resize',function(){
			var winH01 = $(window).height();
			$('.fullH01').css('height','calc('+winH01+'px - 1.5rem)');
			$('.fullH').innerHeight($(window).height());
		}).trigger('resize');
	}else {
		var winH01 = $(window).height(); 
		$('.fullH01').css('height','calc('+winH01+'px - 0.9rem)');
		$('.fullH').innerHeight($(window).height());
	}

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
				imagesLoaded( $(this), function() {
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

	if($('.jsPhotoList').length){
		var swiper = new Swiper(".jsPhotoList", {
			loop: true,
			slidesPerView: 'auto',
			pagination: false,
			navigation: false,
			centeredSlides: true,
			speed: 4000,
			autoplay: {
				delay: 0,
				disableOnInteraction: false,
			}
		});
		swiper.autoplay.stop();
		swiper.slideToLoop(0, 0);
	}

	if($('#gFooter').length){
		var gfooter = $('#gFooter');
	}else {
		var gfooter = $('#reserveFooter');
	}
	$(window).on('scroll',function(){
		if($(window).scrollTop() > $(window).height()){
			$('.fixLink').addClass('show');
			if($(window).scrollTop() > gfooter.offset().top - $(window).height()){
				$('.fixLink').removeClass('show');
			}
		}else{
			$('.fixLink').removeClass('show');
		}

		if($('#gHeader').length){
			if($(window).scrollTop() > gfooter.offset().top - $('#gHeader').innerHeight() - 100){
				$('#gHeader').addClass('hide');
			}else{
				$('#gHeader').removeClass('hide');
			}
		}

		if($('.jsPhotoList').length){
			if($(window).scrollTop() > $('.comAbout .jsPhotoList').offset().top - $(window).height() + 100){
				if(!$('.jsPhotoList').hasClass('active')){
					$('.jsPhotoList').addClass('active');
					setTimeout(function(){
						swiper.autoplay.start();
					},300);
				}
			}
		}

		if($('.comCase .caseList').length){
			if($(window).scrollTop() > $('.comCase .caseList').offset().top - $(window).height()){
				if(!$('.comCase .caseList').hasClass('active')){
					$('.comCase .caseList').addClass('active');
					$('.comCase .caseList li img').each(function(){
						$(this).attr('src',$(this).attr('data-original'));
						$(this).removeAttr('style');
					});
				}
			}
		}

		if($('.jsMainTop').length){
			if($(window).scrollTop() > $('.jsMainTop').offset().top - 50){
				$('#gHeader').removeClass('whiteShow');
			}else {
				$('#gHeader').addClass('whiteShow');
			}
		}

	}).trigger('scroll');

	$('.comCase .caseList a').matchHeight({
		byRow: true,
	});
});

window.addEventListener('pageshow', function (event) {
	if (event.persisted || window.performance && window.performance.navigation.type == 2) {
		$('body').addClass('hideCover');
		if($('#main .menuSec .findList select').length){
			$('#main .menuSec .findList select').val('');
		}
	}
});

$(window).on('load',function(){
	var localLink = window.location+'';
	if(localLink.indexOf("#") != -1 && localLink.slice(-1) != '#'){
		localLink = localLink.slice(localLink.indexOf("#")+1);
		if($('#'+localLink).length){
			setTimeout(function(){
				$('html,body').animate({scrollTop: $('#'+localLink).offset().top - gheader.innerHeight() - 50}, 500);
			},100);
		}
	}

	$('body').addClass('hideCover');
	$('.dli-loading-1').addClass('hide');

	setLazyImgPop();
	setLazyImg();
	initLazyload();

	$(window).resize(function () {
		setTimeout(setLazyImg, 100);
		setTimeout(setLazyImgPop, 100);
	}).trigger('resize');

	$(window).on('scroll',function(){
		fade();
		paraJs();
	}).trigger('scroll');

	if($('.mainImg').length){
		setTimeout(function(){
			$('.mainImg').addClass('active');
		},100);
	}

	if($('.comCase .caseList').length){
		$('.comCase .caseList').on('init', function(event, slick){
			setTimeout(function(){
				initLazyload();
			},100);
		})
		$('.comCase .caseList').slick({
			slidesToShow: 4,
			variableWidth: false,
			slidesToScroll: 1,
			dots: true,
			pauseOnFocus: false,
			pauseOnHover: false,
			autoplay: false,
			arrows: true,
			prevArrow: '.comCase .comArrow li.prev',
			nextArrow: '.comCase .comArrow li.next',
			responsive: [
				{
					breakpoint: 1000,
					settings: {
						slidesToShow: 1,
					}
				}
			],
		});
	}
});

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

function fade() {
	$('.fadeInUp,.animation,.jsZoomOut').each(function(){
		if($(window).scrollTop() > $(this).offset().top - $(window).height() + 100){
			$(this).addClass('visible');
		}
	});

	$('.fadeAni:visible').each(function(){
		if($(window).scrollTop() > $(this).offset().top - window.innerHeight + 100){
			if(!$(this).hasClass('visible')){
				$(this).addClass('active');
			}
			setTimeout(function(){
				$('.fadeAni.active').each(function(i){
					var $this = $(this);
					setTimeout( function () {
						$this.addClass('visible');
						setTimeout(function(){
							$this.removeClass('active');
						},50);
					},i*200 );
				})
			},80);
		}
	});

	$('.bgLazy').each(function(){
		if($(window).scrollTop() > $(this).offset().top - $(window).height() + 100){
			if(!$(this).hasClass('show')){
				$(this).addClass('show');
				$(this).css({'background-image': 'url('+$(this).attr('data-bg')+')'});
			}
		}
	});

	$('.maskFadeV').each(function(){
		if($(window).scrollTop() > $(this).offset().top - $(window).height() + 100){
			if(!$(this).hasClass('visible')){
				$(this).addClass('visible');
				maskfade_vertical($(this));
			}
		}
	});
	$('.maskFadeH').each(function(){
		if($(window).scrollTop() > $(this).offset().top - $(window).height() + 100){
			if(!$(this).hasClass('visible')){
				$(this).addClass('visible');
				maskfade_horizontal($(this));
			}
		}
	});
	if(window.innerWidth > 999){
		$('.maskFadeVPc').each(function(){
			if($(window).scrollTop() > $(this).offset().top - $(window).height() + 100){
				if(!$(this).hasClass('visible')){
					$(this).addClass('visible');
					maskfade_vertical($(this));
				}
			}
		});
		$('.maskFadeHPc').each(function(){
			if($(window).scrollTop() > $(this).offset().top - $(window).height() + 100){
				if(!$(this).hasClass('visible')){
					$(this).addClass('visible');
					maskfade_horizontal($(this));
				}
			}
		});
	}else {
		$('.maskFadeVSp').each(function(){
			if($(window).scrollTop() > $(this).offset().top - $(window).height() + 100){
				if(!$(this).hasClass('visible')){
					$(this).addClass('visible');
					maskfade_vertical($(this));
				}
			}
		});
		$('.maskFadeHSp').each(function(){
			if($(window).scrollTop() > $(this).offset().top - $(window).height() + 100){
				if(!$(this).hasClass('visible')){
					$(this).addClass('visible');
					maskfade_horizontal($(this));
				}
			}
		});
	}
}
function paraJs() {
	$('.jsParallax').each(function () {
		var h = $(window).scrollTop() + $(window).height() - $(this).offset().top;
		var total = $(this).outerHeight() + $(window).height();
		var distance = distance = $(this).find('.parallax').outerHeight() - $(this).outerHeight();
		var y = distance * h / total;
		y = y > distance ? distance : y;
		$(this).find('.parallax').css('transform', 'translate3d(0, ' + y + 'px, 0)');
	});

	$('.parallaxImg').each(function(){
		var h = ($(window).scrollTop() + $(window).height() - $(this).offset().top)*0.21;
		if($(window).scrollTop() > $(this).offset().top - $(window).height()){
			$(this).find('.parallax').css('transform', 'translate3d(0, ' + h + 'px, 0)');
		}
	})
}

function maskfade_vertical(e){
	gsap.fromTo(e,{
		attr: {
			style: "-webkit-mask-image: linear-gradient(to bottom, #000 0%, transparent 0%);\n        mask-image: linear-gradient(to bottom, #000 0%, transparent 0%);will-change: mask-image, -webkit-mask-image"
		}
	},{
		attr: {
			style: "-webkit-mask-image: linear-gradient(to bottom, #000 100%, transparent 200%);\n            mask-image: linear-gradient(to bottom, #000 100%, transparent 200%);will-change: mask-image, -webkit-mask-image"
		},
		duration: 6,
		ease: "power4.out"
	})
}

function maskfade_horizontal(e){
	gsap.fromTo(e,{
		attr: {
			style: "-webkit-mask-image: linear-gradient(to right, #000 0%, transparent 0%);\n        mask-image: linear-gradient(to right, #000 0%, transparent 0%);will-change: mask-image, -webkit-mask-image"
		}
	},{
		attr: {
			style: "-webkit-mask-image: linear-gradient(to right, #000 100%, transparent 200%);\n            mask-image: linear-gradient(to right, #000 100%, transparent 200%);will-change: mask-image, -webkit-mask-image"
		},
		duration: 6,
		ease: "power4.out"
	})
}