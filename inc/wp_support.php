<?php if (!defined('ABSPATH')) { die(); }
/**
* Wordpress Theme
* @version     1.0.0
* @author
* @link
* @copyright   2021 Wordpress Theme
* @license
* @package WordPress
* @subpackage Wordpress Theme
* @since Wordpress Theme 1.0
*/


add_theme_support(  'post-formats', 
            array(  'aside',
                    'gallery',
                    'link',
                    'image',
                    'quote',
                    'status',
                    'video',
                    'audio',
                    'chat'
                    ) 
                );

add_post_type_support( 'post', 
                array(  'author',
                        'excerpt',
                        'title',
                        'editor',
                        'thumbnail',
                        'trackbacks',
                        'custom-fields',
                        'comments',
                        'revisions',
                        'page-attributes',
                        'post-formats'
                        ) 
                    );


add_theme_support( 'post-thumbnails', array( 'post', 'page', 'video', 'slide' ) );

add_theme_support( 'custom-header', array(
    'default-image'          => '',
    'random-default'         => false,
    'width'                  => 0,
    'height'                 => 0,
    'flex-height'            => false,
    'flex-width'             => false,
    'default-text-color'     => '',
    'header-text'            => true,
    'uploads'                => true,
    'wp-head-callback'       => '',
    'admin-head-callback'    => '',
    'admin-preview-callback' => '', 
    'video'                  => true,
    'video-active-callback'  => 'is_front_page'
) );

add_theme_support( 'automatic-feed-links' );

add_theme_support( 'html5', array(  
    'search-form',
    'gallery',
    'caption',
    'script',
    'style',
) );

add_theme_support( 'title-tag' );

add_theme_support( 'custom-background' );

add_theme_support( 'custom-logo', [
    'height'      => 50,
    'width'       => 150,
    'flex-width'  => false,
    'flex-height' => false,
    'header-text' => '',
    'unlink-homepage-logo' => true,
] );

add_theme_support( 'admin-bar', [ 'callback'=>'__return_false' ] );

add_theme_support( 'responsive-embeds' );

/* Menu Start */
add_filter( 'nav_menu_css_class', '__return_empty_array' );
add_filter( 'nav_menu_css_class', 'wp_li', 10, 4 );

function wp_li( $classes, $item, $args, $depth ) {
        $classes[] = 'menu__item';  
    return $classes;
}
add_filter( 'nav_menu_link_attributes', 'wp_a', 10, 3 );

function wp_a( $atts, $item, $args ) {
    $class = 'menu__link'; // or something based on $item
    $atts['class'] = $class;
    return $atts;
}
/* Menu Stop */

//кнопка: выровнить текст по ширине
/* Button MCE Start */
function my_mce_buttons_2( $buttons ) { 
    $buttons[] = 'underline';
    $buttons[] = 'alignjustify';
    return $buttons;
}
add_filter( 'mce_buttons_2', 'my_mce_buttons_2' );
/* Buttion MCE Stop */

