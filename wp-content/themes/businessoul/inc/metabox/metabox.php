<?php
/**
 * BusinesSoul metabox file.
 *
 * This is the template that includes all the other files for metaboxes of BusinesSoul theme
 *
 * @package BusinesSoul
 * @since BusinesSoul 0.1
 */

// Include Post subtitle meta
require get_template_directory() . '/inc/metabox/video-url.php'; 




if ( ! function_exists( 'businessoul_custom_meta' ) ) : 
    /**
     * Adds meta box to the post editing screen
     */
    function businessoul_custom_meta() {
        $post_type = array( 'post', 'page' );

        // POST Subtitle 
        add_meta_box( 'businessoul_video_url', esc_html__( 'Video Links', 'businessoul' ), 'businessoul_video_url_callback', $post_type );
               
    }
endif;
add_action( 'add_meta_boxes', 'businessoul_custom_meta' );


