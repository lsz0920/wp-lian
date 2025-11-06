<?php get_header('renew2025'); ?>
<section class="pageTitle">
	<div class="photo"><img class="nolazy" src="<?php echo get_template_directory_uri(); ?>/renew2025/img/services/page_title_bg.jpg" alt=""></div>
	<h2><span class="maskFadeH">Menu</span></h2>
</section>
<div class="mainBox">
	<div class="checkBg"><img src="<?php echo get_template_directory_uri(); ?>/renew2025/img/common/com_bg05.jpg" alt=""></div>
	<div id="pagePath">
		<ul>
			<li><a href="<?php echo home_url();?>">Top</a>/</li>
			<li>Menu</li>
		</ul>
	</div>
	<div class="menuSec">
		<div class="content">
			<?php 
			$args = array(
				'taxonomy' => 'services_cat',
				'hide_empty' => 0,
				'exclude' => '',
				'parent' => 0
			);
			$terms = get_terms( $args );
			if($terms){
				foreach($terms as $term) {
			?>
			<section class="info">
				<h3 class="headLine03 fadeInUp"><?php echo $term->name; ?></h3>
				<?php 
				$sml_args = array(
					'taxonomy' => 'services_cat',
					'hide_empty' => 0,
					'exclude' => '',
					'parent' =>  $term->term_id
				);
				$sml_terms = get_terms( $sml_args );
				if($sml_terms){
				foreach($sml_terms as $sml_term) { ?>
				<dl>
					<dt class="fadeInUp"><?php echo $sml_term->name; ?></dt>
					<?php 
						$args = array(
							'post_type' => 'services',
							'posts_per_page' => -1,
							'tax_query' => array(
								array(
									'taxonomy' => 'services_cat',
									'field' => 'slug',
									'terms' => $sml_term->slug,
								)
							)
						);
						$query = new WP_Query( $args );
						if ( $query->have_posts() ) { 
					?>
					<dd>
						<ul class="textList flexB fadeInUp">
							<?php while ( $query->have_posts() ) { $query->the_post(); ?>
							<li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
							<?php } ?>
						</ul>
					</dd>
					<?php } wp_reset_postdata(); ?>
				</dl>
				<?php } } ?>
			</section>
			<?php } } ?>
		</div>
	</div>
	<?php get_template_part('renew2025/inc/com_reservation'); ?>
</div>
<?php get_footer('renew2025'); ?>
