<?php


get_header();
?>
<?php
require('template-parts/hero-inner.php');
?>
<div class="archive-grid page-padding-x page-padding-y">

    <?php
    // WP_Query arguments
    $args = array(
        'post_type'              => array(get_field('display_what')),
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

            <a href="<?= the_permalink(); ?>" data-post-id="<?= the_id(); ?>" class="blog-card d-block single-slide swiper-slide d-flex flex-direction-col flex-wrap justify-content-start align-items-start card-type card-type-<?= get_post_type(); ?>">
                <div class="img-wrapper">
                    <img src="<?= $imgUrl; ?>" alt="<?php the_title(); ?>">
                </div>
                <?php
                $posts = get_field('country_tag');

                if ($posts) :  $counter = 0; ?>
                    <div class="country-tags">
                        <?php foreach ($posts as $key => $post_object) :
                            $counter++;
                            if ($key == 0) {
                        ?>
                                <!-- <a href="<?php echo get_permalink($post_object->ID); ?>" class="main-country"><?php echo get_the_title($post_object->ID); ?></a> -->
                                <div class="main-country"><?php echo get_the_title($post_object->ID); ?></div>
                            <?php
                            };
                        endforeach;
                        if (count($posts) - 1 > 1) {  ?>
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
    if (get_field('display_what') == 'video') {
    ?>

        <div class="modal modal-video">
            <div class="modal-content">
                <a href="#!" class="close-modal"><i class="fal fa-times"></i></a>
                <div class="video-wrapper">
                </div>
            </div>
        </div>


    <?php
    }
    ?>

</div>

<?php
get_footer();
