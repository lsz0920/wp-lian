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
    <?php $locale = get_locale();
    if ('en_US' == $locale  ) { ?>
    <div id="inquiry" class="sl-inquiry">
      <div class="sl-inquiry-inn pb-0">
        <div class="sl-inquiry-inn-ttl subpage-ttl">
          <h1 class="under-line">Inquiry Form</h1>
        </div>
		    <div class="sl-inquiry-inn-content inquiry-form">
          <div class="sl-inquiry-inn-content-wr">
            <div class="sl-inquiry-inn-content-wr-navi inquiry-form-wr">
              <div class="d-fl inquiry-form-wr-nav en-nav">
                <div class="inquiry-form-wr-nav-item current-step">
                  <p>01. input</p>
                </div>
                <div class="inquiry-form-wr-nav-item">
                  <p>02. confirmation</p>
                </div>
                <div class="inquiry-form-wr-nav-item">
                  <p>03. transmission</p>
                </div>
              </div>
            </div>
            <div class="sl-inquiry-inn-content-wr-form">
              <p class="required-warn">Fields marked with an asterisk (<span>*</span>) are required.</p>
              <div class="inquiry-form-contact">
                <?php echo do_shortcode( '[contact-form-7 id="2599" title="inquiry_en"]' ); ?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <?php } else { ?>
      <div id="inquiry" class="sl-inquiry">
      <div class="sl-inquiry-inn pb-0">
        <div class="sl-inquiry-inn-ttl subpage-ttl">
          <h1 class="under-line">お問い合わせフォーム</h1>
        </div>
		          <div class="sl-inquiry-inn-content inquiry-form">
          <div class="sl-inquiry-inn-content-wr">
            <div class="sl-inquiry-inn-content-wr-navi inquiry-form-wr">
              <div class="d-fl inquiry-form-wr-nav">
                <div class="inquiry-form-wr-nav-item current-step">
                  <p>01. 入力</p>
                </div>
                <div class="inquiry-form-wr-nav-item">
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
                <?php echo do_shortcode( '[contact-form-7 id="2632" title="inquiry"]' ); ?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <?php } ?>

	  <?php get_template_part( 'footer-company' );?>
  </main>
</div>
<?php
get_footer();
