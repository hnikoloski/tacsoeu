<div class="about-page about-page-who-we-are page-padding page-padding-x page-padding-y">
    <div class="person-tabber-content">
        <div class="tab" id="projectTeam">

            <?php
            // WP_Query arguments
            $args = array(
                'post_status'            => array('publish'),
                'post_type'              => array('people'),
                'posts_per_page'         => '-1',
                'meta_key' => 'person_type',
                'meta_value' => 'projectTeam',
            );
            // The Query
            $query = new WP_Query($args);

            // The Loop
            if ($query->have_posts()) {
                while ($query->have_posts()) {
                    $query->the_post();
                    // do something
            ?>
                    <div class="single-person">
                        <div class="img-wrapper">
                            <img src="<?= get_the_post_thumbnail_url() ?>" alt="<?= the_title(); ?>" class="full-size-img full-size-img-cover">
                        </div>
                        <a href="<?= the_id(); ?>" class="btn d-block btn-fancy-arrow btn-lblue w-fit-content p-0"><i class="ml-0"></i></a>
                        <h3><?= the_title(); ?></h3>
                        <p><?php the_field('person_position'); ?></p>
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
        <div class="tab" id="countryCoordinator">
            <?php
            // WP_Query arguments
            $args = array(
                'post_status'            => array('publish'),
                'post_type'              => array('people'),
                'posts_per_page'         => '-1',
                'meta_key' => 'person_type',
                'meta_value' => 'countryCoordinator',
            );

            // The Query
            $query = new WP_Query($args);

            // The Loop
            if ($query->have_posts()) {
                while ($query->have_posts()) {
                    $query->the_post();
                    // do something
            ?>
                    <div class="single-person">
                        <div class="img-wrapper">
                            <img src="<?= get_the_post_thumbnail_url() ?>" alt="<?= the_title(); ?>" class="full-size-img full-size-img-cover">
                        </div>
                        <a href="<?= the_id(); ?>" class="btn d-block btn-fancy-arrow btn-lblue w-fit-content p-0"><i class="ml-0"></i></a>
                        <h3><?= the_title(); ?></h3>
                        <p><?php the_field('person_position'); ?></p>
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

        <div class="modal modal-person">
            <div class="modal-content">
                <a href="#!" class="close-modal"><i class="fal fa-times"></i></a>
                <div class="single-person">
                    <div class="img-wrapper">
                        <img src="<?= get_the_post_thumbnail_url() ?>" alt="<?= the_title(); ?>" class="full-size-img full-size-img-cover">
                    </div>
                    <h3></h3>
                    <p></p>
                </div>

                <div class="bio-wrapper">
                    <p></p>
                </div>
            </div>
        </div>
    </div>
</div>