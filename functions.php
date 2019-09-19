<?php
add_filter( 'jetpack_development_mode', '__return_true' );

function apBlog_post_thumbnails() {
    add_theme_support( 'post-thumbnails' );
    add_post_type_support('page', 'excerpt');
}
add_action( 'after_setup_theme', 'apBlog_post_thumbnails' );



function apBlog_widgets_init() {
    register_sidebar( array(
        'name'          => __('top-banner-widget', 'apBlog'),
        'id'            => 'sidebar-1',
        'before_widget' => '<div id="%1$s" class="widget-banner %2$s">',
        'after_widget'  => '</div>',
    )   );

    register_sidebar( array(
        'name'          => __('bottom-banner-widget', 'apBlog'),
        'id'            => 'sidebar-2',
        'before_widget' => '<div id="%1$s" class="widget-banner %2$s">',
        'after_widget'  => '</div>',
    )   );
}
add_action( 'widgets_init', 'apBlog_widgets_init');
?>