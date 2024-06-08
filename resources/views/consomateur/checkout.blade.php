<!doctype html>
<html lang="en-US" dir="ltr">

  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>QR Menu|QR Code</title>
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


           
            
            
            <div class="content">
                <div class="pb-5">

                        <div class="container">
                          <div class="row justify-content-center">
                              <div class="col-md-8">
                                  <div class="card">
                                    <div class="card shadow border-0 mt-8">
                                        <div class="card-body text-center">
                                            <div class="justify-content-center text-center">
                                                <lottie-player src="https://assets5.lottiefiles.com/packages/lf20_y2hxPc.json" background="transparent" speed="1" style=" height: 200px;" autoplay=""></lottie-player>
                                            </div>
                                            <h2 class="display-2">You're all set!</h2>
                                            @if($commande)
                                                    <h1 class="mb-4">
                                                        <span class="badge badge-primary" style="color: #b71c1c">Order #{{ $commande->id }}</span>
                                                    </h1>
                                                @else
                                                    <p>No order found.</p>
                                                @endif

                                            <div class="d-flex justify-content-center">
                                                <div class="col-8">
                                                    <h5 class="mt-0 mb-5 heading-small text-muted">
                                                        Your order is <span style="color: #f25c05"> just created..</span> 
                                                                                <div class="font-weight-300 mb-5">
                                                            Thanks for your purchase, 
                                                        
                                                            <br><br>
                                                            <a href="javascript:history.go(-1);" class="btn btn-outline-primary btn-sm">Go back</a>
               
                            
                                                    <!-- My Order Buttton -->
                                                                            <br><br><br>
                                                     
                                                                             
                                                    <!-- End  My Order Button -->
                            
                                               
                                                                               
                                                    
                                                    
                                                </div>
                                            </div>
                                        </div>
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
  </body>

</html>