<?php
/**
 * Scripts
 *
 * @package     KBS
 * @subpackage  Shortcodes
 * @copyright   Copyright (c) 2016, Mike Howard
 * @license     http://opensource.org/licenses/gpl-2.0.php GNU Public License
 * @since       0.1
 */

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) exit;

/**
 * Login Shortcode
 *
 * Shows a login form allowing users to users to log in. This function simply
 * calls the kbs_login_form function to display the login form.
 *
 * @since	0.1
 * @param	att		$atts	Shortcode attributes
 * @param	str		$content
 * @uses	kbs_login_form()
 * @return	str
 */
function kbs_login_form_shortcode( $atts, $content = null ) {
	extract( shortcode_atts( array(
			'redirect' => '',
		), $atts, 'kbs_login' )
	);
	return kbs_login_form( $redirect );
} // kbs_login_form_shortcode
add_shortcode( 'kbs_login', 'kbs_login_form_shortcode' );

/**
 * Register Shortcode
 *
 * Shows a registration form allowing users to users to register for the site.
 *
 * @since	0.1
 * @param	arr		$atts		Shortcode attributes
 * @param	str		$content
 * @uses	kbs_register_form()
 * @return	str
 */
function kbs_register_form_shortcode( $atts, $content = null ) {
	extract( shortcode_atts( array(
			'redirect' => '',
		), $atts, 'kbs_register' )
	);
	return kbs_register_form( $redirect );
} // kbs_register_form_shortcode
add_shortcode( 'kbs_register', 'kbs_register_form_shortcode' );