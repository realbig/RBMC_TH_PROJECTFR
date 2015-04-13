<?php
/**
 * The theme's header file that appears on EVERY page.
 *
 * @since   0.1.0
 * @package ProjectFreedom
 */

// Don't load directly
if ( ! defined( 'ABSPATH' ) ) {
	die;
}
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">

	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

	<!--[if lt IE 9]>
	<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/vendor/js/html5.js"></script>
	<![endif]-->

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<div id="wrapper" class="off-canvas-wrap" data-offcanvas>
	<div class="inner-wrap">

		<header id="site-header">

			<h1 class="site-title">
				<a href="<?php bloginfo( 'url' ); ?>">
					<?php bloginfo( 'title' ); ?>

					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/flag.svg"
					     onerror="this.src='<?php echo get_template_directory_uri(); ?>/assets/images/flag.png';"
					     class="flag"/>
				</a>
				<p class="site-tagline">
					<?php bloginfo( 'description' ); ?>
				</p>
			</h1>

			<div class="sidebar-toggle">
				<a class="right-off-canvas-toggle icon-menu" href="#"></a>
			</div>

		</header>

		<?php get_sidebar(); ?>

		<section id="site-content">