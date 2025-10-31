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
    <div id="staff" class="sl-staff">
      <div class="sl-staff-inn">
        <div class="sl-staff-inn-ttl subpage-ttl subpage-ttl02">
          <h1 class="under-line">Staff</h1>
        </div>
        <div class="sl-staff-inn-content">
          <div class="sl-staff-inn-content-fl staff-fl d-fl">
              <?php if ( have_posts() ) : ?>
              <?php
              /* Start the Loop */
              while ( have_posts() ) :
                the_post();
                get_template_part( 'template-parts/content-staff', get_post_type() );
              endwhile;
              the_posts_navigation();
              endif;
            ?>
          </div>
          <!-- <div class="sl-staff-inn-content-list">
            <div class="staff-list">
              <?php if ( have_posts() ) : ?>
              <?php
                  while ( have_posts() ) :
                    the_post();
                    get_template_part( 'template-parts/content-staff-slider', get_post_type() );
                  endwhile;
                  the_posts_navigation();
                endif;
              ?>
            </div>
          </div> -->
        </div>
      </div>
    </div>

	  <?php get_template_part( 'footer-company' );?>
  </main>
</div>

<?php
get_footer();
