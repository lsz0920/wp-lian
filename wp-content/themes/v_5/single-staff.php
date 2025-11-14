<?php get_header('renew2025'); ?>
<section class="mainBox">
	<div class="checkBg"><img src="<?php echo get_template_directory_uri(); ?>/renew2025/img/common/com_bg05.jpg" alt=""></div>
	<div id="pagePath">
		<ul>
			<li><a href="<?php echo home_url();?>/">Top</a>/</li>
			<li><a href="<?php echo home_url();?>/staff/">Staff</a>/</li>
			<li><?php the_title(); ?></li>
		</ul>
	</div>
	<div class="detail">
		<?php 
			$thumbnail_id = get_post_thumbnail_id();
			$thumbnail_data = wp_get_attachment_image_src($thumbnail_id, 'full');
			$thumbnail_width = $thumbnail_data[1];
			$thumbnail_height = $thumbnail_data[2];
			$thumbnail = get_the_post_thumbnail_url($post->ID,'full');
			$english_name = CFS()->get('english_name');
			$job_position = CFS()->get('job_position');
			$description_pc = CFS()->get('description_pc');
			$staff_instagram = CFS()->get('staff-instagram');
			$staff_youtube = CFS()->get('staff-youtube');
			$staff_x = CFS()->get('staff-x');
			$career = CFS()->get('career');
			$career2 = CFS()->get('career2');
			$treatment = CFS()->get('treatment');
			$thoughts = CFS()->get('thoughts');
		?>
		<h2 class="headLine06 maskFadeV"><a href="<?php echo home_url();?>/staff/">Staff</a></h2>
		<?php if($english_name) {?><p class="enText roboto"><?php echo $english_name; ?></p><?php } ?>
		<div class="imgBox flex">
			<div class="photoBox fadeInUp">
				<?php if($thumbnail) {?>
				<div class="photo"><img class="lazy" data-original="<?php echo $thumbnail; ?>" alt="" data-size="<?php echo $thumbnail_width; ?>x<?php echo $thumbnail_height; ?>"></div>
				<?php } ?>
				<p class="name"><?php echo $job_position; ?><span class="serif"><?php the_title(); ?></span></p>
				<?php if($staff_instagram) {?>
				<ul class="sns flex roboto">
					<?php if($staff_instagram) {?>
					<li><a href="<?php echo $staff_instagram; ?>" target="_blank"><img class="lazy" data-original="<?php echo get_template_directory_uri(); ?>/renew2025/img/staff/kenta-fujio/sns_img01.png" alt="instagram" data-size="18x18">instagram</a></li>
					<?php } ?>
					<?php if($staff_x) {?>
					<li><a href="<?php echo $staff_youstaff_xtube; ?>" target="_blank"><img class="lazy" data-original="<?php echo get_template_directory_uri(); ?>/renew2025/img/staff/kenta-fujio/sns_img02.png" alt="x" data-size="18x18">X</a></li>
					<?php } ?>
					<?php if($staff_youtube) {?>
					<li><a href="<?php echo $staff_x; ?>" target="_blank"><img class="lazy" data-original="<?php echo get_template_directory_uri(); ?>/renew2025/img/staff/kenta-fujio/sns_img03.png" alt="YouTube" data-size="18x18">YouTube</a></li>
					<?php } ?>
				</ul>
				<?php } ?>
				<?php 
					$args = array(
						'post_type' => 'case',
						'posts_per_page' => 1,
						'meta_query' => array(
							'relation' => 'AND',
							array(
								'key'     => 'ff_staff_doctor',
								'value'   => '"' . get_the_ID() . '"',
								'compare' => 'LIKE',
							),
							array(
								'key' => 'ff_showin',
								'value' => '"clinic"',
								'compare' => '=',
							),
						),
					);
					$query = new WP_Query($args);
					if ( $query->have_posts() ) {
				?>
				<div class="link"><a href="<?php echo home_url(); ?>/?post_type=case&menu=&doctor=<?php echo get_the_ID(); ?>&nurse=">担当した症例を見る</a></div>
				<?php } ?>
			</div>
			<div class="textBox fadeInUp">
				<h3><?php echo $description_pc; ?></h3>
				<?php if($career) {?>
				<h4>経歴</h4>
				<?php echo $career; ?>
				<?php } ?>
				<?php if($career2) {?>
				<h4>所属・資格</h4>
				<?php echo $career2; ?>
				<?php } ?>
				<?php if($treatment) {?>
				<h4>得意施術</h4>
				<?php echo $treatment; ?>
				<?php } ?>
				<?php if($thoughts) {?>
				<h4>美容への思い</h4>
				<?php echo $thoughts; ?>
				<?php } ?>
			</div>
		</div>
	</div>
	<?php 
	$postId = get_the_id();

	$subArr = array();
	$args = array(
		'posts_per_page'  => -1,
		'post_type'  => 'staff',
		'orderby' => 'menu_order',
		'order' => 'ASC'
	);
	$my_posts = get_posts( $args );
	foreach ( $my_posts as $post ):
	setup_postdata( $post );
	array_push($subArr,get_the_id());
	endforeach;wp_reset_postdata();

	$array = array_diff($subArr, [$postId]);
	
	$arr = array_merge($array, $array);
	$key_next = array_keys($subArr,$postId)[0];
	$next_array = array_slice($arr,$key_next,5);

	if($array){
		if(count($array) < 5){
			$case_next_arr = $array;
		}else {
			$case_next_arr = $next_array;
		}
		$argsarr = array(
			'post_type'  => 'staff',
			'posts_per_page'  => 5,
			'post__in'   => $case_next_arr,
			'orderby' => 'post__in',
		);
		$query = new WP_Query($argsarr);
		if ( $query->have_posts() ) {
	?>
	<div class="content">
		<div class="btmBox">
			<h3 class="headLine07 fadeInUp">Other Staff</h3>
			<ul class="comStaffList flex">
				<?php while ( $query->have_posts() ) { $query->the_post(); 
					$thumbnail = get_the_post_thumbnail_url($post->ID,'full');
					if(!$thumbnail) {
						$thumbnail = get_template_directory_uri().'/renew2025/img/noimg.jpg';
					}
				?>
				<li class="fadeInUp"><a href="<?php the_permalink(); ?>">
					<div class="photo"><img class="lazy" data-original="<?php echo $thumbnail; ?>" alt="<?php the_title(); ?>" data-size="200x222"></div>
					<p><?php echo CFS()->get('job_position'); ?><span><?php the_title(); ?></span></p>
				</a></li>
				<?php } ?>
			</ul>
			<div class="comLink fadeInUp"><a href="<?php echo home_url();?>/staff/">View More</a></div>
		</div>
	</div>
	<?php } wp_reset_postdata(); } ?>
</section>
<?php get_footer('renew2025'); ?>