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
      <div id="case" class="sl-case">
        <div class="sl-case-inn">
          <div class="sl-case-inn-ttl subpage-ttl subpage-ttl02">
            <h1 class="under-line">症例写真</h1>
          </div>
          <div class="sl-case-inn-content">

            <h2 class="services-cat-ttl">症例写真一覧</h2>
           
            <?php echo get_template_part('template-parts/case-search-nav'); ?>
           
            <h2 class="services-cat-ttl" style="margin-top: 64px;"><?php single_term_title(); ?>の症例一覧</h2>
            <?php echo get_template_part('template-parts/case-contents'); ?>
            
            <div class="sl-case-inn-pagination">
              <?php wp_pagenavi();?>
            </div>
          </div>
          <!-- sl-case-inn-content -->
        </div>
      </div>
      </main>
    </div>

    <?php echo get_template_part('template-parts/case-modal'); ?>

<?php
get_footer();