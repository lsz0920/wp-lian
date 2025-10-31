        <div class="sl-pp">
			<div class="sl-pp-inn services">
                <?php if(is_page('services')): ?>
                    <div class="sl-pp-inn-ttl subpage-ttl services-ttl">
                        <h1 class="under-line subpage-ttl__inner">Services</h1>
                    </div>
                <?php endif; ?>
				<div class="sl-pp-inn-content">
					<div class="services-inner">
                        <?php if(is_page('services')): ?>
                            <h2 class="services-cat-ttl">Category</h2>
                            <p class="services-cat-subttl">カテゴリー</p>
                        <?php endif; ?>
						<div class="services-contents">
                            <?php if(is_page('services')): ?>
                                <ul class="d-fl services-btns">
                                    <li><a href="#art-make">アートメイク</a></li>
                                    <li><a href="#sagging">たるみ治療</a></li>
                                    <li><a href="#pores">毛穴治療</a></li>
                                    <li><a href="#small-face">小顔治療</a></li>
                                    <!--<li><a href="#exosomes">エクソソーム</a></li>-->
                                </ul>
                            <?php endif; ?>
							<div class="services-articles">
								<div id="art-make" class="services-articles-cat">
									<h3 class="services-articles-ttl">アートメイク</h3>
									<ul class="services-articles-inner">
										<li class="services-articles-item">
											<a href="<?= home_url('/service'); ?>/artmake/">
												<div class="services-articles-thumbnail"><img loading="lazy"
														src="<?php echo get_template_directory_uri(); ?>/img/services/services-01.jpg"
														alt="眉アートメイク" /></div>
												<h4 class="services-articles-item-ttl">眉アートメイク</h4>
											</a>
										</li>
										<li class="services-articles-item">
											<a href="<?= home_url('/service'); ?>/artmake-lip/">
												<div class="services-articles-thumbnail"><img loading="lazy"
														src="<?php echo get_template_directory_uri(); ?>/img/services/services-02.jpg"
														alt="イメージ画像：リップアートメイク" /></div>
												<h4 class="services-articles-item-ttl">リップアートメイク</h4>
											</a>
										</li>
										<li class="services-articles-item">
											<a href="<?= home_url('/service'); ?>/artmake-eyeline/">
												<div class="services-articles-thumbnail"><img loading="lazy"
														src="<?php echo get_template_directory_uri(); ?>/img/services/services-03.jpg"
														alt="イメージ画像：アイラインアートメイク" /></div>
												<h4 class="services-articles-item-ttl">アイラインアートメイク</h4>
											</a>
										</li>
									</ul>
								</div>
								<div id="sagging" class="services-articles-cat">
									<h3 class="services-articles-ttl">たるみ治療</h3>
									<ul class="services-articles-inner">
										<li class="services-articles-item">
											<a href="<?= home_url('/service'); ?>/hifu/">
												<div class="services-articles-thumbnail"><img loading="lazy"
														src="<?php echo get_template_directory_uri(); ?>/img/services/servises-04.webp"
														alt="イメージ画像：デザイニングハイフ" /></div>
												<h4 class="services-articles-item-ttl">デザイニングハイフ</h4>
											</a>
										</li>
										<li class="services-articles-item">
											<a href="<?= home_url('/service'); ?>/collagen-hifu/">
												<div class="services-articles-thumbnail"><img loading="lazy"
														src="<?php echo get_template_directory_uri(); ?>/img/services/services-collagen-hifu.webp"
														alt="イメージ画像：コラーゲンハイフ" /></div>
												<h4 class="services-articles-item-ttl">コラーゲンハイフ</h4>
											</a>
										</li>
										<li class="services-articles-item">
											<a href="<?= home_url('/service'); ?>/sarmagen/">
												<div class="services-articles-thumbnail"><img loading="lazy"
														src="<?php echo get_template_directory_uri(); ?>/img/services/services-06.jpg"
														alt="イメージ画像：サーマジェン" /></div>
												<h4 class="services-articles-item-ttl">サーマジェン</h4>
											</a>
										</li>
										<li class="services-articles-item">
											<a href="<?= home_url('/service'); ?>/liftup-botox/">
												<div class="services-articles-thumbnail"><img loading="lazy"
														src="<?php echo get_template_directory_uri(); ?>/img/services/services-07.jpg"
														alt="イメージ画像：リフトアップボトックス" /></div>
												<h4 class="services-articles-item-ttl">リフトアップボトックス</h4>
											</a>
										</li>
										<li class="services-articles-item">
											<a href="<?= home_url('/service'); ?>/thread-lift/">
												<div class="services-articles-thumbnail"><img loading="lazy"
														src="<?php echo get_template_directory_uri(); ?>/img/thread-lift_about.webp"
														alt="イメージ画像：糸リフト" /></div>
												<h4 class="services-articles-item-ttl">糸リフト</h4>
											</a>
										</li>
										<li class="services-articles-item">
											<a href="<?= home_url('/service'); ?>/thread/">
												<div class="services-articles-thumbnail"><img loading="lazy"
														src="<?php echo get_template_directory_uri(); ?>/img/services/services-08.jpg"
														alt="イメージ画像：ショートスレッド" /></div>
												<h4 class="services-articles-item-ttl">ショートスレッド</h4>
											</a>
										</li>
										<li class="services-articles-item">
											<a href="<?= home_url('/service'); ?>/potenza/">
												<div class="services-articles-thumbnail"><img loading="lazy"
														src="<?php echo get_template_directory_uri(); ?>/img/services/services-16.jpg"
														alt="イメージ画像：ポテンツァ" /></div>
												<h4 class="services-articles-item-ttl">ポテンツァ</h4>
											</a>
										</li>
										<li class="services-articles-item">
											<a href="<?= home_url('/service'); ?>/hyaluronic/">
												<div class="services-articles-thumbnail"><img
														src="<?php echo get_template_directory_uri(); ?>/img/services/services-hyaluronic.jpg"
														alt="イメージ画像：ヒアルロン酸" /></div>
												<h4 class="services-articles-item-ttl">ヒアルロン酸</h4>
											</a>
										</li>
										<li class="services-articles-item">
											<a href="<?= home_url('/service'); ?>/volnewmer/">
												<div class="services-articles-thumbnail">
													<img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/services/services-17.jpg" alt="イメージ画像：ボルニューマ" />
												</div>
												<h4 class="services-articles-item-ttl">ボルニューマ</h4>
											</a>
										</li>
										<li class="services-articles-item">
											<a href="<?= home_url('/service'); ?>/plasmapen/">
												<div class="services-articles-thumbnail">
													<img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/services/services-plasmapen.jpg" alt="イメージ画像：プラズマペン" />
												</div>
												<h4 class="services-articles-item-ttl">プラズマペン</h4>
											</a>
										</li>
										<li class="services-articles-item">
											<a href="<?= home_url('/service'); ?>/xerf/">
												<div class="services-articles-thumbnail">
													<img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/services/services-xerf.jpg" alt="イメージ画像：XERF 'ザーフ'" />
												</div>
												<h4 class="services-articles-item-ttl">XERF 'ザーフ'</h4>
											</a>
										</li>
									</ul>
								</div>
								<div id="pores" class="services-articles-cat">
									<h3 class="services-articles-ttl">毛穴治療</h3>
									<ul class="services-articles-inner">
										<li class="services-articles-item">
											<a href="<?= home_url('/service'); ?>/potenza/">
												<div class="services-articles-thumbnail"><img loading="lazy"
														src="<?php echo get_template_directory_uri(); ?>/img/services/services-09.jpg"
														alt="イメージ画像：ポテンツァ" /></div>
												<h4 class="services-articles-item-ttl">ポテンツァ</h4>
											</a>
										</li>
										<li class="services-articles-item">
											<a href="<?= home_url('/service'); ?>/peeling/">
												<div class="services-articles-thumbnail"><img loading="lazy"
														src="<?php echo get_template_directory_uri(); ?>/img/services/services-10.jpg"
														alt="イメージ画像：ピーリング" /></div>
												<h4 class="services-articles-item-ttl">ピーリング</h4>
											</a>
										</li>
										<li class="services-articles-item">
											<a href="<?= home_url('/service'); ?>/photoipl/">
												<div class="services-articles-thumbnail"><img loading="lazy"
														src="<?php echo get_template_directory_uri(); ?>/img/services/services-12.jpg"
														alt="イメージ画像：フォトipl" /></div>
												<h4 class="services-articles-item-ttl">フォトipl</h4>
											</a>
										</li>
										<li class="services-articles-item">
											<a href="<?= home_url('/service'); ?>/poreless-botox/">
												<div class="services-articles-thumbnail"><img loading="lazy"
														src="<?php echo get_template_directory_uri(); ?>/img/sub-whatporeless-img01.png"
														alt="イメージ画像：ポアレスボトックス" /></div>
												<h4 class="services-articles-item-ttl">ポアレスボトックス</h4>
											</a>
										</li>
									</ul>
								</div>
								<div id="small-face" class="services-articles-cat">
									<h3 class="services-articles-ttl">小顔治療</h3>
									<ul class="services-articles-inner">
										<li class="services-articles-item">
											<a href="<?= home_url('/service'); ?>/botox/">
												<div class="services-articles-thumbnail"><img loading="lazy"
														src="<?php echo get_template_directory_uri(); ?>/img/services/services-13.jpg"
														alt="イメージ画像：ボトックス" /></div>
												<h4 class="services-articles-item-ttl">ボトックス</h4>
											</a>
										</li>
										<li class="services-articles-item">
											<a href="<?= home_url('/service'); ?>/hifu-linear/">
												<div class="services-articles-thumbnail"><img loading="lazy"
														src="<?php echo get_template_directory_uri(); ?>/img/services/services-04.jpg"
														alt="イメージ画像：HIFUリニア" /></div>
												<h4 class="services-articles-item-ttl">HIFUリニア</h4>
											</a>
										</li>
										<li class="services-articles-item">
											<a href="<?= home_url('/service'); ?>/fat-dissolve/">
												<div class="services-articles-thumbnail"><img loading="lazy"
														src="<?php echo get_template_directory_uri(); ?>/img/services/services-15.jpg"
														alt="イメージ画像：脂肪溶解注射 カベリン" /></div>
												<h4 class="services-articles-item-ttl">脂肪溶解注射 カベリン</h4>
											</a>
										</li>
									</ul>
								</div>
								<!--
								<div id="exosomes" class="services-articles-cat">
									<h3 class="services-articles-ttl">エクソソーム</h3>
									<ul class="services-articles-inner">
										<li class="services-articles-item">
											<a href="<?= home_url('/service'); ?>/exosomes/">
												<div class="services-articles-thumbnail"><img loading="lazy"
														src="https://lianclinic.net/renew2022/wp-content/uploads/2022/03/IMG_4704.jpeg"
														alt="イメージ画像：エクソソーム" /></div>
												<h4 class="services-articles-item-ttl">エクソソーム</h4>
											</a>
										</li>
									</ul>
								</div>
								-->
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>