$(document).ready(function(){

        $('#ibsave').click(function(){
        		ibsave();
                ib('');
        });
        $('#ibcancel').click(function(){
                 ib('');
        });
        $('#nuevo1').click(function(){  
                ib('Asociaciones clave');
        });
        $('#nuevo2').click(function(){
                 ib('Actividades clave');
        });
        $('#nuevo3').click(function(){
                ib('Recursos clave');
        });
        $('#nuevo4').click(function(){
                ib('Propuestas de valor');
        });
        $('#nuevo5').click(function(){
                ib('Relaciones con clientes');
        });
        $('#nuevo6').click(function(){
                ib('Canales');
        });
        $('#nuevo7').click(function(){
                ib('Segmentos');
        });
        $('#nuevo8').click(function(){
                ib('Estructura de costos');
        });
        $('#nuevo9').click(function(){
                ib('Fuente de ingresos');
        });
});

function ib(titulo){
	
	if (titulo == ''){
		document.getElementById('ibtitle').innerHTML = '';
		document.getElementById('ibdata').value = '';
		document.getElementById('modalib').style.display = 'none';
	} else {
		document.getElementById('ibtitle').innerHTML = titulo;
		document.getElementById('modalib').style.display = 'block';
		
	}
}
function ibsave(){
	var seccion = document.getElementById('ibtitle').innerHTML;
	var datos = document.getElementById('ibdata').value;
    var idp = document.getElementById('idp').innerHTML;
                $.ajax({
                    type: "POST",
                    async: true, 
                    url: 'php/procesar.php',
                    data:  {comando:'camba', idp: idp, seccion:seccion, datos:datos},
                    dataType: 'JSON',
                        success: function(data){ 
                              location.href = data.pag;
                        }
                });
}