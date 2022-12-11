<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@stack('title-sites') | Desa Cikembulan</title>
    <link rel="shortcut icon" href="{{ asset('images/logo-bms.png') }}" type="image/x-icon">
    
    @include('templates.partials.styles')
</head>
<body>
    @include('templates.partials.nav')

    @yield('content')    

    @include('templates.partials.footer')

    @include('templates.partials.scripts')
</body>
</html>