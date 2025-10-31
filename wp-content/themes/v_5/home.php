<?php
get_header();
?>
<div id="primary" class="content-area">
	<main id="main" class="site-main">
    <?php $locale = get_locale();
    if ('en_US' == $locale  ) { ?>
		<div id="mv" class="l-mv">
			<div class="l-mv-video">
				<img loading="lazy" class="pc" src="<?php echo get_template_directory_uri(); ?>/img/MV-en.jpg" style="width: 100%; height: 100%; object-fit: cover; object-position: center;">
				<img loading="lazy" class="sp "src="<?php echo get_template_directory_uri(); ?>/img/MV-en_sp.jpg" style="width: 100%; object-fit: cover; object-position: center;">
			</div>
		</div>
		<div id="column" class="l-column">
			<div class="sub-ttl pc">
				<div class="d-fl sub-ttl-inn">
					<p>CAMPAIGN</p>
					<span></span>
				</div>
			</div>
			<?php
						$args = array(
							'post_type' => 'campaign',
							'posts_per_page' => 3,
							'orderby'   => array(
								'date' => 'DESC',
							),
							'post_status' => array(
								'publish'
							)
						);
						$the_query = new WP_Query($args);
						if ($the_query->have_posts()) : ?>
			<div class="l-column-inn">
				<div class="l-column-inn-ttl main-ttl">
					<h2 class="under-line">Campaign</h2>
				</div>
				<div class="l-column-inn-content">
					<div class="column-list top-column-list">
						
						<?php while ($the_query->have_posts()) : $the_query->the_post();?>
								<article class="">
									<a href="<?php the_permalink() ?>" rel="alternate">
										<figure>
											<?php the_post_thumbnail('', array('alt' => get_the_title())); ?>
										</figure>
										<div class="column-txt">
											<div class="upload-date">
												<time class="c-black"><?php echo get_the_date('Y.m.d'); ?></time>
											</div>
											<p><?php the_title(); ?></p>
										</div>
									</a>
								</article>
						<?php endwhile;
							wp_reset_postdata(); ?>
					</div>
					<div class="column-btn more-btn">
						<a href="<?php echo esc_html(home_url('/campaign')) ?>" rel="alternate">VIEW MORE</a>
					</div>
				</div>
			</div>
		</div>
		<?php  endif; ?>
		<div id="instagram" class="l-instagram">
			<div class="l-instagram-inn">
				<div class="l-instagram-inn-ttl">
					<h2>@lianclinic_omotesando<span>ON INSTAGRAM</span></h2>
				</div>
				<div class="l-instagram-inn-posts">
					<?php echo do_shortcode('[instagram-feed feed=3]'); ?>
				</div>
				<div class="l-instagram-inn-sns">
					<ul class="d-fl">
						<li>
							<a href="https://www.instagram.com/lianclinic_omotesando/" rel="nofollow noreferrer" target="_blank">
								<img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/iconb-ig.png" alt=""></a>
						</li>
						<li>
							<a href="https://twitter.com/yukimaromed" rel="nofollow noreferrer" target="_blank">
								<img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/iconb-tw.png" alt=""></a>
						</li>
						<li>
							<a href="https://youtube.com/channel/UCEHr4nCFMhBi8e2PkEYmYAw" rel="nofollow noreferrer" target="_blank"><img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/iconb-yt.png" alt=""></a>
						</li>
						<li>
							<a href="https://www.tiktok.com/@lianclinic?_t=8UsHNwdliM6&_r=1" rel="nofollow noreferrer" target="_blank"><img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/iconb-tk.png" alt=""></a>
						</li>
					</ul>
				</div>
			</div>
		</div>
		<div id="why" class="l-why">
			<div class="l-why-inn l-why-02">
				<div class="l-why-inn-content">
					<div class="why-reasons">
						<div class="why-reasons-wrap">
							<section class="treatment-room-section d-fl">
								<div class="text">
									<div class="text-inn">
										<h3 class="title">Concept</h3>
										<p>“ If you could change how do you live?”</p>
										<p>Reminisce…</p>
										<p>“I wish I had a smaller face.”<br />
										“If these fine lines could be improved…”</p>
										<p>But how?</p>
									</div>
								</div>
								<div class="fig">
									<video class="pc" style="vertical-align: bottom;width: 100%;height: auto;"src="https://lianclinic.net/renew2022/wp-content/uploads/a915bc79-4c4d-4afb-95f5-d2bca71c1cb8.mp4" alt="reception" loop muted autoplay playsinline></video>
									<video class="sp" style="vertical-align: bottom;width: 100%;height: auto;"src="https://lianclinic.net/renew2022/wp-content/uploads/a915bc79-4c4d-4afb-95f5-d2bca71c1cb8.mp4" alt="reception" loop muted autoplay playsinline></video>
<!-- 									<img loading="lazy" class="pc" src="<?php echo get_template_directory_uri(); ?>/img/reception.png" alt="reception"> -->
<!-- 									<img loading="lazy" class="sp" src="<?php echo get_template_directory_uri(); ?>/img/reception-sp.png" alt="reception"> -->
								</div>
							</section>
							<section class="reception-section d-fl">
								<div class="fig">
									<video class="pc" style="vertical-align: bottom;width: 100%;height: auto;"src="https://lianclinic.net/renew2022/wp-content/uploads/266922cd-b4a3-4e3b-8f9d-9b4a4f15ef58.mp4" alt="room" loop muted autoplay playsinline></video>
									<video class="sp" style="vertical-align: bottom;width: 100%;height: auto;"src="https://lianclinic.net/renew2022/wp-content/uploads/266922cd-b4a3-4e3b-8f9d-9b4a4f15ef58.mp4" alt="room" loop muted autoplay playsinline></video>
<!-- 									<img loading="lazy" class="pc" src="<?php echo get_template_directory_uri(); ?>/img/room-img.png" alt="room"> -->
<!-- 									<img loading="lazy" class="sp" src="<?php echo get_template_directory_uri(); ?>/img/room-img-sp.png" alt="room"> -->
								</div>
								<div class="text">
									<p>LIAN clinic values the bond with people, <br />and we want to solve your problems by<br />
									providing cosmetic treatments<br/> 
									which are comfortable even for first time users.</p>
									<p>Become fond of yourself through <br class="sp" />cosmetic treatments.<br />
									Eventually, happiness will bring smiles of those around you, and change the future.</p>
								</div>
							</section>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div id="philosophy" class="l-philosophy">
			<div class="l-philosophy-inn">
				<h2 class="title"><span>Philosophy</span></h2>
				<div class="l-philosophy-inn-content">
					<section>
						<h2><span>The Light of Day</span></h2>
						<h3>We support you to live your life as you want to live it.</h3>
						<p>Make your own choices and step firmly into the future with your feet.<br />
							We hope that women living in this modern age will live their lives with a long-term
							perspective, not an ephemeral one, and that their beauty will be the radiance that
							illuminates their daily lives in their own way. </p>
					</section>
				</div>
			</div>
		</div>
		<div id="why" class="l-why">
			<div class="l-why-inn l-why-01">
				<div class="l-why-inn-ttl main-ttl">
					<h2>Features of LIAN clinic</h2>
					<h3 class="under-line"></h3>
				</div>
				<div class="l-why-inn-content why">
					<div class="why-list d-fl">
						<article class="">
							<h2><span class="list-no">01</span>Experienced Nurse</h2>
							<figure>
								<img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/why/why-01.png" alt="Experienced Nurse">
							</figure>
							<div class="why-txt">
								<p>All of our nurses have over 4 years experience in cosmetic clinics. Our experienced nurses will propose a fully customized treatment that is individually tailored to each client’s needs and concerns.</p>
							</div>
						</article>
						<article class="">
							<h2><span class="list-no">02</span>Specializing in facial<br />sags and pore treatment</h2>
							<figure>
								<img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/why/why-02.png" alt="Specializing in facial sags and pore treatment">
							</figure>
							<div class="why-txt">
								<p>We offer specialized treatments for sagging and pore treatment</p>
							</div>
						</article>
						<article class="">
							<h2><span class="list-no">03</span>High quality<span class="title-cross">×</span>reasonable price</h2>
							<figure>
								<img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/why/why-03.png" alt="High quality × reasonable price">
							</figure>
							<div class="why-txt">
								<p>We place the utmost importance on results. We also provide long-term, lasting beauty outcomes at a reasonable price that allows regular visits.</p>
							</div>
						</article>
					</div>
					<div class="menu-btn more-btn">
						<a href="<?php echo esc_html(home_url('/about')) ?>" rel="alternate">VIEW MORE</a>
					</div>
				</div>
			</div>
		</div>
		<div id="menu" class="l-menu">
			<div class="sub-ttl pc">
				<div class="d-fl sub-ttl-inn">
					<p>MENU</p>
					<span></span>
				</div>
			</div>
			<div class="l-menu-inn">
				<div class="l-menu-inn-ttl main-ttl">
					<h2 class="under-line">Menu</h2>
				</div>
				<div class="l-menu-inn-content">
					<h3>Search by <br class="sp">Your Concerns</h3>
					<div class="menu-fl d-fl">
						<ul class="menu-buttton">
							<li id="permanent-makeup"><a href="#">Permanent Makeup</a></li>
							<li id="sagging"><a href="#">Facial Sags</a></li>
							<li id="pores"><a href="#">Pores and Blemishes</a></li>
							<li id="small-face"><a href="#">Facial Line</a></li>
						</ul>
						<figure class="menu-people">
							<img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/top-menu-img01.png" alt="お悩みから探す">
						</figure>
					</div>

				</div>
			</div>
			<div id="menu-modal" class="menu-modal">
				<button class="modal-close">
					<img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/modal-close.svg" alt="close">
				</button>
				<div id="permanent-makeup-show" class="modal-show">
					<div class="menu-modal-inn">
						<div class="menu-modal-inn-ttl main-ttl">
							<h2 class="under-line">Permanent Make up</h2>
						</div>
						<div class="menu-modal-inn-content">
							<figure>
								<img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/modal/pm-modal-img.png" alt="Permanent Make up">
							</figure>
							<ul class="d-fl">
								<li><a href="<?php echo esc_html(home_url('/')) ?>artmake/">Brow</a></li>
								<li><a href="<?php echo esc_html(home_url('/')) ?>artmake-eyeline/">Eyeliner</a></li>
								<li><a href="<?php echo esc_html(home_url('/')) ?>artmake-lip/">Lip</a></li>
							</ul>
						</div>
					</div>
				</div>
				<div id="sagging-show" class="modal-show">
					<div class="menu-modal-inn">
						<div class="menu-modal-inn-ttl main-ttl">
							<h2 class="under-line">Facial sags</h2>
						</div>
						<div class="menu-modal-inn-content">
							<figure>
								<img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/modal/sagging-modal-img.png" alt="Facial sags">
							</figure>
							<ul class="d-fl">
								<li><a href="<?php echo esc_html(home_url('/')) ?>hifu/">HIFU</a></li>
								<li><a href="<?php echo esc_html(home_url('/')) ?>hifu-linear/">Linear HIFU</a></li>
								<li><a href="<?php echo esc_html(home_url('/')) ?>sarmagen/">Thermagen</a></li>
								<li><a href="<?php echo esc_html(home_url('/')) ?>liftup-botox/">Lift up Botox</a></li>
								<li><a href="<?php echo esc_html(home_url('/')) ?>thread/">Shopping thread</a></li>
								<li><a href="<?php echo esc_html( home_url('/') ) ?>services/hyaluronic/">Hyaluronic Acid</a></li>
							</ul>
						</div>
					</div>
				</div>
				<div id="pores-show" class="modal-show">
					<div class="menu-modal-inn">
						<div class="menu-modal-inn-ttl main-ttl">
							<h2 class="under-line">Pore and Blemish treatment</h2>
						</div>
						<div class="menu-modal-inn-content">
							<figure>
								<img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/modal/pores-modal-img.png" alt="Pore and Blemish treatment">
							</figure>
							<ul class="d-fl">
								<li><a href="<?php echo esc_html(home_url('/')) ?>needle-rf/">Needle RF (POTENZA)</a></li>
								<li><a href="<?php echo esc_html(home_url('/')) ?>peeling/">Medical peering</a></li>
								<li><a href="<?php echo esc_html(home_url('/')) ?>photoipl/">IPL</a></li>
							</ul>
						</div>
					</div>
				</div>
				<div id="small-face-show" class="modal-show">
					<div class="menu-modal-inn">
						<div class="menu-modal-inn-ttl main-ttl">
							<h2 class="under-line">Facial Line treatment</h2>
						</div>
						<div class="menu-modal-inn-content">
							<figure>
								<img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/modal/smface-modal-img.png" alt="小顔治療">
							</figure>
							<ul class="d-fl">
								<li><a href="<?php echo esc_html(home_url('/')) ?>botox/">BOTOX</a></li>
								<li><a href="<?php echo esc_html(home_url('/')) ?>hifu-linear/">Linear HIFU</a></li>
								<li class="font-size12"><a href="<?php echo esc_html(home_url('/')) ?>fat-dissolve/">Lipolysis injection</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>

		</div>
		<div id="message" class="l-message">
			<div class="sub-ttl pc">
				<div class="d-fl sub-ttl-inn">
					<p>MESSAGE</p>
					<span></span>
				</div>
			</div>
			<div class="l-message-inn">
				<div class="l-message-inn-ttl main-ttl">
					<h2 class="under-line">Message</h2>
				</div>
				<div class="l-message-inn-content">
					<article class="d-fl">
						<div class="message-txt">
							<p>
								I used to have a lot of acne on my face and I was never confident.. Every time I looked in the mirror, my self-esteem was hurt, and every day I was swept away by others. I hated myself like that.<br>
								At the time, I couldn’t talk to anyone about it, and I couldn’t solve it. When I think about it now, it may have been akin to anger.<br /><br />

								Saved me was a nurse working in the field of cosmetic dermatology.<br />
								It was then that I decided to become a cosmetic nurse.<br /><br />

								I want to help people who have problems with their faces like I did in the past. With this desire, I established LIAN clinic. I look at what is in front of me. Leaning in. Move for others. This idea of “caring for the other people” is rooted in our foundation.
							</p>
						</div>
						<div class="message-info">
							<figure>
								<img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/profile-img.png" alt="profile" />
							</figure>
							<h2>
								<small>LIAN　Representative</small>
								<strong>KENTA FUJIO</strong>
							</h2>
						</div>
					</article>
				</div>
			</div>
		</div>
		<div id="cosmetics" class="l-cosmetics">
			<div class="sub-ttl pc">
				<div class="d-fl sub-ttl-inn">
					<p>COSMETICS</p>
					<span></span>
				</div>
			</div>
			<div class="l-cosmetics-inn">
				<div class="l-cosmetics-inn-ttl main-ttl">
					<h2 class="under-line">Dr’s Cosme</h2>
				</div>
				<div class="l-cosmetics-inn-content">
					<div class="cosmetics-list top-cosmetics-list">
						<?php
						$args = array(
							'post_type' => 'cosmetics',
							'posts_per_page' => 6,
							'orderby'   => array(
								'date' => 'DESC',
							),
							'post_status' => array(
								'publish'
							)
						);
						$the_query = new WP_Query($args);
						if ($the_query->have_posts()) :
							while ($the_query->have_posts()) : $the_query->the_post();
						?>
								<?php
								$taxonomy_slug = "cosmetics_category";
								$taxonomy = get_the_terms($post->ID, $taxonomy_slug);
								?>
								<article class="">
									<a class="main-permalink" href="<?php the_permalink() ?>" rel="alternate"></a>
									<figure>
										<?php the_post_thumbnail('', array('alt' => get_the_title())); ?>
									</figure>
									<div class="cosmetics-txt">
										<div class="cosmetics-txt-category">
											<span class="cat-t-restore cat-t-<?php echo $taxonomy[0]->slug;; ?>"><?php echo $taxonomy[0]->name; ?></span>
										</div>
										<h2><?php the_title(); ?></h2>
										<!-- <div class="post-entry"><?php the_content(); ?></div> -->
										<div class="post-keyword">
											<?php
											$posttags = get_the_tags();
											if ($posttags) {
												echo '<ul class="d_fl top_keyword d-fl">';
												foreach ($posttags as $tag) {
													echo '<li class="' . $tag->slug . '"><span>' . $tag->name . '</span></li>';
												}
												echo '</ul>';
											}
											?>
										</div>
									</div>
								</article>
						<?php endwhile;
							wp_reset_postdata();
						endif; ?>
					</div>
					<div class="cosmetics-btn more-btn">
						<a href="<?php echo esc_html(home_url('/cosmetics')) ?>" rel="alternate">VIEW MORE</a>
					</div>
				</div>
			</div>
		</div>
		<div id="news" class="l-news">
			<div class="sub-ttl pc">
				<div class="d-fl sub-ttl-inn">
					<p>NEWS</p>
					<span></span>
				</div>
			</div>
			<div class="l-news-inn">
				<div class="l-news-inn-ttl main-ttl">
					<h2 class="under-line">News</h2>
				</div>
				<div class="l-news-inn-content">
					<div class="news-list">
						<?php
						$args = array(
							'post_type' => 'post',
							'posts_per_page' => 4,
							'orderby'   => array(
								'date' => 'DESC',
							),
							'post_status' => array(
								'publish'
							)
						);
						$the_query = new WP_Query($args);
						if ($the_query->have_posts()) :
							while ($the_query->have_posts()) : $the_query->the_post();
						?>
								<article class="">
									<a href="<?php the_permalink(); ?>" rel="alternate" class="d-fl">
										<div class="updated-date">
											<time><?php echo get_the_date('Y.m.d'); ?></time>
										</div>
										<div class="news-title">
											<h2><?php the_title(); ?></h2>
										</div>
									</a>
								</article>
						<?php endwhile;
							wp_reset_postdata();
						endif; ?>
					</div>
					<div class="news-btn more-btn">
						<a href="<?php echo esc_html(home_url('/category/news')) ?>" rel="alternate">VIEW MORE</a>
					</div>
				</div>
			</div>
		</div>
	<?php } else { ?>
		<div id="mv" class="l-mv">
			<div class="l-mv-video">
				<img loading="lazy" class="pc" src="<?php echo get_template_directory_uri(); ?>/img/MV.jpg" alt="あなたと 美しさを 繋ぐクリニック" style="width: 100%; height: 100%; object-fit: cover; object-position: center;">
				<img loading="lazy" class="sp "src="<?php echo get_template_directory_uri(); ?>/img/MV_sp.jpg" alt="あなたと 美しさを 繋ぐクリニック" style="width: 100%; object-fit: cover; object-position: center;">
			</div>
		</div>
		<div id="news" class="l-news">
			<div class="sub-ttl pc">
				<div class="d-fl sub-ttl-inn">
					<p>NEWS</p>
					<span></span>
				</div>
			</div>
			<div class="l-news-inn">
				<div class="l-news-inn-ttl main-ttl">
					<h2 class="under-line">News</h2>
				</div>
				<div class="l-news-inn-content">
					<div class="column-list top-column-list">
						<?php
						$args = array(
							'post_type' => 'post',
							'posts_per_page' => 3,
							'orderby'   => array(
								'date' => 'DESC',
							),
							'post_status' => array(
								'publish'
							)
						);
						$the_query = new WP_Query($args);
						if ($the_query->have_posts()) :
							while ($the_query->have_posts()) : $the_query->the_post();
						?>
								<article class="">
									<a href="<?php the_permalink(); ?>" rel="alternate">
										<figure>
											<?php the_post_thumbnail('', array('alt' => get_the_title())); ?>
										</figure>
										<div class="column-txt">
											<div class="upload-date">
												<time class="c-black"><?php echo get_the_date('Y.m.d'); ?></time>
											</div>
											<p><?php the_title(); ?></p>
										</div>
									</a>
								</article>
						<?php endwhile;
							wp_reset_postdata();
						endif; ?>
					</div>
					<div class="news-btn more-btn">
						<a href="<?php echo esc_html(home_url('/category/news/')) ?>" rel="alternate">VIEW MORE</a>
					</div>
				</div>
			</div>
		</div>
		<?php
			$args = array(
				'post_type' => 'campaign',
				'posts_per_page' => 3,
				'orderby'   => array(
					'date' => 'DESC',
				),
				'post_status' => array(
					'publish'
				)
			);
			$the_query = new WP_Query($args);
			if ($the_query->have_posts()) :
		?>
		<div id="column" class="l-column">
			<div class="sub-ttl pc">
				<div class="d-fl sub-ttl-inn">
					<p>CAMPAIGN</p>
					<span></span>
				</div>
			</div>
			<div class="l-column-inn">
				<div class="l-column-inn-ttl main-ttl">
					<h2 class="under-line">Information</h2>
				</div>
				<div class="l-column-inn-content">
					<div class="column-list top-column-list">
						<?php
							/*
							$args = array(
								'post_type' => 'campaign',
								'posts_per_page' => 3,
								'orderby'   => array(
									'date' => 'DESC',
								),
								'post_status' => array(
									'publish'
								)
							);
							$the_query = new WP_Query($args);
							if ($the_query->have_posts()) :
							*/
							while ($the_query->have_posts()) : $the_query->the_post();
						?>
								<article class="">
									<a href="<?php the_permalink(); ?>" rel="alternate">
										<figure>
											<?php the_post_thumbnail('', array('alt' => get_the_title())); ?>
										</figure>
										<div class="column-txt">
											<div class="upload-date">
												<time class="c-black"><?php echo get_the_date('Y.m.d'); ?></time>
											</div>
											<p><?php the_title(); ?></p>
										</div>
									</a>
								</article>
						<?php 
							endwhile;
							wp_reset_postdata();
							// endif; 
						?>
					</div>
					<div class="column-btn more-btn">
						<a href="<?php echo esc_html(home_url('/campaign/')) ?>" rel="alternate">VIEW MORE</a>
					</div>
				</div>
			</div>
		</div>
		<?php 
			endif; 
		?>
		<div id="instagram" class="l-instagram">
			<div class="l-instagram-inn">
				<div class="l-instagram-inn-ttl">
					<h2>@lianclinic_omotesando<span>ON INSTAGRAM</span></h2>
				</div>
				<div class="l-instagram-inn-posts">
					<?php echo do_shortcode('[instagram-feed feed=3]'); ?>
				</div>
				<div class="l-instagram-inn-sns">
					<ul class="d-fl">
						<li>
							<a href="https://www.instagram.com/lianclinic_omotesando/" rel="nofollow noreferrer" target="_blank"><img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/iconb-ig.png" alt="アイコン:Instagram"></a>
						</li>
						<li>
							<a href="https://twitter.com/yukimaromed" rel="nofollow noreferrer" target="_blank"><img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/iconb-tw.png" alt="アイコン:Twitter,X"></a>
						</li>
						<li>
							<a href="https://youtube.com/channel/UCEHr4nCFMhBi8e2PkEYmYAw" rel="nofollow noreferrer" target="_blank"><img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/iconb-yt.png" alt="アイコン:Youtube"></a>
						</li>
						<li>
							<a href="https://www.tiktok.com/@lianclinic?_t=8UsHNwdliM6&_r=1" rel="nofollow noreferrer" target="_blank"><img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/iconb-tk.png" alt="アイコン:Tiktok"></a>
						</li>
					</ul>
				</div>
			</div>
		</div>
		<div id="why" class="l-why">
			<div class="l-why-inn l-why-02">
				<div class="l-why-inn-content">
					<div class="why-reasons">
						<div class="why-reasons-wrap">
							<section class="treatment-room-section d-fl">
								<div class="text">
									<div class="text-inn">
										<h3 class="title">Concept</h3>
										<p>【変われたら、あなたはどう生きる？】</p>
										<p>思い出してほしい。</p>
										<p>「もう少し小顔になれたら」<br />
											「この小じわが改善したら」</p>
										<p>鏡で自分を見たときにふとため息、、<br />でもどうやって？</p>
									</div>
								</div>
								<div class="fig">
									<video class="pc" style="vertical-align: bottom;width: 100%;height: auto;"src="https://lianclinic.net/renew2022/wp-content/uploads/a915bc79-4c4d-4afb-95f5-d2bca71c1cb8.mp4" alt="reception" loop muted autoplay playsinline></video>
									<video class="sp" style="vertical-align: bottom;width: 100%;height: auto;"src="https://lianclinic.net/renew2022/wp-content/uploads/a915bc79-4c4d-4afb-95f5-d2bca71c1cb8.mp4" alt="reception" loop muted autoplay playsinline></video>
								</div>
							</section>
							<section class="reception-section d-fl">
								<div class="fig">
									<video class="pc" style="vertical-align: bottom;width: 100%;height: auto;"src="https://lianclinic.net/renew2022/wp-content/uploads/266922cd-b4a3-4e3b-8f9d-9b4a4f15ef58.mp4" alt="room" loop muted autoplay playsinline></video>
									<video class="sp" style="vertical-align: bottom;width: 100%;height: auto;"src="https://lianclinic.net/renew2022/wp-content/uploads/266922cd-b4a3-4e3b-8f9d-9b4a4f15ef58.mp4" alt="room" loop muted autoplay playsinline></video>
								</div>
								<div class="text">
									<p>LIANはひととの絆を大切にし、<br />初めての方でも安心できる美容医療を<br class="sp" />提供することで、<br class="pc" />あなたの悩みを解決したい</p>
									<p>美容医療を通じて自分を好きになる。<br />やがてそのしあわせは、まわりを笑顔で包み、<br />未来をかえていく</p>
								</div>
							</section>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div id="philosophy" class="l-philosophy">
			<div class="l-philosophy-inn">
				<p class="title"><span>Value</span></p>
				<div class="l-value-inn-content">
					<section>
						<h2>お客様の「美しさ」との繋がりが「太く」「⻑く」なるよう<br>私たちは以下の行動指針を徹底します</h2>
						<ul class="l-value-list">
							<li>
								<div class="l-value-list__icon">L</div>
								<div class="l-value-list__title">LESS PAIN</div>
								<h3 class="l-value-list__read">痛みの少ない治療で<br>高い顧客満足度の実現</h3>
								<div class="l-value-list__catch">やさしさを繋ぐ</div>
							</li>
							<li>
								<div class="l-value-list__icon">I</div>
								<div class="l-value-list__title">INDIVIDUALITY</div>
								<h3 class="l-value-list__read">個別最適化で<br>期待通りの美しさを提供</h3>
								<div class="l-value-list__catch">想いを繋ぐ</div>
							</li>
							<li>
								<div class="l-value-list__icon">A</div>
								<div class="l-value-list__title">APPROACHABLE</div>
								<h3 class="l-value-list__read">公平‧公正な価格と対応で<br>透明性のある情報開示の徹底</h3>
								<div class="l-value-list__catch">安心を繋ぐ</div>
							</li>
							<li>
								<div class="l-value-list__icon">N</div>
								<div class="l-value-list__title">NATURAL</div>
								<h3 class="l-value-list__read">自然体の美しさを追求し<br>いき過ぎた治療を徹底してやらない</h3>
								<div class="l-value-list__catch">美しさを繋ぐ</div>
							</li>
						</ul>
					</section>
				</div>
			</div>
		</div>
		<div id="why" class="l-why">
			<div class="l-why-inn l-why-01">
				<div class="l-why-inn-ttl main-ttl">
					<h2>LIANの特徴</h2>
					<h3 class="under-line"></h3>
				</div>
				<div class="l-why-inn-content why">
					<div class="why-list d-fl">
						<article class="">
							<h2><span class="list-no">01</span>経験豊富な看護師</h2>
							<figure>
								<img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/why/why-01.png" alt="経験豊富な看護師">
							</figure>
							<div class="why-txt">
								<p>LIANでは美容クリニック従属歴4年以上の看護師しか在籍しておりません。経験豊富な看護師がお客様のお悩みに応じて一人ひとり変える、フルオーダーメイド治療を提案させていただきます。</p>
							</div>
						</article>
						<article class="">
							<h2><span class="list-no">02</span>たるみ・毛穴・小顔治療に特化</h2>
							<figure>
								<img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/why/why-02.png" alt="たるみ・毛穴・小顔治療に特化">
							</figure>
							<div class="why-txt">
								<p>リアンクリニックはアートメイクをはじめ、たるみ・毛穴・小顔治療に特化したメニューを提供します。</p>
							</div>
						</article>
						<article class="">
							<h2><span class="list-no">03</span>高品質<span class="title-cross">×</span>適正価格</h2>
							<figure>
								<img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/why/why-03.png" alt="高品質×適正価格">
							</figure>
							<div class="why-txt">
								<p>我々は結果を最重要視しております。また、定期的に通院できる適正価格にし、長期的・持続的な美しさをご提供いたします。</p>
							</div>
						</article>
					</div>
					<div class="menu-btn more-btn">
						<a href="<?php echo esc_html(home_url('/about/')) ?>" rel="alternate">VIEW MORE</a>
					</div>
				</div>
			</div>
		</div>
		<div id="menu" class="l-menu">
			<div class="sub-ttl pc">
				<div class="d-fl sub-ttl-inn">
					<p>MENU</p>
					<span></span>
				</div>
			</div>
			<div class="l-menu-inn">

				<div class="l-menu-inn-ttl main-ttl">
					<h2 class="under-line">Menu</h2>
				</div>
				<!--
				<div class="l-menu-inn-content">
					<h3>お悩みから探す</h3>
					<div class="menu-fl d-fl">
						<ul class="menu-buttton">
							<li id="permanent-makeup"><a href="#">アートメイク</a></li>
							<li id="sagging"><a href="#">たるみ</a></li>
							<li id="pores"><a href="#">毛穴・シミ</a></li>
							<li id="small-face"><a href="#">小顔</a></li>
						</ul>
						<figure class="menu-people">
							<img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/top-menu-img01.png" alt="お悩みから探す">
						</figure>
					</div>
				</div>
				-->

				<?php get_template_part( 'template-parts/service-contents'); ?>

			</div>
			<div id="menu-modal" class="menu-modal">
				<button class="modal-close">
					<img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/modal-close.svg" alt="close">
				</button>
				<div id="permanent-makeup-show" class="modal-show">
					<div class="menu-modal-inn">
						<div class="menu-modal-inn-ttl main-ttl">
							<h2 class="under-line">アートメイク</h2>
						</div>
						<div class="menu-modal-inn-content">
							<figure>
								<img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/modal/pm-modal-img.png" alt="アートメイク">
							</figure>
							<ul class="d-fl">
								<li><a href="<?php echo esc_html(home_url('/')) ?>services/artmake/">眉</a></li>
								<li><a href="<?php echo esc_html(home_url('/')) ?>services/artmake-eyeline/">アイライン</a></li>
								<li><a href="<?php echo esc_html(home_url('/')) ?>services/artmake-lip/">リップ</a></li>
							</ul>
						</div>
					</div>
				</div>
				<div id="sagging-show" class="modal-show">
					<div class="menu-modal-inn">
						<div class="menu-modal-inn-ttl main-ttl">
							<h2 class="under-line">たるみ治療</h2>
						</div>
						<div class="menu-modal-inn-content">
							<figure>
								<img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/modal/sagging-modal-img.png" alt="たるみ治療">
							</figure>
							<ul class="d-fl">
								<li><a href="<?php echo esc_html(home_url('/')) ?>services/hifu/">HIFU</a></li>
								<li><a href="<?php echo esc_html(home_url('/')) ?>services/hifu-linear/">HIFUリニア<small>(脂肪溶解HIFU)</small></a></li>
								<li><a href="<?php echo esc_html(home_url('/')) ?>services/sarmagen/">サーマジェン</a></li>
								<li class="font-size12"><a href="<?php echo esc_html(home_url('/')) ?>services/liftup-botox/">リフトアップボトックス</a></li>
								<li><a href="<?php echo esc_html(home_url('/')) ?>services/thread-lift/">糸リフト</a></li>
								<li><a href="<?php echo esc_html(home_url('/')) ?>services/thread/">ショートスレッド</a></li>
								<li><a href="<?php echo esc_html( home_url('/') ) ?>services/hyaluronic/">ヒアルロン酸注入</a></li>
							</ul>
						</div>
					</div>
				</div>
				<div id="pores-show" class="modal-show">
					<div class="menu-modal-inn">
						<div class="menu-modal-inn-ttl main-ttl">
							<h2 class="under-line">毛穴・シミ治療</h2>
						</div>
						<div class="menu-modal-inn-content">
							<figure>
								<img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/modal/pores-modal-img.png" alt="毛穴治療">
							</figure>
							<ul class="d-fl">
								<li><a href="<?php echo esc_html(home_url('/')) ?>services/needle-rf/">ニードルRF（サーマニードル）</a></li>
								<li><a href="<?php echo esc_html(home_url('/')) ?>services/peeling/">ピーリング</a></li>
								<li><a href="<?php echo esc_html(home_url('/')) ?>services/photoipl/">フォトipl</a></li>
							</ul>
						</div>
					</div>
				</div>
				<div id="small-face-show" class="modal-show">
					<div class="menu-modal-inn">
						<div class="menu-modal-inn-ttl main-ttl">
							<h2 class="under-line">小顔治療</h2>
						</div>
						<div class="menu-modal-inn-content">
							<figure>
								<img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/modal/smface-modal-img.png" alt="小顔治療">
							</figure>
							<ul class="d-fl">
								<li><a href="<?php echo esc_html(home_url('/')) ?>services/botox/">ボトックス</a></li>
								<li><a href="<?php echo esc_html(home_url('/')) ?>services/hifu-linear/">HIFUリニア<small>(脂肪溶解HIFU)</small></a></li>
								<li class="font-size12"><a href="<?php echo esc_html(home_url('/')) ?>services/fat-dissolve/">脂肪溶解注射 チンセラ</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>

		</div>
		<div id="message" class="l-message">
			<div class="sub-ttl pc">
				<div class="d-fl sub-ttl-inn">
					<p>MESSAGE</p>
					<span></span>
				</div>
			</div>
			<div class="l-message-inn">
				<div class="l-message-inn-ttl main-ttl">
					<h2 class="under-line">Message</h2>
				</div>
				<div class="l-message-inn-content">
					<article class="d-fl">
						<div class="message-txt">
							<p>
								<br>早いもので、開業して2年が経過しました。
								<br>
								<br>「安心の美容医療といえばリアンクリニック」を目指してこの2年間ひたむきに診療を行ってきました。
								<br>LCはヒトとの絆を大切に
								<br>美容医療を通じてお客様との絆を大切にしたい
								<br>という想いを込め誕生したクリニックです。
								<br>
								<br>LCでは医師、看護師、受付カウンセラーなど
								<br>様々な職種のスタッフがそれぞれの仕事に責任を持ち、
								<br>ひとりひとりが"プロ”になることで、
								<br>チーム一丸となって安全で効果のある美容医療を
								<br>お客様に提供し喜んでいただけるクリニックを目指します。
							</p>
						</div>
						<div class="message-info">
							<figure>
								<img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/profile-img.png" alt="profile" />
							</figure>
							<h2>
								<small>LIAN clinic 院長</small>
								<strong>藤尾 謙太</strong>
							</h2>
						</div>
					</article>
				</div>
			</div>
		</div>
		<div id="message" class="l-message" style="padding:30px 0">
			<div class="l-message-inn">
				<div>
					<article class="d-fl">
						<div class="message-info" style="width:100%">
							<a href="https://lianclinic.net/recruit/"><figure>
								<img loading="lazy" src="https://lianclinic.net/renew2022/wp-content/uploads/20230113banner.jpg" alt="banner" />
								</figure></a>
						</div>
					</article>
				</div>
			</div>
		</div>
		<div id="cosmetics" class="l-cosmetics">
			<div class="sub-ttl pc">
				<div class="d-fl sub-ttl-inn">
					<p>COSMETICS</p>
					<span></span>
				</div>
			</div>
			<div class="l-cosmetics-inn">
				<div class="l-cosmetics-inn-ttl main-ttl">
					<h2 class="under-line">Dr’s Cosme</h2>
				</div>
				<div class="l-cosmetics-inn-content">
					<div class="cosmetics-list top-cosmetics-list">
						<?php
						$args = array(
							'post_type' => 'cosmetics',
							'posts_per_page' => 6,
							'orderby'   => array(
								'date' => 'DESC',
							),
							'post_status' => array(
								'publish'
							)
						);
						$the_query = new WP_Query($args);
						if ($the_query->have_posts()) :
							while ($the_query->have_posts()) : $the_query->the_post();
						?>
								<?php
								$taxonomy_slug = "cosmetics_category";
								$taxonomy = get_the_terms($post->ID, $taxonomy_slug);
								?>
								<article class="">
									<a class="main-permalink" href="<?php the_permalink() ?>" rel="alternate"></a>
									<figure>
										<?php the_post_thumbnail('', array('alt' => get_the_title())); ?>
									</figure>
									<div class="cosmetics-txt">
										<div class="cosmetics-txt-category">
											<span class="cat-t-restore cat-t-<?php echo $taxonomy[0]->slug;; ?>"><?php echo $taxonomy[0]->name; ?></span>
										</div>
										<h2><?php the_title(); ?></h2>
										<!-- <div class="post-entry"><?php the_content(); ?></div> -->
										<div class="post-keyword">
											<?php
											$posttags = get_the_tags();
											if ($posttags) {
												echo '<ul class="d_fl top_keyword d-fl">';
												foreach ($posttags as $tag) {
													echo '<li class="' . $tag->slug . '"><span>' . $tag->name . '</span></li>';
												}
												echo '</ul>';
											}
											?>
										</div>
									</div>
								</article>
						<?php endwhile;
							wp_reset_postdata();
						endif; ?>
					</div>
					<div class="cosmetics-btn more-btn">
						<a href="<?php echo esc_html(home_url('/cosmetics/')) ?>" rel="alternate">VIEW MORE</a>
					</div>
				</div>
			</div>
		</div>

    <?php } ?>

		<?php get_template_part('footer-company'); ?>

		<div class="l-philosophy" style="background-color: #fff;">
			<div class="l-philosophy-inn">
				
				<h2 class="title">無料カウンセリングのご予約・お問い合わせ</h2>
				
				<div class="l-philosophy-inn-content">
					<section>
						<p>お施術・無料カウンセリングのご予約お電話またはLINEよりご予約を受け付けております。</p>
					</section>
				</div>

				<div class="footer-cta__tel">
					<a href="tel:03-3470-5678" class="footer-cta__tel-btn">
						<img src="<?php echo get_template_directory_uri(); ?>/img/tel-icon.svg" alt="03-3470-5678">
						<span>03-3470-5678</span>
					</a>
					<p class="footer-cta__tel-lead">受付時間 9:00-18:00<br>休診日：水・日(第1/第3)</p>
				</div>

				<ul class="footer-cta__links">
					<li><a href="https://lin.ee/U5tTSaw">LINEから予約する</a></li>
				</ul>

			</div>
		</div>

	</main><!-- #main -->
</div><!-- #primary -->

<?php get_footer(); ?>