<?php 
function post_types () {
    // Media
    register_post_type('files', [
        'capability_type' => 'post',
        'map_meta_cap' => true,
        'supports' => ['title', 'editor', 'custom-fields'],
        'public' => true,
        'show_in_rest' => true,
        'has_archive' => true,
        'labels' => [
            'name' => 'Media',
            'add_new_item' => 'Add New Media',
            'edit_item' => 'Edit Media',
            'all_items' => 'All Media'
        ],
        'menu_icon' => 'dashicons-admin-media'
    ]);
    // Blog
    register_post_type('blog', [
        'capability_type' => 'post',
        'map_meta_cap' => true,
        'supports' => ['title', 'editor', 'custom-fields'],
        'public' => true,
        'show_in_rest' => true,
        'has_archive' => true,
        'labels' => [
            'name' => 'Blog',
            'add_new_item' => 'Add New Blog',
            'edit_item' => 'Edit Blog',
            'all_items' => 'All Blogs'
        ],
        'menu_icon' => 'dashicons-welcome-write-blog'
    ]);
    // Updates
    register_post_type('updates', [
        'capability_type' => 'post',
        'map_meta_cap' => true,
        'supports' => ['title', 'editor', 'custom-fields'],
        'public' => true,
        'show_in_rest' => true,
        'has_archive' => true,
        'labels' => [
            'name' => 'Updates',
            'add_new_item' => 'Add New Update',
            'edit_item' => 'Edit Update',
            'all_items' => 'All Updates'
        ],
        'menu_icon' => 'dashicons-info-outline'
    ]);
    // Values
    register_post_type('values', [
        'capability_type' => 'post',
        'map_meta_cap' => true,
        'supports' => ['title', 'editor', 'thumbnail'],
        'public' => true,
        'show_in_rest' => true,
        'labels' => [
            'name' => 'Values',
            'add_new_item' => 'Add New Value',
            'edit_item' => 'Edit Value',
            'all_items' => 'All Values'
        ],
        'menu_icon' => 'dashicons-editor-ul'
    ]);
    // Contact Methods
    register_post_type('contact_methods', [
        'capability_type' => 'post',
        'map_meta_cap' => true,
        'supports' => ['title', 'thumbnail', 'custom-fields'],
        'public' => true,
        'show_in_rest' => true,
        'labels' => [
            'name' => 'Contact Methods',
            'add_new_item' => 'Add New Contact Method',
            'edit_item' => 'Edit Contact Method',
            'all_items' => 'All Contact Methods'
        ],
        'menu_icon' => 'dashicons-share'
    ]);
}
add_action('init', 'post_types');