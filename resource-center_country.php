<?php

/**
 * Template Name: Resource center Country
 *
 */

get_header();
?>
<?php
require('template-parts/hero-inner.php');
?>
<div class="page-padding-x page-padding-y resource-center-country">
    <div class="container">
        <div class="row">
            <div class="label">
                <p>Name</p>
            </div>
            <div class="content">
                <p><?= the_field('name'); ?></p>
            </div>
        </div>

        <div class="row">
            <div class="label">
                <p>Implemented by</p>
            </div>
            <div class="content">
                <p><?= the_field('implemented_by'); ?></p>
            </div>
        </div>

        <div class="row">
            <div class="label">
                <p>Purpose:</p>
            </div>
            <div class="content">
                <p><?= the_field('purpose'); ?></p>
            </div>
        </div>

        <div class="row">
            <div class="label">
                <p>Services for CSOs:</p>
            </div>
            <div class="content">
                <p><?= the_field('services_for_csos'); ?></p>
            </div>
        </div>

        <div class="row">
            <div class="label">
                <p>Timeframe:</p>
            </div>
            <div class="content">
                <p><?= the_field('timeframe'); ?></p>
            </div>
        </div>
        <div class="row">
            <div class="label">
                <p>Address and contacts:</p>
            </div>
        </div>
        <?php if (have_rows('adress_and_contact')) : ?>
            <div class="row address">
                <?php while (have_rows('adress_and_contact')) : the_row();
                ?>
                    <div class="single-address">
                        <h5><?php the_sub_field('title'); ?></h5>
                        <p><?php the_sub_field('full_address'); ?></p>
                    </div>
                <?php endwhile; ?>
            </div>
        <?php endif; ?>
        <?php if (have_rows('contact_person')) : ?>
            <div class="row address">
                <div class="single-address">

                    <div class="label">
                        <p>Contact Persons:</p>
                    </div>
                </div>
                <?php while (have_rows('contact_person')) : the_row();
                ?>
                    <div class="single-address">
                        <h5><?php the_sub_field('title'); ?></h5>
                        <p><?php the_sub_field('full_address'); ?></p>
                    </div>
                <?php endwhile; ?>
            </div>
        <?php endif; ?>
        <div class="row social">
            <div class="single-social">

                <div class="label">
                    <p>Web-Site</p>
                </div>

                <a target="_blank" rel="noopener noreferrer" href="https://<?= the_field('website'); ?>"><?= the_field('website'); ?></a>

            </div>

            <div class="single-social">
                <div class="label">
                    <p>Social
                        media:</p>
                </div>
                <ul class="socials list-inline">
                    <?php if (get_field('fb_link')) : ?>
                        <li>
                            <a href="<?php the_field('fb_link'); ?>" aria-label="Facebook" target="_blank" rel="noopener noreferrer"><i class="fb-icon fb-icon-dark"></i></a>
                        </li>
                    <?php endif; ?>
                    <?php if (get_field('twitter_link')) : ?>
                        <li>
                            <a href="<?php the_field('twitter_link'); ?>" aria-label="Twitter" target="_blank" rel="noopener noreferrer"><i class="twitter-icon twitter-icon-dark"></i></a>
                        </li>
                    <?php endif; ?>
                    <?php if (get_field('linkedin_link')) : ?>
                        <li>
                            <a href="<?php the_field('linkedin_link'); ?>" aria-label="LinkedIn" target="_blank" rel="noopener noreferrer"><i class="linkedin-icon linkedin-icon-dark"></i></a>
                        </li>
                    <?php endif; ?>

                </ul>
            </div>
        </div>
    </div>
</div>
</div>

<?php
get_footer();
