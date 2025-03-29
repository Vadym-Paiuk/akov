<?php
$section = $args;

if ( empty( $section ) ) {
	return;
}
?>

<div class="single__service-content-text">
	<?php if ( ! empty( $section['title'] ) ): ?>
		<h2 class="single__service-content-text-title">
			<?php echo $section['title']; ?>
		</h2>
	<?php endif; ?>
	<?php if ( ! empty( $section['description'] ) ): ?>
		<div class="single__service-content-text-description">
			<?php echo $section['description']; ?>
		</div>
	<?php endif; ?>
</div>