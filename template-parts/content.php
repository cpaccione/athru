<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package athrupartners
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php
		if ( is_singular() ) :
			the_title( '<h1 class="entry-title">', '</h1>' );
		else :
			the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
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
		<p class="the-excerpt"><?php the_excerpt(); ?> <a class="post-link" href="<?php the_permalink(); ?>">Read Article <i class="fas fa-long-arrow-alt-right"></i></a></p>

		<a href="<?php the_permalink(); ?>"><div class="featured-image">

		    <?php

		     	// check if the post has a Post Thumbnail assigned to it.
		    	if ( has_post_thumbnail() ) {
		    		the_post_thumbnail('large');
		    	}

			?>

		</div></a>

	<footer class="entry-footer">
		<?php athrupartners_entry_footer(); ?>
	</footer><!-- .entry-footer -->
		
	</div><!-- .entry-content -->

</article><!-- #post-<?php the_ID(); ?> -->
