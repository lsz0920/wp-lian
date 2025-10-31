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
        "name": "腫れは出ますか？",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "<span>チンセラ・プラスは腫れを極力抑える成分構成になっていますが、腫れ・むくみは1週間ほど続きます。あざもできることはほとんどありませんが、できた場合でも1，2週間で治まります。</span>"
        }
      },
      {
        "@type": "Question",
        "name": "繰り返すと効果は出ますか？",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "<span>お顔は4週間毎に3回、ボディーは4週間毎に6回繰り返すと効果がしっかり出やすいと言われています。脂肪溶解注射は少しずつボリュームを減らしていきますので、繰り返しの注入をおすすめします。</span>"
        }
      },
      {
        "@type": "Question",
        "name": "アレルギーは？",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "<span>以前に脂肪溶解注射を使用しアレルギー反応が出た方は使用できません。</span>"
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
    <div id="menu" class="sl-menu menu-fatdis">
      <div class="sl-menu-content">
        <div id="whatis" class="sl-whatis">
          <div class="sl-whatis-inn menu-inn attach-mv">
            <div class="sl-whatis-inn-ttl subpage-ttl menu-inn-ttl">
              <h1 class="under-line menu-inn-ttl__inner">脂肪溶解注射 チンセラ</h1>
            </div>
            <div class="sl-whatis-inn-content">
              <div class="fl-style02 d-fl align-center">
                <div class="image">
                  <img class="pc" src="<?php echo get_template_directory_uri(); ?>/img/sub-whatfatdis-img01.png" alt="脂肪溶解注射 チンセラ">
                  <img class="sp" src="<?php echo get_template_directory_uri(); ?>/img/sub-whatfatdis-img01-sp.png" alt="脂肪溶解注射 チンセラ">
                </div>
                <div class="content">
                  <p>
                    脂肪溶解注射をホホやフェイスラインの脂肪やたるみの部分に注射することで小顔効果や若返り効果が得られます。<br>プチ整形ですので切らずに簡単に痩せられるのが特徴です。
                  </p>
                </div>
              </div>
              <div class="pg-text">
                <p>
                  脂肪を溶かす成分が含まれた薬剤を皮下に注入し、薬剤により脂肪細胞を分解・溶解させることで痩身効果が期待できます。<br>当院で使用するチンセラ・プラスには、FDA（アメリカの厚生省）に承認されたデオキシコール酸が0.8％配合されています。<br>デオキシコール酸は、脂肪細胞を小さくするだけではなく、細胞を破壊し、尿と一緒に体外へ排出することで脂肪細胞そのものの数を減らすため、半永久的な効果が得られます。<br>従来の脂肪溶解注射に比べ、注入するデオキシコール酸の量が少なめ（0.8%配合）ですが、痩身効果は高く、注入後の腫れや痛み・熱感なども感じにくく、痛みが少ないのが特長です。3回以上の注入を推奨しておりますが、1回の注入でも６〜７割の方が効果を実感できます。
                </p>
              </div>
            </div>
          </div>
        </div>
        <div id="benefits" class="sl-benefits">
          <div class="menu-inn sl-benefits-inn">
            <div class="sl-benefits-inn-ttl subpage-ttl menu-inn-ttl">
              <h2 class="under-line">脂肪溶解注射の効果<br class="sp"><small>（改善できる症状）</small></h2>
            </div>
            <div class="sl-benefits-inn-content">
              <div class="pg-text">
                <p>
                  脂肪分解効果により、脂肪細胞を小さくするだけではなく、細胞を破壊し、尿と一緒に体外へ排出することで脂肪細胞そのものの数を減らすため、半永久的な効果が得られます。<br>薬剤を気になるところにピンポイントで注入する為、部分痩せが可能です。気になるところの脂肪だけを減らすことが出来ます。
                </p>
              </div>
            </div>
          </div>
        </div>
        <div id="recommended" class="sl-recommended">
          <div class="menu-inn sl-recommended-inn">
            <div class="sl-recommended-inn-ttl subpage-ttl menu-inn-ttl">
              <h2 class="under-line">脂肪溶解注射は<br class="sp">このような方にオススメ</h2>
            </div>
            <div class="sl-recommended-inn-content">
              <div class="check-list">
                <ul class="check-list-wr">
                  <li>小顔になりたい方</li>
                  <li>フェイスラインが気になる方</li>
                  <li>脂肪吸引には抵抗がある方</li>
                  <li>痛みや腫れが少ない施術を求めている方</li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <!-- <div id="case" class="sl-case">
          <div class="menu-inn sl-case-inn">
            <div class="sl-case-inn-ttl subpage-ttl menu-inn-ttl">
              <h2 class="under-line">症例のご紹介</h2>
            </div>
            <div class="sl-case-inn-content">
              <div class="fl-style04">
                <article>
                  <a class="fl-style04-fl d-fl" target="_blank" rel="nofollow noreferrer">
                    <figure>
                      <img src="<?php echo get_template_directory_uri(); ?>/img/case/thread-case01.png" alt="症例写真">
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
                      <img src="<?php echo get_template_directory_uri(); ?>/img/case/thread-case02.png" alt="症例写真">
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
        <div id="treatment" class="sl-treatment">
          <div class="menu-inn sl-treatment-inn">
            <div class="sl-treatment-inn-ttl subpage-ttl menu-inn-ttl">
              <h2 class="under-line">組み合わせると<br class="sp">更に効果がある施術</h2>
            </div>
            <div class="sl-treatment-inn-content">
              <div class="fl-style02 d-fl">
                <div class="image">
                  <img src="<?php echo get_template_directory_uri(); ?>/img/treatment/treatment01.png" alt="HIFUリニア">
                </div>
                <div class="content content01">
                  <h3>HIFUリニア</h3>
                  <p>リニアモードで顎下、フェイスラインにあてることによって、身体の中でそのエネルギーが吸収され、さらに熱変換されることにより脂肪細胞を破壊します。脂肪溶解注射と併用することで更にフェイスラインをスッキリさせることが出来ます。</p>
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
                <h3 class="price-ttl"><span>脂肪溶解注射<br class="sp">(チンセラ)</span></h3>
                <div class="price-list">
                  <div class="d-fl price-list-wr">
                    <div class="price-list-wr-l">
                      <!-- <h3>初回</h3> -->
                      <ul>
                        <li class="d-fl">
                          <p>4cc</p>
                          <p class="dash-line"></p>
                          <p>¥33,000</p>
                        </li>
                        <li class="d-fl">
                          <p>8cc</p>
                          <p class="dash-line"></p>
                          <p>¥66,000</p>
                        </li>
                        <li class="d-fl">
                          <p>会員 4cc</p>
                          <p class="dash-line"></p>
                          <p>¥26,400</p>
                        </li>
                        <li class="d-fl">
                          <p>会員 8cc</p>
                          <p class="dash-line"></p>
                          <p>¥52,800</p>
                        </li>
                      </ul>
                    </div>
                  </div>
                  <p class="price-list-warn pc">※会員：アートメイク会員</p>
                </div>
              </div>
              <p class="price-list-warn sp">※会員：アートメイク会員</p>
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
                <a href="https://reservation.medical-force.com/2d96f6933ed14b2a8e271863a7f0b813/reservations/new?menu_ids=96f4d176-6d81-47b2-818b-48512ac9413d" target="_blank" rel="nofollow noreferrer">
                  <img src="<?php echo get_template_directory_uri(); ?>/img/reservation-btn01.png" alt="">
                </a>
              </div>
            </div>
          </div>
        </div>
        <div id="precautions" class="sl-precautions">
          <div class="menu-inn sl-precautions-inn">
            <div class="sl-precautions-inn-ttl subpage-ttl menu-inn-ttl">
              <h2 class="under-line">脂肪溶解注射の注意事項</h2>
            </div>
            <div class="sl-precautions-inn-content">
              <div class="pg-text">
                <p>治療を受けられない方</p>
              </div>
              <div class="check-list">
                <ul class="check-list-wr">
                  <li>妊娠・授乳中（妊娠の可能性がある場合も含む）の方</li>
                  <li>細小血管障害や血管不全のある方</li>
                  <li>免疫不全または自己免疫疾患のある方</li>
                  <li>抗がん剤治療を行っている方</li>
                  <li>治療部位の皮膚に潰瘍や感染のある方</li>
                  <li>湿疹または乾癬を発症している方</li>
                </ul>
              </div>
              <div class="pg-text">
                <p>注入部位は腫れや痛み、内出血が出現する場合がありますが、時間の経過とともに改善します。腫れが引くと同時に硬さが出てくる場合もありますが、1か月程度で改善します。<br>また、処置当日の入浴（シャワー可）、飲酒はお控えください。痛みや腫れを助長する可能性があります。赤みや腫れの持続、蕁麻疹の出現などがある場合は、アレルギーなどの可能性がございますので、早めに当院医師の診察をお受けください。</p>
              </div>
            </div>
          </div>
        </div>
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
                      'terms' => 'fatdissolve_cat'
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
