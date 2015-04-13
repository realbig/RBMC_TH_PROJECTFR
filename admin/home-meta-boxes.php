<?php
/**
 * Adds meta boxes to the Home page.
 *
 * @since   0.1.0
 * @package ProjectFreedom
 */

// Don't load directly
if ( ! defined( 'ABSPATH' ) ) {
	die;
}

$pf_home_meta_boxes = array(
	'home_boxes_problem' => 'The Problem',
	'home_boxes_solution' => 'The Solution',
	'home_boxes_donor' => 'The Donor',
	'home_boxes_process' => 'The Process',
);

add_action( 'add_meta_boxes', function ( $posttype, $post ) {

	if ( $post->post_title != 'Home' ) {
		return;
	}

	add_meta_box(
		$id = 'home-boxes',
		$title = 'Home Boxes',
		$callback = '_pf_metaboxes_home_boxes',
		$page = 'page',
		$context = 'advanced',
		$priority = 'default'
	);
}, 10, 2 );

function _pf_metaboxes_home_boxes( $object ) {

	global $pf_home_meta_boxes;

	wp_nonce_field( basename( __FILE__ ), 'home_boxes_nonce' );

	foreach ( $pf_home_meta_boxes as $box_ID => $box_name ) : ?>

		<p>
			<label>
				<?php echo $box_name; ?>:
			<textarea class="widefat" style="height: 100px" name="<?php echo $box_ID; ?>"
			          id="<?php echo $box_ID; ?>"><?php echo esc_attr( get_post_meta( $object->ID, $box_ID, true ) ); ?></textarea>
			</label>
		</p>

	<?php endforeach;
}

add_action( 'save_post', function ( $post_id, $post ) {

	global $pf_home_meta_boxes;

	if ( ! isset( $_POST['home_boxes_nonce'] ) ||
	     ! wp_verify_nonce( $_POST['home_boxes_nonce'], basename( __FILE__ ) )
	) {
		return $post_id;
	}

	$post_type = get_post_type_object( $post->post_type );
	if ( ! current_user_can( $post_type->cap->edit_post, $post_id ) ) {
		return $post_id;
	}

	foreach ( $pf_home_meta_boxes as $box_ID => $box_name ) {

		$new_meta_value = isset( $_POST[$box_ID] ) ? $_POST[$box_ID] : '';

		$meta_value = get_post_meta( $post_id, $box_ID, true );

		if ( $new_meta_value && $meta_value == '') {

			add_post_meta( $post_id, $box_ID, $new_meta_value, true );

		} elseif ( $new_meta_value && $new_meta_value != $meta_value ) {

			update_post_meta( $post_id, $box_ID, $new_meta_value );

		} elseif ( '' == $new_meta_value && $meta_value ) {

			delete_post_meta( $post_id, $box_ID, $meta_value );

		}
	}
}, 10, 2 );