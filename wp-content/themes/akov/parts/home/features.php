<?php
$section = get_field( 'features' );
$path = get_template_directory_uri();
if ( empty( $section ) ) {
	return;
}
?>

<section class="features">
	<div class="container">
		<?php if ( ! empty( $section['title'] ) ): ?>
			<h2 class="section-title" data-aos="fade-up" data-aos-duration="700">
				<?php echo $section['title']; ?>
			</h2>
		<?php endif; ?>
		<?php if ( ! empty( $section['features_list'] ) ): ?>
			<div class="features-list">
				<?php foreach ( $section['features_list'] as $feature ): ?>
					<div class="features-list-item" data-aos="fade-up" data-aos-duration="1000">
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
						<?php if ( ! empty( $feature['title'] ) ): ?>
							<h4 class="features-list-item-content-title-mobile">
								<?php echo $feature['title']; ?>
							</h4>
						<?php endif; ?>
						<div class="features-list-item-content-mobile">
							<?php
							if ( ! empty( $feature['image_mobile'] ) ) {
								$args = [ 'class' => 'features-list-item-image-mobile' ];
								echo wp_get_attachment_image( $feature['image_mobile'], 'full', false, $args );
							}
							?>
							<?php if ( ! empty( $feature['description_mobile'] ) ): ?>
								<p class="features-list-item-content-description-mobile">
									<?php echo $feature['description_mobile']; ?>
								</p>
							<?php endif; ?>
						</div>
					</div>
				<?php endforeach; ?>
			</div>
		<?php endif; ?>
	</div>
</section>