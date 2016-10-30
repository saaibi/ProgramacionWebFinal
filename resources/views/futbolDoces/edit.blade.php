@extends('layouts.app')

@section('content')
<div class="container">

    @include('common.errors')

    {!! Form::model($futbolDoce, ['route' => ['futbolDoces.update', $futbolDoce->id], 'method' => 'patch']) !!}

        @include('futbolDoces.fields')

    {!! Form::close() !!}
</div>
@endsection
