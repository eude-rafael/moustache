    <!-- [   CONTC DATA   ] -->
    <session>
            <div class="container">
                <div class="row m-t-110">
                    <?php
                            $my_args_contact_data = array(
                                'post_type' =>  'banneres'
                            );

                            $my_query_contact_data = new WP_Query($my_args_contact_data);


                            if($my_query_contact_data->have_posts()){

                                while($my_query_contact_data->have_posts()){
                                    $my_query_contact_data->the_post();

                                    echo '
                                        <div class="col-sm-4 itemContatcData">
                                            <h3>
                                                    <a href="';
                                                    the_permalink();
                                    echo '">';


                                                the_title();
                                    echo'
                                                    </a>
                                            </h3>
                                            <img class="first-slide m-t-10" src="';

                                    echo get_option('home'); 
                                    
                                    echo'/wp-content/themes/moustashe/assets/img/line.png" alt="First slide">
                                            <div class="row m-t-20">
                                                <div class="col-2">
                                                    <img class="first-slide" src="';

                                    the_post_thumbnail_url();

                                    echo'" alt="First slide">
                                                </div>
                                                <div class="col-8">
                                    ';
                                    the_content();
                                    echo'            </div>
                                            </div>
                                        </div>
                                    ';

                                }
                            }
                        ?>

                </div>
            </div>
        </session>
    <!-- [   CONTC DATA   ] -->

