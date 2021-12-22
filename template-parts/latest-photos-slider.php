<section id="latest-photos" class="animated fadeInUp" data-delay="100">
    <div class="info-container">
        <h2 class="heading separator separator-before">
            Latest Photos
        </h2>
        <a href="#" class="btn d-block btn-fancy-arrow btn-lblue w-fit-content">VIEW MORE <i></i></a>
    </div>
    <div class="swiper latest-photos-slider">
        <div class="swiper-wrapper">
            <?php
            // WP_Query arguments
            $args = array(
                'post_status'            => array('publish'),
                'post_type'              => array('photo'),
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
                    <div class="single-slide d-block photos-card swiper-slide">
                        <div class="img-wrapper">
                            <img src="<?= get_field('tacso_gallery')[0]['url']; ?>" alt="<?= the_title(); ?>" class="full-size-img full-size-img-cover">
                        </div>
                        <p class="date"><?= get_the_date(); ?></p>
                        <h3><?php
                            $thetitle = $post->post_title; /* or you can use get_the_title() */
                            $getlength = strlen($thetitle);
                            $thelength = 25;
                            echo substr($thetitle, 0, $thelength);
                            if ($getlength > $thelength) echo "...";
                            ?></h3>
                        <a href="<?= the_permalink(); ?>" class="btn d-block btn-arrow btn-lblue w-fit-content">VIEW MORE</a>
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