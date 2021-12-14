<?php

/**
 * Template Name: Regional Network Single
 *
 */

get_header();
?>
<div class="hero-inner">
    <?php if (function_exists('cu_wp_custom_breadcrumbs')) cu_wp_custom_breadcrumbs();

    if (get_field('show_full_description') == 'no') {
    ?>

        <h2 class="heading separator separator-before"><?= get_the_title($post->post_parent); ?></h2>

    <?php } else {
    ?>
        <h2 class="heading separator separator-before"><?= get_the_title(); ?></h2>

    <?php
    }
    if (has_excerpt()) { ?>
        <p><?= get_the_excerpt(); ?></p>
    <?php }; ?>
</div>
<div class="regional-networks regional-networks-single page-padding-x page-padding-y">
    <div class="the_content">

        <?php
        if (get_field('show_full_description') == 'no') {
            the_content();
        } else {
        ?>
            <h2 class="heading separator separator-before"><?= get_the_title($post->post_parent); ?></h2>
            <div class="container">
                <div class="row">
                    <div class="col col-label">
                        <h3>Name</h3>
                    </div>
                    <div class="col">
                        <p>

                            <?php the_field('name'); ?>
                        </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col col-label">
                        <h3>Acronym</h3>
                    </div>
                    <div class="col">
                        <p>

                            <?php the_field('acronym'); ?>
                        </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col col-label">
                        <h3>Base/Coordination Office</h3>
                    </div>
                    <div class="col">
                        <p>

                            <?php the_field('base_office'); ?>
                        </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col col-label">
                        <h3>Coverage</h3>
                    </div>
                    <div class="col">
                        <p>

                            <?php the_field('coverage'); ?>
                        </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col col-label">
                        <h3>Brief Description</h3>
                    </div>
                </div>
                <div class="row">
                    <div class="col col-description">
                        <?php the_field('brief_description'); ?>
                    </div>
                </div>
                <div class="row">
                    <div class="col col-short">
                        <h5>Email</h5>
                        <a href="mailto:<?php the_field('email'); ?>"><?php the_field('email'); ?></a>
                    </div>
                    <div class="col col-short">
                        <h5>CSF project (year)</h5>
                        <p><?php the_field('project_year'); ?></p>
                    </div>
                </div>
                <div class="row">
                    <div class="col col-short">
                        <h5>Web-site</h5>
                        <a href="<?php the_field('website'); ?>" target="_blank">Visit Website</a>
                    </div>
                    <div class="col col-short">
                        <h5>Contact person</h5>
                        <p><?php the_field('contact_person'); ?></p>
                    </div>
                </div>
            </div>
        <?php
        };
        ?>
    </div>
</div>

<?php
get_footer();
