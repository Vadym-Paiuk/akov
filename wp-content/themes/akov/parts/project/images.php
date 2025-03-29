<?php
$section = $args;

if ( empty( $section ) ) {
	return;
}
?>

<div class="container"
     data-aos="zoom-in"


>
	<div class="single__projects-content-images <?php if ( ! empty( $section['background'] ) ) {
		echo 'background';
	} ?>"
	     <?php if ( ! empty( $section['background'] ) ): ?>style="background-color: <?php echo $section['background_color']; ?>"<?php endif; ?>>
		<?php foreach ( $section['list'] as $image ): ?>
			<?php if ( ! empty( $image['image'] ) ): ?>
				<img src="<?php echo wp_get_attachment_image_src( $image['image'], 'full' )[0]; ?>"
				     alt="">
				<?php //echo wp_get_attachment_image( $image['image'], 'full' ); ?>
			<?php endif; ?>
		<?php endforeach; ?>
	</div>
</div>