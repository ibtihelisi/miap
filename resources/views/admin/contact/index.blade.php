<!doctype html>
<html lang="en-US" dir="ltr">

  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>QR Menu|CMS|Contact</title>
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

      
      .center {
        text-align: center;
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
              <h1 class="mt-3">Edit Contact Banner</h1>
              <hr>



      
          </div>
          
            
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
        
           
        <form action="{{route('admin_banner_contact_update')}}" method="post" >


          @csrf

        
          <div class="modal-body">
           
              <!--espace title-->

              <div class="col-md-12">
                <div id="form-group-features" class="form-group  ">
                     <label class="form-control-label" for="">Title</label>
                     <input type="text"    value ="{{$contact->title}}"  name="title"  class="form-control form-control   "  >
                </div>
                @error('title')
                  <div class="alert alert-danger">
                     {{ $message }}
                   </div>
                @enderror
              </div> 

              <br>
                   <!--espace description-->

               <div class="col-md-12">
                    <div id="form-group-features" class="form-group  ">
                         <label class="form-control-label" for="">Description</label>
                         <textarea     name="desc"  class="form-control form-control   "  > {{$contact->desc}}</textarea>
                    </div>
                    @error('desc')
                      <div class="alert alert-danger">
                         {{ $message }}
                       </div>
                    @enderror
              </div> 

              <br>

      

                <!--espace link facebook-->

                <div class="col-md-12">
                  <div id="form-group-features" class="form-group  ">
                       <label class="form-control-label" for="">Link Facebook</label>
                       <input type="text"    value ="{{$contact->face_link}}"  name="face_link"  class="form-control form-control   "  >
                  </div>
                  @error('face_link')
                    <div class="alert alert-danger">
                       {{ $message }}
                     </div>
                  @enderror
              </div> 

              <br>

                <!--espace link instagram-->

                <div class="col-md-12">
                    <div id="form-group-features" class="form-group  ">
                         <label class="form-control-label" for="">Link Instagram</label>
                         <input type="text"    value ="{{$contact->insta_link}}"  name="insta_link"  class="form-control form-control   "  >
                    </div>
                    @error('insta_link')
                      <div class="alert alert-danger">
                         {{ $message }}
                       </div>
                    @enderror
                </div> 



                <br>
                 <!--espace tel-->

                 <div class="col-md-12">
                    <div id="form-group-features" class="form-group  ">
                         <label class="form-control-label" for="">Phone Number</label>
                         <input type="number"    value ="{{$contact->tel}}"  name="tel"  class="form-control form-control   "  >
                    </div>
                    @error('tel')
                      <div class="alert alert-danger">
                         {{ $message }}
                       </div>
                    @enderror
                </div> 
  


                <br>

                 <!--espace email-->

                 <div class="col-md-12">
                    <div id="form-group-features" class="form-group  ">
                         <label class="form-control-label" for="">Email Adress</label>
                         <input type="email"    value ="{{$contact->email}}"  name="email"  class="form-control form-control   "  >
                    </div>
                    @error('email')
                      <div class="alert alert-danger">
                         {{ $message }}
                       </div>
                    @enderror
                </div> 
  
  
  



              <br/>

             
          
              
           

         

          <div class="center">
            
                <button  class="btn btn-success" type="submit ">UPDATE</button>
                
          </div>
          
       

      </form>
        
        
        
          
          



          
          
          
          
          
        </div>
      </div>
    </main>
   

  


 
     
    <script src="{{asset('dashassets/js/phoenix.js')}}"></script>
    <script src="{{asset('dashassets/js/ecommerce-dashboard.js')}}"></script>
  </body>

</html>