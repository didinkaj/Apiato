@extends('committee::layout.main')
@section('title')
    Edit Committee
@endsection
@section('content')
    <h4>Edit   Committee </h4>
    {!! Form::model($committee, array('method'=>'patch','route' => ['web_committee_update',$committee->id])) !!}
    {{ Form::label('board_name', 'Board Name:') }}
    {{ Form::text('name', null, array( 'class' => 'form-control', 'required' => '', 'maxlength' => '255'))   }}
    {{ Form::label('description', 'Description:') }}
    {{ Form::text('description', null, array('class' => 'form-control')) }}
    {{ Form::submit('Edit Committee', array('class' => 'primary button pull-right', 'style' => 'margin-top: 20px;')) }}
    {!! Form::close() !!}
@endsection
