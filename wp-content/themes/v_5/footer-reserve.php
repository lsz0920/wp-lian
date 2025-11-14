</main>
	<?php get_template_part('renew2025/inc/reserve_footer'); ?>
</div>
<script src="<?php echo get_template_directory_uri(); ?>/renew2025/js/jquery.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/renew2025/js/jquery.lazyload.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/renew2025/js/background-check.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/renew2025/js/gsap.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/renew2025/js/imagesloaded.pkgd.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/renew2025/js/slick/slick.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/renew2025/js/infiniteslidev2.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/renew2025/js/jquery.matchHeight.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/renew2025/js/common.js"></script>
<?php if(is_page('lian-reserve')) {?>
<script src="<?php echo get_template_directory_uri(); ?>/renew2025/js/lian-reserve.js"></script>
<?php } ?>
<?php if(is_page('price')) {?>
<script src="<?php echo get_template_directory_uri(); ?>/renew2025/js/price.js"></script>
<?php } ?>
<?php wp_footer(); ?>
</body>
</html>