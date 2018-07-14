@extends('board::layout.main')
@section('content')
    <div class="grid-x">
        <div class="medium-6">
            <h5>Board Members</h5>
        </div>
        <div class="medium-6">
            <a href="{{route('web_board_create')}}" class="button primary pull-right">Add Member</a>
        </div>

    </div>
<table>
    <tr>
        <th>#</th>
        <th>Name</th>
        <th>Description</th>
    </tr>
    @foreach($boardmembers as $index => $member)
        <tr>
            <td>{{$index +1}}</td>
            <td>{{$member->name}}</td>
            <td>{{$member->description}}</td>
        </tr>
    @endforeach
</table>
@endsection
