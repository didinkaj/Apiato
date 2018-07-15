@extends('committee::layout.main')
@section('title')
    All Committees
@endsection
@section('content')
    <div class="grid-x">
        <div class="medium-6">
            <h5> Committees</h5>
        </div>
        <div class="medium-6">
            <a href="{{route('web_committee_create')}}" class="button primary pull-right">Add Commitee</a>
        </div>

    </div>
    @isset($committees)
        <table>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Description</th>
                <th colspan="3">Action</th>
            </tr>

            @foreach($committees as $index => $committee)
                <tr>
                    <td>{{$index +1}}</td>
                    <td>{{$committee->name}}</td>
                    <td>{{$committee->description}}</td>
                    <td><a href="{!! route('web_committee_edit',$committee->id,'edit') !!}">Edit</a></td>
                    <td><a href="{!! route('web_committee_show',$committee->id) !!}">View</a></td>
                    <td>
                        {!! Form::open(array('method'=>'delete','route' => array('web_committee_delete',$committee->id,'delete'))) !!}
                        {{ Form::submit('Delete', array('class' => '', 'style' => ' color: #1779ba;cursor: pointer;background-color:inherit;border:none;')) }}
                        {!! Form::close() !!}
                    </td>
                </tr>


            @endforeach

        </table>
        {{ $committees->links() }}
    @endisset
@endsection
