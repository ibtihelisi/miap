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


        @include('inc.client.sidebar')
        @include('inc.client.nav')
        
        
        <div class="content">
          <div class="pb-5">

            <div class="container">
              <h1 class="mt-3" style="color: #272556">Tables management</h1>
              <hr>
      
          </div>

          <div class="row py-2">
            <div class="col-md-6">
             
            
            </div>
            <div class="col-md-6 text-end">
              <a class="btn btn-primary" class="mt-3" href="/restaurant/table/create">Add new table </a>
              <a class="btn btn-outline-primary ms-2" href="/restaurant/area">Areas</a>

            </div>
        </div>
      
        @if(session('success'))
        <div class="alert alert-success alert-dismissible delete-alert" role="alert" style="background-color: green; border-color: #c3e6cb; color:#d4edda ;">
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
        
        @if(session('error'))
        <div class="alert alert-danger alert-dismissible delete-alert" role="alert" style="background-color: red; border-color: #dc3545; color: #f8d7da;">
            {{ session('error') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close" aria-setsize="10"></button>
        </div>
        <script>
            // Sélectionne l'alerte d'erreur
            var errorAlert = document.querySelector('.alert-danger');
            // Ferme l'alerte après 10 secondes (10000 millisecondes)
            setTimeout(function() {
                errorAlert.style.display = 'none';
            }, 10000);
        
            // Ajoute un écouteur d'événement au bouton de fermeture
            var closeButton = errorAlert.querySelector('.btn-close');
            closeButton.addEventListener('click', function() {
                errorAlert.style.display = 'none';
            });
        </script>
        @endif
        


              <div class="mt-3">

                <div id="tableExample2" data-list="{&quot;value#s&quot;:[&quot;#&quot;,&quot;Nom &quot;,&quot;Size&quot;,&quot;Area&quot;,&quot;Action&quot;],&quot;page&quot;:5,&quot;pagination&quot;:true}">
                  <div class="table-responsive scrollbar">
                    <table class="table table-bordered table-striped fs--1 mb-0">
                      <thead class="bg-200 text-900">
                        <tr>
                         
                          <th class="sort" data-sort="Nom "> NAME</th>
                          <th class="sort" data-sort="Size"> SIZE</th>
                          <th class="sort" data-sort="AREA"> AREA</th>
                          <th class="sort" data-sort="Action">ACTION</th>
                        
                        </tr>
                      </thead>
                      <tbody class="list">

                        


                        
                        @foreach ($tables as $tab)
                       
                            <tr>
                                <td class="NAME">{{ $tab->name }}</td>
                                <td class="SIZE">{{ $tab->size }}</td>
                                @foreach ($areas as $area)
                                  @if ($area->id==$tab->area_id)
                                      
                                    <td class="SIZE">{{ $area->name }}</td>
                                  @endif
                                @endforeach
                              
                                
                                <td class="ACTION">
                                  <a data-bs-toggle="modal" data-bs-target="#editTable{{ $tab->id }}" class="btn btn-secondary mr-2" title="Update">
                                      <i class="fas fa-edit"></i> Update
                                  </a>
                                  <form action="/restaurant/table/delete/{{$tab->id}}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" onclick="return confirm('Are you sure you want to delete this Table from Database?')" style="background-color: #f26514" class="btn btn-secondary" title="Delete">
                                        <i class="fas fa-trash-alt"></i> Delete
                                    </button>
                                </form>
                                
                              </td>
                              
                              
                              
                              
                            </tr>
                          
                        @endforeach
                       
                       
                      </tbody>
                    </table>

     


                    






                  <div class="d-flex justify-content-center mt-3"><button class="btn btn-sm btn-falcon-default me-1 disabled" type="button" title="Previous" data-list-pagination="prev" disabled=""><svg class="svg-inline--fa fa-chevron-left fa-w-10" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="chevron-left" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" data-fa-i2svg=""><path fill="currentColor" d="M34.52 239.03L228.87 44.69c9.37-9.37 24.57-9.37 33.94 0l22.67 22.67c9.36 9.36 9.37 24.52.04 33.9L131.49 256l154.02 154.75c9.34 9.38 9.32 24.54-.04 33.9l-22.67 22.67c-9.37 9.37-24.57 9.37-33.94 0L34.52 272.97c-9.37-9.37-9.37-24.57 0-33.94z"></path></svg><!-- <span class="fas fa-chevron-left"></span> Font Awesome fontawesome.com --></button>
                    <ul class="pagination mb-0"><li class="active"><button class="page" type="button" data-i="1" data-page="5">1</button></li><li><button class="page" type="button" data-i="2" data-page="5">2</button></li><li><button class="page" type="button" data-i="3" data-page="5">3</button></li></ul><button class="btn btn-sm btn-falcon-default ms-1" type="button" title="Next" data-list-pagination="next"><svg class="svg-inline--fa fa-chevron-right fa-w-10" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="chevron-right" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" data-fa-i2svg=""><path fill="currentColor" d="M285.476 272.971L91.132 467.314c-9.373 9.373-24.569 9.373-33.941 0l-22.667-22.667c-9.357-9.357-9.375-24.522-.04-33.901L188.505 256 34.484 101.255c-9.335-9.379-9.317-24.544.04-33.901l22.667-22.667c9.373-9.373 24.569-9.373 33.941 0L285.475 239.03c9.373 9.372 9.373 24.568.001 33.941z"></path></svg><!-- <span class="fas fa-chevron-right"></span> Font Awesome fontawesome.com --></button>
                  </div>
                </div>
              </div>
                
              


          </div>
          
          
          
       
        </div>
      </div>


      @foreach ($tables as $index=>$table )
      <div class="modal fade" id="editTable{{$table->id}}" tabindex="-1" aria-labelledby="exampleModalLabel"
      style="display: none;" aria-hidden="true">
      <div class="modal-dialog">
          <div class="modal-content">
              <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Edit table</h5><button class="btn p-1"
                      type="button" data-bs-dismiss="modal" aria-label="Close"><svg
                          class="svg-inline--fa fa-times fa-w-11 fs--1" aria-hidden="true" focusable="false"
                          data-prefix="fas" data-icon="times" role="img"
                          xmlns="http://www.w3.org/2000/svg" viewBox="0 0 352 512" data-fa-i2svg="">
                          <path fill="currentColor"
                              d="M242.72 256l100.07-100.07c12.28-12.28 12.28-32.19 0-44.48l-22.24-22.24c-12.28-12.28-32.19-12.28-44.48 0L176 189.28 75.93 89.21c-12.28-12.28-32.19-12.28-44.48 0L9.21 111.45c-12.28 12.28-12.28 32.19 0 44.48L109.28 256 9.21 356.07c-12.28 12.28-12.28 32.19 0 44.48l22.24 22.24c12.28 12.28 32.2 12.28 44.48 0L176 322.72l100.07 100.07c12.28 12.28 32.2 12.28 44.48 0l22.24-22.24c12.28-12.28 12.28-32.19 0-44.48L242.72 256z">
                          </path>
                      </svg><!-- <span class="fas fa-times fs--1"></span> Font Awesome fontawesome.com --></button>
              </div>
              
                  
              
              <form action="/restaurant/table/update/{id}" method="post">

                  @csrf

              
                  <div class="modal-body">
                      <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                          <input name="name"  value ="{{$table->name}}"  class="form-control" id="exampleFormControlInput1"
                              type="text"   >
                          @error('name')
                              <div class="alert alert-danger">
                                  {{ $message }}
                              </div>
                          @enderror
                      </div>

                      <div class="mb-3">
                        <label for="size" class="form-label">Size</label>
                        <input name="size"  value ="{{$table->size}}"  class="form-control" id="exampleFormControlInput1"
                            type="text"   >
                        @error('size')
                            <div class="alert alert-danger">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>


                    <div class="mb-3">
                      <label for="area" class="form-label">Area</label>
                      <select name="area" class="form-control" id="area">
                          @foreach($areas as $area)
                              <option value="{{ $area->id }}" {{ $table->area_id == $area->id ? 'selected' : '' }}>{{ $area->name }}</option>
                          @endforeach
                      </select>
                  </div>
                  


                      <input type="hidden" value="{{ $table->id}}" name="idtable" >



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

  @endforeach   
    </main>


  


 
     
    <script src="{{asset('dashassets/js/phoenix.js')}}"></script>
    <script src="{{asset('dashassets/js/ecommerce-dashboard.js')}}"></script>
  </body>

</html>