<section id="related-country-news">
    <div class="info-container ">
        <h2 class="heading separator separator-before animated fadeInLeft" data-delay="200">
            COUNTRY News
        </h2>
        <a href=" <?= get_post_type_archive_link('post'); ?>" class="btn d-block btn-fancy-arrow btn-lblue w-fit-content">VIEW MORE <i></i></a>
    </div>
    <div class="swiper latest-news-slider">
        <div class="swiper-wrapper">
            <?php
            // WP_Query arguments
            $args = array(
                'post_status'            => array('publish'),
                'posts_per_page'         => '10',
            );

            // The Query
            $query = new WP_Query($args);

            // The Loop
            if ($query->have_posts()) {
                while ($query->have_posts()) {
                    $query->the_post();
                    // do something
            ?>
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
            <?php
                }
            } else {
                // no posts found
            }
            // Restore original Post Data
            wp_reset_postdata();
            ?>
        </div>
        <div class="swiper-btns-wrapper">
            <div class="swiper-button swiper-button-prev"><i class="fas fa-chevron-left"></i></div>
            <div class="swiper-button swiper-button-next"><i class="fas fa-chevron-right"></i></div>
        </div>
    </div>
</section>