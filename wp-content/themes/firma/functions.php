<?php

function custom_theme_assets(){
    wp_enqueue_script('bootstrap-js', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js', array('jquery'),'5.0.2',true);
    wp_enqueue_style('bootstrap-css', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css', array(),'5.0.2','all');
    wp_enqueue_script('swiper-js', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js', array(),'11',true);
    wp_enqueue_style('swiper-css', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css', array(),'11','all');
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

function create_post_types() {
     $taxlabels = array(
   
       'name' => _x( 'cat_projetos', 'Categorias de projetos' ),
   
       'singular_name' => _x( 'cat_projeto', 'Categoria de projeto' ),
   
       'search_items' =>  __( 'Pesquisar' ),
   
       'all_items' => __( 'Todas as Categorias de Projetos' ),
   
       'parent_item' => __( 'Categoria Pai' ),
   
       'parent_item_colon' => __( 'Categoria Pai:' ),
   
       'edit_item' => __( 'Editar' ), 
   
       'update_item' => __( 'Atualizar' ),
   
       'add_new_item' => __( 'Adicionar novo' ),
   
       'new_item_name' => __( 'Novo Nome' ),
   
       'menu_name' => __( 'Categorias Projetos' ),
   
     ); 
   
     // Now register the taxonomy
   
    
   
     register_taxonomy('cat_projetos',array('projeto'), array(
   
       'hierarchical' => true,
   
       'labels' => $taxlabels,
   
       'show_ui' => true,
   
       'show_admin_column' => true,
   
       'query_var' => true,
   
       'rewrite' => array( 'slug' => 'cat_projeto' ),
   
     ));   
   
     $labels = array(
   
       'name'                =>  'Projeto',
   
       'singular_name'       =>  'Projeto',
   
       'add_new'             =>  'Adicionar Novo',
   
       'add_new_item'        =>  'Adicionar Novo Projeto',
   
       'edit_item'           =>  'Editar Projeto',
   
       'new_item'            =>  'Novo Projeto',
   
       'all_items'           =>  'Todos Projetos',
   
       'view_item'           =>  'Ver Projeto',
   
       'search_items'        =>  'Pesquisar Projetos',
   
       'not_found'           =>  'Nenhum Projeto encontrado',
   
       'not_found_in_trash'  =>  'Nenhum Projeto no Lixo',
   
       'menu_name'           =>  'Projetos',
   
     );
   
    
   
     $supports = array( 'title', 'editor', 'thumbnail' );
   
    
   
    
   
     $args = array(
   
       'labels'              => $labels,
   
       'public'              => true,
   
       'publicly_queryable'  => true,
   
       'show_ui'             => true,
   
       'show_in_menu'        => true,
   
       'query_var'           => true,
   
       'taxonomies'  => array( 'cat_projetos' ),
   
       'capability_type'     => 'post',
   
       'has_archive'         => 'cat_projetos',
   
       'hierarchical'        => false,
   
       'menu_position'       => 4,
   
       'show_in_rest'        => true,
   
       'supports'            => $supports,
   
     );
   
    
   
     register_post_type( 'projeto', $args );

}
add_action( 'init', 'create_post_types' );

?>
