<?php
$section = get_field( 'services' );

if ( empty( $section ) ) {
	return;
}
?>

<section class="services"
         data-aos="zoom-in"


>
	<div class="container">
		<?php if ( ! empty( $section['title'] ) && false ): ?>
			<h2 class="section-title">
				<?php echo $section['title']; ?>
			</h2>
		<?php endif; ?>
		<?php if ( ! empty( $section['services_list'] ) ): ?>
			<div class="services-list">
				<?php foreach ( $section['services_list'] as $services ): ?>
					<?php $hide_on_mobile = $services['hide_on_mobile']; ?>
					<div class="services-list-item <?php if ( $hide_on_mobile ) {
						echo 'hide-on-mobile';
					} ?>">
						<?php if ( ! empty( $services['image'] ) ): ?>
							<div class="services-list-item-image">
								<?php echo wp_get_attachment_image( $services['image'], 'full' ); ?>
							</div>
						<?php endif; ?>
						<?php if ( ! empty( $services['title'] ) ): ?>
							<h4 class="services-list-item-title">
								<?php echo $services['title']; ?>
							</h4>
						<?php endif; ?>
					</div>
				<?php endforeach; ?>
			</div>
		<?php endif; ?>
	</div>
</section>
