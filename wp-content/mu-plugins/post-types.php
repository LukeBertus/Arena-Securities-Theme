<?php 
function post_types () {
    register_post_type('updates', [
        'capability_type' => 'post',
        'map_meta_cap' => true,
        'supports' => ['title', 'editor', 'custom-fields'],
        'public' => true,
        'show_in_rest' => true,
        'labels' => [
            'name' => 'Updates',
            'add_new_item' => 'Add New Updates',
            'edit_item' => 'Edit Updates',
            'all_items' => 'All Updates'
        ],
        'menu_icon' => 'dashicons-welcome-write-blog'
    ]);
}
add_action('init', 'post_types');