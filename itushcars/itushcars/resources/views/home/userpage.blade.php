<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" >
   <head>
      <!-- Basic -->
      <meta charset="utf-8" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <!-- Mobile Metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
      <meta name="csrf-token" content="{{ csrf_token() }}">
      <!-- Site Metas -->
      <meta name="keywords" content="" />
      <meta name="description" content="" />
      <meta name="author" content="" />
      <link rel="shortcut icon" href="images/favicon.png" type="">
      <title>{{ config('app.name', 'itushcars') }}</title>
       <!-- Fonts -->
       <link rel="preconnect" href="https://fonts.bunny.net">
       <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
      <!-- bootstrap core css -->
      <link rel="stylesheet" type="text/css" href="home/css/bootstrap.css" />
      <!-- font awesome style -->
      <link href="home/css/font-awesome.min.css" rel="stylesheet" />
      <!-- Custom styles for this template -->
      <link href="home/css/style.css" rel="stylesheet" />
      <!-- responsive style -->
      <link href="home/css/responsive.css" rel="stylesheet" />

      <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" rel="stylesheet">
        
      <!-- Scripts -->
      @vite(['resources/css/app.css', 'resources/js/app.js'])


   </head>
   <body style="background-color: #ffffff;
   overflow-x: hidden;">
    <div class="min-h-screen">
      {{-- <x-navbar /> <!-- Include the Navbar component --> --}}
      <!-- Page Content -->
      <main>
        <div class="hero_area">
          <!-- header section strats -->
          @include('home.header')
          <!-- end header section -->
 
          <!-- slider section -->
          @include('home.slider')
          <!-- end slider section -->
       </div>
       <!-- why section -->
        @include('home.why')
       <!-- end why section -->
       
       <!-- arrival section -->
       {{-- @include('home.new_arrival') --}}
       <!-- end arrival section -->
       
       <!-- cars section -->
       @include('home.cars')
       <!-- end cars section -->
 
       <!-- subscribe section -->
       @include('home.subscribe')
       <!-- end subscribe section -->
       <!-- client section -->
       @include('home.client')
       <!-- end client section -->
       <!-- footer start -->
       @include('home.footer')
       <!-- footer end -->
       <div class="cpy_">
          <p class="mx-auto">© 2021 All Rights Reserved By <a href="https://html.design/">Free Html Templates</a><br>
          
             Distributed By <a href="https://themewagon.com/" target="_blank">ThemeWagon</a>
          
          </p>
       </div>
       <!-- jQery -->
       <script src="home/js/jquery-3.4.1.min.js"></script>
       <!-- popper js -->
       <script src="home/js/popper.min.js"></script>
       <!-- bootstrap js -->
       <script src="home/js/bootstrap.js"></script>
       <!-- custom js -->
       <script src="home/js/custom.js"></script>
      </main>
  </div>
      
   </body>
</html>