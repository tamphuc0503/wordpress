<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package anydownload
 */

get_header();
?>
    <main id="primary" class="site-main">
        <article class="container mt-8">
            <div class="row align-items-center">
                <div class="col-12">
                    <div>

                    <?php
                    while ( have_posts() ) :
                        the_post();

                        get_template_part( 'template-parts/content', get_post_type() );

                    endwhile; // End of the loop.
                    ?>

                    </div>
                </div>
            </div>
        </article>
    </main>

<?php
get_footer();
