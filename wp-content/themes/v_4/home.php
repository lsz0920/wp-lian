<?php
get_header();
?>
<div id="primary" class="content-area">
	<main id="main" class="site-main">
		<div id="mv" class="l-mv">
			<div class="l-mv-video">
				<img class="pc" src="https://lianclinic.net/renew2022/wp-content/uploads/20230419HP.jpg" style="width: 100%; height: 100%; object-fit: cover; object-position: center;">
				<img class="sp "src="https://lianclinic.net/renew2022/wp-content/uploads/20230419SP.jpg" style="width: 100%; object-fit: cover; object-position: center;">
			</div>
		</div>
		<div id="column" class="l-column">
			<div class="sub-ttl pc">
				<div class="d-fl sub-ttl-inn">
					<p>CAMPAIGN</p>
					<span></span>
				</div>
			</div>
			<div class="l-column-inn">
				<div class="l-column-inn-ttl main-ttl">
					<h2 class="under-line">Campaign</h2>
				</div>
				<div class="l-column-inn-content">
					<div class="column-list top-column-list">
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
							while ($the_query->have_posts()) : $the_query->the_post();
						?>
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
							wp_reset_postdata();
						endif; ?>
					</div>
					<div class="column-btn more-btn">
						<a href="<?php echo esc_html(home_url('/campaign')) ?>" rel="alternate">VIEW MORE</a>
					</div>
				</div>
			</div>
		</div>
		<div id="instagram" class="l-instagram">
			<div class="l-instagram-inn">
				<div class="l-instagram-inn-ttl">
					<h2>@lianclinic_omotesando<span>ON INSTAGRAM</span></h2>
				</div>
				<div class="l-instagram-inn-posts">
					<?php echo do_shortcode('[instagram-feed feed=1]'); ?>
				</div>
				<div class="l-instagram-inn-sns">
					<ul class="d-fl">
						<li>
							<a href="https://www.instagram.com/lianclinic_omotesando/" rel="nofollow noreferrer" target="_blank">
								<img src="<?php echo get_template_directory_uri(); ?>/img/iconb-ig.png" alt=""></a>
						</li>
						<li>
							<a href="https://twitter.com/yukimaromed" rel="nofollow noreferrer" target="_blank">
								<img src="<?php echo get_template_directory_uri(); ?>/img/iconb-tw.png" alt=""></a>
						</li>
						<li>
							<a href="https://youtube.com/channel/UCEHr4nCFMhBi8e2PkEYmYAw" rel="nofollow noreferrer" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/iconb-yt.png" alt=""></a>
						</li>
						<li>
							<a href="https://www.tiktok.com/@lianclinic?_t=8UsHNwdliM6&_r=1" rel="nofollow noreferrer" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/iconb-tk.png" alt=""></a>
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
<video class="pc" style="vertical-align: bottom;width: 100%;height: auto;"src="https://lianclinic.net/renew2022/wp-content/uploads/ナース.mp4" alt="reception" loop muted autoplay playsinline></video>
									<video class="pc" style="vertical-align: bottom;width: 100%;height: auto;"src="https://lianclinic.net/renew2022/wp-content/uploads/ナース.mp4" alt="reception" loop muted autoplay playsinline></video>
<!-- 									<img class="sp" src="<?php echo get_template_directory_uri(); ?>/img/reception-sp.png" alt="reception"> -->
								</div>
							</section>
							<section class="reception-section d-fl">
								<div class="fig">
<!-- 									<img class="pc" src="<?php echo get_template_directory_uri(); ?>/img/room-img.png" alt="room">
									<img class="sp" src="<?php echo get_template_directory_uri(); ?>/img/room-img-sp.png" alt="room"> -->
								</div>
								<div class="text">
									<p>LIANはひととの絆を大切にし、<br />
										初めての方でも安心できる美容医療を<br class="sp" />提供することで、<br class="pc" />
										あなたの悩みを解決したい</p>
									<p>美容医療を通じて自分を好きになる。<br />
										やがてそのしあわせは、まわりを笑顔で包み、<br />
										未来をかえていく</p>
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
						<h3>働くあなたを応援します</h3>
						<p>自分の意思で選択し、地に足をつけて<br class="sp" />しっかり未来に踏み出す。<br />
							そんな現代を生きる女性たちが刹那的ではない、<br class="sp" />長期的な視点をもって生きていき、<br />
							その美しさがあなたらしく毎日を照らす<br class="sp" />輝きとなるように<br />
							LIANは始動します</p>
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
								<img src="<?php echo get_template_directory_uri(); ?>/img/why/why-01.png" alt="">
							</figure>
							<div class="why-txt">
								<p>LIANでは美容クリニック従属歴4年以上の看護師しか在籍しておりません。経験豊富な看護師がお客様のお悩みに応じて一人ひとり変える、フルオーダーメイド治療を提案させていただきます。</p>
							</div>
						</article>
						<article class="">
							<h2><span class="list-no">02</span>たるみ・毛穴・小顔治療に特化</h2>
							<figure>
								<img src="<?php echo get_template_directory_uri(); ?>/img/why/why-02.png" alt="">
							</figure>
							<div class="why-txt">
								<p>リアンクリニックはアートメイクをはじめ、たるみ・毛穴・小顔治療に特化したメニューを提供します。</p>
							</div>
						</article>
						<article class="">
							<h2><span class="list-no">03</span>高品質<span class="title-cross">×</span>適正価格</h2>
							<figure>
								<img src="<?php echo get_template_directory_uri(); ?>/img/why/why-03.png" alt="">
							</figure>
							<div class="why-txt">
								<p>我々は結果を最重要視しております。また、定期的に通院できる適正価格にし、長期的・持続的な美しさをご提供いたします。</p>
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
					<h3>お悩みから探す</h3>
					<div class="menu-fl d-fl">
						<ul class="menu-buttton">
							<li id="permanent-makeup"><a href="#">アートメイク</a></li>
							<li id="sagging"><a href="#">たるみ</a></li>
							<li id="pores"><a href="#">毛穴・シミ</a></li>
							<li id="small-face"><a href="#">小顔</a></li>
						</ul>
						<figure class="menu-people">
							<img src="<?php echo get_template_directory_uri(); ?>/img/top-menu-img01.png" alt="お悩みから探す">
						</figure>
					</div>

				</div>
			</div>
			<div id="menu-modal" class="menu-modal">
				<button class="modal-close">
					<img src="<?php echo get_template_directory_uri(); ?>/img/modal-close.svg" alt="close">
				</button>
				<div id="permanent-makeup-show" class="modal-show">
					<div class="menu-modal-inn">
						<div class="menu-modal-inn-ttl main-ttl">
							<h2 class="under-line">アートメイク</h2>
						</div>
						<div class="menu-modal-inn-content">
							<figure>
								<img src="<?php echo get_template_directory_uri(); ?>/img/modal/pm-modal-img.png" alt="アートメイク">
							</figure>
							<ul class="d-fl">
								<li><a href="<?php echo esc_html(home_url('/')) ?>menu/artmake/">眉</a></li>
								<li><a href="<?php echo esc_html(home_url('/')) ?>menu/artmake-eyeline/">アイライン</a></li>
								<li><a href="<?php echo esc_html(home_url('/')) ?>menu/artmake-lip/">リップ</a></li>
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
								<img src="<?php echo get_template_directory_uri(); ?>/img/modal/sagging-modal-img.png" alt="たるみ治療">
							</figure>
							<ul class="d-fl">
								<li><a href="<?php echo esc_html(home_url('/')) ?>menu/hifu/">HIFU</a></li>
								<li><a href="<?php echo esc_html(home_url('/')) ?>menu/hifu-linear/">HIFUリニア<small>(脂肪溶解HIFU)</small></a></li>
								<li><a href="<?php echo esc_html(home_url('/')) ?>menu/sarmagen/">サーマジェン</a></li>
								<li class="font-size12"><a href="<?php echo esc_html(home_url('/')) ?>menu/liftup-botox/">リフトアップボトックス</a></li>
								<li><a href="<?php echo esc_html(home_url('/')) ?>menu/thread/">ショートスレッド</a></li>
								<li><a href="<?php echo esc_html( home_url('/') ) ?>menu/hyaluronic/">ヒアルロン酸注入</a></li>
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
								<img src="<?php echo get_template_directory_uri(); ?>/img/modal/pores-modal-img.png" alt="毛穴治療">
							</figure>
							<ul class="d-fl">
								<li><a href="<?php echo esc_html(home_url('/')) ?>menu/needle-rf/">ニードルRF（サーマニードル）</a></li>
								<li><a href="<?php echo esc_html(home_url('/')) ?>menu/peeling/">ピーリング</a></li>
								<li><a href="<?php echo esc_html(home_url('/')) ?>menu/photoipl/">フォトipl</a></li>
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
								<img src="<?php echo get_template_directory_uri(); ?>/img/modal/smface-modal-img.png" alt="小顔治療">
							</figure>
							<ul class="d-fl">
								<li><a href="<?php echo esc_html(home_url('/')) ?>menu/botox/">ボトックス</a></li>
								<li><a href="<?php echo esc_html(home_url('/')) ?>menu/hifu-linear/">HIFUリニア<small>(脂肪溶解HIFU)</small></a></li>
								<li class="font-size12"><a href="<?php echo esc_html(home_url('/')) ?>menu/fat-dissolve/">脂肪溶解注射 チンセラ</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>

		</div>
		<div id="message" class="l-message">
			<div class="sub-ttl pc">
				<div class="d-fl sub-ttl-inn">
					<p>MASSAGE</p>
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
								昔はニキビが顔によく出来ていたこともあり、自分の素顔に自信が持てませんでした。鏡を見るたびに自尊心が傷ついては、よく人に流されていた毎日。そんな自分が嫌いでした。<br />
								当時は誰にも相談できず、解決もできない日々は今思えば怒りに似た感情だったかもしれないです。<br /><br />

								そんなわたしを救ってくれたのが、美容皮膚科という領域で働く看護師さんでした。<br />
								そして、その時に【美容ナースになろう】と決心しました。<br /><br />

								過去の自分のように顔に悩みを抱えている人を解決したい。その想いから、美容ナース歴9年目となった今、LIANを設立しました。目の前を見つめる。寄り添う。相手のために動く。この「相手を思いやる」という考え方が、私たちの根底に根付いています。
							</p>
						</div>
						<div class="message-info">
							<figure>
								<img src="<?php echo get_template_directory_uri(); ?>/img/profile-img.png" alt="profile" />
							</figure>
							<h2>
								<small>LIAN(リアン)代表</small>
								<strong>藤尾有紀</strong>
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
								<img src="https://lianclinic.net/renew2022/wp-content/uploads/20230113banner.jpg" alt="banner" />
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

		<?php get_template_part('footer-company'); ?>
	</main><!-- #main -->
</div><!-- #primary -->
<?php
get_footer();
