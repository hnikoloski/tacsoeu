<?php

/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * 
 */
$countryTags = get_field('country_tag');
?>
<a href="<?= the_permalink(); ?>" data-post-id="<?= the_id(); ?>" class=" blog-card d-block d-flex flex-direction-col flex-wrap justify-content-start align-items-start">
    <div class="img-wrapper">
        <img src="<?= get_the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>">
    </div>
    <?php

    if ($countryTags) :
    ?>
        <div class="country-tags">
            <?php
            foreach ($countryTags as $key => $countryTag) :

                if ($key == 0) { ?>
                    <div class="main-country"><?php echo $countryTag->post_title; ?></div>
                <?php
                };
                ?>

            <?php
            endforeach;
            if (count($countryTags) - 1 > 1) {  ?>
                <span class="additional-countries">
                    + <?= count($countryTags) - 1; ?>
                </span>
            <?php }; ?>
        </div>
    <?php
    endif;
    ?>
    <p class="date"><?= get_the_date(); ?></p>
    <h3><?= $post->post_title ?></h3>
</a>