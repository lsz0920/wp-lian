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
			<div class="photo"><img class="jsZoomOut" data-skip-lazy src="<?php echo get_template_directory_uri(); ?>/renew2025/img/reserve/page_title_bg.jpg" alt=""></div>
			<h2><span class="maskFadeH">Reservation</span></h2>
		</section>
	<div class="mainBox">
		<div class="checkBg"><img data-skip-lazy src="<?php echo get_template_directory_uri(); ?>/renew2025/img/common/com_bg01.jpg" alt=""></div>
		<div id="pagePath">
			<ul>
				<li><a href="<?php echo home_url();?>">Top</a>/</li>
				<li>Reservation</li>
			</ul>
		</div>
		<div class="comWhite">
			<div id="booking" class="sl-booking">
			<div class="sl-booking-inn">
				<div class="sl-booking-inn-content">
				<div class="sl-booking-inn-content-info">
					<div class="sl-booking-inn-content-info-txt">
					<?php $locale = get_locale();
					if ('en_US' == $locale) { ?>
						<section id="">
						<h2>LIAN Clinic Omotesando</h2>
						<p class="clinic-address">
							The reservation method for LIAN Clinic is as follows.<br>
							You can specify a doctor or nurse at our clinic.<br>
							If you have a specific request, please check the consultation schedule<br>
							and make a reservation.
						</p>
						<div class="timeTable">
							<div class="footer-cta__tel">
							<a href="tel:03-3470-5678" class="footer-cta__tel-btn">
								<img src="<?php echo get_template_directory_uri(); ?>/img/tel-icon.svg" alt="03-3470-5678">
								<span>03-3470-5678</span>
							</a>
							<p class="footer-cta__tel-lead">Reception hours 9:00-18:00 (Closed: Mon & Wed)</p>
							</div>
							<ul class="footer-cta__links">
							<li><a href="https://lin.ee/U5tTSaw">Make a reservation via LINE</a></li>
							</ul>
						</div>
						</section>
					<?php } else { ?>
						<section id="">
						<h2>LIANクリニック 表参道院</h2>
						<p class="clinic-address">
							ご予約方法は以下の通りです。<br class="pc-only">
							当院では、医師・看護師の指名が可能です。<br class="pc-only">
							指名がある際は、診療日カレンダーをご確認の上<br class="pc-only">
							ご予約ください。
						</p>
						<!--
					<h2>LIANクリニック 表参道ANNEX</h2>
					<p class="clinic-address">
					〒150-0001<br>東京都渋谷区神宮前４丁目４−１３<br>神宮前柴田ビル 1階
					</p>
					-->
						<div class="timeTable">
							<div class="footer-cta__tel">
							<a href="tel:03-3470-5678" class="footer-cta__tel-btn">
								<img src="<?php echo get_template_directory_uri(); ?>/img/tel-icon.svg" alt="03-3470-5678">
								<span>03-3470-5678</span>
							</a>
							<p class="footer-cta__tel-lead">
								受付時間 9:00-18:00
								<br>休診日：水曜・日曜（第1・第3）
							</p>
							</div>
							<ul class="footer-cta__links">
							<li><a href="https://lin.ee/U5tTSaw">LINEから予約する</a></li>
							</ul>
						</div>
						</section>
					<?php } ?>
					</div>
					<div class="sl-booking-inn-content-info-img">
					<?php $locale = get_locale();
					if ('en_US' == $locale) { ?>
						<div class="tab">
						<button class="tablinks" onclick="openCalendar(event, 'Doctor')">Doctor's <br
							class="sp-only">Schedule</button>
						<button class="tablinks" onclick="openCalendar(event, 'Nurse')">Nurse's <br
							class="sp-only">Schedule</button>
						</div>
						<div id="Doctor" class="tabcontent">
						<div id="calendar"></div>
						</div>
						<div id="Nurse" class="tabcontent">
						<div id="calendar-2"></div>
						</div>
						<script>
						document.addEventListener('DOMContentLoaded', function () {
							const calendarsConfig = [
							{
								elementId: 'calendar',
								events: '2a67795deea0395776c5e0dc9dcc2bb10ffb65ea2dfe11dab4489941659919fa@group.calendar.google.com',
								locale: 'ja',
							},
							{
								elementId: 'calendar-2',
								events: '824fa0ac22cf5bfd30ed26c6e1fb75b0e7f562fdc4e8c60814b6a5eee747ddd6@group.calendar.google.com',
								locale: 'ja',
							},
							];
							const calendars = {};
							function initializeCalendar(config) {
							const calendarEl = document.getElementById(config.elementId);
							if (!calendarEl) return;
							if (!calendars[config.elementId]) {
								calendars[config.elementId] = new FullCalendar.Calendar(calendarEl, {
								locale: config.locale,
								buttonText: {
									prev: '<',
									next: '>',
									prevYear: '<<',
									nextYear: '>>',
									today: 'Today',
									month: 'Month',
									week: 'Week',
									day: 'Day',
									list: 'List'
								},
								headerToolbar: {
									left: 'dayGridMonth,listYear',
									center: 'title',
									right: 'prev,next today'
								},
								height: 'auto',
								dayMaxEvents: true,
								fixedWeekCount: false,
								displayEventTime: false,
								googleCalendarApiKey: 'AIzaSyBhKuQ_VK1DD7UerWH_v270XU5Y2l-w0yI',
								events: config.events,
								editable: false,
								selectable: false,
								eventClick: function (info) {
									info.jsEvent.preventDefault();
								},
								dateClick: function (info) {
									info.jsEvent.preventDefault();
								},
								eventDidMount: function (info) {
									info.el.style.pointerEvents = 'none';
								},
								});
							}
							// カレンダーが表示状態の時のみレンダリング
							if (calendarEl.closest('.tabcontent').style.display !== 'none') {
								calendars[config.elementId].render();
							}
							}
							function openCalendar(evt, tabName) {
							const tabcontents = document.getElementsByClassName("tabcontent");
							for (let i = 0; i < tabcontents.length; i++) {
								tabcontents[i].style.display = "none";
							}
							const tablinks = document.getElementsByClassName("tablinks");
							for (let i = 0; i < tablinks.length; i++) {
								tablinks[i].className = tablinks[i].className.replace(" active", "");
							}
							const targetTab = document.getElementById(tabName);
							targetTab.style.display = "block";
							evt.currentTarget.className += " active";
							// タブ切り替え時に対応するカレンダーを初期化
							const config = calendarsConfig[tabName === 'Doctor' ? 0 : 1];
							initializeCalendar(config);
							}
							// グローバルスコープにopenCalendar関数を追加
							window.openCalendar = openCalendar;
							// 初期表示時にDoctorタブを表示
							document.querySelector('.tablinks').click();
						});
						</script>
					<?php } else { ?>
						<div class="tab">
						<button class="tablinks" onclick="openCalendar(event, 'Doctor')">医師の診察日<br class="sp">カレンダー</button>
						<button class="tablinks" onclick="openCalendar(event, 'Nurse')">看護師の出勤日<br class="sp">カレンダー</button>
						</div>
						<div id="Doctor" class="tabcontent">
						<div id="calendar"></div>
						</div>
						<div id="Nurse" class="tabcontent">
						<div id="calendar-2"></div>
						</div>
						<script>
						document.addEventListener('DOMContentLoaded', function () {
							const calendarsConfig = [
							{
								elementId: 'calendar',
								events: 'c_be322fb70d11b58e671ea817fdf18d6f99a64e18c9925e1adfb8de85a57bc2d7@group.calendar.google.com',
								locale: 'ja',
							},
							{
								elementId: 'calendar-2',
								events: 'c_e82634132257bdabf52a51cf8be8bb1a647eda3f798475cb973c7f6e2ac88cd1@group.calendar.google.com',
								locale: 'ja',
							},
							];
							const calendars = {};
							function initializeCalendar(config) {
							const calendarEl = document.getElementById(config.elementId);
							if (!calendarEl) return;
							if (!calendars[config.elementId]) {
								calendars[config.elementId] = new FullCalendar.Calendar(calendarEl, {
								locale: config.locale,
								buttonText: {
									prev: '<',
									next: '>',
									prevYear: '<<',
									nextYear: '>>',
									today: '今日',
									month: '月',
									week: '週',
									day: '日',
									list: '一覧'
								},
								headerToolbar: {
									left: 'dayGridMonth,listYear',
									center: 'title',
									right: 'prev,next today'
								},
								height: 'auto',
								dayMaxEvents: true,
								fixedWeekCount: false,
								displayEventTime: false,
								googleCalendarApiKey: 'AIzaSyBhKuQ_VK1DD7UerWH_v270XU5Y2l-w0yI',
								events: config.events,
								editable: false,
								selectable: false,
								eventClick: function (info) {
									info.jsEvent.preventDefault();
								},
								dateClick: function (info) {
									info.jsEvent.preventDefault();
								},
								eventDidMount: function (info) {
									info.el.style.pointerEvents = 'none';
								},
								});
							}
							// カレンダーが表示状態の時のみレンダリング
							if (calendarEl.closest('.tabcontent').style.display !== 'none') {
								calendars[config.elementId].render();
							}
							}
							function openCalendar(evt, tabName) {
							const tabcontents = document.getElementsByClassName("tabcontent");
							for (let i = 0; i < tabcontents.length; i++) {
								tabcontents[i].style.display = "none";
							}
							const tablinks = document.getElementsByClassName("tablinks");
							for (let i = 0; i < tablinks.length; i++) {
								tablinks[i].className = tablinks[i].className.replace(" active", "");
							}
							const targetTab = document.getElementById(tabName);
							targetTab.style.display = "block";
							evt.currentTarget.className += " active";
							// タブ切り替え時に対応するカレンダーを初期化
							const config = calendarsConfig[tabName === 'Doctor' ? 0 : 1];
							initializeCalendar(config);
							}
							// グローバルスコープにopenCalendar関数を追加
							window.openCalendar = openCalendar;
							// 初期表示時にDoctorタブを表示
							document.querySelector('.tablinks').click();
						});
						</script>
					<?php } ?>
					</div>
				</div>
				<section class="sl-booking-inn-content-map" id="">
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
					<img src="<?php echo get_template_directory_uri(); ?>/img/access/Access_2.webp"
						alt="2.地上に出たらAppleStore表参道の角を曲がる" />
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
					<img src="<?php echo get_template_directory_uri(); ?>/img/access/Access_3.webp"
						alt="3.AppleStore表参道の角を曲がる" />
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
					<img src="<?php echo get_template_directory_uri(); ?>/img/access/Access_5.webp"
						alt="5.1Fにセブンイレブンが入っているビルの2Fが当院です。" />
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
					<img src="<?php echo get_template_directory_uri(); ?>/img/access/Access_6.webp"
						alt="6.エレベータを降りて右手にお進みください。" />
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
