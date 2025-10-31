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
          <h1 class="under-line">サイトマップ</h1>
        </div>
        <div class="sl-pp-inn-content is-sitemap">
            <div class="sitemap__wrap">

              <h2><a href="<?php echo home_url('/services/'); ?>">サービス</a></h2>
              <h3><a href="<?php echo home_url('/services/artmake/'); ?>">眉アートメイク</a></h3>
              <h3><a href="<?php echo home_url('/services/artmake-lip/'); ?>">リップアートメイク</a></h3>
              <h3><a href="<?php echo home_url('/services/artmake-eyeline/'); ?>">アイラインアートメイク</a></h3>
              <h3><a href="<?php echo home_url('/services/hifu/'); ?>">HIFU</a></h3>
              <h3><a href="<?php echo home_url('/services/sarmagen/'); ?>">サーマジェン</a></h3>
              <h3><a href="<?php echo home_url('/services/liftup-botox/'); ?>">リフトアップボトックス</a></h3>
              <h3><a href="<?php echo home_url('/services/thread-lift/'); ?>">糸リフト</a></h3>
              <h3><a href="<?php echo home_url('/services/thread/'); ?>">ショートスレッド</a></h3>
              <h3><a href="<?php echo home_url('/services/potenza/'); ?>">ポテンツァ</a></h3>
              <h3><a href="<?php echo home_url('/services/hyaluronic/'); ?>">ヒアルロン酸注入</a></h3>
              <h3><a href="<?php echo home_url('/services/volnewmer/'); ?>">ボルニューマ</a></h3>
              <h3><a href="<?php echo home_url('/services/peeling/'); ?>">ピーリング</a></h3>
              <h3><a href="<?php echo home_url('/services/photoipl/'); ?>">フォトipl</a></h3>
              <h3><a href="<?php echo home_url('/services/poreless-botox/'); ?>">ポアレスボトックス</a></h3>
              <h3><a href="<?php echo home_url('/services/botox/'); ?>">ボトックス</a></h3>
              <h3><a href="<?php echo home_url('/services/hifu-linear/'); ?>">HIFUリニア</a></h3>
              <h3><a href="<?php echo home_url('/services/fat-dissolve/'); ?>">脂肪溶解注射 カベリン</a></h3>
              <!--<h3><a href="<?php echo home_url('/services/exosomes/'); ?>">エクソソーム</a></h3>-->


              <H2><a href="<?php echo home_url('/price/'); ?>">料金表</a></H2>
              <H2><a href="<?php echo home_url('/staff/'); ?>">スタッフ紹介</a></H2>
              <H2><a href="<?php echo home_url('/about/'); ?>">クリニックについて</a></H2>
              <H2><a href="<?php echo home_url('/case/'); ?>">症例写真</a></H2>
              <H2><a href="<?php echo home_url('/cosmetics/'); ?>">ドクターズコスメ</a></H2>
              <H2><a href="<?php echo home_url('/campaign/'); ?>">Information</a></H2>
              <H2><a href="<?php echo home_url('/category/news'); ?>">ニュース</a></H2>
              <H2><a href="<?php echo home_url('/recruit'); ?>">採用情報</a></H2>
              <H2><a href="<?php echo home_url('/privacy-policy/'); ?>">プライバシーポリシー</a></H2>
              <H2><a href="<?php echo home_url('/guideline/'); ?>">医療広告ガイドライン</a></H2>
              <H2><a href="<?php echo home_url('/cancelpolicy/'); ?>">当院のキャンセルポリシーについて</a></H2>
              <H2><a href="<?php echo home_url('/tradelaw/'); ?>">特定商取引法に基づく表示</a></H2>
              
            </div>
            <div class="sitemap__wrap">
              
              <H2>Dr's Cosme</H2>
              <H3><a href="<?php echo home_url('/case_category/injection/'); ?>">アートメイク</a></H3>
              <H3><a href="<?php echo home_url('/case_category/hifu/'); ?>">HIFU</a></H3>
              <H3><a href="<?php echo home_url('/case_category/thermagen/'); ?>">サーマジェン</a></H3>
              <H3><a href="<?php echo home_url('/case_category/therma-needle/'); ?>">サーマニードル</a></H3>
              <H3><a href="<?php echo home_url('/case_category/short-thread/'); ?>">ショートスレッド</a></H3>
              <H3><a href="<?php echo home_url('/case_category/ipl/'); ?>">IPL</a></H3>
              <H3><a href="<?php echo home_url('/case_category/botox/'); ?>">ボトックス</a></H3>
              <H3><a href="<?php echo home_url('/case_category/fat-dissolving/'); ?>">脂肪溶解注射</a></H3>
              <H3><a href="<?php echo home_url('/case_category/sagging-treatment/'); ?>">たるみセット治療</a></H3>

              <H2><a href="<?php echo home_url('/faq/'); ?>">よくある質問</a></H2>
              <H3><a href="<?php echo home_url('/faq_category/volnewmer_cat/'); ?>">ボルニューマ</a></H3>
              <H3><a href="<?php echo home_url('/faq_category/hifu_cat/'); ?>">HIFU</a></H3>
              <H3><a href="<?php echo home_url('/faq_category/hifulinear_cat/'); ?>">HIFUリニア</a></H3>
              <H3><a href="<?php echo home_url('/faq_category/eyeline/'); ?>">アイライン</a></H3>
              <!--<H3><a href="<?php echo home_url('/faq_category/exosomes/'); ?>">エクソソーム</a></H3>-->
              <H3><a href="<?php echo home_url('/faq_category/sarmagen_cat/'); ?>">サーマジェン</a></H3>
              <H3><a href="<?php echo home_url('/faq_category/thread_cat/'); ?>">糸リフト</a></H3>
              <H3><a href="<?php echo home_url('/faq_category/thread-lift/'); ?>">ショートスレッド</a></H3>
              <H3><a href="<?php echo home_url('/faq_category/needle_cat/'); ?>">ニードルRF</a></H3>
              <H3><a href="<?php echo home_url('/faq_category/peeling_cat/'); ?>">ピーリング</a></H3>
              <H3><a href="<?php echo home_url('/faq_category/photoipl_cat/'); ?>">フォトipl</a></H3>
              <H3><a href="<?php echo home_url('/faq_category/poreless_cat/'); ?>">ポアレスボトックス</a></H3>
              <H3><a href="<?php echo home_url('/faq_category/botox_cat/'); ?>">ボトックス</a></H3>
              <H3><a href="<?php echo home_url('/faq_category/liftup_cat/'); ?>">リフトアップボトックス</a></H3>
              <H3><a href="<?php echo home_url('/faq_category/eyebrow/'); ?>">眉</a></H3>
              <H3><a href="<?php echo home_url('/faq_category/fatdissolve_cat/'); ?>">脂肪溶解注射　チンセラ</a></H3>

            </div>
        </div>
      </div>
    </div>
  </main>
</div>

<?php
get_footer();