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
                     
                    @foreach($reservas as $reservas)
                        <tr>
                            <td>{!! $reservas->id_usuario !!}</td>
                             <td>{!! $reservas->tipo_Escenario !!}</td>
					<td>{!! $reservas->nombre_Escenario !!}</td>
					<td>{!! $reservas->fecha !!}</td>
					<td>{!! $reservas->estado_Reserva !!}</td>
					<td>{!! $reservas->hora_Inicio !!}</td>
					<td>{!! $reservas->hora_Fin !!}</td>
                            <td>
                                <a href="{!! route('reservas.edit', [$reservas->id]) !!}"><i class="material-icons">mode_edit</i></a>
                                <a href="{!! route('reservas.delete', [$reservas->id]) !!}" onclick="return confirm('Are you sure wants to delete this Reservas?')"><i class="material-icons">delete</i></a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            @endif
        </div>
    </div>
@endsection