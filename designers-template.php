<?php 
    global $fr_options;
?>
<?php    
    /*
        Template Name: Designers Template
    */
?>
<?php get_header() ?>
	<!-- Content -->
	<main id="content">
		<!-- Content Designers -->
		<?php 
		$images = rwmb_meta('group_wp2txdulpxi');
		foreach ($images as $image): 
			$bg = wp_get_attachment_image_url( $image['content_designers'], 'full' );
			$Category = $image['category_designers'];
			$Name = $image['name_designers'];
			$Text = $image['text_designers'];
			$Prevew = $image['prevew_designers'];
			$Link = $image['url_designers'];
			?>						
			<section class="content-designers">
			<div class="box__image" style="background-image: url(<?=  $bg ?>);"></div>
			<div class="box__caption">
				<div class="container">
					<div class="caption__category"><?=  $Category ?> </div>

					<h3 class="caption__name"><?=  $Name ?> </h3>

					<div class="caption__text">
						<?=  $Text ?> 
					</div>
					<a class="caption__more">
						<span></span>
						<?=  $Prevew ?> 
					</a>					
				</div>
			</div>
		</section> 	
		<?php endforeach; ?>
		<!-- /Content Designers -->
		<?php wp_reset_query();?>
		<!-- Content Single Gallery -->
		<section class="content-single-gallery">
			<div class="container">
				<div class="content_box">
					<div class="box__images">
						<div class="image__child" style="background-image: url(<?= rwmb_meta('images_single_gallery',array("size" => "full"))['url'] ?>;" alt="Image">
							<img src="<?=  rwmb_meta('images_single_gallery')['full_url'] ?>" alt="Image">
						</div>
					</div>

					<div class="box__gray">						
						<div class="box__captions">
							<div class="caption__child">
								<div class="child__category"><?= rwmb_meta('category_single_gallery') ?></div>

								<h3 class="child__name"><?=  rwmb_meta('name_single_gallery') ?></h3>

								<div class="child__text">
									<?=  rwmb_meta('text_single_gallery') ?> 
								</div>
								<a class="child__more">
									<span></span>
									<?= rwmb_meta('prevew_single_gallery') ?> 
								</a>

								<div class="child__book md-trigger" data-modal="#book">
									<?=  rwmb_meta('book_single_gallery') ?> 
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section> <!-- /Content Gallery -->

		<!-- Content Grid 2 Slider -->
		<section class="content-grid2-slider">
			<?php 
			$images = rwmb_meta('group_wp2txdulpxi');
			foreach ($images as $image): 
				$bg = wp_get_attachment_image_url( $image['content_designers'], 'full' );
				$Category = $image['category_designers'];
				$Name = $image['name_designers'];
				$Text = $image['text_designers'];
				$Prevew = $image['prevew_designers'];
				$Link = $image['url_designers'];
				?>						
			<?php endforeach; ?>
			<div class="content__left">
				<div class="left__slider owl-carousel">					
					<div class="item" style="background-image: url(<?= $bg ?>;">
						<img src="<?=  rwmb_meta('images_grid2')['full_url'] ?>" alt="Image">
					</div>
					<div class="item" style="background-image: url(images/single-1.png);">
						<img src="images/single-1.png" alt="Image">
					</div>
				</div>
			</div>
			<div class="content__right">
				<div class="right__slider owl-carousel">
					<div class="item">	
						<div class="item__box">	
							<div class="item__circle">
								<img src="images/bg__logo__brown.png" alt="Circle">
							</div>
							<div class="clearfix"></div>
							<div class="item__category">BRIDESMAIDS DESIGNERS</div>

							<div class="item__name">
								<h3>Twigs and Honey</h3>
								<div class="item__arrow">
									<div class="arrow__prev"></div>
									<div class="arrow__next"></div>
								</div>							
							</div>

							<div class="item__text">
								Được thành lập từ năm 1999, Anne Barge là thương hiệu thời trang cưới lâu đời và nổi tiếng tại Mỹ. Các thiết kế của Anne Barge dung hòa giữa phom dáng cổ điển với những đường cắt, chi tiết đính kết hiện đại...
							</div>
							<a class="item__more">
								<span></span>
								xem bộ sưu tập
							</a>

							<div class="item__book md-trigger" data-modal="#book">
								REQUEST AN APPOINTMENT
							</div>
						</div>
					</div>
					<div class="item">	
						<div class="item__box">	
							<div class="item__circle">
								<img src="images/bg__logo__brown.png" alt="Circle">
							</div>
							<div class="clearfix"></div>
							<div class="item__category">BRIDESMAIDS DESIGNERS</div>

							<div class="item__name">
								<h3>LELET NY</h3>
								<div class="item__arrow">
									<div class="arrow__prev"></div>
									<div class="arrow__next"></div>
								</div>							
							</div>

							<div class="item__text">
								Được thành lập từ năm 1999, Anne Barge là thương hiệu thời trang cưới lâu đời và nổi tiếng tại Mỹ. Các thiết kế của Anne Barge dung hòa giữa phom dáng cổ điển với những đường cắt, chi tiết đính kết hiện đại...ững đường cắt, chi tiết đính kết hiện đại...ững đường cắt, chi tiết đính kết hiện đại...
							</div>
							<a class="item__more">
								<span></span>
								xem bộ sưu tập
							</a>

							<div class="item__book md-trigger" data-modal="#book">
								REQUEST AN APPOINTMENT
							</div>
						</div>
					</div>
				</div>
			</div>
		</section> <!-- Content Grid 2 Slider -->

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
									<img src="images/img-1.png" alt="Image">
									<img src="images/img-2.png" alt="Image">
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
									<img src="images/img-2.png" alt="Image">
									<img src="images/img-3.png" alt="Image">
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
									<img src="images/img-3.png" alt="Image">
									<img src="images/img-4.png" alt="Image">
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
									<img src="images/img-4.png" alt="Image">
									<img src="images/img-1.png" alt="Image">
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
									<img src="images/img-1.png" alt="Image">
									<img src="images/img-2.png" alt="Image">
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
									<img src="images/img-2.png" alt="Image">
									<img src="images/img-3.png" alt="Image">
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
									<img src="images/img-3.png" alt="Image">
									<img src="images/img-4.png" alt="Image">
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
									<img src="images/img-4.png" alt="Image">
									<img src="images/img-1.png" alt="Image">
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
	</main>  <!-- /Content -->

	<div class="clearfix"></div>
<?php get_footer() ?>