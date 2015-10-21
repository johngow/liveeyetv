<?php get_header(); ?>
   
   <div id="middle">
		<div class="post">
			
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
     	 
			<h1><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h1>
    		
    		<div class="post-meta"><?php edit_post_link( __('Edit', 'wpzoom'), '   ', ''); ?></div>
    		
			<?php the_content(); ?>
			<?php wp_link_pages( array( 'before' => '<div class="nextpage">' . __( 'Pages:', 'wpzoom' ) . '', 'after' => '</div>' ) ); ?>

			
			<div class="clear"></div>
				<?php if (option::get('comments_page') == 'on') { 
					comments_template();
				} ?>
		 
			<?php endwhile; else: ?>

			<p><?php _e('Sorry, no posts matched your criteria.', 'wpzoom');?></p>
			
			<?php endif; ?>

		</div> <!-- /#post -->
	
	</div> <!-- /#middle -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>