<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package lego
 */

if ( ! is_active_sidebar( 'frontpage-widgets' ) ) {
	return;
}
?>


<div id="homepage-widget" class="widget-area">
	<?php dynamic_sidebar( 'frontpage-widgets' ); ?>
</div><!-- #secondary -->
