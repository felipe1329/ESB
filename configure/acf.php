<?php

// ACF functions here


/**
 * Agrega los filtros al thema
 */

//Add filter, primer campo el string del filtro, segundo campo el objeto callable que queremos llamar
add_filter('acf/settings/save_json', 'acf_json_save_point');
add_filter('acf/settings/load_json', 'acf_json_load_point');

//Filtro para guardar los acf en json en el disco duro
function acf_json_save_point($path)
{
    $path = get_stylesheet_directory() . '/wordpress_files/acf-json';
    return $path;
}

//Filtro para cargar los acf desde el disco duro
function acf_json_load_point($paths)
{
    unset($paths[0]);
    $paths[] = get_stylesheet_directory() . '/wordpress_files/acf-json';
    return $paths;
}
