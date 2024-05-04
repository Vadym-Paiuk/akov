<?php
$footer = get_field( 'footer', 'options' );
?>
</main>

<footer class="footer">
	<div class="container">
		<div class="footer-top">
			<div class="footer-top-info">
				<?php the_custom_logo(); ?>
				<?php if ( ! empty( $footer['description'] ) ): ?>
					<p class="footer-top-info-description">
						<?php echo $footer['description']; ?>
					</p>
				<?php endif; ?>
			</div>
			<div class="footer-top-menu">
				<?php
				$menu_name = 'footer-menu';
				if ( has_nav_menu( $menu_name ) ) {
					wp_nav_menu( [
						'theme_location'  => $menu_name,
						'menu'            => '',
						'menu_class'      => 'menu',
						'menu_id'         => '',
						'container'       => '',
						'container_class' => '',
						'container_id'    => '',
						'fallback_cb'     => 'wp_page_menu',
						'before'          => '',
						'after'           => '',
						'link_before'     => '',
						'link_after'      => '',
						'echo'            => true,
						'depth'           => 0,
						'walker'          => '',
						'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
						'item_spacing'    => 'preserve',
					] );
				}
				?>
			</div>
			<?php if ( ! empty( $footer['socials'] ) ): ?>
				<div class="footer-top-social">
					<ul class="footer-top-social-list">
						<?php foreach ( $footer['socials'] as $social ): ?>
							<li class="footer-top-social-list-item">
								<?php if ( ! empty( $social['link'] ) ): ?>
									<a href="<?php echo $social['link']['url']; ?>"
									   target="<?php echo $social['link']['target']; ?>">
										<?php echo $social['link']['title']; ?>
									</a>
								<?php endif; ?>
							</li>
						<?php endforeach; ?>
					</ul>
				</div>
			<?php endif; ?>
		</div>
		<div class="footer-bottom">
			<?php if ( ! empty( $footer['copyright'] ) ): ?>
				<div class="footer-bottom-copyright">
					<?php
					$start_year   = '2024';
					$current_year = date( 'Y' );
					$replace_year = $start_year;
					
					if ( $start_year !== $current_year ) {
						$replace_year .= ' - ' . $current_year;
					}
					
					echo str_replace( '{YEAR}', $replace_year, $footer['copyright'] );
					?>
				</div>
			<?php endif; ?>
			<?php if ( ! empty( $footer['privacy'] ) ): ?>
				<div class="footer-bottom-privacy">
					<a href="<?php echo $footer['privacy']['url']; ?>"
					   target="<?php echo $footer['privacy']['target']; ?>">
						<?php echo $footer['privacy']['title']; ?>
					</a>
				</div>
			<?php endif; ?>
		</div>
	</div>
</footer>

<?php
$contact_form = get_field( 'contact_form', 'options' );
?>
<div class="popup-contact">
	<a href=""
	   class="btn-close-contact-popup"><i class="fa fa-close"></i></a>
	<div class="popup-contact-wrapper">
		<?php if ( ! empty( $contact_form['title'] ) ): ?>
			<h3>
				<?php echo $contact_form['title']; ?>
			</h3>
		<?php endif; ?>
		<?php
		if ( ! empty( $contact_form['form_shortcode'] ) ) {
			echo do_shortcode( $contact_form['form_shortcode'] );
		}
		?>
	</div>
</div>

<?php wp_footer(); ?>
</body>

</html>