<?php

namespace Theme\Inc\Classes\Setup;

use Theme\Inc\Traits\Singleton_Trait;

class CPT {
	use Singleton_Trait;
	
	private function __construct() {
		add_action( 'init', [ $this, 'register_post_type' ], 20 );
	}
	
	public function register_post_type() {
	}
}