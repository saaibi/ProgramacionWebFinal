@extends('layouts.app')

@section('content')

    <div class="container">

        @include('flash::message')

        <div class="row"><br/><br/><br/>
            <h1 class="pull-left" style="font-size: 81px;">Futbol Doce </h1>
             @if(Auth::user()->email == 'reservasjs@gmail.com')
               @include('futbolDoces.create') 
               @endif
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
			 @if(Auth::user()->email == 'reservasjs@gmail.com')
                    <th width="50px">Action</th>
                    @endif
                    </thead>
                    <tbody>
                     
                    @foreach($futbolDoces as $futbolDoce)
                        <tr>
                             <td>{!! $futbolDoce->id !!}</td>
                            <td>{!! $futbolDoce->nombre !!}</td>
					<td>{!! $futbolDoce->estado !!}</td>
					<td>{!! $futbolDoce->tipoDePiso !!}</td>
					<td>{!! $futbolDoce->ubicacion !!}</td>
					 @if(Auth::user()->email == 'reservasjs@gmail.com')
                            <td class="rojolink">
                                <a href="{!! route('futbolDoces.edit', [$futbolDoce->id]) !!}"><i class="glyphicon glyphicon-edit"></i></a>
                                <a href="{!! route('futbolDoces.delete', [$futbolDoce->id]) !!}" onclick="return confirm('Are you sure wants to delete this FutbolDoce?')"><i class="glyphicon glyphicon-remove"></i></a>
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