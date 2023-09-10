<!DOCTYPE html>
<html lang="en">
  
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <!-- Add this in the <head> section of your layout file -->
  <title>Itushcars</title>
  <link rel="stylesheet" href="{{ mix('css/app.css') }}">

</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#" style="margin-right: 20%;">iTushCars</a>
    <div class="d-flex align-items-center">
      <div class="d-mobile d-lg-block mr-3">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">SignIn</button>
      </div>
      <div>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      </div>
    </div>
    
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Cars</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Booking</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Account</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Services</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">News</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">ContactUs</a>
        </li>
      </ul>
      
      <form class="form-inline my-2 my-lg-0">
        <div class="d-flex align-items-center">
          <input class="form-control mr-sm-2 mr-3" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </div>
      </form>
    </div>

  </nav>
  <section id="fullpage">

  
  {{-- <h1>Itushcars</h1> --}}
  {{--VIEW OUTPUT--}}
  @yield('content')
</section>
  <script src="{{ mix('js/app.js') }}"></script>
    <!-- Add this just before the closing </body> tag -->

</body>
</html>