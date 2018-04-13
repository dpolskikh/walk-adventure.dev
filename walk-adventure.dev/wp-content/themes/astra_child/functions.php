<?php
//<script type="text/javascript" scr="/walk-adventure.dev/wp-content/themes/astra_child/js/jquery-3.3.1.min.js"></script>;
//Подключение библиотеки jQuery
function my_scripts_method() {
    wp_deregister_script( 'jquery' );
    wp_register_script( 'jquery',
		get_stylesheet_directory_uri() . '/js/jquery.min.js');
    wp_enqueue_script( 'jquery' );
}
add_action( 'wp_enqueue_scripts', 'my_scripts_method' );

//Подключение скрипта
function script () {wp_enqueue_script('script', get_stylesheet_directory_uri(). '/js/script.js');
}
add_action( 'wp_enqueue_scripts', 'script' );

//Добавление шорткода
//add_shortcode( 'script', 'script');

//Подключение стилей родительской темы
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );
function my_theme_enqueue_styles() {

    $parent_style = 'parent-style'; // This is 'twentyfifteen-style' for the Twenty Fifteen theme.

    wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array( $parent_style ),
        wp_get_theme()->get('Version')
    );
}
//Логины базы данных
//require_once get_stylesheet_directory_uri(). '/db_connect.php';

?>
