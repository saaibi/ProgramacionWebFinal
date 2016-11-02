@extends('layouts.app')

@section('content')
<div class="container">
    @include('common.errors')
    {!! Form::open(['route' => 'reservas.store']) !!}
        @include('reservas.fields')
    {!! Form::close() !!}
</div>
@endsection
