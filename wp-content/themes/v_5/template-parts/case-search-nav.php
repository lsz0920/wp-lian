<div class="sl-pl-inn-content">
    <div class="price-list-wr">
        <?php
        // 施術から探す
        $case_categories = get_terms(array(
            'taxonomy' => 'case_category',
            'hide_empty' => true,
        ));
        if (!empty($case_categories) && !is_wp_error($case_categories)) :
        ?>
        <div class="case-read-text">
            <p>施術から探す</p>
        </div>
        <ul class="d-fl">
            <li>
                <a href="<?php echo get_post_type_archive_link('case'); ?>" rel="case">ALL</a>
            </li>
            <?php
            foreach ($case_categories as $term) {
                $term_link = get_term_link($term);
                if (!is_wp_error($term_link)) {
                    echo '<li><a href="' . esc_url($term_link) . '">' . esc_html($term->name) . '</a></li>';
                }
            }
            ?>
        </ul>
        <?php endif; ?>

        <?php
        // 担当医師から探す
        $doctor_terms = get_terms(array(
            'taxonomy' => 'case_doctor',
            'hide_empty' => true,
        ));
        if (!empty($doctor_terms) && !is_wp_error($doctor_terms)) :
        ?>
        <div class="case-read-text">
            <p>担当医師から探す</p>
        </div>
        <ul class="d-fl">
            <?php
            foreach ($doctor_terms as $term) {
                $term_link = get_term_link($term);
                if (!is_wp_error($term_link)) {
                    echo '<li><a href="' . esc_url($term_link) . '">' . esc_html($term->name) . '</a></li>';
                }
            }
            ?>
        </ul>
        <?php endif; ?>

        <?php
        // 担当看護師から探す
        $staff_terms = get_terms(array(
            'taxonomy' => 'case_staff',
            'hide_empty' => true,
        ));
        if (!empty($staff_terms) && !is_wp_error($staff_terms)) :
        ?>
        <div class="case-read-text">
            <p>担当看護師から探す</p>
        </div>
        <ul class="d-fl">
            <?php
            foreach ($staff_terms as $term) {
                $term_link = get_term_link($term);
                if (!is_wp_error($term_link)) {
                    echo '<li><a href="' . esc_url($term_link) . '">' . esc_html($term->name) . '</a></li>';
                }
            }
            ?>
        </ul>
        <?php endif; ?>
    </div>
</div>