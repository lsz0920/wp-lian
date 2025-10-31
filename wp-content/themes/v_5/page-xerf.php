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
                    <text id="XERFあなたと美しさをつなぐクリニック" data-name="XERFあなたと美しさをつなぐクリニック" class="cls-mv-1"
                        transform="translate(0 35)">
                        <tspan x="0" y="0">XERF</tspan>
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
                    <text id="XERFあなたと美しさをつなぐクリニック" data-name="XERFあなたと美しさをつなぐクリニック" class="cls-1" transform="translate(0 35)">
                        <tspan x="0" y="0">XERF</tspan>
                        <tspan x="0" y="60">あなたと</tspan>
                        <tspan x="0" y="120">美しさをつなぐ</tspan>
                        <tspan x="0" y="180">クリニック</tspan>
                    </text>
                </svg>
            </div>
          </h1>
          <figure class="sp-right">
            <img loading="lazy" class="pc" src="<?php echo get_template_directory_uri(); ?>/img/makeup/sub-mv-img.png"
              alt="XERF">
            <img loading="lazy" class="sp" src="<?php echo get_template_directory_uri(); ?>/img/makeup/sub-mv-sp.png"
              alt="XERF">
          </figure>
        </div>
      </div>
      <!-- menu -->
      <div id="menu"  class="sl-menu plasmapen">
        <div class="sl-menu-content">

          <!-- whatis -->
          <div id="whatis" class="sl-whatis">
            <div class="sl-whatis-inn menu-inn attach-mv">
              <div class="sl-whatis-inn-ttl subpage-ttl menu-inn-ttl">
                <h2 class="under-line">XERF’ザーフ’とは</h2>
              </div>
              <div class="sl-whatis-inn-content">

                  <div class="w820">
                   <div class="sl-whatis-inn-content">
                      <div class="image-center">
                        <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/sub-whatxerf-img01.png" alt="XERF’ザーフ’ とは">
                      </div>
                    </div>
                    <div class="sl-whatis-inn-content">
                      <div class="pg-text">
                        <p><br>世界初の周波数（6.7Mhz＋2Mhz）によりRFエネルギーを真皮と脂肪層線維性隔壁に届けることで熱エネルギーを発生させ、皮下層のボリュームヒーティング(容積加熱)で熱エネルギーを長時間維持することで、「最適なリフティング+引き締め効果の向上」を実現する新しい概念の高周波によるたるみ治療です。</p>
                      </div>
                    </div>
                  </div>

               
                <!--
                <div class="fl-style02 d-fl">
                  <div class="image">
                    <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/sub-whatxerf-img01.png" alt="XERF’ザーフ’ とは">
                  </div>
                  <div class="content">
                    <p>
                      世界初の周波数（6.7Mhz＋2Mhz）によりRFエネルギーを真皮と脂肪層線維性隔壁に届けることで熱エネルギーを発生させ、皮下層のボリュームヒーティング(容積加熱)で熱エネルギーを長時間維持することで、「最適なリフティング+引き締め効果の向上」を実現する新しい概念の高周波によるたるみ治療です。
                    </p>
                  </div>
                </div>
                -->
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
                      <p>当院ではデバイスによるたるみ治療に注力しており、この度XERF’ザーフ’を日本で2番目に導入いたしました。海外でのXERF’ザーフ’の学会発表や当院独自の高周波の技術である【7テクニック】を用いて結果にコミットしてまいります。</p>
                    </div>
                    <?php echo get_template_part('template-parts/sv-guidelines'); ?>
                </div>
                <div class="sl-whatis-inn-ttl subpage-ttl menu-inn-ttl">
                  <h2 class="under-line" style="margin-top:40px;">XERF’ザーフ’は<br class="sp">こんな方におすすめ</h2>
                </div>
                <div class="check-list">
                  <ul class="check-list-wr">
                    <li>フェイスラインが崩れてきたと感じる</li>
                    <li>ほうれい線やマリオネットラインが気になる</li>
                    <li>お顔が大きくなったと感じる</li>
                    <li>たるみを予防したい</li>
                    <li>世界初のWave Fit Pulseを採用しており、痛みに弱い方にもおすすめ</li>
                  </ul>
                </div>
              </div>
            </div>
          </div>

          <!--  -->
          <div id="xerf" class="menu-inn sl-features-inn">
            <div class="sl-features-inn-ttl subpage-ttl menu-inn-ttl">
              <h2 class="under-line">XERF’ザーフ’の<br class="sp">期待できる効果</h2>
            </div>
            <div class="sl-reason-inn-content">
              <div class="w440">
                <div class="fl-style01">
                  <article class="fl-style01-item">
                    <h3 class="fl-style01-item-ttl"><span class="list-no">01</span>ほうれい線やマリオネットラインを<br class="sp">目立ちづらく</h3>
                  </article>
                  <article class="fl-style01-item">
                    <h3 class="fl-style01-item-ttl"><span class="list-no">02</span>輪郭を整え皮膚を引き締めることで<br class="sp">小顔効果</h3>
                  </article>
                  <article class="fl-style01-item">
                    <h3 class="fl-style01-item-ttl"><span class="list-no">03</span>皮膚たるみを<br class="sp">最適に引き上げることでお顔のたるみ治療</h3>
                  </article>
                </div>
              </div>
            </div>
          </div>   

          <!--  -->
          <div class="sl-whatis">
            <div class="sl-whatis-inn menu-inn">
              <div class="sl-whatis-inn-ttl subpage-ttl menu-inn-ttl">
                <h2 class="under-line">XERF’ザーフ’のチップ</h2>
              </div>
              <div class="sl-whatis-inn-content">
                <div class="image-center">
                  <figure>
                    <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/collagen-xerf-img02.png" alt="XERF’ザーフ’のチップ">
                  </figure>
                </div>
              </div>
              <div class="sl-whatis-inn-content">
                <div class="pg-text">
                  <p>
                    <br>・独自のスパイダーパターンによりチップのエッジへのエネルギー集中を防ぎ、熱傷の発生を抑えRFエネルギーを均一化
                    <br>・チップの5箇所にセンサーを配置しており高精度の温度センシングが可能
                    <br>・チップサイズが大型で迅速な治療が可能
                  </p>
                </div>
              </div>
              <div class="sl-whatis-inn-ttl subpage-ttl menu-inn-ttl">
                <h3 class=""><br>高周波機械の使い分け</h3>
              </div>
              <div class="w620">
                <div class="sl-whatis-inn-content">
                  <div class="image-center">
                    <figure>
                      <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/collagen-xerf-img03.png" alt="高周波機械の使い分け">
                    </figure>
                  </div>
                </div>
              </div>
              <div class="sl-whatis-inn-ttl subpage-ttl menu-inn-ttl">
                <h3 class=""><br>高周波機械による違い</h3>
              </div>
              <div class="w620">
                <div class="sl-whatis-inn-content">
                  <div class="image-center">
                    <figure>
                      <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/collagen-xerf-img04.png" alt="高周波機械による違い">
                    </figure>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!--  -->
          <div class="sl-whatis">
            <div class="sl-whatis-inn menu-inn">
              <div class="sl-whatis-inn-ttl subpage-ttl menu-inn-ttl">
                <h2 class="under-line">XERF’ザーフ’の特徴</h2>
              </div>
              <div class="w620">
                <div class="sl-whatis-inn-content">
                  <div class="pg-text">
                    <p style="text-align:center;">
                      大きな特徴は2つ
                      <br>①世界初の特許技術、マルチ周波数テクノロジーによる深度コントロール
                    </p>
                  </div>
                </div>
                <div class="sl-whatis-inn-content">
                  <div class="image-center">
                    <figure>
                      <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/collagen-xerf-img05.png" alt="①世界初の特許技術、マルチ周波数テクノロジーによる深度コントロール">
                    </figure>
                  </div>
                </div>
              </div>
              <div class="sl-whatis-inn-content">
                <div class="pg-text">
                  <p style="text-align:center;">②特許取得のWave fit pulse</p>
                </div>
              </div>
              <div class="w620">
                <div class="sl-whatis-inn-content">
                  <div class="image-center">
                    <figure>
                      <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/collagen-xerf-img06.png" alt="②特許取得のWave fit pulse">
                    </figure>
                  </div>
                </div>
                <div class="sl-whatis-inn-content">
                  <div class="pg-text">
                    <p>この2つの特徴により、より深い組織まで痛みを抑えて熱が入ることが可能になり皮膚科でアプローチ可能な領域が広がりました。</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          
          <!--  -->
          <div id="effect" class="sl-whatis">
            <div class="sl-whatis-inn menu-inn">
              <div class="sl-whatis-inn-ttl subpage-ttl menu-inn-ttl">
                <h2 class="under-line">効果を最大限に引き出す<br class="sp">7テクニック</h2>
              </div>
              <div class="w820">
                <div class="sl-whatis-inn-content">
                  <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/collagen-xerf-img01.png" alt="効果を最大限に引き出す7テクニック">
                </div>
                <div class="defination-fl">
                  <dl>
                    <dt>スライディング法</dt>
                    <dd>熱をうまく逃し皮膚を伸ばすように当てる技法</dd>
                  </dl>
                  <dl>
                    <dt>スタンピング法</dt>
                    <dd>皮膚の厚さやたるみの程度をタッチングしながら積極的に取り入れることで効果を出しやすい</dd>
                  </dl>
                  <dl>
                    <dt>サークル法</dt>
                    <dd>バイポーラがミックスされているダイヤモンドチップで主に使用する技法、広く浅く熱が入る</dd>
                  </dl>
                  <dl>
                    <dt>タッチング</dt>
                    <dd>タッチングにより肌表面温度を確認しながら技法を選択する工程が重要</dd>
                  </dl>
                  <dl>
                    <dt>ブロッキング</dt>
                    <dd>熱溜まり(バルクヒート)を効率的につくることが結果につながるブロッキングしてアプローチ箇所を選定する</dd>
                  </dl>
                  <dl>
                    <dt>設定値</dt>
                    <dd>ms(高周波の長さ)やパルス、バイポーラとモノポーラの組み合わせなど目的とマシンの特性に応じ使い分ける必要がある</dd>
                  </dl>
                  <dl>
                    <dt>体位</dt>
                    <dd>タンジェント法を採用体位が変わるとたるみの程度が変わり多角的に熱が入る為必要に応じて体位を変える</dd>
                  </dl>
                </div>
              </div>
            </div>
          </div>

          <!--  -->
          <div id="case" class="sl-case">
            <div class="menu-inn sl-case-inn">
              <div class="sl-case-inn-ttl subpage-ttl menu-inn-ttl">
                <h2 class="under-line">症例のご紹介</h2>
              </div>
              <div class="sl-case-inn-content">
                <div class="fl-style04">
                  <article>
                    <a class="fl-style04-fl d-fl" target="_blank" rel="nofollow noreferrer">
                      <figure>
                        <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/xerf-photo01.png" alt="症例写真">
                      </figure>
                      <div class="content">
                        <dl>
                          <dt>施術名</dt>
                          <dd>４リフト【額+頬+目元+フェイスライン】(顎下含む)</dd>
                        </dl>
                        <dl>
                          <dt>施術者</dt>
                          <dd>坂本伶奈NS</dd>
                        </dl>
                        <dl>
                          <dt>料金</dt>
                          <dd>1回 82,500円</dd>
                        </dl>
                        </dl>
                        <dl>
                          <dt>施術の説明</dt>
                          <dd>高周波(RF)を使い真皮層〜浅層脂肪全体にアプローチし肌をキュッと引き締めるたるみ治療です。</dd>
                        </dl>
                        <dl>
                          <dt>副作用</dt>
                          <dd>熱傷・発赤、膨張など</dd>
                        </dl>
                      </div>
                    </a>
                  </article>
                  <article>
                    <a class="fl-style04-fl d-fl" target="_blank" rel="nofollow noreferrer">
                      <figure>
                        <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/xerf-photo02.png" alt="症例写真">
                      </figure>
                      <div class="content">
                        <dl>
                          <dt>施術名</dt>
                          <dd>４リフト【額+頬+目元+フェイスライン】(顎下含む)</dd>
                        </dl>
                        <dl>
                          <dt>施術者</dt>
                          <dd>栁澤初音NS</dd>
                        </dl>
                        <dl>
                          <dt>料金</dt>
                          <dd>1回 82,500円</dd>
                        </dl>
                        </dl>
                        <dl>
                          <dt>施術の説明</dt>
                          <dd>高周波(RF)を使い真皮層〜浅層脂肪全体にアプローチし肌をキュッと引き締めるたるみ治療です。</dd>
                        </dl>
                        <dl>
                          <dt>副作用</dt>
                          <dd>熱傷・発赤、膨張など</dd>
                        </dl>
                      </div>
                    </a>
                  </article>
                </div>
              </div>
            </div>
          </div>

          <!--  -->
          <div class="menu-inn sl-features-inn">
            <div class="sl-features-inn-ttl subpage-ttl menu-inn-ttl">
              <h2 class="under-line">LIAN clinicの<br class="sp">XERF’ザーフ’が<br class="sp">選ばれる理由</h2>
            </div>
            <div class="sl-reason-inn-content">
              <div class="fl-style01">
                <article class="fl-style01-item">
                  <h3 class="fl-style01-item-ttl"><span class="list-no">01</span></h3>
                  <div class="d-fl fl-style01-item-content">
                    <figure>
                      <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/xerf-reason01.png" alt="LIANの３つの特徴">
                    </figure>
                    <div class="fl-style01-item-content-txt">
                      <p>
                        <br class="pc"><br class="pc">
                        デバイスは使い方で効果が変わります。<br>【７テクニック】を使うことで結果にコミット
                      </p>
                    </div>
                </article>
                <article class="fl-style01-item">
                <h3 class="fl-style01-item-ttl"><br><span class="list-no">02</span>韓国での技術共有研修の実施</h3>
                  <div class="d-fl fl-style01-item-content">
                    <figure>
                      <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/xerf-reason02-1.png" alt="LIANの３つの特徴">
                    </figure>
                    <div class="fl-style01-item-content-txt">
                      <p>
                        <br class="pc">
                          韓国のLUTRONIC 社にて【技術向上を目的とした】XERFの研修を実施。
                          <br>デバイスのより詳しい説明、技術の見学、症例を元に高周波の熱を効率よく入れるテクニック「7テクニック」を共有、フィードバックしながらディスカッションを行い双方の症例を持ち寄り技術の共有を図り最前線でXERFの理解を深めることも行なっております。
                      </p>
                    </div>
                </article>
                <article class="fl-style01-item">
                <h3 class="fl-style01-item-ttl"><br><span class="list-no">03</span></h3>
                  <div class="d-fl fl-style01-item-content">
                    <figure>
                      <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/xerf-reason02.png" alt="LIANの３つの特徴">
                    </figure>
                    <div class="fl-style01-item-content-txt">
                      <p>
                        <br class="pc"><br class="pc">
                        ３つのモードを使い分けるためデザインをし施術を行うことで<br>それにより長い目で見て不利益なく安全な治療を提供します。
                      </p>
                    </div>
                </article>
                <article class="fl-style01-item">
                  <h3 class="fl-style01-item-ttl"><br><span class="list-no">04</span></h3>
                  <div class="d-fl fl-style01-item-content">
                    <figure>
                      <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/xerf-reason03.png" alt="LIANの３つの特徴">
                    </figure>
                    <div class="fl-style01-item-content-txt">
                      <p>
                        <br class="pc"><br class="pc">
                        たるみ治療に注力したクリニックであり、たるみにおいて多くの実績と症例があります。<br><small>※看護師施術は全て医師の指示のもと行っております。</small>
                      </p>
                    </div>
                  </div>
                </article>
              </div>
            </div>
          </div>

          <div class="sl-state">
            <div class="menu-inn sl-state-inn">
              <div class="sl-state-inn-ttl subpage-ttl menu-inn-ttl">
                <h2 class="under-line">施術の様子</h2>
              </div>
              <div class="sl-state-inn-content video-style01">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/UXznWOvtssI?si=0qo7d75s4LSeIiqk" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
              </div>
            </div>
          </div>

          <!--  -->
          <div class="sl-whatis">
            <div class="sl-whatis-inn menu-inn">
              <div class="sl-whatis-inn-ttl subpage-ttl menu-inn-ttl">
                <h2 class="under-line">たるみ治療に<br class="sp">高周波が必須の理由</h2>
              </div>
              <div class="w620">
                <div class="sl-whatis-inn-content">
                  <div class="image-center">
                    <figure>
                      <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/collagen-xerf-img07.png" alt="たるみ治療に高周波が必須の理由">
                    </figure>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!--  -->
          <div id="treatment" class="sl-treatment">
            <div class="menu-inn sl-treatment-inn">
              <div class="sl-treatment-inn-ttl subpage-ttl menu-inn-ttl">
                <h2 class="under-line">組み合わせると<br class="sp">効果的な施術</h2>
              </div>
              <div class="sl-treatment-inn-content">
                <div class="fl-style02 d-fl">
                  <div class="image">
                    <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/sub-whathyaluronic-img01.png" alt="ヒアルロン酸注入">
                  </div>
                  <div class="content content01">
                    <h3>ヒアルロン酸注入</h3>
                    <p>ボリュームが減った部分はヒアルロン酸を入れることで凹凸の少ない多幸感のあるお顔へ</p>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- -->
          <div id="procedure" class="sl-procedure">
            <div class="sl-procedure-inn menu-inn">
              <div class="sl-procedure-inn-ttl subpage-ttl menu-inn-ttl">
                <h2 class="under-line">XERF’ザーフ’治療の流れ</h2>
              </div>
              <div class="sl-procedure-inn-content pro-list">
                <div class="pro-list-num"><span>01</span></div>
                <div class="d-fl pro-list-post">
                  <div class="h-line pc"></div>
                  <article class="d-fl">
                    <h3 class="sp"><span>01.</span>ご予約</h3>
                    <figure>
                      <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/xerf-flow_01.png" alt="ご予約">
                    </figure>
                    <div>
                      <h3 class="pc">ご予約</h3>
                      <p>まずはお問い合わせフォーム、LINE予約またはお電話よりご予約ください。</p>
                    </div>
                  </article>
                </div>
                <div class="pro-list-num"><span>02</span></div>
                <div class="d-fl pro-list-post">
                  <div class="h-line pc"></div>
                  <article class="d-fl">
                    <h3 class="sp"><span>02.</span>医師のカウンセリング</h3>
                    <figure>
                      <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/xerf-flow_02.png" alt="医師のカウンセリング">
                    </figure>
                    <div>
                      <h3 class="pc">医師のカウンセリング</h3>
                      <p>たるみをアセスメントし、治療方針を決めます。</p>
                    </div>
                  </article>
                </div>
                <div class="pro-list-num"><span>03</span></div>
                <div class="d-fl pro-list-post">
                  <div class="h-line pc"></div>
                  <article class="d-fl">
                    <h3 class="sp"><span>03.</span>ベクトラ撮影</h3>
                    <figure>
                        <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/xerf-flow_03-1.png" alt="ベクトラ撮影">
                      </figure>
                    <div>
                      <h3 class="pc">ベクトラ撮影</h3>
                      <p>
                        肌の経過を追うために評価のデバイスとして使用しています。
                      </p>
                    </div>
                  </article>
                </div>
                <div class="pro-list-num"><span>04</span></div>
                <div class="d-fl pro-list-post">
                  <div class="h-line pc"></div>
                  <article class="d-fl">
                    <h3 class="sp"><span>04.</span>施術</h3>
                    <figure>
                      <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/xerf-flow_04.png" alt="ご予約">
                    </figure>
                    <div>
                      <h3 class="pc">施術</h3>
                      <p>
                        痛みに配慮してたるみの原因に沿った施術を行います。
                        <br>術後はドクターズコスメで鎮静ケアまで。
                      </p>
                    </div>
                  </article>
                </div>
                <div class="pro-list-num"><span>05</span></div>
                <div class="d-fl pro-list-post">
                  <div class="h-line pc"></div>
                  <article class="d-fl">
                    <h3 class="sp"><span>05.</span>次回来院後 ベクトラ撮影</h3>
                    <figure>
                      <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/xerf-flow_05-1.png" alt="次回来院後 ベクトラ撮影">
                    </figure>
                    <div>
                      <h3 class="pc">次回来院後 ベクトラ撮影</h3>
                      <p>
                        施術前後を比較し、たるみを数値化することで効果を評価します。
                      </p>
                    </div>
                  </article>
                </div>
                <div class="pro-list-num"><span>06</span></div>
                <div class="d-fl pro-list-post">
                  <div class="h-line pc"></div>
                  <article class="d-fl">
                    <h3 class="sp"><span>06.</span>メンテナンス</h3>
                    <figure>
                      <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/xerf-flow_06-1.png" alt="メンテナンス">
                    </figure>
                    <div>
                      <h3 class="pc">メンテナンス</h3>
                      <p>
                        皮膚科治療は計画的・継続的に行う必要があります。
                      </p>
                    </div>
                  </article>
                </div>
              </div>
            </div>
          </div> 

          <!--  -->
          <div id="price" class="sl-price">
            <div class="menu-inn sl-price-inn">
              <div class="sl-price-inn-ttl subpage-ttl menu-inn-ttl">
                <h2 class="under-line">料金</h2>
              </div>
              <div class="sl-price-inn-content">
                <div class="price">
                  <div class="price-list">
                    <div class="d-fl price-list-wr">
                      <div class="price-list-wr-l">
                        <h3>2リフト<br>【頬+フェイスライン】</h3>
                        <ul>
                          <li class="d-fl">
                            <p>1回</p>
                            <p class="dash-line"></p>
                            <p>¥66,000</p>
                          </li>
                        </ul>
                      </div>
                      <div class="price-list-wr-l">
                        <h3>4リフト<br>【額+頬+目元+フェイスライン】顎下含む</h3>
                        <ul>
                          <li class="d-fl">
                            <p>1回</p>
                            <p class="dash-line"></p>
                            <p>¥82,500</p>
                          </li>
                        </ul>
                      </div>
                      <div class="price-list-wr-l">
                        <h3>5リフト<br>【額+頬+目元+フェイスライン+首】顎下含む</h3>
                        <ul>
                          <li class="d-fl">
                            <p>1回</p>
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

          <!--  -->
          <div id="precautions" class="sl-precautions">
            <div class="menu-inn sl-precautions-inn">
              <div class="sl-precautions-inn-ttl subpage-ttl menu-inn-ttl">
                <h2 class="under-line">XERF“ザーフ”の注意事項</h2>
              </div>
              <div class="defination-fl">
                <dl>
                  <dt>所要時間</dt>
                  <dd>60分程度</dd>
                </dl>
                <dl>
                  <dt>洗顔・入浴・メイク</dt>
                  <dd>・メイクは治療後すぐに可能です。<br> ・シャワーや入浴は当日から問題ないですが、当日激しい運動は避けてください。</dd>
                </dl>
                <dl>
                  <dt>副作用・ダウンタイム</dt>
                  <dd>・火傷、発赤、腫脹、熱感などが起きる可能性があります。<br>・多少の赤みがでる場合もありますが、数時間または翌日には改善されます。</dd>
                </dl>
                <dl>
                  <dt>注意事項</dt>
                  <dd>・2回目以降の治療は3~6ヵ月経過後から可能です。<br>・当日の飲酒は避けてください。</dd>
                </dl>
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
                  <a href="https://lin.ee/94Mjv4T" target="_blank" rel="nofollow noreferrer">
                    <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/reservation-btn01.png" alt="">
                  </a>
                </div>
              </div>
              <a style="display:block;" target="_blank" href="https://lin.ee/94Mjv4T" class="sl-reservation-inn-banner">
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
                <?php get_template_part('template-parts/service/hyaluronic'); ?>
                    
                </div>
            </div>
          </div>
          <?php get_template_part('template-parts/guide-line'); ?>
        </div>          
      </div>

    <?php get_template_part( 'footer-company' );?>

    <style>
      @media screen and (max-width: 768px) {
        .sl-procedure-inn-content .pro-list-post article{
          display: block;
        }
      }
    </style>
  </main>
</div>
<?php
get_footer();
