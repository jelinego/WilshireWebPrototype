<?php 
/**
 * Template part for displaying Services Section
 *
 *@package BusinesSoul
 */

    $service_title       = businessoul_get_option( 'service_title' );
    $service_subtitle       = businessoul_get_option( 'service_subtitle' );
    $disable_services_icon = businessoul_get_option( 'disable_services_icon' );
    $btn_url = businessoul_get_option( 'services_btn_url');
    $btn_text = businessoul_get_option( 'services_btn_text');
    $home_layout= businessoul_get_option('home_page_layout_content_type');
    for( $i=1; $i<=6; $i++ ) :
        $services_page_posts[] = absint(businessoul_get_option( 'services_page_'.$i ) );
        $services_icon   = businessoul_get_option( 'services_icon_'.$i );
    endfor;
    ?>

    <?php if( !empty($service_title) || ! empty($service_subtitle ) ):?>
        <div class="section-header clear">
            <div class="section-header-details">
                <?php if( !empty($service_title)):?>
                    <h2 class="section-title"><?php echo esc_html($service_title);?></h2>
                <?php endif;?>
                <?php if ( ! empty($service_subtitle ) ) : ?>
                    <p class="section-subtitle"><?php echo esc_html( $service_subtitle ); ?></p>
                <?php endif; ?><!-- .section-header -->
            </div>
            <?php if ( ! empty( $btn_text ) && ! empty( $btn_url ) && $home_layout == 'home-three' ) { ?>
                <div class="view-all">
                    <a href="<?php echo esc_url( $btn_url); ?>" class="btn"><?php echo esc_html( $btn_text ); ?></a>
                </div><!-- .view-all -->
            <?php } ?>
        </div> 
    <?php endif; ?>
    
    <div class="section-content clear <?php if ($home_layout == 'home-one' || $home_layout == 'home-three' ) { echo 'col-3'; } ?>">
        <?php $args = array (
            'post_type'     => 'page',
            'post_per_page' => count( $services_page_posts ),
            'post__in'      => $services_page_posts,
            'orderby'       =>'post__in', 
        ); 
        $loop = new WP_Query($args);                        
        if ( $loop->have_posts() ) :
            $i=0;  
            while ($loop->have_posts()) : $loop->the_post(); $i++;?>
                <?php $home_layout= businessoul_get_option('home_page_layout_content_type');
                 if ($home_layout == 'home-one' || $home_layout == 'home-three') { ?>
                    <article>
                        <?php 
                        $services_icon = businessoul_get_option( 'service_icon_'.$i );
                        if ( ( true == $disable_services_icon ) && !empty($services_icon) ) { ?>
                            <div class="services-icon-container">
                                <i class="fa <?php echo esc_attr( $services_icon); ?>"></i>
                            </div>
                        <?php  } ?>
                        <?php if ( ( has_post_thumbnail() ) && ( false == $disable_services_icon )  ) : ?>
                            <div class="featured-image">
                                <img src="<?php the_post_thumbnail_url('large'); ?>"/>
                            </div><!-- .featured-image -->
                        <?php endif; ?>
                        <div class="service-content">
                            <header class="entry-header">
                                <h2 class="entry-title"><a href="<?php the_permalink();?>"><?php the_title();?></a></h2>
                            </header>

                            <div class="entry-content">
                                <?php
                                    $excerpt = businessoul_the_excerpt( 15 );
                                    echo wp_kses_post( wpautop( $excerpt ) );
                                ?>
                            </div><!-- .entry-content -->
                        </div>
                    </article>
                <?php } if ($home_layout == 'home-two') {  ?>
                    <article class="hentry">
                    <?php 
                        $services_icon = businessoul_get_option( 'service_icon_'.$i );
                        if ( !empty($services_icon) ) { ?>
                            <div class="icon-container">
                                <i class="fa <?php echo esc_attr( $services_icon); ?>"></i>
                            </div><!-- .icon-container -->
                        <?php } ?>
                        <header class="entry-header">
                            <h2 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                        </header>
                        <div class="entry-content">
                            <?php $excerpt = businessoul_the_excerpt( 10 );
                                    echo wp_kses_post( wpautop( $excerpt ) ); ?>
                        </div><!-- .entry-content -->
                    </article><!-- .hentry -->
                <?php } 
                if ($home_layout == 'home-two') { 
                    $services_seperator_image = businessoul_get_option( 'services_seperator_image');?>
                    <?php if ( $i == 2 ) : ?>
                        <div class="featured-image" style="background-image: url('<?php echo esc_url( $services_seperator_image ); ?>');"></div>
                    <?php endif;  
                } ?>


            <?php endwhile;?>
        <?php endif; ?>
        <?php wp_reset_postdata(); ?>
    </div>
    <?php if ( ! empty( $btn_text ) && ! empty( $btn_url ) && $home_layout != 'home-three' ) { ?>
        <div class="view-all">
            <a href="<?php echo esc_url( $btn_url); ?>" class="btn"><?php echo esc_html( $btn_text ); ?></a>
        </div><!-- .view-all -->
    <?php } ?> 