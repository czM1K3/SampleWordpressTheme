<?php get_header(); ?>
    <div class="main page">
        <h1 class="<?php the_title(); ?>"><?php the_title(); ?></h1>
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <?php the_content(); ?>
        <?php endwhile;endif; ?>
    </div>
<?php get_footer(); ?>