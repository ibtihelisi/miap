<!doctype html>
<html lang="en-US" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>QR Menu|admin|dashboard</title>
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
          font-family: 'Nunito Sans', sans-serif;
          background-color: #fff2dc;
      }

      .card-stats {
          border-radius: 0.5rem;
          box-shadow: 0 0.75rem 1.5rem rgba(18, 38, 63, 0.03);
          transition: all 0.3s ease-in-out;
          background-color: #ffffff;
      }

      .card-stats:hover {
          transform: translateY(-5px);
          box-shadow: 0 1rem 3rem rgba(18, 38, 63, 0.125);
      }

      .card-stats .card-body {
          padding: 1rem 1.5rem;
      }

      .card-stats .icon {
          width: 3rem;
          height: 3rem;
          display: flex;
          align-items: center;
          justify-content: center;
          border-radius: 50%;
          margin-right: 1rem;
      }

      .bg-primary-gradient {
          background-color: #f25c05
      }

      .text-primary-gradient {
          color: #f25c05;
          background-clip: text;
          -webkit-background-clip: text;
          -webkit-text-fill-color: transparent;
      }

      .header {
         background-color: #fff2dc
          color: white;
      }

      .header .container-fluid {
          padding-top: 1rem;
          padding-bottom: 1rem;
      }

      .header .header-body {
          padding-top: 1rem;
      }

      .card-title {
          font-size: 0.875rem;
          font-weight: 600;
          text-transform: uppercase;
          letter-spacing: 0.08em;
          margin-bottom: 0.5rem;
      }

      .card .h2,
      .card h2 {
          font-size: 1.25rem;
          font-weight: 700;
          margin-bottom: 0;
          color: #f25c05;
      }

      .card {
          border: none;
      }

      .icon {
          font-size: 2rem;
      }

      .chart-container {
          max-width: 100%;
          height: 300px;
      }

      @media (max-width: 768px) {
          .chart-container {
              height: 200px;
          }
      }
  </style>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.0/font/bootstrap-icons.css" rel="stylesheet">
  
    
</head>

<body>
    <main class="main" id="top">
        <div class="container-fluid px-0">
            <!-- Include sidebar and navigation -->
            @include('inc.admin.sidebar')
            @include('inc.admin.nav')

            <div class="header bg-gradient-primary pb-8 pt-5 pt-md-8">
                <div class="container-fluid">
                    <div class="header-body">
                        <!-- Card stats -->
                        <div class="row">
                            <div class="col-xl-3 col-lg-6  offset-md-2 mb-4">
                                <div class="card card-stats">
                                    <div class="card-body">
                                        <div class="row align-items-center">
                                            <div class="col-auto">
                                                <div class="icon bg-primary-gradient text-white rounded-circle shadow">
                                                  <i class="bi bi-shop"></i>
                                                </div>
                                            </div>
                                            <div class="col ml--2">
                                                <h5 class="card-title text-uppercase text-muted mb-0">Number of Restaurants</h5>
                                                <span class="h2 font-weight-bold mb-0">{{ $restaurantCount }} restaurants</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>



                            <div class="col-xl-3 col-lg-6  mb-4">
                              <div class="card card-stats">
                                  <div class="card-body">
                                      <div class="row align-items-center">
                                          <div class="col-auto">
                                              <div class="icon bg-primary-gradient text-white rounded-circle shadow">
                                                <i class="bi bi-check-all"></i>

                                              </div>
                                          </div>
                                          <div class="col ml--2">
                                              <h5 class="card-title text-uppercase text-muted mb-0">Active Restaurants</h5>
                                              <span class="h2 font-weight-bold mb-0">{{ $activeUsers }} Active restaurant</span>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>




                          <div class="col-xl-3 col-lg-6  mb-4">
                            <div class="card card-stats">
                                <div class="card-body">
                                    <div class="row align-items-center">
                                        <div class="col-auto">
                                            <div class="icon bg-primary-gradient text-white rounded-circle shadow">
                                              <i class="bi bi-lock"></i>

                                            </div>
                                        </div>
                                        <div class="col ml--2">
                                            <h5 class="card-title text-uppercase text-muted mb-0">Inactive Restaurants</h5>
                                            <span class="h2 font-weight-bold mb-0">{{  $inactiveUsers }} inactive restaurants</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        </div>
                        
                            <!-- Charts -->
                           <!-- Charts -->
                            <div class="row">
                              <div class="col-lg-6 col-md-6 col-sm-8 mb-4 offset-md-2">
                                <div class="card h-100">
                                    <div class="card-body">
                                        <h5 class="card-title text-uppercase text-muted mb-0">Restaurants by Region</h5>
                                        <canvas id="usersByRegionChart" width="300" height="300"></canvas>
                                    </div>
                                </div>
                            </div>
                         
                            

                             

                               <!-- Active vs Inactive Users Chart -->
                        
                              <div class="col-lg-4 col-md-6 col-sm-8 mb-4 ">
                                  <div class="card h-100">
                                      <div class="card-body">
                                          <h5 class="card-title text-uppercase text-muted mb-0">User Activity Status</h5>
                                          <canvas id="userActivityStatusChart" style="max-width: 100%; height: 200px;"></canvas>
                                      </div>
                                  </div>
                              </div>
                            </div>



                          </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <script src="{{asset('dashassets/js/phoenix.js')}}"></script>
    <script src="{{asset('dashassets/js/ecommerce-dashboard.js')}}"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            var ctxDoughnut = document.getElementById('usersByRegionChart').getContext('2d');
            var usersByRegionChart = new Chart(ctxDoughnut, {
                type: 'doughnut',
                data: {
                    labels: {!! json_encode($usersByRegion->keys()) !!},
                    datasets: [{
                        data: {!! json_encode($usersByRegion->values()) !!},
                        backgroundColor: [
                            '#FF6384', '#36A2EB', '#FFCE56', '#4BC0C0', '#9966FF', '#FF9F40', '#FFCD56', '#4BC0C0'
                        ],
                        hoverBackgroundColor: [
                            '#FF6384', '#36A2EB', '#FFCE56', '#4BC0C0', '#9966FF', '#FF9F40', '#FFCD56', '#4BC0C0'
                        ]
                    }]
                },
                options: {
                    responsive: true
                }
            });



             // User Activity Status Chart
             var ctxPie = document.getElementById('userActivityStatusChart').getContext('2d');
            var userActivityStatusChart = new Chart(ctxPie, {
                type: 'pie',
                data: {
                    labels: ['Active', 'Not Active'],
                    datasets: [{
                        data: [{{ $activeUsers }}, {{ $inactiveUsers }}],
                        backgroundColor: ['#4CAF50', '#FF5733'],
                        hoverBackgroundColor: ['#4CAF50', '#FF5733']
                    }]
                },
                options: {
                    responsive: true
                }
            });

        });
    </script>
</body>

</html>
