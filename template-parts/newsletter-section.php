<section id="newsletter-section">
    <?php
    // WP_Query arguments
    $args = array(
        'post_status'            => array('publish'),
        'post_type'              => array('newsletter'),
        'posts_per_page'         => '1',
    );

    // The Query
    $query = new WP_Query($args);

    // The Loop
    if ($query->have_posts()) {
        while ($query->have_posts()) {
            $query->the_post();
            // do something
    ?>
            <div class="box-container d-flex flex-direction-row flex-wrap justify-content-center align-items-center animated fadeInLeft">
                <div class="imgs-wrapper">
                    <img src="<?= get_the_post_thumbnail_url(); ?>" alt="<?= get_the_title(); ?>">
                    <img src="<?= the_field('secondary_featured_image'); ?>" alt="<?= get_the_title(); ?>">
                </div>
                <div class="content">
                    <h3><?= the_title(); ?></h3>
                    <p><?= get_the_excerpt(); ?></p>
                    <a href="<?= the_permalink(); ?>" class="btn d-block btn-arrow btn-lblue w-fit-content">VIEW MORE</a>

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
    <div class="additional-boxes">
        <div class="single-box animated fadeInRight">
            <h3><?= the_field('box_1_title'); ?></h3>
            <p><?= the_field('box_1_description'); ?></p>
            <a href="<?= the_field('box_1_link'); ?>" class="btn d-block btn-arrow btn-arrow-minimal w-fit-content">View More</a>
        </div>
        <div class="single-box animated fadeInRight" data-delay="200">
            <h3><?= the_field('box_2_title'); ?></h3>
            <p><?= the_field('box_2_description'); ?></p>
            <a href="<?= the_field('box_2_link'); ?>" class="btn d-block btn-arrow btn-arrow-minimal w-fit-content">View More</a>
        </div>
    </div>
</section>