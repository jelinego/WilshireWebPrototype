<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package BusinesSoul
 */
?>
<?php 
	$enable_category     = businessoul_get_option( 'latest_category_enable' );
    $enable_posted_on     = businessoul_get_option( 'latest_posted_on_enable' );
    $enable_author     = businessoul_get_option( 'latest_author_enable' );
    $enable_video = businessoul_get_option( 'latest_video_enable' );
    $header_font_size = businessoul_get_option( 'latest_font_size');
 ?>

<article id="post-<?php the_ID(); ?>" class="<?php echo has_post_thumbnail() ? 'has-post-thumbnail' : 'no-post-thumbnail' ; ?> ">
	<div class="post-item">

		<?php if ( has_post_thumbnail()) { ?>

                <div class="featured-image" style="background-image: url('<?php the_post_thumbnail_url( 'full');?>');">
                    <a href="<?php the_permalink();?>" class="post-thumbnail-link"></a>
                </div><!-- .featured-image -->
                <?php $homepage_video_url = get_post_meta( get_the_ID(), 'businessoul-video-url', true ); ?>
                <?php if (!empty($homepage_video_url) && $enable_video==true ): ?>
                   <a href="<?php the_permalink();?>"> <div class="homepage-video-icon"><i class="fa fa-play"></i></div></a>
                <?php endif ?>
		<?php } ?>
		
		<div class="entry-container">
			<header class="entry-header">
				<?php if ($enable_category ==true): ?>
					<div class="entry-meta">
						<?php businessoul_entry_meta(); ?>
					</div><!-- .entry-meta -->
				<?php endif ?>
				<?php if ($enable_posted_on ==true): ?>
					<div class="entry-meta posted-on">
						<?php businessoul_posted_on(); ?>
					</div><!-- .entry-meta -->
				<?php endif; ?>
				
				<?php
				if ( is_single() ) :
					the_title( '<h1 class="entry-title" style="font-size:'. esc_attr($header_font_size).'px; ">', '</h1>' );
				else :
					the_title( '<h2 class="entry-title" style="font-size:'. esc_attr($header_font_size).'px; "><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
				endif; ?>
			</header><!-- .entry-header -->
			<?php if ($enable_author ==true): ?>
				<div class="entry-meta author ">
					<?php businessoul_author(); ?>
				</div><!-- .entry-meta -->
			<?php endif; ?>
			<div class="entry-content">
				<?php the_excerpt(); ?>
			</div><!-- .entry-content -->
			<?php $latest_readmore_text = businessoul_get_option( 'latest_readmore_text' );
	        if (!empty ($latest_readmore_text)) { ?>
	          <div class="latest-read-more"><a href="<?php the_permalink();?>" class="btn"><?php echo esc_html($latest_readmore_text);?></a> </div>
        <?php } ?>
		</div><!-- .entry-container -->
		
	</div><!-- .post-item -->
</article><!-- #post-## -->
