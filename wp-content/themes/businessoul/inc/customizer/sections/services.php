<?php
/**
 * Services options.
 *
 * @package BusinesSoul
 */

$default = businessoul_get_default_theme_options();

// Services Section
$wp_customize->add_section( 'section_home_service',
	array(
		'title'      => __( 'Services Section', 'businessoul' ),
		'priority'   => 15,
		'capability' => 'edit_theme_options',
		'panel'      => 'home_page_panel',
		)
);

$wp_customize->add_setting( 'theme_options[disable_services_section]',
	array(
		'default'           => $default['disable_services_section'],
		'type'              => 'theme_mod',
		'capability'        => 'edit_theme_options',
		'sanitize_callback' => 'businessoul_sanitize_switch_control',
	)
);
$wp_customize->add_control( new BusinesSoul_Switch_Control( $wp_customize, 'theme_options[disable_services_section]',
    array(
		'label' 			=> __('Enable/Disable Service Section', 'businessoul'),
		'section'    		=> 'section_home_service',
		 'settings'  		=> 'theme_options[disable_services_section]',
		'on_off_label' 		=> businessoul_switch_options(),
    )
) );

//Services Section title
$wp_customize->add_setting('theme_options[service_title]', 
	array(
	'default'           => $default['service_title'],
	'type'              => 'theme_mod',
	'capability'        => 'edit_theme_options',	
	'sanitize_callback' => 'sanitize_text_field'
	)
);

$wp_customize->add_control('theme_options[service_title]', 
	array(
	'label'       => __('Section Title', 'businessoul'),
	'section'     => 'section_home_service',   
	'settings'    => 'theme_options[service_title]',
	'active_callback' => 'businessoul_services_active',		
	'type'        => 'text'
	)
);

//Services Section Subtitle
$wp_customize->add_setting('theme_options[service_subtitle]', 
	array(
	'default'           => $default['service_subtitle'],
	'type'              => 'theme_mod',
	'capability'        => 'edit_theme_options',	
	'sanitize_callback' => 'sanitize_text_field'
	)
);

$wp_customize->add_control('theme_options[service_subtitle]', 
	array(
	'label'       => __('Section Sub Title', 'businessoul'),
	'section'     => 'section_home_service',   
	'settings'    => 'theme_options[service_subtitle]',
	'active_callback' => 'businessoul_services_active',		
	'type'        => 'text'
	)
);

// pricing number control and setting
$wp_customize->add_setting( 'theme_options[services_seperator_image]', array(
	'sanitize_callback' => 'esc_url_raw',
) );

$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'theme_options[services_seperator_image]', array(
	'label'             => esc_html__( 'Seperator Image', 'businessoul' ),
	'section'           => 'section_home_service',
	'active_callback'   => 'businessoul_services_seperator_image',
) ) );


//icon disable
$wp_customize->add_setting( 'theme_options[disable_services_icon]',
	array(
		// 'default'           => $default['disable_services_icon'],
		'type'              => 'theme_mod',
		'capability'        => 'edit_theme_options',
		'sanitize_callback' => 'businessoul_sanitize_switch_control',
	)
);
$wp_customize->add_control( new BusinesSoul_Switch_Control( $wp_customize, 'theme_options[disable_services_icon]',
    array(
		'label' 			=> __('Enable/Disable Service icons', 'businessoul'),
		'description' => __('If Services icons is disable then features image is enable', 'businessoul'),
		'section'    		=> 'section_home_service',
		 'settings'  		=> 'theme_options[disable_services_icon]',
		 'active_callback' => 'businessoul_services_active',
		'on_off_label' 		=> businessoul_switch_options(),
    )
) );

for( $i=1; $i<=6; $i++ ){

		//Services Section icon
	$wp_customize->add_setting('theme_options[service_icon_'.$i.']', 
		array(
		'type'              => 'theme_mod',
		'capability'        => 'edit_theme_options',	
		'sanitize_callback' => 'sanitize_text_field'
		)
	);

	$wp_customize->add_control('theme_options[service_icon_'.$i.']', 
		array(
		'label'       => sprintf( __('Icon #%1$s', 'businessoul'), $i),
		'description' => sprintf( __('Please input icon as eg: fa-archive. Find Font-awesome icons %1$shere%2$s', 'businessoul'), '<a href="' . esc_url( 'https://fontawesome.com/v4.7.0/cheatsheet/' ) . '" target="_blank">', '</a>' ),
		'section'     => 'section_home_service',   
		'settings'    => 'theme_options[service_icon_'.$i.']',
		'active_callback' => 'businessoul_services_icon_active',		
		'type'        => 'text'
		)
	);

	// Additional Information First Page
	$wp_customize->add_setting('theme_options[services_page_'.$i.']', 
		array(
		'type'              => 'theme_mod',
		'capability'        => 'edit_theme_options',	
		'sanitize_callback' => 'businessoul_dropdown_pages'
		)
	);

	$wp_customize->add_control('theme_options[services_page_'.$i.']', 
		array(
		'label'       => sprintf( __('Select Page #%1$s', 'businessoul'), $i),
		'section'     => 'section_home_service',   
		'settings'    => 'theme_options[services_page_'.$i.']',		
		'type'        => 'dropdown-pages',
		'active_callback' => 'businessoul_services_active',
		)
	);

	// service hr setting and control
	$wp_customize->add_setting( 'theme_options[service_hr_'. $i .']', array(
		'sanitize_callback' => 'sanitize_text_field'
	) );

	$wp_customize->add_control( new BusinesSoul_Customize_Horizontal_Line( $wp_customize, 'theme_options[service_hr_'. $i .']',
		array(
			'section'         => 'section_home_service',
			'active_callback' => 'businessoul_services_active',
			'type'			  => 'hr',
	) ) );
}

// Services Button Text
$wp_customize->add_setting('theme_options[services_btn_text]', 
	array(

	'type'              => 'theme_mod',
	'capability'        => 'edit_theme_options',	
	'sanitize_callback' => 'sanitize_text_field'
	)
);

$wp_customize->add_control('theme_options[services_btn_text]', 
	array(
	'label'       => __('Services Button Label', 'businessoul'),
	'section'     => 'section_home_service',   
	'settings'    => 'theme_options[services_btn_text]',	
	'active_callback' => 'businessoul_services_active',	
	'type'        => 'text'
	)
);

// Services Button Url
$wp_customize->add_setting('theme_options[services_btn_url]', 
	array(

	'type'              => 'theme_mod',
	'capability'        => 'edit_theme_options',	
	'sanitize_callback' => 'sanitize_text_field'
	)
);

$wp_customize->add_control('theme_options[services_btn_url]', 
	array(
	'label'       => __('Button Url', 'businessoul'),
	'section'     => 'section_home_service',   
	'settings'    => 'theme_options[services_btn_url]',	
	'active_callback' => 'businessoul_services_active',	
	'type'        => 'url'
	)
);
