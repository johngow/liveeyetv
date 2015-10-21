	</div> <!-- /#content -->
</div> <!-- /#content-wrap -->
 
<div id="footer">

	<div class="footer-wrap">
  
		<div id="fside">
			<div class="column">
			  <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Footer: Column 1') ) : ?> <?php endif; ?>
			</div><!-- /1st column -->
		  
			<div class="column">
			  <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Footer: Column 2') ) : ?> <?php endif; ?>
			</div><!-- /2nd column -->
			
			<div class="column">
			  <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Footer: Column 3') ) : ?> <?php endif; ?>
			</div><!-- /3rd column -->
			
			<div class="column last">
			  <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Footer: Column 4') ) : ?> <?php endif; ?>
			</div><!-- /4th column -->
 		</div>
		
	</div> <!-- /#footer-wrap-->
	
	<div class="clear"></div>      
				  
	<div id="copyright">
	  
		<div class="footer-wrap">
			<?php _e('Copyright', 'wpzoom');?> &copy; <?php echo date("Y"); ?> &mdash; <a href="<?php echo get_option('home'); ?>/" class="on"><?php bloginfo('name'); ?></a>. <?php _e('All Rights Reserved.', 'wpzoom');?><br />
			<span><?php _e('Designed by', 'wpzoom');?> <a href="http://www.wpzoom.com" target="_blank" title="WPZOOM WordPress Themes"><img src="<?php bloginfo('template_directory'); ?>/images/wpzoom.png" alt="WPZOOM" /></a></span>
			
		</div> <!-- /#footer-wrap-->
		
	</div>
	
</div> <!-- /#footer -->

<script type="text/javascript" src="https://apis.google.com/js/plusone.js"></script>

<?php wp_footer(); ?> 

<?php if (option::get('featured_enable') == 'on' && $paged < 2 && is_home() ) { ui::js("jtools");  ?>
<script type="text/javascript">
(function($) {
$(".pagination").tabs(".slides li", {
	event: 'mouseover', 
	effect: 'fade',
 	rotate: true
		}).slideshow({
			clickable: false,
			autoplay:  <?php if (option::get('featured_rotate') == 'on') { echo "true"; } else { echo "false"; } ?>, 
			interval: <?php echo option::get('featured_interval'); ?> 
		});
		
$("#slider iframe").each(function(){
	var ifr_source = $(this).attr('src');
  	var wmode = "?wmode=transparent";
  	$(this).attr('src',ifr_source+wmode);
});
 
})(jQuery);
</script>
<?php } ?>

</body>
</html>