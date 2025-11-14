</main>
	<?php 
	if(is_singular( 'case' )){
		$showin = get_field('ff_showin');
		if($showin == 'reserve'){
			get_template_part('renew2025/inc/reserve_footer');
		}else {
			get_template_part('renew2025/inc/footer');
		}
	}else {
		get_template_part('renew2025/inc/footer');
	}
	?>
</div>
<script src="<?php echo get_template_directory_uri(); ?>/renew2025/js/jquery.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/renew2025/js/jquery.lazyload.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/renew2025/js/background-check.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/renew2025/js/gsap.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/renew2025/js/swiper/swiper-bundle.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/renew2025/js/imagesloaded.pkgd.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/renew2025/js/simplebar/simplebar.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/renew2025/js/slick/slick.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/renew2025/js/jquery.matchHeight.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/renew2025/js/common.js"></script>
<?php if(is_home()||is_front_page()) {?>
<script src="<?php echo get_template_directory_uri(); ?>/renew2025/js/index.js"></script>
<?php } ?>
<?php if(is_post_type_archive('services')) {?>
<script src="<?php echo get_template_directory_uri(); ?>/renew2025/js/services.js"></script>
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
<?php if(is_post_type_archive('case')||is_page('case')) {?>
<script>
	$(function(){
		if($('.wp-pagenavi').length) {
			if(!$('.previouspostslink').length){
				$('.wp-pagenavi').prepend('<a class="previouspostslink noLink" rel="prev" href="#">Prev</a>');
			}

			if(!$('.nextpostslink').length){
				$('.wp-pagenavi').append('<a class="nextpostslink noLink" rel="next" href="#">Next</a>');
			}

			$('.wp-pagenavi span.current,.wp-pagenavi a.page,.wp-pagenavi a.last').each(function(){
				var num = $(this).text();
				if(num < 9){
					num = '0' + num;
					$(this).text(num);
				}
			})
		}
	})
</script>
<?php } ?>
<?php wp_footer(); ?>
</body>
</html>