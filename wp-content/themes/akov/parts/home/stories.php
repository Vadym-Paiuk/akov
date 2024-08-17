<?php
$section = get_field( 'stories' );

if ( empty( $section ) ) {
	return;
}
?>

<section class="stories">
	<div class="container">
		<?php if ( ! empty( $section['stories_list'] ) ): ?>
			<div class="stories-list">
				<?php foreach ( $section['stories_list'] as $story ): ?>
					<div class="stories-list-item"
					     data-aos="zoom-in"
					     data-aos-duration="700">
						<?php if ( ! empty( $story['title'] ) ): ?>
							<h4 class="stories-list-item-title">
								<?php echo $story['title']; ?>
							</h4>
						<?php endif; ?>
						<?php if ( ! empty( $story['description'] ) ): ?>
							<p class="stories-list-item-description">
								<?php echo $story['description']; ?>
							</p>
						<?php endif; ?>
					</div>
				<?php endforeach; ?>
			</div>
		<?php endif; ?>
	</div>
</section>