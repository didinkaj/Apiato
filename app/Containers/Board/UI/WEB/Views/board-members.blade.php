<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Apiato</title>

    <!-- Fonts -->
    <link href="{{asset('/css/app.css')}}" rel="stylesheet">
    <script src="{{asset('/js/app.js')}}"></script>

</head>
<body>
<section class="grid-container fluid topbarnav">
<div class="grid-container ">
    <div class="top-bar">
        <div class="top-bar-left">
            <ul class="menu">
                <li class="menu-text">Board Management System</li>
            </ul>
        </div>
        <div class="top-bar-right">
            <ul class="menu">
                <li><a href="#">Login</a></li>
                <li><a href="#">Register</a></li>
            </ul>
        </div>
    </div>
</div>
</section>
<section class="mainsection">
    <div class="grid-container ">
        <div class="grid-x grid-padding-x">

            <div class="cell medium-4 sidebar">
                <ul class="list-group">
                    <li class="list-group-item "><a href="#">Add board members</a> </li>
                    <li class="list-group-item"><a href="#">Create boards</a></li>
                    <li class="list-group-item"><a href="#">Create board committees</a></li>
                    <li class="list-group-item"><a href="#">Add board members to committees.</a></li>
                </ul>
            </div>

            <div class="cell medium-8 content-area">
                <div class="grid-margin-x">
                    <h4>Create Boards </h4>
                    <form class="contact-us-form" action="home/create" method="post">
                        @csrf_token
                        <input name="name" type="text" placeholder="Board name">
                        <input name="description" type="text" placeholder="Description">
                        <div class="contact-us-form-actions">
                            <input type="submit" class="button" value="Save"/>
                        </div>
                    </form>

                    <ul>
                        @foreach($boardmembers as $member)
                            <li>{{$member->id}}</li>
                        @endforeach
                    </ul>

                </div>
            </div>

        </div>
    </div>
</section>

<script> $(document).foundation();</script>
</body>
</html>
