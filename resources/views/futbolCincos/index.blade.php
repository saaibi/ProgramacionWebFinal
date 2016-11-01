@extends('layouts.app')

@section('content')

    <div class="container">

        @include('flash::message')

        <div class="row">
            <h1 class="pull-left">futbolCincos</h1>
            <a class="btn btn-danger pull-right" style="margin-top: 25px" href="{!! route('futbolCincos.create') !!}">Add New</a>
        </div>

        <div class="row">
            @if($futbolCincos->isEmpty())
                <div class="well text-center">No futbolCincos found.</div>
            @else
                <table class="table">
                    <thead>
                    <th>Id</th>
                    <th>Nombre</th>
        			<th>Estado</th>
        			<th>Tipodepiso</th>
        			<th>Ubicacion</th>
                    <th width="50px">Action</th>
                    </thead>
                    <tbody>
                     
                    @foreach($futbolCincos as $futbolCinco)
                        <tr>
                            <td>{!! $futbolCinco->id !!}</td>
                            <td>{!! $futbolCinco->nombre !!}</td>
					<td>{!! $futbolCinco->estado !!}</td>
					<td>{!! $futbolCinco->tipoDePiso !!}</td>
					<td>{!! $futbolCinco->ubicacion !!}</td>
                            <td class="rojolink">
                                <a href="{!! route('futbolCincos.edit', [$futbolCinco->id]) !!}"><i class="glyphicon glyphicon-edit"></i></a>
                                <a href="{!! route('futbolCincos.delete', [$futbolCinco->id]) !!}" onclick="return confirm('Are you sure wants to delete this futbolCinco?')"><i class="glyphicon glyphicon-remove"></i></a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            @endif
        </div>
    </div>
@endsection