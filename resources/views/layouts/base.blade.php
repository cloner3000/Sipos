<!DOCTYPE html>

<html class="app-ui">

<head>
  <!-- Meta -->
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" />

  <title>@yield('title')</title>

  <meta name="description" content="AppUI - Frontend Template & UI Framework" />
  <meta name="robots" content="noindex, nofollow" />

  <link rel="apple-touch-icon" href="{{ asset('img/favicons/apple-touch-icon.png') }}" />
  <link rel="icon" href="{{ asset('img/favicons/favicon.ico') }}" />

  <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:300,400,400italic,500,900%7CRoboto+Slab:300,400%7CRoboto+Mono:400" />

  <link rel="stylesheet" id="css-font-awesome" href="{{ asset('css/font-awesome.css') }}" />
  <link rel="stylesheet" id="css-ionicons" href="{{ asset('css/ionicons.css') }}" />
  <link rel="stylesheet" id="css-bootstrap" href="{{ asset('css/bootstrap.css') }}" />
  <link rel="stylesheet" id="css-app" href="{{ asset('css/app.css') }}" />
  <link rel="stylesheet" id="css-app-custom" href="{{ asset('css/app-custom.css') }}" />
  @yield('stylesheets')
</head>

<body class="app-ui @yield('body-class')">
  <div class="app-layout-canvas">
    <div class="app-layout-container">
      @yield('side-menu')

      @yield('header')

      <main class="app-layout-content">
        <div class="container-fluid p-y-md">
        @yield('content')
        </div>
      </main>
    </div>
  </div>

  <!-- AppUI Core JS: jQuery, Bootstrap, slimScroll, scrollLock and App.js -->
  <script src="{{ asset('js/core/jquery.min.js') }}"></script>
  <script src="{{ asset('js/core/bootstrap.min.js') }}"></script>
  <script src="{{ asset('js/core/jquery.slimscroll.min.js') }}"></script>
  <script src="{{ asset('js/core/jquery.scrollLock.min.js') }}"></script>
  <script src="{{ asset('js/core/jquery.placeholder.min.js') }}"></script>
  <script src="{{ asset('js/app.js') }}"></script>
  <script src="{{ asset('js/app-custom.js') }}"></script>

  @yield('scripts')

</body>

</html>
