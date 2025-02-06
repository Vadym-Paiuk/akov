<?php
$section = get_field( 'partners' );

if ( empty( $section ) ) {
	return;
}
?>

<section class="partners"
         data-aos="zoom-in"
         data-aos-duration="900">
	<div class="partners-header">
		<div class="container">
			<?php if ( ! empty( $section['title'] ) ): ?>
				<h2 class="partners-title">
					<?php echo $section['title']; ?>
				</h2>
			<?php endif; ?>
		</div>
	</div>
	<div class="partners-content">
		<div class="container">
			<?php if ( ! empty( $section['partners_list'] ) ): ?>
				<div class="partners-list">
					<?php foreach ( $section['partners_list'] as $partner ): ?>
						<div class="partners-list-item">
							<?php
							if ( ! empty( $partner['image'] ) ) {
								$args = [ 'class' => 'partners-list-item-image' ];
								echo wp_get_attachment_image( $partner['image'], 'full', false, $args );
							}
							?>
						</div>
					<?php endforeach; ?>
				</div>
			<?php endif; ?>
		</div>
	</div>
</section>