<?php

namespace Theme\inc\classes\menu;

use Theme\Inc\Traits\Singleton_Trait;

class Menu {
	use Singleton_Trait;
	
	public function __construct() {
		add_filter( 'wp_nav_menu', [ $this, 'add_title_for_menu' ], 10, 2 );
		add_filter( 'walker_nav_menu_start_el', [ $this, 'wrap_wp_submenu' ], 10, 4 );
		add_filter( 'walker_nav_menu_start_el', [ $this, 'modify_header_menu_item' ], 10, 4 );
		//add_filter( 'wp_nav_menu_items', [ $this, 'close_wp_submenu' ], 10, 2 );
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
	
	public function wrap_wp_submenu( $item_output, $item, $depth, $args ) {
		if ( in_array( 'menu-item-has-children', $item->classes ) && $depth === 0 ) {
			$item_output .= '<div class="submenu-wrapper">';
		}
		
		return $item_output;
	}
	
	public function close_wp_submenu( $items, $args ) {
		$items = preg_replace( '/(<ul class="sub-menu">)/', '<div class="submenu-wrapper">$1', $items );
		$items = preg_replace( '/(<\/ul>)/', '$1</div>', $items );
		
		return $items;
	}
	
	public function modify_header_menu_item( $item_output, $item, $depth, $args ) {
		if ( ! function_exists( 'get_field' ) ) {
			return $item_output; // Пропускаем, если ACF не подключен
		}
		
		// Применяем только к header-menu
		if ( $args->theme_location !== 'header-menu' ) {
			return $item_output;
		}
		
		$dropdown_title = get_field( 'dropdown_title', $item->ID );
		
		// Если элемент является заголовком
		if ( $dropdown_title ) {
			$item_output = '<h4 class="menu-dropdown-title">' . esc_html( $item->title ) . '</h4>';
		}
		
		return $item_output;
	}
}