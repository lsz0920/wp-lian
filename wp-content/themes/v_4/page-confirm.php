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
    <div id="inquiry" class="sl-inquiry">
      <div class="sl-inquiry-inn inquiry-form-inn confirm">
        <div class="sl-inquiry-inn-ttl subpage-ttl">
          <h1 class="under-line">お問い合わせフォーム</h1>
        </div>
        <div class="sl-inquiry-inn-content inquiry-form">
          <div class="sl-inquiry-inn-content-wr">
            <div class="sl-inquiry-inn-content-wr-navi inquiry-form-wr">
              <div class="d-fl inquiry-form-wr-nav">
                <div class="inquiry-form-wr-nav-item">
                  <p>01. 入力</p>
                </div>
                <div class="inquiry-form-wr-nav-item current-step">
                  <p>02. 確認</p>
                </div>
                <div class="inquiry-form-wr-nav-item">
                  <p>03. 送信</p>
                </div>
              </div>
            </div>
            <div class="sl-inquiry-inn-content-wr-form">
              <p class="required-warn"><span>※</span>は必須項目となりますので必ず<br class="sp">ご入力ください。</p>
              <div class="inquiry-form-contact">
                <?php echo do_shortcode( '[contact-form-7 id="36" title="inquiry-confirm"]' ); ?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <style>
    .sl-inquiry-inn-content-wr-form .contact-form-btns .prev .prev-btn input{
      display: block !important;
    }
    </style>
	  <?php get_template_part( 'footer-company' );?>
  </main>
</div>

<?php
get_footer();
