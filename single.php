<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package athrupartners
 */

get_header();
?>

<?php if ( has_post_thumbnail() ) {

    // Get the post thumbnail URL
    $feat_image = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
  }

?>

<section class="blog-hero" style="background-image: url(<?php echo $feat_image; ?>); height: 350px; background-size: cover; background-repeat: no-repeat; background-position: center center;">

</section>

<div class="blog-wrap">
    <div class="container">
        <div id="primary" class="content-area">
			
			<main id="main" class="site-main">

				<?php
				while ( have_posts() ) :
				
					the_post();

					get_template_part( 'template-parts/content-single', get_post_type() );

					the_post_navigation(
						array(
							'prev_text' => '<span class="border-2 border-solid border-blue text-base text-blue text-center flex h-12 w-40 items-center justify-center rounded-sm text-cont-gray hover:bg-blue hover:text-white mr-6">' . esc_html__( 'PREVIOUS', 'realestate' ) . '</span>',
							'next_text' => '<span class="border-2 border-solid border-blue text-base text-blue flex h-12 w-40 items-center justify-center rounded-sm text-cont-gray hover:bg-blue hover:text-white">' . esc_html__( 'NEXT', 'realestate' ) . '</span>',
						)
					);

				endwhile; // End of the loop.
				?>

			</main><!-- #main -->
			
			<?php get_sidebar(); ?>
				
		</div><!-- #primary -->
	</div>
</div>
<?php get_footer(); ?>
