<?php get_header('new'); ?>
<section class="pageTitle">
	<div class="photo"><img class="nolazy" src="<?php echo get_template_directory_uri(); ?>/new/img/services/page_title_bg.jpg" alt=""></div>
	<h2><span class="maskFadeH">Menu</span></h2>
</section>
<div class="mainBox">
	<div class="checkBg"><img src="<?php echo get_template_directory_uri(); ?>/new/img/common/com_bg05.jpg" alt=""></div>
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
				'taxonomy' => 'problem',
				'hide_empty' => 0,
				'exclude' => '',
			);
			$terms = get_terms( $args );
			if($terms){
			?>
			<section class="info">
				<h3 class="headLine03 fadeInUp">お悩みから探す</h3>
				<?php foreach($terms as $term) { ?>
				<dl>
					<dt class="fadeInUp"><?php echo $term->name; ?></dt>
					<?php 
						$args = array(
							'post_type' => 'services',
							'posts_per_page' => -1,
							'tax_query' => array(
								array(
									'taxonomy' => 'problem',
									'field' => 'slug',
									'terms' => $term->slug,
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
				<?php } ?>
			</section>
			<?php } ?>

			<?php 
			$args = array(
				'taxonomy' => 'treatment',
				'hide_empty' => 0,
				'exclude' => '',
			);
			$terms = get_terms( $args );
			if($terms){
			?>
			<section class="info">
				<h3 class="headLine03 fadeInUp">施術から探す</h3>
				<?php foreach($terms as $term) { ?>
				<dl>
					<dt class="fadeInUp"><?php echo $term->name; ?></dt>
					<?php 
						$args = array(
							'post_type' => 'services',
							'posts_per_page' => -1,
							'tax_query' => array(
								array(
									'taxonomy' => 'treatment',
									'field' => 'slug',
									'terms' => $term->slug,
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
				<?php } ?>
			</section>
			<?php } ?>
		</div>
	</div>
	<?php get_template_part('new/inc/com_reservation') ?>
</div>
<?php get_footer('new'); ?>
