<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package lego
 */

if ( ! is_active_sidebar( 'foobar-widgets' ) ) {
	return;
}
?>


<div id="foobar-widget" class="widget-area" style="background-image:url('<?php if( get_field('foobar_widget_area') ):the_field('foobar_widget_area');endif; ?>')">
	<div class="center">
		<?php dynamic_sidebar( 'foobar-widgets' ); ?>
	</div>
</div><!-- #secondary -->


