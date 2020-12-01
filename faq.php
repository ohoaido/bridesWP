<?php 
    global $fr_options;
?>
<?php    
    /*
        Template Name: Faq Template
    */
?>
<?php get_header() ?>
	<!-- Content -->
	<!-- Content -->
	<main id="content">
		<!-- Content FAQ -->
		<section class="content-faq">
			<h1 class="heading">FAQ</h1>

			<div class="faqs">
				<?php
					$i = 0;
					$faqs = rwmb_meta('group_item');
					foreach ($faqs as $faq): 
						$ib = wp_get_attachment_image_url( $faq['Image_Banner'], 'full' );
						$text_title = $faq['text_title'];
						$text_faq = $faq['text_faq'];
						$group_item_lists = $faq['group_item_list'];
						?>		
						<div class="item">
							<div class="item__img" style="background-image: url(<?=  $ib ?>);">
								<strong><?=  $text_title ?></strong>
								<h2><?=  $text_faq ?></h2>
							</div>	
							<div class="item__list">
								<div class="container">
									<ul class="no-style">
										<?php 
										foreach ($group_item_lists as $item): 
											$title = $item['text_title_list_item'];
											$text = $item['text_list_item'];
											$i++;
											?>	
											<li>
												<div class="title-accordion collapsed" data-toggle="collapse" data-target="<?php echo "#collapse".$i ?>">
													<?= $title ?>
												</div>

												<div class="content-accordion collapse" id="<?php echo "collapse".$i ?>">
													<div class="text">											
														<?= $text ?>
													</div>
												</div>
											</li>
										<?php endforeach; ?>
									</ul>
								</div>
							</div>
						</div>
				<?php endforeach; ?>
			</div>

			<div class="faq__contact">
				<div class="container">
					<div class="contact__box">
						<div class="box__left">							
							<h2><?=  rwmb_meta('text_title_contact') ?></h2>
							<div class="contact__info">
								<div class="col__2">
									<h3><?=  rwmb_meta('text_faq_contact_details') ?></h3>
									<ul class="no-style info">
										<li>
											<a href="<?=  rwmb_meta('url_mobile') ?>"><?=  rwmb_meta('text_phone') ?></a>
										</li>
										<li>
											<a href="<?=  rwmb_meta('url_mail') ?>"><?=  rwmb_meta('text_mail') ?></a>
										</li>
										<li>
											<a href="<?=  rwmb_meta('url_address') ?>"><?=  rwmb_meta('text_address') ?></a>
										</li>
									</ul>
								</div>

								<div class="col__2">
									<h3><?php echo $fr_options['footer_field_16'] ?> </h3>
		                            <ul class="no-style social">
		                                <?php if($fr_options['footer_field_05']) :?>
		                                <li>
		                                    <a href="<?= $fr_options['footer_field_05']?>" title="" target="_blank">
		                                        <i class="fa fa-facebook"></i>
		                                    </a>
		                                </li>
		                                <?php endif;?>
		                                <?php if($fr_options['footer_field_06']) :?>
		                                <li>
		                                    <a href="<?= $fr_options['footer_field_06']?>" title="" target="_blank">
		                                        <i class="fa fa-instagram"></i>
		                                    </a>
		                                </li>
		                                <?php endif;?>
		                                <?php if($fr_options['footer_field_08']) :?>
		                                <li>
		                                    <a href="<?= $fr_options['footer_field_08']?>" title="" target="_blank">
		                                        <i class="fa fa-twitter"></i>
		                                    </a>
		                                </li>
		                                <?php endif;?>
		                            </ul>
								</div>

								<div class="col__1">
									<?=  rwmb_meta('text_note') ?>
									<div class="item__book md-trigger" data-modal="#book">
										REQUEST AN APPOINTMENT
									</div>
								</div>
							</div>
						</div>

						<div class="box__right">
							<h2><?=  rwmb_meta('text_title_faq_right') ?></h2>
							<div class="appoinment">
								<?php 
									$faqs_rights = rwmb_meta('group_faqright');
									foreach ($faqs_rights as $faqs_right): 
										$itemfqa = $faqs_right['text_item_faq_right'];
										$textfqa = $faqs_right['text_faq_right'];
										?>	
										<div class="app__item">
											<h3><?=  $itemfqa ?></h3>
											<div class="text">
												<?=  $textfqa ?>
											</div>
										</div>
								<?php endforeach; ?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section> <!-- /Content FAQ -->
	</main>  <!-- /Content -->

	<div class="clearfix"></div>
<?php get_footer() ?>