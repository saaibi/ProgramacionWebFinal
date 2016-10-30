@extends('layouts.app')

@section('content')
<div class="container">

    @include('common.errors')

    {!! Form::open(['route' => 'bicicrosses.store']) !!}

        @include('bicicrosses.fields')

    {!! Form::close() !!}
</div>
@endsection
