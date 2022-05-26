<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * 
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <?php wp_head(); ?>
</head>
<?php
$custom_logo_id = get_theme_mod('custom_logo');
$logoUrl = wp_get_attachment_image_src($custom_logo_id, 'full');
?>

<body <?php body_class('overflow-hidden'); ?> id="ceiling">
    <?php wp_body_open(); ?>
    <div id="preloader">
        <!-- <div class="clock"></div>
        <h2>Loading</h2> -->
    </div>
    <a href="#ceiling" id="to-top">
        <i class="fas fa-chevron-up"></i>
    </a>
    <div id="page" class="site">
        <header id="masthead" class="site-header">
            <div class="top-bar d-flex flex-wrap justify-content-space-between align-items-center align-content-center">
                <div class="logo-banner">
                    <img src="<?= get_template_directory_uri(); ?>/assets/img/eu-banner.svg" alt="EU technical assistance to civil society organisations in the western balkans and turkey" class="full-size-img full-size-img-contain">
                </div>
                <a href="/" class="logo-wrapper d-block">
                    <img src="<?= $logoUrl[0]; ?>" alt="<?= get_bloginfo(); ?>" class="full-size-img full-size-img-contain">
                </a>
            </div>
            <div class="nav-bar pos-r d-flex flex-wrap justify-content-space-between align-items-center align-content-center">
                <a href="javascript:void(0);" aria-label="Burger Menu" id="menu-trigger">
                    <span></span>
                    <span></span>
                    <span></span>
                </a>
                <?php wp_nav_menu(
                    array(
                        'theme_location' => 'menu-1',
                        'menu_class'     => 'list-inline',
                        'container'      => false,
                    )
                );
                ?>
                <a href="#" class="newsletter-trigger"><i class="fal fa-envelope-open-text"></i>Subscribe</a>
                <div id="newsletter-modal">
                    <a href="#" class="close-modal-btn"><i class="far fa-times"></i></a>
                    <h4>Subscribe to our newsletter</h4>
                    <p>Signup for our newsletter to get the latest news, updates directly in your inbox</p>
                    <?php
                    $formCode = get_field('newsletter_shortcode', 'option');
                    echo do_shortcode($formCode); ?>
                </div>
                <form action="/" method="get">
                    <input type="text" name="s" id="search" value="<?php the_search_query(); ?>" placeholder="Search Here..." />
                    <input type="hidden" name="post_type" value="post" />
                    <button class="disabled search-btn" aria-label="Search button"><i class="far fa-search"></i></button>
                    <button class="search-close" aria-label="Close Search"><i class="fas fa-times"></i></button>
                </form>
            </div>
        </header><!-- #masthead -->