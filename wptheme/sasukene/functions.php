<?php
/**
 * Created by IntelliJ IDEA.
 * User: yousan
 * Date: 8/19/15
 * Time: 8:09 PM
 */


add_action( 'wp_enqueue_scripts', function() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
});

/**
 * JSファイルを読み込ませる
 */
add_action( 'login_enqueue_scripts', function() {
    wp_enqueue_script( 'register', get_bloginfo('stylesheet_directory').'/js/'.'register'.'.js', array('jquery'), '1.0');
    wp_enqueue_script('maps.google', 'http://maps.google.com/maps/api/js?sensor=false');

    wp_enqueue_style('register', get_stylesheet_directory_uri().'/css/register.css');
});

/**
 * 固定ページにJSを読み込ませる
 */
add_action('wp_enqueue_scripts', function(){
    if ($pagename = get_query_var('pagename')) {
        if (file_exists(get_stylesheet_directory().'/js/'.$pagename.'.js')) {
            wp_enqueue_script( $pagename, get_bloginfo('stylesheet_directory').'/js/'.$pagename.'.js', array('jquery'), '1.0', 'true');
        }
    }
});


// https://wordpress.org/support/topic/wpmem_txt-text-appears-when-outputting-login-page-in-template-file
// Remove the opening [wpmem_txt] from login form
function remove_open_wpmem_txt( $form ) {
    $form = str_replace( '[wpmem_txt]', '', $form );
    return $form;
}
add_filter( 'wpmem_login_form', 'remove_open_wpmem_txt' );

// Remove the closing [/wpmem_txt] from login form
function remove_close_wpmem_txt( $form ) {
    $form = str_replace( '[/wpmem_txt]', '', $form );
    return $form;
}
add_filter( 'wpmem_login_form', 'remove_close_wpmem_txt' );