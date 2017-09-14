<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package lego
 */

if ( ! is_active_sidebar( 'video-widget' ) ) {
	return;
}
?>


<div id="video-widget" class="widget-area" style="background-image:url('<?php if( get_field('video_widget_area') ):the_field('video_widget_area');endif; ?>')">
	<div class="center">
		<?php dynamic_sidebar( 'video-widget' ); ?>
	</div>
</div><!-- #secondary -->	


