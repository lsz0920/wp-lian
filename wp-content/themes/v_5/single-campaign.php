<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
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
          <div class="column-content post">
            <?php $term_obj_list = get_the_terms( $post->ID, 'campaign_category' );
                  if($term_obj_list != '') { $terms_string = join(', ', wp_list_pluck($term_obj_list, 'name')); } ?>
            <p class="post-catedate">
              <?php if(isset($terms_string)): ?><span>【<?php echo $terms_string; ?>】</span><?php endif; ?><time><?php echo get_the_time('Y.m.d', $post->ID);  ?></time>
            </p>
            <h2 class="post-ttl"><?php the_title(); ?></h2>
            <figure><?php the_post_thumbnail("", array("alt" => get_the_title())); ?></figure>
            <div class="post-txt">
              <div class="post-content news">
                <p><?php the_content(); ?></p>
              </div>
            </div>
          </div>
        </div>
        <div class="sl-column-inn-pagination">
          <div class="d-fl pagi">
            <div class="pagi-prev">
              <?php next_post_link( '%link', __( '', 'v_1')); ?>
            </div>
            <div class="pagi-center">
              <a href="<?php echo home_url( '/campaign'); ?>">一覧へ</a>
            </div>
            <div class="pagi-next">
              <?php previous_post_link( '%link', __( '', 'v_1')); ?>
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
