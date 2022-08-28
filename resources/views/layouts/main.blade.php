<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">

        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@200;300;400;500;600;700&family=Joan&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">

        <style>
            body{
                font-family: 'Inter', sans-serif;
            }
        </style>

        <title>Blog-app | {{ $title }}</title>

        @vite('resources/sass/app.scss')
        @vite('public/css/style.css')
    </head>
    <body class="antialiased">

        @include('partials.navbar')

        @yield('hero')
        <div class="container mt-4">
            @yield('content')
        </div>

        @vite('resources/js/app.js')

    </body>
</html>