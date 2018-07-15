@extends('board::layout.main')
@section('title')
   show board
@endsection
@section('content')
    <div class="grid-x">
        <div class="medium-6">
            <h5>Board Details</h5>
        </div>
        <div class="medium-6">
            <a href="{{route('web_board_create')}}" class="button primary pull-right">Add Board Member</a>
        </div>
    </div>

    @isset($board)
        <table>

            <tr>
                <td>Name</td>
                <td>{{$board->name}}</td>
            </tr>
            <tr>
                <td>Description</td>
                <td>{{$board->description}}</td>
            </tr>
            <tr>
                <td>Created </td>
                <td>{{$board->created_at->diffForHumans()}}</td>
            </tr>
            <tr>
                <td>

                </td>
                <td>
                    <a class="button  primary pull-right" href="{!! route('web_board_index') !!}">Back</a>
                </td>
            </tr>
        </table>
    @endisset

@endsection
