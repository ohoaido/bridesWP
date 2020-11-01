<?php 
    global $fr_options;
?>
<?php get_header() ?>
<?php    
    /*
        Template Name: Service Detail Page Template
    */
?>
	<!-- Content -->
	<main id="content">
		<!-- Content Breadcrumbs -->
		<section class="content-breadcrumb" style="background-image: url(<?php the_field('background') ?>);">
			<div class="container">
				<div class="content-breadcrumb_box">
					<div class="content-breadcrumb_box__links">
						<a href="<?= home_url()?>" title="">Home</a>
						<span> / </span>
						<?php if ( $post->post_parent ) { ?>
							<a href="<?php echo get_permalink( $post->post_parent ); ?>" >
							    <?php echo get_the_title( $post->post_parent ); ?>
							</a>
							<span> / </span>
						<?php } ?>
						<strong><?php the_title() ?></strong>
					</div>

					<div class="content-breadcrumb_box__content">
						<h1 class="heading"><?php the_title() ?></h1>

						<div class="paragraph">
							<?php the_field('paragraph') ?>
						</div>
					</div>
				</div>
			</div>
		</section> <!-- /Content Breadcrumbs -->

		<div class="clearfix"></div>

		<!-- Content Services Detail -->
		<section class="content-sdetail">
			<div class="container">
				<div class="content-sdetail_box">	
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
							</div>
						</div>
                    <?php } } ?>
				</div>
			</div>
		</section> <!-- /Content Services Detail -->
	</main>  <!-- /Content -->

<?php get_footer() ?>