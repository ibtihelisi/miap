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
      .badge {
    display: inline-block;
    padding: 0.25em 0.4em;
    font-size: 110%;
    font-weight: 700;
    line-height: 1;
    text-align: center;
    white-space: nowrap;
    vertical-align: baseline;
    border-radius: 0.25rem;
}
.badge-pill {
  padding-right: .875em;
  padding-left: .875em;
  border-radius: 10rem;}

.badge-primary {
    color: #fff;
    background-color:#5f6471;
}
.text-primary {
  color: #222834 ;
}

.colororange {
  color: #e5780b ;
}
.color {
  color: #222834 ;
}
.text-uppercase {
  text-transform: uppercase !important;
}
.card-title {
  margin-bottom: 1.25rem;
}
description {
  font-size: .875rem;
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
                    <h1 class="mt-3">Restaurant Menu Management </h1>
                    <hr>
                    <div class="d-flex justify-content-end">
                        <a data-bs-toggle="modal" data-bs-target="#modal-category" class="btn btn-icon btn-1 btn-sm btn-info" type="button" title="Add new category">
                            <span class="btn-inner--icon"><i class="fa fa-plus"></i> Add new category</span>
                        </a>
                       
                        

                    </div>

                    
                    
                </div>
                
                
                <br>
                 
                 
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
                <div class="col-12">
                    @foreach ($categories as $index => $c)
                    <div class="card-body">
                        <div class="alert alert-default" style="background-color: #222834;">
                            <div class="row align-items-center">
                                <div class="col">

                                    <span class="h1 font-weight-bold mb-0 text-white"> {{$c->name}} </span>
                                </div>
                                <div class="col-auto ml-auto">
                                    <a  data-bs-toggle="modal"  data-bs-target="#modal-item-{{$index}}" id="modal-item"  class="btn btn-icon btn-sm btn-primary " type="button" data-placement="top" type="button">
                                        <span class="btn-inner--icon"><i class="fa fa-plus"></i></span>
                                    </a>
                                    <a data-bs-toggle="modal" data-bs-target="#editCategory{{ $c->id }}" class="btn btn-icon btn-sm btn-warning"  id="edit"       data-placement="top" >
                                        <span class="btn-inner--icon"><i class="fa fa-edit"></i></span>
                                    </a>
                                                                           
                                    <a class="btn btn-icon btn-sm btn-danger " type="button"  href="/restaurant/menu/categorie/delete/{{ $c->id }}" onclick="confirm('Are you sure you want to delete this category?') ">
                                            <span class="btn-inner--icon"><i class="fa fa-trash"></i></span>
                                    </a>
                                  
                          
                                </div>
                            </div>
                        </div>
                    </div>
                    
                        <div class="col-lg-12">
                        <div class="row row-grid">
                            @foreach ($items as  $i)
                            @if ($i->category_id == $c->id)
                            <div class="col-lg-3">
                                <a href="/restaurant/menu/item/edit/{{$i->id}}">
                                <div class="card">


                                    <img class="card-img-top" src="{{asset('uploads')}}/{{ $i->photo }}" alt="..." width="150">
                                        <div class="card-body">
                                            <h3 class="card-title  text-uppercase colororange">{{$i->name}}</h3>
                                            <p class="card-text description mt-3 color">{{$i->description}}</p>

                                            <span class="badge badge-primary badge-pill">{{$i->price}}DT</span>

                                            <p class="mt-3 mb-0 text-sm">
                                                <span class="text-success mr-2">{{$i->available}}</span>
                                            </p>
                                        </div>
                                </div>
                                <br>
                                </a>
                            </div>

                            @endif
                            @endforeach



                            <div class="col-lg-3">
                                <a data-bs-toggle="modal"  data-bs-target="#modal-item-{{$index}}" data-placement="top">
                                <div class="card">
                                    <img class="card-img-top" src="{{asset('uploads')}}/add_new_item.JPG" alt="...">
                                        <div class="card-body">
                                            <h3 class="card-title text-primary text-uppercase">Add item</h3>
                                        </div>
                                </div>
                                </a>
                                <br>
                            </div>
                        </div>
                        </div>
                    @endforeach 
                    
                    
                </div>
            </div>  
                                           


  


        </div>  
      </div> 
      
      
                     <!-- Modal Ajout du catégorie-->
                     <div class="modal fade" id="modal-category" tabindex="-1" aria-labelledby="exampleModalLabel"
                     style="display: none;" aria-hidden="true">
                     <div class="modal-dialog">
                         <div class="modal-content">
                             <div class="modal-header">
                                 <h5 class="modal-title" id="modal-title-notification">Add new category</h5>
                                 <button class="btn p-1"
                                     type="button" data-bs-dismiss="modal" aria-label="Close"><svg
                                         class="svg-inline--fa fa-times fa-w-11 fs--1" aria-hidden="true" focusable="false"
                                         data-prefix="fas" data-icon="times" role="img"
                                         xmlns="http://www.w3.org/2000/svg" viewBox="0 0 352 512" data-fa-i2svg="">
                                         <path fill="currentColor"
                                             d="M242.72 256l100.07-100.07c12.28-12.28 12.28-32.19 0-44.48l-22.24-22.24c-12.28-12.28-32.19-12.28-44.48 0L176 189.28 75.93 89.21c-12.28-12.28-32.19-12.28-44.48 0L9.21 111.45c-12.28 12.28-12.28 32.19 0 44.48L109.28 256 9.21 356.07c-12.28 12.28-12.28 32.19 0 44.48l22.24 22.24c12.28 12.28 32.2 12.28 44.48 0L176 322.72l100.07 100.07c12.28 12.28 32.2 12.28 44.48 0l22.24-22.24c12.28-12.28 12.28-32.19 0-44.48L242.72 256z">
                                         </path>
                                     </svg><!-- <span class="fas fa-times fs--1"></span> Font Awesome fontawesome.com --></button>
                             </div>
             
                             <form action="/restaurant/menu/categorie/add" method="post">
             
                                 @csrf
             
                               
                                 <div class="modal-body">
                                     <div class="mb-3">
                                         
                                         <input name="name" class="form-control" id="exampleFormControlInput1"
                                             type="text" placeholder=" Category name ...." required>
             
                                         @error('name')
                                             <div class="alert alert-danger">
                                                 {{ $message }}
                                             </div>
                                         @enderror
                                     </div>
             
                               
             
             
                                 </div>
                                 <div class="modal-footer">
                                     <button class="btn btn-primary" type="submit ">Save</button>
                                     <button class="btn btn-outline-primary" type="button"
                                         data-bs-dismiss="modal">Cancel</button>
                                 </div>
                             </form>
                         </div>
                     </div>
                    </div>





                    <!-- modal modifiier du catégorie-->
@foreach ($categories as $index=>$c )
<div class="modal fade" id="editCategory{{$c->id}}" tabindex="-1" aria-labelledby="exampleModalLabel"
 style="display: none;" aria-hidden="true">
 <div class="modal-dialog">
     <div class="modal-content">
         <div class="modal-header">
             <h5 class="modal-title" id="exampleModalLabel">Edit category</h5><button class="btn p-1"
                 type="button" data-bs-dismiss="modal" aria-label="Close"><svg
                     class="svg-inline--fa fa-times fa-w-11 fs--1" aria-hidden="true" focusable="false"
                     data-prefix="fas" data-icon="times" role="img"
                     xmlns="http://www.w3.org/2000/svg" viewBox="0 0 352 512" data-fa-i2svg="">
                     <path fill="currentColor"
                         d="M242.72 256l100.07-100.07c12.28-12.28 12.28-32.19 0-44.48l-22.24-22.24c-12.28-12.28-32.19-12.28-44.48 0L176 189.28 75.93 89.21c-12.28-12.28-32.19-12.28-44.48 0L9.21 111.45c-12.28 12.28-12.28 32.19 0 44.48L109.28 256 9.21 356.07c-12.28 12.28-12.28 32.19 0 44.48l22.24 22.24c12.28 12.28 32.2 12.28 44.48 0L176 322.72l100.07 100.07c12.28 12.28 32.2 12.28 44.48 0l22.24-22.24c12.28-12.28 12.28-32.19 0-44.48L242.72 256z">
                     </path>
                 </svg><!-- <span class="fas fa-times fs--1"></span> Font Awesome fontawesome.com --></button>
         </div>
         
             
         
         <form action="/restaurant/menu/categorie/update/{id}" method="post">

             @csrf

           
             <div class="modal-body">
                 <div class="mb-3">
                     
                     <input name="name"  value ="{{$c->name}}"  class="form-control" id="exampleFormControlInput1"
                         type="text"   >
                     @error('name')
                         <div class="alert alert-danger">
                             {{ $message }}
                         </div>
                     @enderror
                 </div>

                 <input type="hidden" value="{{ $c->id}}" name="idcategory" >



             </div>
             <div class="modal-footer">
                 <button class="btn btn-primary" type="submit ">Save</button>
                 <button class="btn btn-outline-primary" type="button"
                     data-bs-dismiss="modal">Cancel</button>
             </div>
         </form>
     </div>
 </div>
</div>






              
              <!-- Modal Ajout  item-->
@foreach ($categories as $index=>$c )
<div class="modal fade" id="modal-item-{{$index}}" tabindex="-1" aria-labelledby="exampleModalLabel"
    style="display: none;" aria-hidden="true" data-category-id="{{$c->id}}">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add new item</h5>
                <button class="btn p-1" type="button" data-bs-dismiss="modal" aria-label="Close">
                    <svg class="svg-inline--fa fa-times fa-w-11 fs--1" aria-hidden="true" focusable="false"
                        data-prefix="fas" data-icon="times" role="img"
                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 352 512" data-fa-i2svg="">
                        <path fill="currentColor"
                            d="M242.72 256l100.07-100.07c12.28-12.28 12.28-32.19 0-44.48l-22.24-22.24c-12.28-12.28-32.19-12.28-44.48 0L176 189.28 75.93 89.21c-12.28-12.28-32.19-12.28-44.48 0L9.21 111.45c-12.28 12.28-12.28 32.19 0 44.48L109.28 256 9.21 356.07c-12.28 12.28-12.28 32.19 0 44.48l22.24 22.24c12.28 12.28 32.2 12.28 44.48 0L176 322.72l100.07 100.07c12.28 12.28 32.2 12.28 44.48 0l22.24-22.24c12.28-12.28 12.28-32.19 0-44.48L242.72 256z">
                        </path>
                    </svg>
                </button>
            </div>

            <form action="/restaurant/menu/item/add" method="post" enctype="multipart/form-data">

                @csrf

                <div class="modal-body">
                    <input type="hidden" name="category_id" value="{{$c->id}}"> <!-- Hidden input for category ID -->
                    <div class="mb-3">
                        <label class="form-label"> Category item: {{$c->name}}</label>
                    </div>

                    <div class="mb-3">
                        <input name="name" class="form-control" id="exampleFormControlInput1" type="text"
                            placeholder=" Item name ...." required>
                        @error('name')
                        <div class="alert alert-danger">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <textarea name="description" class="form-control" rows="3" required
                            placeholder=" Item description ...."></textarea>
                        @error('description')
                        <div class="alert alert-danger">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <input name="price" class="form-control" id="exampleFormControlInput1" type="number"
                            placeholder=" Item Price" required>
                        @error('price')
                        <div class="alert alert-danger">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Item Image</label>
                        <input name="photo" class="form-control" id="exampleFormControlInput1" type="file" required>
                        @error('photo')
                        <div class="alert alert-danger">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-primary" type="submit">Save</button>
                    <button class="btn btn-outline-primary" type="button" data-bs-dismiss="modal">Cancel</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endforeach


@endforeach
             

        <script src="{{asset('dashassets/js/phoenix.js')}}"></script>
        <script src="{{asset('dashassets/js/ecommerce-dashboard.js')}}"></script>
    </main>
  </body>

</html>

























