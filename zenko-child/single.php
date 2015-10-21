<?php get_header(); ?>
<?php $template = get_post_meta($post->ID, 'wpzoom_post_template', true); ?>

 	<div id="middle"<?php if ($template == 'full') {echo " class=\"full-width\"";} ?>>

		<div id="post-<?php the_ID(); ?>" <?php post_class(''); ?>>

			<?php while (have_posts()) : the_post(); ?>

				<h1><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h1>

				<div class="post-meta">
					<?php if (option::get('post_category') == 'on') { ?><?php _e('in', 'wpzoom'); ?> <?php the_category(', '); ?> / <?php } ?>
					<?php if (option::get('post_author') == 'on') { ?><?php _e('by', 'wpzoom'); ?> <?php the_author_posts_link(); ?> / <?php } ?>
					<?php if (option::get('post_date') == 'on') { ?><?php printf( __('on %s at %s', 'wpzoom'),  get_the_date(), get_the_time()); ?> / <?php } ?>
					<?php edit_post_link( __('Edit', 'wpzoom'), '', ''); ?>
				</div>

				<?php the_content(); ?>
				<div class="clear"></div>

				<?php wp_link_pages( array( 'before' => '<div class="nextpage">' . __( 'Pages:', 'wpzoom' ) . '', 'after' => '</div><div class="clear"></div>' ) ); ?>

				<?php if (option::get('post_tags') == 'on') { the_tags( __( '<div class="tag-links">Tags: ', 'wpzoom' ), ", ", "</div>\n" );  } ?>

 				<?php if (option::get('post_share') == 'on') { ?>
					<div class="share_box">
						<div class="share_btn"><g:plusone size="medium"></g:plusone></div>
 						<div class="share_btn"><a href="http://twitter.com/share" data-url="<?php the_permalink() ?>" class="twitter-share-button" data-count="horizontal">Tweet</a><script type="text/javascript" src="http://platform.twitter.com/widgets.js"></script></div>
						<div class="share_btn"><iframe src="http://www.facebook.com/plugins/like.php?href=<?php echo urlencode(get_permalink($post->ID)); ?>&amp;layout=button_count&amp;show_faces=false&amp;width=1000&amp;action=like&amp;font=arial&amp;colorscheme=light&amp;height=21" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:80px; height:21px;" allowTransparency="true"></iframe></div>
                               <?php echo do_shortcode('[contextly_main_module]'); ?> 							
                                                <div class="clear"></div>
					</div>
				<?php } ?>

 				<?php if (option::get('post_comments') == 'on') { ?>
					<div id="comments">
						<?php comments_template(); ?>
 					</div>
				<?php } ?>

 			<?php endwhile; ?>

		</div> <!-- /#post -->

	</div> <!-- /#middle -->

<?php if ($template != 'full') { get_sidebar(); } ?>
<?php get_footer(); ?>
