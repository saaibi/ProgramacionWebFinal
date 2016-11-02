@include('common.errors')

    {!! Form::open(['route' => 'bicicrosses.store']) !!}
<button type="button" class="btn btn-danger btn-lg" data-toggle="modal" data-target="#myModal" style="margin-left: 1058px;" >
Add New
</button>
<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
   <div class="modal-dialog" role="document">
      <div class="modal-content">
         <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <Center><h1 class="modal-title" id="myModalLabel"><b><h4 style="font-size: 43px;">Bicicross</h4></b></h1></Center>
         </div>
         <div class="modal-body">
            <!--- Nombre Field --->
<div class="form-group ">
    {!! Form::label('nombre', 'Nombre:') !!}
    {!! Form::text('nombre', null, ['class' => 'form-control']) !!}
</div>

<!--- Estado Field --->
<div class="form-group">
    {!! Form::label('estado', 'Estado:') !!}
    <select class="form-control" id="estado" name="estado" required>
        <option value="" disabled selected>Estado</option>
        <option value="Disponible">Disponible</option>
        <option value="No Disponible">No Disponible</option>
    </select>
</div>

<!--- Ubicacion Field --->
<div class="form-group ">
    {!! Form::label('ubicacion', 'Ubicacion:') !!}
    {!! Form::text('ubicacion', null, ['class' => 'form-control']) !!}
</div>

<!--- Capacidad Field --->
<div class="form-group ">
    {!! Form::label('capacidad', 'Capacidad:') !!}
    {!! Form::number('capacidad', null, ['class' => 'form-control']) !!}
</div>
            <!--- Submit Field --->
         </div>
         <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            <button type="submit" name="Save" class="btn btn-danger">Save changes</button>
         </div>
      </div>
   </div>
</div>

    {!! Form::close() !!}

