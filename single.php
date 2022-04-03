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

<section class="blog-hero h-[50vh] bg-cover bg-no-repeat bg-center" style="background-image: url(<?php echo $feat_image; ?>);">

</section>

<div class="blog-wrap bg-white">
    <div class="container">
        <div id="primary" class="content-area grid px-4 gap-x-7 md:grid-cols-3">
			
			<main id="main" class="site-main col-span-2">

				<?php
				while ( have_posts() ) :
				
					the_post();

					get_template_part( 'template-parts/content-single', get_post_type() );

				?>
				<div class="pb-12">
				<?php
					the_post_navigation(
						array(
							'prev_text' => '<span class="border-2 border-solid border-blue text-base text-blue text-center flex h-12 w-40 items-center justify-center rounded-sm text-cont-gray hover:bg-blue hover:text-white mr-6">' . esc_html__( 'PREVIOUS', 'realestate' ) . '</span>',
							'next_text' => '<span class="border-2 border-solid border-blue text-base text-blue flex h-12 w-40 items-center justify-center rounded-sm text-cont-gray hover:bg-blue hover:text-white">' . esc_html__( 'NEXT', 'realestate' ) . '</span>',
						)
					);
					?>
				</div>
				<?php
				endwhile; // End of the loop.
				?>

			</main><!-- #main -->
			
			<aside class="col-span-1 md:pt-12">
				<?php dynamic_sidebar( 'sidebar-1' ); ?>
			</aside>
				
		</div><!-- #primary -->
	</div>
</div>
<?php get_footer(); ?>
