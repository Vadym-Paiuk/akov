<?php

namespace Theme\Inc\Classes\Support;

use Theme\Inc\Traits\Singleton_Trait;

class Svg {
	use Singleton_Trait;
	
	private function __construct() {
		add_filter( 'upload_mimes', [ $this, 'svg_upload_allow' ] );
		add_filter( 'wp_check_filetype_and_ext', [ $this, 'fix_svg_mime_type' ], 10, 5 );
	}
	
	public function svg_upload_allow( $mimes ) {
		$mimes['svg'] = 'image/svg+xml';
		
		return $mimes;
	}
	
	public function fix_svg_mime_type( $data, $file, $filename, $mimes, $real_mime = '' ) {
		if ( version_compare( $GLOBALS['wp_version'], '5.1.0', '>=' ) ) {
			$dosvg = in_array( $real_mime, [ 'image/svg', 'image/svg+xml' ] );
		} else {
			$dosvg = ( '.svg' === strtolower( substr( $filename, - 4 ) ) );
		}
		
		if ( $dosvg ) {
			if ( current_user_can( 'manage_options' ) ) {
				$data['ext']  = 'svg';
				$data['type'] = 'image/svg+xml';
			} else {
				$data['ext'] = $type_and_ext['type'] = false;
			}
			
		}
		
		return $data;
	}
}