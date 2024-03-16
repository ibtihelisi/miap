<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>




    


    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <!-- SEO Meta Tags -->
    <meta name="description" content="Your description">
    <meta name="author" content="Your name">

    <!-- OG Meta Tags to improve the way the post looks when you share the page on Facebook, Twitter, LinkedIn -->
    <meta property="og:site_name" content="" /> <!-- website name -->
    <meta property="og:site" content="" /> <!-- website link -->
    <meta property="og:title" content=""/> <!-- title shown in the actual shared post -->
    <meta property="og:description" content="" /> <!-- description shown in the actual shared post -->
    <meta property="og:image" content="" /> <!-- image link, make sure it's jpg -->
    <meta property="og:url" content="" /> <!-- where do you want your post to link to -->
    <meta name="twitter:card" content="summary_large_image"> <!-- to have large image post format in Twitter -->

    <!-- Webpage Title -->
    <title>Ioniq Webpage Title</title>
    
    <!-- Styles -->
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,400;0,600;1,400&display=swap" rel="stylesheet">
    <link href="{{asset('mainassets/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('mainassets/css/fontawesome-all.min.css')}}" rel="stylesheet">
    <link href="{{asset('mainassets/css/swiper.css')}}" rel="stylesheet">
    <link href="{{asset('mainassets/css/styles.css')}}" rel="stylesheet">
    
    <!-- Favicon  -->
    <link rel="icon" href="images/favicon.png">







    <!-- <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    CSRF Token 
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

     Fonts 
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

     Scripts 
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

      -->






</head>
<body>


    <div id="app">
        
         <!-- Navigation -->
 <nav id="navbarExample" class="navbar navbar-expand-lg fixed-top navbar-light" aria-label="Main navigation">
    <div class="container">

        <!-- Image Logo -->
        <a class="navbar-brand logo-image" href="/"><img src="{{asset('mainassets/images/logo.svg')}}" alt="alternative"></a> 

        <!-- Text Logo - Use this if you don't have a graphic logo -->
        <!-- <a class="navbar-brand logo-text" href="index.html">MenuQR</a> -->

        <button class="navbar-toggler p-0 border-0" type="button" id="navbarSideCollapse" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="navbar-collapse offcanvas-collapse" id="navbarsExampleDefault">
            


             <!-- Right Side Of Navbar -->
             <ul class="navbar-nav ms-auto">
                <!-- Authentication Links -->
                @guest
                    @if (Route::has('login'))
                        <li class="nav-item">
                            <a class="btn-outline-sm" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                    @endif

                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="btn-outline-sm" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                    @endif
                @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }}
                        </a>

                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endguest
            </ul>






            <!--<span class="nav-item">
                <a class="btn-outline-sm" href="log-in.html">Log in</a>
            </span>-->
            <!-- <span class="nav-item">
                <a class="btn-outline-sm" href="{{ route('login') }}">{{ __('Login') }}</a>
            </span>

            <span class="nav-item">
                <a class="btn-outline-sm" href="{{ route('register') }}">{{ __('Sign up') }}</a>
            </span>-->
        </div> <!-- end of navbar-collapse -->
    </div> <!-- end of container -->
</nav> <!-- end of navbar -->
<!-- end of navigation -->
        <main class="py-4">
            @yield('content')
        </main>
    </div>



     <!-- bottom bar start-->

     @include('inc.guest.bottombar')
     <!-- bottom bar end-->
   
       
   <!-- Scripts -->
   <script src="{{asset('mainassets/js/bootstrap.min.js')}}"></script> <!-- Bootstrap framework -->
   <script src="{{asset('mainassets/js/swiper.min.js')}}"></script> <!-- Swiper for image and text sliders -->
   <script src="{{asset('mainassets/js/purecounter.min.js')}}"></script> <!-- Purecounter counter for statistics numbers -->
   <script src="{{asset('mainassets/js/replaceme.min.js')}}"></script> <!-- ReplaceMe for rotating text -->
   <script src="{{asset('mainassets/js/scripts.js')}}"></script> <!-- Custom scripts -->

</body>






<!--<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand mr-lg-5" href="/">
                    <img class="theProjectLogo" src="/default/logo_qrzebra.png">
                  </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    Left Side Of Navbar 
                    <ul class="navbar-nav me-auto">

                    </ul>

                     Right Side Of Navbar 
                    <ul class="navbar-nav ms-auto">
                        Authentication Links 
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

       
    </div>
</body>-->
</html>