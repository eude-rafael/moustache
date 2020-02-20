




   <!-- [   TITLE AREA  ] -->
        <section class="jumbotron bg-fff text-center">
            <div class="container">
            <h1 class="jumbotron-heading">
                <?php the_title(); ?>
            </h1>
            </div>
        </section>
    <!-- [   TITLE AREA  ] -->

    <?php
        $my_args_carousel = array(
            'post_type' =>  'work',
            'post_per_page' => 3 
        );

        $my_query_carousel = new WP_Query($my_args_carousel);

        if($my_query_carousel->have_posts()){
    ?>

        <!-- [   CAROUSEL  ERROR  ] -->
            <session>
                <div class="container">
                    <div id="carousel_products" class="carousel slide" data-ride="carousel">
                        <div id="carouselMarquer">
                            <ul  class="carousel-indicators">
                                <li data-target="#carousel_products" data-slide-to="0" class="active"></li>
                                <li data-target="#carousel_products" data-slide-to="1"></li>
                                <li data-target="#carousel_products" data-slide-to="2"></li>
                            </ul>
                        </div>
                        <div class="carousel-inner">

<?php
    $x = 1;
    $activeConter = 0;


    while($my_query_carousel->have_posts()){
        $my_query_carousel->the_post();

        //********************************************* */
            if($activeConter==0){
                $var = ' active ';
                $activeConter = 1;
            }else{
                $var = ' ';
            }
        //********************************************* */

        
        if($x==1){
            echo '
                <div class="carousel-item '.$var.'">
                    <div class="row">
            ';

            $open = true;
        }
        
        echo '
            <div class=" col-md-4 ">
                <div class="card mb-4 box-shadow">
                    <img class="card-img-top"   alt="
        '; 
        
        the_title();

                    echo'" style="height: auto; width: 100%; display: block;" 
                    src="'; the_post_thumbnail_url();
        
                    echo'" data-holder-rendered="true">
                        <div class="card-body col-md-11 align-self-center">
                        <h3>
        ';

        the_title();

        echo'
                        </h3>
                        <p class="card-text m-t-20">
        ';

        the_content();

        echo'
                        </p>
                        <a href="';

        the_permalink();

                        echo '" type="button" class="btn btn-secondary btn-lg btn-block bt-thumb-carrousel m-t-30 m-b-10 ">Link Externo</a>
                    </div>
                </div>
            </div>
        ';
        
        if($x==3){
            $open = false;
            echo '
                    </div>
                </div>
            ';
            $x = 0;
        }

        $x++;
    }


    if($open){
        echo '
                </div>
            </div>
        ';
    }


?>






                                     
                            

                            
                            

                            <div class="row align-center-flex-box">
                                <div class="new-control-arrowa align-self-center col-md-3 ">
                                    <div class="left"  href="#carousel_products" role="button" data-slide="prev">
                                        <
                                    </div>
                                    
                                    <div class="right"  href="#carousel_products" role="button" data-slide="next">  
                                        >
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carousel_products" data-slide="prev">
                            <span class="carousel-control-prev-icon"></span>
                        </a>
                        <a class="carousel-control-next" href="#carousel_products" data-slide="next">
                            <span class="carousel-control-next-icon"></span>
                        </a>
                    </div>
                </div>
            </session>
        <!-- [   CAROUSEL  ERROR  ] -->

<?php



        // while($my_query_carousel->have_posts()){
        //     $my_query_carousel->the_post();
           
        //     the_title();

        //     //retornando a imagem
        //     the_post_thumbnail('post-thumbnail', array('class' => 'xxx'));

        //     //Conteudo 
        //     the_content();

        //     //Link do post
        //     the_permalink();


        //     //Somente a url
        //     the_post_thumbnail_url();
        // }
    }
?>


<?php
    wp_reset_query();
?>















    