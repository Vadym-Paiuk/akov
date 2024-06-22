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
			     data-aos-duration="700">
				<h1><?php the_title(); ?></h1>
				<?php the_content(); ?>
			</div>
			
			<div class="projects-grid__items grid"
			     data-aos="fade-up"
			     data-aos-duration="700">
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
				
				<!--<div class="projects-grid__item grid-item">
					<img src="<?php /*echo $path; */ ?>/assets/src/images/project-1.png"
					     alt="hyita"
					     loading="lazy">
				</div>
				<div class="projects-grid__item grid-item">
					<img src="<?php /*echo $path; */ ?>/assets/src/images/project-2.png"
					     alt="hyita"
					     loading="lazy">
				</div>
				<div class="projects-grid__item grid-item">
					<img src="<?php /*echo $path; */ ?>/assets/src/images/project-3.png"
					     alt="hyita"
					     loading="lazy">
				</div>
				<div class="projects-grid__item grid-item">
					<img src="<?php /*echo $path; */ ?>/assets/src/images/project-4.png"
					     alt="hyita"
					     loading="lazy">
				</div>
				<div class="projects-grid__item grid-item">
					<img src="<?php /*echo $path; */ ?>/assets/src/images/project-5.png"
					     alt="hyita"
					     loading="lazy">
				</div>
				<div class="projects-grid__item grid-item">
					<img src="<?php /*echo $path; */ ?>/assets/src/images/project-6.png"
					     alt="hyita"
					     loading="lazy">
				</div>
				<div class="projects-grid__item grid-item">
					<img src="<?php /*echo $path; */ ?>/assets/src/images/project-7.png"
					     alt="hyita"
					     loading="lazy">
				</div>
				<div class="projects-grid__item grid-item">
					<img src="<?php /*echo $path; */ ?>/assets/src/images/project-8.png"
					     alt="hyita"
					     loading="lazy">
				</div>
				<div class="projects-grid__item grid-item">
					<img src="<?php /*echo $path; */ ?>/assets/src/images/project-9.png"
					     alt="hyita"
					     loading="lazy">
				</div>
				<div class="projects-grid__item grid-item">
					<img src="<?php /*echo $path; */ ?>/assets/src/images/project-10.png"
					     alt="hyita"
					     loading="lazy">
				</div>
				<div class="projects-grid__item grid-item">
					<img src="<?php /*echo $path; */ ?>/assets/src/images/project-11.png"
					     alt="hyita"
					     loading="lazy">
				</div>
				<div class="projects-grid__item grid-item">
					<img src="<?php /*echo $path; */ ?>/assets/src/images/project-12.png"
					     alt="hyita"
					     loading="lazy">
				</div>
				<div class="projects-grid__item grid-item">
					<img src="<?php /*echo $path; */ ?>/assets/src/images/project-13.png"
					     alt="hyita"
					     loading="lazy">
				</div>
				<div class="projects-grid__item grid-item">
					<img src="<?php /*echo $path; */ ?>/assets/src/images/project-14.png"
					     alt="hyita"
					     loading="lazy">
				</div>
				<div class="projects-grid__item grid-item">
					<img src="<?php /*echo $path; */ ?>/assets/src/images/project-15.png"
					     alt="hyita"
					     loading="lazy">
				</div>-->
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
