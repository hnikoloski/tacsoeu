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
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis optio tenetur non cupiditate repellendus debitis unde nobis deserunt amet aliquam. Vero non error ad pariatur nobis sint ipsa eum quasi!
                        Assumenda, quia at nisi totam illo nam ipsum cum voluptatibus quisquam quo excepturi id amet! Fuga consectetur vel pariatur voluptatibus molestiae! Dolore ipsam hic magnam ipsa, eaque praesentium unde assumenda.
                        Consequatur ipsum iure accusamus eum ut obcaecati ipsam mollitia voluptate. Itaque, minus necessitatibus aliquid quasi doloribus non dignissimos qui exercitationem ratione praesentium suscipit vitae nisi fuga soluta. Dignissimos, commodi accusamus?
                        Voluptates eius, modi officiis officia, inventore facilis doloremque facere pariatur accusamus nisi impedit deleniti autem porro fugiat quidem. Distinctio quasi ab amet dignissimos ratione itaque accusamus doloribus esse impedit eaque?
                        Sapiente odio exercitationem dolor, similique vitae libero recusandae omnis in numquam accusamus minima ex incidunt? Animi culpa et facere, quae id corrupti voluptatibus. Recusandae, cum! Repellendus asperiores omnis harum fuga.
                        Repellat cumque voluptatibus, libero ipsam necessitatibus minus reprehenderit iure doloremque placeat, et accusamus, voluptatem aliquid maxime enim quasi? Fugiat, ut pariatur? Eius porro optio magni alias neque, tempora natus sint.
                        Enim quis quia in voluptatem numquam. Beatae minima culpa officia modi in cumque accusantium, asperiores doloribus exercitationem similique voluptates cum ullam, voluptatem ipsum hic ipsa, perspiciatis doloremque laborum inventore maiores.
                        Non veritatis pariatur, voluptate exercitationem ex nostrum laudantium ab laborum dolore magni, eveniet, dolores ullam similique! Ut molestias incidunt necessitatibus porro doloribus dignissimos facere, nam culpa at aut perferendis eveniet.
                        Nisi molestias perspiciatis aliquid reprehenderit unde, quaerat maxime eius vitae doloribus voluptate repellendus eum temporibus animi cupiditate labore ea non voluptatum error tenetur quae commodi libero quibusdam. Veritatis, officia molestiae!
                        Voluptate fugit voluptas exercitationem nulla. Nihil aspernatur mollitia voluptate laborum veritatis asperiores in tenetur ipsum. Maiores illo nesciunt nostrum ex, amet nihil ipsa quisquam id sequi dignissimos, neque atque officiis!</p>
                </div>
            </div>
        </div>
    </div>
</div>