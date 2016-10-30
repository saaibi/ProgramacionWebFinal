@extends('layouts.app')

@section('content')

    <div class="container">

        @include('flash::message')

        <div class="row">
            <h1 class="pull-left">Voleibols</h1>
            <a class="btn btn-primary pull-right" style="margin-top: 25px" href="{!! route('voleibols.create') !!}">Add New</a>
        </div>

        <div class="row">
            @if($voleibols->isEmpty())
                <div class="well text-center">No Voleibols found.</div>
            @else
                <table class="table">
                    <thead>
                    <th>Nombre</th>
			<th>Estado</th>
			<th>Tipodepiso</th>
			<th>Ubicacion</th>
			<th>Capacidad</th>
                    <th width="50px">Action</th>
                    </thead>
                    <tbody>
                     
                    @foreach($voleibols as $voleibol)
                        <tr>
                            <td>{!! $voleibol->nombre !!}</td>
					<td>{!! $voleibol->estado !!}</td>
					<td>{!! $voleibol->tipoDePiso !!}</td>
					<td>{!! $voleibol->ubicacion !!}</td>
					<td>{!! $voleibol->capacidad !!}</td>
                            <td>
                                <a href="{!! route('voleibols.edit', [$voleibol->id]) !!}"><i class="glyphicon glyphicon-edit"></i></a>
                                <a href="{!! route('voleibols.delete', [$voleibol->id]) !!}" onclick="return confirm('Are you sure wants to delete this Voleibol?')"><i class="glyphicon glyphicon-remove"></i></a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            @endif
        </div>
    </div>
@endsection