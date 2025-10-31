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

<div id="primary" class="content-area">
	<main id="main" class="site-main sl">
		<div class="breadcrumbs">
			<div class="breadcrumbs-inn">
				<?php
				if (function_exists('yoast_breadcrumb')) {
					yoast_breadcrumb('<div id="breadcrumbs">', '</div>');
				}
				?>
			</div>
		</div>
		<?php $locale = get_locale();
		if ('en_US' == $locale  ) { ?>
			<?php get_template_part('template-parts/price-en'); ?>
		<?php } else { ?>
		<div id="price" class="sl-pl">
			<div class="sl-pl-inn sbprice-inn">
				<div class="sl-pl-inn-ttl subpage-ttl">
					<h1 class="under-line">Price</h1>
				</div>
				<div class="sl-pl-inn-content sbprice-content">
					<div class="price-list">
						<div class="price-list-wr">
						
							<h2 class="price-list-ttl">Category</h2>
							<p class="price-list-subttl">カテゴリー</p>
							<!-- 目次
							---------------------------->
							<ul class="d-fl">
								<li><a href="#sagging" rel="alternate">たるみ治療</a></li>
								<li><a href="#thread" rel="alternate">糸リフト</a></li>
								<li><a href="#poretreatment" rel="alternate">毛穴治療</a></li>
								<li><a href="#potenza" rel="alternate">ポテンツァ</a></li>
								<li><a href="#shimichiryo" rel="alternate">シミ・赤み治療</a></li>
								<li><a href="#botox" rel="alternate">ボトックス</a></li>
								<li><a href="#hyaluronicacid" rel="alternate">ヒアルロン酸</a></li>
								<li><a href="#injection" rel="alternate">水光注射</a></li>
								<li><a href="#face" rel="alternate">小顔</a></li>
								<li><a href="#atomeiku" rel="alternate">アートメイク</a></li>
								<li><a href="#other" rel="alternate">その他</a></li>
							</ul>

							<p class="price__caution" style="text-align: center;">※ 料金はすべて税込みです。</p>

							<!--  -->
							<section class="price_section">
								<div class="price__treatment-wrap">
									<h3 class="price__title03">診察料</h3>
									<table class="price__table">
										<tbody>
											<tr>
												<td rowspan="2">カウンセリング</td>
												<td>初回</td>
												<td style="text-align:center;">無料</td>
											</tr>
											<tr>
												<td>2回目以降</td>
												<td style="text-align:center;">無料</td>
											</tr>
											<tr>
												<td rowspan="2">診察</td>
												<td>初回</td>
												<td style="text-align:center;">無料</td>
											</tr>
											<tr>
												<td>2回目以降</td>
												<td style="text-align:center;">無料</td>
											</tr>
										</tbody>
									</table>
								</div>
							</section>
								
							<!--  -->
							<section class="price_section">
								<div class="price__treatment-wrap">
									<h3 class="price__title03">指名料</h3>
									<table class="price__table">
										<tbody>
											<tr>
												<td>藤尾院長</td>
												<td>¥3,300</td>
											</tr>
											<tr>
												<td>ゆきまろNS</td>
												<td>¥1,100</td>
											</tr>
										</tbody>
									</table>
								</div>

								<p class="price__caution" style="margin-top: 0; padding-top: 0;">
									※指名料は、2025年10月以降のご予約にのみかかります。
									<br>※指名料は、6/15以前にお取りいただいているご予約に関しては指名料はかかりません。
								</p>

							</section>
								
							<!-- たるみ治療
							---------------------------->
							<section class="price_section" id="sagging">
								<h2 class="price__title01">たるみ治療</h2>

								<!--高周波-->
								<div class="price__group01">
									<h3 class="price__title02">高周波</h3>
									<!--ボルニューマ-->
									<div class="price__treatment-wrap">
										<h4 class="price__title03"><a href="<?php echo home_url('/services/volnewmer/'); ?>">ボルニューマ</a></h4>
										<div class="price__treatment-description-wrap">
											<div class="price__treatment-description">
												<div class="price__treatment-con">
													<h5 class="price__treatment-title">こんなお悩みに・効果</h5>
												</div>
												<div class="price__treatment-con">
													<p>サーマジェンよりも強い引き締め効果を期待されたい方におすすめの施術です。</p>
												</div>
											</div>
											<div class="price__treatment-description">
												<div class="price__treatment-con">
													<h5 class="price__treatment-title">効果が出やすい治療間隔</h5>
												</div>
												<div class="price__treatment-con">
													<p>3-6ヶ月</p>
												</div>
											</div>
										</div>
										<table class="price__table">
											<thead>
												<tr>
													<th width="50%">対象部位</th>
													<th width="25%">回数</th>
													<th width="25%">価格</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td>2リフト【頬＋フェイスライン】</td>
													<td>1回</td>
													<td>66,000円</td>
												</tr>
												<tr>
													<td>4リフト【額+頬＋目元＋フェイスライン】顎下含む</td>
													<td>1回</td>
													<td>82,500円</td>
												</tr>
												<tr>
													<td>5リフト【額+ 頬+ 目元+ フェイスライン+ 手の甲or デコルテor 首】顎下含む</td>
													<td>1回</td>
													<td>99,000円</td>
												</tr>
											</tbody>
										</table>
									</div>
									<!--XERF #atomeiku'ザーフ'-->
									<div class="price__treatment-wrap">
										<h4 class="price__title03"><a href="<?php echo home_url('/services/xerf/'); ?>">XERF 'ザーフ'</a></h4>
										<div class="price__treatment-description-wrap">
											<div class="price__treatment-description">
												<div class="price__treatment-con">
													<h5 class="price__treatment-title">こんなお悩みに・効果</h5>
												</div>
												<div class="price__treatment-con">
													<p>ほうれい線が深くなったと感じる方、口横がもたついてきたと感じる方、小顔になりたいと感じる方におすすめです。<br>「最適なリフティング+引き締め効果の向上」によりお悩みにコミットします。</p>
												</div>
											</div>
											<div class="price__treatment-description">
												<div class="price__treatment-con">
													<h5 class="price__treatment-title">効果が出やすい治療間隔</h5>
												</div>
												<div class="price__treatment-con">
													<p>3-6ヶ月に1回</p>
												</div>
											</div>
										</div>
										<table class="price__table">
											<thead>
												<tr>
													<th width="50%">対象部位</th>
													<th width="25%">回数</th>
													<th width="25%">価格</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td>2リフト【頬+フェイスライン】</td>
													<td>1回</td>
													<td>66,000円</td>
												</tr>
												<tr>
													<td>4リフト【額+頬＋目元＋フェイスライン】<br>（顎下含む）</td>
													<td>1回</td>
													<td>82,500円</td>
												</tr>
												<tr>
													<td>5リフト【額+頬+目元+フェイスライン+首】<br>（顎下含む）</td>
													<td>1回</td>
													<td>99,000円</td>
												</tr>
											</tbody>
										</table>
									</div>
									<!--サーマジェン-->
									<div class="price__treatment-wrap">
										<h4 class="price__title03"><a href="<?php echo home_url('/services/sarmagen/'); ?>">サーマジェン</a></h4>
										<div class="price__treatment-description-wrap">
											<div class="price__treatment-description">
												<div class="price__treatment-con">
													<h5 class="price__treatment-title">こんなお悩みに・効果</h5>
												</div>
												<div class="price__treatment-con">
													<p>口横のもたつきや皮膚のもたつきが気になる方にオススメ。痛みが怖い方でも安心して受けられる施術です。</p>
												</div>
											</div>
											<div class="price__treatment-description">
												<div class="price__treatment-con">
													<h5 class="price__treatment-title">効果が出やすい治療間隔</h5>
												</div>
												<div class="price__treatment-con">
													<p>2ヶ月</p>
												</div>
											</div>
										</div>
										<table class="price__table">
											<thead>
												<tr>
													<th width="50%">対象部位</th>
													<th width="25%">回数</th>
													<th width="25%">価格</th>
												</tr>
											</thead>
											<tbody>
												<!--
												<tr>
													<td>2リフト【頬＋フェイスライン】</td>
													<td>1回</td>
													<td>39,600円</td>
												</tr>
												<tr>
													<td>3回</td>
													<td>99,000円</td>
												</tr>-->
												<tr>
													<td>4リフト【額+頬＋目元＋フェイスライン】顎下含む</td>
													<td>1回</td>
													<td>52,800円</td>
												</tr>
												<!--
												<tr>
													<td>3回</td>
													<td>143,000円</td>
												</tr>-->
											</tbody>
										</table>
									</div>
									<!--ダイヤモンドチップ-->
									<div class="price__treatment-wrap">
										<h4 class="price__title03">ダイヤモンドチップ</h4>
										<div class="price__treatment-description-wrap">
											<div class="price__treatment-description">
												<div class="price__treatment-con">
													<h5 class="price__treatment-title">こんなお悩みに・効果</h5>
												</div>
												<div class="price__treatment-con">
													<p>皮膚のハリや引き締め効果を期待される方はおすすめです。</p>
												</div>
											</div>
											<div class="price__treatment-description">
												<div class="price__treatment-con">
													<h5 class="price__treatment-title">効果が出やすい治療間隔</h5>
												</div>
												<div class="price__treatment-con">
													<p>2ヶ月</p>
												</div>
											</div>
										</div>
										<table class="price__table">
											<thead>
												<tr>
													<th width="50%">対象部位</th>
													<th width="25%">回数</th>
													<th width="25%">価格</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td>4リフト【額+ 頬+ フェイスライン+ 目元】顎下含む</td>
													<td>1回</td>
													<td>52,800円</td>
												</tr>
											</tbody>
										</table>
									</div>
									<!--ダイヤモンドサーマ
									<div class="price__treatment-wrap">
										<h4 class="price__title03">ダイヤモンドサーマ</h4>
										<div class="price__treatment-description-wrap">
											<div class="price__treatment-description">
												<div class="price__treatment-con">
													<h5 class="price__treatment-title">こんなお悩みに・効果</h5>
												</div>
												<div class="price__treatment-con">
													<p>３種類のヘルツで熱を入れることでハリや小じわにアプローチする治療。<br>浅いところへの熱入れなのでコケが心配でハリがほしい方におすすめです。</p>
												</div>
											</div>
											<div class="price__treatment-description">
												<div class="price__treatment-con">
													<h5 class="price__treatment-title">効果が出やすい治療間隔</h5>
												</div>
												<div class="price__treatment-con">
													<p>2-4ヶ月</p>
												</div>
											</div>
										</div>
										<table class="price__table">
											<thead>
												<tr>
													<th width="50%">対象部位</th>
													<th width="25%">回数</th>
													<th width="25%">価格</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td>4リフトサーマジェン+ダイヤモンドチップ200ショット</td>
													<td>1回</td>
													<td>
														77,000円
														<br>
															<span class="price-red-text">
																サーマジェン→ボルニューマ
																<br>+¥33,000 で変更可能
															</span>
													</td>
												</tr>
											</tbody>
										</table>
									</div>-->
									<!--THE RF-->
									<div class="price__treatment-wrap">
										<h4 class="price__title03">THE RF</h4>
										<div class="price__treatment-description-wrap">
											<div class="price__treatment-description">
												<div class="price__treatment-con">
													<h5 class="price__treatment-title">こんなお悩みに・効果</h5>
												</div>
												<div class="price__treatment-con">
													<p>小じわ、たるみ、ハリ感など幅広いお悩みに複数のデバイスをつかいアプローチします。</p>
												</div>
											</div>
											<div class="price__treatment-description">
												<div class="price__treatment-con">
													<h5 class="price__treatment-title">効果が出やすい治療間隔</h5>
												</div>
												<div class="price__treatment-con">
													<p>3-6ヶ月毎</p>
												</div>
											</div>
										</div>
										<table class="price__table">
											<thead>
												<tr>
													<th width="50%">対象部位</th>
													<th width="25%">回数</th>
													<th width="25%">価格</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td>顔・首込み</td>
													<td>1回</td>
													<td>132,000円</td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>

								<!--HIFU-->
								<div class="price__group01">
									<h3 class="price__title02"><a href="<?php echo home_url('/services/hifu-linear/'); ?>">HIFU</a></h3>
									<!--デザイニングハイフ-->
									<div class="price__treatment-wrap">
										<h4 class="price__title03"><a href="<?php echo home_url('/services/hifu/'); ?>">デザイニングハイフ<br></a></h4>
										<div class="price__treatment-description-wrap">
											<div class="price__treatment-description">
												<div class="price__treatment-con">
													<h5 class="price__treatment-title">こんなお悩みに・効果</h5>
												</div>
												<div class="price__treatment-con">
													<p>お客様のお悩みや解剖生理に応じてカートリッジを使い分けて照射するハイフ。フェイスラインを引き上げたい方、頬や顎裏の脂肪ボリュームが多く、スッキリさせたい方におすすめです。</p>
												</div>
											</div>
											<div class="price__treatment-description">
												<div class="price__treatment-con">
													<h5 class="price__treatment-title">効果が出やすい治療間隔</h5>
												</div>
												<div class="price__treatment-con">
													<p>3-6ヶ月</p>
												</div>
											</div>
										</div>
										<table class="price__table">
											<thead>
												<tr>
													<th width="50%">対象部位</th>
													<th width="25%">回数</th>
													<th width="25%">価格</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td rowspan="4">部位の相談可能</td>
													<td>400ショット</td>
													<td>69,300円</td>
												</tr>
												<tr>
													<td>600ショット</td>
													<td>88,000円</td>
												</tr>
												<tr>
													<td>800ショット</td>
													<td>106,700円</td>
												</tr>
												<tr>
													<td>1000ショット</td>
													<td>125,400円</td>
												</tr>
											</tbody>
										</table>
									</div>
									<!--コラーゲンハイフ-->
									<div class="price__treatment-wrap">
										<h4 class="price__title03"><a href="<?php echo home_url('/services/collagen-hifu/'); ?>">コラーゲンハイフ</a></h4>
										<div class="price__treatment-description-wrap">
											<div class="price__treatment-description">
												<div class="price__treatment-con">
													<h5 class="price__treatment-title">こんなお悩みに・効果</h5>
												</div>
												<div class="price__treatment-con">
													<p>浅い層に熱が入るカートリッジを使用し、皮膚の引き締めやハリ感を出す治療です。</p>
												</div>
											</div>
											<div class="price__treatment-description">
												<div class="price__treatment-con">
													<h5 class="price__treatment-title">効果が出やすい治療間隔</h5>
												</div>
												<div class="price__treatment-con">
													<p>2ヶ月</p>
												</div>
											</div>
										</div>
										<table class="price__table">
											<thead>
												<tr>
													<th width="50%">内容</th>
													<th width="25%">ショット数</th>
													<th width="25%">価格</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td>2リフトコラーゲンハイフ【頬 + フェイスライン】</td>
													<td>400ショット</td>
													<td>52,800円</td>
												</tr>
												<tr>
													<td>4リフトコラーゲンハイフ【額+頬+目元+フェイスライン+首】<br>顎下含む</td>
													<td>1,000ショット</td>
													<td>99,000円</td>
												</tr>
											</tbody>
										</table>
									</div>
									<!--リニアハイフ-->
									<div class="price__treatment-wrap">
										<h4 class="price__title03">リニアハイフ</h4>
										<div class="price__treatment-description-wrap">
											<div class="price__treatment-description">
												<div class="price__treatment-con">
													<h5 class="price__treatment-title">こんなお悩みに・効果</h5>
												</div>
												<div class="price__treatment-con">
													<p>メスや注射を使うことなく脂肪層に働きかけ脂肪層をボリュームダウン出来る治療です。</p>
												</div>
											</div>
											<div class="price__treatment-description">
												<div class="price__treatment-con">
													<h5 class="price__treatment-title">効果が出やすい治療間隔</h5>
												</div>
												<div class="price__treatment-con">
													<p>2週間に1 回</p>
												</div>
											</div>
										</div>
										<table class="price__table">
											<thead>
												<tr>
													<th width="50%">対象部位</th>
													<th width="25%">回数</th>
													<th width="25%">価格</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td rowspan="2">フェイスライン~顎下</td>
													<td>1回</td>
													<td>39,600円</td>
												</tr>
												<tr>
													<td>3回</td>
													<td>99,000円</td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
								
								<!--HIFU×高周波-->
								<div class="price__group01">
									<h4 class="price__title02">HIFU×高周波</h4>
									<!--ボルニューマハイフ-->
									<div class="price__treatment-wrap">
										<h4 class="price__title03">ボルニューマハイフ</h4>
										<div class="price__treatment-description-wrap">
											<div class="price__treatment-description">
												<div class="price__treatment-con">
													<h5 class="price__treatment-title">こんなお悩みに・効果</h5>
												</div>
												<div class="price__treatment-con">
													<p>リアンのデザイニングハイフとボルニューマを組み合わせた効果的なたるみ治療です。ハイフのボリュームコントロールの特性と高周波の引き締め効果を組み合わせた治療です。</p>
												</div>
											</div>
											<div class="price__treatment-description">
												<div class="price__treatment-con">
													<h5 class="price__treatment-title">効果が出やすい治療間隔</h5>
												</div>
												<div class="price__treatment-con">
													<p>3-6ヶ月</p>
												</div>
											</div>
										</div>
										<table class="price__table">
											<thead>
												<tr>
													<th width="50%">対象部位</th>
													<th width="25%">回数</th>
													<th width="25%">価格</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td>ハイフ400ショット<br class="sp-block">＋4リフトボルニューマ</td>
													<td>1回</td>
													<td>129,000円</td>
												</tr>
												<tr>
													<td>ハイフ600ショット<br class="sp-block">＋4リフトボルニューマ</td>
													<td>1回</td>
													<td>147,700円</td>
												</tr>
												<tr>
													<td>ハイフ800ショット<br class="sp-block">＋4リフトボルニューマ</td>
													<td>1回</td>
													<td>166,400円</td>
												</tr>
											</tbody>
										</table>
									</div>
									<!-- ハイザーフ(ハイフ+ザーフ)-->
									<div class="price__treatment-wrap">
										<h4 class="price__title03"> ハイザーフ<span>（ハイフ+ザーフ）</span></h4>
										<div class="price__treatment-description-wrap">
											<div class="price__treatment-description">
												<div class="price__treatment-con">
													<h5 class="price__treatment-title">こんなお悩みに・効果</h5>
												</div>
												<div class="price__treatment-con">
													<p>リアンのデザイニングハイフとザーフを組み合わせた効果的なたるみ治療です。<br>ハイフのボリュームコントロールの特性と高周波の引き締め効果を組み合わせた治療です。</p>
												</div>
											</div>
											<div class="price__treatment-description">
												<div class="price__treatment-con">
													<h5 class="price__treatment-title">効果が出やすい治療間隔</h5>
												</div>
												<div class="price__treatment-con">
													<p>3-6ヶ月</p>
												</div>
											</div>
										</div>
										<table class="price__table">
											<thead>
												<tr>
													<th width="50%">対象部位</th>
													<th width="25%">回数</th>
													<th width="25%">価格</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td>ハイフ400ショット<br class="sp-block">＋4リフトザーフ</td>
													<td>1回</td>
													<td>129,000円</td>
												</tr>
												<tr>
													<td>ハイフ600ショット<br class="sp-block">＋4リフトザーフ</td>
													<td>1回</td>
													<td>147,700円</td>
												</tr>
												<tr>
													<td>ハイフ800ショット<br class="sp-block">＋4リフトザーフ</td>
													<td>1回</td>
													<td>166,400円</td>
												</tr>
											</tbody>
										</table>
									</div>
									<!--ハイサーマ-->
									<div class="price__treatment-wrap">
										<h4 class="price__title03">ハイサーマ<span>（ハイフ+サーマジェン）</span></h4>
										<div class="price__treatment-description-wrap">
											<div class="price__treatment-description">
												<div class="price__treatment-con">
													<h5 class="price__treatment-title">こんなお悩みに・効果</h5>
												</div>
												<div class="price__treatment-con">
													<p>リアンのデザイニングハイフとサーマジェンを組み合わせた効果的なたるみ治療です。ハイフのボリュームコントロールの特性と高周波の引き締め効果を組み合わせた治療です。</p>
												</div>
											</div>
											<div class="price__treatment-description">
												<div class="price__treatment-con">
													<h5 class="price__treatment-title">効果が出やすい治療間隔</h5>
												</div>
												<div class="price__treatment-con">
													<p>3-6ヶ月</p>
												</div>
											</div>
										</div>
										<table class="price__table">
											<thead>
												<tr>
													<th width="50%">対象部位</th>
													<th width="25%">回数</th>
													<th width="25%">価格</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td>ハイフ400ショット<br class="sp-block">＋4リフトサーマジェン</td>
													<td>1回</td>
													<td>99,000円</td>
												</tr>
												<tr>
													<td>ハイフ600ショット<br class="sp-block">＋4リフトサーマジェン</td>
													<td>1回</td>
													<td>117,700円</td>
												</tr>
												<tr>
													<td>ハイフ800ショット<br class="sp-block">＋4リフトサーマジェン</td>
													<td>1回</td>
													<td>136,400円</td>
												</tr>
											</tbody>
										</table>
									</div>
									<!--コラーゲンザーフ-->
									<div class="price__treatment-wrap">
										<h4 class="price__title03">コラーゲンザーフ<span>（コラーゲンハイフ+ザーフ）</span></h4>
										<div class="price__treatment-description-wrap">
											<div class="price__treatment-description">
												<div class="price__treatment-con">
													<h5 class="price__treatment-title">こんなお悩みに・効果</h5>
												</div>
												<div class="price__treatment-con">
													<p>リアンのコラーゲンハイフとザーフを組み合わせた効果的なたるみ治療です。<br>コラーゲンハイフで表面の強度、ザーフの選択的熱入れによって奥の強度を出し下垂しづらいお肌にする治療です。</p>
												</div>
											</div>
											<div class="price__treatment-description">
												<div class="price__treatment-con">
													<h5 class="price__treatment-title">効果が出やすい治療間隔</h5>
												</div>
												<div class="price__treatment-con">
													<p>3-6ヶ月おき</p>
												</div>
											</div>
										</div>
										<table class="price__table">
											<thead>
												<tr>
													<th width="50%">内容</th>
													<th width="25%">回数</th>
													<th width="25%">価格</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td>２リフトコラーゲンハイフ+２リフトザーフ</td>
													<td>1回</td>
													<td>99,000円</td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
								
								<p class="price__caution">
									※料金はすべて税込みです。
								</p>

							</section>

							<!-- レーザー治療
							<section class="price_section" id="laser">
								<h2 class="price__title01">レーザー治療</h2>
								
								<div class="price__treatment-wrap">
									<div class="price__title03">レーザー治療</div>
									<div class="price__treatment-description-wrap">
										<div class="price__treatment-description">
											<div class="price__treatment-con">
												<h5 class="price__treatment-title">こんなお悩みに・効果</h5>
											</div>
											<div class="price__treatment-con">
												<p>くすみが気になる方、ハリ感を出したい方におすすめ。<br>ピーリングと併用することでレーザーの効果をより引き出すのが特徴の治療です。 直後からつるっとなるため日々のメンテナンスや大切な予定の前にも。</p>
											</div>
										</div>
										<div class="price__treatment-description">
											<div class="price__treatment-con">
												<h5 class="price__treatment-title">効果が出やすい治療間隔</h5>
											</div>
											<div class="price__treatment-con">
												<p>1~3ヶ月</p>
											</div>
										</div>
									</div>
									<table class="price__table">
										<thead>
											<tr>
												<th width="50%">内容</th>
												<th width="25%">回数</th>
												<th width="25%">価格</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td>トーンアップレーザー<br>（ルートロピール全顔+マッサージピール鼻・頬）</td>
												<td>1回</td>
												<td>27,500円</td>
											</tr>
											<tr>
												<td>ハリ・トーンアップレーザー<br>（ルートロピール全顔+スペクトラピール全顔+マッサージピール鼻・頬）</td>
												<td>1回</td>
												<td>33,500円</td>
											</tr>
										</tbody>
									</table>
								</div>
								
								<p class="price__caution">
									※料金はすべて税込みです。
								</p>

							</section>
							---------------------------->

							<!-- 糸リフト
							---------------------------->
							<section class="price_section" id="thread">
								<h2 class="price__title01">糸リフト</h2>

								<!--ロングスレッド-->
								<div class="price__group01">

									<h3 class="price__title02">ロングレッド</h3>

									<!--単品-->
									<div class="price__treatment-wrap">
										<h4 class="price__title03">フルオーダーメイド糸リフト</h4>
										<table class="price__table">
											<thead>
												<tr>
													<th width="50%">内容</th>
													<th width="50%">価格</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td>通常価格</td>
													<td>330,000円</td>
												</tr>
											</tbody>
										</table>
									</div>

									<!--オプション-->
									<div class="price__treatment-wrap">
										<h4 class="price__title03">オプション</h4>
										<table class="price__table">
											<thead>
												<tr>
													<th width="50%">内容</th>
													<th width="50%">価格</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td>笑気麻酔</td>
													<td>13,200円</td>
												</tr>
												<tr>
													<td>ブロック麻酔 一部位あたり</td>
													<td>3,300円</td>
												</tr>
												<tr>
													<td>
														ヒアルロン酸
														<br>アラガン社製・ガルデルマ社製 1ccあたり
													</td>
													<td>77,000円</td>
												</tr>
												<tr>
													<td>
														ヒアルロン酸
														<br>韓国製（AVALON）1ccあたり
													</td>
													<td>55,000円</td>
												</tr>
											</tbody>
										</table>
									</div>

									<p class="price__caution">
										※ 価格は税込です。
										<br>※ 上記ヒアルロン酸は糸リフトと同日施術された場合の価格です。
										<br>※ 韓国製は鼻翼基部・顎・頬こけのみの注入可。
									</p>
								</div>

								<!--ショートスレッド-->
								<div class="price__group01">
									<h3 class="price__title02">ショートスレッド</h3>
									<div class="price__treatment-wrap">
										<h4 class="price__title03">ショートスレッド</h4>
										<div class="price__treatment-description-wrap">
											<div class="price__treatment-description">
												<div class="price__treatment-con">
													<h5 class="price__treatment-title">こんなお悩みに・効果</h5>
												</div>
												<div class="price__treatment-con">
													<p>髪の毛よりも細い糸を網目状に入れることで下垂した組織の引き締めを行う治療です。口横のもたつきや皮膚が余っている方におすすめです。</p>
												</div>
											</div>
											<div class="price__treatment-description">
												<div class="price__treatment-con">
													<h5 class="price__treatment-title">効果が出やすい治療間隔</h5>
												</div>
												<div class="price__treatment-con">
													<p>3-6ヶ月</p>
												</div>
											</div>
										</div>
										<table class="price__table">
											<thead>
												<tr>
													<th width="50%">内容</th>
													<th width="25%">回数</th>
													<th width="25%">価格</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td rowspan="5">モノスレッド<br><span>麻酔クリーム付き</span></td>
													<td>20本</td>
													<td>66,000円</td>
												</tr>
												<tr>
													<td>40本</td>
													<td>99,000円</td>
												</tr>
												<tr>
													<td>60本</td>
													<td>132,000円</td>
												</tr>
												<tr>
													<td>80本</td>
													<td>165,000円</td>
												</tr>
												<tr>
													<td>100本</td>
													<td>198,000円</td>
												</tr>
											</tbody>
										</table>
									</div>

								</div>

								<p class="price__caution">
									※ 100本以上で笑気麻酔込み
									<br>※ 鈍針への付替え: 20本ごとに¥16,500円
									<br>　
								</p>

								<!--リフトアップセット-->
								<div class="price__group01">
									<h4 class="price__title02">リフトアップセット</h4>
									<div class="price__treatment-wrap">
										<div class="price__treatment-description-wrap">
											<div class="price__treatment-description">
												<div class="price__treatment-con">
													<h5 class="price__treatment-title">こんなお悩みに・効果</h5>
												</div>
												<div class="price__treatment-con">
													<p>大人気リアンのリフトアップセット。たるみ治療が初めてで何を受けて良いのか分からないという方やお得に治療をうけたい方におすすめの治療となります。</p>
												</div>
											</div>
											<div class="price__treatment-description">
												<div class="price__treatment-con">
													<h5 class="price__treatment-title">効果が出やすい治療間隔</h5>
												</div>
												<div class="price__treatment-con">
													<p>3-6ヶ月</p>
												</div>
											</div>
										</div>
									</div>
									<!--口横たるみ撃退セット-->
									<div class="price__treatment-wrap">
										<h4 class="price__title03">口横たるみ撃退セット<br><span>（麻酔クリーム込み）</span></h4>
										<table class="price__table">
											<thead>
												<tr>
													<th width="50%">内容</th>
													<th width="25%">回数</th>
													<th width="25%">価格</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td>2リフトボルニューマ<br>【頬・フェイスライン】<br><a href="<?php echo home_url('/services/thread/'); ?>">ショートスレッド</a>40本</td>
													<td>1回</td>
													<td>
														132,000円
													</td>
												</tr>
												<tr>
													<td>2リフトザーフ<br>【頬・フェイスライン】<br><a href="<?php echo home_url('/services/thread/'); ?>">ショートスレッド</a>40本</td>
													<td>1回</td>
													<td>
														132,000円
													</td>
												</tr>
												<tr>
													<td>2リフトサーマジェン<br>【頬・フェイスライン】<br><a href="<?php echo home_url('/services/thread/'); ?>">ショートスレッド</a>40本</td>
													<td>1回</td>
													<td>
														99,000円
													</td>
												</tr>
											</tbody>
										</table>
									</div>
									<!--フェイスライン引き締めセット-->
									<div class="price__treatment-wrap">
										<h4 class="price__title03">フェイスライン引き締めセット<br><span>（麻酔クリーム込み）</span></h4>
										<table class="price__table">
											<thead>
												<tr>
													<th width="50%">内容</th>
													<th width="25%">回数</th>
													<th width="25%">価格</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td>ハイフボルニューマ<br>（ハイフ400ショット+2リフトボルニューマ<br>【頬＋フェイスライン】）<br><a href="<?php echo home_url('/services/thread/'); ?>">ショートスレッド</a>60本</td>
													<td>1回</td>
													<td>
														198,000円
													</td>
												</tr>
												<tr>
													<td>ハイザーフ<br>（ハイフ400ショット+2リフトザーフ<br>【頬＋フェイスライン】）<br><a href="<?php echo home_url('/services/thread/'); ?>">ショートスレッド</a>60本</td>
													<td>1回</td>
													<td>
														198,000円
													</td>
												</tr>
												<tr>
													<td>ハイサーマ<br>（ハイフ400ショット+2リフトサーマジェン<br>【頬＋フェイスライン】）<br><a href="<?php echo home_url('/services/thread/'); ?>">ショートスレッド</a>60本</td>
													<td>1回</td>
													<td>
														165,000円
													</td>
												</tr>
											</tbody>
										</table>
									</div>
									<!--ほうれい線撃退セット-->
									<div class="price__treatment-wrap">
										<h4 class="price__title03">ほうれい線撃退セット<br><span>（注入部位によってカニューレ代 別途 1本3,300円）</span></h4>
										<table class="price__table">
											<thead>
												<tr>
													<th width="50%">内容</th>
													<th width="25%">回数</th>
													<th width="25%">価格</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td>2リフトボルニューマ【頬＋フェイスライン】<br>ヒアルロン酸2本</td>
													<td>1回</td>
													<td>
														198,000円
													</td>
												</tr>
												<tr>
													<td>2リフトザーフ【頬＋フェイスライン】<br>ヒアルロン酸2本</td>
													<td>1回</td>
													<td>
														198,000円
													</td>
												</tr>
												<tr>
													<td>2リフトサーマジェン【頬＋フェイスライン】<br>ヒアルロン酸2本</td>
													<td>1回</td>
													<td>
														165,000円
													</td>
												</tr>
										</table>
									</div>
									<!--オプション-->
									<div class="price__treatment-wrap">
										<h4 class="price__title03">リフトアップセット<br>オプション</h4>
										<table class="price__table">
											<thead>
												<tr>
													<th width="50%">施術</th>
													<th width="25%">内容</th>
													<th width="25%">価格</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td>部位追加<br>ザーフ/ボルニューマ</td>
													<td>2リフト→4リフトへ変更</td>
													<td>22,000円</td>
												</tr>
												<tr>
													<td>ハイフ400ショット</td>
													<td>600ショットへ変更</td>
													<td>22,000円</td>
												</tr>
												<tr>
													<td>ショートスレッドの糸追加</td>
													<td>20本ごと</td>
													<td>33,000円</td>
												</tr>
												<tr>
													<td>ヒアルロン酸の追加</td>
													<td>1本ごと</td>
													<td>77,000円</td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>

								<p class="price__caution">
									※料金はすべて税込みです。
								</p>

							</section>

							<!-- 毛穴治療
							---------------------------->
							<section class="price_section" id="poretreatment">
								<h2 class="price__title01">毛穴治療</h2>

								<!--ピーリング-->
								<div class="price__group01">
									<h3 class="price__title02"><a href="<?php echo home_url('/services/peeling/'); ?>">ピーリング</a></h3>
									<div class="price__treatment-wrap">
										<div class="price__treatment-description-wrap">
											<div class="price__treatment-description">
												<div class="price__treatment-con">
													<h5 class="price__treatment-title">こんなお悩みに・効果</h5>
												</div>
												<div class="price__treatment-con">
													<p>ニキビや毛穴づまりが気になる方にはミラノリピール、艶出しやお肌のハリを出したい方にはマッサージピールがおすすめです</p>
												</div>
											</div>
											<div class="price__treatment-description">
												<div class="price__treatment-con">
													<h5 class="price__treatment-title">効果が出やすい治療間隔</h5>
												</div>
												<div class="price__treatment-con">
													<p>1ヶ月</p>
												</div>
											</div>
										</div>
									</div>
									<!--ミラノリピール-->
									<div class="price__treatment-wrap">
										<h4 class="price__title03">ミラノリピール</h4>
										<table class="price__table">
											<thead>
												<tr>
													<th width="50%">対象部位</th>
													<th width="25%">回数</th>
													<th width="25%">価格</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td rowspan="2">顔</td>
													<td>1回</td>
													<td>12,800円</td>
												</tr>
												<tr>
													<td>3回</td>
													<td>33,000円</td>
												</tr>
												<tr>
													<td>ヒップ</td>
													<td>1回</td>
													<td>28,600円</td>
												</tr>
												<tr>
													<td>膝</td>
													<td>1回</td>
													<td>22,000円</td>
												</tr>
												<tr>
													<td>背中上部 / 下部</td>
													<td>1回</td>
													<td>35,200円</td>
												</tr>
											</tbody>
										</table>
									</div>
									<!--マッサージピール-->
									<div class="price__treatment-wrap">
										<h4 class="price__title03">マッサージピール</h4>
										<table class="price__table">
											<thead>
												<tr>
													<th width="50%">対象部位</th>
													<th width="25%">回数</th>
													<th width="25%">価格</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td rowspan="2">顔</td>
													<td>1回</td>
													<td>12,800円</td>
												</tr>
												<tr>
													<td>3回</td>
													<td>33,000円</td>
												</tr>
												<tr>
													<td>首</td>
													<td>1回</td>
													<td>12,800円</td>
												</tr>
												<tr>
													<td>顔＋首</td>
													<td>1回</td>
													<td>23,000円</td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>

								<!--IPL (光治療)-->
								<div class="price__treatment-wrap">
									<h3 class="price__title03">IPL<span>（光治療）</span></h3>
									<div class="price__treatment-description-wrap">
										<div class="price__treatment-description">
											<div class="price__treatment-con">
												<h5 class="price__treatment-title">こんなお悩みに・効果</h5>
											</div>
											<div class="price__treatment-con">
												<p>トーンアップや肌のハリに効果があるアキュライトとそばかすやシミに効果的なアキュプラスがあります。両方同時に行うことで表皮と真皮へのアプローチが出来ます。</p>
											</div>
										</div>
										<div class="price__treatment-description">
											<div class="price__treatment-con">
												<h5 class="price__treatment-title">効果が出やすい治療間隔</h5>
											</div>
											<div class="price__treatment-con">
												<p>1ヶ月</p>
											</div>
										</div>
									</div>
									<table class="price__table">
										<thead>
											<tr>
												<th width="50%">内容</th>
												<th width="25%">回数</th>
												<th width="25%">価格</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td rowspan="3">トーンアップIPL<br>（アキュライト）</td>
												<td>1回</td>
												<td>9,900円</td>
											</tr>
											<tr>
												<td>3回</td>
												<td>28,500円</td>
											</tr>
											<tr>
												<td>5回</td>
												<td>46,200円</td>
											</tr>
											<tr>
												<td rowspan="3">シミ取りIPL<br>（アキュプラス）</td>
												<td>1回</td>
												<td>14,300円</td>
											</tr>
											<tr>
												<td>3回</td>
												<td>39,600円</td>
											</tr>
											<tr>
												<td>5回</td>
												<td>64,000円</td>
											</tr>
											<tr>
												<td rowspan="3">強力シミ取りIPL<br>（アキュライト＋アキュプラス）</td>
												<td>1回</td>
												<td>24,200円</td>
											</tr>
											<tr>
												<td>3回</td>
												<td>66,000円</td>
											</tr>
											<tr>
												<td>5回</td>
												<td>105,000円</td>
											</tr>
										</tbody>
									</table>
								</div>

								<!--エレクトロポレーション-->
								<div class="price__treatment-wrap">
									<h4 class="price__title03">エレクトロポレーション<br><span>※トラネキサム酸/グリシルグリシン/ビタミンCから１剤を使用</span></h4>
									<div class="price__treatment-description-wrap">
										<div class="price__treatment-description">
											<div class="price__treatment-con">
												<h5 class="price__treatment-title">こんなお悩みに・効果</h5>
											</div>
											<div class="price__treatment-con">
												<p>電気で細かい穴を開け、薬液を効率的に肌に浸透させる治療です。イオン導入よりも20倍の浸透率があると言われています。</p>
											</div>
										</div>
										<div class="price__treatment-description">
											<div class="price__treatment-con">
												<h5 class="price__treatment-title">効果が出やすい治療間隔</h5>
											</div>
											<div class="price__treatment-con">
												<p>1ヶ月</p>
											</div>
										</div>
									</div>
									<table class="price__table">
										<thead>
											<tr>
												<th width="50%">内容</th>
												<th width="25%">回数</th>
												<th width="25%">価格</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td>単品 </td>
												<td>1回</td>
												<td>9,900円</td>
											</tr>
											<tr>
												<td>他施術とセット</td>
												<td>1回</td>
												<td>6,600円</td>
											</tr>
										</tbody>
									</table>
								</div>

								<!--機械水光注射（看護師施術）-->
								<div class="price__group01">
									<h3 class="price__title02">機械水光注射<span>（看護師施術）</span></h3>

									<!--ハリ弾力注射-->
									<div class="price__treatment-wrap">
										<h4 class="price__title03">
											薬剤が選べる！漏れない水光注射
											<br><span class="price-red-text">（麻酔クリーム付き）</span>
										</h4>
										<div class="price__treatment-description-wrap">
											<div class="price__treatment-description">
												<div class="price__treatment-con">
													<h5 class="price__treatment-title">こんなお悩みに・効果</h5>
												</div>
												<div class="price__treatment-con">
													<p>小じわやハリ感、毛穴といったお悩みに薬剤の効果でもってアプローチする施術です。<br>そのためその時のお肌状況に合わせて薬剤を選択し、かつ漏れずに入れるテクニックが重要です。</p>
												</div>
											</div>
											<div class="price__treatment-description">
												<div class="price__treatment-con">
													<h5 class="price__treatment-title">効果が出やすい治療間隔</h5>
												</div>
												<div class="price__treatment-con">
													<p>1ヶ月に1回</p>
												</div>
											</div>
										</div>
										<table class="price__table">
											<thead>
												<tr>
													<th width="50%">薬剤名</th>
													<th width="25%">内容</th>
													<th width="25%">価格</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td>ジャルプロクラシック</td>
													<td>3cc</td>
													<td>54,780円</td>
												</tr>
												<tr>
													<td>プルリアルデンシファイ</td>
													<td>2cc</td>
													<td>59,800円</td>
												</tr>
												<tr>
													<td>プルリアルデンシファイ</td>
													<td>4cc</td>
													<td>109,800円</td>
												</tr>
											</tbody>
										</table>
									</div>

								</div>
								
							</section>

							<!-- ポテンツァ
							---------------------------->
							<section class="price_section" id="potenza">
								<h2 class="price__title01">ポテンツァ</h2>

								<!--デザイニングポテンツァ-->
								<div class="price__treatment-wrap">
									<h3 class="price__title03">
										<a href="<?php echo home_url('/services/potenza/'); ?>">デザイニングポテンツァ</a>
										<br><span class="price-red-read">（麻酔クリーム付き）</span>
									</h3>
									<div class="price__treatment-description-wrap">
										<div class="price__treatment-description">
											<div class="price__treatment-con">
												<h5 class="price__treatment-title">こんなお悩みに・効果</h5>
											</div>
											<div class="price__treatment-con">
												<p>針と高周波（熱）によるコラーゲンの増生そして創傷治癒効果で皮膚を引き締めます。<br>その過程でクレーター・毛穴・小じわにも効果が認められます。<br>薬剤を肌内部に浸透させるドラッグデリバリーシステムでその効果を底上げします。</p>
											</div>
										</div>
										<div class="price__treatment-description">
											<div class="price__treatment-con">
												<h5 class="price__treatment-title">効果が出やすい治療間隔</h5>
											</div>
											<div class="price__treatment-con">
												<p>肌悩みによるが<br>1ヶ月おきに治療は可能</p>
											</div>
										</div>
									</div>
									<table class="price__table">
										<thead>
											<tr>
												<th width="50%">対象部位</th>
												<th width="25%">回数</th>
												<th width="25%">価格</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td rowspan="3">ドラッグデリバリー</td>
												<td>1回</td>
												<td>73,700円</td>
											</tr>
											<tr>
												<td>3回</td>
												<td>198,990円</td>
											</tr>
											<tr>
												<td>5回</td>
												<td>313,225円</td>
											</tr>
										</tbody>
									</table>
									<h3 class="price__title03"><a href="<?php echo home_url('/services/potenza/'); ?>">ポテンツァ</a></h3>
									<table class="price__table">
										<thead>
											<tr>
												<th width="40%">内容</th>
												<th width="20%">部位</th>
												<th width="20%">回数</th>
												<th width="20%">料金</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td rowspan="3" style="background-color: #fff; border-left: 1px solid #D5D5D5;">
													血管拡張による赤み改善専用チップ
													<br>
													<span class="price-red-text">（麻酔クリーム付き）</span>
												</td>
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
												<td rowspan="3" style="background-color: #fff; border-left: 1px solid #D5D5D5;">
													ニキビ1ニードル
													<br>
													<span class="price-red-text">（麻酔なし）</span>
												</td>
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
											<tr>
												<td rowspan="3" style="background-color: #fff; border-left: 1px solid #D5D5D5;">
													肝斑治療専用チップ
													<br>
													<span class="price-red-text">（麻酔クリーム付き）</span>
												</td>
												<td rowspan="3">全顔</td>
												<td>1回</td>
												<td>39,600円</td>
											</tr>
											<tr>
												<td>3回</td>
												<td>106,920円</td>
											</tr>
											<tr>
												<td>5回</td>
												<td>168,300円</td>
											</tr>
											<tr>
												<td rowspan="5" style="background-color: #fff; border-left: 1px solid #D5D5D5;">
													皮膚引き締めポテンツァ
													<br>
													<span class="price-red-text">（麻酔クリーム付き）</span>
												</td>
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
												<td>首<br><span>（顎裏も含む）</span></td>
												<td>1回</td>
												<td>49,500円</td>
											</tr>
											<tr>
												<td>全顔+首<br><span>（顎裏も含む）</span></td>
												<td>1回</td>
												<td>88,000円</td>
											</tr>
										</tbody>
									</table>
								</div>
								
							</section>

							<!-- シミ・赤み治療
							---------------------------->
							<section class="price_section" id="shimichiryo">
								<h2 class="price__title01">シミ・赤み治療</h2>
								
								<!--IPL (光治療)-->
								<div class="price__treatment-wrap">
									<h4 class="price__title03">IPL<span>（光治療）</span></h4>
									<div class="price__treatment-description-wrap">
										<div class="price__treatment-description">
											<div class="price__treatment-con">
												<h5 class="price__treatment-title">こんなお悩みに・効果</h5>
											</div>
											<div class="price__treatment-con">
												<p>トーンアップや肌のハリに効果があるアキュライトとそばかすやシミに効果的なアキュプラスがあります。両方同時に行うことで表皮と真皮へのアプローチが出来ます。</p>
											</div>
										</div>
										<div class="price__treatment-description">
											<div class="price__treatment-con">
												<h5 class="price__treatment-title">効果が出やすい治療間隔</h5>
											</div>
											<div class="price__treatment-con">
												<p>1ヶ月</p>
											</div>
										</div>
									</div>
									<table class="price__table">
										<thead>
											<tr>
												<th width="50%">対象部位</th>
												<th width="25%">回数</th>
												<th width="25%">価格</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td rowspan="3">トーンアップIPL<br>（アキュライト）</td>
												<td>1回</td>
												<td>9,900円</td>
											</tr>
											<tr>
												<td>3回</td>
												<td>28,500円</td>
											</tr>
											<tr>
												<td>5回</td>
												<td>46,200円</td>
											</tr>
											<tr>
												<td rowspan="3">シミ取りIPL<br>（アキュプラス）</td>
												<td>1回</td>
												<td>14,300円</td>
											</tr>
											<tr>
												<td>3回</td>
												<td>39,600円</td>
											</tr>
											<tr>
												<td>5回</td>
												<td>64,000円</td>
											</tr>
											<tr>
												<td rowspan="3">強力シミ取りIPL<br>（アキュライト＋アキュプラス）</td>
												<td>1回</td>
												<td>24,200円</td>
											</tr>
											<tr>
												<td>3回</td>
												<td>66,000円</td>
											</tr>
											<tr>
												<td>5回</td>
												<td>105,000円</td>
											</tr>
										</tbody>
									</table>
								</div>

								<div class="price__treatment-wrap">
									<div class="price__title03">レーザー治療</div>
									<div class="price__treatment-description-wrap">
										<div class="price__treatment-description">
											<div class="price__treatment-con">
												<h5 class="price__treatment-title">こんなお悩みに・効果</h5>
											</div>
											<div class="price__treatment-con">
												<p>くすみが気になる方、ハリ感を出したい方におすすめ。<br>ピーリングと併用することでレーザーの効果をより引き出すのが特徴の治療です。 直後からつるっとなるため日々のメンテナンスや大切な予定の前にも。</p>
											</div>
										</div>
										<div class="price__treatment-description">
											<div class="price__treatment-con">
												<h5 class="price__treatment-title">効果が出やすい治療間隔</h5>
											</div>
											<div class="price__treatment-con">
												<p>1~3ヶ月</p>
											</div>
										</div>
									</div>
									<table class="price__table">
										<thead>
											<tr>
												<th width="50%">内容</th>
												<th width="25%">回数</th>
												<th width="25%">価格</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td>トーンアップレーザー<br>（ルートロピール全顔+マッサージピール鼻・頬）</td>
												<td>1回</td>
												<td>27,500円</td>
											</tr>
											<tr>
												<td>ハリ・トーンアップレーザー<br>（ルートロピール全顔+スペクトラピール全顔+マッサージピール鼻・頬）</td>
												<td>1回</td>
												<td>33,500円</td>
											</tr>
										</tbody>
									</table>
								</div>
                
								<p class="price__caution" style="padding: 0 0 1.5em;">
									※料金はすべて税込みです。
								</p>

								<!--目元・首セット-->
								<div class="price__group01">
									<h3 class="price__title02">目元・首セット</h3>

									<div class="price__treatment-wrap">
										<!--プラズマペン-->
										<h4 class="price__title03">プラズマペン</h4>
										<div class="price__treatment-description-wrap">
											<div class="price__treatment-description">
												<div class="price__treatment-con">
													<h5 class="price__treatment-title">こんなお悩みに・効果</h5>
												</div>
												<div class="price__treatment-con">
													<p>真顔の時にも刻まれているシワに効果的な治療です。<br>先端が細いので細かい部位など、他のデバイスによる治療が難しい場合も適応になります。</p>
												</div>
											</div>
											<div class="price__treatment-description">
												<div class="price__treatment-con">
													<h5 class="price__treatment-title">効果が出やすい治療間隔</h5>
												</div>
												<div class="price__treatment-con">
													<p>2~3年に1回<br><span class="price-red-read">※ただしシワが気になる方は間隔が狭くなることで<br>効果を体感しやすい場合もあります。</span></p>
												</div>
											</div>
										</div>
										<table class="price__table">
											<thead>
												<tr>
													<th width="50%">施術</th>
													<th width="25%">部位</th>
													<th width="25%">価格</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td rowspan="3">プラズマペン</td>
													<td>上瞼</td>
													<td>88,000円</td>
												</tr>
												<tr>
													<td>下瞼</td>
													<td>66,000円</td>
												</tr>
												<tr>
													<td>上下瞼</td>
													<td>143,000円</td>
												</tr>
											</tbody>
										</table>

										<!--ポテンツァeye-->
										<h4 class="price__title03">ポテンツァeye</h4>
										<div class="price__treatment-description-wrap">
											<div class="price__treatment-description">
												<div class="price__treatment-con">
													<h5 class="price__treatment-title">こんなお悩みに・効果</h5>
												</div>
												<div class="price__treatment-con">
													<p>目周り専用カートリッジのSFAチップを用いた治療。<br>目元の浅い小じわが気になる方にオススメです。</p>
												</div>
											</div>
											<div class="price__treatment-description">
												<div class="price__treatment-con">
													<h5 class="price__treatment-title">効果が出やすい治療間隔</h5>
												</div>
												<div class="price__treatment-con">
													<p>1ヶ月</p>
												</div>
											</div>
										</div>
										<table class="price__table">
											<thead>
												<tr>
													<th width="50%">内容</th>
													<th width="25%">回数</th>
													<th width="25%">価格</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td>ポテンツァeye<br><span class="price-red-read">（麻酔クリーム付き）</span></td>
													<td>1回</td>
													<td>44,000円</td>
												</tr>
											</tbody>
										</table>

										<!--目頭放射線状じわ撃退セット！-->
										<h4 class="price__title03">目頭放射線状じわ撃退セット！</h4>
										<div class="price__treatment-description-wrap">
											<div class="price__treatment-description">
												<div class="price__treatment-con">
													<h5 class="price__treatment-title">こんなお悩みに・効果</h5>
												</div>
												<div class="price__treatment-con">
													<p>目元の小じわに有効なJALUPRO classicと目周り専用カートリッジのSFAチップを用いたセットメニューです。目元の小じわが気になる方にオススメです。</p>
												</div>
											</div>
											<div class="price__treatment-description">
												<div class="price__treatment-con">
													<h5 class="price__treatment-title">効果が出やすい治療間隔</h5>
												</div>
												<div class="price__treatment-con">
													<p>1ヶ月</p>
												</div>
											</div>
										</div>
										<table class="price__table">
											<thead>
												<tr>
													<th width="50%">内容</th>
													<th width="25%">回数</th>
													<th width="25%">価格</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td rowspan="2">
														ジャルプロ1cc＋ポテンツァeye
														<br><span class="price-red-read">（麻酔クリーム付き）</span>
													</td>
													<td>初回価格</td>
													<td>59,800円</td>
												</tr>
												<tr>
													<td>2回目以降</td>
													<td>69,800円</td>
												</tr>
											</tbody>
										</table>

										<!--首の縦横ジワ撃退セット-->
										<h4 class="price__title03">首の縦横ジワ撃退セット</h4>
										<div class="price__treatment-description-wrap">
											<div class="price__treatment-description">
												<div class="price__treatment-con">
													<h5 class="price__treatment-title">こんなお悩みに・効果</h5>
												</div>
												<div class="price__treatment-con">
													<p>首の真皮ジワに有効なプルリアルバイオスカルプチャーとボトックスリフトを組み合わせたセットメニューとなります。首の横皺と縦皺が気になる方にオススメの施術となります。</p>
												</div>
											</div>
											<div class="price__treatment-description">
												<div class="price__treatment-con">
													<h5 class="price__treatment-title">効果が出やすい治療間隔</h5>
												</div>
												<div class="price__treatment-con">
													<p>1ヶ月</p>
												</div>
											</div>
										</div>
										<table class="price__table">
											<thead>
												<tr>
													<th width="50%">内容</th>
													<th width="25%">回数</th>
													<th width="25%">価格</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td rowspan="2">プルリアルバイオスカルプチャー+ボトックスリフト (50単位・韓国製)</td>
													<td>初回価格</td>
													<td>69,800円</td>
												</tr>
												<tr>
													<td>2回目以降</td>
													<td>89,800円</td>
												</tr>
											</tbody>
										</table>

										<!--オプション-->
										<h4 class="price__title03">オプション</h4>
										<table class="price__table">
											<tbody>
												<tr>
													<td style="text-align: center;">バイオスカルプチャー→ボライトに変更の場合 33,000円</td>
												</tr>
											</tbody>
										</table>
										
									</div>

								</div>

								<p class="price__caution">
									※料金はすべて税込みです。
									<br>※ モニター価格でのご案内なし。
								</p>

							</section>

							<!-- ボトックス
							---------------------------->
							<section class="price_section" id="botox">
								<h2 class="price__title01"><a href="<?php echo home_url('/services/botox/'); ?>">ボトックス</a></h2>

								<!--アラガン社ボトックス-->
								<div class="price__treatment-wrap">
									<h4 class="price__title03">アラガン社ボトックス</h4>
									<div class="price__2col-wrap">
										<table class="price__table">
											<thead>
												<tr>
													<th width="30%">対象部位</th>
													<th width="30%">回数</th>
													<th width="30%">価格</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td rowspan="2">肩</td>
													<td>50単位</td>
													<td>44,000円</td>
												</tr>
												<tr>
													<td>100単位</td>
													<td>84,700円</td>
												</tr>
												<tr>
													<td rowspan="2">エラ</td>
													<td>40単位</td>
													<td>39,600円</td>
												</tr>
												<tr>
													<td>80単位</td>
													<td>66,000円</td>
												</tr>
												<tr>
													<td rowspan="2">
														ワキ
														<br><span class="price-red-text">麻酔クリーム<br>+<br>マイクロニードル付</span>
													</td>
													<td>100単位</td>
													<td>88,000円</td>
												</tr>
												<tr>
													<td>200単位</td>
													<td>169,400円</td>
												</tr>
												<tr>
													<td>額</td>
													<td>5-15単位</td>
													<td>14,850円</td>
												</tr>
												<tr>
													<td rowspan="2">眉間</td>
													<td>10-15単位</td>
													<td>14,850円</td>
												</tr>
												<tr>
													<td>20単位</td>
													<td>22,000円</td>
												</tr>
												<tr>
													<td>目尻</td>
													<td>10-15単位</td>
													<td>14,850円</td>
												</tr>
												<tr>
													<td>目の下</td>
													<td>5-10単位</td>
													<td>14,850円</td>
												</tr>
												<tr>
													<td rowspan="3">耳下腺</td>
													<td>60単位</td>
													<td>55,000円</td>
												</tr>
												<tr>
													<td>120単位</td>
													<td>100,000円</td>
												</tr>
												<tr>
													<td>200単位</td>
													<td>180,000円</td>
												</tr>
											</tbody>
										</table>
										<table class="price__table">
											<thead>
												<tr>
													<th width="30%">対象部位</th>
													<th width="30%">回数</th>
													<th width="30%">価格</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td>タレ目</td>
													<td>5-10単位</td>
													<td>14,850円</td>
												</tr>
												<tr>
													<td>バニーライン</td>
													<td>10-15単位</td>
													<td>14,850円</td>
												</tr>
												<tr>
													<td>小鼻</td>
													<td>10-15単位</td>
													<td>14,850円</td>
												</tr>
												<tr>
													<td>人中</td>
													<td>5-10単位</td>
													<td>14,850円</td>
												</tr>
												<tr>
													<td>上唇の縦ジワ</td>
													<td>5-10単位</td>
													<td>14,850円</td>
												</tr>
												<tr>
													<td>ガミースマイル </td>
													<td>5-10単位</td>
													<td>14,850円</td>
												</tr>
												<tr>
													<td>口角</td>
													<td>5-10単位</td>
													<td>14,850円</td>
												</tr>
												<tr>
													<td>あご</td>
													<td>10-15単位</td>
													<td>14,850円</td>
												</tr>
												<tr>
													<td>目頭</td>
													<td>5-10単位</td>
													<td>14,850円</td>
												</tr>
												<tr>
													<td>眉上</td>
													<td>5-10単位</td>
													<td>14,850円</td>
												</tr>
											</tbody>
										</table>
									</div>
									<table class="price__table">
										<thead>
											<tr>
												<th width="33%">対象部位</th>
												<th width="33%">回数</th>
												<th width="33%">価格</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td rowspan="2">ボトックス打ち放題</td>
												<td>50単位</td>
												<td>¥60,000</td>
											</tr>
											<tr>
												<td>80単位<br><span>（マイクロニードル付）</span></td>
												<td>¥75,000</td>
											</tr>
										</tbody>
									</table>
									<table class="price__table">
										<thead>
											<tr>
												<th width="25%">施術名</th>
												<th width="25%">部位</th>
												<th width="25%">回数</th>
												<th width="25%">価格</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td rowspan="2" class="is-white">
													ポアレスボトックス
													<br><span class="price-red-text">（麻酔クリーム+マイクロニードル付）</span>
												</td>
												<td>全顔</td>
												<td>50単位</td>
												<td>¥74,800</td>
											</tr>
											<tr>
												<td>1部位</td>
												<td>1部位 10単位</td>
												<td>¥33,000</td>
											</tr>
										</tbody>
									</table>
									<table class="price__table">
										<thead>
											<tr>
												<th width="25%">施術名</th>
												<th width="25%">部位</th>
												<th width="25%">回数</th>
												<th width="25%">価格</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td rowspan="2" class="is-white">
													リフトアップボトックス
													<br><span class="price-red-text">（マイクロニードル付）</span>
												</td>
												<td>フェイスラインor首の縦ジワ</td>
												<td>50単位</td>
												<td>¥59,400</td>
											</tr>
											<tr>
												<td>フェイスライン+首の縦ジワ</td>
												<td>100単位</td>
												<td>¥88,000</td>
											</tr>
										</tbody>
									</table>
									<table class="price__table">
										<thead>
											<tr>
												<th width="100%">オプション</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td style="text-align:center;">マイクロニードル別途 550円</td>
											</tr>
										</tbody>
									</table>
								</div>

								<!--痛みの少ないボトックス-->
								<div class="price__treatment-wrap">
									<h4 class="price__title03">痛みの少ないボトックス</h4>
									<div class="price__2col-wrap">
										<table class="price__table">
											<thead>
												<tr>
													<th width="30%">対象部位</th>
													<th width="30%">回数</th>
													<th width="30%">価格</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td>額</td>
													<td>10-15単位</td>
													<td>16,400円</td>
												</tr>
												<tr>
													<td rowspan="2">眉間</td>
													<td>10-15単位</td>
													<td>16,400円</td>
												</tr>
												<tr>
													<td>20単位</td>
													<td>24,200円</td>
												</tr>
												<tr>
													<td>目尻</td>
													<td>10-15単位</td>
													<td>16,400円</td>
												</tr>
												<tr>
													<td>目の下</td>
													<td>5-10単位</td>
													<td>16,400円</td>
												</tr>
												<tr>
													<td>タレ目</td>
													<td>5-10単位</td>
													<td>16,400円</td>
												</tr>
												<tr>
													<td>バニーライン</td>
													<td>10-15単位</td>
													<td>16,400円</td>
												</tr>
												<tr>
													<td>小鼻</td>
													<td>10-15単位</td>
													<td>16,400円</td>
												</tr>
											</tbody>
										</table>
										<table class="price__table">
											<thead>
												<tr>
													<th width="30%">対象部位</th>
													<th width="30%">回数</th>
													<th width="30%">価格</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td>人中</td>
													<td>5-10単位</td>
													<td>16,400円</td>
												</tr>
												<tr>
													<td>上唇の縦ジワ</td>
													<td>5-10単位</td>
													<td>16,400円</td>
												</tr>
												<tr>
													<td>ガミースマイル </td>
													<td>5-10単位</td>
													<td>16,400円</td>
												</tr>
												<tr>
													<td>口角</td>
													<td>5-10単位</td>
													<td>16,400円</td>
												</tr>
												<tr>
													<td>あご</td>
													<td>10-15単位</td>
													<td>16,400円</td>
												</tr>
												<tr>
													<td>目頭</td>
													<td>5-10単位</td>
													<td>16,400円</td>
												</tr>
												<tr>
													<td>眉上</td>
													<td>5-10単位</td>
													<td>16,400円</td>
												</tr>
											</tbody>
										</table>
									</div>
									<table class="price__table">
										<thead>
											<tr>
												<th width="33%">対象部位</th>
												<th width="33%">回数</th>
												<th width="33%">価格</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td rowspan="2">ボトックス打ち放題<br><span class="price-red-text">（マイクロニードル付）</span></td>
												<td>50単位</td>
												<td>¥66,000</td>
											</tr>
											<tr>
												<td>80単位</td>
												<td>¥82,500</td>
											</tr>
										</tbody>
									</table>
									<table class="price__table">
										<thead>
											<tr>
												<th width="25%">施術名</th>
												<th width="25%">部位</th>
												<th width="25%">回数</th>
												<th width="25%">価格</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td rowspan="2" class="is-white">
													ポアレスボトックス
													<br><span class="price-red-text">（麻酔クリーム+マイクロニードル付）</span>
												</td>
												<td>全顔</td>
												<td>50単位</td>
												<td>¥74,800</td>
											</tr>
											<tr>
												<td>1部位</td>
												<td>1部位 10単位</td>
												<td>¥33,000</td>
											</tr>
										</tbody>
									</table>
									<table class="price__table">
										<thead>
											<tr>
												<th width="25%">施術名</th>
												<th width="25%">部位</th>
												<th width="25%">回数</th>
												<th width="25%">価格</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td rowspan="2" class="is-white">
													リフトアップボトックス
													<br><span class="price-red-text">（マイクロニードル付）</span>
												</td>
												<td>フェイスラインor首の縦ジワ</td>
												<td>50単位</td>
												<td>¥65,340</td>
											</tr>
											<tr>
												<td>フェイスライン+首の縦ジワ</td>
												<td>100単位</td>
												<td>¥96,800</td>
											</tr>
										</tbody>
									</table>
								</div>

								<!--韓国製ボトックス-->
								<div class="price__treatment-wrap">
									<h4 class="price__title03">韓国製ボトックス</h4>
									<div class="price__2col-wrap">
										<table class="price__table">
											<thead>
												<tr>
													<th width="30%">対象部位</th>
													<th width="30%">回数</th>
													<th width="30%">価格</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td rowspan="2">肩</td>
													<td>50単位</td>
													<td>33,000円</td>
												</tr>
												<tr>
													<td>100単位</td>
													<td>55,000円</td>
												</tr>
												<tr>
													<td rowspan="2">エラ</td>
													<td>40単位</td>
													<td>22,000円</td>
												</tr>
												<tr>
													<td>80単位</td>
													<td>44,000円</td>
												</tr>
												<tr>
													<td rowspan="2">
														ワキ
														<br><span class="price-red-text">麻酔クリーム<br>+<br>マイクロニードル付</span>
													</td>
													<td>100単位</td>
													<td>44,000円</td>
												</tr>
												<tr>
													<td>200単位</td>
													<td>79,600円</td>
												</tr>
												<tr>
													<td>額</td>
													<td>5-15単位</td>
													<td>11,000円</td>
												</tr>
												<tr>
													<td rowspan="2">眉間</td>
													<td>10-15単位</td>
													<td>11,000円</td>
												</tr>
												<tr>
													<td>20単位</td>
													<td>14,850円</td>
												</tr>
												<tr>
													<td>目尻</td>
													<td>10-15単位</td>
													<td>11,000円</td>
												</tr>
												<tr>
													<td>目の下</td>
													<td>5-10単位</td>
													<td>11,000円</td>
												</tr>
												<tr>
													<td rowspan="3">耳下腺</td>
													<td>60単位</td>
													<td>33,000円</td>
												</tr>
												<tr>
													<td>120単位</td>
													<td>66,000円</td>
												</tr>
												<tr>
													<td>200単位</td>
													<td>99,000円</td>
												</tr>
											</tbody>
										</table>
										<table class="price__table">
											<thead>
												<tr>
													<th width="30%">対象部位</th>
													<th width="30%">回数</th>
													<th width="30%">価格</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td>タレ目</td>
													<td>5-10単位</td>
													<td>11,000円</td>
												</tr>
												<tr>
													<td>バニーライン</td>
													<td>10-15単位</td>
													<td>11,000円</td>
												</tr>
												<tr>
													<td>小鼻</td>
													<td>10-15単位</td>
													<td>11,000円</td>
												</tr>
												<tr>
													<td>人中</td>
													<td>5-10単位</td>
													<td>11,000円</td>
												</tr>
												<tr>
													<td>上唇の縦ジワ</td>
													<td>5-10単位</td>
													<td>11,000円</td>
												</tr>
												<tr>
													<td>ガミースマイル </td>
													<td>5-10単位</td>
													<td>11,000円</td>
												</tr>
												<tr>
													<td>口角</td>
													<td>5-10単位</td>
													<td>11,000円</td>
												</tr>
												<tr>
													<td>あご</td>
													<td>10-15単位</td>
														<td>11,000円</td>
												</tr>
												<tr>
													<td>目頭</td>
													<td>5-10単位</td>
													<td>11,000円</td>
												</tr>
												<tr>
													<td>眉上</td>
													<td>5-10単位</td>
													<td>11,000円</td>
												</tr>
											</tbody>
										</table>
									</div>
									<table class="price__table">
										<thead>
											<tr>
												<th width="25%">施術名</th>
												<th width="25%">部位</th>
												<th width="25%">回数</th>
												<th width="25%">価格</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td rowspan="2" class="is-white">
													ポアレスボトックス
													<br><span class="price-red-text">（麻酔クリーム+マイクロニードル付）</span>
												</td>
												<td>全顔</td>
												<td>50単位</td>
												<td>¥55,000</td>
											</tr>
											<tr>
												<td>1部位</td>
												<td>1部位 10単位</td>
												<td>¥22,000</td>
											</tr>
										</tbody>
									</table>
									<table class="price__table">
										<thead>
											<tr>
												<th width="25%">施術名</th>
												<th width="25%">部位</th>
												<th width="25%">回数</th>
												<th width="25%">価格</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td rowspan="2" class="is-white">
													リフトアップボトックス<br><span class="price-red-text">（マイクロニードル付）</span>
												</td>
												<td>フェイスラインor首の縦ジワ</td>
												<td>50単位</td>
												<td>¥44,000</td>
											</tr>
											<tr>
												<td>フェイスライン+首の縦ジワ</td>
												<td>100単位</td>
												<td>¥66,000</td>
											</tr>
										</tbody>
									</table>
									<table class="price__table">
										<thead>
											<tr>
												<th width="100%">オプション</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td style="text-align:center;">マイクロニードル別途 550円</td>
											</tr>
										</tbody>
									</table>
								</div>
								
								<p class="price__caution">
									※料金はすべて税込みです。
								</p>

							</section>

							<!-- ヒアルロン酸
							---------------------------->
							<section class="price_section" id="hyaluronicacid">
								<h2 class="price__title01"><a href="<?php echo home_url('/services/hyaluronic/'); ?>">ヒアルロン酸</a></h2>

								<!--リアン式ヒアルロン酸-->
								<div class="price__treatment-wrap">
									<h4 class="price__title03">リアン式ヒアルロン酸</h4>
									<div class="price__treatment-description-wrap">
										<div class="price__treatment-description">
											<div class="price__treatment-con">
												<h5 class="price__treatment-title">こんなお悩みに・効果</h5>
											</div>
											<div class="price__treatment-con">
												<p>
													ヒアルロン酸を下垂した靭帯や萎縮した骨を支えるように注入し、引き上げを行う治療です。
													<br>30代以上で全体的に下垂が気になる方におすすめです。
												</p>
											</div>
										</div>
										<div class="price__treatment-description">
											<div class="price__treatment-con">
												<h5 class="price__treatment-title">効果が出やすい治療間隔</h5>
											</div>
											<div class="price__treatment-con">
												<p>6～12ヶ月</p>
											</div>
										</div>
									</div>
									<table class="price__table">
										<thead>
											<tr>
												<th width="50%">内容</th>
												<th width="25%">回数</th>
												<th width="25%">価格</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td rowspan="2">ボリューマ / ボラックス / ボリフト / ボルベラ / ボライト
												<br>/ レスチレンリド / レスチレンリフト</td>
												<td>1cc</td>
												<td>1cc 88,000円</td>
											</tr>
											<tr>
												<td>2cc以降</td>
												<td>1cc 77,000円</td>
											</tr>
										</tbody>
									</table>
								</div>

								<!--ヒアルロニターゼ-->
								<div class="price__treatment-wrap">
									<h4 class="price__title03">ヒアルロニターゼ</h4>
									<div class="price__treatment-description-wrap">
										<div class="price__treatment-description">
											<div class="price__treatment-con">
												<h5 class="price__treatment-title">こんなお悩みに・効果</h5>
											</div>
											<div class="price__treatment-con">
												<p>ヒアルロン酸を溶解する薬剤を注入する治療です。</p>
											</div>
										</div>
										<div class="price__treatment-description">
											<div class="price__treatment-con">
												<h5 class="price__treatment-title">効果が出やすい治療間隔</h5>
											</div>
											<div class="price__treatment-con">
												<p>-</p>
											</div>
										</div>
									</div>
									<table class="price__table">
										<thead>
											<tr>
												<th width="50%">対象部位</th>
												<th width="25%">回数</th>
												<th width="25%">価格</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td rowspan="2">ヒアルロニダーゼ</td>
												<td>当院施術<br class="sp"> (250単位まで)</td>
												<td>22,000円</td>
											</tr>
											<tr>
												<td>他院施術<br class="sp"> (250単位まで)</td>
												<td>33,000円</td>
											</tr>
										</tbody>
									</table>
								</div>
	
								<p class="price__caution">
									※料金はすべて税込みです。
									<br>※注入部位によってカニューレ代 別途 1本3,300円
								</p>

							</section>

							<!-- 水光注射
							---------------------------->
							<section class="price_section" id="injection">
								<h2 class="price__title01">水光注射</h2>

								<!--手打ち水光注射（医師施術）-->
								<div class="price__group01">
									<h3 class="price__title02">手打ち水光注射（医師施術）</h3>

									<!--ジャルプロ-->
									<div class="price__treatment-wrap">
										<h4 class="price__title03">ジャルプロ</h4>
										<div class="price__treatment-description-wrap">
											<div class="price__treatment-description">
												<div class="price__treatment-con">
													<h5 class="price__treatment-title">こんなお悩みに・効果</h5>
												</div>
												<div class="price__treatment-con">
													<p>非架橋のヒアルロン酸とアミノ酸を配合したJALUPROをお肌に注入しコラーゲン・エラスチンを産生します。目周りや額の小じわが気になる方におすすめです。</p>
												</div>
											</div>
											<div class="price__treatment-description">
												<div class="price__treatment-con">
													<h5 class="price__treatment-title">効果が出やすい治療間隔</h5>
												</div>
												<div class="price__treatment-con">
													<p>ジャルプロクラシック：2週間おきに4回<br>ジャルプロスーパーハイドロ：1ヶ月おきに3回</p>
												</div>
											</div>
										</div>
										<table class="price__table">
											<thead>
												<tr>
													<th width="50%">薬剤名</th>
													<th width="25%">内容</th>
													<th width="25%">価格</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td rowspan="2">クラシック（1cc）</td>
													<td>1回</td>
													<td>33,000円</td>
												</tr>
												<tr>
													<td>4回</td>
													<td>118,800円</td>
												</tr>
												<tr>
													<td>クラシック（3cc）</td>
													<td>1回</td>
													<td>65,780円</td>
												</tr>
												<tr>
													<td rowspan="2">スーパーハイドロ</td>
													<td>1本</td>
													<td>60,000円</td>
												</tr>
												<tr>
													<td>2本目以降*</td>
													<td>50,000円</td>
												</tr>
											</tbody>
										</table>
									</div>

									<p class="price__caution" style="margin-top: 0; padding-top: 0;">
										※2本目以降の料金は、当日の施術に限ります。
									</p>

									<!--プルリアル-->
									<div class="price__treatment-wrap" style="margin-bottom: 0;">
										<h4 class="price__title03">プルリアル</h4>
										<table class="price__table">
											<thead>
												<tr>
													<th width="50%">薬剤名</th>
													<th width="25%">内容</th>
													<th width="25%">価格</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td>デンシファイ（2cc）</td>
													<td>1回</td>
													<td>70,800円</td>
												</tr>
												<tr>
													<td>デンシファイ（4cc）</td>
													<td>1回</td>
													<td>120,800円</td>
												</tr>
												<tr>
													<td>バイオスカルプチャー</td>
													<td>1回</td>
													<td>69,800円</td>
												</tr>
											</tbody>
										</table>
									</div>
									<p class="price__caution">
										※全てカニューレ代別
										<br>※麻酔クリーム付き: クラシック(3cc)
									</p>

									<!--プロファイロ-->
									<div class="price__treatment-wrap" style="margin-bottom: 0;">
										<h4 class="price__title03">プロファイロ</h4>
										<table class="price__table">
											<thead>
												<tr>
													<th width="50%">薬剤名</th>
													<th width="25%">内容</th>
													<th width="25%">価格</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td rowspan="2">ストラクチュラ</td>
													<td>1本</td>
													<td>121,000円</td>
												</tr>
												<tr>
													<td>2本目以降*</td>
													<td>110,000円</td>
												</tr>
											</tbody>
										</table>
									</div>
									<p class="price__caution">
										※2本目以降の料金は、当日の施術に限ります。
										<br>※カニューレ代込み
									</p>

								</div>

								<!--機械水光注射（看護師施術）-->
								<div class="price__group01">
									<h3 class="price__title02">機械水光注射<span>（看護師施術）</span></h3>

									<!--ハリ弾力注射-->
									<div class="price__treatment-wrap">
										<h4 class="price__title03">薬剤が選べる！漏れない水光注射</h4>
										<div class="price__treatment-description-wrap">
											<div class="price__treatment-description">
												<div class="price__treatment-con">
													<h5 class="price__treatment-title">こんなお悩みに・効果</h5>
												</div>
												<div class="price__treatment-con">
													<p>小じわやハリ感、毛穴といったお悩みに薬剤の効果でもってアプローチする施術です。<br>そのためその時のお肌状況に合わせて薬剤を選択し、かつ漏れずに入れるテクニックが重要です。</p>
												</div>
											</div>
											<div class="price__treatment-description">
												<div class="price__treatment-con">
													<h5 class="price__treatment-title">効果が出やすい治療間隔</h5>
												</div>
												<div class="price__treatment-con">
													<p>1ヶ月に1回</p>
												</div>
											</div>
										</div>
										<table class="price__table">
											<thead>
												<tr>
													<th width="50%">薬剤名</th>
													<th width="25%">内容</th>
													<th width="25%">価格</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td>ジャルプロクラシック</td>
													<td>3cc</td>
													<td>¥54,780</td>
												</tr>
												<tr>
													<td>プルリアルデンシファイ</td>
													<td>2cc</td>
													<td>¥59,800</td>
												</tr>
												<tr>
													<td>プルリアルデンシファイ</td>
													<td>4cc</td>
													<td>¥109,800</td>
												</tr>
											</tbody>
										</table>
									</div>

								</div>

								<p class="price__caution">
									※料金はすべて税込みです。
								</p>

							</section>

							<!-- 小顔
							---------------------------->
							<section class="price_section" id="face">
								<h2 class="price__title01">小顔</h2>

								<!--脂肪溶解注射-->
								<div class="price__treatment-wrap">
									<h4 class="price__title03">脂肪溶解注射<br><span class="price-red-text">カニューレ込み</span></h4>
									<div class="price__treatment-description-wrap">
										<div class="price__treatment-description">
											<div class="price__treatment-con">
												<h5 class="price__treatment-title">こんなお悩みに・効果</h5>
											</div>
											<div class="price__treatment-con">
												<p>フェイスラインや顎裏の脂肪が気になっている方におすすめの治療となります。3週間に4回程度継続していただくのがおすすめです。</p>
											</div>
										</div>
										<div class="price__treatment-description">
											<div class="price__treatment-con">
												<h5 class="price__treatment-title">効果が出やすい治療間隔</h5>
											</div>
											<div class="price__treatment-con">
												<p>3週間</p>
											</div>
										</div>
									</div>
									<table class="price__table">
										<thead>
											<tr>
												<th width="50%">対象部位</th>
												<th width="25%">回数</th>
												<th width="25%">価格</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td rowspan="4"><a href="<?php echo home_url('/services/fat-dissolve/'); ?>">カベリン</a></td>
												<td>4cc</td>
												<td>33,000円</td>
											</tr>
											<tr>
												<td>8cc</td>
												<td>66,000円</td>
											</tr>
											<tr>
												<td>3回コース 4cc</td>
												<td>79,200円</td>
											</tr>
											<tr>
												<td>3回コース 8cc</td>
												<td>154,000円</td>
											</tr>
											<tr>
												<td rowspan="5">FatX core</td>
												<td>2cc</td>
												<td>22,000円</td>
											</tr>
											<tr>
												<td>4cc</td>
												<td>44,000円</td>
											</tr>
											<tr>
												<td>8cc</td>
												<td>88,000円</td>
											</tr>
											<tr>
												<td>3回コース 4cc</td>
												<td>118,800円</td>
											</tr>
											<tr>
												<td>3回コース 8cc</td>
												<td>237,600円</td>
											</tr>
										</tbody>
									</table>
								</div>

								<!--リフトアップセット-->
								<div class="price__group01">
									<h3 class="price__title02">リフトアップセット</h3>
									<!--輪郭改造セットライト-->
									<div class="price__treatment-wrap">
										<h4 class="price__title03">輪郭改造セットライト</h4>
										<table class="price__table">
											<thead>
												<tr>
													<th width="50%">内容</th>
													<th width="50%">価格</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td>・カベリン 4cc<br>・エラボトックス（韓国製 40単位）</td>
													<td>49,500円</td>
												</tr>
											</tbody>
										</table>
									</div>
									<!--輪郭改造セットプロ-->
									<div class="price__treatment-wrap">
										<h4 class="price__title03">輪郭改造セットプロ</h4>
										<table class="price__table">
											<thead>
												<tr>
													<th width="50%">内容</th>
													<th width="50%">価格</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td>・カベリン 8cc<br>・エラボトックス（韓国製 80単位）</td>
													<td>88,000円</td>
												</tr>
											</tbody>
										</table>
									</div>
									<!--オプション-->
									<div class="price__treatment-wrap">
										<h4 class="price__title03">小顔セット<br>オプション</h4>
										<table class="price__table">
											<thead>
												<tr>
													<th width="100%">オプション内容</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td style="text-align:center; background-color:#fff;">脂肪溶解注射 8cc or エラボトックス 80単位のどちらか倍量に変更の場合66,000円でお受けいただけます</td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>

								<p class="price__caution">
									※料金はすべて税込みです。
								</p>

							</section>

							<!-- アートメイク
							---------------------------->
							<section class="price_section" id="atomeiku">
								<h2 class="price__title01">アートメイク</h2>

								<!--初回-->
								<div class="price__treatment-wrap">
									<h3 class="price__title03">アートメイク</h3>
									<table class="price__table">
										<thead>
											<tr>
												<th width="50%">施術内容</th>
												<th width="25%">回数</th>
												<th width="25%">価格</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td rowspan="2"><a href="<?php echo home_url('/services/artmake/'); ?>">眉</a></td>
												<td>初回/2回目以降 1回</td>
												<td>54,780円</td>
											</tr>
											<tr>
												<td>初回/2回目以降(友人割) 1回</td>
												<td>49,280円</td>
											</tr>
											<tr>
												<td rowspan="2"><a href="<?php echo home_url('/services/artmake-lip/'); ?>">リップ</a></td>
												<td>初回/2回目以降 1回</td>
												<td>65,780円</td>
											</tr>
											<tr>
												<td>初回/2回目以降(友人割) 1回</td>
												<td>60,280円</td>
											</tr>
											<tr>
												<td rowspan="2"><a href="<?php echo home_url('/services/artmake-eyeline/'); ?>">アイライン</a></td>
												<td>初回 1回</td>
												<td>45,000円</td>
											</tr>
											<tr>
												<td>2回目以降 1回</td>
												<td>35,000円</td>
											</tr>
											<tr>
												<td rowspan="2">アイライン跳ね上げ<br><span>※古谷のみ</span></td>
												<td>初回 1回</td>
												<td>60,000円</td>
											</tr>
											<tr>
												<td>2回目以降 1回</td>
												<td>50,000円</td>
											</tr>
											<tr>
												<td rowspan="2">ヘアライン</td>
												<td>初回 1回</td>
												<td>65,000円</td>
											</tr>
											<tr>
												<td>2回目以降 1回</td>
												<td>55,000円</td>
											</tr>
										</tbody>
									</table>
								</div>

								<p class="price__caution">
									※料金はすべて税込みです。
									<br>※指名料: 11,000円
								</p>

							</section>

							<!-- その他
							---------------------------->
							<section class="price_section" id="other">
								<h2 class="price__title01">その他</h2>

								<!--麻酔-->
								<div class="price__treatment-wrap">
									<h4 class="price__title03">麻酔</h4>
									<table class="price__table">
										<thead>
											<tr>
												<th width="50%">内容</th>
												<th width="25%">対象</th>
												<th width="25%">価格</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td>ペンレステープ １枚</td>
												<td>-</td>
												<td>1,100円</td>
											</tr>
											<tr>
												<td>表面麻酔</td>
												<td>-</td>
												<td>3,300円</td>
											</tr>
											<tr>
												<td rowspan="2">笑気麻酔</td>
												<td>HIFU・高周波・ヒアルロン酸</td>
												<td>5,500円</td>
											</tr>
											<tr>
												<td>その他の施術</td>
												<td>3,300円</td>
											</tr>
											<tr>
												<td>ブロック麻酔</td>
												<td>1部位</td>
												<td>3,300円</td>
											</tr>
										</tbody>
									</table>
								</div>

								<!--注射針-->
								<div class="price__treatment-wrap">
									<h4 class="price__title03">注射針</h4>
									<table class="price__table">
										<thead>
											<tr>
												<th width="50%">内容</th>
												<th width="50%">価格</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td>マイクロニードルへ変更</td>
												<td>1部位につき550円</td>
											</tr>
											<tr>
												<td>カニューレ</td>
												<td>1本につき3,300円</td>
											</tr>
										</tbody>
									</table>
								</div>

								<!--ショートスレッド-->
								<div class="price__treatment-wrap">
									<h4 class="price__title03">ショートスレッド</h4>
									<table class="price__table">
										<thead>
											<tr>
												<th width="50%">施術名</th>
												<th width="25%">本数</th>
												<th width="25%">価格</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td>ちょこいれスレッド(麻酔クリーム)</td>
												<td>モノスレッド20本</td>
												<td>33,000円</td>
											</tr>
										</tbody>
									</table>
								</div>

								<p class="price__caution">
									※料金はすべて税込みです。
								</p>

							</section>

						</div>
					</div>
				</div>
			</div>
		</div>
		<div id="reservation" class="sl-reservation sbprice">
			<div class="menu-inn sl-reservation-inn sbprice-inn">
				<div class="sl-reservation-inn-ttl subpage-ttl">
					<h2 class="under-line">ご予約</h2>
				</div>
				<div class="sl-reservation-inn-content sbprice-content">
					<div class="reservation">
						<div class="reservation-wr">
							<p>ご予約はLINE予約で承っております。</p>
							<?php $contactTxt01 = CFS()->get('text01', 27);
							$contactTxt02 = CFS()->get('text02', 27);
							if ($contactTxt01 != ''): ?>
								<h3><span class="l-slash">\ </span>
									<?php echo $contactTxt01; ?><br class="sp" />
									<?php echo $contactTxt02; ?> <span class="r-slash"> /</span>
								</h3>
							<?php endif; ?>
							<a href="https://lin.ee/U5tTSaw" target="_blank" rel="nofollow noreferrer">
								<img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/reservation-btn01.png" alt="">
							</a>
						</div>
					</div>
				</div>
				<a style="display:block;" target="_blank" href="https://lin.ee/U5tTSaw" class="sl-reservation-inn-banner">
					<img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/reservation-banner01.png" alt="LINE登録">
				</a>
			</div>
		</div>
		<?php } ?>
		<?php get_template_part('footer-company'); ?>
	</main>
</div>

<?php
get_footer();