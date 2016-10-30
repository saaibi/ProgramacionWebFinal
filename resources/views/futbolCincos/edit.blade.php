@extends('layouts.app')

@section('content')
<div class="container">

    @include('common.errors')

    {!! Form::model($futbolCinco, ['route' => ['futbolCincos.update', $futbolCinco->id], 'method' => 'patch']) !!}

        @include('futbolCincos.fields')

    {!! Form::close() !!}
</div>
@endsection
