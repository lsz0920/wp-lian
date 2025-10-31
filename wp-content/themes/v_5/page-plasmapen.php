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
                    <text id="プラズマペンあなたと美しさをつなぐクリニック" data-name="プラズマペンあなたと美しさをつなぐクリニック" class="cls-mv-1"
                        transform="translate(0 35)">
                        <tspan x="0" y="0">プラズマペン</tspan>
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
                    <text id="プラズマペンあなたと美しさをつなぐクリニック" data-name="プラズマペンあなたと美しさをつなぐクリニック" class="cls-1" transform="translate(0 35)">
                        <tspan x="0" y="0">プラズマペン</tspan>
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
      <div id="menu"  class="sl-menu plasmapen">
        <div class="sl-menu-content">
          <!-- whatis -->
          <div id="whatis" class="sl-whatis">
            <div class="sl-whatis-inn menu-inn attach-mv">
              <div class="sl-whatis-inn-ttl subpage-ttl menu-inn-ttl">
                <h2 class="under-line">プラズマペンとは</h2>
              </div>
              <div class="sl-whatis-inn-content">
                <div class="fl-style02 d-fl">
                  <div class="image">
                    <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/img-plasmapen.jpg" alt="プラズマペンとは">
                  </div>
                  <div class="content">
                    <p>
                      プラズマペンとは、特定の気になる部位にプラズマのエネルギーを照射し、肌の悩みを解消する施術です。
                      <br>
                      <br>プラズマはガスのイオン化によって生成される気体で、正および負に帯電した一連の粒子で構成されます。
                      <br>プラズマは皮膚と接触すると高温となり、酸化を引き起こします。酸化により古い皮膚細胞が分解され、新しいコラーゲンの生成が刺激されるなどの化学反応が起こります。
                      <br>このプロセスにより、肌のハリが向し、しわや傷跡が軽減され、皮膚細胞が自然に再生されます。
                    </p>
                  </div>
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
                            <strong style="display:block;" class="sv-name"><a href="<?php echo home_url('/staff/藤尾-謙太/'); ?>">藤尾謙太</a></strong>
                            <strong style="display:block;"  class="profile">プロフィール</strong>
                            <p class="profile-txt">昭和大学卒業<br>順天堂大学の医局入職<br>大手美容皮膚科勤務<br>2023年博士号取得<br><a style="color: blue; text-decoration: underline;" target="_blank" href="https://www.aesthet-derm.org/">日本美容皮膚科医学会所属</a></p>
                        </div>
                    </div>
                    <div class="doctor__comments">
                      <strong>医師コメント</strong>
                      <p>プラズマペンとは皮膚表面にプラズマ（電離したガス）を生成し小さな点状のダメージを与ることで、肌の自然な治癒プロセスが促進されます。これにより、コラーゲンやエラスチンの生成が刺激され、肌のハリや弾力が改善します。<br>特に治療が難しいとされる、真皮ジワや上眼瞼の皮膚のたるみに有効な治療です。</p>
                    </div>
                    <?php echo get_template_part('template-parts/sv-guidelines'); ?>
                </div>
              </div>
            </div>
          </div>
          <!-- recommend
          <div id="recommend" class="sl-effect">
            <div class="menu-inn sl-effect-inn">
              <div class="sl-effect-inn-ttl subpage-ttl menu-inn-ttl">
                <h2 class="under-line">ヒアルロン酸は<br class="sp">こんな方におすすめ</h2>
              </div>
              <div class="sl-effect-inn-content">
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
              </div>
            </div>
          </div> -->
          <!-- effect -->
          <div id="effect" class="sl-whatis">
            <div class="sl-whatis-inn menu-inn">
              <div class="sl-whatis-inn-ttl subpage-ttl menu-inn-ttl">
                <h2 class="under-line">プラズマペンの効果</h2>
              </div>
              <div class="sl-whatis-inn-content">
                <div class="pg-text">
                  <p>シワの除去、肌のリフトアップ、肌の弾力性の向上に効果があります。<br>刻まれた真皮じわや目頭の放射線状のしわは他のデバイスによる治療が難しく、プラズマペンが適応されるケースが当院では多いです。</p>
                </div>
                <!--
                <div class="image-center">
                  <h3>老化による靱帯の変化<small>（イメージ図）</small></h3>
                  <figure>
                    <img loading="lazy" class="pc" src="<?php echo get_template_directory_uri(); ?>/img/sub-whathyaluronic-img03.png" alt="老化による靱帯の変化（イメージ図）">
                    <img loading="lazy" class="sp" src="<?php echo get_template_directory_uri(); ?>/img/sub-whathyaluronic-img03-sp.png" alt="老化による靱帯の変化（イメージ図）">
                  </figure>
                </div>
                <div class="pg-text">
                  <p>ヒアルロン酸を注入することで、下図のように靭帯の補強と引き上げが起こり、シワやたるみの改善が期待できます。</p>
                </div>
                <div class="image-center">
                  <h3>靭帯の変化が顔全体にもたらす影響<small>（イメージ図）</small></h3>
                  <figure>
                    <img loading="lazy" class="pc" src="<?php echo get_template_directory_uri(); ?>/img/sub-whathyaluronic-img02.png" alt="老化による靱帯の変化（イメージ図）">
                    <img loading="lazy" class="sp" src="<?php echo get_template_directory_uri(); ?>/img/sub-whathyaluronic-img02-sp.png" alt="老化による靱帯の変化（イメージ図）">
                  </figure>
                </div>
                <div class="pg-text">
                  <p>ヒアルロン酸の大きなメリットは、使い方によって様々な症状を改善できる点にあります。<br>シワ、たるみ、ほうれい線の改善は代表的な使い方ですが、ほほこけ、おでこに丸みを出す、鼻を高くする、唇をふっくらさせる、輪郭を整えるなど、使用方法が多岐に渡ります。<br><br>注射1本でできる施術なので、メスを使用するのは抵抗があるという方にも喜ばれている方法です。</p>
                </div>
                -->
              </div>
            </div>
          </div>
          <!-- features -->
          <div id="features" class="sl-features">
            <div class="menu-inn sl-features-inn">
              <div class="sl-features-inn-ttl subpage-ttl menu-inn-ttl">
                <h2 class="under-line">施術者のご紹介</h2>
              </div>
              <div class="pg-text">
                <p>
                  美容看護師歴４年以上の看護師が担当いたします。
                  <br>プラズマは繊細な治療のため経験値が重要です。
                  <br>※デザイン、出力、安全管理、アフターケア等、医師の指示のもと行います。
                </p>
              </div>
              <div class=" sl-features-inn-content">
                <div class="fl-style03 d-fl">
                  <article class="fl-style03-item">
                    <figure>
                      <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/service-staff02.jpg" alt="藤尾 有紀">
                    </figure>
                    <h3>藤尾 有紀 <span>看護師長</span></h3>
                  </article>
                  <article class="fl-style03-item">
                    <figure>
                      <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/service-staff03.jpg" alt="田中 瑞希">
                    </figure>
                    <h3>田中 瑞希 <span>看護師</span></h3>
                  </article>
                  <article class="fl-style03-item">
                    <figure>
                      <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/service-staff05.jpg" alt="坂本 伶奈">
                    </figure>
                    <h3>坂本 伶奈 <span>看護師</span></h3>
                  </article>
                  <article class="fl-style03-item">
                    <figure>
                      <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/service-staff04.jpg" alt="柴田 由季子">
                    </figure>
                    <h3>柴田 由季子 <span>看護師</span></h3>
                  </article>
                </div>
              </div>
            </div>
          </div>
          <!-- features -->
          <div id="features" class="sl-features">
            <div class="menu-inn sl-features-inn">
              <div class="sl-features-inn-ttl subpage-ttl menu-inn-ttl">
                <h2 class="under-line">施術概要</h2>
              </div>
              <div class="defination-fl">
                <dl>
                  <dt>適応部位</dt>
                  <dd>上眼瞼、下眼瞼のタイトニング</dd>
                </dl>
                <dl>
                  <dt>副作用・ダウンタイム</dt>
                  <dd>
                    ・施術後から48時間程度、浮腫が生じます。
                    <br>・プラズマを当てた箇所に赤みが生じます。赤みは数ヶ月続くことがあります。
                    <br>・施術部位は7〜10日間ほど、かさぶたになります。
                    <br>・PIH(炎症後色素沈着)は長くて半年続くことがあります。
                    <br>※この治療はダウンタイムや副作用を理解してお受けいただく必要があります。
                    <br>※ダウンタイムは個人差があります。
                  </dd>
                </dl>
                <dl>
                  <dt>痛みケア</dt>
                  <dd>表面麻酔、笑気麻酔を使用し痛みの管理を行います。</dd>
                </dl>
                <dl>
                  <dt>施術を受けられない方</dt>
                  <dd>                    
                  ・極度に乾燥している肌
                    <br>・妊娠中や妊娠の可能性のある方
                    <br>・治療部位に感染症がある方
                    <br>・ケロイド体質の方
                    <br>※その他医師の診察において、施術が適応外となる場合がございます。
                  </dd>
                </dl>
                <dl>
                  <dt>注意事項</dt>
                  <dd>
                    ・術後のメイクはかさぶたが取れた後から可能ですが、部位を強く擦るのはお控えください。
                    <br>・術後は肌が敏感になったり、乾燥しやすくなったりしているため、保湿や日焼け止めをしっかり行ってください。
                  </dd>
                </dl>
                <dl>
                  <dt>ダウンタイムの過ごし方</dt>
                  <dd>
                    ・施術当日は、サングラスや帽子など目元を隠せるアイテムをご持参いただくのがおすすめです。
                    <br>・日常生活においても、外出時はサングラスや帽子でカモフラージュしてお過ごしいただく方が多いです。
                  </dd>
                </dl>
              </div>
            </div>
          </div>
          <!-- whatliftup
          <div id="whatliftup" class="sl-whatliftup">
            <div class="menu-inn sl-whatliftup-inn">
              <div class="sl-whatliftup-inn-ttl subpage-ttl menu-inn-ttl">
                <h2 class="under-line">注射可能な部位</h2>
              </div>
              <div class="image-center">
                <figure>
                  <img loading="lazy" class="pc" src="<?php echo get_template_directory_uri(); ?>/img/liftup/hyaluronic-liftup02-pc.png" alt="注射可能な部位">
                  <img loading="lazy" class="sp" src="<?php echo get_template_directory_uri(); ?>/img/liftup/hyaluronic-liftup02-sp.png" alt="注射可能な部位">
                </figure>
              </div>
              <div class="pg-text">
                <p>　</p>
              </div>
              <div class="sl-whatliftup-inn-content">
                <div class="whatliftup-guideline">
                  <div class="pg-text">
                    <p>当院のヒアルロン酸注射で人気の部位をご紹介します。<br>持続期間は使用する製剤によって異なりますが、<span class="fz-18"><strong>おおむね6ヶ月〜18ヶ月持続</strong></span>します。</p>
                  </div>
                </div>
                <div class="fl-style01">
                  <article class="fl-style01-item">
                    <h3 class="fl-style01-item-ttl">リフトアップ</h3>
                    <div class="d-fl fl-style01-item-content">
                      <figure>
                        <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/liftup/hyaluronic-liftup07.png" alt="ヒアルロン酸注入によるリフトアップの症例">
                      </figure>
                      <div class="fl-style01-item-content-txt defination-fl">
                        <dl>
                          <dt style="margin-right: 8px;">施術名</dt>
                          <dd>
                            ヒアルロン酸
                            <br>（ほほ・ほうれい線：ボリューマ2cc、リップ：ボルベラ 1cc）+ ハイサーマ
                          </dd>
                        </dl>
                        <dl>
                          <dt style="margin-right: 8px;">副作用</dt>
                          <dd>
                            ヒアルロン酸：内出血、アレルギー、血管塞栓など
                            <br>ハイサーマ：熱傷・発赤、腫脹など
                          </dd>
                        </dl>
                        <dl>
                          <dt style="margin-right: 8px;">料金</dt>
                          <dd>
                            ヒアルロン酸：3cc¥242,000
                            <br>ハイサーマ:：¥99,000
                          </dd>
                        </dl>
                        <div class="pg-text" style="margin-top: 16px;">
                          <p>骨の萎縮部位や靭帯にヒアルロン酸を注入することで顔全体の引き上げを行いました。靭帯を補強することで顔全体が引き上がり、ほうれい線やマリオネットラインが解消することで、若々しい印象を与えられます。</p>
                        </div>
                      </div>
                    </div>
                  </article>
                  <article class="fl-style01-item">
                    <h3 class="fl-style01-item-ttl">ほうれい線・マリオネットライン</h3>
                    <div class="d-fl fl-style01-item-content">
                      <figure>
                        <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/liftup/hyaluronic-liftup08.png" alt="ヒアルロン酸注入によるほうれい線の症例">
                      </figure>
                      <div class="fl-style01-item-content-txt defination-fl">
                        <dl>
                          <dt style="margin-right: 8px;">施術名</dt>
                          <dd>
                            ヒアルロン酸 （ボリューマ3cc）
                          </dd>
                        </dl>
                        <dl>
                          <dt style="margin-right: 8px;">副作用</dt>
                          <dd>
                            内出血、アレルギー、血管塞栓など
                          </dd>
                        </dl>
                        <dl>
                          <dt style="margin-right: 8px;">料金</dt>
                          <dd>
                            1cc¥88,000
                          </dd>
                        </dl>
                        <div class="pg-text" style="margin-top: 16px;">
                          <p>肌のハリをアップさせ、口元周辺のしわ（ほうれい線・マリオネットライン）を目立たなくします。<br><br>笑ったときに膨らみを強く感じる場合があるため、筋肉の動きを確認しながら注入を行います。</p>
                        </div>
                      </div>
                    </div>
                  </article>
                  <article class="fl-style01-item">
                    <h3 class="fl-style01-item-ttl">凹み・くぼみ</h3>
                    <div class="d-fl fl-style01-item-content">
                      <figure>
                        <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/liftup/hyaluronic-liftup09.png" alt="ヒアルロン酸注入による凹み・くぼみの症例">
                      </figure>
                      <div class="fl-style01-item-content-txt defination-fl">
                        <dl>
                          <dt style="margin-right: 8px;">施術名</dt>
                          <dd>
                            ヒアルロン酸
                            <br>（こめかみ・頬・顎：ボリューマ5cc）
                          </dd>
                        </dl>
                        <dl>
                          <dt style="margin-right: 8px;">副作用</dt>
                          <dd>
                            内出血、アレルギー、血管塞栓など
                          </dd>
                        </dl>
                        <dl>
                          <dt style="margin-right: 8px;">料金</dt>
                          <dd>
                            1cc¥396,000
                          </dd>
                        </dl>
                        <div class="pg-text" style="margin-top: 16px;">
                          <p>おでこやこめかみ、頬などの凹んだ部分にヒアルロン酸を注入することで、ボリュームを補い、肌を滑らかにします。<br><br>注入しすぎると不自然にふくらんでしまうことがあるため、注入位置と量の調整が重要です。</p>
                        </div>
                      </div>
                    </div>
                  </article>
                  <article class="fl-style01-item">
                    <h3 class="fl-style01-item-ttl">鼻</h3>
                    <div class="d-fl fl-style01-item-content">
                      <figure>
                        <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/liftup/hyaluronic-liftup10.png" alt="ヒアルロン酸注入による鼻の症例">
                      </figure>
                      <div class="fl-style01-item-content-txt defination-fl">
                        <dl>
                          <dt style="margin-right: 8px;">施術名</dt>
                          <dd>
                            ヒアルロン酸
                          </dd>
                        </dl>
                        <dl>
                          <dt style="margin-right: 8px;">副作用</dt>
                          <dd>
                            内出血、アレルギー、血管塞栓など
                          </dd>
                        </dl>
                        <dl>
                          <dt style="margin-right: 8px;">料金</dt>
                          <dd>
                            1cc¥88,000
                          </dd>
                        </dl>
                        <div class="pg-text" style="margin-top: 16px;">
                          <p>ヒアルロン酸の注入によって、鼻の高さや横幅、鼻の先端の形状などを整えることができます。<br><br>鼻はとくに不自然になりやすいため、特徴や顔のバランスをしっかり考慮し、過度の注入を避ける必要があります。</p>
                        </div>
                      </div>
                    </div>
                  </article>
                  <article class="fl-style01-item">
                    <h3 class="fl-style01-item-ttl">リップ</h3>
                    <div class="d-fl fl-style01-item-content">
                      <figure>
                        <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/liftup/hyaluronic-liftup11.png" alt="ヒアルロン酸注入によるリップの症例">
                      </figure>
                      <div class="fl-style01-item-content-txt defination-fl" style="margin-top: 16px;">
                        <dl>
                          <dt style="margin-right: 8px;">施術名</dt>
                          <dd>
                            ヒアルロン酸
                            <br>（ボルベラ1cc）
                          </dd>
                        </dl>
                        <dl>
                          <dt style="margin-right: 8px;">副作用</dt>
                          <dd>
                            内出血、発赤、腫脹、糸の露出、感染など
                          </dd>
                        </dl>
                        <dl>
                          <dt style="margin-right: 8px;">料金</dt>
                          <dd>
                            1cc¥88,000
                          </dd>
                        </dl>
                        <div class="pg-text" style="margin-top: 16px;">
                          <p>年齢を重ねると人中（鼻下）が伸びてきて、実年齢より老けて見えることがあります。ヒアルロン酸を上唇に注入することで、ボリュームのある魅力的な唇を演出できます。<br><br>浅いところに注入するとヒアルロン酸が青白く透けて見えてしまうことがあるため、注入する深さが重要になります。</p>
                        </div>
                      </div>
                    </div>
                  </article>
                </div>
              </div>
            </div>
          </div> -->
          <!-- commit
          <div id="commit" class="sl-commit">
            <div class="menu-inn sl-commit-inn">
              <div class="sl-commit-inn-ttl subpage-ttl menu-inn-ttl">
                <h2 class="under-line">リアンクリニックのこだわり</h2>
              </div>
              <div class="sl-commit-inn-content">
                <div class="fl-style02 d-fl">
                  <div class="image">
                    <img loading="lazy" class="pc" src="<?php echo get_template_directory_uri(); ?>/img/commit/hyaluronic-commit01.png" alt="リアンクリニックのこだわり">
                    <img loading="lazy" class="sp" src="<?php echo get_template_directory_uri(); ?>/img/commit/hyaluronic-commit01-sp.png" alt="リアンクリニックのこだわり">
                  </div>
                  <div class="content">
                    <p>ヒアルロン酸の症例経験豊富な医師がお悩みに応じて、ヒアルロン酸の本数・種類、挿入する針の深さ、針の入れ方、注入テクニックまで緻密に設計し最大限の効果を発揮できるように施術しております。</p>

                    <p>また、当院はナチュラルな仕上がりを最重要視しております。ヒアルロン酸で「明らかな違和感のある顔」「あきらかに整形した顔」の仕上がりになる場合はこちらからお断りする場合がございますので予めご了承ください。</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          -->
          <!-- reason
          <div id="reason" class="sl-reason">
            <div class="menu-inn sl-reason-inn">
              <div class="sl-reason-inn-ttl subpage-ttl menu-inn-ttl">
                <h2 class="under-line">リアンクリニックの<br class="sp">ヒアルロン酸が選ばれる理由</h2>
              </div>
              <div class="sl-reason-inn-content">
                <div class="fl-style01">
                  <article class="fl-style01-item">
                    <h3 class="fl-style01-item-ttl"><span class="list-no">01</span>リアン式マイクロテクニック</h3>
                    <div class="d-fl fl-style01-item-content">
                      <figure>
                        <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/reason/hyaluronic-reason01.png" alt="リアン式マイクロテクニック">
                      </figure>
                      <div class="fl-style01-item-content-txt">
                        <p>シワやくぼみの治療では、ヒアルロン酸をどの位置にどれくらいの量を注入するのかが最も重要です。リアン式マイクロテクニックでは、ミリよりも細かい単位で注入位置の調整を行います。一般的な治療だからこそ、最も工夫をしています。
                        </p>
                      </div>
                    </div>
                  </article>
                  <article class="fl-style01-item">
                    <h3 class="fl-style01-item-ttl"><span class="list-no sp-twoline">02</span>安全・高品質な<br class="sp">ヒアルロン酸の使用</h3>
                    <div class="d-fl fl-style01-item-content">
                      <figure>
                        <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/reason/hyaluronic-reason02.png" alt="安全・高品質なヒアルロン酸の使用">
                      </figure>
                      <div class="fl-style01-item-content-txt">
                        <p>ヒアルロン酸にはたくさんの種類があります。廉価な中国製のものも登場しています。しかし、新しければ、または安ければ良いというものではありません。リアンでは安全性に実績がある高品質なヒアルロン酸のみを使用しています。当院では、顔のしわや溝の治療において厚生労働省に承認されている「ジュダーム®︎」「レスチレン®︎」を使用しています。
                        </p>
                      </div>
                    </div>
                  </article>
                  <article class="fl-style01-item">
                    <h3 class="fl-style01-item-ttl"><span class="list-no">03</span>リフトアップヒアルロン酸</h3>
                    <div class="d-fl fl-style01-item-content align-center">
                      <figure>
                        <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/reason/hyaluronic-reason03.png" alt="リフトアップヒアルロン酸">
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
          </div>-->
          <!-- whatliftup
          <div id="whatliftup" class="sl-whatliftup">
            <div class="menu-inn sl-whatliftup-inn">
              <div class="sl-whatliftup-inn-ttl subpage-ttl menu-inn-ttl">
                <h2 class="under-line">リフトアップ<br class="sp">ヒアルロン酸とは</h2>
              </div>
              <div class="image-center">
                <figure>
                  <img loading="lazy" class="pc" src="<?php echo get_template_directory_uri(); ?>/img/liftup/hyaluronic-liftup-pc.png" alt="美容皮膚科医が推奨するヒアルロン酸推奨量">
                  <img loading="lazy" class="sp" src="<?php echo get_template_directory_uri(); ?>/img/liftup/hyaluronic-liftup-sp.png" alt="美容皮膚科医が推奨するヒアルロン酸推奨量">
                </figure>
              </div>
              <div class="pg-text">
                <p>　</p>
              </div>
              <div class="sl-whatliftup-inn-content">
                <div class="whatliftup-guideline">
                  <div class="pg-text">
                    <p>通常のヒアルロン酸注入は、たるみによってできた凹みにヒアルロン酸を注入して表面をフラットにすることで、たるみを目立たなくするという方法でしたが、「リフトアップヒアルロン酸」では、靭帯や骨膜上にヒアルロン酸を注入することで、たるんだ組織を持ち上げ、<span class="fz-18"><strong>ハリ、リフトアップ効果</strong></span>が期待できます。</p>
                  </div>
                </div>
                <div class="fl-style01">
                  <article class="fl-style01-item">
                    <h3 class="fl-style01-item-ttl"><span class="list-no">01</span>初めての方向け<span class="txt-side pc">４ポイントリフト</span></h3>
                    <span class="txt-side sp">４ポイントリフト</span>
                    <div class="d-fl fl-style01-item-content">
                      <figure>
                        <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/liftup/hyaluronic-liftup04.png" alt="4ポイントリフトアップの症例">
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
                          <dd>2〜4本 × （1本目：¥88,000、2本目：¥77,000）<br>
                          ＝<span>¥165,000 〜 ¥319,000</span><small>（税込）</small>
                          </dd>
                        </dl>
                      </div>
                    </div>
                  </article>
                  <article class="fl-style01-item">
                    <h3 class="fl-style01-item-ttl"><span class="list-no">02</span>より劇的な変化を求める方向け<span class="txt-side pc">8ポイントリフト</span></h3>
                    <span class="txt-side sp">8ポイントリフト</span>
                    <div class="d-fl fl-style01-item-content">
                      <figure>
                        <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/liftup/hyaluronic-liftup05.png" alt="8ポイントリフトアップの症例">
                      </figure>
                      <div class="fl-style01-item-content-txt defination-fl">
                        <dl>
                          <dt>注入ポイント</dt>
                          <dd>T1に0.5〜1cc<br>
                            CK1に0.5〜1cc<br>
                            CK3に0.3〜0.5cc<br>
                            JW1に0.3〜0.5cc<br>
                            左右両方に4〜8cc
                          </dd>
                        </dl>
                        <dl>
                          <dt>想定予算</dt>
                          <dd>4〜8本 × （1本目：¥88,000、2本目：¥77,000）<br>
                          ＝<span>¥319,000 〜 ¥627,000</span><small>（税込）</small>
                          </dd>
                        </dl>
                      </div>
                    </div>
                  </article>
                  <article class="fl-style01-item">
                    <h3 class="fl-style01-item-ttl"><span class="list-no sp-twoline">03</span>お若い方で小顔効果を<br class="sp">求める方向け<span class="txt-side pc">Vリフト</span></h3>
                    <span class="txt-side sp">Vリフト</span>
                    <div class="d-fl fl-style01-item-content">
                      <figure>
                        <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/liftup/hyaluronic-liftup06.png" alt="Vリフトの症例">
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
                          <dd>3〜6本 × （1本目：¥88,000、2本目：¥77,000）<br>
                          ＝<span>¥242,000 〜 ¥473,000</span><small>（税込）</small>
                          </dd>
                        </dl>
                      </div>
                    </div>
                  </article>
                </div>
              </div>
            </div>
          </div> -->
          <!-- case
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
                        <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/case/hyaluronic-case01.jpg" alt="ヒアルロン酸リフト">
                      </figure>
                      <div class="content">
                        <dl>
                          <dt>施術名</dt>
                          <dd>ヒアルロン酸リフト</dd>
                        </dl>
                        <dl>
                          <dt>施術の説明</dt>
                          <dd>ヒアルロン酸を注入することでボリュームを出したり、骨や靭帯を補強することで、リフトアップする治療です。</dd>
                        </dl>
                        <dl>
                          <dt>施術の副作用(リスク)</dt>
                          <dd>アレルギー、内出血、血管塞栓、仕上がりの僅かな左右差</dd>
                        </dl>
                        <dl>
                          <dt>施術の価格</dt>
                          <dd>¥396,000</dd>
                        </dl>
                      </div>
                    </a>
                  </article>
                  <article>
                    <a class="fl-style04-fl d-fl" target="_blank" rel="nofollow noreferrer">
                      <figure>
                        <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/case/hyaluronic-case02.jpg" alt="フェイスラインヒアル">
                      </figure>
                      <div class="content">
                        <dl>
                          <dt>施術名</dt>
                          <dd>フェイスラインヒアル</dd>
                        </dl>
                        <dl>
                          <dt>施術の説明</dt>
                          <dd>ヒアルロン酸を注入することでボリュームを出したり、骨や靭帯を補強することで、リフトアップする治療です。</dd>
                        </dl>
                        <dl>
                          <dt>施術の副作用(リスク)</dt>
                          <dd>アレルギー、内出血、血管塞栓、仕上がりの僅かな左右差</dd>
                        </dl>
                        <dl>
                          <dt>施術の価格</dt>
                          <dd>¥242,000</dd>
                        </dl>
                      </div>
                    </a>
                  </article>
                  <article>
                    <a class="fl-style04-fl d-fl" target="_blank" rel="nofollow noreferrer">
                      <figure>
                        <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/case/hyaluronic-case03.jpg" alt="ほうれい線ボライト">
                      </figure>
                      <div class="content">
                        <dl>
                          <dt>施術名</dt>
                          <dd>ほうれい線ボライト</dd>
                        </dl>
                        <dl>
                          <dt>施術の説明</dt>
                          <dd>ヒアルロン酸を注入することでボリュームを出したり、骨や靭帯を補強することで、リフトアップする治療です。</dd>
                        </dl>
                        <dl>
                          <dt>施術の副作用(リスク)</dt>
                          <dd>アレルギー、内出血、血管塞栓、仕上がりの僅かな左右差</dd>
                        </dl>
                        <dl>
                          <dt>施術の価格</dt>
                          <dd>¥242,000</dd>
                        </dl>
                      </div>
                    </a>
                  </article>
                  <article>
                    <a class="fl-style04-fl d-fl" target="_blank" rel="nofollow noreferrer">
                      <figure>
                        <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/case/hyaluronic-case04.jpg" alt="ゴルゴラインヒアル">
                      </figure>
                      <div class="content">
                        <dl>
                          <dt>施術名</dt>
                          <dd>ゴルゴラインヒアル</dd>
                        </dl>
                        <dl>
                          <dt>施術の説明</dt>
                          <dd>ヒアルロン酸を注入することでボリュームを出したり、骨や靭帯を補強することで、リフトアップする治療です。</dd>
                        </dl>
                        <dl>
                          <dt>施術の副作用(リスク)</dt>
                          <dd>アレルギー、内出血、血管塞栓、仕上がりの僅かな左右差</dd>
                        </dl>
                        <dl>
                          <dt>施術の価格</dt>
                          <dd>¥242,000</dd>
                        </dl>
                      </div>
                    </a>
                  </article>
                  <article>
                    <a class="fl-style04-fl d-fl" target="_blank" rel="nofollow noreferrer">
                      <figure>
                        <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/case/hyaluronic-case05.jpg" alt="リップヒアルロン酸">
                      </figure>
                      <div class="content">
                        <dl>
                          <dt>施術名</dt>
                          <dd>リップヒアルロン酸</dd>
                        </dl>
                        <dl>
                          <dt>施術の説明</dt>
                          <dd>ヒアルロン酸を注入することでボリュームを出したり、骨や靭帯を補強することで、リフトアップする治療です。</dd>
                        </dl>
                        <dl>
                          <dt>施術の副作用(リスク)</dt>
                          <dd>アレルギー、内出血、血管塞栓、仕上がりの僅かな左右差</dd>
                        </dl>
                        <dl>
                          <dt>施術の価格</dt>
                          <dd>¥88,000</dd>
                        </dl>
                      </div>
                    </a>
                  </article>
                  <article>
                    <a class="fl-style04-fl d-fl" target="_blank" rel="nofollow noreferrer">
                      <figure>
                        <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/case/hyaluronic-case06.jpg" alt="顎ヒアルロン酸">
                      </figure>
                      <div class="content">
                        <dl>
                          <dt>施術名</dt>
                          <dd>顎ヒアルロン酸</dd>
                        </dl>
                        <dl>
                          <dt>施術の説明</dt>
                          <dd>ヒアルロン酸を注入することでボリュームを出したり、骨や靭帯を補強することで、リフトアップする治療です。</dd>
                        </dl>
                        <dl>
                          <dt>施術の副作用(リスク)</dt>
                          <dd>アレルギー、内出血、血管塞栓、仕上がりの僅かな左右差</dd>
                        </dl>
                        <dl>
                          <dt>施術の価格</dt>
                          <dd>¥242,000</dd>
                        </dl>
                      </div>
                    </a>
                  </article>
                  <article>
                    <a class="fl-style04-fl d-fl" target="_blank" rel="nofollow noreferrer">
                      <figure>
                        <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/case/hyaluronic-case07.jpg" alt="口横小じわボライト">
                      </figure>
                      <div class="content">
                        <dl>
                          <dt>施術名</dt>
                          <dd>口横小じわボライト</dd>
                        </dl>
                        <dl>
                          <dt>施術の説明</dt>
                          <dd>ヒアルロン酸を注入することでボリュームを出したり、骨や靭帯を補強することで、リフトアップする治療です。</dd>
                        </dl>
                        <dl>
                          <dt>施術の副作用(リスク)</dt>
                          <dd>アレルギー、内出血、血管塞栓、仕上がりの僅かな左右差</dd>
                        </dl>
                        <dl>
                          <dt>施術の価格</dt>
                          <dd>¥88,000</dd>
                        </dl>
                      </div>
                    </a>
                  </article>
                  <article>
                    <a class="fl-style04-fl d-fl" target="_blank" rel="nofollow noreferrer">
                      <figure>
                        <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/case/hyaluronic-case08.jpg" alt="ヒアルロン酸リフト">
                      </figure>
                      <div class="content">
                        <dl>
                          <dt>施術名</dt>
                          <dd>ヒアルロン酸リフト</dd>
                        </dl>
                        <dl>
                          <dt>施術の説明</dt>
                          <dd>ヒアルロン酸を注入することでボリュームを出したり、骨や靭帯を補強することで、リフトアップする治療です。</dd>
                        </dl>
                        <dl>
                          <dt>施術の副作用(リスク)</dt>
                          <dd>アレルギー、内出血、血管塞栓、仕上がりの僅かな左右差</dd>
                        </dl>
                        <dl>
                          <dt>施術の価格</dt>
                          <dd>¥396,000</dd>
                        </dl>
                      </div>
                    </a>
                  </article>

                </div>
              </div>
            </div>
          </div> -->
          <!-- state
          <div id="state" class="sl-state">
            <div class="menu-inn sl-state-inn">
              <div class="sl-state-inn-ttl subpage-ttl menu-inn-ttl">
                <h2 class="under-line">施術の様子</h2>
              </div>
              <div class="sl-state-inn-content video-style01">
                <iframe width="100%" height="100%" src="https://www.youtube.com/embed/dxrfqN7jgpQ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe></div>
              </div>
          </div> -->
          <!-- formula
          <div id="formula" class="sl-formula">
            <div class="menu-inn sl-formula-inn">
              <div class="sl-formula-inn-ttl subpage-ttl menu-inn-ttl">
                <h2 class="under-line">最適な「ヒアルロン酸製剤」<br class="sp">をお選びします</h2>
              </div>
              <div class="pg-text">
                  <p>ヒアルロン酸注射では、使用するヒアルロン酸製剤によって適応部位や効果の持続期間が異なります。<br>当院では患者様の希望部位に応じて「ボルベラXC」「ボリューマXC」「ボラックスXC」の3つから最適なヒアルロン酸製剤をお選びします。</p>
              </div>
              <div class="sl-features-inn-content">
                <div class="fl-style03 d-fl">
                  <article class="fl-style03-item">
                    <h3>柔らかい</h3>
                    <figure>
                      <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/formula/hyaluronic-formula01.png" alt="ボルベラXC">
                    </figure>
                    <strong style="border:none;"><small>ボルベラXC</small></strong>
                    <div class="fl-style01-item-content-txt defination-fl">
                      <dl style="margin-bottom: 8px;">
                        <dt style="max-width: 80px; width: 100%; margin-right: 8px;">持続期間</dt>
                        <dd>約12ヶ月</dd>
                      </dl>
                      <dl>
                        <dt style="max-width: 80px; width: 100%; margin-right: 8px;">適応部位</dt>
                        <dd>唇のボリュームアップ</dd>
                      </dl>
                    </div>
                  </article>
                  <article class="fl-style03-item">
                    <h3>やや硬い</h3>
                    <figure>
                      <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/formula/hyaluronic-formula02.png" alt="ボリューマXC">
                    </figure>
                    <strong style="border:none;"><small>ボリューマXC</small></strong>
                    <div class="fl-style01-item-content-txt defination-fl">
                      <dl style="margin-bottom: 8px;">
                        <dt style="max-width: 80px; width: 100%; margin-right: 8px;">持続期間</dt>
                        <dd>6〜18ヶ月</dd>
                      </dl>
                      <dl>
                        <dt style="max-width: 80px; width: 100%; margin-right: 8px;">適応部位</dt>
                        <dd>こめかみ・ほうれい線・ゴルゴライン・<br class="pc">マリオネットライン・頬のコケ</dd>
                      </dl>
                    </div>
                  </article>
                  <article class="fl-style03-item">
                    <h3>硬い</h3>
                    <figure>
                      <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/formula/hyaluronic-formula03.png" alt="ボラックスXC">
                    </figure>
                    <strong style="border:none;"><small>ボラックスXC</small></strong>
                    <div class="fl-style01-item-content-txt defination-fl">
                      <dl style="margin-bottom: 8px;">
                        <dt style="max-width: 80px; width: 100%; margin-right: 8px;">持続期間</dt>
                        <dd>6〜18ヶ月</dd>
                      </dl>
                      <dl>
                        <dt style="max-width: 80px; width: 100%; margin-right: 8px;">適応部位</dt>
                        <dd>あご・輪郭の形成</dd>
                      </dl>
                    </div>
                  </article>
                </div>
              </div>
            </div>
          </div>
          -->
          <!-- price
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
                        <p class="text">ボルベラ、ボリューマ、ボラックス　1cc </p>
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
          </div> -->
          <!-- campaign
          <div id="campaign" class="sl-campaign">
            <div class="menu-inn sl-campaign-inn">
              <div class="sl-campaign-inn-ttl subpage-ttl menu-inn-ttl">
                <h2 class="under-line">キャンペーン</h2>
              </div>
              <div class="sl-campaign-inn-content d-fl">
                <figure>
                  <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/hyaluronic-campaign02.png" alt="キャンペーン">
                </figure>
                <div class="sl-campaign-inn-content-txt">
                  <p>【ヒアルロン酸モニター募集】</p>
                  <p>
                    アンチエイジングの基本はたるみは引き締めつつ、年齢とともに萎縮してくる箇所は【ボリュームを補う】こと
                    <br>特に、あご・こめかみ・ほうれい線はお顔の印象を左右する重要なパーツです。
                    <br>ヒアルロン酸はダウンタイムが少なく、効果をすぐご体感いただけるので続けやすい治療です。
                    <br>この度、30%オフでご利用いただけるモニター制度をご用意いたしました。
                    <br>是非この機会にご体感ください。
                    <ul class="hash-list">
                      <li>施術前後で目を開けた状態でお写真に協力できる方限定</li>
                    </ul>
                    </p>
                </div>
              </div>
            </div>
          </div> -->
          <!-- precautions
          <div id="precautions" class="sl-precautions">
            <div class="menu-inn sl-precautions-inn">
              <div class="sl-precautions-inn-ttl subpage-ttl menu-inn-ttl">
                <h2 class="under-line">ヒアルロン酸の注意事項</h2>
              </div>
              <div class="sl-precautions-inn-content">
                <div class="precautions-list">
                  <div class="defination-fl">
                    <dl>
                      <dt>麻酔</dt>
                      <dd>麻酔シールまたは麻酔クリーム
                        <ul class="hash-list">
                          <li>痛みが不安な方は、眠れる麻酔（リラックス効果がある麻酔）も可能です。ご希望の方はご予約時にご相談ください。</li>
                        </ul>
                      </dd>
                    </dl>
                    <dl>
                      <dt>所要時間</dt>
                      <dd>90分程度</dd>
                    </dl>
                    <dl>
                      <dt>洗顔・入浴</dt>
                      <dd>翌日から可能<br>※患部はお湯で流す程度にしてください。</dd>
                    </dl>
                    <dl>
                      <dt>メイク</dt>
                      <dd>翌日から可能<br>※注入部位に直接圧力をかけないよう注意してください。</dd>
                    </dl>
                    <dl>
                      <dt>シャワー</dt>
                      <dd>当日から可能<br>※患部はお湯で流す程度にしてください。</dd>
                    </dl>
                    <dl>
                      <dt>飲酒</dt>
                      <dd>前日・当日はお控えください</dd>
                    </dl>
                    <dl>
                      <dt>運動</dt>
                      <dd>前日・当日はお控えください</dd>
                    </dl>
                    <dl>
                      <dt>副作用・ ダウンタイム</dt>
                      <dd>
                        <div class="disc-list disc--list">
                          <ul class="disc-list-wr">
                            <li>かゆみ、圧痛を伴う炎症反応（赤み、むくみ、紅斑）などが起きる可能性があります。これらは通常は一過性のものですが、1週間ほど継続することがあります。</li>
                            <li>注入後の経過が経った後、まれにアレルギー症状が起きることがあります。</li>
                            <li>血腫、感染、注入部位の着色または退色、神経圧迫、塞栓、膿疹形成、肉芽腫、過敏症などが起きることがあります。</li>
                            <li>注射針によって内出血が起きることがあります。</li>
                            <li>予想以上に効果の実感が得られない、または修正効果が弱いことがあります。</li>
                          </ul>
                        </div>
                      </dd>
                    </dl>
                  </div>
                </div>
              </div>
            </div>
          </div> -->
          <!-- faq
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
          </div> -->
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
                  <a href="https://lin.ee/U5tTSaw" target="_blank" rel="nofollow noreferrer">
                    <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/reservation-btn01.png" alt="">
                  </a>
                </div>
              </div>
              <a style="display:block;" target="_blank" href="https://lin.ee/U5tTSaw" class="sl-reservation-inn-banner">
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
  </main>
</div>
<?php
get_footer();
