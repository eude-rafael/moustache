<?php




//Criate carousel items 
function create_post_type_carousel(){

//    add_theme_support( 'title-tag' );
    add_theme_support('post-thumbnails'); 

    
    register_post_type('banneres',
        //Definir as opções
        array(

            'labels'  =>
                        array(
                            'name'          => __('Carrossel Home'),
                            'singular_name' => __('CarouselH')
                        ),

            'supports' => 
                        array(
                            'title', 
                            'editor', 
                            'excerpt',
                            'custom-fields',
                            'thumbnail'
                        ),

            'public'        => true,

            'has_archive'   => true,

            'thumbnail'     => true,    

            'pages'         => true,

            'menu_icon'     => 'dashicons-images-alt2',

            'rewrite' => 
                        array(
                            'slug' => 'carousel'
                        ),
        )
    );
}

//Criate carousel items start
add_action('init', 'create_post_type_carousel');


register_taxonomy("categories", 
    array("CarouselH"), 
    array(
        "hierarchical" => true, 
        "label" => "Categories", 
        "singular_label" => "Category", 
        "rewrite" => 
                    array( 
                        'slug' => 'CarouselH', 
                        'with_front'=> false 
                    )
    )
);





 





add_action('init', 'work_register');   

function work_register() {   

$labels = array( 
    'name' => _x('Work', 'post type general name'), 
    'singular_name' => _x('Work Item', 'post type singular name'), 
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
    'menu_icon' => get_stylesheet_directory_uri() . '/article16.png', 
    'rewrite' => array( 'slug' => 'work', 'with_front'=> false ), 'capability_type' => 'post', 
    'hierarchical' => true, 
    'menu_position' => null, 
    'supports' => array('title','editor','thumbnail') 
);   

register_post_type( 'work' , $args ); 

register_taxonomy("categories", 
    array("work"), 
    array(
        "hierarchical" => true, 
        "label" => "Categories", 
        "singular_label" => "Category", 
        "rewrite" => 
                    array( 
                        'slug' => 'work', 
                        'with_front'=> false 
                    )
    )
);



}