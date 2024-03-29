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

    // Register AOS styles
    wp_register_style('aos-style', "https://unpkg.com/aos@2.3.1/dist/aos.css", array(), '2.3.1');
    // Register AOS script
    wp_register_script('aos-script', "https://unpkg.com/aos@2.3.1/dist/aos.js", array(), '2.3.1', true);
    // Enqueue AOS styles and script
    wp_enqueue_style('aos-style');
    wp_enqueue_script('aos-script');
    // Initialize AOS
    wp_add_inline_script('aos-script', 'AOS.init();');
    
    wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap', array(), null);
    wp_enqueue_style('font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
    wp_enqueue_script('main-arena-js', get_theme_file_uri('/bundle.js'), array('jquery'), '1.0', true);
    wp_enqueue_style('arena_main_styles', get_theme_file_uri('/build/style-index.css'));
    wp_enqueue_style('arena_extra_styles', get_theme_file_uri('/styles.css'));
}
add_action('wp_enqueue_scripts', 'theme_files');


function theme_features() {
    add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'theme_features');

function link_contact($type, $title, $linkto) {
    if ($type == "Link") {
        return $linkto;
    } else if ($type == "Email") {
        return "mailto:" . $title;
    } else if ($type == "Phone") {
        return "tel:" . $title;
    }
}

// Change default 'Media' to 'Library' to allow custom 'Media' post type
function rename_media_menu($menu) {
    global $menu;

    // Iterate over each item in the admin menu
    foreach($menu as $key => $value) {
        // upload.php only in array if default, prevents custom post type from being renamed
        if('Media' == $value[0] && 'upload.php' == $value[2]) {
            $menu[$key][0] = 'Library';
            $menu[$key][6] = 'dashicons-images-alt2';
        }
    }
}
add_action('admin_menu', 'rename_media_menu');