<?php 
/**
 * Template part for displaying Blog Section
 *
 *@package BusinesSoul
 */
?>
<?php 
	 $blog_post_title    = businessoul_get_option( 'blog_title' );
     $blog_post_subtitle    = businessoul_get_option( 'blog_subtitle' );
	 $blog_category = businessoul_get_option( 'blog_category' );

     $btn_url = businessoul_get_option( 'blog_btn_url');
     $btn_text = businessoul_get_option( 'blog_btn_text');
    $home_layout= businessoul_get_option('home_page_layout_content_type');	 
	 
?> 
    <?php if( !empty($blog_post_title) || ! empty($blog_post_subtitle ) ):?>
        <div class="section-header clear">
            <div class="section-header-details">
                <?php if( !empty($blog_post_title)):?>
                    <h2 class="section-title"><?php echo esc_html($blog_post_title);?></h2>
                <?php endif;?>
                <?php if ( ! empty($blog_post_subtitle ) ) : ?>
                    <p class="section-subtitle"><?php echo esc_html( $blog_post_subtitle ); ?></p>
                <?php endif; ?><!-- .section-header -->
            </div>
            <?php if ( ! empty( $btn_text ) && ! empty( $btn_url ) && $home_layout == 'home-three' ) { ?>
                <div class="view-all">
                    <a href="<?php echo esc_url( $btn_url); ?>" class="btn"><?php echo esc_html( $btn_text ); ?></a>
                </div><!-- .view-all -->
            <?php } ?>
        </div> 
    <?php endif; ?>
  <div class="section-content col-3">
  	<?php 
        $args = array (

            'posts_per_page' =>3,              
            'post_type' => 'post',
            'post_status' => 'publish',
            'paged' => 1,
            );
            if ( absint( $blog_category ) > 0 ) {
                $args['cat'] = absint( $blog_category );
            }
            $loop = new WP_Query($args);                        
            if ( $loop->have_posts() ) :
                $i=0;  
                while ($loop->have_posts()) : $loop->the_post(); $i++;?>
				    <article>
                    <?php $blog_image_buttom    = businessoul_get_option( 'image_buttom' );
                        if ( true == $blog_image_buttom ) {
                            $classes = 'image-buttom';
                        } else {
                            $classes = 'image-top';
                        }?>
				    	<div class="post-item <?php echo esc_attr( $classes ); ?>">
					      	<?php if(has_post_thumbnail()):?>
						        <div class="featured-image">
						        	<a href="<?php the_permalink();?>"><?php the_post_thumbnail('businessoul-blog');?></a>  
						        </div>
					    	<?php endif;?>

					    	<div class="entry-container">
						    	<div class="entry-meta">		         
						            <?php businessoul_posted_on();
                                    the_category();?>
						        </div><!-- .entry-meta -->

						        <header class="entry-header">
									<h2 class="entry-title">
										<a href="<?php the_permalink();?>"><?php the_title();?></a>
									</h2>
						        </header>

						        <div class="entry-content">
				 				    <?php
										$excerpt = businessoul_the_excerpt( 20 );
										echo wp_kses_post( wpautop( $excerpt ) );
									?>
						        </div><!-- .entry-content -->

						        <?php $readmore_text = businessoul_get_option( 'readmore_text' );
                                if (!empty ($readmore_text)) { ?>

						          <a href="<?php the_permalink();?>" class="btn"><?php echo esc_html($readmore_text);?></a>
                                <?php } ?>
					        </div><!-- .entry-container -->
					    </div><!-- .post-item -->
				    </article>
	    <?php endwhile;?>
    <?php endif;?>
    <?php wp_reset_postdata(); ?>
    <?php if ( ! empty( $btn_text ) && ! empty( $btn_url ) && $home_layout != 'home-three' ) { ?>
        <div class="view-all">
            <a href="<?php echo esc_url( $btn_url); ?>" class="btn"><?php echo esc_html( $btn_text ); ?></a>
        </div><!-- .view-all -->
    <?php } ?>
  </div>