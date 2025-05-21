<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Merry Meal | {{ $title_page }}</title>
    @vite('resources/css/app.css')
    <link rel="icon" href="{!! asset('/favicon.ico') !!}" />
    @yield('css_custom')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
  </head>
  <body>
    <x-navbar />
    <main class="overflow-y-hidden font-poppins antialiased">
      @yield('component_content')
    </main>
    @yield('js_custom')
    <x-footer />
  </body>
</html>
