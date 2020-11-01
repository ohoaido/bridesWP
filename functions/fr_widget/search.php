<?php

/*-----------------------------------------------------------------------------------*/
/*	Twok Recent Posts Widget (Sidebar)
/*-----------------------------------------------------------------------------------*/


add_action( 'widgets_init', 'fr_search_widgets' );

function fr_search_widgets() {
	register_widget( 'fr_search_Widget' );
}

class fr_search_widget extends WP_Widget {


/*-----------------------------------------------------------------------------------*/
/*	Widget Setup
/*-----------------------------------------------------------------------------------*/


function fr_search_Widget() {
		$widget_ops = array( 'classname' => 'fr_search_widget', 'description' => __('Search of twok', 'twok') );
		$control_ops = array( 'width' => 300, 'height' => 350, 'id_base' => 'fr_search_widget' );
		parent::__construct( 'fr_search_widget', __('TWOK - Search', 'twok'), $widget_ops, $control_ops );
}

/*-----------------------------------------------------------------------------------*/
/*	Display Widget
/*-----------------------------------------------------------------------------------*/


function widget( $args, $instance ) {
		extract( $args );
		$number = $instance['number'];
		echo !empty( $before_widget ) ? $before_widget : '';
		
		?> 	              
            <div id="search">
				<form method="get" action="/" id="form-search">
					<input type="text" onfocus="if (this.value == 'Search') {this.value = '';}" onblur="if (this.value == '')  {this.value = 'Search';}" id="s" name="s" class="search" value="Search" >                                
        			<input type="hidden" name="post_type" value="post">
					<input type="submit" id="searchsubmit" value="">
					<input type="hidden" name="lang" value="en">
				</form>
			</div>
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
		'title' => 'Search',
		);
		$instance = wp_parse_args( (array) $instance, $defaults ); ?>

		<p>
		<label for="<?php echo esc_attr($this->get_field_id( 'title' )); ?>"><?php _e('Title:', 'twok') ?></label>
		<input type="text" class="widefat" id="<?php echo esc_attr($this->get_field_id( 'title' )); ?>" name="<?php echo esc_attr($this->get_field_name( 'title' )); ?>" value="<?php echo esc_attr($instance['title']); ?>" />
		</p>

	<?php
	}
}
?>