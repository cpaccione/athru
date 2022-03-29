<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package athrupartners
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class('mb-16 pl-14 space-y-5 bg-tan'); ?>>
<div class="flex">
	<div>
		<svg class="mt-4" xmlns="http://www.w3.org/2000/svg" width="80" height="262.434" viewBox="0 0 80 262.434">
			<path id="Path_47" data-name="Path 47" d="M0,29.566,80,50.38V292H0Z" transform="translate(0 -29.566)" fill="#d11d2b"/>
		</svg>
	</div>
	<div class="pl-7">
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

		<div class="entry-meta">
			<?php athrupartners_posted_on('F, Y'); ?>
			<?php athrupartners_posted_by(); ?>
		</div>
		<!-- .entry-meta -->

	</header><!-- .entry-header -->

	<div class="entry-content">

		<!-- The excerpt -->
		<div class="blog-excerpt">
			<?php the_excerpt(); ?> 
		</div>
		<a class="post-link" href="<?php the_permalink(); ?>">Read Article <i class="fas fa-long-arrow-alt-right"></i></a>

	<footer class="entry-footer">
		<?php athrupartners_entry_footer(); ?>
	</footer><!-- .entry-footer -->
		
	</div><!-- .entry-content -->
			</div>
	</div>

	<div>
		<a href="<?php the_permalink(); ?>">
			<div class="featured-image">

			<?php

				// check if the post has a Post Thumbnail assigned to it.
				if ( has_post_thumbnail() ) {
					the_post_thumbnail('large');
				}

			?>

			</div>
		</a>
	</div>
</article><!-- #post-<?php the_ID(); ?> -->
