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
		<?php $locale = get_locale();
    	if ('en_US' == $locale  ) { ?>
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
								<li><a href="#art-make">Permanent <br>Make up</a></li>
								<li><a href="#sagging">Facial sags</a></li>
								<li><a href="#pores">Pore and Blemish treatment</a></li>
								<li><a href="#small-face">Facial Line treatment</a></li>
								<!--<li><a href="#exosomes">Exosomes</a></li>-->
							</ul>
							<div class="services-articles">
								<div id="art-make" class="services-articles-cat">
									<h3 class="services-articles-ttl">Permanent Make up</h3>
									<ul class="services-articles-inner">
										<li class="services-articles-item">
											<a href="<?= home_url() ?>/artmake">
												<div class="services-articles-thumbnail"><img loading="lazy"
														src="<?php echo get_template_directory_uri(); ?>/img/services/services-01.jpg"
														alt="" /></div>
												<h4 class="services-articles-item-ttl">Brow</h4>
											</a>
										</li>
										<li class="services-articles-item">
											<a href="<?= home_url() ?>/artmake-lip">
												<div class="services-articles-thumbnail"><img loading="lazy"
														src="<?php echo get_template_directory_uri(); ?>/img/services/services-02.jpg"
														alt="" /></div>
												<h4 class="services-articles-item-ttl">Lip</h4>
											</a>
										</li>
										<li class="services-articles-item">
											<a href="<?= home_url() ?>/artmake-eyeline">
												<div class="services-articles-thumbnail"><img loading="lazy"
														src="<?php echo get_template_directory_uri(); ?>/img/services/services-03.jpg"
														alt="" /></div>
												<h4 class="services-articles-item-ttl">Eyeliner</h4>
											</a>
										</li>
									</ul>
								</div>
								<div id="sagging" class="services-articles-cat">
									<h3 class="services-articles-ttl">Facial sags</h3>
									<ul class="services-articles-inner">
										<li class="services-articles-item">
											<a href="<?= home_url() ?>/hifu">
												<div class="services-articles-thumbnail"><img loading="lazy"
														src="<?php echo get_template_directory_uri(); ?>/img/services/services-04.jpg"
														alt="" /></div>
												<h4 class="services-articles-item-ttl">HIFU</h4>
											</a>
										</li>
										<li class="services-articles-item">
											<a href="<?= home_url() ?>/sarmagen">
												<div class="services-articles-thumbnail"><img loading="lazy"
														src="<?php echo get_template_directory_uri(); ?>/img/services/services-06.jpg"
														alt="" /></div>
												<h4 class="services-articles-item-ttl">Thermagen</h4>
											</a>
										</li>
										<li class="services-articles-item">
											<a href="<?= home_url() ?>/liftup-botox">
												<div class="services-articles-thumbnail"><img loading="lazy"
														src="<?php echo get_template_directory_uri(); ?>/img/services/services-07.jpg"
														alt="" /></div>
												<h4 class="services-articles-item-ttl">Lift up Botox</h4>
											</a>
										</li>
										<li class="services-articles-item">
											<a href="<?= home_url() ?>/thread">
												<div class="services-articles-thumbnail"><img loading="lazy"
														src="<?php echo get_template_directory_uri(); ?>/img/services/services-08.jpg"
														alt="" /></div>
												<h4 class="services-articles-item-ttl">Shopping thread</h4>
											</a>
										</li>
										<li class="services-articles-item">
											<a href="<?= home_url() ?>/potenza/">
												<div class="services-articles-thumbnail"><img loading="lazy"
														src="<?php echo get_template_directory_uri(); ?>/img/services/services-16.jpg"
														alt="照射" /></div>
												<h4 class="services-articles-item-ttl">POTENZA</h4>
											</a>
										</li>
									</ul>
								</div>
								<div id="pores" class="services-articles-cat">
									<h3 class="services-articles-ttl">Pore and Blemish treatment</h3>
									<ul class="services-articles-inner">
										<li class="services-articles-item">
											<a href="<?= home_url() ?>/potenza/">
												<div class="services-articles-thumbnail"><img loading="lazy"
														src="<?php echo get_template_directory_uri(); ?>/img/services/services-09.jpg"
														alt="" /></div>
												<h4 class="services-articles-item-ttl">POTENZA</h4>
											</a>
										</li>
										<li class="services-articles-item">
											<a href="<?= home_url() ?>/peeling">
												<div class="services-articles-thumbnail"><img loading="lazy"
														src="<?php echo get_template_directory_uri(); ?>/img/services/services-10.jpg"
														alt="" /></div>
												<h4 class="services-articles-item-ttl">Medical peering</h4>
											</a>
										</li>
										<li class="services-articles-item">
											<a href="<?= home_url() ?>/photoipl">
												<div class="services-articles-thumbnail"><img loading="lazy"
														src="<?php echo get_template_directory_uri(); ?>/img/services/services-12.jpg"
														alt="" /></div>
												<h4 class="services-articles-item-ttl">IPL</h4>
											</a>
										</li>
									</ul>
								</div>
								<div id="small-face" class="services-articles-cat">
									<h3 class="services-articles-ttl">Facial Line treatment</h3>
									<ul class="services-articles-inner">
										<li class="services-articles-item">
											<a href="<?= home_url() ?>services/botox">
												<div class="services-articles-thumbnail"><img loading="lazy"
														src="<?php echo get_template_directory_uri(); ?>/img/services/services-13.jpg"
														alt="" /></div>
												<h4 class="services-articles-item-ttl">BOTOX</h4>
											</a>
										</li>
										<li class="services-articles-item">
											<a href="<?= home_url() ?>/hifu-linear">
												<div class="services-articles-thumbnail"><img loading="lazy"
														src="<?php echo get_template_directory_uri(); ?>/img/services/services-04.jpg"
														alt="" /></div>
												<h4 class="services-articles-item-ttl">Linear HIFU</h4>
											</a>
										</li>
										<li class="services-articles-item">
											<a href="<?= home_url() ?>/fat-dissolve">
												<div class="services-articles-thumbnail"><img loading="lazy"
														src="<?php echo get_template_directory_uri(); ?>/img/services/services-15.jpg"
														alt="" /></div>
												<h4 class="services-articles-item-ttl">Lipolysis injection</h4>
											</a>
										</li>
									</ul>
								</div>
								<!--<div id="exosomes" class="services-articles-cat">
									<h3 class="services-articles-ttl">Exosomes</h3>
									<ul class="services-articles-inner">
										<li class="services-articles-item">
											<a href="https://lianclinic.net/exosomes/">
												<div class="services-articles-thumbnail"><img loading="lazy"
														src="https://lianclinic.net/renew2022/wp-content/uploads/2022/03/IMG_4704.jpeg"
														alt="" /></div>
												<h4 class="services-articles-item-ttl">Exosomes</h4>
											</a>
										</li>
									</ul>
								</div>-->
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
							<a href="https://reservation.medical-force.com/c/2d96f6933ed14b2a8e271863a7f0b813" target="_blank" rel="nofollow noreferrer">
								<img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/line-img.png" alt="">
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<?php } else { ?>
		<?php get_template_part( 'template-parts/service-contents'); ?>
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
							<a href="https://lin.ee/U5tTSaw" target="_blank" rel="nofollow noreferrer">
								<img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/line-img.png" alt="">
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<?php } ?>
	</main>
</div>

<?php
get_footer();