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
   <section class="pageTitle">
		<div class="photo"><img class="jsZoomOut" data-skip-lazy src="<?php echo get_template_directory_uri(); ?>/renew2025/img/access/page_title_bg.jpg" alt=""></div>
		<h2><span class="maskFadeH">Access</span></h2>
	</section>
	<div class="mainBox">
		<div class="checkBg"><img data-skip-lazy src="<?php echo get_template_directory_uri(); ?>/renew2025/img/common/com_bg01.jpg" alt=""></div>
		<div id="pagePath">
			<ul>
				<li><a href="<?php echo home_url();?>">Top</a>/</li>
				<li>Access</li>
			</ul>
		</div>
		<div class="comWhite">
			<div id="access" class="sl-access">
			<div class="sl-access-inn">
				<div class="sl-access-inn-content">
				<div class="sl-access-inn-content-info">
					<div class="sl-access-inn-content-info-img">
					<img src="<?php echo get_template_directory_uri(); ?>/img/access/access-info.webp" alt="芳香剤を化粧品の画像" width="490"
						height="463" loading="lazy">
					</div>
					<div class="sl-access-inn-content-info-txt">
					<?php $locale = get_locale();
					if ('en_US' == $locale) { ?>

						<section id="">
						<h2>LIAN clinic</h2>
						<p class="clinic-address">4-4-13 Jingumae, Shibuya-ku, Tokyo<br />
							Jingumae Shibata Building 1F<br />
							〒150-0001</p>
						<div class="timeTable">
							<dl class="d-fl">
							<dd>Nearest Station</dd>
							<dt>Tokyo Metro Ginza Line / Hanzomon Line / Chiyoda Line
								1-minute walk from Omotesando Station, Exit A2</dt>
							</dl>
							<dl class="d-fl">
							<dd>Opening Hours</dd>
							<dt>9:00-18:00</dt>
							</dl>
							<dl class="d-fl">
							<dd>Closed Days</dd>
							<dt>Mondays (2nd and 4th) and Wednesdays</dt>
							</dl>
						</div>
						</section>

					<?php } else { ?>

						<section id="">
						<h2>LIANクリニック 表参道院</h2>
						<p class="clinic-address">
							〒150-0001<br>東京都渋谷区神宮前４丁目 ２-１２<br>wes building 2F
						</p>
						<!--
					<h2>LIANクリニック 表参道ANNEX</h2>
					<p class="clinic-address">
					〒150-0001<br>東京都渋谷区神宮前４丁目４−１３<br>神宮前柴田ビル 1階
					</p>
					-->
						<div class="timeTable">
							<dl class="d-fl">
							<dd>最寄駅</dd>
							<dt>東京メトロ 銀座線/半蔵門線/千代田線<br class="sp-only">
								表参道駅A2出口より徒歩1分</dt>
							</dl>
							<dl class="d-fl">
							<dd>診察時間</dd>
							<dt>9：00〜18：00</dt>
							</dl>
							<dl class="d-fl">
							<dd>休診日</dd>
							<dt>水・日(第1/第3)</dt>
							</dl>
							<dl class="d-fl">
							<dd>電話番号</dd>
							<dt><a class="sl-access-tel-link" href="tel:03-3470-5678">03-3470-5678</a></dt>
							</dl>
						</div>
						</section>


					<?php } ?>
					</div>

				</div>
				<section class="sl-access-inn-content-map" id="">
					<iframe
					src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3241.3854730935586!2d139.7115016!3d35.6675094!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60188d0bd81b153f%3A0x9aae4a1c706e13fd!2zTElBTiBjbGluaWMgKOODquOCouODs-OCr-ODquODi-ODg-OCryk!5e0!3m2!1sja!2smm!4v1661255566734!5m2!1sja!2smm"
					width="1000" height="381" style="border:0;" allowfullscreen="" loading="lazy"
					referrerpolicy="no-referrer-when-downgrade"></iframe>
				</section>
				</div>
			</div>
			</div>
			<section class="sl-access-slider-section">
			<div class="sl-access-slider-section-inn">
				<div class="sl-access-slider-section-ttl">
				<?php if ('en_US' == $locale) { ?>
					<h2>Access Guide</h2>
				<?php } else { ?>
					<h2>道のり案内</h2>
				<?php } ?>
				</div>
				<div class="sl-access-slider-section-text" <?php echo ('en_US' == $locale) ? 'lang="en" id="en"' : ''; ?>>
				<?php if ('en_US' == $locale) { ?>
					From Tokyo Metro Omotesando Station
				<?php } else { ?>
					東京メトロ　表参道駅からの道のり
				<?php } ?>
				</div>
				<div class="sl-access-slider">
				<div class="sl-access-slider-item sl-access-slider-item-1">
					<div class="sl-access-slider-item-img">
					<img src="<?php echo get_template_directory_uri(); ?>/img/access/Access_1.webp" alt="1.表参道駅A2出口の階段を上がる" />
					<span class="sl-access-slider-item-num">1</span>
					</div>
					<div class="sl-access-slider-item-txt">
					<?php if ('en_US' == $locale) { ?>
						Go up the stairs at Exit A2 of Tokyo Metro Omotesando Station.
					<?php } else { ?>
						東京メトロ表参道駅 <br class="sp-only">A2出口の階段をあがり地上に出ます。
					<?php } ?>
					</div>
				</div>
				<div class="sl-access-slider-item">
					<div class="sl-access-slider-item-img">
					<img src="<?php echo get_template_directory_uri(); ?>/img/access/Access_2.webp" alt="2.地上に出たらAppleStore表参道の角を曲がる" />
					<span class="sl-access-slider-item-num">2</span>
					</div>
					<div class="sl-access-slider-item-txt">
					<?php if ('en_US' == $locale) { ?>
						When you reach ground level, you'll see the Apple Store Omotesando on your right. Continue straight ahead.
					<?php } else { ?>
						地上に出ると右手にAppleStore <br class="sp-only">表参道が見えるのでそのまままっすぐ進みます。
					<?php } ?>
					</div>
				</div>
				<div class="sl-access-slider-item">
					<div class="sl-access-slider-item-img">
					<img src="<?php echo get_template_directory_uri(); ?>/img/access/Access_3.webp" alt="3.AppleStore表参道の角を曲がる" />
					<span class="sl-access-slider-item-num">3</span>
					</div>
					<div class="sl-access-slider-item-txt">
					<?php if ('en_US' == $locale) { ?>
						Turn at the corner of the Apple Store.
					<?php } else { ?>
						AppleStore表参道の角を曲がります。
					<?php } ?>
					</div>
				</div>
				<div class="sl-access-slider-item">
					<div class="sl-access-slider-item-img">
					<img src="<?php echo get_template_directory_uri(); ?>/img/access/Access_4.webp" alt="4.まっすぐ進む" />
					<span class="sl-access-slider-item-num">4</span>
					</div>
					<div class="sl-access-slider-item-txt">
					<?php if ('en_US' == $locale) { ?>
						Continue straight ahead.
					<?php } else { ?>
						まっすぐ進みます。
					<?php } ?>
					</div>
				</div>
				<div class="sl-access-slider-item">
					<div class="sl-access-slider-item-img">
					<img src="<?php echo get_template_directory_uri(); ?>/img/access/Access_5.webp" alt="5.1Fにセブンイレブンが入っているビルの2Fが当院です。" />
					<span class="sl-access-slider-item-num">5</span>
					</div>
					<div class="sl-access-slider-item-txt">
					<?php if ('en_US' == $locale) { ?>
						Our clinic is on the 2nd floor of the building with 7-Eleven on the 1st floor.
					<?php } else { ?>
						1Fにセブンイレブンが入っているビルの2Fが当院です。
					<?php } ?>
					</div>
				</div>
				<div class="sl-access-slider-item">
					<div class="sl-access-slider-item-img">
					<img src="<?php echo get_template_directory_uri(); ?>/img/access/Access_6.webp" alt="6.エレベータを降りて右手にお進みください。" />
					<span class="sl-access-slider-item-num">6</span>
					</div>
					<div class="sl-access-slider-item-txt">
					<?php if ('en_US' == $locale) { ?>
						After exiting the elevator, please proceed to your right.
					<?php } else { ?>
						エレベータを降りて右手にお進みください。
					<?php } ?>
					</div>
				</div>
				<div class="sl-access-slider-item sl-access-slider-item-7">
					<div class="sl-access-slider-item-img">
					<img src="<?php echo get_template_directory_uri(); ?>/img/access/Access_7.webp" alt="7.受付にお声がけください。" />
					<span class="sl-access-slider-item-num">7</span>
					</div>
					<div class="sl-access-slider-item-txt">
					<?php if ('en_US' == $locale) { ?>
						Please check in at the reception desk.
					<?php } else { ?>
						受付にお声がけください。
					<?php } ?>
					</div>
				</div>
				<!-- <div class="sl-access-slider-item">
				
				</div>
				<div class="sl-access-slider-item">
				
				</div> -->
				</div>
			</div>
			</section>
			<?php echo get_template_part('template-parts/facility'); ?>
		</div>
	</div>
  </main>
</div>

<?php get_template_part('footer'); ?>

<?php
get_footer();
