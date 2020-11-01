<?php 
    global $fr_options;
?>
<?php get_header() ?>
<?php    
    /*
        Template Name: About Nutrimed Page Template
    */
?>
	<!-- Content -->
	<main id="content">
		<!-- Content Breadcrumbs -->
		<section class="content-breadcrumbs" style="background-image: url(<?php the_field('background') ?>);">
			<div class="container">
				<div class="content-breadcrumbs_box">
					<h1><?php the_title() ?></h1>					
				</div>
			</div>
		</section> <!-- /Content Breadcrumbs -->

		<div class="clearfix"></div>

		<!-- Content About -->
		<section class="content-adetail">
			<div class="content-adetail_top">
				<div class="container">
					<center class="logo">
						<img src="<?php the_field('image_1') ?>" alt="<?php the_title() ?>">
					</center>

					<center class="text">
						<?php the_field('paragraph') ?>
					</center>

					<div class="box">
						<div class="box__green">
							<div class="box__green__left">
								<?php the_field('text_1') ?>
							</div>
							<div class="box__green__right">
								<?php the_field('text_2') ?>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="content-adetail_bg" style="background-image: url(<?php the_field('background_bottom') ?>);"></div>
		</section> <!-- /Content About -->

		<div class="clearfix"></div>

		<!-- Content Services Icon -->
		<section class="content-icons">
			<div class="container">
				<div class="content-icons_box">
					<h2 class="heading"><?php the_field('title_2') ?></h2>
					<div class="text">
						<?php the_field('paragraph_2') ?>
					</div>

					<div class="items">
						<?php if(get_field('services')) { while(the_repeater_field('services')) { ?>
							<div class="item">
								<div class="item__icon">
									<div class="item__icon__box">
										<img src="<?php the_sub_field('icon') ?>" alt="<?php the_sub_field('name') ?>">
									</div>
								</div>
								<h3 class="item__heading"><span><?php the_sub_field('name') ?></span></h3>
								<div class="item__description">
									<?php the_sub_field('description') ?>
								</div>
							</div>
                    	<?php } } ?>
					</div>
				</div>
			</div>
		</section> <!-- /Content Services Icon -->
	</main>

<?php get_footer() ?>