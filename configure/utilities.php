<?php

// Utilities functions here

add_filter( 'request', 'toolset_fix_custom_posts_per_page' );
function toolset_fix_custom_posts_per_page( $query_string ){
    if( is_admin() || ! is_array( $query_string ) )
        return $query_string;
 
    $post_types_to_fix = array(
        array(
            'post_type' => 'blog',
            'posts_per_page' => 4
        ),
        // add another if you want
    );
 
    foreach( $post_types_to_fix as $fix ) {
        if( array_key_exists( 'post_type', $query_string )
            && $query_string['post_type'] == $fix['post_type']
        ) {
            $query_string['posts_per_page'] = $fix['posts_per_page'];
            return $query_string;
        }
    }
 
    return $query_string;
}

