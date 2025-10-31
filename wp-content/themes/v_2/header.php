<?php
?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<meta name="keywords" content="リアンクリニック,アートメイク,眉,リップ,アイライン,美容,横浜,">
	<meta name="facebook-domain-verification" content="ote52hpw3nzt5e71cj19jpm21xsq1a" />
	<!-- Google Tag Manager -->
	<script>
		(function(w, d, s, l, i) {
			w[l] = w[l] || [];
			w[l].push({
				'gtm.start': new Date().getTime(),
				event: 'gtm.js'
			});
			var f = d.getElementsByTagName(s)[0],
				j = d.createElement(s),
				dl = l != 'dataLayer' ? '&l=' + l : '';
			j.async = true;
			j.src =
				'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
			f.parentNode.insertBefore(j, f);
		})(window, document, 'script', 'dataLayer', 'GTM-5LC2HXL');
	</script>
	<!-- End Google Tag Manager -->
	<!-- fonts -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;700&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Libre+Baskerville&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Libre+Baskerville&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://use.typekit.net/mcr1byg.css">
	<link href="https://use.fontawesome.com/releases/v5.15.3/css/all.css" rel="stylesheet">
	<!-- fonts -->

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css" rel="preload" as="style">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.css" rel="preload" as="style">
	<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" rel="preload" as="style">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.css" />
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style.min.css?v=1.2.3<?= rand() ?>" rel="preload" as="style" onload="this.onload=null;rel='stylesheet'">

	<!-- <script src="https://code.jquery.com/jquery-3.6.0.min.js" crossorigin="anonymous" defer></script> -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

	<script>
		(function(d) {
			var config = {
					kitId: 'dyz5psr',
					scriptTimeout: 3000,
					async: true
				},
				h = d.documentElement,
				t = setTimeout(function() {
					h.className = h.className.replace(/\bwf-loading\b/g, "") + " wf-inactive";
				}, config.scriptTimeout),
				tk = d.createElement("script"),
				f = false,
				s = d.getElementsByTagName("script")[0],
				a;
			h.className += " wf-loading";
			tk.src = 'https://use.typekit.net/' + config.kitId + '.js';
			tk.async = true;
			tk.onload = tk.onreadystatechange = function() {
				a = this.readyState;
				if (f || a && a != "complete" && a != "loaded") return;
				f = true;
				clearTimeout(t);
				try {
					Typekit.load(config)
				} catch (e) {}
			};
			s.parentNode.insertBefore(tk, s)
		})(document);
	</script>

	<?php wp_head(); ?>
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-247026277-1"></script>
	<script>
		window.dataLayer = window.dataLayer || [];

		function gtag() {
			dataLayer.push(arguments);
		}
		gtag('js', new Date());

		gtag('config', 'UA-247026277-1');
	</script>
</head>

<body <?php body_class(""); ?>>
	<?php wp_body_open(); ?>
	<div id="page" class="site l">
		<header id="masthead" class="site-header l-hd">
			<div class="l-hd-inn d-fl">
				<div class="l-hd-inn-logo">
					<?php if (is_front_page()) : ?>
						<h1>
							<a href="<?php echo esc_html(home_url('/')) ?>" rel="alternate">
								<img src="<?php echo get_template_directory_uri(); ?>/img/toplogo.png" alt="toplogo">
							</a>
						</h1>
					<?php else : ?>
						<div>
							<a href="<?php echo esc_html(home_url('/')) ?>" rel="alternate">
								<img src="<?php echo get_template_directory_uri(); ?>/img/toplogo.png" alt="toplogo">
							</a>
						</div>
					<?php endif; ?>
				</div>
				<div class="l-hd-inn-menu sp">
					<span></span>
					<span></span>
					<span></span>
				</div>
				<nav class="l-hd-inn-nav">
					<ul class="d-fl">
						<li class="hd-menu">
							<a>MENU<small>メニュー</small></a>
							<ul class="submenu-list pc">
								<li class="sub-parent">
									<a>アートメイク</a>
									<span class="sub-toggle"></span>
									<ul class="submenu--list">
										<li><a href="<?php echo esc_html(home_url('/')) ?>menu/artmake">眉<br>アートメイク</a></li>
										<li><a href="<?php echo esc_html(home_url('/')) ?>menu/artmake-lip">リップ<br>アートメイク</a></li>
										<li><a href="<?php echo esc_html(home_url('/')) ?>menu/artmake-eyeline">アイライン<br>アートメイク</a></li>
									</ul>
								</li>
								<li class="sub-parent">
									<a>たるみ</a>
									<span class="sub-toggle"></span>
									<ul class="submenu--list">
										<li><a href="<?php echo esc_html(home_url('/')) ?>menu/hifu">HIFU</a></li>
										<li><a href="<?php echo esc_html(home_url('/')) ?>menu/hifu-linear">HIFUリニア</a></li>
										<li><a href="<?php echo esc_html(home_url('/')) ?>menu/sarmagen">サーマジェン</a></li>
										<li><a href="<?php echo esc_html(home_url('/')) ?>menu/liftup-botox">リフトアップ<br>ボトックス</a></li>
										<li><a href="<?php echo esc_html(home_url('/')) ?>menu/thread">ショートスレッド</a></li>
									</ul>
								</li>
								<li class="sub-parent">
									<a>毛穴</a>
									<span class="sub-toggle"></span>
									<ul class="submenu--list">
										<li><a href="<?php echo esc_html(home_url('/')) ?>menu/needle-rf">サーマニードル</a></li>
										<li><a href="<?php echo esc_html(home_url('/')) ?>menu/peeling">ピーリング</a></li>
										<li><a href="<?php echo esc_html(home_url('/')) ?>menu/photoipl">フォトipl</a></li>
									</ul>
								</li>
								<li class="sub-parent">
									<a>小顔</a>
									<span class="sub-toggle"></span>
									<ul class="submenu--list">
										<li><a href="<?php echo esc_html(home_url('/')) ?>menu/botox">ボトックス</a></li>
										<li><a href="<?php echo esc_html(home_url('/')) ?>menu/hifu-linear">HIFUリニア</a></li>
										<li><a href="<?php echo esc_html(home_url('/')) ?>menu/fat-dissolve">脂肪溶解注射<br>チンセラ</a></li>
									</ul>
								</li>
							</ul>
						</li>
						<li class="sub-parent sp">
							<a><small>たるみ治療</small></a>
							<span class="sub-toggle"></span>
							<ul class="submenu--list">
								<li><a href="<?php echo esc_html(home_url('/')) ?>menu/hifu">- HIFU</a></li>
								<li><a href="<?php echo esc_html(home_url('/')) ?>menu/hifu-linear">- HIFUリニア</a></li>
								<li><a href="<?php echo esc_html(home_url('/')) ?>menu/sarmagen">- サーマジェン</a></li>
								<li><a href="<?php echo esc_html(home_url('/')) ?>menu/liftup-botox">- リフトアップボトックス</a></li>
								<li><a href="<?php echo esc_html(home_url('/')) ?>menu/thread">- ショートスレッド</a></li>
							</ul>
						</li>
						<li class="sub-parent sp">
							<a><small>小顔治療</small></a>
							<span class="sub-toggle"></span>
							<ul class="submenu--list">
								<li><a href="<?php echo esc_html(home_url('/')) ?>menu/botox">- ボトックス</a></li>
								<li><a href="<?php echo esc_html(home_url('/')) ?>menu/hifu-linear">- HIFUリニア</a></li>
								<li><a href="<?php echo esc_html(home_url('/')) ?>menu/fat-dissolve">- 脂肪溶解注射 チンセラ</a></li>
							</ul>
						</li>
						<li class="sub-parent sp">
							<a><small>毛穴・シミ治療</small></a>
							<span class="sub-toggle"></span>
							<ul class="submenu--list">
								<li><a href="<?php echo esc_html(home_url('/')) ?>menu/needle-rf">- サーマニードル</a></li>
								<li><a href="<?php echo esc_html(home_url('/')) ?>menu/peeling">- ピーリング</a></li>
								<li><a href="<?php echo esc_html(home_url('/')) ?>menu/photoipl">- フォトipl</a></li>
							</ul>
						</li>
						<li class="sub-parent sp">
							<a><small>アートメイク</small></a>
							<span class="sub-toggle"></span>
							<ul class="submenu--list">
								<li><a href="<?php echo esc_html(home_url('/')) ?>menu/artmake">- 眉<br>アートメイク</a></li>
								<li><a href="<?php echo esc_html(home_url('/')) ?>menu/artmake-lip">- リップ<br>アートメイク</a></li>
								<li><a href="<?php echo esc_html(home_url('/')) ?>menu/artmake-eyeline">- アイライン<br>アートメイク</a></li>
							</ul>
						</li>
						<li>
							<a href="<?php echo esc_html(home_url('/')) ?>services" rel="alternate">SERVICE<small>サービス</small></a>
						</li>
						<li>
							<a href="<?php echo esc_html(home_url('/')) ?>price" rel="alternate">PRICE<small>料金</small></a>
						</li>
						<li>
							<a href="<?php echo esc_html(home_url('/')) ?>staff" rel="alternate">STAFF<small>スタッフ</small></a>
						</li>
						<li>
							<a href="<?php echo esc_html(home_url('/')) ?>about" rel="alternate">CLINIC<small>クリニックについて</small></a>
						</li>
						<li>
							<a href="<?php echo esc_html(home_url('/')) ?>faq" rel="alternate">FAQ<small>よくある質問</small></a>
						</li>
						<li class="last-child">
							<a href="<?php echo esc_html(home_url('/')) ?>inquiry" rel="alternate">CONTACT<small>お問い合わせ</small></a>
						</li>
						<div class="sp">
							<div class="hd-snsList">
								<a href="https://www.instagram.com/medbeauty.artmake/" rel="alternate" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/iconb-ig.png" alt=""></a>
								<a href="https://twitter.com/yukimaromed" rel="alternate" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/iconb-tw.png" alt=""></a>
								<a href="https://www.youtube.com/channel/UCV6Z_OcNaYcUz2cwjaqlg1w/featured" rel="alternate" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/iconb-yt.png" alt=""></a>
								<a href="https://www.tiktok.com/@medbeautyartmake" rel="alternate" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/iconb-tk.png" alt=""></a>
							</div>
						</div>
					</ul>
				</nav>
			</div>
		</header><!-- #masthead -->
		<div id="content" class="site-content">