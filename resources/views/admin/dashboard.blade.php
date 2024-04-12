<!doctype html>
<html lang="en-US" dir="ltr">

  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>QR Menu|admin|Dashboard</title>
    <link rel="apple-touch-icon" sizes="180x180" href="{{asset('dashassets/img/favicons/apple-touch-icon.png')}}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{asset('dashassets/img/favicons/favicon-32x32.png')}}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('dashassets/img/favicons/favicon-16x16.png')}}">
    <!-- Icons -->
    <link href="https://zebra-qr.com/argon/vendor/nucleo/css/nucleo.css" rel="stylesheet">
    <link href="https://zebra-qr.com/argon/vendor/@fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet">
    

    <link rel="shortcut icon" type="image/x-icon" href="{{asset('dashassets/img/favicons/favicon.ico')}}">
    <link rel="manifest" href="{{asset('dashassets/img/favicons/manifest.json')}}">
    <meta name="msapplication-TileImage" content="{{asset('dashassets/img/favicons/mstile-150x150.png')}}">
    <meta name="theme-color" content="#ffffff">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300;400;600;700;800;900&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&amp;display=swap" rel="stylesheet">
    <link href="{{asset('dashassets/css/phoenix.min.css')}} " rel="stylesheet" id="style-default">
    <link href="{{asset('dashassets/css/user.min.css')}}" rel="stylesheet" id="user-style-default">
    <style>
      body {
        opacity: 0;
      }
    </style>
  </head>

  <body>
    <main class="main" id="top">
      <div class="container-fluid px-0">
        
<!--include sidebar html pages-->

        @include('inc.admin.sidebar')

        @include('inc.admin.nav')
        




        <div class="header bg-gradient-primary pb-8 pt-5 pt-md-8">
          <div class="container-fluid">
              <div class="header-body">
                  <!-- Card stats -->
                  <div class="row">
                      <div class="col-xl-3 col-lg-6">
                          <div class="card card-stats mb-4 mb-xl-0">
                              <div class="card-body">
                                  <div class="row">
                                      <div class="col">
                                          <h5 class="card-title text-uppercase text-muted mb-0">Orders ( 30 days )</h5>
                                          <span class="h2 font-weight-bold mb-0">141</span>
                                      </div>
                                      <div class="col-auto">
                                          <div class="icon icon-shape bg-yellow text-white rounded-circle shadow">
                                              <i class="fas fa-shopping-basket"></i>
                                          </div>
                                      </div>
                                  </div>
      
                              </div>
                          </div>
                      </div>
                      <div class="col-xl-3 col-lg-6">
                          <div class="card card-stats mb-4 mb-xl-0">
                              <div class="card-body">
                                  <div class="row">
                                      <div class="col">
                                          <h5 class="card-title text-uppercase text-muted mb-0">Sales Volume ( 30 days )</h5>
                                          <span class="h2 font-weight-bold mb-0"> $8,557.96</span>
                                      </div>
                                      <div class="col-auto">
                                          <div class="icon icon-shape bg-success text-white rounded-circle shadow">
                                              <i class="fas fa-chart-line"></i>
                                          </div>
                                      </div>
                                  </div>
      
                              </div>
                          </div>
                      </div>
                      <div class="col-xl-3 col-lg-6">
                          <div class="card card-stats mb-4 mb-xl-0">
                              <div class="card-body">
                                                                  <div class="row">
                                          <div class="col">
                                              <h5 class="card-title text-uppercase text-muted mb-0">Number of restaurants</h5>
                                              <span class="h2 font-weight-bold mb-0">17 restaurants</span>
                                          </div>
                                          <div class="col-auto">
                                              <div class="icon icon-shape bg-warning text-white rounded-circle shadow">
                                                  <i class="fas fa-folder"></i>
                                              </div>
                                          </div>
                                      </div>
                                                                                          
                              </div>
                          </div>
                      </div>
      
                      <div class="col-xl-3 col-lg-6">
                          <div class="card card-stats mb-4 mb-xl-0">
                              <div class="card-body">
                                  <div class="row">
                                      <div class="col">
                                          <h5 class="card-title text-uppercase text-muted mb-0">Views</h5>
                                          <span class="h2 font-weight-bold mb-0">53 views</span>
                                      </div>
                                      <div class="col-auto">
                                          <div class="icon icon-shape bg-info text-white rounded-circle shadow">
                                              <i class="fas fa-users"></i>
                                          </div>
                                      </div>
                                  </div>
      
                              </div>
                          </div>
                      </div>
                  </div>
      
                  <br>
                                                      </div>
          </div>
      </div>
          
          
        
        </div>
      </div>
    </main>
    <script src="{{asset('dashassets/js/phoenix.js')}}"></script>
    <script src="{{asset('dashassets/js/ecommerce-dashboard.js')}}"></script>
  </body>

</html>