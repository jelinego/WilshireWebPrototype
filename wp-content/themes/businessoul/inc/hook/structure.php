<?php
/**
 * Theme functions related to structure.
 *
 * This file contains structural hook functions.
 *
 * @package BusinesSoul
 */

if ( ! function_exists( 'businessoul_doctype' ) ) :
	/**
	 * Doctype Declaration.
	 *
	 * @since 1.0.0
	 */
function businessoul_doctype() {
	?><!DOCTYPE html> <html <?php language_attributes(); ?>><?php
}
endif;

add_action( 'businessoul_action_doctype', 'businessoul_doctype', 10 );


if ( ! function_exists( 'businessoul_head' ) ) :
	/**
	 * Header Codes.
	 *
	 * @since 1.0.0
	 */
function businessoul_head() {
	?>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
		<link rel="pingback" href="<?php echo esc_url( get_bloginfo( 'pingback_url' ) ); ?>">
	<?php endif; ?>
	<?php
}
endif;
add_action( 'businessoul_action_head', 'businessoul_head', 10 );

if ( ! function_exists( 'businessoul_page_start' ) ) :
	/**
	 * Add Skip to content.
	 *
	 * @since 1.0.0
	 */
	function businessoul_page_start() {
	?><div id="page" class="site"><a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'businessoul' ); ?></a><?php
	}
endif;

add_action( 'businessoul_action_before', 'businessoul_page_start', 10 );

if ( ! function_exists( 'businessoul_header_start' ) ) :
	/**
	 * Header Start.
	 *
	 * @since 1.0.0
	 */
	function businessoul_header_start() { ?>
		<header id="masthead" class="site-header nav-shrink" role="banner"><?php
	}
endif;
add_action( 'businessoul_action_before_header', 'businessoul_header_start' );

if ( ! function_exists( 'businessoul_header_end' ) ) :
	/**
	 * Header Start.
	 *
	 * @since 1.0.0
	 */
	function businessoul_header_end() {

		?></header> <!-- header ends here -->
<?php
	}
endif;
add_action( 'businessoul_action_header', 'businessoul_header_end', 15 );

if ( ! function_exists( 'businessoul_content_start' ) ) :
	/**
	 * Header End.
	 *
	 * @since 1.0.0
	 */
	function businessoul_content_start() { 
	?>
	<div id="content" class="site-content">
	<?php 

	}
endif;

add_action( 'businessoul_action_before_content', 'businessoul_content_start', 10 );

if ( ! function_exists( 'businessoul_footer_start' ) ) :
	/**
	 * Footer Start.
	 *
	 * @since 1.0.0
	 */
	function businessoul_footer_start() {
		if( !(is_home() || is_front_page()) ){
			echo '</div>';
		} ?>
		</div>
		<footer id="colophon" class="site-footer" role="contentinfo"><?php
		if ( true === businessoul_get_option('scroll_top_visible') ) : ?>
			<div class="backtotop"><i class="fa fa-chevron-up"></i></div>
		<?php endif;
	} 
endif;
add_action( 'businessoul_action_before_footer', 'businessoul_footer_start' );


if ( ! function_exists( 'businessoul_footer_end' ) ) :
	/**
	 * Footer End.
	 *
	 * @since 1.0.0
	 */
	function businessoul_footer_end() {?>
		</footer><?php
	}
endif;
add_action( 'businessoul_action_after_footer', 'businessoul_footer_end', 100 );

