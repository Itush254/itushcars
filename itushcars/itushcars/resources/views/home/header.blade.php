<header class="header_section">
   
     <nav class="navbar navbar-expand-lg custom_nav-container ">
      <div class="logo full-width">
         <a class="navbar-logo" href="{{ url('/redirect') }}" >
            {{-- style="margin-bottom:0px; padding:0;" --}}
            <x-application-logo class="block h-9 w-auto fill-current text-gray-800" />
         </a>
         <!-- Search Form -->
         <div class="search-box full-width p-6 mx-6" style="margin-left:3px;">
            <div class="search-box " style="flex: 1; position: relative; padding:3px;">
                {{-- margin-top: 20px; --}}
            <form class="form-inline" full-width>
                <input type="text" style="width:100%; height:40px; border:none; outline:none; background:#f2f2f2; border-radius:30px; color:gray; font-size:16px; text-align:center;" id="Search"class="form-control" placeholder="Search here..." >
                <button type="submit" style="cursor: pointer; width: 40px; height:40px; border-radius:30px; border:none; position:absolute;top:3px; right:2px; transform: scale(0.9); background:green;">
                    <i class="fas fa-search" style="color: #fff; cursor:pointer;"></i>
                </button>   
            </form>
            </div>
        </div>

      </div>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class=""> </span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
           <ul class="navbar-nav">
              <li class="nav-item active">
                 <a class="nav-link" href="route('dashboard')" :active="request()->routeIs('dashboard')">{{ __('Home') }} <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                 <a class="nav-link" href="route('cars')">
                  {{ __('Cars') }}</a>
              </li>
              <li class="nav-item">
               <a class="nav-link" href="route('booking')">
                  {{ __('Booking') }}</a>
            </li>
            <li class="nav-item">
               <a class="nav-link" href="route('services')">
                  {{ __('Services') }}</a>
            </li>
            <li class="nav-item">
               <a class="nav-link" href="route('about-us')">
                  {{ __('AboutUs') }}</a>
            </li>
            <li class="nav-item">
               <a class="nav-link" href="route('news')">
                  {{ __('News') }}</a>
            </li>
            <li class="nav-item">
               <a class="nav-link" href="route('contact-us')">
                  {{ __('ContactUs') }}</a>
            </li>

            @if (Route::has('login'))
            @auth
            <li class="nav-item">
                @include('components.account-btn')
            </li>
            @else
            <li class="nav-item">
               <a class="btn btn-success" href="{{ route('login') }}" id="logincss">
                  {{ __('Login') }}</a>
            </li>
            <li class="nav-item">
               <a class="btn btn-success" href="{{ route('register') }}" id="registercss">
                  {{ __('Register') }}</a>
            </li>
            @endauth

            
            @endif
              
           </ul>
        </div>
     </nav>
  
</header>