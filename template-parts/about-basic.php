<div class="about-page about-page-basic page-padding page-padding-x page-padding-y">
    <div class="the-content">
        <?php the_content(); ?>
    </div>
    <div class="the-activities">
        <h2 class="heading separator separator-top"><?php the_field('activities_title'); ?></h2>
        <?php the_field('activities_description'); ?>
        <h3><?php the_field('activities_sub_title'); ?></h3>
        <?php if (have_rows('activities_repeater')) :
            $counter = 0; ?>

            <div class="d-flex flex-direction-row flex-wrap justify-content-start align-items-start">

                <?php while (have_rows('activities_repeater')) : the_row(); ?>
                    <div class="single-activity animated fadeInUp" data-delay="<?= $counter * 100; ?>">
                        <h5><?php the_sub_field('title'); ?></h5>
                        <p><?php the_sub_field('content'); ?></p>
                    </div>
                <?php
                    $counter++;
                endwhile; ?>

            </div>

        <?php endif; ?>
    </div>
    <div class="target-groups d-flex flex-direction-row flex-wrap justify-content-space-between align-items-center ">
        <div class="content animated fadeInLeft">
            <h2 class="heading separator separator-top"><?php the_field('target_groups_title'); ?></h2>
            <?php the_field('target_group_content'); ?>
        </div>
        <?php
        $image = get_field('target_featured_image');
        if (!empty($image)) : ?>
            <div class="img-wrapper animated fadeInRight">
                <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" class="full-size-img" />
            </div>
        <?php endif; ?>
    </div>
</div>