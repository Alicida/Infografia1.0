<!DOCTYPE html>
<html>
  <head>
    {{-- google analytics script --}}
    {{-- @include("snippets.analytics") --}}
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Movistar - Infografìa</title>
    {{-- metatags --}}
    {{-- @include("snippets.metatags") --}}
    {{-- favicons --}}
    {{-- @include("snippets.favicons") --}}
    {{-- stylesheets --}}
    <style>
      @yield('style')
    </style>
    <link rel="stylesheet" href="{{ App::$base_path }}/dist/css/main.css">
    <script type="text/javascript" src="https://www.google.com/jsapi"></script>
  </head>
  <body>
    @include("snippets.tag_manager")
    @include("shared.shim")
    {{-- header --}}
    <header id="header">
      <div class="container-fluid">

      </div>
    </header>
    {{-- preloader --}}
    <div id="preloader">
      <div class="only-sr">Cargando</div>
    </div>
    {{-- content --}}
    <div id="wrapper">
      @yield('content')
    </div>
    {{-- footer --}}
    <footer id="footer">

    </footer>
    {{-- javascript libraries & stuff --}}
    <script src="{{ App::$base_path }}/dist/js/main.js"></script>
  </body>
</html>
