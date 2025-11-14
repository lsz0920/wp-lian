<?php ?>
</div><!-- #content -->

<?php get_template_part('renew2025/inc/footer'); ?>

<!-- <ul class="float__cta pc">
	<li><a href="tel:03-3470-5678" target="_blank" rel="noopener noreferrer"><img src="<?php echo get_template_directory_uri(); ?>/img/float-pc-tel.jpg" alt="03-3470-5678"></a></li>
	<li><a href="https://lin.ee/U5tTSaw" target="_blank" rel="noopener noreferrer"><img src="<?php echo get_template_directory_uri(); ?>/img/float-pc-line.jpg" alt="LINEからのご予約"></a></li>
</ul> -->

<!-- Modal -->
<div id="popupModal" class="modal">
	<div class="modal-content">
		<span class="close">&times;</span>
		<p>
			【料金改定のお知らせ】
			<br>
			<br>いつもリアンクリニックをご利用いただきありがとうございます。
			<br>このたび、2025年10月1日より一部メニューの料金を改定いたします。
			<br>
			<br>詳細は以下のお知らせ記事をご覧ください。
			<br><a href="https://lianclinic.net/6379/">料金改定についてのお知らせはこちら</a>
			<br>
			<br>ご不便をおかけいたしますが、今後ともより良いサービスの提供に努めてまいりますので、何卒ご理解のほどよろしくお願い申し上げます。
		</p>
	</div>
</div>

<style>
	.tel-rsrv-wrapper{
		justify-content: center;
	}
	/* Modal (background) */
	.modal {
	font-size: 12px;
	display: none; /* Hidden by default */
	position: fixed; /* Stay in place */
	z-index: 999; /* Sit on top */
	padding-top: 64px; /* Location of the box */
	left: 0;
	top: 0;
	width: 100%; /* Full width */
	height: 100%; /* Full height */
	overflow: auto; /* Enable scroll if needed */
	background-color: rgba(0, 0, 0, 0.7)!important; /* Black w/ opacity */
	margin-top: 0!important;
	}
	@media (min-width: 1049px) {
		.modal {
			font-size: 16px;
			padding-top: 64px;
		}
	}

	/* Modal Content */
	.modal-content {
	background-color: #fefefe;
	margin: auto;
	padding: 20px;
	border: 1px solid #888;
	width: 80%;
	max-width: 500px; /* Maximum width */
	box-shadow: 0 5px 15px rgba(0, 0, 0, 0.3);
	border-radius: 10px;
	position: relative;
	}
	
	.modal-content p a{
		color: blue;
		text-decoration: underline;
	}

	/* The Close Button */
	.close {
	color: #aaa;
    position: absolute;
    top: 14px;
    right: 22px;
	font-size: 28px;
	font-weight: bold;
	display: block;
	line-height: 1;
	}

	.close:hover,
	.close:focus {
	color: black;
	text-decoration: none;
	cursor: pointer;
	}

	#nav-wrapper .tel-rsrv-wrapper{
		justify-content: right;

	}

	.caution__belt {
	overflow: hidden;
	white-space: nowrap;
	box-sizing: border-box;
	background-color: #b29676;
	color: #fff; /* 文字色を白に設定 */
	padding: 10px 0; /* 上下に余白を追加 */
	font-size: 12px;
	margin-top: 58px;
	}

	.caution__belt p {
	display: inline-block;
	margin: 0;
	animation: marquee 40s linear infinite; /* アニメーションを設定 */
	}
	.caution__belt a{
		color: #fff;
		text-decoration: underline;
	}
	@media (min-width: 1049px) {
		.caution__belt {
			font-size: 14px;
			margin-top: 0;
		}
	}

	@keyframes marquee {
		0% {
			transform: translateX(10%); /* 右端の外からスタート */
		}
		100% {
			transform: translateX(-100%); /* 左端の外まで移動 */
		}
	}
		
</style>

<script>
	// Check if this is the first visit
	window.onload = function() {
		if (!sessionStorage.getItem('firstVisit')) {
			// Show the modal
			var modal = document.getElementById("popupModal");
			var span = document.getElementsByClassName("close")[0];

			modal.style.display = "block";

			// When the user clicks on <span> (x), close the modal
			span.onclick = function() {
			modal.style.display = "none";
			}

			// When the user clicks anywhere outside of the modal, close it
			window.onclick = function(event) {
			if (event.target == modal) {
				modal.style.display = "none";
			}
			}

			// Set first visit flag
			sessionStorage.setItem('firstVisit', 'true');
		}
	}
</script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.3/jquery.mCustomScrollbar.concat.min.js"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js" defer></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js" defer></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/src/heightLine.js?123.31<?= rand() ?>" defer></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/src/common.js?123.31<?= rand() ?>" defer></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/src/app.js?123.31<?= rand() ?>" defer></script>
<!-- <script src="<?php echo get_template_directory_uri(); ?>/js/src/footerFixed.min.js?123.31<?= rand() ?>" defer></script> -->

<script src="<?php echo get_template_directory_uri(); ?>/renew2025/js/imagesloaded.pkgd.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/renew2025/js/jquery.lazyload.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/renew2025/js/background-check.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/src/renew_common.js"></script>

<?php wp_footer(); ?>
</body>

</html>