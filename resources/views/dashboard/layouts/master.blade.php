<!DOCTYPE html>
<html>

<head>
    <title>An HTML standard template</title>
    <meta charset="utf-8"  />
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
