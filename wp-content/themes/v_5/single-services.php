<?php get_header('new'); ?>
<div class="mainBox">
	<div class="checkBg"><img src="<?php echo get_template_directory_uri(); ?>/img/common/com_bg05.jpg" alt=""></div>
	<div id="pagePath">
		<ul>
			<li><a href="<?php echo home_url();?>">Top</a>/</li>
			<li><a href="<?php echo home_url();?>/services/">Menu</a>/</li>
			<li><?php the_title(); ?></li>
		</ul>
	</div>
	<div class="pageTtl">
		<h2><span class="maskFadeH"><?php the_title(); ?></span></h2>
		<div class="photo"><img src="<?php echo get_template_directory_uri(); ?>/img/services/detail/page_title_bg.jpg" alt="<?php echo strip_tags(get_the_title()); ?>"></div>
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
				<div class="info01" id="a01" data-target="0">
					<div class="fadeInUp">
						<?php echo $colum1_text; ?>
					</div>
				</div>

				<?php elseif( get_row_layout() == 'image' ): 
					$image = get_sub_field('image');
				?>
				<div class="info02 fadeInUp">
					<div class="imgBox flexB">
						<div class="lBox"><img class="lazy" data-original="/img/services/detail/photo01.jpg" alt="" data-size="440x244"></div>
						<div class="rBox">
							<p>HIFU（ハイフ）とは、高密度焦点式超音波を意味する英語「High lntensity Focused Ultrasound」の略で、人間の耳では聞こえない高い振動数をもつ超音波を1点に集めて照射する方法です。<br>皮膚表面や他の組織に傷をつけずに人体組織の内部へ浸透します。<br>トランスデューサーから高エネルギーの超音波を発生させ、体内の一点に集まります。<br>その点に集束された部分だけが高温になり、65~75°Cで凝固ゾーンが形成。<br>熱ダメージで創傷治癒によるコラーゲンの増生や皮膚の引き締めが起こります。</p>
						</div>
					</div>
				</div>

				<?php endif; ?>

			<?php endwhile; ?>
			<div class="info02 fadeInUp">
				<ul>
					<li>頬のトップが下がった</li>
					<li>フェイスラインがもたついて顔が大きくなった</li>
					<li>ほうれい線が深く長くなった</li>
					<li>マリオネットラインや口横のたるみ</li>
					<li>顎裏のボリューム感</li>
				</ul>
			</div>
			<div class="info03">
				<ul class="fadeInUp">
					<li>
						<div class="pho"><img class="lazy" data-original="/img/services/detail/photo02.jpg" alt="" data-size="280x280"></div>
						<h3>Zigzag</h3>
						<ul>
							<li>・小じわの改善、肌の引き締め</li>
							<li>・くすみ改善、美肌効果に有効</li>
						</ul>
					</li>
					<li>
						<div class="pho"><img class="lazy" data-original="/img/services/detail/photo03.jpg" alt="" data-size="280x280"></div>
						<h3>Circular</h3>
						<ul>
							<li>・肌の引き締め、脂肪溶解</li>
							<li>・小顔効果やフェイスラインのもたつきを改善</li>
						</ul>
					</li>
					<li>
						<div class="pho"><img class="lazy" data-original="/img/services/detail/photo04.jpg" alt="" data-size="280x280"></div>
						<h3>Mesh</h3>
						<ul>
							<li>・たるみの予防、ほうれい線の改善</li>
							<li>・脂肪溶解や小顔効果</li>
							<li>・肌のハリ弾力アップに有効</li>
						</ul>
					</li>
				</ul>
			</div>
			<div class="info04 simpleBar fadeInUp">
				<div class="pho"><img class="lazy" data-original="/img/services/detail/photo05.jpg" alt="" data-size="924x476"><span>キャプション</span></div>
			</div>
			<div class="info05 fadeInUp"><img class="lazy" data-original="/img/services/detail/photo06.jpg" alt="" data-size="450x485"><span>キャプション</span></div>
			<div class="info06 fadeInUp">
				<div class="pho"><img class="lazy" data-original="/img/services/detail/photo07.jpg" alt="" data-size="316x190"><span>キャプション</span></div>
				<div class="textBox">
					<h3>01. 韓国本社での研修による技術向上</h3>
					<p>メーカーのプロトコルに加え、本社で実際に研修を受けることでより安全で高い技術提供を目指しております。</p>
				</div>
			</div>
			<div class="info07">
				<div class="movie fadeInUp"><iframe width="560" height="315" src="https://www.youtube.com/embed/8-e2CqmTdeo?si=UrncOry6kDWu-hTX" title="YouTube video player" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe></div>
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
							<h3>医師からのメッセージ</h3>
							<p>リフトアップボトックスは、加齢によって中顔面〜下顔面にかけての下垂に関与している広頸筋にボトックスを打つ施術です。広頸筋は加齢で発達することで、中顔面の脂肪や表情筋を下に引き下げる効果があります。片側4箇所にボトックスを注入することで下に下がる力を抑制し、フェイスラインをすっきりさせ、中顔面の脂肪の引き上げに効果がある治療です。広頸筋 (首の縦じわ) が発達してきた方、お手軽にリフトアップを希望される方にはおすすめの治療となります。</p>
						</div>
					</div>
				</div>
			</div>
		</div>
		<?php endif; ?>
	</div>
	<div class="info12">
		<h2 class="fadeInUp">たるみ・しわに効果的な治療</h2>
		<div class="imgBox flexB fadeInUp">
			<div class="pho"><img class="lazy" data-original="/img/services/detail/photo08.jpg" alt="" data-size="190x217"></div>
			<div class="textBox">
				<h3>サーマジェン</h3>
				<p>サーマジェンとは、RF（ラジオ波）と呼ばれる高周波エネルギーを肌に照射する美容治療です。</p>
				<div class="whiteBg">
					<p><span>【このようなお悩みにおすすめ】</span>口横たるみ・下膨れの頬・たるみ・ハリ・引締め</p>
				</div>
				<div class="comLink"><a href="#">View More</a></div>
			</div>
		</div>
		<div class="imgBox flexB fadeInUp">
			<div class="pho"><img class="lazy" data-original="/img/services/detail/photo09.jpg" alt="" data-size="190x217"></div>
			<div class="textBox">
				<h3>リフトアップボトックス</h3>
				<p>リフトアップボトックスとは、加齢によって発達した広頚筋という筋肉にボトックスを効かせることで、広頚筋や中顔面の脂肪や表情筋が下に下がる力を抑制し、リフトアップする治療です。<br>首の縦ジワに直接注入することで、首の縦ジワの改善効果も期待できます。</p>
				<div class="whiteBg">
					<p><span>【このようなお悩みにおすすめ】</span>たるみ・横じわ・もたつき</p>
				</div>
				<div class="comLink"><a href="#">View More</a></div>
			</div>
		</div>
	</div>
	<?php get_template_part('new/inc/com_reservation'); ?>
</div>
<?php get_footer('new'); ?>
