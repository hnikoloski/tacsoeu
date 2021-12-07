<?php

/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * 
 */

get_header();
?>

<?php
require('template-parts/hero-inner-post.php');
?>
<main id="primary" class="site-main page-padding-x page-padding-y single-post single-post-<?= get_post_type(); ?>">
	<article>
		<div class="featured-image">
			<img src="<?= get_the_post_thumbnail_url(); ?>" alt="<?= the_title(); ?>" class="full-size-img full-size-img-cover">
		</div>
		<div class="the-content">
			<?php the_content(); ?>
		</div>
	</article>
	<aside>
		<div class="sidebar-content">
			<h3 class="title">Related <?= get_post_type(); ?>s</h3>

			<?php
			require('template-parts/related-posts.php');
			?>

		</div>
	</aside>
	<div class="share-wrapper d-flex flex-direction-row flex-wrap justify-content-start align-items-center">
		<p>Share:</p>
		<ul class="d-flex flex-direction-row flex-wrap justify-content-start align-items-center">
			<li><a href="#!" class="facebook share-btn d-flex align-items-center justify-content-center"><i class="fab fa-facebook-f"></i></a></li>
			<li><a href="#!" class="twitter share-btn d-flex align-items-center justify-content-center"><i class="fab fa-twitter"></i></a></li>
			<li><a href="#!" class="linkedin share-btn d-flex align-items-center justify-content-center"><i class="fab fa-linkedin-in"></i></a></li>
		</ul>
	</div>
</main><!-- #main -->

<?php
get_footer();
