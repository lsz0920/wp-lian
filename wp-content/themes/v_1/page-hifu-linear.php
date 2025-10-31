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
    <div id="menu"  class="sl-menu menu-hifulinear">
      <div class="sl-menu-content">
        <div id="whatis" class="sl-whatis">
          <div class="sl-whatis-inn menu-inn attach-mv">
            <div class="sl-whatis-inn-ttl subpage-ttl menu-inn-ttl">
              <h2 class="under-line">HIFUリニア<br class="sp"> (脂肪溶解HIFU) とは</h2>
            </div>
            <div class="sl-whatis-inn-content">
              <div class="fl-style02 d-fl align-center">
                <div class="image">
                  <img class="pc" src="<?php echo get_template_directory_uri(); ?>/img/sub-whathifulinear-img01.png" alt="HIFUリニア (脂肪溶解HIFU) とは">
                  <img class="sp" src="<?php echo get_template_directory_uri(); ?>/img/sub-whathifulinear-img01-sp.png" alt="HIFUリニア (脂肪溶解HIFU) とは">
                </div>
                <div class="content">
                  <p>メスや注射を使うことなく脂肪層に働きかけ脂肪層をボリュームダウン出来る治療です。</p>
                </div>
              </div>
              <div class="check-list">
                <ul class="check-list-wr">
                  <li>切らずに小顔になりた</li>
                  <li>シャープな輪郭になりたい</li>
                  <li>2重あご、フェイスラインをスッキリさせたい</li>
                  <li>輪郭をはっきりさせたい</li>
                </ul>
              </div>
              <div class="pg-text">
                <p>という方におすすめです。</p>
              </div>
              <div class="fl-style02 d-fl align-center">
                <div class="image">
                  <img src="<?php echo get_template_directory_uri(); ?>/img/sub-whathifulinear-img02.png" alt="HIFUリニア (脂肪溶解HIFU) とは">
                </div>
                <div class="content content02">
                  <h3>ウルトラセルQ＋という機械のリニアモードで施術をしていきます</h3>
                  <p>リニアモードで顎下、フェイスラインにあてることによって、身体の中でそのエネルギーが吸収され、さらに熱変換されることにより脂肪細胞を破壊します。脂肪層を58℃前後まで熱することで脂肪溶解を引き起こし、溶解した脂肪は血管やリンパ腺を通じて排出され、自然とボリュームがダウンします。また破壊された脂肪細胞は再生されないため、リバウンドも起こりにくいです。</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div id="benefits" class="sl-benefits">
          <div class="menu-inn sl-benefits-inn">
            <div class="sl-benefits-inn-ttl subpage-ttl menu-inn-ttl">
              <h2 class="under-line">HIFUリニアの効果<br class="sp"><small>（改善できる症状）</small></h2>
            </div>
            <div class="sl-benefits-inn-content">
              <div class="check-list">
                <ul class="check-list-wr">
                  <li>二重顎</li>
                  <li>小顔効果</li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div id="recommended" class="sl-recommended">
          <div class="menu-inn sl-recommended-inn">
            <div class="sl-recommended-inn-ttl subpage-ttl menu-inn-ttl">
              <h2 class="under-line">HIFUリニアは<br class="sp">このような方にオススメ</h2>
            </div>
            <div class="sl-recommended-inn-content">
              <div class="fl-style02 d-fl row-reverse">
                <div class="image">
                  <img src="<?php echo get_template_directory_uri(); ?>/img/recommend/hifulinear-recommend01.png" alt="HIFUリニアはこのような方にオススメ">
                </div>
                <div class="content">
                  <p>打つ箇所<br>
                  基本的にハイフリニアは肉（脂肪）が付きやすく、もたつきが気になる部分に照射するのがオススメです。特に顎下から側面にかけてのラインは顔の中でも改善が難しい部位。リフトアップ治療よりもハイフリニアで脂肪を分解するほうがスッキリしやすいです。逆に、顔の上半分の脂肪を減らすのはおすすめしません。顔の中でも頬骨は若さの象徴。ここが痩せると老けて見えやすくなります。そのためお客様の状態やご希望にも寄りますが、ハイフリニアは顔の下半分が主なターゲットと考えると良いでしょう。</p>
                </div>
              </div>
              <div class="pg-text">
                <p>頻度・回数<br>
                  ハイフリニアは基本的に2〜3週に1回、最低計3回は行うのをおすすめしています。3回分を1クールと考えて、効果を実感できた方はもう1クール…と続けていく流れが一般的です。</p>
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
        <div id="features" class="sl-features">
          <div class="menu-inn sl-features-inn">
            <div class="sl-features-inn-ttl subpage-ttl menu-inn-ttl">
              <h2 class="under-line">LIANクリニック3つの特徴</h2>
            </div>
            <div class="sl-features-inn-content">
              <div class="fl-style03 d-fl">
                <article class="fl-style03-item">
                  <h3><span class="list-no">01</span><small>美容クリニック</small>4年目以上<small>の</small><br><small>看護師のみ所属</small></h3>
                  <figure>
                    <img src="<?php echo get_template_directory_uri(); ?>/img/features/hifu-feature01.png" alt="LIANの３つの特徴">
                  </figure>
                  <p>美容クリニック勤続4年目以上の美容看護師のみ施術を担当いたします</p>
                </article>
                <article class="fl-style03-item">
                  <h3><span class="list-no">02</span><small>解剖生理に基づいた</small><br>適切なマーキング</h3>
                  <figure>
                    <img src="<?php echo get_template_directory_uri(); ?>/img/features/hifu-feature02.png" alt="LIANの３つの特徴">
                  </figure>
                </article>
                <article class="fl-style03-item">
                  <h3><span class="list-no">03</span><small>お悩みに合わせた</small><br>カスタマイズハイフ</h3>
                  <figure>
                    <img src="<?php echo get_template_directory_uri(); ?>/img/features/hifu-feature03.png" alt="LIANの３つの特徴">
                  </figure>
                </article>
              </div>
            </div>
          </div>
        </div>
        <!-- <div id="state" class="sl-state">
          <div class="menu-inn sl-state-inn">
            <div class="sl-state-inn-ttl subpage-ttl menu-inn-ttl">
              <h2 class="under-line">施術の様子</h2>
            </div>
            <div class="sl-state-inn-content video-style01">
              <iframe width="853" height="480" src="https://www.youtube.com/embed/K4TOrB7at0Y" title="Demo Background Sample Video" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
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
                  <img src="<?php echo get_template_directory_uri(); ?>/img/treatment/treatment02.png" alt="サマージェン">
                </div>
                <div class="content content01">
                  <h3>サマージェン</h3>
                  <p>HIFUよりも浅い層がターゲットである、サーマジェンを併用することで、HIFUの小顔効果に加えて、引き締め効果を期待できます。HIFUとサーマジェンの併用治療である「ハイサーマ」という治療を行っているのでおすすめです。</p>
                </div>
              </div>
              <div class="fl-style02 d-fl row-reverse">
                <div class="image">
                  <img src="<?php echo get_template_directory_uri(); ?>/img/treatment/treatment03.png" alt="脂肪溶解注射">
                </div>
                <div class="content content01">
                  <h3>脂肪溶解注射</h3>
                  <p>脂肪溶解注射を併用することでさらなる脂肪溶解が期待できます。</p>
                </div>
              </div>
              <div class="fl-style02 d-fl">
                <div class="image">
                  <img src="<?php echo get_template_directory_uri(); ?>/img/treatment/treatment04.png" alt="ショートスレッド">
                </div>
                <div class="content content01">
                  <h3>ショートスレッド</h3>
                  <p>皮膚に吸収される（約６～８ヶ月）過程で皮下組織に刺激を与え続け、創傷治癒効果をもたらし長期的なコラーゲン生成により、【たるみ改善、新細胞による肌質の向上や弾力アップ、毛穴改善】が見込めます。</p>
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
                <h3 class="price-ttl"><span>ハイフリニア(ウルトラセルQ＋)</span></h3>
                <div class="price-list">
                  <div class="d-fl price-list-wr">
                    <div class="price-list-wr-l">
                      <h3>頬〜顎下</h3>
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
                <a href="https://reservation.medical-force.com/2d96f6933ed14b2a8e271863a7f0b813/reservations/new?menu_ids=a0da694a-75e8-4160-99f3-a433d977f669" target="_blank" rel="nofollow noreferrer">
                  <img src="<?php echo get_template_directory_uri(); ?>/img/reservation-btn01.png" alt="">
                </a>
              </div>
            </div>
          </div>
        </div>
        <div id="notes" class="sl-notes">
          <div class="menu-inn sl-notes-inn">
            <div class="sl-notes-inn-ttl subpage-ttl menu-inn-ttl">
              <h2 class="under-line">HIFUの注意事項</h2>
            </div>
            <div class="sl-notes-inn-content">
              <div class="check-list">
                <ul class="check-list-wr">
                  <li>一時的に発赤が生じることがありますが、通常は数時間、長くても3日程度で落ち着いてきます。</li>
                  <li>施術後腫れることがありますが数日で治まります。</li>
                  <li>治療当日は激しい運動、入浴、サウナなどは控えてください。</li>
                  <li>治療前後2週間はピーリング作用がある化粧品や治療は控えてください。</li>
                  <li>ボトックス注射をした方は、HIFUの施術は１ヶ月経ってからにしてください。</li>
                  <li>過度の日焼けや日焼けサロンの後は受けられません。</li>
                  <li>前日にピーリング治療などはお避けください。</li>
                </ul>
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
                    'terms' => 'hifulinear_cat'
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
