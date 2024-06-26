 <!-- Navigation -->
 <nav id="navbarExample" class="navbar navbar-expand-lg fixed-top navbar-light" aria-label="Main navigation">
    <div class="container">

        <!-- Image Logo -->
        <a class="navbar-brand logo-image logosize" href="/"><img src="{{asset('mainassets/images/logo.svg')}}" alt="put logo" style="width: 60px; height: auto;"></a> 

        <!-- Text Logo - Use this if you don't have a graphic logo -->
        <!-- <a class="navbar-brand logo-text" href="index.html">MenuQR</a> -->

        <button class="navbar-toggler p-0 border-0" type="button" id="navbarSideCollapse" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="navbar-collapse offcanvas-collapse" id="navbarsExampleDefault">
            <ul class="navbar-nav ms-auto navbar-nav-scroll">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#header">{{__('topnav.home')}}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#features">{{__('topnav.features')}}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#about">{{__('topnav.about')}}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#pricing">{{__('topnav.pricing')}}</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#demo">{{__('topnav.demo')}}</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#faq">FAQ</a>
                </li>
                <!--<li class="nav-item dropdown">
                    <a class="nav-link" href="#">
                                                     <span>{{__('topnav.langue')}}</span>                                                                                                                                                                                                                                                                                                                                                                                                                                                                                 <i class="fas fa-angle-down nav-link-arrow ml-2"></i>
                    </a>
                    <ul class="dropdown-menu">
                                                    <li>
                                <a class="dropdown-item" href="{{route('languageConverter','en')}}">{{__('topnav.english')}}</a>
                            </li>
                                         
                                                    <li>
                                <a class="dropdown-item" href="{{route('languageConverter','fr')}}">{{__('topnav.french')}}</a>
                            </li>
                              
                                                    <li>
                                <a class="dropdown-item" href="{{route('languageConverter','ar')}}">{{__('topnav.arabic')}}</a>
                            </li>
                                            </ul>
                </li>-->
            </ul>



             <!-- Right Side Of Navbar -->
             <ul class="navbar-nav ms-auto">
                <!-- Authentication Links -->
                @guest
                    @if (Route::has('login'))
                        <li class="nav-item">
                            <a class="btn-outline-sm" href="{{ route('login') }}">{{__('topnav.login')}}</a>
                        </li>
                    @endif

                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="btn-outline-sm" href="{{ route('register') }}">{{__('topnav.register')}}</a>
                        </li>
                    @endif
                @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->owner_name }}
                        </a>

                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">


                            @if ( Auth::user()->role=='admin')
                                
                                <a class="dropdown-item" href="/admin/dashboard" >  <i class="me-2 fas fa-tachometer-alt"></i> Dashboard</a>
                            @else
                                <a class="dropdown-item" href="/client/dashboard"> <i class="me-2 fas fa-tachometer-alt"></i> Dashboard</a>

                            @endif
                       
                            <a class="dropdown-item" href="{{ route('logout') }}" 
                               onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();"><i class="me-2 fas fa-sign-out-alt"></i>
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