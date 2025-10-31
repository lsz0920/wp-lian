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

<script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@type": "FAQPage",
    "mainEntity": [{
        "@type": "Question",
        "name": "アイラインアートメイクの持続期間は？",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "<p><span>アイラインアートメイクは2回施術後約1年から2年ほど持続します。その後期間が経過するにつれ、徐々に色褪せていきますが、突然全て消えてしまうというわけではありません。</span></p><p><span>褪色が気になる段階で、リタッチ施術を受けられることをおすすめいたします。</span></p>"
        }
      },
      {
        "@type": "Question",
        "name": "一重まぶたでもアートメイクは可能？",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "<span>もちろん可能です。一重まぶたの方に似合うアイラインのデザインをご提案させていただきますのでお気軽にご相談くださいませ。</span>"
        }
      },
      {
        "@type": "Question",
        "name": "ダウンタイムは何日間？",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "<span>平均してアイラインアートメイクのダウンタイムは3日〜5日ほどとなります。</span>"
        }
      }
    ]
  }
</script>

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
                    font-family: HiraMinPro-W3, Hiragino Mincho Pro;
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
          </div>
        </div>
        <figure class="sp-right">
          <img class="pc" src="<?php echo get_template_directory_uri(); ?>/img/makeup/sub-mv-img.png" alt="あなたの“似合う”が 見つかるアートメイク">
          <img class="sp" src="<?php echo get_template_directory_uri(); ?>/img/makeup/sub-mv-sp.png" alt="あなたの“似合う”が 見つかるアートメイク">
        </figure>
      </div>
    </div>

    <div id="menu" class="sl-menu menu-eyeline">
      <div class="sl-menu-content">
        <div id="whatis" class="sl-whatis">
          <div class="menu-inn sl-whatis-inn attach-mv">
            <div class="sl-whatis-inn-ttl subpage-ttl menu-inn-ttl">
              <h1 class="under-line menu-inn-ttl__inner">アイラインアートメイクとは</h1>
            </div>
            <div class="sl-whatis-inn-content">
              <div class="d-fl whatis-detailup">
                <figure>
                  <img src="<?php echo get_template_directory_uri(); ?>/img/sub-whatiseyeliner-img01.png" alt="アイラインアートメイクとは">
                </figure>
                <div class="whatis-detailup-txt">
                  <p>
                    <strong>アートメイクとは、専用の針を使用し皮膚の中に色素を注入していく施術法</strong>のことです。しっかりと色素を定着させてしまえば、そこから短くても1年、長ければ3年ほど美しい状態をキープすることができます。
                  </p>
                  <p><span class="color-02">アイラインのアートメイクは、まぶたのキワ部分に直接色素を注入するアートメイクのメニュー</span>です。これにより、美しいアイラインを24時間保ち続けることが可能になります。</p>
                  <p>アートメイクとタトゥーを同じものだと混同してしまう方もいますが、<strong>アートメイクはタトゥーではありません。</strong></p>
                </div>
              </div>
              <div class="d-fl whatis-detailbot">
                <div class="whatis-detailbot-txt">
                  <p><strong>アートメイクは皮膚のごく浅い部分である表皮に色素を注入</strong>しますが、<strong>タトゥーはさらに奥にある真皮に色素を注入</strong>します。</p>
                  <p>アートメイクが数年で消えてしまうのに対し、タトゥーが半永久的に残り続けるのは、色素を注入する深さが違うから。この点も覚えておきましょう。</p>
                </div>
                <figure>
                  <img class="pc" src="<?php echo get_template_directory_uri(); ?>/img/sub-whatislip-img02.jpg" alt="アートメイクは皮膚のごく浅い部分である表皮に色素を注入">
                  <img class="sp" src="<?php echo get_template_directory_uri(); ?>/img/sub-whatislip-img02-sp.png" alt="アートメイクは皮膚のごく浅い部分である表皮に色素を注入">
                </figure>
              </div>
            </div>
          </div>
        </div>
        <div id="benefits" class="sl-benefits">
          <div class="menu-inn sl-benefits-inn">
            <div class="sl-benefits-inn-ttl subpage-ttl menu-inn-ttl">
              <h2 class="under-line">アイラインアートメイクの<br class="sp">4つのメリット</h2>
            </div>
            <div class="sl-benefits-inn-content">
              <div class="sl-benefits-inn-content-info pg-text">
                <p>アイラインアートメイクをすることで、どのようなメリットがあるのでしょうか。<br>
                  ここでは、<strong>アイラインアートメイクの代表的なメリット</strong>を4つ紹介します。</p>
              </div>
              <div class="fl-style01">
                <article class="fl-style01-item">
                  <h2 class="fl-style01-item-ttl"><span class="list-no">01</span>目力UP</h2>
                  <div class="d-fl fl-style01-item-content">
                    <figure>
                      <img src="<?php echo get_template_directory_uri(); ?>/img/benefits/eyeliner-benefits-img01.png" alt="目力UP">
                    </figure>
                    <div class="fl-style01-item-content-txt">
                      <p>美しいアイラインは、目元の印象を引き立たせ目力をUPさせてくれます。<br>
                        目元のメイクになぜこれほどまでに時間をかけるのか、それは<strong>「目元でお顔全体の印象をうんと華やかに見せることができる」</strong>
                        と誰もが知っているからです。特に「目が小さい」、「もっとパッチリした目元にしたい」と悩む女性はたくさんいます。アイラインは引き方ひとつで、目を大きく見せたり切長に見せたり、大きな変化をつけることができます。ご自身にとって完璧なアイラインをアートメイクで入れれば、<span class="color-02"><strong>常に魅力的な瞳をキープすることが可能</strong></span>です。
                        多くの女性が求める<strong>目力UPの効果</strong>こそ、アイラインアートメイクの最大のメリットと言えます。</p>
                    </div>
                  </div>
                </article>
                <article class="fl-style01-item">
                  <h2 class="fl-style01-item-ttl"><span class="list-no">02</span>アイメイクのテクニックが<br class="sp" />不要になる</h2>
                  <div class="d-fl fl-style01-item-content">
                    <figure>
                      <img src="<?php echo get_template_directory_uri(); ?>/img/benefits/eyeliner-benefits-img02.png" alt="アイメイクのテクニックが">
                    </figure>
                    <div class="fl-style01-item-content-txt">
                      <p>そもそも<strong>アイラインを引くのが苦手</strong>と感じる女性も少なくありません。<br>
                        何度も消しては描き直し、それでもアイラインがうまく描けない日もあるでしょう。アイラインが苦手な方にとって、アイラインアートメイクはまさに救世主。<br>
                        「うまくアイラインが引けない！」と何度も描き直すストレスから解放され、<span class="color-02"><strong>求める理想形のアイラインが常に完成している状態を実現できるのもアイラインアートメイクのメリット</strong></span>です。</p>
                    </div>
                  </div>
                </article>
                <article class="fl-style01-item">
                  <h2 class="fl-style01-item-ttl"><span class="list-no">03</span>メイク時間を大幅に短縮</h2>
                  <div class="d-fl fl-style01-item-content">
                    <figure>
                      <img src="<?php echo get_template_directory_uri(); ?>/img/benefits/eyeliner-benefits-img03.png" alt="メイク時間を大幅に短縮">
                    </figure>
                    <div class="fl-style01-item-content-txt">
                      <p><strong>アイラインが完成していれば、アイメイクは一瞬で完成します。</strong><br>
                        忙しい毎日で、メイクに時間と労力をかけるのは大変なこと。アイラインアートメイクは、メイクの時短を叶える画期的な解決策と言えます。メイクをする際、目元に関してはそのままでもOKですし、念入りにメイクをしたいときには、そこにアイシャドウやマスカラを重ねて完成。<span class="color-02"><strong>5分もかからないうちにアイメイクが完了</strong></span>します。まるで夢のようですね！
                      </p>
                    </div>
                  </div>
                </article>
                <article class="fl-style01-item">
                  <h2 class="fl-style01-item-ttl"><span class="list-no">04</span>すっぴんに抵抗がなくなる</h2>
                  <div class="d-fl fl-style01-item-content">
                    <figure>
                      <img src="<?php echo get_template_directory_uri(); ?>/img/benefits/eyeliner-benefits-img04.png" alt="すっぴんに抵抗がなくなる">
                    </figure>
                    <div class="fl-style01-item-content-txt">
                      <p class="l-spacing-100 l-height-1-8">
                        目元にメイクをしている状態と、していない状態では、見た目の印象がまるで違います。外出時には<strong>「せめて目元だけでも簡単にメイクしておこう」</strong>と思う方も多いでしょう。<br>
                        <span class="color-02"><strong>すっぴんに抵抗がなくなり自信が持てる</strong></span>のもアイラインアートメイクのメリット。なぜなら、気になる目元がすでに素敵な状態に仕上がっているからです。<br>
                        すっぴんに抵抗がなくなれば、ジムで運動することや、マリンスポーツなどにも、今より積極的にチャレンジできそうですね！
                      </p>
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
              <h2 class="under-line">アイラインアートメイクで<br class="sp">失敗する2つのケース</h2>
            </div>
            <div class="sl-failcase-inn-content">
              <div class="pg-text">
                <p>アイラインアートメイクのメリット、とても魅力的で興味をそそられますね。ですが、アイラインアートメイクには、知っておかなければならない<strong>唯一のデメリット</strong>があります。<br>
                  それは、<span class="color-02"><strong>アイラインアートメイクは簡単に消えるものではない</strong></span>、ということ。もっと詳しくお伝えすると、</p>
              </div>
              <div class="disc-list">
                <ul class="disc-list-wr">
                  <li class="d-fl"><span>・</span>
                    <p>除去するには特殊な施術（レーザー除去）が必要</p>
                  </li>
                  <li class="d-fl"><span>・</span>
                    <p>自然に消えるまでに長い期間がかかる</p>
                  </li>
                </ul>
              </div>
              <div class="pg-text">
                <p>となります。<br>
                  <strong>アートメイクはいつしか自然に薄くなり消えていきますが、それでも期間は1年以上かかります。定着のよい場合はさらに長い期間を要します。</strong><br>
                  この点はアートメイクのメリットですが、場合によってはデメリットにもなるため知っておく必要があります。
                </p>
              </div>
            </div>
          </div>
        </div>
        <div id="failcase" class="sl-failcase">
          <div class="menu-inn sl-failcase-inn">
            <div class="sl-failcase-inn-ttl subpage-ttl menu-inn-ttl">
              <h2 class="under-line">アイラインアートメイクで<br class="sp">失敗する2つのケース</h2>
            </div>
            <div class="sl-failcase-inn-content">
              <div class="sl-failcase-inn-content-info pg-text">
                <p>アイラインアートメイクをする上で、誰もが絶対に避けたいのが<strong>「失敗」</strong>です。アイラインアートメイクでは、確かに失敗するケースもあります。<br>
                  <strong>アイラインアートメイク施術における失敗ケース</strong>には、どのようなものがあるのでしょう。<br>
                  ここで2つの失敗ケースを例を挙げて解説しておきましょう。
                </p>
              </div>
              <div class="list-style01">
                <div class="list-style01-item">
                  <h2 class="list-style01-item-ttl"><span class="list-no">01</span>デザインが希望通りにならない</h2>
                  <div class="list-style01-item-txt">
                    <p>アイラインについては、太さや角度など細かなリクエストが人それぞれあるものです。これらが希望通りに仕上がらない場合は<strong>デザイン面で失敗</strong>と言えます。<br>
                      ほんの少し、イメージしていたよりも太く仕上がってしまったり、少し跳ね上げるアイラインを希望していたのに全く角度がついていなかったりするだけで、満足度は急激に下がります。<br>
                      この失敗が起こる原因は以下の2点。</p>
                    <div class="disc-list">
                      <ul class="disc-list-wr">
                        <li class="d-fl"><span>・</span>
                          <p>施術者の技術の問題</p>
                        </li>
                        <li class="d-fl"><span>・</span>
                          <p>施術前のカウンセリングが不十分</p>
                        </li>
                      </ul>
                    </div>
                    <p><strong> 確かな技術と入念なカウンセリング</strong>で、防ぐことができる失敗ケースですね。</p>
                  </div>
                </div>
                <div class="list-style01-item">
                  <h2 class="list-style01-item-ttl"><span class="list-no">02</span>腫れや痛みが何日も引かない</h2>
                  <div class="list-style01-item-txt">
                    <p>アイラインアートメイクにおいては、まぶたのキワ部分にあたる粘膜にごく近い部分へ色素を注入していくため、安全性を確保しておくことがとても重要になります。<br>
                      アートメイク直後は、一時的に赤みが出たり腫れることがありますが、長く続くようであれば<span class="color-02"><strong>「皮膚に必要以上のダメージを与えた」</strong></span>と言えます。<br>
                      この失敗ケースが起こる原因として考えられるのは以下の3つでしょう。</p>
                    <div class="disc-list">
                      <ul class="disc-list-wr">
                        <li class="d-fl"><span>・</span>
                          <p>アートメイクの専用針が清潔でなかった</p>
                        </li>
                        <li class="d-fl"><span>・</span>
                          <p>設備の衛生管理が不十分だった</p>
                        </li>
                        <li class="d-fl"><span>・</span>
                          <p>注入するインク自体に安全面の問題があった</p>
                        </li>
                      </ul>
                    </div>

                    <p><strong>アートメイクは医療行為であり、本来エステサロンなど医療施設以外の施術は法律的に認められていません。</strong>しかし、実際のところ違法サロンは数多く存在しています。<br>
                      このような失敗ケースは主に違法サロンで起こった事例。価格が安いからと言って、違法サロンで施術を受けるのは絶対にやめておきましょう。</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div id="pain" class="sl-pain lip">
          <div class="menu-inn sl-pain-inn">
            <div class="sl-pain-inn-ttl subpage-ttl menu-inn-ttl">
              <h2 class="under-line">施術中の痛みについて</h2>
            </div>
            <div class="sl-pain-inn-content">
              <div class="d-fl pain-fl">
                <figure>
                  <img src="<?php echo get_template_directory_uri(); ?>/img/menu-03/pain-img.png" alt="施術中の痛みについて">
                </figure>
                <div class="pain-txt">
                  <p>アイラインアートメイクは、粘膜に近い場所の施術となるため <span class="color-02"><strong>痛みを比較的感じやすい</strong></span>のが特徴です。</p>
                  <p>ですが、アイラインアートメイク施術は麻酔をした上で行うため、それほど心配するような痛みのレベルではありません。多くのクリニックでは麻酔を1種類使用するのに対し、<strong>私たちLIANクリニックでは2種類の麻酔を使用し極力痛みのない施術を実現しています。</strong></p>
                  <p>アイラインアートメイクは目の近くであるため、他の部位よりもさらに「痛そう」「怖い」と感じられるもの。<strong>LIANクリニックなら、痛みに敏感なお客様にも安心して施術を受けていただくことができます。</strong></p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div id="clinic" class="sl-clinic">
          <div class="menu-inn sl-clinic-inn">
            <div class="sl-clinic-inn-ttl subpage-ttl menu-inn-ttl">
              <h2 class="under-line">ポイントは3つ！<br class="sp">アイラインアートメイクで<br class="sp">失敗しないための<br class="sp">クリニック選び</h2>
            </div>
            <div class="sl-clinic-inn-content">
              <div class="sl-clinic-inn-content-info pg-text">
                <p>アートメイクで失敗しないために<span class="color-02"><strong>最も重要なのがクリニック選び</strong></span>です。クリニック選びさえ間違えなければ、アートメイクの失敗を防ぐことができると言ってよいでしょう。<br>
                  ここでは、<strong>アイラインアートメイク施術を受けるクリニックを選ぶ際、必ず確認しておくべき重要な3つのポイン</strong>トについて解説します。</p>
              </div>
              <div class="fl-style01">
                <article class="fl-style01-item">
                  <h2 class="fl-style01-item-ttl"><span class="list-no">01</span>カウンセリングを<br class="sp">徹底しているか</h2>
                  <div class="d-fl fl-style01-item-content">
                    <figure>
                      <img src="<?php echo get_template_directory_uri(); ?>/img/eyeline/eyeliner-howto-img01.png" alt="カウンセリングを">
                    </figure>
                    <div class="fl-style01-item-content-txt">
                      <p><span class="color-02"><strong>カウンセリングを徹底しているクリニック</strong></span>を選ぶことで、デザインが思い通りにいかなかったという失敗を未然に防ぐことができます。<br>
                        施術者がお客様の求めるアイラインの完成イメージを正確にするためには、カウンセリングが何よりも重要です。<strong>カウンセリングに定評のあるクリニック</strong>を選びましょう。</p>
                    </div>
                  </div>
                </article>
                <article class="fl-style01-item">
                  <h2 class="fl-style01-item-ttl"><span class="list-no">02</span>実績が多く症例写真を<br class="sp">確認できるか</h2>
                  <div class="d-fl fl-style01-item-content">
                    <figure>
                      <img src="<?php echo get_template_directory_uri(); ?>/img/eyeline/eyeliner-howto-img02.png" alt="実績が多く症例写真を">
                    </figure>
                    <div class="fl-style01-item-content-txt">
                      <p>クリニックを選ぶ際には、<span class="color-02"><strong>そのクリニックがこれまでアイラインのアートメイク施術を行ってきた実績を知ること</strong></span>が大切です。<br>
                        「仕上がりに自信あり！」などと書かれていても、実際の症例写真を見ないことにはその完成イメージを目で見て確かめることは不可能です。<br>
                        確かな実績があり、<strong>症例写真を確認できるクリニック</strong>を選びましょう。</p>
                    </div>
                  </div>
                </article>
                <article class="fl-style01-item">
                  <h2 class="fl-style01-item-ttl"><span class="list-no">03</span>アフターフォローが<br class="sp">充実しているか</h2>
                  <div class="d-fl fl-style01-item-content">
                    <figure>
                      <img src="<?php echo get_template_directory_uri(); ?>/img/eyeline/eyeliner-howto-img03.png" alt="アフターフォローが">
                    </figure>
                    <div class="fl-style01-item-content-txt">
                      <p>
                        <span class="color-02"><strong>アートメイクはアイラインに限らずどの部位であっても、1度の施術では完成しないことがほとんどです。</strong></span>これは、皮膚のターンオーバーにより、初回の施術で注入した色素が抜け落ちてしまうためです。<br class="sp">
                        つまり、1度きりで終わりではなく、<strong>2度目の施術やさらにその先のリタッチなど、アフターフォローが充実しているクリニック</strong>を選びましょう。<br class="pc">
                        アフターケアで気をつける点や、2度目以降の施術のスケジュールなどについて、細かに説明してもらえるクリニックは信頼できますし、何より施術を受けるお客様の安心感に繋がります。
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
              <h2 class="under-line">LIANクリニックの<br class="sp">アイラインアートメイク</h2>
            </div>
            <div class="sl-pm-inn-content">
              <div class="pg-text">
                <p><strong>私たちLIANクリニックでは、初めてアートメイクに挑戦される方でも不安なく施術を受けていただくことができます。</strong><br>
                  ここでは、当院のアートメイクについて、</p>
              </div>
              <div class="check-list">
                <ul class="check-list-wr">
                  <li>LIANクリニック3つの特徴</li>
                  <li>実際のお客様の症例写真</li>
                  <li>施術を受けられたお客様の感想</li>
                  <li>施術の流れ</li>
                  <li>料金について</li>
                </ul>
              </div>
              <div class="pg-text">
                <p>以上のポイントにまとめ、詳しく紹介していきます。<br>
                  先ほどの<strong>「失敗しないためのクリニック選び」でお伝えした3つのポイント</strong>を思い返しながら読んでみてくださいね。</p>
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
                  <li class="d-fl"><span>①</span>
                    <p>ヒアリング×提案力</p>
                  </li>
                  <li class="d-fl"><span>②</span>
                    <p>700例以上の経験があるアーティストのみ在籍</p>
                  </li>
                  <li class="d-fl"><span>③</span>
                    <p>2種類の麻酔で痛みのない施術</p>
                  </li>
                </ul>
              </div>
              <div class="pg-text">
                <p><strong>LIANクリニックが最も力を入れているのが、お客様とのカウンセリング。</strong>お客様の理想とするアイラインのイメージを正確に把握した上で、ひとりひとりの骨格に合わせたデザインをこちらからもご提案します。
                  さらに、施術を行うのは<strong>十分な経験を積んだアーティスト</strong>のみ。安心してお任せくださいませ。<br>
                  また、痛みに対して苦手意識がある方にも安心して施術を受けていただけるよう、<strong>2種類の麻酔で極力痛みを感じさせない施術が可能</strong>です。</p>
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
                      <img src="<?php echo get_template_directory_uri(); ?>/img/case/eye-case01.png" alt="症例写真">
                    </figure>
                    <div class="content">
                      <dl>
                        <dt>施術名</dt>
                        <dd>アイラインアートメイク</dd>
                      </dl>
                      <dl>
                        <dt>施術の説明</dt>
                        <dd>皮膚の表面に色素を注入していきます</dd>
                      </dl>
                      <dl>
                        <dt>施術の副作用(リスク)</dt>
                        <dd>疼痛・内出血</dd>
                      </dl>
                      <dl>
                        <dt>施術の価格</dt>
                        <dd>¥45,000〜</dd>
                      </dl>
                    </div>
                  </a>
                </article>
                <article>
                  <a class="fl-style04-fl d-fl" target="_blank" rel="nofollow noreferrer">
                    <figure>
                      <img src="<?php echo get_template_directory_uri(); ?>/img/case/eye-case02.png" alt="症例写真">
                    </figure>
                    <div class="content">
                      <dl>
                        <dt>施術名</dt>
                        <dd>アイラインアートメイク</dd>
                      </dl>
                      <dl>
                        <dt>施術の説明</dt>
                        <dd>皮膚の表面に色素を注入していきます</dd>
                      </dl>
                      <dl>
                        <dt>施術の副作用(リスク)</dt>
                        <dd>疼痛・内出血</dd>
                      </dl>
                      <dl>
                        <dt>施術の価格</dt>
                        <dd>¥45,000〜</dd>
                      </dl>
                    </div>
                  </a>
                </article>
                <article>
                  <a class="fl-style04-fl d-fl" target="_blank" rel="nofollow noreferrer">
                    <figure>
                      <img src="<?php echo get_template_directory_uri(); ?>/img/case/eye-case03.png" alt="症例写真">
                    </figure>
                    <div class="content">
                      <dl>
                        <dt>施術名</dt>
                        <dd>アイラインアートメイク</dd>
                      </dl>
                      <dl>
                        <dt>施術の説明</dt>
                        <dd>皮膚の表面に色素を注入していきます</dd>
                      </dl>
                      <dl>
                        <dt>施術の副作用(リスク)</dt>
                        <dd>疼痛・内出血</dd>
                      </dl>
                      <dl>
                        <dt>施術の価格</dt>
                        <dd>¥45,000〜</dd>
                      </dl>
                    </div>
                  </a>
                </article>
              </div>
            </div>
          </div>
        </div>
        <div id="flow" class="sl-flow lip">
          <div class="menu-inn sl-flow-inn">
            <div class="sl-flow-inn-ttl subpage-ttl menu-inn-ttl">
              <h2 class="under-line pc">施術の流れ</h2>
              <h2 class="under-line sp">アートメイク施術の流れ</h2>
            </div>
            <div class="sl-flow-inn-content">
              <div class="sl-flow-inn-content-info pg-text">
                <p>私たちLIANクリニックではアイラインアートメイク施術を以下の6ステップの流れで行います。<br>
                  それぞれのステップについて詳しく解説していきましょう。</p>
              </div>
              <div class="d-fl fl-style03">
                <article class="fl-style03-item">
                  <h3><span class="list-no">01</span>ヒアリング</h3>
                  <figure>
                    <img src="<?php echo get_template_directory_uri(); ?>/img/menu-02/lip-flow01.png" alt="flow">
                  </figure>
                  <p>初めにアートメイクの施術に関する流れをご説明。その後、お客様の普段のメイクをヒントに、お客様の目指す「理想的なアイライン」についてヒアリングします。<br>
                    <strong>アートメイクについて疑問や不安のある方は、ヒアリング時に何でもお気軽にお尋ねください。</strong>
                  </p>
                </article>
                <article class="fl-style03-item">
                  <h3><span class="list-no">02</span>デッサン</h3>
                  <figure>
                    <img src="<?php echo get_template_directory_uri(); ?>/img/menu-02/lip-flow02.png" alt="flow">
                  </figure>
                  <p>お客様の理想とするアイラインのデザインを、デッサンで描いていきます。このときに、太さや色味、形などに関するリ<strong>クエストを詳細にお伝えください。</strong></p>
                </article>
                <article class="fl-style03-item">
                  <h3><span class="list-no">03</span>デザインのすり合わせ</h3>
                  <figure>
                    <img src="<?php echo get_template_directory_uri(); ?>/img/menu-02/lip-flow03.png" alt="flow">
                  </figure>
                  <p>施術者が描いたデッサンを最終確認し、お客様のイメージされる<span class="color-02"><strong>「理想のアイライン」</strong></span>とズレがないことを確認します。<br>
                    <strong>この段階でお客様が100％納得された上で施術に入ります。</strong>
                  </p>
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
                  <p>アイラインアートメイクの施術時間は<strong>2時間程度</strong>となります。</p>
                </article>
                <article class="fl-style03-item">
                  <h3><span class="list-no">06</span>アフターケア</h3>
                  <figure>
                    <img src="<?php echo get_template_directory_uri(); ?>/img/menu-02/lip-flow06.png" alt="flow">
                  </figure>
                  <p>アイラインアートメイクの施術後5日ほどは、以下の点に気をつけましょう。<br>
                    <strong>①アイメイクをしない②クレンジングが目にかからないように気をつける③うつぶせで寝ない④目をこすらない、触らない
                      ⑤激しい運動を控える（汗を大量にかくことを避ける）</strong><br>
                    施術直後は目元が腫れることもありますが、自然に腫れは引いていきます。<strong>この間、施術部位に負担がかからないように徹底すること</strong>がとても大切。<br>
                    うっかり目をこすってしまうなど負担をかけてしまうと、色素の定着が悪くなったり、皮膚にさらなるダメージを与えたりするリスクがあります。
                  </p>
                </article>
              </div>
            </div>
          </div>
        </div>
        <div id="price" class="sl-price lip">
          <div class="menu-inn sl-price-inn">
            <div class="sl-price-inn-ttl subpage-ttl menu-inn-ttl">
              <h2 class="under-line pc">料金について</h2>
              <h2 class="under-line sp">料金</h2>
            </div>
            <div class="sl-price-inn-content">
              <div class="pg-text pc">
                <p>LIANクリニックのアイラインアートメイクの料金については以下の通りとなります。</p>
              </div>
              <div class="price">
                <h3 class="price-ttl"><span>アイライン</span></h3>
                <div class="price-list">
                  <div class="d-fl price-list-wr">
                    <div class="price-list-wr-l">
                      <h3>初回</h3>
                      <ul>
                        <li class="d-fl">
                          <p>通常</p>
                          <p class="dash-line"></p>
                          <p>¥45,000</p>
                        </li>
                        <li class="d-fl">
                          <p>アイライン跳ね上げ</p>
                          <p class="dash-line"></p>
                          <p>¥60,000</p>
                        </li>
                        <li class="d-fl">
                          <p>ヘアライン</p>
                          <p class="dash-line"></p>
                          <p>¥65,000</p>
                        </li>
                      </ul>
                    </div>
                    <div class="price-list-wr-l">
                      <h3>リタッチ</h3>
                      <ul>
                        <li class="d-fl">
                          <p>通常</p>
                          <p class="dash-line"></p>
                          <p>¥35,000</p>
                        </li>
                        <li class="d-fl">
                          <p>アイライン跳ね上げ</p>
                          <p class="dash-line"></p>
                          <p>¥50,000</p>
                        </li>
                        <li class="d-fl">
                          <p>ヘアライン</p>
                          <p class="dash-line"></p>
                          <p>¥55,000</p>
                        </li>
                      </ul>
                    </div>
                  </div>
                  <p class="price-list-warn">※指名料：11000円〜</p>
                </div>
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
                <?php $contactTxt01 = CFS()->get('text01');
                $contactTxt02 = CFS()->get('text02');
                if ($contactTxt01 != '') : ?>
                  <h3><span class="l-slash">\ </span> <?php echo $contactTxt01; ?><br class="sp" /><?php echo $contactTxt02; ?> <span class="r-slash"> /</span></h3>
                <?php endif; ?>
                <div class="h-line"></div>
                <a href="https://lin.ee/94Mjv4T" target="_blank" rel="nofollow noreferrer">
                  <img src="<?php echo get_template_directory_uri(); ?>/img/reservation-btn01.png" alt="">
                </a>
              </div>
            </div>
          </div>
        </div>
        <?php $show = CFS()->get('faq_show');
        if ($show) : ?>
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
                      'terms' => 'eyeline'
                    ),
                  ),
                  'post_type' => 'faq',
                  'post_status' => 'publish',
                  'posts_per_page' => 3,
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
                  <a href="<?php echo home_url('/faq') ?>" rel="alternate">VIEW MORE</a>
                </div>
              </div>
            </div>
          </div>
        <?php endif; ?>
      </div>
    </div>
    <?php get_template_part('footer-company'); ?>
  </main>
</div>
<?php
get_footer();
