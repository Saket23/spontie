<?php
/*---------------------------------------------------------------------------------*/
/* Ads Widget */
/*---------------------------------------------------------------------------------*/

class AdWidget125_left extends WP_Widget {

	function AdWidget125_left() {
		$widget_ops = array('description' => 'Use this widget to add any type of Ad as a widget.' );
		parent::__construct('AdWidget125_left', 'Rinjani Ads 125px 4x' ,$widget_ops);      
	}

	function widget($args, $instance) {  
		$title = $instance['title'];
		$image = $instance['image'];
		$image2 = $instance['image2'];
		$href = $instance['href'];
		$href2 = $instance['href2'];
		
		$image3 = $instance['image3'];
		$image4 = $instance['image4'];
		$href3 = $instance['href3'];
		$href4 = $instance['href4'];

		echo '<div class="widget ad300 clearfix">';

		if($title != '')
			echo '<h4 class="widget-title"><span>'.$title.'</span></h4>';

		
		?>
		
		
		<ul class="ad125 clearfix">
		<?php if ($image) { ?>
			<li class="col-xs-6"><a href="<?php echo esc_url( $href ); ?>"><img class="twinsbox" src="<?php echo esc_url( $image ); ?>" alt="ads1" /></a></li>
		<?php } 
		if ($image2) { ?>
			<li class="col-xs-6"><a href="<?php echo esc_url( $href2 ); ?>"><img class="twinsbox" src="<?php echo esc_url( $image2 ); ?>" alt="ads2" /></a></li>
		<?php } 
		if ($image3) { ?>	
		<li class="col-xs-6"><a href="<?php echo esc_url( $href3 ); ?>"><img class="twinsbox" src="<?php echo esc_url( $image3 ); ?>" alt="ads3" /></a></li>
         <?php } 
         if ($image4) { ?>
			<li class="col-xs-6"><a href="<?php echo esc_url( $href4 ); ?>"><img class="twinsbox" src="<?php echo esc_url( $image4 ); ?>" alt="ads4" /></a></li>
		<?php } ?>
		</ul>
		<?php
		
		echo '</div>';	

	   



	}



	//Update the widget 
	 
	function update( $new_instance, $old_instance ) {
		$instance = $old_instance;

		//Strip tags from title and name to remove HTML 
		$instance['title'] = strip_tags( $new_instance['title'] );
		
		$instance['image'] = strip_tags( $new_instance['image'] );
		$instance['image2'] = $new_instance['image2'];
		$instance['image3'] = strip_tags( $new_instance['image3'] );
		$instance['image4'] = $new_instance['image4'];
		
		
		$instance['href'] = $new_instance['href'];
		$instance['href2'] = $new_instance['href2'];
		$instance['href3'] = $new_instance['href3'];
		$instance['href4'] = $new_instance['href4'];
		

		return $instance;
	}

	
	function form( $instance ) {

		//Set up some default widget settings.
		$defaults = array( 'title' => __('Example', 'rinjani'), 'image' => '', 'image2' => '','image3' => '', 'image4' => '', 'href' => '', 'href2' => '', 'href3' => '', 'href4' => '' );
		$instance = wp_parse_args( (array) $instance, $defaults ); ?>


		<p>
			<label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php esc_html_e('Title:', 'rinjani'); ?></label>
			<input type="text" class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" value="<?php echo $instance['title']; ?>"/>
		</p>





		<p>
			<label for="<?php echo $this->get_field_id( 'image' ); ?>"><?php esc_html_e('Image URL', 'rinjani'); ?></label>
			<input type="text" class="widefat" id="<?php echo $this->get_field_id( 'image' ); ?>" name="<?php echo $this->get_field_name( 'image' ); ?>" value="<?php echo $instance['image']; ?>"/>
		</p>
		<p>
			<label for="<?php echo $this->get_field_id( 'href' ); ?>"><?php esc_html_e('Target URL', 'rinjani'); ?></label>
			<input type="text" class="widefat" id="<?php echo $this->get_field_id( 'href' ); ?>" name="<?php echo $this->get_field_name( 'href' ); ?>" value="<?php echo $instance['href']; ?>"/>
		</p>





		<p>
			<label for="<?php echo $this->get_field_id( 'image2' ); ?>"><?php esc_html_e('Image 2 URL', 'rinjani'); ?></label>
			<input type="text" class="widefat" id="<?php echo $this->get_field_id( 'image2' ); ?>" name="<?php echo $this->get_field_name( 'image2' ); ?>" value="<?php echo $instance['image2']; ?>"/>
		</p>
		<p>
			<label for="<?php echo $this->get_field_id( 'href2' ); ?>"><?php esc_html_e('Target 2 URL', 'rinjani'); ?></label>
			<input type="text" class="widefat" id="<?php echo $this->get_field_id( 'href2' ); ?>" name="<?php echo $this->get_field_name( 'href2' ); ?>" value="<?php echo $instance['href2']; ?>"/>
		</p>   
        
        
        
        
    
    
		<p>
			<label for="<?php echo $this->get_field_id( 'image3' ); ?>"><?php esc_html_e('Image 3 URL', 'rinjani'); ?></label>
			<input type="text" class="widefat" id="<?php echo $this->get_field_id( 'image3' ); ?>" name="<?php echo $this->get_field_name( 'image3' ); ?>" value="<?php echo $instance['image3']; ?>"/>
		</p>
		<p>
			<label for="<?php echo $this->get_field_id( 'href3' ); ?>"><?php esc_html_e('Target 3 URL', 'rinjani'); ?></label>
			<input type="text" class="widefat" id="<?php echo $this->get_field_id( 'href3' ); ?>" name="<?php echo $this->get_field_name( 'href3' ); ?>" value="<?php echo $instance['href3']; ?>"/>
		</p>  
        
        
        
        
        
        
		<p>
			<label for="<?php echo $this->get_field_id( 'image4' ); ?>"><?php esc_html_e('Image 4 URL', 'rinjani'); ?></label>
			<input type="text" class="widefat" id="<?php echo $this->get_field_id( 'image4' ); ?>" name="<?php echo $this->get_field_name( 'image4' ); ?>" value="<?php echo $instance['image4']; ?>" />
		</p>
		<p>
			<label for="<?php echo $this->get_field_id( 'href4' ); ?>"><?php esc_html_e('Target 4 URL', 'rinjani'); ?></label>
			<input type="text" class="widefat" id="<?php echo $this->get_field_id( 'href4' ); ?>" name="<?php echo $this->get_field_name( 'href4' ); ?>" value="<?php echo $instance['href4']; ?>" />
		</p>   
        
        
        <?php
	}
} 

register_widget('AdWidget125_left');
?>