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
"name": "ショートスレッドの施術の流れ",
"description": "ショートスレッドの施術の流れが分かる動画です。",
"thumbnailUrl": "https://lianclinic.net/renew2022/wp-content/themes/v_2/img/sub-whatthread-img01.png",
"uploadDate": "2022-09-07T08:00:00+09:00",
"duration": "PT11S",
"contentUrl": "https://lianclinic.net/renew2022/wp-content/themes/v_2/video/thread-state-video.mp4"
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
                <text id="LIAN_clinic_linking_you_to_beauty" data-name="LIAN clinic linking you to beauty" class="cls-mv-1"
                  transform="translate(0 35)">
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
                <text id="LIAN_clinic_linking_you_to_beauty" data-name="LIAN clinic linking you to beauty" class="cls-1" transform="translate(0 35)">
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
      <div id="menu"  class="sl-menu menu-thread">
        <div class="sl-menu-content">
          <div id="whatis" class="sl-whatis">
            <div class="sl-whatis-inn menu-inn attach-mv">
              <div class="sl-whatis-inn-ttl subpage-ttl menu-inn-ttl">
                <h2 class="under-line">What is Shopping Thread?</h2>
              </div>
              <div class="sl-whatis-inn-content">
                <div class="fl-style02 d-fl align-center">
                  <div class="image">
                    <img loading="lazy" class="pc" src="<?php echo get_template_directory_uri(); ?>/img/sub-whatthread-img01.png" alt="ショートスレッドとは">
                    <img loading="lazy" class="sp" src="<?php echo get_template_directory_uri(); ?>/img/sub-whatthread-img01-sp.png" alt="ショートスレッドとは">
                  </div>
                  <div class="content">
                    <p>Shopping threading is a treatment in which absorbable threads thinner than a hair are inserted into the subcutaneous tissue. Immediate tightening effects can be felt immediately after treatment, and the process of absorption into the skin (approximately 6-8 months) continues to stimulate the subcutaneous tissue, resulting in a wound healing effect and long-term collagen production, aiming to improve sagging, improve skin quality and elasticity through new cells, and improve pores.</p>
                  </div>
                </div>
                <div class="pg-text">
                  <p></p>
                  <p>Recommended for</p>
                </div>
                <div class="check-list">
                  <ul class="check-list-wr">
                    <li>Those who feel skin has lost its elasticity.</li>
                    <li>Those who are concerned about sagging of the sides of the mouth</li>
                    <li>Those concerned about sagging cheeks</li>
                    <li>Those who are concerned about facial line flabbiness.</li>
                    <li>Those who want to have a firmer skin without cutting.</li>
                    <li>Those who want to achieve results with less downtime.</li>
                  </ul>
                </div>
                <div class="pg-text">
                  <p>The threads themselves are absorbed after about six months, but since they are replaced by collagen and support the subcutaneous tissue, they do not end once they are absorbed and have a preventive effect on aging.</p>
                  <p>In addition, since collagen is increased from under the skin, the skin becomes firmer and tighter in appearance, and skin texture is improved, resulting in a skin rejuvenation effect.</p>
                </div>
              </div>
            </div>
          </div>
          <div id="benefits" class="sl-benefits">
            <div class="menu-inn sl-benefits-inn">
              <div class="sl-benefits-inn-ttl subpage-ttl menu-inn-ttl">
                <h2 class="under-line">Shopping Thread Effects<br class="sp"><small>(Symptoms that can be improved)</small></h2>
              </div>
              <div class="sl-benefits-inn-content">
                <div class="check-list">
                  <ul class="check-list-wr">
                    <li>Facelift</li>
                    <li>Lifting effect by pressure point stimulation</li>
                    <li>Face line tightening</li>
                    <li>Improvement of double chin</li>
                    <li>Increased skin elasticity</li>
                    <li>Improvement of fine lines and wrinkles</li>
                    <li>Skin beautification and improvement of skin texture</li>
                    <li>Promotes blood flow and lymphatic flow → Improvement of dark circles and dullness</li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <div id="commitment" class="sl-commitment">
            <div class="menu-inn sl-commitment-inn">
              <div class="sl-commitment-inn-ttl subpage-ttl menu-inn-ttl">
                <h2 class="under-line">LIAN's Shopping Thread</h2>
              </div>
              <div class="sl-commitment-inn-content">
                <div class="pg-text">
                  <p>Our doctors, who are experienced in shopping threading cases, <span class="color-01"><strong>precisely design type of needles and the depth of the needles to be inserted, and the method of inserting and removing the needles according to your concerns to maximize the effect of the procedure.</strong></span></p>
                </div>
              </div>
            </div>
          </div>
          <div id="features" class="sl-features">
            <div class="menu-inn sl-features-inn">
              <div class="sl-features-inn-ttl subpage-ttl menu-inn-ttl">
                <h2 class="under-line">LIAN’s Insertion Method</h2>
              </div>
              <div class=" sl-features-inn-content">
                <div class="fl-style03 d-fl">
                  <article class="fl-style03-item">
                    <figure>
                      <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/features/thread-feature01.png" alt="リアンクリニックの挿入方法">
                    </figure>
                    <h3><span class="list-no">01</span> Zigzag</h3>
                    <ul>
                      <li>Improvement of fine lines and wrinkles, skin tightening</li>
                      <li>Effective in improving dullness and skin tone</li>
                    </ul>
                    
                  </article>
                  <article class="fl-style03-item">
                    <figure>
                      <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/features/thread-feature02.png" alt="リアンクリニックの挿入方法">
                    </figure>
                    <h3><span class="list-no">02</span> Circular</h3>
                    <ul>
                      <li>Skin tightening, fat dissolving</li>
                      <li>Improvement of small face effect and facial line leaning</li>
                    </ul>
                  </article>
                  <article class="fl-style03-item">
                    <figure>
                      <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/features/thread-feature03.png" alt="リアンクリニックの挿入方法">
                    </figure>
                    <h3><span class="list-no">03</span>Mesh</h3>
                    <ul>
                      <li>Prevention of sagging and improvement of lines</li>
                      <li>Fat dissolving and small face effect</li>
                      <li>Effective in increasing skin elasticity and firmness</li>
                    </ul>
                  </article>
                </div>
              </div>
            </div>
          </div>
          <div id="types" class="sl-types">
            <div class="menu-inn sl-types-inn">
              <div class="sl-types-inn-ttl subpage-ttl menu-inn-ttl">
                <h2 class="under-line">Thread Type</h2>
              </div>
              <div class="sl-types-inn-content">
                <div class="fl-style01">
                  <article class="fl-style01-item">
                    <h2 class="fl-style01-item-ttl"><span class="list-no">01</span>Mono Thread</h2>
                    <div class="d-fl fl-style01-item-content">
                      <figure>
                        <img loading="lazy" class="pc" src="<?php echo get_template_directory_uri(); ?>/img/types/thread-types01.png"
                          alt="糸の種類">
                        <img loading="lazy" class="sp" src="<?php echo get_template_directory_uri(); ?>/img/types/thread-types01-sp.png"
                          alt="糸の種類">
                      </figure>
                      <div class="fl-style01-item-content-txt">
                        <p>Mono thread is thin and short threads called shopping threads. The insertion of threads stimulates collagen production in the dermis, resulting in an increase in skin firmness and elasticity, a tightening effect, and a mild lifting effect.</p>
                      </div>
                    </div>
                  </article>
                  <article class="fl-style01-item">
                    <h2 class="fl-style01-item-ttl"><span class="list-no">02</span>Spring Thread</h2>
                    <div class="d-fl fl-style01-item-content">
                      <figure>
                        <img loading="lazy" class="pc" src="<?php echo get_template_directory_uri(); ?>/img/types/thread-types02.png"
                          alt="糸の種類">
                        <img loading="lazy" class="sp" src="<?php echo get_template_directory_uri(); ?>/img/types/thread-types02-sp.png"
                          alt="糸の種類">
                      </figure>
                      <div class="fl-style01-item-content-txt">
                        <p>Spring Thread is mono thread coiled around a needle. By wrapping the threads around the needle, the contact area of the threads increases, which is believed to enhance the collagen production effect. It is recommended for use in areas with a large amount of fat. Pain and resistance at the time of insertion are slightly greater than those of mono-threads.</p>
                      </div>
                    </div>
                  </article>
                  <article class="fl-style01-item">
                    <h2 class="fl-style01-item-ttl"><span class="list-no">03</span>Vitamin Thread</h2>
                    <div class="d-fl fl-style01-item-content">
                      <figure>
                        <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/types/thread-types03.png"
                          alt="糸の種類">
                      </figure>
                      <div class="fl-style01-item-content-txt">
                        <p>Vitamin thread is made of PCL, an absorbent thread that is one of the most supple and flexible threads used in medical applications. This thread has the characteristic of being completely decomposed and absorbed by the body through hydrolysis, and is slowly absorbed over a period of approximately two years.<br>
                          The surface of the PCL threads has numerous small holes that are invisible to the naked eye, and the vitamin C added to the threads is gradually released over a period of about six months. Vitamin C not only improves dark spots, firmness, elasticity, and antioxidant properties, but also aids in collagen production, making the threads more effective in collagen production.</p>
                      </div>
                    </div>
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
                        <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/case/thread-case01.png" alt="症例写真">
                      </figure>
                      <div class="content">
                        <dl>
                          <dt>Treatment</dt>
                          <dd>Shopping thread</dd>
                        </dl>
                        <dl>
                          <dt>Explanation of treatment</dt>
                          <dd>A needle with a dissolvable thread is inserted into the skin,<br>This treatment improves sagging and elasticity of the skin.</dd>
                        </dl>
                        <dl>
                          <dt>Side effects</dt>
                          <dd>Pain, internal bleeding, swelling, thread exposure, twitching</dd>
                        </dl>
                        <dl>
                          <dt>Price</dt>
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
                          <dt>Treatment</dt>
                          <dd>Shopping thread</dd>
                        </dl>
                        <dl>
                          <dt>Explanation of treatment</dt>
                          <dd>A needle with a dissolvable thread is inserted into the skin,<br>This treatment improves sagging and elasticity of the skin.</dd>
                        </dl>
                        <dl>
                          <dt>Side effects</dt>
                          <dd>Pain, internal bleeding, swelling, thread exposure, twitching</dd>
                        </dl>
                        <dl>
                          <dt>Price</dt>
                          <dd>￥66,000〜¥225,500</dd>
                        </dl>
                      </div>
                    </a>
                  </article>
                </div>
              </div>
            </div>
          </div>
          <div id="state" class="sl-state">
            <div class="menu-inn sl-state-inn">
              <div class="sl-state-inn-ttl subpage-ttl menu-inn-ttl">
                <h2 class="under-line">Video of Shopping Thread</h2>
              </div>
              <div class="sl-state-inn-content video-style01">
              <iframe width="100%" height="100%" src="https://www.youtube.com/embed/fPL_VvMTYFQ?enablejsapi=1" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
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
                    <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/treatment/treatment01.png" alt="HIFU">
                  </div>
                  <div class="content content01">
                    <h3>HIFU</h3>
                    <p>HIFU is a treatment that delivers high-density ultrasound energy to the SMAS fascia with pinpoint accuracy to tighten and lift sagging skin. The SMAS fascia, one of the causes of sagging, is located in the deeper layers of the skin and cannot be reached by laser or RF. With HIF, ultrasonic waves pinpoint the subcutaneous tissue, dermis, and epidermal basement membrane, including the SMAS fascia, and can improve the appearance of sagging skin.</p>
                  </div>
                </div>
                <div class="fl-style02 d-fl row-reverse">
                  <div class="image">
                    <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/treatment/treatment02.png" alt="サーマジェン">
                  </div>
                  <div class="content content01">
                    <h3>Thermagen</h3>
                    <p>Thermagen (RF) is said to be an advanced version of Thermacool. By irradiating radiofrequency waves to the skin, this treatment is expected to stimulate collagen production, tighten the skin, improve sagging and wrinkles, and lift up the skin. By taking advantage of the deep penetration of radiofrequency waves, the collagen in the dermis layer of the skin increases, which not only causes sagging but also tightens the skin and improves facial lines by contracting the fiber walls of the subcutaneous tissue due to heat.</p>
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
                  <h3 class="price-ttl"><span>Shopping Thread</span></h3>
                  <div class="price-list">
                    <div class="d-fl price-list-wr">
                      <div class="price-list-wr-l">
                        <h3>Mono Thread</h3>
                        <ul>
                          <li class="d-fl">
                            <p>20 threads</p>
                            <p class="dash-line"></p>
                            <p>¥66,000</p>
                          </li>
                          <li class="d-fl">
                            <p>40 threads</p>
                            <p class="dash-line"></p>
                            <p>¥99,000</p>
                          </li>
                          <li class="d-fl">
                            <p>60 threads</p>
                            <p class="dash-line"></p>
                            <p>¥132,000</p>
                          </li>
                          <li class="d-fl">
                            <p>80 threads</p>
                            <p class="dash-line"></p>
                            <p>¥165,000</p>
                          </li>
                          <li class="d-fl">
                            <p>100 threads</p>
                            <p class="dash-line"></p>
                            <p>¥198,000</p>
                          </li>
                        </ul>
                      </div>
                      <div class="price-list-wr-l">
                        <h3>Spring Thread</h3>
                        <ul>
                          <li class="d-fl">
                            <p>20 threads</p>
                            <p class="dash-line"></p>
                            <p>¥88,000</p>
                          </li>
                          <li class="d-fl">
                            <p>40 threads</p>
                            <p class="dash-line"></p>
                            <p>¥121,000</p>
                          </li>
                          <li class="d-fl">
                            <p>60 threads</p>
                            <p class="dash-line"></p>
                            <p>¥154,000</p>
                          </li>
                          <li class="d-fl">
                            <p>80 threads</p>
                            <p class="dash-line"></p>
                            <p>¥176,000</p>
                          </li>
                          <li class="d-fl">
                            <p>100 threads</p>
                            <p class="dash-line"></p>
                            <p>¥220,000</p>
                          </li>
                        </ul>
                      </div>
                      <div class="price-list-wr-l">
                        <h3>Vitamin Thread</h3>
                        <ul>
                          <li class="d-fl">
                            <p>20 threads</p>
                            <p class="dash-line"></p>
                            <p>¥93,500</p>
                          </li>
                          <li class="d-fl">
                            <p>40 threads</p>
                            <p class="dash-line"></p>
                            <p>¥126,500</p>
                          </li>
                          <li class="d-fl">
                            <p>60 threads</p>
                            <p class="dash-line"></p>
                            <p>¥159,500</p>
                          </li>
                          <li class="d-fl">
                            <p>80 threads</p>
                            <p class="dash-line"></p>
                            <p>¥192,500</p>
                          </li>
                          <li class="d-fl">
                            <p>100 threads</p>
                            <p class="dash-line"></p>
                            <p>¥225,500</p>
                          </li>
                        </ul>
                      </div>
                      <div class="price-list-wr-l">
                        <h3>Customized Thread</h3>
                        <ul>
                          <li class="d-fl">
                            <p>60 threads</p>
                            <p class="dash-line"></p>
                            <p>¥148,500</p>
                          </li>
                          <li class="d-fl">
                            <p>80 threads</p>
                            <p class="dash-line"></p>
                            <p>¥181,500</p>
                          </li>
                          <li class="d-fl">
                            <p>100 threads</p>
                            <p class="dash-line"></p>
                            <p>¥214,500</p>
                          </li>
                        </ul>
                      </div>
                    </div>
                    <p class="price-list-warn pc">※Tax included<br>Translation fee will be charged in addition to the treatment fee.</p>
                  </div>
                </div>
                <p class="price-list-warn sp">※Tax <br>Translation fee will be charged in addition to the treatment fee.</p>
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
          <div id="notes" class="sl-notes">
            <div class="menu-inn sl-notes-inn">
              <div class="sl-notes-inn-ttl subpage-ttl menu-inn-ttl">
                <h2 class="under-line">Shopping Thread Notes.</h2>
              </div>
              <div class="sl-notes-inn-content">
                <div class="pg-text">
                  <p>The following persons are not eligible to receive this service. If you have any concerns, please consult your doctor.</p>
                </div>
                <div class="check-list">
                  <ul class="check-list-wr">
                    <li>Pregnant or nursing mothers</li>
                    <li>Skin infection or skin irritation</li>
                    <li>Keloids and wound healing problems</li>
                  </ul>
                </div>
                <div class="pg-text">
                  <p>
                  When cleansing and washing the face, please do so gently so as not to irritate the skin.<br>
                  Also, please avoid massages for about a month after the treatment. Bathing is allowed on the same day.<br>
                  After the shopping thread treatment, there will be swelling and edema.<br>
                  Pain sensitivity varies from person to person, but anesthesia by application or laughing anesthesia is available.<br>
                  In some cases, internal bleeding may occur, but it will become less noticeable over time.<br>
                  Makeup can be applied immediately after the treatment except for the area where the needle was inserted.<br>
                  The day after the treatment, makeup can be applied to the area where the needle was inserted, and in case of internal bleeding, the area can be covered with foundation or concealer.
                  </p>
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
                      'terms' => 'thread_cat'
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
        </div>          
      </div>
    <?php } else { ?>
      <div id="mv" class="sl-mv">
        <div class="d-fl sl-mv-inn">
          <div class="sl-mv-inn-ttl">
            <h2 class="pc">
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
            </h2>
            <h2 class="sp">
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
      <div id="menu"  class="sl-menu menu-thread">
        <div class="sl-menu-content">
          <div id="whatis" class="sl-whatis">
            <div class="sl-whatis-inn menu-inn attach-mv">
              <div class="sl-whatis-inn-ttl subpage-ttl menu-inn-ttl">
                <h2 class="under-line">ショートスレッドとは</h2>
              </div>
              <div class="sl-whatis-inn-content">
                <div class="fl-style02 d-fl align-center">
                  <div class="image">
                    <img loading="lazy" class="pc" src="<?php echo get_template_directory_uri(); ?>/img/sub-whatthread-img01.png" alt="ショートスレッドとは">
                    <img loading="lazy" class="sp" src="<?php echo get_template_directory_uri(); ?>/img/sub-whatthread-img01-sp.png" alt="ショートスレッドとは">
                  </div>
                  <div class="content">
                    <p>
                    ショートスレッドとは、特殊な鍼を皮膚に挿入し、鍼の中に内蔵された髪の毛よりも更に細い吸収性の糸を埋め込みます。治療直後から即効性の引き締め効果を実感していただけますが、皮膚に吸収される（約６～８ヶ月）の過程で皮下組織に刺激を与え続け、創傷治癒効果をもたらし長期的なコラーゲン生成により、たるみ改善、新細胞による肌質の向上や弾力アップ、毛穴改善を目指します。
                    </p>
                  </div>
                </div>
                <div class="check-list">
                  <ul class="check-list-wr">
                    <li>お肌に張りがなくなってきた</li>
                    <li>口横のたるみが気になる方</li>
                    <li>頬のたるみが気になる方</li>
                    <li>フェイスラインのもたつきが気になる方</li>
                    <li>切らずにお肌にハリを出したい方</li>
                    <li>ダウンタイムが少なく効果を出したい方</li>
                  </ul>
                </div>
                <div class="pg-text">
                  <p>におすすめです。</p>
                  <p>糸自体は半年ほどで吸収されますが、コラーゲンに置き換わり、皮下組織を支持するため、吸収されれば終わりでなく、老化の予防効果があります。</p>
                  <p>
                  また、皮下からコラーゲンが増生されるため、お肌にハリが出て見た目も引き締まり、お肌の肌理も改善して、肌の若返り効果も期待できます。
                  </p>
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
                      <p>ショートスレッドは、髪の毛よりも細い糸を挿入することで引き締めや肌質改善を行う施術です。糸リフトとは異なり、糸で引き上げを行う治療ではないため、引き連れや術後の痛みなどは起こりづらいです。当院では、お客様に合わせた糸の種類や挿入方法を変えることで、カスタマイズしたショートスレッドをご提案いたします。</p>
                    </div>
                    <?php echo get_template_part('template-parts/sv-guidelines'); ?>
                </div>
              </div>
            </div>
          </div>
          <div id="benefits" class="sl-benefits">
            <div class="menu-inn sl-benefits-inn">
              <div class="sl-benefits-inn-ttl subpage-ttl menu-inn-ttl">
                <h2 class="under-line">ショートスレッドの効果<br class="sp"><small>（改善できる症状）</small></h2>
              </div>
              <div class="sl-benefits-inn-content">
                <div class="check-list">
                  <ul class="check-list-wr">
                    <li>小顔効果</li>
                    <li>ツボ刺激によるリフトアップ効果</li>
                    <li>フェイスラインの引き締め</li>
                    <li>二重顎の改善</li>
                    <li>肌のハリ感アップ</li>
                    <li>小じわの改善</li>
                    <li>美肌効果・肌質の向上</li>
                    <li>血流・リンパの流れを促進する→くまやくすみの改善</li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <div id="commitment" class="sl-commitment">
            <div class="menu-inn sl-commitment-inn">
              <div class="sl-commitment-inn-ttl subpage-ttl menu-inn-ttl">
                <h2 class="under-line">リアンクリニックのこだわり</h2>
              </div>
              <div class="sl-commitment-inn-content">
                <div class="pg-text">
                  <p>ショートスレッドの症例経験豊富な医師がお悩みに応じて、<span class="color-01"><strong>針の本数・種類、挿入する針の深さ、針の入れ方、抜き方</strong></span>まで<span class="color-01"><strong>緻密に設計し最大限の
                  効果を発揮できるように施術</strong></span>しております。</p>
                </div>
              </div>
            </div>
          </div>
          <div id="features" class="sl-features">
            <div class="menu-inn sl-features-inn">
              <div class="sl-features-inn-ttl subpage-ttl menu-inn-ttl">
                <h2 class="under-line">リアンクリニックの挿入方法</h2>
              </div>
              <div class=" sl-features-inn-content">
                <div class="fl-style03 d-fl">
                  <article class="fl-style03-item">
                    <figure>
                      <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/features/thread-feature01.png" alt="リアンクリニックの挿入方法">
                    </figure>
                    <h3><span class="list-no">01</span> Zigzag</h3>
                    <ul>
                      <li>小じわの改善、肌の引き締め</li>
                      <li>くすみ改善、美肌効果に有効</li>
                    </ul>
                    
                  </article>
                  <article class="fl-style03-item">
                    <figure>
                      <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/features/thread-feature02.png" alt="リアンクリニックの挿入方法">
                    </figure>
                    <h3><span class="list-no">02</span> Circular</h3>
                    <ul>
                      <li>肌の引き締め、脂肪溶解</li>
                      <li>小顔効果やフェイスラインのもたつきを改善</li>
                    </ul>
                  </article>
                  <article class="fl-style03-item">
                    <figure>
                      <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/features/thread-feature03.png" alt="リアンクリニックの挿入方法">
                    </figure>
                    <h3><span class="list-no">03</span>Mesh</h3>
                    <ul>
                      <li>たるみの予防、ほうれい線の改善</li>
                      <li>脂肪溶解や小顔効果</li>
                      <li>肌のハリ弾力アップに有効</li>
                    </ul>
                  </article>
                </div>
              </div>
            </div>
          </div>
          <div id="types" class="sl-types">
            <div class="menu-inn sl-types-inn">
              <div class="sl-types-inn-ttl subpage-ttl menu-inn-ttl">
                <h2 class="under-line">糸の種類</h2>
              </div>
              <div class="sl-types-inn-content">
                <div class="fl-style01">
                  <article class="fl-style01-item">
                    <h2 class="fl-style01-item-ttl"><span class="list-no">01</span>モノスレッド</h2>
                    <div class="d-fl fl-style01-item-content">
                      <figure>
                        <img loading="lazy" class="pc" src="<?php echo get_template_directory_uri(); ?>/img/types/thread-types01.png"
                          alt="糸の種類">
                        <img loading="lazy" class="sp" src="<?php echo get_template_directory_uri(); ?>/img/types/thread-types01-sp.png"
                          alt="糸の種類">
                      </figure>
                      <div class="fl-style01-item-content-txt">
                        <p>モノスレッドはショッピングスレッドと呼ばれる細く短いスレッドです。 スレッドの挿入により真皮内コラーゲン生成が促され、肌のハリ・弾力のUP、タイトニング効果、マイルドなリフトアップ効果が期待できます。</p>
                      </div>
                    </div>
                  </article>
                  <!--
                  <article class="fl-style01-item">
                    <h2 class="fl-style01-item-ttl"><span class="list-no">03</span> ビタミンスレッド</h2>
                    <div class="d-fl fl-style01-item-content">
                      <figure>
                        <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/types/thread-types03.png"
                          alt="糸の種類">
                      </figure>
                      <div class="fl-style01-item-content-txt">
                        <p>ビタミンスレッドは医療用で使用される糸の中でも、しなやかで柔軟性に優れた吸収糸のPCLを使用しています。加水分解により体内で完全に分解・吸収される特性を持つ糸で、約２年かけてゆっくりと吸収されていきます。
                          <br>PCLスレッドの表面には肉眼では見えない多数の小さな穴が空いており、そこに添加されているビタミンCは約半年かけて徐々に放出されていきます。ビタミンCはシミ・くすみの改善、ハリ・弾力アップ、抗酸化作用などの作用を持つだけではなく、コラーゲンの生成を助ける働きがあるため、スレッドによるコラーゲン生成をより効果的に行うことができます。
                        </p>
                      </div>
                    </div>
                  </article>-->
                </div>
              </div>
            </div>
          </div>
          <div id="case" class="sl-case">
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
          </div>
          <div id="state" class="sl-state">
            <div class="menu-inn sl-state-inn">
              <div class="sl-state-inn-ttl subpage-ttl menu-inn-ttl">
                <h2 class="under-line">施術の様子</h2>
              </div>
              <div class="sl-state-inn-content video-style01">
            <iframe width="100%" height="100%" src="https://www.youtube.com/embed/fPL_VvMTYFQ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
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
                    <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/treatment/treatment01.png" alt="HIFU">
                  </div>
                  <div class="content content01">
                    <h3>HIFU</h3>
                    <p>HIFU（ハイフ）とは、高密度の超音波エネルギーをSMAS筋膜へピンポイントに照射し、たるみの引き締め・引き上げの効果が期待できる施術です。たるみの原因の一つである『スマス筋膜』は皮膚の深層に存在するためレーザーやRFでは届きません。ハイフはSMAS筋膜を含む皮下組織、真皮、表皮基底膜にピンポイントで超音波が到達するため、たるみの改善が可能です。</p>
                  </div>
                </div>
                <div class="fl-style02 d-fl row-reverse">
                  <div class="image">
                    <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/treatment/treatment02.png" alt="サーマジェン">
                  </div>
                  <div class="content content01">
                    <h3>サーマジェン</h3>
                    <p>
                      サーマジェン（RF）は、サーマクールの進化版と言われています。ラジオ波をお肌に照射することで、コラーゲンの生成を促進させてお肌を引き締め、たるみやシワなどを改善しリフトアップ効果が期待できる施術です。高周波の深部深達性を活かし、お肌の真皮層内のコラーゲンが増えることでたるみだけでなく、皮下組織の繊維隔壁が熱で収縮することでお肌が引き締まりフェイスラインのもたつきを改善させる事が可能です。
                    </p>
                  </div>
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
                  <h3 class="price-ttl"><span>ショートスレッド</span></h3>
                  <div class="price-list">
                    <div class="d-fl price-list-wr">
                      <div class="price-list-wr-l">
                        <h3>モノスレッド</h3>
                        <ul>
                          <li class="d-fl">
                            <p>20本</p>
                            <p class="dash-line"></p>
                            <p>¥66,000</p>
                          </li>
                          <li class="d-fl">
                            <p>40本</p>
                            <p class="dash-line"></p>
                            <p>¥99,000</p>
                          </li>
                          <li class="d-fl">
                            <p>60本</p>
                            <p class="dash-line"></p>
                            <p>¥132,000</p>
                          </li>
                          <li class="d-fl">
                            <p>80本</p>
                            <p class="dash-line"></p>
                            <p>¥165,000</p>
                          </li>
                          <li class="d-fl">
                            <p>100本</p>
                            <p class="dash-line"></p>
                            <p>¥198,000</p>
                          </li>
                        </ul>
                      </div>
                    </div>
                    <p class="price-list-warn pc">※すべて税込価格です</p>
                  </div>
                </div>
                <p class="price-list-warn sp">※すべて税込価格です</p>
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
          <div id="notes" class="sl-notes">
            <div class="menu-inn sl-notes-inn">
              <div class="sl-notes-inn-ttl subpage-ttl menu-inn-ttl">
                <h2 class="under-line">ショートスレッドの注意事項</h2>
              </div>
              <div class="sl-notes-inn-content">
                <div class="pg-text">
                  <p>以下の人は受けられません。また気になることがある方は医師にご相談下さい。</p>
                </div>
                <div class="check-list">
                  <ul class="check-list-wr">
                    <li>妊娠・授乳中の方</li>
                    <li>皮膚感染、皮膚に炎症をおこしている方</li>
                    <li>ケロイド、創傷治癒に問題のある方</li>
                  </ul>
                </div>
                <div class="pg-text">
                  <p>
                  <strong>クレンジングや洗顔時は刺激を与えない様に、優しく行って下さい。
                  <br>また、マッサージは施術後1ヶ月程度は避けてください。入浴は当日から可能です。</strong><br>ショッピングスレッド治療後は、腫れ・浮腫みがあります。<br>痛みに対する感じ方は個人差がありますが、塗る麻酔、笑気麻酔のご用意がございます。<br>内出血となるケースがありますが、いずれも時間の経過とともに気にならなくなります。<br>治療後すぐ、針を刺した箇所以外はメイクが可能です。<br>治療後翌日からは、針を刺した箇所もメイクが可能で、万が一内出血となった場合でも、ファンデーションやコンシーラーで気になる部分をカバーできます。
                  </p>
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
                      'terms' => 'thread_cat'
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
                <div class="sl-connection-inn-ttl subpage-ttl menu-inn-ttl "><h2 class="under-line">たるみ・しわに効果的な治療</h2></div>
                <div class="sl-connection-inn-content">

                <?php get_template_part('template-parts/service/hifu'); ?>
                <?php get_template_part('template-parts/service/sarmagen'); ?>
                <?php get_template_part('template-parts/service/liftup-botox'); ?>
                <?php // get_template_part('template-parts/service/thread'); ?>
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

    <?php get_template_part( 'footer-company' );?>
  </main>
</div>
<?php
get_footer();
