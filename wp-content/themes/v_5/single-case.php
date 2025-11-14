
<?php get_header('renew2025'); 

$showin = get_field('ff_showin');
if($showin == 'reserve'){
	get_template_part('single-case-reserve');
}else {
?>
<div class="mainBox">
	<div class="checkBg"><img data-skip-lazy src="<?php echo get_template_directory_uri(); ?>/renew2025/img/common/com_bg05.jpg" alt=""></div>
	<div id="pagePath">
		<?php 
			$case_menu = get_field('ff_case_menu');
		?>
		<ul>
			<li><a href="<?php echo home_url();?>">Top</a>/</li>
			<li><a href="<?php echo home_url();?>/case/">Case</a>/</li>
			<li>
				<?php if($case_menu){
					$num=0;
					foreach( $case_menu as $post ) {
						setup_postdata($post);
						$num++;
						if($num != 1){
							echo '＋';
						}
						echo get_the_title();
					}
				} wp_reset_postdata(); ?>
			</li>
		</ul>
	</div>
	<div class="comCaseDetail">
		<section class="detail">
			<h2 class="headLine06 maskFadeVPc maskFadeHSp"><a href="<?php echo home_url();?>/case/">Case</a></h2>
			<div class="imgBox flex">
				<?php 
					$gallery = get_field('ff_gallery');
					$summary = get_field('ff_summary');
					$risks = get_field('ff_risks');
					$price_clinic = get_field('ff_price_clinic');
					if($gallery){
				?>
				<div class="photoBox swiper fadeInUp">
					<div class="slide swiper-wrapper">
						<?php foreach($gallery as $image) { ?>
						<div class="photo swiper-slide"><img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>"></div>
						<?php } ?>
					</div>
					<div class="swiper-pagination"></div>
					<ul class="comArrow flexB">
						<li class="prev"><img src="<?php echo get_template_directory_uri(); ?>/renew2025/img/common/prev.png" alt="" data-size="13x14"></li>
						<li class="next"><img src="<?php echo get_template_directory_uri(); ?>/renew2025/img/common/next.png" alt="" data-size="13x14"></li>
					</ul>
				</div>
				<?php } ?>
				<div class="textBox">
					<div class="textInfo fadeInUp">
						<?php 
						$case_menu_ary = [];
						if($case_menu){
							$menu_num = 0;
						?>
						<h3>
							<?php 
							foreach( $case_menu as $post ) {
								setup_postdata($post);
								$menu_num++;
								array_push($case_menu_ary, $post->ID);
							?>
							<?php if($menu_num != 1) {?>
							<span class="ico">＋</span>
							<?php } ?>
							<a href="<?php the_permalink(); ?>" class="txt"><?php the_title(); ?></a>
							<?php } ?>
						</h3>
						<?php } wp_reset_postdata();?>
						<?php if($summary){ ?>
						<h4>施術の説明</h4>
						<?php echo $summary; ?>
						<?php } ?>
						<?php if($risks){ ?>
						<h4>副作用・リスク</h4>
						<?php echo $risks; ?>
						<?php } ?>
						<?php if($price_clinic) {?>
						<h4>施術の価格<small>※価格は税込表記です。</small></h4>
						<p><?php echo $price_clinic; ?></p>
						<?php } ?>
					</div>
					<?php 
						$staff_doctor = get_field('ff_staff_doctor');
						$staff_nurse = get_field('ff_staff_nurse');
					?>
					<ul class="listUl flexB">
						<?php 
							if($staff_doctor){
						?>
						<li class="fadeInUp">
							<p class="ttl">担当医師</p>
							<ul class="comStaffList">
								<?php 
									foreach( $staff_doctor as $post ) {
									setup_postdata($post);

									$thumbnail_id = get_post_thumbnail_id();
									$thumbnail_data = wp_get_attachment_image_src($thumbnail_id, 'full');
									$thumbnail_width = $thumbnail_data[1];
									$thumbnail_height = $thumbnail_data[2];
									$thumbnail = get_the_post_thumbnail_url($post->ID,'full');
								?>
								<li><a href="<?php the_permalink(); ?>">
									<div class="photo"><img class="lazy" data-original="<?php echo $thumbnail; ?>" alt="" data-size="<?php echo $thumbnail_width; ?>x<?php echo $thumbnail_height; ?>"></div>
									<p><span><?php the_title(); ?></span><?php echo CFS()->get('english_name'); ?></p>
								</a></li>
								<?php } ?>
							</ul>
						</li>
						<?php } wp_reset_postdata(); ?>

						<?php 
							if($staff_nurse){
						?>
						<li class="fadeInUp">
							<p class="ttl">担当看護師</p>
							<ul class="comStaffList">
								<?php 
									foreach( $staff_nurse as $post ) {
									setup_postdata($post);
									$thumbnail_id = get_post_thumbnail_id();
									$thumbnail_data = wp_get_attachment_image_src($thumbnail_id, 'full');
									$thumbnail_width = $thumbnail_data[1];
									$thumbnail_height = $thumbnail_data[2];
									$thumbnail = get_the_post_thumbnail_url($post->ID,'full');
								?>
								<li><a href="<?php the_permalink(); ?>">
									<div class="photo"><img class="lazy" data-original="<?php echo $thumbnail; ?>" alt="" data-size="<?php echo $thumbnail_width; ?>x<?php echo $thumbnail_height; ?>"></div>
									<p><span><?php the_title(); ?></span><?php echo CFS()->get('english_name'); ?></p>
								</a></li>
								<?php } ?>
							</ul>
						</li>
						<?php } wp_reset_postdata(); ?>
					</ul>
					<p class="note fadeInUp">※医師の指示のもと看護師が施術しております。</p>
				</div>
			</div>
		</section>
		<?php 
			if($case_menu){
		?>
		<section class="price fadeInUp">
			<div class="content">
				<?php foreach( $case_menu as $post ) {
					setup_postdata($post);
					$case_menu_id = $post->ID;
					$case_menu_title = get_the_title();

					$args = array(
						'post_type' => 'price',
						'posts_per_page' => -1,
						'meta_query' => array(
							'relation' => 'AND',
							array(
								'key' => 'ff_menu',
								'value' => '"' . $case_menu_id . '"',
								'compare' => 'LIKE'
							),
							array(
								'key' => 'ff_shopin',
								'value' => 'clinic',
								'compare' => '=',
							),
						)
					);
					$query = new WP_Query($args);
					if ( $query->have_posts() ) {
					while ( $query->have_posts() ) { $query->the_post();
						$table = get_field('ff_table');
						$caption = get_field('ff_caption');
				?>
				<div class="tabBox">
					<h3 class="headLine08"><?php echo $case_menu_title; ?>料金表</h3>
					<p class="note">※価格は税込表記です。</p>
					<div class="comTab">
						<table>
							<?php 
								if ( ! empty( $table['header'] ) ) {
									$theadNum=0;
									echo '<thead>';
										echo '<tr>';
											foreach ( $table['header'] as $th ) {
												$theadNum++;
												$c = $th['c'];
												if($c){
													preg_match('|row(\d+)|', $c, $rowMatches);
													if($rowMatches){
														$row = ' rowspan="'.$rowMatches[1].'"';
													}else{
														$row = '';
													}
													preg_match('|col(\d+)|', $c, $colMatches);
													if($colMatches){
														$col = ' colspan="'.$colMatches[1].'"';
													}else{
														$col = '';
													}
													if($theadNum == 1){
														$tdHtml = '<th'.$row.$col.'>';
													}else {
														$tdHtml = '<td'.$row.$col.'>';
													}
													$c = preg_replace('/\|row(\d+)\|/', '', $c);
													$c = preg_replace('/\|col(\d+)\|/', '', $c);
													echo $tdHtml;
														echo $c;
													if($theadNum == 1){
														echo '</th>';
													}else {
														echo '</td>';
													}
												}
											}
										echo '</tr>';
									echo '</thead>';
								}
							?>
							<tbody>
								<?php 
									foreach ( $table['body'] as $tr ) {
										echo '<tr>';
										$num=0;
										foreach ( $tr as $td ) {
											$num++;
											$c = $td['c'];
											if($c){
												preg_match('|row(\d+)|', $c, $rowMatches);
												if($rowMatches){
													$row = ' rowspan="'.$rowMatches[1].'"';
												}else{
													$row = '';
												}
												preg_match('|col(\d+)|', $c, $colMatches);
												if($colMatches){
													$col = ' colspan="'.$colMatches[1].'"';
												}else{
													$col = '';
												}
												if($num == 1){
													$tdHtml = '<th'.$row.$col.'>';
												}else {
													$tdHtml = '<td'.$row.$col.'>';
												}
												$c = preg_replace('/\|row(\d+)\|/', '', $c);
												$c = preg_replace('/\|col(\d+)\|/', '', $c);
												echo $tdHtml;
													echo $c;
												if($num == 1){
													echo '</th>';
												}else {
													echo '</td>';
												}
											}
										}
										echo '</tr>';
									}
								?>
							</tbody>
						</table>
					</div>
				</div>
				<?php }}wp_reset_postdata(); ?>
				<?php } ?>
			</div>
		</section>
		<?php } wp_reset_postdata();?>

		<?php 
			$meta_query = array(
				array(
					'key' => 'ff_showin',
					'value' => '"clinic"',
					'compare' => '=',
				),
			);

			if ( !empty($case_menu_ary) ) {
				$meta_menu = array( 'relation' => 'OR' );
				foreach ( $case_menu_ary as $id ) {
					$meta_menu[] = array(
						'key'     => 'ff_case_menu',
						'value'   => '"' . $id . '"',
						'compare' => 'LIKE',
					);
				}
				$meta_query[] = $meta_menu;
			}
			$args = array(
				'post_type' => 'case',
				'posts_per_page' => 4,
				'meta_query'     => $meta_query,
			);
			$query = new WP_Query($args);
			if ( $query->have_posts() ) {
		?>
		<section class="btmBox">
			<div class="content">
				<h3 class="headLine07 fadeInUp">Related Cases</h3>
				<ul class="comCaseList flex fadeAni">
					<?php while ( $query->have_posts() ) { $query->the_post(); 
						$image = get_field('ff_gallery')[0]['url'];
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
					<li class="fade"><a href="<?php echo $permalink; ?>">
						<div class="pho"><img class="lazy" data-original="<?php echo $image; ?>" alt="" data-size="300x300"></div>
						<p>
							<span class="serif"><?php echo $case_menu_name; ?></span>
							<?php echo $staff_doctor_name; ?>
							<?php echo $staff_nurse_name; ?>
						</p>
					</a></li>
					<?php } ?>
				</ul>
				<div class="comLink fadeInUp"><a href="<?php echo home_url();?>/case/">View More</a></div>
			</div>
		</section>
		<?php } wp_reset_postdata();?>
	</div>
</div>
<?php } ?>
<?php get_footer('renew2025'); ?>
