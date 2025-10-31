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
    <div class="breadcrumbs breadcrumbs02">
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
      <div id="about" class="sl-about">
        <div class="sl-about-inn">
          <div class="sl-about-inn-ttl subpage-ttl subpage-ttl02">
            <h1 class="under-line">About us</h1>
          </div>
          <div class="sl-about-inn-content">
            <div class="about-fl">
              <div class="w-border pc"></div>
              <div class="about-fl-inn d-fl">
                <div class="image">
                  <div class="w-border sp"></div>
                  <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/about-img-sp.png" alt="About us" class="sp">
                  <span>
                    <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/w-logo.svg" alt="LIAN">
                  </span>
                </div>
                <div class="content">
                  <h3>LIAN clinic<br>linking you to beauty</h3>
                  <p>With the recent proliferation of cosmetic clinics, many people say they do not know which clinic to choose</p>
                  <p>LIAN clinic connects you with a cosmetic dermatologist, and even connects your loved ones with a cosmetic dermatologist to further and deepen the bond. We aim to be such a cosmetic dermatology clinic</p>
                </div>
              </div>
            </div>
            <div class="about-staff">
              <div class="about-staff-ttl subpage-ttl">
                <h1 class="under-line">Staff</h1>
              </div>
              <div class="about-staff-fl">
                <div class="about-staff-fl-inn staff-fl d-fl">
                <?php
                  $args = array(
                    'posts_per_page' => -1,
                    'post_type' => 'staff',
                  );
                  $wp_query = new WP_Query($args);
                  if ( $wp_query->have_posts() ) : ?>
                    <?php
                    /* Start the Loop */
                    while ( $wp_query->have_posts() ) :
                      $wp_query->the_post();
                      get_template_part( 'template-parts/content-staff', get_post_type() );
                    endwhile;
                    endif;
                  ?>
  
                </div>
              </div>
            </div>
            <div class="about-concept">
              <div class="about-concept-inn">
                <div class="about-concept-inn-ttl">
                  <h3>Concept<span>Thoughts behind LIAN</span></h3>
                </div>
                <div class="about-concept-inn-fl d-fl">
                  <div class="item left">
                    <ul class="d-fl">
                      <li>Lien</li>
                      <li>Lian</li>
                    </ul>
                    <p>Lien is French for something <br>that connects something to something else.</p>
                  </div>
                  <div class="item right">
                    <dl>
                      <dt>Eternal bonds</dt>
                      <dd>lien eternel</dd>
                    </dl>
                    <dl>
                      <dt>Family bonds</dt>
                      <dd>lien de parente</dd>
                    </dl>
                    <dl>
                      <dt>Friend bonds</dt>
                      <dd>lien de I’amitie</dd>
                    </dl>
                  </div>
                </div>
                <div class="about-concept-inn-txt">
                  <p>Lien means "bond" in French. Now that there are so many beauty clinics in the market, more and more people do not know which clinic to choose. We chose the name LIAN to express our desire to value communication and the bonds we form with each of our clients through cosmetic medicine.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    <?php } else { ?>
      <div id="about" class="sl-about">
        <div class="sl-about-inn">
          <div class="sl-about-inn-ttl subpage-ttl subpage-ttl02">
            <h1 class="under-line">About us</h1>
          </div>
          <div class="sl-about-inn-content">
            <div class="about-fl">
              <div class="w-border pc"></div>
              <div class="about-fl-inn d-fl">
                <div class="image">
                  <div class="w-border sp"></div>
                  <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/about-img-sp.png" alt="About us" class="sp">
                  <span>
                    <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/w-logo.svg" alt="LIAN">
                  </span>
                </div>
                <div class="content">
                  <h3>あなたと<br>美しさをつなぐ<br>クリニック</h3>
                  <p>美容クリニックが乱立している今、どのクリニックを選んで良いか分からないという人が多いです。</p>
                  <p>リアンクリニックでは、美容皮膚科とあなたを”繋げ”、さらにはあなたの大切な人と美容皮膚科を繋げて”絆をさらに深める”。そんな美容皮膚科を目指しております。</p>
                </div>
              </div>
            </div>
            <div class="about-staff">
              <div class="about-staff-ttl subpage-ttl">
                <h1 class="under-line">Staff</h1>
              </div>
              <div class="about-staff-fl">
                <div class="about-staff-fl-inn staff-fl d-fl">
                <?php
                  $args = array(
                    'posts_per_page' => -1,
                    'post_type' => 'staff',
                  );
                  $wp_query = new WP_Query($args);
                  if ( $wp_query->have_posts() ) : ?>
                    <?php
                    /* Start the Loop */
                    while ( $wp_query->have_posts() ) :
                      $wp_query->the_post();
                      get_template_part( 'template-parts/content-staff', get_post_type() );
                    endwhile;
                    endif;
                  ?>

                </div>
              </div>
            </div>
            <div class="about-concept">
              <div class="about-concept-inn">
                <div class="about-concept-inn-ttl">
                  <h3>Concept<span>LIANに込められた思い</span></h3>
                </div>
                <div class="about-concept-inn-fl d-fl">
                  <div class="item left">
                    <ul class="d-fl">
                      <li>Lien</li>
                      <li>Lian</li>
                    </ul>
                    <p>フランス語で何かと何かを<br>繋げるもの</p>
                  </div>
                  <div class="item right">
                    <dl>
                      <dt>永遠の絆</dt>
                      <dd>lien eternel (リヤネテルネル）</dd>
                    </dl>
                    <dl>
                      <dt>家族の絆</dt>
                      <dd>lien de parente (リアン  ドゥ  パロンテ）</dd>
                    </dl>
                    <dl>
                      <dt>友達の絆</dt>
                      <dd>lien de I’amitie (リアン  ドゥ  ラミティエ）</dd>
                    </dl>
                  </div>
                </div>
                <div class="about-concept-inn-txt">
                  <p>Lienはフランス語で「絆」という意味です。美容クリニックが乱立している今、どのクリニックを選んで良いか分からないという方が増えています。我々はコミュニケーションを大切にし、美容医療を通じて、お客様一人ひとりとの絆を大切にしたいという思いを込めてLianという名前にしました。</p>
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
