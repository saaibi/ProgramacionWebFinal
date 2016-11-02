<br/><br/><br/><br/>
<div class="container">
   <div class="row">
      <div class="col-md-4 col-md-offset-4">
         <div class="panel-heading">
            <h1>
               <center><b style="font-size: 43px;">Reservas</b></center>
            </h1>
         </div>
         <div class="panel-body">
            <!--- Id Usuario Field --->
            <div class="form-group">
               {!! Form::hidden('id_usuario',  Auth::user()->id , ['class' => 'form-control','readonly']) !!}
            </div>
            <!--- Nombre Escenario Field --->
            <div class="form-group ">
               {!! Form::label('tipo_Escenario', 'Tipo Escenario:') !!}
               <select class="form-control" id="tipo_Escenario" name="tipo_Escenario" required onchange="activar_Calendario(); limpiar();">
                  <option value="" disabled selected>Tipo Escenario</option>
                  <option value="FutbolCinco">Futbol 5</option>
                  <option value="FutbolDoce">Futbol 12</option>
                  <option value="Baloncesto">Baloncesto</option>
                  <option value="Voleibol">Voleibol</option>
                  <option value="Bicicross">Bicicross</option>
               </select>
            </div>
            <!--- Nombre Escenario Field --->
            <div class="form-group ">
               {!! Form::label('nombre_Escenario', 'Nombre Escenario:') !!}
               {!! Form::select('nombre_Escenario',['placeholder'=>'Selecciona'],null,['id'=>'nombre_Escenario','onchange'=>'activar_Calendario(); limpiar();']) !!}
            </div>
            <!--- Fecha Field --->
            <div class="form-group ">
               {!! Form::label('fecha', 'Fecha:') !!}
               <input class="form-control" name="fecha" type="date" id="fecha" onchange="activar_Calendario(); limpiar();">
            </div>
            <!-- Button trigger modal -->
            <div class="form-group">
               @include('reservas.modal')
            </div>
            <!--- Hora Inicio Field --->
            <div class="form-group">
               {!! Form::label('hora_Inicio', 'Hora Inicio:') !!}
               <input class="form-control" name="hora_Inicio" type="time" id="hora_Inicio" readonly>
            </div>
            <!--- Hora Fin Field --->
            <div class="form-group">
               {!! Form::label('hora_Fin', 'Hora Fin:') !!}
               <input class="form-control" name="hora_Fin" type="time" id="hora_Fin" readonly>
            </div>
            <!--- Estado Reserva Field --->
            <div class="form-group">
               {!! Form::label('estado_Reserva', 'Estado Reserva:') !!}
               <select class="form-control" id="estado_Reserva" name="estado_Reserva" required>
                  <option value="" disabled selected>Estado</option>
                  <option value="Disponible">Disponible</option>
                  <option value="No Disponible">No Disponible</option>
                  <option value="Activa">Activa</option>
               </select>
            </div>
            <!--- Submit Field --->
            <div class="form-group">
               {!! Form::submit('Save', ['class' => 'btn btn-danger']) !!}
               <a href="{{ url('/reservas') }}">
               <button class="btn btn-default" type="button"> Cancelar </button></a></center>
            </div>
         </div>
      </div>
   </div>
</div>
</div>
<script>
   $("#nombre_Escenario").select2({
    theme: "classic",
    width: "170",
    });
</script>
<script>
   $("#tipo_Escenario").change(event => {
   	$.get(`escenarios/${event.target.value}`, function(res, sta){
   		$("#nombre_Escenario").empty();
   		 $("#nombre_Escenario").append(`<option value="" disabled selected >Nombre Escenario</option>`);
   		res.forEach(elemento => {
   		    $("#nombre_Escenario").append(`<option value=${elemento.id}> ${elemento.nombre} </option>`);
   		});
   	});
   });
</script>
<script type="text/javascript" >
   function limpiar (){
   document.getElementById('hora_Inicio').value = '';
   document.getElementById('hora_Fin').value = '';
   }
</script>

