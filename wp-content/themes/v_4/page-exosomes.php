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
	{}
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
              <h1 class="under-line menu-inn-ttl__inner">エクソソーム</h1>
            </div>
						<div class="sl-whatis-inn-content">
              <div class="d-fl whatis-detailup">
                <figure>
					<img src="https://lianclinic.net/renew2022/wp-content/uploads/LINE_ALBUM_2023.4_230419のコピー.jpg" alt="POTENZAの機械">
                </figure>
                <div class="whatis-detailup-txt">
					<p>幹細胞の培養時に得られる上澄み液 (=培養上清液) は、いわゆる<span class="color-02"><strong>「幹細胞美容液」</strong></span>などとして広く使われています。<br><br>そこには幹細胞が分泌する若返り有効成分が含まれており、その中心的な役割を担うのが<strong>エクソソーム</strong>です。<br><br>ただし、幹細胞培養上清液として紹介されているものの中には、エクソソームが同定できなかったり、培地由来の成分 (蛋白など) や老廃物など、人体に有害な成分が含まれているものもあるので、<span class="color-02"><strong>製法・品質管理のあり方・加工元などをしっかりと見定めること</strong></span>が重要です。<br><br>品質を見分ける方法として、含まれる粒子の総数だけでなく、幹細胞エクソソームだけの<span class="color-02"><strong>粒子数や純度を測定しているもの</strong></span>のみを使用することをおすすめします。</p>
                </div>
              </div>
							</div>
					</div>
				</div>
				
        <div id="benefits" class="sl-benefits">
          <div class="menu-inn sl-benefits-inn">
            <div class="sl-benefits-inn-ttl subpage-ttl menu-inn-ttl">
              <h2 class="under-line">エクソソームとは</h2>
            </div>
            <div class="sl-benefits-inn-content">
				<div class="fl-style02 d-fl align-center">
                <div class="image">
                  <img class="pc" src="https://lianclinic.net/renew2022/wp-content/uploads/LINE_ALBUM_2023.4_2304191.jpg" alt="脂肪溶解注射 チンセラ">
                  <img class="sp" src="https://lianclinic.net/renew2022/wp-content/uploads/LINE_ALBUM_2023.4_2304191.jpg" alt="脂肪溶解注射 チンセラ">
                </div>
                <div class="content">
					<p><strong>エクソソームは、細胞間の情報のやり取りを担う「細胞外小胞」の1つです。</strong><br><br>細胞外小胞とは、細胞から分泌される不均一な脂質二重膜構造の小胞の総称を指します。<br>そこには<span class="color-02"><strong>幹細胞が分泌する若返り有効成分</strong></span>が含まれており、その中心的な役割を担うのが<strong>エクソソーム</strong>です。<br><br>各細胞が持つ核酸やタンパク質といった情報を他の細胞に伝播する役割を担っていて、発生、免疫、組織恒常性、がん、神経変性疾患など、<span class="color-02"><strong>ヒトの健康と病気の多くの側面で重要な役割</strong></span>を担っています。</p>
                </div>
              </div>
              <div class="pg-text">
               <a href="https://www.annualreviews.org/doi/10.1146/annurev-biochem-013118-111902?url_ver=Z39.88-2003&rfr_id=ori%3Arid%3Acrossref.org&rfr_dat=cr_pub++0pubmed
"><p style="text-align:end;"><small>参照：D. Michiel Pegtel and Stephen J. Gould,Exosomes Vol. 88:487-514,2019</small></p></a>
              </div>
            </div>
          </div>
        </div>
				
        <div id="benefits" class="sl-benefits">
          <div class="menu-inn sl-benefits-inn">
            <div class="sl-benefits-inn-ttl subpage-ttl menu-inn-ttl">
              <h2 class="under-line">エクソソームの期待される効果<br class="sp"><small>（改善できる症状）</small></h2>
            </div>
            <div class="sl-benefits-inn-content">
              <div class="check-list">
                <ul class="check-list-wr">
                  <li>美肌効果</li>
                  <li>肌トラブルの改善</li>
                  <li>生活習慣病や内臓疾患の予防</li>
                  <li>薄毛や抜け毛</li>
                  <li>全身のエイジングケア</li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        
       
				
				<div id="benefits" class="sl-benefits">
					<div class="menu-inn sl-benefits-inn">
						<div class="sl-benefits-inn-ttl subpage-ttl menu-inn-ttl">
							<h2 class="under-line">研究結果</h2>
						</div>
						<div class="sl-benefits-inn-content">
							<div class="list-style01">
								<article class="list-style01-item">
									<h2 class="list-style01-item-ttl"><span class="list-no">01</span>アトピー性皮膚炎の改善</h2>
									
            <div class="sl-what4lift-inn-content">
              <div class="what4lift-fl d-fl">
                <figure class="image">
                  <img src="https://lianclinic.net/renew2022/wp-content/uploads/image1.png" alt="リアンクリニックの4リフトサーマジェンとは">
                </figure>
                <div class="content">
					<p><br>アトピー性皮膚炎マウスモデルにおいて脂肪幹細胞由来エクソソームを皮下投与したところ、経表皮水分損失が顕著に減少し、角質層の補水が促進され、IL-4、IL-5、IL-13、TNF-α、IFN-γ、IL-17、TSLPなどの炎症性サイトカインレベルが用量依存的に顕著に減少することがわかりました。<br><br>電子顕微鏡による解析では、脂肪幹細胞由来エクソソーム投与により表皮ラメラ小体が増強され、SCと顆粒層の界面にラメラ層が形成されています。<br><br>皮膚病変部のRNAシークエンス解析では、<span class="color-02"><strong>脂肪幹細胞由来エクソソームが皮膚バリア、脂質代謝、細胞周期、炎症反応に関与する遺伝子の発現を回復させる</strong></span>ことが示されています。</p>
                </div>
              </div>
            </div>
									<div class="list-style01-item-txt">
							
										<a href="https://www.mdpi.com/2073-4409/9/3/680"><p style="text-align:end;"><small>参照：Kyong-Oh Shin,Cells 2020, 9(3), 680</small></p></a>
									</div>
								</article>
								<article class="list-style01-item">
									<h2 class="list-style01-item-ttl"><span class="list-no">02</span>脳損傷の機能改善</h2>
									                  <div class="fl-style01-item-content1">
                    <figure>
                      <img class="pc" src="https://lianclinic.net/renew2022/wp-content/uploads/image2.jpg"
                        alt="お出かけ前のメイク時間の短縮">
                      <img class="sp" src="https://lianclinic.net/renew2022/wp-content/uploads/image2.jpg"
                        alt="お出かけ前のメイク時間の短縮">
                    </figure>
                    <div class="fl-style01-item-content-txt">
						<p><br>脂肪幹細胞由来エクソソームを注入したラットは、生理食塩水処理群と比較して、34-35日目に空間学習の有意な改善を示し（p＜0.05）、受傷後14-35日目に感覚運動機能の回復（神経障害および足故障頻度の減少）が認められました（p＜0.05）。<br><br>エクソソーム処理により、病変境界領域と歯状回で新たに発生した内皮細胞数が有意に増加し、歯状回で新たに形成された未成熟および<span class="color-02"><strong>成熟神経細胞数が有意に増加するとともに、神経炎症が抑制されました。</strong></span>
</p>
                    </div>
                  </div>
									<div class="list-style01-item-txt">
										<a href="https://thejns.org/view/journals/j-neurosurg/122/4/article-p856.xml"><p style="text-align:end;"><small>参照：Zhang, Y.,JNS,122(4), 856-867. 2023,</small>
											</p></a>
									</div>
								</article>
							</div>
						</div>
					</div>
				</div>
				
        <div id="benefits" class="sl-benefits">
          <div class="menu-inn sl-benefits-inn">
            <div class="sl-benefits-inn-ttl subpage-ttl menu-inn-ttl">
              <h2 class="under-line">リアンクリニックのエクソソーム点滴</h2>
            </div>
            <div class="sl-benefits-inn-content">
              <div class="sl-benefits-inn-content-info pg-text">
				  <div class="fl-style01">
                <article class="fl-style01-item">
                  <h2 class="fl-style01-item-ttl"><span class="list-no">01</span>エクソソームの含有量が他社の4倍〜200倍の含有量</h2>
                  <div class="fl-style01-item-content1">
                    <div class="fl-style01-item-content-txt">
						<p>エクソソームと謳っている製品の中には、<strong>エクソソームの含有量が少ないもの</strong>も含まれております。エクソソームにはCD63という細胞膜タンパク質という特有の抗原があり、免疫染色での発光量で<span class="color-02"><strong>エクソソームの量を同定</strong></span>しております。</p>
                    </div>
                  </div>
                </article>
                <article class="fl-style01-item">
                  <h2 class="fl-style01-item-ttl"><span class="list-no">02</span>安全・高品質なエクソソームの使用</h2>
                  <div class="d-fl fl-style01-item-content1">
                    <div class="fl-style01-item-content-txt">
						<p>当院で扱っているエクソソームは正常な日本人の歯髄から抽出された<span class="color-02"><strong>ヒト幹細胞培養上清</strong></span>を使用しています。	</p>
<div class="pg-text" style="background-color:rgba(0,0,0,0.02); "><p><strong>除外項目</strong><br>以下のすべての検査をおこない、陰性確認済みのものを使用しております。<br>
一般細菌、真菌、マイコプラズマ、HBV、HCV、HIV、HTLV、EBV、CNV、ParvoB19、HSV、VZV、HHV、ADV、BKV、JCV、HPV、エンドトキシン
							  </p>
							</div>
                    </div>
                  </div>
                </article>
                <article class="fl-style01-item">
                  <h2 class="fl-style01-item-ttl"><span class="list-no">03</span>不純物の少ない製剤を使用</h2>
                  <div class="d-fl fl-style01-item-content1">
                    <div class="fl-style01-item-content-txt">
						<p>不純物が多い細胞培養上清液はかえって体調が悪化することがあります。メーカーによっては混合不純物 (ウシ由来タンパク質など) が含まれており、炎症が惹起され、体調が悪化することがあります。
</p>
                    </div>
                  </div>
                </article>
              </div>
            </div>
          </div>
        </div>
			
        <div id="types" class="sl-types">
          <div class="menu-inn sl-types-inn">
            <div class="sl-types-inn-ttl subpage-ttl menu-inn-ttl">
              <h2 class="under-line">エクソソームの種類</h2>
            </div>
            <div class="sl-types-inn-content">
              <div class="fl-style01">
                <article class="fl-style01-item">
                  <h2 class="fl-style01-item-ttl"><span class="list-no">01</span>脂肪由来幹細胞培養上清液</h2>
                  <div class="fl-style01-item-content1">
                    <div class="fl-style01-item-content-txt">
						<p><strong>脂肪幹細胞由来培養上清</strong>とは腹部などから吸引採取される脂肪組織中に存在する幹細胞を培養した過程で得られる上澄み液のことです。<br>組織の再生を助ける生理活性物質を豊富に含んだ、<span class="color-02"><strong >脂肪由来幹細胞の培養上清</strong></span>です。<br>腹部などから吸引採取される脂肪組織中に存在する幹細胞を培養して、その培養上清（細胞を含まない液体部分）を採取・精製して作られた液性因子をいいます。<br>この培養上清には、<span class="color-02"><strong >幹細胞から分泌された数百種類のサイトカインやインターロイキン、TGF-βなど</strong></span>が豊富に含まれています。</p>
                    </div>
					  <div class="check-list">
								<ul class="check-list-wr">
									<li>老化防止</li>
									<li>疲労回復</li>
									<li>男性機能回復</li>
									<li>睡眠障害改善</li>
									<li>血行改善</li>
								</ul>
							</div>
                  </div>
                </article>
                <article class="fl-style01-item">
                  <h2 class="fl-style01-item-ttl"><span class="list-no">02</span>歯髄由来幹細胞培養上清液</h2>
                  <div class="fl-style01-item-content1">
                    <div class="fl-style01-item-content-txt">
						<p>歯髄由来幹細胞培養上清とは<strong>子供の乳歯の細胞を採取し、培養した過程で得られる上澄み液</strong>のことです。<br>
							歯髄由来幹細胞の再生因子は多面的に有効性が高く、優れた増殖能力を持ちます。<br>中でも、最も強い再生力を持つ幹細胞は<span class="color-02"><strong >「乳歯歯髄由来」</strong></span>と言われています。
</p>
                    </div>
					  <div class="check-list">
								<ul class="check-list-wr">
									<li>糖尿病・糖尿病性末梢神経障害・糖尿病性腎症の改善</li>
									<li>肝機能障害の改善</li>
									<li>頚椎症や腰椎症による末梢神経障害の改善</li>
									<li>疲れやすさ</li>
									<li>肩こり等の改善</li>
									<li>育毛・発毛促進</li>
									<li>肌の抗酸化作用</li>
								</ul>
							</div>
                  </div>
                </article>
              </div>
            </div>
          </div>
        </div>
        
			<div id="differences" class="sl-differences">
					<div class="menu-inn sl-differences-inn">
						<div class="sl-differences-inn-ttl subpage-ttl menu-inn-ttl">
							<h2 class="under-line">エクソソームの注意事項</h2>
						</div>
						<div class="sl-differences-inn-content">
							<div class="pg-text">
								<p style="text-align:center;"><strong>注意点①</strong></p><p>以下の人は受けられません。また気になることがある方は医師にご相談下さい。<br>
・がんの治療中の方<br>
・がんの治療後間もない方<br>
・妊娠している方・妊娠の可能性がある方<br>
</p>
								<p  style="text-align:center;"><span><strong>注意点②</strong></span></p><p>幹細胞培養上清液療法を受けた方は献血ができません。<br>
幹細胞培養上清液療法ではヒト由来製品のため、現在の検査法では検知できない未知のウィルス感染の可能性が否定できなくなります。<br>
このことから、日本赤十字社ではヒト由来製品を使用した方の献血をお断りしています。<br>
</p>
							</div>
						</div>
					</div>
				</div>	
			<div id="price" class="sl-price">
					<div class="menu-inn sl-price-inn">
						<div class="sl-price-inn-ttl subpage-ttl menu-inn-ttl">
							<h2 class="under-line">料金</h2>
						</div>
						<div class="sl-price-inn-content">
							<div class="price">
								<h3 class="price-ttl"><span>エクソソーム</span></h3>
								<div class="price-list">
									<div class="d-fl price-list-wr">
										<div class="price-list-wr-l" style="width:60%;">
											<h3 style="text-align:center;">脂肪由来・歯髄由来エクソソーム(静脈注射)</h3>
											<ul>
												<li class="d-fl">
													<p>初回 2cc</p>
													<p class="dash-line"></p>
													<p>¥55,000</p>
												</li>
												<li class="d-fl">
													<p>1cc</p>
													<p class="dash-line"></p>
													<p>¥44,000</p>
												</li>
												<li class="d-fl">
													<p>2cc</p>
													<p class="dash-line"></p>
													<p>¥77,000</p>
												</li>
												<li class="d-fl">
													<p>3cc</p>
													<p class="dash-line"></p>
													<p>¥110,000</p>
												</li>
											</ul>
											<p style="text-align:right;">＊全て税込です</p>
										</div>
									</div>
								</div>
							</div>
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
								<a href="https://lin.ee/94Mjv4T" target="_blank" rel="nofollow noreferrer">
									<img src="<?php echo get_template_directory_uri(); ?>/img/reservation-btn01.png" alt="">
								</a>
							</div>
						</div>
					</div>
				</div>
			<div id="faq" class="sl-faq">
          <div class="menu-inn sl-faq-inn">
            <div class="sl-faq-inn-ttl subpage-ttl menu-inn-ttl">
              <h2 class="under-line">よくある質問</h2>
            </div>
            <div class="sl-faq-inn-content menu-faq-content">
                                                                      <div class="faq">
                <div class="d-fl faq-q">
                  <span>Q</span>
                  <h3>高濃度エクソソーム点滴療法は何回くらい受けると効果的ですか？</h3>
                </div>
                <div class="faq-ans">
					<p><span style="font-weight: 400;">高濃度エクソソーム点滴療法は、1回でも効果を実感していただける方が多いですが、3回程度以上受けていただくことでより効果を実感することができます。</span></p>
                </div>
              </div>
                            <div class="faq">
                <div class="d-fl faq-q">
                  <span>Q</span>
                  <h3>カウンセリング当日に施術できますか？</h3>
                </div>
                <div class="faq-ans">
                  <p><span style="font-weight: 400;">はい。当日に施術をお受け頂けます。遠方にお住まいの方は、施術は午前中のみとさせていただいております。</span></p>
                </div>
              </div>
                            <div class="faq">
                <div class="d-fl faq-q">
                  <span>Q</span>
                  <h3>どの程度の間隔で点滴療法を受けると効果的ですか？</h3>
                </div>
                <div class="faq-ans">
                  <p><span style="font-weight: 400;">おおよそ2週間～1カ月に1回程度受けていただくことを推奨しています。</span></p>
                </div>
              </div>
                                        </div>
            <div class="sl-faq-inn-ft">
              <div class="menu-btn more-btn">
                <a href="https://lianclinic.net/faq" rel="alternate">VIEW MORE</a>
              </div>
            </div>
          </div>
        </div>
			
        <?php $show = CFS()->get('faq_show'); if($show): ?>
        <div id="faq" class="sl-faq">
          <div class="menu-inn sl-faq-inn">
            <div class="sl-faq-inn-ttl subpage-ttl menu-inn-ttl">
              <h2 class="under-line">よくある質問</h2>
            </div>
            <div class="sl-faq-inn-content menu-faq-content">
              <?php
                $args=array(
                'tax_query' => array(
                    array(
                    'taxonomy' => 'faq_category',
                    'field' => 'slug',
                    'terms' => 'eyebrow'
                  ),
                ),
                'post_type' => 'faq',
                'post_status' => 'publish',
                'posts_per_page' => 3,
                'order' => 'ASC',
                );
                ?>
              <?php query_posts( $args ); ?>
              <?php if(have_posts()): ?>
              <?php while(have_posts()):the_post(); ?>
              <div class="faq">
                <div class="d-fl faq-q">
                  <span>Q</span>
                  <h3><?php the_title(); ?></h3>
                </div>
                <div class="faq-ans">
                  <?php the_content(); ?>
                </div>
              </div>
              <?php endwhile; endif; ?>
              <?php wp_reset_query(); ?>
            </div>
            <div class="sl-faq-inn-ft">
              <div class="menu-btn more-btn">
                <a href="<?php echo home_url( '/faq' ) ?>" rel="alternate">VIEW MORE</a>
              </div>
            </div>
          </div>
        </div>
			
        <?php endif; ?>
        
			
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
