<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Board management system') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>

<div id="app" class="page">
    <!--top bar nar-->
@include('boardmembers::layout.includes.header')

<!--start of page -->
    <div class="grid-container mainsection">
        <div class="grid-x content-area">
            <!--sidebar  navigation -->
            <div class="cell medium-3">
                @section('sidebar')
                    @include('boardmembers::layout.includes.sidebar')
                @show
            </div>
            <!-- content -->
            <div class="cell medium-7 medium-offset-1">
                <ul class="breadcrumbs">
                    <li><a href="{{route('web_boardmembers_index')}}">Board Members</a></li>
                    <li>
                        <span class="show-for-sr">Current: </span> @yield('title')
                    </li>
                </ul>
                @include('boardmembers::slots.error')

                    @yield('content')

            </div>

        </div>
    </div>


<!--footer -->
<footer class="grid-container  fluid grid-margin-x footer-section">
    <div class="grid-x">
        <div class="cell text-center">
            @include('boardmembers::layout.includes.footer')
        </div>
    </div>
</footer>
</div>
</body>

</html>


