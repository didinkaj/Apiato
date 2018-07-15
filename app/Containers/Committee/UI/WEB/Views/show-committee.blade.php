@extends('committee::layout.main')
@section('title')
    Committee Details
@endsection
@section('content')

    <div class="grid-x">
        <div class="medium-6">
            <h5>  Committee Details</h5>
        </div>
        <div class="medium-6">
            <a href="{{route('web_board_create')}}" class="button primary pull-right">Add Committee Member</a>
        </div>
    </div>
    @isset($committee)
        <table>

            <tr>
                <td>Name</td>
                <td>{{$committee->name}}</td>
            </tr>
            <tr>
                <td>Description</td>
                <td>{{$committee->description}}</td>
            </tr>
            <tr>
                <td>Created </td>
                <td>{{$committee->created_at->diffForHumans()}}</td>
            </tr>
            <tr>
                <td>

                </td>
                <td>
                    <a class="button  primary pull-right" href="{!! route('web_committee_index') !!}">Back</a>
                </td>
            </tr>
        </table>
    @endisset
@endsection
