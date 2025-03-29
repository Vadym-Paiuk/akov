<?php
#Template Name: Pricing
get_header();
$path = get_stylesheet_directory_uri();

$fields = get_field( 'fields' );
?>

<div class="pricing-page">
	<div class="container">
		<div class="pricing-page__header"
		     data-aos="zoom-in"
		
		
		>
			<?php $archive_link = get_post_type_archive_link( 'projects' ); ?>
			<a href="<?php echo $archive_link; ?>"
			   class="btn btn-back">Back</a>
			<?php if ( ! empty( $fields['title'] ) ): ?>
				<h1><?php echo $fields['title']; ?></h1>
			<?php endif; ?>
			<div class="description">
				<?php if ( ! empty( $fields['description'] ) ): ?>
					<?php echo $fields['description']; ?>
				<?php endif; ?>
			</div>
		</div>
		<?php $section = $fields['prices_per_month']; ?>
		<div class="pricing-page__per-month"
		     data-aos="zoom-in"
		
		
		>
			<div class="pricing-page__per-month__header">
				<?php if ( ! empty( $section['title'] ) ): ?>
					<h2><?php echo $section['title']; ?></h2>
				<?php endif; ?>
			</div>
			<?php if ( ! empty( $section['items'] ) ): ?>
				<div class="pricing-page__per-month__list">
					<?php foreach ( $section['items'] as $item ): ?>
						<div class="pricing-page__per-month__item <?php echo $item['style']; ?>">
							<div class="pricing-page__per-month__item-header">
								<?php if ( ! empty( $item['title'] ) ): ?>
									<h3><?php echo $item['title']; ?></h3>
								<?php endif; ?>
								<?php if ( ! empty( $item['price'] ) ): ?>
									<p class="price">
										<?php echo $item['price']; ?>
									</p>
								<?php endif; ?>
								<?php if ( ! empty( $item['badge'] ) ): ?>
									<p class="badge">
										<?php echo $item['badge']; ?>
									</p>
								<?php endif; ?>
							</div>
							<div class="pricing-page__per-month__item-body">
								<?php if ( ! empty( $item['features']['title'] ) ): ?>
									<h4><?php echo $item['features']['title']; ?></h4>
								<?php endif; ?>
								<?php if ( ! empty( $item['features']['list'] ) ): ?>
									<div class="pricing-page__per-month__item-features">
										<ul>
											<?php foreach ( $item['features']['list'] as $feature ): ?>
												<?php if ( ! empty( $feature['title'] ) ): ?>
													<li><?php echo $feature['title']; ?></li>
												<?php endif; ?>
											<?php endforeach; ?>
										</ul>
									</div>
								<?php endif; ?>
							</div>
							<div class="pricing-page__per-month__item-footer">
								<?php if ( ! empty( $item['delivery_time'] ) ): ?>
									<p class="delivery">
										Delivery Time: <?php echo $item['delivery_time']; ?>
									</p>
								<?php endif; ?>
							</div>
						</div>
					<?php endforeach; ?>
				</div>
				<div class="pricing-page__per-month__list-mobile">
					<div class="pricing-page__per-month__list-mobile-tabs">
						<div class="pricing-page__per-month__list-mobile-tabs-header">
							<?php foreach ( $section['items'] as $key => $item ): ?>
								<div class="pricing-page__per-month__list-mobile-tabs-header-tab <?php if ( $key === 0 ) {
									echo 'active';
								} ?> <?php echo $item['style']; ?>">
									<?php if ( ! empty( $item['title'] ) ): ?>
										<h3><?php echo $item['title']; ?></h3>
									<?php endif; ?>
									<?php if ( ! empty( $item['price'] ) ): ?>
										<p class="price">
											<?php echo $item['price']; ?>
										</p>
									<?php endif; ?>
								</div>
							<?php endforeach; ?>
						</div>
						<div class="pricing-page__per-month__list-mobile-tabs-body">
							<?php foreach ( $section['items'] as $key => $item ): ?>
								<div class="pricing-page__per-month__list-mobile-tabs-body__tab <?php if ( $key === 0 ) {
									echo 'active';
								} ?> <?php echo $item['style']; ?>">
									<div class="pricing-page__per-month__list-mobile-tabs-body__tab-body">
										<div class="tab-title">
											<?php if ( ! empty( $item['title'] ) && ! empty( $item['price'] ) ): ?>
												<p><?php echo $item['title']; ?> for <?php echo $item['price']; ?></p>
											<?php endif; ?>
										</div>
										<?php if ( ! empty( $item['features']['title'] ) ): ?>
											<h4><?php echo $item['features']['title']; ?></h4>
										<?php endif; ?>
										<?php if ( ! empty( $item['features']['list'] ) ): ?>
											<div class="pricing-page__per-month__item-features">
												<ul>
													<?php foreach ( $item['features']['list'] as $feature ): ?>
														<?php if ( ! empty( $feature['title'] ) ): ?>
															<li><?php echo $feature['title']; ?></li>
														<?php endif; ?>
													<?php endforeach; ?>
												</ul>
											</div>
										<?php endif; ?>
										<?php if ( ! empty( $item['delivery_time'] ) ): ?>
											<p class="delivery">
												Delivery Time: <?php echo $item['delivery_time']; ?>
											</p>
										<?php endif; ?>
									</div>
									<div class="pricing-page__per-month__list-mobile-tabs-body__tab-footer">
										<?php if ( ! empty( $fields['link'] ) ): ?>
											<a href="<?php echo $fields['link']['url']; ?>"
											   target="<?php echo $fields['link']['target']; ?>"
											   class="btn"><?php echo $fields['link']['title']; ?></a>
										<?php endif; ?>
									</div>
								</div>
							<?php endforeach; ?>
						</div>
					</div>
				</div>
			<?php endif; ?>
		</div>
		<?php $section = $fields['prices_per_project']; ?>
		<div class="pricing-page__per-project">
			<div class="pricing-page__per-project__header"
			     data-aos="zoom-in"
			
			
			>
				<?php if ( ! empty( $section['title'] ) ): ?>
					<h2><?php echo $section['title']; ?></h2>
				<?php endif; ?>
			</div>
			<?php if ( ! empty( $section['items'] ) ): ?>
				<div class="pricing-page__per-project__tabs">
					<div class="pricing-page__per-project__tabs-header"
					     data-aos="zoom-in"
					
					
					>
						<?php foreach ( $section['items'] as $key => $item ): ?>
							<?php if ( ! empty( $item['title'] ) ): ?>
								<h3 class="pricing-page__per-project__tabs-header-title <?php if ( $key === 0 ) {
									echo 'active';
								}
								if ( empty( $item['active'] ) ) {
									echo 'hidden';
								} ?>"><?php echo $item['title']; ?></h3>
							<?php endif; ?>
						<?php endforeach; ?>
					</div>
					<div class="pricing-page__per-project__tabs-body">
						<?php foreach ( $section['items'] as $key => $item ): ?>
							<?php
							if ( empty( $item['active'] ) ) {
								continue;
							}
							?>
							<div class="pricing-page__per-project__tabs-body__tab <?php if ( $key === 0 ) {
								echo 'active';
							} ?>">
								<?php if ( ! empty( $item['list'] ) ): ?>
									<?php foreach ( $item['list'] as $value ): ?>
										<div class="pricing-page__per-project__tabs-body__tab-item"
										     data-aos="zoom-in"
										
										
										>
											<div class="pricing-page__per-project__tabs-body__tab-header">
												<div class="pricing-page__per-project__tabs-body__tab-header-start">
													<?php if ( ! empty( $value['title'] ) ): ?>
														<h4><?php echo $value['title']; ?></h4>
													<?php endif; ?>
												</div>
												<div class="pricing-page__per-project__tabs-body__tab-header-end">
													<?php if ( ! empty( $value['delivery'] ) ): ?>
														<p class="delivery">
															<?php echo $value['delivery']; ?>
														</p>
													<?php endif; ?>
													<?php if ( ! empty( $value['price'] ) ): ?>
														<p class="price">
															<?php echo $value['price']; ?>
														</p>
													<?php endif; ?>
												</div>
											</div>
											<div class="pricing-page__per-project__tabs-body__tab-body">
												<?php if ( ! empty( $value['description'] ) ): ?>
													<?php echo $value['description']; ?>
												<?php endif; ?>
											</div>
										</div>
									<?php endforeach; ?>
								<?php endif; ?>
							</div>
						<?php endforeach; ?>
					</div>
				</div>
			<?php endif; ?>
		</div>
		<div class="pricing-page__per-project-mobile">
			<div class="pricing-page__per-project__header"
			     data-aos="zoom-in"
			
			
			>
				<?php if ( ! empty( $section['title'] ) ): ?>
					<h2><?php echo $section['title']; ?></h2>
				<?php endif; ?>
			</div>
			<?php if ( ! empty( $section['items'] ) ): ?>
				<?php foreach ( $section['items'] as $key => $item ): ?>
					<div class="pricing-page__per-project-mobile__accordion"
					     data-aos="zoom-in"
					
					
					>
						<div class="pricing-page__per-project-mobile__accordion-header">
							<?php if ( ! empty( $item['title'] ) ): ?>
								<h3 class="pricing-page__per-project-mobile__accordion-header-title <?php
								if ( empty( $item['active'] ) ) {
									echo 'hidden';
								} ?>"><?php echo $item['title']; ?></h3>
							<?php endif; ?>
						</div>
						<div class="pricing-page__per-project-mobile__accordion-body">
							<?php if ( ! empty( $item['list'] ) ): ?>
								<?php foreach ( $item['list'] as $value ): ?>
									<div class="pricing-page__per-project-mobile__accordion-body-header">
										<?php if ( ! empty( $value['title'] ) ): ?>
											<h4><?php echo $value['title']; ?></h4>
										<?php endif; ?>
									</div>
									<div class="pricing-page__per-project-mobile__accordion-body-body">
										<?php if ( ! empty( $value['description'] ) ): ?>
											<?php echo $value['description']; ?>
										<?php endif; ?>
									</div>
									<div class="pricing-page__per-project-mobile__accordion-body-footer">
										<?php if ( ! empty( $value['delivery'] ) ): ?>
											<p class="delivery">
												<?php echo $value['delivery']; ?>
											</p>
										<?php endif; ?>
										<?php if ( ! empty( $value['price'] ) ): ?>
											<p class="price">
												<?php echo $value['price']; ?>
											</p>
										<?php endif; ?>
									</div>
								<?php endforeach; ?>
							<?php endif; ?>
						</div>
					</div>
				<?php endforeach; ?>
			<?php endif; ?>
		</div>
		<div class="pricing-page__footer"
		     data-aos="zoom-in"
		
		
		>
			<?php if ( ! empty( $fields['link'] ) ): ?>
				<a href="<?php echo $fields['link']['url']; ?>"
				   target="<?php echo $fields['link']['target']; ?>"
				   class="btn"><?php echo $fields['link']['title']; ?></a>
			<?php endif; ?>
		</div>
	</div>
</div>

<?php get_footer(); ?>
