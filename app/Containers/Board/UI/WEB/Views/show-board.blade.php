@extends('board::layout.main')
@section('title')
   show board
@endsection
@section('content')
    <h5>Board Details</h5>
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
