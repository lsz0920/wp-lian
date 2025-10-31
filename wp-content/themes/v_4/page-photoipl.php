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
        "name": "どのような症状に効果的ですか？",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "<span>肌のあらゆる悩みに効果的な施術ですが、特にシミ・そばかすに効果的です。また、シミ・そばかすをなくすだけではなく、シミ予防をしたい方、ニキビ肌の改善をしたい方に最適な施術です。</span>"
        }
      },
      {
        "@type": "Question",
        "name": "1回でも効果を実感できますか？",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "<span>シミやそばかすの場合1回でも効果を実感していただけますが、美肌効果、赤ら顔に関しては5回以上の施術がおすすめです。</span>"
        }
      },
      {
        "@type": "Question",
        "name": "何回治療をすれば、キレイになりますか？",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "<span>1回でも一定の効果はありますが、お肌のメンテナンスとして1ヵ月おきに5〜10回程度治療を受けられることをおすすめしております。また、濃いシミがある場合、3回目くらいまでアキュプラスの併用をおすすめしております。その後も美肌効果や肌のハリを維持するために定期的に治療を受けられる方が多くいらっしゃいます。</span>"
        }
      },
      {
        "@type": "Question",
        "name": "治療は痛いですか？",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "<span>輪ゴムで弾かれるような痛みを感じる方もいらっしゃいますが、照射スピードを調整するなど痛みに配慮した治療を行いますので、ご安心ください。</span>"
        }
      },
      {
        "@type": "Question",
        "name": "施術を受けたことが周りにバレませんか？",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "<span>アキュプラスで濃いシミの治療をした場合、シミが1週間程度かさぶたになることがあります。細かいかさぶたはメイクでカバーできますが、施術翌日はメイクのノリが悪く見える方もいらっしゃいます。シミの濃さにより反応が異なりますので、ご不安な方はお仕事などのお休み前のご来院をおすすめしております。</span>"
        }
      },
      {
        "@type": "Question",
        "name": "施術後にメイクをしても大丈夫ですか？",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "<span>問題ありません。施術直後から普段通りの生活をしていただけます。</span>"
        }
      },
      {
        "@type": "Question",
        "name": "施術後のダウンタイムはありますか？",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "<span>個人差はありますが施術後1〜2時間程度、赤みや日焼け後のようなヒリヒリとした感じが残る場合があります。また、肌が敏感な方にはごく稀に数日間赤みが残る場合がございます。その場合、ご自宅でできるケアをお伝えしておりますので、ご心配の方はご相談ください。</span>"
        }
      },
      {
        "@type": "Question",
        "name": "照射後に特別なケアは必要ですか？",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "<span>通常のスキンケアで大丈夫です。しかし、治療後の肌は日光の影響を受けやすくなっているため、日焼け止めや帽子、日傘などでの紫外線対策をお願いしております。</span>"
        }
      },
      {
        "@type": "Question",
        "name": "治療を何回も受けることで肌が薄くなったり敏感になったりしませんか？",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "<span>そのようなことはございません。フォトIPLは、肌を活性化させることでターンオーバーを促進させる治療です。また、治療時間も15〜30分程度と手軽に受けられるため、肌のメンテナンスとして人気の治療です。</span>"
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
    <div id="menu" class="sl-menu menu menu-photoipl">
      <div class="sl-menu-content">
        <div id="whatis" class="sl-whatis">
          <div class="sl-whatis-inn menu-inn attach-mv">
            <div class="sl-whatis-inn-ttl subpage-ttl menu-inn-ttl">
              <h1 class="under-line menu-inn-ttl__inner">フォトiplとは</h1>
            </div>
            <div class="sl-whatis-inn-content">
              <div class="fl-style02 d-fl">
                <div class="image">
                  <img class="pc" src="<?php echo get_template_directory_uri(); ?>/img/sub-whatphotoipl-img01.png" alt="フォトiplとは">
                  <img class="sp" src="<?php echo get_template_directory_uri(); ?>/img/sub-whatphotoipl-img01-sp.png" alt="フォトiplとは">
                </div>
                <div class="content">
                  <p>フォトIPLは、IPL（Intense Pulsed Light）という光を肌に照射することで、シミやそばかす、肌のくすみ、ニキビ跡といったあらゆる肌の悩みを改善する美肌治療です。</p>
                  <p>IPLには黒い色素と赤い色素に反応する特徴があります。そのため、メラニンや色素沈
                    着などに反応し、シミや赤ら顔を改善します。また、肌の深部に届いた光がコラーゲ
                    ンを作り出す線維芽細胞の働きも活性化させるため、肌のハリや毛穴も改善できます。</p>
                </div>
              </div>
              <div class="pg-text">
                <p>肌への負担、ダウンタイムがほとんどなく、施術直後からメイクをしていただけるため、気軽に受けていただけます。 皮膚科医療ではゴールドスタンダードといわれ、多くの専門医からも支持されています。</p>
              </div>
              <div class="image-center">
                <h3>光治療とレーザー治療　<br class="sp">違いのイメージ</h3>
                <figure>
                  <img src="<?php echo get_template_directory_uri(); ?>/img/sub-whatphotoipl-img02.png" alt="光治療とレーザー治療　違いのイメージ">
                </figure>
              </div>
            </div>
          </div>
        </div>
        <div id="benefits" class="sl-benefits">
          <div class="menu-inn sl-benefits-inn">
            <div class="sl-benefits-inn-ttl subpage-ttl menu-inn-ttl">
              <h2 class="under-line">フォトの効果<br class="sp"><small>（改善できる症状）</small></h2>
            </div>
            <div class="sl-benefits-inn-content">
              <ul class="circle-fl01 d-fl">
                <li class="circle">
                  <div>
                    <p>熱エネルギーで<br>メラニン・<br>ヘモグロビン色素を分解</p>
                    <h3>美白効果</h3>
                  </div>
                </li>
                <li class="plus">
                  <img src="<?php echo get_template_directory_uri(); ?>/img/plus-icon01.svg" alt="Plus">
                </li>
                <li class="circle">
                  <div>
                    <p>真皮層を刺激し<br>メラニン・<br>コラーゲンの生成を活性</p>
                    <h3>キメ・ハリ・<br>弾力の回復</h3>
                  </div>
                </li>
                <li class="equal">
                  <img class="pc" src="<?php echo get_template_directory_uri(); ?>/img/equal-icon01.svg" alt="Equal">
                  <img class="sp" src="<?php echo get_template_directory_uri(); ?>/img/equal-icon01-sp.svg" alt="Equal">
                </li>
                <li class="circle total">
                  <div>
                    <h3>相乗効果により<br>透明感が増しシミのない<br>キメの整った<br>もっちり肌へ肌質を<br>改善</h3>
                  </div>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <div id="recommended" class="sl-recommended">
          <div class="menu-inn sl-recommended-inn">
            <div class="sl-recommended-inn-ttl subpage-ttl menu-inn-ttl">
              <h2 class="under-line">フォトはこのような方に<br class="sp">オススメ</h2>
            </div>
            <div class="sl-recommended-inn-content">
              <div class="check-list">
                <ul class="check-list-wr">
                  <li>シミ、そばかす</li>
                  <li>くすみ、美白</li>
                  <li>赤ら顔</li>
                  <li>肌のハリ、小じわ</li>
                  <li>毛穴</li>
                </ul>
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
                      <img src="<?php echo get_template_directory_uri(); ?>/img/case/photoipl-case01.png" alt="症例写真">
                    </figure>
                    <div class="content">
                      <dl>
                        <dt>施術名</dt>
                        <dd>アキュライト＋アキュプラス</dd>
                      </dl>
                      <dl>
                        <dt>施術の説明</dt>
                        <dd>光によるシミ治療</dd>
                      </dl>
                      <dl>
                        <dt>施術の副作用(リスク)</dt>
                        <dd>火傷、肝斑の悪化、毛嚢炎</dd>
                      </dl>
                      <dl>
                        <dt>施術の価格</dt>
                        <dd>¥7,700〜</dd>
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
              <div class="sl-price-inn-content-wr"></div>
              <div class="price">
                <h3 class="price-ttl"><span>IPL (アキュライト)</span></h3>
                <div class="price-list">
                  <div class="d-fl price-list-wr">
                    <div class="price-list-wr-l">
                      <h3>全顔</h3>
                      <ul>
                        <li class="d-fl">
                          <p>1回</p>
                          <p class="dash-line"></p>
                          <p>¥9,900</p>
                        </li>
                        <li class="d-fl">
                          <p>3回</p>
                          <p class="dash-line"></p>
                          <p>¥28,500</p>
                        </li>
                        <li class="d-fl">
                          <p>5回</p>
                          <p class="dash-line"></p>
                          <p>¥46,200</p>
                        </li>
                        <li class="d-fl">
                          <p>会員 3回</p>
                          <p class="dash-line"></p>
                          <p>¥22,800</p>
                        </li>
                        <li class="d-fl">
                          <p>会員 5回</p>
                          <p class="dash-line"></p>
                          <p>¥36,960</p>
                        </li>
                      </ul>
                    </div>
                  </div>
                  <p class="price-list-warn pc">※会員：アートメイク会員</p>
                </div>
              </div>
              <p class="price-list-warn sp">※会員：アートメイク会員</p>
              <div class="price">
                <h3 class="price-ttl"><span>IPL (アキュプラス)</span></h3>
                <div class="price-list">
                  <div class="d-fl price-list-wr">
                    <div class="price-list-wr-l">
                      <h3>全顔</h3>
                      <ul>
                        <li class="d-fl">
                        <li class="d-fl">
                          <p>1回</p>
                          <p class="dash-line"></p>
                          <p>¥14,300</p>
                        </li>
                        <li class="d-fl">
                          <p>3回</p>
                          <p class="dash-line"></p>
                          <p>¥39,600</p>
                        </li>
                        <li class="d-fl">
                          <p>5回</p>
                          <p class="dash-line"></p>
                          <p>¥64,000</p>
                        </li>
                        <li class="d-fl">
                          <p>会員 3回</p>
                          <p class="dash-line"></p>
                          <p>¥31,680</p>
                        </li>
                        <li class="d-fl">
                          <p>会員 5回</p>
                          <p class="dash-line"></p>
                          <p>¥51.200</p>
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
              <h2 class="under-line">フォトの注意事項</h2>
            </div>
            <div class="sl-precautions-inn-content">
              <div class="check-list">
                <ul class="check-list-wr">
                  <li>施術2週間前の過度の日焼けは火傷の原因となります。</li>
                  <li>施術後も日焼け止めを使用し、日焼け対策を行ってください。</li>
                  <li>一部しみが濃くなることがございますが数日でポロっと剥けるか、落ち着きます。</li>
                  <li>ほとんどダウンタイムはございませんがやや赤みが出た場合も数時間で落ち着きます。</li>
                  <li>当日から入浴・シャワー可能</li>
                  <li>当日からメイク可能</li>
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
                <h2 class="under-line">よくある質問</h2>
              </div>
              <div class="sl-faq-inn-content menu-faq-content">
                <?php
                $args = array(
                  'tax_query' => array(
                    array(
                      'taxonomy' => 'faq_category',
                      'field' => 'slug',
                      'terms' => 'photoipl_cat'
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
