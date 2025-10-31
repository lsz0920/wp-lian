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
    "name": "ポテンツァ(POTENZA)の施術の流れ",
    "description": "ポテンツァ(POTENZA)の施術の流れが分かる動画です。",
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
        <div id="menu" class="sl-menu menu-potenza">
            <div class="sl-menu-content">
                <div id="whatis" class="sl-whatis">
                    <div class="sl-whatis-inn menu-inn attach-mv">
                        <div class="sl-whatis-inn-ttl subpage-ttl menu-inn-ttl">
                            <h1 class="under-line menu-inn-ttl__inner">What is Potenza?</h1>
                        </div>
                        <div class="sl-whatis-inn-content">

                            <div class="d-fl whatis-detailup">
                                <figure>
                                    <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/makeup/cart+body_02.png"
                                        alt="POTENZAの機械">
                                </figure>
                                <div class="whatis-detailup-txt">
                                    <h3>Potenza is the latest microneedle RF that can treat various skin problems such
                                        as fine lines and wrinkles, pores, acne scars, red face, melasma, etc.</h3>
                                    <p>
                                        By inserting microscopic needles called microneedles (outer diameter 0.25mm:
                                        32G) into the skin and irradiating radiofrequency (RF) from the tips of the
                                        needles, heat energy is directly given to the dermal layer to stimulate the
                                        production of collagen,elastin and other skin beautifying ingredients and
                                        improve turnover.
                                    </p>
                                    <p>
                                        Due to the skin's natural wound-healing function, the dermal layer damaged by
                                        high-frequency heat stimulates the production of collagen and other substances
                                        in an attempt to repair the damage, thereby restructuring the skin structure.
                                    </p>
                                    <p>
                                        Potenza drills 49 holes per shot, through which radiofrequency (RF) waves flow.
                                    </p>
                                    <p>
                                        It rejuvenates the skin from the inside and <span
                                            class="color-02"><strong>improves various problems such as fine lines and
                                                wrinkles, acne scars, and open pores due to lack of
                                                elasticity.</strong></span>
                                    </p>
                                </div>
                            </div>
                            <div class="pg-text">
                                <p></p>
                                <p>POTENZA is recommended for</p>
                            </div>
                            <div class="check-list" style="margin-bottom:0">
                                <ul class="check-list-wr">
                                    <li>Those who concerned about acne/acne scars and craters</li>
                                    <li>Those who concerned about open pores and sagging pores</li>
                                    <li>Those who feel lack of firmness around the eyes and skin</li>
                                    <li>Those who want to improve wrinkles and fine lines</li>
                                    <li>Those who concerned about melasma</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="benefits" class="sl-benefits">
                    <div class="menu-inn sl-benefits-inn">
                        <div class="sl-benefits-inn-ttl subpage-ttl menu-inn-ttl">
                            <h2 class="under-line">Effects of POTENZA <br class="sp"><small>(Symptoms that can be
                                    improved)</small></h2>
                        </div>
                        <div class="sl-benefits-inn-content">
                            <div class="list-style01">
                                <article class="list-style01-item">
                                    <h2 class="list-style01-item-ttl"><span class="list-no">01</span>Improvement of Acne
                                        Scars (craters) and Open Pores</h2>
                                    <div class="list-style01-item-txt">
                                        <p>In addition to the wound-healing effect that attempts to heal wounds by
                                            creating microscopic holes in the skin, the radiofrequency (RF) irradiated
                                            from the needle activates cells and promotes the growth of collagen and
                                            elastin.
                                            <br>Combined with the drug delivery function, the drug can be delivered
                                            evenly to the dermal layer, making it possible to achieve a high effect on
                                            the craters and open pores of acne scars, which have been difficult to
                                            improve.
                                        </p>
                                        <a href="https://pubmed.ncbi.nlm.nih.gov/33326634/">
                                            <p style="text-align:end;"><small>REF：Lan T, Lasers Surg Med, 2021</small>
                                            </p>
                                        </a>
                                    </div>
                                </article>
                                <article class="list-style01-item">
                                    <h2 class="list-style01-item-ttl"><span class="list-no">02</span>Skin Tightning</h2>
                                    <div class="list-style01-item-txt">
                                        <p>By irradiating radiofrequency (RF) from the shallow layers of the skin to the
                                            deeper layers, <span class="color-02"><strong>it is also possible to tighten
                                                    the skin</strong></span>.
                                            <br>In addition to the wound healing effect during the recovery process of
                                            wounds caused by ultrafine needles, the heat of radiofrequency (RF)
                                            irradiation activates the skin (activates fibroblasts), making this a
                                            recommended treatment method that provides better results than conventional
                                            microneedle treatment methods.
                                        </p>
                                        <a href="https://pubmed.ncbi.nlm.nih.gov/31500484/">
                                            <p style="text-align:end;"><small>REF：Kwon S H, J Dermatolog Treat,
                                                    2021</small>
                                            </p>
                                        </a>
                                    </div>
                                </article>
                                <article class="list-style01-item">
                                    <h2 class="list-style01-item-ttl"><span class="list-no">03</span>Treatment of
                                        Melasma</h2>
                                    <div class="list-style01-item-txt">
                                        <p>By directly applying thermal energy to melanocytes, the cause of melasma,
                                            <span class="color-02"><strong>melanocytes' melanin production is inhibited,
                                                    thereby fundamentally treating </strong></span>melasma.
                                        </p>
                                        <a href="https://pubmed.ncbi.nlm.nih.gov/35538360/">
                                            <p style="text-align:end;"><small>REF：Gulfan M C B, Dermatol Ther (Heidelb),
                                                    2022</small>
                                            </p>
                                        </a>
                                    </div>
                                </article>
                                <article class="list-style01-item">
                                    <h2 class="list-style01-item-ttl"><span class="list-no">04</span>Improvement of
                                        Facial Redness</h2>
                                    <div class="list-style01-item-txt">
                                        <p>
                                            Redness occurs on the cheeks and nose due to inflammation caused by various
                                            external and internal stimuli, resulting in the growth of new capillaries.
                                            Potenza aims to fundamentally improve redness by irradiating radiofrequency
                                            (RF) to VEGF, which promotes the formation of new blood vessels that cause
                                            redness.
                                        </p>
                                    </div>
                                </article>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="benefits" class="sl-benefits">
                    <div class="menu-inn sl-benefits-inn">
                        <div class="sl-benefits-inn-ttl subpage-ttl menu-inn-ttl">
                            <h2 class="under-line">Three points of Potenza</h2>
                        </div>
                        <div class="sl-benefits-inn-content">
                            <div class="sl-benefits-inn-content-info pg-text">
                                <div class="fl-style01">
                                    <article class="fl-style01-item">
                                        <h2 class="fl-style01-item-ttl"><span class="list-no">01</span>"Drug Delivery
                                            System" that firmly delivers drugs to the dermis layer</h2>
                                        <div class="fl-style01-item-content1">
                                            <figure>
                                                <img loading="lazy" class="pc"
                                                    src="<?php echo get_template_directory_uri(); ?>/img/benefits/potenza1.png"
                                                    alt="お出かけ前のメイク時間の短縮">
                                                <img loading="lazy" class="sp"
                                                    src="<?php echo get_template_directory_uri(); ?>/img/benefits/potenza1sp.png"
                                                    alt="お出かけ前のメイク時間の短縮">
                                            </figure>
                                            <div class="fl-style01-item-content-txt">
                                                <p>Potenza offers a variety of tips for different treatment purposes.
                                                    Among them, <span class="color-02"><strong>the pumping tip which has
                                                            a drug delivery function that delivers drugs directly into
                                                            holes in the skin, can be used in combination with drugs to
                                                            ensure that the main ingredients penetrate firmly and evenly
                                                            into the interior of the skin (dermis layer).
                                                        </strong></span>
                                                    In addition to the effects of the drug, three synergistic effects
                                                    can be expected in the wound healing process through needle puncture
                                                    and the heat of radiofrequency (RF) irradiation.
                                                    In addition to the skin activation (fibroblast activation) by the
                                                    heat of radiofrequency (RF) irradiation, the wound healing effect
                                                    also works during the recovery process of wounds caused by ultrafine
                                                    needles, making this a recommended treatment method that is more
                                                    effective than conventional microneedle treatment methods.
                                                </p>
                                            </div>
                                        </div>
                                    </article>
                                    <article class="fl-style01-item">
                                        <h2 class="fl-style01-item-ttl"><span class="list-no">02</span>Tailor made
                                            treatment for your concerns</h2>
                                        <div class="d-fl fl-style01-item-content1">
                                            <figure>
                                                <img loading="lazy" class="pc"
                                                    src="<?php echo get_template_directory_uri(); ?>/img/benefits/potenza2.png"
                                                    alt="メイクのテクニックが不要に">
                                                <img loading="lazy" class="sp"
                                                    src="<?php echo get_template_directory_uri(); ?>/img/benefits/potenza2sp.png"
                                                    alt="メイクのテクニックが不要に">
                                            </figure>
                                            <div class="fl-style01-item-content-txt">
                                                <p>
                                                    Potenza has three types of handpieces and 14 types of tips.
                                                    Custom-made treatments can be performed by fine-tuning the needle
                                                    depth and radiofrequency (RF) irradiation method according to your
                                                    concerns.
                                                </p>
                                            </div>
                                        </div>
                                    </article>
                                    <article class="fl-style01-item">
                                        <h2 class="fl-style01-item-ttl"><span class="list-no">03</span>Short Downtime
                                        </h2>
                                        <div class="d-fl fl-style01-item-content1">
                                            <div class="fl-style01-item-content-txt">
                                                <p>
                                                    Conventional microneedle treatment tends to cause bleeding due to
                                                    the depth of penetration (needle length) and the method of
                                                    scratching the skin, resulting in longer downtime, especially when
                                                    approaching deeper layers of the skin.
                                                    <br><span class="color-02"><strong>*However, with regard to POTENZA,
                                                            bleeding is controlled by irradiating radiofrequency (RF)
                                                            when the needle is inserted, and the insertion and removal
                                                            of the needle is precisely controlled by motor control,
                                                            allowing for shorter downtime than with conventional
                                                            treatments, regardless of the depth of the
                                                            target.*</strong></span>
                                                </p>
                                            </div>
                                        </div>
                                    </article>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="types" class="sl-types">
                    <div class="menu-inn sl-types-inn">
                        <div class="sl-types-inn-ttl subpage-ttl menu-inn-ttl">
                            <h2 class="under-line">About Each Treatment Mode</h2>
                        </div>
                        <div class="sl-types-inn-content">
                            <div class="fl-style01">
                                <article class="fl-style01-item">
                                    <h2 class="fl-style01-item-ttl"><span class="list-no">01</span>Crater / Acne scar /
                                        Scar mode</h2>
                                    <div class="fl-style01-item-content1">
                                        <figure>
                                            <img loading="lazy" class="pc"
                                                src="<?php echo get_template_directory_uri(); ?>/img/benefits/potenza3.png"
                                                alt="糸の種類">
                                            <img loading="lazy" class="sp"
                                                src="<?php echo get_template_directory_uri(); ?>/img/benefits/potenza3sp.png"
                                                alt="糸の種類">
                                        </figure>
                                        <div class="fl-style01-item-content-txt">
                                            <p>
                                                A microscopic needle is punctured into the skin and radiofrequency (RF)
                                                is emitted from the tip of the needle. This damages the skin, stimulates
                                                fibroblasts, and promotes wound healing, thereby stimulating the growth
                                                of collagen andelastin.
                                                <br>This makes the skin more elastic and improves the appearance of
                                                crater-like acne scars.
                                            </p>
                                        </div>
                                        <div class="pg-text" style="background-color:rgba(0,0,0,0.02)">
                                            <p>Drug: McCoom<br>
                                                <span class="color-02"><strong>Intradermal injection promotes the
                                                        production of dermal collagen for several months to two years
                                                        which improves the smoothness of uneven skin.</strong></span>
                                            </p>
                                        </div>
                                    </div>
                                </article>
                                <article class="fl-style01-item">
                                    <h2 class="fl-style01-item-ttl"><span class="list-no">02</span>Open pores / Sebum
                                        control mode</h2>
                                    <div class="fl-style01-item-content1">
                                        <figure>
                                            <img loading="lazy" class="pc"
                                                src="<?php echo get_template_directory_uri(); ?>/img/benefits/potenza4.png"
                                                alt="糸の種類">
                                            <img loading="lazy" class="sp"
                                                src="<?php echo get_template_directory_uri(); ?>/img/benefits/potenza4sp.png"
                                                alt="糸の種類">
                                        </figure>
                                        <div class="fl-style01-item-content-txt">
                                            <p>
                                                It damages the skin, stimulates fibroblasts, and promotes wound healing,
                                                thereby stimulating the growth of collagen andelastin.
                                                <br>This is expected to have the effect of reducing the appearance of
                                                pores.
                                            </p>
                                        </div>
                                        <div class="pg-text" style="background-color:rgba(0,0,0,0.02)">
                                            <p>Drug: Botulax &lt;Botulinum toxin&gt;<br>
                                                Botulinum toxin inhibits acetylcholine transmission and also blocks the
                                                nerves that transmit to the sebaceous and sweat glands.
                                                <span class="color-02"><strong>This results in the tightening of pores,
                                                        suppression of sebum, and skin elasticity.</strong></span>
                                            </p>
                                        </div>
                                    </div>
                                </article>
                                <article class="fl-style01-item">
                                    <h2 class="fl-style01-item-ttl"><span class="list-no">03</span>Beautiful skin mode
                                    </h2>
                                    <div class="fl-style01-item-content1">
                                        <figure>
                                            <img loading="lazy" class="pc"
                                                src="<?php echo get_template_directory_uri(); ?>/img/benefits/potenza5.png"
                                                alt="糸の種類">
                                            <img loading="lazy" class="sp"
                                                src="<?php echo get_template_directory_uri(); ?>/img/benefits/potenza5sp.png"
                                                alt="糸の種類">
                                        </figure>

                                        <div class="fl-style01-item-content-txt">
                                            <p>
                                                By applying radiofrequency (RF) heat directly to the dermal layer, the
                                                skin's natural healing ability is activated.
                                                <br>Through the process of wound healing, heat-affected fibroblasts
                                                rebuild collagen.
                                                <br>Skin firmness and a tightening effect can be expected.
                                            </p>
                                        </div>
                                        <div class="pg-text" style="background-color:rgba(0,0,0,0.02); ">
                                            <p>Drug: PingGrow&lt;Anti-inflammatory, blemish and dryness&gt;<br>
                                                PingGrow contains highly concentrated hyaluronic acid, 13 vitamins, and
                                                23 amino acids.
                                                <span class="color-02"><strong>It increases water retention and moisture
                                                        content, and makes the skin firm and shiny.</strong></span>
                                                <br>It contains B12 cyanocobalamin, which gives it a natural pink color.
                                            </p>
                                        </div>
                                        <!--<div class="pg-text" style="background-color:rgba(0,0,0,0.02);margin-top:1em;">
                                            <p>Drug: Exosomes &lt;Cell regeneration, anti-oxidation, suppression of
                                                aging&gt;.<br>
                                                Exosome cosmetic injections are a skin care treatment using stem cell
                                                culture supernatant solution that can be expected to have a beautiful
                                                skin and skin regeneration effect.
                                                <span class="color-02"><strong>Exosomes" are substances secreted by
                                                        cells (intercellular signaling molecules) that support various
                                                        skin-related cell functions such as turnover promotion, skin
                                                        regeneration, anti-oxidation, fine lines and wrinkles, acne,
                                                        atopic dermatitis, and dryness.</strong></span>
                                            </p>
                                        </div>-->
                                    </div>
                                </article>

                                <article class="fl-style01-item">
                                    <h2 class="fl-style01-item-ttl"><span class="list-no">04</span>Red Face mode</h2>
                                    <div class="fl-style01-item-content1">
                                        <div class="fl-style01-item-content-txt">
                                            <p>Using a tip specially designed for red face and acne scars, mild
                                                radiofrequency (RF) heat energy is given to promote skin regeneration
                                                and lead to beautiful skin.
                                                <br>This treatment method also prevents recurrence of redness by
                                                inhibiting the formation of new blood vessels that cause redness.<br>
                                                In addition to the improvement of redness, various effects such as skin
                                                rejuvenation and improvement of fine lines and wrinkles can be expected
                                                by applying heat to the upper dermal layer.
                                            </p>
                                        </div>
                                    </div>
                                </article>

                                <article class="fl-style01-item">
                                    <h2 class="fl-style01-item-ttl"><span class="list-no">05</span>Melasma mode</h2>
                                    <div class="d-fl fl-style01-item-content">
                                        <div class="fl-style01-item-content-txt">
                                            <p>
                                                It is effective in suppressing melanin production by directly applying
                                                radiofrequency (RF) energy to the melanocytes themselves, the cause of
                                                melasma.
                                                <br>The unique technology that adjusts the amount of energy and
                                                irradiation time to the optimum values for the treatment makes it
                                                possible to treat any skin type, greatly reducing the risk of melasma
                                                worsening or vitiligo.
                                                <br>It is recommended for those who have difficulty improving melasma
                                                with lasers , want another level of transparency, or are prone to
                                                sunburn.
                                            </p>
                                        </div>
                                    </div>
                                </article>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="features" class="sl-features">
                    <div class="menu-inn sl-features-inn">
                        <div class="sl-features-inn-ttl subpage-ttl menu-inn-ttl">
                            <h2 class="under-line">Characteristics of LIAN clinic’s POTENZA</h2>
                        </div>
                        <div class="sl-features-inn-content">
                            <div class="fl-style03 d-fl">
                                <article class="fl-style03-item">
                                    <h3><span class="list-no">01</span>Tailor made POTENZA</h3>
                                    <figure>
                                        <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/features/hifu-feature01.png"
                                            alt="LIANの３つの特徴">
                                    </figure>
                                    <p>Our Potenza offers customized treatment for each customer by selecting the tip,
                                        power, needle depth, and drug according to the customer's concerns.</p>
                                </article>
                                <article class="fl-style03-item">
                                    <h3><span class="list-no">02</span>Careful treatment by Skilled nurses</h3>
                                    <figure>
                                        <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/features/hifu-feature02.png"
                                            alt="LIANの３つの特徴">
                                    </figure>
                                    <p>At our clinic, only cosmetic nurses who have been with the cosmetic clinic for at
                                        least 4 years will be in charge of the treatment.</p>
                                </article>
                                <article class="fl-style03-item">
                                    <h3><span class="list-no">03</span>Pain care</h3>
                                    <figure>
                                        <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/features/hifu-feature03.png"
                                            alt="LIANの３つの特徴">
                                    </figure>
                                    <p>We provide anesthesia cream, laughing gas anesthesia, and vibration to take care
                                        of pain.
                                        <br>Even those who are not comfortable with pain can undergo the procedure with
                                        peace of mind.
                                    </p>
                                </article>
                            </div>
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
                                            <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/case/case-01new.png"
                                                alt="症例写真">
                                        </figure>
                                        <div class="content">
                                            <dl>
                                                <dt>Treatment</dt>
                                                <dd>POTENZA / Acne Scar Mode </dd>
                                            </dl>
                                            <dl>
                                                <dt>Explanation of treatment</dt>
                                                <dd>
                                                    Minimally invasive fractional radiofrequency (RF) using ultra-fine
                                                    microneedles.
                                                    <br>The microneedles are inserted into the skin to create tiny
                                                    wounds, which stimulate collagen production through wound healing
                                                    that tries to heal itself.
                                                    <br>Left: Before treatment<br>
                                                    Right: After 4th treatment
                                                </dd>
                                            </dl>
                                            <dl>
                                                <dt>Side effects</dt>
                                                <dd>Burn, heat, redness</dd>
                                            </dl>
                                            <dl>
                                                <dt>Price</dt>
                                                <dd>¥66,000〜</dd>
                                            </dl>
                                        </div>
                                    </a>
                                </article>
                                <article>
                                    <a class="fl-style04-fl d-fl" target="_blank" rel="nofollow noreferrer">
                                        <figure>
                                            <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/case/case-02new.png"
                                                alt="症例写真">
                                        </figure>
                                        <div class="content">
                                            <dl>
                                                <dt>Treatment</dt>
                                                <dd>POTENZA / Red Face Mode </dd>
                                            </dl>
                                            <dl>
                                                <dt>Explanation of treatment</dt>
                                                <dd>
                                                    Minimally invasive fractional radiofrequency (RF) using ultra-fine
                                                    microneedles.
                                                    <br>The microneedles are inserted into the skin to create tiny
                                                    wounds, which stimulate collagen production through wound healing
                                                    that tries to heal itself.
                                                    <br>Left: Before treatment
                                                    <br>Right: After 3rd treatment
                                                </dd>
                                            </dl>
                                            <dl>
                                                <dt>Side effects</dt>
                                                <dd>Burn, heat, redness</dd>
                                            </dl>
                                            <dl>
                                                <dt>Price</dt>
                                                <dd>¥49,500〜</dd>
                                            </dl>
                                        </div>
                                    </a>
                                </article>
                                <article>
                                    <a class="fl-style04-fl d-fl" target="_blank" rel="nofollow noreferrer">
                                        <figure>
                                            <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/case/case-03new.png"
                                                alt="症例写真">
                                        </figure>
                                        <div class="content">
                                            <dl>
                                                <dt>Treatment</dt>
                                                <dd>POTENZA / Melasma Mode </dd>
                                            </dl>
                                            <dl>
                                                <dt>Explanation of treatment</dt>
                                                <dd>
                                                    Minimally invasive fractional radiofrequency (RF) using ultra-fine
                                                    microneedles.
                                                    <br>The microneedles are inserted into the skin to create tiny
                                                    wounds, which stimulate collagen production through wound healing
                                                    that tries to heal itself.
                                                    <br>Left: Before treatment
                                                    <br>Right: After 2nd treatment
                                                </dd>
                                            </dl>
                                            <dl>
                                                <dt>Side effects</dt>
                                                <dd>Burn, heat, redness</dd>
                                            </dl>
                                            <dl>
                                                <dt>Price</dt>
                                                <dd>¥39,600〜</dd>
                                            </dl>
                                        </div>
                                    </a>
                                </article>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="differences" class="sl-differences">
                    <div class="menu-inn sl-differences-inn">
                        <div class="sl-differences-inn-ttl subpage-ttl menu-inn-ttl">
                            <h2 class="under-line">POTENZA Precautions</h2>
                        </div>
                        <div class="sl-differences-inn-content">
                            <div class="disc-list disc--list">
                                <ul class="disc-list-wr">
                                    <li>If the rash or erythema is severe after the procedure, it is recommended to use
                                        an ice pack at home.</li>
                                    <li>If the skin feels dry, apply a sufficient amount of moisturizing cream.</li>
                                    <li>Please use sunscreen to prevent hyperpigmentation caused by ultraviolet rays.
                                    </li>
                                    <li>To promote skin regeneration, it is recommended to use a mask pack containing
                                        moisturizing ingredients for 10 to 15 minutes a day.</li>
                                    <li>Avoid the use of skin scrub products and exfoliation.</li>
                                    <li>Do not drink alcohol, take saunas, take half baths, or engage in strenuous
                                        exercise on the day of the procedure.</li>
                                    <li>After the procedure, the pores may become blocked due to inflammation or
                                        swelling, resulting in temporary acne or worse (about 7 days).</li>
                                    <li>If the acne is not removed hygienically, hyperpigmentation may occur.</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="state" class="sl-state">
                    <div class="menu-inn sl-state-inn">
                        <div class="sl-state-inn-ttl subpage-ttl menu-inn-ttl">
                            <h2 class="under-line">Video of POTENZA</h2>
                        </div>
                        <div class="sl-state-inn-content video-style01">
                            <iframe width="100%" height="100%" src="https://www.youtube.com/embed/PwZ2p3h8BxE?enablejsapi=1"
                                title="YouTube video player" frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                allowfullscreen></iframe>
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
                                <h3 class="price-ttl"><span>POTENZA</span></h3>
                                <div class="price-list">
                                    <div class="d-fl price-list-wr">
                                        <div class="price-list-wr-l">
                                            <h3>Melasma Mode</h3>
                                            <ul>
                                                <li class="d-fl">
                                                    <p>One time</p>
                                                    <p class="dash-line"></p>
                                                    <p>¥39,600</p>
                                                </li>
                                                <li class="d-fl">
                                                    <p>Three times</p>
                                                    <p class="dash-line"></p>
                                                    <p>¥106,920</p>
                                                </li>
                                                <li class="d-fl">
                                                    <p>Five times</p>
                                                    <p class="dash-line"></p>
                                                    <p>¥168,300</p>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="price-list-wr-l">
                                            <h3>Red Face Mode</h3>
                                            <ul>
                                                <li class="d-fl">
                                                    <p>One time</p>
                                                    <p class="dash-line"></p>
                                                    <p>¥49,500</p>
                                                </li>
                                                <li class="d-fl">
                                                    <p>Three times</p>
                                                    <p class="dash-line"></p>
                                                    <p>¥133,650</p>
                                                </li>
                                                <li class="d-fl">
                                                    <p>Five times</p>
                                                    <p class="dash-line"></p>
                                                    <p>¥210,375</p>
                                                </li>
                                            </ul>
                                        </div>

                                        <div class="price-list-wr-l">
                                            <h3>Drug Delivery<br>&lt;Botulinum toxin></h3>
                                            <ul>
                                                <li class="d-fl">
                                                    <p>One time</p>
                                                    <p class="dash-line"></p>
                                                    <p>¥66,000</p>
                                                </li>
                                                <li class="d-fl">
                                                    <p>Three times</p>
                                                    <p class="dash-line"></p>
                                                    <p>¥178,200</p>
                                                </li>
                                                <li class="d-fl">
                                                    <p>Five times</p>
                                                    <p class="dash-line"></p>
                                                    <p>¥280,500</p>
                                                </li>
                                            </ul>
                                        </div>


                                        <div class="price-list-wr-l">
                                            <h3>Drug Delivery<br>&lt;Pink Glow></h3>
                                            <ul>
                                                <li class="d-fl">
                                                    <p>One time</p>
                                                    <p class="dash-line"></p>
                                                    <p>¥66,000</p>
                                                </li>
                                                <li class="d-fl">
                                                    <p>Three times</p>
                                                    <p class="dash-line"></p>
                                                    <p>¥178,200</p>
                                                </li>
                                                <li class="d-fl">
                                                    <p>Five times</p>
                                                    <p class="dash-line"></p>
                                                    <p>¥280,500</p>
                                                </li>
                                            </ul>
                                        </div>

                                        <div class="price-list-wr-l">
                                            <h3>Drug Delivery<br>&lt;Exoxomes></h3>
                                            <ul>
                                                <li class="d-fl">
                                                    <p>One time</p>
                                                    <p class="dash-line"></p>
                                                    <p>¥99,000</p>
                                                </li>
                                                <li class="d-fl">
                                                    <p>Three times</p>
                                                    <p class="dash-line"></p>
                                                    <p>¥267,300</p>
                                                </li>
                                                <li class="d-fl">
                                                    <p>Five times</p>
                                                    <p class="dash-line"></p>
                                                    <p>¥420,750</p>
                                                </li>
                                            </ul>
                                        </div>

                                        <div class="price-list-wr-l">
                                            <h3>Drug Delivery<br>&lt;McCoom></h3>
                                            <ul>
                                                <li class="d-fl">
                                                    <p>One time</p>
                                                    <p class="dash-line"></p>
                                                    <p>¥70,400</p>
                                                </li>
                                                <li class="d-fl">
                                                    <p>Three times</p>
                                                    <p class="dash-line"></p>
                                                    <p>¥190,080</p>
                                                </li>
                                                <li class="d-fl">
                                                    <p>Five times</p>
                                                    <p class="dash-line"></p>
                                                    <p>¥299,200</p>
                                                </li>
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
                            <text id="ポテンツァあなたと美しさをつなぐクリニック" data-name="ポテンツァあなたと美しさをつなぐクリニック" class="cls-mv-1"
                                transform="translate(0 35)">
                                <tspan x="0" y="0">ポテンツァ</tspan>
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
                            <text id="ポテンツァあなたと美しさをつなぐクリニック" data-name="ポテンツァあなたと美しさをつなぐクリニック" class="cls-1" transform="translate(0 35)">
                                <tspan x="0" y="0">ポテンツァ</tspan>
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
        <div id="menu" class="sl-menu menu-potenza">
            <div class="sl-menu-content">
                <div id="whatis" class="sl-whatis">
                    <div class="sl-whatis-inn menu-inn attach-mv">
                        <div class="sl-whatis-inn-ttl subpage-ttl menu-inn-ttl">
                            <h2 class="under-line menu-inn-ttl__inner">ポテンツァ(POTENZA)とは</h2>
                        </div>
                        <div class="sl-whatis-inn-content">
                            <div class="d-fl whatis-detailup">
                                <figure>
                                    <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/potenza/potenza_01.png"
                                        alt="POTENZAの機械">
                                </figure>
                                <div class="whatis-detailup-txt">
                                    <p>
                                        ポテンツァ（POTENZA）は、世界60ヵ国以上へ美容医療機器を提供するJeisys Medical社が開発した総合美肌マシンです。<br><br>
                                        マイクロニードルを皮膚に挿入することで創傷治癒（皮膚の再構築）を促すと同時に、高周波RF（ラジオ波）による熱作用でコラーゲンやエラスチンなど美肌成分の生成を促進します。
                                    </p>
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
                                        <strong style="display:block;" class="sv-name"><a href="<?php echo home_url('/staff/藤尾-謙太/'); ?>">藤尾謙太</a></strong>
                                        <strong style="display:block;" class="profile">プロフィール</strong>
                                        <p class="profile-txt">昭和大学卒業<br>順天堂大学の医局入職<br>大手美容皮膚科勤務<br>2023年博士号取得<br><a style="color: blue; text-decoration: underline;" target="_blank" href="https://www.aesthet-derm.org/">日本美容皮膚科医学会所属</a></p>
                                    </div>
                                    <div class="doctor__comments">
                                        <strong>医師コメント</strong>
                                        <p>
                                            毛穴の引き締め効果やリフトアップ効果もあり、あらゆる肌のタイプ、さまざまな症状にアプローチできる汎用性の高いマシンです。<br>
                                            さらに、ドラッグデリバリーシステムを搭載しているため、ボトックスやマックームといった薬剤を肌へと均一に浸透させます。<br>
                                            ダウンタイムが1～2日と非常に短く、治療後のダウンタイムがネックでこれまで足を踏み出せなかった方にもおすすめのマシンです。
                                        </p>
                                    </div>
                                    <?php echo get_template_part('template-parts/sv-guidelines'); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="recommend" class="sl-recommend">
                    <div class="menu-inn sl-recommend-inn">
                        <div class="sl-recommend-inn-ttl subpage-ttl menu-inn-ttl">
                            <h2 class="under-line">ポテンツァは<br class="sp">こんな方におすすめ</h2>
                        </div>
                        <div class="sl-recommend-inn-content">
                            <div class="check-list">
                                <ul class="check-list-wr">
                                    <li>肝斑を目立たなくしたい</li>
                                    <li>毛穴の開き、肌のたるみが気になる</li>
                                    <li>赤み顔、酒さ顔を改善したい</li>
                                    <li>ニキビやニキビ跡、クレーターをきれいにしたい</li>
                                </ul>
                            </div>
                        </div>
                        <!-- newdesign -->
                    </div>
                </div>
                <div id="benefits" class="sl-benefits">
                    <div class="menu-inn sl-benefits-inn">
                        <div class="sl-benefits-inn-ttl subpage-ttl menu-inn-ttl">
                            <h2 class="under-line pc">ポテンツァの効果</h2>
                            <h2 class="under-line sp">ポテンツァの効果<br>（改善できる症状）</h2>
                        </div>
                        <div class="pg-text">
                            <p>ポテンツァは、マイクロニードルとRF（ラジオ波）、薬剤（マックームなど）の相乗効果により、下記のような症状の改善が期待できます。</p>
                        </div>
                        <div class="check-list">
                            <ul class="check-list-wr">
                                <li>肝斑改善</li>
                                <li>開き穴・たるみ毛穴の改善</li>
                                <li>赤みの改善</li>
                                <li>ニキビ跡・クレーター改善</li>
                            </ul>
                        </div>
                        <div class="pg-text mg-40">
                            <p>実際の症例とあわせて、それぞれ詳しく解説します。</p>
                        </div>
                        <div class="sl-benefits-inn-content">
                            <div class="fl-style04 fl-style04--potenza">
                                <article>
                                    <h3 class="fl-style01-item-ttl"><span class="list-no">01</span>肝斑改善</h3>
                                    <div class="fl-style04-fl d-fl">
                                        <figure>
                                            <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/potenza/potenza_02.png"
                                                alt="肝斑改善">
                                        </figure>
                                        <div class="content">
                                            <dl>
                                                <dt>治療方法</dt>
                                                <dd>ポテンツァ</dd>
                                            </dl>
                                            <dl>
                                                <dt>治療回数</dt>
                                                <dd>1回</dd>
                                            </dl>
                                            <dl>
                                                <dt>治療期間</dt>
                                                <dd>1ヶ月</dd>
                                            </dl>
                                            <dl>
                                                <dt>費用</dt>
                                                <dd>39,600円（税込）<small>※症状によって変動します。</small></dd>
                                            </dl>
                                            <dl>
                                                <dt>リスク・副作用</dt>
                                                <dd>赤み・熱感・腫れ、痛み、かさぶた、色素沈着、ニキビ・毛嚢炎</dd>
                                            </dl>
                                        </div>
                                    </div>
                                    <div class="info-txt">
                                        <p>
                                            〈施術詳細〉<br>
                                            マイクロニードルによる創傷治癒で肌のターンオーバーを促進し、肝斑を徐々に薄くしていきます。同時にRF（ラジオ波）でメラノサイトに直接アプローチし、肝斑の原因であるメラニン産生を抑制します。<br><br>
                                            従来のレーザー治療機と比較して、肌の色素沈着や白斑などの心配がなく、安心して肝斑治療を受けることができます。肝斑再発を防ぐことができるため、治療後も美肌を維持することができます。
                                        </p>
                                    </div>
                                </article>
                                <article>
                                    <h3 class="fl-style01-item-ttl"><span class="list-no">02</span>開き毛穴・たるみ毛穴の改善</h3>
                                    <div class="fl-style04-fl d-fl">
                                        <figure>
                                            <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/potenza/potenza_03.png"
                                                alt="開き毛穴・たるみ毛穴の改善">
                                        </figure>
                                        <div class="content">
                                            <dl>
                                                <dt>治療方法</dt>
                                                <dd>ポテンツァ</dd>
                                            </dl>
                                            <dl>
                                                <dt>治療回数</dt>
                                                <dd>3回</dd>
                                            </dl>
                                            <dl>
                                                <dt>治療期間</dt>
                                                <dd>2ヶ月程度</dd>
                                            </dl>
                                            <dl>
                                                <dt>費用</dt>
                                                <dd>178,200円（税込）<small>※症状によって変動します。</small></dd>
                                            </dl>
                                            <dl>
                                                <dt>リスク・副作用</dt>
                                                <dd>赤み・熱感・腫れ、痛み、かさぶた、色素沈着、ニキビ・毛嚢炎</dd>
                                            </dl>
                                        </div>
                                    </div>
                                    <div class="info-txt">
                                        <p>
                                            〈施術詳細〉<br>
                                            RF（ラジオ波）の熱作用によって肌の細胞を活性化し、コラーゲンやエラスチンなど美肌成分の生成を促進します。<br>コラーゲンやエラスチンが増加することで、肌のハリ・ツヤがよくなり、開き毛穴・たるみ毛穴の改善が期待できます。
                                        </p>
                                    </div>
                                </article>
                                <article>
                                    <h3 class="fl-style01-item-ttl"><span class="list-no">03</span>赤みの改善</h3>
                                    <div class="fl-style04-fl d-fl">
                                        <figure>
                                            <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/potenza/potenza_04.png"
                                                alt="赤みの改善">
                                        </figure>
                                        <div class="content">
                                            <dl>
                                                <dt>治療方法</dt>
                                                <dd>ポテンツァ</dd>
                                            </dl>
                                            <dl>
                                                <dt>治療回数</dt>
                                                <dd>3回</dd>
                                            </dl>
                                            <dl>
                                                <dt>治療期間</dt>
                                                <dd>2ヶ月程度</dd>
                                            </dl>
                                            <dl>
                                                <dt>費用</dt>
                                                <dd>133,650円（税込）<small>※症状によって変動します。</small></dd>
                                            </dl>
                                            <dl>
                                                <dt>リスク・副作用</dt>
                                                <dd>赤み・熱感・腫れ、痛み、かさぶた、色素沈着、ニキビ・毛嚢炎</dd>
                                            </dl>
                                        </div>
                                    </div>
                                    <div class="info-txt">
                                        <p>
                                            〈施術詳細〉<br>
                                            RF（ラジオ波）照射によって、肌の赤みの原因となる新生血管を抑制し、赤ら顔（酒さ顔）の改善が期待できます。<br>
                                            また、赤ニキビの原因である皮脂腺を破壊し、赤ニキビの再発を抑える治療も可能です。
                                        </p>
                                    </div>
                                </article>
                                <article>
                                    <h3 class="fl-style01-item-ttl"><span class="list-no">04</span>ニキビ跡・クレーター改善</h3>
                                    <div class="fl-style04-fl d-fl">
                                        <figure>
                                            <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/potenza/potenza_05.png"
                                                alt="ニキビ跡・クレーター改善">
                                        </figure>
                                        <div class="content">
                                            <dl>
                                                <dt>治療方法</dt>
                                                <dd>ポテンツァ</dd>
                                            </dl>
                                            <dl>
                                                <dt>治療回数</dt>
                                                <dd>3回</dd>
                                            </dl>
                                            <dl>
                                                <dt>治療期間</dt>
                                                <dd>3ヶ月程度</dd>
                                            </dl>
                                            <dl>
                                                <dt>費用</dt>
                                                <dd>190,080円（税込）<small>※症状によって変動します。</small></dd>
                                            </dl>
                                            <dl>
                                                <dt>リスク・副作用</dt>
                                                <dd>赤み・熱感・腫れ、痛み、かさぶた、色素沈着、ニキビ・毛嚢炎</dd>
                                            </dl>
                                        </div>
                                    </div>
                                    <div class="info-txt">
                                        <p>
                                            〈施術詳細〉<br>
                                            マイクロニードルとRF（ラジオ波）、薬剤の相乗効果で肌の創傷治癒を促し、ニキビ跡・クレーターを改善する効果が期待できます。<br>
                                            また、ニキビ治療（ニキビショット）用の1ニードルチップを使用すればニキビに直接RFを照射して皮脂腺を破壊できるため、ニキビの再発を防ぐことができます。
                                        </p>
                                    </div>
                                </article>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="types" class="sl-types">
                    <div class="menu-inn sl-types-inn">
                        <div class="sl-types-inn-ttl subpage-ttl menu-inn-ttl">
                            <span class="sub_ttl">どんな機器？メリットは？</span>
                            <h2 class="under-line">ポテンツァの特徴</h2>
                        </div>
                        <div class="sl-types-inn-content">
                            <div class="fl-style04 fl-style04--potenza potenza02">
                                <article>
                                    <h3 class="fl-style01-item-ttl"><span
                                            class="list-no">01</span>多彩なチップと照射モードでお悩みにあわせてアプローチ</h3>
                                    <div class="fl-style04-fl d-fl">
                                        <figure>
                                            <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/potenza/potenza_06.png"
                                                alt="多彩なチップと照射モードでお悩みにあわせてアプローチ">
                                        </figure>
                                        <div class="content">
                                            <p>ポテンツァは針の本数や長さの異なるチップが多数用意されており、一台でさまざまな肌のお悩みに対応できます。<br><br>
                                                たとえば、薬剤の効率的な浸透を実現する「ポンピングチップ」や、針を刺さずにRF（ラジオ波）のみを照射する「ダイヤモンドチップ」、ニキビ治療に特化した「1ニードルチップ」などがあります。<br><br>
                                                また、熱量やパルス幅なども細かく調整でき、お客様の肌質やお悩みに合わせた治療が可能です。</p>
                                        </div>
                                    </div>
                                </article>
                                <article>
                                    <h3 class="fl-style01-item-ttl"><span class="list-no">02</span>開き毛穴・たるみ毛穴の改善</h3>
                                    <div class="fl-style04-fl d-fl">
                                        <figure>
                                            <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/potenza/potenza_07.png"
                                                alt="開き毛穴・たるみ毛穴の改善">
                                        </figure>
                                        <div class="content">
                                            <p>ポテンツァには「ドラッグデリバリーシステム」が搭載されており、
                                                <span
                                                    class="color-01"><strong>薬剤を肌内部の真皮層まで均一に浸透させる</strong></span>ことが可能です。
                                            </p>
                                            <div class="check-list">
                                                <ul class="check-list-wr">
                                                    <li>薬剤の効果</li>
                                                    <li>マイクロニードルによる創傷治癒の促進</li>
                                                    <li>RF（ラジオ波）照射による肌細胞の活性化</li>
                                                </ul>
                                            </div>
                                            <p>以上3つのアプローチで、広範囲のニキビ跡やクレーターにも高い効果が期待できます。</p>
                                        </div>
                                    </div>
                                </article>
                                <article>
                                    <h3 class="fl-style01-item-ttl"><span class="list-no">03</span>ダウンタイム・痛みが少ない</h3>
                                    <div class="fl-style04-fl d-fl">
                                        <figure>
                                            <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/potenza/potenza_08.png"
                                                alt="ダウンタイム・痛みが少ない">
                                        </figure>
                                        <div class="content">
                                            <p>ポテンツァは、従来のマイクロニードル治療よりもダウンタイムが少ない点が特徴です。<br>
                                                針を挿入した際にRF（ラジオ波）を照射するため止血効果があり、施術後の出血や赤みが出にくいからです。<br>
                                                個人差はありますが、<span
                                                    class="color-01"><strong>赤みや腫れは1～2日で治まり、翌日（24時間後）からはメイクも可能</strong></span>です。<br>
                                                また、ポテンツァで使用する針は約0.25mmと極細のため、施術時の痛みも感じにくくなっています。
                                            </p>
                                        </div>
                                    </div>
                                </article>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="diamond" class="sl-diamond">
                    <div class="menu-inn sl-diamond-inn">
                    <div class="sl-diamond-inn-ttl subpage-ttl menu-inn-ttl">
                        <span class="sub_ttl">ポテンツァの新しいチップ</span>
                        <h2 class="under-line">「ダイヤモンドチップ」<br class="sp">について</h2>
                    </div>
                    <div class="sl-diamond-inn-content">
                            <div class="dtips d-fl">
                            <img loading="lazy" class="dtips-img" src="<?php echo get_template_directory_uri(); ?>/img/potenza/dtips-img.png" alt="「ダイヤモンドチップ」について">
                            <p class="dtips-info">ダイヤモンドチップは、シワやたるみの改善、毛穴の開きの改善に効果を発揮します。<br>日本では2021年秋にリリースされたばかりの、新しいモードです。</p>
                            </div>
                            <p class="diamond-txt">モノポーラとバイポーラーのRF（高周波）を連続照射し、深く均一に熱を伝えることで、<span class="txt-red">肌を引き締める効果と、コラーゲンの生成を促進する</span>効果が期待できます。</p>
                            <p class="diamond-txt">ダイヤモンドチップは針のないノンニードルチップのため、<span class="txt-red">痛みやダウンタイムがほとんどない</span>こともメリットです。施術中の痛みや、ダウンタイム中の腫れ・赤みなどが気になる方でも安心してお受けいただけます。</p>
                            <img loading="lazy" class="result-img pc" src="<?php echo get_template_directory_uri(); ?>/img/potenza/diamond_monoxbi-image.png" alt="Diamond_monoxbi-image">
                            <img loading="lazy" class="result-img sp" src="<?php echo get_template_directory_uri(); ?>/img/potenza/diamond_monoxbi-image-sp.png" alt="Diamond_monoxbi-image">
                    </div>
                    </div>
                </div>
                <div id="features" class="sl-features">
                    <div class="menu-inn sl-features-inn">
                        <div class="sl-features-inn-ttl subpage-ttl menu-inn-ttl">
                            <h2 class="under-line">LIANクリニックの<br class="sp">ポテンツァの特徴</h2>
                        </div>
                        <div class="sl-features-inn-content">
                            <div class="fl-style01">
                                <article class="fl-style01-item">
                                    <h3 class="fl-style01-item-ttl"><span class="list-no">01</span>お悩みに合わせたオーダーメイド治療
                                    </h3>
                                    <div class="d-fl fl-style01-item-content">
                                        <figure>
                                            <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/potenza/potenza_09.png"
                                                alt="お悩みに合わせたオーダーメイド治療">
                                        </figure>
                                        <div class="fl-style01-item-content-txt">
                                            <p>当院ではお客様のお悩みや肌の状態に合わせて、<span
                                                    class="color-01"><strong>チップやマシンの設定、薬剤などを選択したオーダーメイド治療</strong></span>を提供しております。<br>
                                                当院のポテンツァは全てマニュアルモード。お一人おひとりのお肌に合わせた設定を考えていきます。
                                            </p>
                                        </div>
                                    </div>
                                </article>
                                <article class="fl-style01-item">
                                    <h3 class="fl-style01-item-ttl"><span class="list-no">02</span>経験豊富な看護師が対応</h3>
                                    <div class="d-fl fl-style01-item-content">
                                        <figure>
                                            <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/potenza/potenza_10.png"
                                                alt="経験豊富な看護師が対応">
                                        </figure>
                                        <div class="fl-style01-item-content-txt">
                                            <p>ポテンツァは1ショットずつ手作業で行うため、打ち手によって治療効果が大きく変わります。<br>
                                                当院では、<span class="color-01"><strong>美容クリニック従属歴4年以上の経験豊富な看護師が施術を担当</strong></span>いたします。
                                            </p>
                                        </div>
                                    </div>
                                </article>
                                <article class="fl-style01-item">
                                    <h3 class="fl-style01-item-ttl"><span class="list-no">03</span>2種類の麻酔を使用してお痛みを軽減
                                    </h3>
                                    <div class="d-fl fl-style01-item-content">
                                        <figure>
                                            <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/potenza/potenza_11.png"
                                                alt="2種類の麻酔を使用してお痛みを軽減">
                                        </figure>
                                        <div class="fl-style01-item-content-txt">
                                            <p>当院では、麻酔クリームに加えて2次麻酔を使用します。<br>
                                                ポテンツァは2周することが多いですが、1周目で麻酔が切れてしまい、2周目が痛みが強いという声をよく耳にします。<br>
                                                そこで<span
                                                    class="color-01"><strong>リアンクリニックでは1周目の後に特殊な2次麻酔を使用することで、お痛みが少ない配慮をしております。</strong></span><br>
                                                これまで強い痛みを感じていたという方も、「快適に施術が受けられた」と喜びの声を多くいただいています。<br>
                                                お痛みが苦手な方にはお気軽にご相談ください。
                                            </p>
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
                            <h2 class="under-line">「ポテンツァ」と<br class="sp">「ダーマペン」の違い</h2>
                        </div>
                        <div class="sl-differences-inn-content">
                            <div class="differences-wrap">
                                <table>
                                    <thead>
                                        <tr>
                                            <th></th>
                                            <th><img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/potenza/potenza_15.png" alt="ポテンツァ"></th>
                                            <th><img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/potenza/potenza_16.png" alt="ダーマペン"></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th>治療内容</th>
                                            <td>マイクロニードル<br class="sp">+RF</td>
                                            <td>マイクロニードルのみ</td>
                                        </tr>
                                        <tr>
                                            <th>効果</th>
                                            <td><span class="icon01"><img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/potenza/two-circle-icon.png" alt="icon"></span>肝斑や重度のニキビ跡<br class="sp">治療も可能</td>
                                            <td><span class="icon01"><img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/potenza/circle-icon.png" alt="icon"></span>回数がかかりやすい</td>
                                        </tr>
                                        <tr>
                                            <th>ダウンタイム</th>
                                            <td>1～2日</td>
                                            <td>1週間</td>
                                        </tr>
                                        <tr>
                                            <th>痛み</th>
                                            <td><span class="icon02"><img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/potenza/triangle-icon.png" alt="icon"></span>高周波を用いるため<br class="sp">痛みを感じやすい</td>
                                            <td><span class="icon01"><img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/potenza/circle-icon.png" alt="icon"></span></td>
                                        </tr>
                                        <tr>
                                            <th><p class="pc">ドラッグデリバリー<br>（薬剤の導入）</p><p class="sp">薬剤の導入</p></th>
                                            <td><span class="icon01"><img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/potenza/circle-icon.png" alt="icon"></span></td>
                                            <td><span class="icon03"><img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/potenza/cross-icon.png" alt="icon"></span></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="details-txt">
                                <p>
                                    <span class="color-01"><strong>ポテンツァはダーマペンの進化版</strong></span>とも呼ばれています。<br><br>
                                    ポテンツァが優れているのは、<span class="color-01"><strong>マイクロニードルとRF（ラジオ波）の両方に対応しており、さらにドラッグデリバリーにより効率的に薬剤を導入できる</strong></span>点です。<br><br>
                                    RFの止血作用によりダウンタイムが短く、翌日から普段どおりの生活を送れることも大きなメリット。<br><br>
                                    その他、<span class="color-01"><strong>ポテンツァとよく比較されるのがハイフ（HIFU）と水光注射</strong></span>です。<br>
                                    ハイフは真皮層よりも奥深くにあるSMAS筋膜に作用し、リフトアップや引き締めなどの効果を期待できる治療法で、ポテンツァとは作用する範囲が異なります。<br><br>
                                    一方で水光注射は、真皮層に薬剤を直接注入する治療法です。ポテンツァはドラッグデリバリーシステムで、水光注射と同様の治療が可能となっています。
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="state" class="sl-state">
                    <div class="menu-inn sl-state-inn">
                        <div class="sl-state-inn-ttl subpage-ttl menu-inn-ttl">
                            <h2 class="under-line">ポテンツァの施術の様子</h2>
                        </div>
                        <div class="sl-state-inn-content video-style01">
                            <iframe width="100%" height="100%" src="https://www.youtube.com/embed/PwZ2p3h8BxE"
                                title="YouTube video player" frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
                <div id="progress" class="sl-progress">
                    <div class="menu-inn sl-progress-inn">
                        <div class="sl-progress-inn-ttl subpage-ttl menu-inn-ttl">
                            <h2 class="under-line">施術経過</h2>
                        </div>
                        <div class="sl-progress-inn-content">
                            <div class="progress-fl d-fl">
                                <article>
                                        <figure>
                                            <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/potenza/potenza_12.png"
                                                alt="直後">
                                        </figure>
                                        <div class="info-txt">
                                            <h3>直後</h3>
                                            <p>施術直後は赤み・腫れが最も強く出ます。</p>
                                        </div>
                                </article>
                                <article>
                                        <figure>
                                            <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/potenza/potenza_13.png"
                                                alt="翌日">
                                        </figure>
                                        <div class="info-txt">
                                            <h3>翌日</h3>
                                            <p>赤み・腫れは1～2日ほどで治まることがほとんどです。</p>
                                        </div>
                                </article>
                                <article>
                                        <figure>
                                            <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/potenza/potenza_14.png"
                                                alt="10日後">
                                        </figure>
                                        <div class="info-txt">
                                            <h3>10日後</h3>
                                            <p>施術から1週間ほどでかさぶたがきれいに剥がれ落ちます。</p>
                                        </div>
                                </article>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="procedure" class="sl-procedure">
                    <div class="sl-procedure-inn menu-inn">
                        <div class="sl-procedure-inn-ttl subpage-ttl menu-inn-ttl">
                            <h2 class="under-line">ポテンツァの治療の流れ</h2>
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
                                    <h3 class="sp"><span>02.</span>診察・カウンセリング</h3>
                                    <figure>
                                        <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/procedure/flow_02.png"
                                            alt="診察・カウンセリング">
                                    </figure>
                                    <div>
                                        <h3 class="pc">診察・カウンセリング</h3>
                                        <p>医師による問診と、肌状態のチェックを行います。<br>
                                            その後看護師がお悩みをヒアリングし、治療方針を決定していきます。<br>
                                            目安の回数や料金プランなど、治療計画も初回にご提案します。
                                        </p>
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
                                    <h3 class="sp"><span>04.</span>麻酔クリーム塗布</h3>
                                    <figure>
                                        <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/procedure/flow_04.png"
                                            alt="麻酔クリーム塗布">
                                    </figure>
                                    <div>
                                        <h3 class="pc">麻酔クリーム塗布</h3>
                                        <p>麻酔クリームをご希望の場合は、施術前に麻酔クリームを施術部位に塗布し、30分ほどお待ちいただきます。<br>
                                            ※麻酔の効果が出るまで30分程度かかります。
                                        </p>
                                    </div>
                                </article>
                            </div>
                            <div class="pro-list-num">05</div>
                            <div class="d-fl pro-list-post">
                                <div class="h-line pc"></div>
                                <article class="d-fl">
                                    <h3 class="sp"><span>05.</span>施術</h3>
                                    <figure>
                                        <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/procedure/potenza_flow_05.png"
                                            alt="施術">
                                    </figure>
                                    <div>
                                        <h3 class="pc">施術</h3>
                                        <p>カウンセリング時にヒアリングした内容をもとに、ヘルツ、パワー、ショットごとの時間、重ね幅、針の深さなどを最適に設定し、照射していきます。施術時間は約60分です。
                                        </p>
                                    </div>
                                </article>
                            </div>
                            <div class="pro-list-num">06</div>
                            <div class="d-fl pro-list-post">
                                <div class="h-line pc"></div>
                                <article class="d-fl">
                                    <h3 class="sp"><span>06.</span>終了</h3>
                                    <figure>
                                        <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/procedure/potenza_flow_06.png"
                                            alt="終了">
                                    </figure>
                                    <div>
                                        <h3 class="pc">終了</h3>
                                        <p>施術後の肌はデリケートな状態ですので、こすらないようご注意ください。赤みや腫れは1～2日で徐々に治まります。メイクは翌日（24時間）から可能です。</p>
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
                                <h3 class="price-ttl"><span>ポテンツァ</span></h3>
                                <div class="price-list">
                                    <div class="d-fl price-list-wr">
                                        <div class="price-list-wr-l">
                                            <h4>肝斑改善</h4>
                                            <ul>
                                                <li class="d-fl">
                                                    <p>1回</p>
                                                    <p class="dash-line"></p>
                                                    <p>¥39,600</p>
                                                </li>
                                                <li class="d-fl">
                                                    <p>3回</p>
                                                    <p class="dash-line"></p>
                                                    <p>¥106,920</p>
                                                </li>
                                                <li class="d-fl">
                                                    <p>5回</p>
                                                    <p class="dash-line"></p>
                                                    <p>¥168,300</p>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="price-list-wr-l">
                                            <h4>開き毛穴•たるみ毛穴•肌引き締め</h4>
                                            <ul>
                                                <li class="d-fl">
                                                    <p>1回</p>
                                                    <p class="dash-line"></p>
                                                    <p>¥49,500</p>
                                                </li>
                                                <li class="d-fl">
                                                    <p>3回</p>
                                                    <p class="dash-line"></p>
                                                    <p>¥133,650</p>
                                                </li>
                                                <li class="d-fl">
                                                    <p>5回</p>
                                                    <p class="dash-line"></p>
                                                    <p>¥210,375</p>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="price-list-wr-l">
                                            <h4>血管拡張による赤み改善</h4>
                                            <ul>
                                                <li class="d-fl">
                                                    <p>1回</p>
                                                    <p class="dash-line"></p>
                                                    <p>¥49,500</p>
                                                </li>
                                                <li class="d-fl">
                                                    <p>3回</p>
                                                    <p class="dash-line"></p>
                                                    <p>¥133,650</p>
                                                </li>
                                                <li class="d-fl">
                                                    <p>5回</p>
                                                    <p class="dash-line"></p>
                                                    <p>¥210,375</p>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="price">
                                <h3 class="price-ttl"><span>ポテンツァ <br class="sp">(ドラッグデリバリー)</span></h3>
                                <div class="price-list">
                                    <div class="d-fl price-list-wr">
                                        <div class="price-list-wr-l">
                                            <h4>開きたるみ毛穴改善、<br class="sp">皮脂コントロール<br class="pc">ボトックス</h4>
                                            <ul>
                                                <li class="d-fl">
                                                    <p>1回</p>
                                                    <p class="dash-line"></p>
                                                    <p>¥66,000</p>
                                                </li>
                                                <li class="d-fl">
                                                    <p>3回</p>
                                                    <p class="dash-line"></p>
                                                    <p>¥178,200</p>
                                                </li>
                                                <li class="d-fl">
                                                    <p>5回</p>
                                                    <p class="dash-line"></p>
                                                    <p>¥280,500</p>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="price-list-wr-l">
                                            <h4>透明感アップ、乾燥ケア、<br class="sp">開きたるみ毛穴改善<br class="pc">ピンクグロウ</h4>
                                            <ul>
                                                <li class="d-fl">
                                                    <p>1回</p>
                                                    <p class="dash-line"></p>
                                                    <p>¥66,000</p>
                                                </li>
                                                <li class="d-fl">
                                                    <p>3回</p>
                                                    <p class="dash-line"></p>
                                                    <p>¥178,200</p>
                                                </li>
                                                <li class="d-fl">
                                                    <p>5回</p>
                                                    <p class="dash-line"></p>
                                                    <p>¥280,500</p>
                                                </li>
                                            </ul>
                                        </div>
                                        <!--<div class="price-list-wr-l">
                                            <h4>細胞の再生、抗酸化、老化の抑制<br>エクソソーム</h4>
                                            <ul>
                                                <li class="d-fl">
                                                    <p>1回</p>
                                                    <p class="dash-line"></p>
                                                    <p>¥99,000</p>
                                                </li>
                                                <li class="d-fl">
                                                    <p>3回</p>
                                                    <p class="dash-line"></p>
                                                    <p>¥267,300</p>
                                                </li>
                                                <li class="d-fl">
                                                    <p>5回</p>
                                                    <p class="dash-line"></p>
                                                    <p>¥420,750</p>
                                                </li>
                                            </ul>
                                        </div>-->
                                        <div class="price-list-wr-l">
                                            <h4>クレーター、凹凸ニキビ跡、<br class="sp">傷跡改善<br class="pc">マックーム</h4>
                                            <ul>
                                                <li class="d-fl">
                                                    <p>1回</p>
                                                    <p class="dash-line"></p>
                                                    <p>¥70,400</p>
                                                </li>
                                                <li class="d-fl">
                                                    <p>3回</p>
                                                    <p class="dash-line"></p>
                                                    <p>¥190,080</p>
                                                </li>
                                                <li class="d-fl">
                                                    <p>5回</p>
                                                    <p class="dash-line"></p>
                                                    <p>¥299,200</p>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="price-list-wr-l">
                                            <h4>ニキビ治療（皮脂腺破壊）</h4>
                                            <ul>
                                                <li class="d-fl">
                                                    <p>1〜5個まで</p>
                                                    <p class="dash-line"></p>
                                                    <p>¥99,000</p>
                                                </li>
                                                <li class="d-fl">
                                                    <p>5〜10個まで</p>
                                                    <p class="dash-line"></p>
                                                    <p>¥267,300</p>
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
                                    if ($contactTxt01 != '') : ?>
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
                        <a style="display:block;" target="_blank" href="https://lin.ee/U5tTSaw" class="sl-reservation-inn-banner">
                            <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/reservation-banner01.png" alt="LINE登録">
                        </a>
                    </div>
                </div>
                <div id="precautions" class="sl-precautions">
                    <div class="menu-inn sl-precautions-inn">
                        <div class="sl-precautions-inn-ttl subpage-ttl menu-inn-ttl">
                            <h2 class="under-line">ポテンツァの注意事項</h2>
                        </div>
                        <div class="sl-precautions-inn-content">
                            <div class="precautions-info">
                                <h3>治療時間</h3>
                                <p>30～90分<br>※部位や麻酔の有無によって異なります。</p>
                            </div>
                            <div class="precautions-info">
                                <h3>治療頻度</h3>
                                <p>肝斑治療：2週間ごと<br>その他：1ヶ月ごと</p>
                            </div>
                            <div class="precautions-info">
                                <h3>施術の痛み</h3>
                                <p>肌にピリピリとした痛みを感じる場合があります。<br>※麻酔により軽減可能。</p>
                            </div>
                            <div class="precautions-info">
                                <h3>副作用・ダウンタイム</h3>
                                <div class="info-inntxt">
                                    <h4>赤み・熱感・腫れ</h4>
                                    <p>1～2日、長くても1週間程度で落ち着きます。</p>
                                </div>
                                <div class="info-inntxt">
                                    <h4>痛み</h4>
                                    <p>日焼けしたときのようなヒリヒリとした痛みがあります。1～2日、長くても1週間程度で落ち着きます。</p>
                                </div>
                                <div class="info-inntxt">
                                    <h4>かさぶた</h4>
                                    <p>施術後1～3日後にかさぶたができます。肌がざらついた感触になりますが、1週間程度できれいに剥がれ落ちます。</p>
                                </div>
                                <div class="info-inntxt">
                                    <h4>色素沈着</h4>
                                    <p>まれに色素沈着が起こることがあります。適切に処置を行えば徐々に薄くなります。</p>
                                </div>
                                <div class="info-inntxt">
                                    <h4>ニキビ・毛嚢炎</h4>
                                    <p>好転反応により毛嚢炎やニキビ・皮脂分泌が一時的に増加する場合があります。</p>
                                </div>
                            </div>
                            <div class="precautions-info">
                                <h3>メイク</h3>
                                <p>翌日（24時間後）から可能です。</p>
                            </div>
                            <div class="precautions-info">
                                <h3>洗顔</h3>
                                <p>当日から可能です。<br>※施術患部は擦らないよう注意してください。</p>
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
                                <p>施術後1ヶ月程度は日焼けにご注意ください。日中の外出時はSPF30以上の日焼け止めをご使用ください。<br>※過度な日焼けをした場合はお肌が落ち着くまで治療はお控えください。</p>
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
                            <?php endwhile; endif; ?>
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
                        <div class="sl-connection-inn-ttl subpage-ttl menu-inn-ttl "><h2 class="under-line">毛穴改善に効果的な治療</h2></div>
                        <div class="sl-connection-inn-content">

                        <?php // get_template_part('template-parts/service/potenza'); ?>
                        <?php get_template_part('template-parts/service/peeling'); ?>
                        <?php get_template_part('template-parts/service/photoipl'); ?>
                        <?php get_template_part('template-parts/service/poreless-botox'); ?>
                            
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