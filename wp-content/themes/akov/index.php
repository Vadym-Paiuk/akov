<?php get_header(); ?>
	
	<div class="blog-page">
		<div class="container">
			<?php if ( have_posts() ) : ?>
				<ul class="post-list">
					<?php while ( have_posts() ) : the_post(); ?>
						<li class="post-item post-item-<?php echo get_post_status(); ?>"
						    data-aos="zoom-in">
							<?php if ( get_post_status() === 'publish' ): ?>
								<a href="<?php the_permalink(); ?>">
									<h2><?php the_title(); ?></h2>
									<p>Read More</p>
								</a>
							<?php else: ?>
								<h2><?php the_title(); ?></h2>
								<p>Coming Soon</p>
							<?php endif; ?>
						</li>
					<?php endwhile; ?>
				</ul>
				
				<!-- Pagination -->
				<div class="pagination">
					<?php
					global $wp_query;
					
					echo paginate_links( array(
						'total'   => $wp_query->max_num_pages,
						'current' => max( 1, get_query_var( 'paged' ) ),
					) );
					?>
				</div>
			
			<?php else : ?>
				<p class="posts-not-found">No posts found.</p>
			<?php endif; ?>
		</div>
	</div>

<?php get_footer(); ?>