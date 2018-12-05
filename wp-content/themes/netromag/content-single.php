<?php
/**
 * The template used for displaying content single
 *
 * @package netromag
 */
?>
						<article  id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

							<div class="post-image">
								<?php if ( has_post_thumbnail() ) : 

										$netromag_thumb_size = get_theme_mod( 'netromag_sidebar_position' );
										if ((isset($netromag_thumb_size)) && ($netromag_thumb_size == 'mz-full-width')) $netromag_thumbnail = 'netromag-large-thumbnail';
										else $netromag_thumbnail = 'netromag-middle-thumbnail';

									?>
									<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
									<?php the_post_thumbnail( $netromag_thumbnail ); ?>
									</a>
								<?php endif; ?>
							</div>

							<div class="post-header">
								<span class="cat"><?php the_category( ' ' ); ?></span>
								<h1><?php the_title(); ?></h1>

								<?php if ( 'post' == get_post_type() ) : ?>
									<span class="date"><i class="fa fa-comment-o"></i><?php the_date(); ?></span>
									<span class="date"><?php the_author_posts_link(); ?></span>
									<?php
										edit_post_link(
											sprintf(
												/* translators: %s: Name of current post */
												esc_html__( 'Edit %s', 'netromag' ),
												the_title( '<span class="screen-reader-text">"', '"</span>', false )
											),
											'<span class="edit-link">',
											'</span>'
										);
								endif; ?>

							</div>

							<div class="post-entry">
								<?php the_content(); ?>
								<?php			
								wp_link_pages( array(
									'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'netromag' ) . '</span>',
									'after'       => '</div>',
									'link_before' => '<span>',
									'link_after'  => '</span>',
									'pagelink'    => '<span class="screen-reader-text">' . __( 'Page', 'netromag' ) . ' </span>%',
									'separator'   => '<span class="screen-reader-text">, </span>',
								) );
								?>
							</div>

							<div class="post-meta">
								<?php if(has_tag()) : ?>
								<!-- tags -->
								<div class="entry-tags">
									<span>
										<i class="fa fa-tags"></i>
									</span>
									<?php
										$tags = get_the_tags(get_the_ID());
										foreach($tags as $tag){
											echo '<a href="'.esc_url(get_tag_link($tag->term_id)).'">'.esc_html($tag->name).'</a> ';
										}
									?>

								</div>
								<!-- end tags -->
								<?php endif; ?>
							</div>
							
						</article>