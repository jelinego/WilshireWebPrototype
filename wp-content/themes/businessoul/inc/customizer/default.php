<?php
/**
 * Default theme options.
 *
 * @package BusinesSoul
 */

if ( ! function_exists( 'businessoul_get_default_theme_options' ) ) :

	/**
	 * Get default theme options.
	 *
	 * @since 1.0.0
	 *
	 * @return array Default theme options.
	 */
function businessoul_get_default_theme_options() {

	$theme_data = wp_get_theme();
	$defaults = array();

	$defaults['disable_homepage_content_section'] 			= True;
    $defaults['disable_header_background_section'] = false;
    $defaults['header_layout_option'] 	= 'header-design-three';



    $defaults['header_text_transform_options'] 	= 'none';
    $defaults['header_text_decoration_options'] 	= 'none';
    $defaults['header_font_style_options'] 	= 'none';
    $defaults['header_text_design'] 	= true;

    $defaults['home_page_layout_content_type']  = 'home-three';

	// Featured Slider Section
	$defaults['disable_featured-slider_section']	= false;
	$defaults['slider_layout_option']			= 'fullwidth-slider';
	$defaults['slider_content_position_option']			= 'left-position';
	$defaults['slider_speed']				= 800;
	$defaults['disable_white_overlay']		= false;
	$defaults['slider_content_enable']		= true;
	$defaults['disable_blog_banner_section']		= false;



	// Latest Posts Section

	$defaults['latest_posts_title']	   	 	= esc_html__( 'Recent New More Stories', 'businessoul' );
	$defaults['latest_posts_subtitle']	   	 	= esc_html__( 'Be Yourself!', 'businessoul' );
	$defaults['number_of_latest_posts_column']	= 1;
	$defaults['pagination_type']		= 'numeric';
	$defaults['latest_category_enable']		= true;
	$defaults['latest_posted_on_enable']		= true;
	$defaults['latest_author_enable']		= true;
	$defaults['latest_video_enable']		= true;

	//Cta Section	
	$defaults['disable_about_section']	   	= false;
	$defaults['about_section_title']		= esc_html__( 'About', 'businessoul' );
	$defaults['about_section_subtitle']		= esc_html__( 'A cultural icon is a person or artifact that is recognized by members of a culture or sub-culture as representing.', 'businessoul' );
	$defaults['about_btn_text']	   	 		= esc_html__( 'Read More', 'businessoul' );


	// Our Service Section
	$defaults['disable_services_section']	= false;
	$defaults['service_title']	   	 		= esc_html__( 'Our Services', 'businessoul' );
	$defaults['service_subtitle']	   	 	= esc_html__( 'A cultural icon is a person or artifact that is recognized by members of a culture or sub-culture as representing.', 'businessoul' );


	// Project Section
	$defaults['disable_project_section']	= false;
	$defaults['project_title']	   	 		= esc_html__( 'Our Project', 'businessoul' );
	$defaults['project_subtitle']	   	 	= esc_html__( 'A cultural icon is a person or artifact that is recognized by members of a culture or sub-culture as representing.', 'businessoul' );
	$defaults['number_of_project_column']	= 3;
	$defaults['number_of_project_items']	= 4;
	$defaults['project_content_type']		= 'project_page';

	// Testimonial Section
	$defaults['disable_testimonial_section']	= false;
	$defaults['testimonial_title']	   	 		= esc_html__( 'Happy Customer', 'businessoul' );
	$defaults['testimonial_subtitle']	   	 	= esc_html__( 'A cultural icon is a person or artifact that is recognized by members of a culture or sub-culture as representing.', 'businessoul' );

	// Blog Section
	$defaults['disable_blog_section']		= false;
	$defaults['blog_title']	   	 			= esc_html__( 'Latest Post', 'businessoul' ); 
	$defaults['blog_subtitle']	   	 	= esc_html__( 'A cultural icon is a person or artifact that is recognized by members of a culture or sub-culture as representing.', 'businessoul' );
	$defaults['blog_number']				= 3;
	$defaults['number_of_blog_column']		= 3;
	$defaults['blog_content_type']			= 'blog_category';
	$defaults['image_buttom']				= false;

	// Latest Section
	$defaults['disable_latest_section']		= true;
	$defaults['latest_title']	   	 		= esc_html__( 'Latest News', 'businessoul' );
	$defaults['latest_number']				= 3;
	$defaults['number_of_latest_column']		= 3;
	$defaults['latest_content_type']			= 'latest_category';


	// Single Post Option
	$defaults['single_post_category_enable']		= true;
	$defaults['single_post_posted_on_enable']		= true;
	$defaults['single_post_video_enable']		= true;
	$defaults['single_post_comment_enable']		= true;
	$defaults['single_post_pagination_enable']		= true;
	$defaults['single_post_image_enable']		= true;
	$defaults['single_post_header_image_enable']		= true;
	$defaults['single_post_header_image_as_header_image_enable']		= true;

	// Single Post Option
	$defaults['single_page_video_enable']		= true;
	$defaults['single_page_image_enable']		= true;
	$defaults['single_page_header_image_enable']		= true;
	$defaults['single_page_header_image_as_header_image_enable']		= true;
	
	$defaults['theme_typography']			=  'default';
	$defaults['body_theme_typography']		=  'default';

	//General Section
	$defaults['readmore_text']				= esc_html__('Read More','businessoul');
	$defaults['excerpt_length']				= 50;
	$defaults['layout_options_blog']			= 'no-sidebar';
	$defaults['layout_options_archive']			= 'no-sidebar';
	$defaults['layout_options_page']			= 'no-sidebar';	
	$defaults['layout_options_single']			= 'no-sidebar';	

	//Footer section 		
	$defaults['copyright_text']				= esc_html__( 'Copyright &copy; All rights reserved.', 'businessoul' );
	$defaults['powered_by_text']			= esc_html__( 'BusinesSoul by Sensational Theme', 'businessoul' );

	// Pass through filter.
	$defaults = apply_filters( 'businessoul_filter_default_theme_options', $defaults );
	return $defaults;
}

endif;

/**
*  Get theme options
*/
if ( ! function_exists( 'businessoul_get_option' ) ) :

	/**
	 * Get theme option
	 *
	 * @since 1.0.0
	 *
	 * @param string $key Option key.
	 * @return mixed Option value.
	 */
	function businessoul_get_option( $key ) {

		$default_options = businessoul_get_default_theme_options();
		if ( empty( $key ) ) {
			return;
		}

		$theme_options = (array)get_theme_mod( 'theme_options' );
		$theme_options = wp_parse_args( $theme_options, $default_options );

		$value = null;

		if ( isset( $theme_options[ $key ] ) ) {
			$value = $theme_options[ $key ];
		}

		return $value;

	}

endif;