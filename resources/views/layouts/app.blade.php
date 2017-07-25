<html>
<head>
  <title>App Name - @yield('title')</title>
  <!-- Fonts -->
  <link href="{{elixir('css/app.css')}}" rel="stylesheet" type="text/css">

</head>
<body>
  <div class="flex-center position-ref full-height">

    <div class="content">

      <div class="title m-b-md">
        @yield('title')
      </div>

      <div class="links">
        @yield('title2')

        @yield('content')

      </div>
    </div>
  </div>


</body>
</html>
