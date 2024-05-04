<?php
$section = get_field( 'features' );

if ( empty( $section ) ) {
	return;
}
?>

<section class="features">
	<div class="container">
		<?php if ( ! empty( $section['features_list'] ) ): ?>
			<div class="features-list">
				<?php foreach ( $section['features_list'] as $feature ): ?>
					<div class="features-list-item">
						<?php
						if ( ! empty( $feature['image'] ) ) {
							$args = [ 'class' => 'features-list-item-image' ];
							echo wp_get_attachment_image( $feature['image'], 'full', false, $args );
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