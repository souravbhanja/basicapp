<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="/css/app.css">
  <title>Info Website</title>
</head>
<body>
  @include('inc.navbar')
  <div class="container my-3">

    @if (Request::is('/'))
        @include('inc.showcase')
    @endif

    <div class="row">
      <div class="col-md-8 col-lg-8 col-sm-8">
        @include('inc.messages')
        @yield('content')
      </div>
      <div class="col-md-4 col-lg-4 col-sm-4">
        @include('inc.sidebar')
      </div>
    </div>
  </div>
  <footer id="footer" class="text-center">
    <p>Copyright {{Date('Y')}} &copy; InfoWebsite</p>
  </footer>
</body>
</html>