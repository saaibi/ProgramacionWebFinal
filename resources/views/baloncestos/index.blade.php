@extends('layouts.app')

@section('content')

    <div class="container">

        @include('flash::message')

        <div class="row"><br/><br/><br/>
            <h1 class="pull-left" style="font-size: 81px;">Baloncesto</h1>
             @if(Auth::user()->email == 'reservasjs@gmail.com')
            @include('baloncestos.create')
            @endif
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
			 @if(Auth::user()->email == 'reservasjs@gmail.com')
                    <th width="50px">Action</th>
                    @endif
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
					 @if(Auth::user()->email == 'reservasjs@gmail.com')
                            <td class="rojolink">
                                <a href="{!! route('baloncestos.edit', [$baloncesto->id]) !!}"><i class="glyphicon glyphicon-edit"></i></a>
                                <a href="{!! route('baloncestos.delete', [$baloncesto->id]) !!}" onclick="return confirm('Are you sure wants to delete this Baloncesto?')"><i class="glyphicon glyphicon-remove"></i></a>
                            </td>
                            @endif
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            @endif
        </div>
    </div>
@endsection