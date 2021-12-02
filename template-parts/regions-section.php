<section id="regions">
    <div class="top-bar d-flex flex-direction-row flex-wrap justify-content-space-between align-items-center animated fadeInUp">
        <h5>Regions</h5>
        <ul class="list-inline">
            <?php
            // WP_Query arguments
            $args = array(
                'post_status'            => array('publish'),
                'post_type'              => array('country'),
                'posts_per_page'         => '-1',

            );

            // The Query
            $query = new WP_Query($args);

            // The Loop
            if ($query->have_posts()) {
                $counter = 0;
                while ($query->have_posts()) {
                    $query->the_post();
                    // do something
            ?>
                    <li class="animated fadeInUp" data-delay="<?= $counter * 100; ?>"><a href="<?= the_permalink(); ?>"><?= the_title(); ?></a></li>
            <?php
                    $counter++;
                }
            } else {
                // no posts found
            }

            // Restore original Post Data
            wp_reset_postdata();
            ?>
        </ul>
    </div>
    <div class="quick-links-wrapper">

        <?php wp_nav_menu(
            array(
                'theme_location' => 'menu-2',
                'menu_class'     => 'd-flex flex-wrap justify-content-space-between align-items-center animated fadeInUp',
                'walker'          => new Description_Walker,
                'container'       => false,
            )
        );
        ?>
    </div>
</section>