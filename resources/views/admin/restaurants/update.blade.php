<!doctype html>
<html lang="en-US" dir="ltr">

  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>MEAPffff</title>
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
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    

    

    
    <style>
            body {
          opacity: 0;
          font-family: 'Nunito Sans', sans-serif;
          background-color: #fff2dc;
      }




      .center {
    text-align: center;
  }


    
  .card-title {
      font-size: 1.5rem; /* Taille du titre de la carte */
      margin-bottom: 15px; /* Marge inférieure du titre */
    }


    .custom {
            border: 1px solid #ccc; /* Bordure */
            border-radius: 10px; /* Coins arrondis */
            padding: 20px; /* Espacement interne */
            margin-bottom: 20px; /* Marge inférieure */
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Ombre */
            width: 100%;
            

      }

      .custom-toggle input {
  display: none;
}
.custom-toggle {
  position: relative;
  display: inline-block;
  width: 50px;
  height: 1.5rem;
}
.custom-toggle input:checked + .custom-toggle-slider::before {
  transform: translateX(1.625rem);
  background: #222834;
}
.custom-toggle input:checked + .custom-toggle-slider {
  border: 1px solid #222834;
}

.custom-toggle-slider::before {
  position: absolute;
  content: "";
  height: 18px;
  width: 18px;
  left: 2px;
  bottom: 2px;
  border-radius: 50% !important;
  background-color: #222834;
  transition: all .2s cubic-bezier(.68,-.55,.265,1.55);
}
.custom-toggle-slider {
  position: absolute;
  top: 0;
  right: 0;
  bottom: 0;
  left: 0;
  cursor: pointer;
  border: 1px solid #cad1d7;
  border-radius: 34px !important;
  background-color: transparent;
}

.input-group .input-group-append .input-group-text {
    border-left: 0;
    background-color: transparent;
}

.input-group .input-group-append .input-group-text i {
    position: relative;
    left: -26px; /* Ajustez cette valeur selon votre besoin */
    z-index: 2;
}

        

    </style>



<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.0/font/bootstrap-icons.css" rel="stylesheet">
  
  </head>

  <body>
    <main class="main" id="top">
      <div class="container-fluid px-0">


        @include('inc.admin.sidebar')
        @include('inc.admin.nav')
        
        
        <div class="content">
          <div class="pb-5">

           
          <div class="container-fluid">
            <div class="nav-wrapper">
             
              </br>


              

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
                <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade show active" id="management" role="tabpanel" aria-labelledby="tabs-management-main">





                            <!--contenu de l'onglet Restaurants management!-->
                          <div class="col-md-12">
                            <div class="custom">
                                <div class="d-flex justify-content-between align-items-center">
                                    <h1 class="mt-3" style="color: #272556" >Update Restaurant </h1>
                                    <a class="btn btn-primary me-1"  style="background-color: #f25c05" href="/admin/restaurants" style="margin-left: auto;">Back to list</a>
                                   
                                </div>
                                <hr>
                                
                            
                      
        
                              <form action="/restaurant/update/{{$users->id}}" method="post" enctype="multipart/form-data">


                                  @csrf
                                 
                                      
                                  
                                    
                                  
                              
                                  <div class="modal-body">
                                  <!--espace name-->
                                  <h6 class="col-md-2 col-form-label text-md-end " >Restaurant information</h6>
                                 
                                   
                                      
                                    <div class="mb-3">

                                          <label class="col-md-0 col-form-label text-md-end" for="exampleFormControlInput1"> Restaurant Name</label>
                                          <input name="restaurant_name"   value ="{{$users->restaurant_name}}"  class="form-control" id="exampleFormControlInput1" type="text"   placeholder=" your rRestaurant Name ......">
                                          @error('restaurant_name')
                                              <div class="alert alert-danger">
                                                {{ $message }}
                                              </div>
                                          @enderror
                                      
                                      </div> 


                                      <div class="mb-3">

                                          <label class="col-md-0 col-form-label text-md-end" for="exampleFormControlInput1"> Restaurant description</label>
                                          <input name="desc"   value ="{{$users->desc}}"  class="form-control" id="exampleFormControlInput1" type="text"   placeholder=" your Restaurant Description ......" >
                                          @error('desc')
                                            <div class="alert alert-danger">
                                                {{ $message }}
                                            </div>
                                          @enderror
                                    
                                      </div> 



                                        <div class="mb-3">

                                          <label class="col-md-0 col-form-label text-md-end" for="exampleFormControlInput1"> Restaurant address</label>
                                          <input name="location"   value ="{{$users->location}}"  class="form-control" id="exampleFormControlInput1" type="text"   placeholder=" your rRestaurant Adress ......">
                                          @error('location')
                                            <div class="alert alert-danger">
                                                {{ $message }}
                                            </div>
                                          @enderror
                                    
                                        </div>
                                        
                                        


                                 
                                        <div class="mb-3">

                                          <label class="col-md-0 col-form-label text-md-end" for="exampleFormControlInput1"> Second restaurant address</label>
                                          <input name="location2"   value ="{{$users->location2}}"  class="form-control" id="exampleFormControlInput1" type="text"    placeholder=" your seconde Restaurant Adress ......">
                                          @error('location2')
                                            <div class="alert alert-danger">
                                                {{ $message }}
                                            </div>
                                          @enderror
                                    
                                        </div> 
       
       
       
       
                      
       
                                          <br>
       
                                          <div class="row mb-3">
                                            <label for="governorate" class="col-md-1 col-form-label text-md-end">Governorate</label>
                                            <br>
                                            <div class="col-md-6">
                                                <select id="governorate" class="form-control @error('governorate') is-invalid @enderror" name="governorate" required>
                                                    <option value="">{{ $users->governorate }}</option>
                                                    <option value="Tunis" {{ $users->governorate == 'Tunis' ? 'selected' : '' }}>Tunis</option>
                                                    <option value="Ariana" {{ $users->governorate == 'Ariana' ? 'selected' : '' }}>Ariana</option>
                                                    <option value="Ben Arous" {{ $users->governorate == 'Ben Arous' ? 'selected' : '' }}>Ben Arous</option>
                                                    <option value="Manouba" {{ $users->governorate == 'Manouba' ? 'selected' : '' }}>Manouba</option>
                                                    <option value="Nabeul" {{ $users->governorate == 'Nabeul' ? 'selected' : '' }}>Nabeul</option>
                                                    <option value="Zaghouan" {{ $users->governorate == 'Zaghouan' ? 'selected' : '' }}>Zaghouan</option>
                                                    <option value="Bizerte" {{ $users->governorate == 'Bizerte' ? 'selected' : '' }}>Bizerte</option>
                                                    <option value="Beja" {{ $users->governorate == 'Beja' ? 'selected' : '' }}>Beja</option>
                                                    <option value="Jendouba" {{ $users->governorate == 'Jendouba' ? 'selected' : '' }}>Jendouba</option>
                                                    <option value="Kef" {{ $users->governorate == 'Kef' ? 'selected' : '' }}>Kef</option>
                                                    <option value="Siliana" {{ $users->governorate == 'Siliana' ? 'selected' : '' }}>Siliana</option>
                                                    <option value="Sousse" {{ $users->governorate == 'Sousse' ? 'selected' : '' }}>Sousse</option>
                                                    <option value="Monastir" {{ $users->governorate == 'Monastir' ? 'selected' : '' }}>Monastir</option>
                                                    <option value="Mahdia" {{ $users->governorate == 'Mahdia' ? 'selected' : '' }}>Mahdia</option>
                                                    <option value="Sfax" {{ $users->governorate == 'Sfax' ? 'selected' : '' }}>Sfax</option>
                                                    <option value="Kairouan" {{ $users->governorate == 'Kairouan' ? 'selected' : '' }}>Kairouan</option>
                                                    <option value="Kasserine" {{ $users->governorate == 'Kasserine' ? 'selected' : '' }}>Kasserine</option>
                                                    <option value="Sidi Bouzid" {{ $users->governorate == 'Sidi Bouzid' ? 'selected' : '' }}>Sidi Bouzid</option>
                                                    <option value="Gabes" {{ $users->governorate == 'Gabes' ? 'selected' : '' }}>Gabes</option>
                                                    <option value="Medenine" {{ $users->governorate == 'Medenine' ? 'selected' : '' }}>Medenine</option>
                                                    <option value="Tataouine" {{ $users->governorate == 'Tataouine' ? 'selected' : '' }}>Tataouine</option>
                                                    <option value="Gafsa" {{ $users->governorate == 'Gafsa' ? 'selected' : '' }}>Gafsa</option>
                                                    <option value="Tozeur" {{ $users->governorate == 'Tozeur' ? 'selected' : '' }}>Tozeur</option>
                                                    <option value="Kebili" {{ $users->governorate == 'Kebili' ? 'selected' : '' }}>Kebili</option>
                                                </select>
                                                @error('governorate')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                            
                                        
       
       
                                        
                                        <div class="mb-3">
       
                                          <label class="col-md-0 col-form-label text-md-end" for="exampleFormControlInput1"> City </label>
                                          <input name="city"   value ="{{$users->city}}"  class="form-control" id="exampleFormControlInput1" type="text"    placeholder=" your city ......">
                                          @error('city')
                                            <div class="alert alert-danger">
                                                {{ $message }}
                                            </div>
                                          @enderror
                                    
                                        </div> 
       
       
       
                                        
       
       
       
                                        
                                        <div class="mb-3">
       
                                          <label class="col-md-0 col-form-label text-md-end" for="exampleFormControlInput1"> Restaurant patent number</label>
                                          <input name="patnumber"   value ="{{$users->patnumber}}"  class="form-control" id="exampleFormControlInput1" type="text"    placeholder=" your  restaurant patent number ......">
                                          @error('patnumber')
                                            <div class="alert alert-danger">
                                                {{ $message }}
                                            </div>
                                          @enderror
                                    
                                        </div> 
       
       
       
       
                                        
                                        
                                        <div class="mb-3">
       
                                          <label class="col-md-0 col-form-label text-md-end" for="exampleFormControlInput1"> Postal</label>
                                          <input name="Postal_code"   value ="{{$users->postal_code}}"  class="form-control" id="exampleFormControlInput1" type="text"    placeholder=" your postal code ......">
                                          @error('Postal_code')
                                            <div class="alert alert-danger">
                                                {{ $message }}
                                            </div>
                                          @enderror
                                    
                                        </div> 




                                        <div class=" mb-3">
                                          <label for="owner_phone" class="col-md-0 col-form-label text-md-end">{{ __('Owner Phone Number') }}</label>
                  
                                          
                                              <input id="owner_phone" type="number" value="{{$users->owner_phone}}" class="form-control @error('owner_phone') is-invalid @enderror" name="owner_phone"  placeholder=" Owner Phone number here..." required autocomplete="owner_phone" >
                  
                                              
                                          
                                        </div>


                                      

                                      


                                         
                                        

                                        <div class="mb-3">
                                          <label class="form-label" for="exampleFormControlInput1">Existing Photo</label>
                                          <div>
                                            
                                            <img src="{{asset('uploads')}}/{{ $users->logo }}" alt="" width="200">
                                          </div>
                                          @error('logo')
                                          <div class="alert alert-danger">
                                              {{ $message }}
                                          </div>
                                        @enderror
                                      
                                      </div>
                        
                                      <!--espace change photo-->
                                      <div class="mb-3">
                                          <label class="form-label" for="exampleFormControlInput1">Change Photo</label>
                                          <div>
                                          <input type="file"  name="logo"    >
                                        </div>
                                          @error('logo')
                                          <div class="alert alert-danger">
                                            {{ $message }}
                                          </div>
                                        @enderror
                                    
                                      </div>

                                      
                


                                  <br>

                                      <div class="center">
                                  
                                          <button  class="btn btn-success" type="submit " style="background-color: #f25c05" >UPDATE</button>
                                      
                                      </div>
                                      
                                   
                                      

                                    

                                      


                                      
                                        
                                      </div>
                                      </div>


                                        


                                  
                          
                              </form>
        
        
                              
                      
      
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
   

  


 
      <!-- Inclure le fichier JavaScript de Flatpickr -->
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
    <!-- Initialisation de Flatpickr pour les champs de saisie de temps -->
    <script>
      document.addEventListener('DOMContentLoaded', function() {
          // Initialisation de Flatpickr pour le champ de la première colonne
          flatpickr('#from_shift18', {
              enableTime: true,
              noCalendar: true,
              dateFormat: "H:i",
              defaultDate: "00:01"
          });
  
          // Initialisation de Flatpickr pour le champ de la deuxième colonne
          flatpickr('#to_shift18', {
              enableTime: true,
              noCalendar: true,
              dateFormat: "H:i",
              defaultDate: "23:59"
          });
      });
  </script>
  
  
    <script src="{{asset('dashassets/js/phoenix.js')}}"></script>
    <script src="{{asset('dashassets/js/ecommerce-dashboard.js')}}"></script>
  </body>

</html>