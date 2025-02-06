<?php get_header(); ?>
	<div class="single__projects">
		<div class="container">
			<?php if ( have_posts() ) : ?>
				<?php while ( have_posts() ) : the_post(); ?>
					<?php $fields = get_field( 'fields' ); ?>
					<div class="single__projects__header">
						<?php $archive_link = get_post_type_archive_link( 'projects' ); ?>
						<a href="<?php echo $archive_link; ?>"
						   class="btn btn-back">Back</a>
						<h1><?php the_title(); ?></h1>
						<?php if ( ! empty( $fields['subtitle'] ) ): ?>
							<span class="single__projects__header-subtitle"><?php echo $fields['subtitle']; ?></span>
						<?php endif; ?>
						<div class="single__projects__header-description">
							<?php if ( ! empty( $fields['description_title'] ) ): ?>
								<p class="single__projects__header-description-title"><?php echo $fields['description_title']; ?></p>
							<?php endif; ?>
							<div class="single__projects__header-description-description">
								<?php if ( ! empty( $fields['description'] ) ): ?>
									<?php echo $fields['description']; ?>
								<?php endif; ?>
							</div>
						</div>
						<?php if ( ! empty( $fields['image'] ) ): ?>
							<div class="single__projects__header-image">
								<?php echo wp_get_attachment_image( $fields['image'], 'full' ); ?>
							</div>
						<?php endif; ?>
					</div>
				<?php endwhile; ?>
			<?php endif; ?>
		</div>
		
		<div class="single__projects-content">
			<?php
			if ( ! empty( $fields['content'] ) ) {
				foreach ( $fields['content'] as $content ) {
					get_template_part( 'parts/project/' . $content['acf_fc_layout'], null, $content );
				}
			}
			?>
		</div>
	</div>
<?php get_footer( 'private' ); ?>