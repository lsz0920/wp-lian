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
            yoast_breadcrumb( '<div id="breadcrumbsAll" class="breadcrumbs-inn-All">', '</div>');
          }
        ?>
      </div>
    </div>
    <div id="faq" class="sl-faq">
      <div class="sl-faq-inn">
        <div class="sl-faq-inn-ttl subpage-ttl">
          <h2 class="under-line">FAQ</h2>
        </div>
        <div class="d-fl sl-faq-inn-content">
          <div class="faq-cate faq-cate-sp-dropdown">
            <h3 class="faq-cate-ttl">CATEGORY</h3>
            <ul class="faq-cate-list">
              <li>
                <a href="<?php echo get_post_type_archive_link( 'faq' ); ?>" rel="faq">全て</a>
              </li>
              <?php echo wpdocs_custom_taxonomies_terms_links('faq_category'); ?>
            </ul>
          </div>
          <div class="faq-content">
            <div class="faq-content-wr">
              <?php $term = get_queried_object();  ?>
              <h2 class="faq-content-wr-ttl">[ <?php echo $term->name; ?> ]</h2>
              <div class="faq-content-wr-list">
                <?php if (have_posts()) :
                    while (have_posts() ) : the_post();

                      /*
                      * Include the Post-Type-specific template for the content.
                      * If you want to override this in a child theme, then include a file
                      * called content-___.php (where ___ is the Post Type name) and that will be used instead.
                      */
                      get_template_part( 'template-parts/content-faq', get_post_type() );

                    endwhile;


                  else :

                  endif;wp_reset_query();
                ?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

	  <?php get_template_part( 'footer-company' );?>
  </main>
</div>

<?php
get_footer();
