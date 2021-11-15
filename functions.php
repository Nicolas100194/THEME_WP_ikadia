<?php
//AJOUT SUPPORT THEME
function theme_ikadia_supports(){
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'theme_ikadia_supports');

// AJOUT SUPPORT CSS / JAVASCRIPT / JQUERY
function theme_ikadia_register_assets(){
    $lastmodtime = filemtime(get_stylesheet_directory().'/style.css');
    wp_enqueue_style('css', get_stylesheet_uri(), array(), $lastmodtime);
    wp_deregister_script('jquery');
    wp_enqueue_script('jquery','https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js');
    wp_enqueue_script('javascript', get_template_directory_uri() . '/app.js', array(), null, true);
}
add_action('wp_enqueue_scripts', 'theme_ikadia_register_assets');

// MODIFICATION TITRE SITE 
//TITRE ET SOUS TITRE
function theme_ikadia_title($title){
    unset($title['title']);
    unset($title['tagline']);
    $title['titre'] = 'CREATIVES';
    $title['description'] = 'power by psdfreebies.com';
    return $title;
}
add_filter('document_title_parts', 'theme_ikadia_title');
//SEPARATEUR
function theme_ikadia_separator(){
    return '|';
}
add_filter('document_title_separator', 'theme_ikadia_separator');