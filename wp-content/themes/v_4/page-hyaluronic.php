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
    <div id="menu"  class="sl-menu menu-hyaluronic">
      <div class="sl-menu-content">
        <div id="beware" class="sl-beware">
          <div class="sl-beware-inn menu-inn attach-mv">
            <div class="sl-beware-inn-ttl subpage-ttl menu-inn-ttl pc">
              <h2 class="under-line">ヒアルロン酸の粗悪品にご注意ください</h2>
            </div>
            <div class="sl-beware-inn-content">
              <div class="sl-beware-inn-ttl subpage-ttl menu-inn-ttl sp">
                <h2 class="under-line">ヒアルロン酸の粗悪品に<br class="sp">ご注意ください</h2>
              </div>
              <div class="pg-text">
                <p>ヒアルロン酸の価格が極端に安い場合は、ヒアルロン酸を生理食塩水で薄めている場合があるようです。<br>ヒアルロン酸を薄めて使用すると、持続期間が１２ヶ月となっている治療でも３ヶ月程度しか持続しない例があり、かえって治療費が高くついてしまいます。</p>
                <p><strong>当院では厚生労働省認証アラガン社のヒアルロン酸の<span class="color-01">純正品のみを薄めずに原液のまま使用</span>しております。</strong></p>
                
              </div>
            </div>
          </div>
        </div>
        <div id="whatis" class="sl-whatis">
          <div class="sl-whatis-inn menu-inn">
            <div class="sl-whatis-inn-ttl subpage-ttl menu-inn-ttl">
              <h2 class="under-line">ヒアルロン酸とは</h2>
            </div>
            <div class="sl-whatis-inn-content">
              <div class="fl-style02 d-fl align-center">
                <div class="image">
                  <img class="pc" src="<?php echo get_template_directory_uri(); ?>/img/sub-whathyaluronic-img01.png" alt="ヒアルロン酸とは">
                  <img class="sp" src="<?php echo get_template_directory_uri(); ?>/img/sub-whathyaluronic-img01-sp.png" alt="ヒアルロン酸とは">
                </div>
                <div class="content">
                  <p>ヒアルロン酸を注入することで、さまざまな部位にボリュームやハリを出します。鼻や顎、額などの輪郭の形成や、涙袋、口唇のボリュームアップ、頬、ほうれい線などのしわやたるみの改善が可能です。</p>
                </div>
              </div>
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
              <div class="pg-text">
                <p>という方におすすめです。</p>
                <p>加齢によって、顔の骨は萎縮し、組織を支える靭帯は萎縮し、顔全体がたるんできます。<br>
                  こめかみは加齢で約3.4mm凹むといわれています。また、横顔は2-12cmも伸びることが報告されています。<br>
                  このように、加齢によって様々な箇所が不均一となり、老化現象として認識されています。
                </p>
              </div>
              <div class="image-center">
                <h3>老化による靱帯の変化<small>（イメージ図）</small></h3>
                <figure>
                  <img class="pc" src="<?php echo get_template_directory_uri(); ?>/img/sub-whathyaluronic-img03.png" alt="老化による靱帯の変化（イメージ図）">
                  <img class="sp" src="<?php echo get_template_directory_uri(); ?>/img/sub-whathyaluronic-img03-sp.png" alt="老化による靱帯の変化（イメージ図）">
                </figure>
              </div>
              <div class="pg-text">
                <p>萎縮した骨やたるんだ靭帯を、下図のようにヒアルロン酸で補うことで、下垂した組織を持ち上げ、リフトアップや形を整えることでエイジングケアを行うことが可能となります。</p>
              </div>
              <div class="image-center">
                <h3>靭帯の変化が顔全体にもたらす影響<small>（イメージ図）</small></h3>
                <figure>
                  <img class="pc" src="<?php echo get_template_directory_uri(); ?>/img/sub-whathyaluronic-img02.png" alt="老化による靱帯の変化（イメージ図）">
                  <img class="sp" src="<?php echo get_template_directory_uri(); ?>/img/sub-whathyaluronic-img02-sp.png" alt="老化による靱帯の変化（イメージ図）">
                </figure>
              </div>
            </div>
          </div>
        </div>
        <div id="effect" class="sl-effect">
          <div class="menu-inn sl-effect-inn">
            <div class="sl-effect-inn-ttl subpage-ttl menu-inn-ttl">
              <h2 class="under-line">ヒアルロン酸の効果<br class="sp"><small>（改善できる症状）</small></h2>
            </div>
            <div class="sl-effect-inn-content">
              <div class="check-list">
                <ul class="check-list-wr">
                  <li>リフトアップ効果</li>
                  <li>凹んだこめかみをふっくらさせて理想のフェイスラインに</li>
                  <li>ほうれい線やマリオネットラインの改善</li>
                  <li>小じわの改善</li>
                  <li>美肌効果・肌質の向上</li>
                </ul>
              </div>
              <div class="image-center">
                <figure>
                  <img class="pc" src="<?php echo get_template_directory_uri(); ?>/img/effect/hyaluronic-effect01.png" alt="ヒアルロン酸の効果（改善できる症状）">
                  <img class="sp" src="<?php echo get_template_directory_uri(); ?>/img/effect/hyaluronic-effect01-sp.png" alt="ヒアルロン酸の効果（改善できる症状）">
                </figure>
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
              <div class="fl-style02 d-fl">
                <div class="image">
                  <img class="pc" src="<?php echo get_template_directory_uri(); ?>/img/commit/hyaluronic-commit01.png" alt="リアンクリニックのこだわり">
                  <img class="sp" src="<?php echo get_template_directory_uri(); ?>/img/commit/hyaluronic-commit01-sp.png" alt="リアンクリニックのこだわり">
                </div>
                <div class="content">
                  <p>ヒアルロン酸の症例経験豊富な医師がお悩みに応じて、ヒアルロン酸の本数・種類、挿入する針の深さ、針の入れ方、注入テクニックまで緻密に設計し最大限の効果を発揮できるように施術しております。</p>

                  <p>また、当院はナチュラルな仕上がりを最重要視しております。ヒアルロン酸で「明らかな違和感のある顔」「あきらかに整形した顔」の仕上がりになる場合はこちらからお断りする場合がございますので予めご了承ください。</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div id="reason" class="sl-reason">
          <div class="menu-inn sl-reason-inn">
            <div class="sl-reason-inn-ttl subpage-ttl menu-inn-ttl">
              <h2 class="under-line">リアンクリニックの<br class="sp">ヒアルロン酸が選ばれる理由</h2>
            </div>
            <div class="sl-reason-inn-content">
              <div class="fl-style01">
                <article class="fl-style01-item">
                  <h2 class="fl-style01-item-ttl"><span class="list-no">01</span>リアン式マイクロテクニック</h2>
                  <div class="d-fl fl-style01-item-content">
                    <figure>
                      <img src="<?php echo get_template_directory_uri(); ?>/img/reason/hyaluronic-reason01.png" alt="リアン式マイクロテクニック">
                    </figure>
                    <div class="fl-style01-item-content-txt">
                      <p>シワやくぼみの治療では、ヒアルロン酸をどの位置にどれくらいの量を注入するのかが最も重要です。リアン式マイクロテクニックでは、ミリよりも細かい単位で注入位置の調整を行います。一般的な治療だからこそ、最も工夫をしています。
                      </p>
                    </div>
                  </div>
                </article>
                <article class="fl-style01-item">
                  <h2 class="fl-style01-item-ttl"><span class="list-no sp-twoline">02</span>安全・高品質な<br class="sp">ヒアルロン酸の使用</h2>
                  <div class="d-fl fl-style01-item-content">
                    <figure>
                      <img src="<?php echo get_template_directory_uri(); ?>/img/reason/hyaluronic-reason02.png" alt="安全・高品質なヒアルロン酸の使用">
                    </figure>
                    <div class="fl-style01-item-content-txt">
                      <p>ヒアルロン酸にはたくさんの種類があります。廉価な中国製のものも登場しています。しかし、新しければ、または安ければ良いというものではありません。リアンでは安全性に実績がある高品質なヒアルロン酸のみを使用しています。当院では、日本で唯一、顔のしわや溝の治療において厚生労働省に承認されている「ジュビダームビスタ®」シリーズも導入しています。
                      </p>
                    </div>
                  </div>
                </article>
                <article class="fl-style01-item">
                  <h2 class="fl-style01-item-ttl"><span class="list-no">03</span>リフトアップヒアルロン酸</h2>
                  <div class="d-fl fl-style01-item-content align-center">
                    <figure>
                      <img src="<?php echo get_template_directory_uri(); ?>/img/reason/hyaluronic-reason03.png" alt="リフトアップヒアルロン酸">
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
        <div id="whatliftup" class="sl-whatliftup">
          <div class="menu-inn sl-whatliftup-inn">
            <div class="sl-whatliftup-inn-ttl subpage-ttl menu-inn-ttl">
              <h2 class="under-line">リフトアップ<br class="sp">ヒアルロン酸とは</h2>
            </div>
            <div class="sl-whatliftup-inn-content">
              <div class="whatliftup-guideline">
                <h3>リフトアップのための注入ポイントと<br class="sp">注入量の目安</h3>
                <div class="whatliftup-guideline-fl d-fl">
                  <figure class="image">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/whatliftup-img.png" alt="リフトアップのための注入ポイントと注入量の目安">
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
                    <p>で左右合計5ccを目安に注入します</p>
                  </div>
                </div>
                <div class="pg-text">
                  <p>通常のヒアルロン酸注入は、たるみによってできた凹みにヒアルロン酸を注入して表面をフラットにすることで、たるみを目立たなくするという方法でしたが、「リフトアップヒアルロン酸」では、靭帯や骨膜上にヒアルロン酸を注入することで、たるんだ組織を持ち上げ、<span class="fz-18"><strong>ハリ、リフトアップ効果</strong></span>が期待できます。</p>
                </div>
              </div>
              <div class="fl-style01">
                <article class="fl-style01-item">
                  <h2 class="fl-style01-item-ttl"><span class="list-no">01</span>初めての方向け<span class="txt-side pc">４ポイントリフト</span></h2>
                  <span class="txt-side sp">４ポイントリフト</span>
                  <div class="d-fl fl-style01-item-content">
                    <figure>
                      <img src="<?php echo get_template_directory_uri(); ?>/img/liftup/hyaluronic-liftup01.png" alt="初めての方向け">
                    </figure>
                    <div class="fl-style01-item-content-txt defination-fl">
                      <dl>
                        <dt>注入ポイント</dt>
                        <dd>T1に0.5〜1cc<br>
                          CK1に0.5〜1cc<br>
                          左右両方に2〜4cc（2〜4本）
                        </dd>
                      </dl>
                      <dl>
                        <dt>想定予算</dt>
                        <dd>2〜4本 × ¥61,600<br>
                        ＝<span>¥123,200 〜 ¥246,400</span><small>（税込）</small>
                        </dd>
                      </dl>
                    </div>
                  </div>
                </article>
                <article class="fl-style01-item">
                  <h2 class="fl-style01-item-ttl"><span class="list-no">02</span>より劇的な変化を求める方向け<span class="txt-side pc">8ポイントリフト</span></h2>
                  <span class="txt-side sp">8ポイントリフト</span>
                  <div class="d-fl fl-style01-item-content">
                    <figure>
                      <img src="<?php echo get_template_directory_uri(); ?>/img/liftup/hyaluronic-liftup02.png" alt="より劇的な変化を求める方向け">
                    </figure>
                    <div class="fl-style01-item-content-txt defination-fl">
                      <dl>
                        <dt>注入ポイント</dt>
                        <dd>T1に0.5〜1cc<br>
                          CK1に0.5〜1cc<br>
                          CK3に0.3〜0.5cc<br>
                          JW1に0.3〜0.5cc<br>
                          左右両方に2〜4cc（2〜4本）
                        </dd>
                      </dl>
                      <dl>
                        <dt>想定予算</dt>
                        <dd>2〜4本 × ¥61,600<br>
                        ＝<span>¥246,400 〜 ¥369,600</span><small>（税込）</small>
                        </dd>
                      </dl>
                    </div>
                  </div>
                </article>
                <article class="fl-style01-item">
                  <h2 class="fl-style01-item-ttl"><span class="list-no sp-twoline">03</span>お若い方で小顔効果を<br class="sp">求める方向け<span class="txt-side pc">Vリフト</span></h2>
                  <span class="txt-side sp">Vリフト</span>
                  <div class="d-fl fl-style01-item-content">
                    <figure>
                      <img src="<?php echo get_template_directory_uri(); ?>/img/liftup/hyaluronic-liftup03.png" alt="お若い方で小顔効果を求める方向け">
                    </figure>
                    <div class="fl-style01-item-content-txt defination-fl">
                      <dl>
                        <dt>注入ポイント</dt>
                        <dd>T1に0.5〜0.7cc<br>
                          CK1に0.5〜0.8cc<br>
                          JW1に0.5cc<br>
                          C2に0.8〜1.0cc
                        </dd>
                      </dl>
                      <dl>
                        <dt>想定予算</dt>
                        <dd>2〜4本 × ¥61,600<br>
                        ＝<span>¥123,200 〜 ¥308,000</span><small>（税込）</small>
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
              <h2 class="under-line">ヒアルロン酸製剤</h2>
            </div>
            <div class="sl-formula-inn-content">
              <div class="fl-style01">
                <article class="fl-style01-item">
                  <h2 class="fl-style01-item-ttl"><span class="list-no">01</span>ボリューマ	XC</h2>
                  <div class="d-fl fl-style01-item-content align-center">
                    <figure>
                      <img src="<?php echo get_template_directory_uri(); ?>/img/formula/hyaluronic-formula01.png" alt="ボリューマ	XC">
                    </figure>
                    <div class="fl-style01-item-content-txt defination-fl">
                      <dl>
                        <dt>持続期間</dt>
                        <dd>6-18ヶ月</dd>
                      </dl>
                      <dl>
                        <dt>適応部位</dt>
                        <dd>こめかみ・ほうれい線・ゴルゴライン・<br class="pc">マリオネットライン・頬のコケ</dd>
                      </dl>
                    </div>
                  </div>
                </article>
                <article class="fl-style01-item">
                  <h2 class="fl-style01-item-ttl"><span class="list-no">02</span>ボラックスXC</h2>
                  <div class="d-fl fl-style01-item-content align-center">
                    <figure>
                      <img src="<?php echo get_template_directory_uri(); ?>/img/formula/hyaluronic-formula01.png" alt="ボラックスXC">
                    </figure>
                    <div class="fl-style01-item-content-txt defination-fl">
                      <dl>
                        <dt>持続期間</dt>
                        <dd>6-18ヶ月</dd>
                      </dl>
                      <dl>
                        <dt>適応部位</dt>
                        <dd>あご・輪郭の形成</dd>
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
              <h2 class="under-line">症例写真</h2>
            </div>
            <div class="sl-case-inn-content">
              <div class="fl-style04">
                <article>
                  <a class="fl-style04-fl d-fl" target="_blank" rel="nofollow noreferrer">
                    <figure>
                      <img src="<?php echo get_template_directory_uri(); ?>/img/case/hyaluronic-case01.png" alt="症例写真">
                    </figure>
                    <div class="content">
                      <dl>
                        <dt>施術名</dt>
						  <dd>ヒアルロン酸　（あご・こめかみ）</dd>
                      </dl>
                      <dl>
                        <dt>施術の説明</dt>
						  <dd>ヒアルロン酸を注入することでボリュームを出したり、骨や靭帯を補強することで、リフトアップする治療です。<br>左：施術前<br>右：施術１ヶ月後</dd>
                      </dl>
                      <dl>
                        <dt>施術の副作用(リスク)</dt>
						  <dd>アレルギー、内出血、血管塞栓、仕上がりの僅かな左右差</dd>
                      </dl>
                      <dl>
                        <dt>施術の価格</dt>
						  <dd>¥ 88,000 〜 ¥ 242,000</dd>
                      </dl>
                    </div>
                  </a>
                </article>
                <article>
                  <a class="fl-style04-fl d-fl" target="_blank" rel="nofollow noreferrer">
                    <figure>
                      <img src="<?php echo get_template_directory_uri(); ?>/img/case/hyaluronic-case02.png" alt="症例写真">
                    </figure>
                    <div class="content">
                      <dl>
                        <dt>施術名</dt>
						  <dd>ヒアルロン酸　（あご・こめかみ・ほほ）</dd>
                      </dl>
                      <dl>
                        <dt>施術の説明</dt>
						  <dd>ヒアルロン酸を注入することでボリュームを出したり、骨や靭帯を補強することで、リフトアップする治療です。<br>左：施術前<br>右：施術１ヶ月後<br>VOLUMA こめかみ・ほほ 3cc　VOLUX あご・フェイスライン 2cc</dd>
                      </dl>
                      <dl>
                        <dt>施術の副作用(リスク)</dt>
						  <dd>アレルギー、内出血、血管塞栓、仕上がりの僅かな左右差</dd>
                      </dl>
                      <dl>
                        <dt>施術の価格</dt>
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
              <h2 class="under-line">施術の様子</h2>
            </div>
            <div class="sl-state-inn-content video-style01">
			  <iframe width="100%" height="100%" src="https://www.youtube.com/embed/dxrfqN7jgpQ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe></div>
          </div>
        </div>
        <div id="precautions" class="sl-precautions">
          <div class="menu-inn sl-precautions-inn">
            <div class="sl-precautions-inn-ttl subpage-ttl menu-inn-ttl">
              <h2 class="under-line">ヒアルロン酸の注意事項</h2>
            </div>
            <div class="sl-precautions-inn-content">
              <div class="pg-text">
                <p>以下の人は受けられません。また気になることがある方は医師にご相談下さい。</p>
              </div>
              <div class="precautions-list">
                <h3>【ヒアルロン酸注射の概要やリスク】</h3>
                <div class="defination-fl">
                  <dl>
                    <dt>麻酔</dt>
                    <dd>麻酔シールまたは麻酔クリーム
                      <ul class="hash-list">
                        <li>痛みが不安な方は、眠れる麻酔（静脈麻酔）も可能です。ご希望の方はご予約時にご相談ください。</li>
                      </ul>
                    </dd>
                  </dl>
                  <dl>
                    <dt>所要時間</dt>
                    <dd>90分程度</dd>
                  </dl>
                  <dl>
                    <dt>洗顔・入浴・メイク</dt>
                    <dd>翌日から可能 ※患部はお湯で流す程度にしてください。</dd>
                  </dl>
                  <dl>
                    <dt>副作用・ ダウンタイム</dt>
                    <dd>
                      <div class="disc-list disc--list">
                        <ul class="disc-list-wr">
                          <li class="d-fl"><span>・</span><p>かゆみ、圧痛を伴う炎症反応（赤み、むくみ、紅斑）などが起きる可能性があります。これらは通常は一過性のものですが、1週間ほど継続することがあります。</p></li>
                          <li class="d-fl"><span>・</span><p>注入後の経過が経った後、まれにアレルギー症状が起きることがあります。</p></li>
                          <li class="d-fl"><span>・</span><p>血腫、感染、注入部位の着色または退色、神経圧迫、塞栓、膿疹形成、肉芽腫、過敏症などが起きることがあります。</p></li>
                          <li class="d-fl"><span>・</span><p>注射針によって内出血が起きることがあります。</p></li>
                          <li class="d-fl"><span>・</span><p>予想以上に効果の実感が得られない、または修正効果が弱いことがあります。</p></li>
                        </ul>
                      </div>
                      
                    </dd>
                  </dl>
                  <dl>
                    <dt>注意事項</dt>
                    <dd>
                      <div class="disc-list disc--list">
                        <ul class="disc-list-wr">
                          <li class="d-fl"><span>・</span><p>施術後は、基本的には注射した部位をマッサージしないようにしてください。くわしくはドクターの指示に従ってください。</p></li>
                          <li class="d-fl"><span>・</span><p>妊娠または授乳中の方、内服治療中の方はお受けいただけない場合があります。</p></li>
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
              <h2 class="under-line">料金</h2>
            </div>
            <div class="sl-price-inn-content">
              <div class="price">
                <h3 class="price-ttl"><span>ヒアルロン酸</span></h3>
                <div class="price-list">
                  <div class="d-fl price-list-wr">
                    <div class="price-list-wr-l">
                      <h3>ボリューマ 　ボラックス　1cc </h3>
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
        <div id="campaign" class="sl-campaign">
          <div class="menu-inn sl-campaign-inn">
            <div class="sl-campaign-inn-ttl subpage-ttl menu-inn-ttl">
              <h2 class="under-line">キャンペーン</h2>
            </div>
            <div class="sl-campaign-inn-content d-fl">
              <figure>
                <img src="<?php echo get_template_directory_uri(); ?>/img/hyaluronic-campaign01.png" alt="キャンペーン">
              </figure>
              <div class="sl-campaign-inn-content-txt">
                <p>【ヒアルロン酸モニター募集】</p>

                <p>アンチエイジングの基本はたるみは引き締めつつ、年齢とともに萎縮してくる箇所は【ボリュームを補う】こと<br>
                  特に、あご・こめかみ・ほうれい線はお顔の印象を左右する重要なパーツです。<br>
                  ヒアルロン酸はダウンタイムが少なく、効果をすぐご体感いただけるので続けやすい治療です。<br>
                  そしてこの度、ショートスレッドに続いて、良い治療は皆様にご体感頂きたいとのことで始まった50％OFFモニター。<br>
                  是非この機会にご体感ください。<br>
                  <ul class="hash-list">
                    <li>施術前後で目を開けた状態でお写真に協力できる方限定</li>
                  </ul>
                  </p>
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
                <a href="https://lin.ee/94Mjv4T" target="_blank" rel="nofollow noreferrer">
                  <img src="<?php echo get_template_directory_uri(); ?>/img/reservation-btn01.png" alt="">
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

    <?php get_template_part( 'footer-company' );?>
  </main>
</div>
<?php
get_footer();
