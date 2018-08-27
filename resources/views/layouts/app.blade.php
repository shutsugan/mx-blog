<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{config('app.name', 'mx-blog')}}</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Roboto:100,600" rel="stylesheet" type="text/css">
        <link href="https://getbootstrap.com/docs/4.1/dist/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://getbootstrap.com/docs/4.1/examples/starter-template/starter-template.css" rel="stylesheet">
    </head>
    <body>
        @include('inc.navbar')
        <div class="container">
            @include('inc.messages')
            @yield('content')
        </div>

        <script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
        <script>
            CKEDITOR.replace('acticle-ckeditor');
        </script>
    </body>
</html>
