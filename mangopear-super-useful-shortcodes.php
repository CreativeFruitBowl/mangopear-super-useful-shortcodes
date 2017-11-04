<?php

/*
	Plugin Name: Mangopear's super useful shortcodes
	Plugin URI: http://www.mangopear.co.uk/
	Description: A delightful concoction of shortcodes for your pleasure. Aimed at making blogging that little bit easier...
	Version: 1.0.0
	Author: The Creative Panda
	Author URI: http://www.thecreativepanda.com/
	License: GPL
	Copyright: The Creative Panda
*/

	/**
	 * Content
	 *
	 * [1]		Code shortcode
	 * 			This simply replaces the [code][/code] tags with <code></code> ones on the front end
	 *
	 * [2]		Stylised header
	 * 			This simply wraps the enclosed content in <h2 class="header--stylised"></h2>
	 *
	 * [3]		Responsive images
	 * 			A shortcode that allows us to use stylised responsive images
	 */
	




	/**
	 * [1]		Code shortcode
	 */
	function mangopear_shortcode__code ($atts,$content = null) {
	    return '<code>' . $content . '</code>';
	}
	
	add_shortcode( 'code', 'mangopear_shortcode__code' );





	/**
	 * [2]		Stylised header
	 */
	
	function mangopear__shortcode__stylised_header ($atts, $content = null) {
		return '<h2 class="header--stylised">' . $content . '</h2>';
	}

	add_shortcode ('stylised-header', mangopear__shortcode__stylised_header);





	/**
	 * [3]		Responsive images
	 */
	
	function mangopear__shortcode__mangui_image($atts, $content = null) {
		$atts = shortcode_atts(
			array(
				'alt'			=> '',
				'title'			=> '',
				'data-srcset'	=> '',
				'class'			=> '',
			), $atts, 'mangui-image'
		);


		return '<img class="' . $atts['class'] . '" 
		             alt="' . $atts['alt'] . '" 
		             title="' . $atts['title'] . '"
		             src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" 
		             data-srcset="' . $atts['data-srcset'] . '">';
	}

	add_shortcode('mangui-image', mangopear__shortcode__mangui_image);