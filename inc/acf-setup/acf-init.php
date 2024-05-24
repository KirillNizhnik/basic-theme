<?php

function my_acf_json_save_point($path ): string
{
    return get_stylesheet_directory() . '/inc/acf-setup/acf-init';
}
add_filter( 'acf/settings/save_json', 'my_acf_json_save_point' );


function my_acf_json_load_point($paths)
{
    unset($paths[0]);
    $paths[] = get_stylesheet_directory() . '/inc/acf-setup/acf-init';
    return $paths;
}



add_filter('acf/settings/load_json', 'my_acf_json_load_point');