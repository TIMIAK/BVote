<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatable" content="IE-edge">
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{asset('css/style.css')}}">
        <title>{{config('App.name','BVote')}}</title>
    </head>
    <body>
        @include('inc.navbar')
        <div class="background">
            <div class="container">
                @yield('content')
            </div>
        </div>

    </body>
</html>
