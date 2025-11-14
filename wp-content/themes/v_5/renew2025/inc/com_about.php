<div class="content">
	<div class="textBox fadeInUp">
		<h2 class="headLine04 maskFadeHPc maskFadeVSp">About Staff</h2>
		<h3 class="ttl serif">医師・看護師の指名制度</h3>
		<p>リアンクリニックでは、美容医療の現場で4年以上の実務経験を持つ<br class="pc">医師・看護師のみが在籍しています。<br>豊富な症例実績と高い技術力をもとに、安全で的確な施術をご提供いたします。<br>ご希望の医師・看護師がいらっしゃる場合は、ご予約時にご指名ください。</p>
		<div class="comLink"><a href="<?php echo home_url();?>/staff/">View More</a></div>
	</div>
</div>
<?php $args = array(
	'post_type' => 'staff',
	'posts_per_page' => -1,
);
$the_query = new WP_Query( $args );
if($the_query->have_posts()): ?>
<div class="photoUl fadeInUp">
	<div class="swiper jsPhotoList">
		<ul class="swiper-wrapper">
			<?php while($the_query->have_posts()): $the_query->the_post();
			$image = get_template_directory_uri().'/renew2025/img/noimg.jpg';
			if(has_post_thumbnail()){
				$image = get_the_post_thumbnail_url($post->ID,'full');
			} ?>
			<li class="swiper-slide"><a href="<?php the_permalink(); ?>" class="bgLazy" data-bg="<?php echo $image; ?>"></a></li>
			<?php endwhile; ?>
		</ul>
	</div>
</div>
<?php endif; ?>
<p class="enText roboto fadeInUp">Doctors &amp; Nurses</p>