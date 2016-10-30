@extends('layouts.app')

@section('content')
<div class="container">

    @include('common.errors')

    {!! Form::model($voleibol, ['route' => ['voleibols.update', $voleibol->id], 'method' => 'patch']) !!}

        @include('voleibols.fields')

    {!! Form::close() !!}
</div>
@endsection
