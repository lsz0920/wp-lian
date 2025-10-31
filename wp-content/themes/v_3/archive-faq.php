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
    <div id="faq" class="sl-faq">
      <div class="sl-faq-inn">
        <div class="sl-faq-inn-ttl subpage-ttl">
          <h1 class="under-line">FAQ</h1>
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
            <?php
              $member_group_terms = get_terms( array(
                'taxonomy' => 'faq_category',
                'hide_empty' => false,
                'order' => 'DESC',
              ));
              foreach ( $member_group_terms as $member_group_term ) :
                  $member_group_query = new WP_Query( array(
                      'post_type' => 'faq',
                      'order' => 'ASC',
                      'tax_query' => array(
                          array(
                              'taxonomy' => 'faq_category',
                              'field' => 'slug',
                              'terms' => array( $member_group_term->slug ),
                              'operator' => 'IN'
                          )
                      )
                  ) );
                  ?>
            <div class="faq-content-wr">
              <h2 class="faq-content-wr-ttl">[ <?php echo $member_group_term->name; ?> ]</h2>
              <div class="faq-content-wr-list">
                <?php
                if ( $member_group_query->have_posts() ) : while ( $member_group_query->have_posts() ) : $member_group_query->the_post(); ?>
                <div class="faq">
                  <div class="d-fl faq-q">
                    <span>Q</span>
                    <h3><?php the_title(); ?></h3>
                  </div>
                  <div class="faq-ans">
                    <?php the_content(); ?>
                  </div>
                </div>
                <?php endwhile; endif; ?>
              </div>
            </div>
            <?php
              // Reset things, for good measure
              $member_group_query = null;
              wp_reset_postdata();
              endforeach;
            ?>
          </div>
        </div>
      </div>
		<div class="sl-inquiry-inn pb-0">
        <div class="sl-inquiry-inn-ttl subpage-ttl">
          <h1 class="under-line">ご予約のお客様</h1>
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
      </div>
    </div>

	  <?php get_template_part( 'footer-company' );?>
  </main>
</div>

<?php
get_footer();
