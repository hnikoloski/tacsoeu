<footer id="colophon" class="site-footer">
    <div class="site-info d-flex flex-wrap justify-content-space-between align-items-start align-content-center">
        <div class="footer-about-col">
            <div class="d-flex flex-wrap justify-content-start align-items-center align-content-center">
                <a href="/" class="logo-wrapper d-block">
                    <img src="<?= the_field("footer_logo", 'option'); ?>" alt="<?= get_bloginfo(); ?>" class="full-size-img full-size-img-contain">
                </a>
                <p class="logo-txt">
                    <?= the_field('footer_logo_text', 'option'); ?>
                </p>
            </div>
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
        </div>
        <div class="footer-links-col">
            <h4 class="col-title">About</h4>
            <ul>
                <li><a href="#!" class="fancy-hover fancy-hover-lblue">Project Description</a></li>
                <li><a href="#!" class="fancy-hover fancy-hover-lblue">Who We Are</a></li>
                <li><a href="#!" class="fancy-hover fancy-hover-lblue">Consortium</a></li>
                <li><a href="#!" class="fancy-hover fancy-hover-lblue">European Union</a></li>
                <li><a href="#!" class="fancy-hover fancy-hover-lblue">Contacts</a></li>
            </ul>
        </div>
        <div class="footer-links-col">
            <h4 class="col-title">What we Do</h4>
            <ul class="space-s">
                <li><a href="#!" class="fancy-hover fancy-hover-lblue">Project Description</a></li>
                <li><a href="#!" class="fancy-hover fancy-hover-lblue">Who We Are</a></li>
                <li><a href="#!" class="fancy-hover fancy-hover-lblue">Consortium</a></li>
                <li><a href="#!" class="fancy-hover fancy-hover-lblue">European Union</a></li>
                <li><a href="#!" class="fancy-hover fancy-hover-lblue">Contacts</a></li>
            </ul>
        </div>
        <div class="footer-links-col">
            <h4 class="col-title">IPA BENEFICIARIES</h4>
            <ul class="space-s">
                <li><a href="#!" class="fancy-hover fancy-hover-lblue">Project Description</a></li>
                <li><a href="#!" class="fancy-hover fancy-hover-lblue">Who We Are</a></li>
                <li><a href="#!" class="fancy-hover fancy-hover-lblue">Consortium</a></li>
                <li><a href="#!" class="fancy-hover fancy-hover-lblue">European Union</a></li>
                <li><a href="#!" class="fancy-hover fancy-hover-lblue">Contacts</a></li>
            </ul>
        </div>
        <div class="footer-links-col">
            <h4 class="col-title"> LIBRARY</h4>
            <ul class="space-s">
                <li><a href="#!" class="fancy-hover fancy-hover-lblue">Project Description</a></li>
                <li><a href="#!" class="fancy-hover fancy-hover-lblue">Who We Are</a></li>
                <li><a href="#!" class="fancy-hover fancy-hover-lblue">Consortium</a></li>
            </ul>
            <h4 class="col-title">MEDIA</h4>
            <ul class="space-s">
                <li><a href="#!" class="fancy-hover fancy-hover-lblue">European Union</a></li>
                <li><a href="#!" class="fancy-hover fancy-hover-lblue">Contacts</a></li>
            </ul>
        </div>
        <div class="footer-links-col">
            <h4 class="col-title">SURVEYS</h4>
            <ul class="space-lg">
                <li><a href="#!" class="fancy-hover fancy-hover-lblue">Project Description</a></li>
                <li><a href="#!" class="fancy-hover fancy-hover-lblue">Who We Are</a></li>
                <li><a href="#!" class="fancy-hover fancy-hover-lblue">Consortium</a></li>
                <li><a href="#!" class="fancy-hover fancy-hover-lblue">Consortium</a></li>
            </ul>

        </div>
        <div class="footer-quick-links-wrapper d-flex flex-wrap justify-content-space-between align-items-center align-content-center">
            <div class="footer-copy">
                <p>This website was created and maintained with the financial support of the European Union. Its contents are the sole responsibility of GDSI Limited and do not neccessarily reflect the views of the European Union</p>
                <p>Kosovo (*) – This designation is without prejudice to positions on status, and is in line with UNSCR 1244/1999 and the ICJ opinion on the Kosovo declaration of independence.</p>
            </div>
            <ul class="quick-links d-flex flex-wrap justify-content-end align-items-start align-content-center">
                <li><a href="#!" class="fancy-hover fancy-hover-lblue">Cookies</a></li>
                <li><a href="#!" class="fancy-hover fancy-hover-lblue">Privacy Policy</a></li>
                <li><a href="#!" class="fancy-hover fancy-hover-lblue">Legal Notice</a></li>
            </ul>
        </div>
    </div><!-- .site-info -->
    <div class="footer-bottom-bar d-flex flex-wrap justify-content-space-between align-items-start align-content-center">
        <div class="eu-logo-wrapper">
            <img src="<?= the_field('footer_eu_logo', 'option'); ?>" alt="The information on this site is subject to a Disclaimer. Privacy Statement. Copyright Notice and Protection of personal data. © European Union, 2019">
        </div>
        <div class="additional-images">
            <?php if (have_rows('footer_additional_images', 'option')) : ?>

                <ul class="list-inline">

                    <?php while (have_rows('footer_additional_images', 'option')) : the_row(); ?>
                        <?php
                        $image = get_sub_field('footer_image');
                        $link =  get_sub_field('footer_image_link');
                        ?>
                        <li>
                            <?php if (($link)) {
                                $linkVal = 'href="' . $link . '" target="_blank"';
                            } else {
                                $linkVal = 'href="' . 'javascript:void(0);' . '"';;
                            }; ?>
                            <a <?= $linkVal; ?>>
                                <img src="<?= esc_url($image['url']); ?>" alt="<?= esc_attr($image['alt']); ?>">
                            </a>
                        </li>
                    <?php endwhile; ?>

                </ul>

            <?php endif; ?>
        </div>
    </div>
</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>

</html>