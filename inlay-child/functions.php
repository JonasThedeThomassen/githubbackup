

<?php

function mychildtheme_enqueue_styles() {

    $parent_style = 'parent-style';



    wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );

    wp_enqueue_style( 'child-style',

        get_stylesheet_directory_uri() . '/style.css',

        array( $parent_style ),

        1.0

    

    );

}

add_action( 'wp_enqueue_scripts', 'mychildtheme_enqueue_styles' );
?>