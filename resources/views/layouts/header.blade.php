<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
  <link href="{{ asset('css/app.css') }}" rel="stylesheet"/>

  <nav class="navbar navbar-expand">
    <a class="navbar-brand" href="/">SHOP</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto ml-auto">
        <li class="nav-item active">
          <a class="nav-link" href="/">Home<span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/departments/1">Chairs</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/departments/2">Stools</a>
          </li>
      </ul>
      <ul class="navbar-nav">
        <li class="nav-item active"><a class="nav-link" href="/basket">Basket</a></li>
      </ul>
          @if (Route::has('login'))
              <ul class="navbar-nav">
                  @auth
                  @else
                      <li class="nav-item active"><a class="nav-link" href="{{ route('login') }}">Login</a></li>

                      @if (Route::has('register'))
                      <li class="nav-item active"><a class="nav-link" href="{{ route('register') }}">Register</a></li>
                      @endif
                  @endauth
              </ul>
          @endif

    </div>
  </nav>
</head>

<body>
  @yield('content')
</body>
</html>