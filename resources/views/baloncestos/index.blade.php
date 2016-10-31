@extends('layouts.app')

@section('content')

    <div class="container">

        @include('flash::message')

        <div class="row">
            <h1 class="pull-left">Baloncestos</h1>
            <a class="btn btn-primary pull-right" style="margin-top: 25px" href="{!! route('baloncestos.create') !!}">Add New</a>
        </div>

        <div class="row">
            @if($baloncestos->isEmpty())
                <div class="well text-center">No Baloncestos found.</div>
            @else
                <table class="table">
                    <thead>
                        <th>Id</th>
                    <th>Nombre</th>
			<th>Estado</th> <!-- para hacer el commit -->
			<th>Tipo de piso</th>
			<th>Ubicacion</th>
			<th>Capacidad</th>
                    <th width="50px">Action</th>
                    </thead>
                    <tbody>
                     
                    @foreach($baloncestos as $baloncesto)
                        <tr>
                            <td>{!! $baloncesto->id !!}</td>
                            <td>{!! $baloncesto->nombre !!}</td>
					<td>{!! $baloncesto->estado !!}</td>
					<td>{!! $baloncesto->tipoDePiso !!}</td>
					<td>{!! $baloncesto->ubicacion !!}</td>
					<td>{!! $baloncesto->capacidad !!}</td>
                            <td>
                                <a href="{!! route('baloncestos.edit', [$baloncesto->id]) !!}"><i class="glyphicon glyphicon-edit"></i></a>
                                <a href="{!! route('baloncestos.delete', [$baloncesto->id]) !!}" onclick="return confirm('Are you sure wants to delete this Baloncesto?')"><i class="glyphicon glyphicon-remove"></i></a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            @endif
        </div>
    </div>
@endsection