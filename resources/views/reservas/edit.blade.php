@extends('layouts.app')

@section('content')
<div class="container">

    @include('common.errors')

    {!! Form::model($reservas, ['route' => ['reservas.update', $reservas->id], 'method' => 'patch']) !!}

        @include('reservas.fields')

    {!! Form::close() !!}
</div>
@endsection
