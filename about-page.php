
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
    require('template-parts/about/about-basic.php');
}
if (get_field('about_use_template') == 'whoWeAre') {
    require('template-parts/about/about-who-we-are.php');
}
if (get_field('about_use_template') == 'consortium') {
    require('template-parts/about/about-consortium.php');
}
if (get_field('about_use_template') == 'europeanUnion') {
    require('template-parts/about/about-eu-union.php');
}

?>

<?php
get_footer();
