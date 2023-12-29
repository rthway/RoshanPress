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

    <div class="header-ads">
        <?php
        // Display header_ads_image if available, otherwise display header_ads_code
        $header_ads_image = get_theme_mod('header_ads_image', '');
        $header_ads_code = get_theme_mod('header_ads_code', '');

        if (!empty($header_ads_image)) {
            echo '<img src="' . esc_url($header_ads_image) . '" alt="Header Advertisement Image">';
        } elseif (!empty($header_ads_code)) {
            echo $header_ads_code;
        }
        ?>
    </div>
</header>

</html>
