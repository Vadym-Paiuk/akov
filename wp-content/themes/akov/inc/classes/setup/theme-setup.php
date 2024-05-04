<?php

namespace Theme\Inc\Classes\Setup;

use Theme\inc\classes\helpers\Functions;
use Theme\inc\classes\menu\Menu;
use Theme\Inc\Classes\Support\Svg;
use Theme\inc\classes\video\Video_Filter;
use Theme\inc\classes\video\Video_Post_Catalog;
use Theme\inc\classes\video\Video_Post_Views;
use Theme\Inc\Traits\Singleton_Trait;

class Theme_Setup {
	
	use Singleton_Trait;
	
	public function __construct() {
		add_action( 'after_setup_theme', [ $this, 'bootstrap' ] );
		add_action( 'wp_enqueue_scripts', [ $this, 'enqueue_scripts' ] );
		add_action( 'wp_enqueue_scripts', [ $this, 'enqueue_style' ] );
		add_action( 'init', [ $this, 'advanced_custom_fields_options' ] );
		add_action( 'init', [ $this, 'languages' ] );
		add_action( 'init', [ $this, 'constants' ] );
		add_action( 'after_setup_theme', [ $this, 'register_menus' ] );
		add_action( 'after_setup_theme', [ $this, 'dequeue_hooks' ] );
		add_action( 'after_setup_theme', [ $this, 'theme_setup' ] );
		add_action( 'wp_enqueue_scripts', [ $this, 'dequeue_style' ] );
		add_action( 'wp_enqueue_scripts', [ $this, 'localize_script' ] );
		add_filter( 'wpcf7_autop_or_not', '__return_false' );
		add_action( 'init', [ $this, 'deactivate_gutenberg_editor' ] );
	}
	
	public static function bootstrap() {
		functions::get_instance();
		Svg::get_instance();
		Taxonomy::get_instance();
		CPT::get_instance();
		menu::get_instance();
	}
	
	public function deactivate_gutenberg_editor() {
		if ( class_exists( 'WP_Block_Editor_Context' ) ) {
			add_filter( 'use_block_editor_for_post', '__return_false', 10 );
			remove_theme_support( 'core-block-patterns' );
			remove_theme_support( 'block-templates' );
		}
	}
	
	public function advanced_custom_fields_options() {
		if ( function_exists( 'acf_add_options_page' ) ) {
			acf_add_options_page( array(
				'page_title' => 'Theme Options',
				'menu_title' => 'Theme Options',
				'menu_slug'  => 'theme-options',
				'capability' => 'edit_posts',
				'redirect'   => true,
			) );
		}
	}
	
	public function languages() {
		load_theme_textdomain( 'THEME_TEXT_DOMAIN', get_template_directory() . '/languages' );
	}
	
	public function constants() {
		if ( ! defined( 'THEME_DIR_PATH' ) ) {
			define( 'THEME_DIR_PATH', untrailingslashit( get_template_directory() ) );
		}
		if ( ! defined( 'THEME_DIR_URI' ) ) {
			define( 'THEME_DIR_URI', untrailingslashit( get_template_directory_uri() ) );
		}
		if ( ! defined( 'THEME_VERSION' ) ) {
			define( 'THEME_VERSION', untrailingslashit( get_template_directory_uri() ) );
		}
		if ( ! defined( 'NONCE_CODE' ) ) {
			define( 'NONCE_CODE', untrailingslashit( get_template_directory_uri() ) );
		}
		if ( ! defined( 'THEME_TEXT_DOMAIN' ) ) {
			define( 'THEME_TEXT_DOMAIN', 'advocate' );
		}
	}
	
	public function localize_script() {
		wp_localize_script( 'main-js', 'theme_ajax_object', array(
			'ajax_url'        => admin_url( 'admin-ajax.php' ),
			'home_url'        => get_home_url(),
			'curent_ID'       => get_the_ID(),
			'curent_url'      => get_permalink(),
			'current_user_id' => get_current_user_id(),
			'nonce'           => wp_create_nonce( NONCE_CODE ),
			'current_page'    => get_query_var( 'paged' ) ? get_query_var( 'paged' ) : 1,
		) );
	}
	
	public function dequeue_style() {
		wp_dequeue_style( 'wp-block-library' );
		wp_dequeue_script( 'wpcf7cf-scripts' );
		wp_dequeue_style( 'contact-form-7' );
		wp_dequeue_style( 'toc-screen' );
		wp_dequeue_style( 'wpm-main' );
		wp_dequeue_style( 'global-styles-inline' );
	}
	
	public function dequeue_hooks() {
		add_filter( 'big_image_size_threshold', '__return_false' );
	}
	
	public function register_menus() {
		register_nav_menus( array(
			'header-menu' => esc_html__( 'Header Menu' ),
		) );
	}
	
	public function theme_setup() {
		add_theme_support( 'title-tag' );
		add_theme_support( 'post-thumbnails' );
		add_theme_support( 'align-wide' );
		add_theme_support( 'responsive-embeds' );
		add_theme_support( 'custom-logo' );
		
		add_image_size( '50x50', 50, 50, true );
		add_image_size( '500x320', 500, 320, true );
		add_image_size( '1920x410', 1920, 410, true );
		add_image_size( '320x180', 320, 180, true );
	}
	
	public function enqueue_style() {
		wp_enqueue_style( 'vendor-css',
			get_template_directory_uri() . '/assets/dist/vendor/vendor.css',
			array(),
			THEME_VERSION );
		wp_enqueue_style( 'main-css',
			get_template_directory_uri() . '/assets/dist/css/main.css',
			array(),
			THEME_VERSION );
	}
	
	public function enqueue_scripts() {
		wp_enqueue_script( 'vendor-js',
			get_template_directory_uri() . '/assets/dist/vendor/vendor.js',
			array(),
			THEME_VERSION,
			true );
		wp_enqueue_script( 'main-js',
			get_template_directory_uri() . '/assets/dist/js/main.js',
			array(),
			THEME_VERSION,
			true );
	}
}

Theme_Setup::get_instance();