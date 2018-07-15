@extends('committee::layout.main')
@section('title')
    Create Committe
@endsection
@section('content')
    <h4>Create Committee. </h4>
    {!! Form::open(array('route' => 'web_committee_store')) !!}
    {{ Form::label('name', 'Committee Name:') }}
    {{ Form::text('name', null, array( 'class' => 'form-control', 'required' => '', 'maxlength' => '255'))   }}
    {{ Form::label('description', 'Description:') }}
    {{ Form::text('description', null, array('class' => 'form-control')) }}
    {{ Form::submit('Create Post', array('class' => 'primary button', 'style' => 'margin-top: 20px;')) }}
    {!! Form::close() !!}
@endsection
