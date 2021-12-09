<?php

/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * 
 */
?>
<a href="<?= the_permalink(); ?>" data-post-id="<?= the_id(); ?>" class="d-block blog-card card-type card-type-video">
    <div class="img-wrapper">
        <img src="<?= get_the_post_thumbnail_url(); ?>" alt="<?= the_title(); ?>" class="full-size-img full-size-img-cover">
    </div>
    <h3><?php the_title(); ?></h3>
</a>