<?php

/*-----------------------------------------------------------------------------------*/
/*	Twok Recent Posts Widget (Sidebar)
/*-----------------------------------------------------------------------------------*/


add_action( 'widgets_init', 'fr_s_blog_widgets' );

function fr_s_blog_widgets() {
	register_widget( 'fr_s_Blog_Widget' );
}

class fr_s_blog_widget extends WP_Widget {


/*-----------------------------------------------------------------------------------*/
/*	Widget Setup
/*-----------------------------------------------------------------------------------*/


function fr_s_Blog_Widget() {
		$widget_ops = array( 'classname' => 'fr_s_blog_widget', 'description' => __('Sidebar or Footer widget that displays your latest posts with a thumbnail and a short excerpt.', 'twok') );
		$control_ops = array( 'width' => 300, 'height' => 350, 'id_base' => 'fr_s_blog_widget' );
		parent::__construct( 'fr_s_blog_widget', __('TWOK - Recent Posts Widget (Sidebar)', 'twok'), $widget_ops, $control_ops );
}

/*-----------------------------------------------------------------------------------*/
/*	Display Widget
/*-----------------------------------------------------------------------------------*/


function widget( $args, $instance ) {
		extract( $args );
		$title = apply_filters('widget_title', $instance['title'] );
		$number = $instance['number'];
		echo !empty( $before_widget ) ? $before_widget : '';
		
		?> 
	    <?php 
				if ( $title )
				echo !empty( $before_title ) ? $before_title : '';
echo !empty( $title ) ? $title : '';
echo !empty( $after_title ) ? $after_title : '';
				?>          
                <ul class="fr_widget_recent_entries">
  					<?php 
                    $query = new WP_Query();
                    $query->query( array(
                        'posts_per_page' => $number,
                        'ignore_sticky_posts' => 1,
                        ));
                    ?>
                    <?php if ($query->have_posts()) : while ($query->have_posts()) : $query->the_post(); ?>
                    <li>                        
                    <?php
					if ( (function_exists('has_post_thumbnail')) && (has_post_thumbnail()) ) { ?>
					<div class="thumbnail">
					<a title="<?php the_title(); ?>" href="<?php the_permalink(); ?>"><img src="<?=vt_resize(get_post_thumbnail_id(), '', 200, 160, true)['url']?>" alt="<?php the_title(); ?>"></a>
					</div>

					<?php }else{ ?>
					<div class="thumbnail">
						<a title="<?php the_title(); ?>" href="<?php the_permalink(); ?>"></a>
					</div>

					<?php } ?>
					<div class="widget_recent_entry">
                    <div class="w-date"><?php the_time('j F, Y') ?></div>	             			
					<h4 class="title-post">
					<a href="<?php the_permalink(); ?>" rel="bookmark" title="<?php get_the_title(); ?>"> 
					<?php the_title(); ?>
					</a>
					</h4>
                    </div>
	                </li>
                    <?php endwhile; endif; ?>
                    <?php wp_reset_postdata(); ?>
                </ul>
		<?php
		echo !empty( $after_widget ) ? $after_widget : '';
	}


/*-----------------------------------------------------------------------------------*/
/*	Update Widget
/*-----------------------------------------------------------------------------------*/

	function update( $new_instance, $old_instance ) {
		$instance = $old_instance;
		$instance['title'] = strip_tags( $new_instance['title'] );
		$instance['number'] = strip_tags( $new_instance['number'] );
		return $instance;
	}

/*-----------------------------------------------------------------------------------*/
/*	Widget Settings
/*-----------------------------------------------------------------------------------*/

	function form( $instance ) {
		$defaults = array(
		'title' => 'Recent Posts',
		'number' => 4
		);
		$instance = wp_parse_args( (array) $instance, $defaults ); ?>

		<p>
		<label for="<?php echo esc_attr($this->get_field_id( 'title' )); ?>"><?php _e('Title:', 'twok') ?></label>
		<input type="text" class="widefat" id="<?php echo esc_attr($this->get_field_id( 'title' )); ?>" name="<?php echo esc_attr($this->get_field_name( 'title' )); ?>" value="<?php echo esc_attr($instance['title']); ?>" />
		</p>

		<p>
		<label for="<?php echo esc_attr($this->get_field_id( 'number' )); ?>"><?php _e('Amount to show:', 'twok') ?></label>
		<input type="text" class="widefat" id="<?php echo esc_attr($this->get_field_id( 'number' )); ?>" name="<?php echo esc_attr($this->get_field_name( 'number' )); ?>" value="<?php echo esc_attr($instance['number']); ?>" />
		</p>

	<?php
	}
}
?>