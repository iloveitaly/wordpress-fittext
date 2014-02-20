<?php
/*
Plugin Name: FitText.js for WordPress
Plugin URI: https://github.com/iloveitaly/wp-fitvids
Description: Easily add fittext to your site
Version: 1.0.0
Author: Michael Bianco
Author URI: http://cliffsidemedia.com/
License: Public Domain
*/

if (!defined( 'ABSPATH' )) exit;

define('FITTEXT_PLUGIN_URL', plugin_dir_url(  __FILE__  ) );

add_action('wp_enqueue_scripts', 'fittext');
function fittext() {
	wp_enqueue_script('fitext', FITTEXT_PLUGIN_URL . 'jquery.fittext.js', array('jquery'), '1.0');
} ?>