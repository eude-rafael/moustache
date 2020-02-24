<?php


function troca_jquery(){
    //Remove Old jQuery
    wp_deregister_script( 'jquery' );

    // =====    =====   [Add Jquery]  =====   =====
        wp_register_script(
            'jquery',
            '/wp-content/themes/moustashe/assets/js/jquery.js',
            array(),
            '3.1',false
        );
    // =====    =====   [Add Jquery]  =====   =====

    // =====    =====   [Add bootstrap]  =====   =====
        wp_register_script(
            'bootstrap',
            'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js',
            array('jquery'),
            '1',false
        );
    // =====    =====   [Add bootstrap]  =====   =====


    // =====    =====   [Add Main JS]  =====   =====
        wp_register_script(
            'main',
            '/wp-content/themes/moustashe/assets/js/script_moustache.js',
            array('jquery','bootstrap'),
            '1',false
        );
    // =====    =====   [Add Main JS]  =====   =====

    //Add jquery 
    wp_enqueue_script('jquery');
    // Add bootstrap
    wp_enqueue_script('bootstrap');
    //Add main JS
    wp_enqueue_script('main');
}

// Add in queuescript
add_action('wp_enqueue_scripts', 'troca_jquery');

 
 


 

function InformacaoesRodape(){
    add_theme_support('post-thumbnails');
    register_post_type('banneres',
        array(
            'labels'  =>
                        array(
                            'name'          => __('Informacoes rodape'),
                            'singular_name' => __('InformacaoesRodape')
                        ),
            'supports' => 
                        array(
                            'title', 
                            'editor', 
                            'thumbnail'
                        ),

            'public'        => true,

            'has_archive'   => true,

            'thumbnail'     => true,
             'menu_position'       => 6,

             'menu_icon'     => 'dashicons-images-alt2', 
            'rewrite' => 
                        array(
                            'slug' => 'informacoesRodape'
                        ),
        )
    );
}

//Criate carousel items start
add_action('init', 'InformacaoesRodape');

 

add_action('init', 'work_register');   

function work_register() {
    add_theme_support('post-thumbnails'); 

    $labels = array( 
        'name' => _x('Carrossel Home', ''), 
        'singular_name' => _x('CarrosselH', ''), 
        'add_new' => _x('Add New', 'work item'), 
        'add_new_item' => __('Add New Work Item'), 
        'edit_item' => __('Edit Work Item'), 
        'new_item' => __('New Work Item'), 

        'view_item' => __('View Work Item'), 
        'search_items' => __('Search Work'), 
        'not_found' => __('Nothing found'), 
        'not_found_in_trash' => __('Nothing found in Trash'), 
        'parent_item_colon' => '' 
    );   

    $args = array( 
        'labels' => $labels, 
        'public' => true, 
        'publicly_queryable' => true, 
        'show_ui' => true, 
        'query_var' => true, 
        'menu_icon'     => 'dashicons-images-alt2', 
        'rewrite' => array( 'slug' => 'carrossel', 'with_front'=> false ), 'capability_type' => 'post', 
        'hierarchical' => true, 
        'menu_position' => null, 
        'menu_position'       => 5,
        'supports' => array('title','editor','thumbnail') 
    );   

    register_post_type( 'work' , $args ); 

    register_taxonomy("categories", 
        array("work"), 
        array(
            "hierarchical" => true, 
            "label" => "Carrossel Categorias", 
            "singular_label" => "Category", 
            "rewrite" => 
                        array( 
                            'slug' => 'carrossel', 
                            'with_front'=> false 
                        )
        )
    );
}