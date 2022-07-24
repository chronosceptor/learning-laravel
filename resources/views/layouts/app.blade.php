<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel App - @yield('title')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <div>
        @if(session('status'))
            <div style="background:red; color:white; padding:.5rem;">
                {{ session('status') }}
            </div>
        @endif
        @yield('content')
    </div>
</body>

</html>
