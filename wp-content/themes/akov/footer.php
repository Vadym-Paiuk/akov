<?php
$footer = get_field( 'footer', 'options' );
?>
</main>

<footer class="footer">
	<div class="container">
		<div class="footer__block">
			<div class="footer__menu">
				<?php
				$menu_name = 'services-menu';
				if ( has_nav_menu( $menu_name ) ) {
					wp_nav_menu( [
						'theme_location'  => $menu_name,
						'menu'            => '',
						'menu_class'      => 'menu-header-links mobile',
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
		</div>
		<div class="footer__block">
			<div class="footer__menu">
				<?php
				$menu_name = 'industries-menu';
				if ( has_nav_menu( $menu_name ) ) {
					wp_nav_menu( [
						'theme_location'  => $menu_name,
						'menu'            => '',
						'menu_class'      => 'menu-header-links mobile',
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
		</div>
		<div class="footer__block">
			<div class="footer__menu">
				<?php
				$menu_name = 'company-menu';
				if ( has_nav_menu( $menu_name ) ) {
					wp_nav_menu( [
						'theme_location'  => $menu_name,
						'menu'            => '',
						'menu_class'      => 'menu-header-links mobile',
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
		</div>
		<div class="footer__block footer__block-copyright">
			<?php if ( ! empty( $footer['text'] ) ): ?>
				<p>
					<?php echo $footer['text']; ?>
				</p>
			<?php endif; ?>
		</div>
	</div>
</footer>
<div class="menu-overlay"></div>
<?php wp_footer(); ?>
</body>

</html>