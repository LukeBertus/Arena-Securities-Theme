<?php 

function themeFiles() {
    wp_enqueue_script('bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js');
    wp_enqueue_style('google-fonts', '//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i|Roboto:100,300,400,400i,700,700i');
    wp_enqueue_style('font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
    wp_enqueue_style('arena_main_styles', get_theme_file_uri('/build/style-index.css'));
    wp_enqueue_style('arena_extra_styles', get_theme_file_uri('/css/dist/styles.css'));
}
add_action('wp_enqueue_scripts', 'themeFiles');