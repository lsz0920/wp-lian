<?php get_header('renew2025'); ?>
<section class="mainBox">
	<div class="checkBg"><img data-skip-lazy src="<?php echo get_template_directory_uri(); ?>/renew2025/img/common/com_bg05.jpg" alt=""></div>
	<div id="pagePath">
		<ul>
			<li><a href="<?php echo home_url();?>">Top</a>/</li>
			<li>Case</li>
		</ul>
	</div>
	<div class="content">
		<h2 class="headLine04"><span class="maskFadeH">Case</span></h2>
		<?php 
			$args = array(
				'post_type' => 'case',
				'posts_per_page' => -1,
			);
			$query = new WP_Query($args);
			if ( $query->have_posts() ) {
				$case_menu_ary = [];
				$case_doctor_ary = [];
				$case_nurse_ary = [];
				while ( $query->have_posts() ) { $query->the_post();

					$case_menu = get_field('ff_case_menu');
					$case_menu_name = '';
					if($case_menu){
						foreach($case_menu as $post){
							setup_postdata($post);
							if(!in_array(get_the_ID(), array_column($case_menu_ary, 'id'))){
								$case_menu_ary[] = array(
									'id'    => get_the_ID(),
									'title' => get_the_title(),
								);
							}
						}
					} wp_reset_postdata();


					$staff_doctor = get_field('ff_staff_doctor');
					if($staff_doctor){
						foreach($staff_doctor as $post){
							setup_postdata($post);
							if(!in_array(get_the_ID(), array_column($case_doctor_ary, 'id'))){
								$case_doctor_ary[] = array(
									'id'    => get_the_ID(),
									'title' => get_the_title(),
								);
							}
						}
					} wp_reset_postdata();

					$staff_nurse = get_field('ff_staff_nurse');
					if($staff_nurse){
						foreach($staff_nurse as $post){
							setup_postdata($post);
							if(!in_array(get_the_ID(), array_column($case_doctor_ary, 'id'))){
								$case_doctor_ary[] = array(
									'id'    => get_the_ID(),
									'title' => get_the_title(),
								);
							}
						}
					} wp_reset_postdata();
				}
			} wp_reset_postdata();
		?>
		<form role="search" method="get" action="<?php echo home_url( '/' ); ?>">
			<input type="hidden" name="post_type" value="case">
			<ul class="comSelectList flexB fadeInUp">
				<li><select name="menu" onchange="this.form.submit()">
						<option value="">施術から探す</option>
						<?php
							if($case_menu_ary){
								foreach($case_menu_ary as $menu){
									echo '<option value="'.$menu['id'].'">'.$menu['title'].'</option>';
								}
							}
						?>
					</select>
				</li>
				<li><select name="doctor" onchange="this.form.submit()">
						<option value="">担当医師から探す</option>
						<?php
							if($case_doctor_ary){
								foreach($case_doctor_ary as $doctor){
									echo '<option value="'.$doctor['id'].'">'.$doctor['title'].'</option>';
								}
							}
						?>
					</select>
				</li>
				<li><select name="nurse" onchange="this.form.submit()">
						<option value="">担当看護師から探す</option>
						<?php
							if($case_nurse_ary){
								foreach($case_nurse_ary as $nurse){
									echo '<option value="'.$nurse['id'].'">'.$nurse['title'].'</option>';
								}
							}
						?>
					</select>
				</li>
			</ul>
		</form>

		<?php 

			$menu = @$_GET['menu']?$_GET['menu']:'';
			$doctor = @$_GET['doctor']?$_GET['doctor']:'';
			$nurse = @$_GET['nurse']?$_GET['nurse']:'';

			/* $meta_query = array(
				'relation' => 'AND',
				array(
					'key' => 'ff_showin',
					'value' => 'clinic',
					'compare' => 'LIKE',
				),
			); */
			
			/* if (!empty( $case_menu_ary ) && !empty( $menu ) ) {
				$meta_query[] = array( 'relation' => 'OR' );
				foreach ( $case_menu_ary as $id ) {
					$meta_query[] = array(
						'key'     => 'ff_case_menu',
						'value'   => '"' . $id['id'] . '"',
						'compare' => 'LIKE'
					);
				}
			} */

			/* if ( ! empty( $case_doctor_ary ) && ! empty( $doctor )) {
				$meta_query[] = array( 'relation' => 'OR' );
				foreach ( $case_doctor_ary as $id ) {
					$meta_query[] = array(
						'key'     => 'ff_staff_doctor',
						'value'   => '"' . $id['id'] . '"',
						'compare' => 'LIKE'
					);
				}
			}

			if ( ! empty( $case_nurse_ary ) && ! empty( $nurse )) {
				$meta_query[] = array( 'relation' => 'OR' );
				foreach ( $case_nurse_ary as $id ) {
					$meta_query[] = array(
						'key'     => 'ff_staff_nurse',
						'value'   => '"' . $id['id'] . '"',
						'compare' => 'LIKE'
					);
				}
			} */

			$args = array(
				'post_type' => 'case',
				'posts_per_page' => 30,
				/* 'meta_query' => $meta_query */
			);
			
			$query = new WP_Query($args);
			if ( $query->have_posts() ) {
		?>

		<ul class="comCaseList flexB fadeAni">
			<?php while ( $query->have_posts() ) { $query->the_post();
				$image = @get_field('ff_gallery')[0]['url'];
				if(!$image){
					$image = get_template_directory_uri().'/renew2025/img/noimg.jpg';
				}

				$case_menu = get_field('ff_case_menu');
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

				$staff_doctor = get_field('ff_staff_doctor');
				$staff_nurse = get_field('ff_staff_nurse');

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
				} wp_reset_postdata();
			?>
			<li class="fade">
				<a href="<?php the_permalink(); ?>">
					<div class="pho"><img class="lazy" data-original="<?php echo $image; ?>" alt="" data-size="300x300"></div>
					<p>
						<span class="serif"><?php echo $case_menu_name; ?></span>
						<?php echo $staff_doctor_name; ?>
						<?php echo $staff_nurse_name; ?>
					</p>
				</a>
			</li>
			<?php } ?>
		</ul>
		<?php } wp_reset_postdata(); ?>
		<div class="fadeInUp">
			<?php if(function_exists('wp_pagenavi')) { wp_pagenavi();}?>
		</div>
	</div>
</section>
<?php get_footer('renew2025'); ?>