<?php
#Template Name: Projects
get_header();
$path = get_stylesheet_directory_uri();

?>

<section class="projects-grid">
	<div class="container-big">
		<div class="projects-grid__inner">
			<div class="projects-grid__header"
			     data-aos="zoom-in"
			
			
			>
				<h1><?php the_title(); ?></h1>
				<?php the_content(); ?>
			</div>
			
			<div class="projects-grid__items grid"
			     data-aos="zoom-in"
			
			
			>
				<?php
				$projects = get_field( 'projects' );
				foreach ( $projects as $project ):
					?>
					<div class="projects-grid__item grid-item">
						<?php
						if ( ! empty( $project['image'] ) ) {
							echo wp_get_attachment_image( $project['image'], 'full' );
						}
						?>
					</div>
				<?php endforeach; ?>
			</div>
			
			<div class="projects-grid__slider swiper">
				<div class="swiper-wrapper ">
					<?php
					$projects = get_field( 'projects' );
					foreach ( $projects as $project ):
						?>
						<div class="swiper-slide projects-grid__slide">
							<div class="projects-grid__slide-inner">
								<?php
								if ( ! empty( $project['image'] ) ) {
									echo wp_get_attachment_image( $project['image'], 'full' );
								}
								?>
							</div>
						</div>
					<?php endforeach; ?>
				</div>
			</div>
			<div class="swiper-pagination"></div>
		</div>
	</div>
</section>

<?php get_footer(); ?>
