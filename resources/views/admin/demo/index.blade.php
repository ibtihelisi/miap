<!doctype html>
<html lang="en-US" dir="ltr">

  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>QR Menu|CMS|Demo</title>
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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.0/font/bootstrap-icons.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.0/font/bootstrap-icons.css" rel="stylesheet">
  
    <style>
       body {
          opacity: 0;
          font-family: 'Nunito Sans', sans-serif;
          background-color: #fff2dc;
      }

      
      .center {
        text-align: center;
      }
      .header {
         background-color: #fff2dc
          color: white;
      }

      .text-bg-success {
      color: green; /* Couleur du texte */
      background-color: #c8e6c9; /* Couleur de fond plus claire */
      padding: 5px 10px; /* Optionnel : ajustez le rembourrage selon vos besoins */
      border-radius: 10px; /* Optionnel : pour arrondir les coins */}
    </style>





  </head>

  <body>
    <main class="main" id="top">
      <div class="container-fluid px-0">


        @include('inc.admin.sidebar')
        @include('inc.admin.nav')
        
        
        <div class="content">
          <div class="pb-5">

            <div class="container">
              <h1 class="mt-3" style="color: #272556">Edit Demo Banner</h1>
              <hr>



      
          </div>
          <div class="row py-2">
           
            
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
        
           
        <form action="{{route('admin_demo_update')}}" method="post" enctype="multipart/form-data">


          @csrf

        
          <div class="modal-body">
            <!--espace exesting photo-->
              <div class="mb-3">
                  <label class="form-label" for="exampleFormControlInput1">Existing Photo</label>
                  <div>
                    
                    <img src="{{asset('uploads')}}/{{ $demo->photo }}" alt="" width="200">
                  </div>
                  @error('photo')
                  <div class="alert alert-danger">
                      {{ $message }}
                  </div>
                @enderror
              
              </div>

              <!--espace change photo-->
              <div class="mb-3">
                  <label class="form-label" for="exampleFormControlInput1">Change Photo</label>
                  <div>
                  <input type="file"  name="photo"    >
                </div>
                  @error('photo')
                  <div class="alert alert-danger">
                    {{ $message }}
                  </div>
                @enderror
            
              </div>

              <!--espace subheading-->

              <div class="col-md-12">
                <div id="form-group-features" class="form-group  ">
                     <label class="col-form-label text-md-end" for="">Subheading</label>
                     <input type="text"    value ="{{$demo->subheading}}"  name="subheading"  class="form-control form-control   "  >
                </div>
                @error('subheading')
                  <div class="alert alert-danger">
                     {{ $message }}
                   </div>
                @enderror
              </div> 


                   <!--espace heading-->

               <div class="col-md-12">
                    <div id="form-group-features" class="form-group  ">
                         <label class="col-form-label text-md-end" for="">Heading</label>
                         <input type="text"    value ="{{$demo->heading}}"  name="heading"  class="form-control form-control   "  >
                    </div>
                    @error('heading')
                      <div class="alert alert-danger">
                         {{ $message }}
                       </div>
                    @enderror
              </div> 



                   <!--espace Text-->

              <div class="col-md-12">
                          <div id="form-group-features" class="form-group  ">
                               <label class="col-form-label text-md-end" for="">Text</label>
                               <textarea   name="text"  value ="{{$demo->text}}" class="form-control form-control   " cols="30"  rows="10">{{$demo->text}}</textarea>
                          </div>
                          @error('text')
                            <div class="alert alert-danger">
                               {{ $message }}
                             </div>
                          @enderror
               </div> 
      

                <!--espace button text-->

                <div class="col-md-12">
                  <div id="form-group-features" class="form-group  ">
                       <label class="col-form-label text-md-end" for="">Button Text</label>
                       <input type="text"    value ="{{$demo->button_text}}"  name="button_text"  class="form-control form-control   "  >
                  </div>
                  @error('button_text')
                    <div class="alert alert-danger">
                       {{ $message }}
                     </div>
                  @enderror
              </div> 



              <br/>

             
          
              
           

         

          <div class="center">
            
                <button  class="btn btn-success" style="background-color: #f25c05"  type="submit ">UPDATE</button>
                
          </div>
          
       

      </form>
        
        
        
          
          



          
          
          
          
          
        </div>
      </div>
    </main>
   

  


 
     
    <script src="{{asset('dashassets/js/phoenix.js')}}"></script>
    <script src="{{asset('dashassets/js/ecommerce-dashboard.js')}}"></script>
  </body>

</html>