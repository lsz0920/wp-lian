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
              <text id="ボルニューマあなたと美しさをつなぐクリニック" data-name="ボルニューマあなたと美しさをつなぐクリニック" class="cls-mv-1"
                transform="translate(0 35)">
                <tspan x="0" y="0">ボルニューマ</tspan>
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
              <text id="ボルニューマあなたと美しさをつなぐクリニック" data-name="ボルニューマあなたと美しさをつなぐクリニック" class="cls-1"
                transform="translate(0 35)">
                <tspan x="0" y="0">ボルニューマ</tspan>
                <tspan x="0" y="60">あなたと</tspan>
                <tspan x="0" y="120">美しさをつなぐ</tspan>
                <tspan x="0" y="180">クリニック</tspan>
              </text>
            </svg>
          </div>
        </h1>
        <figure class="sp-right">
          <img loading="lazy" class="pc" src="<?php echo get_template_directory_uri(); ?>/img/makeup/sub-mv-img.png"
            alt="あなたの“似合う”が 見つかるアートメイク">
          <img loading="lazy" class="sp" src="<?php echo get_template_directory_uri(); ?>/img/makeup/sub-mv-sp.png"
            alt="あなたの“似合う”が 見つかるアートメイク">
        </figure>
      </div>
    </div>
    <!-- menu -->
    <div id="menu" class="sl-menu menu-hyaluronic">
      <div class="sl-menu-content">
        <!-- whatis -->
        <div id="whatis" class="sl-whatis">
          <div class="sl-whatis-inn menu-inn attach-mv">
            <div class="sl-whatis-inn-ttl subpage-ttl menu-inn-ttl">
              <h2 class="under-line">ボルニューマとは</h2>
            </div>
            <div class="sl-whatis-inn-content">
              <div class="fl-style02 d-fl">
                <div class="image">
                  <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/whatshis-blnewmer.jpg" alt="ボルニューマとは">
                </div>
                <div class="content">
                  <p>
                    <span style="font-weight: bold;">ボルニューマとは</span>
                    <br>ボルニューマは肌のタイトニング、リフティング、輪郭を整えるといったスキンリジュビネーション（引き締め）治療を目的とした最新高周波治療機器です。
                    <br>効果と安全性を追求した丸みを帯びた特別なチップが特徴です。
                  </p>
                </div>
              </div>
              <div class="sl-whatis-inn-content">
                <div class="image-center w620">
                  <img loading="lazy" src=" <?php echo get_template_directory_uri(); ?>/img/blnewmer-img01.webp" alt="ボルニューマとは">
                </div>
                <div class="pg-text">
                  <p>
                    <br><span style="font-weight: bold;">美容医療における高周波とは</span>
                    <br>熱により体内のたんぱく質変性、脂肪の繊維を引き締め即時的に引き締め、その後中期経過としてコラーゲンやエラスチンを生成しハリのある肌へと導くための治療です。
                    <br>
                  </p>
                </div>
                <img loading="lazy" src=" <?php echo get_template_directory_uri(); ?>/img/blnewmer-img02.webp" alt="美容医療における高周波とは">
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
        </div>
        <!-- recommend -->
        <div id="recommend" class="sl-effect">
          <div class="menu-inn sl-effect-inn">
            <div class="sl-effect-inn-ttl subpage-ttl menu-inn-ttl">
              <h2 class="under-line">ボルニューマは<br class="sp">こんな方におすすめ</h2>
            </div>
            <div class="sl-effect-inn-content">
              <div class="check-list">
                <ul class="check-list-wr">
                  <li>お顔に脂肪が少なく、脂肪を減らすことなくたるみ治療をしたい</li>
                  <li>痛みが苦手、ダウンタイムがない治療が良い</li>
                  <li>たるみ治療をしたいけど何から始めたらいいか分からない方はまずは【引き締め治療】の高周波から</li>
                  <li>口横やほうれい線など口周りのたるみ</li>
                  <li>頬のチークトップが下がっている</li>
                  <li>フェイスラインのもたつきが気になる</li>
                  <li>目まわりのたるみや開きの悪さがある</li>
                  <li>たるみ治療の基本は引き締めなので基本的には２０代からのたるみ予防としても</li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <!-- effects -->
        <div id="effects" class="sl-formula">
          <div class="menu-inn sl-formula-inn">
            <div class="sl-formula-inn-ttl subpage-ttl menu-inn-ttl">
              <h2 class="under-line">ボルニューマの期待できる効果</h2>
            </div>
            <div class="pg-text fl-style03">
              <p>高周波を当てることで真皮層の線維芽細胞を刺激しコラーゲンやエラスチンの増生を行うことで弾力・ハリ感が改善し、脂肪をつつむ繊維性隔壁を収縮させ脂肪の下垂を改善</p>
            </div>
            <div class="image-center w620">
              <img loading="lazy" src=" <?php echo get_template_directory_uri(); ?>/img/blnewmer-img03.webp" alt="ボルニューマの期待できる効果">
            </div>
            <!--
            <div class="sl-features-inn-content">
              <div class="fl-style03 d-fl">
                <article class="fl-style03-item">
                  <figure>
                    <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/effects-volnewmer01.jpg"
                      alt="ボルベラXC">
                  </figure>
                  <p>タンパク質変性を起こしコラーゲンを収縮させることでボリュームを減らすことなくお肌全体を引き締めます。</p>
                </article>
                <article class="fl-style03-item">
                  <figure>
                    <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/effects-volnewmer02.jpg"
                      alt="ボリューマXC">
                  </figure>
                  <p>脂肪を包む線維性隔壁を引き締めることで脂肪の下垂を改善します。</p>
                </article>
                <article class="fl-style03-item">
                  <figure>
                    <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/effects-volnewmer03.jpg"
                      alt="ボラックスXC">
                  </figure>
                  <p>熱を加えることで真皮層は軽い火傷を追っている状態になるので傷が治る過程、つまり創傷治癒の過程で線維芽細胞がコラーゲンを造成することで弾力のある肌を仕上がります。</p>
                </article>
              </div>
            </div>
            -->
          </div>
        </div>
        <!-- treatment -->
        <div id="treatment" class="sl-treatment">
          <div class="menu-inn sl-treatment-inn">
            <div class="sl-treatment-inn-ttl subpage-ttl menu-inn-ttl">
              <h2 class="under-line">組み合わせると<br class="sp">効果的な施術</h2>
            </div>
            <div class="sl-treatment-inn-content">
              <div class="fl-style02 d-fl row-reverse">
                <div class="image">
                  <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/treatment-volnewmer01.jpg"
                    alt="デザイニングハイフ">
                </div>
                <div class="content content01">
                  <h3>デザイニングハイフ</h3>
                  <p>
                    ハイフは焦点的に高温の熱を加えるため高周波とは違う効果をもたらします。
                    <br>緩みのある皮膚に強度をもたらしたり、スマス筋膜や靱帯への引き締めによるたるみの改善が期待できるため併用が効果的です。
                  </p>
                </div>
              </div>
              <div class="fl-style02 d-fl">
                <div class="image">
                  <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/treatment-volnewmer02.jpg"
                    alt="水光注射">
                </div>
                <div class="content content01">
                  <h3>水光注射</h3>
                  <p>
                    水分量がある肌は熱治療の効果をより高めます。また、製剤そのものにエイジングケア効果のあるものを使用しておりシナジー効果が期待できます。
                    <br>（2025.1現在：ジャルプロ、プルリアルデンシファイ）
                  </p>
                </div>
              </div>
              <div class="fl-style02 d-fl row-reverse">
                <div class="image">
                  <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/treatment-hyaluronic03.webp"
                    alt="ヒアルロン酸">
                </div>
                <div class="content content01">
                  <h3>ヒアルロン酸</h3>
                  <p>
                    骨萎縮や脂肪のロスがある部位は補う治療が有効です。ボルニューマで引き締めて、ヒアルロン酸で補うことで凹凸感の少ない滑らかなお顔立ちを目指す事が可能です。
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- difference -->
        <div id="difference" class="sl-whatis">
          <div class="sl-whatis-inn menu-inn">
            <div class="sl-whatis-inn-ttl subpage-ttl menu-inn-ttl">
              <h2 class="under-line">ボルニューマとHIFUの違い</h2>
            </div>
            <div class="sl-whatis-inn-content">
              <div class="pg-text">
                <p>
                  ハイフは焦点に熱を入れるのに対して、ボルニューマは筒状に熱を広範囲に入れるのが特徴。
                  <br>ボルニューマが広い範囲での引き締めだとしたらハイフは限局的だが強い引き締め、靭帯・スマス筋膜・瘢痕収縮により皮膚の強度を出す・ボリュームコントロール（1部のカートリッジで可能）が可能。それぞれの治療に一長一短があり１年のたるみ治療の計画を立てる際はどちらも入れ込んで計画を立てるのが良い。
                </p>
              </div>
              <div class="image-center w620">
                <img loading="lazy" src=" <?php echo get_template_directory_uri(); ?>/img/volnewmer-images.jpg" alt="ボルニューマの期待できる効果">
              </div>
            </div>
          </div>
        </div>
        <!-- reason -->
        <div id="reason" class="sl-reason">
          <div class="menu-inn sl-reason-inn">
            <div class="sl-reason-inn-ttl subpage-ttl menu-inn-ttl">
              <h2 class="under-line">リアンクリニックの<br class="sp">ボルニューマが選ばれる理由</h2>
            </div>
            <div class="sl-reason-inn-content">
              <div class="fl-style01">
                <article class="fl-style01-item">
                  <h3 class="fl-style01-item-ttl"><span class="list-no">01</span>高周波の機械４種を使いこなす技術力</h3>
                  <div class="d-fl fl-style01-item-content">
                    <figure>
                      <img loading="lazy"
                        src="<?php echo get_template_directory_uri(); ?>/img/hifu-kensyu-img1.webp"
                        alt="高周波の機械４種を使いこなす技術力">
                    </figure>
                    <div class="fl-style01-item-content-txt">
                      <p>
                        施術者で効果が変わる理由は複数あります。<br>
                        国内外の美容皮膚科領域の権威的な先生方も言っていることですが当院もそうであると考えます。たるみの原因は全員が同じではなく、皮膚の厚さや脂肪のつき方も違います。そのため効果的な施術には出力やショット数、当てる範囲やカートリッジの選択が必要と考えざるを得ないでしょう。また熱を均一に入れる技術にも経験値や必要であると考えます。
                    </div>
                  </div>
                </article>
                <article class="fl-style01-item">
                  <h3 class="fl-style01-item-ttl"><span
                      class="list-no sp-twoline">02</span>７テクニックの使用</h3>
                  <div class="d-fl fl-style01-item-content">
                    <figure>
                      <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/reason-volnewmer02.webp"
                        alt="７テクニックの使用">
                    </figure>
                    <div class="fl-style01-item-content-txt">
                      <p>
                        韓国本社やKOLのクリニックでの研修、そして８０００症例（２０２５。１現在）から経過の良かった症例から導いたテクニック。
                        <br>高周波は熱だまりの作り方や施術方法で結果が変わるためテクニックを重視しています。
                      </p>
                    </div>
                  </div>
                </article>
                <article class="fl-style01-item">
                  <h3 class="fl-style01-item-ttl"><span
                      class="list-no sp-twoline">03</span>ボルニューマのKOL</h3>
                  <div class="d-fl fl-style01-item-content">
                    <figure>
                      <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/reason-volnewmer03.webp"
                        alt="ボルニューマのKOL">
                    </figure>
                    <div class="fl-style01-item-content-txt">
                      <p>
                        国内でも数施設のみ選ばれるボルニューマのキーオピニオンリーダーを担っています。
                      </p>
                    </div>
                  </div>
                </article>
              </div>
            </div>
          </div>
        </div>
        <!-- case -->
        <div id="case" class="sl-whatliftup">
          <div class="menu-inn sl-whatliftup-inn">
            <div class="sl-whatliftup-inn-ttl subpage-ttl menu-inn-ttl">
              <h2 class="under-line">当院の症例</h2>
            </div>
            <div class="sl-whatliftup-inn-content">
              <div class="fl-style01">
                <article class="fl-style01-item">
                  <div class="d-fl fl-style01-item-content">
                    <figure>
                      <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/blnewmer/case-volnewmer-img1.webp"
                        alt="当院の症例">
                    </figure>
                    <div class="fl-style01-item-content-txt defination-fl">
                      <dl>
                        <dt>施術</dt>
                        <dd>4リフトボルニューマ</dd>
                      </dl>
                      <dl>
                        <dt>施術の説明</dt>
                        <dd>施術の説明: 高周波（RF）を使い真皮層〜脂肪上層にアプローチし肌をキュッと引き締めるたるみ治療です
                          施術の副作用(リスク): 熱傷・発赤、腫脹など
                        </dd>
                      </dl>
                      <dl>
                        <dt>施術の価格</dt>
                        <dd>82,500円
                        </dd>
                      </dl>
                    </div>
                  </div>
                  <div class="d-fl fl-style01-item-content">
                    <figure>
                      <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/blnewmer/case-volnewmer-img2.webp"
                        alt="当院の症例">
                    </figure>
                    <div class="fl-style01-item-content-txt defination-fl">
                      <dl>
                        <dt>施術</dt>
                        <dd>2リフトボルニューマ</dd>
                      </dl>
                      <dl>
                        <dt>施術の説明</dt>
                        <dd>施術の説明: 高周波（RF）を使い真皮層〜脂肪上層にアプローチし肌をキュッと引き締めるたるみ治療です
                          施術の副作用(リスク): 熱傷・発赤、腫脹など
                        </dd>
                      </dl>
                      <dl>
                        <dt>施術の価格</dt>
                        <dd>66,000円</dd>
                      </dl>
                    </div>
                  </div>
                  <div class="d-fl fl-style01-item-content">
                    <figure>
                      <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/blnewmer/case-volnewmer-img3.webp"
                        alt="当院の症例">
                    </figure>
                    <div class="fl-style01-item-content-txt defination-fl">
                      <dl>
                        <dt>施術</dt>
                        <dd>4リフトボルニューマ</dd>
                      </dl>
                      <dl>
                        <dt>施術の説明</dt>
                        <dd>施術の説明: 高周波（RF）を使い真皮層〜脂肪上層にアプローチし肌をキュッと引き締めるたるみ治療です
                          施術の副作用(リスク): 熱傷・発赤、腫脹など
                        </dd>
                      </dl>
                      <dl>
                        <dt>施術の価格</dt>
                        <dd>82,500円</dd>
                      </dl>
                    </div>
                  </div>
                </article>
              </div>
            </div>
          </div>
        </div>
        <!-- state -->
        <div id="state" class="sl-state">
          <div class="menu-inn sl-state-inn">
            <div class="sl-state-inn-ttl subpage-ttl menu-inn-ttl">
              <h2 class="under-line">施術の様子</h2>
            </div>
            <div class="sl-state-inn-content video-style01">
              <iframe width="560" height="315" src="https://www.youtube.com/embed/8NwFgz1sD48?si=4FEMVZNhitazzHnQ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            </div>
          </div>
          <!-- procedure -->
          <div id="procedure" class="sl-procedure">
            <div class="sl-procedure-inn menu-inn">
              <div class="sl-procedure-inn-ttl subpage-ttl menu-inn-ttl">
                <h2 class="under-line">ボルニューマ治療の流れ</h2>
              </div>
              <div class="sl-procedure-inn-content pro-list">
                <div class="pro-list-num"><span>01</span></div>
                <div class="d-fl pro-list-post">
                  <div class="h-line pc"></div>
                  <article class="d-fl">
                    <h3 class="sp"><span>01.</span>ご予約</h3>
                    <figure>
                      <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/procedure/flow_01.png"
                        alt="ご予約">
                    </figure>
                    <div>
                      <h3 class="pc">ご予約</h3>
                      <p>まずは<a href="<?php echo home_url(); ?>/inquiry/">お問い合わせフォーム</a>、<a href="https://lin.ee/U5tTSaw"
                          target="_blank">LINE予約</a>または<a href="tel:0334705678">お電話</a>よりご予約ください。</p>
                    </div>
                  </article>
                </div>
                <div class="pro-list-num">02</div>
                <div class="d-fl pro-list-post">
                  <div class="h-line pc"></div>
                  <article class="d-fl">
                    <h3 class="sp"><span>02.</span>診断</h3>
                    <figure>
                      <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/xerf-flow_02.png"
                        alt="診断">
                    </figure>
                    <div>
                      <h3 class="pc">診断</h3>
                      <p>
                        たるみの原因は個人差があり、その方の目指すところもそれぞれ。医師がお顔を拝見し診断させて頂きます。
                      </p>
                    </div>
                  </article>
                </div>
                <div class="pro-list-num">03</div>
                <div class="d-fl pro-list-post">
                  <div class="h-line pc"></div>
                  <article class="d-fl">
                    <h3 class="sp"><span>03.</span>デザイン</h3>
                    <figure>
                      <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/flow-volnewmer03.jpg"
                        alt="デザイン">
                    </figure>
                    <div>
                      <h3 class="pc">デザイン</h3>
                      <p>解剖整理やたるみのアセスメントを実際にお顔にマーキングを行います。</p>
                    </div>
                  </article>
                </div>
                <div class="pro-list-num">04</div>
                <div class="d-fl pro-list-post">
                  <div class="h-line pc"></div>
                  <article class="d-fl">
                    <h3 class="sp"><span>04.</span>施術</h3>
                    <figure>
                      <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/flow-volnewmer04.jpg"
                        alt="施術">
                    </figure>
                    <div>
                      <h3 class="pc">施術</h3>
                      <p>
                        7テクニックを用いて安全そして効果的な施術を行います。
                      </p>
                    </div>
                  </article>
                </div>
                <div class="pro-list-num">05</div>
                <div class="d-fl pro-list-post">
                  <div class="h-line pc"></div>
                  <article class="d-fl">
                    <h3 class="sp"><span>06.</span>施術後</h3>
                    <figure>
                      <img loading="lazy"
                        src="<?php echo get_template_directory_uri(); ?>/img/procedure/potenza_flow_06.png" alt="施術後">
                    </figure>
                    <div>
                      <h3 class="pc">施術後</h3>
                      <p>施術後はすぐメイクをしてお帰りいただけます。</p>
                    </div>
                  </article>
                </div>
              </div>
            </div>
          </div>
          <!-- price -->
          <div id="price" class="sl-price">
            <div class="menu-inn sl-price-inn">
              <div class="sl-price-inn-ttl subpage-ttl menu-inn-ttl">
                <h2 class="under-line">料金</h2>
              </div>
              <div class="sl-price-inn-content">
                <div class="price">
                  <h3 class="price-ttl"><span>ボルニューマ</span></h3>
                  <div class="price-list">
                    <div class="d-fl price-list-wr">
                      <div class="price-list-wr-l">
                        <p class="text">2リフト【頬＋フェイスライン】</p>
                        <ul>
                          <li class="d-fl">
                            <p>1回</p>
                            <p class="dash-line"></p>
                            <p>66,000円</p>
                          </li>
                        </ul>
                      </div>
                      <div class="price-list-wr-l">
                        <p class="text">4リフト【額+頬＋目元＋フェイスライン】顎下含む</p>
                        <ul>
                          <li class="d-fl">
                            <p>1回</p>
                            <p class="dash-line"></p>
                            <p>82,500円</p>
                          </li>
                        </ul>
                      </div>
                      <div class="price-list-wr-l">
                        <p class="text">5リフト【額+頬＋目元＋フェイスライン+手の甲 or デコルテ】</p>
                        <ul>
                          <li class="d-fl">
                            <p>1回</p>
                            <p class="dash-line"></p>
                            <p>99,000円</p>
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
                  <a href="<?php echo esc_html(home_url('/')) ?>price/" rel="alternate">VIEW MORE</a>
                </div>
              </div>
            </div>
          </div>
          <!-- precautions -->
          <div id="precautions" class="sl-precautions">
            <div class="menu-inn sl-precautions-inn">
              <div class="sl-precautions-inn-ttl subpage-ttl menu-inn-ttl">
                <h2 class="under-line">ボルニューマの注意事項</h2>
              </div>
              <div class="sl-precautions-inn-content">
                <div class="precautions-list">
                  <div class="defination-fl">
                    <dl>
                      <dt>所要時間</dt>
                      <dd>60分程度</dd>
                    </dl>
                    <dl>
                      <dt>洗顔・入浴・メイク</dt>
                      <dd>
                        <div class="disc-list disc--list">
                          <ul class="disc-list-wr">
                            <li>メイクは治療後すぐに可能です。</li>
                            <li>シャワーや入浴は当日から問題ないですが、当日激しい運動は避けてください。</li>
                          </ul>
                        </div>
                      </dd>
                    </dl>
                    <dl>
                      <dt>副作用・ ダウンタイム</dt>
                      <dd>
                        <div class="disc-list disc--list">
                          <ul class="disc-list-wr">
                            <li>火傷、発赤、腫脹、熱感などが起きる可能性があります。</li>
                            <li>多少の赤みがでる場合もありますが、数時間または翌日には改善されます。</li>
                          </ul>
                        </div>
                      </dd>
                    </dl>
                    <dl>
                      <dt>注意事項</dt>
                      <dd>
                        <div class="disc-list disc--list">
                          <ul class="disc-list-wr">
                            <li>2回目以降の治療は3~6ヵ月経過後から可能です。</li>
                            <li>当日の飲酒は避けてください。</li>
                          </ul>
                        </div>
                      </dd>
                    </dl>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- faq -->
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
                      'terms' => 'volnewmer_cat'
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
                  <?php endwhile; endif; ?>
                <?php wp_reset_query(); ?>
              </div>
              <div class="sl-faq-inn-ft">
                <div class="menu-btn more-btn">
                  <a href="<?php echo home_url('/faq') ?>" rel="alternate">VIEW MORE</a>
                </div>
              </div>
            </div>
          </div>
          <!-- reservation -->
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
              <a style="display:block;" target="_blank" href="https://lin.ee/U5tTSaw" class="sl-reservation-inn-banner">
                <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/reservation-banner01.png"
                  alt="LINE登録">
              </a>
            </div>
          </div>
          <div id="connection" class="">
            <div class="menu-inn">
              <div class="sl-connection-inn-ttl subpage-ttl menu-inn-ttl ">
                <h2 class="under-line">たるみ・しわに効果的な治療</h2>
              </div>
              <div class="sl-connection-inn-content">

                <?php get_template_part('template-parts/service/hifu'); ?>
                <?php // get_template_part('template-parts/service/sarmagen'); ?>
                <?php get_template_part('template-parts/service/xerf'); ?>
                <?php get_template_part('template-parts/service/liftup-botox'); ?>
                <?php get_template_part('template-parts/service/thread'); ?>
                <?php // get_template_part('template-parts/service/volnewmer'); ?>
                <?php get_template_part('template-parts/service/hyaluronic'); ?>

              </div>
            </div>
          </div>
          <?php get_template_part('template-parts/guide-line'); ?>
        </div>
      </div>

      <?php get_template_part('footer-company'); ?>
  </main>
</div>
<?php
get_footer();
