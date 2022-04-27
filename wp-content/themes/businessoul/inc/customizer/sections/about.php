<?php
/**
 * About options.
 *
 * @package BusinesSoul
 */

$default = businessoul_get_default_theme_options();

// About Section
$wp_customize->add_section( 'section_home_about',
	array(
		'title'      => __( 'About Section', 'businessoul' ),
		'priority'   => 20,
		'capability' => 'edit_theme_options',
		'panel'      => 'home_page_panel',
		)
);

$wp_customize->add_setting( 'theme_options[disable_about_section]',
	array(
		'default'           => $default['disable_about_section'],
		'type'              => 'theme_mod',
		'capability'        => 'edit_theme_options',
		'sanitize_callback' => 'businessoul_sanitize_switch_control',
	)
);
$wp_customize->add_control( new BusinesSoul_Switch_Control( $wp_customize, 'theme_options[disable_about_section]',
    array(
		'label' 			=> __('Enable/Disable About Section', 'businessoul'),
		'section'    		=> 'section_home_about',
		 'settings'  		=> 'theme_options[disable_about_section]',
		'on_off_label' 		=> businessoul_switch_options(),
    )
) );

// About section title setting and control
$wp_customize->add_setting( 'theme_options[about_section_title]', array(
	'default'           => $default['about_section_title'],
	'sanitize_callback' => 'sanitize_text_field',
) );

$wp_customize->add_control( 'theme_options[about_section_title]', array(
	'label'           	=>  __( 'Section Title ', 'businessoul' ), 
	'section'        	=> 'section_home_about',	
	'active_callback' 	=> 'businessoul_about_active',
	'type'				=> 'text',
) );

// About  subtitle setting and control
$wp_customize->add_setting( 'theme_options[about_section_subtitle]', array(
	'default'           => $default['about_section_subtitle'],
	'sanitize_callback' => 'sanitize_text_field',
) );

$wp_customize->add_control( 'theme_options[about_section_subtitle]', array(
	'label'           	=>  __( 'Section SubTitle ', 'businessoul' ), 
	'section'        	=> 'section_home_about',	
	'active_callback' 	=> 'businessoul_about_active',
	'type'				=> 'text',
) );


// Additional Information First Page
$wp_customize->add_setting('theme_options[about_page]', 
	array(
	'type'              => 'theme_mod',
	'capability'        => 'edit_theme_options',	
	'sanitize_callback' => 'businessoul_dropdown_pages'
	)
);

$wp_customize->add_control('theme_options[about_page]', 
	array(
	'label'       => __('Select Page businessoul', 'businessoul'),
	'section'     => 'section_home_about',   
	'settings'    => 'theme_options[about_page]',		
	'type'        => 'dropdown-pages',
	'active_callback' => 'businessoul_about_active',
	)
);

// About Button Text
$wp_customize->add_setting('theme_options[about_btn_text]', 
	array(
	'default'           => $default['about_btn_text'],
	'type'              => 'theme_mod',
	'capability'        => 'edit_theme_options',	
	'sanitize_callback' => 'sanitize_text_field'
	)
);

$wp_customize->add_control('theme_options[about_btn_text]', 
	array(
	'label'       => __('Button Label', 'businessoul'),
	'section'     => 'section_home_about',   
	'settings'    => 'theme_options[about_btn_text]',	
	'active_callback' => 'businessoul_about_active',	
	'type'        => 'text'
	)
);
