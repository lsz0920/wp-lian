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
    <div id="menu" class="sl-menu menu-sarmagen">
      <div class="sl-menu-content">
        <div id="whatis" class="sl-whatis">
          <div class="sl-whatis-inn menu-inn attach-mv">
            <div class="sl-whatis-inn-ttl subpage-ttl menu-inn-ttl">
              <h1 class="under-line menu-inn-ttl__inner">サーマジェンとは</h1>
            </div>
            <div class="sl-whatis-inn-content">
              <div class="fl-style02 d-fl align-center">
                <div class="image">
                  <img class="pc" src="<?php echo get_template_directory_uri(); ?>/img/sub-whatsarmagen-img01.png" alt="サーマジェンとは">
                  <img class="sp" src="<?php echo get_template_directory_uri(); ?>/img/sub-whatsarmagen-img01-sp.png" alt="サーマジェンとは">
                </div>
                <div class="content">
                  <p>サーマジェン（RF）は、サーマクールの進化版と言われています。</p>
                </div>
              </div>
              <div class="check-list">
                <ul class="check-list-wr">
                  <li>皮膚のたるみ、たるみ毛穴が気になる方</li>
                  <li>昔に比べ顔が大きくなったと感じる方</li>
                  <li>頬にボリュームがあり、たるみが気になる方</li>
                  <li>肌のキメがなくなってきたと感じる方</li>
                  <li>バレたくない方</li>
                </ul>
              </div>
              <div class="pg-text">
                <p>におすすめです。</p>
                <p>
                  ラジオ波をお肌に照射することで、コラーゲンの生成を促進させてお肌を引き締め、たるみやシワなどを改善しリフトアップ効果が期待できる施
                  術です。高周波の深部深達性を活かし、お肌の真皮層内のコラーゲンが増えることでたるみだけでなく、皮下組織の繊維隔壁が熱で収縮すること
                  でお肌が引き締まりフェイスラインのもたつきを改善させる事が可能です。メスを使わずに行えるたるみ治療で痛みや刺激がない施術で、ダウン
                  タイムもないため気軽に受けることができます。
                </p>
              </div>
            </div>
          </div>
        </div>
        <div id="benefits" class="sl-benefits">
          <div class="menu-inn sl-benefits-inn">
            <div class="sl-benefits-inn-ttl subpage-ttl menu-inn-ttl">
              <h2 class="under-line">サーマージェンの効果<br class="sp"><small>（改善できる症状）</small></h2>
            </div>
            <div class="sl-benefits-inn-content">
              <div class="pg-text">
                <p>
                  サーマジェン（RF）は、一次効果と二次効果がある施術です。一次効果は、お肌にハリが出て弾力が増します。この効果は照射して1週間から2<br class="pc">
                  週間持続します。その後、二次効果でお肌内部のコラーゲンが増えます。これは3ヶ月くらいかけて少しずつ現れる効果になります。施術効果を<br class="pc">
                  持続させるためには、2ヶ月から3ヶ月に1回、脂肪が落ちてたるみやすい口周りなら1ヶ月に1回、サーマジェン（RF）を照射するのが良いでし
                  ょう。
                </p>
              </div>
            </div>
          </div>
        </div>
        <div id="differences" class="sl-differences">
          <div class="menu-inn sl-differences-inn">
            <div class="sl-differences-inn-ttl subpage-ttl menu-inn-ttl">
              <h2 class="under-line">HIFUとサーマジェンの違い</h2>
            </div>
            <div class="sl-differences-inn-content">
              <div class="image-center">
                <h3>HIFUは引き上げ、サーマジェンは引き締めが得意</h3>
                <div class="d-fl">
                  <figure>
                    <figcaption class="sp">サーマジェン</figcaption>
                    <img src="<?php echo get_template_directory_uri(); ?>/img/differences/sarmagen-differences01.png" alt="HIFUとサーマジェンの違い">
                  </figure>
                  <figure>
                    <figcaption class="sp">HIFU</figcaption>
                    <img src="<?php echo get_template_directory_uri(); ?>/img/differences/sarmagen-differences02.png" alt="HIFUとサーマジェンの違い">
                  </figure>
                </div>
              </div>
              <div class="pg-text">
                <p>・サーマジェンとHIFUはどちらもたるみや引き締め等の効果がある治療です。<br>
                  具体的な違いとしては、皮膚のどの層をターゲットにして熱エネルギーを照射するかという点です。サーマジェンとHIFUはそれぞれ作用する層が異なります。サーマジェンのターゲットは、真皮から皮下組織に対して高周波を照射し、HIFUのターゲットは、肌の奥深くにあるSMAS筋層です。肌を支える土台であるSMAS筋膜に作用するため、たるみのもとから引き上げます。</p>
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
              <h2 class="under-line">リアンクリニックの4リフト<br class="sp">サーマジェンとは</h2>
            </div>
            <div class="sl-what4lift-inn-content">
              <div class="what4lift-fl d-fl">
                <figure class="image">
                  <img src="<?php echo get_template_directory_uri(); ?>/img/what4lift-img.png" alt="リアンクリニックの4リフトサーマジェンとは">
                </figure>
                <div class="content">
                  <p>リアンの独自の照射方法によって、下記の４つの部位を引き締めるものが、4リフトサーマジェンです。</p>
                  <p>お顔の印象を決める大切なパーツ、それは<br>
                    ▶︎額<br>
                    ▶︎目元<br>
                    ▶︎口元<br>
                    ▶︎頬</p>
                  <p>この4つのパーツに重点を置き、引き締めかつリフティングしていくのがリアンの【4リフトサーマジェン】です。<br>
                    新世代のたるみ治療は痛みが少なく、かつ効果をしっかり出すことが可能です🕊</p>
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
				<iframe width="100%" height="100%" src="https://www.youtube.com/embed/3A0Cz-ZMCYA" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
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
                      <img src="<?php echo get_template_directory_uri(); ?>/img/case/sarmagen-case01.png" alt="症例写真">
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
                        <dd>1回 ¥ 39,600 〜</dd>
                      </dl>
                    </div>
                  </a>
                </article>
                <article>
                  <a class="fl-style04-fl d-fl" target="_blank" rel="nofollow noreferrer">
                    <figure>
                      <img src="<?php echo get_template_directory_uri(); ?>/img/case/sarmagen-case02.png" alt="症例写真">
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
                        <dd>1回 ¥ 39,600 〜</dd>
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
              <h2 class="under-line">組み合わせると<br class="sp">更に効果がある施術</h2>
            </div>
            <div class="sl-treatment-inn-content">
              <div class="fl-style02 d-fl">
                <div class="image">
                  <img src="<?php echo get_template_directory_uri(); ?>/img/treatment/treatment01.png" alt="HIFU">
                </div>
                <div class="content content01">
                  <h3>HIFU</h3>
                  <p>サーマジェンよりも深層がターゲットである、HIFUを併用することで、サーマジェンの引き締め効果に加えて、小顔効果を期待できます。HIFUとサーマジェンの併用治療である「ハイサーマ」という治療も行っているのでおすすめです。</p>
                </div>
              </div>
              <div class="fl-style02 d-fl row-reverse">
                <div class="image">
                  <img src="<?php echo get_template_directory_uri(); ?>/img/treatment/treatment04.png" alt="ショートスレッド">
                </div>
                <div class="content content01">
                  <h3>ショートスレッド</h3>
                  <p>皮膚に吸収される（約６～８ヶ月）過程で皮下組織に刺激を与え続け、創傷治癒効果をもたらし長期的なコラーゲン生成により、【たるみ改善、新細胞による肌質の向上や弾力アップ、毛穴改善】が見込めます。</p>
                </div>
              </div>
              <div class="fl-style02 d-fl">
                <div class="image">
                  <img src="<?php echo get_template_directory_uri(); ?>/img/treatment/treatment05.png" alt="ボトックスリフト">
                </div>
                <div class="content content01">
                  <h3>ボトックスリフト</h3>
                  <p>首の筋肉 (広頸筋)とフェイスラインの筋肉 (口角下垂筋) に浅くボトックスを注射することで、首周りからフェイスラインが引き上がりシャープな印象となります。</p>
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
                <h3 class="price-ttl"><span>RF(機器名：サーマジェン)</span></h3>
                <div class="price-list">
                  <div class="d-fl price-list-wr">
                    <div class="price-list-wr-l">
                      <h3>頬</h3>
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
                        <li class="d-fl">
                          <p>会員 1回</p>
                          <p class="dash-line"></p>
                          <p>¥31,680</p>
                        </li>
                        <li class="d-fl">
                          <p>会員 3回</p>
                          <p class="dash-line"></p>
                          <p>¥79,200</p>
                        </li>
                      </ul>
                    </div>
                    <div class="price-list-wr-l">
                      <h3>全顔(頬＋目元＋フェイスライン)＋顎下</h3>
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
                        <li class="d-fl">
                          <p>会員 1回</p>
                          <p class="dash-line"></p>
                          <p>¥42,240</p>
                        </li>
                        <li class="d-fl">
                          <p>会員 3回</p>
                          <p class="dash-line"></p>
                          <p>¥114,400</p>
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
              <h2 class="under-line">サーマージェンの注意事項</h2>
            </div>
            <div class="sl-precautions-inn-content">
              <div class="check-list">
                <ul class="check-list-wr">
                  <li>多少の赤みがでる場合もありますが、数時間または翌日には改善されます。</li>
                  <li>メイクは治療後すぐに可能です。</li>
                  <li>入浴やシャワーも問題ないですが、当日激しい運動は避けてください。</li>
                  <li>当日の飲酒は避けてください。</li>
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

    <?php get_template_part('footer-company'); ?>
  </main>
</div>
<?php
get_footer();
