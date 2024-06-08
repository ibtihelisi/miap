<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        
        <!-- SEO Meta Tags -->
        <meta name="description" content="Your description">
        <meta name="author" content="Your name">

        <!-- OG Meta Tags to improve the way the post looks when you share the page on Facebook, Twitter, LinkedIn -->
        <meta property="og:site_name" content="" /> <!-- website name -->
        <meta property="og:site" content="" /> <!-- website link -->
        <meta property="og:title" content=""/> <!-- title shown in the actual shared post -->
        <meta property="og:description" content="" /> <!-- description shown in the actual shared post -->
        <meta property="og:image" content="" /> <!-- image link, make sure it's jpg -->
        <meta property="og:url" content="" /> <!-- where do you want your post to link to -->
        <meta name="twitter:card" content="summary_large_image"> <!-- to have large image post format in Twitter -->

        <!-- Webpage Title -->
        <title>QR Menu|rest</title>
        
        <!-- Styles -->
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,400;0,600;1,400&display=swap" rel="stylesheet">
        <link href="{{asset('mainassets/css/bootstrap.min.css')}}" rel="stylesheet">
        <link href="{{asset('mainassets/css/fontawesome-all.min.css')}}" rel="stylesheet">
        <link href="{{asset('mainassets/css/swiper.css')}}" rel="stylesheet">
        <link href="{{asset('mainassets/css/styles.css')}}" rel="stylesheet">
        
        
         <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- Popper.js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.11.6/umd/popper.min.js"></script>

      <!-- Bootstrap JS -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

        <!-- Favicon  -->
        <link rel="icon" href="images/favicon.png">


        <style>
          
               


            .btnn {
                    border-radius: 50%; /* Rendre les boutons circulaires */
                    width: 40px; /* Définir la largeur */
                    height: 40px; /* Définir la hauteur */
                    margin: 5px; /* Espacement entre les boutons */
                    display: flex;
                    align-items: center;
                    justify-content: center;
                }
                        .custom-btn {
                    /* Styles supplémentaires pour les boutons personnalisés */
                    background-color: #fff2dc; /* Couleur de fond */
                    color: #f25c05; /* Couleur du texte */
                    border: none; /* Supprimer la bordure */
                }

                    .page-link:hover {
                        z-index: 2;
                
                        background-color: #e9ecef;
                        border-color: #dee2e6;
                    }

            .section-custom-margin {
                margin-left: 20px; /* Adjust the value as needed */
                margin-right: 10px; /* Adjust the value as needed */
            }
            .display-3 {
                 font-size: calc(1.525rem + 3.3vw);
                font-weight: 300;
                line-height: 3;
            }

            .py-lg-5{

                padding-top: 1rem !important;
                padding-bottom: 1rem !important;
                padding-right: 1rem !important;
                padding-left: 1rem !important;
            
            }
            .modal-dialog {
                max-width: 1000px;
                margin-top: 60px;
                margin-right: auto;
                 margin-left: auto;
            }

            .modal-header .btn {
                    font-size: 20px; /* Adjust the font size as needed */
                    color: #000; /* Set the color to black */
                    background-color: transparent; /* Set background color to transparent */
                    border: none; /* Remove border */
                    padding: 0; /* Remove padding */
                }
                            .btn-custom {
                    background-color: #fff2dc; /* Orange color */
                    border-color: #fff2dc; /* Border color same as background */
                    color: #f25c05; /* Text color white */
                }

                .card-footer-buttons .btn {
                    font-size: 10px; /* Adjust the font size as needed */
                }

                .btn-rounded {
                    border-radius: 20px; /* Adjust the value to control the button rounding */
                }
                            .card-container {
                    border: 1px solid #ccc;
                    border-radius: 8px;
                    padding: 9px;
                    margin-bottom: 20px;
                    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
                    width: 100%; 



                }

                .row {
                    display: flex;
                }



                .res_description_limit {
                    max-height: 100px; /* Ajustez la hauteur maximale selon vos besoins */
                    overflow: hidden;
                    text-overflow: ellipsis;
                    white-space: nowrap;
                }
 
                .img-fluid.lazy {
                    border-radius: 10px; /* ou toute autre valeur appropriée pour l'arrondi */
                }

                .sidebar {
                    height: 100%;
                width: 100%;
                position: fixed;
                z-index: 1;
                top: 0;
                right: -500px;
                background-color: #fff;
                overflow-x: hidden;
                
                padding-top: 26px;
                opacity: 0.95;
                background: rgba(255, 255, 255, 0.95);
                -webkit-box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.5);
                box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.5);
                z-index: 9999;
                max-width: 480px;
                transition: right 0.3s ease;

                }
                
                

              
                .sidebar.active {
                right: 0; /* Afficher la barre latérale lorsque la classe active est ajoutée */
                }

                .offcanvas-menu-inner {
                padding: 0 20px 0 30px;
                }
                .btn-cart-radius {
                border-radius: 50% !important;
                }

        


                
                
                .btn-sm {
                        font-size: .75rem;
                }
                .btn {
                    position: relative;
                    text-transform: uppercase;
                    will-change: transform;
                    letter-spacing: .025em;
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
    </head>
            <body data-bs-spy="scroll" data-bs-target="#navbarExample">
                
                    <!-- top bar start-->

                            <!-- Navigation -->


                    <nav id="navbarExample" class="navbar navbar-expand-lg fixed-top " aria-label="Main navigation">
                        <div class="container">

                            <!-- Image Logo -->
                            
                            <a class="navbar-brand logo-image logosize" href="/"><img src="{{ asset('uploads') }}/{{ $user->logo }}" alt="Logo" style="width: 60px; height: auto; border: 2px ; border-radius: 5px;">
                            </a> 

                            <!-- Text Logo - Use this if you don't have a graphic logo -->
                            <!-- <a class="navbar-brand logo-text" href="index.html">MenuQR</a> -->

                            <!-- Bouton de basculement du menu -->
                            <button class="navbar-toggler p-0 border-0" type="button" id="navbarSideCollapse" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>

                            <div class="navbar-collapse " id="navbarsExampleDefault">
                                



                                <!-- Right Side Of Navbar -->
                                <ul class="navbar-nav ms-auto d-flex justify-content-between align-items-center ">
                                    <!-- Authentication Links -->
                                    
                                        
                                       
                                    

                                         


                                    
                                
                                
                                    
                                </ul>






                            
                            </div> <!-- end of navbar-collapse -->
                        </div> <!-- end of container -->
                    </nav> <!-- end of navbar -->
                    <!-- end of navigation -->



                    
                    

                
                    
                
                
                

                    
                    <div>
                    
                        <!--section pour le logo du restaurant -->
                        <section class="section-profile-cover section-shaped grayscale-05  ">
                            <!-- Circles background -->
                            <img class="bg-image" loading="lazy" src="{{asset('uploads')}}/top-view-multicultural-group-friends-eating-grilled-food-d-top-view-multicultural-group-friends-eating-grilled-food-120109701.webp" style="width: 100% ;height: 400px;">
                            <!-- SVG separator -->
                            <div class="separator separator-bottom separator-skew">
                            <svg x="0" y="0" viewBox="0 0 2560 100" preserveAspectRatio="none" version="1.1" xmlns="http://www.w3.org/2000/svg">
                                <polygon class="fill-white" fill="#fff2dc" points="2560 0 2560 100 0 100"></polygon>
                            </svg>
                            </div>
                        </section>
                        

                        <!--section pour le titre la localisation du restaurant -->
                        <section class="mt-5 mb-2   " >
                            <div class="container">
                                <div class="row " >
                                    <div class="col-md-12">
                                        <div class="title white" style="border-bottom: 10px solid #ffffff;">
                                            <h1 class=" section-custom-margin">Welcom to  {{$user->restaurant_name}} </h1>
                                            
                                            <p class="" style="margin-top: 5px">{{$user->desc}}</p>
                                            <div class="row">
                                <div class="col-md-12">
                                <ul class="list-inline ">
                                    </ul>
                            </div>
                            </div>
                    
                    
                                            <p>
                                                
                                                <i class="fas fa-thumbtack me-2"></i><a target="_blank" href=""><span class="notranslate">{{$user->location}}</span></a>  | 
                                                <i class="fas fa-phone me-2 fa-flip-horizontal "></i><a href="">(+216){{$user->owner_phone}} </a> </p>
                                        </div>
                                    </div>
                                </div>
                    
                                <div class="row">
                                    <div class="col-lg-12">
                                                        </div>
                                                </div>
                            </div>
                    
                        </section>

                    <form action="/add-order" method="post">
                            @csrf
                        <!--section for the menu items and categoories-->
                        <section class="section pt-lg-0" id="restaurant-content" style="padding-top: 0px">
                            
                            <input type="hidden" id="rid" value="1">

                            <div class="container container-restorant">
                            <select class="form-control" id="tableSelect" name="table_id" required>
                                <option value="table_id" selected disabled>select your table</option>
                                
                                        @foreach ($tables as $tab)
                                            @if ($user->id==$tab->user_id)
                                            <option value="{{$tab->id}}">
                                                @foreach ($areas as $area )
                                                @if ($tab->area_id==$area->id)
                                                {{$tab->name}}-{{$area->name}}
                                                @break
                                                @endif
                                               
                                                @endforeach
                                            </option>
                                                
                                            @endif
                                        @endforeach
                                        
                               
                                
                                <!-- Ajoutez d'autres options de table si nécessaire -->
                            </select>
                        </div>

                            <div class="container container-restorant">
                    
                                
                                
                                        <nav class="tabbable sticky holder-left" style="top: 64px;">
                                    <ul class="nav nav-pills bg-white mb-2">
                                                <!-- Affichage des alertes de succès ou d'erreur -->
        

            

                                        <li class="nav-item nav-item-category ">
                                            <a class="btn-outline-sm " data-toggle="tab" role="tab" href="" style="background-color: #fff2dc">All categories</a>
                                        </li>   

                                        @foreach($categories as $c )
                                                @if ($c->user_id == $user->id )
                                            
                                                
                                            
                                    
                                                    <li class="nav-item nav-item-category" id="cat_salads{{$loop->index}}">
                                                        <a class="nav-link mb-sm-3 mb-md-0" style="color: #f25c05"  data-toggle="tab" role="tab" id="nav_salads{{$loop->index}}" href="#salads{{$loop->index}}">{{$c->name}}</a>
                                                    </li>
                                                    
                                                @endif                                                                       
                                        @endforeach                                                                   
                                                                                                
                                    </ul>

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
                    
                                    
                                    </nav>
                    
                                
                                  
                                        @foreach($categories as $c)
                                            @if ($c->user_id == $user->id)
                                                <div id="salads{{$loop->index}}" class="salads{{$loop->index}}">
                                                    <h1>{{ $c->name }}</h1><br>
                                                </div>
                                    
                                                <div class="row">
                                                    @foreach ($c->items as $i)
                                                        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
                                                            <div class="card-container">
                                                                <div class="strip">
                                                                    <figure>
                                                                        <a><img src="{{ asset('uploads') }}/{{ $i->photo }}" loading="lazy" data-src="/default/restaurant_large.jpg" class="img-fluid lazy rounded" alt=""></a>
                                                                    </figure>
                                    
                                                                    <div class="res_title"><b><a>{{ $i->name }}</a></b></div>
                                                                    <div class="res_description res_description_limit">{{ $i->description }}</div>
                                    
                                                                    <div class="row">
                                                                        <div class="col-6">
                                                                            <div class="res_mimimum">{{ $i->price }}</div>
                                                                        </div>
                                                                        <div class="col-6">
                                                                            <div class="allergens" style="text-align: right;"></div>
                                                                        </div>
                                    
                                                                        <div class="card-footer-buttons">
                                                                            <a data-bs-toggle="modal" data-bs-target="#addItem{{ $i->id }}" class="" id="edit" data-placement="top">
                                                                                <button class="btn btn-custom float-left btn-rounded"><i class="fas fa-eye me-1"></i>View Detail</button>
                                                                            </a>
                                                                            <div class="quantity-container float-right">
                                                                                <label for="quantity{{ $i->id }}" class="quantity-label">Quantity:</label>
                                                                                <select id="quantity{{ $i->id }}" name="quantity[{{ $i->id }}]" class="form-select">
                                                                                    @for($q = 1; $q <= 10; $q++)
                                                                                        <option value="{{ $q }}">{{ $q }}</option>
                                                                                    @endfor
                                                                                </select>
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-check mt-2">
                                                                            <input class="form-check-input" type="checkbox" value="{{ $i->id }}" id="item{{ $i->id }}" name="selected_items[]">
                                                                            <label class="form-check-label" for="item{{ $i->id }}">
                                                                                Select Item
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    @endforeach
                                                </div>
                                            @endif
                                        @endforeach
                                    
                                        <button type="submit" class="btn mt-3">Add Order</button>
                    </form>


                                    
                                    
                                
                            
                                
                            </div>
                    
                                        <div onclick="toggleSidebar()" class="callOutShoppingButtonBottom icon icon-shape bg-gradient-red text-white rounded-circle shadow mb-4">
                                    <i class="fas fa-shopping-basket"></i>
                                </div>
                            
                        </section>
                        
                        
                        
                    </div>

            


                

                    <!-- bottom bar start-->

                    @include('inc.consomateur.bottombar')
                    <!-- bottom bar end-->
                                
                                    



        




                    <!--modal d'ajout de item ou pannier -->

                @foreach($categories as $c )
                    @if ($c->user_id == $user->id )
                        @foreach ($c->items as $i )  


                    

                            <div class="modal fade" id="addItem{{$i->id}}" tabindex="-1" aria-labelledby="exampleModalLabel"
                                
                                aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h2 class="modal-title" id="exampleModalLabel">{{$i->name}}</h2>
                                           
                                            <button type="button" class="close btn-outline-sm" data-bs-dismiss="modal" aria-label="Close" style="background-color: #fff2dc;">
                                                <span aria-hidden="true" style="color: #f25c05;">X</span>
                                                
                                            </button>
                                            
                                            
                                        </div>
                                        
                                            
                                        
                                        <form action="/QRMenu/restaurant/order/add" method="post">
                            
                                            @csrf
                            
                                        
                                            <div class="modal-body p-0">
                                                <div class="card shadow border-0">
                                                    <div class="card-body px-lg-5 py-lg-5">
                                                        <div class="row">
                                                            <div class="col-sm col-md col-lg text-center" id="modalImgPart">
                                
                                                    
                                                                <label for="photo"><img src="{{asset('uploads')}}/{{ $i->photo }}" loading="lazy" data-src="/default/restaurant_large.jpg" class="img-fluid lazy" alt=""></label>
                                                                <br><br>

                                                            </div>
                                                            <div class="col-sm col-md col-lg col-lg" id="modalItemDetailsPart">

                                                                <h5 for="price" style="text-size:20px">{{$i->price}} Dt</h5>
                                                                </br>
                                                                
                                                                <label for="desc">{{$i->description}}</label><br>
                                                                <label for="available">{{$i->available}}</label>
                                                                </br>
                                                            </br>

                                                    
                                                
                                                                
                                                                
                                                            
                                                                <input type="hidden" value="{{ $c->id}}" name="idcategory"   class="form-control form-control-alternative">
                                                                <input type="hidden" value="{{ $i->id}}" name="iditem"   class="form-control form-control-alternative" >
                                                                <input type="hidden" value="1" name="idcommande"   class="form-control form-control-alternative" >
                                                        
                                                                <input type="hidden" value="{{ $user->id}}" name="iduser"   class="form-control form-control-alternative">
                                                        
                                                            
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                            
                                            </div>
                                            <div class="modal-footer">
                                                
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>

                        @endforeach
                    @endif
                @endforeach



                    

    <!-- Modal call waiter -->
    <div class="modal fade" id="callWaiterModal" tabindex="-1" role="dialog" aria-labelledby="callWaiterModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">

                    <h5 class="modal-title" id="callWaiterModalLabel">Call Waiter</h5>
                    <button type="button" class="close btn-outline-sm" data-dismiss="modal" aria-label="Close" style="background-color: #fff2dc;">
                        <span aria-hidden="true" style="color: #f25c05;">X</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="callWaiterForm" method="POST" action="/send-notification">
                        @csrf
                        <div class="form-group">
                            <label for="tableSelect">Select Your Table</label>
                            <select class="form-control" id="tableSelect" name="table_name">
                                @foreach ($tables as $table)
                                    @if ($user->id == $table->user_id)
                                        <option value="{{$table->name}}">
                                            @foreach ($areas as $area)
                                                @if ($table->area_id == $area->id)
                                                    {{$table->name}}-{{$area->name}}
                                                    @break
                                                @endif
                                            @endforeach
                                        </option>
                                    @endif
                                @endforeach
                            </select>
                            <input type="hidden" value="{{ $user->id }}" name="iduser" class="form-control form-control-alternative">
                        </div>
                        <br>
                        <div class="text-center mobile-menu">
                            <button type="button" id="callWaiterButton" class="btn-outline-sm">Call Now</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <script src="https://js.pusher.com/7.0/pusher.min.js"></script>

<script>
    $(document).ready(function() {
    $('#callWaiterButton').click(function() {
        var tableSelected = $('#tableSelect').val();
        var userId = $('[name="iduser"]').val();
        
        $.ajax({
            url: '/send-notification',
            method: 'POST',
            data: {
                table: tableSelected,
                userId: userId
            },
            success: function(response) {
                // Afficher la notification dans la deuxième interface
                alert('Notification envoyée avec succès');
            },
            error: function(xhr, status, error) {
                console.error(error);
            }
        });
    });
});

</script>





                

                

                <!--scripte for oopen/close side nav-->
                <script>
                    function toggleSidebar(event) {
                        event.preventDefault(); // Empêcher le comportement par défaut du lien
                        var sidebar = document.getElementById("sidebar");
                        sidebar.classList.toggle("active");
                    }
                
                    function closeSidebar() {
                        var sidebar = document.getElementById("sidebar");
                        sidebar.classList.remove("active");
                    }
                
                    document.getElementById("cartButton").addEventListener("click", toggleSidebar);
                
                    // Masquer la barre latérale au chargement de la page
                    window.addEventListener("DOMContentLoaded", function() {
                        var sidebar = document.getElementById("sidebar");
                        sidebar.classList.remove("active");
                    });
                </script>




                
        


        <!-- Scripts -->
        <script src="{{asset('mainassets/js/bootstrap.min.js')}}"></script> <!-- Bootstrap framework -->
        <script src="{{asset('mainassets/js/swiper.min.js')}}"></script> <!-- Swiper for image and text sliders -->
        <script src="{{asset('mainassets/js/purecounter.min.js')}}"></script> <!-- Purecounter counter for statistics numbers -->
        <script src="{{asset('mainassets/js/replaceme.min.js')}}"></script> <!-- ReplaceMe for rotating text -->
        <script src="{{asset('mainassets/js/scripts.js')}}"></script> <!-- Custom scripts -->
    </body>
</html>