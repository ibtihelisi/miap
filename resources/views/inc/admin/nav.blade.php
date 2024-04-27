<nav class="navbar navbar-light navbar-top navbar-expand">
    <div class="navbar-logo"><button class="btn navbar-toggler navbar-toggler-humburger-icon" type="button" data-bs-toggle="collapse" data-bs-target="#navbarVerticalCollapse" aria-controls="navbarVerticalCollapse" aria-expanded="false" aria-label="Toggle Navigation"><span class="navbar-toggle-icon"><span class="toggle-line"></span></span></button> <a class="navbar-brand me-1 me-sm-3" href="index.html">
        <div class="d-flex align-items-center">
          <div class="d-flex align-items-center"><img src="{{asset('dashassets/img/icons/logo.png')}}" alt="phoenix" width="32">
              <a href="/"> 
                  <p class="logo-text ms-2 d-none d-sm-block">QR Menu</p>
              </a>
            </div>
        </div>
      </a></div>
    <div class="collapse navbar-collapse">
      
      <ul class="navbar-nav navbar-nav-icons ms-auto flex-row">
        
        <li class="nav-item dropdown"><a class="nav-link lh-1 px-0 ms-5" id="navbarDropdownUser" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <div class="avatar avatar-l">
             
                  
              <img class="rounded-circle" src="{{asset('dashassets/img/team/avatar-placeholder.png')}}" alt="">
            </div>
            <span class="username"  >{{Auth::user()->owner_name}}</span><!-- Nom de l'utilisateur -->
           
          </a>
          <div class="dropdown-menu dropdown-menu-end py-0 dropdown-profile shadow border border-300" aria-labelledby="navbarDropdownUser">
            <div class="card bg-white position-relative border-0">
              <div class="card-body p-0 overflow-auto scrollbar" style="height: 12rem;">
                <div class="text-center pt-4 pb-3">
                  <div class="avatar avatar-xl">
                              
                    <img class="rounded-circle" src="{{asset('dashassets/img/team/avatar-placeholder.png')}}" alt=""></div>
                  <h6 class="mt-2">{{Auth::user()->owner_name}}</h6>
                </div>
                
                <ul class="nav d-flex flex-column mb-2 pb-1">
                  <li class="nav-item"><a class="nav-link px-3" href="/admin/profile/{id}"><span class="me-2 text-900" data-feather="user"></span>Profile</a></li>
                  <li class="nav-item"><a class="nav-link px-3" href="/admin/dashboard"><span class="me-2 nav-link-icon"><span data-feather="cast"></span></span>Dashboard</a></li>
                 
                </ul>
              </div>
              <div class="card-footer p-0 border-top">
                
                <br>
                <div class="px-3">
                  <a    onclick="event.preventDefault();
                       document.getElementById('logout-form').submit();" class="btn btn-phoenix-secondary d-flex flex-center w-100" href="sign out">
                    <span class="me-2" data-feather="log-out">
                      </span>Sign out
                    </a>

                   
                  <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                      @csrf
                   </form>
                  </div>
                 </div>
            </div>
          </div>
        </li>
      </ul>
    </div>
  </nav>