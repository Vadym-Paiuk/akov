<?php
$section = $args;

if ( empty( $section ) ) {
	return;
}
?>

<div class="single__service-content-success-stories">
	<div class="single__service-content-success-stories-header">
		<?php if ( ! empty( $section['title'] ) ): ?>
			<h2 class="single__service-content-success-stories-header-title">
				<?php echo $section['title']; ?>
			</h2>
		<?php else: ?>
			<h2 class="single__service-content-success-stories-header-title">
				Success stories
			</h2>
		<?php endif; ?>
	</div>
	<?php if ( ! empty( $section['projects'] ) ): ?>
		<div class="single__service-content-success-stories-list">
			<?php foreach ( $section['projects'] as $project ):
				$post = $project;
				setup_postdata( $post );
				$fields = get_field( 'fields' );
				?>
				<article id="post-<?php the_ID(); ?>"
				         data-aos="zoom-in"
				         
				         
				         class="single__service-content-success-stories-list-item <?php if ( empty( $fields['coming_soon'] ) ) {
					         echo 'soon';
				         } ?>">
					
					<?php if ( empty( $fields['coming_soon'] ) ): ?>
						<a href="<?php the_permalink(); ?>">
							<?php the_post_thumbnail( 'full' ); ?>
							<span class="more-wrap">
									<button class="more">Learn More</button>
									</span>
							<span class="archive__projects-categories">
										<?php if ( ! empty( $fields['category'] ) ): ?>
											<?php foreach ( $fields['category'] as $category ): ?>
												<p><?php echo $category['title']; ?></p>
											<?php endforeach; ?>
										<?php endif; ?>
								</span>
						</a>
					<?php else: ?>
						<?php the_post_thumbnail( 'full' ); ?>
						<span class="archive__projects-categories archive__projects-soon">
										<p>Coming Soon</p>
								</span>
					<?php endif; ?>
				</article>
			<?php
			endforeach;
			wp_reset_postdata();
			?>
		</div>
	<?php endif; ?>
</div>