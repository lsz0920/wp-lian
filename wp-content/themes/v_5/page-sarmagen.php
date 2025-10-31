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
            "name": "効果はいつ頃から出ますか？",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "<span>照射直後から引き上げ効果、小顔効果を実感いただけますが、照射後1ヶ月半から2ヶ月あたりが最も効果を実感いただけます</span>"
            }
        },
        {
            "@type": "Question",
            "name": "引き上げ効果はどのくらい続きますか？",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "<span>効果の持続期間は半年程度です。年に1,2度のたるみメンテンナンスとして、定期的な治療をおすすめしております</span>"
            }
        },
        {
            "@type": "Question",
            "name": "照射時の痛みはありますか？",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "<span>熱による痛みを多少感じますが、冷却機能などによってお痛みに配慮しながら施術を行ってまいります</span>"
            }
        },
        {
            "@type": "Question",
            "name": "麻酔は使えますか？",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "<span>過度に痛みを抑えると、適正エネルギーの調整ができなくなるため、麻酔はなるべく控えた状態での照射をおこなっております</span>"
            }
        },
        {
            "@type": "Question",
            "name": "副作用・ダウンタイムはありますか？",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "<span>照射後に腫れや赤みが出る方がいらっしゃいますが、数時間〜2日程度で落ち着きます</span>"
            }
        },
        {
            "@type": "Question",
            "name": "体内に金属が入っているのですが施術を受けられますか？",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "<span>照射部位直上に限らず、体内に金属類、ペースメーカー・埋め込み式除細動器金の糸を挿入されている方はお受けいただけません。（歯のインプラントを除く）また、照射時は金属類はすべてお外しいただきます。お外しするのが難しい場合は施術をお受けいただけませんのでご了承ください。お化粧品に含まれる金属にも反応するため、アイメイク含め全てメイクオフしていただきます。</span>"
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
        if (function_exists('yoast_breadcrumb')) {
          yoast_breadcrumb('<div id="breadcrumbs">', '</div>');
        }
        ?>
            </div>
        </div>
        <?php $locale = get_locale();
    if ('en_US' == $locale  ) { ?>
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
                            <text id="LIAN_clinic_linking_you_to_beauty" data-name="LIAN clinic linking you to beauty"
                                class="cls-1" transform="translate(0 35)">
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
        <div id="menu" class="sl-menu menu-sarmagen">
            <div class="sl-menu-content">
                <div id="whatis" class="sl-whatis">
                    <div class="sl-whatis-inn menu-inn attach-mv">
                        <div class="sl-whatis-inn-ttl subpage-ttl menu-inn-ttl">
                            <h1 class="under-line menu-inn-ttl__inner">What is Thermagen?</h1>
                        </div>
                        <div class="sl-whatis-inn-content">
                            <div class="fl-style02 d-fl align-center">
                                <div class="image">
                                    <img loading="lazy" class="pc"
                                        src="<?php echo get_template_directory_uri(); ?>/img/sub-whatsarmagen-img01.png"
                                        alt="サーマジェンとは">
                                    <img loading="lazy" class="sp"
                                        src="<?php echo get_template_directory_uri(); ?>/img/sub-whatsarmagen-img01-sp.png"
                                        alt="サーマジェンとは">
                                </div>
                                <div class="content">
                                    <p>Thermagen (RF) is considered an advanced version of Thermacool.</p>
                                </div>
                            </div>
                            <div class="pg-text">
                                <p></p>
                                <p>Thermagen is recommended for</p>
                            </div>
                            <div class="check-list">
                                <ul class="check-list-wr">
                                    <li>Those concerned about sagging skin and sagging pores</li>
                                    <li>Those who feel that their face is larger than it used to be.</li>
                                    <li>Those with voluminous and sagging cheeks</li>
                                    <li>Those who feel that their skin has lost its texture</li>
                                    <li>Those who do not want to be found out</li>
                                </ul>
                            </div>
                            <div class="pg-text">
                                <p>By adiofrequency waves, collagen production is stimulated and the skin is tightened.
                                    Sagging and wrinkles are improved and a lifting effect can be expected. By utilizing
                                    the deep penetration of radiofrequency waves, the collagen in the dermis layer
                                    increases, which not only causes sagging, but also tightens the skin by contracting
                                    the fiber walls of the subcutaneous tissue due to heat, thereby improving the
                                    appearance of facial lines. This is a scalpel-free sagging treatment that does not
                                    cause pain or irritation, and there is no downtime, so it can be easily performed.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="benefits" class="sl-benefits">
                    <div class="menu-inn sl-benefits-inn">
                        <div class="sl-benefits-inn-ttl subpage-ttl menu-inn-ttl">
                            <h2 class="under-line">Effects of Thermagen <br class="sp"><small>(Symptoms that can be
                                    improved)</small></h2>
                        </div>
                        <div class="sl-benefits-inn-content">
                            <div class="pg-text">
                                <p>Thermagen (RF) is a procedure that has both primary and secondary effects. The
                                    primary effect is that the skin becomes firmer and more elastic. This effect lasts
                                    from one to two weeks after irradiation.After that, the secondary effect is an
                                    increase in collagen inside the skin. This effect will gradually appear over a
                                    period of about 3 months. To maintain the effect of the treatment
                                    <br>To maintain the effect of the treatment, it is recommended to have Thermagen
                                    once every two to three months, or once a month for the area around the mouth, which
                                    tends to sag due to fat loss.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="differences" class="sl-differences">
                    <div class="menu-inn sl-differences-inn">
                        <div class="sl-differences-inn-ttl subpage-ttl menu-inn-ttl">
                            <h2 class="under-line">Difference between HIFU and Thermagen</h2>
                        </div>
                        <div class="sl-differences-inn-content">
                            <div class="image-center">
                                <h3>HIFU is good at lifting and Thermagen is good at tightening</h3>
                                <div class="d-fl">
                                    <figure>
                                        <figcaption class="sp">サーマジェン</figcaption>
                                        <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/differences/sarmagen-differences01.png"
                                            alt="HIFUとサーマジェンの違い">
                                    </figure>
                                    <figure>
                                        <figcaption class="sp">HIFU</figcaption>
                                        <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/differences/sarmagen-differences02.png"
                                            alt="HIFUとサーマジェンの違い">
                                    </figure>
                                </div>
                            </div>
                            <div class="disc-list disc--list">
                                <ul class="disc-list-wr">
                                    <li>Thermagen and HIFU are both effective treatments for sagging, tightening</li>
                                </ul>
                            </div>
                            <div class="pg-text">
                                <p>
                                    The specific difference is which layer of the skin is targeted and irradiated with
                                    thermal energy. Thermagen and HIFU target different layers of the skin. Thermagen
                                    targets radiofrequency radiation from the dermis to the subcutaneous tissue, while
                                    HIFU targets the SMAS muscle layer, which is located deep within the skin. Because
                                    it acts on the SMAS fascia, which is the foundation that supports the skin, it
                                    raises the skin from the source of sagging.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="commit" class="sl-commit">
                    <div class="menu-inn sl-commit-inn">
                        <div class="sl-commit-inn-ttl subpage-ttl menu-inn-ttl">
                            <h2 class="under-line">LIAN clinic’s Thermagen</h2>
                        </div>
                        <div class="sl-commit-inn-content">
                            <div class="pg-text">
                                <p>
                                    We change the way we apply irradiation depending on the condition of the customer's
                                    sagging and the parts of the face.
                                    <br>For example, for the fat that is voluminous while drooping and the lines from
                                    the ears to the cheeks, we irradiate with an awareness of the contraction vectors.
                                    On the other hand, nasolabial folds and marionette lines are irradiated in a zonal
                                    fashion. Similarly, the face line, laugh lines, and chin are irradiated with an
                                    awareness of tightening by collagen contraction.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="what4lift" class="sl-what4lift">
                    <div class="menu-inn sl-what4lift-inn">
                        <div class="sl-what4lift-inn-ttl subpage-ttl menu-inn-ttl">
                            <h2 class="under-line">What is Four Lift Thermagen?</h2>
                        </div>
                        <div class="sl-what4lift-inn-content">
                            <div class="what4lift-fl d-fl">
                                <figure class="image">
                                    <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/what4lift-img.png"
                                        alt="リアンクリニックの4リフトサーマジェンとは">
                                </figure>
                                <div class="content">
                                    <p>The Four Lift Thermagen tightens the following four areas using LIAN’s unique
                                        irradiation method.</p>
                                    <p>An important facial part that determines the impression of your face are
                                        below<br>
                                        ▶︎forehead<br>
                                        ▶︎Eyes<br>
                                        ▶︎Around lip<br>
                                        ▶︎Cheeks</p>
                                    <p><strong><span class="color-01">LIAN’s Four Lift Thermagen" focuses on these four
                                                parts to tighten and lift them.</span></strong><br>
                                        The new generation of sagging skin treatment is less painful, yet effective.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="state" class="sl-state">
                    <div class="menu-inn sl-state-inn">
                        <div class="sl-state-inn-ttl subpage-ttl menu-inn-ttl">
                            <h2 class="under-line">Video of Thremagen</h2>
                        </div>
                        <div class="sl-state-inn-content video-style01">
                            <iframe width="100%" height="100%" src="https://www.youtube.com/embed/3A0Cz-ZMCYA?enablejsapi=1"
                                title="YouTube video player" frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
                <div id="case" class="sl-case">
                    <div class="menu-inn sl-case-inn">
                        <div class="sl-case-inn-ttl subpage-ttl menu-inn-ttl">
                            <h2 class="under-line">Case Photo</h2>
                        </div>
                        <div class="sl-case-inn-content">
                            <div class="fl-style04">
                                <article>
                                    <a class="fl-style04-fl d-fl" target="_blank" rel="nofollow noreferrer">
                                        <figure>
                                            <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/case/sarmagen-case01.png"
                                                alt="症例写真">
                                        </figure>
                                        <div class="content">
                                            <dl>
                                                <dt>Treatment</dt>
                                                <dd>Thermagen</dd>
                                            </dl>
                                            <dl>
                                                <dt>Explanation of treatment</dt>
                                                <dd>Radiofrequency sagging treatment</dd>
                                            </dl>
                                            <dl>
                                                <dt>Side effects</dt>
                                                <dd>Burn,Swelling</dd>
                                            </dl>
                                            <dl>
                                                <dt>Price</dt>
                                                <dd>¥ 39,600 〜</dd>
                                            </dl>
                                        </div>
                                    </a>
                                </article>
                                <article>
                                    <a class="fl-style04-fl d-fl" target="_blank" rel="nofollow noreferrer">
                                        <figure>
                                            <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/case/sarmagen-case02.png"
                                                alt="症例写真">
                                        </figure>
                                        <div class="content">
                                            <dl>
                                                <dt>Treatment</dt>
                                                <dd>Thermagen</dd>
                                            </dl>
                                            <dl>
                                                <dt>Explanation of treatment</dt>
                                                <dd>Radiofrequency sagging treatment</dd>
                                            </dl>
                                            <dl>
                                                <dt>Side effects</dt>
                                                <dd>Burn,Swelling</dd>
                                            </dl>
                                            <dl>
                                                <dt>Price</dt>
                                                <dd>¥ 39,600 〜</dd>
                                            </dl>
                                        </div>
                                    </a>
                                </article>
                            </div>

                        </div>
                    </div>
                </div>
                <div id="treatment" class="sl-treatment">
                    <div class="menu-inn sl-treatment-inn">
                        <div class="sl-treatment-inn-ttl subpage-ttl menu-inn-ttl">
                            <h2 class="under-line">When combined Treatment that is even more effective</h2>
                        </div>
                        <div class="sl-treatment-inn-content">
                            <div class="fl-style02 d-fl">
                                <div class="image">
                                    <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/treatment/treatment01.png"
                                        alt="HIFU">
                                </div>
                                <div class="content content01">
                                    <h3>HIFU</h3>
                                    <p>The combination of HIFU, which targets deeper layers than Thermagen, can be used
                                        to achieve a smaller face in addition to the tightening effect of Thermagen.</p>
                                </div>
                            </div>
                            <div class="fl-style02 d-fl row-reverse">
                                <div class="image">
                                    <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/treatment/treatment04.png"
                                        alt="Shopping Thread">
                                </div>
                                <div class="content content01">
                                    <h3>Shopping Thread</h3>
                                    <p>The process of absorption into the skin (about 6-8 months) continues to stimulate
                                        the subcutaneous tissue, resulting in wound healing effects and long-term
                                        collagen production, which can be expected to
                                        <strong>improve sagging, improve skin quality and elasticity through new cells,
                                            and improve pores</strong>.
                                    </p>
                                </div>
                            </div>
                            <div class="fl-style02 d-fl">
                                <div class="image">
                                    <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/treatment/treatment05.png"
                                        alt="Botox Lift">
                                </div>
                                <div class="content content01">
                                    <h3>Botox Lift</h3>
                                    <p>Shallow injections of Botox into the neck muscles (broad cervical muscles) and
                                        face line muscles (pterygoid muscles) will lift the neck and face line, giving a
                                        sharp appearance.</p>
                                </div>
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
                                <h3 class="price-ttl"><span>Thermagen</span></h3>
                                <div class="price-list">
                                    <div class="d-fl price-list-wr">
                                        <div class="price-list-wr-l">
                                            <h3>Cheeks</h3>
                                            <ul>
                                                <li class="d-fl">
                                                    <p>One time</p>
                                                    <p class="dash-line"></p>
                                                    <p>¥39,600</p>
                                                </li>
                                                <!--
                                                <li class="d-fl">
                                                    <p>Three times</p>
                                                    <p class="dash-line"></p>
                                                    <p>¥99,000</p>
                                                </li>-->
                                            </ul>
                                        </div>
                                        <div class="price-list-wr-l">
                                            <h3>Four Lift Thermagen + chin</h3>
                                            <ul>
                                                <li class="d-fl">
                                                    <p>One time</p>
                                                    <p class="dash-line"></p>
                                                    <p>¥52,800</p>
                                                </li>
                                                <!--
                                                <li class="d-fl">
                                                    <p>Three times</p>
                                                    <p class="dash-line"></p>
                                                    <p>¥143,000</p>
                                                </li>-->
                                            </ul>
                                        </div>
                                    </div>
                                    <p class="price-list-warn pc">※Tax included<br>Translation fee will be charged in
                                        addition to the treatment fee.</p>
                                </div>
                            </div>
                            <p class="price-list-warn sp">※Tax included<br>Translation fee will be charged in addition
                                to the treatment fee.</p>
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
                  if ($contactTxt01 != '') : ?>
                                <h3><span class="l-slash">\ </span> <?php echo $contactTxt01; ?><br
                                        class="sp" /><?php echo $contactTxt02; ?> <span class="r-slash"> /</span></h3>
                                <?php endif; ?>
                                <div class="h-line"></div>
                                <a href="https://reservation.medical-force.com/c/2d96f6933ed14b2a8e271863a7f0b813"
                                    target="_blank" rel="nofollow noreferrer">
                                    <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/reservation-btn01.png"
                                        alt="">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="precautions" class="sl-precautions">
                    <div class="menu-inn sl-precautions-inn">
                        <div class="sl-precautions-inn-ttl subpage-ttl menu-inn-ttl">
                            <h2 class="under-line">Thermagene precautions</h2>
                        </div>
                        <div class="sl-precautions-inn-content">
                            <div class="check-list">
                                <ul class="check-list-wr">
                                    <li>There may be some redness, but this will improve within a few hours or the next
                                        day.</li>
                                    <li>Makeup can be applied after treatment.</li>
                                    <li>Bathing and showering are not a problem, but please avoid strenuous exercise on
                                        the same day.</li>
                                    <li>Please avoid drinking alcohol on that day.</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <?php $show = CFS()->get('faq_show');
          if ($show) : ?>
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
                        'terms' => 'sarmagen_cat'
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
        <?php } else { ?>
        <div id="mv" class="sl-mv">
            <div class="d-fl sl-mv-inn">
                <h1 class="sl-mv-inn-ttl">
                    <div class="pc">
                        <svg xmlns="http://www.w3.org/2000/svg" width="420" height="216" viewBox="0 0 420 216">
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
                            <text id="サーマジェンあなたと美しさをつなぐクリニック" data-name="サーマジェンあなたと美しさをつなぐクリニック" class="cls-mv-1"
                                transform="translate(0 35)">
                                <tspan x="0" y="0">サーマジェン</tspan>
                                <tspan x="0" y="60">あなたと</tspan>
                                <tspan x="0" y="120">美しさをつなぐ</tspan>
                                <tspan x="0" y="180">クリニック</tspan>
                            </text>
                        </svg>
                    </div>
                    <div class="sp">
                        <svg xmlns="http://www.w3.org/2000/svg" width="300" height="222" viewBox="0 0 300 222">
                            <defs>
                                <style>
                                .cls-1 {
                                    fill: #1B294D;
                                    font-size: 24px;
                                    font-family: HiraMinPro-W3, Hiragino Mincho Pro, serif;
                                    letter-spacing: 0.2em;
                                }
                                </style>
                            </defs>
                            <text id="サーマジェンあなたと美しさをつなぐクリニック" data-name="サーマジェンあなたと美しさをつなぐクリニック" class="cls-1" transform="translate(0 35)">
                                <tspan x="0" y="0">サーマジェン</tspan>
                                <tspan x="0" y="60">あなたと</tspan>
                                <tspan x="0" y="120">美しさをつなぐ</tspan>
                                <tspan x="0" y="180">クリニック</tspan>
                            </text>
                        </svg>
                    </div>
                </h1>
                <figure class="sp-right">
                    <img loading="lazy" class="pc" src="<?php echo get_template_directory_uri(); ?>/img/makeup/sub-mv-img.png"
                        alt="あなたの“似合う”が 見つかるアートメイク">
                    <img loading="lazy" class="sp" src="<?php echo get_template_directory_uri(); ?>/img/makeup/sub-mv-sp.png"
                        alt="あなたの“似合う”が 見つかるアートメイク">
                </figure>
            </div>
        </div>
        <div id="menu" class="sl-menu menu-sarmagen">
            <div class="sl-menu-content">
                <div id="whatis" class="sl-whatis">
                    <div class="sl-whatis-inn menu-inn attach-mv">
                        <div class="sl-whatis-inn-ttl subpage-ttl menu-inn-ttl">
                            <h2 class="under-line menu-inn-ttl__inner">サーマジェンとは</h2>
                        </div>
                        <div class="sl-whatis-inn-content">
                            <div class="fl-style02 d-fl align-center">
                                <div class="image">
                                    <img loading="lazy" class="pc"
                                        src="<?php echo get_template_directory_uri(); ?>/img/sub-whatsarmagen-img01.png"
                                        alt="サーマジェンとは">
                                    <img loading="lazy" class="sp"
                                        src="<?php echo get_template_directory_uri(); ?>/img/sub-whatsarmagen-img01-sp.png"
                                        alt="サーマジェンとは">
                                </div>
                                <div class="content">
                                    <p class="pad-b40">サーマジェンとは、RF（ラジオ波）と呼ばれる高周波レーザーを肌に照射し、たるみ・シワの改善を目指す美容治療です。</p>
                                    <p>メスを使わない点や、痛みや腫れが少ないため、手軽にお顔・目元を引き締めしたい方におすすめの治療法です。</p>
                                    <p>サーマジェン（RF）は、サーマクールの進化版と言われています。</p>
                                </div>
                            </div>
                            <p class="reference">参照：<a href="https://www.mdpi.com/1422-0067/23/6/2993" target="_blank" class="txtblue">Oh S, Int J Mol Sci, 2022</a></p>
                            <!--<p class="note-txt">
                                メスを使わずに行える点や、ダウンタイムがほとんどないことから手軽に引き締めケアをしたい方におすすめの治療法です。<br>サーマジェン（RF）は、サーマクールの進化版と言われています。
                            </p>-->
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
                                <p>サーマジェンはモノポーラの高周波で引き締めを行う熱治療です。表皮から脂肪浅層に熱が加わり、皮膚の引き締め・弾力・肌質改善に加えて、脂肪の立体的な引き締めを期待できます。お痛みが少ないので、ハイフの痛みが苦手な方や、たるみ治療が初めての方にはピッタリな施術となります。</p>
                                </div>
                                <?php echo get_template_part('template-parts/sv-guidelines'); ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="recommend" class="sl-recommend">
                    <div class="menu-inn sl-recommend-inn">
                        <div class="sl-recommend-inn-ttl subpage-ttl menu-inn-ttl">
                            <h2 class="under-line">サーマジェンは<br class="sp">こんな方におすすめ</h2>
                        </div>
                        <div class="sl-recommend-inn-content">
                            <div class="check-list">
                                <ul class="check-list-wr">
                                    <li>皮膚のたるみ、<br class="sp">たるみ毛穴が気になる方</li>
                                    <li>昔に比べ顔が大きくなったと感じる方</li>
                                    <li>頬にボリュームがあり、<br class="sp">たるみが気になる方</li>
                                    <li>肌のキメがなくなってきたと感じる方</li>
                                    <li>バレたくない方</li>
                                </ul>
                            </div>
                        </div>
                        <!-- newdesign -->
                    </div>
                </div>
                <div id="benefits" class="sl-benefits">
                    <div class="menu-inn sl-benefits-inn">
                        <div class="sl-benefits-inn-ttl subpage-ttl menu-inn-ttl">
                            <h2 class="under-line">サーマジェンの効果<br class="sp"><small>（改善できる症状）</small></h2>
                        </div>
                        <div class="sl-benefits-inn-content">
                            <div class="pg-text">
                                <p>サーマジェンで改善できる症状は次の通りです。</p>
                            </div>
                            <div class="check-list mag-t28">
                                <ul class="check-list-wr">
                                    <li>肌のたるみや毛穴</li>
                                    <li>フェイスラインのもたつき</li>
                                    <li>肌のキメ不足</li>
                                    <li>下膨れ顔や二重あごなど</li>
                                </ul>
                            </div>
                            <div class="pg-text mag-t30">
                                <p>サーマジェンは2段階で効果が実感できる治療です。<br><br class="pc">
                                    一次効果として、脂肪浅層の間質を熱で引き締めることによる口周りやフェイスラインのリフトアップ効果が見込めます。（直後〜1週間）<br>
                                    二次効果としては、真皮内に熱が加わることでヒートショックプロテインが放出されることでコラーゲンが増え、肌のハリやトーンアップ効果を実感できます。<br><br class="pc">
                                    サーマジェンの効果を持続させるには2〜3ヶ月に1回の施術がおすすめです。頬や口周りなど、脂肪が垂れ下がってもたつきやすい部位は1ヶ月に1回を目安に治療を受けるのがいいでしょう。
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="differences" class="sl-differences">
                    <div class="menu-inn sl-differences-inn">
                        <div class="sl-differences-inn-ttl ng-margin subpage-ttl menu-inn-ttl">
                            <h2 class="under-line">HIFUとサーマジェンの違い</h2>
                        </div>
                        <div class="sl-differences-inn-content">
                            <div class="image-center">
                                <strong>HIFUは引き上げ、サーマジェンは引き締めが得意</strong>
                                <div class="d-fl">
                                    <figure>
                                    <figcaption class="sp">【HIFU】</figcaption>
                                        <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/differences/sarmagen-differences02.png"
                                            alt="HIFUとサーマジェンの違い">
                                    </figure>
                                    <figure>
                                    <figcaption class="sp">【サーマジェン】</figcaption>
                                        <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/differences/sarmagen-differences01.png"
                                            alt="HIFUとサーマジェンの違い">
                                    </figure>
                                </div>
                            </div>
                            <div class="pg-text">
                                <p>
                                    サーマジェンとHIFUはどちらもたるみや引き締め等の効果がある治療です。<br><br class="sp">
                                    具体的な違いとしては、皮膚のどの層をターゲットにして熱エネルギーを照射するかという点です。サーマジェンとHIFUはそれぞれ作用する層が異なります。サーマジェンのターゲットは、真皮から皮下組織に対して高周波を照射し、HIFUのターゲットは、肌の奥深くにあるSMAS筋層です。肌を支える土台であるSMAS筋膜に作用するため、たるみのもとから引き上げます。
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="benefits" class="sl-benefits">
                    <div class="menu-inn sl-benefits-inn">
                        <div class="sl-benefits-inn-ttl subpage-ttl menu-inn-ttl">
                            <h2 class="under-line">サーマジェンの特徴</h2>
                        </div>
                        <div class="sl-benefits-inn-content">
                            <div class="fl-style01">
                                <article class="fl-style01-item">
                                    <h3 class="fl-style01-item-ttl"><span class="list-no">01</span>小顔・顔痩せ効果が期待できる</h3>
                                    <div class="d-fl fl-style01-item-content">
                                        <figure class="fl-style01-sarmagen">
                                            <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/sarmagen/sarmagen_01.png"
                                                alt="小顔・顔痩せ効果が期待できる">
                                        </figure>
                                        <div class="fl-style01-item-content-txt">
                                            <p class="fs-12 sp">治療方法：2リフトサーマジェン（頬・フェイスライン）<br>
                                                費用：39,600円（税込）<br>
                                                リスク：熱傷・発赤、腫脹など
                                            </p>
                                            <p>
                                                サーマジェンによって皮膚内部のコラーゲン生成が促されると、ハリや弾力が上がります。<br>
                                                肌がリフトアップするとフェイスラインのもたつきが解消され、小顔や顔痩せ効果も期待できます。施術後は「痩せた？」と言われることがあるほど、見た目の変化がわかりやすい治療です。
                                            </p>
                                            <p class="md-txt01">また高周波の熱が皮膚の深部まで到達することから、皮膚の厚い男性も効果を実感できます。</p>
                                            <p class="fs-12 pc">治療方法：2リフトサーマジェン（頬・フェイスライン）<br>
                                                費用：39,600円（税込）<br>
                                                リスク：熱傷・発赤、腫脹など
                                            </p>
                                        </div>
                                    </div>
                                </article>
                                <article class="fl-style01-item">
                                    <h3 class="fl-style01-item-ttl"><span
                                            class="list-no">02</span>サーマクールよりもリーズナブルに治療が受けられる</h3>
                                    <div class="d-fl fl-style01-item-content">
                                        <figure class="fl-style01-sarmagen">
                                            <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/sarmagen/sarmagen_02.png"
                                                alt="サーマクールよりもリーズナブルに治療が受けられる">
                                        </figure>
                                        <div class="fl-style01-item-content-txt">
                                            <p>サーマジェンとよく比較される治療にサーマクール※がありますが、費用はサーマジェンの方がリーズナブルです。両者の費用を比較すると
                                                <span
                                                    class="color-01"><strong>サーマジェンは1回40,000〜60,000円、サーマクールは80,000〜200,000円</strong></span>が相場です。<br>
                                                ※RFで皮膚内部の筋肉に近い脂肪層にアプローチする治療（サーマジェンは肌表面に近い脂肪層にアプローチ）
                                            </p>
                                        </div>
                                    </div>
                                </article>
                                <article class="fl-style01-item">
                                    <h3 class="fl-style01-item-ttl"><span
                                            class="list-no">03</span>HIFU（ハイフ）と併用でより高い効果が期待できる</h3>
                                    <div class="d-fl fl-style01-item-content">
                                        <figure class="fl-style01-sarmagen">
                                            <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/sarmagen/sarmagen_03.png"
                                                alt="HIFU（ハイフ）">
                                        </figure>
                                        <div class="fl-style01-item-content-txt">
                                            <p class="fs-12 sp">
                                                治療方法：ハイサーマ（ハイフ＋4リフトサーマジェン）<br>
                                                費用：99,000円（税込）<br>
                                                リスク：熱傷・発赤、腫脹など
                                            </p>
                                            <p>サーマジェンとHIFUはどちらも、シワやたるみ改善に有効な治療です。<br>
                                                サーマジェンは真皮から皮下組織に作用、HIFUは皮膚を支えるSMAS筋膜に作用することで相乗効果が期待できます。アプローチはそれぞれアプローチは異なりますが、両者を組み合わせることで肌の変化を実感しやすくなります。
                                            </p>
                                            <p class="fs-12 fs-12--02 pc">
                                                治療方法：ハイサーマ（ハイフ＋4リフトサーマジェン）<br>
                                                費用：99,000円（税込）<br>
                                                リスク：熱傷・発赤、腫脹など
                                            </p>
                                        </div>
                                    </div>
                                </article>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="commit" class="sl-commit">
                    <div class="menu-inn sl-commit-inn">
                        <div class="sl-commit-inn-ttl subpage-ttl menu-inn-ttl">
                            <h2 class="under-line">リアンクリニックのこだわり</h2>
                        </div>
                        <div class="sl-commit-inn-content">
                            <div class="pg-text">
                                <p>お客様のたるみの具合や、顔のパーツによって照射のあて方を変えております。<br>
                                    例えば、下垂しながらボリュームが出る脂肪と、耳から頬にかけてのラインに関しては、収縮のベクトルを意識した照射をしていきます。<br>
                                    一方で、鼻唇溝やマリオネットラインには、帯状に照射していきます。同様にフェイスライン、ほうれい線、顎はコラーゲン収縮による引き締めも意識して照射をいたします。</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="what4lift" class="sl-what4lift">
                    <div class="menu-inn sl-what4lift-inn">
                        <div class="sl-what4lift-inn-ttl subpage-ttl menu-inn-ttl">
                            <h2 class="under-line">リアンクリニックの<br class="sp">4リフトサーマジェンとは</h2>
                        </div>
                        <div class="sl-what4lift-inn-content">
                            <div class="what4lift-fl d-fl">
                                <figure class="image">
                                    <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/what4lift-img.png"
                                        alt="リアンクリニックの4リフトサーマジェンとは">
                                </figure>
                                <div class="content">
                                    <p>リアンの独自の照射方法によって、下記の４つの部位を引き締めるものが、4リフトサーマジェンです。</p>
                                    <p>お顔の印象を決める大切なパーツ、それは<br>
                                        ▶︎額<br>
                                        ▶︎目元<br>
                                        ▶︎口元<br>
                                        ▶︎頬</p>
                                    <p>この4つのパーツに重点を置き、引き締めかつリフティングしていくのがリアンの【4リフトサーマジェン】です。<br>
                                        新世代のたるみ治療は痛みが少なく、かつ効果をしっかり出すことが可能です</p>
                                </div>
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
                            <iframe width="100%" height="100%" src="https://www.youtube.com/embed/3A0Cz-ZMCYA"
                                title="YouTube video player" frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                allowfullscreen></iframe>
                        </div>
                    </div>
                </div>

                    <div id="case" class="sl-case">
                        <div class="menu-inn sl-case-inn">
                            <div class="sl-case-inn-ttl subpage-ttl menu-inn-ttl">
                                <h2 class="under-line">症例写真</h2>
                            </div>
                            <div class="sl-case-inn-content menu-case">
                                <div class="fl-style04">
                                    <article>
                                        <a class="fl-style04-fl d-fl" target="_blank" rel="nofollow noreferrer">
                                            <figure>
                                                <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/case/sarmagen-case01.png"
                                                    alt="症例写真">
                                            </figure>
                                            <div class="content">
                                                <dl>
                                                    <dt>施術名</dt>
                                                    <dd>4リフトサーマジェン</dd>
                                                </dl>
                                                <dl>
                                                    <dt>施術の説明</dt>
                                                    <dd>ラジオ波によるたるみ治療</dd>
                                                </dl>
                                                <dl>
                                                    <dt>施術の副作用(リスク)</dt>
                                                    <dd>火傷、腫脹</dd>
                                                </dl>
                                                <dl>
                                                    <dt>施術の価格</dt>
                                                    <dd>1回 ¥ 52,800</dd>
                                                </dl>
                                            </div>
                                        </a>
                                    </article>
                                    <article>
                                        <a class="fl-style04-fl d-fl" target="_blank" rel="nofollow noreferrer">
                                            <figure>
                                                <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/case/sarmagen-case02.png"
                                                    alt="症例写真">
                                            </figure>
                                            <div class="content">
                                                <dl>
                                                    <dt>施術名</dt>
                                                    <dd>4リフトサーマジェン</dd>
                                                </dl>
                                                <dl>
                                                    <dt>施術の説明</dt>
                                                    <dd>ラジオ波によるたるみ治療</dd>
                                                </dl>
                                                <dl>
                                                    <dt>施術の副作用(リスク)</dt>
                                                    <dd>火傷、腫脹</dd>
                                                </dl>
                                                <dl>
                                                    <dt>施術の価格</dt>
                                                    <dd>1回 ¥ 52,800</dd>
                                                </dl>
                                            </div>
                                        </a>
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
                                    <h3 class="price-ttl"><span>サーマジェン</span></h3>
                                    <div class="price-list">
                                        <div class="d-fl price-list-wr">
                                            <!--
                                            <div class="price-list-wr-l">
                                                <h4>頬</h4>
                                                <ul>
                                                    <li class="d-fl">
                                                        <p>1回</p>
                                                        <p class="dash-line"></p>
                                                        <p>¥39,600</p>
                                                    </li>
                                                    <li class="d-fl">
                                                        <p>3回</p>
                                                        <p class="dash-line"></p>
                                                        <p>¥99,000</p>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="price-list-wr-l">
                                                <h4>全顔(頬＋目元＋フェイスライン)＋顎下</h4>
                                                <ul>
                                                    <li class="d-fl">
                                                        <p>1回</p>
                                                        <p class="dash-line"></p>
                                                        <p>¥52,800</p>
                                                    </li>
                                                    <li class="d-fl">
                                                        <p>3回</p>
                                                        <p class="dash-line"></p>
                                                        <p>¥143,000</p>
                                                    </li>
                                                </ul>
                                            </div>
                                            -->
                                            <div class="price-list-wr-l">
                                                <h4>4リフト【額+頬＋目元＋フェイスライン】顎下含む</h4>
                                                <ul>
                                                    <li class="d-fl">
                                                        <p>1回</p>
                                                        <p class="dash-line"></p>
                                                        <p>¥52,800</p>
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

                    <div id="procedure" class="sl-procedure">
                        <div class="sl-procedure-inn menu-inn">
                            <div class="sl-procedure-inn-ttl subpage-ttl menu-inn-ttl">
                                <h2 class="under-line">サーマジェンの治療の流れ</h2>
                            </div>
                            <div class="sl-procedure-inn-content pro-list">
                                <div class="pro-list-num"><span>01</span></div>
                                <div class="d-fl pro-list-post">
                                    <div class="h-line pc"></div>
                                    <article class="d-fl">
                                        <h3 class="sp"><span>01.</span>ご予約</h3>
                                        <figure>
                                            <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/procedure/flow_01.png"
                                                alt="ご予約">
                                        </figure>
                                        <div>
                                            <h3 class="pc">ご予約</h3>
                                            <p>まずは<a href="<?php echo home_url(); ?>/inquiry/">お問い合わせフォーム</a>、<a href="https://lin.ee/U5tTSaw" target="_blank">LINE予約</a>または<a href="tel:0334705678">お電話</a>よりご予約ください。</p>
                                        </div>
                                    </article>
                                </div>
                                <div class="pro-list-num">02</div>
                                <div class="d-fl pro-list-post">
                                    <div class="h-line pc"></div>
                                    <article class="d-fl">
                                        <h3 class="sp"><span>02.</span>カウンセリング</h3>
                                        <figure>
                                            <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/procedure/flow_02.png"
                                                alt="カウンセリング">
                                        </figure>
                                        <div>
                                            <h3 class="pc">カウンセリング</h3>
                                            <p>お悩みをヒアリングし、効果的な施術方法をご提案します。<br>リスク、料金のご説明もカウンセリングでお話しいたします。</p>
                                        </div>
                                    </article>
                                </div>
                                <div class="pro-list-num">03</div>
                                <div class="d-fl pro-list-post">
                                    <div class="h-line pc"></div>
                                    <article class="d-fl">
                                        <h3 class="sp"><span>03.</span>洗顔・クレンジング</h3>
                                        <figure>
                                            <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/procedure/flow_03.png"
                                                alt="洗顔・クレンジング">
                                        </figure>
                                        <div>
                                            <h3 class="pc">洗顔・クレンジング</h3>
                                            <p>施術前にメイクを落としていただきます。洗顔料やクレンジングオイル、タオルなどはクリニックにてご用意しております。</p>
                                        </div>
                                    </article>
                                </div>
                                <div class="pro-list-num">04</div>
                                <div class="d-fl pro-list-post">
                                    <div class="h-line pc"></div>
                                    <article class="d-fl">
                                        <h3 class="sp"><span>04.</span>照射</h3>
                                        <figure>
                                            <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/procedure/sarmagen_flow_04.png"
                                                alt="照射">
                                        </figure>
                                        <div>
                                            <h3 class="pc">照射</h3>
                                            <p>照射する部分に専用ジェルを塗り、角度を変えながら照射していきます。<br>2リフトサーマジェンは30分ほど、4リフトサーマジェンの場合は45分ほどで完了します。</p>
                                        </div>
                                    </article>
                                </div>
                                <div class="pro-list-num">05</div>
                                <div class="d-fl pro-list-post">
                                    <div class="h-line pc"></div>
                                    <article class="d-fl">
                                        <h3 class="sp"><span>05.</span>終了</h3>
                                        <figure>
                                            <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/procedure/sarmagen_flow_05.png"
                                                alt="終了">
                                        </figure>
                                        <div>
                                            <h3 class="pc">終了</h3>
                                            <p>ジェルを拭き取り終了です。<br>施術当日の洗顔はOKですが、メイクや入浴はお控えください。</p>
                                        </div>
                                    </article>
                                </div>
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
                                        <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/treatment/treatment01.png"
                                            alt="HIFU">
                                    </div>
                                    <div class="content content01">
                                        <h3>HIFU</h3>
                                        <p>サーマジェンよりも深層がターゲットである、HIFUを併用することで、サーマジェンの引き締め効果に加えて、小顔効果を期待できます。HIFUとサーマジェンの併用治療である「ハイサーマ」という治療も行っているのでおすすめです。
                                        </p>
                                    </div>
                                </div>
                                <div class="fl-style02 d-fl row-reverse">
                                    <div class="image">
                                        <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/treatment/treatment04.png"
                                            alt="ショートスレッド">
                                    </div>
                                    <div class="content content01">
                                        <h3>ショートスレッド</h3>
                                        <p>皮膚に吸収される（約６～８ヶ月）過程で皮下組織に刺激を与え続け、創傷治癒効果をもたらし長期的なコラーゲン生成により、【たるみ改善、新細胞による肌質の向上や弾力アップ、毛穴改善】が見込めます。
                                        </p>
                                    </div>
                                </div>
                                <div class="fl-style02 d-fl">
                                    <div class="image">
                                        <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/treatment/treatment05.png"
                                            alt="ボトックスリフト">
                                    </div>
                                    <div class="content content01">
                                        <h3>ボトックスリフト</h3>
                                        <p>首の筋肉 (広頸筋)とフェイスラインの筋肉 (口角下垂筋)
                                            に浅くボトックスを注射することで、首周りからフェイスラインが引き上がりシャープな印象となります。
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="recommend" class="sl-recommend">
                        <div class="menu-inn sl-recommend-inn">
                            <div class="sl-recommend-inn-ttl subpage-ttl menu-inn-ttl">
                                <h2 class="under-line">たるみ別 おすすめの<br class="sp">治療方法</h2>
                            </div>
                            <div class="pg-text mb-35">
                                <p>ポテンツァは痛みが少なくたるみ治療ができる人気の施術ですが、たるみ治療にはさまざまな種類があるため、どれを選ぶべきか悩む方は多いでしょう。<br>以下にたるみの症状別におすすめの治療方法をまとめましたので、治療方法を検討する際の参考にしてください。
                                </p>
                            </div>
                            <div class="sl-recommend-inn-content">
                                <h3 class="check-list-ttl">老化によるたるみ</h3>
                                <div class="check-list mt-15">
                                    <ul class="check-list-wr">
                                        <li><a href="<?= home_url() ?>/services/potenza/">ポテンツァ</a></li>
                                        <li><a href="<?= home_url() ?>/services/sarmagen/">サーマジェン</a></li>
                                        <li><a href="<?= home_url() ?>/services/hifu/">HIFU</a></li>
                                        <li><a href="<?= home_url() ?>/services/botox/">ボトックスリフト</a></li>
                                        <li><a href="<?= home_url() ?>/services/hyaluronic/">ヒアルロン酸注入</a></li>
                                        <li><a href="<?= home_url() ?>/services/thread/">ショートスレッド</a></li>
                                    </ul>
                                </div>
                            </div>
                            <!-- newdesign -->
                            <div class="sl-recommend-inn-content">
                                <h3 class="check-list-ttl">乾燥によるたるみ</h3>
                                <div class="check-list mt-15">
                                    <ul class="check-list-wr">
                                        <li><a href="<?= home_url() ?>/services/potenza/">ポテンツァ</a></li>
                                        <li><a href="<?= home_url() ?>/services/sarmagen/">サーマジェン</a></li>
                                        <li><a href="<?= home_url() ?>/services/hifu/">HIFU</a></li>
                                        <li><a href="<?= home_url() ?>/services/hyaluronic/">ヒアルロン酸注入</a></li>
                                    </ul>
                                </div>
                            </div>
                            <!-- newdesign -->
                            <div class="sl-recommend-inn-content">
                                <h3 class="check-list-ttl">太りor痩せたるみ</h3>
                                <div class="check-list mt-15">
                                    <ul class="check-list-wr">
                                        <li><a href="<?= home_url() ?>/services/potenza/">ポテンツァ</a></li>
                                        <li><a href="<?= home_url() ?>/services/sarmagen/">サーマジェン</a></li>
                                        <li><a href="<?= home_url() ?>/services/hifu/">HIFU</a></li>
                                        <li><a href="<?= home_url() ?>/services/botox/">ボトックスリフト</a></li>
                                        <li><a href="<?= home_url() ?>/services/hyaluronic/">ヒアルロン酸注入</a></li>
                                    </ul>
                                </div>
                            </div>
                            <!-- newdesign -->
                            <div class="sl-recommend-inn-content">
                                <h3 class="check-list-ttl">筋力低下によるたるみ</h3>
                                <div class="check-list mt-15">
                                    <ul class="check-list-wr">
                                        <li><a href="<?= home_url() ?>/services/potenza/">ポテンツァ</a></li>
                                        <li><a href="<?= home_url() ?>/services/sarmagen/">サーマジェン</a></li>
                                        <li><a href="<?= home_url() ?>/services/hifu/">HIFU</a></li>
                                        <li><a href="<?= home_url() ?>/services/botox/">ボトックスリフト</a></li>
                                        <li><a href="<?= home_url() ?>/services/thread/">ショートスレッド</a></li>
                                    </ul>
                                </div>
                            </div>
                            <!-- newdesign -->
                            <p class="recommend-btmtxt">
                                当院は患者様とのコミュニケーションに重きを置いております。<br>お悩みや予算に応じて治療計画をご提案しますので、たるみにお悩みの方はぜひ一度ご相談ください。</p>
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
                    if ($contactTxt01 != '') : ?>
                                    <h3><span class="l-slash">\ </span> <?php echo $contactTxt01; ?><br
                                            class="sp" /><?php echo $contactTxt02; ?> <span class="r-slash"> /</span>
                                    </h3>
                                    <?php endif; ?>
                                    <div class="h-line"></div>
                                    <a href="https://lin.ee/U5tTSaw" target="_blank" rel="nofollow noreferrer">
                                        <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/reservation-btn01.png"
                                            alt="">
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
                                <h2 class="under-line">サーマージェンの注意事項</h2>
                            </div>
                            <div class="sl-precautions-inn-content">
                                <div class="precautions-info">
                                    <h3>治療時間</h3>
                                    <p>30～60分<br>※部位や麻酔の有無によって異なります。</p>
                                </div>
                                <div class="precautions-info">
                                    <h3>治療頻度</h3>
                                    <p>2〜3ヶ月に1回程度。<br>※たるみやもたつきが気になる部分は1ヶ月に1回でもOK</p>
                                </div>
                                <div class="precautions-info">
                                    <h3>施術の痛み</h3>
                                    <p>個人差はありますがほとんど気にならない、または多少の熱感を感じる程度です。<br>※原則として麻酔は使用しません。</p>
                                </div>
                                <div class="precautions-info">
                                    <h3>副作用・ダウンタイム</h3>
                                    <p>赤みや腫れ、むくみが出る場合がありますが、数時間〜2日程度で落ち着くことがほとんどです。</p>
                                </div>
                                <div class="precautions-info">
                                    <h3>メイク</h3>
                                    <p>翌日（24時間後）から可能です。</p>
                                </div>
                                <div class="precautions-info">
                                    <h3>洗顔</h3>
                                    <p>当日から可能です。</p>
                                </div>
                                <div class="precautions-info">
                                    <h3>入浴</h3>
                                    <p>当日はシャワーのみ、入浴は翌日（24時間後）から可能です。</p>
                                </div>
                                <div class="precautions-info">
                                    <h3>運動</h3>
                                    <p>腫れや熱感が落ち着くまで、激しい運動はお控えください。</p>
                                </div>
                                <div class="precautions-info">
                                    <h3>飲酒</h3>
                                    <p>当日はお控えください。</p>
                                </div>
                                <div class="precautions-info">
                                    <h3>日焼け</h3>
                                    <p>施術後は紫外線の影響を受けやすいため、日焼け止めなどで紫外線対策をしてください。<br>※過度な日焼けをした場合はお肌が落ち着くまで治療はお控えください。</p>
                                </div>
                                <div class="precautions-info">
                                    <h3>治療を受けられない方</h3>
                                    <ul>
                                        <li>ペースメーカーまたは内部除細動器を装着している方</li>
                                        <li>治療部位に金属や金の糸が入っている方</li>
                                        <li>重篤な皮膚炎や感染症をお持ちの方</li>
                                        <li>重度糖尿病の方</li>
                                        <li>心疾患のある方</li>
                                        <li>皮膚に腫瘍がある方</li>
                                        <li>発熱している方</li>
                                        <li>ケロイド体質の方</li>
                                        <li>単純ヘルペス（口唇）ヘルペスの方</li>
                                        <li>妊娠中の方</li>
                                    </ul>
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
                                <?php
                                $args = array(
                                'tax_query' => array(
                                    array(
                                    'taxonomy' => 'faq_category',
                                    'field' => 'slug',
                                    'terms' => 'sarmagen_cat'
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
                    <div id="connection" class="">
                        <div class="menu-inn">
                            <div class="sl-connection-inn-ttl subpage-ttl menu-inn-ttl "><h2 class="under-line">たるみ・しわに効果的な治療</h2></div>
                            <div class="sl-connection-inn-content">

                            <?php get_template_part('template-parts/service/hifu'); ?>
                            <?php // get_template_part('template-parts/service/sarmagen'); ?>
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
            <?php } ?>
            <?php get_template_part('footer-company'); ?>
    </main>
</div>
<?php
get_footer();