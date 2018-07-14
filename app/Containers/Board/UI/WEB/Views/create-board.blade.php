@extends('board::layout.main')
@section('content')
    <h4>Create Boards </h4>
    {!! Form::open(array('route' => 'web_board_store')) !!}
    {{ Form::label('name', 'Title:') }}
    {{ Form::text('name', null, array( 'class' => 'form-control', 'required' => '', 'maxlength' => '255'))   }}
    {{ Form::label('description', 'Description:') }}
    {{ Form::text('description', null, array('class' => 'form-control')) }}
    {{ Form::submit('Create Post', array('class' => 'primary button', 'style' => 'margin-top: 20px;')) }}
    {!! Form::close() !!}
@endsection
