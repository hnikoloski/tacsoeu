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

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>

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
            <div class="nav-bar d-flex flex-wrap justify-content-space-between align-items-center align-content-center">
                <?php wp_nav_menu(
                    array(
                        'theme_location' => 'menu-1',
                        'menu_class'     => 'list-inline',
                        'container'      => false,
                    )
                );
                ?>
                <form action="/" method="get">
                    <input type="text" name="s" id="search" value="<?php the_search_query(); ?>" placeholder="Search Here..." />
                    <button class="disabled search-btn"><i class="fas fa-search"></i></button>
                    <button class="disabled search-close"><i class="fas fa-times"></i></button>
                </form>
            </div>
        </header><!-- #masthead -->