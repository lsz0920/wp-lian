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
                    font-family: HiraMinPro-W3, Hiragino Mincho Pro, serif;
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
                    font-family: HiraMinPro-W3, Hiragino Mincho Pro, serif;
                    letter-spacing: 0.2em;
                  }
                </style>
              </defs>
              <text id="あなたの_似合う_が_見つかる_コラーゲンハイフ" data-name="あなたと美しさをつなぐクリニック" class="cls-1"
                transform="translate(0 35)">
                <tspan x="0" y="0">あなたと</tspan>
                <tspan x="0" y="60">美しさを</tspan>
                <tspan x="0" y="120">つなぐ</tspan>
                <tspan x="0" y="180">クリニック</tspan>
              </text>
            </svg>
          </div>
        </div>
        <figure class="sp-right">
          <img loading="lazy" class="pc" src="<?php echo get_template_directory_uri(); ?>/img/makeup/sub-mv-img.png"
            alt="あなたの似合うが見つかるコラーゲンハイフ">
          <img loading="lazy" class="sp" src="<?php echo get_template_directory_uri(); ?>/img/makeup/sub-mv-sp.png"
            alt="あなたの似合うが見つかるコラーゲンハイフ">
        </figure>
      </div>
    </div>
    <div id="menu" class="sl-menu menu-hifu">
      <div class="sl-menu-content">
        <div id="whatis" class="sl-whatis">
          <div class="sl-whatis-inn menu-inn attach-mv">
            <div class="sl-whatis-inn-ttl subpage-ttl menu-inn-ttl">
              <h1 class="under-line menu-inn-ttl__inner">コラーゲンハイフとは</h1>
            </div>
            <div class="sl-whatis-inn-content">
              <div class="fl-style02 d-fl">
                <div class="image">
                  <img loading="lazy" class="pc"
                    src="<?php echo get_template_directory_uri(); ?>/img/sub-whathifu-img01.png" alt="HIFUとは">
                  <img loading="lazy" class="sp"
                    src="<?php echo get_template_directory_uri(); ?>/img/sub-whathifu-img01-sp.png" alt="HIFUとは">
                </div>
                <div class="content">
                  <p>
                    ウルトラフォーマーMPTを使用し施術をおこないます。<br>
                    MPTはライナー状・サークル状にドットが出るドットモード(ドットが0.058秒の間隔で出る)とライナー状・サークル状に連続したドットが出るMPモード(ドットが0.000997秒の間隔で出る)が最大の特徴です。
                  </p>
                </div>
              </div>
              <div class="fl-style01-item-content">
                <div class="image-center w620">
                  <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/collagen-hifu-img1.webp"
                    alt="HIFUとサーマジェンの違い">
                </div>
              </div>
              <div class="sl-differences-inn-content">
                <div class="image-center">
                  <div class="pg-text">
                    <p>
                      <br>
                      1.5 ミリと２ミリのカートリッジを使用し施術を行います。当院の従来のハイフのターゲットが筋膜、皮下組織、真皮層なのに対して脂肪より上層を狙っているのが特徴です。
                      <br>
                      <br>
                    </p>
                  </div>
                  <div class="image-center">
                    <figure>
                      <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/collagen-hifu-about.webp" alt="コラーゲンハイフのターゲット">
                    </figure>
                  </div>
                </div>
              </div>
              <div class="sl-differences-inn-content">
                <div class="pg-text">
                  <p>
                    <br>
                    ドット状そして線状に真皮層に満遍なく熱を入れることより効果的な浅層のタイトニングが期待でき高いシナジー効果が期待できる。
                    <br>
                    <br>
                  </p>
                </div>
                <div class="image-center">
                  <figure>
                    <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/collagen-hifu-image.webp" alt="">
                  </figure>
                </div>
                <p>
                    <br>
                    <br>
                </p>
                <div class="sl-state-inn-content video-style01">
                  <iframe width="560" height="315" src="https://www.youtube.com/embed/Yuk5NxcuEms?si=seWx7fQaY4yimKfP" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                </div>
              </div>
            </div>
          </div>
          <!-- effectコラーゲンハイフの適応になる方-->
          <div id="effect" class="sl-whatis">
            <div class="sl-whatis-inn menu-inn">
              <div class="sl-whatis-inn-ttl subpage-ttl menu-inn-ttl">
                <h2 class="under-line" style="margin-top:40px;">コラーゲンハイフが適応になる方</h2>
              </div>
              <div class="pg-text">
                <p>
                  真皮層の約70％を占めるのが、皮膚のハリや弾力、強靱性を担う膠原繊維コラーゲンです。太く、ネット状のコラーゲンは、加齢や紫外線などの影響によりコラーゲンを生成する線維芽細胞機能そのものが徐々に衰退。
                  そうすることでコラーゲンは痩せて繊維が固くなり、細胞間の弾力が損なわれ、やがて皮膚にはしわやたるみが生じます。そこにフォーカスしたのがコラーゲンハイフです。
                  （コラーゲンハイフという名前は真皮層をターゲティングしておりその真皮が７０パーセントのコラーゲンをを占めることからコラーゲンハイフという名称をつけております）<br>
                  そのため
                </p>
              
                <div class="check-list" style="margin-top:0;">
                  <ul class="check-list-wr">
                    <li>たるみを予防したい方</li>
                    <li>皮膚の緩みが気になる方</li>
                    <li>浅いシワが気になる方</li>
                  </ul>
                </div>
           
                <p>
                  <br>
                  に適応が見込めます。
                </p>
              </div>
              <div class="image-center">
                <figure>
                  <figcaption class="sp">【HIFU】</figcaption>
                  <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/collagen-hifu-flow.webp" alt="コラーゲンハイフの適応になる方">
                </figure>
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
                    <strong style="display:block;" class="sv-name"><a
                        href="<?php echo home_url('/staff/藤尾-謙太/'); ?>">藤尾謙太</a></strong>
                    <strong style="display:block;" class="profile">プロフィール</strong>
                    <p class="profile-txt">昭和大学卒業<br>順天堂大学の医局入職<br>大手美容皮膚科勤務<br>2023年博士号取得<br><a
                        style="color: blue; text-decoration: underline;" target="_blank"
                        href="https://www.aesthet-derm.org/">日本美容皮膚科医学会所属</a></p>
                  </div>
                </div>
                <?php echo get_template_part('template-parts/sv-guidelines'); ?>
              </div>
            </div>
          </div>
          <!-- effect コラーゲンハイフの効果-->
          <div id="effect" class="sl-whatis">
            <div class="sl-whatis-inn menu-inn">
              <div class="sl-whatis-inn-ttl subpage-ttl menu-inn-ttl">
                <h2 class="under-line">コラーゲンハイフの効果</h2>
              </div>
              <div class="sl-whatis-inn-content">
                <div class="image-center">
                  <div class="sl-case-inn-content">
                    <div class="fl-style04">
                      <article>
                        <a class="fl-style04-fl d-fl" target="_blank" rel="nofollow noreferrer">
                          <figure>
                            <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/collagen-hifu-photo.webp"
                              alt="症例写真">
                          </figure>
                          <div class="content">
                            <dl>
                              <dt>施術名</dt>
                              <dd>2リフトコラーゲンHIFU</dd>
                            </dl>
                            <dl>
                              <dt>施術者</dt>
                              <dd>坂本 伶奈 看護師</dd>
                            </dl>
                            <dl>
                              <dt>料金</dt>
                              <dd>1回52,800円(税込) </dd>
                            </dl>
                            <dl>
                              <dt>施術の説明</dt>
                              <dd>高密度超音波を使い脂肪層〜筋肉層に加えてお肌を支える役割のSMAS層へアプローチ。お肌を引き締めるたるみ治療です
                              </dd>
                            </dl>
                            <dl>
                              <dt>副作用</dt>
                              <dd>発赤、火傷、腫脹など</dd>
                            </dl>
                          </div>
                        </a>
                        <div class="doctor__comments">
                          <strong style="text-align: left; margin-bottom: 0px;">医師コメント</strong>
                          <p>
                            お悩みが皮膚の緩み、そして浅いシワでしたが症状が改善し皮膚の引き締めが認められました。
                          </p>
                        </div>
                        <div class="pg-text">
                          <p>
                            <br>
                            たるみの原因は複合的ですが、大きな原因の一部として<br>
                          </p>
                          <div class="check-list" style="margin-top:0px; margin-bottom:0;">
                            <ul class="check-list-wr">
                              <li>コラーゲンの減少による皮膚の弾力低下</li>
                              <li>筋肉の弾性の低下や下垂</li>
                              <li>骨の萎縮、減少</li>
                            </ul>
                          </div>
                          <p>
                            <br>が挙げられその中でも【コラーゲンの減少による皮膚の弾力低下】に効果を期待できる施術であることが症例からもわかります。
                          </p>
                        </div>
                      </article>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- effect コラーゲンハイフが選ばれる理由-->
          <div id="effect" class="sl-whatis">
            <div class="sl-whatis-inn menu-inn">
              <div class="sl-features-inn-ttl subpage-ttl menu-inn-ttl">
                <h2 class="under-line">コラーゲンハイフが選ばれる理由</h2>
              </div>
              <div class="sl-reason-inn-content">
                <div class="fl-style01">
                  <article class="fl-style01-item">
                    <h3 class="fl-style01-item-ttl"><span class="list-no"></span>ライナーとサークル法で密に熱を入れるテクニックにより<br class="pc">満遍なく真皮層に熱が入り皮膚を引き締めることができる</h3>
                    <div class="fl-style01-item-content">

                      <div class="image-center w620">
                        <img loading="lazy"
                          src="<?php echo get_template_directory_uri(); ?>/img/Group-collagen-hifu.webp"
                          alt="LIANの３つの特徴">
                      </div>
                      <div class="fl-style01-item-content-txt">
                        <p style="text-align:center;">
                          <br>※メーカー提供画像
                        </p>
                      </div>
                    </div>
                  </article>
                  <article class="fl-style01-item">
                    <h3 class="fl-style01-item-ttl"><br><span class="list-no"></span>施術を行うのは開院から【41395件】のデバイス治療を行う<br class="pc">看護師歴4年以上で院内の技術チェックをクリアできた看護師。</h3>
                    <div class="d-fl fl-style01-item-content">
                      <figure>
                        <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/collagen-hifu-reason2.webp"
                          alt="LIANの３つの特徴">
                      </figure>
                      <div class="fl-style01-item-content-txt">
                        <p>
                          院内の技術チェック：医師が作成した安全性と技術を８項目に分けたチェックシートを元に行っております。<br>
                          施術にあたっては医師の診断と指示そして、メーカーの推奨を元に行なっております。<br>
                          ※2022/7/14-2025/1/31の期間の正社員の看護師が行ったデバイス治療総件数
                        </p>
                      </div>
                    </div>
                  </article>
                </div>
              </div>
            </div>
          </div>
          <!-- effect 組み合わせると効果的な施術 -->
          <div id="effect" class="sl-whatis">
            <div class="menu-inn sl-treatment-inn">
              <div class="sl-treatment-inn-ttl subpage-ttl menu-inn-ttl">
                <h2 class="under-line">組み合わせると<br class="sp">効果的な施術</h2>
              </div>
              <div class="sl-treatment-inn-content">
                <div class="fl-style02 d-fl row-reverse">
                  <div class="image">
                    <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/whatshis-blnewmer.jpg"
                      alt="ボルニューマ">
                  </div>
                  <div class="content content01">
                    <h3>ボルニューマ</h3>
                    <p>
                      ボルニューマとは高周波を用いたたるみ治療の機械です。<br>高周波治療の弱点である【痛み】をチップの改良により克服し、更にはサーマクールと同様の6.7MHzの大きな熱を加えることで強力にお顔を引き締めることができます。
                    </p>
                  </div>
                </div>
              </div>
              <br>
            </div>
          </div>
          <!-- effect 料金-->
          <div id="effect" class="sl-whatis">
            <div id="price" class="sl-price">
              <div class="menu-inn sl-price-inn">
                <div class="sl-price-inn-ttl subpage-ttl menu-inn-ttl">
                  <h2 class="under-line">料金</h2>
                </div>
                <div class="sl-price-inn-content">
                  <div class="price">
                    <h3 class="price-ttl"><span>コラーゲンハイフ</span></h3>
                    <div class="price-list">
                      <div class="d-fl price-list-wr">
                        <div class="price-list-wr-l">
                          <h3>２リフトコラーゲンハイフ<br>【頬+フェイスライン】</h3>
                          <ul>
                            <li class="d-fl">
                              <p>400ショット</p>
                              <p class="dash-line"></p>
                              <p>¥52,800</p>
                            </li>
                          </ul>
                        </div>
                        <div class="price-list-wr-l">
                          <h3>４リフトコラーゲンハイフ<br>【顎裏、目元、首含む】</h3>
                          <ul>
                            <li class="d-fl">
                              <p>1000ショット</p>
                              <p class="dash-line"></p>
                              <p>¥99,000</p>
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
          </div>
          <!-- effect ご予約-->
          <div id="effect" class="sl-whatis">
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
                    if ($contactTxt01 != ''): ?>
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
                <a style="display:block;" target="_blank" href="https://lin.ee/U5tTSaw"
                  class="sl-reservation-inn-banner">
                  <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/reservation-banner01.png"
                    alt="LINE登録">
                </a>
              </div>
            </div>
          </div>

          <!-- effect 注意事項-->
          <div id="effect" class="sl-whatis">
            <div id="notes" class="sl-notes">
              <div class="menu-inn sl-notes-inn">
                <div class="sl-notes-inn-ttl subpage-ttl menu-inn-ttl">
                  <h2 class="under-line">コラーゲンハイフの注意事項</h2>
                </div>
                <div class="sl-notes-inn-content">
                  <div class="check-list">
                    <ul class="check-list-wr">
                      <li>赤みや腫れが一時的に生じることがあります。個人差はありますが数日で引いてきます。</li>
                      <li>治療当日は激しい運動や長時間の入浴は避けていただくことを推奨します。</li>
                      <li>治療前後2週間は皮剥けの起こるピーリングやスキンケア、治療はお控えいただきよく保湿をしてお過ごし下さい。当日皮剥けや乾燥がございますと施術をお受けいただけないことがございます。
                      </li>
                      <li>ボトックスをお受けになった方は2週間、ヒアルロン酸は4週間空けてからHIFUや高周波の熱治療が可能となります。</li>
                      <li>お日焼けした肌に施術をすることはできかねますのでご注意ください。</li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <?php $show = CFS()->get('faq_show');
            if ($show): ?>
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
                          'terms' => 'hifu_cat'
                        ),
                      ),
                      'post_type' => 'faq',
                      'post_status' => 'publish',
                      'posts_per_page' => -1,
                      'order' => 'ASC',
                    );
                    ?>
                    <?php query_posts($args); ?>
                    <?php if (have_posts()): ?>
                      <?php while (have_posts()):
                        the_post(); ?>
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
          <!-- effect たるみ・しわに効果的な治療<-->
          <div class="sl-whatis">
            <div id="connection" class="">
              <div class="menu-inn">
                <div class="sl-connection-inn-ttl subpage-ttl menu-inn-ttl ">
                  <h2 class="under-line">たるみ・しわに効果的な治療</h2>
                </div>
                <div class="sl-connection-inn-content">
                  <?php get_template_part('template-parts/service/hifu'); ?>
                  <?php get_template_part('template-parts/service/sarmagen'); ?>
                  <?php get_template_part('template-parts/service/liftup-botox'); ?>
                  <?php get_template_part('template-parts/service/thread'); ?>
                  <?php get_template_part('template-parts/service/volnewmer'); ?>
                  <?php get_template_part('template-parts/service/botox'); ?>
                  <?php get_template_part('template-parts/service/hyaluronic'); ?>
                </div>
              </div>
            </div>
          </div>
          <!-- effect 未承認機器に関する記載-->
          <div id="effect" class="sl-whatis">
            <?php get_template_part('template-parts/guide-line'); ?>
          </div>
          <?php get_template_part('footer-company'); ?>
        </div>
      </div>
  </main><!-- #main -->
</div><!-- #primary -->

<?php
get_footer();