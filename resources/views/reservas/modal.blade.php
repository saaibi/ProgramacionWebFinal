
<!-- Button trigger modal -->
<button type="button" onclick="getReservas();" name="btn_Calendario" class="btn btn-primary btn-lg" id="btn_Calendario" data-toggle="modal" data-target="#myModal" disabled>
  Calendario
</button>

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button   type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <Center><h4 class="modal-title" id="myModalLabel"><b><h3>Agenda</h3></b></h4></Center>
      </div>
      <div class="modal-body">
        <div class="row">
           
                <table class="table table-condensed table-hover" id="tablajson">
                 <thead>
			<th>Hora inicio</th>
			<th>Hora salida</th>
			 <th width="50px">Opciones</th>
                </thead>
                    <tbody>
                        
                    </tbody>
                </table>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>
</div>


<script>
        function getReservas(){
        var  idEs = document.getElementById('nombre_Escenario').value;
        var  tipo = document.getElementById('tipo_Escenario').value;
        console.log(tipo);
    	$.get('reservaEscenarios/'+idEs+'/'+tipo, function(res, sta){
    	 console.log(res);
    	$("#tablajson tbody").empty();
    	$("#doctorInfo").empty();
    	$("#doctorInfo2").empty();
   		var fe =  document.getElementById('fecha').value ;
   		var hor;
   		var teeth = [];
   		var l = 10;
   		
   		 res.forEach(elemento => {
   	        $("#doctorInfo").append(`<span >Cedula: ${elemento.cedula}</span>`);
   	        $("#doctorInfo2").append(`<span>${elemento.especialidad}</span>`);
   		});
   		
   		res.forEach(element => {
   		    if (fe == element.fecha ){
   		         console.log(element);
       		    l --;
       			hor = element.hora_Inicio;
       			teeth.push(hor);
                }
   		});
   	 
   		teeth.sort();
        var time = 28800;
   	    var tiempo = 32400;

        for(i = 0; i < l; i++) { 
                   var hours = Math.floor( time / 3600 );  
                   var minutes = Math.floor( (time % 3600) / 60 );
                   var seconds = time % 60;
                   time += 3600;
                   
                   var hor = Math.floor( tiempo / 3600 );  
                   var min = Math.floor( (tiempo % 3600) / 60 );
                   var sec = tiempo % 60;
                   tiempo += 3600;
                   
                   //Anteponiendo un 0 a las horas si son menos de 10 
                   hours = hours < 10 ? '0' + hours : hours;
                   hor = hor < 10 ? '0' + hor : hor;
                   
                   //Anteponiendo un 0 a los minutos si son menos de 10 
                   minutes = minutes < 10 ? '0' + minutes : minutes;
                   min = min < 10 ? '0' + min : min;
                    
                   //Anteponiendo un 0 a los segundos si son menos de 10 
                   seconds = seconds < 10 ? '0' + seconds : seconds;
                   sec = sec < 10 ? '0' + sec : sec;
                   
                   var result = hours + ":" + minutes + ":" + seconds;  // 2:41:30
                   var res = hor + ":" + min + ":" + sec;  // 2:41:30
             if (teeth[0] != result){
             var   newRow = 
                   "<tr>"
                   +"<td id=\"horaSel"+i+"\">"+ result +"</td>"
                   +"<td id=\"horaSele"+i+"\">"+ res +"</td>"
                   +"<td>"+ "<a href=\"#\" onclick=\"setHora("+i+");\" data-dismiss=\"modal\"><i class=\"glyphicon glyphicon-check\"></i></a>" +"</td>"
                   +"</tr>";
                    $(newRow).appendTo("#tablajson tbody");
               } else {
                   teeth.shift();
               }
        }
   	});
   }
</script>

<script>
function setHora(f){
  document.getElementById('hora_Inicio').value = document.getElementById('horaSel' + f).innerText;
  document.getElementById('hora_Fin').value = document.getElementById('horaSele' + f).innerText;
}
</script>