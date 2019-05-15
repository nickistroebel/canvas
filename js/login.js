$(document).ready(function(){
        $('#entrars').click(function(){
                var email  = document.getElementById('email').value;
                var clave = document.getElementById('clave').value;
                console.log (email, clave);
        		$.ajax({
                    type: "POST",
                    async: true, 
                    url: 'php/procesar.php',
                    data:  {
                            comando:'login',
                            email:email,
                            clave:clave
                            },
                    dataType: 'JSON',
                        success: function(data){ 
                            if (data.sms=='OK'){
                                location.href = data.pag;
                            }
                        }
                });
        });
});