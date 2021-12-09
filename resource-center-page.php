<?php

/**
 * Template Name: Resource center Page
 *
 */

get_header();
?>
<?php
require('template-parts/hero-inner.php');
?>
<div class="page-padding-x page-padding-y resource-center-page">
    <div class="the-content">
        <?= the_content(); ?>
    </div>
    <div>
        <?php
        // WP_Query arguments
        $args = array(
            'post_type'              => array('country'),
            'post_status'            => array('publish'),
            'posts_per_page'         => '-1',
            'paged'                  => get_query_var('paged'),
            'orderby' => 'title',
            'order'   => 'ASC',
        );

        // The Query
        $query = new WP_Query($args);

        // The Loop
        if ($query->have_posts()) {
            while ($query->have_posts()) {
                $query->the_post();

        ?>

                <div class="single-country d-flex flex-wrap justify-content-space-between align-items-center align-content-center">
                    <div class="d-flex flex-wrap justify-content-start align-items-center align-content-center">
                        <div class="img-wrapper">
                            <img src="<?= the_field('country_flag'); ?>" alt="<?= the_title(); ?>">
                        </div>
                        <h4><?= the_title(); ?></h4>
                    </div>
                    <a href="<?= get_post_field('post_name', get_the_ID()); ?>" class="btn d-block btn-fancy-arrow btn-lblue w-fit-content">VIEW MORE <i></i></a>
                </div>
        <?php
            }
        } else {
            // no posts found
        }


        ?>

        <?php
        // Restore original Post Data
        wp_reset_postdata();
        ?>
    </div>
</div>

<?php
get_footer();
