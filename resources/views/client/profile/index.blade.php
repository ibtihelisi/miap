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
      body {
        opacity: 0;
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
                        <h1 class="mt-3">Edit Profile</h1>
                        <hr>
            
                    </div>

                      <!-- Affichage des alertes de succès ou d'erreur -->
          @if(session('success'))
          <div class="alert alert-success alert-dismissible delete-alert" role="alert" style="background-color: green; border-color: #c3e6cb; color:#d4edda ;" >
              {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close" aria-setsize="10"></button>
          </div>
          <script>
            // Sélectionne l'alerte de succès
            var successAlert = document.querySelector('.alert-success');
            // Ferme l'alerte après 10 secondes (10000 millisecondes)
            setTimeout(function() {
                successAlert.style.display = 'none';
            }, 10000);
    
            // Ajoute un écouteur d'événement au bouton de fermeture
            var closeButton = successAlert.querySelector('.btn-close');
            closeButton.addEventListener('click', function() {
                successAlert.style.display = 'none';
            });
        </script>
       @endif

                    <div class="card-body">
                        <form method="post" enctype="multipart/form-data" action="/client/profile/update/{{Auth::user()->id}}" >
                            @csrf                       
                                
                            <h6 class="col-md-2 col-form-label text-md-end">User information</h6>


                            <div class="pl-lg-4">
                                                                
                                <div class="form-group focused">
                                    <label class="col-md-0 col-form-label text-md-end" for="input-name">Name</label>
                                    <input type="text" name="owner_name" id="input-name" class="form-control form-control-alternative"  value="{{Auth::user()->owner_name}}" required="" autofocus="">
                                </br>
                                                            </div>
                                <div class="form-group focused">
                                    <label class="col-md-0 col-form-label text-md-end" for="input-email">Email</label>
                                    <input type="email" name="email" id="input-email" class="form-control form-control-alternative" value="{{Auth::user()->email}}" required="">

                                                                    </div></br>
                                <div class="form-group focused">
                                    <label class="col-md-0 col-form-label text-md-end" for="input-phone">Phone</label>
                                    <input id="owner_phone" type="number" class="form-control @error('owner_phone') is-invalid @enderror" name="owner_phone" value="{{Auth::user()->owner_phone}}" required autocomplete="owner_phone" autofocus>


                                                                    </div>

                                

                                <div class="text-center">
                                    <button type="submit" class="btn btn-success mt-4">UPDATE</button>
                                </div>
                            </div>
                        </form>
                    </div>


                    
                    <hr>



                    <div class="card-body">
                      <form method="post" enctype="multipart/form-data" action="/client/profile/updatePassword/{{Auth::user()->id}}" >
                          @csrf                       
                              
                          <h6 class="col-md-2 col-form-label text-md-end">PASSWORD</h6>


                          <div class="pl-lg-4">
                                                              
                              <div class="form-group focused">
                                  <label class="col-md-0 col-form-label text-md-end" for="input-name">Current Password</label>
                                  <input type="password" name="current_password" id="input-name" class="form-control form-control-alternative"  placeholder="Current Password"  required="" autofocus="">
                              
                                                          </div></br>
                                <div class="form-group focused">
                                  <label class="col-md-0 col-form-label text-md-end" for="input-email">New Password</label>
                                  <input type="password" name="new_password" id="input-email" class="form-control form-control-alternative" placeholder="New Password" value="" required="">

                                                                  </div></br>

                                <div class="form-group focused">
                                  <label class="col-md-0 col-form-label text-md-end" for="input-email">Confirm New Password</label>
                                  <input type="password" name="new_password_confirmation" id="input-email" class="form-control form-control-alternative" placeholder="Confirm New Password" value="" required="">
                                  
                                                                    </div></br>
                             
                              

                              <div class="text-center">
                                  <button type="submit" class="btn btn-success mt-4">Change password</button>
                              </div>
                          </div>
                      </form>
                  </div>
            
            
            
        
                </div>
            </div>
        </div>
    </main>
   

  


 
     
    <script src="{{asset('dashassets/js/phoenix.js')}}"></script>
    <script src="{{asset('dashassets/js/ecommerce-dashboard.js')}}"></script>
  </body>

</html>