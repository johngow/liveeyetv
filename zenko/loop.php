<?php while (have_posts()) : the_post();?>
	<div id="post-<?php the_ID(); ?>" class="homepost">

        <?php if (option::get('index_thumb') == 'on') {

			get_the_image( array( 'size' => 'thumbnail', 'before' => '<div class="thumb">', 'after' => '</div>', 'width' => option::get('thumb_width'), 'height' => option::get('thumb_height') ) );

        } ?>

        <div class="rightcontp">
 			<?php if (option::get('display_comments')  == 'on') { ?><div class="bubble"><?php comments_popup_link('0', '1', '%', ' ', ' '); ?></div><?php } ?>
			<h2><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h2>

			<div class="entry">
				<?php the_excerpt();  ?>

				<?php if (option::get('display_readmore') == 'on' ) { ?><a href="<?php the_permalink() ?>"><span><?php _e('Read more', 'wpzoom'); ?> &#8250;</span></a><?php } ?>
			</div><!-- /.entry -->

			<div class="post-meta">
				<?php if (option::get('display_author') == 'on') { ?><?php _e('by', 'wpzoom'); ?> <?php the_author_posts_link(); ?> / <?php } ?>
				<?php if (option::get('display_date') == 'on') { ?><?php _e('on', 'wpzoom'); ?> <?php printf( __('%s at %s', 'wpzoom'),  get_the_date(), get_the_time()); ?> / <?php } ?>
				<?php edit_post_link( __('Edit', 'wpzoom'), '', ''); ?>

			</div>
		</div>
 		<div class="clear"></div>
	</div><!-- #post-<?php the_ID(); ?> -->
	<div class="clear"></div>

<?php endwhile; ?>
<?php get_template_part( 'pagination'); ?>
<?php wp_reset_query(); ?>