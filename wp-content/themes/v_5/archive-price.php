<?php get_header('renew2025'); ?>
<section class="pageTitle">
	<div class="photo"><img class="jsZoomOut" data-skip-lazy src="<?php echo get_template_directory_uri(); ?>/renew2025/img/price/page_title_bg.jpg" alt=""></div>
	<h2><span class="maskFadeH">Price</span></h2>
</section>
<div class="mainBox jsMainTop">
	<div class="checkBg"><img data-skip-lazy src="<?php echo get_template_directory_uri(); ?>/renew2025/img/common/com_bg05.jpg" alt=""></div>
	<div id="pagePath">
		<ul>
			<li><a href="<?php echo home_url();?>">Top</a>/</li>
			<li>Price</li>
		</ul>
	</div>
	<div class="comPrice">
		<section class="priceSec">
			<div class="content fadeInUp">
				<h3 class="headLine07">Medical System</h3>
			</div>

			<?php if ( have_rows('ff_price_basic','options') ) : ?>
			<p class="note fadeInUp">※価格は全て税込表記です。</p>
			<div class="whiteBg fadeInUp">
				<div class="content">
					<h4 class="headLine08">基本料金</h4>

					<?php while( have_rows('ff_price_basic','options') ) : the_row();
						$price_ttl = get_sub_field('ff_price_ttl');
						$price_caption = get_sub_field('ff_price_caption');
						$price_table = get_sub_field( 'ff_price_table' );
					?>
					<div class="innerBox">
						<?php if($price_ttl) {?>
						<h5 class="headLine09"><?php echo $price_ttl; ?></h5>
						<?php } ?>
						<?php if($price_table) {?>
						<div class="comTab">
							<table>
								<?php 
									if ( ! empty( $price_table['header'] ) ) {
										$theadNum03=0;
										echo '<thead>';
											echo '<tr>';
												foreach ( $price_table['header'] as $th ) {
													$theadNum03++;
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
														if($theadNum03 == 1){
															$tdHtml = '<th'.$row.$col.'>';
														}else {
															$tdHtml = '<td'.$row.$col.'>';
														}
														$c = preg_replace('/\|row(\d+)\|/', '', $c);
														$c = preg_replace('/\|col(\d+)\|/', '', $c);
														echo $tdHtml;
															echo $c;
														if($theadNum03 == 1){
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
										foreach ( $price_table['body'] as $tr ) {
											$topNum=0;
											echo '<tr>';
											foreach ( $tr as $td ) {
												$topNum++;
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
													if($topNum == 1){
														$tdHtml = '<th'.$row.$col.'>';
													}else {
														$tdHtml = '<td'.$row.$col.'>';
													}
													$c = preg_replace('/\|row(\d+)\|/', '', $c);
													$c = preg_replace('/\|col(\d+)\|/', '', $c);
													echo $tdHtml;
														echo $c;
													if($topNum == 1){
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
						<?php } ?>
						<?php if($price_caption) {?>
						<div class="noteList">
							<p><?php echo $price_caption; ?></p>
						</div>
						<?php } ?>
					</div>
					<?php endwhile; ?>

				</div>
			</div>
			<?php endif; ?>
		</section>
		<section class="priceSec">
			<div class="content fadeInUp">
				<div class="topBox flexB">
					<h3 class="headLine07">Price List</h3>
					<ul class="comSelectList flexB">
						<li>
							<?php 
								$category_ary = [];
								$menu_ary = [];
								$all_args=array(
									'post_type' => 'price',
									'posts_per_page' => -1,
									'meta_query' => array(
										array(
											'key' => 'ff_shopin',
											'value' => 'clinic',
											'compare' => '==',
										),
									),
									'tax_query' => array(
										array(
											'taxonomy' => 'services_cat',
											'field' => 'term_id',
											'terms' => array(497),
										),
									),
								);
								$all_query = new WP_Query($all_args);
								if ( $all_query->have_posts() ) { 
									while ( $all_query->have_posts() ) { $all_query->the_post();

									$services_terms = get_the_terms($post->ID,'services_cat');
									if($services_terms){
										foreach($services_terms as $term){
											$services_name = $term->name;
											if(!in_array($services_name,$category_ary) && $term->parent == 497){
												array_push($category_ary, $services_name);
											}
										}
									}

									$menu = get_field('ff_menu');
									if($menu){
										foreach( $menu as $post ):
										setup_postdata($post);
										$menu_title = get_the_title();
										if(!in_array($menu_title,$menu_ary)){
											array_push($menu_ary, $menu_title);
										}
										endforeach; wp_reset_postdata();
									}
								} } wp_reset_postdata();
							?>
							<select class="jsCatSelect">
								<option value="">カテゴリーから探す</option>
								<?php 
									foreach($category_ary as $category){
										echo '<option value="'.$category.'">'.$category.'</option>';
									}
								?>
							</select>
						</li>
						<li>
							<select class="jsMenuSelect">
								<option value="">施術から探す</option>
								<?php 
									foreach($menu_ary as $menu){
										echo '<option value="'.$menu.'">'.$menu.'</option>';
									}
								?>
							</select>
						</li>
					</ul>
				</div>
			</div>
			<div class="jsBox">
			<?php 
			$args = array(
				'taxonomy' => 'services_cat',
				'hide_empty' => 1,
				'exclude' => '',
				'parent' => 497,
			);
			$terms = get_terms( $args );
			$terms = array_filter($terms, function($term) {
				return $term->parent != 0;
			});
			if($terms){
				foreach($terms as $term) {
					$args = array(
						'post_type' => 'price',
						'posts_per_page' => -1,
						'tax_query' => array(
							array(
								'taxonomy' => 'services_cat',
								'field' => 'slug',
								'terms' => $term->slug
							)
						),
						'meta_query' => array(
							array(
								'key' => 'ff_shopin',
								'value' => 'clinic',
								'compare' => '==',
							),
						)
					);
					$query = new WP_Query($args);
					if ( $query->have_posts() ) {
			?>
			<div class="whiteBg fadeInUp" data-category="<?php echo $term->name; ?>">
				<div class="content">
					<div class="priceBox">
						<h4 class="headLine08"><?php echo $term->name; ?></h4>
						<?php
						while ( $query->have_posts() ) { $query->the_post();
							$menu = get_field('ff_menu');
							$table = get_field('ff_table');
							$caption = get_field('ff_caption');
							if($menu){
								foreach( $menu as $post ):
								setup_postdata($post);
								$menu_title = get_the_title();
								endforeach;
							}
						?>
						<div class="subBox" data-menu="<?php if($menu){ echo $menu_title; } ?>">
							<h5 class="headLine09"><?php if($menu){ echo $menu_title; }else { the_title(); } ?></h5>
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
							<?php if($caption) {?>
							<div class="noteList">
								<p><?php echo $caption; ?></p>
							</div>
							<?php } ?>
						</div>
						<?php } ?>
					</div>
				</div>
			</div>
			<?php } wp_reset_postdata(); ?>
			<?php } } ?>
			</div>
			<?php 
			$args2 = array(
				'taxonomy' => 'price_cat',
				'hide_empty' => 1,
				'exclude' => '',
			);
			$terms2 = get_terms( $args2 );
			if($terms2){
				foreach($terms2 as $term2) {
					$args2 = array(
						'post_type' => 'price',
						'posts_per_page' => -1,
						'tax_query' => array(
							array(
								'taxonomy' => 'price_cat',
								'field' => 'slug',
								'terms' => $term2->slug
							)
						),
						'meta_query' => array(
							array(
								'key' => 'ff_shopin',
								'value' => 'clinic',
								'compare' => '==',
							),
						)
					);
					$priceQuery = new WP_Query($args2);
					if ( $priceQuery->have_posts() ) { 
				?>
			<div class="whiteBg fadeInUp">
				<div class="content">
					<div class="priceBox">
						<h4 class="headLine08"><?php echo $term2->name; ?></h4>
						<?php
						while ( $priceQuery->have_posts() ) { $priceQuery->the_post();
							$table = get_field('ff_table');
						?>
						<div class="subBox">
							<h5 class="headLine09"><?php the_title(); ?></h5>
							<div class="comTab">
								<table>
									<?php 
										if ( ! empty( $table['header'] ) ) {
											$theadNum02=0;
											echo '<thead>';
												echo '<tr>';
													foreach ( $table['header'] as $th ) {
														$theadNum02++;
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
															if($theadNum02 == 1){
																$tdHtml = '<th'.$row.$col.'>';
															}else {
																$tdHtml = '<td'.$row.$col.'>';
															}
															$c = preg_replace('/\|row(\d+)\|/', '', $c);
															$c = preg_replace('/\|col(\d+)\|/', '', $c);
															echo $tdHtml;
																echo $c;
															if($theadNum02 == 1){
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
						<?php } ?>
					</div>
				</div>
			</div>
			<?php } wp_reset_postdata(); ?>
			<?php } } ?>
		</section>
		<div class="btmBox">
			<div class="content fadeInUp">
				<div class="borderBox flexB">
					<div class="left">
						<h3>お支払い方法</h3>
						<p>現金・各種クレジットカードの<br>ご利用が可能となっております。</p>
					</div>
					<div class="right">
						<ul>
							<li>現金</li>
							<li>各種クレジットカード<span>VISA / MasterCard / JCB / Diners Club / American Express<img class="lazy" data-original="<?php echo get_template_directory_uri(); ?>/renew2025/img/price/img01.png" alt="" data-size="275x32"></span></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php get_template_part('renew2025/inc/com_reservation'); ?>
</div>
<?php get_footer('renew2025'); ?>