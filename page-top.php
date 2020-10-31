<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Hardolass
 */

get_header();
?>

	<main id="primary" class="site-main">

		<div class="video-container">
      <video autoplay loop muted id="video-bg">

        <source src="<?php echo get_template_directory_uri(); ?>/videos/main--darken.mp4" type="video/mp4">

      </video>
		</div>
		
		<section>
		</section>

		<?php
		while ( have_posts() ) :
			the_post();
			?>

			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<header class="entry-header">
				<?php

    if ( 'post' === get_post_type() ) :
					?>
					<div class="entry-meta">
						<?php
						hardolass_posted_on();
						hardolass_posted_by();
						?>
					</div><!-- .entry-meta -->
				<?php endif; ?>
			</header><!-- .entry-header -->
		
			<?php hardolass_post_thumbnail(); ?>
		
			<div class="entry-content">
				<?php
				the_content(
					sprintf(
						wp_kses(
							/* translators: %s: Name of current post. Only visible to screen readers */
							__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'hardolass' ),
							array(
								'span' => array(
									'class' => array(),
								),
							)
						),
						wp_kses_post( get_the_title() )
					)
				);
		
				wp_link_pages(
					array(
						'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'hardolass' ),
						'after'  => '</div>',
					)
				);
				?>
			</div><!-- .entry-content -->
		
		</article><!-- #post-<?php the_ID(); ?> -->
		
		<?php
		endwhile; // End of the loop.
		?>

	</main><!-- #main -->

<?php
// get_sidebar();
get_footer();
