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
  "mainEntity": [
    {
      "@type": "Question",
      "name": "主治医の許可の下、自己責任で受けていただく必要がある場合",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "<span>・心疾患・糖尿病・高血圧の方</span><span><br></span><span>・ 癌治療終了後の方<br></span><span>・抗凝固剤・ステロイド使用中の方</span><span><br></span><span>・自己免疫疾患をお持ちの方</span>"
      }
    },
    {
      "@type": "Question",
      "name": "施術前に気をつけることはありますか？",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "<span>アートメイクを受けられる前後 3 週間の期間に、眉毛周りの皮膚に美容行為は(ピーリング、ビタミンA配合の化粧品の使用等を含む)アートメイクの定着やデザインに影響することがあるのでお控えください。</span>"
      }
    },
    {
      "@type": "Question",
      "name": "コンタクトレンズをつけたままでも大丈夫ですか？",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "<span>眉の施術はコンタクトレンズを付けていても施術はできますが、乾燥してしまう可能性があります。<br></span><span>ご心配でしたら施術前に外していただきますので、ケース や保存液等ご持参ください。</span>"
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
          if(function_exists( 'yoast_breadcrumb' )){
            yoast_breadcrumb( '<div id="breadcrumbs">', '</div>');
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
              <text id="あなたと美しさをつなぐクリニック" data-name="あなたと美しさをつなぐクリニック" class="cls-mv-1"
                transform="translate(0 35)">
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
          <img class="pc" src="<?php echo get_template_directory_uri(); ?>/img/makeup/sub-mv-img.png"
            alt="あなたの“似合う”が 見つかるアートメイク">
          <img class="sp" src="<?php echo get_template_directory_uri(); ?>/img/makeup/sub-mv-sp.png"
            alt="あなたの“似合う”が 見つかるアートメイク">
        </figure>
      </div>
    </div>
    <div id="menu"  class="sl-menu menu-artmarke">
      <div class="sl-menu-content">
        <div id="whatis" class="sl-whatis o-hidden">
          <div class="sl-whatis-inn menu-inn attach-mv">
            <div class="sl-whatis-inn-ttl subpage-ttl menu-inn-ttl">
              <h1 class="under-line menu-inn-ttl__inner">アートメイクとは</h1>
            </div>
            <div class="sl-whatis-inn-content">
              <div class="d-fl whatis-detailup">
                <figure>
                  <img src="<?php echo get_template_directory_uri(); ?>/img/makeup/sub-whatis-img.png" alt="アートメイクとは">
                </figure>
                <div class="whatis-detailup-txt">
                  <h3>アートメイクとは、皮膚の表面から0.02〜0.03mmほどの浅い部分に、専用の針を使用し色素を注入する施術のことを言います。</h3>
                  <p>アートメイクを施した部分は普段のメイクとは異なり、<span class="color-02">汗や水で落ちることがない</span>ため、メイク落ちの心配は一切不要。</p>
                  <p>眉毛やアイライン、リップラインなどの箇所にアートメイクを入れることで、<br class="pc">素顔の印象が変わり、これまで以上にご自身の素顔に自信を持つことができるようになります。</p>
                </div>
              </div>
              <div class="d-fl whatis-detailbot">
                <div class="whatis-detailbot-txt">
                  <p>
                    針で皮膚に色素を注入していくというと、多くの方が入れ墨（タトゥー）を想像するかと思いますが、<strong>入れ墨とアートメイクは別物</strong>です。<br>
                    <u>アートメイクが皮膚のごく浅い部分に色素を入れるのに対し</u>て、<u>刺青は2mm<br class="pc">程度の深い部分（真皮）に色素を入れていく</u>もの。
                  </p>
                  <p>そのため刺青はまず落ちることがありませんが、<span class="color-02">アートメイクは年数が経過するごとにゆっくりと色褪せていきます。</span></p>
                </div>
                <figure>
                  <img class="pc" src="<?php echo get_template_directory_uri(); ?>/img/sub-whatis-img-02.jpg"
                    alt="アートメイクとは">
                  <img class="sp" src="<?php echo get_template_directory_uri(); ?>/img/sub-whatis-img-sp-02.png"
                    alt="アートメイクとは">
                </figure>
              </div>
            </div>
            <div class="sl-whatis-inn-ft pc">
              <p>また、アートメイクとタトゥーには以下の表のとおり、様々な違いがあることも理解しておきましょう。</p>
              <div class="d-fl sl-whatis-inn-ft-tb">
                <ul>
                  <li>分類</li>
                  <li>持続時間</li>
                  <li>カラー</li>
                  <li>修正</li>
                  <li>アレルギー</li>
                  <li>感染リスク</li>
                  <li>深さ</li>
                  <li>変色</li>
                  <li>リタッチ</li>
                </ul>
                <ul>
                  <li>タトゥー</li>
                  <li>永久的</li>
                  <li>酸化し青く変化</li>
                  <li>不可能</li>
                  <li>化学色素/可能性あり</li>
                  <li>高い</li>
                  <li>真皮層</li>
                  <li>青く変色</li>
                  <li>必要なし</li>
                </ul>
                <ul>
                  <li>アートメイク</li>
                  <li>6ヶ月〜5年</li>
                  <li>多彩で自然なカラー</li>
                  <li>可能</li>
                  <li>天然色素/可能性低い</li>
                  <li>低い</li>
                  <li>表皮・真皮の上部</li>
                  <li>ほぼ無し</li>
                  <li>必要（30日以降）</li>
                </ul>
              </div>
            </div>
            <div class="sl-whatis-inn-ft sp">
              <p>また、アートメイクとタトゥーには以下の表のとおり、様々な違いがあることも理解しておきましょう。</p>
              <div class="sl-whatis-inn-ft-tb menu-whatis-sp-slider">
                <ul class="">
                  <li>分類</li>
                  <li>持続時間</li>
                  <li>カラー</li>
                  <li>修正</li>
                  <li>アレルギー</li>
                  <li>感染リスク</li>
                  <li>深さ</li>
                  <li>変色</li>
                  <li>リタッチ</li>
                </ul>
                <ul class="bg-active">
                  <li>タトゥー</li>
                  <li>永久的</li>
                  <li>酸化し青く変化</li>
                  <li>不可能</li>
                  <li>化学色素/可能性あり</li>
                  <li>高い</li>
                  <li>真皮層</li>
                  <li>青く変色</li>
                  <li>必要なし</li>
                </ul>
                <ul class="bg-active1">
                  <li>アートメイク</li>
                  <li>6ヶ月〜5年</li>
                  <li>多彩で自然なカラー</li>
                  <li>可能</li>
                  <li>天然色素/可能性低い</li>
                  <li>低い</li>
                  <li>表皮・真皮の上部</li>
                  <li>ほぼ無し</li>
                  <li>必要（30日以降）</li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div id="dyh" class="sl-dyh">
          <div class="menu-inn sl-dyh-inn">
            <div class="sl-dyh-inn-ttl subpage-ttl menu-inn-ttl">
              <h2 class="under-line"><small>こんな</small>お悩み<small>ございませんか？</small></h2>
            </div>
            <div class="sl-dyh-inn-content">
              <figure>
                <img class="pc" src="<?php echo get_template_directory_uri(); ?>/img/menu/menu-links.png" alt="menu">
                <img class="sp" src="<?php echo get_template_directory_uri(); ?>/img/sub-dyh-bg.jpg" alt="menu">
              </figure>
              <figure class="sp menu-links-sp">
                <img src="<?php echo get_template_directory_uri(); ?>/img/menu/menu-links_sp.png" alt="menu">
              </figure>
            </div>
          </div>
        </div>
        <div id="benefits" class="sl-benefits">
          <div class="menu-inn sl-benefits-inn">
            <div class="sl-benefits-inn-ttl subpage-ttl menu-inn-ttl">
              <h2 class="under-line">アートメイクの3大メリット</h2>
            </div>
            <div class="sl-benefits-inn-content">
              <div class="sl-benefits-inn-content-info pg-text">
                <p>アートメイクには<span class="color-02">たくさんのメリット</span>があります。<br>
                  アートメイクをすると何がどう変わるのか、ここで<strong>代表的な3つのメリット</strong>について解説しておきましょう。</p>
              </div>
              <div class="fl-style01">
                <article class="fl-style01-item">
                  <h2 class="fl-style01-item-ttl"><span class="list-no">01</span>お出かけ前のメイク時間の短縮</h2>
                  <div class="d-fl fl-style01-item-content">
                    <figure>
                      <img class="pc" src="<?php echo get_template_directory_uri(); ?>/img/benefits/benefits-img-01.png"
                        alt="お出かけ前のメイク時間の短縮">
                      <img class="sp" src="<?php echo get_template_directory_uri(); ?>/img/benefits/benefits-img-01-sp.png"
                        alt="お出かけ前のメイク時間の短縮">
                    </figure>
                    <div class="fl-style01-item-content-txt">
                      <p>これまで毎日メイクにかけていた時間がアートメイクをすることで大きく短縮されます。<br>
                      洗顔が完了したメイク前の段階で、すでに眉毛が完成していると想像すると、これだけでもかなりの手間が省けることは想像できるのではないでしょうか。特に普段メイクに時間のかかる部分にアートメイクをしておくこと<u>で、準備にかける時間は大幅に</u>減り、<span class="color-02"><strong>毎朝のストレスから解放されます。</strong></span>
                      </p>
                    </div>
                  </div>
                </article>
                <article class="fl-style01-item">
                  <h2 class="fl-style01-item-ttl"><span class="list-no">02</span>メイクのテクニックが不要に</h2>
                  <div class="d-fl fl-style01-item-content">
                    <figure>
                      <img class="pc" src="<?php echo get_template_directory_uri(); ?>/img/benefits/benefits-img-02.png"
                        alt="メイクのテクニックが不要に">
                      <img class="sp" src="<?php echo get_template_directory_uri(); ?>/img/benefits/benefits-img-02-sp.png"
                        alt="メイクのテクニックが不要に">
                    </figure>
                    <div class="fl-style01-item-content-txt">
                      <p>毎日のメイクの中でも、特に眉のメイクが難しく時間がかかってしまうと感じる方は多いのではないでしょうか。眉を上手にメイクできればその日は気分も上がりますがうまく行かない日は1日中気になってしまうもの。<br class="pc">
                          眉毛のアートメイクをしている状態であれば、すでに施されているアートメイクを活かして整えるだけでメイクは完了します。もともと眉の形がアートメイクで作られているため、書き足すにせよものすごく簡単。アートメイクをしていれば、<span class="color-02"><strong>毎日のメイクがうまくいかずに何度もやり直す手間もかかりません。</strong></span>眉のメイクに苦手意識のある方に、アートメイクは特に喜ばれています。
                      </p>
                    </div>
                  </div>
                </article>
                <article class="fl-style01-item">
                  <h2 class="fl-style01-item-ttl"><span class="list-no">03</span>メイク崩れの不安解消</h2>
                  <div class="d-fl fl-style01-item-content">
                    <figure>
                      <img class="pc" src="<?php echo get_template_directory_uri(); ?>/img/benefits/benefits-img-03.png"
                        alt="メイク崩れの不安解消">
                      <img class="sp" src="<?php echo get_template_directory_uri(); ?>/img/benefits/benefits-img-03-sp.png"
                        alt="メイク崩れの不安解消">
                    </figure>
                    <div class="fl-style01-item-content-txt">
                      <p>
                        メイク崩れは女性の永遠の課題。せっかく丁寧に仕上げたアイライン、眉などのメイクは汗や皮脂で簡単に崩れてしまいます。特に夏の季節や、日常的にスポーツをする女性にとっては「崩れないメイク」をなんとしてでも実現したいところ。<br>
                        アートメイクなら、<span class="color-02"><strong>汗をかいてもプールに入っても全く消える心配がない</strong></span>ため、<u>思う存分日常生活やスポーツを楽しむことができます。</u>
                      </p>
                    </div>
                  </div>
                </article>
              </div>
            </div>
          </div>
        </div>
        <div id="disadvantages" class="sl-datg">
          <div class="menu-inn sl-datg-inn">
            <div class="sl-datg-inn-ttl subpage-ttl menu-inn-ttl">
              <h2 class="under-line">アートメイクのデメリット</h2>
            </div>
            <div class="sl-datg-inn-content">
              <div class="pg-text">
                <p>メリットばかりが目立つアートメイクですが、デメリットについても知っておきたいと考える方が多いのではないでしょうか。</p>
                <p>
                  アートメイクのデメリットを挙げるとすれば、<strong>「簡単に消すことができない」という点</strong>です。そのため、アートメイクで仮にイメージと異なるメイクを施した場合には、その後長い期間ストレスに悩まされることもあります。
                </p>
                <p>このようなデメリットを解決すべく、<span class="color-02"><strong>LIANクリニックではアートメイクを施す前に入念なカウンセリングを行います。</strong></span><br>
                  <u>お客様が100％納得できるデザインを見つけるまでは、施術を行うことはありませんのでご安心くださいませ。</u>
                </p>
              </div>
            </div>
          </div>
        </div>
        <div id="recommended" class="sl-recommended">
          <div class="menu-inn sl-recommended-inn">
            <div class="sl-recommended-inn-ttl subpage-ttl menu-inn-ttl">
              <h2 class="under-line">アートメイク<small>は</small><br class="sp">こんな方<small>に</small>おすすめ</h2>
            </div>
            <div class="sl-recommended-inn-content">
              <h3>アートメイクは今よりさらに綺麗になりたいと願う全ての方におすすめできるものです。</h3>
              <div class="pg-text">
                <p>特に、ここで紹介する3つの特徴にあてはまる方であれば、ぜひアートメイクにチャレンジしましょう。きっとアートメイクの素晴らしさをより強く実感いただけることと思います。</p>
              </div>
              <div class="fl-style01">
                <article class="fl-style01-item">
                  <h2 class="fl-style01-item-ttl"><span class="list-no">01</span>素顔に自信を持ちたい方</h2>
                  <div class="d-fl fl-style01-item-content">
                    <figure>
                      <img class="pc" src="<?php echo get_template_directory_uri(); ?>/img/recommend/recommend-img-01.png"
                        alt="素顔に自信を持ちたい方">
                      <img class="sp" src="<?php echo get_template_directory_uri(); ?>/img/recommend/recommend-img-01-sp.png"
                        alt="素顔に自信を持ちたい方">
                    </figure>
                    <div class="fl-style01-item-content-txt">
                      <p>
                        アートメイクを施すことで、常に理想の眉でいられるため、自分の素顔<u>に自信を持つことができます。自分に合う理想</u>の眉が分からないという方でも、<u>アートメイクの看護師がご自身に合った眉を提案</u>してもらえるため安心です。<br>
                        普段からあまり濃いメイクが好みでなく、できる限り素顔に近いナチュラルメイクを心掛けている方もいらっしゃいます。この場合、アートメイクを施していれば、上からメイクを重ねずとも、すでにナチュラルメイクがほぼ完成した状態になっているため、<span class="color-02"><strong>メイクをせずに素顔のままで外出することも可能</strong></span>です。
                      </p>
                    </div>
                  </div>
                </article>
                <article class="fl-style01-item">
                  <h2 class="fl-style01-item-ttl"><span class="list-no">02</span>メイクに時間をかけたくない方</h2>
                  <div class="d-fl fl-style01-item-content">
                    <figure>
                      <img class="pc" src="<?php echo get_template_directory_uri(); ?>/img/recommend/recommend-img-02.png"
                        alt="メイクに時間をかけたくない方">
                      <img class="sp" src="<?php echo get_template_directory_uri(); ?>/img/recommend/recommend-img-02-sp.png"
                        alt="メイクに時間をかけたくない方">
                    </figure>
                    <div class="fl-style01-item-content-txt">
                      <p>毎日のメイクが面倒で、なるべく時短で済ましたい方にとって、アートメイクはまさに救世主。<br>
                          アートメイクをする前と比較して、すでに眉のベースが完成しているため、朝のメイク時間を半分ほどに短縮できるケースも少なくありません。<br>
                        <span class="color-02"><strong>忙しい方、とにかくササッとメイクを完成させたい方ならアートメイクは必須</strong></span>でしょう。
                      </p>
                    </div>
                  </div>
                </article>
                <article class="fl-style01-item">
                  <h2 class="fl-style01-item-ttl"><span class="list-no">03</span>スポーツをされている方</h2>
                  <div class="d-fl fl-style01-item-content">
                    <figure>
                      <img class="pc" src="<?php echo get_template_directory_uri(); ?>/img/recommend/recommend-img-03.png"
                        alt="スポーツをされている方">
                      <img class="sp" src="<?php echo get_template_directory_uri(); ?>/img/recommend/recommend-img-03-sp.png"
                        alt="スポーツをされている方">
                    </figure>
                    <div class="fl-style01-item-content-txt">
                      <p>日頃からスポーツをされている方の多くは、汗によるメイク落ちが気になっているのではないでしょうか。<br>
                        <span class="color-02"><strong>アートメイクは水や汗で落ちることがないため、メイク落ちを気にする必要はもうありません。</strong></span><br>
                        汗をかいても思いっきりタオルでお顔を拭くことができる点も嬉しいポイント。<u>これでますますスポーツに打ち込むことができます。</u>
                      </p>
                    </div>
                  </div>
                </article>
              </div>
            </div>
          </div>
        </div>
        <div id="features" class="sl-features">
          <div class="menu-inn sl-features-inn">
            <div class="sl-features-inn-ttl subpage-ttl menu-inn-ttl">
              <h2 class="under-line">LIANクリニック3つの特徴</h2>
            </div>
            <div class="sl-features-inn-content">
              <article class="d-fl sl-features-inn-content-article">
                <figure>
                  <img src="<?php echo get_template_directory_uri(); ?>/img/features/feature-img.png" alt="feature">
                </figure>
                <div class="sl-features-inn-content-article-txt">
                  <p>アートメイクの施術を始めて受けられる方は、「痛いのではないか」、「デザインが気に入らなかったらどうしよう」など不安な気持ちを抱えていらっしゃいます。<br>
                  私たちLIANクリニックではでは、お客様の不安を解消すべく<strong>3つのお約束</strong>をさせていただいています。</p>
                </div>
              </article>
              <div class="fl-style01">
                <article class="fl-style01-item">
                  <h2 class="fl-style01-item-ttl"><span class="list-no">01</span>ヒアリング <img class="title-cross"
                      src="<?php echo get_template_directory_uri(); ?>/img/ttl-cross.png"> 提案力
                  </h2>
                  <div class="d-fl fl-style01-item-content">
                    <figure>
                      <img class="pc" src="<?php echo get_template_directory_uri(); ?>/img/features/feature-01.png"
                        alt="features">
                      <img class="sp" src="<?php echo get_template_directory_uri(); ?>/img/features/feature-01-sp.png"
                        alt="features">
                    </figure>
                    <div class="fl-style01-item-content-txt">
                      <p>LIANクリニックのアートメイクは、<span class="color-02"><strong>お客様とのコミュニケーションに一番時間を費やしております。</strong></span>初めての方でも安心して施術に挑めるよう、アートメイクの特徴や施術の流れなどについてカウンセリング時にご説明差し上げます。<br>
                      その後のヒアリングでお客様の求める理想のイメージを正確に把握し、骨格や筋肉の走行などから、お客様に一番なデザインをご提案させていただいております。自分の合った理想の眉がわからないという方でも、経験豊富な施術者がお客様に合う眉をご提案しますのでご安心ください。
                      </p>
                    </div>
                  </div>
                </article>
                <article class="fl-style01-item">
                  <h2 class="fl-style01-item-ttl"><span class="list-no">02</span>1000例以上経験のある<br class="sp">アーティストのみ在籍
                  </h2>
                  <div class="d-fl fl-style01-item-content">
                    <figure>
                      <img class="pc" src="<?php echo get_template_directory_uri(); ?>/img/features/feature-02.png"
                        alt="features">
                      <img class="sp" src="<?php echo get_template_directory_uri(); ?>/img/features/feature-02-sp.png"
                        alt="features">
                    </figure>
                    <div class="fl-style01-item-content-txt">
                      <p>LIANクリニックでは<span class="color-02"><strong>1000例以上のアーティストしか在籍しておりません。</strong></span><br>
                      アートメイクでは経験が物を言う施術です。お客様の幅広い要望を実現するために、施術経験が少ない・コニュニケーション力が低いアーティストはお断りしております。経験豊富なアーティストよりお客様に最適なデザインをご提案させていただきますので、ご安心ください。
                      </p>
                    </div>
                  </div>
                </article>
                <article class="fl-style01-item">
                  <h2 class="fl-style01-item-ttl"><span class="list-no">03</span>2種類の麻酔で痛みのない施術</h2>
                  <div class="d-fl fl-style01-item-content">
                    <figure>
                      <img class="pc" src="<?php echo get_template_directory_uri(); ?>/img/features/feature-03.png"
                        alt="features">
                      <img class="sp" src="<?php echo get_template_directory_uri(); ?>/img/features/feature-03-sp.png"
                        alt="features">
                    </figure>
                    <div class="fl-style01-item-content-txt">
                      <p>通常のクリニックでは１種類の麻酔を使用するのが一般的ですが、LIANクリニックではアートメイクの施術の際に2種類の麻酔を使用し、<span class="color-02"><strong>極力痛みのない施術を実現</strong></span>しています。
                      <br>痛みに弱い方や、痛みが怖くてこれまでアートメイクにチャレンジできなかった方にこそぜひLIANクリニックのアートメイクを選んでいただきたいです。</p>
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
              <h2 class="under-line">症例のご紹介</h2>
            </div>
            <div class="sl-case-inn-content">
              <div class="fl-style04">
                <article>
                  <a class="fl-style04-fl d-fl" target="_blank" rel="nofollow noreferrer">
                    <figure>
                      <img src="<?php echo get_template_directory_uri(); ?>/img/case/case-01.png" alt="症例写真">
                    </figure>
                    <div class="content">
                      <dl>
                        <dt>施術名</dt>
                        <dd>眉アートメイク</dd>
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
                        <dd>¥43,800〜</dd>
                      </dl>
                    </div>
                  </a>
                </article>
                <article>
                  <a class="fl-style04-fl d-fl" target="_blank" rel="nofollow noreferrer">
                    <figure>
                      <img src="<?php echo get_template_directory_uri(); ?>/img/case/case-02.png" alt="症例写真">
                    </figure>
                    <div class="content">
                      <dl>
                        <dt>施術名</dt>
                        <dd>眉アートメイク</dd>
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
                        <dd>¥43,800〜</dd>
                      </dl>
                    </div>
                  </a>
                </article>
                <article>
                  <a class="fl-style04-fl d-fl" target="_blank" rel="nofollow noreferrer">
                    <figure>
                      <img src="<?php echo get_template_directory_uri(); ?>/img/case/case-03.png" alt="症例写真">
                    </figure>
                    <div class="content">
                      <dl>
                        <dt>施術名</dt>
                        <dd>眉アートメイク</dd>
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
                        <dd>¥43,800〜</dd>
                      </dl>
                    </div>
                  </a>
                </article>
              </div>
            </div>
          </div>
        </div>
        <?php
        $args=array(
          'tax_query' => array(
              array(
              'taxonomy' => 'column_category',
              'field' => 'slug',
              'terms' => 'media'
            ),
          ),
          'post_type' => 'column',
          'post_status' => 'publish',
          'posts_per_page' => 4,
          'order' => 'ASC',
          );
        ?>
        <?php query_posts( $args ); ?>
        <?php if(have_posts()): ?>
        <div id="results" class="sl-results">
          <div class="menu-inn sl-results-inn">
            <div class="sl-results-inn-ttl subpage-ttl menu-inn-ttl">
              <h2 class="under-line">メディア掲載実績</h2>
            </div>
            <div class="sl-results-inn-content">
              <div class="column-list menu-column-list">
                <?php while(have_posts()):the_post(); ?>
                  <article class="">
                    <a href="<?php the_permalink(); ?>">
                      <figure>
                        <?php the_post_thumbnail('full'); ?>
                      </figure>
                      <div class="column-txt">
                        <div class="upload-date">
                          <time class="c-black"><?php echo get_the_date('Y.m.d'); ?></time>
                        </div>
                        <p><?php the_title(); ?></p>
                      </div>
                    </a>
                  </article>
                  <?php endwhile; ?>
              </div>
            </div>
          </div>
        </div>
        <?php endif; ?>
        <?php wp_reset_query(); ?>
        <div id="procedure" class="sl-procedure">
          <div class="sl-procedure-inn menu-inn">
            <div class="sl-procedure-inn-ttl subpage-ttl menu-inn-ttl">
              <h2 class="under-line">アートメイク施術の流れ</h2>
            </div>
            <div class="sl-procedure-inn-content pro-list">
              <div class="pro-list-num"><span>01</span></div>
              <div class="d-fl pro-list-post">
                <div class="h-line pc"></div>
                <article class="d-fl">
                  <h3 class="sp"><span>01.</span>ヒアリング</h3>
                  <figure>
                    <img class="pc" src="<?php echo get_template_directory_uri(); ?>/img/procedure/procedure-01.png"
                      alt="ヒアリング">
                    <img class="sp" src="<?php echo get_template_directory_uri(); ?>/img/procedure/procedure-01-sp.png"
                      alt="ヒアリング">
                  </figure>
                  <div>
                    <h3 class="pc">ヒアリング</h3>
                    <p>初めにアートメイクの施術に関する流れをご説明。その後、お客様の普段のメイクをヒントに、お客様の「なりたい眉」をヒアリングします。<br>
                    このヒアリングを元に経験豊かな施術者がお客様に最適なデザインをご提案します。また、ヒアリングの際に、<span class="color-02"><strong>不安な点や疑問に感じることなどもお気軽にお尋ねください。</strong></span></p>
                  </div>
                </article>
              </div>
              <div class="pro-list-num">02</div>
              <div class="d-fl pro-list-post">
                <div class="h-line pc"></div>
                <article class="d-fl">
                  <h3 class="sp"><span>02.</span>デッサンにてデザイン確認</h3>
                  <figure>
                    <img class="pc" src="<?php echo get_template_directory_uri(); ?>/img/procedure/procedure-02.png"
                      alt="デッサンにてデザイン確認">
                    <img class="sp" src="<?php echo get_template_directory_uri(); ?>/img/procedure/procedure-02-sp.png"
                      alt="デッサンにてデザイン確認">
                  </figure>
                  <div>
                    <h3 class="pc">デッサンにてデザイン確認</h3>
                    <p>アートメイクの肝はデッサン能力です。<span class="color-02"><strong>お伺いしたご希望のデザインをもとに筋肉の走行や骨格を考慮しながらお客様のなりたい眉を体現いたします。</strong></span><br>
                    この際、眉毛の角度や太さなど細かなご要望にしっかりと対応いたします。<br>
                    ※筋肉の走行や骨格に大きく逸脱するデザインは難しい場合がございます。</p>
                  </div>
                </article>
              </div>
              <div class="pro-list-num">03</div>
              <div class="d-fl pro-list-post">
                <div class="h-line pc"></div>
                <article class="d-fl">
                  <h3 class="sp"><span>03.</span>デザインのすり合わせ</h3>
                  <figure>
                    <img class="pc" src="<?php echo get_template_directory_uri(); ?>/img/procedure/procedure-03.png"
                      alt="デザインのすり合わせ">
                    <img class="sp" src="<?php echo get_template_directory_uri(); ?>/img/procedure/procedure-03-sp.png"
                      alt="デザインのすり合わせ">
                  </figure>
                  <div>
                    <h3 class="pc">デザインのすり合わせ</h3>
                    <p>施術者が描いたデッサンをデジタルスケールを用いて最終確認いたします。<br>
                    その際に、鏡を見ながら、少しずつ微調整を行ってまいります。この段階で<span class="color-02"><strong>100％ご満足いただいてから施術に入ります。</strong></span></p>
                  </div>
                </article>
              </div>
              <div class="pro-list-num">04</div>
              <div class="d-fl pro-list-post">
                <div class="h-line pc"></div>
                <article class="d-fl">
                  <h3 class="sp"><span>04.</span>麻酔</h3>
                  <figure>
                    <img class="pc" src="<?php echo get_template_directory_uri(); ?>/img/procedure/procedure-04.png"
                      alt="麻酔">
                    <img class="sp" src="<?php echo get_template_directory_uri(); ?>/img/procedure/procedure-04-sp.png"
                      alt="麻酔">
                  </figure>
                  <div>
                    <h3 class="pc">麻酔</h3>
                    <p>他院では通常1種類しか麻酔を使わないことが多いですが、<span class="color-02"><strong>当院では2種類の表面麻酔を使用</strong></span>いたします。<br>
                    痛みの程度には個人差がありますが、極力痛みを感じさせない施術となっております。痛みを感じる場合には都度麻酔を追加いたします。</p>
                  </div>
                </article>
              </div>
              <div class="pro-list-num">05</div>
              <div class="d-fl pro-list-post">
                <div class="h-line pc"></div>
                <article class="d-fl">
                  <h3 class="sp"><span>05.</span>施術</h3>
                  <figure>
                    <img class="pc" src="<?php echo get_template_directory_uri(); ?>/img/procedure/procedure-05.png"
                      alt="施術">
                    <img class="sp" src="<?php echo get_template_directory_uri(); ?>/img/procedure/procedure-05-sp.png"
                      alt="施術">
                  </figure>
                  <div>
                    <h3 class="pc">施術</h3>
                    <p>いよいよ施術スタート。所要時間の目安は以下の通りです。 <br>
                      アイブロウ(眉)・・・2時間30分<br>
                      リップ・・・3時間<br>
                      ＊2回目以降リタッチの方は30分程短く終わります。 </p>
                  </div>
                </article>
              </div>
              <div class="pro-list-num">06</div>
              <div class="d-fl pro-list-post">
                <div class="h-line pc"></div>
                <article class="d-fl">
                  <h3 class="sp"><span>06.</span>アフターケア</h3>
                  <figure>
                    <img class="pc" src="<?php echo get_template_directory_uri(); ?>/img/procedure/procedure-06.png"
                      alt="アフターケア">
                    <img class="sp" src="<?php echo get_template_directory_uri(); ?>/img/procedure/procedure-06-sp.png"
                      alt="アフターケア">
                  </figure>
                  <div>
                    <h3 class="pc">アフターケア</h3>
                    <p>施術後のアフターケアはとても重要です。まずは<span class="color-02"><strong>1週間水に濡らさない</strong></span>ようにしましょう。施術部位に毎日ワセリンを塗布し乾燥を防ぎます。3日程度で皮が向けますが、この間も触らないように気をつけましょう。<br>
                    施術後2週間、汗をかく行為(有酸素運動、サウナ、半身浴)はお控え下さい。代謝が上がり定着が悪くなる可能性がございます。</p>
                  </div>
                </article>
              </div>
            </div>
          </div>
        </div>
        <div id="differences" class="sl-differences">
          <div class="menu-inn sl-differences-inn">
            <div class="sl-differences-inn-ttl subpage-ttl menu-inn-ttl">
              <h2 class="under-line">各メニューの違い</h2>
            </div>
            <div class="sl-differences-inn-content">
              <div class="pg-text">
                <p>眉毛のアートメイクには以下の3つの手法があり、それぞれ仕上がりに特徴があります。</p>
              </div>
              <div class="diff-wr">
                <article class="d-fl">
                  <figure>
                    <img src="<?php echo get_template_directory_uri(); ?>/img/differences/differences-01.jpg"
                      alt="differences">
                  </figure>
                  <div>
                    <h3>パウダー法 <span class="cate">通称2D</span></h3>
                    <p>針でドット状に目頭から目尻へ濃くグラデーションを入れていく方法で従来主流とされてきたアートメイクの手法。パウダーアイブローでメイクしたような仕上がりです。</p>
                  </div>
                </article>
                <article class="d-fl">
                  <figure>
                    <img src="<?php echo get_template_directory_uri(); ?>/img/differences/differences-02.jpg"
                      alt="differences">
                  </figure>
                  <div>
                    <h3>ストローク法 <span class="cate">通称3D</span></h3>
                    <p>毛流れに沿って、1本1本毛を描くように色を入れていく方法で、<br>「マイクロブレーディング」と呼ばれる手法です。</p>
                  </div>
                </article>
                <article class="d-fl">
                  <figure>
                    <img src="<?php echo get_template_directory_uri(); ?>/img/differences/differences-03.jpg"
                      alt="differences">
                  </figure>
                  <div>
                    <h3>パウダー＋ストローク法 <span class="cate">通称4D</span></h3>
                    <p>上記のパウダー法とストローク法を合わせた方法。</p>
                  </div>
                </article>
              </div>
            </div>
            <div class="pg-text sl-differences-inn-ft">
              <p><span class="color-02"><strong>LIANクリニックではヒアリングしながら、お客様が目指すスタイルを叶えるために必要な手法をフルオーダーメイドにてご提案致します。</strong></span><br>
              主流は3Dもしくは4Dとなり今最も人気のあるスタイルです。</p>
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
                <h3 class="price-ttl"><span>眉</span></h3>
                <div class="price-list">
                  <div class="d-fl price-list-wr">
                    <div class="price-list-wr-l">
                      <h3>初回</h3>
                      <ul>
                        <li class="d-fl">
                          <p>通常</p>
                          <p class="dash-line"></p>
                          <p>¥54,780</p>
                        </li>
                        <li class="d-fl">
                          <p>部分写真モニタ</p>
                          <p class="dash-line"></p>
                          <p>¥52,580</p>
                        </li>
                        <li class="d-fl">
                          <p>全顔写真モニタ</p>
                          <p class="dash-line"></p>
                          <p>¥49,280</p>
                        </li>
                        <li class="d-fl">
                          <p>友人割※</p>
                          <p class="dash-line"></p>
                          <p>¥49,280</p>
                        </li>
                      </ul>
                    </div>
                    <div class="price-list-wr-l">
                      <h3>リタッチ</h3>
                      <ul>
                        <li class="d-fl">
                          <p>通常</p>
                          <p class="dash-line"></p>
                          <p>¥54,780</p>
                        </li>
                        <li class="d-fl">
                          <p>友人割※</p>
                          <p class="dash-line"></p>
                          <p>¥49,280</p>
                        </li>
                      </ul>
                    </div>
                  </div>
                  <p class="price-list-warn">※新たに紹介したご友人が予約した場合に適応<br>※すべて施術1回の料金となります。<br>※指名料：11000円〜</p>
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
        <div id="precautions" class="sl-precautions">
          <div class="menu-inn sl-precautions-inn">
            <div class="sl-precautions-inn-ttl subpage-ttl menu-inn-ttl">
              <h2 class="under-line">アートメイクの注意事項</h2>
            </div>
            <div class="sl-precautions-inn-content">
              <div class="pg-text">
                <p><strong>アートメイクは1回では定着はしません。</strong><br>
                  1回目で上手く入らなかった箇所に2回目で眉を補い完成と成るため、薄くなってしまってから施術を受けると上手く定着しないです。<br>
                  そのため、<u>3ヶ月以内で2回目の施術を受けることを推奨</u>しております。<br>
                  当院では大体1ヶ月半先まで埋まっていることが多いので、初回施術後にリタッチのご予約を取ることを推奨しております。</p>
                <p>また、<strong>アートメイクを受けられる前後3週間の期間に、他の美容施術(ピーリングや脱毛・美容手術、ボトックス、ヒアルロン酸、脂肪融解注射、エンビロン・ゼオスキン等)を、行った・行う予定がある方は染料の定着が悪くなる恐れがあります。</strong><br>
                  該当する施術を受けられた方は、ご予約頂く前にご相談くださいますようお願いいたします。<br>
                  <u>妊娠中・授乳中の方に関しましても事前にお問い合わせください。</u></p>
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
                    'terms' => 'eyebrow'
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
        <div id="instagram" class="sl-instagram">
          <div class="menu-inn sl-instagram-inn">
            <div class="sl-instagram-inn-ttl subpage-ttl menu-inn-ttl">
              <h2 class="under-line">インスタグラム </h2>
            </div>
            <div class="sl-instagram-inn-content">
              <h3>@medbeauty.artmake<br class="sp" /><span> ON INSTAGRAM</span></h3>
              <ul class="pc-insta d-fl">
                <?php do_action('insta_feed', '17841438539147400' ); ?>
              </ul>
            </div>
            <div class="sl-instagram-inn-sns">
              <ul class="d-fl">
                <li>
                  <a href="https://www.instagram.com/medbeauty.artmake/" rel="alternate" target="_blank"><img
                      src="<?php echo get_template_directory_uri(); ?>/img/iconb-ig.png" alt=""></a>
                </li>
                <li>
                  <a href="https://twitter.com/yukimaromed" rel="alternate" target="_blank"><img
                      src="<?php echo get_template_directory_uri(); ?>/img/iconb-tw.png" alt=""></a>
                </li>
                <li>
                  <a href="https://youtube.com/channel/UCEHr4nCFMhBi8e2PkEYmYAw" rel="alternate" target="_blank"><img
                      src="<?php echo get_template_directory_uri(); ?>/img/iconb-yt.png" alt=""></a>
                </li>
                <li>
                  <a href="https://www.tiktok.com/@lianclinic?_t=8UsHNwdliM6&_r=1" rel="alternate" target="_blank"><img
                      src="<?php echo get_template_directory_uri(); ?>/img/iconb-tk.png" alt=""></a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>          
    </div>
    <?php get_template_part( 'footer-company' );?>
  </main>
</div>
<?php
get_footer();