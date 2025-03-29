<?php
$section = $args;

if ( empty( $section ) ) {
	return;
}
?>

<div class="container">
	<div class="single__projects-content-dtm">
		<?php foreach ( $section['images'] as $image ): ?>
			<div class="single__projects-content-dtm-item single__projects-content-dtm-<?php echo $image['type']; ?>"
			     data-aos="zoom-in"
			
			
			>
				<?php if ( ! empty( $image['title'] ) ): ?>
					<h5><?php echo $image['title']; ?></h5>
				<?php endif; ?>
				<?php if ( ! empty( $image['image'] ) ): ?>
					<img src="<?php echo wp_get_attachment_image_src( $image['image'], 'full' )[0]; ?>"
					     alt="">
					<?php //echo wp_get_attachment_image( $image['image'], 'full' ); ?>
				<?php endif; ?>
			</div>
		<?php endforeach; ?>
	</div>
</div>