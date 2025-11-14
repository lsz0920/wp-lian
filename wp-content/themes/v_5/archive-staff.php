<?php get_header('renew2025'); ?>
<section class="mainBox">
	<div class="checkBg"><img src="<?php echo get_template_directory_uri(); ?>/renew2025/img/common/com_bg05.jpg" alt=""></div>
	<div id="pagePath">
		<ul>
			<li><a href="<?php echo home_url();?>">Top</a>/</li>
			<li>Staff</li>
		</ul>
	</div>
	<div class="content">
		<div class="textBox">
			<h2 class="headLine04"><span class="maskFadeH">Staff</span></h2>
			<h3 class="ttl serif fadeInUp">医師・看護師の指名制度</h3>
			<p class="fadeInUp">リアンクリニックでは、美容医療の現場で4年以上の実務経験を持つ<br class="pc">医師・看護師のみが在籍しています。<br>豊富な症例実績と高い技術力をもとに、安全で的確な施術をご提供いたします。<br>ご希望の医師・看護師がいらっしゃる場合は、ご予約時にご指名ください。</p>
		</div>
		<?php 
		$args = array(
			'taxonomy' => 'staff_category',
			'hide_empty' => 1,
			'exclude' => '',
		);
		$terms = get_terms( $args );
		if($terms){
			foreach ($terms as $term) {
		?>
		<div class="info">
			<h3 class="headLine05 fadeInUp"><span><?php echo $term->name; ?></span></h3>
			<?php 
				$args = array(
					'post_type' => 'staff',
					'posts_per_page' => '-1',
					'tax_query' => array(
						array(
							'taxonomy' => 'staff_category',
							'field'    => 'term_id',
							'terms'    => $term->term_id,
						),
					),
				);
				$query = new WP_Query( $args );
				if ( $query->have_posts() ) {
			?>
			<ul class="comStaffList flex fadeAni">
				<?php while ( $query->have_posts() ) { $query->the_post();
					$thumbnail = get_the_post_thumbnail_url($post->ID,'full');
					if(!$thumbnail) {
						$thumbnail = get_template_directory_uri().'/renew2025/img/noimg.jpg';
					}
				?>
				<li class="fade"><a href="<?php the_permalink(); ?>">
					<div class="photo"><img class="lazy" data-original="<?php echo $thumbnail; ?>" alt="<?php echo get_the_title(); ?>" data-size="200x222"></div>
					<p><?php echo CFS()->get('english_name'); ?><span><?php the_title(); ?></span></p>
				</a></li>
				<?php } ?>
			</ul>
			<?php } wp_reset_postdata(); ?>
		</div>
		<?php } } ?>
		
	</div>
</section>
<?php get_footer('renew2025'); ?>