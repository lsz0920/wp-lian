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
          <h1 class="under-line">公開準備中</h1>
        </div>
        <p style="text-align: center;font-size: 14px;line-height:2;">現在ページの準備を進めています。<br class="sp"/>今しばらくお待ちくださいませ。</p>
      </div>
    </div>
    <div id="reservation" class="sl-reservation sbprice">
      <div class="menu-inn sl-reservation-inn sbprice-inn">
        <div class="sl-reservation-inn-ttl subpage-ttl">
          <h2 class="under-line">ご予約</h2>
        </div>
        <div class="sl-reservation-inn-content sbprice-content">
          <div class="reservation">
            <div class="reservation-wr">
              <p>ご予約はLINE予約で承っております。</p>
              <?php $contactTxt01 = CFS()->get('text01', 27); $contactTxt02 = CFS()->get('text02', 27); if($contactTxt01 != ''): ?>
              <h3><span class="l-slash">\ </span> <?php echo $contactTxt01; ?><br
                  class="sp" /><?php echo $contactTxt02; ?> <span class="r-slash"> /</span></h3>
              <?php endif; ?>
              <a href="https://lin.ee/U5tTSaw" target="_blank" rel="nofollow noreferrer">
                <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/line-img.png" alt="">
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>
</div>

<?php
get_footer();
