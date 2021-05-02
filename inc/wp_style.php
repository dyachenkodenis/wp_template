<?php if (!defined('ABSPATH')) { die(); }
/**
* Wordpress Theme
* @version     3.0.0
* @author
* @link
* @copyright   2021 Wordpress Theme
* @license
*/

// Start Javascript
add_action( 'wp_enqueue_scripts', 'wp_script' );
    function wp_script() {
    // Header Javascript
    //5 параметр должен быть false

    // Footer Javascript
    wp_enqueue_script(
        'bootstrap-min',
        get_stylesheet_directory_uri() . '/assets/js/bootstrap.min.js', array(), null, true
    );    
    wp_enqueue_script(
        'slim',
        get_stylesheet_directory_uri() . '/assets/js/jquery-3.5.1.slim.min.js', array(), null, true        
    );
    wp_enqueue_script(
        'npm',
        get_stylesheet_directory_uri() . '/assets/js/npm.js', array(), null, true  
    );      
}
// Stop Javascript

//Start CSS Style
add_action( 'wp_enqueue_scripts', 'alex_style' );
function alex_style() { 
    wp_enqueue_style(
        'bootstrap-theme',
        get_stylesheet_directory_uri() . '/assets/css/bootstrap-theme.min.css', 
        array(), null, false );
    wp_enqueue_style(
        'bootstrap',
    get_stylesheet_directory_uri() . '/assets/css/bootstrap.min.css', 
        array(), null, false );
    wp_enqueue_style( 
        'wp_template',
    get_stylesheet_directory_uri() . '/assets/css/wp_template.css', 
        array(), null, false );     
}
//Stop CSS Style