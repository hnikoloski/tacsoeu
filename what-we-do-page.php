<?php

/**
 * Template Name: What we do Page
 *
 */

get_header();
?>

<?php

require('template-parts/hero-inner.php');

?>
<div class="the-content page-padding page-padding-x page-padding-y what-we-do-page">
    <?php the_content(); ?>
</div>

<?php
get_footer();
