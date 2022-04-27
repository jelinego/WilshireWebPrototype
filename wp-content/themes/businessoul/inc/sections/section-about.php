<?php 
/**
 * Template part for displaying Services Section
 *
 *@package Businessbiz
 */ 
    $about_section_title  = businessoul_get_option( 'about_section_title');
    $about_section_subtitle  = businessoul_get_option( 'about_section_subtitle');
    $about_content_type     = businessoul_get_option( 'about_content_type' );
    $btn_text = businessoul_get_option( 'about_btn_text');
    $img_url = businessoul_get_option( 'about_custom_img');
    $image_right = businessoul_get_option( 'shift_image_right');
    if (true == $image_right) {
        $class='right-image';
    } else {
        $class='left-image';
    }
    $home_layout= businessoul_get_option('home_page_layout_content_type');
    ?>  
<?php if ($home_layout == 'home-two') { ?>
    <div class="section-header">
        <?php if ( ! empty ( $about_section_title ) ) : ?>
            <h2 class="section-title"><?php echo esc_html( $about_section_title ); ?></h2>
        <?php endif; ?>

        <?php if ( ! empty ( $about_section_subtitle ) ) : ?>
            <p class="section-subtitle"><?php echo wp_kses_post( $about_section_subtitle ); ?></p>
        <?php endif; ?>
    </div><!-- .section-header -->  
<?php } ?>

<div class="about-section-wrapper has-post-thumbnail <?php //has_post_thumbnail() ? 'has-post-thumbnail' : 'no-post-thumbnail'; ?>  <?php echo esc_attr( $class ); ?>">

    <?php 
    $about_id = businessoul_get_option( 'about_page' );
        $args = array (
        'post_type'     => 'page',
        'posts_per_page' => 1,
        'p' => $about_id,
        
    ); 
        $the_query = new WP_Query( $args );

        // The Loop
        while ( $the_query->have_posts() ) : $the_query->the_post();
        ?>
            <?php if(has_post_thumbnail()) : ?>
                <div class="featured-image" style="background-image: url('<?php the_post_thumbnail_url( 'post-thumbnails' ); ?>');">
                    
                </div><!-- .featured-image -->
            <?php endif; ?>

            <div class="entry-container" <?php echo !has_post_thumbnail() ? 'style="width:100%; padding:0;"' : ''; ?> >
                <div class="section-header">
                    <h2 class="section-title separator"><?php the_title(); ?></h2>
                </div><!-- .section-header -->
                <div class="section-content">
                    <?php  
                        $excerpt = businessoul_the_excerpt( 70 );
                        echo wp_kses_post( wpautop( $excerpt ) );
                    ?>
                </div><!-- .entry-content -->

                <?php if ( ! empty( $btn_text ) ) : ?>
                    <div class="more-link">
                        <a href="<?php the_permalink(); ?>" class="btn btn-primary"><?php echo esc_html( $btn_text ); ?></a>
                    </div><!-- .more-link -->
                <?php endif; ?>
            </div><!-- .entry-container -->
    <?php endwhile; ?>
    <?php wp_reset_postdata(); ?>
</div>   