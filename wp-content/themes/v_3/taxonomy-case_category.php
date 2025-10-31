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
              <h1 class="under-line">Case Photo</h1>
            </div>
            <div class="sl-case-inn-content">
              <div class="caselist">
                <h3>
                  <span class="case-choose">カテゴリーから探す</span>
                  <span class="case-dropdown"></span>
                </h3>
                <ul>
                  <li>
                    <a href="<?php echo get_post_type_archive_link( 'case' ); ?>" rel="case">ALL</a>
                    <span class="case-dropdown"></span>
                  </li>
                  <?php echo wpdocs_custom_taxonomies_terms_links('case_category'); ?>
                </ul>
              </div>
              <div class="case-fl d-fl">
                <?php  $i=1; if (have_posts()) : while ( have_posts() ) : the_post(); ?>
                  <article class="item" id="case-photo<?php echo $i;?>">
                    <figure>
                      <?php the_post_thumbnail("", array("alt" => get_the_title())); ?>
                    </figure>
                    <h3><?php the_title(); ?></h3>
                  </article>
                <?php $i++; endwhile; endif;wp_reset_query();?>
              </div>
              <div id="case-modal" class="modal-show">
                <div class="case-modal modal-inn">
                  <button class="modal-close">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/modal-close.svg" alt="close">
                  </button>
                  <?php  $i=1; if (have_posts()) : while ( have_posts() ) : the_post(); ?>
                    <div class="case-modal-content modal-content" id="case-photo<?php echo $i;?>-show">
                      <div class="case-modal-fl d-fl">
                        <figure>
                          <?php the_post_thumbnail("", array("alt" => get_the_title())); ?>
                        </figure>
                        <div class="content">
                          <?php  if(CFS()->get('instagram')){?><p class="instagram-link"><?php echo CFS()->get('instagram');?></p><?php } ?>
                          <div class="content-inn">
                          <?php $items = CFS()->get('content'); 
                          if($items != ''): foreach($items as $item): ?>
                            <dl>
                              <dt><?php echo $item['title']; ?></dt>
                              <dd><?php echo $item['description']; ?></dd>
                            </dl>
                          <?php endforeach; endif; ?>
                          </div>
                        </div>
                      </div>
                    </div>
                  <?php $i++; endwhile;endif;wp_reset_query(); ?>
                </div>
              </div>
              <div class="sl-case-inn-pagination">
                <?php wp_pagenavi();?>
              </div>
              <div class="case-photo-category">
                <p class="case-photo-category-ttl">Category</p>
                <ul>
                  <?php echo wpdocs_custom_taxonomies_terms_links('case_category'); ?>
                </ul>
              </div>
            </div>
            <div class="case-search search-button">
              <a href="#">
                <div class="case-search-inn">
                  <p>施術を<br>さがす<span><i class="fa fa-search" aria-hidden="true"></i></span></p>
                </div>
              </a>
            </div>
            <div id="search-modal" class="modal-show">
              <div class="search-modal modal-inn">
                <button class="modal-close">
                  <img src="<?php echo get_template_directory_uri(); ?>/img/modal-close.svg" alt="close">
                </button>
                <ul class="search-content d-fl">
                  <li>
                    <span>アートメイク</span>
                    <ul class="sub-menu">
                      <li><a href="<?php echo esc_html( home_url('/') ) ?>menu/artmake/">眉アートメイク</a></li>
                      <li><a href="<?php echo esc_html( home_url('/') ) ?>menu/artmake-lip/">リップアートメイク</a></li>
                      <li><a href="<?php echo esc_html( home_url('/') ) ?>menu/artmake-eyeline/">アイラインアートメイク</a></li>
                    </ul>
                  </li>
                  <li>
                    <span>毛穴</span>
                    <ul class="sub-menu">
                      <li><a href="<?php echo esc_html( home_url('/') ) ?>menu/needle-rf/">ニードルRF</a></li>
                      <li><a href="<?php echo esc_html( home_url('/') ) ?>menu/peeling/">ピーリング</a></li>
                      <li><a href="<?php echo esc_html( home_url('/') ) ?>menu/poreless-botox/">ポアレスボトックス</a></li>
                      <li><a href="<?php echo esc_html( home_url('/') ) ?>menu/photoipl/">フォトipl</a></li>
                    </ul>
                  </li>
                  <li>
                    <span>たるみ</span>
                    <ul class="sub-menu">
                      <li><a href="<?php echo esc_html( home_url('/') ) ?>menu/hifu/">HIFU</a></li>
                      <li><a href="<?php echo esc_html( home_url('/') ) ?>menu/hifu-linear/">HIFUリニア</a></li>
                      <li><a href="<?php echo esc_html( home_url('/') ) ?>menu/sarmagen/">サーマジェン</a></li>
                      <li><a href="<?php echo esc_html( home_url('/') ) ?>menu/liftup-botox/">リフトアップボトックス</a></li>
                      <li><a href="<?php echo esc_html( home_url('/') ) ?>menu/thread/">ショートスレッド</a></li>
                    </ul>
                  </li>
                  <li>
                    <span>小顔</span>
                    <ul class="sub-menu">
                      <li><a href="<?php echo esc_html( home_url('/') ) ?>menu/botox/">ボトックス</a></li>
                      <li><a href="<?php echo esc_html( home_url('/') ) ?>menu/fat-dissolve/">脂肪溶解注射チンセラ</a></li>
                    </ul>
                  </li>
                </ul>
              </div>
            </div>
            <!-- sl-case-inn-content -->
          </div>
        </div>
      </main>
    </div>

<?php
get_footer();