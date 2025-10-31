<div class="sl-whatis-inn-ft pc">
    <p>クリックで詳細をご覧いただけます。</p>
</div>
<div class="sl-whatis-inn-ft sp">
    <p>タップで詳細をご覧いただけます。</p>
</div>
<div class="case-fl d-fl">
    <?php $i=1; if (have_posts()) : while ( have_posts() ) : the_post(); ?>
    <?php 
    $this_category = get_the_category();
    $this_category = !empty($this_category) ? $this_category[0]->name : ''; // 最初のカテゴリー名を取得
    ?>
    <?php $post_id = get_the_ID(); ?>
    <div class="item js-menu-toggle" data-id="<?php echo $post_id; ?>">
        <figure>
        <?php the_post_thumbnail("", array("alt" => get_the_title())); ?>
        </figure>
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
                <dd><?php echo $item['description']; ?></dd>
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
        </div>
        </div>

    <?php $i++; endwhile; endif;wp_reset_query();?>
</div>