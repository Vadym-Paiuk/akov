<?php
$section = $args;

if ( empty( $section ) ) {
	return;
}
?>

<div class="container"
     data-aos="zoom-in"
     data-aos-duration="900">
	<div class="single__projects-content-images">
		<?php foreach ( $section['list'] as $image ): ?>
			<?php if ( ! empty( $image['image'] ) ): ?>
				<?php echo wp_get_attachment_image( $image['image'], 'full' ); ?>
			<?php endif; ?>
		<?php endforeach; ?>
	</div>
</div>