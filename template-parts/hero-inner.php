<div class="hero-inner">
    <?php if (function_exists('cu_wp_custom_breadcrumbs')) cu_wp_custom_breadcrumbs(); ?>
    <h2 class="heading separator separator-before"><?php the_title(); ?></h2>
    <p><?= get_the_excerpt(); ?></p>
</div>