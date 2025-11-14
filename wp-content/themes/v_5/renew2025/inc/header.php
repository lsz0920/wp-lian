<header id="gHeader" <?php if(is_home()||is_front_page()||is_post_type_archive('services')||is_post_type_archive('price')){ echo 'class="whiteShow"';} ?>>
	<div class="language target">
		<p class="roboto">Language</p>
		<ul>
			<li class="on"><a href="<?php echo home_url();?>/">日本語</a></li>
			<li><a href="#">English</a></li>
			<li><a href="#">中文</a></li>
		</ul>
	</div>
	<h1 class="logo target"><a href="<?php echo home_url();?>/"><img src="<?php echo get_template_directory_uri(); ?>/renew2025/img/common/logo.png" alt="LIAN clinic" class="off"><img src="<?php echo get_template_directory_uri(); ?>/renew2025/img/common/logo_white.png" alt="LIAN clinic" class="on"></a></h1>
	<ul class="hList target">
		<li class="hSns"><a href="https://lin.ee/U5tTSaw" target="_blank">LINE予約</a></li>
		<li class="hTel"><a href="tel:0334705678">お電話</a></li>
	</ul>
	<div class="menu target">
		<span class="top">
			<span class="line01"></span>
			<span class="line02"></span>
		</span>
		<span class="bottom">
			<span class="line01"></span>
			<span class="line02"></span>
		</span>
	</div>
</header>
<div class="menuBox jsMenuBox">
	<div class="comMenuBg">
		<div class="menuWid">
			<div class="menuSub flex">
				<div class="menuSub01 pc">
					<ul class="menuLink roboto">
						<li><a href="<?php echo home_url();?>/category/news/">News</a></li>
						<li><a href="<?php echo home_url();?>/about/">About</a></li>
						<li><a href="<?php echo home_url();?>/staff/">Staff</a></li>
						<li><a href="<?php echo home_url();?>/price/">Price</a></li>
						<li><a href="<?php echo home_url();?>/case/">Case</a></li>
						<li><a href="<?php echo home_url();?>/access/">Access</a></li>
					</ul>
					<ul class="menuList roboto">
						<li><a href="<?php echo home_url();?>/column/">Column</a></li>
						<li><a href="<?php echo home_url();?>/campaign/">Youtube</a></li>
						<li class="target"><a href="https://ties-cosme.co.jp/shop/" target="_blank">TIES</a></li>
					</ul>
				</div>
				<div class="menuNavi">
					<p class="menuNaviTtl roboto"><a href="<?php echo home_url();?>/services/">Menu</a></p>
					<ul class="flexB">
						<li>
							<p class="menuNaviTitle">お悩みから探す</p>
							<?php
								$terms = get_terms( 
									array(
										'taxonomy'   => 'services_cat',
										'hide_empty' => false,
										'parent' => 502
									)
								);
								echo '<ul class="menuNaviList">';
								foreach ( $terms as $term ) {
									$query = new WP_Query( array(
										'post_type'      => 'services',
										'posts_per_page' => 1,
										'tax_query'      => array(
											array(
												'taxonomy' => 'services_cat',
												'field'    => 'term_id',
												'terms'    => $term->term_id,
											),
										),
									));
									if($query->have_posts()) {
										echo '<li><a class="noFade" href="' .home_url() . '/services/#term'.$term->term_id.'">' . esc_html( $term->name ) . '</a></li>';
									}
									wp_reset_postdata();
								}
								echo '</ul>';
							?>
						<li>
							<p class="menuNaviTitle">施術から探す</p>
							<ul class="menuNaviUl">
								<?php 
								$args = array(
									'taxonomy' => 'services_cat',
									'hide_empty' => 1,
									'parent' => 497,
								);
								$terms = get_terms( $args );
								if($terms){
									foreach($terms as $term) { 
									$query = new WP_Query( array(
										'post_type'      => 'services',
										'posts_per_page' => -1,
										'tax_query'      => array(
											array(
												'taxonomy' => 'services_cat',
												'field'    => 'term_id',
												'terms'    => $term->term_id,
											),
										),
									));
									if($query->have_posts()) {
								?>
								<li><select onchange="document.location.href=this.options[this.selectedIndex].value;">
										<option value=""><?php echo $term->name; ?></option>
										<?php while ( $query->have_posts() ) { $query->the_post(); ?>
										<option value="<?php the_permalink(); ?>"><?php the_title(); ?></option>
										<?php } ?>
									</select>
								</li>
								<?php } wp_reset_postdata(); } }?>
							</ul>
						</li>
					</ul>
					<p class="menuNaviTxt"><a href="<?php echo home_url();?>/services/">すべての施術一覧</a></p>
				</div>
				<div class="menuSub02 pc">
					<ul class="menuLink roboto">
						<li><a href="<?php echo home_url();?>/faq/">Faq</a></li>
						<li><a href="<?php echo home_url();?>/reserve/">Reservation</a></li>
						<li><a href="<?php echo home_url();?>/inquiry/">Contact</a></li>
						<li class="target"><a href="https://lianclinic.net/recruit/" target="_blank">Recruit</a></li>
					</ul>
					<ul class="menuList jp">
						<li><a href="<?php echo home_url();?>/privacy-policy/">プライバシーポリシー</a></li>
						<li><a href="<?php echo home_url();?>/guideline/">医療広告ガイドライン</a></li>
						<li><a href="<?php echo home_url();?>/cancelpolicy/">当院のキャンセルポリシーについて</a></li>
						<li><a href="<?php echo home_url();?>/tradelaw/">特定商取引法に基づく表示</a></li>
					</ul>
				</div>
				<div class="spMenuSub sp clearfix">
					<ul class="menuLink roboto">
						<li><a href="<?php echo home_url();?>/category/news/">News</a></li>
						<li><a href="<?php echo home_url();?>/about/">About</a></li>
						<li><a href="<?php echo home_url();?>/staff/">Staff</a></li>
						<li><a href="<?php echo home_url();?>/price/">Price</a></li>
						<li><a href="<?php echo home_url();?>/case/">Case</a></li>
					</ul>
					<ul class="menuLink roboto">
						<li><a href="<?php echo home_url();?>/access/">Access</a></li>
						<li><a href="<?php echo home_url();?>/faq/">Faq</a></li>
						<li><a href="<?php echo home_url();?>/reserve/">Reservation</a></li>
						<li><a href="<?php echo home_url();?>/inquiry/">Contact</a></li>
						<li class="target"><a href="https://lianclinic.net/recruit/" target="_blank">Recruit</a></li>
					</ul>
				</div>
			</div>
			<ul class="menuSns flex">
				<li><a href="https://www.instagram.com/lianclinic_omotesando/" target="_blank"><img class="popLazy noCheckImg" data-src="<?php echo get_template_directory_uri(); ?>/renew2025/img/common/fix_link_img01.png" alt="" data-size="20x18"></a></li>
				<li><a href="https://youtube.com/channel/UCEHr4nCFMhBi8e2PkEYmYAw" target="_blank"><img class="popLazy noCheckImg" data-src="<?php echo get_template_directory_uri(); ?>/renew2025/img/common/fix_link_img02.png" alt="" data-size="20x20"></a></li>
				<li><a href="https://twitter.com/yukimaromed" target="_blank"><img class="popLazy noCheckImg" data-src="<?php echo get_template_directory_uri(); ?>/renew2025/img/common/fix_link_img03.png" alt="" data-size="20x16"></a></li>
				<li><a href="https://www.tiktok.com/@lianclinic?_t=8UsHNwdliM6&amp;_r=1" target="_blank"><img class="popLazy noCheckImg" data-src="<?php echo get_template_directory_uri(); ?>/renew2025/img/common/fix_link_img04.png" alt="" data-size="20x18"></a></li>
				<li><a href="javascript:;" class="popLink noFade" data-pop="wechat"><img class="popLazy noCheckImg" data-src="<?php echo get_template_directory_uri(); ?>/renew2025/img/common/fix_link_img05.png" alt="" data-size="20x20"></a></li>
				<li><a href="javascript:;" class="popLink noFade" data-pop="whatsapp"><img class="popLazy noCheckImg" data-src="<?php echo get_template_directory_uri(); ?>/renew2025/img/common/fix_link_img06.png" alt="" data-size="20x18"></a></li>
			</ul>
			<div class="menuInfo flexB">
				<div class="menuUlBox sp">
					<ul class="menuUl flexB">
						<li><a href="tel:0334705678"><span class="pc roboto">03-3470-5678</span><span class="sp">お電話</span></a></li>
						<li><a href="https://lin.ee/U5tTSaw" target="_blank">LINE<span class="pc">でのご</span>予約</a></li>
					</ul>
				</div>
				<div class="spMenuInner sp clearfix">
					<ul class="menuList roboto">
						<li><a href="<?php echo home_url();?>/column/">Column</a></li>
						<li><a href="<?php echo home_url();?>/campaign/">Youtube</a></li>
						<li class="target"><a href="https://ties-cosme.co.jp/shop/" target="_blank">TIES</a></li>
					</ul>
					<ul class="menuList jp">
						<li><a href="<?php echo home_url();?>/privacy-policy/">プライバシーポリシー</a></li>
						<li><a href="<?php echo home_url();?>/guideline/">医療広告ガイドライン</a></li>
						<li><a href="<?php echo home_url();?>/cancelpolicy/">当院のキャンセルポリシーについて</a></li>
						<li><a href="<?php echo home_url();?>/tradelaw/">特定商取引法に基づく表示</a></li>
					</ul>
				</div>
				<div class="menuBtn"><a href="<?php echo home_url();?>/lian-reserve/" target="_blank"><img class="popLazy pc" data-src="<?php echo get_template_directory_uri(); ?>/renew2025/img/common/menu_btn_img.png" alt="完全紹介制プライベートクリニック LIAN RESERVE" data-size="443x72"><img class="popLazy sp" data-src="<?php echo get_template_directory_uri(); ?>/renew2025/img/common/menu_btn_img_sp.png" alt="完全紹介制プライベートクリニック LIAN RESERVE" data-size="303x89"></a></div>
				<div class="menuLogoBox flex">
					<div class="menuLogo"><a href="<?php echo home_url();?>/"><img class="popLazy" data-src="<?php echo get_template_directory_uri(); ?>/renew2025/img/common/menu_logo.png" alt="LIAN clinic" data-size="101x39"></a></div>
					<p class="menuText">〒150-0001<br>東京都渋谷区神宮前4丁目 2-12 wes building 2F<a href="https://maps.app.goo.gl/N43xVvPqqQPCDGx58" target="_blank" class="roboto">Google Maps</a></p>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="menuBg"></div>
<div class="fixLink">
	<ul>
		<li><a href="https://www.instagram.com/lianclinic_omotesando/" target="_blank"><img class="lazy noCheckImg" data-original="<?php echo get_template_directory_uri(); ?>/renew2025/img/common/fix_link_img01.png" alt="" data-size="20x18"></a></li>
		<li><a href="https://youtube.com/channel/UCEHr4nCFMhBi8e2PkEYmYAw" target="_blank"><img class="lazy noCheckImg" data-original="<?php echo get_template_directory_uri(); ?>/renew2025/img/common/fix_link_img02.png" alt="" data-size="20x20"></a></li>
		<li><a href="https://twitter.com/yukimaromed" target="_blank"><img class="lazy noCheckImg" data-original="<?php echo get_template_directory_uri(); ?>/renew2025/img/common/fix_link_img03.png" alt="" data-size="20x16"></a></li>
		<li><a href="https://www.tiktok.com/@lianclinic?_t=8UsHNwdliM6&amp;_r=1" target="_blank"><img class="lazy noCheckImg" data-original="<?php echo get_template_directory_uri(); ?>/renew2025/img/common/fix_link_img04.png" alt="" data-size="20x18"></a></li>
		<li><a href="javascript:;" class="popLink noFade" data-pop="wechat"><img class="lazy noCheckImg" data-original="<?php echo get_template_directory_uri(); ?>/renew2025/img/common/fix_link_img05.png" alt="" data-size="20x20"></a></li>
		<li><a href="javascript:;" class="popLink noFade" data-pop="whatsapp"><img class="lazy noCheckImg" data-original="<?php echo get_template_directory_uri(); ?>/renew2025/img/common/fix_link_img06.png" alt="" data-size="20x18"></a></li>
	</ul>
</div>
<span class="dli-loading-1"></span>