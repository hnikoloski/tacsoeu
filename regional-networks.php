<?php

/**
 * Template Name: Regional Networks
 *
 */

get_header();
require('template-parts/hero-inner.php');
?>
<div class="regional-networks page-padding-x page-padding-y">
    <h2 class="heading separator separator-before">Areas of work</h2>
    <?php

    // check for rows (parent repeater)
    if (have_rows('regional_networks')) : ?>
        <ul id="regional_networks-lists">
            <?php

            // loop through rows (parent repeater)
            while (have_rows('regional_networks')) : the_row(); ?>
                <li><a href="<?= the_sub_field('link'); ?>"> <?php the_sub_field('title'); ?>
                        <?php

                        // check for rows (sub repeater)
                        if (have_rows('tooltip_inner')) : ?>
                            <ul>
                                <?php

                                // loop through rows (sub repeater)
                                while (have_rows('tooltip_inner')) : the_row();

                                    // display each item as a list - with a class of completed ( if completed )
                                ?>
                                    <li><?php the_sub_field('title'); ?></li>
                                <?php endwhile; ?>
                            </ul>
                        <?php endif; //if( get_sub_field('tooltip_inner') ): 
                        ?>
                    </a>
                </li>

            <?php endwhile; // while( has_sub_field('regional_networks') ): 
            ?>
        </ul>
    <?php endif; // if( get_field('regional_networks') ): 
    ?>
</div>

<?php
get_footer();
