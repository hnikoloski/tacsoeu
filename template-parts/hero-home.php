<div class="hero-home swiper">
    <div class="swiper-wrapper">
        <?php
        // WP_Query arguments
        $args = array(
            'post_status'            => array('publish'),
            'posts_per_page'         => '3',
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
                    <div class="content">
                        <p class="date"><?= get_the_date(); ?></p>
                        <h2><?php the_title(); ?></h2>
                        <h4><?php the_field('sub_title'); ?></h4>
                        <a href="<?php the_permalink(); ?>" class="btn d-block btn-arrow btn-lblue w-fit-content"> VIEW MORE</a>
                    </div>
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
    <div class="swiper-pagination"></div>
    <div class="follow-us-wrapper d-flex align-items-center align-content-center">
        <p>Follow Us On:</p>
        <ul class="socials list-inline">
            <?php if (get_field('facebook_url', 'option')) : ?>
                <li>
                    <a href="<?php the_field('facebook_url', 'option'); ?>" target="_blank" rel="noopener noreferrer"><i class="fb-icon"></i></a>
                </li>
            <?php endif; ?>
            <?php if (get_field('twitter_url', 'option')) : ?>
                <li>
                    <a href="<?php the_field('twitter_url', 'option'); ?>" target="_blank" rel="noopener noreferrer"><i class="twitter-icon"></i></a>
                </li>
            <?php endif; ?>
            <?php if (get_field('youtube_url', 'option')) : ?>
                <li>
                    <a href="<?php the_field('youtube_url', 'option'); ?>" target="_blank" rel="noopener noreferrer"><i class="yt-icon"></i></a>
                </li>
            <?php endif; ?>
            <?php if (get_field('linkedin_url', 'option')) : ?>
                <li>
                    <a href="<?php the_field('linkedin_url', 'option'); ?>" target="_blank" rel="noopener noreferrer"><i class="linkedin-icon"></i></a>
                </li>
            <?php endif; ?>

        </ul>
    </div>
</div>