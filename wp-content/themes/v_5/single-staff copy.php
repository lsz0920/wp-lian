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
    <div class="breadcrumbs breadcrumbs02">
      <div class="breadcrumbs-inn">
        <?php
          if(function_exists( 'yoast_breadcrumb' )){
            yoast_breadcrumb( '<div id="breadcrumbs">', '</div>');
          }
        ?>
      </div>
    </div>
    <div id="staff" class="sl-staff sl-staff-single">
      <div class="sl-staff-inn">
        <div class="sl-staff-inn-ttl subpage-ttl subpage-ttl02">
          <h1 class="under-line">Staff</h1>
        </div>
        <div class="sl-staff-inn-content">
          <div class="sl-staff-inn-content-detail">
            <div class="image">
              <?php the_post_thumbnail("", array("alt" => get_the_title())); ?>
            </div>
            <div class="content">
              <h3>
                <?php the_title(); ?>
                <?php if(CFS()->get('job_position')): ?> 
                  <span><?php echo CFS()->get('job_position'); ?></span>
                <?php endif; ?>
              </h3>
              <?php if(CFS()->get('english_name')): ?> 
                <h4><?php echo CFS()->get('english_name'); ?></h4>
              <?php endif; ?>

              <?php if(CFS()->get('staff-instagram') || CFS()->get('staff-youtube') || CFS()->get('staff-x')): ?> 
                <ul class="staff__sns">
                  <?php if(CFS()->get('staff-instagram')): ?> 
                    <li class="staff__sns-icon">
                      <a target="_blank" href="<?php echo CFS()->get('staff-instagram'); ?>">
                        <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/SNSicon01.svg" alt="Instagram">
                      </a>
                    </li>
                  <?php endif; ?>
                  <?php if(CFS()->get('staff-youtube')): ?> 
                    <li class="staff__sns-icon">
                      <a target="_blank" href="<?php echo CFS()->get('staff-youtube'); ?>">
                        <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/SNSicon02.svg" alt="youtube">
                      </a>
                    </li>
                  <?php endif; ?>
                  <?php if(CFS()->get('staff-x')): ?> 
                    <li class="staff__sns-icon">
                      <a target="_blank" href="<?php echo CFS()->get('staff-x'); ?>">
                        <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/SNSicon03.svg" alt="X">
                      </a>
                    </li>
                  <?php endif; ?>
                </ul>
              <?php endif; ?>

              <?php if(CFS()->get('description_pc')): ?> 
              <div class="description">
                <p class="pc"><?php echo CFS()->get('description_pc'); ?></p>
                <p class="sp"><?php echo CFS()->get('description_sp'); ?></p>
              </div>
              <?php endif; ?>
              <ul class="list">
                <?php if(CFS()->get('career')): ?>
                  <li class="d-fl career">
                    <h3>経歴</h3>
                    <p><?php echo CFS()->get('career'); ?></p>
                  </li>
                <?php endif; ?>
                <?php if(CFS()->get('career2')): ?>
                  <li class="d-fl career">
                    <h3>所属・資格</h3>
                    <div><?php echo CFS()->get('career2'); ?></div>
                  </li>
                <?php endif; ?>
                <?php if(CFS()->get('treatment')): ?>
                <li class="d-fl">
                  <h3>得意施術</h3>
                  <p><?php echo CFS()->get('treatment'); ?></p>
                </li>
                <?php endif; ?>
                <?php if(CFS()->get('thoughts')): ?>
                <li class="d-fl">
                  <h3>美容への思い</h3>
                  <p><?php echo CFS()->get('thoughts'); ?></p>
                </li>
                <?php endif; ?>
                <?php if(CFS()->get('things')): ?>
                <li class="d-fl things">
                  <h3><?php echo CFS()->get('job_title'); ?><br>として大切にしていること</h3>
                  <p><?php echo CFS()->get('things'); ?></p>
                </li>
                <?php endif; ?>
              </ul>
            </div>
            <?php if ( has_tag( 'catalog' ) ) { ?>
              <div id="catalog" class="catalog">
                <div class="catalog-inn">
                  <h3>Catalog<span>症例カタログ</span></h3>
                  <div class="catalog-inn-fl d-fl">
                    <?php $catalogs = CFS()->get('catalog'); 
                    if($catalogs != ''): foreach($catalogs as $catalog): ?>
                    <article>
                      <figure>
                        <img loading="lazy" src="<?php echo $catalog['catalog_image']; ?>" alt="症例カタログ">
                      </figure>
                      <p><?php echo $catalog['catalog_desc']; ?></p>
                      <?php if($catalog['case_name']): ?>
                        <h4 class="case__info-title js-accordion-open">症例詳細</h4>
                        <div class="case__info-contents">
                          <div class="case__info-con">
                            <h5>施術名</h5>
                            <p><?php echo $catalog['case_name']; ?></p>
                          </div>
                          <?php if($catalog['case_description']): ?>
                            <div class="case__info-con">
                              <h5>施術の説明</h5>
                              <p><?php echo $catalog['case_description']; ?></p>
                            </div>
                          <?php endif; ?>
                          <?php if($catalog['case_days']): ?>  
                            <div class="case__info-con">
                              <h5>施術期間</h5>
                              <p><?php echo $catalog['case_days']; ?></p>
                            </div>
                          <?php endif; ?>
                          <?php if($catalog['case_risk']): ?>  
                            <div class="case__info-con">
                              <h5>施術の副作用（リスク）</h5>
                              <p><?php echo $catalog['case_risk']; ?></p>
                            </div>
                          <?php endif; ?>
                          <?php if($catalog['case_price']): ?>  
                            <div class="case__info-con">
                              <h5>施掛かった費用</h5>
                              <p><?php echo $catalog['case_price']; ?></p>
                            </div>
                          <?php endif; ?>
                        </div>
                      <?php endif; ?>
                    </article>
                    <?php endforeach; endif; ?>
                  </div>
                </div>
              </div>
            <?php } ?>
          </div>
        </div>
      </div>
    </div>

	  <?php get_template_part( 'footer-company' );?>
  </main>
</div>

<script>
  jQuery(function () {
    jQuery(".js-accordion-open").on("click", function () {
      jQuery(this).next().slideToggle(300);
      jQuery(this).toggleClass("open", 300);
    });
  });
</script>

<?php
get_footer();
