
<?php

/**
 * Template Name: About Page
 *
 */

get_header();
?>

<?php

require('template-parts/hero-inner.php');
if (get_field('about_use_template') == 'basic') {
    require('template-parts/about-basic.php');
}
if (get_field('about_use_template') == 'whoWeAre') {
    require('template-parts/about-who-we-are.php');
}
?>

<?php
get_footer();
