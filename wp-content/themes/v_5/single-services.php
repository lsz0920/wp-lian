<?php get_header('new'); ?>
<div class="mainBox">
	<div class="checkBg"><img src="<?php echo get_template_directory_uri(); ?>/new/img/common/com_bg05.jpg" alt=""></div>
	<div id="pagePath">
		<ul>
			<li><a href="<?php echo home_url();?>">Top</a>/</li>
			<li><a href="<?php echo home_url();?>/services/">Menu</a>/</li>
			<li><?php the_title(); ?></li>
		</ul>
	</div>
	<div class="pageTtl">
		<h2><span class="maskFadeH"><?php the_title(); ?></span></h2>
		<div class="photo"><img src="<?php echo get_template_directory_uri(); ?>/new/img/services/detail/page_title_bg.jpg" alt="<?php echo strip_tags(get_the_title()); ?>"></div>
	</div>
	<div class="detail">
		<div class="naviLink">
			<div class="subNavi">
				<p class="roboto">Index</p>
				<ul>
					<li class="on"><a href="#a01">HIFUとは</a></li>
					<li><a href="#a02">料金</a></li>
					<li><a href="#a03">症例</a></li>
					<li><a href="#a04">よくあるご質問</a></li>
				</ul>
			</div>
		</div>
		<?php if( have_rows('ff_block') ): ?>
		<div class="detailBox">
			<?php while( have_rows('content') ): the_row(); ?>

				<?php if( get_row_layout() == 'ff_colum1' ):
					$colum1_text = get_sub_field('ff_colum1_text');
				?>
				<div class="info01">
					<div class="fadeInUp">
						<?php echo $colum1_text; ?>
					</div>
				</div>

				<?php elseif( get_row_layout() == 'ff_colum2' ): 
					$colum2_left = get_sub_field('ff_colum2_left');
					$colum2_right = get_sub_field('ff_colum2_right');
				?>
				<div class="info02 fadeInUp">
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
				<div class="info03">
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
				<div class="info04 simpleBar fadeInUp">
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
				<div class="info05 fadeInUp">
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
				<div class="info06 fadeInUp">
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
				<div class="info07">
					<div class="movie fadeInUp"><iframe width="560" height="315" src="https://www.youtube.com/embed/<?php echo $youtube; ?>" title="YouTube video player" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe></div>
				</div>



				
			
			
			
			
			<div class="info08" id="a02" data-target="1">
				<div class="fadeInUp">
					<h1>料金</h1>
					<p class="note">※価格は全て税込表記です。</p>
					<h2 class="headLine09">ポテンツァ</h2>
					<div class="comTab">
						<table>
							<thead>
								<tr>
									<th>対象部位</th>
									<td>部位</td>
									<td>回数</td>
									<td>価格</td>
								</tr>
							</thead>
							<tbody>
								<tr>
									<th rowspan="3">血管拡張による赤み改善専用チップ（麻酔クリーム付き）</th>
									<td rowspan="3">全顔</td>
									<td>1回</td>
									<td>49,500円</td>
								</tr>
								<tr>
									<td>3回</td>
									<td>133,650円</td>
								</tr>
								<tr>
									<td>5回</td>
									<td>210,375円</td>
								</tr>
									<tr>
									<th rowspan="3">ニキビ1ニードル（麻酔なし）</th>
									<td rowspan="3">全顔</td>
									<td>5個まで</td>
									<td>22,000円</td>
								</tr>
								<tr>
									<td>10個まで</td>
									<td>35,000円</td>
								</tr>
								<tr>
									<td>打ち放題</td>
									<td>55,000円</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
			</div>
			<div class="info09" id="a03" data-target="2">
				<div class="fadeInUp">
					<h1>症例</h1>
					<ul class="comCaseList">
						<li><a href="#">
							<div class="pho"><img class="lazy" data-original="/img/services/detail/photo10.jpg" alt="" data-size="250x250"></div>
							<p><span class="serif">デザイニングハイフ</span>（看護師）坂本 伶奈</p>
						</a></li>
						<li><a href="#">
							<div class="pho"><img class="lazy" data-original="/img/services/detail/photo11.jpg" alt="" data-size="250x250"></div>
							<p><span class="serif">デザイニングハイフ</span>（看護師）坂本 伶奈</p>
						</a></li>
						<li><a href="#">
							<div class="pho"><img class="lazy" data-original="/img/services/detail/photo12.jpg" alt="" data-size="250x250"></div>
							<p><span class="serif">デザイニングハイフ</span>（看護師）白鳥 裕子</p>
						</a></li>
					</ul>
					<ul class="comArrow flexB">
						<li class="prev"><img src="/img/common/prev.png" alt="" data-size="13x14"></li>
						<li class="next"><img src="/img/common/next.png" alt="" data-size="13x14"></li>
					</ul>
					<div class="comLink"><a href="/case/">View More</a></div>
				</div>
			</div>
			<div class="info10" id="a04" data-target="3">
				<div class="fadeInUp">
					<h1>よくあるご質問</h1>
					<dl>
						<dt>効果はどのくらい持続しますか？</dt>
						<dd>ご希望の方は表面麻酔をご使用いただけます。<br>表面麻酔：¥2,200（税込）</dd>
						<dt>副作用・ダウンタイムはありますか？</dt>
						<dd>ご希望の方は表面麻酔をご使用いただけます。<br>表面麻酔：¥2,200（税込）</dd>
						<dt>麻酔は使用できますか？</dt>
						<dd>ご希望の方は表面麻酔をご使用いただけます。<br>表面麻酔：¥2,200（税込）</dd>
					</dl>
				</div>
			</div>

			<?php elseif( get_row_layout() == 'ff_colum11' ):
				$colum11_text = get_sub_field('ff_colum11_text');
				$staff = get_sub_field('ff_staff');
			?>
			<div class="info11">
				<div class="fadeInUp">
					<h2>監修者情報</h2>
					<div class="textInfo flexB">
						<div class="imgBox flexB">
							<div class="pho"><img class="lazy" data-original="/img/services/detail/photo13.jpg" alt="" data-size="126x143"><span>リアンクリニック院長<span>藤尾 謙太</span></span></div>
							<div class="textBox">
								<h3>プロフィール</h3>
								<p>昭和大学卒業<br>順天堂大学の医局入職<br>大手美容皮膚科勤務<br>2023年博士号取得<br><a href="#">日本美容皮膚科医学会所属</a></p>
							</div>
						</div>
						<div class="textSub">
							<?php echo $colum11_text; ?>
						</div>
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
			$colum12_ttl = get_sub_field('ff_colum12_ttl');
		}
		$problem_terms = get_the_terms($post->ID,'problem');
		$problem_ary = [];
		if($problem_terms){
			foreach($problem_terms as $problem_term){
				array_push($problem_ary,$problem_term->term_id);
			}
		}
		$treatment_terms = get_the_terms($post->ID,'treatment');
		$treatment_ary = [];
		if($treatment_terms){
			foreach($treatment_terms as $treatment_term){
				array_push($treatment_ary,$treatment_term->term_id);
			}
		}
		$args = array(
			'post_type' => 'services',
			'posts_per_page' => 5,
			'tax_query' => array(
				'relation' => 'OR',
				array(
					'taxonomy' => 'problem',
					'field'    => 'term_id',
					'terms'    => $problem_ary,
				),
				array(
					'taxonomy' => 'treatment',
					'field'    => 'term_id',
					'terms'    => $treatment_ary,
				),
			),
			'post__not_in' => array(get_the_ID()),
		);
		$query = new WP_Query($args);
		if ( $query->have_posts() ) {
	?>
	<div class="info12">
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

	<?php get_template_part('new/inc/com_reservation'); ?>
</div>
<?php get_footer('new'); ?>
