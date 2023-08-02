<?php

function planty_theme_supports(){

register_nav_menu ('header','en-tete');
register_nav_menu ('footer','pied-de-page');

}

function planty_theme_styles()
{
    wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');
    wp_enqueue_style('theme-style', get_stylesheet_directory_uri() . '/css/theme.css', array(), filemtime(get_stylesheet_directory() . '/css/theme.css'));
}
//fonction pour ajout du lien "admin"
function planty_admin_link( $bard, $args ) {

    if (is_user_logged_in() && $args->theme_location == 'header') {

        $bard='<li id= "menu-item-42" class= "nav-item "><a href="http://localhost/Planty/nous-rencontrer/" class= "nav-link">Nous rencontrer</a></li>'.'<li class= "nav-item-link nav-item"><a href="'. get_admin_url() .'"'.' class= "nav-link">Admin</a></li>'.'<li id="menu-item-41" class= "nav-item"><a href="href=http://localhost/planty/commander/" class= "nav-link">Commander</a></li>';

    }
    return $bard;
    
}
//fonction pour ajout de class "li"
function planty_menu_class($classes){
 $classes[]= 'nav-item';
 return $classes;
}
//fonction pour ajout de class des liens
function planty_menu_link_class($attrs){
$attrs['class']= 'nav-link';
return $attrs;
}


add_action('after_setup_theme','planty_theme_supports');
add_action('wp_enqueue_scripts', 'planty_theme_styles');
//filtre ajout de link "admin"
add_filter( 'wp_nav_menu_items','planty_admin_link', 10, 2 );
//filtre de class "li"
add_filter('nav_menu_css_class', 'planty_menu_class');
//filtre de class "liens"
add_filter('nav_menu_link_attributes', 'planty_menu_link_class');




