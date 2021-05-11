<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="{{asset('bs5/style.css')}}">
    <link rel="stylesheet" href="{{asset('bs5/css/bootstrap.min.css')}}">
    @stack('css')
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-dark">
    <div class="container">
      <a class="navbar-brand" href="#"><img width="150" height="30" src="https://www.themoviedb.org/assets/2/v4/logos/v2/blue_short-8e7b30f73a4020692ccca9c88bafe5dcb6f8a62a4c6bc55cd9ba82bb2cd95f6c.svg" alt=""></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav w-100 color-white">
          <a class="nav-link fw-bolder" href="#">Movies</a>
          <a class="nav-link fw-bolder" href="#">TV Shows</a>
          <a class="nav-link fw-bolder" href="#">People</a>
          <a class="nav-link fw-bolder" href="#">More</a>
        </div>
        <form class="d-flex">
            <input class="me-2 search-nav" type="search" placeholder="Search" aria-label="Search">
            <a href="#">
                <i  class="fa fa-search fa-search-nav color-white"></i>
            </a>
          </form>
      </div>
    </div>
  </nav>
  @yield('content')


  <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script src="{{asset('bs5/js/bootstrap.bundle.js')}}"></script>
    @stack('js')
</body>
</html>