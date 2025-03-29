<?php
$section = $args;

if ( empty( $section ) ) {
	return;
}
?>

<div class="container"
     data-aos="zoom-in"


>
	<div class="single__projects-content-features <?php if ( ! empty( $section['vertical'] ) ) {
		echo 'vertical';
	} ?>">
		<?php if ( ! empty( $section['list'] ) ): ?>
			<?php foreach ( $section['list'] as $item ): ?>
				<div class="single__projects-content-features-item">
					<?php if ( ! empty( $item['title'] ) ): ?>
						<span class="single__projects-content-features-item-title">
						<?php echo $item['title']; ?>
					</span>
					<?php endif; ?>
					<?php if ( ! empty( $item['description'] ) ): ?>
						<p class="single__projects-content-features-item-description"><?php echo $item['description']; ?></p>
					<?php endif; ?>
				</div>
			<?php endforeach; ?>
		<?php endif; ?>
	</div>
</div>
