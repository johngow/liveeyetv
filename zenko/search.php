<?php get_header(); ?>
<div id="middle">
   
	<div id="posts">

 		<h3 class="recent"><?php _e('Search Results for','wpzoom');?> <strong>"<?php the_search_query(); ?>"</strong> <?php $total_results = $wp_query->found_posts; echo ": " .$total_results. " "; ?></h3> 
	 	
	 	<?php get_template_part('loop'); ?>
	   
	</div> <!-- /#posts --> 
		
</div><!-- /#middle -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>