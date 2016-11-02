@extends('layouts.app')

@section('content')

    <div class="container">
    
        @include('flash::message')

        <div class="row"><br/><br/><br/>
            <h1 class="pull-left" style="font-size: 81px;">Futbol Cinco</h1>
                  <!-- Button trigger modal -->
                   @if(Auth::user()->email == 'reservasjs@gmail.com')
                @include('futbolCincos.create')
                @endif
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
        			 @if(Auth::user()->email == 'reservasjs@gmail.com')
                    <th width="50px">Action</th>
                    @endif
                    </thead>
                    <tbody>
                     
                    @foreach($futbolCincos as $futbolCinco)
                        <tr>
                            <td>{!! $futbolCinco->id !!}</td>
                            <td>{!! $futbolCinco->nombre !!}</td>
					<td>{!! $futbolCinco->estado !!}</td>
					<td>{!! $futbolCinco->tipoDePiso !!}</td>
					<td>{!! $futbolCinco->ubicacion !!}</td>
					 @if(Auth::user()->email == 'reservasjs@gmail.com')
                            <td class="rojolink">
                                <a href="{!! route('futbolCincos.edit', [$futbolCinco->id]) !!}"><i class="glyphicon glyphicon-edit"></i></a>
                                <a href="{!! route('futbolCincos.delete', [$futbolCinco->id]) !!}" onclick="return confirm('Are you sure wants to delete this futbolCinco?')"><i class="glyphicon glyphicon-remove"></i></a>
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