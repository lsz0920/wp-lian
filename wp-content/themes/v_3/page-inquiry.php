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
                <?php echo do_shortcode( '[contact-form-7 id="35" title="inquiry"]' ); ?>
              </div>
            </div>
          </div>
        </div>
      </div>
<!--       <div class="sl-inquiry-inn inquiry-form-inn">
        <div class="sl-inquiry-inn-ttl subpage-ttl">
          <h2 class="under-line">ご予約のお客様</h2>
        </div>
		  <div class="sl-inquiry-inn-content reservation-content">
          <div class="reservation">
            <div class="reservation-wr">
              <p>ご予約はLINE予約で承っております。</p>
              <?php $contactTxt01 = CFS()->get('text01', 27); $contactTxt02 = CFS()->get('text02', 27); if($contactTxt01 != ''): ?>
              <h3><span class="l-slash">\ </span> <?php echo $contactTxt01; ?><br
                  class="sp" /><?php echo $contactTxt02; ?> <span class="r-slash"> /</span></h3>
              <?php endif; ?>
              <a href="https://line.me/R/ti/p/@115jngom" target="_blank" rel="nofollow noreferrer">
                <img src="<?php echo get_template_directory_uri(); ?>/img/line-img.png" alt="">
              </a>
            </div>
          </div>
        </div>
      </div> -->
    </div>

	  <?php get_template_part( 'footer-company' );?>
  </main>
</div>
<?php
get_footer();
