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
          <h1 class="under-line">特定商取引法に基づく表示</h1>
        </div>
        <div class="sl-pp-inn-content is-policy">
          <table>
            <tbody>
              <tr>
                <th>事業者名</th>
                <td>一般社団法人 LIEN</td>
              </tr>
              <tr>
                <th>所在地</th>
                <td>
                  LIAN clinic
                  <br>〒150-0001<br>東京都渋谷区神宮前４丁目 ２-１２<br>wes building 2F
                  <!--
                  <br><br>LIAN clinic表参道ANNEX
                  <br>〒150-0001<br>東京都渋谷区神宮前４丁目４−１３<br>神宮前柴田ビル 1階
                  -->
                </td>
              </tr>
              <tr>
                <th>代表</th>
                <td>医師・院長　藤尾 謙太</td>
              </tr>
              <tr>
                <th>電話番号</th>
                <td><a href="tel:03-3470-5678">03-3470-5678</a></td>
              </tr>
              <tr>
                <th>サイトURL</th>
                <td><a href="https://lianclinic.net/">https://lianclinic.net/</a></td>
              </tr>
              <tr>
                <th>提供価格</th>
                <td>プランごとに異なります。詳しくは、当サイトの<a href="https://lianclinic.net/price/">料金ページ</a>をご覧ください。</td>
              </tr>
              <tr>
                <th>支払い方法</th>
                <td>現金、クレジットカード決済</td>
              </tr>
              <tr>
                <th>支払い時期</th>
                <td>各コース利用月の初回来院日にお支払い頂きます。</td>
              </tr>
              <tr>
                <th>サービスの提供時期</th>
                <td>お申込み後すぐにご利用可能です。</td>
              </tr>
              <tr>
                <th>返品について</th>
                <td>サービスの特性上、返品はできません。</td>
              </tr>
              <tr>
                <th>問い合わせ先</th>
                <td><a href="mailto:contact@lianclinic.net" target="_blank">contact@lianclinic.net</a></td>
              </tr>
              <tr>
                <th>その他</th>
                <td>原則サービスのお申し込みから3か月以上の継続利用が条件となります。<br>別途ご契約の際、お客さまにご提示するサービスの概要を記載した書面等をよくご確認ください。</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </main>
</div>

<?php
get_footer();
