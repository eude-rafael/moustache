<?php

// manage_javascript =====  =====   =====   =====   =====   =====   =====
    function manage_javascript(){
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
    add_action('wp_enqueue_scripts', 'manage_javascript');
// manage_javascript =====  =====   =====   =====   =====   =====   =====

 
// Three (or more) posts at the bottom of the page
    function add_post_at_the_bottom_of_the_page(){
        add_theme_support('post-thumbnails');
        register_post_type('banneres',
            array(
                'labels'  =>
                            array(
                                'name'          => __('Post rodape'),
                                'singular_name' => __('PostRodape')
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
                                'slug' => 'add_post_at_the_bottom_of_the_page'
                            ),
            )
        );
    }

    //Criate carousel items start
    add_action('init', 'add_post_at_the_bottom_of_the_page');
// Three (or more) posts at the bottom of the page


// carousel_manager =====   =====   =====   =====   =====
    function carousel_manager() {
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

    add_action('init', 'carousel_manager');
// carousel_manager =====   =====   =====   =====   =====



//  =====   =====   [ ajax_action   ]  =====   =====   =====   =====
    function ajax_action(){
        if (!empty($_POST)) {
 
           global $wpdb;
 
           //É importante proteger os dados vindos do post entes de eles acessarem o banco de dados 
           $success = $wpdb->query("INSERT INTO wp_achord (name, email, telefone, datadeNascimento, cep, endereco, endereco_numero, bairro, cidade, estado)  VALUES ('".$_POST['name']."', '".$_POST['email']."','".$_POST['telefone']."','".$_POST['dataNascimento']."','".$_POST['cep']."','".$_POST['endereco']."','".$_POST['endereco_numero']."','".$_POST['bairro']."','".$_POST['cidade']."','".$_POST['estado']."')");

            if($success){
                $answer = array(
                    'return' => true
                );
            }else{
                $answer = [
                    'return' => false
                ];
            }

        }else{
            $answer = [
                'return' => false            ];
        }

        echo $answer = json_encode($answer);
        die();
    }

    add_action('wp_ajax_nopriv_ajax_action', "ajax_action");
    add_action('wp_ajax_ajax_action', "ajax_action");
//  =====   =====   [ ajax_action   ]  =====   =====   =====   =====












