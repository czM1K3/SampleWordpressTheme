<?php get_header(); ?>
    <div class="main archive">
        <h1><?php single_cat_title(); ?></h1>

        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <div class="post">
                <h3><?php the_title(); ?></h3>
                <div class="first">
                    <?php if (has_post_thumbnail()): ?>
                        <img src="<?php the_post_thumbnail_url('smallest'); ?>'" alt="">
                    <?php endif; ?>
                    <?php the_excerpt(); ?>
                </div>
                <div class="second">
                    <a href="<?php the_permalink(); ?>">Show post</a>
                </div>
            </div>
        <?php endwhile;endif; ?>

    </div>
<?php get_footer(); ?>