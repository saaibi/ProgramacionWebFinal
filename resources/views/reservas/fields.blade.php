<!--- Id Usuario Field --->
<div class="form-group col-sm-6 col-lg-12">
    {!! Form::label('id_usuario', 'Id Usuario:') !!}
    {!! Form::text('id_usuario',  Auth::user()->id , ['class' => 'form-control','readonly']) !!}
</div>

<!--- Nombre Escenario Field --->
<div class="form-group col-sm-6 col-lg-12">
    {!! Form::label('tipo_Escenario', 'Tipo Escenario:') !!}
     <select class="form-control" id="tipo_Escenario" name="tipo_Escenario" required>
        <option value="" disabled selected>Seleccione Tipo Escenario</option>
        <option value="Activa">Futbol 5</option>
        <option value="Inactiva">Futbol 12</option>
        <option value="Confirmada">Baloncesto</option>
        <option value="Confirmada">Voleibol</option>
        <option value="Confirmada">Bicicross</option>
    </select>
</div>

<!--- Nombre Escenario Field --->
<div class="form-group col-sm-6 col-lg-12">
    {!! Form::label('nombre_Escenario', 'Nombre Escenario:') !!}
    {!! Form::select('nombre_Escenario',['placeholder'=>'Selecciona'],null,['id'=>'nombre_Escenario']) !!}
</div>

<!--- Fecha Field --->
<div class="form-group col-sm-6 col-lg-12">
    {!! Form::label('fecha', 'Fecha:') !!}
    {!! Form::date('fecha', null, ['class' => 'form-control']) !!}
</div>

<!--- Hora Inicio Field --->
<div class="form-group col-sm-6 col-lg-12">
    {!! Form::label('hora_Inicio', 'Hora Inicio:') !!}
    {!! Form::time('hora_Inicio', null, ['class' => 'form-control']) !!}
</div>

<!--- Hora Fin Field --->
<div class="form-group col-sm-6 col-lg-12">
    {!! Form::label('hora_Fin', 'Hora Fin:') !!}
    {!! Form::time('hora_Fin', null, ['class' => 'form-control']) !!}
</div>

<!-- Button trigger modal -->
<div class="form-group col-sm-6 col-lg-4">
    @include('reservas.modal')
</div>

<!--- Estado Reserva Field --->
<div class="form-group col-sm-6 col-lg-12">
    {!! Form::label('estado_Reserva', 'Estado Reserva:') !!}
    {!! Form::text('estado_Reserva', null, ['class' => 'form-control']) !!}
</div>

<!--- Submit Field --->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
</div>
<script>
    $("#nombre_Escenario").select2({
     theme: "classic",
     width: "170",
    
     });
</script>

<script>
$("#tipo_Escenario").change(event => {
	$.get(`pacienteInfo/${event.target.value}`, function(res, sta){
		$("#pacienteInfo").empty();
		res.nombrePaci.forEach(elemento => {
		    $("#pacienteInfo").append(`<span> ${elemento.nombre} </span>`);
		});
	});
});
</script>