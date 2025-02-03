<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ricette</title>
    <title>@yield('title')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <header class="flex justify-between p-4">
        <span class="text-3xl font-semibold">Ricettario</span>
        <nav>
            <ul class="flex gap-2">
                <li><a href="#">Lista ricette</a></li>
            </ul>
        </nav>
    </header>
    <main id="main-container">
        @yield('content')
        @section('mid-content')
            <p>Mid Content</p>
        @show
        @section('bottom-content')
        @show
    </main>
</body>

</html>
