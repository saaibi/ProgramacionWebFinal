@extends('layouts.app')

@section('content')
<div class="container">

    @include('common.errors')

    {!! Form::open(['route' => 'futbolDoces.store']) !!}

        @include('futbolDoces.fields')

    {!! Form::close() !!}
</div>
@endsection
