<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package athrupartners
 */

get_header();
?>

<!-- <header class="blog-header">
    <div class="container">
        <h1><?php //wp_title(''); ?></h1>
    </div>
</header> -->

<div class="container">
    <!-- hero -->
    <div class="header-service">
        <div class="wrap">
            <h1 data-aos="fade-left" data-aos-duration="1000" data-aos-delay="600">Resources</h2>
        </div>
    </div>
</div>

<!-- <div class="blog-wrap"> -->

    <!-- <div class="container"> -->
        <div id="primary" class="max-w-7xl px-8 mx-auto grid gap-x-7 md:grid-cols-3">


            <main id="main" class="site-main col-span-2">

            <?php
            if ( have_posts() ) :

                if ( is_home() && ! is_front_page() ) :
                    ?>
                    <header>
                        <h1 class="page-title screen-reader-text text-4xl text-blue"><?php single_post_title(); ?></h1>
                    </header>
                    <?php
                endif;

                /* Start the Loop */
                while ( have_posts() ) :
                    the_post();

                    /*
                    * Include the Post-Type-specific template for the content.
                    * If you want to override this in a child theme, then include a file
                    * called content-___.php (where ___ is the Post Type name) and that will be used instead.
                    */
                    get_template_part( 'template-parts/content', get_post_type() );

                endwhile;

                the_posts_navigation();

            else :

                get_template_part( 'template-parts/content', 'none' );

            endif;
            ?>

            <!-- <div id="pagination">
                <ul class="pagination">
                        <li id="previous-stories" class="arrow">
                                <?php previous_posts_link( '<i class="fas fa-arrow-left"></i> Previous Articles' ); ?>
                        </li>
                        <li id="next-stories" class="arrow">
                                <?php next_posts_link( 'Next Articles <i class="fas fa-arrow-right"></i>' ); ?>
                        </li>
                </ul>
            </div> -->
            <!-- /#pagination -->

            </main><!-- #main -->
            <aside class="col-span-1">
                <div class="bg-white px-12 py-5 min-h-[730px]">
                    <?php dynamic_sidebar( 'sidebar-1' ); ?>
                </div>
            </aside>
        </div>
    <!-- </div> -->
    <!-- #primary -->

<!-- </div> -->

<?php get_footer(); ?>
