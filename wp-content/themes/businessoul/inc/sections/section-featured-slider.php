<?php 
/**
 * Template part for displaying Featured Slider Section
 *
 *@package BusinesSoul
 */
    
    $enable_content     = businessoul_get_option( 'slider_content_enable' );
    $slider_speed   = businessoul_get_option( 'slider_speed' );
    $image_overlay   = businessoul_get_option( 'disable_white_overlay' );
    $slider_content_position = businessoul_get_option( 'slider_content_position_option');
    for( $i=1; $i<=3; $i++ ) :
        $featured_slider_page_posts[] = businessoul_get_option( 'slider_page_'.$i );
    endfor;
    ?>
    
    <div class="featured-slider-wrapper <?php echo esc_attr($slider_content_position); ?>" 
    data-slick='{"slidesToShow": 1,
     "slidesToScroll": 1, 
     "infinite": true, 
     "speed": <?php echo esc_attr( $slider_speed) ?>, 
     "dots": true, 
     "arrows":true, 
     "autoplay": true, 
     "fade": false'>

        <?php 
            $args = array (

            'post_type'     => 'page',
            'post_per_page' => count( $featured_slider_page_posts ),
            'post__in'      => $featured_slider_page_posts,
            'orderby'       =>'post__in',
        ); 
        $loop = new WP_Query($args);                        
        if ( $loop->have_posts() ) :
        $i=0;  
            while ($loop->have_posts()) : $loop->the_post(); $i++;?>

                <article class="slick-item" style="background-image: url('<?php the_post_thumbnail_url( 'full' ); ?>');">
                    <?php 
                        $class='';
                        if (false == $image_overlay) { 
                            $class='image-overlay';
                        } else{
                            $class='content-overlay';
                        }
                        if (false == $image_overlay)  {
                    ?>
                        <div class="overlay"></div>
                    <?php } ?>
                    <div class="wrapper">
                        <div class="<?php echo esc_attr($class); ?> featured-content-wrapper">
                            <header class="entry-header">

                                <a href="<?php the_permalink();?>" >
                                    <h2 class="entry-title"><?php the_title();?></h2>
                                </a>
                            </header>
                            <?php if ( ($enable_content==true)): ?>
                                <div class="entry-content">
                                    <?php
                                        $excerpt = businessoul_the_excerpt( 30 );
                                        echo wp_kses_post( wpautop( $excerpt ) );
                                    ?>
                                </div><!-- .entry-content -->
                            <?php endif; ?>
                                <div class="entry-meta">                 
                                    <?php businessoul_posted_on(); ?>
                                </div><!-- .entry-meta -->
                            <?php
                            $readmore_text   = businessoul_get_option( 'slider_custom_btn_text_' . $i ); 
                            if ( ! empty( $readmore_text ) ) { ?>
                                <div class="read-more">
                                    <a href="<?php the_permalink();?>" class="btn btn-primary"><?php echo esc_html($readmore_text);?></a>
                                </div><!-- .read-more -->
                            <?php } ?>
                        </div><!-- .featured-content-wrapper -->
                    </div><!-- .wrapper -->
                </article><!-- .slick-item -->
            <?php endwhile;?>
        <?php endif;?>
        <?php wp_reset_postdata(); ?>
    </div><!-- .featured-slider-wrapper -->