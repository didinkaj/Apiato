@extends('boardmembers::layout.main')
@section('title')
    Member Details
@endsection
@section('content')
    <h5> Board Member Details</h5>
    @isset($boardmember)
        <table>

            <tr>
                <td>First Name</td>
                <td>{{$boardmember->fname}}</td>
            </tr>
            <tr>
                <td>Second Name</td>
                <td>{{$boardmember->sname}}</td>
            </tr>
            <tr>
                <td>Last Name</td>
                <td>{{$boardmember->lname}}</td>
            </tr>
            <tr>
                <td>Department</td>
                <td>{{$boardmember->department}}</td>
            </tr>
            <tr>
                <td>Phone Number</td>
                <td>{{$boardmember->phone_no}}</td>
            </tr>
            <tr>
                <td>Email Address</td>
                <td>{{$boardmember->email}}</td>
            </tr>
            <tr>
                <td>Created </td>
                <td>{{$boardmember->created_at->diffForHumans()}}</td>
            </tr>
            <tr>
                <td>

                </td>
                <td>
                    <a class="button  primary pull-right" href="{!! route('web_boardmembers_index') !!}">Back</a>
                </td>
            </tr>
        </table>
    @endisset
@endsection
