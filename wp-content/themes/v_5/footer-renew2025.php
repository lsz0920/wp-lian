</main>
	<?php get_template_part('renew2025/inc/footer'); ?>
</div>
<script src="<?php echo get_template_directory_uri(); ?>/renew2025/js/jquery.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/renew2025/js/jquery.lazyload.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/renew2025/js/background-check.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/renew2025/js/gsap.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/renew2025/js/swiper/swiper-bundle.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/renew2025/js/imagesloaded.pkgd.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/renew2025/js/simplebar/simplebar.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/renew2025/js/slick/slick.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/renew2025/js/common.js"></script>
<?php if(is_home()||is_front_page()) {?>
<script src="<?php echo get_template_directory_uri(); ?>/renew2025/js/index.js"></script>
<?php } ?>
<?php if(is_post_type_archive('services')) {?>
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
<?php if(is_singular('services')) {?>
<script src="<?php echo get_template_directory_uri(); ?>/renew2025/js/services_detail.js"></script>
<?php } ?>
<?php if(is_post_type_archive('price')) {?>
<script src="<?php echo get_template_directory_uri(); ?>/renew2025/js/price.js"></script>
<?php } ?>

<?php if(is_singular('case')) {?>
<script src="<?php echo get_template_directory_uri(); ?>/renew2025/js/case_detail.js"></script>
<?php } ?>
<?php wp_footer(); ?>
</body>
</html>