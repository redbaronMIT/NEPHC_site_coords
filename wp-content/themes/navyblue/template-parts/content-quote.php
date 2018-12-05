<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package NavyBlue
 */
?>

<?php $size = navyblue_post_thumbnail_size( array( 'class_prefix' => 'post-thumbnail--' ) ); ?>

<article id="post-<?php the_ID(); ?>" <?php post_class( 'posts-list__item card ' . $size['class'] ); ?>>

	<?php $utility = navyblue_utility()->utility; ?>

	<div class="post-list__item-content">

		<figure class="post-thumbnail">
			<?php $utility->media->get_image( array(
					'size'        => $size['size'],
					'class'       => 'post-thumbnail__link',
					'html'        => '<a href="%1$s" %2$s><img class="post-thumbnail__img wp-post-image" src="%3$s" alt="%4$s" %5$s></a>',
					'placeholder' => false,
					'echo'        => true,
				) );
			?>

			<?php $cats_visible = navyblue_is_meta_visible( 'blog_post_categories', 'loop' ) ? 'true' : 'false'; ?>

			<?php $utility->meta_data->get_terms( array(
					'visible' => $cats_visible,
					'type'    => 'category',
					'icon'    => '',
					'before'  => '<div class="post__cats">',
					'after'   => '</div>',
					'echo'    => true,
				) );
			?>

			<?php navyblue_sticky_label(); ?>
		</figure><!-- .post-thumbnail -->

		<header class="entry-header">
			<?php
				$utility->attributes->get_title( array(
					'class' => 'entry-title',
					'html'  => '<h4 %1$s><a href="%2$s" rel="bookmark">%4$s</a></h4>',
					'echo'  => true,
				) );
			?>
		</header><!-- .entry-header -->

		<?php if ( 'post' === get_post_type() ) : ?>

			<div class="entry-meta">
				<span class="post__date">
					<?php $date_visible = navyblue_is_meta_visible( 'blog_post_publish_date', 'loop' ) ? 'true' : 'false';

						$utility->meta_data->get_date( array(
							'visible' => $date_visible,
							'class'   => 'post__date-link',
							'echo'    => true,
						) );
					?>
				</span>

				<?php $author_visible = navyblue_is_meta_visible( 'blog_post_author', 'loop' ) ? 'true' : 'false'; ?>

				<?php $utility->meta_data->get_author( array(
						'visible' => $author_visible,
						'class'   => 'posted-by__author',
						'prefix'  => esc_html__( 'by ', 'navyblue' ),
						'html'    => '<span class="posted-by">%1$s<a href="%2$s" %3$s %4$s rel="author">%5$s%6$s</a></span>',
						'echo'    => true,
					) );
				?>

				<span class="post__comments">
					<?php $comment_visible = navyblue_is_meta_visible( 'blog_post_comments', 'loop' ) ? 'true' : 'false';

						$utility->meta_data->get_comment_count( array(
							'visible' => $comment_visible,
							'class'   => 'post__comments-link',
							'sufix'  => _n_noop( 'comment (%1$s)', 'comments (%1$s)', 'navyblue' ),
							'echo'    => true,
						) );
					?>
				</span>
			</div><!-- .entry-meta -->

		<?php endif; ?>

		<?php do_action( 'cherry_post_format_quote' ); ?>

		<div class="entry-content">
			<?php $blog_content = get_theme_mod( 'blog_posts_content', navyblue_theme()->customizer->get_default( 'blog_posts_content' ) );
				$length = ( 'full' === $blog_content ) ? 0 : 55;

				$utility->attributes->get_content( array(
					'length'       => $length,
					'content_type' => 'post_excerpt',
					'echo'         => true,
				) );
			?>
		</div><!-- .entry-content -->

	</div><!-- .post-list__item-content -->

	<footer class="entry-footer">
		<?php $utility->attributes->get_button( array(
				'class' => 'btn btn-primary',
				'text'  => get_theme_mod( 'blog_read_more_text', navyblue_theme()->customizer->get_default( 'blog_read_more_text' ) ),
				'icon'  => '<i class="material-icons">arrow_forward</i>',
				'html'  => '<a href="%1$s" %3$s><span class="btn__text">%4$s</span>%5$s</a>',
				'echo'  => true,
			) );
		?>
		<?php navyblue_share_buttons( 'loop' ); ?>
	</footer><!-- .entry-footer -->

</article><!-- #post-## -->