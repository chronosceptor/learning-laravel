<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel App - @yield('title')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="t-bg-gray-200">

    <header class="t-bg-white t-mb-5 t-py-4">
        <div class="t-container t-max-w-6xl t-flex t-justify-between">
            <a href="{{ route('home.index') }}">
                <h1>Laravel</h1>
            </a>
            <nav>
                <a href="{{ route('home.index') }}">Home</a>
                <a href="{{ route('home.contact') }}" class="t-ml-3">Contact</a>
                <a href="{{ route('posts.index') }}" class="t-ml-3">Blog Posts</a>
                <a href="{{ route('posts.create') }}" class="t-ml-3">Add Blog Posts</a>
            </nav>
        </div>
    </header>

    <div class="t-container t-max-w-6xl">
        @if(session('status'))
            <div style="background:red; color:white; padding:.5rem;">
                {{ session('status') }}
            </div>
        @endif
        @yield('content')
    </div>
</body>

</html>
