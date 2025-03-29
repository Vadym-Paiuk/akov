<?php
$section = $args;

if ( empty( $section ) ) {
	return;
}
?>

<div class="single__service-content-other-services">
	<div class="single__service-content-other-services-header">
		<?php if ( ! empty( $section['title'] ) ): ?>
			<h2 class="single__service-content-other-services-header-title">
				<?php echo $section['title']; ?>
			</h2>
		<?php else: ?>
			<h2 class="single__service-content-other-services-header-title">
				Other Services
			</h2>
		<?php endif; ?>
	</div>
	<?php
	$current_id = get_the_ID(); // Get the current post ID
	$post_type  = get_post_type(); // Get the current post type
	
	$tags_cloud = get_field( 'services', 'options' )['tags_cloud'];
	$tags_cloud = array_diff( $tags_cloud, [ $current_id ] );
	
	$args = array(
		'post_type'      => $post_type, // Get posts from the same CPT
		'posts_per_page' => - 1, // Retrieve all posts
		'post__in'       => $tags_cloud, // Exclude the current post
		'orderby'        => 'post__in'
	);
	
	$other_posts = new WP_Query( $args );
	?>
	<?php if ( $other_posts->have_posts() ) : ?>
		<div class="single__service-content-other-services-list">
			<?php while ( $other_posts->have_posts() ) : $other_posts->the_post(); ?>
				<div class="single__service-content-other-services-list-item">
					<div class="single__service-content-other-services-list-item-header">
						<a href="<?php the_permalink(); ?>"
						   class="single__service-content-other-services-list-item-header-title">
							<?php
							$fields = get_field( 'fields' );
							if ( ! empty( $fields['short_title'] ) ) {
								echo $fields['short_title'];
							} else {
								the_title();
							}
							?>
						</a>
					</div>
				</div>
			<?php endwhile; ?>
		</div>
	<?php endif; ?>
	<?php wp_reset_postdata(); // Reset query ?>
</div>