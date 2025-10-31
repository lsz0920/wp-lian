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
    <div class="breadcrumbs">
      <div class="breadcrumbs-inn">
        <?php
          if(function_exists( 'yoast_breadcrumb' )){
            yoast_breadcrumb( '<div id="breadcrumbs">', '</div>');
          }
        ?>
      </div>
    </div>
    <div id="pp" class="sl-pp">
      <div class="sl-pp-inn">
        <div class="sl-pp-inn-ttl subpage-ttl">
          <h1 class="under-line">医療広告ガイドライン</h1>
        </div>
        <div class="sl-pp-inn-content is-policy">
            <p>
            リアンクリニックは法律及び法令に関連するガイドラインを遵守しております
            </p>
            <p>
            当院は、2018年6月に厚生労働省により改正・施行された「医療広告ガイドライン」に従い、ホームページの症例写真（術前又は術後の写真）を掲載する際に必要とされる「治療内容」「費用」主なリスクや副作用等を明確に記載しております。
            </p>
            <p>
            患者様にはご迷惑、ご不便をおかけいたしますが、ご理解のほどよろしくお願い申し上げます。
            </p>
            <p>
            当院では引き続き医療広告ガイドラインに沿ったホームページの運用をおこなってまいります。
            </p>
            <h2>医療広告ガイドラインとは</h2>


            <p>
            <a href="https://www.mhlw.go.jp/file/06-Seisakujouhou-10800000-Iseikyoku/0000209841.pdf">医療広告ガイドライン</a>は、厚生労働省が定める「医業若しくは歯科医業又は病院若しくは診療所に関する広告等に関する指針」で、患者様に客観的かつ正確な情報の伝達を行うことを目的としております。
            </p>
            <p>
            医療広告ガイドラインより以下抜粋
            </p>
            <h2>第1 広告規制の趣旨</h2>


            <h3>1 医療法の一部改正について</h3>


            <p>
            医療機関のウェブサイト等についても、他の広告媒体と同様に広告可能事項を限定することとした場合、詳細な診療内容など患者等が求める情報の円滑な提供が妨げられるおそれがあることから、一定の条件の下に広告可能事項の限定を解除することとしている。
            </p>
            <h3>基本的な考え方</h3>


            <p>
            禁止される広告の基本的な考え方
            </p>
            <ol>

            <li>比較優良広告

            <li>誇大広告

            <li>公序良俗に反する内容の広告

            <li>患者その他の者の主観又は伝聞に基づく、治療等の内容又は効果に関する体験談の広告

            <li>治療等の内容又は効果について、患者用を誤認させるおそれがある治療等の前又は後の写真等の広告
            </li>
            </ol>
            <h2>第3 禁止される広告について</h2>


            <h3>禁止の対象となる広告の内容</h3>


            <p>
            治療等の内容又は効果について、患者等を誤認させるおそれがある治療等の前又は後の写真等
            </p>
            <p>
            術前又は術後の写真に通常必要とされる治療内容、費用等に関する事項や、治療等の主なリスク、副作用等に関する事項等の詳細な説明を付した場合についてはこれに当たらないものであること。
            </p>
            <p>
            さらに、当該情報の掲載場所については、患者等にとって分かりやすいよう十分に配慮し、例えば、リンクを張った先のページへ掲載したり、利点や長所に関する情報と比べて極端に小さな文字で掲載したりといった形式を採用しないこと。
            </p>
            <p>
            医政発０５０８第１号 平 成 30 年 5 月 8 日 医業若しくは歯科医業又は病院若しくは診療所に関する広告等に関する指針（医療広告ガイドライン）等について
            </p>
            <p>
            参照；
            </p>
            <p>
            <a href="https://www.mhlw.go.jp/file/06-Seisakujouhou-10800000-Iseikyoku/0000209841.pdf">医療広告ガイドライン</a>
            </p>
            <p>
            <a href="https://www.mhlw.go.jp/stf/seisakunitsuite/bunya/kenkou_iryou/iryou/kokokukisei/index.html">医療法における病院等の広告規制について</a>
            </p>
        </div>
      </div>
    </div>
  </main>
</div>

<?php
get_footer();
