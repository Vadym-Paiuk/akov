<?php
$section = get_field( 'hero' );

if ( empty( $section ) ) {
	return;
}
?>

<section class="hero"
         data-aos="zoom-in"
         data-aos-duration="700">
	<div class="container">
		<div class="hero-header">
			<?php if ( ! empty( $section['title'] ) ): ?>
				<h1 class="hero-header-title">
					<?php echo $section['title']; ?>
				</h1>
			<?php endif; ?>
			<?php if ( ! empty( $section['subtitle'] ) ): ?>
				<p class="hero-header-subtitle">
					<?php echo $section['subtitle']; ?>
				</p>
			<?php endif; ?>
		</div>
		<div class="hero-content">
			<div class="hero-content-start">
				<?php if ( ! empty( $section['text_1'] ) ): ?>
					<p>
						<?php echo $section['text_1']; ?>
					</p>
				<?php endif; ?>
			</div>
			<div class="hero-content-end">
				<?php if ( ! empty( $section['text_2'] ) ): ?>
					<p>
						<?php echo $section['text_2']; ?>
					</p>
				<?php endif; ?>
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