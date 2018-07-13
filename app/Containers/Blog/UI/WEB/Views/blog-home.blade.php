<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Apiato</title>

    <!-- Fonts -->
    <link href="{{asset('/css/app.css')}}" rel="stylesheet">
    <script src="{{asset('/js/app.js')}}"></script>

</head>
<body>
<div class="grid-container">
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

<article class="grid-container">
    <div class="grid-x align-center callout">
        <div class="cell medium-8">
            <div class="blog-post">
                

            </div>
        </div>


    </div>
</article>

<script> $(document).foundation();</script>
</body>
</html>
