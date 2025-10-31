<?php

/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package v_1
 */

get_header();
?>

<div id="primary" class="content-area">
	<main id="main" class="site-main sl">
		<div class="breadcrumbs">
			<div class="breadcrumbs-inn">
				<?php
				if (function_exists('yoast_breadcrumb')) {
					yoast_breadcrumb('<div id="breadcrumbs">', '</div>');
				}
				?>
			</div>
		</div>
		<div class="sl-pp">
			<div class="sl-pp-inn services">
				<div class="sl-pp-inn-ttl subpage-ttl services-ttl">
					<h1 class="under-line subpage-ttl__inner">Services</h1>
				</div>
				<div class="sl-pp-inn-content">
					<div class="services-inner">
						<h2 class="services-cat-ttl">Category</h2>
						<p class="services-cat-subttl">カテゴリー</p>
						<div class="services-contents">
							<ul class="d-fl services-btns">
								<li><a href="#art-make">アートメイク</a></li>
								<li><a href="#sagging">たるみ治療</a></li>
								<li><a href="#pores">毛穴治療</a></li>
								<li><a href="#small-face">小顔治療</a></li>
								<li><a href="#exosomes">エクソソーム</a></li>
							</ul>
							<div class="services-articles">
								<div id="art-make" class="services-articles-cat">
									<h3 class="services-articles-ttl">アートメイク</h3>
									<ul class="services-articles-inner">
										<li class="services-articles-item">
											<a href="<?= home_url() ?>/artmake">
												<div class="services-articles-thumbnail"><img
														src="<?php echo get_template_directory_uri(); ?>/img/services/services-01.jpg"
														alt="" /></div>
												<h4 class="services-articles-item-ttl">眉アートメイク</h4>
											</a>
										</li>
										<li class="services-articles-item">
											<a href="<?= home_url() ?>/artmake-lip">
												<div class="services-articles-thumbnail"><img
														src="<?php echo get_template_directory_uri(); ?>/img/services/services-02.jpg"
														alt="" /></div>
												<h4 class="services-articles-item-ttl">リップアートメイク</h4>
											</a>
										</li>
										<li class="services-articles-item">
											<a href="<?= home_url() ?>/artmake-eyeline">
												<div class="services-articles-thumbnail"><img
														src="<?php echo get_template_directory_uri(); ?>/img/services/services-03.jpg"
														alt="" /></div>
												<h4 class="services-articles-item-ttl">アイラインアートメイク</h4>
											</a>
										</li>
									</ul>
								</div>
								<div id="sagging" class="services-articles-cat">
									<h3 class="services-articles-ttl">たるみ治療</h3>
									<ul class="services-articles-inner">
										<li class="services-articles-item">
											<a href="<?= home_url() ?>/hifu">
												<div class="services-articles-thumbnail"><img
														src="<?php echo get_template_directory_uri(); ?>/img/services/services-04.jpg"
														alt="" /></div>
												<h4 class="services-articles-item-ttl">デザイニングハイフ</h4>
											</a>
										</li>
										<li class="services-articles-item">
											<a href="<?= home_url() ?>/sarmagen">
												<div class="services-articles-thumbnail"><img
														src="<?php echo get_template_directory_uri(); ?>/img/services/services-06.jpg"
														alt="" /></div>
												<h4 class="services-articles-item-ttl">サーマジェン</h4>
											</a>
										</li>
										<li class="services-articles-item">
											<a href="<?= home_url() ?>/liftup-botox">
												<div class="services-articles-thumbnail"><img
														src="<?php echo get_template_directory_uri(); ?>/img/services/services-07.jpg"
														alt="" /></div>
												<h4 class="services-articles-item-ttl">リフトアップボトックス</h4>
											</a>
										</li>
										<li class="services-articles-item">
											<a href="<?= home_url() ?>/thread">
												<div class="services-articles-thumbnail"><img
														src="<?php echo get_template_directory_uri(); ?>/img/services/services-08.jpg"
														alt="" /></div>
												<h4 class="services-articles-item-ttl">ショートスレッド</h4>
											</a>
										</li>
									</ul>
								</div>
								<div id="pores" class="services-articles-cat">
									<h3 class="services-articles-ttl">毛穴治療</h3>
									<ul class="services-articles-inner">
										<li class="services-articles-item">
											<a href="<?= home_url() ?>/needle-rf">
												<div class="services-articles-thumbnail"><img
														src="<?php echo get_template_directory_uri(); ?>/img/services/services-09.jpg"
														alt="" /></div>
												<h4 class="services-articles-item-ttl">ニードルRF（サーマニードル）</h4>
											</a>
										</li>
										<li class="services-articles-item">
											<a href="<?= home_url() ?>/peeling">
												<div class="services-articles-thumbnail"><img
														src="<?php echo get_template_directory_uri(); ?>/img/services/services-10.jpg"
														alt="" /></div>
												<h4 class="services-articles-item-ttl">ピーリング</h4>
											</a>
										</li>
										<li class="services-articles-item">
											<a href="<?= home_url() ?>/photoipl">
												<div class="services-articles-thumbnail"><img
														src="<?php echo get_template_directory_uri(); ?>/img/services/services-12.jpg"
														alt="" /></div>
												<h4 class="services-articles-item-ttl">フォトipl</h4>
											</a>
										</li>
									</ul>
								</div>
								<div id="small-face" class="services-articles-cat">
									<h3 class="services-articles-ttl">小顔治療</h3>
									<ul class="services-articles-inner">
										<li class="services-articles-item">
											<a href="<?= home_url() ?>/botox">
												<div class="services-articles-thumbnail"><img
														src="<?php echo get_template_directory_uri(); ?>/img/services/services-13.jpg"
														alt="" /></div>
												<h4 class="services-articles-item-ttl">ボトックス</h4>
											</a>
										</li>
										<li class="services-articles-item">
											<a href="<?= home_url() ?>/hifu-linear">
												<div class="services-articles-thumbnail"><img
														src="<?php echo get_template_directory_uri(); ?>/img/services/services-04.jpg"
														alt="" /></div>
												<h4 class="services-articles-item-ttl">HIFUリニア</h4>
											</a>
										</li>
										<li class="services-articles-item">
											<a href="<?= home_url() ?>/fat-dissolve">
												<div class="services-articles-thumbnail"><img
														src="<?php echo get_template_directory_uri(); ?>/img/services/services-15.jpg"
														alt="" /></div>
												<h4 class="services-articles-item-ttl">脂肪溶解注射 カベリン</h4>
											</a>
										</li>
									</ul>
								</div>
								<div id="exosomes" class="services-articles-cat">
									<h3 class="services-articles-ttl">エクソソーム</h3>
									<ul class="services-articles-inner">
										<li class="services-articles-item">
											<a href="https://lianclinic.net/exosomes/">
												<div class="services-articles-thumbnail"><img
														src="https://lianclinic.net/renew2022/wp-content/uploads/2022/03/IMG_4704.jpeg"
														alt="" /></div>
												<h4 class="services-articles-item-ttl">エクソソーム</h4>
											</a>
										</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div id="reservation" class="sl-reservation sbprice">
			<div class="menu-inn sl-reservation-inn sbprice-inn">
				<div class="sl-reservation-inn-ttl subpage-ttl">
					<h2 class="under-line">ご予約</h2>
				</div>
				<div class="sl-reservation-inn-content sbprice-content">
					<div class="reservation">
						<div class="reservation-wr">
							<p>ご予約はLINE予約で承っております。</p>
							<?php $contactTxt01 = CFS()->get('text01', 27);
							$contactTxt02 = CFS()->get('text02', 27);
							if ($contactTxt01 != ''): ?>
								<h3><span class="l-slash">\ </span>
									<?php echo $contactTxt01; ?><br class="sp" />
									<?php echo $contactTxt02; ?> <span class="r-slash"> /</span>
								</h3>
							<?php endif; ?>
							<a href="https://line.me/R/ti/p/@115jngom" target="_blank" rel="nofollow noreferrer">
								<img src="<?php echo get_template_directory_uri(); ?>/img/line-img.png" alt="">
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</main>
</div>

<?php
get_footer();