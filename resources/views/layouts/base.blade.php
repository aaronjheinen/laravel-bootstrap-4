<!doctype html>
<html lang="{{ config('app.locale') }}">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <link rel="stylesheet" href="{{ mix('/css/app.css') }}">
    <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>
  </head>
  <body>
    <div id="wrap" role="document">
      @include('partials.nav')
      <div class="container">
        <div id="content" class="content">
          <main class="main">
            @yield('content')
          </main>
        </div>
      </div>
    </div>
    @include('partials.footer')
    <script src="{{ mix('/js/app.js') }}"></script>
  </body>
</html>
