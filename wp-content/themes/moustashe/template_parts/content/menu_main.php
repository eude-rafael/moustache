<!-- [   SESSION MENU  ] -->
    <session>
        <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-333333">
            <div class="container">
                <a class="navbar-brand" href="<?php echo get_option('home'); ?>">
                    <img class="logo" src="<?php echo get_option('home'); ?>/wp-content/themes/moustashe/assets/img/logo.png"> 
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <ul class="navbar-nav mr-auto">
                        <?php
                            wp_list_pages('title_li=');
                        ?>
                    </ul>            
                    <div class="frame_search">
                        <form class="form-inline mt-2 mt-md-0">
                            <input class="form-control mr-sm-2" type="text" placeholder="Buscar" aria-label="Buscar"  style="border:none" >
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
    <session>
<!-- [   SESSION MENU  ] -->