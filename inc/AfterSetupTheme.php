<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit( 'No direct script access allowed' );
}

/**
* @package AfterSetupTheme
* @version 1.0
* @author lookawesome team
*
* Class after setup theme
*/

class AfterSetupTheme{

	public function __construct(){
		add_action( 'after_setup_theme', array( $this, 'setup' ) );

		add_filter( 'the_title', array( $this, 'siteTitle' ) );

		add_action( 'widgets_init', array( $this, 'widgetsInit' ) );

        add_filter( 'nav_menu_link_attributes', 'wpse156165_menu_add_class', 10, 3 );
	}

	public function setup(){
		load_theme_textdomain( 'bookawesome', get_template_directory() . '/languages' );

		add_theme_support( 'title-tag' );

		add_theme_support( 'automatic-feed-links' );

		add_theme_support( 'post-thumbnails' );

        add_theme_support( 'menus' );


        global $content_width;

		if ( ! isset( $content_width ) ) $content_width = 640;

		// dang ky menu
		register_nav_menus(
			array(
				'awe-main-menu'   => __( 'Primary Menu', 'bookawesome' ),
				'awesome-footer-menu' => __( 'Footer Menu', 'bookawesome' )
			)
		);
	}

    function wpse156165_menu_add_class( $atts, $item, $args ) {
        if( $args->theme_location == 'main-menu' ) {
            $atts['class'] = 'menu-link';
        }
        return $atts;
    }

	public function registerSizeImg()
	{
		add_image_size( 'websim-thumbnail-240x159', 240, 159, array( 'center', 'center' ) );
	}

	public function siteTitle($title){
		if ( $title == '' ) {
			return '&rarr;';
		} else {
			return $title;
		}
	}

	public function widgetsInit(){

		register_sidebar( array (
			'name'          => __( 'Blog Sidebar', 'bookawesome' ),
			'id'            => 'blog-sidebar-area',
			'before_widget' => '<div id="%1$s" class="widget-container %2$s">',
			'after_widget'  => "</div>",
			'before_title'  => '<div class="widget-title"><h3>',
			'after_title'   => '</h3></div>',
			) 
		);
	}
}
new AfterSetupTheme;
