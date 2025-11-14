<?php get_header('renew2025'); ?>
<div class="fixPhoto fullH01">
	<div class="photo">
		<picture>
			<source srcset="<?php echo get_template_directory_uri(); ?>/renew2025/img/index/mv_img01_sp.jpg" media="(max-width: 999px)">
			<img data-skip-lazy src="<?php echo get_template_directory_uri(); ?>/renew2025/img/index/mv_img01.jpg" alt="">
		</picture>
	</div>
</div>
<div class="mainVisual fullH">
	<div class="info">
		<h1><img data-skip-lazy src="<?php echo get_template_directory_uri(); ?>/renew2025/img/index/h1_img.png" alt="LIAN clinic"></h1>
		<p class="serif">結果重視のたるみ治療の専門拠点</p>
	</div>
	<?php $args = array(
		'post_type' => 'post',
		'posts_per_page' => -1,
		'meta_query' => array(
			array(
				'key'     => 'ff_home_show',
				'value'   => 1,
			),
		),
	);
	$query = new WP_Query( $args );
	if($query->have_posts()): ?>
	<div class="news">
		<?php while($query->have_posts()): $query->the_post(); ?>
		<a href="<?php the_permalink(); ?>"><time class="time roboto" datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('Y.m.d'); ?></time><span class="text"><?php echo wp_trim_words( get_the_title(), 41, '...' ) ?></span></a>
		<?php endwhile; wp_reset_postdata(); ?>
	</div>
	<?php endif; ?>
	<div class="scroll roboto"><a href="#case">Scroll</a></div>
</div>
<div class="mainBox">
	<div class="checkBg"><img　data-skip-lazy src="<?php echo get_template_directory_uri(); ?>/renew2025/img/common/com_bg01.jpg" alt=""></div>
	<section class="comCase" id="case">
		<div class="checkBg"><img class="lazy" data-original="<?php echo get_template_directory_uri(); ?>/renew2025/img/common/com_bg01.jpg" alt=""></div>
		<h2 class="headLine01 maskFadeV">Case Results</h2>
		<div class="content">
			<h3 class="headLine02 fadeInUp">豊富な症例実績</h3>
			<p class="topText serif fadeInUp">リアンクリニックは、<br class="sp">たるみ治療に特化した美容医療クリニックとして、<br>豊富な症例実績と高い技術力で<br class="sp">多くのお客様に選ばれています。</p>
			<?php
			$text01 = get_field('ff_top_casetxt01','options');
			$text02 = get_field('ff_top_casetxt02','options');
			$text03 = get_field('ff_top_casetxt03','options');
			$text04 = get_field('ff_top_casetxt04','options');
			if($text01 || $text02 || $text03 || $text04){ ?>
			<ul class="topLink flexC fadeInUp">
				<?php if($text01){ ?>
				<li><span><?php echo $text01; ?></span></li>
				<?php } if($text02){ ?>
				<li><span><?php echo $text02; ?></span></li>
				<?php } if($text03){ ?>
				<li><span><?php echo $text03; ?></span></li>
				<?php } if($text04){ ?>
				<li><span><?php echo $text04; ?></span></li>
				<?php } ?>
			</ul>
			<?php };
			$pop_text = get_field('ff_top_case_btn','options');
			if($pop_text){ ?>
			<p class="popText fadeInUp"><a href="javascript:;" class="popLink noFade" data-pop="pop01"><?php echo $pop_text; ?></a></p>
			<?php } ?>
			<?php 
				$args = array(
					'post_type' => 'case',
					'posts_per_page' => 4,
					'meta_query' => array(
						'relation' => 'AND',
						array(
							'key'     => 'ff_pickup',
							'value'   => 1,
						),
						array(
							'key' => 'ff_showin',
							'value' => '"clinic"',
							'compare' => 'LIKE',
						),
					),
				);
				$query = new WP_Query( $args );
				if($query->have_posts()): 
			?>
			<div class="fadeInUp">
				<ul class="caseList">
					<?php while($query->have_posts()): $query->the_post();
					$image = @get_field('ff_gallery')[0]['url'];
					if(!$image){
						$image = get_template_directory_uri().'/renew2025/img/noimg.jpg';
					}
					$permalink = get_the_permalink();
					$case_menu = get_field('ff_case_menu');
					$staff_doctor = get_field('ff_staff_doctor');
					$staff_nurse = get_field('ff_staff_nurse');
				
					$case_menu_name = '';
					if($case_menu){
						$menu_num = 0;
						foreach($case_menu as $post){
							setup_postdata($post);
							$menu_num++;
							if($menu_num == 1){
								$case_menu_name = get_the_title();
							}else {
								$case_menu_name = $case_menu_name.'＋'.get_the_title();
							}
						}
					} wp_reset_postdata();

					$staff_doctor_name = '';
					if($staff_doctor){
						foreach($staff_doctor as $post){
							setup_postdata($post);
							$staff_doctor_name = $staff_doctor_name.'（医師）'.get_the_title().'<br>';
						}
					} wp_reset_postdata();
				
					$staff_nurse_name = '';
					if($staff_nurse){
						foreach($staff_nurse as $post){
							setup_postdata($post);
							$staff_nurse_name = $staff_nurse_name.'（看護師）'.get_the_title().'<br>';
						}
					} wp_reset_postdata(); ?>
					<li><a href="<?php echo $permalink; ?>">
						<div class="pho"><img class="lazy" data-original="<?php echo $image; ?>" alt="" data-size="220x220"></div>
						<p><span class="serif"><?php echo $case_menu_name; ?></span><?php echo $staff_doctor_name.$staff_nurse_name; ?></p>
					</a></li>
					<?php endwhile; wp_reset_postdata(); ?>
				</ul>
				<ul class="comArrow flexB">
					<li class="prev"><img src="<?php echo get_template_directory_uri(); ?>/renew2025/img/common/prev.png" alt="" data-size="13x14"></li>
					<li class="next"><img src="<?php echo get_template_directory_uri(); ?>/renew2025/img/common/next.png" alt="" data-size="13x14"></li>
				</ul>
			</div>
			<div class="comLink fadeInUp"><a href="<?php echo home_url();?>/case/">View More</a></div>
			<?php endif; ?>
		</div>
	</section>
	<section class="media">
		<div class="checkBg"><img class="lazy" data-original="<?php echo get_template_directory_uri(); ?>/renew2025/img/common/com_bg01.jpg" alt=""></div>
		<div class="content">
			<h2 class="ttl roboto fadeInUp"><span class="maskFadeH">Media</span></h2>
			<div class="sns flex fadeInUp">
				<p>リアンクリニック公式SNS</p>
				<ul class="flex">
					<li><a href="https://www.instagram.com/lianclinic_omotesando/" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/renew2025/img/index/media_sns_icon01.png" alt="" data-size="21x23"></a></li>
					<li><a href="https://youtube.com/channel/UCEHr4nCFMhBi8e2PkEYmYAw" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/renew2025/img/index/media_sns_icon02.png" alt="" data-size="23x23"></a></li>
					<li><a href="https://twitter.com/yukimaromed"  target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/renew2025/img/index/media_sns_icon03.png" alt="" data-size="17x23"></a></li>
					<li><a href="https://www.tiktok.com/@lianclinic?_t=8UsHNwdliM6&amp;_r=1" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/renew2025/img/index/media_sns_icon04.png" alt="" data-size="18x23"></a></li>
				</ul>
			</div>
			<section class="instagram fadeInUp">
				<h3 class="title roboto">Instagram</h3>
				<div class="jsSlideBox">
					<ul class="instagramUl clearfix jsSlideList">
						<?php // echo do_shortcode('[instagram-feed feed=3]'); ?>
						<li><a href="#" target="_blank"><img class="lazy" data-original="<?php echo get_template_directory_uri(); ?>/renew2025/img/index/media_ins_photo01.jpg" alt="" data-size="245x306"></a></li>
						<li><a href="#" target="_blank"><img class="lazy" data-original="<?php echo get_template_directory_uri(); ?>/renew2025/img/index/media_ins_photo02.jpg" alt="" data-size="245x306"></a></li>
						<li><a href="#" target="_blank"><img class="lazy" data-original="<?php echo get_template_directory_uri(); ?>/renew2025/img/index/media_ins_photo03.jpg" alt="" data-size="245x306"></a></li>
						<li><a href="#" target="_blank"><img class="lazy" data-original="<?php echo get_template_directory_uri(); ?>/renew2025/img/index/media_ins_photo04.jpg" alt="" data-size="245x306"></a></li>
					</ul>
					<ul class="comArrow flexB">
						<li class="prev"><img src="<?php echo get_template_directory_uri(); ?>/renew2025/img/common/prev.png" alt="" data-size="13x14"></li>
						<li class="next"><img src="<?php echo get_template_directory_uri(); ?>/renew2025/img/common/next.png" alt="" data-size="13x14"></li>
					</ul>
				</div>
			</section>
			<?php $args = array(
				'post_type' => 'campaign',
				'posts_per_page' => 4,
			);
			$query = new WP_Query( $args );
			if($query->have_posts()): ?>
			<section class="youtube fadeInUp">
				<h3 class="title roboto">YouTube</h3>
				<div class="jsSlideBox">
					<ul class="youtubeUl clearfix jsSlideList">
						<?php while($query->have_posts()): $query->the_post();
						$image = get_template_directory_uri().'/renew2025/img/noimg.jpg';
						if(has_post_thumbnail()){
							$image = get_the_post_thumbnail_url($post->ID,'full');
						} ?>
						<li><a href="<?php the_permalink(); ?>">
							<div class="pho"><img class="lazy" data-original="<?php echo $image; ?>" alt="" data-size="245x179"></div>
							<time class="time roboto" datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('Y.m.d'); ?></time>
							<p><?php the_title(); ?></p>
						</a></li>
						<?php endwhile; ?>
					</ul>
					<ul class="comArrow flexB">
						<li class="prev"><img src="<?php echo get_template_directory_uri(); ?>/renew2025/img/common/prev.png" alt="" data-size="13x14"></li>
						<li class="next"><img src="<?php echo get_template_directory_uri(); ?>/renew2025/img/common/next.png" alt="" data-size="13x14"></li>
					</ul>
				</div>
			</section>
			<?php endif; ?>
		</div>
	</section>
	<section class="menuSec">
		<div class="checkBg"><img class="lazy" data-original="<?php echo get_template_directory_uri(); ?>/renew2025/img/common/com_bg02.jpg" alt=""></div>
		<h2 class="headLine01 maskFadeVPc maskFadeHSp">Menu</h2>
		<div class="content">
			<div class="info flexB">
				<?php $args = array(
					'taxonomy' => 'services_cat',
					'hide_empty' => 1,
					'exclude' => '',
					'parent' => 502,
				);
				$terms = get_terms($args);
				if($terms): ?>
				<div class="trouble fadeInUp">
					<h3 class="headLine03">お悩みから探す</h3>
					<ul class="troubleList flexB">
						<?php foreach($terms as $term): $img = get_field('ff_catimg',$term); ?>
						<li><a href="<?php echo home_url(); ?>/services/#term<?php echo $term->term_id; ?>">
							<span class="photo"><?php if($img){ ?><img class="lazy" data-original="<?php echo $img['url']; ?>" alt="<?php echo $term->name; ?>" data-size="66x88"><?php } ?></span>
							<span><?php echo $term->name; ?></span>
						</a></li>
						<?php endforeach; ?>
					</ul>
				</div>
				<?php endif; ?>
				<?php $args = array(
					'taxonomy' => 'services_cat',
					'hide_empty' => 1,
					'exclude' => '',
					'parent' => 503,
				);
				$terms = get_terms($args);
				if($terms): ?>
				<div class="find fadeInUp">
					<h3 class="headLine03">施術から探す</h3>
					<ul class="findList">
						<?php foreach($terms as $term){ ?>
						<li><select onchange="location.href=value;">
								<option value=""><?php echo $term->name; ?></option>
								<?php $post_args = array(
									'post_type' => 'services',
									'posts_per_page' => -1,
									'tax_query' => array(
										array(
											'taxonomy' => 'services_cat',
											'field'    => 'term_id',
											'terms'    => $term->term_id,
										)
									)
								);
								$post_query = new WP_Query($post_args);
								if($post_query->have_posts()): while($post_query->have_posts()): $post_query->the_post(); ?>
								<option value="<?php the_permalink(); ?>"><?php the_title(); ?></option>
								<?php endwhile; wp_reset_postdata(); endif; ?>
							</select>
						</li>
						<?php } ?>
					</ul>
				</div>
				<?php endif; ?>
			</div>
			<div class="comLink fadeInUp"><a href="<?php echo home_url();?>/services/">View More</a></div>
		</div>
	</section>
	<section class="value">
		<div class="checkBg"><img class="lazy" data-original="<?php echo get_template_directory_uri(); ?>/renew2025/img/common/com_bg03.jpg" alt=""></div>
		<div class="topPhoto">
			<div class="jsParallax">
				<div class="parallax">
					<img class="lazy" data-original="<?php echo get_template_directory_uri(); ?>/renew2025/img/index/value_photo.jpg" alt="Value" data-size="1848x1232">
				</div>
			</div>
		</div>
		<div class="comValue">
			<div class="checkBg"><img class="lazy" data-original="<?php echo get_template_directory_uri(); ?>/renew2025/img/common/com_bg03.jpg" alt=""></div>
			<?php get_template_part('renew2025/inc/com_value'); ?>
		</div>
	</section>
	<section class="comMessage">
		<div class="checkBg"><img class="lazy" data-original="<?php echo get_template_directory_uri(); ?>/renew2025/img/common/com_bg02.jpg" alt=""></div>
		<?php get_template_part('renew2025/inc/com_message'); ?>
	</section>
	<section class="comAbout">
		<div class="checkBg"><img class="lazy" data-original="<?php echo get_template_directory_uri(); ?>/renew2025/img/common/com_bg02.jpg" alt=""></div>
		<?php get_template_part('renew2025/inc/com_about'); ?> 
	</section> 
	<section class="recruit">
		<div class="checkBg"><img class="lazy" data-original="<?php echo get_template_directory_uri(); ?>/renew2025/img/common/com_bg01.jpg" alt=""></div>
		<div class="linkImg fadeInUp"><a href="https://ties-cosme.co.jp/shop/" target="_blank"><img class="lazy pc" data-original="<?php echo get_template_directory_uri(); ?>/renew2025/img/index/recruit_link_img.png" alt="TIES ドクターズコスメを専門に取り扱うオンラインショップ" data-size="1100x202"><img class="lazy sp" data-original="<?php echo get_template_directory_uri(); ?>/renew2025/img/index/recruit_link_img_sp.jpg" alt="TIES ドクターズコスメを専門に取り扱うオンラインショップ" data-size="345x284"></a></div>
		<div class="imgBox flex fadeInUp">
			<div class="photo"><img class="lazy" data-original="<?php echo get_template_directory_uri(); ?>/renew2025/img/index/recruit_photo.jpg" alt="Recruit" data-size="790x474"></div>
			<div class="textBox">
				<h2 class="headLine04 maskFadeH">Recruit</h2>
				<p class="ttl serif">LIAN clinic では、<br>一緒に働くメンバーを募集しています。</p>
				<div class="comLink"><a href="https://lianclinic.net/recruit/" target="_blank">View More</a></div>
			</div>
		</div>
	</section>
	<?php $all_args = array(
		'post_type' => 'post',
		'posts_per_page' => 4,
	);
	$all_query = new WP_Query($all_args);
	if($all_query->have_posts()): ?>
	<section class="newsSec">
		<div class="checkBg"><img class="lazy" data-original="<?php echo get_template_directory_uri(); ?>/renew2025/img/common/com_bg02.jpg" alt=""></div>
		<div class="content">
			<h2 class="headLine04 maskFadeH">News</h2>
			<div class="comNewsLink fadeInUp">
				<p class="roboto">Category</p>
				<ul class="flex">
					<li class="on"><a href="#">すべて</a></li>
					<?php $cats_args = array(
						'show_count' => 0,
						'hide_empty' => 1,
						'child_of' => 0,
						'title_li' => ''
					);
					$categories = get_categories($cats_args);
					if($categories): foreach($categories as $category): ?>
					<li><a href="#"><?php echo $category->name; ?></a></li>
					<?php endforeach; endif; ?>
				</ul>
			</div>
			<div class="tBox fadeInUp">
				<div class="tabBox">
					<ul class="comNewsList flex">
						<?php while($all_query->have_posts()): $all_query->the_post();
						$image = get_template_directory_uri().'/renew2025/img/noimg.jpg';
						if(has_post_thumbnail()){
							$image = get_the_post_thumbnail_url($post->ID,'full');
						} ?>
						<li><a href="<?php the_permalink(); ?>">
							<div class="pho"><img class="lazy" data-original="<?php echo $image; ?>" alt="" data-size="250x183"></div>
							<div class="textBox">
								<time class="time roboto" datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('Y.m.d'); ?></time>
								<p><?php the_title(); ?></p>
							</div>
						</a></li>
						<?php endwhile; wp_reset_postdata(); ?>
					</ul>
				</div>
				<?php if($categories): foreach($categories as $category): ?>
				<div class="tabBox">
					<ul class="comNewsList flex">
						<?php $sub_args = array(
							'post_type' => 'post',
							'category__in' => array($category->term_id),
							'posts_per_page' => 4
						);
						$sub_query = new WP_Query($sub_args);
						if($sub_query->have_posts()): while($sub_query->have_posts()): $sub_query->the_post();
						$image = get_template_directory_uri().'/renew2025/img/noimg.jpg';
						if(has_post_thumbnail()){
							$image = get_the_post_thumbnail_url($post->ID,'full');
						}  ?>
						<li><a href="<?php the_permalink(); ?>">
							<div class="pho"><img class="lazy" data-original="<?php echo $image; ?>" alt="" data-size="250x183"></div>
							<div class="textBox">
								<time class="time roboto" datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('Y.m.d'); ?></time>
								<p><?php the_title(); ?></p>
							</div>
						</a></li>
						<?php endwhile; wp_reset_postdata(); endif; ?>
					</ul>
				</div>
				<?php endforeach; endif; ?>
			</div>
			<div class="comLink fadeInUp"><a href="<?php echo home_url(); ?>/category/news/">View More</a></div>
		</div>
	</section>
	<?php endif; ?>
	<section class="access">
		<div class="topPhoto">
			<div class="jsParallax">
				<div class="parallax">
					<img class="lazy" data-original="<?php echo get_template_directory_uri(); ?>/renew2025/img/index/access_photo.jpg" alt="Access" data-size="1366x911">
				</div>
			</div>
		</div>
		<div class="accessBox">
			<div class="checkBg"><img class="lazy" data-original="<?php echo get_template_directory_uri(); ?>/renew2025/img/common/com_bg01.jpg" alt=""></div>
			<div class="imgBox flexB">
				<div class="textBox fadeInUp">
					<h2 class="headLine01 maskFadeVPc maskFadeHSp">Access</h2>
					<dl class="clearfix">
						<dt>住所</dt>
						<dd>〒150-0001<br>東京都渋谷区神宮前4丁目 2-12<br>wes building 2F</dd>
						<dt>最寄駅</dt>
						<dd>東京メトロ 銀座線/半蔵門線/千代田線<br>表参道駅 A2出口より徒歩1分</dd>
						<dt>診察時間</dt>
						<dd>9:00〜18:00</dd>
						<dt>休診日</dt>
						<dd>水曜・日曜（第1・第3）</dd>
						<dt>電話番号</dt>
						<dd><a href="tel:0334705678">03-3470-5678</a></dd>
					</dl>
				</div>
				<div class="mapBox fadeInUp">
					<div class="map"><iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d6482.865907344247!2d139.711!3d35.66634!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60188d0bd81b153f%3A0x9aae4a1c706e13fd!2sLIAN%20clinic!5e0!3m2!1sja!2sjp!4v1758608731324!5m2!1sja!2sjp" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></div>
					<p><a href="https://maps.app.goo.gl/N43xVvPqqQPCDGx58" target="_blank">Google Maps</a></p>
				</div>
			</div>
		</div>
	</section>
	<?php get_template_part('renew2025/inc/com_reservation'); ?> 
</div>
<?php $pop_img = get_field('ff_top_case_img','options');;
if($pop_img) { ?>
<div class="pop" id="pop01" data-pop="pop01">
	<div class="popBg"></div>
	<div class="popClose">
		<span class="top">
			<span class="line01"></span>
			<span class="line02"></span>
		</span>
		<span class="bottom">
			<span class="line01"></span>
			<span class="line02"></span>
		</span>
	</div>
	<div class="popInfo">
		<div class="simpleBar">
			<div class="popImg"><img class="popLazy noCheckImg" src="<?php echo $pop_img['url']; ?>" alt="<?php echo $pop_img['alt']; ?>" data-size="660x220"></div>
		</div>
	</div>
</div>
<?php } ?>
<?php get_footer('renew2025'); ?>