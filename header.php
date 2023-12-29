<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php wp_title('|', true, 'right'); ?></title>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<!-- Header Logo goes here -->
<header id="masthead" class="site-header" role="banner">
<div class="site-branding">
        <?php
        if (has_custom_logo()) {
            the_custom_logo();
        } else { ?>
            <h1 class="site-title"><a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name'); ?></a></h1>
            <p class="site-description"><?php bloginfo('description'); ?></p>
        <?php } ?>
    </div>

    <div class="header-ad">
        <?php do_action('roshanpress_header_ad'); // Display the header ad ?>
    </div>
</header>

</html>
