<?php
#Template Name: Contact
get_header();
?>

<section class="form">
	<div class="container">
		<div class="form-header">
			<h2 class="section-title">
				<?php the_title(); ?>
			</h2>
			<div class="form-header-description">
				<?php the_content(); ?>
			</div>
		</div>
		<div class="form-content">
			<?php echo do_shortcode( '[contact-form-7 id="3a93ef3" title="Contact form"]' ); ?>
		</div>
	</div>
</section>

<?php get_footer(); ?>