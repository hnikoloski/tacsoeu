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
<main id="primary" class="site-main <?php if (get_post_type() != 'photo') { ?>page-padding-x page-padding-y <?php }; ?> single-post single-post-<?= get_post_type(); ?>">
	<?php if (get_post_type() != 'photo') { ?>
		<article>
			<div class="featured-image">
				<img src="<?= get_the_post_thumbnail_url(); ?>" alt="<?= the_title(); ?>" class="full-size-img full-size-img-cover">
			</div>
			<div class="the-content">
				<?php the_content(); ?>
			</div>

			<div class="share-wrapper d-flex flex-direction-row flex-wrap justify-content-start align-items-center">
				<p>Share:</p>
				<ul class="d-flex flex-direction-row flex-wrap justify-content-start align-items-center">
					<li><a href="#!" class="facebook share-btn d-flex align-items-center justify-content-center"><i class="fab fa-facebook-f"></i></a></li>
					<li><a href="#!" class="twitter share-btn d-flex align-items-center justify-content-center"><i class="fab fa-twitter"></i></a></li>
					<li><a href="#!" class="linkedin share-btn d-flex align-items-center justify-content-center"><i class="fab fa-linkedin-in"></i></a></li>
				</ul>
			</div>
		</article>
		<aside>
			<div class="sidebar-content">
				<h3 class="title">Related <?php $object = get_post_type_object(get_post_type())->labels;
											echo $object->name; ?></h3>
				</h3>

				<?php
				require('template-parts/related-posts.php');
				?>

			</div>
		</aside>
	<?php } else { ?>
		<article class="single-post-photo">
			<div class="swiper single-photo-slider">
				<div class="swiper-wrapper">
					<?php
					$images = get_field('tacso_gallery');
					if ($images) : ?>

						<?php foreach ($images as $image) : ?>
							<a href="<?php echo esc_url($image['url']); ?>" data-fancybox="gallery" class="single-slide swiper-slide">
								<img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
							</a>
							<p><?php echo esc_html($image['caption']); ?></p>
						<?php endforeach; ?>
					<?php endif; ?>
				</div>
				<div class="swiper-btns-wrapper">
					<div class="swiper-button swiper-button-prev"><i class="fas fa-chevron-left"></i></div>
					<div class="swiper-button swiper-button-next"><i class="fas fa-chevron-right"></i></div>
				</div>
			</div>

		</article>
	<?php }; ?>
</main><!-- #main -->

<?php
get_footer();
