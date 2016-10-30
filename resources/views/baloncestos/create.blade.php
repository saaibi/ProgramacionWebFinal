@extends('layouts.app')

@section('content')
<div class="container">

    @include('common.errors')

    {!! Form::open(['route' => 'baloncestos.store']) !!}

        @include('baloncestos.fields')

    {!! Form::close() !!}
</div>
@endsection
