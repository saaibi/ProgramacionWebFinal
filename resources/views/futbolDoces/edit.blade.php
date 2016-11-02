@extends('layouts.app')

@section('content')
<div class="container"><br/><br/>

    @include('common.errors')

    {!! Form::model($futbolDoce, ['route' => ['futbolDoces.update', $futbolDoce->id], 'method' => 'patch']) !!}

        @include('futbolDoces.fields')

    {!! Form::close() !!}
</div>
@endsection
