<?php
/**
 * Netbona Child Theme
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

function netbona_enqueue_assets() {

    wp_enqueue_style(
        'netbona-style',
        get_stylesheet_uri(),
        array( 'astra-theme-css' ),
        wp_get_theme()->get( 'Version' )
    );

    wp_enqueue_style(
        'netbona-main',
        get_stylesheet_directory_uri() . '/assets/css/main.css',
        array( 'netbona-style' ),
        wp_get_theme()->get( 'Version' )
    );

    wp_enqueue_script(
        'netbona-main',
        get_stylesheet_directory_uri() . '/assets/js/main.js',
        array(),
        wp_get_theme()->get( 'Version' ),
        true
    );
}

add_action( 'wp_enqueue_scripts', 'netbona_enqueue_assets', 20 );


/**
 * Normalize the Apps navigation label.
 */
function netbona_normalize_menu_labels( $items ) {
    foreach ( $items as $item ) {
        if ( trim( $item->title ) === 'APP' ) {
            $item->title = 'Apps';
        }
    }

    return $items;
}

add_filter( 'wp_nav_menu_objects', 'netbona_normalize_menu_labels' );
