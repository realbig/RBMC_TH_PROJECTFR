<?php
/**
 * The theme's functions file that loads on EVERY page, used for uniform functionality.
 *
 * @since   0.1.0
 * @package ProjectFreedom
 */

// Don't load directly
if ( ! defined( 'ABSPATH' ) ) {
	die;
}

/**
 * Outputs phone number in a link.
 *
 * If on a mobile device, the number is output in a clickable, callable link. Otherwise, it's just text.
 *
 * @param array $atts Supplied shortcode attributes.
 */
add_shortcode( 'phone', function( $atts = array() ) {

	$phone = in_array( 'alternate', $atts ) ? '(810) 632-0596' : '(734) 240-2565';

	if ( wp_is_mobile() ) {
		return "<a href='tel:$phone'>$phone</a>";
	} else {
		return $phone;
	}
});
/**
 * Outputs email in a link.
 *
 * @param array $atts Supplied shortcode attributes.
 */
add_shortcode( 'email', function( $atts = array() ) {

	$email = in_array( 'alternate', $atts ) ? 'projectfreedom@comcast.net' : 'info@projectfreedommi.org';

	return "<a href='mailto:$email'>$email</a>";
});