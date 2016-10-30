@extends('layouts.app')

@section('content')
<div class="container">

    @include('common.errors')

    {!! Form::model($bicicross, ['route' => ['bicicrosses.update', $bicicross->id], 'method' => 'patch']) !!}

        @include('bicicrosses.fields')

    {!! Form::close() !!}
</div>
@endsection
