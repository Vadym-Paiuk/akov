<?php get_header(); ?>
	<div class="single__service">
		<div class="container">
			<?php if ( have_posts() ) : ?>
				<?php while ( have_posts() ) : the_post(); ?>
					<?php $fields = get_field( 'fields' ); ?>
					<div class="single__service__header">
						<div class="single__service__header-tags">
							<?php $terms = get_the_terms( get_the_ID(), 'service_tag' ); ?>
							<?php if ( $terms && ! is_wp_error( $terms ) ) : ?>
								<?php foreach ( $terms as $term ) : ?>
									<div class="single__service__header-tags-item"><?php echo esc_html( $term->name ); ?></div>
								<?php endforeach; ?>
							<?php endif; ?>
						</div>
						<?php $link = get_permalink( 14 ); ?>
						<a href="<?php echo $link; ?>"
						   class="btn">Lets Talk!</a>
					</div>
				<?php endwhile; ?>
			<?php endif; ?>
			
			<div class="single__service-content">
				<div class="single__service-content-header">
					<h1><?php the_title(); ?></h1>
					<?php the_content(); ?>
					<?php the_post_thumbnail( 'full' ); ?>
				</div>
				<?php
				if ( ! empty( $fields['content'] ) ) {
					foreach ( $fields['content'] as $content ) {
						get_template_part( 'parts/service/' . $content['acf_fc_layout'], null, $content );
					}
				}
				?>
			</div>
		</div>
	</div>
<?php get_footer(); ?>