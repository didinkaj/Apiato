@extends('boardmembers::layout.main')
@section('title')
    All Members
@endsection
@section('content')
    <div class="grid-x">
        <div class="medium-6">
            <h5>Board Members</h5>
        </div>
        <div class="medium-6">
            <a href="{{route('web_boardmembers_create')}}" class="button primary pull-right">Add Member</a>
        </div>

    </div>
    @isset($boardmembers)
<table>
    <tr>
        <th>#</th>
        <th>Name</th>
        <th>Department</th>
        <th colspan="3">Action</th>
    </tr>
    @foreach($boardmembers as $index => $boardmember)
        <tr>
            <td>{{$index +1}}</td>
            <td>{{$boardmember->fname}} {{$boardmember->lname}}</td>
            <td>{{$boardmember->department}}</td>
            <td><a href="{!! route('web_boardmembers_edit',$boardmember->id,'edit') !!}" >Edit</a> </td>
            <td><a href="{!! route('web_boardmembers_show',$boardmember->id) !!}" >View</a> </td>
            <td>
                {!! Form::open(array('method'=>'delete','route' => array('web_boardmembers_delete',$boardmember->id,'delete'))) !!}
                {{ Form::submit('Delete', array('class' => '', 'style' => ' color: #1779ba;cursor: pointer;background-color:inherit;border:none;')) }}
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
</table>
    {{ $boardmembers->links() }}
    @endisset
@endsection
