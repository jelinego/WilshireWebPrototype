<?php 
    $project_title       = businessoul_get_option( 'project_title' );
    $project_subtitle       = businessoul_get_option( 'project_subtitle' );
    $project_category = businessoul_get_option( 'project_category' );
    $btn_url = businessoul_get_option( 'project_btn_url');
    $btn_text = businessoul_get_option( 'project_btn_text');
    $home_layout= businessoul_get_option('home_page_layout_content_type');

?>
    <?php if( !empty($project_title) || ! empty($project_subtitle ) ):?>
        <div class="section-header clear">
            <div class="section-header-details">
                <?php if( !empty($project_title)):?>
                    <h2 class="section-title"><?php echo esc_html($project_title);?></h2>
                <?php endif;?>
                <?php if ( ! empty($project_subtitle ) ) : ?>
                    <p class="section-subtitle"><?php echo esc_html( $project_subtitle ); ?></p>
                <?php endif; ?><!-- .section-header -->
            </div>
            <?php if ( ! empty( $btn_text ) && ! empty( $btn_url ) && $home_layout == 'home-three' ) { ?>
                <div class="view-all">
                    <a href="<?php echo esc_url( $btn_url); ?>" class="btn"><?php echo esc_html( $btn_text ); ?></a>
                </div><!-- .view-all -->
            <?php } ?>
        </div> 
    <?php endif; ?>

        <div class="project-slider modern-slider clear" data-slick='{"slidesToShow":<?php echo ( ($home_layout == 'home-one' ) ) ? '3' : '5'; ?> , "slidesToScroll": 1, "infinite": true, "speed": 1000, "dots": false, "arrows":true, "autoplay": true, "draggable": true, "fade": false }'>
            <?php 
            $args = array (

                'posts_per_page' =>6,              
                'post_type' => 'post',
                'post_status' => 'publish',
                'paged' => 1,
                );
                if ( absint( $project_category ) > 0 ) {
                    $args['cat'] = absint( $project_category );
                }

                $loop = new WP_Query($args);                        
                if ( $loop->have_posts() ) :
                    $i=0;  
                    while ($loop->have_posts()) : $loop->the_post(); $i++;?>           
                            <article>
                                <div class="project-item-wrapper" style="background-image: url('<?php the_post_thumbnail_url( ); ?>');">
                                    <header class="entry-header">
                                        <h2 class="entry-title">
                                            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>   
                                        </h2>
                                    </header>
                                </div>
                            </article>
                    <?php endwhile;?>  
                <?php endif;?>
                <?php wp_reset_postdata(); ?>
    </div><!-- .section-content -->

    <?php if ( ( ! empty( $btn_text ) && ! empty( $btn_url ) ) && (($home_layout == 'home-two' || $home_layout == 'home-one')) ) { ?>
        <div class="view-all">
            <a href="<?php echo esc_url( $btn_url); ?>" class="btn"><?php echo esc_html( $btn_text ); ?></a>
        </div><!-- .view-all -->
    <?php } ?>