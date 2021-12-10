<?php

/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * 
 */

get_header();
?>
<?php
require('template-parts/hero-inner.php');
?>
<main id="primary" class="site-main site-archive page-padding page-padding-x page-padding-y archive-grid">
    <?php if (have_posts()) : ?>

    <?php
        /* Start the Loop */
        while (have_posts()) :
            the_post();

            /*
				 * Include the Post-Type-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
				 */
            get_template_part('template-parts/content', get_post_type());

        endwhile;
    else :
        get_template_part('template-parts/content', 'none');


    endif;
    ?>
</main><!-- #main -->

<?php
get_footer();
