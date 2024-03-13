 <!-- Navigation -->
 <nav id="navbarExample" class="navbar navbar-expand-lg fixed-top navbar-light" aria-label="Main navigation">
    <div class="container">

        <!-- Image Logo -->
        <a class="navbar-brand logo-image" href="index.html"><img src="{{asset('mainassets/images/logo.svg')}}" alt="alternative"></a> 

        <!-- Text Logo - Use this if you don't have a graphic logo -->
        <!-- <a class="navbar-brand logo-text" href="index.html">Ioniq</a> -->

        <button class="navbar-toggler p-0 border-0" type="button" id="navbarSideCollapse" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="navbar-collapse offcanvas-collapse" id="navbarsExampleDefault">
            <ul class="navbar-nav ms-auto navbar-nav-scroll">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#header">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#features">Features</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#details">Details</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#pricing">Pricing</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link" href="#">
                                                     <span>English</span>                                                                                                                                                                                                                                                                                                                                                                                                                                                                                 <i class="fas fa-angle-down nav-link-arrow ml-2"></i>
                    </a>
                    <ul class="dropdown-menu">
                                                    <li>
                                <a class="dropdown-item" href="/en">English</a>
                            </li>
                                                    <li>
                                <a class="dropdown-item" href="/it">Italian</a>
                            </li>
                                                    <li>
                                <a class="dropdown-item" href="/fr">French</a>
                            </li>
                                                    <li>
                                <a class="dropdown-item" href="/de">German</a>
                            </li>
                                                    <li>
                                <a class="dropdown-item" href="/es">Spanish</a>
                            </li>
                                                    <li>
                                <a class="dropdown-item" href="/ru">Russian</a>
                            </li>
                                                    <li>
                                <a class="dropdown-item" href="/pt">Portuguese</a>
                            </li>
                                                    <li>
                                <a class="dropdown-item" href="/tr">Turkish</a>
                            </li>
                                                    <li>
                                <a class="dropdown-item" href="/ar">Arabic</a>
                            </li>
                                            </ul>
                </li>
            </ul>



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