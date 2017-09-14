<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package lego
 */

if ( ! is_active_sidebar( 'selected-widgets' ) ) {
	return;
}
?>


<div id="selected-widget" class="widget-area" style="background-image:url('<?php if( get_field('selected_widget_area') ):the_field('selected_widget_area');endif; ?>')">
	<div class="center">
		<?php dynamic_sidebar( 'selected-widgets' ); ?>
	</div>
</div><!-- #secondary -->


