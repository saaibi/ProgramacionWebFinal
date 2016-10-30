<!--- Nombre Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('nombre', 'Nombre:') !!}
    {!! Form::text('nombre', null, ['class' => 'form-control']) !!}
</div>

<!--- Estado Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('estado', 'Estado:') !!}
    <select class="form-control" id="estado" name="estado" required>
        <option value="" disabled selected>Estado</option>
        <option value="Disponible">Disponible</option>
        <option value="No Disponible">No Disponible</option>
    </select>
</div>

<!--- Tipodepiso Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('tipoDePiso', 'Tipodepiso:') !!}
    {!! Form::text('tipoDePiso', null, ['class' => 'form-control']) !!}
</div>

<!--- Ubicacion Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('ubicacion', 'Ubicacion:') !!}
    {!! Form::text('ubicacion', null, ['class' => 'form-control']) !!}
</div>


<!--- Submit Field --->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
</div>
