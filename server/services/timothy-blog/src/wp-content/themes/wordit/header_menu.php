<?php

$defaults = array(
    'theme_location' => 'header_menu',
    'menu' => '',
    'container' => 'div',
    'container_class' => 'the-menu',
    'container_id' => '',
    'menu_class' => '',
    'menu_id' => '',
    'echo' => true,
    'fallback_cb' => '',
    'before' => '',
    'after' => '',
    'link_before' => '',
    'link_after' => '',
    'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
    'depth' => 0,
    'walker' => ''
);
wp_nav_menu($defaults);
?>


<div class="the-menu-mini-header">
    <span class="the-menu-mini-toggle-button"><i class="fa fa-bars"></i></span>
</div>
<?php

$defaults = array(
    'theme_location' => 'header_menu',
    'menu' => '',
    'container' => 'div',
    'container_class' => 'the-menu-mini',
    'container_id' => '',
    'menu_class' => '',
    'menu_id' => '',
    'echo' => true,
    'fallback_cb' => '',
    'before' => '',
    'after' => '',
    'link_before' => '',
    'link_after' => '',
    'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
    'depth' => 0,
    'walker' => ''
);
wp_nav_menu($defaults);
?>

          