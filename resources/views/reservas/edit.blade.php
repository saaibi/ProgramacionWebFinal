@extends('layouts.app')

@section('content')
<div class="container">

    @include('common.errors')

    {!! Form::model($reservas, ['route' => ['reservas.update', $reservas->id], 'method' => 'patch']) !!}
<br/><br/><br/><br/>
        <div class="container">
   <div class="row">
      <div class="col-md-4 col-md-offset-4">
         <div class="panel-heading">
            <h1>
               <center><b style="font-size: 43px;">Actualizar Reservas</b></center>
            </h1>
         </div>
         <div class="panel-body">
             <!--- Id Usuario Field --->
            <div class="form-group col-sm-6 col-lg-12">
                {!! Form::label('id_usuario', 'Id Usuario:') !!}
                {!! Form::text('id_usuario',  null , ['class' => 'form-control','readonly']) !!}
            </div>
            <!--- Nombre Escenario Field --->
            <div class="form-group col-sm-6 col-lg-12">
                {!! Form::label('tipo_Escenario', 'Tipo Escenario:') !!}
                 {!! Form::text('tipo_Escenario', null, ['class' => 'form-control','readonly']) !!}
            </div>
            <!--- Nombre Escenario Field --->
            <div class="form-group col-sm-6 col-lg-12">
                {!! Form::label('nombre_Escenario', 'Nombre Escenario:') !!}
                {!! Form::text('nombre_Escenario', null, ['class' => 'form-control','readonly']) !!}
            </div>
            <!--- Fecha Field --->
            <div class="form-group col-sm-6 col-lg-12">
                {!! Form::label('fecha', 'Fecha:') !!}
                {!! Form::date('fecha', null, ['class' => 'form-control','readonly']) !!}
            </div>
            <!--- Hora Inicio Field --->
            <div class="form-group col-sm-6 col-lg-12">
                {!! Form::label('hora_Inicio', 'Hora Inicio:') !!}
                {!! Form::time('hora_Inicio', null, ['class' => 'form-control','readonly']) !!}
            </div>
            <!--- Hora Fin Field --->
            <div class="form-group col-sm-6 col-lg-12">
                {!! Form::label('hora_Fin', 'Hora Fin:') !!}
                {!! Form::time('hora_Fin', null, ['class' => 'form-control','readonly']) !!}
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
            <div class="form-group col-sm-12">
                {!! Form::submit('Save', ['class' => 'btn btn-danger']) !!}
            </div>
         </div>
      </div>
   </div>
</div>
    {!! Form::close() !!}
</div>
<script type="text/javascript">
   $(document).ready(function(){
       $('#estado_Reserva > option[value="{{ $reservas->estado_Reserva}}"]').attr('selected', 'selected');
   });
</script>
@endsection
