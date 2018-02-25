<?php

/* ===================================================
    Theme Language
 * =================================================== */

function wordit_lang(){
    load_theme_textdomain('wordit', get_template_directory() . '/languages');
}

add_action('after_setup_theme', 'wordit_lang');


/* ===================================================
    Theme supports
 * =================================================== */

function wordit_theme_support() {
    add_theme_support('post-thumbnails');
    add_theme_support('automatic-feed-links');
    add_theme_support("title-tag");
    add_theme_support('custom-background', array(
        'default-color' => '#f5f4f2',
    ));
}

add_action('after_setup_theme', 'wordit_theme_support');

/* ===================================================
    Set Content width
 * =================================================== */

if (!isset($content_width)) {
    $content_width = 670;
}

/* ===================================================
    Load Front-end javascript and style
 * =================================================== */

if (!is_admin()) {

    function wordit_load_scripts() {
        
        if (is_singular() && get_option('thread_comments')) {
            wp_enqueue_script('comment-reply'); 
        }
        
        wp_enqueue_style("wordit-font-awesome", get_template_directory_uri() . "/css/font-awesome-4.2.0/css/font-awesome.min.css");
        wp_enqueue_style("wordit-css", get_stylesheet_uri());
        wp_enqueue_style("wordit-google-fonts", "//fonts.googleapis.com/css?family=Dancing+Script|Bree+Serif|Roboto");
        wp_enqueue_script("wordit-js", get_template_directory_uri() . "/js/wordit.js", array("jquery"));
    }

    add_action("wp_enqueue_scripts", "wordit_load_scripts");
}


/* ===================================================
  Register Header Menu
 * =================================================== */

function wordit_register_header_menu() {
    register_nav_menu('header_menu', __('Header Menu', 'wordit'));
}

add_action('after_setup_theme', 'wordit_register_header_menu');


/* ===================================================
    Post excerpt limit
 * =================================================== */

function wordit_excerpt_length($length) {
    return 100;
}
add_filter('excerpt_length', 'wordit_excerpt_length');

/* ===================================================
    Comments loop
 * =================================================== */


function wordit_comments($comment, $args, $depth) {
    $GLOBALS['comment'] = $comment;
    // Note </li> is omitted on purpose
    ?>
        <li <?php comment_class(); ?> id="li-comment-<?php comment_ID(); ?>">
            <div id="comment-<?php comment_ID(); ?>">
                <div class="comment-body">
                    <div class="comment-top">
                        <?php echo get_avatar($comment, 50); ?>
                        <span class="comment-author"><?php comment_author(); ?></span>
                        <br />
                        <span class="comment-date"><?php comment_date(); ?></span>
                    </div>

                    <div class="comment-content">
                        
                        <?php if ($comment->comment_approved == '0') : ?>
                            <p class="comment-awaiting-approval"><?php _e('Pending approval', 'wordit') ?></p><br />
                        <?php endif; ?>
                        <?php comment_text(); ?>
                    </div>

                    <div class="comment-reply">
                        <?php
                            comment_reply_link(array_merge(array('reply_text' => __('Reply', 'wordit')), array('depth' => $depth, 'max_depth' => $args['max_depth'])))
                        ?>
                        <span>&nbsp;</span>
                        <?php edit_comment_link(__('Edit', 'wordit')); ?>
                    </div>
                </div>
            </div>
    <?php
}



/* ===================================================
    Sidebars
 * =================================================== */

function wordit_register_sidebars() {

    register_sidebar( array(
        'name'          => __( 'Bottom 1 of 3 Sidebar', 'wordit' ),
        'id'            => 'wordit-bottom-13-sidebar',
        'description'   => __('Wordit bottom left sidebar widget area', 'wordit'),
        'class'         => '',
        'before_widget' => '<div id="%1$s" class="%2$s sidebar_widget">',
        'after_widget'  => '</div>',
        'before_title'  => '<h2 class="sidebar_widgettitle">',
        'after_title'   => '</h2>' )
    );

    register_sidebar( array(
        'name'          => __( 'Bottom 2 of 3 Sidebar', 'wordit' ),
        'id'            => 'wordit-bottom-23-sidebar',
        'description'   => __('Wordit bottom center sidebar widget area', 'wordit'),
        'class'         => '',
        'before_widget' => '<div id="%1$s" class="%2$s sidebar_widget">',
        'after_widget'  => '</div>',
        'before_title'  => '<h2 class="sidebar_widgettitle">',
        'after_title'   => '</h2>' )
    );

    register_sidebar( array(
        'name'          => __( 'Bottom 3 of 3 Sidebar', 'wordit' ),
        'id'            => 'wordit-bottom-33-sidebar',
        'description'   => __('Wordit bottom right sidebar widget area', 'wordit'),
        'class'         => '',
        'before_widget' => '<div id="%1$s" class="%2$s sidebar_widget">',
        'after_widget'  => '</div>',
        'before_title'  => '<h2 class="sidebar_widgettitle">',
        'after_title'   => '</h2>' )
    ); 

} 
add_action( 'widgets_init', 'wordit_register_sidebars' );


// Disables hardcodes style.css in wp-inclues/media.php
add_filter( 'use_default_gallery_style', '__return_false' ); 