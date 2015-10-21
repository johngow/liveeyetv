<?php
$featured_posts = new WP_Query( 
array( 
	'post__not_in' => get_option( 'sticky_posts' ),
	'posts_per_page' => option::get('slideshow_posts'),
	'meta_key' => 'wpzoom_is_featured',
	'meta_value' => 1				
) );
?>

<div id="slider">
 	<div id="slides_container">
	
		<ul class="slides">
			<?php if ($featured_posts->post_count > 0) : while ($featured_posts->have_posts()) 
			{  
			$featured_posts->the_post(); global $post;
			$video = get_post_meta($post->ID, 'wpzoom_post_embed_code', true); 
			?>
				<li>
					<div class="slide_content">
					<h2><a href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
				 
					<?php the_excerpt(); ?>
				</div>

	 				<?php if (strlen($video) > 1) { // Embedding video 
					$video = preg_replace("/(width\s*=\s*[\"\'])[0-9]+([\"\'])/i", "$1 600 $2", $video);
					$video = preg_replace("/(height\s*=\s*[\"\'])[0-9]+([\"\'])/i", "$1 338 $2", $video);
					$video = str_replace("<embed","<param name='wmode' value='transparent'></param><embed",$video);
					$video = str_replace("<embed","<embed wmode='transparent' ",$video); ?>
					
					<div class="cover"><?php echo "$video"; ?></div>
				
				<?php } 
				else { 
 					
					get_the_image( array( 'size' => 'featured',  'width' => 600, 'height' => 338, 'before' => '<div class="cover">', 'after' => '</div>' ) ); 
				 
				} // if a video does not exist ?>

 
				</li>
			<?php } ?>

		</ul><!-- /.slides -->
	
		<?php else : ?>
			
			<div class="slide_content">
			 	<p>There are no featured posts to be shown in the slider. Start marking posts as featured, or disable the slider from <strong><a href="<?php bloginfo('url') ?>/wp-admin/admin.php?page=wpzoom_options">Theme Options</a></strong>. <br /></p>
	   			<p>For more information please <strong><a href="http://www.wpzoom.com/documentation/zenko/">read the documentation</a></strong>.</p>
			</div><!-- /.pagination -->
	 
 		<?php endif; ?>
	
	</div><!-- /#slides_container -->

	<div class="pagination">
		
		<?php $i = 0; if ( $featured_posts->have_posts() ) : ?>
	
			<?php while ( $featured_posts->have_posts() ) : $featured_posts->the_post(); $i++; ?>
			
		 	 	<a href="#"><?php echo $i; ?></a> 
			
			<?php endwhile; //  ?>
 		  
		<?php endif; ?>
		
	</div><!-- /.pagination -->
</div><!-- /#slider -->
<?php wp_reset_query(); ?>