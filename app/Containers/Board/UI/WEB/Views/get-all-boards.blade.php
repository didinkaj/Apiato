@extends('board::layout.main')
@section('title')
    all boards
@endsection
@section('content')
    <div class="grid-x">
        <div class="medium-6">
            <h5>Boards</h5>
        </div>
        <div class="medium-6">
            <a href="{{route('web_board_create')}}" class="button primary pull-right">Add Board</a>
        </div>

    </div>
    @isset($boards)
<table>
    <tr>
        <th>#</th>
        <th>Name</th>
        <th>Description</th>
        <th colspan="3">Action</th>
    </tr>
    @foreach($boards as $index => $board)
        <tr>
            <td>{{$index +1}}</td>
            <td>{{$board->name}}</td>
            <td>{{$board->description}}</td>
            <td><a href="{!! route('web_board_edit',$board->id,'edit') !!}" >Edit</a> </td>
            <td><a href="{!! route('web_board_show',$board->id) !!}" >View</a> </td>
            <td>
                {!! Form::open(array('method'=>'delete','route' => array('web_board_delete',$board->id,'delete'))) !!}
                {{ Form::submit('Delete', array('class' => '', 'style' => ' color: #1779ba;cursor: pointer;background-color:inherit;border:none;')) }}
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
</table>
    {{ $boards->links() }}
    @endisset
@endsection
