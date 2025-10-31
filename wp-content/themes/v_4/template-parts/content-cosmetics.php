<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package v_1
 */
?>
<?php
$taxonomy_slug = "cosmetics_category";
$taxonomy = get_the_terms($post->ID,$taxonomy_slug);
?>
<article class="">
  <a class="cosmetics-link" href="<?php echo get_permalink(); ?>" rel="<?php the_title(); ?>"></a>
  <figure>
    <?php the_post_thumbnail("", array("alt" => get_the_title())); ?>
  </figure>
  <div class="cosmetics-txt">
    <div class="cosmetics-txt-category">
      <span class="cat-t-restore cat-t-<?php echo $taxonomy[0]->slug;; ?>"><?php echo $taxonomy[0]->name;?></span>
    </div>
    <h2><?php the_title(); ?></h2>
    <div class="post-entry"><?php the_content(); ?></div>
    <div class="post-keyword">
      <?php
        $posttags = get_the_tags();
        if ( $posttags ) {
          echo '<ul class="d_fl top_keyword d-fl">';
          foreach ( $posttags as $tag ) {
            echo '<li class="'.$tag->slug.'"><span>'.$tag->name.'</span></li>';
          }
          echo '</ul>';
        }
      ?>
    </div>
  </div>
</article>
