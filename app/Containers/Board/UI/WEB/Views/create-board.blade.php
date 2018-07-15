@extends('board::layout.main')
@section('title')
    Create board
@endsection
@section('content')
    <h4>Create Board </h4>
    {!! Form::open(array('route' => 'web_board_store')) !!}
    {{ Form::label('board_name', 'Board Name:') }}
    {{ Form::text('name', null, array( 'class' => 'form-control', 'required' => '', 'maxlength' => '255'))   }}
    {{ Form::label('description', 'Description:') }}
    {{ Form::text('description', null, array('class' => 'form-control')) }}
    {{ Form::submit('Create Post', array('class' => 'primary button', 'style' => 'margin-top: 20px;')) }}
    {!! Form::close() !!}
@endsection
