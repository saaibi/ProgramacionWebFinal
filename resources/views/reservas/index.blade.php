@extends('layouts.app')

@section('content')

    <div class="container">

        @include('flash::message')

        <div class="row">
            <h1 class="pull-left">Reservas</h1>
            <a class="btn btn-primary pull-right" style="margin-top: 25px" href="{!! route('reservas.create') !!}">Add New</a>
        </div>

        <div class="row">
            @if($reservas->isEmpty())
                <div class="well text-center">No Reservas found.</div>
            @else
                <table class="table">
                    <thead>
                        <th>Id</th>
                    <th>Id Usuario</th>
                    <th>Tipo Escenario</th>
			<th>Nombre Escenario</th>
			<th>Fecha</th>
			<th>Estado Reserva</th>
			<th>Hora Inicio</th>
			<th>Hora Fin</th>
                    <th width="50px">Action</th>
                    </thead>
                    <tbody>
                    @foreach($reservas as $reserva)
                    </tbody>
                        <tr>
                            <td>{!! $reserva->id!!}</td>
                            <td>{!! $reserva->id_usuario!!}</td>
                            <td>{!! $reserva->tipo_Escenario !!}</td>
        					<td>{!! $reserva->nombre_Escenario !!}</td>
        					<td>{!! $reserva->fecha !!}</td>
        					<td>{!! $reserva->estado_Reserva !!}</td>
        					<td>{!! $reserva->hora_Inicio !!}</td>
        					<td>{!! $reserva->hora_Fin !!}</td>
                            <td>
                                <a href="{!! route('reservas.edit', [$reserva->id]) !!}"><i class="glyphicon glyphicon-edit"></i></a>
                                <a href="{!! route('reservas.delete', [$reserva->id]) !!}" onclick="return confirm('Are you sure wants to delete this Reservas?')"><i class="glyphicon glyphicon-remove"></i></a>
                            </td>
                        </tr>
                    @endforeach
                    
                    
                </table>
            @endif
        </div>
    </div>
@endsection