<article>
  <a href="<?php the_permalink(); ?>">
    <figure class="image">
      <?php the_post_thumbnail("", array("alt" => get_the_title())); ?>
    </figure>
    <?php 
      if ( has_tag( 'whitebg_image' ) ) {
    ?>
    <div class="content text-blue">
      <h3>
        <?php if(CFS()->get('job_position')): ?> 
          <span class="job-position"><?php echo CFS()->get('job_position'); ?></span>
        <?php endif; ?>
        <span class="jp-name"><?php the_title(); ?></span>
        <?php if(CFS()->get('english_name')): ?> 
          <span class="eng-name"><?php echo CFS()->get('english_name'); ?></span>
        <?php endif; ?>
      </h3>
    </div>
    <?php } else { ?>
    <div class="content">
      <h3>
        <?php if(CFS()->get('job_position')): ?> 
          <span class="job-position"><?php echo CFS()->get('job_position'); ?></span>
        <?php endif; ?>
        <span class="jp-name"><?php the_title(); ?></span>
        <?php if(CFS()->get('english_name')): ?> 
          <span class="eng-name"><?php echo CFS()->get('english_name'); ?></span>
        <?php endif; ?>
      </h3>
    </div>
    <?php } ?>
  </a>
</article>