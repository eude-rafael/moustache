jQuery(function($){ 

    /* =====    =====   [       Carousel        ]   =====   ===== */
    $('#carousel_products').carousel({ interval: 3500 });
    /* =====    =====   [       Carousel        ]   =====   ===== */

    /* =====    =====   [       Js animations        ]   =====   ===== */
        function barSending(idEvent){
            idEvent.animate({width: '100%'}, 1450);
            return true;
        }

        function barSendingEnding(idEvent){
            idEvent.css({width: '0%'});
            return true;
        }

        function reponseTrue(){
            var barSendingReturn = barSending(idBarevent);

            if(barSendingReturn){
                setTimeout(function(){
                    barSendingEnding(idBarevent);
                    idBasend.removeClass('on').addClass('off');
                    idMensage.find("div").addClass('sendOk').html(' :) Mensagem enviada com sucesso! ?');
                },2000);

                setTimeout(function(){
                    barSendingEnding(idBarevent);
                    idBasend.removeClass('on').addClass('off');
                    idMensage.find("div").removeClass('sendOk').html('');
                    $("input").val("");
                },6500);
            }
        }

        function reponseFalse(n){
            var barSendingReturn = barSending(idBarevent);
            if(n == 1){tipeError = 'success';}else{tipeError = 'error';}

            if(barSendingReturn){
                setTimeout(function(){
                    barSendingEnding(idBarevent);
                    idBasend.removeClass('on').addClass('off');
                    idMensage.find("div").addClass('sendError').html(' :( Algo de errado aconteceu!'+tipeError);
                },2000);

                setTimeout(function(){
                    barSendingEnding(idBarevent);
                    idBasend.removeClass('on').addClass('off');
                    idMensage.find("div").removeClass('sendError').html('');

                },9500);
            }
        }

        var idBasend = $(".barSend");
        var idBarevent = $(".barSend > div");
        var idMensage = $(".forMensager");
    /* =====    =====   [       Js animations        ]   =====   ===== */



    // |    =====   =====    =====   =====   =====   =====
    // |    =====   [   Control error    ]    -----
    // |    =====   =====    =====   =====   =====   =====
        function controlError(id, addOrRemove=true, mesage="")
        {
            if(addOrRemove)
            {
                id.parent('div').find('.errorFrame').html("").removeClass('error');
            }else{
                id.parent('div').find('.errorFrame').html(mesage).addClass('error');
            }
        }
    // |    =====   =====    =====   =====   =====   =====
    // |    =====   [   Control error    ]    -----
    // |    =====   =====    =====   =====   =====   =====


    // |    =====   =====    =====   =====   =====   =====
    // |    =====   [   Verificando o CEP    ]    -----
    // |    =====   =====    =====   =====   =====   =====
        function Trim(strTexto)
        {
            return strTexto.replace(/^s+|s+$/g, '');
        }

        function IsCEP(id)
        {
            var strCEP              = id.val();
            var objER               = /^[0-9]{5}-[0-9]{3}$/;
            var mensageErrorCep     = "Preencha o campo CEP";

            strCEP = Trim(strCEP)
            if(strCEP.length > 0){ 
                if(objER.test(strCEP)){
                    controlError(id,true, "");
                    return true;
                }else{
                    controlError(id,false, mensageErrorCep);
                    return false;
                }
            }else{
                controlError(id,false, mensageErrorCep);
                return false;
            }
        }
    // |    =====   =====    =====   =====   =====   =====
    // |    =====   [   Verificando o CEP    ]    -----
    // |    =====   =====    =====   =====   =====   =====

    // |    =====   =====    =====   =====   =====
    // |    =====   [   Empty field    ]    -----
    // |    =====   =====    =====   =====   =====
        function emptyField(id, minimumValue=1)
        {
            var s = id.val();

            var data = {
                shortAnswer       : "Este campo precisa ser preenchido",
                minimunSizeName   : minimumValue
            };

            if(s.length < data.minimunSizeName){
                controlError(id,false, data.shortAnswer);
                return false;
            }

            controlError(id,true, "");
            return true;

        }//end function 
    // |    =====   =====    =====   =====   =====
    // |    =====   [   Empty field    ]    -----
    // |    =====   =====    =====   =====   =====


    // |    =====   =====    =====   =====   =====
    // |    =====   [   Valida email    ]    -----
    // |    =====   =====    =====   =====   =====
        function validateEmail(id)
        {
            email = id.val();

            var reg = /^\w+([-+.']\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*$/

            if (reg.test(email)){
                controlError(id,true, "");
                return true;
            }else{

                controlError(id,false, "Por favor preencha o campo E-mail");
                return false;
            }
        }
    // |    =====   =====    =====   =====   =====
    // |    =====   [   Valida email    ]    -----
    // |    =====   =====    =====   =====   =====


    // |    =====    =====   =====   =====   =====
    // |    -----   [    Mask phone     ]   -----
    // |    =====    =====   =====   =====   =====
        // =========  Mask Tel =========
            function maskTel(v)
            {
                if(v.length <= 15){
                    v=v.replace(/\D/g,"");
                    v=v.replace(/^(\d{2})(\d)/g,"($1) $2");
                    r=v.replace(/(\d)(\d{4})$/,"$1-$2");
                    return r;
                }
                return r;
            }
        // =========  Mask Tel =========

        // =========  query =========
            getPhobeKeyUp = $("input[name='telefone']");
            getPhobeKeyUp.keyup(function(){
                var phone = maskTel(getPhobeKeyUp.val());
                getPhobeKeyUp.val(phone);
            });
        // =========  query =========
    // |    =====    =====   =====   =====   =====
    // |    -----   [    Mask phone     ]   -----
    // |    =====    =====   =====   =====   =====

    // |    =====    =====   =====   =====   =====
    // |    -----   [    Mask CEP     ]   -----
    // |    =====    =====   =====   =====   =====
        function mascarCep(s)
        {
            v = s.val();

            if(v.length <= 9){
                textNoTrace = v.replace("-", "");
                const 	part1 	= textNoTrace.slice(0,5);
                const 	part2 	= textNoTrace.slice(5,9);
                        r 		= part1+'-'+part2;
            }
            s.val(r);
        }

        maskCep = $("input[name='cep']");
        maskCep.keyup(function(){
            mascarCep(maskCep);
        });
    // |    =====    =====   =====   =====   =====
    // |    -----   [    Mask CEP     ]   -----
    // |    =====    =====   =====   =====   =====
    
// |    =====    =====   =====   =====   =====
// |    -----   [   Start submit    ]   -----
// |    =====    =====   =====   =====   =====



    $('#formId').submit(function(){
    
        // ==================  Camp name ======================
           if(!emptyField($("input[name='name']"), 3)){ return false; }
        // ==================  Camp name ======================

        // ==================  Camp CEP =======================
           if(!IsCEP($("input[name='cep']"), 9)){  return false; }
        // ==================  Camp CEP =======================
    
        // ==================  Camp EMAIL  ====================
           if(!validateEmail($("input[name='email']"))){  return false; }
        // ==================  Camp EMAIL  ====================
    
        // ==================  Camp Endereco  ====================
           if(!emptyField($("input[name='endereco']"),5)){  return false; }
        // ==================  Camp Endereco  ====================
    
        // ==================  Camp Endereco_numero  ====================
           if(!emptyField($("input[name='endereco_numero']"), 1)){   return false; }
        // ==================  Camp Endereco_numero  ====================
    
        // ==================  Camp telefone  ====================
           if(!emptyField($("input[name='telefone']"), 8)){  return false; }
        // ==================  Camp telefone  ====================
        
        // ==================  Camp telefone  ====================
           if(!emptyField($("input[name='bairro']"), 4)){  return false; }
        // ==================  Camp telefone  ====================
    
        // ==================  Camp telefone  ====================
           if(!emptyField($("input[name='dataNascimento']"), 10)){  return false; }
        // ==================  Camp telefone  ====================
    
        // ==================  Camp telefone  ====================
           if(!emptyField($("input[name='cidade']"), 3)){  return false; }
        // ==================  Camp telefone  ====================
    
        // ==================  Camp telefone  ====================
           if(!emptyField($("input[name='estado']"),2)){  return false; }
        // ==================  Camp telefone  ====================

        var dados =  $('#formId').serialize(); 
        $.ajax({
            type: "post",
            //url: $('#formId').attr('action'),
            url: "./wp-admin/admin-ajax.php",
            data:  dados,
            beforeSend: function(){
                idBasend.removeClass('off').addClass('on');
            },
    
            success: function(data){
                var reponse =  JSON.parse(data);
                if(reponse.return){
                    reponseTrue();
                }else{
                    reponseFalse(1);
                }
            },
    
            error: function(data){
                reponseFalse(2);
            }
        });
        return false;
    });
    return false;
});