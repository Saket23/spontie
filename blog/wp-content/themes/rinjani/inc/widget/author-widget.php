<?php

class rinjani_author extends WP_Widget {

	function rinjani_author(){
		$widget_ops = array('classname' => 'rinjani_author', 'description' => 'Author information badge' );
		parent::__construct('rinjani_author', 'Rinjani Author Widget', $widget_ops);
	}

	function form( $instance ) {
		$instance = wp_parse_args( (array) $instance, array( 'title' => '', 'author_name' => '', 'text' => '', 'image_bg_uri' => false, 'image_author_uri' => false) );
		
		$title 				= strip_tags($instance['title']);
		$author_name 		= strip_tags( $instance['author_name']);
		$text 				= esc_textarea($instance['text']);
		$image_bg_uri 		= esc_url( $instance['image_bg_uri']);
		$image_author_uri 	= esc_url( $instance['image_author_uri']);
	?>
		<p>
			<label for="<?php echo $this->get_field_id('title'); ?>"><?php esc_html_e('Title:', 'rinjani'); ?></label>
			<input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo esc_attr($title); ?>" />
		</p>
	    <p>
      		<label for="<?php echo $this->get_field_id('image_bg_uri'); ?>"><?php esc_html_e('Background image', 'rinjani'); ?>:</label><br />
			<input type="hidden" name="<?php echo $this->get_field_name('image_bg_uri'); ?>" id="<?php echo $this->get_field_id('image_bg_uri'); ?>" value="<?php echo $image_bg_uri; ?>" />
			<input class="button" onClick="rinjani_open_uploader(this, 'uploaded_bg_image')" id="rinjani_image_upload" value="Upload" />
	    </p>
      	<p class="uploaded_bg_image">
      		<img src="<?php echo $image_bg_uri; ?>" style="width:100%;">
      	</p>
      	<hr style="background:#ddd;height: 1px;margin: 15px 0px;border:none;">
	    <p>
      		<label for="<?php echo $this->get_field_id('image_author_uri'); ?>"><?php esc_html_e('Author image', 'rinjani'); ?>: <small><?php esc_html_e('Recommended', 'rinjani'); ?> 1:1 ( 90x90 )</small></label><br />
			<input type="hidden" name="<?php echo $this->get_field_name('image_author_uri'); ?>" id="<?php echo $this->get_field_id('image_author_uri'); ?>" value="<?php echo $image_author_uri; ?>" />
			<input class="button" onClick="rinjani_open_uploader(this, 'uploaded_author_image')" id="rinjani_image_upload" value="Upload" />
	    </p>
      	<p class="uploaded_author_image">
      		<img src="<?php echo $image_author_uri; ?>" style="width:100%;">
      	</p>
      	<hr style="background:#ddd;height: 1px;margin: 15px 0px;border:none;">
	    <p>
      		<label for="<?php echo $this->get_field_id('author_name'); ?>"><?php esc_html_e('Author Name', 'rinjani'); ?>:</label><br />
			<input class="widefat" type="text" id="<?php echo $this->get_field_id('author_name'); ?>" name="<?php echo $this->get_field_name('author_name'); ?>" value="<?php echo $author_name; ?>">
	    </p>
	    <p>
      		<label for="<?php echo $this->get_field_id('text'); ?>"><?php esc_html_e('Bio', 'rinjani'); ?>:</label><br />
			<textarea class="widefat" rows="5" id="<?php echo $this->get_field_id('text'); ?>" name="<?php echo $this->get_field_name('text'); ?>"><?php echo $text; ?></textarea>
	    </p>

	<?php
	}

	function update( $new_instance, $old_instance ) {
		$instance = $old_instance;
		$instance['title'] 			= strip_tags($new_instance['title']);
		$instance['author_name'] 			= strip_tags($new_instance['author_name']);
		$instance['image_bg_uri'] 		= $new_instance['image_bg_uri'];
		$instance['image_author_uri'] 		= $new_instance['image_author_uri'];

		if ( current_user_can('unfiltered_html') )
			$instance['text'] =  $new_instance['text'];
		else
			$instance['text'] = stripslashes( wp_filter_post_kses( addslashes($new_instance['text']) ) );
		$instance['filter'] = isset($new_instance['filter']);
		return $instance;
	}

	function widget( $args, $instance ) {
		extract($args);
		$title 	= apply_filters( 'widget_title', empty( $instance['title'] ) ? '' : $instance['title'], $instance, $this->id_base );
		$text 	= apply_filters( 'widget_text', empty( $instance['text'] ) ? '' : $instance['text'], $instance );
		$author_name 	= apply_filters( 'widget_text', empty( $instance['author_name'] ) ? '' : $instance['author_name'], $instance );
			
			$author_bg = aq_resize($instance['image_bg_uri'],  310 , 190, true);
			$author_img = aq_resize($instance['image_author_uri'],  100 , 100, true);

		echo $before_widget;
		echo !empty($title) ? '<h4 class="widget-title"><span>'.$title.'</span></h4>' : '';
		echo '<div class="author-widget-wrap">';

			echo '<div class="author-the-thumb">';
					
				echo '<img src="'.esc_url($author_bg).'" alt="author-widget-bg" class="author-widget-background"/>';

				echo '<div class="author-person">';
					if(!empty($instance['image_author_uri'])){
							echo '<div class="rinjani_author_img"><img src="'.esc_url($author_img).'" alt="author-widget"/></div>';
						}
				echo '</div>';	

			echo '</div>';

			echo '<div class="widget-body">';

				echo '<div class="rinjani_author_bio">';
				echo !empty( $author_name ) ? '<h4>'.sanitize_text_field( $author_name ).'</h4>' : '';
				echo '<p class="muted">'.(!empty( $instance['filter'] ) ? wpautop( $text ) : sanitize_text_field( $text )).'</p>';
				echo '</div>';
			echo '</div>';
		echo '</div>';

		echo $after_widget;
	}
}
add_action( 'widgets_init', create_function('', 'return register_widget("rinjani_author");') );


function rinjani_admin_enqueue()
	{
	wp_register_script( 'adminscript', RINJANI_DIR. '/js/admin-script.js' );
	  wp_enqueue_media();
	  wp_enqueue_script('adminscript');
	}
	add_action('admin_enqueue_scripts', 'rinjani_admin_enqueue');
