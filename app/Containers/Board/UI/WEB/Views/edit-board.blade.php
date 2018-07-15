@extends('board::layout.main')
@section('title')
    show Edit
@endsection
@section('content')
    <nav aria-label="You are here:" role="navigation">

    </nav>
    <h4>Edit  Boards </h4>
    {!! Form::model($board, array('method'=>'patch','route' => ['web_board_update',$board->id])) !!}
    {{ Form::label('board_name', 'Board Name:') }}
    {{ Form::text('name', null, array( 'class' => 'form-control', 'required' => '', 'maxlength' => '255'))   }}
    {{ Form::label('description', 'Description:') }}
    {{ Form::text('description', null, array('class' => 'form-control')) }}
    {{ Form::submit('Edit Board', array('class' => 'primary button pull-right', 'style' => 'margin-top: 20px;')) }}
    {!! Form::close() !!}
@endsection
