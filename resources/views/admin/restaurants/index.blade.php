<!doctype html>
<html lang="en-US" dir="ltr">

  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>QR Menu|Restaurants</title>
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
          font-family: 'Nunito Sans', sans-serif;
          background-color: #fff2dc;
      }

      .logo-img {
    max-width: 100px; /* Définissez la largeur maximale de l'image */
    height: 100px; /* Laissez la hauteur être automatique pour conserver les proportions */
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

<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.0/font/bootstrap-icons.css" rel="stylesheet">
  
  </head>

  <body>
    <main class="main" id="top">
      <div class="container-fluid px-0">


        @include('inc.admin.sidebar')
        @include('inc.admin.nav')
        
        
        <div class="content">
          <div class="pb-5">

            <div class="container">
              <h1 class="mt-3" style="color: #272556">Restaurants</h1>
              <hr>
      
          </div>
          <div class="row py-2">
            <div class="col-md-6">
              
            
            </div>
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


            </style>
            <div class="col-md-6 text-end">
              <a class="btn btn-primary" style="background-color: #f25c05" class="mt-3" href="/restaurant/create">Add Restaurant</a>
                <a class="btn btn-outline-primary ms-2" href="{{ route('export.restaurants') }}" style="" >Export CSV</a>
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
        
        
          
          

          <div class="mt-3">
            <div id="tableExample2" data-list="{&quot;value#s&quot;:[&quot;NAME&quot;,&quot;LOGO&quot;,&quot;OWNER&quot;,&quot;OWNER EMAIL&quot;,&quot;CREATION DATE&quot;,&quot;ACTION&quot;],&quot;page&quot;:5,&quot;pagination&quot;:true}">
              
              <div class="table-responsive scrollbar">
                    <table class="table table-bordered table-striped fs--1 mb-0">
                        <thead class="bg-200 text-900">
                            <tr>
                                <th class="sort" data-sort="NAME">NAME</th>
                                <th class="sort" data-sort="LOGO">LOGO</th>
                                <th class="sort" data-sort="LOCATION">LOCATION</th>
                                <th class="sort" data-sort="LOCATION">GOVERNORATE</th>
                                <th class="sort" data-sort="LOCATION">CITY</th>
                                <th class="sort" data-sort="LOCATION">PATENT NUMBER</th>
                                <th class="sort" data-sort="DESC">DESCRIPTION</th>
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
                                <td class="LOGO"> <img src="{{ asset('uploads/' . $u->logo) }}" alt="Logo"  class="logo-img"></td>
                                <td class="LOCATION">{{ $u->location  }}</td>
                                <td class="LOCATION">{{ $u->governorate }}</td>
                                <td class="LOCATION">{{ $u->city }}</td>
                                <td class="LOCATION">{{ $u->patnumber }}</td>
                                <td class="DESC">{{ $u->desc }}</td>
                                <td class="OWNER">{{ $u->owner_name }}</td>
                                <td class="OWNER EMAIL">{{ $u->email }}</td>
                                <td class="CREATION DATE">{{ $u->created_at }}</td>
                                <td class="ACTIVE"> 
                                  @if ($u->active == 'active')
                                      <span class="text-bg-success">active </span>
                                  @else
                                  <span class="text-bg-danger"> not active</span>
                                  @endif
                                  
                                 </td>
                                <td class="ACTION">
                                    <div class="btn-group" role="group" aria-label="Actions">
                                        <button type="button" class="btn btn-secondary dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="background-color:#272556">
                                            <i class="fas fa-bars"></i>
                                        </button>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                            <a class="dropdown-item" href="/restaurant/edit/{{$u->id}}">
                                                <i class="fas fa-edit"></i> Update
                                            </a>
                                           
                                            <a class="dropdown-item delete-restaurant" onclick="return confirm('Are you sure you want to delete this Restaurant from Database? This will also delete all data related to it. This is an irreversible step.')" href="/restaurant/delete/{{ $u->id }}"  >
                                                <i class="fas fa-trash-alt"></i> Delete
                                            </a>
                                            @if ($u->active == 'active')
                                              <a class="dropdown-item" onclick="return confirm('Are you sure you want to deactivate this restaurant?')" href="/restaurant/deactivate/{{ $u->id }}">
                                                <i class="fas fa-ban"></i> Deactivate
                                              </a>
                                            @else
                                              <a class="dropdown-item" onclick="return confirm('Are you sure you want to activate this restaurant?')" href="/restaurant/activate/{{ $u->id }}">
                                                <i class="fas fa-ban"></i> Activate
                                              </a>
                                            @endif
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