<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo('charset'); ?>" />
        <link rel="profile" href="http://gmpg.org/xfn/11" />
        <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
        <?php wp_head(); ?>
    </head>
    <body <?php body_class(); ?>>
    
    <div class="header">
        <div class="header-inner">
            <div class="header-logo"><h1><a href="<?php echo esc_url(home_url('/')); ?>"><?php echo bloginfo('name'); ?></a></h1></div>
            <div id="header-search" class="header-search"><i class="fa fa-search"></i></div>
            <?php 
                if (has_nav_menu("header_menu")) {
                    get_template_part("header_menu"); 
                }
            ?>
        </div>
    </div>
        
    <?php get_template_part("searchform-popup"); ?>