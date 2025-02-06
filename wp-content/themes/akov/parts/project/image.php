<?php
$section = $args;

if ( empty( $section ) ) {
	return;
}
?>

<?php if ( empty( $section['full_width'] ) ): ?>
	<div class="container"
	     data-aos="zoom-in"
	     data-aos-duration="900">
		<div class="single__projects-content-image">
			<?php if ( ! empty( $section['image'] ) ): ?>
				<?php echo wp_get_attachment_image( $section['image'], 'full' ); ?>
			<?php endif; ?>
		</div>
	</div>
<?php else: ?>
	<div class="single__projects-content-image"
	     data-aos="zoom-in"
	     data-aos-duration="900">
		<?php if ( ! empty( $section['image'] ) ): ?>
			<img src="<?php echo wp_get_attachment_image_src( $section['image'], 'full' )[0]; ?>"
			     alt="">
			<?php echo wp_get_attachment_image( $section['image'], 'full' ); ?>
		<?php endif; ?>
	</div>
<?php endif; ?>