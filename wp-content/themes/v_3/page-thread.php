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
                  <img class="pc" src="<?php echo get_template_directory_uri(); ?>/img/sub-whatthread-img01.png" alt="ショートスレッドとは">
                  <img class="sp" src="<?php echo get_template_directory_uri(); ?>/img/sub-whatthread-img01-sp.png" alt="ショートスレッドとは">
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
                    <img src="<?php echo get_template_directory_uri(); ?>/img/features/thread-feature01.png" alt="リアンクリニックの挿入方法">
                  </figure>
                  <h3><span class="list-no">01</span> Zigzag</h3>
                  <ul>
                    <li>小じわの改善、肌の引き締め</li>
                    <li>くすみ改善、美肌効果に有効</li>
                  </ul>
                  
                </article>
                <article class="fl-style03-item">
                  <figure>
                    <img src="<?php echo get_template_directory_uri(); ?>/img/features/thread-feature02.png" alt="リアンクリニックの挿入方法">
                  </figure>
                  <h3><span class="list-no">02</span> Circular</h3>
                  <ul>
                    <li>肌の引き締め、脂肪溶解</li>
                    <li>小顔効果やフェイスラインのもたつきを改善</li>
                  </ul>
                </article>
                <article class="fl-style03-item">
                  <figure>
                    <img src="<?php echo get_template_directory_uri(); ?>/img/features/thread-feature03.png" alt="リアンクリニックの挿入方法">
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
                      <img class="pc" src="<?php echo get_template_directory_uri(); ?>/img/types/thread-types01.png"
                        alt="糸の種類">
                      <img class="sp" src="<?php echo get_template_directory_uri(); ?>/img/types/thread-types01-sp.png"
                        alt="糸の種類">
                    </figure>
                    <div class="fl-style01-item-content-txt">
                      <p>モノスレッドはショッピングスレッドと呼ばれる細く短いスレッドです。 スレッドの挿入により真皮内コラーゲン生成が促され、肌のハリ・弾力のUP、タイトニング効果、マイルドなリフトアップ効果が期待できます。</p>
                    </div>
                  </div>
                </article>
                <article class="fl-style01-item">
                  <h2 class="fl-style01-item-ttl"><span class="list-no">02</span>強力引き締めスレッド</h2>
                  <div class="d-fl fl-style01-item-content">
                    <figure>
                      <img class="pc" src="<?php echo get_template_directory_uri(); ?>/img/types/thread-types02.png"
                        alt="糸の種類">
                      <img class="sp" src="<?php echo get_template_directory_uri(); ?>/img/types/thread-types02-sp.png"
                        alt="糸の種類">
                    </figure>
                    <div class="fl-style01-item-content-txt">
                      <p>強力引き締めスレッドはモノスレッドの糸をニードルにコイル状に巻き付けたスレッドです。ニードルにスレッドを巻き付けることによりスレッドの接触面積が増え、コラーゲン生成効果も高くなるとされ ています。特に脂肪の多い部位への使用がおすすめですが、モノスレッドとの適用部位など幅広く部位にお使いいただけます。挿入時の痛みや抵抗はモノスレッドより多少大きくなります。</p>
                    </div>
                  </div>
                </article>
                <article class="fl-style01-item">
                  <h2 class="fl-style01-item-ttl"><span class="list-no">03</span> ビタミンスレッド</h2>
                  <div class="d-fl fl-style01-item-content">
                    <figure>
                      <img src="<?php echo get_template_directory_uri(); ?>/img/types/thread-types03.png"
                        alt="糸の種類">
                    </figure>
                    <div class="fl-style01-item-content-txt">
                      <p>ビタミンスレッドは医療用で使用される糸の中でも、しなやかで柔軟性に優れた吸収糸のPCLを使用しています。加水分解により体内で完全に分解・吸収される特性を持つ糸で、約２年かけてゆっくりと吸収されていきます。
                        <br>PCLスレッドの表面には肉眼では見えない多数の小さな穴が空いており、そこに添加されているビタミンCは約半年 かけて徐々に放出されていきます。ビタミンCはシミ・くすみの改善、ハリ・弾力アップ、抗酸化作用などの作用を持つ だけではなく、コラーゲンの生成を助ける働きがあるため、スレッドによるコラーゲン生成をより効果的に行うことができます。
                      </p>
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
        </div>
        <div id="state" class="sl-state">
          <div class="menu-inn sl-state-inn">
            <div class="sl-state-inn-ttl subpage-ttl menu-inn-ttl">
              <h2 class="under-line">施術の様子</h2>
            </div>
            <div class="sl-state-inn-content video-style01">
              <video width="400" controls>
                <source src="<?php echo get_template_directory_uri(); ?>/video/thread-state-video.mp4" type="video/mp4">
              </video>
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
                  <p>HIFU（ハイフ）とは、高密度の超音波エネルギーをSMAS筋膜へピンポイントに照射し、たるみの引き締め・引き上げの効果が期待できる施術です。たるみの原因の一つである『スマス筋膜』は皮膚の深層に存在するためレーザーやRFでは届きません。ハイフはSMAS筋膜を含む皮下組織、真皮、表皮基底膜にピンポイントで超音波が到達するため、たるみの改善が可能です。</p>
                </div>
              </div>
              <div class="fl-style02 d-fl row-reverse">
                <div class="image">
                  <img src="<?php echo get_template_directory_uri(); ?>/img/treatment/treatment02.png" alt="サーマジェン">
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
                    <div class="price-list-wr-l">
                      <h3>強力引き締めスレッド</h3>
                      <ul>
                        <li class="d-fl">
                          <p>20本</p>
                          <p class="dash-line"></p>
                          <p>¥88,000</p>
                        </li>
                        <li class="d-fl">
                          <p>40本</p>
                          <p class="dash-line"></p>
                          <p>¥121,000</p>
                        </li>
                        <li class="d-fl">
                          <p>60本</p>
                          <p class="dash-line"></p>
                          <p>¥154,000</p>
                        </li>
                        <li class="d-fl">
                          <p>80本</p>
                          <p class="dash-line"></p>
                          <p>¥176,000</p>
                        </li>
                        <li class="d-fl">
                          <p>100本</p>
                          <p class="dash-line"></p>
                          <p>¥220,000</p>
                        </li>
                      </ul>
                    </div>
                    <div class="price-list-wr-l">
                      <h3>ビタミンスレッド</h3>
                      <ul>
                        <li class="d-fl">
                          <p>20本</p>
                          <p class="dash-line"></p>
                          <p>¥93,500</p>
                        </li>
                        <li class="d-fl">
                          <p>40本</p>
                          <p class="dash-line"></p>
                          <p>¥126,500</p>
                        </li>
                        <li class="d-fl">
                          <p>60本</p>
                          <p class="dash-line"></p>
                          <p>¥159,500</p>
                        </li>
                        <li class="d-fl">
                          <p>80本</p>
                          <p class="dash-line"></p>
                          <p>¥192,500</p>
                        </li>
                        <li class="d-fl">
                          <p>100本</p>
                          <p class="dash-line"></p>
                          <p>¥225,500</p>
                        </li>
                      </ul>
                    </div>
                    <div class="price-list-wr-l">
                      <h3>カスタム</h3>
                      <ul>
                        <li class="d-fl">
                          <p>60本</p>
                          <p class="dash-line"></p>
                          <p>¥148,500</p>
                        </li>
                        <li class="d-fl">
                          <p>80本</p>
                          <p class="dash-line"></p>
                          <p>¥181,500</p>
                        </li>
                        <li class="d-fl">
                          <p>100本</p>
                          <p class="dash-line"></p>
                          <p>¥214,500</p>
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
                <p>ご予約を承っております。</p>
                <?php $contactTxt01 = CFS()->get('text01'); $contactTxt02 = CFS()->get('text02'); if($contactTxt01 != ''): ?>
                <h3><span class="l-slash">\ </span> <?php echo $contactTxt01; ?><br
                    class="sp" /><?php echo $contactTxt02; ?> <span class="r-slash"> /</span></h3>
                <?php endif; ?>
                <div class="h-line"></div>
                <a href="https://reservation.medical-force.com/2d96f6933ed14b2a8e271863a7f0b813/reservations/new?menu_ids=3853daf4-77b6-4673-9197-8bfb56918d95" target="_blank" rel="nofollow noreferrer">
                  <img src="<?php echo get_template_directory_uri(); ?>/img/reservation-btn01.png" alt="">
                </a>
              </div>
            </div>
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
      </div>          
    </div>

    <?php get_template_part( 'footer-company' );?>
  </main>
</div>
<?php
get_footer();
