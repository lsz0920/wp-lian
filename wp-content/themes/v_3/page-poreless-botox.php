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
                  font-family: HiraMinPro-W3, Hiragino Mincho Pro;
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
          </h2>
        </div>
        <figure class="sp-right">
          <img class="pc" src="<?php echo get_template_directory_uri(); ?>/img/makeup/sub-mv-img.png"
            alt="あなたの“似合う”が 見つかるアートメイク">
          <img class="sp" src="<?php echo get_template_directory_uri(); ?>/img/makeup/sub-mv-sp.png"
            alt="あなたの“似合う”が 見つかるアートメイク">
        </figure>
      </div>
    </div>
    <div id="menu"  class="sl-menu menu-poreless">
      <div class="sl-menu-content">
        <div id="whatis" class="sl-whatis">
          <div class="sl-whatis-inn menu-inn attach-mv">
            <div class="sl-whatis-inn-ttl subpage-ttl menu-inn-ttl">
              <h2 class="under-line">ポアレスボトックスとは</h2>
            </div>
            <div class="sl-whatis-inn-content">
              <div class="fl-style02 d-fl">
                <div class="image">
                  <img class="pc" src="<?php echo get_template_directory_uri(); ?>/img/sub-whatporeless-img01.png" alt="ポアレスボトックスとは">
                  <img class="sp" src="<?php echo get_template_directory_uri(); ?>/img/sub-whatporeless-img01-sp.png" alt="ポアレスボトックスとは">
                </div>
                <div class="content">
                  <p>
                    微量のボトックスを皮膚の浅いところに細かく注射していく治療方法です。そのため筋肉の動きを大きく止めすぎることなく、皮膚のハリを作ったり、皮脂腺や汗腺にも働きかけることで毛穴縮小効果や皮脂分泌抑制効果を特にご実感頂けます。滑らかでハリ・艶のあるお肌へ導くと共に肌の透明感を出し、肌質を変えていきます。ボトックスを筋肉に直接作用させずに、極めて微量のボトックスを皮膚の浅い層に注入するので、表情が固まるようなことがなく効果を出すことが可能です。
                  </p>
                </div>
              </div>
              <div class="check-list">
                <ul class="check-list-wr">
                  <li>テカリや化粧崩れが気になる方</li>
                  <li>毛穴の開きが気になる方</li>
                  <li>皮脂量が多い方</li>
                  <li>脂性肌の方</li>
                  <li>ニキビや吹き出物が出やすい方</li>
                </ul>
              </div>
              <div class="pg-text">
                <p>という方におすすめです。</p>
              </div>
            </div>
          </div>
        </div>
        <div id="benefits" class="sl-benefits">
          <div class="menu-inn sl-benefits-inn">
            <div class="sl-benefits-inn-ttl subpage-ttl menu-inn-ttl">
              <h2 class="under-line">ポアレスボトックスの<br class="sp">効果・特徴<br class="sp"><small>（改善できる症状）</small></h2>
            </div>
            <div class="sl-benefits-inn-content">
              <div class="check-list">
                <ul class="check-list-wr">
                  <li>皮脂、汗の分泌を抑えサラサラの肌へ</li>
                  <li>毛穴が引き締まり、肌質を改善</li>
                  <li>肌にハリが出る為エイジングケアも期待できる</li>
                </ul>
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
        <div id="state" class="sl-state">
          <div class="menu-inn sl-state-inn">
            <div class="sl-state-inn-ttl subpage-ttl menu-inn-ttl">
              <h2 class="under-line">施術の様子</h2>
            </div>
            <div class="sl-state-inn-content video-style01">
              <video width="400" controls>
                <source src="<?php echo get_template_directory_uri(); ?>/video/poreless-state-video.mp4" type="video/mp4">
              </video>
            </div>
          </div>
        </div>
        <div id="features" class="sl-features">
          <div class="menu-inn sl-features-inn">
            <div class="sl-features-inn-ttl subpage-ttl menu-inn-ttl">
              <h2 class="under-line">LIANクリニックの特徴</h2>
            </div>
            <div class="sl-features-inn-content">
              <div class="pg-text">
                <p>痛みへの最大限の配慮<br>34G (ゲージ) という超極細の注射針を使用して、リフトアップボトックスを行います。一般的には、30Gという外径が0.3mmの注射針を使用していることがほとんどです。<br>当院で使用している34Ｇは、外径が0.2mmと超極細のため、通常の針と比べて痛みが少ないのが特徴です。さらに、少しでも痛みを感じたくないという方には、オプションで麻酔を使用することも可能です。</p>
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
                <h3 class="price-ttl"><span>ポアレスボトックス</span></h3>
                <div class="price-list">
                  <div class="d-fl price-list-wr">
                    <div class="price-list-wr-l">
                      <h3>アラガン社</h3>
                      <ul>
                        <li class="d-fl">
                          <p>50単位</p>
                          <p class="dash-line"></p>
                          <p>¥74,800</p>
                        </li>
                        <li class="d-fl">
                          <p>会員 50単位</p>
                          <p class="dash-line"></p>
                          <p>¥59,840</p>
                        </li>
                      </ul>
                    </div>
                    <div class="price-list-wr-l">
                      <h3>韓国製</h3>
                      <ul>
                        <li class="d-fl">
                          <p>50単位</p>
                          <p class="dash-line"></p>
                          <p>¥33,000</p>
                        </li>
                        <li class="d-fl">
                          <p>会員 50単位</p>
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
                <p>ご予約を承っております。</p>
                <?php $contactTxt01 = CFS()->get('text01'); $contactTxt02 = CFS()->get('text02'); if($contactTxt01 != ''): ?>
                <h3><span class="l-slash">\ </span> <?php echo $contactTxt01; ?><br
                    class="sp" /><?php echo $contactTxt02; ?> <span class="r-slash"> /</span></h3>
                <?php endif; ?>
                <div class="h-line"></div>
                <a href="https://reservation.medical-force.com/2d96f6933ed14b2a8e271863a7f0b813/reservations/new?menu_ids=ccf45173-292e-4e1b-832e-e3130bfffdab" target="_blank" rel="nofollow noreferrer">
                  <img src="<?php echo get_template_directory_uri(); ?>/img/reservation-btn01.png" alt="">
                </a>
              </div>
            </div>
          </div>
        </div>
        <div id="precautions" class="sl-precautions">
          <div class="menu-inn sl-precautions-inn">
            <div class="sl-precautions-inn-ttl subpage-ttl menu-inn-ttl">
              <h2 class="under-line">ポアレスボトックスの<br class="sp">注意事項</h2>
            </div>
            <div class="sl-precautions-inn-content">
              <div class="disc-list disc--list">
                <ul class="disc-list-wr">
                  <li class="d-fl">
                    <span>・</span>
                    <p>かゆみ、圧痛を伴う炎症反応（赤み、むくみ、紅斑）などが起きる可能性があります。これらは通常は一過性のものですが、1週間ほど継続することがあります。</p>
                  </li>
                  <li class="d-fl">
                    <span>・</span>
                    <p>注入後の経過が経った後、まれにアレルギー症状が起きることがあります。</p>
                  </li>
                  <li class="d-fl">
                    <span>・</span>
                    <p>血腫、感染、注入部位の着色または退色、神経圧迫、塞栓、膿疹形成、肉芽腫、過敏症などが起きることがあります。</p>
                  </li>
                  <li class="d-fl">
                    <span>・</span>
                    <p>注射針によって内出血が起きることがあります。</p>
                  </li>
                  <li class="d-fl">
                    <span>・</span>
                    <p>予想以上に効果の実感が得られない、または修正効果が弱いなど効果に個人差がでる可能性があります。</p>
                  </li>
                </ul>
              </div>
              <div class="pg-text">
                <p>※妊娠・授乳中の方は施術を受けることが出来ません</p>
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
                    'terms' => 'poreless_cat'
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

    <?php get_template_part( 'footer-company' );?>
  </main>
</div>
<?php
get_footer();
