@extends('layouts.app')

@section('content')
<div class="container"><br/><br/>

    @include('common.errors')

    {!! Form::model($bicicross, ['route' => ['bicicrosses.update', $bicicross->id], 'method' => 'patch']) !!}

        @include('bicicrosses.fields')

    {!! Form::close() !!}
</div>
@endsection
