<?php

/**
 * 
 */
class AwesomeScripts
{

	public function __construct()
	{
		add_action('wp_enqueue_scripts', array($this, 'frontendScripts'));
		add_action('wp_enqueue_scripts', array($this, 'frontendStyles'));
	}

	public function frontendScripts()
	{
		global $awesomeTheme;

		wp_enqueue_script('jquery', get_template_directory_uri() . '/assets/js/jquery.js', array('jquery'), $awesomeTheme->version, true);
		wp_enqueue_script('autoptimize-jquery', get_template_directory_uri() . '/assets/js/autoptimize_d5d5953f27575c99f2039ea85c5bccf5.js', array('jquery'), $awesomeTheme->version, true);

	}

	public function frontendStyles()
	{
		global $awesomeTheme;
        wp_enqueue_style('autoptimize-style', get_template_directory_uri() . '/assets/css/autoptimize_c55f89bf85633b3dd7c76074041c153e.css', $awesomeTheme->version, true);
        wp_enqueue_style('style', get_template_directory_uri() . '/assets/css/style.css', $awesomeTheme->version, true);

	}
}
?>
