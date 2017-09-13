<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package lego
 */

if ( ! is_active_sidebar( 'shop-widget' ) ) {
	return;
}
?>


<div id="shop-widget" class="widget-area" style="background-image:url('<?php if( get_field('shop_widget_area') ):the_field('shop_widget_area');endif; ?>')">
	<div class="center">
		<?php dynamic_sidebar( 'shop-widget' ); ?>
	</div>
</div><!-- #secondary -->


