<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>@yield('title')</title>
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
  @component('components.header')
  @endcomponent
  @yield('content')
  @component('components.footer')
  @endcomponent
  
  <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>