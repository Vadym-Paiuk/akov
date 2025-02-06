<?php
$section = get_field( 'hero' );

if ( empty( $section ) ) {
	return;
}
?>

<section class="hero"
         data-aos="zoom-in"
         data-aos-duration="900">
	<div class="container">
		<?php if ( ! empty( $section['subtitle'] ) ): ?>
			<p class="hero-header-subtitle">
				<?php echo $section['subtitle']; ?>
			</p>
		<?php endif; ?>
		<div class="hero-header">
			<?php if ( ! empty( $section['title'] ) ): ?>
				<h1 class="hero-header-title">
					<?php echo $section['title']; ?>
				</h1>
			<?php endif; ?>
		</div>
		<div class="hero-content">
			<div class="hero-content-text">
				<?php if ( ! empty( $section['text_1'] ) ): ?>
					<?php echo $section['text_1']; ?>
				<?php endif; ?>
			</div>
			<div class="hero-content-link">
				<?php if ( ! empty( $section['link'] ) ): ?>
					<a href="<?php echo $section['link']['url']; ?>"
					   target="<?php echo $section['link']['target']; ?>"
					   class="btn">
						<?php echo $section['link']['title']; ?>
					</a>
				<?php endif; ?>
			</div>
		</div>
	</div>
</section>