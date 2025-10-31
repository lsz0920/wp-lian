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
        if (function_exists('yoast_breadcrumb')) {
          yoast_breadcrumb('<div id="breadcrumbsAll" class="breadcrumbs-inn-All">', '</div>');
        }
        ?>
      </div>
    </div>
    <?php $locale = get_locale();
    if ('en_US' == $locale  ) { ?>
      <div id="faq" class="sl-faq">
        <div class="sl-faq-inn">
          <div class="sl-faq-inn-ttl subpage-ttl">
            <div class="under-line subpage-ttl__inner">FAQ</div>
          </div>
          <div class="d-fl sl-faq-inn-content">
            <div class="faq-cate faq-cate-sp-dropdown">
              <h3 class="faq-cate-ttl">CATEGORY</h3>
              <ul class="faq-cate-list">
                <li>
                  <a href="<?php echo get_post_type_archive_link('faq'); ?>" rel="faq">All</a>
                </li>
                <?php 
                  // Get terms.
                  $terms = get_terms(array(
                    'taxonomy' => 'faq_category',
                    'hide_empty' => false,
                    'order' => 'DESC',
                  ));
                  foreach ($terms as $term) {
                    $translated_category_name = $term->name;
                    $member_group_query = new WP_Query( array(
                      'post_type' => 'faq',
                      'order' => 'ASC',
                      'tax_query' => array(
                          array(
                              'taxonomy' => 'faq_category',
                              'field' => 'slug',
                              'terms' => array( $term->slug ),
                              'operator' => 'IN'
                          )
                      )
                  ) );
                  if ( $member_group_query->have_posts() ) {
                    switch ($term->name) {
                      case '脂肪溶解注射　チンセラ':
                          $translated_category_name = 'Fat dissolving injection';
                          break;
                      case '眉':
                          $translated_category_name = 'Eyebrow';
                          break;
                      case 'リフトアップボトックス':
                          $translated_category_name = 'Lift up Botox';
                          break;
                      case 'サーマジェン':
                          $translated_category_name = 'Thermagen';
                          break;
                      case 'エクソソーム':
                          $translated_category_name = 'Exosomes';
                          break;
                      case 'ボトックス':
                          $translated_category_name = 'Botox';
                          break;
                      case 'ポアレスボトックス':
                          $translated_category_name = 'Poreless Botox';
                          break;
                      case 'フォトipl':
                          $translated_category_name = 'IPL';
                          break;
                      case 'ピーリング':
                          $translated_category_name = 'Medical Peeling';
                          break;
                      case 'ニードルRF':
                          $translated_category_name = 'POTENZA';
                          break;
                      case 'ショートスレッド':
                          $translated_category_name = 'Shopping Thread';
                          break;
                      // Add more cases for other category name translations
                    }

                    $term_link = get_term_link($term->term_id, $taxonomy);
                    $term_slug = $term->slug;
                    echo '<li><a href="' . home_url('/en/faq_category/') . $term_slug . '/">' . esc_html($translated_category_name) . '</a></li>';
                  }
                  }
                ?>
              </ul>
            </div>
            <div class="faq-content">
              <div class="faq-content-wr">
                <?php 
                  $term = get_queried_object(); 
                  $translated_category_name = $term->name;
                  if (have_posts()) :
                    switch ($term->name) {
                      case '脂肪溶解注射　チンセラ':
                          $translated_category_name = 'Fat dissolving injection';
                          break;
                      case '眉':
                          $translated_category_name = 'Eyebrow';
                          break;
                      case 'リフトアップボトックス':
                          $translated_category_name = 'Lift up Botox';
                          break;
                      case 'サーマジェン':
                          $translated_category_name = 'Thermagen';
                          break;
                      case 'エクソソーム':
                          $translated_category_name = 'Exosomes';
                          break;
                      case 'ボトックス':
                          $translated_category_name = 'Botox';
                          break;
                      case 'ポアレスボトックス':
                          $translated_category_name = 'Poreless Botox';
                          break;
                      case 'フォトipl':
                          $translated_category_name = 'IPL';
                          break;
                      case 'ピーリング':
                          $translated_category_name = 'Medical Peeling';
                          break;
                      case 'ニードルRF':
                          $translated_category_name = 'POTENZA';
                          break;
                      case 'ショートスレッド':
                          $translated_category_name = 'Shopping Thread';
                          break;
                      // Add more cases for other category name translations
                    }
                ?>
                <h1 class="faq-content-wr-ttl">[ <?php echo $translated_category_name; ?> ]</h1>
                <div class="faq-content-wr-list">
                  <?php 
                    while (have_posts()) : the_post();

                      /*
                        * Include the Post-Type-specific template for the content.
                        * If you want to override this in a child theme, then include a file
                        * called content-___.php (where ___ is the Post Type name) and that will be used instead.
                        */
                      get_template_part('template-parts/content-faq', get_post_type());

                    endwhile;
                  ?>
                </div>
                <?php endif; wp_reset_query();?>
              </div>
            </div>
          </div>
        </div>
      </div>
    <?php } else { ?>
      <div id="faq" class="sl-faq">
        <div class="sl-faq-inn">
          <div class="sl-faq-inn-ttl subpage-ttl">
            <div class="under-line subpage-ttl__inner">FAQ</div>
          </div>
          <div class="d-fl sl-faq-inn-content">
            <div class="faq-cate faq-cate-sp-dropdown">
              <h3 class="faq-cate-ttl">CATEGORY</h3>
              <ul class="faq-cate-list">
                <li>
                  <a href="<?php echo get_post_type_archive_link('faq'); ?>" rel="faq">全て</a>
                </li>
                <?php echo wpdocs_custom_taxonomies_terms_links('faq_category'); ?>
              </ul>
            </div>
            <div class="faq-content">
              <div class="faq-content-wr">
                <?php $term = get_queried_object();  ?>
                <h1 class="faq-content-wr-ttl">[ <?php echo $term->name; ?> ]</h1>
                <div class="faq-content-wr-list">
                  <?php if (have_posts()) :
                    while (have_posts()) : the_post();

                      /*
                        * Include the Post-Type-specific template for the content.
                        * If you want to override this in a child theme, then include a file
                        * called content-___.php (where ___ is the Post Type name) and that will be used instead.
                        */
                      get_template_part('template-parts/content-faq', get_post_type());

                    endwhile;


                  else :

                  endif;
                  wp_reset_query();
                  ?>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    <?php } ?>

    <?php get_template_part('footer-company'); ?>
  </main>
</div>

<?php
get_footer();
