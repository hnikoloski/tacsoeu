<section id="latest-videos" class="animated fadeInUp" data-delay="100">
    <div class="info-container pr-0">
        <h2 class="heading separator separator-before">
            Latest Videos
        </h2>
        <a href="<?= get_post_type_archive_link('video'); ?>" class="btn d-block btn-fancy-arrow btn-lblue w-fit-content">VIEW MORE <i></i></a>
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
                    <a href="<?= the_permalink(); ?>" data-post-id="<?= the_id(); ?>" class="single-slide d-block video-card swiper-slide card-type card-type-<?= get_post_type(); ?>">

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
<div class="modal modal-video">
    <div class="modal-content">
        <a href="#!" class="close-modal"><i class="fal fa-times"></i></a>
        <div class="video-wrapper">
        </div>
    </div>
</div>