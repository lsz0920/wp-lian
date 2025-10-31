<article>
  <div id="post-<?php the_ID(); ?>" class="staff-anchor"></div>
  <div class="d-fl staff-arti">
    <figure>
      <?php the_post_thumbnail("", array("alt" => get_the_title())); ?>
    </figure>
    <div class="staff-txt">
      <h2><?php the_title(); ?>
        <span><?php $job_title = CFS()->get('job_title'); if($job_title != ''): echo $job_title; endif; ?></span>
      </h2>
      <h3><?php $eng_name = CFS()->get('english_name'); if($eng_name != ''): echo $eng_name; endif; ?></h3>
      <ul>
        <li class="d-fl">
          <h3>症例数</h3>
          <p><?php $cases = CFS()->get('cases'); if($cases != ''): echo $cases; endif; ?></p>
        </li>
        <li class="d-fl">
          <h3>指名料</h3>
          <p><?php $fee = CFS()->get('fee'); if($fee != ''): echo $fee; endif; ?></p>
        </li>
        <li class="d-fl">
          <h3>施術可能部位</h3>
          <p><?php $site = CFS()->get('site'); if($site != ''): echo $site; endif; ?></p>
        </li>
      </ul>
    </div>
  </div>
</article>