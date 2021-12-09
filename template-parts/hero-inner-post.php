<div class="hero-inner hero-inner-post">
    <div class="pos-r">
        <?php if (function_exists('cu_wp_custom_breadcrumbs')) cu_wp_custom_breadcrumbs(); ?>
        <a href="<?= wp_get_referer(); ?>" class="back-btn"><i class="far fa-long-arrow-alt-left"></i>Back</a>
    </div>
    <h2 class="heading separator separator-before"><?php the_title(); ?></h2>
    <?php if (get_post_type() != 'photo') : ?>
        <p class="date"><?= get_the_date(); ?></p>
    <?php else : ?>
        <p class="date no-icon"><?= count(get_field('tacso_gallery')); ?> photos</p>
    <?php endif; ?>
</div>