<br/><br/><br/><br/>
<div class="container">
   <div class="row">
      <div class="col-md-6 col-md-offset-3">
         <div class="panel-heading">
            <h1>
               <center><b style="font-size: 43px;">Actualizar Escenario</b></center>
            </h1>
         </div>
         <!--- Nombre Field --->
         <div class="form-group ">
            {!! Form::label('nombre', 'Nombre:') !!}
            {!! Form::text('nombre', null, ['class' => 'form-control']) !!}
         </div>
         <!--- Estado Field --->
         <div class="form-group ">
            {!! Form::label('estado', 'Estado:') !!}
            <select class="form-control" id="estado" name="estado" required>
               <option value="" disabled selected>Estado</option>
               <option value="Disponible">Disponible</option>
               <option value="No Disponible">No Disponible</option>
            </select>
         </div>
         <!--- Tipodepiso Field --->
         <div class="form-group ">
            {!! Form::label('tipoDePiso', 'Tipodepiso:') !!}
            {!! Form::text('tipoDePiso', null, ['class' => 'form-control']) !!}
         </div>
         <!--- Ubicacion Field --->
         <div class="form-group ">
            {!! Form::label('ubicacion', 'Ubicacion:') !!}
            {!! Form::text('ubicacion', null, ['class' => 'form-control']) !!}
         </div>
         <!--- Submit Field --->
         <div class="form-group ">
            {!! Form::submit('Save', ['class' => 'btn btn-danger']) !!}
            <a href="{{ url('/futbolDoces') }}">
            <button class="btn btn-default" type="button"> Cancelar </button></a></center>
         </div>
      </div>
   </div>
</div>
</div>
<script type="text/javascript">
   $(document).ready(function(){
       $('#estado > option[value="{{$futbolDoce->estado}}"]').attr('selected', 'selected');
   });
</script>