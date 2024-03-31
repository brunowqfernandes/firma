<?php

function custom_theme_assets(){
    wp_enqueue_script('bootstrap-js', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js', array('jquery'),'5.0.2',true);
    wp_enqueue_style('bootstrap-css', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css', array(),'5.0.2','all');
    wp_enqueue_script('main-js', get_template_directory_uri() . '/main.js','5.5.1',true);
    wp_enqueue_style('template', get_template_directory_uri() . '/css/style.css', array(),time(),'all');

}
add_action('wp_enqueue_scripts', 'custom_theme_assets');

function estudio_config() {

    add_theme_support('post-thumbnails', array(
        'post',
        'page',
        'material',
        'servico',
        'slide',
    ));

	// Registrando menus

	register_nav_menus(

		array(

			'main_menu' => __('Menu Principal','estudio86')

		)

	);

    register_sidebar( array(
        'name' => __( 'Endereço', 'estudio86' ),
        'id' => 'barra-endereco',
        'description' => __( 'Arraste os widgets para esta área para adicioná-los à barra lateral.', 'estudio86' ),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h2 class="widget-title">',
        'after_title' => '</h2>',
    ) );

	add_theme_support('post-formats',array('video','image'));

	add_theme_support('title-tag');

	add_theme_support('custom-logo');	

}

add_action('after_setup_theme','estudio_config', 0);


?>
