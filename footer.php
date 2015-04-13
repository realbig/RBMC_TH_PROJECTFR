<?php
/**
 * The theme's footer file that appears on EVERY page.
 *
 * @since   0.1.0
 * @package ProjectFreedom
 */

// Don't load directly
if ( ! defined( 'ABSPATH' ) ) {
	die;
}
?>

<img src="<?php echo get_template_directory_uri(); ?>/assets/images/bottomlogo.gif" class="bottom-image"/>

<?php // #site-content ?>
</section>

<?php // .inner-wrap ?>
</div>

<?php // #wrapper ?>
</div>

<?php wp_footer(); ?>

</body>
</html>