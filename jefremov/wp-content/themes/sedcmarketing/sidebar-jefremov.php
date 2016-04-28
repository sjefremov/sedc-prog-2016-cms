<?php
/**
 * The template for the sidebar containing the main widget area
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
?>

<?php if ( is_active_sidebar( 'sidebar-jefremov' )  ) : ?>
	<aside id="secondary" class="sidebar widget-area sidebar-jefremov" role="complementary">
		<?php dynamic_sidebar( 'sidebar-jefremov' ); ?>
	</aside><!-- .sidebar .widget-area -->
<?php endif; ?>
