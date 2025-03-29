<?php
$section = $args;

if ( empty( $section ) ) {
	return;
}
?>


<div class="single__service-content-features">
	<?php if ( ! empty( $section['list'] ) ): ?>
		<div class="single__service-content-features-list">
			<?php foreach ( $section['list'] as $item ): ?>
				<div class="single__service-content-features-list-item">
					<div class="single__service-content-features-list-item-header">
						<?php if ( ! empty( $item['title'] ) ): ?>
							<h2 class="single__service-content-features-list-item-header-title">
								<?php echo $item['title']; ?>
							</h2>
						<?php endif; ?>
					</div>
					<?php if ( ! empty( $item['list'] ) ): ?>
						<div class="single__service-content-features-list-item-body">
							<ul>
								<?php foreach ( $item['list'] as $list ): ?>
									<li>
										<?php if ( ! empty( $list['title'] ) ): ?>
											<h3><?php echo $list['title']; ?></h3>
										<?php endif; ?>
										<?php if ( ! empty( $list['description'] ) ): ?>
											<?php echo $list['description']; ?>
										<?php endif; ?>
									</li>
								<?php endforeach; ?>
							</ul>
						</div>
					<?php endif; ?>
				</div>
			<?php endforeach; ?>
		</div>
	<?php endif; ?>
</div>