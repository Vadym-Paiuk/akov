<?php

namespace Theme\inc\traits;

trait Ajax_Trait {
	public function wp_ajax_action( $action ) {
		add_action( 'wp_ajax_' . $action, [ $this, $action ] );
		add_action( 'wp_ajax_nopriv_' . $action, [ $this, $action ] );
	}
}