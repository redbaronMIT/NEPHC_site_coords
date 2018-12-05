<?php
/**
 *
 * The template used for displaying articles & search results
 *
 * @package netromag
 */
$netromag_options = get_theme_mods();

?>
					<article  id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

						<div class="post-inner-content">

							<div class="post-image">
								<?php if ( has_post_thumbnail() ) : 

										$netromag_thumb_size = array_key_exists('netromag_sidebar_position', $netromag_options) ? $netromag_options['netromag_sidebar_position'] : '';
										$netromag_thumbs_layout = array_key_exists('netromag_thumbs_layout', $netromag_options) ? $netromag_options['netromag_thumbs_layout'] : '';

										if ($netromag_thumbs_layout == "portrait") $netromag_thumbnail = 'netromag-portrait-thumbnail';
										else $netromag_thumbnail = 'netromag-landscape-thumbnail';
										if ($netromag_thumb_size == 'mz-full-width') $netromag_thumbnail = 'netromag-large-thumbnail';

									?>
									<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
									<?php echo get_the_post_thumbnail( get_the_ID(), $netromag_thumbnail ); ?>
									</a>
								<?php endif; ?>
								<span class="cat"><?php the_category( ' ' ); ?></span>
							</div>
							<div class="post-header">
								<h2><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
								<div class="post-meta">
									<span><i class="fa fa-calendar"></i><?php echo esc_html(get_the_date()); ?></span>
									<?php if ( ! post_password_required() && ( comments_open() || '0' != get_comments_number() ) ) : ?>
										<span><i class="fa fa-commenting-o"></i><?php comments_popup_link( esc_html__( '0 Comments', 'netromag' ), esc_html__( '1 Comment', 'netromag' ), esc_html__( '% Comments', 'netromag' ) ); ?></span>
									<?php endif; ?>
								</div>

							</div>
							<div class="post-entry">

								<?php the_excerpt(); ?>
								
								<p class="read-more"><a href="<?php the_permalink(); ?>"><?php esc_html_e( 'Continue Reading...', 'netromag' ); ?></a></p>
							</div>

						</div><!-- end: post-inner-content -->

					</article>
