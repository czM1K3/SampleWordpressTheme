<?php get_header(); ?>
    <div class="main single">
        <h1><?php the_title(); ?></h1>

        <?php if (has_post_thumbnail()): ?>
            <div class="singleimg">
                <img src="<?php the_post_thumbnail_url('largest'); ?>'" alt="">
            </div>
        <?php endif; ?>

        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <?php the_content(); ?>
        <?php endwhile;endif; ?>
    </div>
<?php get_footer(); ?>