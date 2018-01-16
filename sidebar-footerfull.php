<?php
/**
 * Sidebar setup for footer full.
 *
 * @package diamonde
 */

$container   = get_theme_mod( 'diamonde_container_type' );

?>

<?php if ( is_active_sidebar( 'footerfull' ) ) : ?>

	<!-- ******************* The Footer Full-width Widget Area ******************* -->

	<div class="wrapper" id="wrapper-footer-full">

		<div class="<?php echo esc_attr( $container ); ?>" id="footer-full-content" tabindex="-1">

            <h1 class="text-center">THANKS FOR VISITING</h1>
            <hr>

			<div class="row">



				<?php dynamic_sidebar( 'footerfull' ); ?>

			</div>

		</div>

	</div><!-- #wrapper-footer-full -->

<?php endif; ?>
