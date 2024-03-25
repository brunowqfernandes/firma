<?php

function custom_theme_assets(){
    wp_enqueue_script('bootstrap-js', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js', array('jquery'),'5.0.2',true);
    wp_enqueue_style('bootstrap-css', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css', array(),'5.0.2','all');
    wp_enqueue_script('main-js', get_template_directory_uri() . '/main.js','5.5.1',true);
    wp_enqueue_style('template', get_template_directory_uri() . '/css/style.css', array(),time(),'all');

}

add_action('wp_enqueue_scripts', 'custom_theme_assets');

    
add_theme_support('post-thumbnails', array(
    'post',
    'page',
));

?>