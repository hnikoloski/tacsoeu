<?php

/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * 
 */
$imgUrl = get_field('tacso_gallery')[0]['url'];
?>
<div data-post-id="<?= the_id(); ?>" class="d-block blog-card photos-card card-type card-type-photo">
    <div class="img-wrapper">
        <img src="<?= $imgUrl; ?>" alt="<?= the_title(); ?>" class="full-size-img full-size-img-cover">
    </div>
    <p class="date"><?= get_the_date(); ?></p>
    <h3><?php the_title(); ?></h3>
    <a href="<?= the_permalink(); ?>" class="btn d-block btn-arrow btn-lblue w-fit-content">VIEW MORE</a>
</div>