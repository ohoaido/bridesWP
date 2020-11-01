
<?php    
    /*
        Template Name: Home Page Template
    */
?>
<?php get_header() ?>
<!-- Content -->
	<main id="content">
		<!-- Content Banner -->
		<section class="content-banner">
			<?php
				$images = rwmb_meta('group_srhijqh02zs');
				$count = count($images);
			?>
			<div class="box_caption">				
				<div class="container">
					<div class="box__center">
						<div class="caption">
							<div class="slider__arrow">
								<div class="arrow__prev"></div>
								<div class="arrow__number">
									<span class="number__current">1</span> / <span class="number__max"><?= $count ?></span>
								</div>
								<div class="arrow__next"></div>
							</div>
							<div class="title">
								<?= rwmb_meta('text_1') ?>
							</div>

							<div class="text">
								<?= rwmb_meta('text_2') ?>
							</div>
							<a href="<?= rwmb_meta('url_2') ?>" class="read__more">
								<span></span>
								<?= rwmb_meta('text_3') ?>
							</a>
						</div>
					</div>
				</div>
			</div>
			<div class="box_sliders owl-carousel">	
				<!-- <div class="banner_child" style="background-image: url(<?php bloginfo('template_url'); ?>/images/banner.jpg);"> 
				<div class="banner_child" style="background-image: url(<?php bloginfo('template_url'); ?>/images/banner-2.jpg);">
				</div>		
				<div class="banner_child" style="background-image: url(<?php bloginfo('template_url'); ?>/images/banner.jpg);">
				</div>		
				<div class="banner_child" style="background-image: url(<?php bloginfo('template_url'); ?>/images/banner-2.jpg);">
				</div>
				-->
				<?php 
					foreach ($images as $image): 
						$bg = wp_get_attachment_image_url( $image['background_1'], 'full' );
						?>						
						<div class="banner_child" style="background-image: url(<?=  $bg ?>);">
						</div>	
					<?php endforeach; ?>
			</div>
		</section> <!-- /Content Banner -->

		<!-- Content Gallery -->
		<section class="content-gallery">
			<div class="container">
				<div class="content_box">
					<div class="box__images owl-carousel">
						<div class="image__child" style="background-image: url(<?php bloginfo('template_url'); ?>/images/banner-3.png);">
							<img src="<?php bloginfo('template_url'); ?>/images/banner.jpg" alt="Image">
						</div>
						<div class="image__child" style="background-image: url(images/banner-2.jpg);">
							<img src="<?php bloginfo('template_url'); ?>/images/banner.jpg" alt="Image">
						</div>
						<div class="image__child" style="background-image: url(images/banner.jpg);">
							<img src="<?php bloginfo('template_url'); ?>/images/banner.jpg" alt="Image">
						</div> 
						<!-- 
						<div class="image__child" style="background-image: url(<?=  rwmb_meta('background_5')['full_url'] ?>);">
							<img src="<?php bloginfo('template_url'); ?>/images/banner.jpg" alt="Image">
						</div>
						<div class="image__child" style="background-image: url(<?=  rwmb_meta('background_6')['full_url'] ?>);">
							<img src="<?php bloginfo('template_url'); ?>/images/banner.jpg" alt="Image">
						</div>
						<div class="image__child" style="background-image: url(<?=  rwmb_meta('background_7')['full_url'] ?>);">
							<img src="<?php bloginfo('template_url'); ?>/images/banner.jpg" alt="Image">
						</div>
						<?php 
						$gallery_main_id = rwmb_meta('gallery_main');
						if ( $gallery_main_id ): ?>					
							<div class="image__child" style="background-image: url(<?=vt_resize(get_post_thumbnail_id($gallery_main_id), '', 1000, 500, true)['url']?>);">
								<img src="<?=vt_resize(get_post_thumbnail_id($gallery_main_id), '', 1000, 500, true)['url']?>" alt="Image">
							</div>
						<?php endif; ?>
						-->
					</div>

					<div class="box__gray">						
						<div class="box__captions owl-carousel">
							<div class="caption__child">
								<div class="child__category">BRIDAL DESIGNERS</div>

								<div class="child__name">Anne Barge</div>

								<div class="child__text">
									Được thành lập từ năm 1999, Anne Barge là thương hiệu thời trang cưới lâu đời và nổi tiếng tại Mỹ. Các thiết kế của Anne Barge dung hòa giữa phom dáng cổ điển với những đường cắt, chi tiết đính kết hiện đại...
								</div>
								<a class="child__more">
									<span></span>
									xem bộ sưu tập
								</a>
							</div>
							<div class="caption__child">
								<div class="child__category">BRIDAL DESIGNERS</div>

								<div class="child__name">Marchesa</div>

								<div class="child__text">
									Được thành lập từ năm 1999, Anne Barge là thương hiệu thời trang cưới lâu đời và nổi tiếng tại Mỹ. Các thiết kế của Anne Barge dung hòa giữa phom dáng cổ điển với những đường cắt, chi tiết đính kết hiện đại...
								</div>
								<a class="child__more">
									<span></span>
									xem bộ sưu tập
								</a>
							</div>
							<div class="caption__child">
								<div class="child__category">BRIDAL DESIGNERS</div>

								<div class="child__name">Costarellos</div>

								<div class="child__text">
									Được thành lập từ năm 1999, Anne Barge là thương hiệu thời trang cưới lâu đời và nổi tiếng tại Mỹ. Các thiết kế của Anne Barge dung hòa giữa phom dáng cổ điển với những đường cắt, chi tiết đính kết hiện đại...
								</div>
								<a class="child__more">
									<span></span>
									xem bộ sưu tập
								</a>
							</div>
						</div>
						<div class="box__arrow">							
							<div class="arrow__prev"></div>
							<div class="arrow__number">
								<span class="number__current">1</span> / <span class="number__max">3</span>
							</div>
							<div class="arrow__next"></div>
						</div>
					</div>
				</div>
			</div>
		</section> <!-- /Content Gallery -->

		<!-- Content About -->
		<section class="content-about">
			<div class="container">
				<div class="content_box">
					<div class="box__small">About Us</div>
					<h2 class="box__heading">Our Brand</h2>
					<div class="box__text">
						Brides by LemonLOVE không chỉ là một bridal salon đơn thuần mà còn là nơi tạo ra một cái nhìn mới về cô dâu hiện đại.
					</div>
				</div>
			</div>

			<div class="box__left">
				<div class="box__img1" style="background-image: url(<?php bloginfo('template_url'); ?>/images/image1.png);">					
				</div>
				<div class="box__quote">
					<div class="box__img2" style="background-image: url(<?php bloginfo('template_url'); ?>/images/image3.png);">					
					</div>
					<div class="quote__text">
						Inspired by her multi-ethnic life, Brides by LemonLove creates fine jewelry from treasured materials to share her wonderful tales...
					</div>

					<div class="quote__more">
						<span></span>
						tìm hiểu thêm
					</div>
				</div>
			</div>

			<div class="box__right">
				<div class="box__caption">
					<div class="caption__circle">
						<img src="<?php bloginfo('template_url'); ?>/images/bg__logo.png" alt="Logo">
					</div>
					<div class="caption__text">
						Bridal salon của LemonLOVE tọa lạc tại vị trí trung tâm thành phố, địa chỉ số: 95 Pasteur, Phường Bến Nghé, Quận 1. Không gian sang trọng và hiện đại được thiết kế theo phong cách Santorini sẽ mang đến trải nghiệm tuyệt vời và cao cấp nhất cho các cặp đôi.
					</div>
					<a class="caption__more">
						<span></span>
						xem Store locator
					</a>
				</div>
				<div class="box__img3" style="background-image: url(<?php bloginfo('template_url'); ?>/images/image2.png);">					
				</div>

				<script>
					jQuery(document).ready(function($) {
						if(jQuery(window).width() > 992){	
							var height = jQuery('.content-about .box__left').outerHeight();
							jQuery('.content-about .box__right .box__img3').height(height - jQuery('.content-about .box__right .box__caption').outerHeight() - 55);
						}

						jQuery(window).resize(function(event) {
							/* Act on the event */
							if(jQuery(window).width() > 992){	
								var height = jQuery('.content-about .box__left').outerHeight();
								jQuery('.content-about .box__right .box__img3').height(height - jQuery('.content-about .box__right .box__caption').outerHeight() - 55);
							}
						});
					});
				</script>
			</div>
		</section> <!-- /Content About -->

		<!-- Content Albums -->
		<section class="content-albums">
			<div class="container">
				<div class="content_box">
					<div class="box__small">BRIDAL GOWNS</div>
					<div class="box__rela">						
						<h2 class="box__heading">New Arrival Dress</h2>
						<div class="box__control">
							<div class="control__arrow">
								<div class="arrow__prev"></div>
								<div class="arrow__number">/</div>
								<div class="arrow__next"></div>
							</div>
							<a class="control__more">
								<span></span>
								xem thêm
							</a>
						</div>
					</div>
					<div class="box__sliders owl-carousel">
						<div class="item">
							<a href="#" title="">
								<div class="item__img">
									<img src="<?php bloginfo('template_url'); ?>/images/img-1.png" alt="Image">
									<img src="<?php bloginfo('template_url'); ?>/images/img-2.png" alt="Image">
								</div>
								<div class="item__caption">
									<h3 class="item__name">Cassids</h3>
									<div class="item__auth">by <span>Anne Barge</span></div>
								</div>
							</a>
						</div>
						<div class="item">
							<a href="#" title="">
								<div class="item__img">
									<img src="<?php bloginfo('template_url'); ?>/images/img-2.png" alt="Image">
									<img src="<?php bloginfo('template_url'); ?>/images/img-3.png" alt="Image">
								</div>
								<div class="item__caption">
									<h3 class="item__name">Britney</h3>
									<div class="item__auth">by <span>Rosaline</span></div>
								</div>
							</a>
						</div>
						<div class="item">
							<a href="#" title="">
								<div class="item__img">
									<img src="<?php bloginfo('template_url'); ?>/images/img-3.png" alt="Image">
									<img src="<?php bloginfo('template_url'); ?>/images/img-4.png" alt="Image">
								</div>
								<div class="item__caption">
									<h3 class="item__name">Christine</h3>
									<div class="item__auth">by <span>Anne Barge</span></div>
								</div>
							</a>
						</div>
						<div class="item">
							<a href="#" title="">
								<div class="item__img">
									<img src="<?php bloginfo('template_url'); ?>/images/img-4.png" alt="Image">
									<img src="<?php bloginfo('template_url'); ?>/images/img-1.png" alt="Image">
								</div>
								<div class="item__caption">
									<h3 class="item__name">Cassids</h3>
									<div class="item__auth">by <span>Anne Barge</span></div>
								</div>
							</a>
						</div>
						<div class="item">
							<a href="#" title="">
								<div class="item__img">
									<img src="<?php bloginfo('template_url'); ?>/images/img-1.png" alt="Image">
									<img src="<?php bloginfo('template_url'); ?>/images/img-2.png" alt="Image">
								</div>
								<div class="item__caption">
									<h3 class="item__name">Cassids</h3>
									<div class="item__auth">by <span>Anne Barge</span></div>
								</div>
							</a>
						</div>
						<div class="item">
							<a href="#" title="">
								<div class="item__img">
									<img src="<?php bloginfo('template_url'); ?>/images/img-2.png" alt="Image">
									<img src="<?php bloginfo('template_url'); ?>/images/img-3.png" alt="Image">
								</div>
								<div class="item__caption">
									<h3 class="item__name">Britney</h3>
									<div class="item__auth">by <span>Rosaline</span></div>
								</div>
							</a>
						</div>
						<div class="item">
							<a href="#" title="">
								<div class="item__img">
									<img src="<?php bloginfo('template_url'); ?>/images/img-3.png" alt="Image">
									<img src="<?php bloginfo('template_url'); ?>/images/img-4.png" alt="Image">
								</div>
								<div class="item__caption">
									<h3 class="item__name">Christine</h3>
									<div class="item__auth">by <span>Anne Barge</span></div>
								</div>
							</a>
						</div>
						<div class="item">
							<a href="#" title="">
								<div class="item__img">
									<img src="<?php bloginfo('template_url'); ?>/images/img-4.png" alt="Image">
									<img src="<?php bloginfo('template_url'); ?>/images/img-1.png" alt="Image">
								</div>
								<div class="item__caption">
									<h3 class="item__name">Cassids</h3>
									<div class="item__auth">by <span>Anne Barge</span></div>
								</div>
							</a>
						</div>
					</div>

					<div class="box__book md-trigger" data-modal="#book">
						REQUEST AN APPOINTMENT
					</div>
				</div>
			</div>
		</section> <!-- /Content Albums -->

		<!-- Content Background and Text -->
		<section class="content-btext">
			<div class="content_img" style="background-image: url(<?php bloginfo('template_url'); ?>/images/img-5.png);"></div>
			<div class="container">
				<div class="content_box">
					<div class="box__flex">
						to the moon<br>
						and back
					</div>
				</div>
			</div>
		</section> <!-- /Content Background and Text -->
	</main>  <!-- /Content -->

	<div class="clearfix"></div>
<?php get_footer() ?>