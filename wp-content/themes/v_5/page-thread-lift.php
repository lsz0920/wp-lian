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
          <img loading="lazy" class="pc" src="<?php echo get_template_directory_uri(); ?>/img/makeup/sub-mv-img.png" alt="あなたの“似合う”が 見つかるアートメイク">
          <img loading="lazy" class="sp" src="<?php echo get_template_directory_uri(); ?>/img/makeup/sub-mv-sp.png" alt="あなたの“似合う”が 見つかるアートメイク">
        </figure>
      </div>
    </div>

    <div id="menu" class="sl-menu menu-eyeline">
      <div class="sl-menu-content">
        <!-- 糸リフトとは -->
        <div id="whatis" class="sl-whatis">
          <div class="menu-inn sl-whatis-inn attach-mv">
            <div class="sl-whatis-inn-ttl subpage-ttl menu-inn-ttl">
              <h1 class="under-line menu-inn-ttl__inner">糸リフトとは</h1>
            </div>
            <div class="sl-whatis-inn-content">
              <div class="d-fl whatis-detailup">
                <figure>
                  <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/thread-lift_about.webp" alt="糸リフトとは">
                </figure>
                <div class="whatis-detailup-txt">
                  <p>
                    糸リフトとは、特殊なトゲ（コグ）のついた医療用の糸を皮下に挿入し、<strong>たるんだ皮膚や脂肪を物理的に引き上げる</strong>ことで、フェイスラインを整える治療です。
                    <br>当院では**PLACL（ポリ乳酸＋カプロラクトン）<strong>および</strong>PDO（ポリジオキサノン）**製の糸を使用しており、<strong>リフト力とコラーゲン生成効果のバランスが取れた製剤</strong>を、たるみのタイプに応じて使い分けています。
                    <br>糸は皮膚の浅い層（皮下組織〜脂肪層）に挿入され、組織を支えながらハリや弾力アップも同時に期待できるのが特長です。
                  </p>
                </div>
              </div>
            </div>

            <!-- 糸リフトが適応になる人 -->
            <div class="sl-whatis-inn-ttl subpage-ttl menu-inn-ttl">
              <h2 class="under-line" style="margin-top:40px;">糸リフトが適応になる人</h2>
            </div>
            <div class="check-list">
              <ul class="check-list-wr">
                <li>ヒアルロン酸や熱治療では持ち上がらない「位置の下がり」を改善したい方</li>
                <li>フェイスラインがぼやけてお顔が四角くなったと感じる方</li>
                <li>ほうれい線・マリオネットラインが目立ってきた方</li>
                <li>土台の支えが必要になる年齢変化に対応した治療</li>
                <li>比較的すぐに“リフト効果”を感じたい方</li>
                <li>メスを使わず自然に若返りたい方</li>
                <li>痛みやダウンタイムをできるだけ少なくしたい方</li>
                <li>ヒアルロン酸だけでは物足りなくなってきた方</li>
                <li>できるだけたるみを予防していきたい方</li>
              </ul>
            </div>

            <!-- 監修者情報 -->
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
                  <p>
                    当院は糸リフトとヒアルロン酸、ECM製剤や熱治療を組み合わせた立体的なたるみ治療を得意としています。
                    <br>糸は単に引き上げるのではなく、支持靭帯の位置や皮下組織のゆるみに合わせて、リフトと固定を両立する方向・層に挿入します。
                    <br>特に頬やフェイスラインでは、無理なくナチュラルに引き上がる軌道を設計。
                    <br>ヒアルロン酸は凹みに対して深層〜浅層を使い分け、過度に膨らませず“支え”として立体バランスを整えます。
                    <br>単なるリフトではなく、「支える」「整える」「再構築する」アプローチで、自然な若返りを叶えています。
                  </p>
                </div>
                <?php echo get_template_part('template-parts/sv-guidelines'); ?>
            </div>
          </div>
        </div>

        <!-- リアンクリニックの糸リフトが選ばれる理由 -->
        <div id="benefits" class="sl-benefits">
          <div class="menu-inn sl-benefits-inn">
            <div class="sl-benefits-inn-ttl subpage-ttl menu-inn-ttl">
              <h2 class="under-line">リアンクリニックの糸リフトが選ばれる理由</h2>
            </div>
            <div class="sl-benefits-inn-content">
              <div class="fl-style01">
                <article class="fl-style01-item">
                  <h2 class="fl-style01-item-ttl"><span class="list-no">01</span>たるみ治療に精通した医師が診察・施術</h2>
                  <div class="d-fl fl-style01-item-content">
                    <figure>
                      <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/thread-lift_reason01.webp" alt="たるみ治療に精通した医師が診察・施術">
                    </figure>
                    <div class="fl-style01-item-content-txt">
                      <p>
                        リアンクリニックでは、糸リフト単体でのアプローチにとどまらず、<strong>ヒアルロン酸注入・高周波・HIFUなどの他の治療との組み合わせまで含めて総合的に診断・設計</strong>します。
                        <br>糸リフトだけでは改善しきれない骨格由来のボリュームロスや、表情によるたるみなど、原因に応じて治療戦略を組み立てられるのが強みです。院長自身が日々の施術に加え、たるみ治療の学会発表や研究にも取り組んでおり、構造的な若返りに対して深い知見を持っています。そのため、「とりあえず糸を入れる」ような施術とは一線を画した、<strong>効果と自然さを両立するプランニング</strong>が可能です。
                      </p>
                    </div>
                  </div>
                </article>
                <article class="fl-style01-item">
                  <h2 class="fl-style01-item-ttl"><span class="list-no">02</span>痛み・ダウンタイムを最小限に抑える設計と技術</h2>
                  <div class="d-fl fl-style01-item-content">
                    <figure>
                      <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/thread-lift_reason02.webp" alt="痛み・ダウンタイムを最小限に抑える設計と技術">
                    </figure>
                    <div class="fl-style01-item-content-txt">
                      <p>
                        糸リフトに対して「痛そう」「腫れそう」といった不安を持つ方も少なくありません。当院ではそのような不安に配慮し、笑気麻酔・表面麻酔・局所麻酔を症例ごとに適切に組み合わせて使用。<strong>施術時の痛みを極力軽減できるように設計</strong>しています。
                        <br>また、糸の材質や形状（PLACL／PDO）、コグの方向や強度も選定し、過度な引き上げによる違和感や内出血のリスクも最小限に。医師が肌や脂肪層の厚さ・張力を見極めながら丁寧に操作することで、<strong>“リフトアップはしたいけどバレたくない”という方にも適した、やさしい施術を実現</strong>しています。
                      </p>
                    </div>
                  </div>
                </article>
                <article class="fl-style01-item">
                  <h2 class="fl-style01-item-ttl"><span class="list-no">03</span>一人ひとりに最適化された“構造的リフトアップ”</h2>
                  <div class="d-fl fl-style01-item-content">
                    <figure>
                      <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/thread-lift_reason03.webp" alt="一人ひとりに最適化された“構造的リフトアップ”">
                    </figure>
                    <div class="fl-style01-item-content-txt">
                      <p>
                        たるみの原因は、骨格、皮下脂肪の量と位置、靭帯のゆるみ、皮膚の質など人によってまったく異なります。リアンクリニックでは、まず顔の構造や加齢変化の傾向を細かく診断し、どの方向に、どの深さで、どの強度の糸をどう入れるかを<strong>完全にオーダーメイドで設計</strong>します。
                        <br>解剖学的な理解をもとに、靭帯や脂肪の支持構造を考慮して設計することで、単に皮膚を引っ張るだけでは得られない自然な若返りを実現します。また、<strong>たるみの「原因」に対してアプローチするため、戻りが少なく、治療効果が長続きしやすいのも大きな特長</strong>です。
                        <br>美しさの土台を支える“構造的リフトアップ”だからこそ、仕上がりが自然で<strong>「何をしたか分からないけど若く見える」と言われるような治療が可能</strong>になります。
                      </p>
                    </div>
                  </div>
                </article>
              </div>
            </div>
          </div>
        </div>

        
        <div id="flow" class="sl-flow lip">

          <!-- 糸リフト治療の流れ -->  
          <div class="menu-inn sl-flow-inn">
            <div class="sl-flow-inn-ttl subpage-ttl menu-inn-ttl">
              <h2 class="under-line">糸リフト治療の流れ</h2>
            </div>
            <div class="sl-flow-inn-content">
              <div class="d-fl fl-style03">
                <article class="fl-style03-item">
                  <h3><span class="list-no">01</span>ご予約</h3>
                  <figure>
                    <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/thread-lift_flow_01.webp" alt="flow">
                  </figure>
                  <p>まずは<a href="https://lianclinic.net/inquiry/">お問い合わせフォーム</a>、<a href="https://lin.ee/U5tTSaw" target="_blank">LINE予約</a>または<a href="tel:03-3470-5678">お電話</a>よりご予約ください。</p>
                </article>
                <article class="fl-style03-item">
                  <h3><span class="list-no">02</span>診断</h3>
                  <figure>
                    <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/thread-lift_flow_02.webp" alt="flow">
                  </figure>
                  <p>たるみの原因は個人差があり、その方の目指すところもそれぞれ。医師がお顔を拝見し診断させて頂きます。</p>
                </article>
                <article class="fl-style03-item">
                  <h3><span class="list-no">03</span>デザイン</h3>
                  <figure>
                    <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/thread-lift_flow_03.webp" alt="flow">
                  </figure>
                  <p>無理なくナチュラルに引き上がる軌道を設計。実際にお顔にマーキングを行います。</p>
                </article>
                <article class="fl-style03-item">
                  <h3><span class="list-no">04</span>施術</h3>
                  <figure>
                    <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/thread-lift_flow_04.webp" alt="flow">
                  </figure>
                  <p>局所麻酔を行い、丁寧に糸を挿入します。施術時間は約30~60分程度です。<br>ご希望の場合は笑気麻酔下で行えます（※オプション料金発生）</p>
                </article>
                <article class="fl-style03-item">
                  <h3><span class="list-no">05</span>施術後</h3>
                  <figure>
                    <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/thread-lift_flow_05.webp" alt="flow">
                  </figure>
                  <p>そのままご帰宅可能です。腫れや内出血は個人差がありますが、数日~1週間ほどで落ち着きます。</p>
                </article>
              </div>
            </div>
          </div>
        
          <!-- 糸リフトの症例写真 -->
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
                        <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/thread-lift_case_01.webp" alt="症例写真">
                      </figure>
                      <div class="content">
                        <dl>
                          <dt>施術名</dt>
                          <dd>ペインレスロングスレッド</dd>
                        </dl>
                        <dl>
                          <dt>施術の説明</dt>
                          <dd>特殊なトゲ（コグ）のついた医療用の糸を皮下に挿入し、たるんだ皮膚や脂肪を物理的に引き上げることで、フェイスラインを整える治療です。</dd>
                        </dl>
                        <dl>
                          <dt>施術の副作用(リスク)</dt>
                          <dd>腫れ、内出血、違和感、つっぱり感(数日~1週間程度)、引きつれ、血腫、疼痛</dd>
                        </dl>
                        <dl>
                          <dt>施術の価格</dt>
                          <dd>¥330,000</dd>
                        </dl>
                      </div>
                    </a>
                  </article>

                  <article>
                    <a class="fl-style04-fl d-fl" target="_blank" rel="nofollow noreferrer">
                      <figure>
                        <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/thread-lift_case_02.webp" alt="症例写真">
                      </figure>
                      <div class="content">
                        <dl>
                          <dt>施術名</dt>
                          <dd>ペインレスロングスレッド</dd>
                        </dl>
                        <dl>
                          <dt>施術の説明</dt>
                          <dd>特殊なトゲ（コグ）のついた医療用の糸を皮下に挿入し、たるんだ皮膚や脂肪を物理的に引き上げることで、フェイスラインを整える治療です。</dd>
                        </dl>
                        <dl>
                          <dt>施術の副作用(リスク)</dt>
                          <dd>腫れ、内出血、違和感、つっぱり感(数日~1週間程度)、引きつれ、血腫、疼痛</dd>
                        </dl>
                        <dl>
                          <dt>施術の価格</dt>
                          <dd>¥330,000</dd>
                        </dl>
                      </div>
                    </a>
                  </article>

                  <article>
                    <a class="fl-style04-fl d-fl" target="_blank" rel="nofollow noreferrer">
                      <figure>
                        <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/thread-lift_case_03.webp" alt="症例写真">
                      </figure>
                      <div class="content">
                        <dl>
                          <dt>施術名</dt>
                          <dd>ペインレスロングスレッド</dd>
                        </dl>
                        <dl>
                          <dt>施術の説明</dt>
                          <dd>特殊なトゲ（コグ）のついた医療用の糸を皮下に挿入し、たるんだ皮膚や脂肪を物理的に引き上げることで、フェイスラインを整える治療です。</dd>
                        </dl>
                        <dl>
                          <dt>施術の副作用(リスク)</dt>
                          <dd>腫れ、内出血、違和感、つっぱり感(数日~1週間程度)、引きつれ、血腫、疼痛</dd>
                        </dl>
                        <dl>
                          <dt>施術の価格</dt>
                          <dd>¥330,000</dd>
                        </dl>
                      </div>
                    </a>
                  </article>

                </div>
              </div>
            </div>
          </div>

        </div>

        <!-- 組み合わせると効果的な施術 -->
        <div id="connection" class="">
          <div class="menu-inn">
            <div class="sl-connection-inn-ttl subpage-ttl menu-inn-ttl "><h2 class="under-line">組み合わせると効果的な施術</h2></div>
            <div class="sl-connection-inn-content">

                <div class="sl-connection-inn-con">
                    <div class="connect__flex">
                      <div class="connect__texts">
                        <h3>ヒアルロン酸</h3>
                        <p class="connect__desc">ヒアルロン酸は皮膚や関節など、私たちの体内に広く存在する天然の物質です。</p>
                        <div class="connect-worries">
                          <p>【このようなお悩みにおすすめ】</p>
                          <p>ボリューム補正／リフトアップ効果の持続性UP</p>
                        </div>
                        <div class="menu-btn more-btn">
                          <a href="<?php echo home_url('/services/hyaluronic/'); ?>">詳しくはこちら</a>
                        </div>
                      </div>
                      <div class="connect__img">
                        <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/services/services-hyaluronic.jpg" alt="ヒアルロン酸" />
                      </div>
                    </div>
                </div>
                <div class="sl-connection-inn-con">
                  <div class="connect__flex">
                    <div class="connect__texts">
                      <h3>高周波治療</h3>
                      <p class="connect__desc">ザーフ・ボルニューマなど</p>
                      <div class="connect-worries">
                        <p>【このようなお悩みにおすすめ】</p>
                        <p>肌の引き締め／ハリ感アップ</p>
                      </div>
                      <div class="menu-btn more-btn">
                        <a href="<?php echo home_url('/services/xerf/'); ?>">XERF'ザーフ'はこちら</a>
                      </div>
                      <div class="menu-btn more-btn">
                        <a href="<?php echo home_url('/services/volnewmer/'); ?>">ボルニューマはこちら</a>
                      </div>
                    </div>
                    <div class="connect__img">
                      <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/services/services-xerf.jpg" alt="XERF" />
                    </div>
                  </div>
                </div>
                <div class="sl-connection-inn-con">
                    <div class="connect__flex">
                      <div class="connect__texts">
                        <h3>デザイニングハイフ</h3>
                        <p class="connect__desc">HIFU（ハイフ）とは、高密度の超音波エネルギーをSMAS筋膜、皮下組織・真皮に熱を与え、たるみの引き締め・引き上げの効果が期待できる施術です。</p>
                        <div class="connect-worries">
                          <p>【このようなお悩みにおすすめ】</p>
                          <p>引き締め／穏やかな引き上げ</p>
                        </div>
                        <div class="menu-btn more-btn">
                          <a href="<?php echo home_url('/services/hifu/'); ?>">詳しくはこちら</a>
                        </div>
                      </div>
                      <div class="connect__img">
                        <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/services/services-04.jpg" alt="HIFU" />
                      </div>
                    </div>
                </div>
                
            </div>
          </div>
        </div>

        <!-- 料金について -->
        <div id="price" class="sl-price lip">
          <div class="menu-inn sl-price-inn">
            <div class="sl-price-inn-ttl subpage-ttl menu-inn-ttl">
              <h2 class="under-line pc">料金について</h2>
              <h2 class="under-line sp">料金</h2>
            </div>
            <div class="sl-price-inn-content">
              <div class="price">
                <div class="price-list">
                    <div class="d-fl price-list-wr">
                      <div class="price-list-wr-l">
                        <h3>フルオーダーメイド糸リフト</h3>
                        <ul>
                          <li class="d-fl">
                            <p>通常価格</p>
                            <p class="dash-line"></p>
                            <p>330,000円</p>
                          </li>
                        </ul>
                      </div>
                      <div class="price-list-wr-l">
                        <h3>オプション</h3>
                        <ul>
                          <li class="d-fl">
                            <p>笑気麻酔</p>
                            <p class="dash-line"></p>
                            <p>13,200円</p>
                          </li>
                          <li class="d-fl">
                            <p>ブロック麻酔 一部位あたり</p>
                            <p class="dash-line"></p>
                            <p>3,300円</p>
                          </li>
                        </ul>
                      </div>
                    </div>
                    <div class="price-list-wr-l" style="margin: 0 auto; padding: 0; width: 100%;">
                      <h3>ヒアルロン酸</h3>
                      <ul>
                        <li class="d-fl">
                          <p>アラガン社製・ガルデルマ社製</p>
                          <p class="dash-line"></p>
                          <p>1ccあたり 77,000円</p>
                        </li>
                        <li class="d-fl">
                          <p>韓国製（AVALON）</p>
                          <p class="dash-line"></p>
                          <p>1ccあたり 55,000円</p>
                        </li>
                      </ul>
                    </div>
                  </div>
                  <p class="price-list-warn" style="margin-top: 1em;">※ 価格は税込です。<br>※ 上記ヒアルロン酸は糸リフトと同日施術された場合の価格です。<br>※ 韓国製は鼻翼基部・顎・頬こけのみの注入可。</p>
              </div>
            </div>
          </div>
        </div>

        <!-- 糸リフトの注意事項 -->
        <div id="precautions" class="sl-precautions">
          <div class="menu-inn sl-precautions-inn">
            <div class="sl-precautions-inn-ttl subpage-ttl menu-inn-ttl">
              <h2 class="under-line">糸リフトの注意事項</h2>
            </div>
            <div class="sl-precautions-inn-content">
              <div class="precautions-list">
                <div class="defination-fl">
                  <dl>
                    <dt>所要時間</dt>
                    <dd>30～60分程度</dd>
                  </dl>
                  <dl>
                    <dt>洗顔・入浴・メイク</dt>
                    <dd>
                      当日から洗顔・シャワー可能(洗顔は優しく)
                      <br>メイク・入浴・飲酒は翌日から（刺入部位は１週間はメイクをお控えください）
                    </dd>
                  </dl>
                  <dl>
                    <dt>副作用・ダウンタイム</dt>
                    <dd>腫れ、内出血、違和感、つっぱり感(数日~1週間程度)、引きつれ、血腫、疼痛</dd>
                  </dl>
                  <dl>
                    <dt>注意事項</dt>
                    <dd>術後は過度なマッサージ・大きな口の開閉は1週間程度控えてください。</dd>
                  </dl>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- よくある質問 -->
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
                    'terms' => 'thread-lift'
                  ),
                ),
                'post_type' => 'faq',
                'post_status' => 'publish',
                'posts_per_page' => 99,
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
                <a href="<?php echo home_url('/faq/') ?>" rel="alternate">VIEW MORE</a>
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
                <p>LINEでの24時間ネット予約はこちらから</p>
                <?php $contactTxt01 = CFS()->get('text01');
                $contactTxt02 = CFS()->get('text02');
                if ($contactTxt01 != '') : ?>
                  <h3><span class="l-slash">\ </span> <?php echo $contactTxt01; ?><br class="sp" /><?php echo $contactTxt02; ?> <span class="r-slash"> /</span></h3>
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
        
      </div>
    </div>
    <?php get_template_part('footer-company'); ?>
  </main>
</div>
<?php
get_footer();
