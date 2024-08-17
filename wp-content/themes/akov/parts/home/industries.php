<?php
$section = get_field( 'industries' );
$path    = get_template_directory_uri();
if ( empty( $section ) ) {
	return;
}
?>

<section class="industries"
         data-aos="zoom-in"
         data-aos-duration="700">
	<div class="industries__header">
		<div class="container">
			<div class="industries__header-inner">
				<?php if ( ! empty( $section['title'] ) ): ?>
					<h2 class="section-title">
						<?php echo $section['title']; ?>
					</h2>
				<?php endif; ?>
			</div>
		</div>
	</div>
	
	<div class="industries__main">
		<div class="container">
			<?php if ( ! empty( $section['industries_list'] ) ): ?>
				<div class="industries__main-grid">
					<?php foreach ( $section['industries_list'] as $feature ): ?>
						<div class="industries__main-item">
							<div class="industries__item-icon">
								<?php
								if ( ! empty( $feature['image'] ) ) {
									echo wp_get_attachment_image( $feature['image'], 'full' );
								}
								?>
							</div>
							<div class="industries__item-text">
								<?php if ( ! empty( $feature['title'] ) ): ?>
									<p>
										<?php echo $feature['title']; ?>
									</p>
								<?php endif; ?>
							</div>
						</div>
					<?php endforeach; ?>
				</div>
			<?php endif; ?>
		</div>
	</div>
</section>