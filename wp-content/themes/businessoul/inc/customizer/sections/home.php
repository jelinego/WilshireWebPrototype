<?php
/**
 * About options.
 *
 * @package BusinesSoul
 */

$default = businessoul_get_default_theme_options();

// About Section
$wp_customize->add_section( 'section_home_page_layout',
	array(
		'title'      => __( 'Home Page Layout', 'businessoul' ),
		'priority'   => 1,
		'capability' => 'edit_theme_options',
		'panel'      => 'home_page_panel',
		)
);


$wp_customize->add_setting('theme_options[home_page_layout_content_type]', 
	array(
	'default' 			=> $default['home_page_layout_content_type'],
	'type'              => 'theme_mod',
	'capability'        => 'edit_theme_options',	
	'sanitize_callback' => 'businessoul_sanitize_select'
	)
);

$wp_customize->add_control('theme_options[home_page_layout_content_type]', 
	array(
	'label'       => __('Home page layout Content Type', 'businessoul'),
	'section'     => 'section_home_page_layout',   
	'settings'    => 'theme_options[home_page_layout_content_type]',		
	'type'        => 'select',
	'choices'	  => array(
			'home-three'	  => __('Home One','businessoul'),
			'home-two'	  => __('Home Two','businessoul'),
		),
	)
);