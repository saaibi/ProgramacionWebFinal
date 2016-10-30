@extends('layouts.app')

@section('content')
<div class="container">

    @include('common.errors')

    {!! Form::open(['route' => 'voleibols.store']) !!}

        @include('voleibols.fields')

    {!! Form::close() !!}
</div>
@endsection
