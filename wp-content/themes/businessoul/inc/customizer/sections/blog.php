<?php
/**
 * Home Page Options.
 *
 * @package BusinesSoul
 */

$default = businessoul_get_default_theme_options();

// Latest Blog Section
$wp_customize->add_section( 'section_home_blog',
	array(
		'title'      => __( 'Blog Section', 'businessoul' ),
		'priority'   => 110,
		'capability' => 'edit_theme_options',
		'panel'      => 'home_page_panel',
		)
);


$wp_customize->add_setting( 'theme_options[disable_blog_section]',
	array(
		'default'           => $default['disable_blog_section'],
		'type'              => 'theme_mod',
		'capability'        => 'edit_theme_options',
		'sanitize_callback' => 'businessoul_sanitize_switch_control',
	)
);
$wp_customize->add_control( new BusinesSoul_Switch_Control( $wp_customize, 'theme_options[disable_blog_section]',
    array(
		'label' 	=> __('Disable Blog Section', 'businessoul'),
		'section'    			=> 'section_home_blog',
		
		'on_off_label' 		=> businessoul_switch_options(),
    )
) );


// Blog title
$wp_customize->add_setting('theme_options[blog_title]', 
	array(
	'default'           => $default['blog_title'],
	'type'              => 'theme_mod',
	'capability'        => 'edit_theme_options',	
	'sanitize_callback' => 'sanitize_text_field'
	)
);

$wp_customize->add_control('theme_options[blog_title]', 
	array(
	'label'       => __('Section Title', 'businessoul'),
	'section'     => 'section_home_blog',   
	'settings'    => 'theme_options[blog_title]',	
	'active_callback' => 'businessoul_blog_active',		
	'type'        => 'text'
	)
);

// Blog title
$wp_customize->add_setting('theme_options[blog_subtitle]', 
	array(
	'default'           => $default['blog_subtitle'],
	'type'              => 'theme_mod',
	'capability'        => 'edit_theme_options',	
	'sanitize_callback' => 'sanitize_text_field'
	)
);

$wp_customize->add_control('theme_options[blog_subtitle]', 
	array(
	'label'       => __('Section Sub Title', 'businessoul'),
	'section'     => 'section_home_blog',   
	'settings'    => 'theme_options[blog_subtitle]',	
	'active_callback' => 'businessoul_blog_active',		
	'type'        => 'text'
	)
);

// Setting  Blog Category.
$wp_customize->add_setting( 'theme_options[blog_category]',
	array(
	'capability'        => 'edit_theme_options',
	'sanitize_callback' => 'absint',
	)
);
$wp_customize->add_control(
	new businessoul_Dropdown_Taxonomies_Control( $wp_customize, 'theme_options[blog_category]',
		array(
		'label'    => __( 'Select Category', 'businessoul' ),
		'section'  => 'section_home_blog',
		'settings' => 'theme_options[blog_category]',	
		'active_callback' => 'businessoul_blog_active',		
		)
	)
);

// Blog Button Text
$wp_customize->add_setting('theme_options[blog_btn_text]', 
	array(

	'type'              => 'theme_mod',
	'capability'        => 'edit_theme_options',	
	'sanitize_callback' => 'sanitize_text_field'
	)
);

$wp_customize->add_control('theme_options[blog_btn_text]', 
	array(
	'label'       => __('Blog Button Label', 'businessoul'),
	'section'     => 'section_home_blog',   
	'settings'    => 'theme_options[blog_btn_text]',	
	'active_callback' => 'businessoul_blog_active',	
	'type'        => 'text'
	)
);

// Blog Button Url
$wp_customize->add_setting('theme_options[blog_btn_url]', 
	array(

	'type'              => 'theme_mod',
	'capability'        => 'edit_theme_options',	
	'sanitize_callback' => 'sanitize_text_field'
	)
);

$wp_customize->add_control('theme_options[blog_btn_url]', 
	array(
	'label'       => __('Button Url', 'businessoul'),
	'section'     => 'section_home_blog',   
	'settings'    => 'theme_options[blog_btn_url]',	
	'active_callback' => 'businessoul_blog_active',	
	'type'        => 'url'
	)
);
