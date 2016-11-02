@extends('layouts.app')

@section('content')

    <div class="container">

        @include('flash::message')

        <div class="row"><br/><br/><br/>
            <h1 class="pull-left" style="font-size: 81px;">Voleibol </h1>
             @if(Auth::user()->email == 'reservasjs@gmail.com')
            @include('voleibols.create')
            @endif
        </div>

        <div class="row">
            @if($voleibols->isEmpty())
                <div class="well text-center">No Voleibols found.</div>
            @else
                <table class="table">
                    <thead>
                        <th>Id</th>
                    <th>Nombre</th>
			<th>Estado</th>
			<th>Tipodepiso</th>
			<th>Ubicacion</th>
			<th>Capacidad</th>
			        @if(Auth::user()->email == 'reservasjs@gmail.com')
                    <th width="50px">Action</th>
                    @endif
                    </thead>
                    <tbody>
                     
                    @foreach($voleibols as $voleibol)
                        <tr>
                            <td>{!! $voleibol->id !!}</td>
                            <td>{!! $voleibol->nombre !!}</td>
					<td>{!! $voleibol->estado !!}</td>
					<td>{!! $voleibol->tipoDePiso !!}</td>
					<td>{!! $voleibol->ubicacion !!}</td>
					<td>{!! $voleibol->capacidad !!}</td>
					 @if(Auth::user()->email == 'reservasjs@gmail.com')
                            <td class="rojolink">
                                <a href="{!! route('voleibols.edit', [$voleibol->id]) !!}"><i class="glyphicon glyphicon-edit"></i></a>
                                <a href="{!! route('voleibols.delete', [$voleibol->id]) !!}" onclick="return confirm('Are you sure wants to delete this Voleibol?')"><i class="glyphicon glyphicon-remove"></i></a>
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