<?php

        get_header();
 
        if (!empty($_POST)) {

            admin_url('admin-ajax.php');
 
           global $wpdb;
            $table = "wp_achord";
            $data = array(
                'name'              => $_POST['aname'],
                'email'              => $_POST['email']       
            
            );
            $format = array(
                '%s',
                '%s'
            );
            $success=$wpdb->insert( $table, $data, $format );
            if($success){
            
                echo 'data has been saved' ; 
            }else{
                echo 'data has no saved' ; 
            }

        }
        else {
?>

<style>
    form{width: 350px; margin: 0 auto;}
    form>input,form>textarea{ width: 100%; border: solid #333 1px; margin: 4px; }
</style>
    <form action="http://localhost/2020/Teste-moustache/wordpress/index.php/contact_ajax/" method="post">
        <input type="text" name="aname" placeholder="Nome">
        <input type="text" name="email" placeholder="E-mail">

        <input type="submit" value="Enviar">
    </form>

<?php }  ?>