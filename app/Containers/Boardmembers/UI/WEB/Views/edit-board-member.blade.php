@extends('boardmembers::layout.main')
@section('title')
    Edit Member
@endsection
@section('content')
    <h5>Edit  Board Member </h5>
    {!! Form::model($boardmember, array('method'=>'patch','route' => ['web_boardmembers_update',$boardmember->id])) !!}
    {{ Form::label('fname', 'First Name:') }}
    {{ Form::text('fname', null, array( 'class' => 'form-control', 'required' => '', 'maxlength' => '50'))   }}
    {{ Form::label('sname','Second Name')}}
    {{ Form::text('sname',null,array('class' => 'form-control','required'=>'required','maxlength'=>'50')) }}
    {{ Form::label('lname', 'Last Name:') }}
    {{ Form::text('lname',null,array('class' => 'form-control','required'=>'','maxlength'=>'50')) }}
    {{ Form::label('department', 'Department:') }}
    {{ Form::text('department',null,array('class' => 'form-control','required'=>'required','maxlength'=>'50')) }}
    {{ Form::label('phone_no', 'Phone Number:') }}
    {{ Form::number('phone_no', null, array('class' => 'form-control' ,'required'=>'','maxlength'=>'20')) }}
    {{ Form::label('email', 'Email Address:') }}
    {{ Form::text('email', null, array('class' => 'form-control' ,'required'=>'','maxlength'=>'100')) }}
    {{ Form::submit('Edit Member', array('class' => 'primary button pull-right', 'style' => 'margin-top: 20px;')) }}
    {!! Form::close() !!}
@endsection
