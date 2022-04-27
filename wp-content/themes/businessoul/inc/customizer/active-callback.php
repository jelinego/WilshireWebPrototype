<?php
/**
 * Active callback functions.
 *
 * @package BusinesSoul
 */

function businessoul_header_background_active( $control ) {
    if( $control->manager->get_setting( 'theme_options[disable_header_background_section]' )->value() == true ) {
        return true;
    }else{
        return false;
    }
}

function businessoul_counter_section( $control ) {
    if( $control->manager->get_setting( 'theme_options[disable_counter_section]' )->value() == true ) {
        return true;
    }else{
        return false;
    }
}

function businessoul_client_section( $control ) {
    if( $control->manager->get_setting( 'theme_options[disable_client_section]' )->value() == true ) {
        return true;
    }else{
        return false;
    }
}


function businessoul_testimonial_active( $control ) {
    if( $control->manager->get_setting( 'theme_options[disable_testimonial_section]' )->value() == true ) {
        return true;
    }else{
        return false;
    }
}

function businessoul_testimonial_custom( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[testimonial_content_type]' )->value();
    return ( businessoul_testimonial_active( $control ) && ( 'testimonial_custom' == $content_type ) );
} 

function businessoul_testimonial_page( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[testimonial_content_type]' )->value();
    return ( businessoul_testimonial_active( $control ) && ( 'testimonial_page' == $content_type ) );
}

function businessoul_testimonial_post( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[testimonial_content_type]' )->value();
    return ( businessoul_testimonial_active( $control ) && ( 'testimonial_post' == $content_type ) );
}

function businessoul_testimonial_category( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[testimonial_content_type]' )->value();
    return ( businessoul_testimonial_active( $control ) && ( 'testimonial_category' == $content_type ) );
}

function businessoul_gallery_active( $control ) {
    if( $control->manager->get_setting( 'theme_options[disable_gallery_section]' )->value() == true ) {
        return true;
    }else{
        return false;
    }
}

function businessoul_gallery_custom( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[gallery_content_type]' )->value();
    return ( businessoul_gallery_active( $control ) && ( 'gallery_custom' == $content_type ) );
} 

function businessoul_gallery_page( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[gallery_content_type]' )->value();
    return ( businessoul_gallery_active( $control ) && ( 'gallery_page' == $content_type ) );
}

function businessoul_gallery_post( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[gallery_content_type]' )->value();
    return ( businessoul_gallery_active( $control ) && ( 'gallery_post' == $content_type ) );
}

function businessoul_gallery_category( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[gallery_content_type]' )->value();
    return ( businessoul_gallery_active( $control ) && ( 'gallery_category' == $content_type ) );
}
//================Information Section==================//

function businessoul_information_active( $control ) {
    if( $control->manager->get_setting( 'theme_options[disable_information_section]' )->value() == true ) {
        return true;
    }else{
        return false;
    }
}

function businessoul_information_custom( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[information_content_type]' )->value();
    return ( businessoul_information_active( $control ) && ( 'information_custom' == $content_type ) );
} 

function businessoul_information_page( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[information_content_type]' )->value();
    return ( businessoul_information_active( $control ) && ( 'information_page' == $content_type ) );
}

function businessoul_information_post( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[information_content_type]' )->value();
    return ( businessoul_information_active( $control ) && ( 'information_post' == $content_type ) );
}

function businessoul_information_category( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[information_content_type]' )->value();
    return ( businessoul_information_active( $control ) && ( 'information_category' == $content_type ) );
}


function businessoul_project_active( $control ) {
    if( $control->manager->get_setting( 'theme_options[disable_project_section]' )->value() == true ) {
        return true;
    }else{
        return false;
    }
}



function businessoul_project_custom( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[project_content_type]' )->value();
    return ( businessoul_project_active( $control ) && ( 'project_custom' == $content_type ) );
} 

function businessoul_project_page( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[project_content_type]' )->value();
    return ( businessoul_project_active( $control ) && ( 'project_page' == $content_type ) );
}

function businessoul_project_post( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[project_content_type]' )->value();
    return ( businessoul_project_active( $control ) && ( 'project_post' == $content_type ) );
}

function businessoul_project_category( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[project_content_type]' )->value();
    return ( businessoul_project_active( $control ) && ( 'project_category' == $content_type ) );
}



function businessoul_pricing_section( $control ) {
    if( $control->manager->get_setting( 'theme_options[disable_pricing_section]' )->value() == true ) {
        return true;
    }else{
        return false;
    }
}



function businessoul_team_active( $control ) {
    if( $control->manager->get_setting( 'theme_options[disable_team_section]' )->value() == true ) {
        return true;
    }else{
        return false;
    }
}

function businessoul_team_custom( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[team_content_type]' )->value();
    return ( businessoul_team_active( $control ) && ( 'team_custom' == $content_type ) );
} 

function businessoul_team_page( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[team_content_type]' )->value();
    return ( businessoul_team_active( $control ) && ( 'team_page' == $content_type ) );
}

function businessoul_team_post( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[team_content_type]' )->value();
    return ( businessoul_team_active( $control ) && ( 'team_post' == $content_type ) );
}

function businessoul_team_category( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[team_content_type]' )->value();
    return ( businessoul_team_active( $control ) && ( 'team_category' == $content_type ) );
}



function businessoul_services_active( $control ) {
    if( $control->manager->get_setting( 'theme_options[disable_services_section]' )->value() == true ) {
        return true;
    }else{
        return false;
    }
}

function businessoul_services_page( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[service_content_type]' )->value();
    return ( businessoul_services_active( $control ) && ( 'service_page' == $content_type ) );
}

function businessoul_services_post( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[service_content_type]' )->value();
    return ( businessoul_services_active( $control ) && ( 'service_post' == $content_type ) );
}

function businessoul_services_category( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[service_content_type]' )->value();
    return ( businessoul_services_active( $control ) && ( 'service_category' == $content_type ) );
}

function businessoul_services_custom( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[service_content_type]' )->value();
    return ( businessoul_services_active( $control ) && ( 'service_custom' == $content_type ) );
}

function businessoul_services_seperator( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[service_content_type]' )->value();
    return  businessoul_services_seperator( $control ) && ( in_array( $content_type, array( 'service_page', 'service_post', 'service_custom' ) ) ) ;
}

function businessoul_services_seperator_image( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[home_page_layout_content_type]' )->value();
    return ( businessoul_services_active( $control ) && ( 'home-two' == $content_type ) );
}

function businessoul_services_icon_active( $control ) {
    if(($control->manager->get_setting( 'theme_options[disable_services_icon]' )->value() == true ) ) {
        return true;
    }else{
        return false;
    }
}


function businessoul_features_active( $control ) {
    if( $control->manager->get_setting( 'theme_options[disable_features_section]' )->value() == true ) {
        return true;
    }else{
        return false;
    }
}

function businessoul_features_page( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[features_content_type]' )->value();
    return ( businessoul_features_active( $control ) && ( 'features_page' == $content_type ) );
}

function businessoul_features_post( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[features_content_type]' )->value();
    return ( businessoul_features_active( $control ) && ( 'features_post' == $content_type ) );
}

function businessoul_features_category( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[features_content_type]' )->value();
    return ( businessoul_features_active( $control ) && ( 'features_category' == $content_type ) );
}

function businessoul_features_custom( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[features_content_type]' )->value();
    return ( businessoul_features_active( $control ) && ( 'features_custom' == $content_type ) );
}

function businessoul_features_seperator( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[features_content_type]' )->value();
    return  businessoul_features_seperator( $control ) && ( in_array( $content_type, array( 'features_page', 'features_post', 'features_custom' ) ) ) ;
}

function businessoul_features_icon( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[home_page_layout_content_type]' )->value();
    return ( businessoul_features_active( $control ) && ( 'home-two' == $content_type || 'home-three' == $content_type  ) );
}



function businessoul_about_active( $control ) {
    if( $control->manager->get_setting( 'theme_options[disable_about_section]' )->value() == true ) {
        return true;
    }else{
        return false;
    }
}

function businessoul_about_custom( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[about_content_type]' )->value();
    return ( businessoul_about_active( $control ) && ( 'about_custom' == $content_type ) );
} 

function businessoul_about_page( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[about_content_type]' )->value();
    return ( businessoul_about_active( $control ) && ( 'about_page' == $content_type ) );
}

function businessoul_about_post( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[about_content_type]' )->value();
    return ( businessoul_about_active( $control ) && ( 'about_post' == $content_type ) );
}


function businessoul_slider_active( $control ) {
    if( $control->manager->get_setting( 'theme_options[disable_featured-slider_section]' )->value() == true ) {
        return true;
    }else{
        return false;
    }
}

function businessoul_slider_page( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[sr_content_type]' )->value();
    return ( businessoul_slider_active( $control ) && ( 'sr_page' == $content_type ) );
}

function businessoul_slider_post( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[sr_content_type]' )->value();
    return ( businessoul_slider_active( $control ) && ( 'sr_post' == $content_type ) );
}

function businessoul_slider_seperator( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[sr_content_type]' )->value();
    return  businessoul_slider_seperator( $control ) && ( in_array( $content_type, array( 'sr_page', 'sr_post', 'sr_custom' ) ) ) ;
}

function businessoul_slider_custom( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[sr_content_type]' )->value();
    return ( businessoul_slider_active( $control ) && ( 'sr_custom' == $content_type ) );
}

function businessoul_slider_category( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[sr_content_type]' )->value();
    return ( businessoul_slider_active( $control ) && ( 'sr_category' == $content_type ) );
}




function businessoul_cta_active( $control ) {
    if( $control->manager->get_setting( 'theme_options[disable_cta_section]' )->value() == true ) {
        return true;
    }else{
        return false;
    }
}

function businessoul_cta_custom( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[cta_content_type]' )->value();
    return ( businessoul_cta_active( $control ) && ( 'cta_custom' == $content_type ) );
} 

function businessoul_cta_page( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[cta_content_type]' )->value();
    return ( businessoul_cta_active( $control ) && ( 'cta_page' == $content_type ) );
}

function businessoul_cta_post( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[cta_content_type]' )->value();
    return ( businessoul_cta_active( $control ) && ( 'cta_post' == $content_type ) );
}


function businessoul_shopproduct_active( $control ) {
    if( $control->manager->get_setting( 'theme_options[disable_shopproduct_section]' )->value() == true ) {
        return true;
    }else{
        return false;
    }
}

function businessoul_shopproduct_page( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[shopproduct_content_type]' )->value();
    return ( businessoul_shopproduct_active( $control ) && ( 'shopproduct_page' == $content_type ) );
}

function businessoul_shopproduct_post( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[shopproduct_content_type]' )->value();
    return ( businessoul_shopproduct_active( $control ) && ( 'shopproduct_post' == $content_type ) );
}

function businessoul_shopproduct_category( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[shopproduct_content_type]' )->value();
    return ( businessoul_shopproduct_active( $control ) && ( 'shopproduct_category' == $content_type ) );
}

function businessoul_shopproduct_product( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[shopproduct_content_type]' )->value();
    return ( businessoul_shopproduct_active( $control ) && ( 'product' == $content_type ) );
}

function businessoul_shopproduct_seperator( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[shopproduct_content_type]' )->value();
    return  businessoul_shopproduct_seperator( $control ) && ( in_array( $content_type, array( 'shopproduct_page', 'shopproduct_post', 'shopproduct_custom' ) ) ) ;
}


function businessoul_blog_active( $control ) {
    if( $control->manager->get_setting( 'theme_options[disable_blog_section]' )->value() == true ) {
        return true;
    }else{
        return false;
    }
}

function businessoul_blog_page( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[blog_content_type]' )->value();
    return ( businessoul_blog_active( $control ) && ( 'blog_page' == $content_type ) );
}

function businessoul_blog_post( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[blog_content_type]' )->value();
    return ( businessoul_blog_active( $control ) && ( 'blog_post' == $content_type ) );
}

function businessoul_blog_category( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[blog_content_type]' )->value();
    return ( businessoul_blog_active( $control ) && ( 'blog_category' == $content_type ) );
}



function businessoul_latest_active( $control ) {
    if( $control->manager->get_setting( 'theme_options[disable_latest_section]' )->value() == true ) {
        return true;
    }else{
        return false;
    }
}

function businessoul_latest_page( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[latest_content_type]' )->value();
    return ( businessoul_latest_active( $control ) && ( 'latest_page' == $content_type ) );
}

function businessoul_latest_post( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[latest_content_type]' )->value();
    return ( businessoul_latest_active( $control ) && ( 'latest_post' == $content_type ) );
}

function businessoul_latest_category( $control ) {
    $content_type = $control->manager->get_setting( 'theme_options[latest_content_type]' )->value();
    return ( businessoul_latest_active( $control ) && ( 'latest_category' == $content_type ) );
}
/**
 * Active Callback for top bar section
 */
function businessoul_contact_info_ac( $control ) {

    $show_contact_info = $control->manager->get_setting( 'theme_options[show_header_contact_info]')->value();
    $control_id        = $control->id;
         
    if ( $control_id == 'theme_options[header_location]' && $show_contact_info ) return true;
    if ( $control_id == 'theme_options[header_email]' && $show_contact_info ) return true;
    if ( $control_id == 'theme_options[header_phone]' && $show_contact_info ) return true;

    return false;
}

function businessoul_social_links_active( $control ) {
    if( $control->manager->get_setting( 'theme_options[show_header_social_links]' )->value() == true ) {
        return true;
    }else{
        return false;
    }
}

