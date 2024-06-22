<?php
$section = get_field( 'services' );

if ( empty( $section ) ) {
	return;
}
?>

<section class="services">
	<div class="container">
		<?php if ( ! empty( $section['title'] ) ): ?>
			<h2 class="section-title" data-aos="fade-up">
				<?php echo $section['title']; ?>
			</h2>
		<?php endif; ?>
		<?php if ( ! empty( $section['services_list'] ) ): ?>
			<div class="services-list">
				<?php foreach ( $section['services_list'] as $services ): ?>
					<?php $hide_on_mobile = $services['hide_on_mobile']; ?>
					<div class="services-list-item <?php if ( $hide_on_mobile ) {
						echo 'hide-on-mobile';
					} ?>" data-aos="fade-up" data-aos-duration="1000">
						<?php if ( ! empty( $services['image'] ) ): ?>
							<?php echo wp_get_attachment_image( $services['image'], 'full' ); ?>
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
