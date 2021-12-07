<?php

/**
 * Template part for displaying results in search pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * 
 */

?>

<a href="<?= the_permalink(); ?>" class="blog-card d-block single-slide swiper-slide d-flex flex-direction-col flex-wrap justify-content-start align-items-start">
	<div class="img-wrapper">
		<img src="<?= get_the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>">
	</div>

	<p class="date"><?= get_the_date(); ?></p>
	<h3><?= the_title(); ?></h3>
</a>