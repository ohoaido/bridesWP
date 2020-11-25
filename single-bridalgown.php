<?php get_header() ?>

	<!-- Content -->
	<main id="content">
		<!-- Content Collection Detail  -->
		<section class="content-collection-detail">
			<div class="container-fluid">
				<div class="content_box">
					<div class="box__sidebar">
						<div class="box__back">
							<div class="back__history">back</div>
						</div>

						<div class="box__share">
							<div class="share__button">
								<span></span>
								share
							</div>
							<ul class="share__social">
								<li>
                                    <a href="https://www.facebook.com/sharer/sharer.php?u=<?= get_permalink()?>" onclick='window.open(this.href, "mywin","left=50,top=50,width=600,height=350,toolbar=0"); return false;' title=""><i class="fa fa-facebook"></i></a>
                                </li>
                                <li>
                                    <a href="https://twitter.com/share?text=<?php the_title() ?>&url=<?= get_permalink()?>" onclick='window.open(this.href, "mywin","left=50,top=50,width=600,height=350,toolbar=0"); return false;' title=""><i class="fa fa-twitter"></i></a>
                                </li>
							</ul>
						</div>
					</div>

					<div class="box__content">
						<div class="content__gallery">
							<?php 
							$gcgs = rwmb_meta('group_content_gallery_bridalgown');
							foreach ($gcgs as $gcg): 
								$bgGS = wp_get_attachment_image_url( $gcg['simage_details'], 'full' );
								$videos =$gcg['video_details_bridalgowsn'];
								?>				
								<?php if ( ! empty( $videos ) ): ?>
									<div class="gallery__video" data-fancybox="gallery" href="<?= $videos ?>">
										<div class="circle"></div>	
										<img src="<?= $bgGS ?>" alt="">
									</div>
								<?php else : ?>
									<div class="gallery__img" data-fancybox="gallery" href="<?= $bgGS ?>">
										<img src="<?= $bgGS ?>" alt="">
									</div>
								<?php endif; ?>
							<?php endforeach; ?>
						</div>

						<div class="content__info">
							<h1 class="info__heading"><?= rwmb_meta('text_info_heading') ?></h1>
							<div class="info__auth">
								by <span><?= rwmb_meta('text_info_auth') ?></span>
							</div>

							<div class="info__items">
								<div class="item">
									<div class="item__title"><?= rwmb_meta('text_item_title') ?></div>

									<div class="item__text">
										<?= rwmb_meta('item_text') ?>
									</div>
								</div>
								<div class="item">
									<div class="item__title"><?= rwmb_meta('text_color') ?></div>

									<div class="item__colors">
										<ul>
											<?php 
											$colors = rwmb_meta('group_color');
											foreach ($colors as $color): 
												$color_item = $color['color_item'];
												$color_name = $color['text_name_color'];
												?>				
												<li>
													<div class="li__circle" style="background: <?=  $color_item ?>"></div>
													<div class="li__name"><?=  $color_name ?></div>
												</li>
											<?php endforeach; ?>
										</ul>
									</div>
								</div>
								<div class="item">
									<div class="item__title"><?= rwmb_meta('size_length_title') ?></div>

									<div class="item__text">
										<?= rwmb_meta('size_length_text') ?>
									</div>
								</div>

								<div class="item has__col">
									<div class="item__title"><?= rwmb_meta('item_details') ?></div>
									<div class="item__col" style="display: none;">
										<div class="item__table">
											<table>
												<?php 
												$gtables = rwmb_meta('group_details_bridalgown');
												foreach ($gtables as $gtable): 
													$td1 = $gtable['text_td_1'];
													$td2 = $gtable['text_td_2'];
													?>				
													<tr>
														<td><?=  $td1 ?></td>
														<td><?=  $td2 ?></td>
													</tr>
												<?php endforeach; ?>
											</table>
										</div>
										<div class="item__text">
											<?= rwmb_meta('text_item_details') ?>
										</div>
									</div>						
								</div>
							</div>

							<div class="info__book md-trigger" data-modal="#book">
								REQUEST AN APPOINTMENT
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

		<!-- Content Albums -->
		<section class="content-albums">
			<div class="container">
				<div class="content_box">
					<div class="box__small"><?= rwmb_meta('text_15') ?></div>
					<div class="box__rela">						
						<h2 class="box__heading"><?= rwmb_meta('text_16') ?></h2>
						<div class="box__control">
							<div class="control__arrow">
								<div class="arrow__prev"></div>
								<div class="arrow__number">/</div>
								<div class="arrow__next"></div>
							</div>
							<a class="control__more">
								<span></span>
								<?= rwmb_meta('text_17') ?>
							</a>
						</div>
					</div>
					<div class="box__sliders owl-carousel">
						<?php
							wp_reset_query();
                            $args1=array(
                                'post_type' => 'bridalgown',
                                'post_status' => 'publish',     
			                    'order' => 'DESC'
                            );
                            query_posts($args1);    
                        ?>                   
                        <?php while (have_posts()) : the_post();  ?>
							<div class="item">
								<a href="#" title="">
									<div class="item__img">
										<img src="<?= vt_resize(rwmb_meta('image_bridemaids_group',array("size" => "full"))['ID'], '', 300, 450, true)['url']?>" alt="Image">
										<img src="<?= vt_resize(rwmb_meta('image_bridemaids_hover_group',array("size" => "full"))['ID'], '', 300, 450, true)['url']?>" alt="Image">
										
									</div>
									<div class="item__caption">
										<h3 class="item__name"><?= rwmb_meta('name_bridemaids_group') ?></h3>
										<div class="item__auth">by <span><?= rwmb_meta('text_bridemaids_group') ?></span></div>
									</div>
								</a>
							</div>    
                        <?php endwhile; ?>
					</div>

					<div class="box__book md-trigger" data-modal="#book">
						REQUEST AN APPOINTMENT
					</div>
				</div>
			</div>
		</section> <!-- /Content Albums -->
	</main>  <!-- /Content -->

<?php get_footer() ?>