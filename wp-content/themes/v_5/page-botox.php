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
  "mainEntity": [
    {
      "@type": "Question",
      "name": "マッサージやエステはいつから可能ですか？",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "<span>注射部位のマッサージやエステは、施術後2週間は避けるようにしてください。</span>"
      }
    },
    {
      "@type": "Question",
      "name": "痛みはありますか？",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "<span>冷やしながら行うことで感覚が鈍感になりますが、針を刺すため、チクっとしたお痛みがあります。お痛みが心配な方はオプション(別料金)として貼る麻酔や吸う麻酔(笑気麻酔)を用意しております。</span>"
      }
    },
    {
      "@type": "Question",
      "name": "内出血はありますか？",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "<span>できるだけ内出血がでないように施術を行い、施術後は圧迫を行いますが体質や注入箇所により内出血する可能性があります。その場合は、1週間から2週間で消失します。</span>"
      }
    },
    {
      "@type": "Question",
      "name": "メイクはできますか？",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "<span>施術日からメイク可能です。</span>"
      }
    },
    {
      "@type": "Question",
      "name": "効果はどれくらい持続しますか？",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "<span>注入部位により異なりますが、およそ3～6ヶ月です。</span>"
      }
    },
    {
      "@type": "Question",
      "name": "繰り返し治療を受けなければいけないのでしょうか？",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "<span>ボトックス注射は、半永久的に効果持続するものではありません。繰り返しの注入で、だんだんと筋肉が萎縮し効果の持続期間が長くなる部位もあります。効果を持続させたいという場合は、年に2～3回を目安に注入されることをおすすめします。</span>"
      }
    }
  ]
}
</script>

<div id="primary" class="content-area">
  <main id="main" class="site-main sl">

    <div class="breadcrumbs breadcrumbs03">
      <div class="breadcrumbs-inn">
        <?php
          if(function_exists( 'yoast_breadcrumb' )){
            yoast_breadcrumb( '<div id="breadcrumbs">', '</div>');
          }
        ?>
      </div>
    </div>
    <?php $locale = get_locale();
    if ('en_US' == $locale  ) { ?>
    <div id="mv" class="sl-mv">
      <div class="d-fl sl-mv-inn">
        <div class="sl-mv-inn-ttl">
          <div class="pc">
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
                <text id="LIAN_clinic_linking_you_to_beauty" data-name="LIAN clinic linking you to beauty" class="cls-mv-1"
                  transform="translate(0 35)">
                  <tspan x="0" y="0">LIAN clinic</tspan>
                  <tspan x="0" y="60">linking you to beauty</tspan>
                </text>
              </svg>
          </div>
          <div class="sp">
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
                <text id="LIAN_clinic_linking_you_to_beauty" data-name="LIAN clinic linking you to beauty" class="cls-1" transform="translate(0 35)">
                  <tspan x="0" y="0">LIAN clinic</tspan>
                  <tspan x="0" y="60">linking you</tspan>
                  <tspan x="0" y="120">to beauty</tspan>
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
    <div id="menu"  class="sl-menu menu-botox">
      <div class="sl-menu-content">
        <div id="whatis" class="sl-whatis">
          <div class="sl-whatis-inn menu-inn attach-mv">
            <div class="sl-whatis-inn-ttl subpage-ttl menu-inn-ttl">
              <h1 class="under-line menu-inn-ttl__inner">What is Botox?</h1>
            </div>
            <div class="sl-whatis-inn-content">
              <div class="fl-style02 d-fl">
                <div class="image">
                  <img loading="lazy" class="pc" src="<?php echo get_template_directory_uri(); ?>/img/sub-whatbotox-img01.png" alt="ボトックスとは">
                  <img loading="lazy" class="sp" src="<?php echo get_template_directory_uri(); ?>/img/sub-whatbotox-img01-sp.png" alt="ボトックスとは">
                </div>
                <div class="content">
                  <p>Botulinum toxin, the main ingredient in Botox injections, inhibits the release of acetylcholine, a neurotransmitter, temporarily paralyzing the muscles. Injection of the drug reduces wrinkles caused by the action of facial muscles by relaxing the muscles in the area where the drug is injected.<br>
                    The greatest advantage of this treatment is that it prevents the wrinkles formed by the facial muscles from becoming habitual grooves. In addition, by injecting into the shallow layers of the skin, it can be expected to tighten pores and suppress the activity of sweat glands, thereby beautifying the skin. (Poreless Botox)</p>
                </div>
              </div>
              <div class="check-list">
                <ul class="check-list-wr">
                  <li>Those who are concerned about expression lines at the corners of the eyes, brows, forehead, root of the nose, and chin, as well as exposed gums when smiling.</li>
                  <li>Those who are concerned about the elasticity of the gills</li>
                  <li>Those who are concerned about the vertical line of the neck</li>
                  <li>Concerned about stiff shoulders</li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div id="benefits" class="sl-benefits">
          <div class="menu-inn sl-benefits-inn">
            <div class="sl-benefits-inn-ttl subpage-ttl menu-inn-ttl">
              <h2 class="under-line">Effects of Botox<br class="sp"><small> (Symptoms that can be improved)</small></h2>
            </div>
            <div class="sl-benefits-inn-content">
              <div class="fl-style01">
                <article class="fl-style01-item">
                  <h2 class="fl-style01-item-ttl"><span class="list-no">01</span>Forehead</h2>
                  <div class="d-fl fl-style01-item-content">
                    <figure>
                      <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/benefits/botox-benefits-img01.png"
                        alt="Forehead">
                    </figure>
                    <div class="fl-style01-item-content-txt">
                      <p>Botox injected into the forehead can reduce the appearance of horizontal wrinkles that form on the forehead when the facial muscles are moved. Because the forehead has little fat, wrinkles are easily visible depending on the degree of muscle contraction. It also helps prevent the wrinkles from becoming deeper.
                      </p>
                    </div>
                  </div>
                </article>
                <article class="fl-style01-item">
                  <h2 class="fl-style01-item-ttl"><span class="list-no">02</span>Brow, Eyes</h2>
                  <div class="d-fl fl-style01-item-content">
                    <figure>
                      <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/benefits/botox-benefits-img02.png"
                        alt="Brow, Eyes">
                    </figure>
                    <div class="fl-style01-item-content-txt">
                      <p>Expression muscles around the eyes, such as between the eyebrows, at the corners of the eyes, and under the eyes, move frequently depending on facial expressions, and also tend to show wrinkles due to their thin skin. Injecting Botox can reduce the appearance of wrinkles in these areas. It is also a preventive measure to prevent deep wrinkles.
                      </p>
                    </div>
                  </div>
                </article>
                <article class="fl-style01-item">
                  <h2 class="fl-style01-item-ttl"><span class="list-no">03</span>Bunny Line</h2>
                  <div class="d-fl fl-style01-item-content">
                    <figure>
                      <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/benefits/botox-benefits-img03.png"
                        alt="Bunny Line">
                    </figure>
                    <div class="fl-style01-item-content-txt">
                      <p>These wrinkles form when people get angry or laugh, and if they become a habit, wrinkles on the upper part of the nose or between the eyes give the impression of anger, so it is important to prevent them before they become a habit.</p>
                    </div>
                  </div>
                </article>
                <article class="fl-style01-item">
                  <h2 class="fl-style01-item-ttl"><span class="list-no">04</span>Chin</h2>
                  <div class="d-fl fl-style01-item-content">
                    <figure>
                      <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/benefits/botox-benefits-img04.png"
                        alt="Chin">
                    </figure>
                    <div class="fl-style01-item-content-txt">
                      <p>Dried plum wrinkles on the chin are bumpy wrinkles. Botox can be injected into the chin to reduce the appearance of these wrinkles, while at the same time making the chin appear sharper and more defined.</p>
                    </div>
                  </div>
                </article>
                <article class="fl-style01-item">
                  <h2 class="fl-style01-item-ttl"><span class="list-no">05</span>Gamey</h2>
                  <div class="d-fl fl-style01-item-content">
                    <figure>
                      <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/benefits/botox-benefits-img05.png"
                        alt="Gamey">
                    </figure>
                    <div class="fl-style01-item-content-txt">
                      <p>Commonly known as a gummy smile, in which too much of the gums are visible when the mouth is open. It can be caused by a combination of factors such as skeletal structure, tooth size, and muscular influences. If the muscles that raise the upper lip are developed and the lips are raised wide, the gum exposure can be reduced by relaxing the muscle movement.</p>
                    </div>
                  </div>
                </article>
                <article class="fl-style01-item">
                  <h2 class="fl-style01-item-ttl"><span class="list-no">06</span>Mouth Angle</h2>
                  <div class="d-fl fl-style01-item-content">
                    <figure>
                      <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/benefits/botox-benefits-img06.png"
                        alt="Mouth Angle">
                    </figure>
                    <div class="fl-style01-item-content-txt">
                      <p>
                      When the muscles that lower the corners of the mouth move, they cause the mouth to look grumpy or old. Botox can be placed on the muscles that cause the corners of the mouth to droop, softening their movement and lifting the corners of the mouth to give a softer look to the mouth.
                      </p>
                    </div>
                  </div>
                </article>
                <article class="fl-style01-item">
                  <h2 class="fl-style01-item-ttl"><span class="list-no">07</span>Nose</h2>
                  <div class="d-fl fl-style01-item-content">
                    <figure>
                      <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/benefits/botox-benefits-img07.png"
                        alt="Nose">
                    </figure>
                    <div class="fl-style01-item-content-txt">
                      <p>
                      If your nose widens horizontally and appears larger when you smile, Botox can be administered to prevent the nose from widening horizontally. Botox can also be used to make the nostrils less likely to widen. This is recommended for people who want to make their nose look smaller but are afraid of surgery.
                      </p>
                    </div>
                  </div>
                </article>
                <article class="fl-style01-item">
                  <h2 class="fl-style01-item-ttl"><span class="list-no">08</span>Armpit</h2>
                  <div class="d-fl fl-style01-item-content">
                    <figure>
                      <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/benefits/botox-benefits-img08.png"
                        alt="Armpit">
                    </figure>
                    <div class="fl-style01-item-content-txt">
                      <p>
                      Botox can also be used to treat the problem of armpits. Injection can reduce the amount of sweat and prevent the occurrence of odor.
                      </p>
                    </div>
                  </div>
                </article>
                <article class="fl-style01-item">
                  <h2 class="fl-style01-item-ttl"><span class="list-no">09</span>Masseter Muscle</h2>
                  <div class="d-fl fl-style01-item-content">
                    <figure>
                      <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/benefits/botox-benefits-img09.png"
                        alt="Masseter Muscle">
                    </figure>
                    <div class="fl-style01-item-content-txt">
                      <p>
                      If the cause of tight gills is not skeletal but muscular bulging, Botox can be injected into the gills to eliminate the bulging gills and create a smaller face. It is also recommended for people who have a habit of clenching or grinding their teeth.
                      </p>
                    </div>
                  </div>
                </article>
                <article class="fl-style01-item">
                  <h2 class="fl-style01-item-ttl"><span class="list-no">10</span>Shoulder Stiffness</h2>
                  <div class="d-fl fl-style01-item-content">
                    <figure>
                      <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/benefits/botox-benefits-img10.png"
                        alt="Shoulder Stiffness">
                    </figure>
                    <div class="fl-style01-item-content-txt">
                      <p>
                      Botox can be injected into the shoulder to relieve shoulder stiffness. It eliminates muscle tension and relieves shoulder stiffness. In addition, when muscles become tense due to stiff shoulders, it is easy to have problems such as a less beautiful shoulder line or a shorter neck. We recommend this treatment to relieve these problems.
                      </p>
                    </div>
                  </div>
                </article>
                <article class="fl-style01-item">
                  <h2 class="fl-style01-item-ttl"><span class="list-no">11</span>Neck</h2>
                  <div class="d-fl fl-style01-item-content">
                    <figure>
                      <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/benefits/botox-benefits-img11.png"
                        alt="Neck">
                    </figure>
                    <div class="fl-style01-item-content-txt">
                      <p>
                      Botox injections are an effective way to eliminate sagging marionette lines and facial lines. By injecting Botox into an area called the vastus lateralis muscle, it can prevent the face line from being pulled downward and lift it up.
                      </p>
                    </div>
                  </div>
                </article>
              </div>
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
                <h3 class="price-ttl"><span>Allergan BOTOX</span></h3>
                <div class="price-list">
                  <div class="d-fl price-list-wr">
                    <div class="price-list-wr-l">
                      <h3>Sholder</h3>
                      <ul>
                        <li class="d-fl">
                          <p>50 units</p>
                          <p class="dash-line"></p>
                          <p>¥44,000</p>
                        </li>
                        <li class="d-fl">
                          <p>100 units</p>
                          <p class="dash-line"></p>
                          <p>¥84,700</p>
                        </li>
                      </ul>
                    </div>
                    <div class="price-list-wr-l">
                      <h3>Masseter Muscle</h3>
                      <ul>
                        <li class="d-fl">
                          <p>40 units</p>
                          <p class="dash-line"></p>
                          <p>¥39,600</p>
                        </li>
                        <li class="d-fl">
                          <p>80 units</p>
                          <p class="dash-line"></p>
                          <p>¥74,800</p>
                        </li>
                      </ul>
                    </div>
                    <div class="price-list-wr-l">
                      <h3>Armpit</h3>
                      <ul>
                        <li class="d-fl">
                          <p>100 units</p>
                          <p class="dash-line"></p>
                          <p>¥88,000</p>
                        </li>
                        <li class="d-fl">
                          <p>200 units</p>
                          <p class="dash-line"></p>
                          <p>¥169,400</p>
                        </li>
                      </ul>
                    </div>
                    <div class="price-list-wr-l">
                      <h3>Face (1part)</h3>
                      <ul>
                        <li class="d-fl">
                          <p>10-15 units</p>
                          <p class="dash-line"></p>
                          <p>￥14,850 per each</p>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
              <div class="price">
                <h3 class="price-ttl"><span>Korean BOTOX</span></h3>
                <div class="price-list">
                  <div class="d-fl price-list-wr">
                    <div class="price-list-wr-l">
                      <h3>Sholder</h3>
                      <ul>
                        <li class="d-fl">
                          <p>50 units</p>
                          <p class="dash-line"></p>
                          <p>¥22,000</p>
                        </li>
                        <li class="d-fl">
                          <p>100 units</p>
                          <p class="dash-line"></p>
                          <p>¥39,800</p>
                        </li>
                      </ul>
                    </div>
                    <div class="price-list-wr-l">
                      <h3>Masseter Muscle</h3>
                      <ul>
                        <li class="d-fl">
                          <p>40 units</p>
                          <p class="dash-line"></p>
                          <p>¥19,800</p>
                        </li>
                        <li class="d-fl">
                          <p>80 units</p>
                          <p class="dash-line"></p>
                          <p>¥33,000</p>
                        </li>
                      </ul>
                    </div>
                    <div class="price-list-wr-l">
                      <h3>Armpit</h3>
                      <ul>
                        <li class="d-fl">
                          <p>100 units</p>
                          <p class="dash-line"></p>
                          <p>¥44,000</p>
                        </li>
                        <li class="d-fl">
                          <p>200 units</p>
                          <p class="dash-line"></p>
                          <p>¥79,600</p>
                        </li>
                      </ul>
                    </div>
                    <div class="price-list-wr-l">
                      <h3>Face (1part)</h3>
                      <ul>
                        <li class="d-fl">
                          <p>10-15 units</p>
                          <p class="dash-line"></p>
                          <p>￥8,800 per each</p>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="sl-price-inn-ft">
              <div class="menu-btn more-btn">
                <a href="<?php echo esc_html( home_url('/') ) ?>price/" rel="alternate">VIEW MORE</a>
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
                <?php $contactTxt01 = CFS()->get('text01'); $contactTxt02 = CFS()->get('text02'); if($contactTxt01 != ''): ?>
                <h3><span class="l-slash">\ </span> <?php echo $contactTxt01; ?><br
                    class="sp" /><?php echo $contactTxt02; ?> <span class="r-slash"> /</span></h3>
                <?php endif; ?>
                <div class="h-line"></div>
                <a href="https://reservation.medical-force.com/c/2d96f6933ed14b2a8e271863a7f0b813" target="_blank" rel="nofollow noreferrer">
                  <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/reservation-btn01.png" alt="">
                </a>
              </div>
            </div>
          </div>
        </div>
        <div id="precautions" class="sl-precautions">
          <div class="menu-inn sl-precautions-inn">
            <div class="sl-precautions-inn-ttl subpage-ttl menu-inn-ttl">
              <h2 class="under-line">BOTOX Precautions</h2>
            </div>
            <div class="sl-precautions-inn-content">
              <div class="pg-text">
                <p>Most people who receive Botox treatment begin to see results about 3 days after treatment. The time it takes to see results varies depending on the injection site, and takes an average of one to two weeks.</p>
                <p>Botox injections require contraception for 2-4 months after the procedure. If you are pregnant, we recommend that you resume fertility after your second menstrual period after receiving the injections, or that you receive the injections after childbirth or breastfeeding.</p>
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
        <div id="faq" class="sl-faq">
          <div class="menu-inn sl-faq-inn">
            <div class="sl-faq-inn-ttl subpage-ttl menu-inn-ttl">
              <h2 class="under-line">FAQ</h2>
            </div>
            <div class="sl-faq-inn-content menu-faq-content">
              <?php
                $args=array(
                'tax_query' => array(
                    array(
                    'taxonomy' => 'faq_category',
                    'field' => 'slug',
                    'terms' => 'botox_cat'
                  ),
                ),
                'post_type' => 'faq',
                'post_status' => 'publish',
                'posts_per_page' => -1,
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
              <text id="あなたと美しさをつなぐクリニック" data-name="あなたと美しさをつなぐクリニック" class="cls-mv-1"
                transform="translate(0 35)">
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
    <div id="menu"  class="sl-menu menu-botox">
      <div class="sl-menu-content">
        <div id="whatis" class="sl-whatis">
          <div class="sl-whatis-inn menu-inn attach-mv">
            <div class="sl-whatis-inn-ttl subpage-ttl menu-inn-ttl">
              <h1 class="under-line menu-inn-ttl__inner">ボトックスとは</h1>
            </div>
            <div class="sl-whatis-inn-content">
              <div class="fl-style02 d-fl">
                <div class="image">
                  <img loading="lazy" class="pc" src="<?php echo get_template_directory_uri(); ?>/img/sub-whatbotox-img01.png" alt="ボトックスとは">
                  <img loading="lazy" class="sp" src="<?php echo get_template_directory_uri(); ?>/img/sub-whatbotox-img01-sp.png" alt="ボトックスとは">
                </div>
                <div class="content">
                  <p>ボトックス注射の主成分である「ボツリヌストキシン」は、神経の伝達物質であるア
                    セチルコリンの放出を抑制し、筋肉を一時的に麻痺させる特徴があります。薬剤を注
                    射することで、注入した箇所の筋肉の働きを和らげ表情筋の働きによって出来るシワ
                    を軽減させる事ができます。<br>
                    表情筋によって出来るシワが癖となり溝になるのを防ぐ効果もあるのが最大のメリッ
                    トといえます。また、皮膚の浅い層に注入することで、毛穴を引き締める、汗腺の活
                    動を抑えるといった美肌効果も期待できます。(ポアレスボトックス)</p>
                </div>
              </div>
              <div class="check-list">
                <ul class="check-list-wr">
                  <li>目尻、眉間、額、鼻根、顎の表情ジワや笑ったときに歯茎の露出が気になるかた</li>
                  <li>エラのハリが気になる方</li>
                  <li>首の縦すじが気になるかた</li>
                  <li>肩こりが気になる方</li>
                </ul>
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
                        <strong style="display:block;" class="sv-name"><a href="<?php echo home_url('/staff/藤尾-謙太/'); ?>">藤尾謙太</a></strong>
                        <strong style="display:block;"  class="profile">プロフィール</strong>
                        <p class="profile-txt">昭和大学卒業<br>順天堂大学の医局入職<br>大手美容皮膚科勤務<br>2023年博士号取得<br><a style="color: blue; text-decoration: underline;" target="_blank" href="https://www.aesthet-derm.org/">日本美容皮膚科医学会所属</a></p>
                    </div>
                </div>
                <div class="doctor__comments">
                  <strong>医師コメント</strong>
                  <p>
                    ボトックスは、「ボトックスで始まり、ボトックスで終わる」と言われるほど一般的に普及している手技ですが、奥が深い施術の1つであります。特に額ボトックスでは効きすぎて目が重くなってしまったり、口角ボトックスでは別の筋肉に作用して笑いづらくなったりする危険があり、ドクター選びが重要な施術です。
                    <br>当院では、目が重くなりづらい「マイクロボトックス」という手技を用いて目が重くなったご経験がある方でも安心して受けられる手技がございますので、ボトックスで一度失敗した方もまずはカウンセリングからお越しいただければと思います。
                  </p>
                </div>
                <?php echo get_template_part('template-parts/sv-guidelines'); ?>
            </div>
            </div>
          </div>
        </div>
        <div id="benefits" class="sl-benefits">
          <div class="menu-inn sl-benefits-inn">
            <div class="sl-benefits-inn-ttl subpage-ttl menu-inn-ttl">
              <h2 class="under-line">ボトックスの効果<br class="sp"><small>（改善できる症状）</small></h2>
            </div>
            <div class="sl-benefits-inn-content">
              <div class="fl-style01">
                <article class="fl-style01-item">
                  <h2 class="fl-style01-item-ttl"><span class="list-no">01</span>額</h2>
                  <div class="d-fl fl-style01-item-content">
                    <figure>
                      <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/benefits/botox-benefits-img01.png"
                        alt="額">
                    </figure>
                    <div class="fl-style01-item-content-txt">
                      <p>額にボトックスを注入することで、表情筋を動かしたときに額にできてしまう横ジワを目立たなくすることができます。額は脂肪が少ないため筋肉の収縮度合いによってシワが目立ちやすい部位です。また、深いシワにしないための予防にもなります。
                      </p>
                    </div>
                  </div>
                </article>
                <article class="fl-style01-item">
                  <h2 class="fl-style01-item-ttl"><span class="list-no">02</span>眉間 , 目尻 , 目の下</h2>
                  <div class="d-fl fl-style01-item-content">
                    <figure>
                      <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/benefits/botox-benefits-img02.png"
                        alt="眉間 , 目尻 , 目の下">
                    </figure>
                    <div class="fl-style01-item-content-txt">
                      <p>眉間や目尻、目の下といった目周りの表情筋は、表情に左右されよく動く部位であるとともに、皮膚が薄くシワが目立ちやすい部位です。ボトックスを注入することで、各部位のシワを目立たなくすることができます。深いシワにしないための予防にもなります。
                      </p>
                    </div>
                  </div>
                </article>
                <article class="fl-style01-item">
                  <h2 class="fl-style01-item-ttl"><span class="list-no">03</span>鼻根＋バニーライン</h2>
                  <div class="d-fl fl-style01-item-content">
                    <figure>
                      <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/benefits/botox-benefits-img03.png"
                        alt="鼻根＋バニーライン">
                    </figure>
                    <div class="fl-style01-item-content-txt">
                      <p>
                      怒ったときや笑ったときに出来るシワで、癖になると鼻の上の部分や目の間にできるシワは怒っているような印象を与えるため癖になる前の予防が大切です。 
                      </p>
                    </div>
                  </div>
                </article>
                <article class="fl-style01-item">
                  <h2 class="fl-style01-item-ttl"><span class="list-no">04</span>あご</h2>
                  <div class="d-fl fl-style01-item-content">
                    <figure>
                      <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/benefits/botox-benefits-img04.png"
                        alt="あご">
                    </figure>
                    <div class="fl-style01-item-content-txt">
                      <p>
                      あごにできてしまう梅干しジワはぼこぼこしとしたシワです。ボトックスを注入することで、梅干しジワを軽減出来ると同時にあごの輪郭がはっきりして、あごをシャープに見せることもできます。
                      </p>
                    </div>
                  </div>
                </article>
                <article class="fl-style01-item">
                  <h2 class="fl-style01-item-ttl"><span class="list-no">05</span>ガミー</h2>
                  <div class="d-fl fl-style01-item-content">
                    <figure>
                      <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/benefits/botox-benefits-img05.png"
                        alt="ガミー">
                    </figure>
                    <div class="fl-style01-item-content-txt">
                      <p>
                      口を開いた時に歯茎が見えすぎてしまう通称ガミースマイル。骨格や歯の大きさ、筋肉の影響等複合的な原因が重なっていることもある。上唇を挙げる筋肉が発達して唇が大きく上がってしまう場合は、筋肉の動きを和らげることで歯茎の露出を減らす事ができます。
                      </p>
                    </div>
                  </div>
                </article>
                <article class="fl-style01-item">
                  <h2 class="fl-style01-item-ttl"><span class="list-no">06</span>口角</h2>
                  <div class="d-fl fl-style01-item-content">
                    <figure>
                      <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/benefits/botox-benefits-img06.png"
                        alt="口角">
                    </figure>
                    <div class="fl-style01-item-content-txt">
                      <p>
                      口角を下げる筋肉が動くと不機嫌そうだったり、老け見えの原因に。口角が下がる原因の筋肉にボトックスを打ち、動きを和らげることで、口角を持ち上げて柔らかな印象の口元にすることができます。
                      </p>
                    </div>
                  </div>
                </article>
                <article class="fl-style01-item">
                  <h2 class="fl-style01-item-ttl"><span class="list-no">07</span>小鼻</h2>
                  <div class="d-fl fl-style01-item-content">
                    <figure>
                      <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/benefits/botox-benefits-img07.png"
                        alt="小鼻">
                    </figure>
                    <div class="fl-style01-item-content-txt">
                      <p>
                      笑うと小鼻が横に広がり大きく見える場合、ボトックスを打つことで小鼻が横に広がってしまうのをおさえることができます。これにより鼻の穴を広がりにくくする効果も期待できます。鼻を小さく見せたいけど手術は怖いという人におすすめです。
                      </p>
                    </div>
                  </div>
                </article>
                <article class="fl-style01-item">
                  <h2 class="fl-style01-item-ttl"><span class="list-no">08</span>脇</h2>
                  <div class="d-fl fl-style01-item-content">
                    <figure>
                      <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/benefits/botox-benefits-img08.png"
                        alt="脇">
                    </figure>
                    <div class="fl-style01-item-content-txt">
                      <p>
                      わきがのお悩みもボトックスで解消できます。注入することで汗の量を抑えることができ、ニオイの発生を防げます。
                      </p>
                    </div>
                  </div>
                </article>
                <article class="fl-style01-item">
                  <h2 class="fl-style01-item-ttl"><span class="list-no">09</span>エラ</h2>
                  <div class="d-fl fl-style01-item-content">
                    <figure>
                      <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/benefits/botox-benefits-img09.png"
                        alt="エラ">
                    </figure>
                    <div class="fl-style01-item-content-txt">
                      <p>
                      エラが張っている原因が骨格ではなく筋肉の盛り上がりの場合、ボトックスをエラに注入することで、エラのハリが解消され小顔効果が期待できます。歯ぎしりや食いしばりのクセがある人にもおすすめです。
                      </p>
                    </div>
                  </div>
                </article>
                <article class="fl-style01-item">
                  <h2 class="fl-style01-item-ttl"><span class="list-no">10</span>肩こり</h2>
                  <div class="d-fl fl-style01-item-content">
                    <figure>
                      <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/benefits/botox-benefits-img10.png"
                        alt="肩こり">
                    </figure>
                    <div class="fl-style01-item-content-txt">
                      <p>
                      肩にボトックスを注入することで、肩こりを解消できます。筋肉の張りを解消し、肩こりを和らげていきます。また、肩こりで筋肉が張ってしまうと、肩のラインが綺麗に見えない、首が短く見えるというようなお悩みも出やすいです。これらのお悩みの解消にもおすすめです。
                      </p>
                    </div>
                  </div>
                </article>
                <article class="fl-style01-item">
                  <h2 class="fl-style01-item-ttl"><span class="list-no">11</span>首</h2>
                  <div class="d-fl fl-style01-item-content">
                    <figure>
                      <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/benefits/botox-benefits-img11.png"
                        alt="首">
                    </figure>
                    <div class="fl-style01-item-content-txt">
                      <p>
                      マリオネットラインやフェイスラインのたるみを解消する方法として、ボトックス注射が有効です。広頚筋と呼ばれる部位にボトックスを注入することで、フェイスラインが下に引っ張られてしまうのを防ぐことができ、リフトアップできます。
                      </p>
                    </div>
                  </div>
                </article>
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
                <h3 class="price-ttl"><span>アラガン社ボトックス</span></h3>
                <div class="price-list">
                  <div class="d-fl price-list-wr">
                    <div class="price-list-wr-l">
                      <h3>肩</h3>
                      <ul>
                        <li class="d-fl">
                          <p>50単位</p>
                          <p class="dash-line"></p>
                          <p>¥44,000</p>
                        </li>
                        <li class="d-fl">
                          <p>100単位</p>
                          <p class="dash-line"></p>
                          <p>¥84,700</p>
                        </li>
                      </ul>
                    </div>
                    <div class="price-list-wr-l">
                      <h3>エラ</h3>
                      <ul>
                        <li class="d-fl">
                          <p>40単位</p>
                          <p class="dash-line"></p>
                          <p>¥39,600</p>
                        </li>
                        <li class="d-fl">
                          <p>80単位</p>
                          <p class="dash-line"></p>
                          <p>¥74,800</p>
                        </li>
                      </ul>
                    </div>
                    <div class="price-list-wr-l">
                      <h3>ワキ</h3>
                      <ul>
                        <li class="d-fl">
                          <p>100単位</p>
                          <p class="dash-line"></p>
                          <p>¥88,000</p>
                        </li>
                        <li class="d-fl">
                          <p>200単位</p>
                          <p class="dash-line"></p>
                          <p>¥169,400</p>
                        </li>
                      </ul>
                    </div>
                    <div class="price-list-wr-l">
                      <h3>顔1部位</h3>
                      <ul>
                        <li class="d-fl">
                          <p>10-15単位</p>
                          <p class="dash-line"></p>
                          <p>各14,850円</p>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
              <div class="price">
                <h3 class="price-ttl"><span>韓国製ボトックス</span></h3>
                <div class="price-list">
                  <div class="d-fl price-list-wr">
                    <div class="price-list-wr-l">
                      <h3>肩</h3>
                      <ul>
                        <li class="d-fl">
                          <p>50単位</p>
                          <p class="dash-line"></p>
                          <p>¥3,3000</p>
                        </li>
                        <li class="d-fl">
                          <p>100単位</p>
                          <p class="dash-line"></p>
                          <p>¥55,000</p>
                        </li>
                      </ul>
                    </div>
                    <div class="price-list-wr-l">
                      <h3>エラ</h3>
                      <ul>
                        <li class="d-fl">
                          <p>40単位</p>
                          <p class="dash-line"></p>
                          <p>¥19,800</p>
                        </li>
                        <li class="d-fl">
                          <p>80単位</p>
                          <p class="dash-line"></p>
                          <p>¥33,000</p>
                        </li>
                      </ul>
                    </div>
                    <div class="price-list-wr-l">
                      <h3>ワキ</h3>
                      <ul>
                        <li class="d-fl">
                          <p>100単位</p>
                          <p class="dash-line"></p>
                          <p>¥44,000</p>
                        </li>
                        <li class="d-fl">
                          <p>200単位</p>
                          <p class="dash-line"></p>
                          <p>¥79,600</p>
                        </li>
                      </ul>
                    </div>
                    <div class="price-list-wr-l">
                      <h3>顔1部位</h3>
                      <ul>
                        <li class="d-fl">
                          <p>10-15単位</p>
                          <p class="dash-line"></p>
                          <p>各11,000円</p>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="sl-price-inn-ft">
              <div class="menu-btn more-btn">
                <a href="<?php echo esc_html( home_url('/') ) ?>price/" rel="alternate">VIEW MORE</a>
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
                <?php $contactTxt01 = CFS()->get('text01'); $contactTxt02 = CFS()->get('text02'); if($contactTxt01 != ''): ?>
                <h3><span class="l-slash">\ </span> <?php echo $contactTxt01; ?><br
                    class="sp" /><?php echo $contactTxt02; ?> <span class="r-slash"> /</span></h3>
                <?php endif; ?>
                <div class="h-line"></div>
                <a href="https://lin.ee/U5tTSaw" target="_blank" rel="nofollow noreferrer">
                  <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/reservation-btn01.png" alt="">
                </a>
              </div>
            </div>
            <a style="display:block;" target="_blank" href="https://lin.ee/U5tTSaw" class="sl-reservation-inn-banner">
                <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/reservation-banner01.png" alt="LINE登録">
            </a>
          </div>
        </div>
        <div id="precautions" class="sl-precautions">
          <div class="menu-inn sl-precautions-inn">
            <div class="sl-precautions-inn-ttl subpage-ttl menu-inn-ttl">
              <h2 class="under-line">ボトックスの注意事項</h2>
            </div>
            <div class="sl-precautions-inn-content">
              <div class="pg-text">
                <p>ボトックス治療を受けた人のほとんどが、治療後3日位で効果が見られ始めます。注入箇所によって効果が出るまでの期間は異なり、平均1週間から2週間かかります。</p>
                <p>ボトックスを注入した場合、施術から2～4ヶ月は避妊しなければいけません。妊活されている場合、注射を受けて２回目の生理が終わってから妊活を再開するか、出産後あるいは卒乳後に注射を受けることをおすすめします。</p>
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
                    'terms' => 'botox_cat'
                  ),
                ),
                'post_type' => 'faq',
                'post_status' => 'publish',
                'posts_per_page' => -1,
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
        <div id="connection" class="">
          <div class="menu-inn">
            <div class="sl-connection-inn-ttl subpage-ttl menu-inn-ttl "><h2 class="under-line">しわに効果的な治療</h2></div>
            <div class="sl-connection-inn-content">
              
              <?php get_template_part('template-parts/service/hyaluronic'); ?>
                
            </div>
          </div>
        </div>
        <?php get_template_part('template-parts/guide-line'); ?>
      </div>          
    </div>
    <?php } ?>
    <?php get_template_part( 'footer-company' );?>
  </main>
</div>
<?php
get_footer();
