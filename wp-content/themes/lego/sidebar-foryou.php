<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package lego
 */

if ( ! is_active_sidebar( 'foryou-widgets' ) ) {
	return;
}
?>


<div id="foryou-widget" class="widget-area" style="background-image:url('<?php if( get_field('foryou_widget_area') ):the_field('foryou_widget_area');endif; ?>')">
	<div class="center">
		<?php dynamic_sidebar( 'foryou-widgets' ); ?>
	</div>
</div><!-- #secondary -->


