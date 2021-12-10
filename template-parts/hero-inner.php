<div class="hero-inner">
    <?php if (function_exists('cu_wp_custom_breadcrumbs')) cu_wp_custom_breadcrumbs(); ?>
    <?php if (get_post_type() == 'photo') { ?>
        <h2 class="heading separator separator-before">Photos</h2>
    <?php } else { ?>
        <h2 class="heading separator separator-before"><?php single_post_title(); ?></h2>
    <?php } ?>
    <?php if (has_excerpt()) { ?>
        <p><?= get_the_excerpt(); ?></p>
    <?php };
    if (get_field('about_use_template') == 'whoWeAre') {
    ?>
        <div class="person-tabber-header">
            <ul>
                <li><a href="#projectTeam" class="active fancy-hover fancy-hover-lblue">Project team</a></li>
                <li><a href="#countryCoordinator" class="fancy-hover fancy-hover-lblue">Country Coordinator</a></li>
            </ul>
        </div>
    <?php
    }
    ?>
</div>