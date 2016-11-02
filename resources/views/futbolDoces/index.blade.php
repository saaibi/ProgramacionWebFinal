@extends('layouts.app')

@section('content')

    <div class="container">

        @include('flash::message')

        <div class="row"><br/><br/><br/>
            <h1 class="pull-left" style="font-size: 81px;">Futbol Doce </h1>
               @include('futbolDoces.create') 
        </div>

        <div class="row">
            @if($futbolDoces->isEmpty())
                <div class="well text-center">No FutbolDoces found.</div>
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
                     
                    @foreach($futbolDoces as $futbolDoce)
                        <tr>
                             <td>{!! $futbolDoce->id !!}</td>
                            <td>{!! $futbolDoce->nombre !!}</td>
					<td>{!! $futbolDoce->estado !!}</td>
					<td>{!! $futbolDoce->tipoDePiso !!}</td>
					<td>{!! $futbolDoce->ubicacion !!}</td>
                            <td class="rojolink">
                                <a href="{!! route('futbolDoces.edit', [$futbolDoce->id]) !!}"><i class="glyphicon glyphicon-edit"></i></a>
                                <a href="{!! route('futbolDoces.delete', [$futbolDoce->id]) !!}" onclick="return confirm('Are you sure wants to delete this FutbolDoce?')"><i class="glyphicon glyphicon-remove"></i></a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            @endif
        </div>
    </div>
@endsection