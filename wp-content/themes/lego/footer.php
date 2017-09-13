<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package lego
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer">
		<div class="site-info">
			<div class="bottomMenu">
            	<?php wp_nav_menu( array( 'theme_location' => 'secondary' ) ); ?>  
    		</div>
    		<div class="bottomMenu">
            	<?php wp_nav_menu( array( 'theme_location' => 'secondary' ) ); ?>  
    		</div>
    		<div class="bottomMenu">
            	<?php wp_nav_menu( array( 'theme_location' => 'secondary' ) ); ?>  
    		</div>
    		<div class="bottomMenu">
            	<?php wp_nav_menu( array( 'theme_location' => 'secondary' ) ); ?>  
    		</div>


    		<div class="legal">
    			<ul>
    				<li>
    					<a href="#">Cookies</a>
    				</li>
    				<li>
    					<a href="#">Legal Notice</a>
    				</li>
    			</ul>

	    		<p>LEGO, LEGO logo, Minifiguren, DUPLO, BIONICLE, LEGENDS OF CHIMA, FRIENDS logo, MINIFIGURES logo, DIMENSIONS, MINDSTORMS, MIXELS, NINJAGO og NEXO KNIGHTS er LEGO Gruppens varemærker. ©2017 The LEGO Group.</p>
    		</div>
    		
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
