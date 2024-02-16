<?php 
function post_types () {
    register_post_type('principles', [
        'capability_type' => 'post',
        'map_meta_cap' => true,
        'supports' => ['title', 'editor', 'custom-fields'],
        'public' => true,
        'show_in_rest' => true,
        'labels' => [
            'name' => 'Principles',
            'add_new_item' => 'Add New Principle',
            'edit_item' => 'Edit Principles',
            'all_items' => 'All Principles'
        ],
        'menu_icon' => 'dashicons-editor-ul'
    ]);
}
add_action('init', 'post_types');