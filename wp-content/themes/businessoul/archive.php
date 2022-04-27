<?php
/**
 * The template for displaying archive pages
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package BusinesSoul
 */

get_header(); 
$latest_post_column = businessoul_get_option( 'number_of_latest_posts_column' );?>
	<div class="wrapper page-section">
		<div id="primary" class="content-area">
			<main id="main" class="site-main blog-posts-wrapper" role="main">
				<div class="col-1">

					<?php
					if ( have_posts() ) : 
						/* Start the Loop */
						while ( have_posts() ) : the_post();

							/*
							 * Include the Post-Format-specific template for the content.
							 * If you want to override this in a child theme, then include a file
							 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
							 */
							get_template_part( 'template-parts/content', get_post_format() );

						endwhile;
					else :

						get_template_part( 'template-parts/content', 'none' );

					endif; ?>
				</div>
			<?php
				/**
			* Hook - businessoul_pagination_action.
			*
			* @hooked businessoul_pagination 
			*/
			 do_action('businessoul_pagination_action');
			// the_posts_navigation(); ?>
			</main><!-- #main -->
		</div><!-- #primary -->

		<?php get_sidebar(); ?>
	</div><!-- .wrapper/.page-section-->
<?php get_footer();