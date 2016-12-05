$(document).ready(inicio)

function inicio(){
	$(".btn_set_hostal").click(set_hostal);
	$(".btn_eliminar_hostal").click(jsdel_hostal);
  $("#producto").change(nuevo_producto);
	//jsget_hostal();
		
}
function nuevo_producto(){
  var valor= $("#producto").val();
    
  if($("#producto").val()=="Nuevo"){
      alert(valor);
      $("#pNuevo").disabled=true;
  }
}
function set_hostal(){
	
	
	var parametros = {
                "nombre" : $("#nombre").val(),
                "direccion" : $("#direccion").val(),
                 "telefono" : $("#telefono").val(),
                  "contacto" : $("#contacto").val()
        };

        $.ajax({
                data:  parametros,
                url:   'php/registro_hostal.php',
                type:  'post',
               	beforeSend: function () {
                        
                },
                success:  function (response) {
                    $('#iframecons').attr('src','php/consulta_hostal.php');
                    $('#iframecons').reload();
                      // jsget_hostal();
                }
        });


}
function jsget_hostal(){
	
	$("#consulta").load('php/consulta_hostal.php');
}

function jsdel_hostal(){
	
	var parametros = {
                "id_hostal" : $(this).val()
                
        };

        $.ajax({
                data:  parametros,
                url:   'del_hostal.php',
                type:  'post',
               	beforeSend: function () {
                      
                },
                success:  function (response) {
                       // jsget_hostal();
                       location.reload();
                }
        });
}
