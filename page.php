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

<article id="post-<?php the_ID(); ?>" <?php post_class( array( 'page-content' ) ); ?>>

	<?php pf_page_title(); ?>

	<?php pf_page_content(); ?>

</article>

<?php
get_footer();