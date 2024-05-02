<!doctype html>
<html lang="en-US" dir="ltr">

  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>QR Menu|CMS|Why</title>
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
      border-radius: 10px; /* Optionnel : pour arrondir les coins */
  }
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
              <h1 class="mt-3">Why QR Menu CMS</h1>
              <hr>
      
          </div>

          <div class="row py-2">
            <div class="col-md-6">
             
            
            </div>
            <div class="col-md-6 text-end">
              <a class="btn btn-primary" class="mt-3" data-bs-toggle="modal" data-bs-target="#exampleModal">Add  Page</a>
              

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


              <br>
            <!--l'espaces des items pour l'update ou le delete-->
           
            

                <div id="tableExample2" data-list="{&quot;value#s&quot;:[],&quot;page&quot;:5,&quot;pagination&quot;:true}">
                  <div class="table-responsive scrollbar">
                   

                    <div  class="row">
                      @foreach($whies as $why)
                     
                          
                     
                           
                                <div class="col-xl-12">
                                  <form action="/admin/why/update/{{$why->id}}" method="POST" enctype="multipart/form-data">


                                    @csrf 
                                  
                                    <div class="card">
                                        
                                        <div class="card-body">

                                            <!--espace exesting photo-->
                                            <div class="mb-3">
                                                <label class="form-label" for="exampleFormControlInput1">Existing Photo</label>
                                                <div>
                        
                                                    <img src="{{asset('uploads')}}/{{ $why->icon }}" alt="" width="200">
                                                </div>
                                                @error('icon')
                                                <div class="alert alert-danger">
                                                    {{ $message }}
                                                </div>
                                                @enderror
                    
                                            </div>


                                            
                                            <!--espace change photo-->
                                            <div class="mb-3">
                                                <label class="form-label" for="exampleFormControlInput1">Change Photo</label>
                                                <div>
                                                    <input type="file"  name="icon"    >
                                                </div>
                                                @error('icon')
                                                <div class="alert alert-danger">
                                                    {{ $message }}
                                                </div>
                                                @enderror
                                        
                                            </div>
                                            

                                            <div class="col-md-12">
                                                <div id="form-group-features" class="form-group  ">
                                                    <label class="form-control-label" for="">why item title</label>
                                                    <input type="text"    value ="{{$why->title }}"  name="title"  class="form-control form-control   "  >
                                                </div>
                                                @error('title')
                                                <div class="alert alert-danger">
                                                    {{ $message }}
                                                </div>
                                                @enderror
                                            </div> 


                                            <div class="col-md-12">
                                                <div id="form-group-features" class="form-group  ">
                                                    <label class="form-control-label" for="">why item first advantage</label>
                                                    <input type="text"    value ="{{$why->desc1}}"  name="desc1"  class="form-control form-control   "  >
                                                </div>
                                                @error('desc1')
                                                <div class="alert alert-danger">
                                                    {{ $message }}
                                                </div>
                                                @enderror
                                            </div>
                                            
                                            

                                            <div class="col-md-12">
                                                <div id="form-group-features" class="form-group  ">
                                                    <label class="form-control-label" for="">why item second advantage</label>
                                                    <input type="text"    value ="{{$why->desc2}}"  name="desc2"  class="form-control form-control   "  >
                                                </div>
                                                @error('desc2')
                                                <div class="alert alert-danger">
                                                    {{ $message }}
                                                </div>
                                                @enderror
                                            </div> 



                                            <div class="col-md-12">
                                                <div id="form-group-features" class="form-group  ">
                                                    <label class="form-control-label" for="">why item third advantage</label>
                                                    <input type="text"    value ="{{$why->desc3}}"  name="desc3"  class="form-control form-control   "  >
                                                </div>
                                                @error('desc3')
                                                <div class="alert alert-danger">
                                                    {{ $message }}
                                                </div>
                                                @enderror
                                            </div> 




                                            
                                            <ul class="list-group list-group-flush list my--3"></ul>

                                            <br>
                                            <div class="center">
                                                <a  class="btn btn-danger" onclick="return confirm('voulez-vouz supprimer cette Feature ? ') "
                                                href="/why/delete/{{ $why->id }}" class="btn btn-danger">
                                                Delete</a>
                                                <button  class="btn btn-success"  type="submit ">UPDATE</button>
                                                <!--<button  class="btn btn-danger" type="submit ">Delete</button>-->
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                    <hr>
                                    <hr>
                                    
                                  </form>
                                </div>
                       
                      @endforeach
                                    
                    </div> 
                           
                        
                       

                       
                        
                      
                    </div>
     


                    






                  
                </div>
            
           
              </div>
                
              


          </div>
          
          
          
       
        </div>
      </div>

      
                     <!-- Modal Ajourt-->
                     <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                        style="display: none;" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Add reason</h5><button class="btn p-1"
                                        type="button" data-bs-dismiss="modal" aria-label="Close"><svg
                                            class="svg-inline--fa fa-times fa-w-11 fs--1" aria-hidden="true" focusable="false"
                                            data-prefix="fas" data-icon="times" role="img"
                                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 352 512" data-fa-i2svg="">
                                            <path fill="currentColor"
                                                d="M242.72 256l100.07-100.07c12.28-12.28 12.28-32.19 0-44.48l-22.24-22.24c-12.28-12.28-32.19-12.28-44.48 0L176 189.28 75.93 89.21c-12.28-12.28-32.19-12.28-44.48 0L9.21 111.45c-12.28 12.28-12.28 32.19 0 44.48L109.28 256 9.21 356.07c-12.28 12.28-12.28 32.19 0 44.48l22.24 22.24c12.28 12.28 32.2 12.28 44.48 0L176 322.72l100.07 100.07c12.28 12.28 32.2 12.28 44.48 0l22.24-22.24c12.28-12.28 12.28-32.19 0-44.48L242.72 256z">
                                            </path>
                                        </svg><!-- <span class="fas fa-times fs--1"></span> Font Awesome fontawesome.com --></button>
                                </div>
                
                                <form action="/why/add" method="post" enctype="multipart/form-data">
                
                                    @csrf
                
                                
                                    <div class="modal-body">
                                        <div class="mb-3">
                                            <label class="form-label" for="exampleFormControlInput1"> Title</label>
                                            <input name="title" class="form-control" id="exampleFormControlInput1"
                                                type="text" placeholder=" reason title ..." required>
                
                                            @error('title')
                                                <div class="alert alert-danger">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                
                                        <div class="mb-0">
                                            <label class="form-label" for="exampleTextarea">First Advanteg</label>
                                            <input name="desc1" class="form-control" id="exampleFormControlInput1"
                                                type="text" placeholder=" reason title ..." >
                                           
                
                
                                            @error('desc1')
                                                <div class="alert alert-danger">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>

                                        <div class="mb-0">
                                            <label class="form-label" for="exampleTextarea"> Second Advanteg</label>
                                            <input name="desc2" class="form-control" id="exampleFormControlInput1"
                                            type="text" placeholder=" reason title ..." required>
                
                
                                            @error('desc2')
                                                <div class="alert alert-danger">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>

                                        <div class="mb-0">
                                            <label class="form-label" for="exampleTextarea">Third  Advanteg</label>
                                            <input name="desc3" class="form-control" id="exampleFormControlInput1"
                                            type="text" placeholder=" reason title ..." required>
                
                                            @error('desc3')
                                                <div class="alert alert-danger">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                
                
                            
                
                
                                        <div class="mb-0">
                                            <label class="form-label" for="exampleTextarea"> Photo</label>
                                            <input name="icon" class="form-control"  id="exampleFormControlInput1"
                                            type="file" placeholder=" tapper  prix produit" required>
                
                
                                            @error('icon')
                                                <div class="alert alert-danger">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                
                
                                    </div>
                                    <div class="modal-footer">
                                        <button class="btn btn-primary" type="submit ">Add</button>
                                        <button class="btn btn-outline-primary" type="button"
                                            data-bs-dismiss="modal">Cancel</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
             
             
    </main>


  


 
     
    <script src="{{asset('dashassets/js/phoenix.js')}}"></script>
    <script src="{{asset('dashassets/js/ecommerce-dashboard.js')}}"></script>
  </body>

</html>