function getDoctor(){
 document.getElementById('idDoctor').value = document.getElementById('id_Doctor').value;
}
 function getFecha(Fecha){
 document.getElementById('fechaFin').value = Fecha;
}


//deshabilitar y habilitar Botón Calendario
	function activar_Calendario(){
	     var tipoEs = $('#tipo_Escenario').val();
	     var fecha = $('#fecha').val();
	      var nombreEs = $('#nombre_Escenario').val();
	    if ((fecha != '')&&(fecha != null)&&(tipoEs != '')&&(tipoEs != null)&&(nombreEs != '')&&(nombreEs != null)){
	        $('#btn_Calendario').attr('disabled',false);
	    }else{
	        $('#btn_Calendario').attr('disabled',true);
	    }
	}