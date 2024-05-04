<?php

namespace Theme\Inc\Classes\Setup;

use Theme\Inc\Traits\Singleton_Trait;

class Taxonomy {
	use Singleton_Trait;
	
	private function __construct() {
		add_action( 'init', [ $this, 'register_taxonomy' ] );
	}
	
	public function register_taxonomy() {
	}
}