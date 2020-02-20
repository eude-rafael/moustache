

<div class="row"> 
    <div class="container returnAjaxData"> </div>
</div>


<!-- [   CONTC FORM   ] -->
    <session>
            <div class="container m-t-160">
                <form id="formId" action="http://localhost/2020/Teste-moustache/wordpress/index.php/contact_ajax/" method="post">
                    <div class="form-row">
                        <input type="hidden" name="action" placeholder="ajax_form">

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
                            <input type="text" class="form-control" name="endereco" placeholder="Endereço">
                            <div class="errorFrame" msg="name"></div>
                        </div>

                        <div class="col-2 ">
                            <input type="text" class="form-control" name="endereco_numero" placeholder="Número">
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