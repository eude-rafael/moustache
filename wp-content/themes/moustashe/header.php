<!DOCTYPE html>
<html lang="pt-br">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="generator" content="WordPress <?php bloginfo('version');?>">
    <meta http-equiv="content-type" content="<?php bloginfo('html_type');?> <?php bloginfo('charset');?>">
    <link rel="stylesheet" type="application/rss+xml" title="RSS 2.0" href="<?php bloginfo('rss2_url');?>"/>
    <link rel="stylesheet" type="text/xml" title="RSS .92" href="<?php bloginfo('rss_url');?>"/>
    <link href="https://fonts.googleapis.com/css?family=Lato:100i,300,300i,400,400i,700,700i,900,900i&display=swap&subset=latin-ext" rel="stylesheet">
    <link rel="stylesheet" type="application/ation/atom+xml" title="RSS 0.3" href="<?php bloginfo('atom_url');?>"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" media="all" type="text/css">

    <?php wp_head();?>
    <title><?php  bloginfo( 'name' ); ?> - <?php bloginfo('description'); ?></title>

    <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate">
    <meta http-equiv="Pragma" content="no-cache">
    <meta http-equiv="Expires" content="0">



</head>
<body>

    <!-- [   MENU FRAME  ] -->
        <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-333333">
            <div class="container">
                <a class="navbar-brand" href="#">
                    <img class="logo" src="<?php home_url(); ?>wp-content/themes/moustashe/assets/img/logo.png"> 
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Link</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Disabled</a>
                        </li>
                    </ul>
        
                    <div class="frame_search">
                        <form class="form-inline mt-2 mt-md-0">
                            <input class="form-control mr-sm-2" type="text" placeholder="Buscar" aria-label="Buscar">
                            <button class="btn  my-2 my-sm-0" type="submit">
                                <svg xmlns="http://www.w3.org/2000/svg" class="c-fff" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="mx-3">
                                    <circle cx="10.5" cy="10.5" r="7.5"></circle>
                                    <line x1="21" y1="21" x2="15.8" y2="15.8"></line>
                                </svg>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </nav>
    <!-- [   MENU FRAME  ] -->

    <!-- [   BANNER MAIN  ] --> 
        <section>
            <div id="myCarousel" class="carousel slide" data-ride="carousel"> 
                <div class="carousel-inner">
                    <div class="carousel-item  active">
                    <div class="container ">
                        <div class="carousel-caption">
                        <img class="first-slide" src="<?php home_url(); ?>wp-content/themes/moustashe/assets/img/slogan.png" >
                        </div>
                    </div>
                    <img class="first-slide" src="<?php home_url(); ?>wp-content/themes/moustashe/assets/img/banner.png" alt="First slide">
                    </div>
                </div>
            </div>
        </section>
    <!-- [   BANNER MAIN  ] -->

    <!-- [   TITLE AREA  ] -->
        <section class="jumbotron bg-fff text-center">
            <div class="container">
            <h1 class="jumbotron-heading">
                <?php the_title(); ?>
            </h1>
            </div>
        </section>
    <!-- [   TITLE AREA  ] -->

 
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
                        <div class="carousel-item active">
                            <div class="row">        
                                <div class=" col-md-4 ">
                                    <div class="card mb-4 box-shadow">
                                        <img class="card-img-top" data-src="holder.js/100px225?theme=thumb&amp;bg=55595c&amp;fg=eceeef&amp;text=Thumbnail" alt="Thumbnail [100%x225]" style="height: auto; width: 100%; display: block;" 
                                        src=" <?php home_url(); ?>wp-content/themes/moustashe/assets/img/card.jpg" data-holder-rendered="true">
                                        <div class="card-body col-md-11 align-self-center">
                                            <h3>
                                                Lorem ipsum <br class="d-xl-block">
                                                dolor sit
                                            </h3>
                                            <p class="card-text m-t-20">
                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                            </p>
                                            <button type="button" class="btn btn-secondary btn-lg btn-block bt-thumb-carrousel m-t-30 m-b-10">Link Externo</button>
                                        </div>
                                    </div>
                                </div>        
                                <div class=" col-md-4 ">
                                    <div class="card mb-4 box-shadow">
                                        <img class="card-img-top" data-src="holder.js/100px225?theme=thumb&amp;bg=55595c&amp;fg=eceeef&amp;text=Thumbnail" alt="Thumbnail [100%x225]" style="height: auto; width: 100%; display: block;" 
                                        src=" <?php home_url(); ?>wp-content/themes/moustashe/assets/img/card.jpg" data-holder-rendered="true">
                                        <div class="card-body col-md-11 align-self-center">
                                            <h3>
                                                Lorem ipsum <br class="d-xl-block">
                                                dolor sit
                                            </h3>
                                            <p class="card-text m-t-20">
                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                            </p>
                                            <button type="button" class="btn btn-secondary btn-lg btn-block bt-thumb-carrousel m-t-30 m-b-10">Link Externo</button>
                                        </div>
                                    </div>
                                </div>
                                <div class=" col-md-4 ">
                                    <div class="card mb-4 box-shadow">
                                        <img class="card-img-top" data-src="holder.js/100px225?theme=thumb&amp;bg=55595c&amp;fg=eceeef&amp;text=Thumbnail" alt="Thumbnail [100%x225]" style="height: auto; width: 100%; display: block;" 
                                        src=" <?php home_url(); ?>wp-content/themes/moustashe/assets/img/card.jpg" data-holder-rendered="true">
                                        <div class="card-body col-md-11 align-self-center">
                                            <h3>
                                                Lorem ipsum <br class="d-xl-block">
                                                dolor sit
                                            </h3>
                                            <p class="card-text m-t-20">
                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                            </p>
                                            <button type="button" class="btn btn-secondary btn-lg btn-block bt-thumb-carrousel m-t-30 m-b-10">Link Externo</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="carousel-item ">
                            <div class="row">        
                                <div class=" col-md-4 ">
                                    <div class="card mb-4 box-shadow">
                                        <img class="card-img-top" data-src="holder.js/100px225?theme=thumb&amp;bg=55595c&amp;fg=eceeef&amp;text=Thumbnail" alt="Thumbnail [100%x225]" style="height: auto; width: 100%; display: block;" 
                                        src=" <?php home_url(); ?>wp-content/themes/moustashe/assets/img/card.jpg" data-holder-rendered="true">
                                        <div class="card-body col-md-11 align-self-center">
                                            <h3>
                                                Lorem ipsum <br class="d-xl-block">
                                                dolor sit
                                            </h3>
                                            <p class="card-text m-t-20">
                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                            </p>
                                            <button type="button" class="btn btn-secondary btn-lg btn-block bt-thumb-carrousel m-t-30 m-b-10">Link Externo</button>
                                        </div>
                                    </div>
                                </div>        
                                <div class=" col-md-4 ">
                                    <div class="card mb-4 box-shadow">
                                        <img class="card-img-top" data-src="holder.js/100px225?theme=thumb&amp;bg=55595c&amp;fg=eceeef&amp;text=Thumbnail" alt="Thumbnail [100%x225]" style="height: auto; width: 100%; display: block;" 
                                        src=" <?php home_url(); ?>wp-content/themes/moustashe/assets/img/card.jpg" data-holder-rendered="true">
                                        <div class="card-body col-md-11 align-self-center">
                                            <h3>
                                                Lorem ipsum <br class="d-xl-block">
                                                dolor sit
                                            </h3>
                                            <p class="card-text m-t-20">
                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                            </p>
                                            <button type="button" class="btn btn-secondary btn-lg btn-block bt-thumb-carrousel m-t-30 m-b-10">Link Externo</button>
                                        </div>
                                    </div>
                                </div>
                                <div class=" col-md-4 ">
                                    <div class="card mb-4 box-shadow">
                                        <img class="card-img-top" data-src="holder.js/100px225?theme=thumb&amp;bg=55595c&amp;fg=eceeef&amp;text=Thumbnail" alt="Thumbnail [100%x225]" style="height: auto; width: 100%; display: block;" 
                                        src=" <?php home_url(); ?>wp-content/themes/moustashe/assets/img/card.jpg" data-holder-rendered="true">
                                        <div class="card-body col-md-11 align-self-center">
                                            <h3>
                                                Lorem ipsum <br class="d-xl-block">
                                                dolor sit
                                            </h3>
                                            <p class="card-text m-t-20">
                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                            </p>
                                            <button type="button" class="btn btn-secondary btn-lg btn-block bt-thumb-carrousel m-t-30 m-b-10">Link Externo</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="carousel-item ">
                            <div class="row">        
                                <div class=" col-md-4 ">
                                    <div class="card mb-4 box-shadow">
                                        <img class="card-img-top" data-src="holder.js/100px225?theme=thumb&amp;bg=55595c&amp;fg=eceeef&amp;text=Thumbnail" alt="Thumbnail [100%x225]" style="height: auto; width: 100%; display: block;" 
                                        src=" <?php home_url(); ?>wp-content/themes/moustashe/assets/img/card.jpg" data-holder-rendered="true">
                                        <div class="card-body col-md-11 align-self-center">
                                            <h3>
                                                Lorem ipsum <br class="d-xl-block">
                                                dolor sit
                                            </h3>
                                            <p class="card-text m-t-20">
                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                            </p>
                                            <button type="button" class="btn btn-secondary btn-lg btn-block bt-thumb-carrousel m-t-30 m-b-10">Link Externo</button>
                                        </div>
                                    </div>
                                </div>        
                                <div class=" col-md-4 ">
                                    <div class="card mb-4 box-shadow">
                                        <img class="card-img-top" data-src="holder.js/100px225?theme=thumb&amp;bg=55595c&amp;fg=eceeef&amp;text=Thumbnail" alt="Thumbnail [100%x225]" style="height: auto; width: 100%; display: block;" 
                                        src=" <?php home_url(); ?>wp-content/themes/moustashe/assets/img/card.jpg" data-holder-rendered="true">
                                        <div class="card-body col-md-11 align-self-center">
                                            <h3>
                                                Lorem ipsum <br class="d-xl-block">
                                                dolor sit
                                            </h3>
                                            <p class="card-text m-t-20">
                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                            </p>
                                            <button type="button" class="btn btn-secondary btn-lg btn-block bt-thumb-carrousel m-t-30 m-b-10">Link Externo</button>
                                        </div>
                                    </div>
                                </div>
                                <div class=" col-md-4 ">
                                    <div class="card mb-4 box-shadow">
                                        <img class="card-img-top" data-src="holder.js/100px225?theme=thumb&amp;bg=55595c&amp;fg=eceeef&amp;text=Thumbnail" alt="Thumbnail [100%x225]" style="height: auto; width: 100%; display: block;" 
                                        src=" <?php home_url(); ?>wp-content/themes/moustashe/assets/img/card.jpg" data-holder-rendered="true">
                                        <div class="card-body col-md-11 align-self-center">
                                            <h3>
                                                Lorem ipsum <br class="d-xl-block">
                                                dolor sit
                                            </h3>
                                            <p class="card-text m-t-20">
                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                            </p>
                                            <button type="button" class="btn btn-secondary btn-lg btn-block bt-thumb-carrousel m-t-30 m-b-10">Link Externo</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
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

    <!-- [   CONTC FORM   ] -->
        <session>
            <div class="container m-t-160">
                <form id="formId" action="xxxxxxxxxxxx zzzzzzzzz">
                    <div class="form-row">
                        <div class="col-6">
                            <input type="text" class="form-control" name="name" placeholder="Seu nome">
                            <div class="errorFrame" msg="name"></div>
                        </div>

                        <div class="col-6">
                            <input type="text" class="form-control" name="cep" placeholder="CEP">
                            <div class="errorFrame" msg="name"> </div>
                        </div>

                        <div class="col-6">
                            <input type="text" class="form-control" name="email" placeholder="Seu e-mail">
                            <div class="errorFrame" msg="name"></div>
                        </div>

                        <div class="col-4 ">
                            <input type="text" class="form-control" name="endereco" placeholder="EndereÃ§o">
                            <div class="errorFrame" msg="name"></div>
                        </div>

                        <div class="col-2 ">
                            <input type="text" class="form-control" name="endereco_numero" placeholder="NÃºmero">
                            <div class="errorFrame" msg="name"></div>
                        </div>

                        <div class="col-6  ">
                            <input type="text" class="form-control" name="telefone" placeholder="Seu telefone">
                            <div class="errorFrame" msg="name"></div>
                        </div>

                        <div class="col-6 ">
                            <input type="text" class="form-control" name="bairro" placeholder="Bairro">
                            <div class="errorFrame" msg="name"></div>
                        </div>      

                        <div class="col-6 ">
                            <input type="text" class="form-control" name="dataNascimento" placeholder="Data de Nascimento">
                            <div class="errorFrame" msg="name"></div>
                        </div>

                        <div class="col-4 ">
                            <input type="text" class="form-control" name="cidade" placeholder="Cidade">
                            <div class="errorFrame" msg="name"></div>
                        </div>

                        <div class="col-2 ">
                            <input type="text" class="form-control" name="estado" placeholder="Estado">
                            <div class="errorFrame" msg="name"></div>
                        </div>      

                        <div class="btenviar p-t-10 col-4 align-self-center">
                            <button type="submit" class="btn btn-secondary btn-lg btn-block bt-thumb-carrousel m-t-30 m-b-10">Enviar Dados</button>
                        </div>
                    </div>   
                </form>
            </div>
        </session>
    <!-- [   CONTC FORM   ] -->

    <!-- [   CONTC DATA   ] -->
        <session>
            <div class="container">
                <div class="row m-t-110">
                    <div class="col-sm-4">
                        <h3>
                            Lorem Ipsum Dolor Sit
                        </h3>
                        <img class="first-slide m-t-10" src="<?php home_url(); ?>wp-content/themes/moustashe/assets/img/line.png" alt="First slide">
                        <div class="row m-t-20">
                            <div class="col-2">
                                <img class="first-slide" src="<?php home_url(); ?>wp-content/themes/moustashe/assets/img/bandeira-br.png" alt="First slide">
                            </div>
                            <div class="col-8">
                                Lorem ipsum dolo sit, 10
                                Lorem ipsum dolor sit, CEP: 0000000
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-sm-4">
                        <h3>
                            Lorem Ipsum Dolor Sit
                        </h3>
                        <img class="first-slide m-t-10" src="<?php home_url(); ?>wp-content/themes/moustashe/assets/img/line.png" alt="First slide">
                        <div class="row m-t-20">
                            <div class="col-2">
                                <img class="first-slide" src="<?php home_url(); ?>wp-content/themes/moustashe/assets/img/bandeira-br.png" alt="First slide">
                            </div>
                            <div class="col-8">
                                Lorem ipsum dolo sit, 10
                                Lorem ipsum dolor sit, CEP: 0000000
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-4">
                        <h3>
                            Lorem Ipsum Dolor Sit
                        </h3>
                        <img class="first-slide m-t-10" src="<?php home_url(); ?>wp-content/themes/moustashe/assets/img/line.png" alt="First slide">
                        <div class="row m-t-20">
                            <div class="col-2">
                                <img class="first-slide" src="<?php home_url(); ?>wp-content/themes/moustashe/assets/img/bandeira-br.png" alt="First slide">
                            </div>
                            <div class="col-8">
                                Lorem ipsum dolo sit, 10
                                Lorem ipsum dolor sit, CEP: 0000000
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </session>
    <!-- [   CONTC DATA   ] -->
  

    <style>
        .testeaqui {padding: 60px 0px 60px 0px; background:#8aa982; margin: 100px 0 ;}
    </style>


    <div class="testeaqui">
        pqp 
    </div>



