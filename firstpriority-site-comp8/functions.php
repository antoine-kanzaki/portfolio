<?php 
// generator
remove_action( 'wp_head', 'wp_generator');

// rel="shortlink"
remove_action( 'wp_head', 'wp_shortlink_wp_head', 10, 0 );

// WLW(Windows Live Writer) wlwmanifest.xml
remove_action( 'wp_head', 'wlwmanifest_link');

// RSD xmlrpc.php?rsd
remove_action( 'wp_head', 'rsd_link');

//JavaScriptやCSSに付加されるWordPressのバージョン番号(?ver=4.4.2など)を削除します。
function remove_src_wp_ver( $dep ) {
    $dep->default_version = '';
}
add_action( 'wp_default_scripts', 'remove_src_wp_ver' );
add_action( 'wp_default_styles', 'remove_src_wp_ver' ); ?>