<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package BusinesSoul
 */

/**
 *
 * @hooked businessoul_mustread_section
 */
if (is_home()) {

	do_action( 'businessoul_action_mustread' );
}

/**
 *
 * @hooked businessoul_footer_start
 */
do_action( 'businessoul_action_before_footer' );

/**
 * Hooked - businessoul_footer_top_section -10
 * Hooked - businessoul_footer_section -20
 */
do_action( 'businessoul_action_footer' );

/**
 * Hooked - businessoul_footer_end. 
 */
do_action( 'businessoul_action_after_footer' );

wp_footer(); ?>

</body>  
</html>