<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Blog-app | Dashboard</title>

    <link rel="stylesheet" type="text/css" href="/css/trix.css">
    <script type="text/javascript" src="/js/trix.js"></script>

    <style>
      trix-toolbar [data-trix-button-group="file-tools"] {
        display: none !important;
      }
    </style>

    @vite('resources/sass/app.scss')
    @vite('public/css/dashboard.css')
    @vite('public/css/trix.css')
  </head>
  <body>
    
    @include('dashboard.layout.header')

    <div class="container-fluid">
        <div class="row">
            @include('dashboard.layout.sidebar')

            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                @yield('content')
            </main>
        </div>
    </div>

    @vite('resources/js/app.js')
    @vite('public/js/dashboard.js')
    @vite('public/js/trix.js')
    <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script>
  </body>
</html>
