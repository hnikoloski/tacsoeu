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
 * 
 */

get_header();
?>

<?php
require('template-parts/hero-inner.php');
?>
<div class="archive-grid page-padding-x page-padding-y">

    <?php
    if (have_posts()) :

        if (is_home() && !is_front_page()) :
        endif;


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
    the_posts_pagination(array(
        'mid_size' => 2,
        'type' => 'list',
        'prev_text'    => sprintf('<i class="fas fa-chevron-left"></i> %1$s', __('', 'text-domain')),
        'next_text'    => sprintf('%1$s <i class="fas fa-chevron-right"></i>', __('', 'text-domain')),
    ));
    ?>
</div><!-- #main -->
<?php
get_footer();
