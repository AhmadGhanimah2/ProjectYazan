<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @include('dashboard.layouts.head')
</head>
<body>
@include('dashboard.layouts.header')
@include('dashboard.layouts.sidebar')

@yield('content')
@include('dashboard.layouts.footer')
@include('dashboard.layouts.footer-script')
</body>
</html>


