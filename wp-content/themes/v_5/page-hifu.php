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
    "@context": "http://schema.org",
    "@type": "VideoObject",
    "name": "HIFUの施術の流れ",
    "description": "HIFUの施術の流れが分かる動画です。",
    "thumbnailUrl": "https://lianclinic.net/renew2022/wp-content/themes/v_2/img/sub-whathifu-img01.png",
    "uploadDate": "2022-09-22T08:00:00+09:00",
    "duration": "PT1M21S",
    "contentUrl": "https://lianclinic.net/renew2022/wp-content/themes/v_2/video/hifu-state-video.mp4"
  }
</script>

<div id="primary" class="content-area">
  <main id="main" class="site-main sl plasmapen">

    <div class="breadcrumbs breadcrumbs03">
      <div class="breadcrumbs-inn">
        <?php
        if (function_exists('yoast_breadcrumb')) {
          yoast_breadcrumb('<div id="breadcrumbs">', '</div>');
        }
        ?>
      </div>
    </div>
    <?php $locale = get_locale();
    if ('en_US' == $locale) { ?>
      <div id="mv" class="sl-mv">
        <div class="d-fl sl-mv-inn">
          <div class="sl-mv-inn-ttl">
            <h2 class="pc">
              <svg xmlns="http://www.w3.org/2000/svg" width="420" height="140" viewBox="0 0 420 140">
                <defs>
                  <style>
                    .cls-mv-1 {
                      fill: #1B294D;
                      font-size: 30px;
                      font-family: HiraMinPro-W3, Hiragino Mincho Pro, serif;
                      letter-spacing: 0.2em;
                    }
                  </style>
                </defs>
                <text id="LIAN_clinic_linking_you_to_beauty" data-name="LIAN clinic linking you to beauty"
                  class="cls-mv-1" transform="translate(0 35)">
                  <tspan x="0" y="0">LIAN clinic</tspan>
                  <tspan x="0" y="60">linking you to beauty</tspan>
                </text>
              </svg>
            </h2>
            <h2 class="sp">
              <svg xmlns="http://www.w3.org/2000/svg" width="260" height="170" viewBox="0 0 260 170">
                <defs>
                  <style>
                    .cls-1 {
                      fill: #1B294D;
                      font-size: 30px;
                      font-family: HiraMinPro-W3, Hiragino Mincho Pro, serif;
                      letter-spacing: 0.2em;
                    }
                  </style>
                </defs>
                <text id="LIAN_clinic_linking_you_to_beauty" data-name="LIAN clinic linking you to beauty" class="cls-1"
                  transform="translate(0 35)">
                  <tspan x="0" y="0">LIAN clinic</tspan>
                  <tspan x="0" y="60">linking you</tspan>
                  <tspan x="0" y="120">to beauty</tspan>
                </text>
              </svg>
            </h2>
          </div>
          <figure class="sp-right">
            <img loading="lazy" class="pc" src="<?php echo get_template_directory_uri(); ?>/img/makeup/sub-mv-img.png"
              alt="あなたの“似合う”が 見つかるアートメイク">
            <img loading="lazy" class="sp" src="<?php echo get_template_directory_uri(); ?>/img/makeup/sub-mv-sp.png"
              alt="あなたの“似合う”が 見つかるアートメイク">
          </figure>
        </div>
      </div>
      <div id="menu" class="sl-menu menu-hifu">
        <div class="sl-menu-content">
          <div id="whatis" class="sl-whatis">
            <div class="sl-whatis-inn menu-inn attach-mv">
              <div class="sl-whatis-inn-ttl subpage-ttl menu-inn-ttl">
                <h1 class="under-line menu-inn-ttl__inner">What is HIFU?</h1>
              </div>
              <div class="sl-whatis-inn-content">
                <div class="fl-style02 d-fl">
                  <div class="image">
                    <img loading="lazy" class="pc"
                      src="<?php echo get_template_directory_uri(); ?>/img/sub-whathifu-img01.png" alt="HIFUとは">
                    <img loading="lazy" class="sp"
                      src="<?php echo get_template_directory_uri(); ?>/img/sub-whathifu-img01-sp.png" alt="HIFUとは">
                  </div>
                  <div class="content">
                    <p>HIFU (Ultra Cell Q Plus)<br>
                      <span class="color-02">High Intensity Focused Ultrasound (HIFU) is a treatment that uses
                        high-density ultrasound energy to deliver heat to the SMAS fascia, subcutaneous tissue, and
                        dermis
                        to tighten and lift sagging skin. </span>
                      <br>Because HIF is performed using ultrasound, it does not directly damage the skin as in surgical
                      procedures that use a scalpel.
                    </p>
                  </div>
                </div>
                <div class="sl-whatis-inn-ttl subpage-ttl menu-inn-ttl">
                  <h2 class="under-line" style="margin-top:40px;">Who is recommended for HIFU</h2>
                </div>
                <div class="check-list">
                  <ul class="check-list-wr">
                    <li>Those who feel the tops of cheeks have dropped.</li>
                    <li>Those who feel facial lines became lean and face enlarged.</li>
                    <li>Those who with deep nasolabial fold.</li>
                    <li>Those who with sagging marionette lines and sides of the mouth</li>
                    <li>Those who with lack of firmness in the entire face</li>
                    <li>Those who with high volume of the back of the chin</li>
                  </ul>
                </div>
                <div class="fl-style02 d-fl fl--style02">
                  <div class="image">
                    <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/sub-whathifu-img02.png"
                      alt="HIFUとは">
                  </div>
                  <div class="content">
                    <p style="padding-bottom: 0;">The three major causes of sagging are</p>
                    <div class="disc-list disc--list">
                      <ul class="disc-list-wr">
                        <li>Loss of skin elasticity due to collagen loss</li>
                        <li>Loss of elasticity and drooping of muscles</li>
                        <li>Bone atrophy and bone loss</li>
                      </ul>
                    </div>
                    <p>What can be approached with HIFU is skin and muscles.
                      <br>In other words, it is possible to improve two of the three major causes of sagging.
                      <br><br>Total of six cartridges are used to improve sagging by applying heat to the fascia,
                      subcutaneous tissue, and dermis, just as if designing the skin.
                    </p>
                    <div class="check-list">
                      <ul class="check-list-wr">
                        <li>Lifting effect by causing thermal coagulation and scar contraction</li>
                        <li>Tissue regeneration by thermal energy (fibroblasts, collagen increase, growth factor
                          increase)
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="sl-effect">
            <div class="menu-inn sl-effect-inn">
              <div class="sl-effect-inn-ttl subpage-ttl menu-inn-ttl">
                <h2 class="under-line">Effect of HIFU</h2>
              </div>
              <div class="sl-effect-inn-content">
                <div class="check-list">
                  <ul class="check-list-wr">
                    <li>Heat energy condenses proteins in the SMAS layer and tightens the skin</li>
                    <li>Natural healing repairs damaged tissue and promotes collagen regeneration</li>
                  </ul>
                </div>
                <div class="pg-text">
                  <p>Thus, the skin is tightened through a two-step approach: tightening by irradiation and collagen
                    regeneration by natural healing.</p>
                </div>
              </div>
            </div>
          </div>
          <div id="types" class="sl-types">
            <div class="menu-inn sl-types-inn">
              <div class="sl-types-inn-ttl subpage-ttl menu-inn-ttl">
                <h2 class="underline">Designed HIFU using <br class="sp">six different cartridges</h2>
              </div>
              <div class="sl-types-inn-content">
                <div class="check-list">
                  <ul class="check-list-wr">
                    <li>Linear cartridge</li>
                    <li>Dot cartridge</li>
                  </ul>

                </div>
                <div class="pg-text">
                  <p><strong>The cause of sagging and skin thickness is different for each person, so cartridge
                      selection
                      x depth selection x power spacing setting x technique should be changed for each
                      parson.</strong><br>
                    Therefore, LIAN Clinic has two types of cartridges as Designed HIFU, and you can bring more
                    effective
                    results by using different cartridges depending on your concerns and the effect you want to bring.
                  </p>
                </div>
                <div class="defination-fl">
                  <dl>
                    <dt>Linear cartridge</dt>
                    <dd>Linear cartridges are specialized for fat dissolution. By irradiating in a linear fashion,
                      irradiation can be performed over a wide area at a temperature suitable for fat dissolution
                      (around
                      58°C), directly destroying the fat layer.</dd>
                  </dl>
                  <dl>
                    <dt>Dot cartridge</dt>
                    <dd>Dot irradiation is effective in raising and tightening the skin by increasing the temperature at
                      the focal point of the dots at a high density. 65°C, a higher temperature setting than linear
                      irradiation, enables pinpoint irradiation for raising and tightening.</dd>
                  </dl>
                </div>
              </div>
            </div>
          </div>
          <div id="benefits" class="sl-benefits">
            <div class="menu-inn sl-benefits-inn">
              <div class="sl-benefits-inn-ttl subpage-ttl menu-inn-ttl">
                <h2 class="under-line">Precautions of HIFU</h2>
              </div>
              <div class="sl-benefits-inn-content">
                <div class="list-style01">
                  <article class="list-style01-item">
                    <h2 class="list-style01-item-ttl"><span class="list-no">01</span>Treatment interval</h2>
                    <div class="list-style01-item-txt">
                      <p>The duration depends on the purpose.<br>
                        For lifting, aim for 6 months, when the overall scar contraction becomes milder.
                        <br>For tissue regeneration such as skin texture improvement and firmness, aim for 3 months.
                      </p>
                    </div>
                  </article>
                  <article class="list-style01-item">
                    <h2 class="list-style01-item-ttl"><span class="list-no">02</span>Downtime</h2>
                    <div class="list-style01-item-txt">
                      <p>Only a slight redness.<br>
                        If there are many shots or linear shots, swelling may occur for several days.</p>
                    </div>
                  </article>
                  <article class="list-style01-item">
                    <h2 class="list-style01-item-ttl"><span class="list-no">03</span>Pain</h2>
                    <div class="list-style01-item-txt">
                      <p>The pain during the treatment is dull and aching, depending on the power.<br>
                        Muscle soreness may occur after the treatment, but it lasts only a few days at most.</p>
                    </div>
                  </article>
                </div>
              </div>
            </div>
          </div>
          <!-- <div id="case" class="sl-case">
            <div class="menu-inn sl-case-inn">
              <div class="sl-case-inn-ttl subpage-ttl menu-inn-ttl">
                <h2 class="under-line">症例写真</h2>
              </div>
              <div class="sl-case-inn-content">
                <div class="fl-style04">
                  <article>
                    <a class="fl-style04-fl d-fl" target="_blank" rel="nofollow noreferrer">
                      <figure>
                        <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/case/thread-case01.png" alt="症例写真">
                      </figure>
                      <div class="content">
                        <dl>
                          <dt>施術名</dt>
                          <dd>ショートスレッド</dd>
                        </dl>
                        <dl>
                          <dt>施術の説明</dt>
                          <dd>溶ける糸がついた美容針を肌に挿入し、<br>肌のたるみやハリ感を改善する治療です</dd>
                        </dl>
                        <dl>
                          <dt>施術の副作用(リスク)</dt>
                          <dd>疼痛・内出血・腫れ・糸の露出・ひきつれ</dd>
                        </dl>
                        <dl>
                          <dt>施術の価格</dt>
                          <dd>￥66,000〜¥225,500</dd>
                        </dl>
                      </div>
                    </a>
                  </article>
                  <article>
                    <a class="fl-style04-fl d-fl" target="_blank" rel="nofollow noreferrer">
                      <figure>
                        <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/case/thread-case02.png" alt="症例写真">
                      </figure>
                      <div class="content">
                        <dl>
                          <dt>施術名</dt>
                          <dd>ショートスレッド</dd>
                        </dl>
                        <dl>
                          <dt>施術の説明</dt>
                          <dd>溶ける糸がついた美容針を肌に挿入し、<br>肌のたるみやハリ感を改善する治療です</dd>
                        </dl>
                        <dl>
                          <dt>施術の副作用(リスク)</dt>
                          <dd>疼痛・内出血・腫れ・糸の露出・ひきつれ</dd>
                        </dl>
                        <dl>
                          <dt>施術の価格</dt>
                          <dd>￥66,000〜¥225,500</dd>
                        </dl>
                      </div>
                    </a>
                  </article>
                </div>
              </div>
            </div>
          </div> -->
          <div id="features" class="sl-features">
            <div class="menu-inn sl-features-inn">
              <div class="sl-features-inn-ttl subpage-ttl menu-inn-ttl">
                <h2 class="under-line">Characteristics of LIAN clinic’s Designed HIFU</h2>
              </div>
              <div class="sl-features-inn-content">
                <div class="fl-style03 d-fl">
                  <article class="fl-style03-item">
                    <h3><span class="list-no">01</span>Experienced nurses
                    </h3>
                    <figure>
                      <img loading="lazy"
                        src="<?php echo get_template_directory_uri(); ?>/img/features/hifu-feature01.png"
                        alt="Experienced nurses">
                    </figure>
                    <p>Only cosmetic nurses who have been with the clinic for at least 4 years will be assigned to
                      perform
                      procedures.</p>
                  </article>
                  <article class="fl-style03-item">
                    <h3><span class="list-no">02</span>Irradiation based on anatomy and physiology</h3>
                    <figure>
                      <img loading="lazy"
                        src="<?php echo get_template_directory_uri(); ?>/img/features/hifu-feature02.png"
                        alt="Irradiation based on anatomy and physiology">
                    </figure>
                  </article>
                  <article class="fl-style03-item">
                    <h3><span class="list-no">03</span>HIFU according to the concerns</h3>
                    <figure>
                      <img loading="lazy"
                        src="<?php echo get_template_directory_uri(); ?>/img/features/hifu-feature03.png"
                        alt="HIFU according to the concerns">
                    </figure>
                  </article>
                </div>
              </div>
            </div>
          </div>
          <div id="state" class="sl-state">
            <div class="menu-inn sl-state-inn">
              <div class="sl-state-inn-ttl subpage-ttl menu-inn-ttl">
                <h2 class="under-line">Video of Designed HIFU</h2>
              </div>
              <div class="sl-state-inn-content video-style01">
                <iframe width="100%" height="100%" src="https://www.youtube.com/embed/6ezaKfgQgRU?enablejsapi=1"
                  title="YouTube video player" frameborder="0"
                  allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                  allowfullscreen></iframe>
              </div>
            </div>
          </div>
          <div id="treatment" class="sl-treatment">
            <div class="menu-inn sl-treatment-inn">
              <div class="sl-treatment-inn-ttl subpage-ttl menu-inn-ttl">
                <h2 class="under-line">When combined Treatment <br class="sp">that is even more effective</h2>
              </div>
              <div class="sl-treatment-inn-content">
                <div class="fl-style02 d-fl row-reverse">
                  <div class="image">
                    <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/treatment/treatment02.png"
                      alt="Thermagen">
                  </div>
                  <div class="content content01">
                    <h3>Thermagen</h3>
                    <p>
                      Thermagen (RF) is said to be an advanced version of Thermacool. By irradiating radiofrequency
                      waves
                      to the skin, this treatment is expected to stimulate collagen production, tighten the skin,
                      improve
                      sagging and wrinkles, and lift up the skin. By taking advantage of the deep penetration of
                      radiofrequency waves, the collagen in the dermis layer of the skin increases, which not only
                      causes
                      sagging but also tightens the skin and improves facial lines by contracting the fiber walls of the
                      subcutaneous tissue due to heat.
                    </p>
                  </div>
                </div>
              </div>
              <div class="pg-text">
                <p><br>It is said that hyphae are mossy, but that depends on how you apply them. If the volume is low,
                  the
                  temples and outer cheeks are the main areas that look flaky. It is important to apply it in such a way
                  as to eliminate the cause of sagging while avoiding those areas. Hypofusion is the only procedure that
                  controls the amount of fat that causes sagging and also heats the SMAS fascia. It must be performed by
                  a
                  nurse who has a proper understanding of anatomy and physiology and is highly experienced in the
                  procedure.
                </p>
              </div>
            </div>
          </div>
          <div id="price" class="sl-price">
            <div class="menu-inn sl-price-inn">
              <div class="sl-price-inn-ttl subpage-ttl menu-inn-ttl">
                <h2 class="under-line">Price</h2>
              </div>
              <div class="sl-price-inn-content">
                <p class="sl-price-inn-content-txt01">*Additional 20% charge on the treatment fee</p>
                <div class="price">
                  <h3 class="price-ttl"><span>HIFU (Ultracell Q+)</span></h3>
                  <div class="price-list">
                    <div class="d-fl price-list-wr">
                      <div class="price-list-wr-l">
                        <h3>First time (Facial line)</h3>
                        <ul>
                          <li class="d-fl">
                            <p>200 shots</p>
                            <p class="dash-line"></p>
                            <p>¥33,000</p>
                          </li>
                        </ul>
                      </div>
                      <div class="price-list-wr-l">
                        <h3>Whole face</h3>
                        <ul>
                          <li class="d-fl">
                            <p>400 shots</p>
                            <p class="dash-line"></p>
                            <p>¥69,300</p>
                          </li>
                          <li class="d-fl">
                            <p>600 shots</p>
                            <p class="dash-line"></p>
                            <p>¥88,000</p>
                          </li>
                          <li class="d-fl">
                            <p>800 shots</p>
                            <p class="dash-line"></p>
                            <p>¥106,700</p>
                          </li>
                          <li class="d-fl">
                            <p>1000 shots</p>
                            <p class="dash-line"></p>
                            <p>¥125,400</p>
                          </li>
                        </ul>
                      </div>
                    </div>
                    <p class="price-list-warn pc">※Tax included<br>Translation fee will be charged in addition to the
                      treatment fee.</p>
                  </div>
                </div>
                <p class="price-list-warn sp">※Tax included<br>Translation fee will be charged in addition to the
                  treatment fee.</p>
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
                <h2 class="under-line">Reservation</h2>
              </div>
              <div class="sl-reservation-inn-content">
                <div class="reservation-wr">
                  <p>You can reserve online</p>
                  <?php $contactTxt01 = CFS()->get('text01');
                  $contactTxt02 = CFS()->get('text02');
                  if ($contactTxt01 != ''): ?>
                    <h3><span class="l-slash">\ </span> <?php echo $contactTxt01; ?><br
                        class="sp" /><?php echo $contactTxt02; ?> <span class="r-slash"> /</span></h3>
                  <?php endif; ?>
                  <div class="h-line"></div>
                  <a href="https://reservation.medical-force.com/c/2d96f6933ed14b2a8e271863a7f0b813" target="_blank"
                    rel="nofollow noreferrer">
                    <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/reservation-btn01.png"
                      alt="">
                  </a>
                </div>
              </div>
            </div>
          </div>
          <div id="notes" class="sl-notes">
            <div class="menu-inn sl-notes-inn">
              <div class="sl-notes-inn-ttl subpage-ttl menu-inn-ttl">
                <h2 class="under-line">HIFU Notes.</h2>
              </div>
              <div class="sl-notes-inn-content">
                <div class="check-list">
                  <ul class="check-list-wr">
                    <li>Temporary redness may occur, but it usually settles down within a few hours or three days at
                      most.
                    </li>
                    <li>Swelling may occur after the procedure, but will subside in a few days.</li>
                    <li>Avoid strenuous exercise, bathing, sauna, etc. on the day of treatment.</li>
                    <li>Cosmetics and treatments with peeling effects should be avoided for 2 weeks before and after
                      treatment.</li>
                    <li>For those who have had Botox injections, the HIFU procedure should be done after one month.</li>
                    <li>It cannot be taken after excessive tanning or tanning salons.</li>
                    <li>Please avoid any peeling treatment the day before.</li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <?php $show = CFS()->get('faq_show');
          if ($show): ?>
            <div id="faq" class="sl-faq">
              <div class="menu-inn sl-faq-inn">
                <div class="sl-faq-inn-ttl subpage-ttl menu-inn-ttl">
                  <h2 class="under-line">FAQ</h2>
                </div>
                <div class="sl-faq-inn-content menu-faq-content">
                  <?php
                  $args = array(
                    'tax_query' => array(
                      array(
                        'taxonomy' => 'faq_category',
                        'field' => 'slug',
                        'terms' => 'hifu_cat'
                      ),
                    ),
                    'post_type' => 'faq',
                    'post_status' => 'publish',
                    'posts_per_page' => -1,
                    'order' => 'ASC',
                  );
                  ?>
                  <?php query_posts($args); ?>
                  <?php if (have_posts()): ?>
                    <?php while (have_posts()):
                      the_post(); ?>
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
    <?php } else { ?>
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
                      font-family: HiraMinPro-W3, Hiragino Mincho Pro, serif;
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
                      font-family: HiraMinPro-W3, Hiragino Mincho Pro, serif;
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
            <img loading="lazy" class="pc" src="<?php echo get_template_directory_uri(); ?>/img/makeup/sub-mv-img.png"
              alt="あなたの“似合う”が 見つかるアートメイク">
            <img loading="lazy" class="sp" src="<?php echo get_template_directory_uri(); ?>/img/makeup/sub-mv-sp.png"
              alt="あなたの“似合う”が 見つかるアートメイク">
          </figure>
        </div>
      </div>
      <div id="menu" class="sl-menu menu-hifu">
        <div class="sl-menu-content">
          <div id="whatis" class="sl-whatis">
            <div class="sl-whatis-inn menu-inn attach-mv">
              <div class="sl-whatis-inn-ttl subpage-ttl menu-inn-ttl">
                <h1 class="under-line menu-inn-ttl__inner">HIFUとは</h1>
              </div>
              <div class="fl-style02 d-fl">
                <div class="image">
                  <img loading="lazy" class="pc"
                    src="<?php echo get_template_directory_uri(); ?>/img/sub-whathifu-img01.png" alt="HIFUとは">
                  <img loading="lazy" class="sp"
                    src="<?php echo get_template_directory_uri(); ?>/img/sub-whathifu-img01-sp.png" alt="HIFUとは">
                </div>
                <div class="content">
                  <p>
                      HIFU（ハイフ）とは、高密度焦点式超音波を意味する英語「High lntensity Focused
                      Ultrasound」の略で、人間の耳では聞こえない高い振動数をもつ超音波を1点に集めて照射する方法です。<br>
                      皮膚表面や他の組織に傷をつけずに人体組織の内部へ浸透します。<br>
                      トランスデューサーから高エネルギーの超音波を発生させ、体内の一点に集まります。<br>
                      その点に集束された部分だけが高温になり、65~75°Cで凝固ゾーンが形成。<br>
                      熱ダメージで創傷治癒によるコラーゲンの増生や皮膚の引き締めが起こります。
                      <br>
                      <br>
                  </p>
                </div>
              </div>
              <div class="sl-state-inn-content video-style01">
                <iframe width="620" height="315" src="https://www.youtube.com/embed/8-e2CqmTdeo?si=q6cCRwEh-EcnQ7LI" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
              </div>
            </div>
          </div>
          <!-- effect ハイフが適応の方-->
          <div class="sl-effect">
            <div class="menu-inn sl-effect-inn">
              <div class="sl-whatis-inn-ttl subpage-ttl menu-inn-ttl">
                <h2 class="under-line" style="margin-top:40px;">ハイフが適応の方</h2>
              </div>
              <div class="check-list">
                <ul class="check-list-wr">
                  <li>頬のトップが下がった</li>
                  <li>フェイスラインがもたついて顔が大きくなった</li>
                  <li>ほうれい線が深く長くなった</li>
                  <li>マリオネットラインや口横のたるみ</li>
                  <li>お顔全体にハリが無い</li>
                  <li>顎裏のボリューム感</li>
                </ul>
              </div>
              <div class="pg-text">
                <p>
                  ※いずれも医師の診断による
                  （メーカーの各カートリッジの適応推奨参照し医師が監修）
                </p>
              </div>
              <div class="fl-style02 d-fl fl--style02">
                <div class="image">
                  <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/hifu-img-info.webp"
                    alt="HIFUとは">
                </div>
                <div class="content">
                  <p style="padding-bottom: 0;">たるみの原因は複合的です。
                  </p>
                  <div class="disc-list disc--list">
                    <ul class="disc-list-wr">
                      <li>コラーゲンの減少による皮膚の弾力低下</li>
                      <li>筋肉の弾性の低下や下垂</li>
                      <li>骨の萎縮、減少</li>
                      <li>脂肪のロスや下垂</li>
                      <li>靭帯のゆるみ</li>
                    </ul>
                  </div>
                  <p>が挙げられハイフでアプローチできるのは真皮層、皮下組織、筋膜です。
                  </p>
                  <p>
                    メーカーの各カートリッジの推奨適応と医師の診断と指示の元、たるみの原因ごとに必要なカートリッジを選択し医師の指示のもとお肌をマーキングし患者様に不利益がないよう７つのカートリッジ１４つのモードを駆使し筋膜・皮下組織・真皮に熱を与えたるみを改善します。
                  </p>
                  <div class="check-list">
                    <ul class="check-list-wr">
                      <li>熱凝固による皮膚の引き締め効果、コラーゲンの増生</li>
                      <li>皮下組織にMPモードを使用した際のボリュームコントロール</li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="sv-info">
                <strong class="sv-info-ttl"><span>監修者情報</span></strong>
                <div class="sv-info-content d-fl">
                  <div class="sv-img">
                    <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/menu/supervisor_img.png"
                      alt="監修者情報">
                  </div>
                  <div class="sv-profile">
                    <sm class="sv-position">リアンクリニック院長</sm>
                    <strong style="display:block;" class="sv-name"><a
                        href="<?php echo home_url('/staff/藤尾-謙太/'); ?>">藤尾謙太</a></strong>
                    <strong style="display:block;" class="profile">プロフィール</strong>
                    <p class="profile-txt">昭和大学卒業<br>順天堂大学の医局入職<br>大手美容皮膚科勤務<br>2023年博士号取得<br><a
                        style="color: blue; text-decoration: underline;" target="_blank"
                        href="https://www.aesthet-derm.org/">日本美容皮膚科医学会所属</a></p>
                  </div>
                </div>
                <?php echo get_template_part('template-parts/sv-guidelines'); ?>
              </div>
            </div>
          </div>
          <!-- effect ハイフの効果-->
          <div class="sl-effect">
            <div class="menu-inn sl-effect-inn">
              <div class="sl-effect-inn-ttl subpage-ttl menu-inn-ttl">
                <h2 class="under-line">ハイフの効果</h2>
              </div>
              <div class="sl-effect-inn-content">
                <div class="pg-text">
                  <p>超音波ハイフの熱作用で真皮層や皮下組織、スマス筋膜に熱を与えます。</p>
                </div>
                <div class="check-list">
                  <ul class="check-list-wr">
                    <li>照射直後に熱作用によるタンパク質の引き締め効果が現れます。（即時効果）</li>
                    <li>その後1〜3ヶ月かけて創傷治癒力により組織を修復しようとコラーゲンが生成されます（中長期効果）肌に弾力やそれによる引き締め効果が現れます。</li>
                  </ul>
                </div>
              </div>
              <div class="image-center">
                <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/hifu-image1.webp" alt="ハイフの効果">
              </div>
            </div>
          </div>
          <div id="types" class="sl-types">
            <div class="menu-inn sl-types-inn">
              <div class="sl-types-inn-ttl subpage-ttl menu-inn-ttl">
                <h2 class="underline">デザイニングハイフで使うのは<br class="pc">
                  ウルトラフォーマーMPT７種の<br class="pc">カートリッジ２つのモードの１４つ</h2>
              </div>
              <div class="sl-types-inn-content">
                <div class="check-list">
                  <ul class="check-list-wr">
                    <li>ドットモード</li>
                    <li>MPモード</li>
                  </ul>

                </div>
                <div class="fl-style02 d-fl">
                  <div class="content" style="margin-top:0;">
                    <div class="pg-text">
                      <p>悩みやたるみの原因や肌の厚さは人それぞれ。<br>
                        カートリッジ選択、出力設定は非常に重要です。当院では７つのカートリッジがありそれぞれが２種のモードを持ちます。（計１４）悩みやもたらしたい効果によってカートリッジを使い分けることでより効果的な結果を目指します。<br>
                        ドットモードとMPモードのシナジー効果を狙います。
                      </p>
                    </div>
                  </div>
                  <div class="image">
                    <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/cardrich.webp" alt="ハイフの効果">
                  </div>
                  <div class="defination-fl">
                    <dl>
                      <dt>種類1：ドットモード</dt>
                      <dd>熱凝固点は一定の間隔でターゲット部位に対して、コラーゲン生成を誘発し、肌のリフトアップ効果をもたらします。</dd>
                    </dl>
                    <dl>
                      <dt>種類2：MPモード</dt>
                      <dd>
                        <div class="pg-text">
                          ライナー式MPモードは、ターゲット組織を一貫して高密度に治療することができます。また、正確な
                          熱凝固点を作ることで、より早く完全な再生を促し、皮膚の再生や肌の引き締め効果が向上します。
                        </div>

                      </dd>
                    </dl>
                    <div class="img-center w620">
                      <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/MP-dod-mode-img.webp"
                        alt="カートリッジ">
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div id="benefits" class="sl-benefits">
              <div class="menu-inn sl-benefits-inn">
                <div class="sl-benefits-inn-ttl subpage-ttl menu-inn-ttl">
                  <h2 class="under-line">HIFUの6つの分野の効果<br class="sp"><small>（改善できる症状）</small></h2>
                </div>
                <div class="sl-benefits-inn-content">
                  <div class="list-style01">
                    <article class="list-style01-item">
                      <h2 class="list-style01-item-ttl"><span class="list-no">01</span>小じわ</h2>
                    </article>
                    <article class="list-style01-item">
                      <h2 class="list-style01-item-ttl"><span class="list-no">02</span>皮たるみ</h2>
                    </article>
                    <article class="list-style01-item">
                      <h2 class="list-style01-item-ttl"><span class="list-no">03</span>引き締め</h2>
                    </article>
                    <article class="list-style01-item">
                      <h2 class="list-style01-item-ttl"><span class="list-no">04</span>輪郭形成</h2>
                    </article>
                    <article class="list-style01-item">
                      <h2 class="list-style01-item-ttl"><span class="list-no">05</span>たるみ毛穴</h2>
                    </article>
                    <article class="list-style01-item">
                      <h2 class="list-style01-item-ttl"><span class="list-no">06</span>ボリュームコントロール</h2>
                    </article>
                  </div>
                </div>
              </div>
            </div>
              <div id="rule" class="sl-benefits">
              <div class="menu-inn sl-benefits-inn sl-menu-content">
                <div class="sl-benefits-inn-ttl subpage-ttl menu-inn-ttl">
                  <h2 class="under-line">デザイニングハイフの<br class="sp">7個のルール</h2>
                </div>
                <div class="defination-fl">
                  <dl>
                    <dt>パワー設定</dt>
                    <dd>出力はお肌状態とトータル2061件*のハイフ治療におけるデータ、メーカー推奨、たるみの程度とお痛みをトータルで考慮し医師が指示します。<br>
                      *2022/07/14-2025/01/31の期間に正社員の看護師が施術した件数
                    </dd>
                  </dl>
                  <dl>
                    <dt>カートリッジの選択</dt>
                    <dd>脂肪のつき方でもカートリッジを選択する深さは異なります。またカートリッジにおける効果も異なるため全ての人に同じカートリッジで施術をしておらず個別性を持った治療を提供しております。
                    </dd>
                  </dl>
                  <dl>
                    <dt>均一に熱を加えること</dt>
                    <dd>闇雲に熱を加えればいいというわけではありません。均一にドット状に熱を入れることは安全面でも効果面でも重要です。</dd>
                  </dl>
                  <dl>
                    <dt>伸展方向
                    </dt>
                    <dd>収縮のベクトルを意識して皮膚を引き上げたい方向に伸展しその際のカートリッジの動かし方も重要です。</dd>
                  </dl>
                  <dl>
                    <dt>ショット数</dt>
                    <dd>必要なショット数はお顔の大きさやたるみの原因や程度によっても異なります。その方にとって必要なショット数を医師と相談することは重要です</dd>
                  </dl>
                  <dl>
                    <dt>ヒアリング</dt>
                    <dd>今までの治療歴や目指すゴール、希望する施術範囲などをヒアリングし適切な治療をご提案しています。当たり前のようですが患者様と医療者とのコミュニケーションを当院では重視しているのです。
                    </dd>
                  </dl>
                  <dl>
                    <dt>マーキング技術</dt>
                    <dd>骨格や脂肪のつき方は人によって異なります。治療は寝た状態で行いますが、お顔の状態は起き上がった状態で拝見するためマーキングは重要です。<br>
                      神経や、靭帯、脂肪の範囲など必要な解剖の理解と使うカートリッジの目的に応じでマーキングをして施術を行います。<br>
                    </dd>
                  </dl>
                  <div class="pg-text">
                    <p>（KOLの先生のご指導そしてメーカー本社での研修内容、医師の指示のもと抽出しております。）</p>
                  </div>
                </div>
              </div>
            </div>

              <!-- コラーゲンハイフの８ルール -->
              <!-- <div id="rule" class="sl-benefits">
              <div class="menu-inn sl-benefits-inn">
                <div class="sl-benefits-inn-ttl subpage-ttl menu-inn-ttl">
                  <h2 class="under-line">デザイニングハイフの<br class="sp">8個のルール</h2>
                </div>
                <div class="defination-fl">
                  <dl>
                    <dt>パワー設定</dt>
                    <dd>&emsp; 出力はお肌状態とトータル2061件*のハイフ治療におけるデータ、メーカー推奨、たるみの程度とお痛みをトータルで考慮し医師が指示します。<br>
                      *2022/07/14-2025/01/31の期間に正社員の看護師が施術した件数
                    </dd>
                  </dl>
                  <dl>
                    <dt>カートリッジの選択</dt>
                    <dd>&emsp; 脂肪のつき方でもカートリッジを選択する深さは異なります。またカートリッジにおける効果も異なるため全ての人に同じカートリッジで施術をしておらず個別性を持った治療を提供しております。
                    </dd>
                  </dl>
                  <dl>
                    <dt>均一に熱を加えること</dt>
                    <dd>&emsp; 闇雲に熱を加えればいいというわけではありません。均一にドット状に熱を入れることは安全面でも効果面でも重要です。</dd>
                  </dl>
                  <dl>
                    <dt>伸展方向
                    </dt>
                    <dd>&emsp; 収縮のベクトルを意識して皮膚を引き上げたい方向に伸展しその際のカートリッジの動かし方も重要です。</dd>
                  </dl>
                  <dl>
                    <dt>ショット数</dt>
                    <dd>&emsp; 必要なショット数はお顔の大きさやたるみの原因や程度によっても異なります。その方にとって必要なショット数を医師と相談することは重要です</dd>
                  </dl>
                  <dl>
                    <dt>ヒアリング</dt>
                    <dd>&emsp; 今までの治療歴や目指すゴール、希望する施術範囲などをヒアリングし適切な治療をご提案しています。当たり前のようですが患者様と医療者とのコミュニケーションを当院では重視しているのです。</dd>
                  </dl>
                  <dl>
                    <dt>マーキング技術</dt>
                    <dd>&emsp; 骨格や脂肪のつき方は人によって異なります。治療は寝た状態で行いますが、お顔の状態は起き上がった状態で拝見するためマーキングは重要です。<br>
                      神経や、靭帯、脂肪の範囲など必要な解剖の理解と使うカートリッジの目的に応じでマーキングをして施術を行います。<br>

                    </dd>
                  </dl>
                  <div class="pg-text">
                    <p>（KOLの先生のご指導そしてメーカー本社での研修内容、医師の指示のもと抽出しております。）
                    </p>
                  </div>
                </div>
              </div> -->
              <!-- <div id="case" class="sl-case">
            <div class="menu-inn sl-case-inn">
              <div class="sl-case-inn-ttl subpage-ttl menu-inn-ttl">
                <h2 class="under-line">症例写真</h2>
              </div>
              <div class="sl-case-inn-content">
                <div class="fl-style04">
                  <article>
                    <a class="fl-style04-fl d-fl" target="_blank" rel="nofollow noreferrer">
                      <figure>
                        <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/case/thread-case01.png" alt="症例写真">
                      </figure>
                      <div class="content">
                        <dl>
                          <dt>施術名</dt>
                          <dd>ショートスレッド</dd>
                        </dl>
                        <dl>
                          <dt>施術の説明</dt>
                          <dd>溶ける糸がついた美容針を肌に挿入し、<br>肌のたるみやハリ感を改善する治療です</dd>
                        </dl>
                        <dl>
                          <dt>施術の副作用(リスク)</dt>
                          <dd>疼痛・内出血・腫れ・糸の露出・ひきつれ</dd>
                        </dl>
                        <dl>
                          <dt>施術の価格</dt>
                          <dd>￥66,000〜¥225,500</dd>
                        </dl>
                      </div>
                    </a>
                  </article>
                  <article>
                    <a class="fl-style04-fl d-fl" target="_blank" rel="nofollow noreferrer">
                      <figure>
                        <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/case/thread-case02.png" alt="症例写真">
                      </figure>
                      <div class="content">
                        <dl>
                          <dt>施術名</dt>
                          <dd>ショートスレッド</dd>
                        </dl>
                        <dl>
                          <dt>施術の説明</dt>
                          <dd>溶ける糸がついた美容針を肌に挿入し、<br>肌のたるみやハリ感を改善する治療です</dd>
                        </dl>
                        <dl>
                          <dt>施術の副作用(リスク)</dt>
                          <dd>疼痛・内出血・腫れ・糸の露出・ひきつれ</dd>
                        </dl>
                        <dl>
                          <dt>施術の価格</dt>
                          <dd>￥66,000〜¥225,500</dd>
                        </dl>
                      </div>
                    </a>
                  </article>
                </div>
              </div>
            </div>
          </div> -->
              <div id="features" class="sl-features">
                <div class="menu-inn sl-features-inn">
                  <div class="sl-features-inn-ttl subpage-ttl menu-inn-ttl">
                    <h2 class="under-line">リアンの<br class="sp">ハイフが選ばれる理由</h2>
                  </div>
                  <div class="sl-reason-inn-content">
                    <div class="fl-style01">
                      <article class="fl-style01-item">
                        <h3 class="fl-style01-item-ttl"><span class="list-no">01</span>韓国本社での研修による技術向上</h3>
                        <div class="d-fl fl-style01-item-content">
                          <figure>
                            <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/hifu-kensyu-img3.webp"
                              alt="施術者で結果は変わる">
                          </figure>
                          <div class="fl-style01-item-content-txt">
                            <p>
                              メーカーのプロトコルに加え、本社で実際に研修を受けることでより安全で高い技術提供を目指しております。
                            </p>
                          </div>
                        </div>
                      </article>
                      <article class="fl-style01-item">
                        <h3 class="fl-style01-item-ttl"><span class="list-no">02</span>施術者で結果は変わる</h3>
                        <div class="d-fl fl-style01-item-content">
                          <figure>
                            <img loading="lazy"
                              src="<?php echo get_template_directory_uri(); ?>/img/hifu-kensyu-img1.webp"
                              alt="施術者で結果は変わる">
                          </figure>
                          <div class="fl-style01-item-content-txt">
                            <p>
                              施術者で効果が変わる理由は複数あります。<br>
                              国内外の美容皮膚科領域の権威的な先生方も言っていることですが当院もそうであると考えます。たるみの原因は全員が同じではなく、皮膚の厚さや脂肪のつき方も違います。そのため効果的な施術には出力やショット数、当てる範囲やカートリッジの選択が必要と考えざるを得ないでしょう。また熱を均一に入れる技術にも経験値や必要であると考えます。
                          </div>
                        </div>
                      </article>
                      <article class="fl-style01-item">
                        <h3 class="fl-style01-item-ttl"><span class="list-no">03</span>7種2モードのカートリッジの豊富さ</h3>
                        <div class="d-fl fl-style01-item-content">
                          <figure>
                            <img loading="lazy"
                              src="<?php echo get_template_directory_uri(); ?>/img/hifu-kensyu-img2.webp"
                              alt="7種2モードのカートリッジの豊富さ">
                          </figure>
                          <div class="fl-style01-item-content-txt">
                            <p>
                              カートリッジの深さやモードでできることは異なります。多種のカートリッジでお客様の悩みにコミットします。<br>
                              （メーカー資料参考・カートリッジ選定は医師の指示）
                            </p>
                          </div>
                        </div>
                      </article>
                    </div>
                  </div>
                </div>
              </div>
              <div id="state" class="sl-state">
                <!-- <div class="menu-inn sl-state-inn">
                <div class="sl-state-inn-ttl subpage-ttl menu-inn-ttl">
                  <h2 class="under-line">施術の様子</h2>
                </div>
                <div class="sl-state-inn-content video-style01">
                  <iframe width="100%" height="100%" src="https://www.youtube.com/embed/6ezaKfgQgRU"
                    title="YouTube video player" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    allowfullscreen></iframe>
                </div>
              </div> -->
                <!-- effect 組み合わせると効果的な施術 -->
                <div class="sl-whatis">
                  <div class="menu-inn sl-treatment-inn">
                    <div class="sl-treatment-inn-ttl subpage-ttl menu-inn-ttl">
                      <h2 class="under-line">組み合わせると<br class="sp">効果的な施術</h2>
                    </div>
                    <div class="sl-treatment-inn-content">
                      <div class="fl-style02 d-fl row-reverse">
                        <div class="image">
                          <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/whatshis-blnewmer.jpg"
                            alt="ボルニューマ">
                        </div>
                        <div class="content content01">
                          <h3>ボルニューマ</h3>
                          <p>
                            ボルニューマとは高周波を用いたたるみ治療の機械です。<br>高周波治療の弱点である【痛み】をチップの改良により克服し、更にはサーマクールと同様の6.7MHzの大きな熱を加えることで強力にお顔を引き締めることができます。
                          </p>
                        </div>
                      </div>
                      <div class="fl-style02 d-fl">
                        <div class="image">
                          <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/sub-whatxerf-img01.png"
                            alt="ザーフ">
                        </div>
                        <div class="content content01">
                          <h3>ザーフ</h3>
                          <p>
                            ザーフ（XERF）とは、世界初の周波数（6.7Mhz＋2Mhz）によりRFエネルギーを真皮と脂肪層線維性隔壁に届けることで熱エネルギーを発生させ、皮下層のボリュームヒーティング(容積加熱)で熱エネルギーを長時間維持することで、「最適なリフティング+引き締め効果の向上」を実現する新しい概念の高周波によるたるみ治療です。
                          </p>
                        </div>
                      </div>
                    </div>
                    <br>
                  </div>
                </div>
                <div id="price" class="sl-price">
                  <div class="menu-inn sl-price-inn">
                    <div class="sl-price-inn-ttl subpage-ttl menu-inn-ttl">
                      <h2 class="under-line">料金</h2>
                    </div>
                    <div class="sl-price-inn-content">
                      <div class="price">
                        <h3 class="price-ttl"><span>デザイニングハイフ（ウルトラフォーマ MPT）</span></h3>
                        <div class="price-list">
                          <div class="d-fl price-list-wr">
                            <div class="price-list-wr-l">
                              <ul>
                                <li class="d-fl">
                                  <p>400ショット</p>
                                  <p class="dash-line"></p>
                                  <p>¥69,300</p>
                                </li>
                                <li class="d-fl">
                                  <p>600ショット</p>
                                  <p class="dash-line"></p>
                                  <p>¥88,000</p>
                                </li>
                                <li class="d-fl">
                                  <p>800ショット</p>
                                  <p class="dash-line"></p>
                                  <p>¥106,700</p>
                                </li>
                                <li class="d-fl">
                                  <p>1000ショット</p>
                                  <p class="dash-line"></p>
                                  <p>¥125,400</p>
                                </li>
                              </ul>
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
                        <p>LINEでの24時間ネット予約はこちらから</p>
                        <?php $contactTxt01 = CFS()->get('text01');
                        $contactTxt02 = CFS()->get('text02');
                        if ($contactTxt01 != ''): ?>
                          <h3><span class="l-slash">\ </span> <?php echo $contactTxt01; ?><br
                              class="sp" /><?php echo $contactTxt02; ?> <span class="r-slash"> /</span></h3>
                        <?php endif; ?>
                        <div class="h-line"></div>
                        <a href="https://lin.ee/U5tTSaw" target="_blank" rel="nofollow noreferrer">
                          <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/reservation-btn01.png"
                            alt="">
                        </a>
                      </div>
                    </div>
                    <a style="display:block;" target="_blank" href="https://lin.ee/U5tTSaw"
                      class="sl-reservation-inn-banner">
                      <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/reservation-banner01.png"
                        alt="LINE登録">
                    </a>
                  </div>
                </div>
                <div id="notes" class="sl-notes">
                  <div class="menu-inn sl-notes-inn">
                    <div class="sl-notes-inn-ttl subpage-ttl menu-inn-ttl">
                      <h2 class="under-line">デザイニングハイフの注意事項</h2>
                    </div>
                    <div class="sl-notes-inn-content">
                      <div class="check-list">
                        <ul class="check-list-wr">
                          <li>赤みや腫れが一時的に生じることがあります。個人差はありますが数日で引いてきます</li>
                          <li>治療当日は激しい運動や長時間の入浴は避けていただくことを推奨します。</li>
                          <li>治療前後2週間は皮剥けの起こるピーリングやスキンケア、治療はお控えいただきよく保湿をしてお過ごし下さい。当日皮剥けや乾燥がございますと施術をお受けいただけないことがございます。
                          </li>
                          <li>ボトックスをお受けになった方は2週間、ヒアルロン酸は4週間空けてからHIFUや高周波の熱治療が可能となります。</li>
                          <li>お日焼けした肌に施術をすることはできかねますのでご注意ください。</li>

                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
                <?php $show = CFS()->get('faq_show');
                if ($show): ?>
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
                              'terms' => 'hifu_cat'
                            ),
                          ),
                          'post_type' => 'faq',
                          'post_status' => 'publish',
                          'posts_per_page' => -1,
                          'order' => 'ASC',
                        );
                        ?>
                        <?php query_posts($args); ?>
                        <?php if (have_posts()): ?>
                          <?php while (have_posts()):
                            the_post(); ?>
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
                <div id="connection" class="">
                  <div class="menu-inn">
                    <div class="sl-connection-inn-ttl subpage-ttl menu-inn-ttl ">
                      <h2 class="under-line">たるみ・しわに効果的な治療</h2>
                    </div>
                    <div class="sl-connection-inn-content">

                      <?php // get_template_part('template-parts/service/hifu'); ?>
                      <?php get_template_part('template-parts/service/sarmagen'); ?>
                      <?php get_template_part('template-parts/service/liftup-botox'); ?>
                      <?php get_template_part('template-parts/service/thread'); ?>
                      <?php get_template_part('template-parts/service/volnewmer'); ?>
                      <?php get_template_part('template-parts/service/botox'); ?>
                      <?php get_template_part('template-parts/service/hyaluronic'); ?>

                    </div>
                  </div>
                </div>
                <?php get_template_part('template-parts/guide-line'); ?>
              </div>
            </div>
          </div>
        <?php } ?>
        <?php get_template_part('footer-company'); ?>
  </main>
</div>
<?php
get_footer();