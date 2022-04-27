<?php  
    $testimonial_title = businessoul_get_option( 'testimonial_title' );
    $testimonial_subtitle = businessoul_get_option( 'testimonial_subtitle' );
    $btn_url = businessoul_get_option( 'testimonial_btn_url');
    $btn_text = businessoul_get_option( 'testimonial_btn_text');
    $home_layout= businessoul_get_option('home_page_layout_content_type');

    for( $i=1; $i<=3; $i++ ) :
        $testimonial_page_posts[] = absint(businessoul_get_option( 'testimonial_page_'.$i ) );
    endfor; 
?>             
    <?php if( !empty($testimonial_title) || ! empty($testimonial_subtitle ) ):?>
        <div class="section-header clear">
            <div class="section-header-details">
                <?php if( !empty($testimonial_title)):?>
                    <h2 class="section-title"><?php echo esc_html($testimonial_title);?></h2>
                <?php endif;?>
                <?php if ( ! empty($testimonial_subtitle ) ) : ?>
                    <p class="section-subtitle"><?php echo esc_html( $testimonial_subtitle ); ?></p>
                <?php endif; ?><!-- .section-header -->
            </div>
            <?php if ( ! empty( $btn_text ) && ! empty( $btn_url ) && $home_layout == 'home-three' ) { ?>
                <div class="view-all">
                    <a href="<?php echo esc_url( $btn_url); ?>" class="btn"><?php echo esc_html( $btn_text ); ?></a>
                </div><!-- .view-all -->
            <?php } ?>
        </div> 
    <?php endif; ?> 
    <div class="section-content clear">
        <div class="testimonial-slider" data-slick='{"slidesToShow": <?php echo (esc_attr($home_layout) == 'home-two' ) ? 1 : 2; ?>, "slidesToScroll": 1, "infinite": true, "speed": 1000, "dots": true, "arrows":true, "autoplay": true, "fade": false, "draggable": true }'>      
        <?php $args = array (
            'post_type'     => 'page',
            'post_per_page' => count( $testimonial_page_posts ),
            'post__in'      => $testimonial_page_posts,
            'orderby'       =>'post__in', 
        ); 
    $loop = new WP_Query($args);                        
    if ( $loop->have_posts() ) :
                $i=0;  
                while ($loop->have_posts()) : $loop->the_post(); $i++;?>
                            <article class="slick-item">
                                <div class="quote">
                                    <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/quote.png' ); ?>">
                                </div><!-- .quote -->
                                <div class="client-wrapper">
                                        <div class="entry-content">
                                            <?php 
                                            if ($home_layout == 'home-two') {
                                                 $excerpt = businessoul_the_excerpt( 40 );
                                                echo wp_kses_post( wpautop( $excerpt ) );
                                            } else{
                                                $excerpt = businessoul_the_excerpt( 20 );
                                                echo wp_kses_post( wpautop( $excerpt ) );
                                           } ?>
                                        </div><!-- .entry-content -->
                                        <header class="entry-header">
                                            <h2 class="entry-title">
                                                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                            </h2>
                                        </header>

                                    <?php $testimonial_position     = businessoul_get_option( 'testimonial_position_'. $i );
                                        if ( ! empty( $testimonial_position ) ) : ?>
                                        <div class="client-meta">
                                            <span class="designation"><?php echo esc_html( $testimonial_position ); ?></span>
                                        </div><!-- .client-meta -->
                                    <?php endif; ?>
                                   
                                        <div class="featured-image">
                                            <img src="<?php the_post_thumbnail_url('gallery');  ?>" alt="<?php the_title();?>">
                                        </div><!-- .featured-image -->
                                </div><!-- .client-wrapper -->
                            </article><!-- .slick-item -->
                   
                    <?php endwhile;?>
                <?php endif; 
                wp_reset_postdata(); ?>
 </div><!-- .testimonial-slider -->
 
</div><!-- .section-content -->

