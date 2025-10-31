<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package jsupport_v_1.0.1
 */

?>

<div class="items" id="post-<?php the_ID(); ?>">
	<a href="<?php the_permalink(); ?>" class="d-fl">
		<figure class="image">
			<?php the_post_thumbnail("", array("alt" => get_the_title())); ?>
		</figure>
		<div class="text">
			<time><?php the_time('Y.m.d'); ?></time>
			<h3><?php the_title(); ?></h3>
			<?php
				$post_tags = get_the_tags();
				if ( $post_tags ) {
			?>
			<p class="d-fl tag">
				<?php 
					foreach ($post_tags as $tag) {
					$tag_link = get_tag_link( $tag->term_id );
				?>
				<span>#<?php echo $tag->name; ?></span>
				<?php } ?>
			</p>
			<?php } ?>
			<!-- <span class="tag">＃カテゴリー</span> -->
		</div>
	</a>
</div>
            