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
      <div id="menu"  class="sl-menu menu-hyaluronic">
        <div class="sl-menu-content">
          <div id="beware" class="sl-beware">
            <div class="sl-beware-inn menu-inn attach-mv">
              <div class="sl-beware-inn-ttl subpage-ttl menu-inn-ttl pc">
                <h2 class="under-line">Caution!</h2>
              </div>
              <div class="sl-beware-inn-content">
                <div class="sl-beware-inn-ttl subpage-ttl menu-inn-ttl sp">
                  <h2 class="under-line">Caution!</h2>
                </div>
                <div class="pg-text">
                  <p>When hyaluronic acid is extremely inexpensive, it may be diluted with saline solution.<br>
                    When hyaluronic acid is diluted, even a treatment that is supposed to last 12 months may last only 3 months, resulting in a higher treatment cost.</p>
                  <p><strong><span class="color-01">Our clinic uses only genuine, undiluted hyaluronic acid from Allergan, which is certified by the Ministry of Health, Labor and Welfare.</span></strong></p>                 
                </div>
              </div>
            </div>
          </div>
          <div id="whatis" class="sl-whatis">
            <div class="sl-whatis-inn menu-inn">
              <div class="sl-whatis-inn-ttl subpage-ttl menu-inn-ttl">
                <h2 class="under-line">What is Hyaluronic Acid?</h2>
              </div>
              <div class="sl-whatis-inn-content">
                <div class="fl-style02 d-fl align-center">
                  <div class="image">
                    <img loading="lazy" class="pc" src="<?php echo get_template_directory_uri(); ?>/img/sub-whathyaluronic-img01.png" alt="ヒアルロン酸とは">
                    <img loading="lazy" class="sp" src="<?php echo get_template_directory_uri(); ?>/img/sub-whathyaluronic-img01-sp.png" alt="ヒアルロン酸とは">
                  </div>
                  <div class="content">
                    <p>Hyaluronic acid can be injected to create volume and firmness in various areas. It can be used to contour the nose, chin, forehead, etc., increase the volume of tear troughs and lips, and improve wrinkles and sagging of the cheeks and laugh lines.</p>
                  </div>
                </div>
                <div class="pg-text">
                  <p></p>
                  <p>This treatment is recommended for</p>
                </div>
                <div class="check-list">
                  <ul class="check-list-wr">
                    <li>I’m concerned about my laugh lines.</li>
                    <li>The position of the top of the cheeks is lower than before</li>
                    <li>The cheeks are generally skinny and shadowy.</li>
                    <li>Hollowing around the temples.</li>
                    <li>The forehead has lost its roundness and become flat.</li>
                    <li>Upper eyelid looks heavy and eyes are getting smaller</li>
                  </ul>
                </div>
                <div class="pg-text">
                  <p>With aging, the facial bones atrophy, the ligaments that support the tissues atrophy, and the entire face sags.<br>
                    The temples are said to concave about 3.4 mm with aging. It has also been reported that the profile can elongate by 2-12 cm.<br>
                    Thus, aging causes unevenness in various areas and is recognized as an aging phenomenon.
                  </p>
                </div>
                <div class="image-center">
                  <h3>Changes in ligaments due to aging <small>(image)</small></h3>
                  <figure>
                    <img loading="lazy" class="pc" src="<?php echo get_template_directory_uri(); ?>/img/sub-whathyaluronic-img03.png" alt="老化による靱帯の変化（イメージ図）">
                    <img loading="lazy" class="sp" src="<?php echo get_template_directory_uri(); ?>/img/sub-whathyaluronic-img03-sp.png" alt="老化による靱帯の変化（イメージ図）">
                  </figure>
                </div>
                <div class="pg-text">
                  <p>Atrophic bones and sagging ligaments can be replaced with hyaluronic acid, as shown in the figure below, to lift drooping tissues and lift and reshape them for aging care.</p>
                </div>
                <div class="image-center">
                  <h3>Effects of ligamentous changes on the face as a whole <small>(image)</small></h3>
                  <figure>
                    <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/sub-whathyaluronic-img02.png" alt="老化による靱帯の変化（イメージ図）">
                  </figure>
                </div>
              </div>
            </div>
          </div>
          <div id="effect" class="sl-effect">
            <div class="menu-inn sl-effect-inn">
              <div class="sl-effect-inn-ttl subpage-ttl menu-inn-ttl">
                <h2 class="under-line">Effects of Hyaluronic Acid <br class="sp"><small>(Symptoms that can be improved)</small></h2>
              </div>
              <div class="sl-effect-inn-content">
                <div class="check-list">
                  <ul class="check-list-wr">
                    <li>Liftup</li>
                    <li>Plumps up depressed temples and ideal face line.</li>
                    <li>Improvement of laugh lines and marionette lines</li>
                    <li>Improvement of fine lines and wrinkles</li>
                    <li>Skin beautification and improvement of skin texture</li>
                  </ul>
                </div>
                <div class="image-center">
                  <figure>
                    <img loading="lazy" class="pc" src="<?php echo get_template_directory_uri(); ?>/img/effect/hyaluronic-effect01.png" alt="ヒアルロン酸の効果（改善できる症状）">
                    <img loading="lazy" class="sp" src="<?php echo get_template_directory_uri(); ?>/img/effect/hyaluronic-effect01-sp.png" alt="ヒアルロン酸の効果（改善できる症状）">
                  </figure>
                </div>
              </div>
            </div>
          </div>
          <div id="commit" class="sl-commit">
            <div class="menu-inn sl-commit-inn">
              <div class="sl-commit-inn-ttl subpage-ttl menu-inn-ttl">
                <h2 class="under-line">LIAN’s Hyaluronic Acid Injection</h2>
              </div>
              <div class="sl-commit-inn-content">
                <div class="fl-style02 d-fl">
                  <div class="image">
                    <img loading="lazy" class="pc" src="<?php echo get_template_directory_uri(); ?>/img/commit/hyaluronic-commit01.png" alt="リアンクリニックのこだわり">
                    <img loading="lazy" class="sp" src="<?php echo get_template_directory_uri(); ?>/img/commit/hyaluronic-commit01-sp.png" alt="リアンクリニックのこだわり">
                  </div>
                  <div class="content">
                    <p>Our doctors with extensive experience in hyaluronic acid cases precisely design the number and type of hyaluronic acid, the depth of the needle to be inserted, the needle insertion method, and the injection technique according to your concerns to maximize the effect of the procedure.</p>
  
                    <p>We place the utmost importance on natural-looking results. Please understand that we may refuse to use hyaluronic acid if the result is "a face with obvious discomfort" or "a face that has clearly undergone plastic surgery".</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div id="reason" class="sl-reason">
            <div class="menu-inn sl-reason-inn">
              <div class="sl-reason-inn-content">
                <div class="fl-style01">
                  <article class="fl-style01-item">
                    <h2 class="fl-style01-item-ttl"><span class="list-no">01</span>LIAN style microtechnique</h2>
                    <div class="d-fl fl-style01-item-content">
                      <figure>
                        <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/reason/hyaluronic-reason01.png" alt="LIAN style microtechnique">
                      </figure>
                      <div class="fl-style01-item-content-txt">
                        <p>In the treatment of wrinkles and hollows, the most important factor is where and how much hyaluronic acid is injected. With the Liane micro-technique, the injection position is adjusted in finer increments than millimeters.
                        </p>
                      </div>
                    </div>
                  </article>
                  <article class="fl-style01-item">
                    <h2 class="fl-style01-item-ttl"><span class="list-no sp-twoline">02</span>Use of safe and high-quality hyaluronic acid</h2>
                    <div class="d-fl fl-style01-item-content">
                      <figure>
                        <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/reason/hyaluronic-reason02.png" alt="Use of safe and high-quality hyaluronic acid">
                      </figure>
                      <div class="fl-style01-item-content-txt">
                        <p>There are many types of hyaluronic acid. Some are now being made in China at lower prices. However, newer or cheaper is not always better. We use only high quality hyaluronic acid with a proven safety record. We use the Duviderm® Vista® series, which is approved by the Ministry of Health, Labor and Welfare for the treatment of facial wrinkles and furrows.</p>
                      </div>
                    </div>
                  </article>
                  <article class="fl-style01-item">
                    <h2 class="fl-style01-item-ttl"><span class="list-no">03</span>Lift-up hyaluronic acid</h2>
                    <div class="d-fl fl-style01-item-content align-center">
                      <figure>
                        <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/reason/hyaluronic-reason03.png" alt="Lift-up hyaluronic acid">
                      </figure>
                      <div class="fl-style01-item-content-txt">
                        <p>By injecting hyaluronic acid to support the ligaments, the loose ligaments are raised and sagging is naturally improved. Our doctors, who have extensive experience in case studies, provide consistent services from counseling to treatment to offer the improvement that best suits your needs. All of the doctors at Liane have undergone training on JUVIDERM VISTA.</p>
                      </div>
                    </div>
                  </article>
                </div>
              </div>
            </div>
          </div>
          <div id="whatliftup" class="sl-whatliftup">
            <div class="menu-inn sl-whatliftup-inn">
              <div class="sl-whatliftup-inn-ttl subpage-ttl menu-inn-ttl">
                <h2 class="under-line">What is Lift-up Hyaluronic Acid?</h2>
              </div>
              <div class="sl-whatliftup-inn-content">
                <div class="whatliftup-guideline">
                  <h3>Injection points for lifting and Injection Dosage</h3>
                  <div class="whatliftup-guideline-fl d-fl">
                    <figure class="image">
                      <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/whatliftup-img.png" alt="リフトアップのための注入ポイントと注入量の目安">
                    </figure>
                    <div class="content">
                      <p class="left-border pc">
                      T1こめかみ（0.7cc）<br>
                      Ck1頬（0.3cc）<br>
                      Ck3頬（0.5cc）<br>
                      C6マリオネット（0.5cc）<br>
                      C1アゴ（0.7cc）<br>
                      C2アゴ（0.3cc）
                      </p>
                      <p class="left-border sp">
                      T1こめかみ（0.7cc）、Ck1頬（0.3cc）、<br>
                      Ck3頬（0.5cc）、C6マリオネット（0.5cc）、<br>
                      C1アゴ（0.7cc）、C2アゴ（0.3cc）
                      </p>
                      <p>Inject a total of 5 cc on each side with</p>
                    </div>
                  </div>
                  <div class="pg-text">
                    <p>In the usual hyaluronic acid injections, hyaluronic acid is injected into depressions created by sagging, flattening the surface and making the sagging less noticeable. On the other hand, the<span class="fz-18"><strong> Lift-Up Hyaluronic Acid </strong></span>injects hyaluronic acid over the ligaments and periosteum, which lifts sagging tissues and improves firmness and lift.</p>
                  </div>
                </div>
                <div class="fl-style01">
                  <article class="fl-style01-item">
                    <h2 class="fl-style01-item-ttl"><span class="list-no">01</span>For beginner<span class="txt-side pc">Four points lift</span></h2>
                    <span class="txt-side sp">Four points lift</span>
                    <div class="d-fl fl-style01-item-content">
                      <figure>
                        <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/liftup/hyaluronic-liftup01.png" alt="for beginner">
                      </figure>
                      <div class="fl-style01-item-content-txt defination-fl">
                        <dl>
                          <dt>Injection point</dt>
                          <dd>0.5 to 1cc for T1<br>
                          0.5 to 1cc for CK1<br>
                          2 to 4 cc on both left and right sides (2 to 4 pcs)
                          </dd>
                        </dl>
                        <dl>
                          <dt>Price</dt>
                          <dd>2-4 pcs. x ¥61,600<br>
                          =<span>¥ 123,200 ~ ¥ 246,400</span><small> (tax included)</small>
                          </dd>
                        </dl>
                      </div>
                    </div>
                  </article>
                  <article class="fl-style01-item">
                    <h2 class="fl-style01-item-ttl"><span class="list-no sp-twoline">02</span>For those seeking more dramatic changes<span class="txt-side pc">Eight points lift</span></h2>
                    <span class="txt-side sp">Eight points lift</span>
                    <div class="d-fl fl-style01-item-content">
                      <figure>
                        <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/liftup/hyaluronic-liftup02.png" alt="for those seeking more dramatic changes">
                      </figure>
                      <div class="fl-style01-item-content-txt defination-fl">
                        <dl>
                          <dt>Injection point</dt>
                          <dd>0.5 to 1cc for T1<br>
                              0.5 to 1cc for CK1<br>
                              0.3 to 0.5 cc to CK3<br>
                              0.3 to 0.5 cc for JW1<br>
                              2 to 4 cc (2 to 4 pcs) for both left and right
                          </dd>
                        </dl>
                        <dl>
                          <dt>Price</dt>
                          <dd>4~8 pcs. x ¥61,600<br>
                          =<span>¥ 246,400 ~ ¥ 369,600</span><small> (tax included)</small>
                          </dd>
                        </dl>
                      </div>
                    </div>
                  </article>
                  <article class="fl-style01-item">
                    <h2 class="fl-style01-item-ttl"><span class="list-no sp-twoline">03</span>For those who want smaller face<span class="txt-side pc">V lift</span></h2>
                    <span class="txt-side sp">V lift</span>
                    <div class="d-fl fl-style01-item-content">
                      <figure>
                        <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/liftup/hyaluronic-liftup03.png" alt="お若い方で小顔効果を求める方向け">
                      </figure>
                      <div class="fl-style01-item-content-txt defination-fl">
                        <dl>
                          <dt>Injection point</dt>
                          <dd>0.5-0.7cc for T1<br>
                              0.5 to 0.8 cc for CK1<br>
                              0.5 cc to JW1<br>
                              0.8 to 1.0 cc for C2
                          </dd>
                        </dl>
                        <dl>
                          <dt>Price</dt>
                          <dd>2-4 pcs. x ¥61,600<br>
                          =<span> ¥ 123,200 ~ ¥ 308,000</span><small> (tax included)</small>
                          </dd>
                        </dl>
                      </div>
                    </div>
                  </article>
                </div>
              </div>
            </div>
          </div>
          <div id="formula" class="sl-formula">
            <div class="menu-inn sl-formula-inn">
              <div class="sl-formula-inn-ttl subpage-ttl menu-inn-ttl">
                <h2 class="under-line">Hyaluronic Acid Preparations</h2>
              </div>
              <div class="sl-formula-inn-content">
                <div class="fl-style01">
                  <article class="fl-style01-item">
                    <h2 class="fl-style01-item-ttl"><span class="list-no">01</span>Voluma XC</h2>
                    <div class="d-fl fl-style01-item-content align-center">
                      <figure>
                        <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/formula/hyaluronic-formula01.png" alt="ボリューマ	XC">
                      </figure>
                      <div class="fl-style01-item-content-txt defination-fl">
                        <dl>
                          <dt>Duration</dt>
                          <dd>6-18 months</dd>
                        </dl>
                        <dl>
                          <dt>Adaptation site</dt>
                          <dd>Temples, laugh lines, tear troughs,<br class="pc"> Marionette lines, cheek moss</dd>
                        </dl>
                      </div>
                    </div>
                  </article>
                  <article class="fl-style01-item">
                    <h2 class="fl-style01-item-ttl"><span class="list-no">02</span>Volux XC</h2>
                    <div class="d-fl fl-style01-item-content align-center">
                      <figure>
                        <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/formula/hyaluronic-formula01.png" alt="ボラックスXC">
                      </figure>
                      <div class="fl-style01-item-content-txt defination-fl">
                        <dl>
                          <dt>Duration</dt>
                          <dd>6-18 months</dd>
                        </dl>
                        <dl>
                          <dt>Adaptation site</dt>
                          <dd>Chin, facial line</dd>
                        </dl>
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
                        <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/case/hyaluronic-case01.png" alt="症例写真">
                      </figure>
                      <div class="content">
                        <dl>
                          <dt>Treatment</dt>
                          <dd>Hyaluronic acid (chin and temples)</dd>
                        </dl>
                        <dl>
                          <dt>Explanation of treatment</dt>
                          <dd>This treatment is used to lift by injecting hyaluronic acid to increase volume and reinforce bones and ligaments.<br>Left: Before treatment<br>Right: 1 month after treatment</dd>
                        </dl>
                        <dl>
                          <dt>Side effects</dt>
                          <dd>Allergy, internal bleeding, vascular embolization, slight left-right difference in finish</dd>
                        </dl>
                        <dl>
                          <dt>Price</dt>
                          <dd>¥ 88,000 〜 ¥ 242,000</dd>
                        </dl>
                      </div>
                    </a>
                  </article>
                  <article>
                    <a class="fl-style04-fl d-fl" target="_blank" rel="nofollow noreferrer">
                      <figure>
                        <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/case/hyaluronic-case02.png" alt="症例写真">
                      </figure>
                      <div class="content">
                        <dl>
                          <dt>Treatment</dt>
                          <dd>Hyaluronic acid (chin, temples, cheeks)</dd>
                        </dl>
                        <dl>
                          <dt>Explanation of treatment </dt>
                          <dd>This treatment is used to lift by injecting hyaluronic acid to increase volume and reinforce bones and ligaments.<br>Left: Before treatment<br>Right: 1 month after the treatment<br>VOLUMA: 3cc in the temples and cheeks VOLUX: 2cc in the chin and face line</dd>
                        </dl>
                        <dl>
                          <dt>Side effects</dt>
                          <dd>Allergy, internal bleeding, vascular embolization, slight left-right difference in finish</dd>
                        </dl>
                        <dl>
                          <dt>Price</dt>
                          <dd>¥ 88,000 〜 ¥ 396,000</dd>
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
                <h2 class="under-line">Movie of Hyaluronic Acid</h2>
              </div>
              <div class="sl-state-inn-content video-style01">
              <iframe width="100%" height="100%" src="https://www.youtube.com/embed/dxrfqN7jgpQ?enablejsapi=1" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe></div>
            </div>
          </div>
          <div id="precautions" class="sl-precautions">
            <div class="menu-inn sl-precautions-inn">
              <div class="sl-precautions-inn-ttl subpage-ttl menu-inn-ttl">
                <h2 class="under-line">Hyaluronic Acid Precautions</h2>
              </div>
              <div class="sl-precautions-inn-content">
                <div class="precautions-list">
                  <h3>Overview and risks of hyaluronic acid injections</h3>
                  <div class="defination-fl">
                    <dl>
                      <dt>anesthesia</dt>
                      <dd>Anesthesia sticker or anesthesia cream</dd>
                    </dl>
                    <dl>
                      <dt>Time</dt>
                      <dd>About 90 minutes</dd>
                    </dl>
                    <dl>
                      <dt>Facial cleansing, bathing, makeup</dt>
                      <dd>Possible from the next day</dd>
                    </dl>
                    <dl>
                      <dt>Side effects / Downtime</dt>
                      <dd>
                        <div class="disc-list disc--list">
                          <ul class="disc-list-wr">
                            <li>Itching and tender inflammatory reactions (redness, swelling, erythema) may occur. These are usually transient, but may persist for up to a week.</li>
                            <li>Rarely, allergic symptoms may occur after the course of the injection.</li>
                            <li>Hematoma, infection, coloration or fading of the injection site, nerve compression, embolization, abscess formation, granuloma, and hypersensitivity may occur.</li>
                            <li>Internal bleeding may occur due to the injection needle.</li>
                            <li>The realization of the effect may be less than expected or the corrective effect may be weaker than expected.</li>
                          </ul>
                        </div>
                        
                      </dd>
                    </dl>
                    <dl>
                      <dt>Precautions</dt>
                      <dd>
                        <div class="disc-list disc--list">
                          <ul class="disc-list-wr">
                            <li>After the procedure, the injected area should generally not be massaged. For further details, please follow the doctor's instructions.</li>
                            <li>Pregnant or lactating mothers or those under medical treatment may not be able to receive this service.</li>
                          </ul>
                        </div>
                      </dd>
                    </dl>
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
                  <h3 class="price-ttl"><span>Hyaluronic acid</span></h3>
                  <div class="price-list">
                    <div class="d-fl price-list-wr">
                      <div class="price-list-wr-l">
                        <h3>Voluma/Volux</h3>
                        <ul>
                          <li class="d-fl">
                            <p>The first one</p>
                            <p class="dash-line"></p>
                            <p>¥88,000 / 1cc</p>
                          </li>
                          <li class="d-fl">
                            <p>After the <br>second bottle</p>
                            <p class="dash-line"></p>
                            <p>¥77,000 / 1cc</p>
                          </li>
                        </ul>
                      </div>
                    </div>
                    <p class="price-list-warn pc">※Tax included<br>Translation fee will be charged in addition to the treatment fee.</p>
                  </div>
                </div>
                <p class="price-list-warn sp">※Tax included<br>Translation fee will be charged in addition to the treatment fee.</p>
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
                      'terms' => 'hyaluronic_cat'
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
      <!-- mv -->
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
                    <text id="ヒアルロン酸あなたと美しさをつなぐクリニック" data-name="ヒアルロン酸あなたと美しさをつなぐクリニック" class="cls-mv-1"
                        transform="translate(0 35)">
                        <tspan x="0" y="0">ヒアルロン酸</tspan>
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
                    <text id="ヒアルロン酸あなたと美しさをつなぐクリニック" data-name="ヒアルロン酸あなたと美しさをつなぐクリニック" class="cls-1" transform="translate(0 35)">
                        <tspan x="0" y="0">ヒアルロン酸</tspan>
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
      <!-- menu -->
      <div id="menu"  class="sl-menu menu-hyaluronic">
        <div class="sl-menu-content">
          <!-- whatis -->
          <div id="whatis" class="sl-whatis">
            <div class="sl-whatis-inn menu-inn attach-mv">
              <div class="sl-whatis-inn-ttl subpage-ttl menu-inn-ttl">
                <h2 class="under-line">ヒアルロン酸とは</h2>
              </div>
              <div class="sl-whatis-inn-content">
                <div class="fl-style02 d-fl">
                  <div class="image">
                    <img loading="lazy" class="pc" src="<?php echo get_template_directory_uri(); ?>/img/sub-whathyaluronic-img01.png" alt="ヒアルロン酸とは">
                    <img loading="lazy" class="sp" src="<?php echo get_template_directory_uri(); ?>/img/sub-whathyaluronic-img01-sp.png" alt="ヒアルロン酸とは">
                  </div>
                  <div class="content">
                    <p>
                      ヒアルロン酸注入は、加齢とともに減少する皮下のボリュームやハリを補い、シワやたるみを自然に改善する注入治療です。
                      <br><span style="font-weight: bold;">ほうれい線やゴルゴライン、目の下のくぼみ、フェイスラインなど、気になる部位にピンポイントでアプローチ</span>できます。
                      <br>メスを使わず、短時間で施術が完了し、直後から効果を実感できるのも特徴です。
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
                            <strong style="display:block;"  class="profile">プロフィール</strong>
                            <p class="profile-txt">昭和大学卒業<br>順天堂大学の医局入職<br>大手美容皮膚科勤務<br>2023年博士号取得<br><a style="color: blue; text-decoration: underline;" target="_blank" href="https://www.aesthet-derm.org/">日本美容皮膚科医学会所属</a></p>
                        </div>
                    </div>
                    <div class="doctor__comments">
                  <strong>医師コメント</strong>
                      <p>ヒアルロン酸はオーバーフィルドシンドロームといって、過度なヒアルロン酸注入が社会問題となっています。いわゆる「ヒアルロン酸顔」というものです。ヒアルロン酸は長いと12年もヒアルロン酸が体内に残っていた例も論文で報告されており、入れすぎには注意が必要な製剤です。当院では、ヒアルロン酸リフトといって、ヒアルロン酸で萎縮した骨や下垂した靭帯を補強するヒアルロン酸を使用しているため、最小限のヒアルロン酸で自然な若返りを期待できます。</p>
                    </div>
                    <?php echo get_template_part('template-parts/sv-guidelines'); ?>
                </div>
              </div>
            </div>
          </div>
          <!-- recommend -->
          <div id="recommend" class="sl-effect">
            <div class="menu-inn sl-effect-inn">
              <div class="sl-effect-inn-ttl subpage-ttl menu-inn-ttl">
                <h2 class="under-line">ヒアルロン酸は<br class="sp">こんな方におすすめ</h2>
              </div>
              <div class="sl-effect-inn-content">
                <div class="check-list">
                  <ul class="check-list-wr">
                      <li>ほうれい線が気になる</li>
                      <li>頬のトップの位置が以前より下がってきている</li>
                      <li>頬が全体的に痩せて影ができている</li>
                      <li>こめかみのあたりがくぼんできた</li>
                      <li>おでこの丸みがなくなり平らになってきた</li>
                      <li>上まぶたが重い感じに見え、目が小さくなってきた</li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <!-- effect -->
          <div id="effect" class="sl-whatis">
            <div class="sl-whatis-inn menu-inn">
              <div class="sl-whatis-inn-ttl subpage-ttl menu-inn-ttl">
                <h2 class="under-line">ヒアルロン酸の効果</h2>
              </div>
              <div class="sl-whatis-inn-content">
                <div class="pg-text">
                  <p>加齢によって顔全体がたるむことは、老化現象のひとつとして広く知られています。</p>
                  <p>顔全体のたるみは、加齢による骨の萎縮や靭帯のたるみが原因です。海外の研究によると、加齢でこめかみは約3.4mm凹み、横顔は2～12cm伸びると報告されています。※<a style="color:blue; text-decoration:underline;" href="https://www.ncbi.nlm.nih.gov/pmc/articles/PMC8438644/" target="_blank">参考文献</a></p>
                </div>
                <div class="image-center">
                  <h3>老化による靱帯の変化<small>（イメージ図）</small></h3>
                  <figure>
                    <img loading="lazy" class="pc" src="<?php echo get_template_directory_uri(); ?>/img/sub-whathyaluronic-img03.png" alt="老化による靱帯の変化（イメージ図）">
                    <img loading="lazy" class="sp" src="<?php echo get_template_directory_uri(); ?>/img/sub-whathyaluronic-img03-sp.png" alt="老化による靱帯の変化（イメージ図）">
                  </figure>
                </div>
                <div class="pg-text">
                  <p>ヒアルロン酸を注入することで、下図のように靭帯の補強と引き上げが起こり、シワやたるみの改善が期待できます。</p>
                </div>
                <div class="image-center">
                  <h3>靭帯の変化が顔全体にもたらす影響<small>（イメージ図）</small></h3>
                  <figure style="width:100%; padding: 0;">
                    <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/sub-whathyaluronic-img02.png" alt="老化による靱帯の変化（イメージ図）">
                  </figure>
                </div>
                <div class="pg-text">
                  <p>ヒアルロン酸の大きなメリットは、使い方によって様々な症状を改善できる点にあります。<br>シワ、たるみ、ほうれい線の改善は代表的な使い方ですが、ほほこけ、おでこに丸みを出す、鼻を高くする、唇をふっくらさせる、輪郭を整えるなど、使用方法が多岐に渡ります。<br><br>注射1本でできる施術なので、メスを使用するのは抵抗があるという方にも喜ばれている方法です。</p>
                </div>
              </div>
            </div>
          </div>
          <!-- whatliftup -->
          <div id="whatliftup" class="sl-whatliftup">
            <div class="menu-inn sl-whatliftup-inn">
              <div class="sl-whatliftup-inn-ttl subpage-ttl menu-inn-ttl">
                <h2 class="under-line">注射可能な部位</h2>
              </div>
              <div class="image-center">
                <figure>
                  <img loading="lazy" class="pc" src="<?php echo get_template_directory_uri(); ?>/img/hyaluronic-liftup02-pc.png" alt="注射可能な部位">
                  <img loading="lazy" class="sp" src="<?php echo get_template_directory_uri(); ?>/img/hyaluronic-liftup02-sp.png" alt="注射可能な部位">
                </figure>
              </div>
              <div class="pg-text">
                <p>　</p>
              </div>
              <div class="sl-whatliftup-inn-content">
                <div class="whatliftup-guideline">
                  <div class="pg-text">
                    <p>当院のヒアルロン酸注射で人気の部位をご紹介します。<br>持続期間は使用する製剤によって異なりますが、<span class="fz-18"><strong>おおむね6ヶ月〜18ヶ月持続</strong></span>します。</p>
                  </div>
                </div>
                <div class="fl-style01">
                  <article class="fl-style01-item">
                    <h3 class="fl-style01-item-ttl">リフトアップ</h3>
                    <div class="d-fl fl-style01-item-content">
                      <figure>
                        <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/hyaluronic-liftup-case01.png" alt="ヒアルロン酸注入によるリフトアップの症例">
                      </figure>
                      <div class="fl-style01-item-content-txt defination-fl">
                        <dl>
                          <dt style="margin-right: 8px;">施術名</dt>
                          <dd>
                            ヒアルロン酸
                            <br>（ほうれい線・チーク2cc、頬コケ2cc、フェイスライン2cc、リップ1cc）
                          </dd>
                        </dl>
                        <dl>
                          <dt style="margin-right: 8px;">副作用</dt>
                          <dd>ヒアルロン酸：内出血、アレルギー、血管塞栓など</dd>
                        </dl>
                        <dl>
                          <dt style="margin-right: 8px;">料金</dt>
                          <dd>
                            1本目 ¥88,000 / 2本目以降 ¥77,000
                          </dd>
                        </dl>
                      </div>
                    </div>
                    <div class="d-fl fl-style01-item-content">
                      <figure>
                        <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/hyaluronic-liftup-case02.png" alt="ヒアルロン酸注入によるリフトアップの症例">
                      </figure>
                      <div class="fl-style01-item-content-txt defination-fl">
                        <dl>
                          <dt style="margin-right: 8px;">施術名</dt>
                          <dd>ヒアルロン酸 5cc</dd>
                        </dl>
                        <dl>
                          <dt style="margin-right: 8px;">副作用</dt>
                          <dd>ヒアルロン酸：内出血、アレルギー、血管塞栓など</dd>
                        </dl>
                        <dl>
                          <dt style="margin-right: 8px;">料金</dt>
                          <dd>1本目 ¥88,000 / 2本目以降 ¥77,000</dd>
                        </dl>
                      </div>
                    </div>
                    <div class="d-fl fl-style01-item-content">
                      <figure>
                        <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/hyaluronic-liftup-case03.png" alt="ヒアルロン酸注入によるリフトアップの症例">
                      </figure>
                      <div class="fl-style01-item-content-txt defination-fl">
                        <dl>
                          <dt style="margin-right: 8px;">施術名</dt>
                          <dd>ヒアルロン酸 5cc</dd>
                        </dl>
                        <dl>
                          <dt style="margin-right: 8px;">副作用</dt>
                          <dd>ヒアルロン酸：内出血、アレルギー、血管塞栓など</dd>
                        </dl>
                        <dl>
                          <dt style="margin-right: 8px;">料金</dt>
                          <dd>1本目 ¥88,000 / 2本目以降 ¥77,000</dd>
                        </dl>
                      </div>
                    </div>
                    <div class="pg-text" style="margin-top: 16px;">
                      <p>骨の萎縮部位や靭帯にヒアルロン酸を注入することで顔全体の引き上げを行いました。靭帯を補強することで顔全体が引き上がり、ほうれい線やマリオネットラインが解消することで、若々しい印象を与えられます。</p>
                    </div>
                  </article>
                  <article class="fl-style01-item">
                    <h3 class="fl-style01-item-ttl">ほうれい線</h3>
                    <div class="d-fl fl-style01-item-content">
                      <figure>
                        <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/hyaluronic-liftup-case04.png" alt="ヒアルロン酸注入によるほうれい線の症例">
                      </figure>
                      <div class="fl-style01-item-content-txt defination-fl">
                        <dl>
                          <dt style="margin-right: 8px;">施術名</dt>
                          <dd>ヒアルロン酸 2cc</dd>
                        </dl>
                        <dl>
                          <dt style="margin-right: 8px;">副作用</dt>
                          <dd>ヒアルロン酸：内出血、アレルギー、血管塞栓など</dd>
                        </dl>
                        <dl>
                          <dt style="margin-right: 8px;">料金</dt>
                          <dd>1本目 ¥88,000 / 2本目以降 ¥77,000</dd>
                        </dl>
                      </div>
                    </div>
                    <div class="d-fl fl-style01-item-content">
                      <figure>
                        <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/hyaluronic-liftup-case05.png" alt="ヒアルロン酸注入によるほうれい線の症例">
                      </figure>
                      <div class="fl-style01-item-content-txt defination-fl">
                        <dl>
                          <dt style="margin-right: 8px;">施術名</dt>
                          <dd>ヒアルロン酸 3cc</dd>
                        </dl>
                        <dl>
                          <dt style="margin-right: 8px;">副作用</dt>
                          <dd>ヒアルロン酸：内出血、アレルギー、血管塞栓など</dd>
                        </dl>
                        <dl>
                          <dt style="margin-right: 8px;">料金</dt>
                          <dd>1本目 ¥88,000 / 2本目以降 ¥77,000</dd>
                        </dl>
                      </div>
                    </div>
                    <div class="pg-text" style="margin-top: 16px;">
                      <p>肌のハリをアップさせ、口元周辺のしわ（ほうれい線）を目立たなくします。<br>笑ったときに膨らみを強く感じる場合があるため、筋肉の動きを確認しながら注入を行います。</p>
                    </div>
                  </article>
                  <article class="fl-style01-item">
                    <h3 class="fl-style01-item-ttl">こめかみ・頬こけ</h3>
                    <div class="d-fl fl-style01-item-content">
                      <figure>
                        <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/hyaluronic-liftup-case06.png" alt="ヒアルロン酸注入によるこめかみ・頬こけの症例">
                      </figure>
                      <div class="fl-style01-item-content-txt defination-fl">
                        <dl>
                          <dt style="margin-right: 8px;">施術名</dt>
                          <dd>ヒアルロン酸<br>（頬こけ・こめかみ・チークトップ 計6cc）</dd>
                        </dl>
                        <dl>
                          <dt style="margin-right: 8px;">副作用</dt>
                          <dd>ヒアルロン酸：内出血、アレルギー、血管塞栓など</dd>
                        </dl>
                        <dl>
                          <dt style="margin-right: 8px;">料金</dt>
                          <dd>1本目 ¥88,000 / 2本目以降 ¥77,000</dd>
                        </dl>
                        <div class="pg-text" style="margin-top: 16px;">
                          <p>こめかみや頬こけの部分にヒアルロン酸を注入することで、ボリュームを補い、肌を滑らかにします。<br>注入しすぎると不自然にふくらんでしまうことがあるため、注入位置と量の調整が重要です。</p>
                        </div>
                      </div>
                    </div>
                  </article>
                  <article class="fl-style01-item">
                    <h3 class="fl-style01-item-ttl">ゴルゴライン</h3>
                    <div class="d-fl fl-style01-item-content">
                      <figure>
                        <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/hyaluronic-liftup-case07.png" alt="ヒアルロン酸注入による鼻の症例">
                      </figure>
                      <div class="fl-style01-item-content-txt defination-fl">
                        <dl>
                          <dt style="margin-right: 8px;">施術名</dt>
                          <dd>ヒアルロン酸<br>（頬・ほうれい線・頬こけ 計3cc ）</dd>
                        </dl>
                        <dl>
                          <dt style="margin-right: 8px;">副作用</dt>
                          <dd>ヒアルロン酸：内出血、アレルギー、血管塞栓など</dd>
                        </dl>
                        <dl>
                          <dt style="margin-right: 8px;">料金</dt>
                          <dd>1本目 ¥88,000 / 2本目以降 ¥77,000</dd>
                        </dl>
                      </div>
                    </div>
                  </article>
                  <article class="fl-style01-item">
                    <h3 class="fl-style01-item-ttl">リップ</h3>
                    <div class="d-fl fl-style01-item-content">
                      <figure>
                        <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/hyaluronic-liftup-case08.png" alt="ヒアルロン酸注入によるリップの症例">
                      </figure>
                      <div class="fl-style01-item-content-txt defination-fl" style="margin-top: 16px;">
                        <dl>
                          <dt style="margin-right: 8px;">施術名</dt>
                          <dd>ヒアルロン酸<br>（リップ 1cc）</dd>
                        </dl>
                        <dl>
                          <dt style="margin-right: 8px;">副作用</dt>
                          <dd>ヒアルロン酸：内出血、アレルギー、血管塞栓など</dd>
                        </dl>
                        <dl>
                          <dt style="margin-right: 8px;">料金</dt>
                          <dd>1本目 ¥88,000 / 2本目以降 ¥77,000</dd>
                        </dl>
                        <div class="pg-text" style="margin-top: 16px;">
                          <p>
                            年齢を重ねると人中（鼻下）が伸びてきて、実年齢より老けて見えることがあります。ヒアルロン酸を上唇に注入することで、ボリュームのある魅力的な唇を演出できます。
                            <br>浅いところに注入するとヒアルロン酸が青白く透けて見えてしまうことがあるため、注入する深さが重要になります。
                          </p>
                        </div>
                      </div>
                    </div>
                  </article>
                </div>
              </div>
            </div>
          </div>
          <!-- commit -->
          <div id="commit" class="sl-commit">
            <div class="menu-inn sl-commit-inn">
              <div class="sl-commit-inn-ttl subpage-ttl menu-inn-ttl">
                <h2 class="under-line">リアンクリニックのこだわり</h2>
              </div>
              <div class="sl-commit-inn-content">
                <div class="fl-style02 d-fl">
                  <div class="image">
                    <img loading="lazy" class="pc" src="<?php echo get_template_directory_uri(); ?>/img/commit/hyaluronic-commit01.png" alt="リアンクリニックのこだわり">
                    <img loading="lazy" class="sp" src="<?php echo get_template_directory_uri(); ?>/img/commit/hyaluronic-commit01-sp.png" alt="リアンクリニックのこだわり">
                  </div>
                  <div class="content">
                      <p>
                        “どこに入れるか”ではなく、“なぜそこに入れるか”。
                        <br>ヒアルロン酸注入は、顔の骨格・靭帯・脂肪の構造を読む“設計図づくり”から始まります。
                        <br>
                        <br>たるみが気になるからといって、いきなりほうれい線に注入することはありません。
                        <br>私は、まず顔全体のバランスと支持構造を見極めて、
                        <br>“引き上げるべき場所”と“補うべきポイント”を分けて考えています。
                        <br>
                        <br>土台を整えずにボリュームだけを加えると、不自然な仕上がりになりがち。
                        <br>だからこそ、“なんとなく打つ”のではなく、
                        <br>医学的根拠に基づいたロジックのある注入を大切にしています。
                      </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- reason -->
          <div id="reason" class="sl-reason">
            <div class="menu-inn sl-reason-inn">
              <div class="sl-reason-inn-ttl subpage-ttl menu-inn-ttl">
                <h2 class="under-line">リアンクリニックの<br class="sp">ヒアルロン酸が選ばれる理由</h2>
              </div>
              <div class="sl-reason-inn-content">
                <div class="fl-style01">
                  <article class="fl-style01-item">
                    <h3 class="fl-style01-item-ttl"><span class="list-no">01</span>リアン式マイクロテクニック</h3>
                    <div class="d-fl fl-style01-item-content">
                      <figure>
                        <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/reason/hyaluronic-reason01.png" alt="リアン式マイクロテクニック">
                      </figure>
                      <div class="fl-style01-item-content-txt">
                        <p>シワやくぼみの治療では、ヒアルロン酸をどの位置にどれくらいの量を注入するのかが最も重要です。リアン式マイクロテクニックでは、ミリよりも細かい単位で注入位置の調整を行います。一般的な治療だからこそ、最も工夫をしています。
                        </p>
                      </div>
                    </div>
                  </article>
                  <article class="fl-style01-item">
                    <h3 class="fl-style01-item-ttl"><span class="list-no sp-twoline">02</span>安全・高品質な<br class="sp">ヒアルロン酸の使用</h3>
                    <div class="d-fl fl-style01-item-content">
                      <figure>
                        <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/reason/hyaluronic-reason02.png" alt="安全・高品質なヒアルロン酸の使用">
                      </figure>
                      <div class="fl-style01-item-content-txt">
                        <p>ヒアルロン酸にはたくさんの種類があります。廉価な中国製のものも登場しています。しかし、新しければ、または安ければ良いというものではありません。リアンでは安全性に実績がある高品質なヒアルロン酸のみを使用しています。当院では、顔のしわや溝の治療において厚生労働省に承認されている「ジュダーム®︎」「レスチレン®︎」を使用しています。
                        </p>
                      </div>
                    </div>
                  </article>
                  <article class="fl-style01-item">
                    <h3 class="fl-style01-item-ttl"><span class="list-no">03</span>リフトアップヒアルロン酸</h3>
                    <div class="d-fl fl-style01-item-content align-center">
                      <figure>
                        <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/hyaluronic-reason03.png" alt="リフトアップヒアルロン酸">
                      </figure>
                      <div class="fl-style01-item-content-txt">
                        <p>靭帯を支えるようにヒアルロン酸を注入することで、ゆるんだ靭帯を引き上げ自然とたるみが改善されます。症例経験豊富なドクターがカウンセリングから施術まで一貫して行うことで、ご要望に合った改善をご提案します。リアンに所属する医師は全員ジュビダームビスタの講習を受講しております。
                        </p>
                      </div>
                    </div>
                  </article>
                </div>
              </div>
            </div>
          </div>
          <!-- whatliftup -->
          <div id="whatliftup" class="sl-whatliftup">
            <div class="menu-inn sl-whatliftup-inn">
              <div class="sl-whatliftup-inn-ttl subpage-ttl menu-inn-ttl">
                <h2 class="under-line">リフトアップ<br class="sp">ヒアルロン酸とは</h2>
              </div>
              <div class="image-center">
                <figure>
                  <img loading="lazy" class="pc" src="<?php echo get_template_directory_uri(); ?>/img/liftup/hyaluronic-liftup-pc.png" alt="美容皮膚科医が推奨するヒアルロン酸推奨量">
                  <img loading="lazy" class="sp" src="<?php echo get_template_directory_uri(); ?>/img/liftup/hyaluronic-liftup-sp.png" alt="美容皮膚科医が推奨するヒアルロン酸推奨量">
                </figure>
              </div>
              <div class="pg-text">
                <p>　</p>
              </div>
              <div class="sl-whatliftup-inn-content">
                <div class="whatliftup-guideline">
                  <div class="pg-text">
                    <p>通常のヒアルロン酸注入は、たるみによってできた凹みにヒアルロン酸を注入して表面をフラットにすることで、たるみを目立たなくするという方法でしたが、「リフトアップヒアルロン酸」では、靭帯や骨膜上にヒアルロン酸を注入することで、たるんだ組織を持ち上げ、<span class="fz-18"><strong>ハリ、リフトアップ効果</strong></span>が期待できます。</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- case -->
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
                        <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/case/hyaluronic-case01.jpg" alt="ヒアルロン酸リフト">
                      </figure>
                      <div class="content">
                        <dl>
                          <dt>施術名</dt>
                          <dd>ヒアルロン酸リフト</dd>
                        </dl>
                        <dl>
                          <dt>施術の説明</dt>
                          <dd>ヒアルロン酸を注入することでボリュームを出したり、骨や靭帯を補強することで、リフトアップする治療です。</dd>
                        </dl>
                        <dl>
                          <dt>施術の副作用(リスク)</dt>
                          <dd>アレルギー、内出血、血管塞栓、仕上がりの僅かな左右差</dd>
                        </dl>
                        <dl>
                          <dt>施術の価格</dt>
                          <dd>¥396,000</dd>
                        </dl>
                      </div>
                    </a>
                  </article>
                  <article>
                    <a class="fl-style04-fl d-fl" target="_blank" rel="nofollow noreferrer">
                      <figure>
                        <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/case/hyaluronic-case02.jpg" alt="フェイスラインヒアル">
                      </figure>
                      <div class="content">
                        <dl>
                          <dt>施術名</dt>
                          <dd>フェイスラインヒアル</dd>
                        </dl>
                        <dl>
                          <dt>施術の説明</dt>
                          <dd>ヒアルロン酸を注入することでボリュームを出したり、骨や靭帯を補強することで、リフトアップする治療です。</dd>
                        </dl>
                        <dl>
                          <dt>施術の副作用(リスク)</dt>
                          <dd>アレルギー、内出血、血管塞栓、仕上がりの僅かな左右差</dd>
                        </dl>
                        <dl>
                          <dt>施術の価格</dt>
                          <dd>¥242,000</dd>
                        </dl>
                      </div>
                    </a>
                  </article>
                  <article>
                    <a class="fl-style04-fl d-fl" target="_blank" rel="nofollow noreferrer">
                      <figure>
                        <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/case/hyaluronic-case03.jpg" alt="ほうれい線ボライト">
                      </figure>
                      <div class="content">
                        <dl>
                          <dt>施術名</dt>
                          <dd>ほうれい線ボライト</dd>
                        </dl>
                        <dl>
                          <dt>施術の説明</dt>
                          <dd>ヒアルロン酸を注入することでボリュームを出したり、骨や靭帯を補強することで、リフトアップする治療です。</dd>
                        </dl>
                        <dl>
                          <dt>施術の副作用(リスク)</dt>
                          <dd>アレルギー、内出血、血管塞栓、仕上がりの僅かな左右差</dd>
                        </dl>
                        <dl>
                          <dt>施術の価格</dt>
                          <dd>¥242,000</dd>
                        </dl>
                      </div>
                    </a>
                  </article>
                  <article>
                    <a class="fl-style04-fl d-fl" target="_blank" rel="nofollow noreferrer">
                      <figure>
                        <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/case/hyaluronic-case04.jpg" alt="ゴルゴラインヒアル">
                      </figure>
                      <div class="content">
                        <dl>
                          <dt>施術名</dt>
                          <dd>ゴルゴラインヒアル</dd>
                        </dl>
                        <dl>
                          <dt>施術の説明</dt>
                          <dd>ヒアルロン酸を注入することでボリュームを出したり、骨や靭帯を補強することで、リフトアップする治療です。</dd>
                        </dl>
                        <dl>
                          <dt>施術の副作用(リスク)</dt>
                          <dd>アレルギー、内出血、血管塞栓、仕上がりの僅かな左右差</dd>
                        </dl>
                        <dl>
                          <dt>施術の価格</dt>
                          <dd>¥242,000</dd>
                        </dl>
                      </div>
                    </a>
                  </article>
                  <article>
                    <a class="fl-style04-fl d-fl" target="_blank" rel="nofollow noreferrer">
                      <figure>
                        <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/case/hyaluronic-case05.jpg" alt="リップヒアルロン酸">
                      </figure>
                      <div class="content">
                        <dl>
                          <dt>施術名</dt>
                          <dd>リップヒアルロン酸</dd>
                        </dl>
                        <dl>
                          <dt>施術の説明</dt>
                          <dd>ヒアルロン酸を注入することでボリュームを出したり、骨や靭帯を補強することで、リフトアップする治療です。</dd>
                        </dl>
                        <dl>
                          <dt>施術の副作用(リスク)</dt>
                          <dd>アレルギー、内出血、血管塞栓、仕上がりの僅かな左右差</dd>
                        </dl>
                        <dl>
                          <dt>施術の価格</dt>
                          <dd>¥88,000</dd>
                        </dl>
                      </div>
                    </a>
                  </article>
                  <article>
                    <a class="fl-style04-fl d-fl" target="_blank" rel="nofollow noreferrer">
                      <figure>
                        <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/case/hyaluronic-case06.jpg" alt="顎ヒアルロン酸">
                      </figure>
                      <div class="content">
                        <dl>
                          <dt>施術名</dt>
                          <dd>顎ヒアルロン酸</dd>
                        </dl>
                        <dl>
                          <dt>施術の説明</dt>
                          <dd>ヒアルロン酸を注入することでボリュームを出したり、骨や靭帯を補強することで、リフトアップする治療です。</dd>
                        </dl>
                        <dl>
                          <dt>施術の副作用(リスク)</dt>
                          <dd>アレルギー、内出血、血管塞栓、仕上がりの僅かな左右差</dd>
                        </dl>
                        <dl>
                          <dt>施術の価格</dt>
                          <dd>¥242,000</dd>
                        </dl>
                      </div>
                    </a>
                  </article>
                  <article>
                    <a class="fl-style04-fl d-fl" target="_blank" rel="nofollow noreferrer">
                      <figure>
                        <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/case/hyaluronic-case07.jpg" alt="口横小じわボライト">
                      </figure>
                      <div class="content">
                        <dl>
                          <dt>施術名</dt>
                          <dd>口横小じわボライト</dd>
                        </dl>
                        <dl>
                          <dt>施術の説明</dt>
                          <dd>ヒアルロン酸を注入することでボリュームを出したり、骨や靭帯を補強することで、リフトアップする治療です。</dd>
                        </dl>
                        <dl>
                          <dt>施術の副作用(リスク)</dt>
                          <dd>アレルギー、内出血、血管塞栓、仕上がりの僅かな左右差</dd>
                        </dl>
                        <dl>
                          <dt>施術の価格</dt>
                          <dd>¥88,000</dd>
                        </dl>
                      </div>
                    </a>
                  </article>
                  <article>
                    <a class="fl-style04-fl d-fl" target="_blank" rel="nofollow noreferrer">
                      <figure>
                        <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/case/hyaluronic-case08.jpg" alt="ヒアルロン酸リフト">
                      </figure>
                      <div class="content">
                        <dl>
                          <dt>施術名</dt>
                          <dd>ヒアルロン酸リフト</dd>
                        </dl>
                        <dl>
                          <dt>施術の説明</dt>
                          <dd>ヒアルロン酸を注入することでボリュームを出したり、骨や靭帯を補強することで、リフトアップする治療です。</dd>
                        </dl>
                        <dl>
                          <dt>施術の副作用(リスク)</dt>
                          <dd>アレルギー、内出血、血管塞栓、仕上がりの僅かな左右差</dd>
                        </dl>
                        <dl>
                          <dt>施術の価格</dt>
                          <dd>¥396,000</dd>
                        </dl>
                      </div>
                    </a>
                  </article>

                </div>
              </div>
            </div>
          </div>
          <!-- state -->
          <div id="state" class="sl-state">
            <div class="menu-inn sl-state-inn">
              <div class="sl-state-inn-ttl subpage-ttl menu-inn-ttl">
                <h2 class="under-line">施術の様子</h2>
              </div>
              <div class="sl-state-inn-content video-style01">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/s8thjtqIPcM?si=lqLXZkCpYTmAp8WU" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
              </div>
          </div>
          <!-- formula
          <div id="formula" class="sl-formula">
            <div class="menu-inn sl-formula-inn">
              <div class="sl-formula-inn-ttl subpage-ttl menu-inn-ttl">
                <h2 class="under-line">最適な「ヒアルロン酸製剤」<br class="sp">をお選びします</h2>
              </div>
              <div class="pg-text">
                  <p>ヒアルロン酸注射では、使用するヒアルロン酸製剤によって適応部位や効果の持続期間が異なります。<br>当院では患者様の希望部位に応じて「ボルベラXC」「ボリューマXC」「ボラックスXC」の3つから最適なヒアルロン酸製剤をお選びします。</p>
              </div>
              <div class="sl-features-inn-content">
                <div class="fl-style03 d-fl">
                  <article class="fl-style03-item">
                    <h3>柔らかい</h3>
                    <figure>
                      <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/formula/hyaluronic-formula01.png" alt="ボルベラXC">
                    </figure>
                    <strong style="border:none;"><small>ボルベラXC</small></strong>
                    <div class="fl-style01-item-content-txt defination-fl">
                      <dl style="margin-bottom: 8px;">
                        <dt style="max-width: 80px; width: 100%; margin-right: 8px;">持続期間</dt>
                        <dd>約12ヶ月</dd>
                      </dl>
                      <dl>
                        <dt style="max-width: 80px; width: 100%; margin-right: 8px;">適応部位</dt>
                        <dd>唇のボリュームアップ</dd>
                      </dl>
                    </div>
                  </article>
                  <article class="fl-style03-item">
                    <h3>やや硬い</h3>
                    <figure>
                      <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/formula/hyaluronic-formula02.png" alt="ボリューマXC">
                    </figure>
                    <strong style="border:none;"><small>ボリューマXC</small></strong>
                    <div class="fl-style01-item-content-txt defination-fl">
                      <dl style="margin-bottom: 8px;">
                        <dt style="max-width: 80px; width: 100%; margin-right: 8px;">持続期間</dt>
                        <dd>6〜18ヶ月</dd>
                      </dl>
                      <dl>
                        <dt style="max-width: 80px; width: 100%; margin-right: 8px;">適応部位</dt>
                        <dd>こめかみ・ほうれい線・ゴルゴライン・<br class="pc">マリオネットライン・頬のコケ</dd>
                      </dl>
                    </div>
                  </article>
                  <article class="fl-style03-item">
                    <h3>硬い</h3>
                    <figure>
                      <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/formula/hyaluronic-formula03.png" alt="ボラックスXC">
                    </figure>
                    <strong style="border:none;"><small>ボラックスXC</small></strong>
                    <div class="fl-style01-item-content-txt defination-fl">
                      <dl style="margin-bottom: 8px;">
                        <dt style="max-width: 80px; width: 100%; margin-right: 8px;">持続期間</dt>
                        <dd>6〜18ヶ月</dd>
                      </dl>
                      <dl>
                        <dt style="max-width: 80px; width: 100%; margin-right: 8px;">適応部位</dt>
                        <dd>あご・輪郭の形成</dd>
                      </dl>
                    </div>
                  </article>
                </div>
              </div>
            </div>
          </div>
          -->
          <!-- beware -->
          <div id="beware" class="sl-beware">
            <div class="sl-beware-inn menu-inn">
              <div class="sl-beware-inn-ttl subpage-ttl menu-inn-ttl pc">
                <h2 class="under-line">ヒアルロン酸の粗悪品にご注意ください</h2>
              </div>
              <div class="sl-beware-inn-content">
                <div class="sl-beware-inn-ttl subpage-ttl menu-inn-ttl sp">
                  <h2 class="under-line">ヒアルロン酸の粗悪品に<br class="sp">ご注意ください</h2>
                </div>
                <div class="pg-text">
                  <p>ヒアルロン酸の価格が極端に安い場合は、ヒアルロン酸を生理食塩水で薄めている場合があるようです。<br>ヒアルロン酸を薄めて使用すると、持続期間が12ヶ月となっている治療でも3ヶ月程度しか持続しない例があり、かえって治療費が高くついてしまいます。</p>
                  <p><strong>当院では厚生労働省認証アラガン社とガルデルマ社のヒアルロン酸の<span class="color-01">純正品のみを薄めずに原液のまま使用</span>しております。</strong></p>
                  
                </div>
              </div>
            </div>
          </div>
          <!-- price -->
          <div id="price" class="sl-price">
            <div class="menu-inn sl-price-inn">
              <div class="sl-price-inn-ttl subpage-ttl menu-inn-ttl">
                <h2 class="under-line">料金</h2>
              </div>
              <div class="sl-price-inn-content">
                <div class="price">
                  <h3 class="price-ttl"><span>ヒアルロン酸</span></h3>
                  <div class="price-list">
                    <div class="d-fl price-list-wr">
                      <div class="price-list-wr-l">
                        <p class="text">アラガン社製 / ガルデルマ社製ヒアルロン酸　1cc </p>
                        <ul>
                          <li class="d-fl">
                            <p>1本目</p>
                            <p class="dash-line"></p>
                            <p>¥88,000</p>
                          </li>
                          <li class="d-fl">
                            <p>2本目以降</p>
                            <p class="dash-line"></p>
                            <p>¥77,000</p>
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
          <!-- precautions -->
          <div id="precautions" class="sl-precautions">
            <div class="menu-inn sl-precautions-inn">
              <div class="sl-precautions-inn-ttl subpage-ttl menu-inn-ttl">
                <h2 class="under-line">ヒアルロン酸の注意事項</h2>
              </div>
              <div class="sl-precautions-inn-content">
                <div class="precautions-list">
                  <div class="defination-fl">
                    <dl>
                      <dt>麻酔</dt>
                      <dd>麻酔シールまたは麻酔クリーム
                        <ul class="hash-list">
                          <li>痛みが不安な方は、眠れる麻酔（リラックス効果がある麻酔）も可能です。ご希望の方はご予約時にご相談ください。</li>
                        </ul>
                      </dd>
                    </dl>
                    <dl>
                      <dt>所要時間</dt>
                      <dd>90分程度</dd>
                    </dl>
                    <dl>
                      <dt>洗顔・入浴</dt>
                      <dd>翌日から可能<br>※患部はお湯で流す程度にしてください。</dd>
                    </dl>
                    <dl>
                      <dt>メイク</dt>
                      <dd>翌日から可能<br>※注入部位に直接圧力をかけないよう注意してください。</dd>
                    </dl>
                    <dl>
                      <dt>シャワー</dt>
                      <dd>当日から可能<br>※患部はお湯で流す程度にしてください。</dd>
                    </dl>
                    <dl>
                      <dt>飲酒</dt>
                      <dd>前日・当日はお控えください</dd>
                    </dl>
                    <dl>
                      <dt>運動</dt>
                      <dd>前日・当日はお控えください</dd>
                    </dl>
                    <dl>
                      <dt>副作用・ ダウンタイム</dt>
                      <dd>
                        <div class="disc-list disc--list">
                          <ul class="disc-list-wr">
                            <li>かゆみ、圧痛を伴う炎症反応（赤み、むくみ、紅斑）などが起きる可能性があります。これらは通常は一過性のものですが、1週間ほど継続することがあります。</li>
                            <li>注入後の経過が経った後、まれにアレルギー症状が起きることがあります。</li>
                            <li>血腫、感染、注入部位の着色または退色、神経圧迫、塞栓、膿疹形成、肉芽腫、過敏症などが起きることがあります。</li>
                            <li>注射針によって内出血が起きることがあります。</li>
                            <li>予想以上に効果の実感が得られない、または修正効果が弱いことがあります。</li>
                          </ul>
                        </div>
                      </dd>
                    </dl>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- faq -->
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
                      'terms' => 'hyaluronic_cat'
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
          <!-- reservation -->
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
          <div id="connection" class="">
            <div class="menu-inn">
                <div class="sl-connection-inn-ttl subpage-ttl menu-inn-ttl "><h2 class="under-line">たるみ・しわに効果的な治療</h2></div>
                <div class="sl-connection-inn-content">

                <?php get_template_part('template-parts/service/hifu'); ?>
                <?php get_template_part('template-parts/service/sarmagen'); ?>
                <?php get_template_part('template-parts/service/liftup-botox'); ?>
                <?php get_template_part('template-parts/service/thread'); ?>
                <?php get_template_part('template-parts/service/volnewmer'); ?>
                <?php // get_template_part('template-parts/service/hyaluronic'); ?>
                    
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
