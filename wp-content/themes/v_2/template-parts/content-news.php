<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package v_1
 */

?>
<article class="">
  <a href="<?php the_permalink(); ?>" rel="alternate" class="d-fl">
    <div class="updated-date">
      <time><?php echo get_the_date('Y.m.d'); ?></time>
    </div>
    <div class="news-title">
      <h2><?php the_title(); ?></h2>
    </div>
  </a>
</article>
