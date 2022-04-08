<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package athrupartners
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class('py-12 prose prose-base prose-headings:text-blue'); ?>>
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

		<div class="space-x-4">
			<?php athrupartners_posted_on('F, Y'); ?>
			<?php athrupartners_posted_by(); ?>
		</div>
	</header><!-- .entry-header -->

	<div class="entry-content">

			<?php
			the_content();

			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'athrupartners' ),
				'after'  => '</div>',
			) );
			?>

	</div><!-- .entry-content -->

	<div class="mt-12">
		<?php athrupartners_entry_footer(); ?>
	</div><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->
