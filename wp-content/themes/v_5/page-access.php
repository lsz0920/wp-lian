<?php get_header('reserve'); ?>
<div class="mainImg fullH">
	<div class="bg fullH">
		<picture>
			<source srcset="<?php echo get_template_directory_uri(); ?>/renew2025/img/lian-reserve/access/main_img_sp.jpg" media="(max-width: 999px)">
			<img data-skip-lazy src="<?php echo get_template_directory_uri(); ?>/renew2025/img/lian-reserve/access/main_img.jpg" alt="">
		</picture>
	</div>
	<div class="textBg">
		<picture>
			<source srcset="<?php echo get_template_directory_uri(); ?>/renew2025/img/common/main_img_bg_sp.png" media="(max-width: 999px)">
			<img data-skip-lazy src="<?php echo get_template_directory_uri(); ?>/renew2025/img/common/main_img_bg.png" alt="">
		</picture>
	</div>
	<h2><span class="en fadeTxt">ACCESS</span><span class="jp">完全紹介制プライベートクリニック</span></h2>
	<div class="comScroll jsHoverTxt"><a href="#scroll">
		<span class="scroll">
			<span class="scrTxt off">SCROLL</span>
			<span class="scrTxt hover">SCROLL</span>
		</span>
	</a></div>
</div>
<div class="mainBox" id="scroll">
	<div id="pagePath" class="reserve">
		<ul>
			<li><a href="<?php echo home_url();?>/lian-reserve/">TOP</a></li>
			<li>ACCESS</li>
		</ul>
	</div>
	<div class="checkBg"><img data-skip-lazy src="<?php echo get_template_directory_uri(); ?>/renew2025/img/common/com_bg02.jpg" alt=""></div>
	<section class="comLocation flexB">
		<div class="textBox">
			<ul class="textList">
				<li>
					<h3 class="ttl roboto">ADRESS</h3>
					<p>〒150-0001<br>東京都渋谷区神宮前4-4-13 神宮前柴田ビル1F<span class="en">Jingumae Shibata Bldg. 1F,<br>4-4-13 Jingumae, Shibuya-ku, Tokyo 150-0001</span></p>
				</li>
				<li>
					<h3 class="ttl roboto">ACCESS</h3>
					<p>東京メトロ 銀座線/千代田線/半蔵門線 表参道駅<br>A2出口徒歩3分<span class="en">Tokyo Metro Ginza Line/Chiyoda Line/Hanzomon <br class="sp">Line <br class="pc">Omotesando Station<br>3 minute walk from Exit A2</span></p>
				</li>
			</ul>
		</div>
		<div class="mapBox">
			<div class="map"><iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d405.17468847576555!2d139.7110233!3d35.667213!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60188ca1dfddf717%3A0xeff5a3f6e14ef716!2z44CSMTUwLTAwMDEg5p2x5Lqs6YO95riL6LC35Yy656We5a6u5YmN77yU5LiB55uu77yU4oiS77yR77yTIOelnuWuruWJjeaftOeUsOODk-ODqw!5e0!3m2!1sja!2sjp!4v1754647273873!5m2!1sja!2sjp" width="600" height="450" style="border:0;" allowfullscreen="" referrerpolicy="no-referrer-when-downgrade"></iframe></div>
			<p class="roboto"><a href="https://maps.app.goo.gl/Y7XNEP6gPYVfK61v5" target="_blank">Google Maps</a></p>
		</div>
	</section>
</div>
<?php get_footer('reserve'); ?>