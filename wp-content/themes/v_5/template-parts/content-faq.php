<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package v_1
 */

?>

<div class="faq">
  <div class="d-fl faq-q">
    <span>Q</span>
    <h3><?php the_title(); ?></h3>
  </div>
  <div class="faq-ans">
    <?php the_content(); ?>
  </div>
</div>