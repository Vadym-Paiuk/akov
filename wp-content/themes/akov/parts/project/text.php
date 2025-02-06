<?php
$section = $args;

if ( empty( $section ) ) {
	return;
}
?>

<div class="container"
     data-aos="zoom-in"
     data-aos-duration="900">
	<div class="single__projects-content-text">
		<?php if ( ! empty( $section['title'] ) ): ?>
			<p class="single__projects-content-text-title">
				<?php echo $section['title']; ?>
			</p>
		<?php endif; ?>
		<?php if ( ! empty( $section['description'] ) ): ?>
			<div class="single__projects-content-text-description">
				<?php echo $section['description']; ?>
			</div>
		<?php endif; ?>
	</div>
</div>