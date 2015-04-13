<?php
/**
 * The theme's page file use for displaying pages.
 *
 * @since 0.1.0
 * @package ProjectFreedom
 */

// Don't load directly
if ( ! defined( 'ABSPATH' ) ) {
	die;
}

get_header();

the_post();
?>

<article id="error-404">

	<?php pf_page_title( '404 - Page not found'); ?>

	<?php pf_page_content( 'Sorry, but it seems that this page does not exist.'); ?>

</article>

<?php
get_footer();