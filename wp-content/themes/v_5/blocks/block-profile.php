<?php
//----------------------------------------------------
// Custom Block - リストボックス -
// **
// スキーマ設定は管理画面のCustom Blockから行うこと
// See: https://ja.wordpress.org/plugins/genesis-custom-blocks/
//----------------------------------------------------
?>

<div class="supervisor">
    <p class="supervisor__title"><?php echo block_value('profile-block'); ?></p>
    <div class="supervisor__person">
        <?php echo wp_get_attachment_image(block_value('profile-image'), 'full'); ?>
        <div class="supervisor__names">
            <p class="career"><?php echo block_value('profile-title'); ?></p>
            <p class="name"><?php echo block_value('profile-name'); ?></p>
        </div>
    </div>
    <div class="supervisor__content">
        <?php echo block_value('profile-career'); ?>
        <?php if( block_value('profile-url') ): ?>
            <div class="news-btn more-btn">
                <a href="<?php echo block_value('profile-url'); ?>" rel="alternate">VIEW MORE</a>
            </div>
        <?php endif; ?>
    </div>
</div>