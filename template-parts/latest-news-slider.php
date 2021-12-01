<section id="latest-news">
    <div class="info-container">
        <h2 class="heading separator separator-top">
            Latest News
        </h2>
        <p>Find out the latest on EU-related activities and events in the Western Balkans.</p>
        <a href="#" class="btn d-block btn-arrow btn-lblue w-fit-content">VIEW MORE</a>
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
                    <div class="single-slide swiper-slide d-flex flex-direction-row flex-wrap justify-content-start align-items-center" style="background:url(<?= get_the_post_thumbnail_url(); ?>);">
                        <div class="country-tag-wrapper">
                            <div class="country-tag">
                                <?php $featured_testimonial = get_field('country_tag', $post_object->ID); ?>
                                <?php $posts = get_field('country_tag'); ?>
                                <?php if ($posts) : ?>
                                    <?php foreach ($posts as $post) : // variable must be called $post (IMPORTANT) 
                                    ?>
                                        <?php setup_postdata($post); ?>
                                        <a href="<?php the_permalink(); ?>"> <?php the_title(); ?></a>
                                    <?php endforeach; ?>
                                    <?php wp_reset_postdata(); ?>
                                <?php endif; ?>
                            </div>

                            <!-- <h2><?= the_field('country_tag'); ?></h2> -->

                            <div class="additional-tags">+3</div>
                        </div>
                        <p class="date"><?= get_the_date(); ?></p>
                        <h3><?php the_title(); ?></h3>
                    </div>
            <?php
                }
            } else {
                // no posts found
            }

            // Restore original Post Data
            wp_reset_postdata();
            ?>
        </div>
    </div>
</section>