<!doctype html>
<html lang="en-US" dir="ltr">

  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>MEAP</title>
    <link rel="apple-touch-icon" sizes="180x180" href="{{asset('dashassets/img/favicons/apple-touch-icon.png')}}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{asset('dashassets/img/favicons/favicon-32x32.png')}}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('dashassets/img/favicons/favicon-16x16.png')}}">
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
     
 .btn.btn-primary {
                        background-color: #f25c05;
                        border-color: #f25c05;
                        color: #fff;
                      }

                      .btn.btn-outline-primary {
                        background-color: #fff;
                        border-color: #f25c05;
                        color: #f25c05;
                      }

                      .btn.btn-outline-primary:hover,
                      .btn.btn-outline-primary:focus,
                      .btn.btn-outline-primary:active {
                        background-color: #f25c05;
                        border-color: #f25c05;
                        color: #fff;
                      }


  body {
            opacity: 0;
            font-family: 'Nunito Sans', sans-serif;
            background-color: #fff2dc;
        }



    </style>

<style>
  .text-bg-success {
      color: green; /* Couleur du texte */
      background-color: #c8e6c9; /* Couleur de fond plus claire */
      padding: 5px 10px; /* Optionnel : ajustez le rembourrage selon vos besoins */
      border-radius: 10px; /* Optionnel : pour arrondir les coins */
  }
</style>
<style>
  .text-bg-danger {
      color: #b71c1c; /* Red text color */
      background-color: #ffcdd2; /* Lighter red background color */
      padding: 5px 10px; /* Optional: adjust padding as needed */
      border-radius: 10px; /* Optional: to round the corners */
  }

</style>







<style>
  .delete-alert {
    max-height: 100px; /* Ajustez la valeur selon vos besoins */
    /* Ajoute une barre de défilement si nécessaire */
  }
</style>




  </head>

  <body>
    <main class="main" id="top">
      <div class="container-fluid px-0">


        @include('inc.client.sidebar')
        @include('inc.client.nav')
        
        
        <div class="content">
            <div class="pb-5">

                <div class="container">
                    <h1 class="mt-3" style="color: #272556">Live orders</h1>
                    <hr>
      
                </div>


                
                <div class="container-fluid mt--7">
                    <div id="liveorders" class="row">
                        <!-- Repeat this structure for each status: New Orders, Accepted, Done -->
                        <div class="col-xl-4">
                            <div class="card">
                                <div class="card-header">
                                    <h5 class="h3 mb-0">New Orders</h5>
                                </div>
                                <div class="card-body">
                                    <ul class="list-group list-group-flush list my--3">
                                        <li v-for="order in orders.newOrders" class="list-group-item px-0">
                                            <!-- Populate with dynamic data -->
                                            <div class="row align-items-center" v-cloak>
                                                <div :class="order.pulse"></div>
                                                <div class="col ml--2">
                                                    <small>last_status </small><br>
                                                    <small> order time </small>
                                                    <h4 class="mb-0">
                                                        <a > id_formatted   orderrestaurant_name </a>
                                                    </h4>
                                                    <small> orderclient </small><br>
                                                    <small> orderprice </small><br>
                                                </div>
                                                <div class="col-auto">
                                                    <a class="btn btn-sm btn-primary" :href="order.link">Details</a>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- Repeat structure for other statuses: Accepted, Done -->


                        <div class="col-xl-4">
                            <div class="card">
                                <div class="card-header">
                                    <h5 class="h3 mb-0">New Orders</h5>
                                </div>
                                <div class="card-body">
                                    <ul class="list-group list-group-flush list my--3">
                                        <li v-for="order in orders.newOrders" class="list-group-item px-0">
                                            <!-- Populate with dynamic data -->
                                            <div class="row align-items-center" v-cloak>
                                                <div :class="order.pulse"></div>
                                                <div class="col ml--2">
                                                    <small>last_status </small><br>
                                                    <small> order time </small>
                                                    <h4 class="mb-0">
                                                        <a > id_formatted   orderrestaurant_name </a>
                                                    </h4>
                                                    <small> orderclient </small><br>
                                                    <small> orderprice </small><br>
                                                </div>
                                                <div class="col-auto">
                                                    <a class="btn btn-sm btn-primary" :href="order.link">Details</a>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>




                        <div class="col-xl-4">
                            <div class="card">
                                <div class="card-header">
                                    <h5 class="h3 mb-0">New Orders</h5>
                                </div>
                                <div class="card-body">
                                    <ul class="list-group list-group-flush list my--3">
                                        <li v-for="order in orders.newOrders" class="list-group-item px-0">
                                            <!-- Populate with dynamic data -->
                                            <div class="row align-items-center" v-cloak>
                                                <div :class="order.pulse"></div>
                                                <div class="col ml--2">
                                                    <small>last_status </small><br>
                                                    <small> order time </small>
                                                    <h4 class="mb-0">
                                                        <a > id_formatted   orderrestaurant_name </a>
                                                    </h4>
                                                    <small> orderclient </small><br>
                                                    <small> orderprice </small><br>
                                                </div>
                                                <div class="col-auto">
                                                    <a class="btn btn-sm btn-primary" :href="order.link">Details</a>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        
                    </div>
                </div>




            </div>
    </div>
          
             

  


 
     
    <script src="{{asset('dashassets/js/phoenix.js')}}"></script>
    <script src="{{asset('dashassets/js/ecommerce-dashboard.js')}}"></script>
  </body>

</html>