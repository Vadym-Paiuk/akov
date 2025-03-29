<?php

namespace Theme\Inc\Classes\Setup;

use Theme\Inc\Traits\Singleton_Trait;

class Taxonomy {
	use Singleton_Trait;
	
	private function __construct() {
		add_action( 'init', [ $this, 'custom_taxonomy_project_tags' ], 20 );
		add_action( 'init', [ $this, 'custom_taxonomy_service_tags' ], 20 );
	}
	
	public function custom_taxonomy_project_tags() {
		$args = array(
			'labels'            => array(
				'name'          => 'Project Tags',
				'singular_name' => 'Project Tag',
				'search_items'  => 'Search Project Tags',
				'all_items'     => 'All Project Tags',
				'edit_item'     => 'Edit Project Tag',
				'update_item'   => 'Update Project Tag',
				'add_new_item'  => 'Add New Project Tag',
				'new_item_name' => 'New Project Tag Name',
				'menu_name'     => 'Project Tags',
			),
			'public'            => true,
			'hierarchical'      => false, // False makes it work like tags (not categories)
			'show_ui'           => true,
			'show_admin_column' => true,
			'query_var'         => true,
			'rewrite'           => array( 'slug' => 'project-tag' ),
		);
		
		register_taxonomy( 'project_tag', 'projects', $args ); // Attach to 'projects' CPT
	}
	
	public function custom_taxonomy_service_tags() {
		$args = array(
			'labels'            => array(
				'name'          => 'Service Tags',
				'singular_name' => 'Service Tag',
				'search_items'  => 'Search Service Tags',
				'all_items'     => 'All Service Tags',
				'edit_item'     => 'Edit Service Tag',
				'update_item'   => 'Update Service Tag',
				'add_new_item'  => 'Add New Service Tag',
				'new_item_name' => 'New Service Tag Name',
				'menu_name'     => 'Service Tags',
			),
			'public'            => true,
			'hierarchical'      => false, // False makes it work like tags (not categories)
			'show_ui'           => true,
			'show_admin_column' => true,
			'query_var'         => true,
			'rewrite'           => array( 'slug' => 'service-tag' ),
		);
		
		register_taxonomy( 'service_tag', 'service', $args ); // Attach to 'projects' CPT
	}
}