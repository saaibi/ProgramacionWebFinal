function getDoctor(){
 document.getElementById('idDoctor').value = document.getElementById('id_Doctor').value;
}
 function getFecha(Fecha){
 document.getElementById('fechaFin').value = Fecha;
}


// función para deshabilitar y habilitar Botón Calendario
	function activar_Calendario(){
	     var doctor = $('#id_Doctor').val();
	     var fecha = $('#fecha').val();
	    if ((fecha != '')&&(fecha != null)&&(doctor != '')&&(doctor != null)){
	        $('#boton_Calendario').attr('disabled',false);
	    }else{
	        $('#boton_Calendario').attr('disabled',true);
	    }
	}