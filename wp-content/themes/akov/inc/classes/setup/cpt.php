<?php

namespace Theme\Inc\Classes\Setup;

use Theme\Inc\Traits\Singleton_Trait;

class CPT {
	use Singleton_Trait;
	
	private function __construct() {
		add_action( 'init', [ $this, 'register_post_type' ], 20 );
	}
	
	public function register_post_type() {
		
		register_post_type(
			'projects',
			array(
				'labels'            => array(
					'name'               => 'Projects',
					'singular_name'      => 'Projects',
					'add_new'            => 'Add New',
					'add_new_item'       => 'Add New Projects',
					'edit_item'          => 'Edit Projects',
					'new_item'           => 'New Projects',
					'view_item'          => 'View Projects',
					'search_items'       => 'Search Projects',
					'not_found'          => 'Projects Not Found',
					'not_found_in_trash' => 'is empty',
					'menu_name'          => 'Projects',
				),
				'public'            => true,
				'show_ui'           => true,
				'show_admin_column' => true,
				'show_in_nav_menus' => true,
				'show_tagcloud'     => true,
				'query_var'         => true,
				'menu_icon'         => 'dashicons-format-image',
				'supports'          => array( 'title', 'thumbnail', 'editor' ),
				'hierarchical'      => true,
				'has_archive'       => true,
				'rewrite'           => array(
					'slug'       => 'projects',
					'with_front' => false
				),
			
			)
		);
	}
}