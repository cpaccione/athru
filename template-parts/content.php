<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package athrupartners
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class('mb-8 sm:mb-24 pl-4 sm:pl-14 py-4 sm:py-6 pr-4 sm:pr-6 space-y-5 bg-tan relative'); ?>>
<div class="flex">
	<div class="hidden sm:block">
		<svg class="mt-4" xmlns="http://www.w3.org/2000/svg" width="80" height="262.434" viewBox="0 0 80 262.434">
			<path id="Path_47" data-name="Path 47" d="M0,29.566,80,50.38V292H0Z" transform="translate(0 -29.566)" fill="#d11d2b"/>
		</svg>
	</div>
	<div class="sm:pl-7">
	<header class="entry-header">
		<?php
		if ( is_singular() ) :
			the_title( '<h1 class="entry-title text-4xl text-blue-2 font-display">', '</h1>' );
		else :
			the_title( '<h2 class="entry-title text-4xl text-blue-2 font-display"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		endif;

		if ( 'post' === get_post_type() ) :
			?>
		<?php endif; ?>

		<div class="entry-meta flex justify-between pt-4 sm:pt-11 pb-5 w-full">
			<?php athrupartners_posted_on('F, Y'); ?>
			<?php athrupartners_posted_by(); ?>
		</div>
		<!-- .entry-meta -->

	</header><!-- .entry-header -->

	<div class="entry-content">

		<!-- The excerpt -->
		<div class="text-base sm:text-lg text-blue-3">
			<?php the_excerpt(); ?> 
		</div>
		<a class="text-lg text-red hover:text-blue pt-5 inline-block" href="<?php the_permalink(); ?>">(click here to learn more)</a>


	</div><!-- .entry-content -->
			</div>
	</div>

	<div>
		<a href="<?php the_permalink(); ?>">
			<div class="featured-image">

			<?php

				// check if the post has a Post Thumbnail assigned to it.
				if ( has_post_thumbnail() ) {
					the_post_thumbnail('full');
				}

			?>

			</div>
		</a>
	</div>
	<svg class="absolute -bottom-12 -z-10 hidden sm:block" xmlns="http://www.w3.org/2000/svg" width="80" height="320.434" viewBox="0 0 80 320.434">
  		<path id="Path_48" data-name="Path 48" d="M0,29.566,80,54.98V350H0Z" transform="translate(80 350) rotate(180)" fill="#d11d2b"/>
	</svg>
</article><!-- #post-<?php the_ID(); ?> -->
