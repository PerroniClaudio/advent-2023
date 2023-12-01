<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>AOC - 2023</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    @vite('resources/css/app.css')
</head>

<body class="antialiased">
    <div class="container mx-auto max-w-7xl">
        <div class="flex flex-col items-center justify-center p-32 pb-0">
            <div class="flex flex-col items-center justify-center">
                <h1 class="text-4xl font-bold text-center ">AOC - 2023</h1>
                <p class="text-xl text-center ">AOC - 2023 is a web application for the 2023 Advent of Code.</p>
            </div>
        </div>

        <div class="grid grid-cols-1 p-8">
            {{ $slot }}
        </div>


    </div>
</body>

</html>
