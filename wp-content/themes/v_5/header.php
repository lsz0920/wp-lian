<?php
?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<?php if(is_page('sarmagen')):  ?>
		<meta name="keywords" content="サーマジェン,ハイフ,HIFU,ショートスレッド,ボトックスリフト,東京,表参道,リアンクリニック">
	<?php elseif(is_page('volnewmer')):  ?>
		<meta name="keywords" content="ボルニューマ,ハイフ,HIFU,水光注射,ダイヤモンドチップ,東京,表参道,リアンクリニック">
	<?php elseif(is_page('potenza')):  ?>
		<meta name="keywords" content="ポテンツァ,POTENZA,肝斑,ニキビ跡,ダウンタイム,赤ら顔,東京,表参道,リアンクリニック">
	<?php elseif(is_page('hyaluronic')):  ?>
		<meta name="keywords" content="ヒアルロン酸,ヒアルロン酸製剤,リフトアップ,ほうれい線,マリオネットライン,凹み,くぼみ,鼻,リップ,東京,表参道,リアンクリニック">
	<?php else: ?>
		<meta name="keywords" content="リアンクリニック,アートメイク,眉,リップ,アイライン,美容,横浜,">
	<?php endif; ?>
	<meta name="facebook-domain-verification" content="ote52hpw3nzt5e71cj19jpm21xsq1a" />
	<!-- Google Tag Manager -->
	<script defer>
		var isExec = false;
		function gtm(w, d, s, l, i) {
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
		};
		document.addEventListener('DOMContentLoaded', function(){
		window.addEventListener("scroll", function () {
			if (!isExec) {
			isExec = true;
			gtm(window, document, 'script', 'dataLayer', 'GTM-5LC2HXL');
			}
		});
		}, false);
		setTimeout(() => {
		if (!isExec) {
					gtm(window, document, 'script', 'dataLayer', 'GTM-5LC2HXL');
				}
		}, 3500);
	</script>
	<!-- End Google Tag Manager -->
	<!-- fonts
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;700&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Libre+Baskerville&display=swap" rel="stylesheet"> -->
	<link rel="stylesheet" href="https://use.typekit.net/mcr1byg.css">
	<link href="https://use.fontawesome.com/releases/v5.15.3/css/all.css" rel="stylesheet">
	<!-- fonts -->

	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Figtree:ital,wght@0,300..900;1,300..900&family=Noto+Sans+JP:wght@100..900&family=Noto+Serif:ital,wght@0,100..900;1,100..900&family=Roboto:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+SC:wght@100..900&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400..900;1,400..900&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/yakuhanjp@4.1.1/dist/css/yakuhanmp.css">

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css" rel="preload" as="style">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.css" rel="preload" as="style">
	<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" rel="preload" as="style">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.css" />
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style.css?v=1.2.0<?= rand() ?>" rel="preload" as="style" onload="this.onload=null;rel='stylesheet'">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/add.css" rel="preload" as="style" onload="this.onload=null;rel='stylesheet'">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/column.css" rel="preload" as="style" onload="this.onload=null;rel='stylesheet'">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/common.css" rel="preload" as="style" onload="this.onload=null;rel='stylesheet'">
	

	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

	<script>
		(function (d) {
			var config = {
				kitId: 'dyz5psr',
				scriptTimeout: 3000,
				async: true
			},
				h = d.documentElement,
				t = setTimeout(function () {
					h.className = h.className.replace(/\bwf-loading\b/g, "") + " wf-inactive";
				}, config.scriptTimeout),
				tk = d.createElement("script"),
				f = false,
				s = d.getElementsByTagName("script")[0],
				a;
			h.className += " wf-loading";
			tk.src = 'https://use.typekit.net/' + config.kitId + '.js';
			tk.async = true;
			tk.onload = tk.onreadystatechange = function () {
				a = this.readyState;
				if (f || a && a != "complete" && a != "loaded") return;
				f = true;
				clearTimeout(t);
				try {
					Typekit.load(config)
				} catch (e) { }
			};
			s.parentNode.insertBefore(tk, s)
		})(document);
	</script>
<script src="https://cdn.jsdelivr.net/npm/fullcalendar@6.1.15/index.global.min.js"></script>
<script src='https://cdn.jsdelivr.net/npm/@fullcalendar/google-calendar@6.1.5/index.global.min.js'></script>

<!-- <script>

document.addEventListener('DOMContentLoaded', function() {
  const calendarEl = document.getElementById('calendar')
  const calendar = new FullCalendar.Calendar(calendarEl, {
	initialView: 'dayGridMonth'
// 	plugins: [ googleCalendarPlugin ],
//   googleCalendarApiKey: 'AIzaSyBamhFQLcgDuetVfKVCHsv6z2DfUt_9HUM',
//   events: {
//     googleCalendarId: '2a67795deea0395776c5e0dc9dcc2bb10ffb65ea2dfe11dab4489941659919fa@group.calendar.google.com'
//   };
     
  calendar.render();
});
}
</script> -->

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
	<!-- Meta Pixel Code -->
<script>
	!function(f,b,e,v,n,t,s)
	{if(f.fbq)return;n=f.fbq=function(){n.callMethod?
	n.callMethod.apply(n,arguments):n.queue.push(arguments)};
	if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
	n.queue=[];t=b.createElement(e);t.async=!0;
	t.src=v;s=b.getElementsByTagName(e)[0];
	s.parentNode.insertBefore(t,s)}(window, document,'script',
	'https://connect.facebook.net/en_US/fbevents.js');
	fbq('init', '452163966770866');
	fbq('track', 'PageView');
</script>
<noscript><img loading="lazy" height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=452163966770866&ev=PageView&noscript=1" /></noscript>
<!-- End Meta Pixel Code -->
</head>

<body <?php body_class(""); ?> id="body">
	<!-- 遅延ローディング施工箇所 loading lazy -->
	<iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5LC2HXL" height="0" width="0" style="display:none;visibility:hidden" loading="lazy"></iframe></noscript>
	<!-- End Google Tag Manager (noscript) -->
	<?php wp_body_open(); ?>
	<div id="page" class="site l">
		<div id="cover"></div>
		<?php get_template_part('renew2025/inc/header'); ?>
		<div id="content" class="site-content"></div>