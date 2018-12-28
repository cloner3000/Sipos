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
  <link rel="icon" href="{{ asset('img/favicons/icon.png') }}" />

  <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:300,400,400italic,500,900%7CRoboto+Slab:300,400%7CRoboto+Mono:400" />

  @include('assets.css-app')
  <script src="{{ asset('js/core/jquery.min.js') }}"></script>

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

  @include('assets.js-app')
  @yield('scripts')

  <div class="app-ui-mask-modal"></div>
</body>

</html>
