@extends('layouts.app')

@section('content')
<div class="container">

    @include('common.errors')

    {!! Form::open(['route' => 'futbolCincos.store']) !!}

        @include('futbolCincos.fields')

    {!! Form::close() !!}
</div>
@endsection
