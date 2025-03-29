<?php
$section = get_field( 'features' );
$path    = get_template_directory_uri();
if ( empty( $section ) ) {
	return;
}
?>

<section class="features"
         data-aos="zoom-in"


>
	<div class="container">
		<?php if ( ! empty( $section['title'] ) ): ?>
			<h2 class="section-title">
				<?php echo $section['title']; ?>
			</h2>
		<?php endif; ?>
		<?php if ( ! empty( $section['features_list'] ) ): ?>
			<div class="features-list">
				<?php foreach ( $section['features_list'] as $feature ): ?>
					<div class="features-list-item">
						<?php
						if ( ! empty( $feature['image'] ) ) {
							echo '<div class="features-list-item-image">';
							echo wp_get_attachment_image( $feature['image'], 'full', false );
							echo '</div>';
						}
						?>
						<div class="features-list-item-content">
							<?php if ( ! empty( $feature['title'] ) ): ?>
								<h4 class="features-list-item-content-title">
									<?php echo $feature['title']; ?>
								</h4>
							<?php endif; ?>
							<?php if ( ! empty( $feature['description'] ) ): ?>
								<p class="features-list-item-content-description">
									<?php echo $feature['description']; ?>
								</p>
							<?php endif; ?>
						</div>
					</div>
				<?php endforeach; ?>
			</div>
		<?php endif; ?>
	</div>
</section>