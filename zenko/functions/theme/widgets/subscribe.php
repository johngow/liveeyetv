<?php

/*----------------------------------------------------------------------------------*/
/*  WPZOOM: Email Subscription	
/*----------------------------------------------------------------------------------*/
  
 	class wpzoom_email_subscription extends WP_Widget {
		
 		function wpzoom_email_subscription() {
			/* Widget settings. */
			$widget_ops = array( 'classname' => 'email-subscription', 'description' => 'Email Subscription via FeedBurner.' );
	
			/* Widget control settings. */
			$control_ops = array( 'id_base' => 'wpzoom-email-subscription' );
	
			/* Create the widget. */
			$this->WP_Widget( 'wpzoom-email-subscription', 'WPZOOM: Email Subscription', $widget_ops, $control_ops );
		}
		
 		function widget( $args, $instance ) {
			extract( $args );
	
			/* User-selected settings. */
			$title = apply_filters('widget_title', $instance['title'] );
			$id = $instance['feedburner_id'];
			$message = $instance['email_message'];

			/* Before widget (defined by themes). */
			echo $before_widget;
	
			/* Title of widget (before and after defined by themes). */
			if ( $title )
				echo $before_title . $title . $after_title;

			if ($message) { echo "<p>".$message."</p>"; } 

		 	if ($id) { ?>
				<form action="http://feedburner.google.com/fb/a/mailverify" method="post" target="popupwindow" onsubmit="window.open('http://feedburner.google.com/fb/a/mailverify?uri=<?php echo $id; ?>', 'popupwindow', 'scrollbars=yes,width=550,height=520');return true">
				<fieldset>
				<span class="subscribe-text"><i></i>
	 				<input type="text" id="email" onblur="if (this.value == '') {this.value = '<?php _e('Enter your email', 'wpzoom') ?>';}" onfocus="if (this.value == '<?php _e('Enter your email', 'wpzoom') ?>') {this.value = '';}" value="<?php _e('Enter your email', 'wpzoom') ?>" name="email"/><input type="hidden" value="<?php echo $id; ?>" name="uri"/>
				</span>
				<span></span><input type="hidden" name="loc" value="en_US"/><input type="submit" value="<?php _e('Subscribe', 'wpzoom') ?>" />
				</fieldset>
				</form> 
			<?php }  
 		 
			/* After widget (defined by themes). */
			echo $after_widget;
		}
		
 		function update( $new_instance, $old_instance ) {
			$instance = $old_instance;
	
			/* Strip tags (if needed) and update the widget settings. */
			$instance['title'] = strip_tags( $new_instance['title'] );
			$instance['feedburner_id'] = $new_instance['feedburner_id'];
			$instance['email_message'] = $new_instance['email_message'];
  	
			return $instance;
		}
		
 		function form( $instance ) {
	
			/* Set up some default widget settings. */
			$defaults = array( 'title' => 'Subscribe by Email', 'feedburner_id' => 'wpzoom', 'email_message' => 'Sign up to receive our newsletter on your email.' );
			$instance = wp_parse_args( (array) $instance, $defaults ); ?>
			
			<p>
				<label for="<?php echo $this->get_field_id( 'title' ); ?>">Widget Title:</label><br />
				<input type="text" class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" value="<?php echo $instance['title']; ?>" width="100%" />
			</p>
	
			<p>
				<label for="<?php echo $this->get_field_id( 'feedburner_id' ); ?>"><a href="http://feedburner.google.com/" target="_blank">FeedBurner</a> Feed ID:</label>
				<input type="text" class="widefat"  id="<?php echo $this->get_field_id( 'feedburner_id' ); ?>" name="<?php echo $this->get_field_name( 'feedburner_id' ); ?>" value="<?php echo $instance['feedburner_id']; ?>" width="70%" />
				<small><a href="http://www.wpzoom.com/images/feedburner.png" target="_blank">How to find your ID?</a></small>
			</p>
			
			<p>
				<label for="<?php echo $this->get_field_id( 'email_message' ); ?>">Additional message:</label><br />
				<textarea rows="5" cols="29" id="<?php echo $this->get_field_id( 'email_message' ); ?>" name="<?php echo $this->get_field_name( 'email_message' ); ?>"><?php echo $instance['email_message']; ?></textarea>
			</p>
 			
			<?php
		}
	}
 
 
function wpzoom_register_email_widget() {
	register_widget('wpzoom_email_subscription');
}
add_action('widgets_init', 'wpzoom_register_email_widget');