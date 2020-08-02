<!DOCTYPE html>
<html>
    <head>
        <?php wp_head(); ?>
        <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="HandheldFriendly" content="true">
        <meta charset="UTF-8">

        <title><?php echo get_bloginfo('name'); ?></title>
    </head>
    <body <?php body_class(); ?> >
        <header>
            <div class="header">
                <?php echo get_custom_logo() ;?>
<!--                <a href="--><?php //esc_url(home_url('/')) ?><!--"></a>-->
                <div class="menu-icon" onclick="menuShowHide()"></div>
                <div class="header_text">

                    <h1><?php echo get_bloginfo('name'); ?></h1>
                    <h2> <?php echo get_bloginfo('description'); ?></h2>
                </div>
            </div>

            <?php wp_nav_menu(
                array(
                    'theme_location' => 'top-menu',
                )
            ); ?>
        </header>