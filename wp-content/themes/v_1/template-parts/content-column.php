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
  <a href="<?php echo get_permalink(); ?>" rel="<?php the_title(); ?>">
    <figure>
      <?php the_post_thumbnail("", array("alt" => get_the_title())); ?>
    </figure>
    <div class="column-txt">
      <div class="upload-date">
        <time class="c-black"><?php echo get_the_date( 'Y.m.d');  ?></time>
      </div>
      <p><?php the_title(); ?></p>
    </div>
  </a>
</article>