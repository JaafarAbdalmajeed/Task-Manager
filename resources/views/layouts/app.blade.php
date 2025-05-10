<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title')</title>
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        @yield('styles')
        </head>
        <body class="bg-[#FDFDFC] dark:bg-[#0a0a0a] text-[#1b1b18] flex p-6 lg:p-8 items-center lg:justify-center min-h-screen flex-col">
        <header class="mb-6">
            <h1>Laravel 10 Task List App</h1>
        </header>

        @yield('content')

        <footer class="mt-6">
            <p>&copy; {{ date('Y') }} Your Company. All rights reserved.</p>
        </footer>
        <script src="{{ asset('js/app.js')}}"></script>
        @yield('scripts')
    </body>
</html>
