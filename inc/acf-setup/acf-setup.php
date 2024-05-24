<?php
add_filter('block_categories', 'add_gutenberg_block_categories', 10, 2);
function add_gutenberg_block_categories($categories): array
{
    return array_merge([
        [
            'slug' => 'customs-blocks',
            'title' => 'CUSTOM BLOCKS',
            'icon' => 'universal-access',
        ]
    ],
        $categories
    );
}

if (function_exists('acf_add_options_page')) {
    acf_add_options_page([
        'page_title' => 'Setting site',
        'menu_title' => 'Setting site',
        'menu_slug' => 'site-settings',
        'capability' => 'edit_posts',
        'redirect' => false
    ]);
}


add_action('acf/init', function () {

});

