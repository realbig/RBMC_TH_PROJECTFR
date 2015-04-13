<?php
/**
 * The theme's sidebar file, used for displaying the main sidebar.
 *
 * @since   0.1.0
 * @package ProjectFreedom
 */

// Don't load directly
if ( ! defined( 'ABSPATH' ) ) {
	die;
}
?>

<aside id="site-sidebar" class="right-off-canvas-menu">

	<header class="sidebar-header">
		<a class="right-off-canvas-toggle icon-cross" href="#"></a>
	</header>

	<?php
	wp_nav_menu( array(
		'theme_location'  => 'primary',
		'container_class' => 'site-nav',
		'container'       => 'nav',
		'depth'           => 1,
	) );
	?>


	<footer class="sidebar-footer">
		<div class="tagline">
			<p>"Free loans of equipment to keep partially disabled people independent in their own homes."</p>
		</div>

		<?php dynamic_sidebar( 'sidebar-bottom' ); ?>
	</footer>
</aside>