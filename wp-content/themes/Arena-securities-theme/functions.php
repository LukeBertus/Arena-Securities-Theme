<?php 

function theme_files() {
    wp_deregister_script('jquery');
    // jQuery
    wp_enqueue_script('jquery', 'https://code.jquery.com/jquery-3.4.1.min.js', array(), null, true);
    wp_script_add_data('jquery', 'integrity', 'sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=');
    wp_script_add_data('jquery', 'crossorigin', 'anonymous');

    // Popper.js
    wp_enqueue_script('popper', 'https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js', array('jquery'), null, true);
    wp_script_add_data('popper', 'integrity', 'sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo');
    wp_script_add_data('popper', 'crossorigin', 'anonymous');

    // Bootstrap JS
    wp_enqueue_script('bootstrap-js', 'https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js', array('jquery', 'popper'), null, true);
    wp_script_add_data('bootstrap-js', 'integrity', 'sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6');
    wp_script_add_data('bootstrap-js', 'crossorigin', 'anonymous');

    // Bootstrap CSS
    wp_enqueue_style('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css');
    wp_style_add_data('bootstrap', 'integrity', 'sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh');
    wp_style_add_data('bootstrap', 'crossorigin', 'anonymous');

    wp_enqueue_style('google-fonts', '//fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap');
    wp_enqueue_style('font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
    wp_enqueue_style('arena_main_styles', get_theme_file_uri('/build/style-index.css'));
    wp_enqueue_style('arena_extra_styles', get_theme_file_uri('/css/dist/styles.css'));
}
add_action('wp_enqueue_scripts', 'theme_files');


function theme_features() {
    add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'theme_features');