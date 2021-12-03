<div class="about-page about-page-consortium page-padding page-padding-x page-padding-y">
    <div class="content">
        <?php if (have_rows('consortium_fields')) : ?>
            <?php while (have_rows('consortium_fields')) : the_row();
                $image = get_sub_field('image');
            ?>
                <div class="single-box">
                    <div class="top-bar">
                        <h3><?php the_sub_field('title'); ?></h3>
                        <div class="img-wrapper">
                            <img src="<?= $image; ?>" alt="<?= the_sub_field('title'); ?>">
                        </div>
                    </div>
                    <?php the_sub_field('content'); ?>
                </div>
            <?php endwhile; ?>
        <?php endif; ?>
    </div>
</div>