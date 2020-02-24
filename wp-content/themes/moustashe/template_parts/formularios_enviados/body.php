 
    <!-- [   Body  ] -->
        <nav>
            <div class="container">
                <div class="row p-5 ">
                    <h1>Lista de cadastros</h1>
                </div>
                <div class="row">
                    <div class="lista_de_cadastros col-12">
                        <?php
 
                            global $wpdb;

                            $posts = $wpdb->wp_posts;
                            $result = $wpdb->get_results( " SELECT * FROM  wp_achord ");

                            foreach ($result as $cad) {
                                echo "<p>".
                                    $cad->name.' - '.
                                    $cad->email.' - '.
                                    $cad->telefone.' - '.
                                    $cad->datadeNascimento.' - '.
                                    $cad->cep.' - '.
                                    $cad->endereco.' - '.
                                    $cad->endereco_numero.' - '.
                                    $cad->bairro.' - '.
                                    $cad->cidade.' - '.
                                    $cad->estado.'<hr/>'.
                                '</p>';
                            }

                        ?>
                    </div>
                </div>
            </div>
        </nav>
    <!-- [   Body  ] -->

