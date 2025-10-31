<?php

/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package v_1
 */

get_header();
?>

<script type="application/ld+json">
	{
		"@context": "https://schema.org",
		"@type": "FAQPage",
		"mainEntity": [{
				"@type": "Question",
				"name": "痛みは感じますか？",
				"acceptedAnswer": {
					"@type": "Answer",
					"text": "<span>チクチクした痛みを感じる方が多い為、麻酔クリームのご利用をお勧めしております。麻酔の料金は含まれておりますので、安心て施術をお受けいただけます</span>"
				}
			},
			{
				"@type": "Question",
				"name": "傷跡は残りますか？",
				"acceptedAnswer": {
					"@type": "Answer",
					"text": "<span>極細針なので傷跡は残りません。</span>"
				}
			},
			{
				"@type": "Question",
				"name": "ダウンタイムはどれくらいですか？",
				"acceptedAnswer": {
					"@type": "Answer",
					"text": "<span>赤みや腫れのピークは1～2日程度で、1週間程度でおさまります。</span>"
				}
			},
			{
				"@type": "Question",
				"name": " メイクはいつから出来ますか？",
				"acceptedAnswer": {
					"@type": "Answer",
					"text": "<span>通常24時間後から可能です。お薬の浸透を考え、6時間は洗顔・化粧水・乳液のご利用はお控えください。</span>"
				}
			},
			{
				"@type": "Question",
				"name": "どのくらいの頻度で治療すればいいですか？",
				"acceptedAnswer": {
					"@type": "Answer",
					"text": "<span>2〜4週間毎4～6回程度行うと効果的です。</span>"
				}
			},
			{
				"@type": "Question",
				"name": "まぶたなど目周りに使用できますか？",
				"acceptedAnswer": {
					"@type": "Answer",
					"text": "<span>可能です</span>"
				}
			}
		]
	}
</script>

<script type="application/ld+json">
	{
		"@context": "http://schema.org",
		"@type": "VideoObject",
		"name": "サーマニードルの施術の流れ",
		"description": "サーマニードルの施術の流れが分かる動画です。",
		"thumbnailUrl": "https://lianclinic.net/renew2022/wp-content/themes/v_2/img/sub-whatneedle_rf-img01.png",
		"uploadDate": "2022-09-07T08:00:00+09:00",
		"duration": "PT34S",
		"contentUrl": "https://lianclinic.net/renew2022/wp-content/themes/v_2/video/needle-state-video.mp4"
	}
</script>

<div id="primary" class="content-area">
	<main id="main" class="site-main sl">

		<div class="breadcrumbs breadcrumbs03">
			<div class="breadcrumbs-inn">
				<?php
				if (function_exists('yoast_breadcrumb')) {
					yoast_breadcrumb('<div id="breadcrumbs">', '</div>');
				}
				?>
			</div>
		</div>
		<div id="mv" class="sl-mv">
			<div class="d-fl sl-mv-inn">
				<div class="sl-mv-inn-ttl">
					<div class="pc">
						<svg xmlns="http://www.w3.org/2000/svg" width="420" height="162" viewBox="0 0 420 162">
							<defs>
								<style>
									.cls-mv-1 {
										fill: #1B294D;
										font-size: 36px;
										font-family: HiraMinPro-W3, Hiragino Mincho Pro;
										letter-spacing: 0.2em;
									}
								</style>
							</defs>
							<text id="あなたと美しさをつなぐクリニック" data-name="あなたと美しさをつなぐクリニック" class="cls-mv-1" transform="translate(0 35)">
								<tspan x="0" y="0">あなたと</tspan>
								<tspan x="0" y="60">美しさをつなぐ</tspan>
								<tspan x="0" y="120">クリニック</tspan>
							</text>
						</svg>
					</div>
					<div class="sp">
						<svg xmlns="http://www.w3.org/2000/svg" width="247" height="222" viewBox="0 0 247 222">
							<defs>
								<style>
									.cls-1 {
										fill: #1B294D;
										font-size: 36px;
										font-family: HiraMinPro-W3, Hiragino Mincho Pro;
										letter-spacing: 0.2em;
									}
								</style>
							</defs>
							<text id="あなたの_似合う_が_見つかる_アートメイク" data-name="あなたと美しさをつなぐ
                クリニック" class="cls-1" transform="translate(0 35)">
								<tspan x="0" y="0">あなたと</tspan>
								<tspan x="0" y="60">美しさを</tspan>
								<tspan x="0" y="120">つなぐ</tspan>
								<tspan x="0" y="180">クリニック</tspan>
							</text>
						</svg>
					</div>
				</div>
				<figure class="sp-right">
					<img class="pc" src="<?php echo get_template_directory_uri(); ?>/img/makeup/sub-mv-img.png" alt="あなたの“似合う”が 見つかるアートメイク">
					<img class="sp" src="<?php echo get_template_directory_uri(); ?>/img/makeup/sub-mv-sp.png" alt="あなたの“似合う”が 見つかるアートメイク">
				</figure>
			</div>
		</div>
		<div id="menu" class="sl-menu menu menu-needle">
			<div class="sl-menu-content">
				<div id="whatis" class="sl-whatis">
					<div class="sl-whatis-inn menu-inn attach-mv">
						<div class="sl-whatis-inn-ttl subpage-ttl menu-inn-ttl">
							<h1 class="under-line menu-inn-ttl__inner">サーマニードルとは</h1>
						</div>
						<div class="sl-whatis-inn-content">
							<div class="check-list">
								<ul class="check-list-wr">
									<li>ニキビ・ニキビ跡、クレーターをきれいにしたい</li>
									<li>毛穴の開き、たるみ毛穴を改善したい</li>
									<li>目元や肌全体にハリがない</li>
									<li>しわ、小じわを改善したい</li>
								</ul>
							</div>
							<div class="pg-text">
								<p>という方におすすめです。</p>
								<p>超極細のマイクロニードルを用いた低侵襲フラクショナルRF です。マイクロニードルをお肌に刺入することで小さな傷ができ、傷を自ら治そうとする創傷治癒の力によってコラーゲンの生成を促進させます。また、マイクロニードルの先端からRF（高周波）エネルギーを出力し、真皮層に熱刺激を与えることで肌の深層でタンパク質変性を起こさせ、コラーゲンの生成などによって、素肌本来の美しい肌づくりの効果をより高めることができます。針を用いることで表皮のダメージが抑えられ、ダウンタイムが少なくニキビ跡や毛穴、小じわ、たるみなどのあらゆる肌悩みを改善できます。</p>
							</div>
							<figure class="image">
								<img src="<?php echo get_template_directory_uri(); ?>/img/sub-whatneedle_rf-img01.png" alt="サーマニードルとは">
							</figure>
						</div>
					</div>
				</div>
				<div id="benefits" class="sl-benefits">
					<div class="menu-inn sl-benefits-inn">
						<div class="sl-benefits-inn-ttl subpage-ttl menu-inn-ttl">
							<h2 class="under-line">サーマニードルの効果<br class="sp"><small>（改善できる症状）</small></h2>
						</div>
						<div class="sl-benefits-inn-content">
							<div class="list-style01">
								<article class="list-style01-item">
									<h2 class="list-style01-item-ttl"><span class="list-no">01</span>効果の現れ方</h2>
									<div class="list-style01-item-txt">
										<p>肌の引き締まりやリフトアップ、施術1週間後のあたりから肌の滑らかさや化粧ノリが良くなるなど実感できます。照射後はコラーゲンが増産し、真皮の再構築が図られるため、術後1カ月後にも肌の若返り効果が期待できます。</p>
									</div>
								</article>
								<article class="list-style01-item">
									<h2 class="list-style01-item-ttl"><span class="list-no">02</span>治療回数</h2>
									<div class="list-style01-item-txt">
										<p>4週間に1回の間隔で5〜10 回程度。定期的に継続することでさらに効果が持続します。</p>
									</div>
								</article>
								<article class="list-style01-item">
									<h2 class="list-style01-item-ttl"><span class="list-no">03</span>ダウンタイム</h2>
									<div class="list-style01-item-txt">
										<p>ダウンタイムの無い施術から、長くて施術後1週間ほど赤みが残る施術まで治療によって異なります。メイクは翌日から可能です。当日からシャワーは可能ですが、入浴・サウナ・飲酒・運動はお控えください。体が温まることで炎症が起きる場合がございます。
										</p>
									</div>
								</article>
								<article class="list-style01-item">
									<h2 class="list-style01-item-ttl"><span class="list-no">04</span>痛み</h2>
									<div class="list-style01-item-txt">
										<p>麻酔クリームの使用を使用し、お痛みを軽減させていきます。
										</p>
									</div>
								</article>
							</div>
						</div>
					</div>
				</div>
				<div id="differences" class="sl-differences">
					<div class="menu-inn sl-differences-inn">
						<div class="sl-differences-inn-ttl subpage-ttl menu-inn-ttl">
							<h2 class="under-line">ダーマペンとの違い</h2>
						</div>
						<div class="sl-differences-inn-content">
							<div class="pg-text">
								<p>ダーマペンは穴をあけてニキビ跡や毛穴を入れていく治療で、針を刺して穴をあけるという点では同じですが、サーマニードルは穴をあけてさらに熱を加えるので、ピンポイントでの治療ができより高い治療効果が期待できます。</p>
								<p>サーマニードルは熱を加えることと穴を開けることの両方が一度にできますが、皮膚の奥の層に熱を加えるため表面はダウンタイムがほとんどなく年齢や肌タイプを選ばない治療です。皮膚が薄くなる比較的年齢層が上の方も安心してお受けいただけます。</p>
							</div>
						</div>
					</div>
				</div>
				<div id="state" class="sl-state">
					<div class="menu-inn sl-state-inn">
						<div class="sl-state-inn-ttl subpage-ttl menu-inn-ttl">
							<h2 class="under-line">施術の様子</h2>
						</div>
						<div class="sl-state-inn-content video-style01">
							<video width="400" controls>
								<source src="<?php echo get_template_directory_uri(); ?>/video/needle-state-video.mp4" type="video/mp4">
							</video>
						</div>
					</div>
				</div>
				<div id="treatment" class="sl-treatment">
					<div class="menu-inn sl-treatment-inn">
						<div class="sl-treatment-inn-ttl subpage-ttl menu-inn-ttl">
							<h2 class="under-line">組み合わせると<br class="sp">更に効果がある施術</h2>
						</div>
						<div class="sl-treatment-inn-content">
							<div class="fl-style02 d-fl">
								<div class="image">
									<img src="<?php echo get_template_directory_uri(); ?>/img/treatment/treatment06.png" alt="サーマジェン">
								</div>
								<div class="content content01">
									<h3>エレクトロポレーション</h3>
									<p>当院では、ピーリング治療を組み合わせて、エレクトロポレーションの施術もおすすめしています。エレクトロポレーションは、皮膚に弱い電気をあてて、小さな穴をあけることで、美容成分を肌の奥に浸透させる施術です。肌荒れ、ニキビ、美白、しみ、乾燥、アンチエイジングなど目的に合わせて美容成分を選べます。</p>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!--<div id="differences" class="sl-differences">
          <div class="menu-inn sl-differences-inn">
            <div class="sl-differences-inn-ttl subpage-ttl menu-inn-ttl">
              <h2 class="under-line">ダーマペンとの違い</h2>
            </div>
            <div class="sl-differences-inn-content">
              <div class="pg-text">
                <p>マイクロニードルを用いた治療ではダーマペン4 も広く知られていますが、RF フラクショナルニードルとの違いは、ダーマペン4 が針で皮膚表面に微小な穴を開けることで、肌が回復する力(自然治癒力)を高める治療であるのに加えて、RF フラクショナルニードルはさらに針から高周波(RF)を照射することで、真皮層に熱エネルギーを届け、コラーゲンの生成によるリフトアップ効果、肌質改善などが見込めます。</p>
              </div>
            </div>
          </div>
        </div>-->
				<div id="price" class="sl-price">
					<div class="menu-inn sl-price-inn">
						<div class="sl-price-inn-ttl subpage-ttl menu-inn-ttl">
							<h2 class="under-line">料金</h2>
						</div>
						<div class="sl-price-inn-content">
							<div class="price">
								<h3 class="price-ttl"><span>マイクロサーマニードル</span></h3>
								<div class="price-list">
									<div class="d-fl price-list-wr">
										<div class="price-list-wr-l">
											<h3>頬+鼻</h3>
											<ul>
												<li class="d-fl">
													<p>1回</p>
													<p class="dash-line"></p>
													<p>¥66,000</p>
												</li>
												<li class="d-fl">
													<p>3回</p>
													<p class="dash-line"></p>
													<p>¥188,100</p>
												</li>
												<li class="d-fl">
													<p>5回</p>
													<p class="dash-line"></p>
													<p>¥297,000</p>
												</li>
												<li class="d-fl">
													<p>10回</p>
													<p class="dash-line"></p>
													<p>¥528,000</p>
												</li>
												<li class="d-fl">
													<p>会員 1回</p>
													<p class="dash-line"></p>
													<p>¥52,800</p>
												</li>
												<li class="d-fl">
													<p>会員 3回</p>
													<p class="dash-line"></p>
													<p>¥150,480</p>
												</li>
												<li class="d-fl">
													<p>会員 5回</p>
													<p class="dash-line"></p>
													<p>¥237,600</p>
												</li>
												<li class="d-fl">
													<p>会員 10回</p>
													<p class="dash-line"></p>
													<p>¥422,400</p>
												</li>
											</ul>
										</div>
										<div class="price-list-wr-l">
											<h3>全顔</h3>
											<ul>
												<li class="d-fl">
													<p>1回</p>
													<p class="dash-line"></p>
													<p>¥77,000</p>
												</li>
												<li class="d-fl">
													<p>3回</p>
													<p class="dash-line"></p>
													<p>¥219,450</p>
												</li>
												<li class="d-fl">
													<p>5回</p>
													<p class="dash-line"></p>
													<p>¥346,500</p>
												</li>
												<li class="d-fl">
													<p>10回</p>
													<p class="dash-line"></p>
													<p>¥616,000</p>
												</li>
												<li class="d-fl">
													<p>会員 1回</p>
													<p class="dash-line"></p>
													<p>¥61,600</p>
												</li>
												<li class="d-fl">
													<p>会員 3回</p>
													<p class="dash-line"></p>
													<p>¥175,560</p>
												</li>
												<li class="d-fl">
													<p>会員 5回</p>
													<p class="dash-line"></p>
													<p>¥277,200</p>
												</li>
												<li class="d-fl">
													<p>会員 10回</p>
													<p class="dash-line"></p>
													<p>¥492,800</p>
												</li>
											</ul>
										</div>
									</div>
									<p class="price-list-warn pc">※麻酔代込<br>※会員：アートメイク会員</p>
								</div>
							</div>
							<p class="price-list-warn sp">※麻酔代込<br>※会員：アートメイク会員</p>
						</div>
						<div class="sl-price-inn-ft">
							<div class="menu-btn more-btn">
								<a href="<?php echo esc_html(home_url('/')) ?>price/" rel="alternate">VIEW MORE</a>
							</div>
						</div>
					</div>
				</div>
				<div id="reservation" class="sl-reservation">
					<div class="menu-inn sl-reservation-inn">
						<div class="sl-reservation-inn-ttl subpage-ttl menu-inn-ttl">
							<h2 class="under-line">ご予約</h2>
						</div>
						<div class="sl-reservation-inn-content">
							<div class="reservation-wr">
								<p>ご予約を承っております。</p>
								<?php $contactTxt01 = CFS()->get('text01');
								$contactTxt02 = CFS()->get('text02');
								if ($contactTxt01 != '') : ?>
									<h3><span class="l-slash">\ </span> <?php echo $contactTxt01; ?><br class="sp" /><?php echo $contactTxt02; ?> <span class="r-slash"> /</span></h3>
								<?php endif; ?>
								<div class="h-line"></div>
								<a href="https://reservation.medical-force.com/2d96f6933ed14b2a8e271863a7f0b813/reservations/new?menu_ids=74f868a6-855f-441a-a498-72f995c79c65" target="_blank" rel="nofollow noreferrer">
									<img src="<?php echo get_template_directory_uri(); ?>/img/reservation-btn01.png" alt="">
								</a>
							</div>
						</div>
					</div>
				</div>
				<div id="precautions" class="sl-precautions">
					<div class="menu-inn sl-precautions-inn">
						<div class="sl-precautions-inn-ttl subpage-ttl menu-inn-ttl">
							<h2 class="under-line">サーマニードルの注意事項</h2>
						</div>
						<div class="sl-precautions-inn-content">
							<div class="pg-text">
								<p>※リスク/副作用：治療後は赤みが出ます。体質によってはかゆみが出る場合があります。赤みは、早ければ数時間、長くても数日でほぼ目立たなくなります。</p>
								<p>また、代謝が上がったことで、一時的に、乾燥やざらつき、ニキビの悪化が起こることがあります。その場合は保湿をしっかり行ってください。</p>
							</div>
						</div>
					</div>
				</div>
				<?php $show = CFS()->get('faq_show');
				if ($show) : ?>
					<div id="faq" class="sl-faq">
						<div class="menu-inn sl-faq-inn">
							<div class="sl-faq-inn-ttl subpage-ttl menu-inn-ttl">
								<h2 class="under-line">よくある質問</h2>
							</div>
							<div class="sl-faq-inn-content menu-faq-content">
								<?php
								$args = array(
									'tax_query' => array(
										array(
											'taxonomy' => 'faq_category',
											'field' => 'slug',
											'terms' => 'needle_cat'
										),
									),
									'post_type' => 'faq',
									'post_status' => 'publish',
									'posts_per_page' => -1,
									'order' => 'ASC',
								);
								?>
								<?php query_posts($args); ?>
								<?php if (have_posts()) : ?>
									<?php while (have_posts()) : the_post(); ?>
										<div class="faq">
											<div class="d-fl faq-q">
												<span>Q</span>
												<h3><?php the_title(); ?></h3>
											</div>
											<div class="faq-ans">
												<?php the_content(); ?>
											</div>
										</div>
								<?php endwhile;
								endif; ?>
								<?php wp_reset_query(); ?>
							</div>
							<div class="sl-faq-inn-ft">
								<div class="menu-btn more-btn">
									<a href="<?php echo home_url('/faq') ?>" rel="alternate">VIEW MORE</a>
								</div>
							</div>
						</div>
					</div>
				<?php endif; ?>
			</div>
		</div>

		<?php get_template_part('footer-company'); ?>
	</main>
</div>
<?php
get_footer();
