@extends('layouts.app')

@section('content')
<div class="container">

    @include('common.errors')

    {!! Form::model($baloncesto, ['route' => ['baloncestos.update', $baloncesto->id], 'method' => 'patch']) !!}

        @include('baloncestos.fields')

    {!! Form::close() !!}
</div>
@endsection
