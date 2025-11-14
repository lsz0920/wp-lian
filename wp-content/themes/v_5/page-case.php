<?php get_header('reserve'); ?>
<div class="mainImg fullH">
	<div class="bg fullH">
		<picture>
			<source srcset="<?php echo get_template_directory_uri(); ?>/renew2025/img/lian-reserve/case/main_img_sp.jpg" media="(max-width: 999px)">
			<img data-skip-lazy src="<?php echo get_template_directory_uri(); ?>/renew2025/img/lian-reserve/case/main_img.jpg" alt="">
		</picture>
	</div>
	<div class="textBg">
		<picture>
			<source srcset="<?php echo get_template_directory_uri(); ?>/renew2025/img/common/main_img_bg_sp.png" media="(max-width: 999px)">
			<img data-skip-lazy src="<?php echo get_template_directory_uri(); ?>/renew2025/img/common/main_img_bg.png" alt="">
		</picture>
	</div>
	<h2><span class="en fadeTxt">CASE</span><span class="jp">豊富な症例実績と世界レベルの技術力</span></h2>
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
			<li>CASE</li>
		</ul>
	</div>
	<div class="checkBg"><img data-skip-lazy src="<?php echo get_template_directory_uri(); ?>/renew2025/img/common/com_bg02.jpg" alt=""></div>
	<div class="content">
		<?php 
			$menu_id = @$_GET['menu']?$_GET['menu']:'';
			$doctor_id = @$_GET['doctor']?$_GET['doctor']:'';
			$nurse_id = @$_GET['nurse']?$_GET['nurse']:'';

			$case_menu_ary = [];
			$case_doctor_ary = [];
			$case_nurse_ary = [];

			$all_args = array(
				'post_type' => 'case',
				'posts_per_page' => -1,
				'meta_query' => array(
					'relation' => 'AND',
					array(
						'key' => 'ff_showin',
						'value' => '"reserve"',
						'compare' => 'LIKE',
					),
				)
			);
			$all_query = new WP_Query($all_args);
			if ( $all_query->have_posts() ) {
				while ( $all_query->have_posts() ) { $all_query->the_post();

					$case_menu = get_field('ff_case_menu');
					$staff_doctor = get_field('ff_staff_doctor');
					$staff_nurse = get_field('ff_staff_nurse');

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

					if($staff_nurse){
						foreach($staff_nurse as $post){
							setup_postdata($post);
							if(!in_array(get_the_ID(), array_column($case_nurse_ary, 'id'))){
								$case_nurse_ary[] = array(
									'id'    => get_the_ID(),
									'title' => get_the_title(),
								);
							}
						}
					} wp_reset_postdata();
				}
			} wp_reset_postdata();
		?>
		<form role="search" method="get" action="<?php echo home_url( '/' ); ?>lian-reserve/case/">
			<ul class="comSelectList flexB fadeInUp">
				<li><select name="menu" onchange="this.form.submit()">
						<option value="">施術から探す</option>
						<?php
							if($case_menu_ary){
								foreach($case_menu_ary as $menu){?>
									<option <?php if($menu_id == $menu['id']){ echo 'selected';} ?> value="<?php echo $menu['id']; ?>"><?php echo $menu['title']; ?></option>
								<?php }
							}
						?>
					</select>
				</li>
				<li><select name="doctor" onchange="this.form.submit()">
						<option value="">担当医師から探す</option>
						<?php
							if($case_doctor_ary){
								foreach($case_doctor_ary as $doctor){?>
									<option <?php if($doctor_id == $doctor['id']){ echo 'selected';} ?> value="<?php echo $doctor['id']; ?>"><?php echo $doctor['title']; ?></option>
								<?php }
							}
						?>
					</select>
				</li>
				<li><select name="nurse" onchange="this.form.submit()">
						<option value="">担当看護師から探す</option>
						<?php
							if($case_nurse_ary){
								foreach($case_nurse_ary as $nurse){?>
									<option <?php if($nurse_id == $nurse['id']){ echo 'selected';} ?> value="<?php echo $nurse['id']; ?>"><?php echo $nurse['title']; ?></option>
								<?php }
							}
						?>
					</select>
				</li>
			</ul>
		</form>

		<?php 
			if($menu_id){
				$menuAry = array(
					'key' => 'ff_case_menu',
					'value' => '"' . $menu_id . '"',
					'compare' => 'LIKE'
				);
			}else {
				$menuAry = [];
			}

			if($doctor_id){
				$doctorAry = array(
					'key' => 'ff_staff_doctor',
					'value' => '"' . $doctor_id . '"',
					'compare' => 'LIKE'
				);
			}else {
				$doctorAry = [];
			}

			if($nurse_id){
				$nurseAry = array(
					'key' => 'ff_staff_nurse',
					'value' => '"' . $nurse_id . '"',
					'compare' => 'LIKE'
				);
			}else {
				$nurseAry = [];
			}

			$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
			$args = array(
				'post_type' => 'case',
				'posts_per_page' => 30,
				'paged' => $paged,
				'meta_query' => array(
					'relation' => 'AND',
					array(
						'key' => 'ff_showin',
						'value' => '"reserve"',
						'compare' => 'LIKE',
					),
					$menuAry,
					$doctorAry,
					$nurseAry,
				)
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
				$staff_doctor = get_field('ff_staff_doctor');
				$staff_nurse = get_field('ff_staff_nurse');
				$permalink = get_the_permalink();

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
				} wp_reset_postdata();
			?>
			<li class="fade">
				<a href="<?php echo $permalink; ?>">
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
			<?php if(function_exists('wp_pagenavi')) { wp_pagenavi(array(
				'query' => $query,
				'options' => array(
					'prev_text' => 'Prev',
					'next_text' => 'Next',
					'num_pages' => 2,
					'larger_page_numbers_multiple' => 0,
					'first_text' => "01",
					'last_text' => "%TOTAL_PAGES%",
				)
			));}?>
		</div>
	</div>
</div>
<?php get_footer('reserve'); ?>