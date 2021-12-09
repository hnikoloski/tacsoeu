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
<div class="hero-inner">
    <?php if (function_exists('cu_wp_custom_breadcrumbs')) cu_wp_custom_breadcrumbs(); ?>
    <h2 class="heading separator separator-before">Success stories</h2>
</div>
<section id="regions">
    <div class="top-bar d-flex flex-direction-row flex-wrap justify-content-space-between align-items-center animated fadeInUp">
        <h5>Regions</h5>
        <ul class="d-flex flex-direction-row flex-wrap justify-content-space-between align-items-center">
            <?php
            // WP_Query arguments
            $args = array(
                'post_status'            => array('publish'),
                'post_type'              => array('country'),
                'posts_per_page'         => '-1',

            );

            // The Query
            $query = new WP_Query($args);

            // The Loop
            if ($query->have_posts()) {
                $counter = 0;
                while ($query->have_posts()) {
                    $query->the_post();
                    // do something

            ?>
                    <li class="animated fadeInUp country-filter" data-delay="<?= $counter * 100; ?>"><a href="<?= get_post_field('post_name', get_the_ID()); ?>"><?= the_title(); ?></a></li>
            <?php
                    $counter++;
                }
            } else {
                // no posts found
            }

            // Restore original Post Data
            wp_reset_postdata();
            ?>
        </ul>
    </div>

</section>
<?php
$terms = get_terms('storycategory');
?>
<div class="cat-filter">
    <?php
    if (!empty($terms) && !is_wp_error($terms)) {
    ?>
        <ul class="list-inline animated fadeInUp">
            <li class='single-cat'><a href="all" class="fancy-hover fancy-hover-lblue active">All</a></li>

            <?php
            foreach ($terms as $key => $term) {
            ?>
                <li class="single-cat"><a href="<?= $term->term_id; ?>" class="fancy-hover fancy-hover-lblue"><?= $term->name; ?></a></li>
            <?php }; ?>
        </ul>
    <?php }; ?>
</div>
<main id="primary" class="site-main site-archive story-archive page-padding page-padding-x page-padding-y archive-grid">
    <!-- Getting posts with js (scripts/stories.js) -->
</main><!-- #main -->

<?php
get_footer();
