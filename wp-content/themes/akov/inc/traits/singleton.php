<?php

namespace Theme\inc\traits;

trait Singleton_Trait {
	private static $instance;
	
	public static function get_instance() {
		if ( empty( self::$instance ) ) {
			self::$instance = new static();
		}
		
		return self::$instance;
	}
	
	private function __construct() {
	}
	
	private function __clone() {
	}
	
	private function __wakeup() {
	}
}