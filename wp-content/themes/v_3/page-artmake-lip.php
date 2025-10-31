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
    <div id="menu"  class="sl-menu menu-lip">
      <div class="sl-menu-content">
        <div id="whatis" class="sl-whatis">
          <div class="menu-inn sl-whatis-inn attach-mv">
            <div class="sl-whatis-inn-ttl subpage-ttl menu-inn-ttl">
              <h2 class="under-line">リップアートメイクとは</h2>
            </div>
            <div class="sl-whatis-inn-content">
              <div class="d-fl whatis-detailup">
                <figure>
                  <img src="<?php echo get_template_directory_uri(); ?>/img/lips/sub-whatislip-img01.png" alt="リップアートメイクとは">
                </figure>
                <div class="whatis-detailup-txt">
                  <p><strong>アートメイクとは、専用の針を使用し皮膚の中に色素を注入していく施術法</strong>のことです。特に眉毛のアートメイクは近年多くの方が施術していて知名度もかなり上がっていますね。</p>
                  <p><span class="color-02">リップのアートメイクは、唇に直接色素を注入していくアートメイクの施術</span>です。これにより、唇自体の色味を変えたり、形を整えたりすることが可能になります。</p>
                  <p><strong>リップアートメイクは定着してから1年〜3年ほど持続</strong>します。その間は<strong>常に理想的な唇で毎日を過ごすことができる</strong>のが嬉しいところです。</p>
                </div>
              </div>
              <div class="d-fl whatis-detailbot">
                <div class="whatis-detailbot-txt">
                  <p>ちなみに、よく比較される<strong>タトゥーとアートメイクの違い</strong>に関しては、色素を入れる皮膚の深さにあります。</p>
                  <p>この図のとおり、タトゥーが<strong>真皮部分に色素を注入する</strong>のに比較して、アートメイクは<strong>表皮部分に色素を注入</strong>しています。<br>
                    これにより、タトゥーは何年経っても消えることがなく、アートメイクは数年で消えていくという違いが生まれるというわけです。</p>
                </div>
                <figure>
                  <img class="pc" src="<?php echo get_template_directory_uri(); ?>/img/sub-whatis-img-02.jpg"
                    alt="what is">
                  <img class="sp" src="<?php echo get_template_directory_uri(); ?>/img/sub-whatis-img-sp-02.png"
                    alt="what is">
                </figure>
              </div>
            </div>
          </div>
        </div>
        <div id="problems" class="sl-problems">
          <div class="menu-inn sl-problems-inn">
            <div class="sl-problems-inn-ttl subpage-ttl menu-inn-ttl">
              <h2 class="under-line">リップアートメイクで<br class="sp">解決できる6つの悩み</h2>
            </div>
            <div class="sl-problems-inn-content">
              <div class="pg-text">
                <p><strong>これらのお悩みに当てはまるものがあれば、リップアートメイクで解決することが可能</strong>であるということ。<br>それでは、それぞれのお悩みについて詳しく解説していきましょう。</p>
              </div>
              <div class="problems-bg">
                <figure>
                  <img class="pc" src="<?php echo get_template_directory_uri(); ?>/img/menu/menu-links-lip.png" alt="menu">
                  <img class="sp" src="<?php echo get_template_directory_uri(); ?>/img/sub-problems-bg.png" alt="menu">
                </figure>
                <figure class="sp menu-links-sp">
                  <img src="<?php echo get_template_directory_uri(); ?>/img/menu/menu-links-lip-sp.png" alt="menu">
                </figure>
              </div>
              <div class="pg-text">
                <p>これらのお悩みに当てはまるものがあれば、リップアートメイクで解決することが可能であるということ。<br>
                  それでは、それぞれのお悩みについて詳しく解説していきましょう。</p>
              </div>
              <div class="fl-style01">
                <article class="fl-style01-item">
                  <h2 class="fl-style01-item-ttl"><span class="list-no">01</span>毎日のメイクが面倒</h2>
                  <div class="d-fl fl-style01-item-content">
                    <figure>
                      <img src="<?php echo get_template_directory_uri(); ?>/img/lips/lip-problems-img01.png"
                        alt="lip problems">
                    </figure>
                    <div class="fl-style01-item-content-txt">
                      <p>毎日唇のメイクに時間をたっぷりかけている方も多いのではないでしょうか。ベースを整え、輪郭をリップライナーでふちどり、そこにお気に入りの口紅を塗って‥。<br>
                        <span class="color-02"><strong>毎日のメイクに時間がかかり面倒だと感じているなら、リップアートメイクはとてもおすすめ</strong></span>です。
                        リップアートメイクをすることで、リップはすでに輪郭や色味が出来上がった状態となるので、そのままもしくは簡単にグロスを塗るくらいで完成します。<strong>メイクの手間は格段に減り、朝の時間をより有意義に過ごせます。</strong>
                        <br>また今のコロナでマスクをしているため、マスクに口紅が付着するのも嫌ですよね。
                      </p>
                    </div>
                  </div>
                </article>
                <article class="fl-style01-item">
                  <h2 class="fl-style01-item-ttl"><span class="list-no">02</strong></span>唇の血色を良く見せたい</h2>
                  <div class="d-fl fl-style01-item-content">
                    <figure>
                      <img src="<?php echo get_template_directory_uri(); ?>/img/lips/lip-problems-img02.png"
                        alt="lip problems">
                    </figure>
                    <div class="fl-style01-item-content-txt">
                      <p>唇の色は人によりかなり個人差があります。色が極端に薄い方や、色味がやや暗めだったり紫がかっていたりすると、どうしても気になってしまうでしょう。<br>
                        <strong>顔の印象は唇のカラーでかなり影響されることが知られています。</strong><br>
                        <span class="color-02"><strong>唇の血色を良く見せたい、という場合にもリップアートメイクはぴったり</strong></span>です。お顔のトーンに似合う唇の色をアートメイクでしっかり定着させていれば、常に<strong>血色の良いいきいきとした魅力的な唇をキープする</strong>ことができます。
                      </p>
                    </div>
                  </div>
                </article>
                <article class="fl-style01-item">
                  <h2 class="fl-style01-item-ttl"><span class="list-no">03</strong></span>リップラインを<br class="sp">くっきりさせたい</h2>
                  <div class="d-fl fl-style01-item-content">
                    <figure>
                      <img src="<?php echo get_template_directory_uri(); ?>/img/lips/lip-problems-img03.png"
                        alt="lip problems">
                    </figure>
                    <div class="fl-style01-item-content-txt">
                      <p>人によってはリップライン（唇の輪郭）がくっきりしていない方もいます。この場合は、リップライナーなどを使用し、輪郭を少しはっきりさせるだけでぐっと印象が変わります。<br>
                        <span class="color-02"><strong>リップラインはとても重要なポイントですが、リップアートメイクでこのリップラインをはっきりと目立たせることも可能</strong></span>です。あまり目立ちすぎるとかえって不自然になると思われる場合は、ぼかしたリップラインをデザインで選択することもできます。
                        <strong>輪郭が決まっていれば、そこからメイクを重ねる際にもとても簡単</strong>ですよ。
                      </p>
                    </div>
                  </div>
                </article>
                <article class="fl-style01-item">
                  <h2 class="fl-style01-item-ttl"><span class="list-no">04</strong></span>唇に厚みを持たせたい</h2>
                  <div class="d-fl fl-style01-item-content">
                    <figure>
                      <img src="<?php echo get_template_directory_uri(); ?>/img/lips/lip-problems-img04.png"
                        alt="lip problems">
                    </figure>
                    <div class="fl-style01-item-content-txt">
                      <p>近年では、海外セレブなどの影響もあってか、ややぷっくりしたボリュームのあるリップが人気です。<span class="color-02"><strong>唇が薄いため厚みを出したい場合にもリップアートメイクが有効</strong></span>です。<br>
                        唇自体を実際に厚くすることはできませんが、<strong>カラーの入れ方や輪郭の取り方で、今よりもさらにぷっくりしたリップを完成させる</strong>ことができます。</p>
                    </div>
                  </div>
                </article>
                <article class="fl-style01-item">
                  <h2 class="fl-style01-item-ttl"><span class="list-no">05</strong></span>口角を上げたい</h2>
                  <div class="d-fl fl-style01-item-content">
                    <figure>
                      <img src="<?php echo get_template_directory_uri(); ?>/img/lips/lip-problems-img05.png"
                        alt="lip problems">
                    </figure>
                    <div class="fl-style01-item-content-txt">
                      <p>リップの口角が下がっていると、疲れているように見えたり、不健康に見えたりしてしまいます。ほんの少しだけ広角が上がれば、それだけでパッと華やかで若々しい印象に変わるので不思議ですね。<br>
                        <span class="color-02"><strong>口角が下がっていることでお悩みの場合には、リップアートメイクで口角を少し上げることが可能</strong></span>です。もちろん唇自体の形を変えるわけではありませんが、<strong>輪郭の取り方やカラーの調整で、実際に口角が上がったように見せる</strong>ことができます。
                      </p>
                    </div>
                  </div>
                </article>
                <article class="fl-style01-item">
                  <h2 class="fl-style01-item-ttl"><span class="list-no">06</strong></span>すっぴんでも自信を持ちたい</h2>
                  <div class="d-fl fl-style01-item-content">
                    <figure>
                      <img src="<?php echo get_template_directory_uri(); ?>/img/lips/lip-problems-img06.png"
                        alt="lip problems">
                    </figure>
                    <div class="fl-style01-item-content-txt">
                      <p>アートメイクに興味を持つ方の多くは、<strong>「メイクをしなくても自信を持てるようになりたい」</strong>という思いを持っているでしょう。<br>
                        すっぴんで特に気になる箇所として代表的なのが、眉毛や唇、そして目元。これらが一通り完成していれば、すっぴんでも自信を持って外出することができるようになります。<br>
                        リップアートメイクをすると、リップの印象がぐっと魅力的になるため、すっぴんでも<span class="color-02"><strong>すっぴんであることを感じさせない、ナチュラルメイクを施したような雰囲気</strong></span>になります。<br>
                        これまで<strong>すっぴんで外に出るなんてとんでもない！</strong>と思っていたお客様も、今ではほとんどメイクをせずに外出されていますよ。</p>
                    </div>
                  </div>
                </article>
              </div>
            </div>
          </div>
        </div>
        <div id="failcase" class="sl-failcase">
          <div class="menu-inn sl-failcase-inn">
            <div class="sl-failcase-inn-ttl subpage-ttl menu-inn-ttl">
              <h2 class="under-line">リップアートメイクで<br class="sp">失敗する2つのケース</h2>
            </div>
            <div class="sl-failcase-inn-content">
              <div class="sl-failcase-inn-content-info pg-text">
                <p>リップアートメイクは100％成功するものではありません。<span class="color-02"><strong>失敗してしまうリスクは常にある</strong></span>と思っておく必要があるでしょう。<br>
                ※この後でしっかりと<strong>失敗を確実に防ぐ方法</strong>も詳しく解説していきますのでご安心くださいね！<br>
                ここでは、<strong>リップアートメイクが失敗するとはどのようなことを指すのか、</strong>具体的な失敗ケースを2つのポイントに分けて紹介しておきます。</p>
              </div>
              <div class="list-style01">
                <div class="list-style01-item">
                  <h2 class="list-style01-item-ttl"><span class="list-no">01</span>デザインが希望通りにならない</h2>
                  <div class="list-style01-item-txt">
                    <p>リップアートメイクの失敗ケースとしてまず挙げられるのが、デザインがイメージしていた通りに完成しなかったケースです。<br>
                      例えば、「輪郭はあまり目立たせずナチュラルな仕上がりにしたかった」のに関わらず、完成したリップが「輪郭がくっきりしていて念入りにメイクをしたお顔にマッチする仕上がり」だとしたらどうでしょう。<br>
                      このような事態が起こるとすれば、その理由は2つのうちいずれかであると考えられます。</p>
                    <div class="disc-list">
                      <ul class="disc-list-wr">
                        <li class="d-fl"><span>・</span><p>施術者の技術の問題</p></li>
                        <li class="d-fl"><span>・</span><p>施術前のカウンセリングが不十分</p></li>
                      </ul>
                    </div>
                    <p>つまり、<span class="color-02"><strong>施術者に確かな技術があり、十分なカウンセリングを行なっていればこのような失敗が起こることはありません。</strong></span></p>
                  </div>
                </div>
                <div class="list-style01-item">
                  <h2 class="list-style01-item-ttl"><span class="list-no">02</span>唇にダメージを与えてしまう</h2>
                  <div class="list-style01-item-txt">
                    <p>リップアートメイクをしたことで、<strong>唇に傷が残ってしまったり、長期間にわたり腫れや痛みが引かなかったりするケースも失敗</strong>と言えます。<br>
                      アートメイクは少なからず皮膚にダメージを与えるもの。針を使用して皮膚の中に色素を入れているわけですから、場合によっては必要以上のダメージを残してしまうことも可能性としてはあります。<br>
                      この失敗ケースが起こる原因として考えられるのは以下の3つでしょう。</p>
                      <div class="disc-list">
                        <ul class="disc-list-wr">
                          <li class="d-fl"><span>・</span><p>アートメイクの専用針が清潔でなかった</p></li>
                          <li class="d-fl"><span>・</span><p>設備の衛生管理が不十分だった</p></li>
                          <li class="d-fl"><span>・</span><p>注入するインク自体に安全面の問題があった</p></li>
                        </ul>
                      </div>
                    <p><span class="color-02"><strong>アートメイクは医療行為です。</strong></span>そのため、エステサロンなどでの施術は法律違反となります。ただ、現実には多くの違法サロンがアートメイク施術を行なっています。<br>
                      器具や設備に問題があり<span class="color-02"><strong>アートメイクの健康被害が出るケースのほとんどが違法サロン。</strong></span>いくら格安であってもこのような違法サロンは避け、クリニックを選ぶ必要がありますね。</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div id="disadvantage" class="sl-disadvantage">
          <div class="menu-inn sl-disadvantage-inn">
            <div class="sl-disadvantage-inn-ttl subpage-ttl menu-inn-ttl">
              <h2 class="under-line">リップアートメイクの<br class="sp">2つのデメリット</h2>
            </div>
            <div class="sl-disadvantage-inn-content">
              <div class="sl-disadvantage-inn-content-info pg-text">
                <p>メリットばかりが目立つリップアートメイクですが、デメリットについても挙げておきましょう。<br>
                  リップアートメイクで注意すべきデメリットは主に2つです。</p>
              </div>
              <div class="fl-style01">
                <article class="fl-style01-item">
                  <h2 class="fl-style01-item-ttl"><span class="list-no">01</span>簡単に消すことができない</h2>
                  <div class="d-fl fl-style01-item-content">
                    <figure>
                      <img src="<?php echo get_template_directory_uri(); ?>/img/lips/lip-disadvantage-img01.png"
                        alt="disadvantage">
                    </figure>
                    <div class="fl-style01-item-content-txt">
                      <p>
                        <span class="color-02"><strong>「一度入れてしまうと簡単に消すことができない」という点</strong></span>は、リップに限らずアートメイク全般に言えるデメリットです。消えないことはメリットですが、場合によってはデメリットにもなり得ます。<br>
                        リップアートメイクの施術を受ける際には、「永遠に消えてほしくない」と思える完成度を目指しましょう。そのために欠かせないのが、<strong>失敗のないクリニックを選ぶ</strong>こと。この方法については後ほど詳しく紹介しますね。
                      </p>
                    </div>
                  </div>
                </article>
                <article class="fl-style01-item">
                  <h2 class="fl-style01-item-ttl"><span class="list-no">02</span>ヘルペスを発症する<br class="sp">可能性がある
                  </h2>
                  <div class="d-fl fl-style01-item-content">
                    <figure>
                      <img src="<?php echo get_template_directory_uri(); ?>/img/lips/lip-disadvantage-img02.png"
                        alt="disadvantage">
                    </figure>
                    <div class="fl-style01-item-content-txt">
                      <p>リップアートメイクの施術により、<strong>口唇ヘルペス</strong>(※1)を発症する可能性があります。<br>
                      ヘルペスの不安がある方でもLIANクリニックでは予防内服薬を¥1,500(+税)、口唇ヘルペスの既往がある方には¥3,000(+税)にてご用意しておりますので安心して施術を受けることができます。<br>
                        ※既往の人にはお出しする錠剤が多くなるため、お値段が高くなります。
                      </p>
                    </div>
                  </div>
                </article>
              </div>
              <div class="disadvantage-definition">
                <dl>
                  <dt>※1：口唇ヘルペスとは</dt>
                  <dd>
                    単純ヘルペスウイルスが皮膚や粘膜に感染して引き起こされ、痛みやかゆみを伴う水疱ができる病気のこと。ウイルスを保有していても自覚症状のない方が大半ですが、局所刺激や疲れにより症状が現れることがあります。
                  </dd>
                </dl>
              </div>
            </div>
          </div>
        </div>
        <div id="pain" class="sl-pain">
          <div class="menu-inn sl-pain-inn">
            <div class="sl-pain-inn-ttl subpage-ttl menu-inn-ttl">
              <h2 class="under-line">施術中の痛みについて</h2>
            </div>
            <div class="sl-pain-inn-content">
              <div class="d-fl pain-fl">
                <figure>
                  <img src="<?php echo get_template_directory_uri(); ?>/img/lips/pain-img.png" alt="施術中の痛みについて">
                </figure>
                <div class="pain-txt">
                  <p>アートメイクは施術部位によって痛みの程度が異なりますが、<span class="color-02"><strong>リップは皮膚がとても薄く痛みを比較的感じやすい部位</strong></span>となります。</p>
                  <p>通常、リップアートメイクの際には1種類の麻酔のみを使用するクリニックがほとんどですが、<strong>私たちLIANクリニックではアートメイクの施術の際に2種類の麻酔を使用し、極力痛みのない施術を実現しています。</strong></p>
                  <p><u>痛みに弱い方でも安心して施術が受けられるように配慮していますのでご安心ください。</u></p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div id="downtime" class="sl-downtime">
          <div class="menu-inn sl-downtime-inn">
            <div class="sl-downtime-inn-ttl subpage-ttl menu-inn-ttl">
              <h2 class="under-line">リップアートメイクには<br class="sp">ダウンタイムがある</h2>
            </div>
            <div class="sl-downtime-inn-content">
              <div class="pg-text">
                <p>リップアートメイクにはダウンタイムがあります。<strong>ダウンタイムの期間はおおよそ1週間程度。</strong>この間は以下の点に注意しましょう。</p>
              </div>
              <div class="disc-list">
                <ul class="disc-list-wr">
                  <li class="d-fl"><span>・</span><p>激しい運動は控える</p></li>
                  <li class="d-fl"><span>・</span><p>できるだけこすらない、触らない</p></li>
                  <li class="d-fl"><span>・</span><p>メイクはNG</p></li>
                  <li class="d-fl"><span>・</span><p>毎日ワセリンなどで念入りに保湿</p></li>
                </ul>
              </div>
              <div class="pg-text">
                <p><strong>ダウンタイムの過ごし方で色素の定着度合いが変わる</strong>こともあります。極力リップ部分に負担をかけないように細心の注意を払いましょう。</p>
              </div>
            </div>
          </div>
        </div>
        <div id="clinic" class="sl-clinic">
          <div class="menu-inn sl-clinic-inn">
            <div class="sl-clinic-inn-ttl subpage-ttl menu-inn-ttl">
              <h2 class="under-line">リップアートメイクで<br class="sp">絶対に失敗のない<br class="sp">クリニックを選ぶ3つの方法</h2>
            </div>
            <div class="sl-clinic-inn-content">
              <div class="sl-clinic-inn-content-info pg-text">
                <p><strong>リップアートメイクを成功させるために欠かせないのが「失敗のないクリニックを選ぶこと」です。</strong><br>
                  ここでは、何を基準にリップアートメイクのクリニックを選べば良いか、<span class="color-02"><strong>見極める際の3つのポイント</strong></span>について紹介します。<br>
                  なお、この項目では<strong>違法サロンをはじめ、安全面や衛生面が徹底されていないクリニックについては触れていません。</strong>これらは論外とした上で、クリニックを選ぶ方法としてご理解ください。</p>
              </div>
              <div class="fl-style01">
                <article class="fl-style01-item">
                  <h2 class="fl-style01-item-ttl"><span class="list-no">01</span>カウンセリングを<br class="sp">徹底しているクリニック</h2>
                  <div class="d-fl fl-style01-item-content">
                    <figure>
                      <img src="<?php echo get_template_directory_uri(); ?>/img/lips/lip-clinic-img01.png"
                        alt="カウンセリングを徹底しているクリニック">
                    </figure>
                    <div class="fl-style01-item-content-txt">
                      <p>アートメイクはどの部位の施術であっても、<strong>カウンセリング</strong>を入念にすることがとても重要なポイントとなります。<br>
                        アートメイク施術の注意点や、施術内容の詳細について丁寧な説明をしてもらえるクリニックを選びましょう。また、カウンセリングの際には<strong>具体的に希望している完成イメージを正確に施術者に伝えておく</strong>ことが大切です。<br>
                        <span class="color-02"><strong>入念なカウンセリングは、アートメイクの失敗を防ぐために最も重要な部分であると言っても過言ではありません。</strong></span>
                      </p>
                    </div>
                  </div>
                </article>
                <article class="fl-style01-item">
                  <h2 class="fl-style01-item-ttl"><span class="list-no">02</span>実績が多く症例写真を<br class="sp">確認できるクリニック</h2>
                  <div class="d-fl fl-style01-item-content">
                    <figure>
                      <img src="<?php echo get_template_directory_uri(); ?>/img/lips/lip-clinic-img02.png"
                        alt="実績が多く症例写真を確認できるクリニック">
                    </figure>
                    <div class="fl-style01-item-content-txt">
                      <p>クリニックを選ぶ際には、これまでの実績が十分にあり、実際の症例写真が確認できるクリニックを選ぶと良いです。<br>
                        症例写真がホームページなどにもほとんど掲載されていない、実績となる件数が書かれていない、などのクリニックも多く存在します。より安心して施術を受けるために、
                        <span class="color-02"><strong>施術者の実績（これまでの施術件数など）や症例写真を確認した上でクリニックを選びましょう。</strong></span>
                      </p>
                    </div>
                  </div>
                </article>
                <article class="fl-style01-item">
                  <h2 class="fl-style01-item-ttl"><span class="list-no">03</span>アフターフォローが<br class="sp">充実しているクリニック</h2>
                  <div class="d-fl fl-style01-item-content">
                    <figure>
                      <img src="<?php echo get_template_directory_uri(); ?>/img/lips/lip-clinic-img03.png"
                        alt="アフターフォローが充実しているクリニック">
                    </figure>
                    <div class="fl-style01-item-content-txt">
                      <p>アートメイクは1度施術をしたら完了！というほどシンプルなものではありません。<br>
                        リップのアートメイクに関しても、他の部位と同じく施術回数は基本2回がセット。2回の施術を終えてからも、場合によってはリタッチが必要なケースもあります。<br>
                        <span class="color-02"><strong>施術を受けたらそれで終わり、ではなく施術後のアフターフォローが充実しているクリニックを選びましょう。</strong></span>
                      </p>
                    </div>
                  </div>
                </article>
              </div>
            </div>
          </div>
        </div>
        <div id="pm" class="sl-pm">
          <div class="menu-inn sl-pm-inn">
            <div class="sl-pm-inn-ttl subpage-ttl menu-inn-ttl">
              <h2 class="under-line">LIANクリニックの<br class="sp">リップアートメイク</h2>
            </div>
            <div class="sl-pm-inn-content">
              <div class="pg-text">
                <p><strong>私たちLIANクリニックでは、初めてアートメイクに挑戦される方でも不安なく施術を受けていただくことができます。</strong><br>
                  ここでは、当院のアートメイクについて、</p>
              </div>
              <div class="check-list">
                <ul class="check-list-wr">
                  <li>LIANクリニック3つの特徴</li>
                  <li>料金について</li>
                  <li>実際のお客様の症例写真</li>
                  <li>施術の流れ</li>
                  <li>施術を受けられたお客様の感想</li>
                </ul>
              </div>
              <div class="pg-text">
                <p>以上5つのポイントにまとめ、詳しく紹介していきます。</p>
              </div>
            </div>
          </div>
        </div>
        <div id="features" class="sl-features">
          <div class="menu-inn sl-features-inn">
            <div class="sl-features-inn-ttl subpage-ttl menu-inn-ttl">
              <h2 class="under-line">3つの特徴</h2>
            </div>
            <div class="sl-features-inn-content">
              <div class="pg-text">
                <p>私たちLIANクリニックには以下のとおり<span class="color-02"><strong>3つの特徴</strong></span>があります。</p>
              </div>
              <div class="num-list">
                <ul class="num-list-wr">
                  <li class="d-fl"><span>①</span><p>ヒアリング×提案力</p></li>
                  <li class="d-fl"><span>②</span><p>700例以上の経験があるアーティストのみ在籍</p></li>
                  <li class="d-fl"><span>③</span><p>2種類の麻酔で痛みのない施術</p></li>
                </ul>
              </div>
              <div class="pg-text">
                <p>LIANクリニックは、お客様とのカウンセリングに最も力を入れています。<strong>お客様の希望されるデザインを把握した上で、ひとりひとりの骨格に合わせたデザインをこちらからもご提案</strong>します。<br>
                  また、施術を行うのは<strong>十分な経験を積んだアーティスト</strong>のみ。安心してお任せくださいませ。<br>
                  「アートメイクは痛い」という先入観から、興味はあるけれどなかなか一歩を踏み出せない、という方にも<strong>2種類の麻酔で極力痛みを感じさせない施術が可能<strong>なので、ぜひ当院でアートメイクデビューされてみてくださいね。
                </p>
              </div>
            </div>
          </div>
        </div>
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
                      <img src="<?php echo get_template_directory_uri(); ?>/img/case/lip-case01.png" alt="症例写真">
                    </figure>
                    <div class="content">
                      <dl>
                        <dt>施術名</dt>
                        <dd>リップアートメイク</dd>
                      </dl>
                      <dl>
                        <dt>施術の説明</dt>
                        <dd>皮膚の表面に色素を注入していきます</dd>
                      </dl>
                      <dl>
                        <dt>施術の副作用(リスク)</dt>
                        <dd>疼痛・内出血・口唇ヘルペス</dd>
                      </dl>
                      <dl>
                        <dt>施術の価格</dt>
                        <dd>¥54,800〜</dd>
                      </dl>
                    </div>
                  </a>
                </article>
                <article>
                  <a class="fl-style04-fl d-fl" target="_blank" rel="nofollow noreferrer">
                    <figure>
                      <img src="<?php echo get_template_directory_uri(); ?>/img/case/lip-case02.png" alt="症例写真">
                    </figure>
                    <div class="content">
                      <dl>
                        <dt>施術名</dt>
                        <dd>リップアートメイク</dd>
                      </dl>
                      <dl>
                        <dt>施術の説明</dt>
                        <dd>皮膚の表面に色素を注入していきます</dd>
                      </dl>
                      <dl>
                        <dt>施術の副作用(リスク)</dt>
                        <dd>疼痛・内出血・口唇ヘルペス</dd>
                      </dl>
                      <dl>
                        <dt>施術の価格</dt>
                        <dd>¥54,800〜</dd>
                      </dl>
                    </div>
                  </a>
                </article>
                <article>
                  <a class="fl-style04-fl d-fl" target="_blank" rel="nofollow noreferrer">
                    <figure>
                      <img src="<?php echo get_template_directory_uri(); ?>/img/case/lip-case03.png" alt="症例写真">
                    </figure>
                    <div class="content">
                      <dl>
                        <dt>施術名</dt>
                        <dd>リップアートメイク</dd>
                      </dl>
                      <dl>
                        <dt>施術の説明</dt>
                        <dd>皮膚の表面に色素を注入していきます</dd>
                      </dl>
                      <dl>
                        <dt>施術の副作用(リスク)</dt>
                        <dd>疼痛・内出血・口唇ヘルペス</dd>
                      </dl>
                      <dl>
                        <dt>施術の価格</dt>
                        <dd>¥54,800〜</dd>
                      </dl>
                    </div>
                  </a>
                </article>
              </div>
            </div>
          </div>
        </div>
        <div id="flow" class="sl-flow">
          <div class="menu-inn sl-flow-inn">
            <div class="sl-flow-inn-ttl subpage-ttl menu-inn-ttl">
              <h2 class="under-line pc">施術の流れ</h2>
              <h2 class="under-line sp">アートメイク施術の流れ</h2>
            </div>
            <div class="sl-flow-inn-content">
              <div class="sl-flow-inn-content-info pg-text">
                <p>私たちLIANクリニックではリップアートメイク施術を以下の6ステップの流れで行います。<br>それぞれのステップについて詳しく解説していきましょう。
                </p>
              </div>
              <div class="d-fl fl-style03">
                <article class="fl-style03-item">
                  <h3><span class="list-no">01</span>ヒアリング</h3>
                  <figure>
                    <img src="<?php echo get_template_directory_uri(); ?>/img/menu-02/lip-flow01.png" alt="flow">
                  </figure>
                  <p>初めにアートメイクの施術に関する流れをご説明。その後、お客様の普段のメイクをヒントに、お客様の「なりたい唇」をヒアリングします。
                    <br>アートメイクについて疑問や不安のある方は、ヒアリング時に何でもお気軽にお尋ねください。
                  </p>
                </article>
                <article class="fl-style03-item">
                  <h3><span class="list-no">02</span>デッサン</h3>
                  <figure>
                    <img src="<?php echo get_template_directory_uri(); ?>/img/menu-02/lip-flow02.png" alt="flow">
                  </figure>
                  <p>お客様の理想とするリップのデザインをデッサンで描いていきます。このときに、リップのデザイン（輪郭のとり方や色味について）に関するリクエストを詳細にお伝えください。
                    <br>お客様の元々の唇の形から大きくはみ出すオーバーリップや、明らかに無理のあるデザインなどは難しい場合がありますのであらかじめご了承くださいませ。
                  </p>
                </article>
                <article class="fl-style03-item">
                  <h3><span class="list-no">03</span>デザインのすり合わせ</h3>
                  <figure>
                    <img src="<?php echo get_template_directory_uri(); ?>/img/menu-02/lip-flow03.png" alt="flow">
                  </figure>
                  <p>施術者が描いたデッサンを、デジタルスケールを用いて最終確認いたします。<br>
                    その際に、鏡を見ながら少しずつ微調整を行ってまいります。この段階でお客様が100％納得された上で施術に入ります。</p>
                </article>
                <article class="fl-style03-item">
                  <h3><span class="list-no">04</span>麻酔</h3>
                  <figure>
                    <img src="<?php echo get_template_directory_uri(); ?>/img/menu-02/lip-flow04.png" alt="flow">
                  </figure>
                  <p>
                    多くのお客様が気にされる「施術時の痛み」についてですが、当院では<strong>2種類の表面麻酔</strong>を使用しており、極力痛みのない施術を目指しています。（多くのクリニックでは1種類の麻酔のみ使用）
                    <br>万一、施術時の痛みがそれでも気になる場合は、都度麻酔を追加することもできますのでご安心くださいませ。
                  </p>
                </article>
                <article class="fl-style03-item">
                  <h3><span class="list-no">05</span>施術</h3>
                  <figure>
                    <img src="<?php echo get_template_directory_uri(); ?>/img/menu-02/lip-flow05.png" alt="flow">
                  </figure>
                  <p>リップアートメイクの施術はおおよそ<strong>3時間程度</strong>となります。リタッチの場合は30分ほど短くなる場合が多いです。</p>
                </article>
                <article class="fl-style03-item">
                  <h3><span class="list-no">06</span>アフターケア</h3>
                  <figure>
                    <img src="<?php echo get_template_directory_uri(); ?>/img/menu-02/lip-flow06.png" alt="flow">
                  </figure>
                  <p>施術後はダウンタイムの過ごし方における注意点を守っていただき、なるべく色素を効果的に定着させましょう。<br>
                    特に保湿は非常に重要。<strong>毎日ワセリンをしっかり塗布し、徹底的に乾燥を防ぎましょう。</strong><br>
                    また、施術後2週間ほどは、<strong>汗をかく行為(有酸素運動、サウナ、半身浴)はお控え下さい。</strong>代謝が上がり定着が悪くなる可能性がございます。</p>
                </article>
              </div>
            </div>
          </div>
        </div>
        <div id="price" class="sl-price lip">
          <div class="menu-inn sl-price-inn">
            <div class="sl-price-inn-ttl subpage-ttl menu-inn-ttl">
              <h2 class="under-line">料金</h2>
            </div>
            <div class="sl-price-inn-content">
              <div class="pg-text">
                <p>当院のリップアートメイク料金については、以下の通りとなります。</p>
              </div>
              <div class="price">
                <h3 class="price-ttl"><span>リップ</span></h3>
                <div class="price-list">
                  <div class="d-fl price-list-wr">
                    <div class="price-list-wr-l">
                      <h3>初回</h3>
                      <ul>
                        <li class="d-fl">
                          <p>通常</p>
                          <p class="dash-line"></p>
                          <p>¥65,780</p>
                        </li>
                        <li class="d-fl">
                          <p>部分写真モニタ</p>
                          <p class="dash-line"></p>
                          <p>¥63,580</p>
                        </li>
                        <li class="d-fl">
                          <p>全顔写真モニタ</p>
                          <p class="dash-line"></p>
                          <p>¥60,280</p>
                        </li>
                        <li class="d-fl">
                          <p>友人割※</p>
                          <p class="dash-line"></p>
                          <p>¥60,280</p>
                        </li>
                      </ul>
                    </div>
                    <div class="price-list-wr-l">
                      <h3>リタッチ</h3>
                      <ul>
                        <li class="d-fl">
                          <p>通常</p>
                          <p class="dash-line"></p>
                          <p>¥65,780</p>
                        </li>
                        <li class="d-fl">
                          <p>友人割※</p>
                          <p class="dash-line"></p>
                          <p>¥60,280</p>
                        </li>
                      </ul>
                    </div>
                  </div>
                  <p class="price-list-warn">※新たに紹介したご友人が予約した場合に適応<br>※すべて施術1回の料金となります。<br>※指名料：11000円〜</p>
                </div>
              </div>
              <div class="pg-text">
                <p>※LIANクリニックのリップアートメイクは2回の施術で定着させるのが基本となります。<br>そのため2回分の金額を予算と考えておきましょう。</p>
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
                <a href="https://reservation.medical-force.com/2d96f6933ed14b2a8e271863a7f0b813/reservations/new?menu_ids=8c37bff9-d70f-4ead-98c5-dfc1224767f2" target="_blank" rel="nofollow noreferrer">
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
                    'terms' => 'lips'
                  ),
                ),
                'post_type' => 'faq',
                'post_status' => 'publish',
                'posts_per_page' => 3,
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
