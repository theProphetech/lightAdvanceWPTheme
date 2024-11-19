<?php 
// First of all to set up the team features

add_action('after_setup_them', 'laAddFeatures');

function laAddFeatures(){
    add_theme_support("post-formats", array('aside','gallery'));
add_theme_support( 'post-thumbnails' );
add_theme_support( 'responsive-embeds' );
    add_theme_support('custom-logo');
    add_theme_support('menus');
    add_theme_support('html5');
    add_theme_support('widgets');
    add_theme_support('appearance-tools');
    add_theme_support('admin-bar');
    add_theme_support('link-color');
    add_theme_support('align-wide');
}