<?php
$section = $args;

if ( empty( $section ) ) {
	return;
}
?>

<div class="container"
     data-aos="zoom-in">
	<div class="single__projects-content-video">
		<?php if ( ! empty( $section['video'] ) ): ?>
			<video autoplay
			       loop
			       muted>
				<source src="<?php echo $section['video']['url']; ?>"
				        type="<?php echo $section['video']['mime_type']; ?>">
				Your browser does not support the video tag.
			</video>
		<?php endif; ?>
	</div>
</div>