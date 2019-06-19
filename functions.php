<?php

// adding CSS and JS

function ccr_setup(){
    wp_enqueue_style('google-fonts', "https://fonts.googleapis.com/css?family=Roboto");
    wp_enqueue_style('font-awesome', "https://use.fontawesome.com/releases/v5.8.1/css/all.css");
    wp_enqueue_style('style', get_stylesheet_uri());
    wp_enqueue_script("main", get_theme_file_uri('/js/main.js'), NULL, '1.0.0', true);
    wp_enqueue_script('jquery');
}

add_action('wp_enqueue_scripts', 'ccr_setup');

// adding theme support

function ccr_init() {
    add_theme_support('post-thumbnails');
    add_theme_support('title-tag');
    add_theme_support('html5', 
    array('comment-list', 'comment-form', 'search-form')
  );
}

add_action('after_setup_theme', 'ccr_init');

function ccr_custom_post_type() {
    register_post_type('schedule', 
        array(
            'rewrite' => array('slug' => 'schedule'),
            'labels' => array(
                'name' => 'schedule',
                'singular_name' => 'event',
                'add_new_item' => 'Schedule New Event',
                'edit_item' => 'Edit Event'
            ),
            'menu-icon' => 'dashicons-clipboard',
            'public' => true,
            'has_archive' => true,
            'supports' => array(
                'title', 'thumbnail', 'editor', 'excerpt', 'comments' 
            )
        )
    );

    register_post_type('photos', 
        array(
            'rewrite' => array('slug' => 'photos'),
            'labels' => array(
                'name' => 'photos',
                'singular_name' => 'photo',
                'add_new_item' => 'post new photo',
                'edit_item' => 'edit photo'
            ),
            'menu-icon' => 'dashicons-clipboard',
            'public' => true,
            'has_archive' => true,
            'supports' => array(
                'title', 'thumbnail', 'editor', 'excerpt', 'comments' 
            )
        )
    );
    
    register_post_type('slider', 
        array(
            'rewrite' => array('slug' => 'slider'),
            'labels' => array(
                'name' => 'Slider Images',
                'singular_name' => 'image',
                'add_new_item' => 'post new slider image',
                'edit_item' => 'edit slider image'
            ),
            'menu-icon' => 'dashicons-clipboard',
            'public' => true,
            'has_archive' => true,
            'supports' => array(
                'title', 'thumbnail', 'editor'
            )
        )
    );

}

add_action('init', 'ccr_custom_post_type');


//sidebar

function my_widgets() {
    register_sidebar(
        array(
            'name' => 'Main Sidebar',
            'id' => 'main_sidebar',
            'before_title' => '<h3>',
            'after_title' => '<?h3>'
        )
        );
}

add_action('widgets_init', 'my_widgets');

function search_filter($query) {
    if($query->is_search()){
        $query->set('post_type', array('post', 'project'));
    }
}

add_filter('pre_get_posts', 'search_filter');

