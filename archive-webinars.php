<?php


get_header();
?>
<div class="hero-inner">
    <?php if (function_exists('cu_wp_custom_breadcrumbs')) cu_wp_custom_breadcrumbs(); ?>
    <h2 class="heading separator separator-before">Webinars</h2>
</div>

<section id="regions">
    <div class="top-bar d-flex flex-direction-row flex-wrap justify-content-space-between align-items-center animated fadeInUp">
        <h5>Regions</h5>
        <ul class="d-flex flex-direction-row flex-wrap justify-content-space-between align-items-center js-filter">
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
                    <li class="animated fadeInUp" data-delay="<?= $counter * 100; ?>"><a href="<?= get_post_field('post_name', get_the_ID()); ?>"><?= the_title(); ?></a></li>
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
<div class="archive-grid page-padding-x page-padding-y js-filter-results">

    <?php

    // WP_Query arguments
    $args = array(
        'post_type'              => array('webinars'),
        'post_status'            => array('publish'),
        'posts_per_page'         => '20',
        'paged'                  => get_query_var('paged'),
    );

    // The Query
    $query = new WP_Query($args);

    // The Loop
    if ($query->have_posts()) {
        while ($query->have_posts()) {
            $query->the_post();
            // do something
            if (get_post_type() == 'photo') {
                $imgUrl = get_field('tacso_gallery')[0]['url'];
            } else {
                $imgUrl = get_the_post_thumbnail_url();
            }
    ?>

            <a href="<?= the_permalink(); ?>" data-post-id="<?= the_id(); ?>" class="animated fadeInUp blog-card filter-single-result d-block single-slide swiper-slide d-flex flex-direction-col flex-wrap justify-content-start align-items-start card-type card-type-<?= get_post_type(); ?>">
                <div class="img-wrapper">
                    <img src="<?= $imgUrl; ?>" alt="<?php the_title(); ?>">
                </div>
                <?php
                $posts = get_field('country_tag');

                if ($posts) :  $counter = 0; ?>
                    <div class="country-tags">
                        <?php foreach ($posts as $key => $post_object) :

                        ?>
                            <input type="hidden" name="filterableVals" class="filterableVals <?= get_post_field('post_name', $post_object); ?>" value="<?= get_post_field('post_name', $post_object); ?>">
                            <?php
                            $counter++;
                            if ($key == 0) {
                            ?>
                                <!-- <a href="<?php echo get_permalink($post_object->ID); ?>" class="main-country"><?php echo get_the_title($post_object->ID); ?></a> -->
                                <div class="main-country"><?php echo get_the_title($post_object->ID); ?></div>
                            <?php
                            };
                        endforeach;
                        if (count($posts) > 1) {  ?>
                            <span class="additional-countries">
                                + <?= count($posts) - 1; ?>
                            </span>
                        <?php }; ?>
                    </div>
                <?php endif; ?>
                <p class="date"><?= get_the_date(); ?></p>
                <h3><?= $post->post_title ?></h3>
            </a>
    <?php
        }
    } else {
        // no posts found
    }

    // Pagination
    require('template-parts/pagination.php');
    ?>

    <?php
    // Restore original Post Data
    wp_reset_postdata();

    ?>


</div>

<?php
get_footer();
