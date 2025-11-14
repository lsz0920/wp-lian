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
    <div class="mainBox">
		<div class="checkBg"><img data-skip-lazy src="<?php echo get_template_directory_uri(); ?>/renew2025/img/common/com_bg01.jpg" alt=""></div>
		<div class="comInfo">
			<div id="pagePath">
				<ul>
					<li><a href="<?php echo home_url();?>">Top</a>/</li>
					<li>お問い合わせフォーム</li>
				</ul>
			</div>
    <?php $locale = get_locale();
    if ('en_US' == $locale  ) { ?>
    <div id="inquiry" class="sl-inquiry">
      <div class="sl-inquiry-inn pb-0">
       
          <h2 class="heading01 roboto">Inquiry Form</h2>
       
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
      
          <h2 class="heading01">お問い合わせフォーム</h2>
       
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
		</div></div>

  </main>
</div>
<?php
get_footer();
