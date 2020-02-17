$(function(){
    /* =====    =====   [       Carousel        ]   =====   ===== */
    $('#carousel_products').carousel({ interval: 3500 });
    /* =====    =====   [       Carousel        ]   =====   ===== */

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
                    id.parent('div').find('.errorFrame').html("").removeClass('error');            
                    return true;
                }else{
                    id.parent('div').find('.errorFrame').html(mensageErrorCep).addClass('error');
                    return false;
                }
            }else{
                id.parent('div').find('.errorFrame').html(mensageErrorCep).addClass('error');
                return false;
            }
        }
    // |    =====   =====    =====   =====   =====   =====
    // |    =====   [   Verificando o CEP    ]    -----
    // |    =====   =====    =====   =====   =====   =====

    // |    =====   =====    =====   =====   =====
    // |    =====   [   Empty field    ]    -----
    // |    =====   =====    =====   =====   =====
        function emptyField(id, minimumValue=1){
            var s = id.val();

            console.log(s);

            var data = {
                chortName           : "Este campo precisa ser preenchido",
                minimunSizeName     : minimumValue
            };

            if(s.length < data.minimunSizeName){
                id.parent('div').find('.errorFrame').html(data.chortName).addClass('error');
                return false;
            }

            id.parent('div').find('.errorFrame').html("").removeClass('error');
            return true;

        }//end function 
    // |    =====   =====    =====   =====   =====
    // |    =====   [   Empty field    ]    -----
    // |    =====   =====    =====   =====   =====


    // |    =====   =====    =====   =====   =====
    // |    =====   [   Valida email    ]    -----
    // |    =====   =====    =====   =====   =====
        function validateEmail(id){
            email = id.val();

            var reg = /^\w+([-+.']\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*$/

            if (reg.test(email)){
                id.parent('div').find('.errorFrame').html("").removeClass('error');
                return true;
            }else{
                id.parent('div').find('.errorFrame').html("Por favor preencha o campo E-mail").addClass('error');
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
            function maskTel(v){
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
        function mascarCep(s){
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
           if(!emptyField($("input[name='endereco_numero']"), 1)){  return false; }
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

        var dados = $(this).serialize();
        
        jQuery.ajax({
            type: "POST",
            url: $('#formId').attr('action'),
            data: dados,
            success: function( data )
            {
                // if(data == 'false'){
                //     $('.sendMailError').removeClass('off');
                //     $('window').animate({
                //         scrollTop: 560
                //     }, 1000);
                // }else{
                //     $('.sendMailOk').removeClass('off');

                //     $('.contactFormContato').addClass('off');
                //     $('window').animate({
                //         scrollTop: 560
                //     }, 1000);
                //     setTimeout(function(){
                //         location.href="./";
                //     },12000);
                // }
            }
        });
        return false;
    });
    return false;
});