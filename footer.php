<?php
$custom_logo_id = get_theme_mod('custom_logo');
$logoUrl = wp_get_attachment_image_src($custom_logo_id, 'full');
?>

<footer id="colophon" class="site-footer">
    <div class="site-info">
        <a href="/" class="logo-wrapper d-block">
            <img src="<?= $logoUrl[0]; ?>" alt="<?= get_bloginfo(); ?>" class="full-size-img full-size-img-contain">
        </a>
        <p class="logo-txt">Technical Assistance
            to Civil Society Organisations
            in the Western Balkans and Turkey
        </p>
        <p class="about-txt">TACSO's mission is to increase and improve the capacity and actions of CSOs as well as their democratic role. Through TACSO's capacity building activities, support and assistance, the aim is to achieve a strengthened civil society and to stimulate a civil society-friendly 'environment' and culture.</p>
        <div class="follow-us-wrapper d-flex align-items-start flex-direction-col align-content-center">
            <p>Follow Us On:</p>
            <ul class="socials list-inline">
                <?php if (get_field('facebook_url', 'option')) : ?>
                    <li>
                        <a href="<?php the_field('facebook_url', 'option'); ?>" target="_blank" rel="noopener noreferrer"><i class="fb-icon"></i></a>
                    </li>
                <?php endif; ?>
                <?php if (get_field('twitter_url', 'option')) : ?>
                    <li>
                        <a href="<?php the_field('twitter_url', 'option'); ?>" target="_blank" rel="noopener noreferrer"><i class="twitter-icon"></i></a>
                    </li>
                <?php endif; ?>
                <?php if (get_field('youtube_url', 'option')) : ?>
                    <li>
                        <a href="<?php the_field('youtube_url', 'option'); ?>" target="_blank" rel="noopener noreferrer"><i class="yt-icon"></i></a>
                    </li>
                <?php endif; ?>
                <?php if (get_field('linkedin_url', 'option')) : ?>
                    <li>
                        <a href="<?php the_field('linkedin_url', 'option'); ?>" target="_blank" rel="noopener noreferrer"><i class="linkedin-icon"></i></a>
                    </li>
                <?php endif; ?>

            </ul>
        </div>
    </div><!-- .site-info -->
</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>

</html>