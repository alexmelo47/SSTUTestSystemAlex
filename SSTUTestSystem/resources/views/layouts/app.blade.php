<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('page_title')</title>
    @vite(['resources/css/app.css'])
    <!--<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">-->
</head>
<body>
    <div>
        @include('includes.header')
        @yield('content')
        @include('includes.side_panel')
        @include('includes.footer')
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.2/js/bootstrap.min.js"></script>
</body>
</html>
<!--
cd SSTUTestSystem
npm run build
php artisan serve
-->
