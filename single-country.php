<?php

/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * 
 */

get_header();
?>

<?php
require('template-parts/hero-inner-post.php');
?>

<div class="page-padding-x page-padding-y">
    <div class="the-content">
        <?php the_content(); ?>
    </div>
</div>
<?php
require('template-parts/related-news-slider.php');
?>
<?php
get_footer();
