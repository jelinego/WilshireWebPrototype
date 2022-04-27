<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package BusinesSoul
 */
/**
* Hook - businessoul_action_doctype.
*
* @hooked businessoul_doctype -  10
*/
do_action( 'businessoul_action_doctype' );
?>
<head>
<?php
/**
* Hook - businessoul_action_head.
*
* @hooked businessoul_head -  10
*/
do_action( 'businessoul_action_head' );
?>

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php do_action( 'wp_body_open' ); ?>
<?php

/**
* Hook - businessoul_action_before.
*
* @hooked businessoul_page_start - 10
*/
do_action( 'businessoul_action_before' );

/**
*
* @hooked businessoul_header_start - 10
*/
do_action( 'businessoul_action_before_header' );

/**
*
*@hooked businessoul_site_branding - 10
*@hooked businessoul_header_end - 15 
*/
do_action('businessoul_action_header');

/**
*
* @hooked businessoul_content_start - 10
*/
do_action( 'businessoul_action_before_content' );

/**
 * Banner start
 * 
 * @hooked businessoul_banner_header - 10
*/
do_action( 'businessoul_banner_header' );  
