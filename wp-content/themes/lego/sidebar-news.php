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


<div id="homepage-widget" class="widget-area" style="background-image:url('<?php if( get_field('news_widget_area') ):the_field('news_widget_area');endif; ?>')">
	<div class="center">
		<?php dynamic_sidebar( 'frontpage-widgets' ); ?>
	</div>
</div><!-- #secondary -->


