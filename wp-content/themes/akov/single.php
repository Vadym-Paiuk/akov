<?php get_header(); ?>
	
	<div class="single__post">
		<div class="container">
			
			<?php if ( have_posts() ) : ?>
				<?php while ( have_posts() ) : the_post(); ?>
					<div class="single__post__header">
						<div class="single__post__header-tags">
							<?php
							$categories = get_the_category();
							if ( ! empty( $categories ) ) {
								foreach ( $categories as $category ) {
									echo '<div class="single__post__header-tags-item">' . esc_html( $category->name ) . '</div> ';
								}
							}
							?>
							<div class="single__post__header-tags-item"><?php the_date(); ?></div>
						</div>
						<h1 class="single__post__header-title"><?php the_title(); ?></h1>
					</div>
					<div class="single__post-content">
						<?php the_content(); ?>
					</div>
				<?php endwhile; ?>
			<?php endif; ?>
		
		</div>
	</div>

<?php get_footer(); ?>