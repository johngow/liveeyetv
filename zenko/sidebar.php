<div id="sidebar">

	<?php if (option::get('ad_side') == 'on' && option::get('ad_side_pos') == 'Before widgets') { ?>
		<div class="banner">
		
			<?php if ( option::get('ad_side_imgpath') <> "") { 
				echo stripslashes(option::get('ad_side_imgpath'));             
			} else { ?>
				<a href="<?php echo option::get('banner_sidebar_url'); ?>"><img src="<?php echo option::get('banner_sidebar'); ?>" alt="<?php echo option::get('banner_sidebar_alt'); ?>" /></a>
			<?php } ?>		   	
				
		</div><!-- /.banner -->
	<?php } ?>
	
	
	<?php if (function_exists('dynamic_sidebar')) { dynamic_sidebar('Sidebar'); } ?> 
		
	<div id="sidebar_left">
		<?php if (function_exists('dynamic_sidebar')) { dynamic_sidebar('Side Left'); } ?>
	</div> <!-- end side left -->
 
	<div id="sidebar_right">
		<?php if (function_exists('dynamic_sidebar')) { dynamic_sidebar('Side Right'); } ?>
	</div> <!-- end side right -->
 
 
	<?php if (option::get('ad_side') == 'on' && option::get('ad_side_pos') == 'After widgets') { ?>
		<div class="banner">
		
			<?php if ( option::get('ad_side_imgpath') <> "") { 
				echo stripslashes(option::get('ad_side_imgpath'));             
			} else { ?>
				<a href="<?php echo option::get('banner_sidebar_url'); ?>"><img src="<?php echo option::get('banner_sidebar'); ?>" alt="<?php echo option::get('banner_sidebar_alt'); ?>" /></a>
			<?php } ?>		   	
				
		</div><!-- /.banner -->
	<?php } ?>
	 
</div> <!-- /#sidebar -->