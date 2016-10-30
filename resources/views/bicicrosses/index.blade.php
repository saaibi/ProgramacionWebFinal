@extends('layouts.app')

@section('content')

    <div class="container">

        @include('flash::message')

        <div class="row">
            <h1 class="pull-left">Bicicrosses</h1>
            <a class="btn btn-primary pull-right" style="margin-top: 25px" href="{!! route('bicicrosses.create') !!}">Add New</a>
        </div>

        <div class="row">
            @if($bicicrosses->isEmpty())
                <div class="well text-center">No Bicicrosses found.</div>
            @else
                <table class="table">
                    <thead>
                    <th>Nombre</th>
			<th>Estado</th>
			<th>Ubicacion</th>
			<th>Capacidad</th>
                    <th width="50px">Action</th>
                    </thead>
                    <tbody>
                     
                    @foreach($bicicrosses as $bicicross)
                        <tr>
                            <td>{!! $bicicross->nombre !!}</td>
					<td>{!! $bicicross->estado !!}</td>
					<td>{!! $bicicross->ubicacion !!}</td>
					<td>{!! $bicicross->capacidad !!}</td>
                            <td>
                                <a href="{!! route('bicicrosses.edit', [$bicicross->id]) !!}"><i class="glyphicon glyphicon-edit"></i></a>
                                <a href="{!! route('bicicrosses.delete', [$bicicross->id]) !!}" onclick="return confirm('Are you sure wants to delete this Bicicross?')"><i class="glyphicon glyphicon-remove"></i></a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            @endif
        </div>
    </div>
@endsection