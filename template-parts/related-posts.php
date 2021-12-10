<?php

$related = get_posts(array('category__in' => wp_get_post_categories($post->ID), 'numberposts' => 4, 'post_type' => get_post_type(), 'post__not_in' => array($post->ID)));
if ($related) foreach ($related as $post) {
    setup_postdata($post); ?>
    <a href="<?= the_permalink(); ?>" class="blog-card d-block single-slide swiper-slide d-flex flex-direction-col flex-wrap justify-content-start align-items-start">
        <div class="img-wrapper">
            <img src="<?= get_the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>">
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

<?php }
wp_reset_postdata();
