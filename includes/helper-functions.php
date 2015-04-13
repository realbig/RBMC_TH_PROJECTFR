<?php
/**
 * Adds theme support for the theme.
 *
 * Feel free to remove any un-wanted support (most is already commented out)
 *
 * @since   0.1.0
 * @package ProjectFreedom
 */

// Don't load directly
if ( ! defined( 'ABSPATH' ) ) {
	die;
}

/**
 * Outputs the page title.
 *
 * @param string|bool $title Optional title to use.
 */
function pf_page_title( $title = false) {
	?>
	<div class="page-title">
		<h1>
			<?php echo $title ? $title : apply_filters( 'the_title', get_the_title() ); ?>
		</h1>
	</div>
<?php
}

/**
 * Outputs the page content.
 *
 * @param string|bool $content Optional content to use.
 */
function pf_page_content( $content = false ) {
	?>
	<div class="page-content">
		<?php echo $content ? $content : apply_filters( 'the_content', get_the_content() ); ?>
	</div>
<?php
}