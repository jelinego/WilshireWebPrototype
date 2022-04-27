<?php
/**
 * Project options.
 *
 * @package BusinesSoul
 */

$default = businessoul_get_default_theme_options();

// Project Section
$wp_customize->add_section( 'section_home_project',
	array(
		'title'      => __( ' Project Section', 'businessoul' ),
		'priority'   => 25,
		'capability' => 'edit_theme_options',
		'panel'      => 'home_page_panel',
		)
);

$wp_customize->add_setting( 'theme_options[disable_project_section]',
	array(
		'default'           => $default['disable_project_section'],
		'type'              => 'theme_mod',
		'capability'        => 'edit_theme_options',
		'sanitize_callback' => 'businessoul_sanitize_switch_control',
	)
);
$wp_customize->add_control( new BusinesSoul_Switch_Control( $wp_customize, 'theme_options[disable_project_section]',
    array(
		'label' 			=> __('Enable/Disable Project Section', 'businessoul'),
		'section'    		=> 'section_home_project',
		'settings'  		=> 'theme_options[disable_project_section]',
		'on_off_label' 		=> businessoul_switch_options(),
    )
) );

//Project Section title
$wp_customize->add_setting('theme_options[project_title]', 
	array(
	'default'           => $default['project_title'],
	'type'              => 'theme_mod',
	'capability'        => 'edit_theme_options',	
	'sanitize_callback' => 'sanitize_text_field'
	)
);

$wp_customize->add_control('theme_options[project_title]', 
	array(
	'label'       => __('Section Title', 'businessoul'),
	'section'     => 'section_home_project',   
	'settings'    => 'theme_options[project_title]',
	'active_callback' => 'businessoul_project_active',		
	'type'        => 'text'
	)
);

//Project Section title
$wp_customize->add_setting('theme_options[project_subtitle]', 
	array(
	'default'           => $default['project_subtitle'],
	'type'              => 'theme_mod',
	'capability'        => 'edit_theme_options',	
	'sanitize_callback' => 'sanitize_text_field'
	)
);

$wp_customize->add_control('theme_options[project_subtitle]', 
	array(
	'label'       => __('Section Sub Title', 'businessoul'),
	'section'     => 'section_home_project',   
	'settings'    => 'theme_options[project_subtitle]',
	'active_callback' => 'businessoul_project_active',		
	'type'        => 'text'
	)
);

// Setting  Project Category.
$wp_customize->add_setting( 'theme_options[project_category]',
	array(

	'capability'        => 'edit_theme_options',
	'sanitize_callback' => 'absint',
	)
);
$wp_customize->add_control(
	new businessoul_Dropdown_Taxonomies_Control( $wp_customize, 'theme_options[project_category]',
		array(
		'label'    => __( 'Select Category', 'businessoul' ),
		'section'  => 'section_home_project',
		'settings' => 'theme_options[project_category]',	
		'active_callback' => 'businessoul_project_active',		
		)
	)
);


// Project Button Text
$wp_customize->add_setting('theme_options[project_btn_text]', 
	array(

	'type'              => 'theme_mod',
	'capability'        => 'edit_theme_options',	
	'sanitize_callback' => 'sanitize_text_field'
	)
);

$wp_customize->add_control('theme_options[project_btn_text]', 
	array(
	'label'       => __('Project Button Label', 'businessoul'),
	'section'     => 'section_home_project',   
	'settings'    => 'theme_options[project_btn_text]',	
	'active_callback' => 'businessoul_project_active',	
	'type'        => 'text'
	)
);

// Project Button Url
$wp_customize->add_setting('theme_options[project_btn_url]', 
	array(

	'type'              => 'theme_mod',
	'capability'        => 'edit_theme_options',	
	'sanitize_callback' => 'sanitize_text_field'
	)
);

$wp_customize->add_control('theme_options[project_btn_url]', 
	array(
	'label'       => __('Button Url', 'businessoul'),
	'section'     => 'section_home_project',   
	'settings'    => 'theme_options[project_btn_url]',	
	'active_callback' => 'businessoul_project_active',	
	'type'        => 'url'
	)
);
