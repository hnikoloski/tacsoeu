<?php

/**
 * Template Name: Contact Page
 *
 */

get_header();
?>
<div class="contact-us page-padding-x page-padding-y">
    <div class="top-bar">
        <?php if (function_exists('cu_wp_custom_breadcrumbs')) cu_wp_custom_breadcrumbs(); ?>
    </div>
    <div class="container">
        <div class="row">
            <div class="col">
                <h2 class="heading separator separator-before animated text-animation add-active" data-delay="100"> Contacts</h2>
                <h4 class="animated text-animation add-active" data-delay="200">EU TACSO 3 Project (GDSI)</h4>
                <ul>
                    <li class="animated fadeInLeft" data-delay="200"><a href="tel:<?= the_field('phone_number'); ?>"><i class="fas fa-phone-alt"></i><?= the_field('phone_number'); ?></a></li>
                    <li class="animated fadeInLeft" data-delay="400"><a href="mailto:<?= the_field('email'); ?>"><i class="fas fa-envelope"></i><?= the_field('email'); ?></a></li>
                    <li class="animated fadeInLeft" data-delay="600"><i class="fas fa-map-marker-alt"></i><?= the_field('full_address'); ?></li>
                </ul>
            </div>
            <div class="col col-map animated fadeInRight">


                <div id="map">

                    <?= do_shortcode('[leaflet-map zoom=16 zoomcontrol scrollwheel lat=42.00173969936559 lng=21.416533542391804]
                                        [leaflet-marker lat=42.00173969936559 lng=21.416533542391804 svg background="#f74444" iconClass="fas fa-circle" color="#fff" font-size="12px"]
                                        [/leaflet-marker]
                                    '); ?>

                </div>
            </div>
        </div>
    </div>
</div>

<?php
get_footer();
