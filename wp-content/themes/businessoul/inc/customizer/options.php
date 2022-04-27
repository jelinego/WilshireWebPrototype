<?php 
/**
 * List of posts for post choices.
 * @return Array Array of post ids and name.
 */
function businessoul_post_choices() {
    $posts = get_posts( array( 'numberposts' => -1 ) );
    $choices = array();
    $choices[0] = esc_html__( '--Select--', 'businessoul' );
    foreach ( $posts as $post ) {
        $choices[ $post->ID ] = $post->post_title;
    }
    return  $choices;
}

if ( ! function_exists( 'businessoul_switch_options' ) ) :
    /**
     * List of custom Switch Control options
     * @return array List of switch control options.
     */
    function businessoul_switch_options() {
        $arr = array(
            'on'        => esc_html__( 'Enable', 'businessoul' ),
            'off'       => esc_html__( 'Disable', 'businessoul' )
        );
        return apply_filters( 'businessoul_switch_options', $arr );
    }
endif;


 /**
 * Get an array of google fonts.
 * 
 */
function businessoul_font_choices() {
    $font_family_arr = array();
    $font_family_arr[''] = esc_html__( '--Default--', 'businessoul' );

    // Make the request
    $request = wp_remote_get( get_theme_file_uri( 'assets/fonts/webfonts.json' ) );

    if( is_wp_error( $request ) ) {
        return false; // Bail early
    }
    // Retrieve the data
    $body = wp_remote_retrieve_body( $request );
    $data = json_decode( $body );
    if ( ! empty( $data ) ) {
        foreach ( $data->items as $items => $fonts ) {
            $family_str_arr = explode( ' ', $fonts->family );
            $family_value = implode( '-', array_map( 'strtolower', $family_str_arr ) );
            $font_family_arr[ $family_value ] = $fonts->family;
        }
    }

    return apply_filters( 'businessoul_font_choices', $font_family_arr );
}

if ( ! function_exists( 'businessoul_typography_options' ) ) :
    /**
     * Returns list of typography
     * @return array font styles
     */
    function businessoul_typography_options(){
        $choices = array(
            'default'         => esc_html__( 'Default', 'businessoul' ),
            'header-font-1'   => esc_html__( 'Raleway', 'businessoul' ),
            'header-font-2'   => esc_html__( 'Poppins', 'businessoul' ),
            'header-font-3'   => esc_html__( 'Montserrat', 'businessoul' ),
            'header-font-4'   => esc_html__( 'Open Sans', 'businessoul' ),
            'header-font-5'   => esc_html__( 'Lato', 'businessoul' ),
            'header-font-6'   => esc_html__( 'Ubuntu', 'businessoul' ),
            'header-font-7'   => esc_html__( 'Playfair Display', 'businessoul' ),
            'header-font-8'   => esc_html__( 'Lora', 'businessoul' ),
            'header-font-9'   => esc_html__( 'Titillium Web', 'businessoul' ),
            'header-font-10'   => esc_html__( 'Muli', 'businessoul' ),
            'header-font-11'   => esc_html__( 'Oxygen', 'businessoul' ),
            'header-font-12'   => esc_html__( 'Nunito Sans', 'businessoul' ),
            'header-font-13'   => esc_html__( 'Maven Pro', 'businessoul' ),
            'header-font-14'   => esc_html__( 'Cairo', 'businessoul' ),
            'header-font-15'   => esc_html__( 'Philosopher', 'businessoul' ),
            'header-font-16'   => esc_html__( 'Quicksand', 'businessoul' ),
            'header-font-17'   => esc_html__( 'Henny Penny', 'businessoul' ),
            'header-font-18'   => esc_html__( 'Fredericka', 'businessoul' ),
            'header-font-19'   => esc_html__( 'Marck Script', 'businessoul' ),
            'header-font-20'   => esc_html__( 'Kaushan Script', 'businessoul' ),
        );

        $output = apply_filters( 'businessoul_typography_options', $choices );
        if ( ! empty( $output ) ) {
            ksort( $output );
        }

        return $output;
    }
endif;


if ( ! function_exists( 'businessoul_body_typography_options' ) ) :
    /**
     * Returns list of typography
     * @return array font styles
     */
    function businessoul_body_typography_options(){
        $choices = array(
            'default'         => esc_html__( 'Default', 'businessoul' ),
            'body-font-1'     => esc_html__( 'Raleway', 'businessoul' ),
            'body-font-2'     => esc_html__( 'Poppins', 'businessoul' ),
            'body-font-3'     => esc_html__( 'Roboto', 'businessoul' ),
            'body-font-4'     => esc_html__( 'Open Sans', 'businessoul' ),
            'body-font-5'     => esc_html__( 'Lato', 'businessoul' ),
            'body-font-6'   => esc_html__( 'Ubuntu', 'businessoul' ),
            'body-font-7'   => esc_html__( 'Playfair Display', 'businessoul' ),
            'body-font-8'   => esc_html__( 'Lora', 'businessoul' ),
            'body-font-9'   => esc_html__( 'Titillium Web', 'businessoul' ),
            'body-font-10'   => esc_html__( 'Muli', 'businessoul' ),
            'body-font-11'   => esc_html__( 'Oxygen', 'businessoul' ),
            'body-font-12'   => esc_html__( 'Nunito Sans', 'businessoul' ),
            'body-font-13'   => esc_html__( 'Maven Pro', 'businessoul' ),
            'body-font-14'   => esc_html__( 'Cairo', 'businessoul' ),
            'body-font-15'   => esc_html__( 'Philosopher', 'businessoul' ),
        );

        $output = apply_filters( 'businessoul_body_typography_options', $choices );
        if ( ! empty( $output ) ) {
            ksort( $output );
        }

        return $output;
    }
endif;

 ?>