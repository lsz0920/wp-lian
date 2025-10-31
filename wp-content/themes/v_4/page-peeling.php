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
        "name": "施術の間隔はどれくらいですか？",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "<span>2週間から4週間に1回、5回ほど繰り返していただくことで、より効果を実感しやすくなります。</span>"
        }
      },
      {
        "@type": "Question",
        "name": "1回の施術でも効果はありますか？",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "<span>1回の施術でも、肌の変化を実感することができますが、効果を持続させるためにも、5回ほどの継続をおすすめしています。</span>"
        }
      },
      {
        "@type": "Question",
        "name": " ダウンタイムはありますか？",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "<span>ダウンタイムはほぼありません。肌質によっては、施術後に赤みが出たり、皮むけが生じることがあります。時間の経過とともに落ち着いていきます。</span>"
        }
      },
      {
        "@type": "Question",
        "name": "メイクはいつからできますか？",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "<span>施術直後から可能です。</span>"
        }
      },
      {
        "@type": "Question",
        "name": "痛みはありますか？",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "<span>痛みはありませんが、薬剤を浸透させる際に、ピリピリとした感じを覚える方もいます。</span>"
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
    <div id="menu" class="sl-menu menu-peeling">
      <div class="sl-menu-content">
        <div id="whatis" class="sl-whatis peeling-whatis">
          <div class="sl-whatis-inn menu-inn attach-mv">
            <div class="sl-whatis-inn-ttl subpage-ttl menu-inn-ttl">
              <h1 class="under-line menu-inn-ttl__inner">ピーリングとは</h1>
            </div>
            <div class="sl-whatis-inn-content">
              <div class="fl-style02 d-fl">
                <div class="image">
                  <img class="pc" src="<?php echo get_template_directory_uri(); ?>/img/sub-whatpeeling-img01.png" alt="ピーリングとは">
                  <img class="sp" src="<?php echo get_template_directory_uri(); ?>/img/sub-whatpeeling-img01-sp.png" alt="ピーリングとは">
                </div>
                <div class="content">
                  <p>古い角質を除去し、肌のターンオーバーを促進させることで、様々な肌悩みを解決できる施術がピーリングです。当院では、マッサージピールとミラノリピールの２種類のピーリング剤を扱っております。</p>
                  <p>マッサージピールは、イタリア生まれのピーリング剤で「PRX-T33」という薬剤を使用します。従来の古い角質を除去する作用だけでなく、肌の真皮層に作用し、コラーゲンの生成を促すことができる点が特徴です。
                  </p>
                </div>
              </div>
            </div>
            <div class="pg-text">
              <p>
                ミラノリピールは5種類の酸（TCA, AHA, BHA, PHA,クエン酸）が配合されています。これら酸のピーリング効果に加えて、アミノ酸やビタミンが直接的に肌細胞を刺激し、Ⅲ型コラーゲンを増やして、エラスチンやヒアルロン酸を作る手助けをします。<br>ミラノリピールはボディ専用の薬剤もあり、お尻や膝、肘、腋などの皮膚の黒ずみを解消したい方や、手や足の甲の皮膚にハリ・ツヤを持たせたい方など、お悩みに合わせた治療が可能です。
              </p>
            </div>
          </div>
        </div>
        <div id="benefits" class="sl-benefits">
          <div class="menu-inn sl-benefits-inn">
            <div class="sl-benefits-inn-ttl subpage-ttl menu-inn-ttl">
              <h2 class="under-line">ピーリングの効果<br class="sp"><small>（改善できる症状）</small></h2>
            </div>
            <div class="sl-benefits-inn-content">
              <div class="check-list">
                <h3>マッサージピール</h3>
                <ul class="check-list-wr">
                  <li>肌のハリ・弾力アップ</li>
                  <li>小じわ・乾燥改善</li>
                  <li>顔全体のくすみ改善</li>
                  <li>毛穴のざらつき改善</li>
                  <li>キメを整え毛穴目立ち改善</li>
                  <li>開き毛穴・たるみ毛穴の予防改善</li>
                  <li>肌質改善</li>
                </ul>

              </div>
              <div class="check-list">
                <h3>ミラノリピール</h3>
                <ul class="check-list-wr">
                  <li>ニキビ、ニキビ痕、毛穴の改善</li>
                  <li>シミ、そばかす、くすみの改善</li>
                  <li>皮膚に張りを持たせる</li>
                  <li>皮膚質感の改善、小じわの解消</li>
                </ul>

              </div>
            </div>
          </div>
        </div>
        <div id="benefits" class="sl-benefits">
          <div class="menu-inn sl-benefits-inn">
            <div class="sl-benefits-inn-ttl subpage-ttl menu-inn-ttl">
              <h2 class="under-line">ピーリングの効果<br class="sp"><small>（改善できる症状）</small></h2>
            </div>
            <div class="sl-benefits-inn-content">
              <div class="list-style01">
                <article class="list-style01-item">
                  <h2 class="list-style01-item-ttl"><span class="list-no">01</span>効果の現れ方</h2>
                  <div class="list-style01-item-txt">
                    <p>
                      エイジングケアをメイン効果として得たい場合はマッサージピール、ニキビや毛穴が気になる場合はミラノリピールがおすすめです。
                    </p>
                  </div>
                </article>
                <article class="list-style01-item">
                  <h2 class="list-style01-item-ttl"><span class="list-no">02</span>治療回数</h2>
                  <div class="list-style01-item-txt">
                    <p>2週間から4週間に1回、5回ほど繰り返していただくことで、より効果を実感しやすくなります。</p>
                  </div>
                </article>
                <article class="list-style01-item">
                  <h2 class="list-style01-item-ttl"><span class="list-no">03</span>ダウンタイム</h2>
                  <div class="list-style01-item-txt">
                    <p>
                      ダウンタイムはほぼなし<br>肌質により施術後に赤み、皮むけが生じることがあります。
                    </p>
                  </div>
                </article>
                <article class="list-style01-item">
                  <h2 class="list-style01-item-ttl"><span class="list-no">04</span>痛み</h2>
                  <div class="list-style01-item-txt">
                    <p>
                      施術中にややピリピリ感を感じることがあります
                    </p>
                  </div>
                </article>
              </div>
            </div>
          </div>
        </div>
        <div id="recommended" class="sl-recommended">
          <div class="menu-inn sl-recommended-inn">
            <div class="sl-recommended-inn-ttl subpage-ttl menu-inn-ttl">
              <h2 class="under-line">ピーリングはこのような方にオススメ</h2>
            </div>
            <div class="sl-recommended-inn-content">
              <div class="check-list">
                <ul class="check-list-wr">
                  <li>毛穴が気になる</li>
                  <li>肌のごわつき、ざらつきが気になる</li>
                  <li>ニキビが気になる</li>
                  <li>くすみが気になりトーンアップしたい</li>
                  <li>ハリ感が欲しい</li>
                  <li>手軽に肌ケアをしたい</li>
                </ul>

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
                  <img src="<?php echo get_template_directory_uri(); ?>/img/treatment/treatment06.png" alt="エレクトロポレーション">
                </div>
                <div class="content content01">
                  <h3>エレクトロポレーション</h3>
                  <p>当院では、ピーリング治療を組み合わせて、エレクトロポレーションの施術もおすすめしています。エレクトロポレーションは、皮膚に弱い電気をあてて、小さな穴をあけることで、美容成分を肌の奥に浸透させる施術です。肌荒れ、ニキビ、美白、しみ、乾燥、アンチエイジングなど目的に合わせて美容成分を選べます。</p>
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
                <h3 class="price-ttl"><span>ピーリング(ミラノリピール)</span></h3>
                <div class="price-list">
                  <div class="d-fl price-list-wr">
                    <div class="price-list-wr-l">
                      <h3>顔</h3>
                      <ul>
                        <li class="d-fl">
                          <p>1回</p>
                          <p class="dash-line"></p>
                          <p>¥12,800</p>
                        </li>
                        <li class="d-fl">
                          <p>3回</p>
                          <p class="dash-line"></p>
                          <p>¥33,000</p>
                        </li>
                        <li class="d-fl">
                          <p>会員 3回</p>
                          <p class="dash-line"></p>
                          <p>¥26,400</p>
                        </li>
                      </ul>
                    </div>
                    <div class="price-list-wr-l">
                      <h3>ヒップ</h3>
                      <ul>
                        <li class="d-fl">
                          <p>1回</p>
                          <p class="dash-line"></p>
                          <p>¥28,600</p>
                        </li>
                      </ul>
                    </div>
                    <div class="price-list-wr-l">
                      <h3>膝</h3>
                      <ul>
                        <li class="d-fl">
                          <p>1回</p>
                          <p class="dash-line"></p>
                          <p>¥22,000</p>
                        </li>
                      </ul>
                    </div>
                    <div class="price-list-wr-l">
                      <h3>背中上部 / 下部</h3>
                      <ul>
                        <li class="d-fl">
                          <p>1回</p>
                          <p class="dash-line"></p>
                          <p>¥35,200</p>
                        </li>
                      </ul>
                    </div>
                  </div>
                  <p class="price-list-warn pc">※会員：アートメイク会員</p>
                </div>
              </div>
              <div class="price">
                <h3 class="price-ttl"><span>ピーリング(マッサージピール)</span></h3>
                <div class="price-list">
                  <div class="d-fl price-list-wr">
                    <div class="price-list-wr-l">
                      <h3>顔</h3>
                      <ul>
                        <li class="d-fl">
                          <p>1回</p>
                          <p class="dash-line"></p>
                          <p>¥12,800</p>
                        </li>
                        <li class="d-fl">
                          <p>3回</p>
                          <p class="dash-line"></p>
                          <p>¥33,000</p>
                        </li>
                        <li class="d-fl">
                          <p>会員 3回</p>
                          <p class="dash-line"></p>
                          <p>¥26,400</p>
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
                <a href="https://lin.ee/94Mjv4T" target="_blank" rel="nofollow noreferrer">
                  <img src="<?php echo get_template_directory_uri(); ?>/img/reservation-btn01.png" alt="">
                </a>
              </div>
            </div>
          </div>
        </div>
        <div id="precautions" class="sl-precautions">
          <div class="menu-inn sl-precautions-inn">
            <div class="sl-precautions-inn-ttl subpage-ttl menu-inn-ttl">
              <h2 class="under-line">ピーリングの注意事項</h2>
            </div>
            <div class="sl-precautions-inn-content">
              <div class="pg-text">
                <p>ピーリング治療後はお肌が乾燥しやすくなっています。しっかりと保湿をしてください。また、紫外線の影響も受けやすくなるため、日焼け止めを塗るなどの十分な紫外線対策を行ってください。</p>
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
                      'terms' => 'peeling_cat'
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
