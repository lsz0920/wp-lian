<?php get_header('renew2025'); 
	$postID = get_the_ID();
	$postName = get_the_title();
?>
<div class="mainBox">
	<div class="checkBg"><img src="<?php echo get_template_directory_uri(); ?>/renew2025/img/common/com_bg05.jpg" alt=""></div>
	<div id="pagePath">
		<ul>
			<li><a href="<?php echo home_url();?>">Top</a>/</li>
			<li><a href="<?php echo home_url();?>/services/">Menu</a>/</li>
			<li><?php the_title(); ?></li>
		</ul>
	</div>
	<div class="pageTtl">
		<h2><span class="maskFadeH"><?php the_title(); ?></span></h2>
		<div class="photo"><img src="<?php echo get_template_directory_uri(); ?>/renew2025/img/services/detail/page_title_bg.jpg" alt="<?php echo strip_tags(get_the_title()); ?>"></div>
	</div>
	<div class="detail">
		<div class="naviLink">
			<div class="subNavi">
				<p class="roboto">Index</p>
				<ul class="toc">
				</ul>
			</div>
		</div>
		<?php if( have_rows('ff_block') ): ?>
		<div class="detailBox">
			<?php while( have_rows('ff_block') ): the_row(); ?>

				<?php if( get_row_layout() == 'ff_colum1' ):
					$colum1_text = get_sub_field('ff_colum1_text');
				?>
				<div class="info01 infoBox">
					<div class="fadeInUp">
						<?php echo $colum1_text; ?>
					</div>
				</div>

				<?php elseif( get_row_layout() == 'ff_colum2' ): 
					$colum2_left = get_sub_field('ff_colum2_left');
					$colum2_right = get_sub_field('ff_colum2_right');
				?>
				<div class="info02 fadeInUp infoBox">
					<div class="imgBox flexB">
						<div class="lBox"><?php echo $colum2_left; ?></div>
						<div class="rBox">
							<?php echo $colum2_right; ?>
						</div>
					</div>
				</div>
				
				<?php elseif( get_row_layout() == 'ff_colum3' ): 
					$colum3_left = get_sub_field('ff_colum3_left');
					$colum3_mid = get_sub_field('ff_colum3_mid');
					$colum3_right = get_sub_field('ff_colum3_right');
				?>
				<div class="info03 infoBox">
					<ul class="fadeInUp">
						<li>
							<?php echo $colum3_left; ?>
						</li>
						<li>
							<?php echo $colum3_mid; ?>
						</li>
						<li>
							<?php echo $colum3_right; ?>
						</li>
					</ul>
				</div>


				<?php elseif( get_row_layout() == 'ff_colum4' ): 
					$colum4_img = get_sub_field('ff_colum4_img');
					$colum4_note = get_sub_field('ff_colum4_note');
				?>
				<div class="info04 simpleBar fadeInUp infoBox">
					<div class="pho">
						<img class="lazy" data-original="<?php echo $colum4_img['url']; ?>" alt="<?php echo $colum4_img['alt']; ?>" data-size="<?php echo $colum4_img['width']; ?>x<?php echo $colum4_img['height']; ?>">
					</div>
					<?php if($colum4_note) {?>
					<span><?php echo $colum4_note; ?></span>
					<?php } ?>
				</div>


				<?php elseif( get_row_layout() == 'ff_colum5' ): 
					$colum5_img = get_sub_field('ff_colum5_img');
					$colum5_note = get_sub_field('ff_colum5_note');
				?>
				<div class="info05 fadeInUp infoBox">
					<div class="photo">
						<img class="lazy" data-original="<?php echo $colum5_img['url']; ?>" alt="<?php echo $colum5_img['alt']; ?>" data-size="<?php echo $colum5_img['width']; ?>x<?php echo $colum5_img['height']; ?>">
					</div>
					<?php if($colum5_note) {?><span><?php echo $colum5_note; ?></span><?php } ?>
				</div>


				<?php elseif( get_row_layout() == 'ff_colum6' ): 
					$colum6_img = get_sub_field('ff_colum6_img');
					$colum6_note = get_sub_field('ff_colum6_note');
					$colum6_text = get_sub_field('ff_colum6_text');
				?>
				<div class="info06 fadeInUp infoBox">
					<div class="pho">
						<div class="image"><img class="lazy" data-original="<?php echo $colum6_img['url']; ?>" alt="<?php echo $colum6_img['alt']; ?>" data-size="<?php echo $colum6_img['width']; ?>x<?php echo $colum6_img['height']; ?>"></div>
						<?php if($colum6_note) {?><span><?php echo $colum6_note; ?></span><?php } ?>
					</div>
					<div class="textBox">
						<?php echo $colum6_text; ?>
					</div>
				</div>

				
				<?php elseif( get_row_layout() == 'ff_colum7' ):
					$youtube = get_sub_field('ff_youtube');
				?>
				<div class="info07 infoBox">
					<div class="movie fadeInUp"><iframe width="560" height="315" src="https://www.youtube.com/embed/<?php echo $youtube; ?>" title="YouTube video player" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe></div>
				</div>

			<?php elseif( get_row_layout() == 'ff_colum8' ):
				$menus = get_posts(array(
					'post_type' => 'price',
					'posts_per_page' => -1,
					'meta_query' => array(
						array(
							'key'     => 'ff_menu',
							'value'   => '"' . $postID . '"',
							'compare' => 'LIKE',
						),
					),
				));
				if( $menus ) {
			?>
			<div class="info08 infoBox">
				<div class="fadeInUp">
					<h1>料金</h1>
					<p class="note">※価格は全て税込表記です。</p>
					<?php foreach( $menus as $menu ){
						$table = get_field('ff_table',$menu->ID);
						$caption = get_field('ff_caption',$menu->ID);
					?>
					<h2 class="headLine09"><?php echo $postName; ?></h2>
					<div class="comTab">
						<table>
							<?php 
								if ( ! empty( $table['header'] ) ) {
									echo '<thead>';
										echo '<tr>';
										$thNum=0;
											foreach ( $table['header'] as $th ) {
												$thNum++;
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
													if($thNum == 1){
														$tdHtml = '<th'.$row.$col.'>';
													}else {
														$tdHtml = '<td'.$row.$col.'>';
													}
													$c = preg_replace('/\|row(\d+)\|/', '', $c);
													$c = preg_replace('/\|col(\d+)\|/', '', $c);
													echo $tdHtml;
														echo $c;
													if($thNum == 1){
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
						<?php if($caption) {?>
						<div class="noteList">
							<p><?php echo $caption; ?></p>
						</div>
						<?php } ?>
					</div>
					<?php } ?>
				</div>
			</div>
			<?php } wp_reset_postdata(); ?>

			<?php elseif( get_row_layout() == 'ff_colum9' ):
				$cases = get_posts(array(
					'post_type' => 'case',
					'posts_per_page' => 3,
					'meta_query' => array(
						array(
							'key'     => 'ff_case_menu',
							'value'   => '"' . $postID . '"',
							'compare' => 'LIKE',
						),
					),
				));
				if( $cases ) {
			?>
			<div class="info09 infoBox">
				<div class="fadeInUp">
					<h1>症例</h1>
					<ul class="comCaseList">
						<?php foreach( $cases as $case ){
							$image = get_field('ff_gallery',$case->ID)[0]['url'];
							if(!$image){
								$image = get_template_directory_uri().'/renew2025/img/noimg.jpg';
							}

							$case_menu = get_field('ff_case_menu',$case->ID);
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

							$staff_doctor = get_field('ff_staff_doctor',$case->ID);
							$staff_nurse = get_field('ff_staff_nurse',$case->ID);

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
						<li><a href="<?php the_permalink(); ?>">
							<div class="pho"><img class="lazy" data-original="<?php echo $image; ?>" alt="" data-size="250x250"></div>
							<p><span class="serif"><?php echo $case_menu_name; ?></span>
							<?php echo $staff_doctor_name; ?>
							<?php echo $staff_nurse_name; ?></p>
						</a></li>
						<?php } ?>
					</ul>
					<ul class="comArrow flexB">
						<li class="prev"><img src="<?php echo get_template_directory_uri(); ?>/renew2025/img/common/prev.png" alt="" data-size="13x14"></li>
						<li class="next"><img src="<?php echo get_template_directory_uri(); ?>/renew2025/img/common/next.png" alt="" data-size="13x14"></li>
					</ul>
					<div class="comLink"><a href="<?php echo home_url();?>/case/">View More</a></div>
				</div>
			</div>
			<?php } wp_reset_postdata(); ?>

			<?php elseif( get_row_layout() == 'ff_colum10' ):
				$faq_args = array(
					'post_type' => 'faq',
					'posts_per_page' => -3,
					'tax_query' => array(
						array(
							'taxonomy' => 'faq_category',
							'field'    => 'name',
							'terms'    => $postName,
						),
					),
				);
				$faq_query = new WP_Query($faq_args);
				if ( $faq_query->have_posts() ) {  
			?>
			<div class="info10 infoBox">
				<div class="fadeInUp">
					<h1>よくあるご質問</h1>
					<dl>
						<?php while ( $faq_query->have_posts() ) { $faq_query->the_post(); ?>
						<dt><?php the_title(); ?></dt>
						<dd><?php the_content(); ?></dd>
						<?php }  ?>
					</dl>
				</div>
			</div>
			<?php } wp_reset_postdata(); ?>

			<?php elseif( get_row_layout() == 'ff_colum11' ):
				$colum11_text = get_sub_field('ff_colum11_text');
				$staff = get_sub_field('ff_staff');
			?>
			<div class="info11 infoBox">
				<div class="fadeInUp">
					<h2>監修者情報</h2>
					<div class="textInfo flexB">
						<div class="imgBox flexB">
							<?php 
								if($staff){
									foreach( $staff as $post ):
									setup_postdata($post);
									$staff_msg = get_field('ff_staff_msg');

									$thumbnail_id = get_post_thumbnail_id();
									$thumbnail_data = wp_get_attachment_image_src($thumbnail_id, 'full');
									$thumbnail_width = $thumbnail_data[1];
									$thumbnail_height = $thumbnail_data[2];

									$thumbnail = get_the_post_thumbnail_url($post->ID,'full');
							?>
							<div class="pho">
								<?php if($thumbnail) {?>
								<div class="image">
									<img class="lazy" data-original="<?php echo $thumbnail; ?>" alt="" data-size="<?php echo $thumbnail_width; ?>x<?php echo $thumbnail_height; ?>">
								</div>
								<?php } ?>
								<span>リアンクリニック院長<span><?php the_title(); ?></span></span>
							</div>
							<?php endforeach; ?>
							<?php } wp_reset_postdata(); ?>
							<?php if($staff_msg) {?>
							<div class="textBox">
								<h3>プロフィール</h3>
								<p><?php echo $staff_msg; ?></p>
							</div>
							<?php } ?>
						</div>
						<?php if($colum11_text) {?>
						<div class="textSub">
							<h3>医師からのメッセージ</h3>
							<?php echo $colum11_text; ?>
						</div>
						<?php } ?>
					</div>
				</div>
			</div>

			<?php endif; ?>
			<?php endwhile; ?>

		</div>
		<?php endif; ?>
	</div>

	<?php 
		$colum12 = get_field('ff_colum12');
		if($colum12){
			$colum12_ttl = $colum12['ff_colum12_ttl'];
		}
		$services_terms = get_the_terms($post->ID,'services_cat');
		$services_ary = [];
		if($services_terms){
			foreach($services_terms as $services_term){
				array_push($services_ary,$services_term->term_id);
			}
		}
		$args = array(
			'post_type' => 'services',
			'posts_per_page' => 5,
			'tax_query' => array(
				array(
					'taxonomy' => 'services_cat',
					'field'    => 'term_id',
					'terms'    => $services_ary,
				),
			),
			'post__not_in' => array(get_the_ID()),
		);
		$query = new WP_Query($args);
		if ( $query->have_posts() ) {
	?>
	<div class="info12 infoBox">
		<h2 class="fadeInUp"><?php echo $colum12_ttl; ?>に効果的な治療</h2>
		<?php 
			while ( $query->have_posts() ) { $query->the_post();
				$treatment = get_field('ff_treatment');
				$treatment_img = $treatment['ff_treatment_img'];
				$treatment_summary = $treatment['ff_treatment_summary'];
				$treatment_text = $treatment['ff_treatment_text'];
		?>
		<div class="imgBox flexB fadeInUp">
			<?php if($treatment_img) {?>
			<div class="pho"><img class="lazy" data-original="<?php echo $treatment_img['url']; ?>" alt="<?php echo $treatment_img['alt']; ?>" data-size="<?php echo $treatment_img['width']; ?>x<?php echo $treatment_img['height']; ?>"></div>
			<?php } ?>
			<div class="textBox">
				<h3><?php the_title(); ?></h3>
				<p><?php echo $treatment_summary; ?></p>
				<div class="whiteBg">
					<p><span>【このようなお悩みにおすすめ】</span><?php echo $treatment_text; ?></p>
				</div>
				<div class="comLink"><a href="<?php the_permalink(); ?>">View More</a></div>
			</div>
		</div>
		<?php } ?>
	</div>
	<?php } wp_reset_postdata(); ?>

	<?php get_template_part('renew2025/inc/com_reservation'); ?>
</div>
<?php get_footer('renew2025'); ?>
