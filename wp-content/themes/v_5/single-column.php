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
					<li><a href="<?php echo home_url();?>/column">コラム</a>/</li>
					<li><?php the_title(); ?></li>
				</ul>
			</div>
    <div id="column" class="sl-column">
      <div class="sl-column-inn">

          <h2 class="heading01">コラム</h2>
       
        <div class="d-fl sl-column-inn-content">
          <div class="column-cate">
            <div class="column-cate-wr category column-cate-sp-dropdown">
              <h3 class="column-cate-wr-ttl">CATEGORY</h3>
              <ul class="column-cate-wr-list">
                <li>
                  <a href="<?php echo get_post_type_archive_link('column'); ?>" rel="column">全て</a>
                </li>
                <?php echo wpdocs_custom_taxonomies_terms_links('column_category'); ?>
              </ul>
            </div>
            <div class="column-cate-wr archive column-archive-sp-dropdown">
              <h3 class="column-cate-wr-ttl">ARCHIVE</h3>
              <ul class="column-cate-wr-list">
                <li>
                  <a href="<?php echo get_post_type_archive_link('column'); ?>" rel="column">全て</a>
                </li>
                <?php wpdocs_custom_get_monthly_archive_array('column'); ?>
              </ul>
            </div>
          </div>
          <div class="column-content post">
            <?php $term_obj_list = get_the_terms($post->ID, 'column_category');
            if ($term_obj_list != '') {
              $terms_string = join(', ', wp_list_pluck($term_obj_list, 'name'));
            } ?>
            <p class="post-catedate">
              <?php if (isset($terms_string)) : ?><span>【<?php echo $terms_string; ?>】</span><?php endif; ?><time><?php echo get_the_time('Y.m.d', $post->ID);  ?></time>
            </p>
            <h1 class="post-ttl"><?php the_title(); ?></h1>
            <figure><?php the_post_thumbnail("", array("alt" => get_the_title())); ?></figure>
            <div class="post-txt">
              <div class="post-content">
                <p><?php the_content(); ?></p>
              </div>
              <?php $count = 0;
                  $details = CFS()->get('detail');
                  if ($details != '') :?>
              <div class="post-cus-content">
                <h3>【目次】</h3>
                <ul>
                  <?php foreach ($details as $detail) : $count++; ?>
                      <li><a href="#t<?php echo $count; ?>"><?php echo $count . '.'; ?><?php echo $detail['title']; ?></a>
                      </li>
                  <?php endforeach; ?>
                </ul>
              </div>
              <?php endif; ?>
              <div class="post-cus-detail">
                <?php $count = 0;
                $details = CFS()->get('detail');
                if ($details != '') : foreach ($details as $detail) : $count++; ?>
                    <div class="post-cus-detail-wr">
                      <div id="t<?php echo $count; ?>" class="post-cus-detail-wr-anchor"></div>
                      <h3><?php echo $detail['title']; ?></h3>
                      <p><?php echo $detail['text']; ?></p>
                    </div>
                <?php endforeach;
                endif; ?>
              </div>
            </div>
          </div>
        </div>
        <div class="sl-column-inn-pagination">
          <div class="d-fl pagi">
            <div class="pagi-prev">
              <?php next_post_link('%link', __('', 'v_1')); ?>
            </div>
            <div class="pagi-center">
              <a href="<?php echo home_url('/column'); ?>">一覧へ</a>
            </div>
            <div class="pagi-next">
              <?php previous_post_link('%link', __('', 'v_1')); ?>
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
