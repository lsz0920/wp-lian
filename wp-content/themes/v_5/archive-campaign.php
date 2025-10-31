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
    <div id="column" class="sl-column">
      <div class="sl-column-inn">
        <div class="sl-column-inn-ttl subpage-ttl">
          <h1 class="under-line">Information</h1>
        </div>
        <div class="d-fl sl-column-inn-content">
          <div class="column-cate">
            <div class="column-cate-wr category campaign-cate-sp-dropdown">
              <h3 class="column-cate-wr-ttl">CATEGORY</h3>
              <ul class="column-cate-wr-list">
                <li>
                  <a href="<?php echo get_post_type_archive_link( 'campaign' ); ?>" rel="campaign">全て</a>
                </li>
                <?php echo wpdocs_custom_taxonomies_terms_links('campaign_category'); ?>
              </ul>
            </div>
            <div class="column-cate-wr archive campaign-archive-sp-dropdown">
              <h3 class="column-cate-wr-ttl">ARCHIVE</h3>
              <ul class="column-cate-wr-list">
                <li>
                  <a href="<?php echo get_post_type_archive_link( 'campaign' ); ?>" rel="campaign">全て</a>
                </li>
                <?php wpdocs_custom_get_monthly_archive_array('campaign'); ?>
              </ul>
            </div>
          </div>
          <div class="column-content">
            <div class="d-fl column-content-list">
              <?php if (have_posts()) :
                  while ( have_posts() ) : the_post();

                    /*
                    * Include the Post-Type-specific template for the content.
                    * If you want to override this in a child theme, then include a file
                    * called content-___.php (where ___ is the Post Type name) and that will be used instead.
                    */
                    get_template_part( 'template-parts/content-column', get_post_type() );

                  endwhile;


                else :


                endif;wp_reset_query();
              ?>
            </div>
          </div>
        </div>
        <div class="sl-column-inn-pagination">
          <?php wp_pagenavi();?>
        </div>
      </div>
    </div>

	  <?php get_template_part( 'footer-company' );?>
  </main>
</div>

<?php
get_footer();
