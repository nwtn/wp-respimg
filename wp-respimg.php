<?php

	/**
	 * @package wp-respimg
	 * @version 0.0.1
	 */

	/**
	 * Plugin Name: wp-respimg
	 * Plugin URI: https://github.com/nwtn/wp-respimg/
	 * Description: A responsive image workflow for optimizing and resizing your images.
	 * Version: 0.0.1
	 * Author: David Newton
	 * Author URI: https://github.com/nwtn/
	 * License: MIT
	 */

	defined( 'ABSPATH' ) or die( 'Sometimes you eat the bear, and well, sometimes the bear, well, it eats you.' );
	require_once plugin_dir_path(__FILE__) . 'class-respimg.php';
	require_once plugin_dir_path(__FILE__) . 'class-wp-image-editor-respimg.php';

	add_filter('wp_image_editors', 'wp_image_editors_respimg_filter', 10, 3);

	/**
	 * Filter to add php-respimg as an image editor
	 *
	 * @return array editors
	 **/
	function wp_image_editors_respimg_filter($editors) {
		array_unshift($editors, 'WP_Image_Editor_Respimg');
		return $editors;
	}

?>
