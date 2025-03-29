<?php
$section = get_field( 'hero' );

if ( empty( $section ) ) {
	return;
}
?>

<section class="hero">
	<div class="container">
		<?php if ( ! empty( $section['subtitle'] ) ): ?>
			<p class="hero-header-subtitle"
			   data-aos="zoom-in"
			
			
			>
				<?php echo $section['subtitle']; ?>
			</p>
		<?php endif; ?>
		<div class="hero-header">
			<?php if ( ! empty( $section['title'] ) ): ?>
				<h1 class="hero-header-title"
				    data-aos="zoom-in"
				
				
				>
					<?php echo $section['title']; ?>
				</h1>
			<?php endif; ?>
		</div>
		<div class="hero-content">
			<div class="hero-content-text"
			     data-aos="zoom-in"
			
			
			>
				<?php if ( ! empty( $section['text_1'] ) ): ?>
					<?php echo $section['text_1']; ?>
				<?php endif; ?>
			</div>
			<div class="hero-content-link"
			     data-aos="zoom-in">
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