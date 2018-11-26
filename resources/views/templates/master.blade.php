<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href={{asset('/css/app.css') }}>

        {{-- Title --}}
        <title>@yield('title')</title>
    </head>
    <body>
        {{-- Main Content --}}
        @yield('content')

        {{-- Import Scripts --}}
        <script src={{asset('/js/app.js')}}></script>
        @yield('scripts')
    </body>
</html>