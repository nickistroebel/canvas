$(document).ready(function(){
        $('#logout').click(function(){
				$.ajax({
                    type: "POST",
                    async: true, 
                    url: 'php/procesar.php',
                    data:  {comando:'quit',},
                    dataType: 'JSON',
                        success: function(data){ 
                            if (data.sms=='OK'){
                                location.href = data.pag;
                            }
                        }
                });
        });
});