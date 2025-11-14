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

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css" rel="preload" as="style">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.css" rel="preload" as="style">
	<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" rel="preload" as="style">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.css" />
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style.css?v=1.2.0<?= rand() ?>" rel="preload" as="style" onload="this.onload=null;rel='stylesheet'">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/add.css" rel="preload" as="style" onload="this.onload=null;rel='stylesheet'">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/column.css" rel="preload" as="style" onload="this.onload=null;rel='stylesheet'">
	<?php if(is_page('price')): ?>
		<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/price.css" rel="preload" as="style" onload="this.onload=null;rel='stylesheet'">
	<?php endif; ?>

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
		<header id="masthead" class="site-header l-hd">
			<div class="l-hd-inn d-fl">
				<div class="l-hd-inn-logo">
					<?php if (is_front_page()): ?>
						<h1>
							<a href="<?php echo esc_html(home_url('/')) ?>" rel="alternate">
								<img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/toplogo.png" alt="LIAN clinic">
							</a>
						</h1>
					<?php else: ?>
						<div>
							<a href="<?php echo esc_html(home_url('/')) ?>" rel="alternate">
								<img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/toplogo.png" alt="LIAN clinic">
							</a>
						</div>
					<?php endif; ?>
				</div>
				<div class="l-hd-inn-menu sp">
					<span></span>
					<span></span>
					<span></span>
				</div>
				<?php $locale = get_locale();
				if ('en_US' == $locale  ) { ?>
					<nav class="l-hd-inn-nav">
						<ul class="d-fl">
							<li class="hd-menu pc">
								<a>MENU<small>メニュー</small></a>
								<ul class="submenu-list pc">
									<li class="sub-parent">
										<a>Permanent<br>Make up
										<span class="sub-toggle"></span></a>
										<ul class="submenu--list">
											<li><a href="<?php echo esc_html(home_url('/')) ?>artmake">Brow</a></li>
											<li><a href="<?php echo esc_html(home_url('/')) ?>artmake-lip">Lip</a></li>
											<li><a href="<?php echo esc_html(home_url('/')) ?>artmake-eyeline">Eyeliner</a></li>
										</ul>
									</li>
									<li class="sub-parent">
										<a>Facial sags
										<span class="sub-toggle"></span></a>
										<ul class="submenu--list">
											<li><a href="<?php echo esc_html(home_url('/')) ?>hifu">HIFU</a></li>
											<li><a href="<?php echo esc_html(home_url('/')) ?>sarmagen">Thermagen</a></li>
											<li><a href="<?php echo esc_html(home_url('/')) ?>liftup-botox">Lift up Botox</a></li>
											<li><a href="<?php echo esc_html(home_url('/')) ?>thread">Shopping Thread</a></li>
											<li><a href="<?php echo esc_html(home_url('/')) ?>hyaluronic">Hyaluronic Acid</a></li>
										</ul>
									</li>
									<li class="sub-parent">
										<a>Pore and Blemish<br>treatment
										<span class="sub-toggle"></span></a>
										<ul class="submenu--list">
											<li><a href="<?php echo esc_html(home_url('/')) ?>potenza">Needle RF<br>(POTENZA)</a></li>
											<li><a href="<?php echo esc_html(home_url('/')) ?>peeling">Medical<br>peeling</a></li>
											<li><a href="<?php echo esc_html(home_url('/')) ?>photoipl">IPL</a></li>
										</ul>
									</li>
									<li class="sub-parent">
										<a>Facial Line<br>treatment
										<span class="sub-toggle"></span></a>
										<ul class="submenu--list">
											<li><a href="<?php echo esc_html(home_url('/')) ?>botox">BOTOX</a></li>
											<li><a href="<?php echo esc_html(home_url('/')) ?>fat-dissolve">Lipolysis<br>injection</a></li>
											<li><a href="<?php echo esc_html(home_url('/')) ?>hifu-linear">Linear HIFU</a></li>
										</ul>
									</li>
									<!--<li>
										<a href="<?php echo esc_html(home_url('/')) ?>exosomes">exosomes</a>
									</li>-->
								</ul>
							</li>
							<li class="sp">
								<a><small>Menu</small></a>
							</li>
							<li class="sub-parent sp">
								<a><small>Facial sags</small>
								<span class="sub-toggle"></span></a>
								<ul class="submenu--list">
									<li><a href="<?php echo esc_html(home_url('/')) ?>hifu">- HIFU</a></li>
									<li><a href="<?php echo esc_html(home_url('/')) ?>sarmagen">- Thermagen</a></li>
									<li><a href="<?php echo esc_html(home_url('/')) ?>liftup-botox">- Lift up Botox</a></li>
									<li><a href="<?php echo esc_html(home_url('/')) ?>thread">- Shopping Thread</a></li>
									<li><a href="<?php echo esc_html(home_url('/')) ?>hyaluronic">- Hyaluronic Acid</a></li>
								</ul>
							</li>
							<li class="sub-parent sp">
								<a><small>Facial Line treatment</small>
								<span class="sub-toggle"></span></a>
								<ul class="submenu--list">
									<li><a href="<?php echo esc_html(home_url('/')) ?>botox">- BOTOX</a></li>
									<li><a href="<?php echo esc_html(home_url('/')) ?>fat-dissolve">- Lipolysis injection</a></li>
									<li><a href="<?php echo esc_html(home_url('/')) ?>hifu-linear">- Linear HIFU</a></li>
								</ul>
							</li>
							<li class="sub-parent sp">
								<a><small>Pores and Blemishes treatment</small>
								<span class="sub-toggle"></span></a>
								<ul class="submenu--list">
									<li><a href="<?php echo esc_html(home_url('/')) ?>potenza">- Needle RF (POTENZA)</a>
									</li>
									<li><a href="<?php echo esc_html(home_url('/')) ?>peeling">- Medical peeling</a></li>
									<li><a href="<?php echo esc_html(home_url('/')) ?>photoipl">- IPL</a></li>
								</ul>
							</li>
							<li class="sub-parent sp">
								<a><small>Permanent Make up</small>
								<span class="sub-toggle"></span></a>
								<ul class="submenu--list">
									<li><a href="<?php echo esc_html(home_url('/')) ?>artmake">- Brow</a></li>
									<li><a href="<?php echo esc_html(home_url('/')) ?>artmake-lip">- Lip</a>
									</li>
									<li><a href="<?php echo esc_html(home_url('/')) ?>artmake-eyeline">- Eyeliner</a></li>
								</ul>
							</li>
							<!--<li class="sp">
								<a href="<?php echo esc_html(home_url('/')) ?>exosomes">exosomes</a>
							</li>-->
							<li class="pc">
								<a href="<?php echo esc_html(home_url('/')) ?>services"
									rel="alternate">SERVICE<small>サービス</small></a>
							</li>
							<li class="pc">
								<a href="<?php echo esc_html(home_url('/')) ?>price"
									rel="alternate">PRICE<small>料金</small></a>
							</li>
							<li class="pc">
								<a href="<?php echo esc_html(home_url('/')) ?>staff"
									rel="alternate">STAFF<small>スタッフ</small></a>
							</li>
							<li class="pc">
								<a href="<?php echo esc_html(home_url('/')) ?>about"
									rel="alternate">CLINIC<small>クリニックについて</small></a>
							</li>
							<li class="pc">
								<a href="<?php echo esc_html(home_url('/')) ?>access" rel="alternate">ACCESS<small>アクセス</small></a>
							</li>
							<li class="pc">
								<a href="<?php echo esc_html(home_url('/')) ?>case" rel="alternate">CASE
									PHOTO<small>症例写真</small></a>
							</li>
							<li class="pc">
								<a href="<?php echo esc_html(home_url('/')) ?>faq"
									rel="alternate">FAQ<small>よくある質問</small></a>
							</li>
							<li class="pc">
								<a href="<?php echo esc_html(home_url('/')) ?>recruit/" rel="alternate">RECRUIT<small>採用情報</small></a>
							</li>
							<li class="pc">
								<a href="<?php echo esc_html(home_url('/')) ?>reserve" rel="alternate">RESERVE<small>ご予約</small></a>
							</li>
							<li class="last-child pc">
								<a href="<?php echo esc_html(home_url('/')) ?>inquiry"
									rel="alternate">CONTACT<small>お問い合わせ</small></a>
							</li>
							<li class="sp">
								<a href="<?php echo esc_html(home_url('/')) ?>services"
									rel="alternate"><small>Service</small></a>
							</li>
							<li class="sp">
								<a href="<?php echo esc_html(home_url('/')) ?>price"
									rel="alternate"><small>Price</small></a>
							</li>
							<li class="sp">
								<a href="<?php echo esc_html(home_url('/')) ?>staff"
									rel="alternate"><small>Staff</small></a>
							</li>
							<li class="sp">
								<a href="<?php echo esc_html(home_url('/')) ?>about"
									rel="alternate"><small>About our clinic</small></a>
							</li>
							<li class="sp">
								<a href="<?php echo esc_html(home_url('/')) ?>access" rel="alternate"><small>Access</small></a>
							</li>
							<li class="sp">
								<a href="<?php echo esc_html(home_url('/')) ?>case" rel="alternate"><small>Case photo</small></a>
							</li>
							<li class="sp">
								<a href="<?php echo esc_html(home_url('/')) ?>faq"
									rel="alternate"><small>FAQ</small></a>
							</li>
							<li class="sp">
								<a href="<?php echo esc_html(home_url('/')) ?>reserve"
									rel="alternate"><small>RESERVE</small></a>
							</li>
							<li class="last-child sp">
								<a href="<?php echo esc_html(home_url('/')) ?>inquiry"
									rel="alternate"><small>Contact</small></a>
							</li>
						
							<div class="sp">
								<div class="hd-snsList">
									<a href="https://www.instagram.com/medbeauty.artmake/" rel="alternate"
										target="_blank"><img loading="lazy"
											src="<?php echo get_template_directory_uri(); ?>/img/iconb-ig.png" alt=""></a>
									<a href="https://twitter.com/yukimaromed" rel="alternate" target="_blank"><img loading="lazy"
											src="<?php echo get_template_directory_uri(); ?>/img/iconb-tw.png" alt=""></a>
									<a href="https://www.youtube.com/channel/UCV6Z_OcNaYcUz2cwjaqlg1w/featured"
										rel="alternate" target="_blank"><img loading="lazy"
											src="<?php echo get_template_directory_uri(); ?>/img/iconb-yt.png" alt=""></a>
									<a href="https://www.tiktok.com/@medbeautyartmake" rel="alternate" target="_blank"><img loading="lazy"
											src="<?php echo get_template_directory_uri(); ?>/img/iconb-tk.png" alt=""></a>
								</div>
							</div>
						</ul>
					</nav>
				<?php } else { ?>
					<nav class="l-hd-inn-nav">
						<ul class="d-fl">
							<li class="hd-menu">
								<a>MENU<small>メニュー</small></a>
								<ul class="submenu-list pc">
									<li class="sub-parent">
										<a>アートメイク
										<span class="sub-toggle"></span></a>
										<ul class="submenu--list">
											<li><a href="<?php echo esc_html(home_url('/')) ?>services/artmake/">眉<br>アートメイク</a>
											</li>
											<li><a
													href="<?php echo esc_html(home_url('/')) ?>services/artmake-lip/">リップ<br>アートメイク</a>
											</li>
											<li><a
													href="<?php echo esc_html(home_url('/')) ?>services/artmake-eyeline/">アイライン<br>アートメイク</a>
											</li>
										</ul>
									</li>
									<li class="sub-parent">
										<a>たるみ
										<span class="sub-toggle"></span></a>
										<ul class="submenu--list">
											<li><a href="<?php echo esc_html(home_url('/')) ?>services/hifu/">HIFU</a></li>
											<li><a href="<?php echo esc_html(home_url('/')) ?>services/collagen-hifu/">コラーゲンハイフ</a></li>
											<li><a href="<?php echo esc_html(home_url('/')) ?>services/sarmagen/">サーマジェン</a></li>
											<li><a
													href="<?php echo esc_html(home_url('/')) ?>services/liftup-botox/">リフトアップ<br>ボトックス</a>
											</li>
											<li><a href="<?php echo esc_html(home_url('/')) ?>services/thread-lift/">糸リフト</a></li>
											<li><a href="<?php echo esc_html(home_url('/')) ?>services/thread/">ショートスレッド</a></li>
											<li><a
													href="<?php echo esc_html(home_url('/')) ?>services/hyaluronic/">ヒアルロン酸注入</a>
											</li>
											<li><a href="<?php echo esc_html(home_url('/')) ?>services/volnewmer/">ボルニューマ</a></li>
											<li><a href="<?php echo esc_html(home_url('/')) ?>services/plasmapen/">プラズマペン</a></li>
											<li><a href="<?php echo esc_html(home_url('/')) ?>services/xerf/">XERF</a></li>
										</ul>
									</li>
									<li class="sub-parent">
										<a>毛穴
										<span class="sub-toggle"></span></a>
										<ul class="submenu--list">
											<li><a href="<?php echo esc_html(home_url('/')) ?>services/potenza/">ポテンツァ</a></li>
											<li><a href="<?php echo esc_html(home_url('/')) ?>services/peeling/">ピーリング</a></li>
											<li><a href="<?php echo esc_html(home_url('/')) ?>services/photoipl/">フォトipl</a></li>
											<li><a href="<?php echo esc_html(home_url('/')) ?>services/poreless-botox/">ポアレスボトックス</a></li>
										</ul>
									</li>
									<li class="sub-parent">
										<a>小顔
										<span class="sub-toggle"></span></a>
										<ul class="submenu--list">
											<li><a href="<?php echo esc_html(home_url('/')) ?>services/botox/">ボトックス</a></li>
											<li><a
													href="<?php echo esc_html(home_url('/')) ?>services/fat-dissolve/">脂肪溶解注射<br>カベリン</a>
											</li>
											<li><a href="<?php echo esc_html(home_url('/')) ?>hifu-linear/">HIFUリニア</a></li>
										</ul>
									</li>
									
									<!--<li>
										<a href="<?php echo esc_html(home_url('/')) ?>exosomes/">エクソソーム</a>
									</li>-->
									
								</ul>
							</li>
							<li class="sub-parent sp">
								<a><small>たるみ治療</small>
								<span class="sub-toggle"></span></a>
								<ul class="submenu--list">
									<li><a href="<?php echo esc_html(home_url('/')) ?>services/hifu/">- HIFU</a></li>
									<li><a href="<?php echo esc_html(home_url('/')) ?>services/collagen-hifu/">- コラーゲンハイフ</a></li>
									<li><a href="<?php echo esc_html(home_url('/')) ?>services/sarmagen/">- サーマジェン</a></li>
									<li><a href="<?php echo esc_html(home_url('/')) ?>services/liftup-botox/">- リフトアップボトックス</a></li>
									<li><a href="<?php echo esc_html(home_url('/')) ?>services/thread-lift/">- 糸リフト</a></li>
									<li><a href="<?php echo esc_html(home_url('/')) ?>services/thread/">- ショートスレッド</a></li>
									<li><a href="<?php echo esc_html(home_url('/')) ?>services/hyaluronic/">- ヒアルロン酸注入</a></li>
									<li><a href="<?php echo esc_html(home_url('/')) ?>services/volnewmer/">- ボルニューマ</a></li>
									<li><a href="<?php echo esc_html(home_url('/')) ?>services/plasmapen/">- プラズマペン</a></li>
									<li><a href="<?php echo esc_html(home_url('/')) ?>services/xerf/">- XERF</a></li>
								</ul>
							</li>
							<li class="sub-parent sp">
								<a><small>小顔治療</small>
								<span class="sub-toggle"></span></a>
								<ul class="submenu--list">
									<li><a href="<?php echo esc_html(home_url('/')) ?>services/botox/">- ボトックス</a></li>
									<li><a href="<?php echo esc_html(home_url('/')) ?>services/fat-dissolve/">- 脂肪溶解注射 カベリン</a></li>
									<li><a href="<?php echo esc_html(home_url('/')) ?>hifu-linear/">- HIFUリニア</a></li>
								</ul>
							</li>
							<li class="sub-parent sp">
								<a><small>毛穴・シミ治療</small>
								<span class="sub-toggle"></span></a>
								<ul class="submenu--list">
									<li><a href="<?php echo esc_html(home_url('/')) ?>services/potenza/">- ポテンツァ</a></li>
									<li><a href="<?php echo esc_html(home_url('/')) ?>services/peeling/">- ピーリング</a></li>
									<li><a href="<?php echo esc_html(home_url('/')) ?>services/photoipl/">- フォトipl</a></li>
									<li><a href="<?php echo esc_html(home_url('/')) ?>services/poreless-botox/">- ポアレスボトックス</a></li>
								</ul>
							</li>
							<li class="sub-parent sp">
								<a><small>アートメイク</small>
								<span class="sub-toggle"></span></a>
								<ul class="submenu--list">
									<li><a href="<?php echo esc_html(home_url('/')) ?>services/artmake/">- 眉<br>アートメイク</a></li>
									<li><a href="<?php echo esc_html(home_url('/')) ?>services/artmake-lip/">- リップ<br>アートメイク</a></li>
									<li><a href="<?php echo esc_html(home_url('/')) ?>services/artmake-eyeline/">- アイライン<br>アートメイク</a></li>
								</ul>
							</li>
							<!--<li class="sp">
								<a href="<?php echo esc_html(home_url('/')) ?>exosomes/">エクソソーム</a>
							</li>-->
							<li>
								<a href="<?php echo esc_html(home_url('/')) ?>services/" rel="alternate">SERVICE<small>サービス</small></a>
							</li>
							<li>
								<a href="<?php echo esc_html(home_url('/')) ?>price/" rel="alternate">PRICE<small>料金</small></a>
							</li>
							<li>
								<a href="<?php echo esc_html(home_url('/')) ?>staff/" rel="alternate">STAFF<small>スタッフ</small></a>
							</li>
							<li>
								<a href="<?php echo esc_html(home_url('/')) ?>about/" rel="alternate">CLINIC<small>クリニックについて</small></a>
							</li><li>
								<a href="<?php echo esc_html(home_url('/')) ?>access/" rel="alternate">ACCESS<small>アクセス</small></a>
							</li>
							<li>
								<a href="<?php echo esc_html(home_url('/')) ?>case/" rel="alternate">CASE PHOTO<small>症例写真</small></a>
							</li>
							<li>
								<a href="<?php echo esc_html(home_url('/')) ?>faq/" rel="alternate">FAQ<small>よくある質問</small></a>
							</li>
							<li>
								<a href="<?php echo esc_html(home_url('/')) ?>recruit/" rel="alternate">RECRUIT<small>採用情報</small></a>
							</li>
							<li>
								<a href="<?php echo esc_html(home_url('/')) ?>column/" rel="alternate">COLUMN<small>コラム</small></a>
							</li>
							<li>
								<a href="<?php echo esc_html(home_url('/')) ?>reserve/" rel="alternate">RESERVE<small>ご予約</small></a>
							</li>
							<li class="last-child">
								<a href="<?php echo esc_html(home_url('/')) ?>inquiry/" rel="alternate">CONTACT<small>お問い合わせ</small></a>
							</li>
							
							<div class="sp">
								<div class="hd-snsList">
									<a href="https://www.instagram.com/medbeauty.artmake/" rel="alternate" target="_blank"><img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/iconb-ig.png" alt="アイコン:Instagram"></a>
									<a href="https://twitter.com/yukimaromed" rel="alternate" target="_blank"><img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/iconb-tw.png" alt="アイコン:Twitter"></a>
									<a href="https://www.youtube.com/channel/UCV6Z_OcNaYcUz2cwjaqlg1w/featured" rel="alternate" target="_blank"><img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/iconb-yt.png" alt="アイコン:Youtube"></a>
									<a href="https://www.tiktok.com/@medbeautyartmake" rel="alternate" target="_blank"><img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/iconb-tk.png" alt="アイコン:Tiktok"></a>
								</div>
								<div class="reserve-banner sp">
                                    <a href="/lian-reserve/" rel="alternate" target="_blank"><img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/reserve-banner/lian_reserve_sp.jpg" alt="LIAN RESERVE"></a>
                                </div>
                                <li class="reserve-banner ipad">
                                    <a href="/lian-reserve/" rel="alternate" target="_blank"><img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/reserve-banner/lian_reserve.jpg" alt="LIAN RESERVE"></a>
                                </li>
							</div>
						</ul>
					</nav>
    			<?php } ?>
				<div class="l-hd-inn-language">
					<?php echo do_shortcode( '[bogo]' ); ?>
				</div>
			</div>

			<div class="caution__belt">
				<p>
					【休診日変更と料金改定のお知らせ】
					　
					いつもリアンクリニックをご利用いただきありがとうございます。
					このたび、2025年9月1日より休診日を変更させていただくこととなりました。
					　
					■ 8/31（日）以前
					　休診日：月曜（第2・第4）・水曜
					　
					■ 9/1（月）以降
					　休診日：水曜・日曜（第1・第3）
					　※受付時間（9:00〜18:00）に変更はございません。
					　
					また、2025年10月1日より一部メニューの料金を改定いたします。
					　詳細はお知らせ記事をご覧ください。
					　<a href="https://lianclinic.net/6379/">料金改定についてのお知らせはこちら</a>
					　
					ご不便をおかけいたしますが、今後ともより良いサービスの提供に努めてまいりますので、何卒ご理解のほどよろしくお願い申し上げます。
				</p>
			</div>

		</header><!-- #masthead -->
		<div id="content" class="site-content"></div>