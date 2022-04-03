<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package athrupartners
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class('py-12'); ?>>
	<header class="entry-header">
		<?php
		if ( is_singular() ) :
			the_title( '<h1 class="entry-title pb-4">', '</h1>' );
		else :
			the_title( '<h2 class="entry-title pb-4"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		endif;

		if ( 'post' === get_post_type() ) :
			?>
		<?php endif; ?>

		<div class="entry-meta pb-4">
			<?php athrupartners_posted_on('F, Y'); ?>
			<?php athrupartners_posted_by(); ?>
		</div>
	</header><!-- .entry-header -->

	<div class="entry-content prose prose-base">

			<?php
			the_content();

			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'athrupartners' ),
				'after'  => '</div>',
			) );
			?>

	</div><!-- .entry-content -->

	<footer class="entry-footer mt-12">
		<?php athrupartners_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->
