<?php
/**
 * Testimonial options.
 *
 * @package BusinesSoul
 */

$default = businessoul_get_default_theme_options();

// Testimonial Section
$wp_customize->add_section( 'section_home_testimonial',
	array(
		'title'      => __( 'Testimonial Section', 'businessoul' ),
		'priority'   => 60,
		'capability' => 'edit_theme_options',
		'panel'      => 'home_page_panel',
		)
);

$wp_customize->add_setting( 'theme_options[disable_testimonial_section]',
	array(
		'default'           => $default['disable_testimonial_section'],
		'type'              => 'theme_mod',
		'capability'        => 'edit_theme_options',
		'sanitize_callback' => 'businessoul_sanitize_switch_control',
	)
);
$wp_customize->add_control( new BusinesSoul_Switch_Control( $wp_customize, 'theme_options[disable_testimonial_section]',
    array(
		'label' 			=> __('Enable/Disable Testimonial Section', 'businessoul'),
		'section'    		=> 'section_home_testimonial',
		'settings'  		=> 'theme_options[disable_testimonial_section]',
		'on_off_label' 		=> businessoul_switch_options(),
    )
) );

//Testimonial Section title
$wp_customize->add_setting('theme_options[testimonial_title]', 
	array(
	'default'           => $default['testimonial_title'],
	'type'              => 'theme_mod',
	'capability'        => 'edit_theme_options',	
	'sanitize_callback' => 'sanitize_text_field'
	)
);

$wp_customize->add_control('theme_options[testimonial_title]', 
	array(
	'label'       => __('Section Title', 'businessoul'),
	'section'     => 'section_home_testimonial',   
	'settings'    => 'theme_options[testimonial_title]',
	'active_callback' => 'businessoul_testimonial_active',		
	'type'        => 'text'
	)
);

//Testimonial Section title
$wp_customize->add_setting('theme_options[testimonial_subtitle]', 
	array(
	'default'           => $default['testimonial_subtitle'],
	'type'              => 'theme_mod',
	'capability'        => 'edit_theme_options',	
	'sanitize_callback' => 'sanitize_text_field'
	)
);

$wp_customize->add_control('theme_options[testimonial_subtitle]', 
	array(
	'label'       => __('Section Sub Title', 'businessoul'),
	'section'     => 'section_home_testimonial',   
	'settings'    => 'theme_options[testimonial_subtitle]',
	'active_callback' => 'businessoul_testimonial_active',		
	'type'        => 'text'
	)
);


// Testimonial background image control and setting
$wp_customize->add_setting( 'theme_options[testimonial_image]', array(
	'sanitize_callback' => 'esc_url_raw',
) );

$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'theme_options[testimonial_image]', array(
	'label'             => esc_html__( 'Background Image', 'businessoul' ),
	'section'           => 'section_home_testimonial',
	'active_callback'   => 'businessoul_testimonial_active',
) ) );


for( $i=1; $i<=3; $i++ ){

	// Additional Information First Page
	$wp_customize->add_setting('theme_options[testimonial_page_'.$i.']', 
		array(
		'type'              => 'theme_mod',
		'capability'        => 'edit_theme_options',	
		'sanitize_callback' => 'businessoul_dropdown_pages'
		)
	);

	$wp_customize->add_control('theme_options[testimonial_page_'.$i.']', 
		array(
		'label'       => sprintf( __('Select Page #%1$s', 'businessoul'), $i),
		'section'     => 'section_home_testimonial',   
		'settings'    => 'theme_options[testimonial_page_'.$i.']',		
		'type'        => 'dropdown-pages',
		'active_callback' => 'businessoul_testimonial_active',
		)
	);

}


// testimonial Button Text
$wp_customize->add_setting('theme_options[testimonial_btn_text]', 
	array(

	'type'              => 'theme_mod',
	'capability'        => 'edit_theme_options',	
	'sanitize_callback' => 'sanitize_text_field'
	)
);

$wp_customize->add_control('theme_options[testimonial_btn_text]', 
	array(
	'label'       => __('Testimonial Button Label', 'businessoul'),
	'section'     => 'section_home_testimonial',   
	'settings'    => 'theme_options[testimonial_btn_text]',	
	'active_callback' => 'businessoul_testimonial_active',	
	'type'        => 'text'
	)
);

// testimonial Button Url
$wp_customize->add_setting('theme_options[testimonial_btn_url]', 
	array(

	'type'              => 'theme_mod',
	'capability'        => 'edit_theme_options',	
	'sanitize_callback' => 'sanitize_text_field'
	)
);

$wp_customize->add_control('theme_options[testimonial_btn_url]', 
	array(
	'label'       => __('Button Url', 'businessoul'),
	'section'     => 'section_home_testimonial',   
	'settings'    => 'theme_options[testimonial_btn_url]',	
	'active_callback' => 'businessoul_testimonial_active',	
	'type'        => 'url'
	)
);
