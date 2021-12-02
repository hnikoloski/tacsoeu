<section id="latest-videos">
    <div class="info-container">
        <h2 class="heading separator separator-before">
            Latest Videos
        </h2>
        <a href="#" class="btn d-block btn-fancy-arrow btn-lblue w-fit-content">VIEW MORE <i></i></a>
    </div>
    <div class="swiper latest-videos-slider">
        <div class="swiper-wrapper">
            <?php
            // WP_Query arguments
            $args = array(
                'post_status'            => array('publish'),
                'post_type'              => array('video'),
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
                    <a href="<?= the_permalink(); ?>" class="single-slide d-block video-card swiper-slide">
                        <div class="img-wrapper">
                            <img src="<?= get_the_post_thumbnail_url(); ?>" alt="<?= the_title(); ?>" class="full-size-img full-size-img-cover">
                        </div>
                        <h3><?php the_title(); ?></h3>
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
    </div>
</section>