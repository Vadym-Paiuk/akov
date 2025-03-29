<?php get_header(); ?>
	<div class="archive__projects">
		<div class="container">
			<?php if ( have_posts() ) : ?>
				<div class="archive__projects-posts">
					<?php
					while ( have_posts() ) : the_post();
						
						$fields = get_field( 'fields' );
						?>
						<article id="post-<?php the_ID(); ?>"
						         data-aos="zoom-in"
						         
						         
						         class="archive__projects-post <?php if ( empty( $fields['coming_soon'] ) ) {
							         echo 'soon';
						         } ?>">
							
							<?php if ( empty( $fields['coming_soon'] ) ): ?>
								<a href="<?php the_permalink(); ?>">
									<?php the_post_thumbnail( 'full' ); ?>
									<span class="more-wrap">
									<button class="more">Learn More</button>
									</span>
									<span class="archive__projects-categories">
										<?php $terms = get_the_terms( get_the_ID(), 'project_tag' ); ?>
										<?php if ( $terms && ! is_wp_error( $terms ) ) : ?>
											<?php foreach ( $terms as $term ) : ?>
												<p><?php echo esc_html( $term->name ); ?></p>
											<?php endforeach; ?>
										<?php else: ?>
											<?php if ( ! empty( $fields['category'] ) ): ?>
												<?php foreach ( $fields['category'] as $category ): ?>
													<p><?php echo $category['title']; ?></p>
												<?php endforeach; ?>
											<?php endif; ?>
										<?php endif; ?>
								</span>
								</a>
							<?php else: ?>
								<?php the_post_thumbnail( 'full' ); ?>
								<span class="archive__projects-categories archive__projects-soon">
										<p>Coming Soon</p>
								</span>
							<?php endif; ?>
						</article>
					<?php endwhile; ?>
				</div>
			
			<?php else : ?>
				<p><?php _e( 'No posts found.', 'textdomain' ); ?></p>
			<?php endif; ?>
		</div>
	</div>
<?php get_footer( 'private' ); ?>