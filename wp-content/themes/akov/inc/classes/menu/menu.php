<?php

namespace Theme\inc\classes\menu;

use Theme\Inc\Traits\Singleton_Trait;

class Menu {
	use Singleton_Trait;
	
	public function __construct() {
		add_filter( 'wp_nav_menu', [ $this, 'add_title_for_menu' ], 10, 2 );
	}
	
	public function add_title_for_menu( $nav_menu, $args ) {
		$title = get_field( 'title', $args->menu );
		
		if ( empty( $title ) ) {
			return $nav_menu;
		}
		
		$format = '<h4 class="menu-title">%s</h4>';
		$title  = sprintf( $format, $title );
		
		$nav_menu = $title . $nav_menu;
		
		return $nav_menu;
	}
}