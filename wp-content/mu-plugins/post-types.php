<?php 
function post_types () {
    register_post_type('values', [
        'capability_type' => 'post',
        'map_meta_cap' => true,
        'supports' => ['title', 'editor', 'thumbnail'],
        'public' => true,
        'show_in_rest' => true,
        'labels' => [
            'name' => 'Values',
            'add_new_item' => 'Add New Value',
            'edit_item' => 'Edit Values',
            'all_items' => 'All Values'
        ],
        'menu_icon' => 'dashicons-editor-ul'
    ]);
    register_post_type('contact_methods', [
        'capability_type' => 'post',
        'map_meta_cap' => true,
        'supports' => ['title', 'thumbnail', 'custom-fields'],
        'public' => true,
        'show_in_rest' => true,
        'labels' => [
            'name' => 'Contact Methods',
            'add_new_item' => 'Add New Contact Method',
            'edit_item' => 'Edit Contact Methods',
            'all_items' => 'All Contact Methods'
        ],
        'menu_icon' => 'dashicons-share'
    ]);
}
add_action('init', 'post_types');