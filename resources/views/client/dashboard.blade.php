<!doctype html>
<html lang="en-US" dir="ltr">

  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Phoenix</title>
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
      <!--<script src="https://js.pusher.com/7.0/pusher.min.js"></script>-->




      <script src="https://js.pusher.com/8.2.0/pusher.min.js"></script>
     

  </head>

  <body>
    <main class="main" id="top">
        <div class="container-fluid px-0">
            <!-- Include sidebar and navigation -->
            @include('inc.client.sidebar')
            @include('inc.client.nav')

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
                                                    <i class="bi bi-basket"></i>
                                                </div>
                                            </div>
                                            <div class="col ml--2">
                                                <h5 class="card-title text-uppercase text-muted mb-0">Orders</h5>
                                                <span class="h2 font-weight-bold mb-0"> {{$orderCount}}</span>
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
                                                <i class="bi bi-graph-up"></i>

                                              </div>
                                          </div>
                                          <div class="col ml--2">
                                              <h5 class="card-title text-uppercase text-muted mb-0">Sales Volume</h5>
                                              <span class="h2 font-weight-bold mb-0"> XXXX</span>
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
                                                <i class="bi bi-list"></i>

                                            </div>
                                        </div>
                                        <div class="col ml--2">
                                            <h5 class="card-title text-uppercase text-muted mb-0">Number of items</h5>
                                            <span class="h2 font-weight-bold mb-0"> {{$itemCount}} </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="row">
                            <div class="col-xl-3 col-lg-6  offset-md-2 mb-4">
                                <div class="card card-stats">
                                    <div class="card-body">
                                        <div class="row align-items-center">
                                            <div class="col-auto">
                                                <div class="icon bg-primary-gradient text-white rounded-circle shadow">
                                                    <i class="fas fa-chair"></i>
                                                </div>
                                            </div>
                                            <div class="col ml--2">
                                                <h5 class="card-title text-uppercase text-muted mb-0">Tables</h5>
                                                <span class="h2 font-weight-bold mb-0"> {{ $tableCount}}</span>
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
                                                <i class="bi bi-wallet2"></i>

                                              </div>
                                          </div>
                                          <div class="col ml--2">
                                              <h5 class="card-title text-uppercase text-muted mb-0">Expenses Volume</h5>
                                              <span class="h2 font-weight-bold mb-0"> {{$totalExpenses}} TND</span>
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
                                                <i class="fas fa-users"></i>

                                            </div>
                                        </div>
                                        <div class="col ml--2">
                                            <h5 class="card-title text-uppercase text-muted mb-0">Staffs</h5>
                                            <span class="h2 font-weight-bold mb-0"> {{ $staffCount}} </span>
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
                                        <h5 class="card-title text-uppercase text-muted mb-0">Monthy Expenses </h5>
                                        <hr>
                                        <canvas id="expensesChart" style="max-width: 100%; height: 350px;"></canvas>
                                    </div>
                                </div>
                            </div>
                         
                            

                             

                               <!-- Active vs Inactive Users Chart -->
                        
                              <div class="col-lg-4 col-md-6 col-sm-8 mb-4 ">
                                  <div class="card h-100">
                                      <div class="card-body">
                                          <h5 class="card-title text-uppercase text-muted mb-0">Expenses by Category</h5>
                                          <hr>
                                          <canvas id="expensesByCategoryChart" max-width="100%" height="250px"></canvas>
    
                                      </div>
                                  </div>
                              </div>
                            </div>



                          </div>


                          <div class="col   offset-md-2 mb-4">
                            <div class="card card-stats">
                                <div class="card-body">
                                    <div class="row align-items-center">
                                        <div class="col-auto">
                                            <div class="icon bg-primary-gradient text-white rounded-circle shadow">
                                                <i class="bi bi-calendar3"></i>

                                            </div>
                                        </div>
                                        <div class="col ">
                                            <span class="h2 font-weight-bold mb-0">Your current plan</span>
                                            <h1 class="card-title text-uppercase text-muted mb-0">You are currently using the <span class="h2 font-weight-bold mb-0"> {{$user->plan}} </span> plan</h1>
                                           
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


    <script src="{{ asset('js/app.js') }}"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            window.Echo.channel('waiter-channel')
                .listen('CallWaiterEvent', (e) => {
                    const message = `Table ${e.table_id} calls the waiter.`;
    
                    // Créer et afficher la notification
                    const notification = document.createElement('div');
                    notification.className = 'alert alert-info';
                    notification.innerText = message;
                    document.getElementById('notifications').appendChild(notification);
    
                    // Jouer un son de notification
                    const audio = new Audio('/path/to/notification-sound.mp3');
                    audio.play();
                });
        });
    </script>


    <script src="https://js.pusher.com/7.0/pusher.min.js"></script>
    <script>
      document.addEventListener('DOMContentLoaded', function () {
    var pusher = new Pusher('35b539afe0a27da135ec', {
        cluster: 'mt1',
        encrypted: true
    });

    var channel = pusher.subscribe('call-waiter');

    channel.bind('App\\Events\\CallWaiterEvent', function(data) {
        alert('New call from table: ' + data.table_name);
        const message = `Table ${data.table_name} calls the waiter.`;

        // Créer et afficher la notification
        const notification = document.createElement('div');
        notification.className = 'alert alert-info';
        notification.innerText = message;
        document.getElementById('notifications').appendChild(notification);

        // Jouer un son de notification
        const audio = new Audio('/path/to/notification-sound.mp3');
        audio.play();
    });
});

    </script>

        



    <script>
        document.addEventListener('DOMContentLoaded', function () {
            var ctx = document.getElementById('expensesChart').getContext('2d');
            var data = {
                labels: @json($months),
                datasets: [{
                    label: 'Monthly Expenses',
                    data: @json($expensesData),
                    borderColor: '#36A2EB',
                    fill: false
                }]
            };

            var expensesChart = new Chart(ctx, {
                type: 'line',
                data: data,
                options: {
                    responsive: true,
                    plugins: {
                        legend: {
                            position: 'top',
                        },
                       
                    },
                    scales: {
                        x: {
                            title: {
                                display: true,
                                text: 'Month'
                            }
                        },
                        y: {
                            title: {
                                display: true,
                                text: 'Amount'
                            },
                            beginAtZero: true
                        }
                    }
                }
            });


             // Chart for Expenses by Category
             var ctxCategory = document.getElementById('expensesByCategoryChart').getContext('2d');
            var categoryData = {
                labels: @json($categories),
                datasets: [{
                    label: 'Expenses by Category',
                    data: @json($categoryExpenses),
                    backgroundColor: [
                        '#FF6384', '#36A2EB', '#FFCE56', '#4BC0C0', '#9966FF', '#FF9F40'
                    ],
                    hoverBackgroundColor: [
                        '#FF6384', '#36A2EB', '#FFCE56', '#4BC0C0', '#9966FF', '#FF9F40'
                    ]
                }]
            };

            var expensesByCategoryChart = new Chart(ctxCategory, {
                type: 'bar',
                data: categoryData,
                options: {
                    responsive: true,
                    plugins: {
                        legend: {
                            position: 'top',
                        },
                      
                    },
                    scales: {
                        x: {
                            title: {
                                display: true,
                                text: 'Category'
                            }
                        },
                        y: {
                            title: {
                                display: true,
                                text: 'Amount'
                            },
                            beginAtZero: true
                        }
                    }
                }
            });
        });
    </script>






    <script src="{{asset('dashassets/js/phoenix.js')}}"></script>
    <script src="{{asset('dashassets/js/ecommerce-dashboard.js')}}"></script>
  </body>

</html>