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
  </head>

  <body>
    <main class="main" id="top">
      <div class="container-fluid px-0">


        @include('inc.admin.sidebar')
        @include('inc.admin.nav')
        
        
        <div class="content">
          <div class="pb-5">

            <div class="container">
              <h1 class="mt-3">Restaurants</h1>
              <hr>
      
          </div>
      
          <a data-bs-toggle="modal" data-bs-target="#exampleModal" class="btn btn-primary" class="mt-3">Add Restaurant</a>


          

          <div class="mt-3">
            <div id="tableExample2" data-list="{&quot;value#s&quot;:[&quot;NAME&quot;,&quot;LOGO&quot;,&quot;OWNER&quot;,&quot;OWNER EMAIL&quot;,&quot;CREATION DATE&quot;,&quot;ACTION&quot;],&quot;page&quot;:5,&quot;pagination&quot;:true}">
                <div class="table-responsive scrollbar">
                    <table class="table table-bordered table-striped fs--1 mb-0">
                        <thead class="bg-200 text-900">
                            <tr>
                                <th class="sort" data-sort="NAME">NAME</th>
                                <th class="sort" data-sort="LOGO">LOGO</th>
                                <th class="sort" data-sort="OWNER">OWNER</th>
                                <th class="sort" data-sort="OWNER EMAIL">OWNER EMAIL</th>
                                <th class="sort" data-sort="CREATION DATE">CREATION DATE</th>
                                <th class="sort" data-sort="ACTIVE">ACTIVE</th>
                                <th class="sort" data-sort="ACTION">ACTION</th>
                            </tr>
                        </thead>
                        <tbody class="list">
                           
                                
                            
                            @foreach ($users as $u)
                            @if ($u->role == 'user')
                            <tr>
                                <td class="NAME">{{ $u->restaurant_name }}</td>
                                <td class="LOGO"></td>
                                <td class="OWNER">{{ $u->owner_name }}</td>
                                <td class="OWNER EMAIL">{{ $u->email }}</td>
                                <td class="CREATION DATE">{{ $u->created_at }}</td>
                                 <td class="ACTIVE"> <button type="button" class="btn btn-outline-success">{{ $u->active }}</button>
                                 </td>
                                <td class="ACTION">
                                    <div class="btn-group" role="group" aria-label="Actions">
                                        <button type="button" class="btn btn-secondary dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="fas fa-bars"></i>
                                        </button>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                            <a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#editRestaurant{{ $u->id }}">
                                                <i class="fas fa-edit"></i> Modifier
                                            </a>
                                            <a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#editRestaurant{{ $u->id }}">
                                                <i class="fas fa-sign-in-alt"></i> Login as
                                            </a>
                                            <a class="dropdown-item" onclick="return confirm('Are you sure you want to delete this Restaurant from Database? This will also delete all data related to it. This is an irreversible step.')" href="/restaurant/delete/{{ $u->id }}">
                                                <i class="fas fa-trash-alt"></i> Delete
                                            </a>
                                            <a class="dropdown-item" onclick="return confirm('Are you sure you want to deactivate this restaurant?')" href="/restaurant/deactivate/{{ $u->id }}">
                                                <i class="fas fa-ban"></i> Deactivate
                                            </a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            @endif
                            @endforeach
                            
                        </tbody>
                    </table>
                </div>
                <div class="d-flex justify-content-center mt-3">
                    <button class="btn btn-sm btn-falcon-default me-1 disabled" type="button" title="Previous" data-list-pagination="prev" disabled="">
                        <svg class="svg-inline--fa fa-chevron-left fa-w-10" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="chevron-left" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" data-fa-i2svg="">
                            <path fill="currentColor" d="M34.52 239.03L228.87 44.69c9.37-9.37 24.57-9.37 33.94 0l22.67 22.67c9.36 9.36 9.37 24.52.04 33.9L131.49 256l154.02 154.75c9.34 9.38 9.32 24.54-.04 33.9l-22.67 22.67c-9.37 9.37-24.57 9.37-33.94 0L34.52 272.97c-9.37-9.37-9.37-24.57 0-33.94z"></path>
                        </svg>
                    </button>
                    <ul class="pagination mb-0">
                        <li class="active"><button class="page" type="button" data-i="1" data-page="5">1</button></li>
                        <li><button class="page" type="button" data-i="2" data-page="5">2</button></li>
                        <li><button class="page" type="button" data-i="3" data-page="5">3</button></li>
                    </ul>
                    <button class="btn btn-sm btn-falcon-default ms-1" type="button" title="Next" data-list-pagination="next">
                        <svg class="svg-inline--fa fa-chevron-right fa-w-10" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="chevron-right" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" data-fa-i2svg="">
                            <path fill="currentColor" d="M285.476 272.971L91.132 467.314c-9.373 9.373-24.569 9.373-33.941 0l-22.667-22.667c-9.357-9.357-9.375-24.522-.04-33.901L188.505 256 34.484 101.255c-9.335-9.379-9.317-24.544.04-33.901l22.667-22.667c9.373-9.373 24.569-9.373 33.941 0L285.475 239.03c9.373 9.372 9.373 24.568.001 33.941z"></path>
                        </svg>
                    </button>
                </div>
            </div>
        </div>
        
                
              


          </div>
          
          
          
          <footer class="footer">
            <div class="row g-0 justify-content-between align-items-center h-100 mb-3">
              <div class="col-12 col-sm-auto text-center">
                <p class="mb-0 text-900">Thank you for creating with phoenix<span class="d-none d-sm-inline-block"></span><span class="mx-1">|</span><br class="d-sm-none">2022 &copy; <a href="https://themewagon.com">Themewagon</a></p>
              </div>
              <div class="col-12 col-sm-auto text-center">
                <p class="mb-0 text-600">v1.1.0</p>
              </div>
            </div>
          </footer>
        </div>
      </div>
    </main>
    <script>
      // Fonction pour afficher l'alerte lors de la suppression
      function showDeleteAlert() {
        alert("Element supprimé avec succès !");
      }
  
      // Ajoutez cet écouteur d'événement pour chaque lien de suppression
      document.querySelectorAll('.dropdown-item[href^="/restaurant/delete"]').forEach(item => {
        item.addEventListener('click', function(event) {
          event.preventDefault(); // Empêche le comportement par défaut du lien
          if (confirm('Êtes-vous sûr de vouloir supprimer cet élément ? Cette action est irréversible.')) {
            window.location.href = this.getAttribute('href');
            showDeleteAlert(); // Affiche l'alerte après la suppression
          }
        });
      });
    </script>

  


 
     
    <script src="{{asset('dashassets/js/phoenix.js')}}"></script>
    <script src="{{asset('dashassets/js/ecommerce-dashboard.js')}}"></script>
  </body>

</html>