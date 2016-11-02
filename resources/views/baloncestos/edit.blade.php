@extends('layouts.app')

@section('content')
<div class="container"><br/><br/>

    @include('common.errors')

    {!! Form::model($baloncesto, ['route' => ['baloncestos.update', $baloncesto->id], 'method' => 'patch']) !!}

        @include('baloncestos.fields')

    {!! Form::close() !!}
</div>
@endsection
