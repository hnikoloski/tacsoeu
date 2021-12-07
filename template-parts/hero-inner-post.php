<div class="hero-inner hero-inner-post">
    <div class="pos-r">
        <?php if (function_exists('cu_wp_custom_breadcrumbs')) cu_wp_custom_breadcrumbs(); ?>
        <a href="#!" class="back-btn"><i class="far fa-long-arrow-alt-left"></i>Back</a>
    </div>
    <h2 class="heading"><?php the_title(); ?></h2>
    <p class="date"><?= get_the_date(); ?></p>

</div>