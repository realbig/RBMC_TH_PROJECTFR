<?php
/**
 * The theme's front-page file use for displaying the home page.
 *
 * @since 0.1.0
 * @package ProjectFreedom
 */

// Don't load directly
if ( ! defined( 'ABSPATH' ) ) {
	die;
}

global $pf_home_meta_boxes;

get_header();

the_post();
?>

	<article id="post-<?php the_ID(); ?>" <?php post_class( array( 'page-content' ) ); ?>>

		<?php pf_page_title(); ?>

		<?php
		foreach ( $pf_home_meta_boxes as $box_ID => $box_name ) :

			$meta = get_post_meta( get_the_ID(), $box_ID, true );
			?>
			<h2 class="home-box-title"><?php echo $box_name; ?></h2>
			<div class="home-box <?php echo $box_ID; ?>">
				<?php echo apply_filters( 'the_content', $meta ); ?>
			</div>
			<?php
		endforeach;
		?>

	</article>

<?php
get_footer();