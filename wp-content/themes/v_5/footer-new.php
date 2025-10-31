</main>
	<?php get_template_part('new/inc/footer'); ?>
</div>
<script src="<?php echo get_template_directory_uri(); ?>/new/js/jquery.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/new/js/jquery.lazyload.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/new/js/background-check.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/new/js/gsap.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/new/js/swiper/swiper-bundle.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/new/js/imagesloaded.pkgd.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/new/js/simplebar/simplebar.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/new/js/slick/slick.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/new/js/common.js"></script>
<?php if(is_home()||is_front_page()) {?>
<script src="<?php echo get_template_directory_uri(); ?>/new/js/index.js"></script>
<?php } ?>
<?php if(is_post_type_archive('service')) {?>
<script>
	$(function(){
		$('#main .info dt').on('click',function(){
			if(window.innerWidth < 1000){
				$(this).toggleClass('on');
				$(this).next().slideToggle();
			}
		})
	})
</script>
<?php } ?>
<?php if(is_singular('service')) {?>
<script src="<?php echo get_template_directory_uri(); ?>/js/services_detail.js"></script>
<?php } ?>
<?php wp_footer(); ?>
</body>
</html>