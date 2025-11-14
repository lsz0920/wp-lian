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
<div class="mainBox">
		<div class="checkBg"><img data-skip-lazy src="<?php echo get_template_directory_uri(); ?>/renew2025/img/common/com_bg01.jpg" alt=""></div>
		<div class="comInfo">
			<div id="pagePath">
				<ul>
					<li><a href="<?php echo home_url();?>">Top</a>/</li>
					<li><a href="<?php echo home_url();?>/category/news">ニュース</a>/</li>
					<li><?php the_title(); ?></li>
				</ul>
			</div>
    <div id="column" class="sl-column">
      <div class="sl-column-inn">
          <h2 class="heading01">ニュース</h2>
        <div class="d-fl sl-column-inn-content">
          <div class="column-cate">
            <div class="column-cate-wr category news-cate-sp-dropdown">
              <h3 class="column-cate-wr-ttl">CATEGORY</h3>
              <ul class="column-cate-wr-list">
                <li>
                  <a href="<?php echo get_post_type_archive_link( 'post' ); ?>" rel="news">全て</a>
                </li>
                <?php wp_list_categories('orderby=ID&title_li='); ?>
              </ul>
            </div>
            <div class="column-cate-wr archive news-archive-sp-dropdown">
              <h3 class="column-cate-wr-ttl">ARCHIVE</h3>
              <ul class="column-cate-wr-list">
                <li>
                  <a href="<?php echo get_post_type_archive_link( 'post' ); ?>" rel="news">全て</a>
                </li>
                <?php wpdocs_custom_get_monthly_archive_array('post'); ?>
              </ul>
            </div>
          </div>
          <div class="column-content post">
            <p class="post-catedate">
              <time><?php echo get_the_time('Y.m.d', $post->ID);  ?></time>
            </p>
            <h1 class="post-ttl"><?php the_title(); ?></h1>
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
              <a href="<?php echo home_url( '/news'); ?>">一覧へ</a>
            </div>
            <div class="pagi-next">
              <?php previous_post_link( '%link', __( '', 'v_1')); ?>
            </div>
          </div>
        </div>
      </div>
    </div>
		</div></div>
  </main>
</div>

<?php
get_footer();
