<?php 
    global $fr_options;
?>
<?php get_header() ?>
<?php    
    /*
        Template Name: Services Page Template
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

		<!-- Content Services -->
		<section class="content-services">
			<div class="container">
				<div class="content-services_box">
					<?php if(get_field('list')) { while(the_repeater_field('list')) { ?>
						<div class="item">
							<div class="item__img" style="background-image: url(<?php the_sub_field('image') ?>);">
								<img src="<?php the_sub_field('image') ?>" alt="<?php the_sub_field('name') ?>">
							</div>
							<div class="item__box">
								<h2 class="item__box__heading"><?php the_sub_field('name') ?></h2>
								<div class="item__box__paragraph">
									<?php the_sub_field('description') ?>
								</div>
								<a class="item__box__more" href="<?php the_sub_field('url') ?>">read more →</a>
							</div>
						</div>
                    <?php } } ?>
				</div>
			</div>
		</section> <!-- /Content Services -->
	</main>  <!-- /Content -->

<?php get_footer() ?>