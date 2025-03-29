<?php
$section = $args;

if ( empty( $section ) ) {
	return;
}
?>


<div class="single__service-content-approach">
	<div class="single__service-content-approach-header">
		<?php if ( ! empty( $section['title'] ) ): ?>
			<h2 class="single__service-content-approach-header-title <?php if ( ! empty( $section['title']['mobile'] ) ) {
				echo 'mobile';
			} ?>">
				<?php echo $section['title']['text']; ?>
			</h2>
		<?php endif; ?>
		<?php if ( ! empty( $section['description'] ) ): ?>
			<div class="single__service-content-approach-header-description <?php if ( ! empty( $section['description']['mobile'] ) ) {
				echo 'mobile';
			} ?>">
				<?php echo $section['description']['text']; ?>
			</div>
		<?php endif; ?>
	</div>
	<?php if ( ! empty( $section['list'] ) ): ?>
		<div class="single__service-content-approach-list">
			<?php foreach ( $section['list'] as $item ): ?>
				<div class="single__service-content-approach-list-item">
					<div class="single__service-content-approach-list-item-header">
						<?php if ( ! empty( $item['image'] ) ): ?>
							<?php echo wp_get_attachment_image( $item['image'], 'full' ); ?>
						<?php endif; ?>
						<?php if ( ! empty( $item['title'] ) ): ?>
							<h3 class="single__service-content-approach-list-item-header-title">
								<?php echo $item['title']; ?>
							</h3>
						<?php endif; ?>
					</div>
					<div class="single__service-content-approach-list-item-body">
						<?php if ( ! empty( $item['description'] ) ): ?>
							<?php echo $item['description']; ?>
						<?php endif; ?>
					</div>
				</div>
			<?php endforeach; ?>
		</div>
	<?php endif; ?>
</div>