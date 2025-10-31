<!-- modal-menu -->
<div class="modal-menu__bg"></div>
<?php
    $i=1;
    
    // 全投稿を取得するクエリ
    $all_posts_query = new WP_Query(array(
        'post_type' => 'case', // 投稿タイプ（必要に応じてカスタム投稿タイプ名を指定）
        'posts_per_page' => -1, // 全件取得
        'post_status' => 'publish', // 公開済みの投稿のみ
    ));

    if ($all_posts_query->have_posts()) :
    while ($all_posts_query->have_posts()) : $all_posts_query->the_post();

    $terms = get_the_terms( get_the_ID(), 'case_category' );
    if ( $terms && ! is_wp_error( $terms ) ) {
        // 各タームに対して処理
        $this_category = null;
        foreach ( $terms as $term ) {
            $term_slug = $term->slug; // タームのスラッグを取得

            // スラッグに基づいて置換
            switch ( $term_slug ) {
                case 'hifu':
                    $this_category = home_url('/service/').'hifu/';
                    break;
                case 'ipl':
                    $this_category = home_url('/service/').'photoipl/';
                    break;
                case 'injection':
                    $this_category = home_url('/service/').'artmake/';
                    break;
                case 'thermagen':
                    $this_category = home_url('/service/').'sarmagen/';
                    break;
                case 'therma-needle':
                    $this_category = null;
                    break;
                case 'short-thread':
                    $this_category = home_url('/service/').'thread/';
                    break;
                case 'sagging-treatment':
                    $this_category = home_url('/service/').'hifu/';
                    break;
                case 'hyaluronic-acid':
                    $this_category = home_url('/service/').'hyaluronic/';
                    break;
                case 'botox':
                    $this_category = home_url('/service/').'botox/';
                    break;
                case 'fat-dissolving':
                    $this_category = home_url('/service/').'fat-dissolve/';
                    break;
                default:
                    $this_category = null; 
            }
        }
        }else{
        $this_category = null; 
        }
?>
<?php $post_id = get_the_ID(); ?>
<div class="modal-menu modal-menu-post-<?php echo $post_id; ?>">

    <div class="modal-menu__wrap">

            <div class="sl-case-inn-content">

                <div class="modal-close-box js-menu-toggle">
                    <div class="modal-close-box__wrap">
                        <span></span>
                        <span></span>
                    </div>
                </div>

                <div class="case-fl d-fl">

                    <div class="single-case__title sp" style="margin-bottom: 12px;"><?php echo $term->name; ?></div>

                    <div class="single-case__content">

                        <div class="single-case__images">

                        <?php
                            $featured_image = get_the_post_thumbnail_url(get_the_ID(), 'full');

                            $case_images = get_field('case_images');
                            $case_image01 = isset($case_images['case_image01']) ? $case_images['case_image01'] : null;
                            $case_image02 = isset($case_images['case_image02']) ? $case_images['case_image02'] : null;

                            $show_thumbnail_slider = ($case_image01 || $case_image02);
                        ?>

                        <!-- メインスライダー -->
                        <div class="single-case-slider">
                            <div><img src="<?php echo esc_url($featured_image); ?>" alt="アイキャッチ画像"></div>
                            <?php if ($case_image01): ?>
                            <div><img src="<?php echo esc_url($case_image01['url']); ?>" alt="症例画像1"></div>
                            <?php endif; ?>
                            <?php if ($case_image02): ?>
                            <div><img src="<?php echo esc_url($case_image02['url']); ?>" alt="症例画像2"></div>
                            <?php endif; ?>
                        </div>

                        <?php if ($show_thumbnail_slider): ?>
                            <!-- サムネイルスライダー -->
                            <div class="single-case-nav">
                            <div><img src="<?php echo esc_url($featured_image); ?>" alt="アイキャッチ画像"></div>
                            <?php if ($case_image01): ?>
                                <div><img src="<?php echo esc_url($case_image01['url']); ?>" alt="症例画像1"></div>
                            <?php endif; ?>
                            <?php if ($case_image02): ?>
                                <div><img src="<?php echo esc_url($case_image02['url']); ?>" alt="症例画像2"></div>
                            <?php endif; ?>
                            </div>
                        <?php endif; ?>


                        </div>
                        
                        <div class="single-item">
                        <div class="single-case__title pc"><?php echo $term->name; ?></div>
                        <div class="content">
                            <div class="content-inn">
                            <?php  
                                $items = CFS()->get('content'); 
                                if($items != ''): 
                                    $firstItem = true; // 最初のアイテムを追跡するためのフラグ
                                    foreach($items as $item):
                                        if($firstItem && $this_category): // 最初のアイテムでリンクがある場合
                            ?>
                                <dl>
                                    <dt><?php echo $item['title']; ?></dt>
                                    <dd>
                                    <?php if($this_category): ?>
                                        <a href="<?php echo $this_category; ?>"><?php echo $item['description']; ?></a>
                                    <?php else: ?>
                                        <?php echo $item['description']; ?><
                                    <?php endif; ?>  
                                    </dd>
                                </dl>
                            <?php else: ?>
                                <dl>
                                    <dt><?php echo $item['title']; ?></dt>
                                    <dd><?php echo $item['description']; ?></dd>
                                </dl>
                            <?php
                                        endif;
                                        $firstItem = false; // 最初のアイテムではなくなったためフラグを下ろす
                                    endforeach; 
                                endif;   
                            ?>
                            </div>
                            <?php  if(CFS()->get('instagram')){?><p class="instagram-link"><?php echo CFS()->get('instagram');?></p><?php } ?>
                        </div>
                        <?php
                            // タクソノミー 'case_doctor' と 'case_staff' のタームを取得
                            $case_doctor_terms = get_the_terms(get_the_ID(), 'case_doctor');
                            $case_staff_terms = get_the_terms(get_the_ID(), 'case_staff');

                            // タームのスラッグから投稿IDを取得
                            $case_doctor_id = !empty($case_doctor_terms) ? intval($case_doctor_terms[0]->slug) : null;
                            $case_staff_id = !empty($case_staff_terms) ? intval($case_staff_terms[0]->slug) : null;

                            // 両方空の場合、コンテンツ非表示
                            if ($case_doctor_id || $case_staff_id):
                        ?>
                            <div class="single-case__staff">
                            <?php if ($case_doctor_id): ?>
                                <div class="case-staff-item">
                                <h3 class="single-case__staff-position">担当医師</h3>
                                <article>
                                    <a href="<?php echo esc_url(get_permalink($case_doctor_id)); ?>">
                                    <figure class="image">
                                        <?php echo get_the_post_thumbnail($case_doctor_id, '', array('alt' => get_the_title($case_doctor_id))); ?>
                                    </figure>
                                    <div class="content">
                                        <h3>
                                        <?php if (CFS()->get('job_position', $case_doctor_id)): ?>
                                            <span class="job-position"><?php echo esc_html(CFS()->get('job_position', $case_doctor_id)); ?></span>
                                        <?php endif; ?>
                                        <span class="jp-name"><?php echo esc_html(get_the_title($case_doctor_id)); ?></span>
                                        <?php if (CFS()->get('english_name', $case_doctor_id)): ?>
                                            <span class="eng-name"><?php echo esc_html(CFS()->get('english_name', $case_doctor_id)); ?></span>
                                        <?php endif; ?>
                                        </h3>
                                    </div>
                                    </a>
                                </article>
                                </div>
                            <?php endif; ?>

                            <?php if ($case_staff_id): ?>
                                <div class="case-staff-item">
                                <h3 class="single-case__staff-position">担当看護師</h3>
                                <article>
                                    <a href="<?php echo esc_url(get_permalink($case_staff_id)); ?>">
                                    <figure class="image">
                                        <?php echo get_the_post_thumbnail($case_staff_id, '', array('alt' => get_the_title($case_staff_id))); ?>
                                    </figure>
                                    <div class="content">
                                        <h3>
                                        <?php if (CFS()->get('job_position', $case_staff_id)): ?>
                                            <span class="job-position"><?php echo esc_html(CFS()->get('job_position', $case_staff_id)); ?></span>
                                        <?php endif; ?>
                                        <span class="jp-name"><?php echo esc_html(get_the_title($case_staff_id)); ?></span>
                                        <?php if (CFS()->get('english_name', $case_staff_id)): ?>
                                            <span class="eng-name"><?php echo esc_html(CFS()->get('english_name', $case_staff_id)); ?></span>
                                        <?php endif; ?>
                                        </h3>
                                    </div>
                                    </a>
                                </article>
                                </div>
                            <?php endif; ?>
                            </div>
                            <p style="margin-top:1em;">※医師の指示のもと看護師が施術しております。</p>
                        <?php endif; ?>
                        </div>

                    </div>

                    <?php
                        // 現在の投稿ID
                        $current_post_id = get_the_ID();

                        // 現在の投稿のカテゴリーを取得
                        $categories = wp_get_post_terms($current_post_id, 'case_category', array('fields' => 'ids'));

                        if (!empty($categories)) {
                            // 関連記事を取得するクエリ
                            $args = array(
                                'post_type' => 'case',             // カスタム投稿タイプ
                                'posts_per_page' => 4,            // 表示する記事数
                                'post__not_in' => array($current_post_id), // 現在の投稿を除外
                                'tax_query' => array(
                                    array(
                                        'taxonomy' => 'case_category',
                                        'field'    => 'term_id',
                                        'terms'    => $categories, // 現在の投稿のカテゴリー
                                    ),
                                ),
                            );

                            $related_posts = new WP_Query($args);

                            // 関連記事がある場合のみ表示
                            if ($related_posts->have_posts()):
                        ?>
                            <div class="case-fl d-fl case-bottom">
                                <div class="sl-problems-inn-ttl subpage-ttl menu-inn-ttl">
                                    <h2 class="under-line">関連症例</h2>
                                </div>
                                <ul>
                                    <?php while ($related_posts->have_posts()): $related_posts->the_post(); ?>
                                        <li>
                                            <?php $post_ids = get_the_ID(); ?>
                                            <div class="js-menu-toggle2" data-id="<?php echo $post_ids; ?>">
                                                <?php the_post_thumbnail('thumbnail'); ?>
                                            </div>
                                        </li>
                                    <?php endwhile; ?>
                                </ul>
                                <!--
                                <div class="sl-faq-inn-ft case-more-btn">
                                    <div class="menu-btn more-btn">
                                    <a href="<?php echo home_url('/case/'); ?>" rel="alternate">VIEW MORE</a>
                                    </div>
                                </div>
                                -->
                            </div>

                        <?php
                            endif;
                            wp_reset_postdata();
                        }
                        ?>

                </div>
                
            </div>

    </div>
</div>
<?php $i++; endwhile; endif;wp_reset_query();?>