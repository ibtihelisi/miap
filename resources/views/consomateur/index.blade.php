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
        
        
        <!-- Favicon  -->
        <link rel="icon" href="images/favicon.png">


        <style>
            .display-3 {
                 font-size: calc(1.525rem + 3.3vw);
                font-weight: 300;
                line-height: 3;
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


.res_description_limit {
    max-height: 100px; /* Ajustez la hauteur maximale selon vos besoins */
    overflow: hidden;
    text-overflow: ellipsis;
    white-space: nowrap;
}

.res_description_full {
    white-space: normal;
    max-height: none;
    overflow: visible;
}

        </style>
    </head>
    <body data-bs-spy="scroll" data-bs-target="#navbarExample">
        
       <!-- top bar start-->

        @include('inc.consomateur.topbar')
        <!-- top bar end-->
        
        
         

            
            <div>
            

                <section class="section-profile-cover section-shaped grayscale-05  ">
                    <!-- Circles background -->
                    <img class="bg-image" loading="lazy" src="{{asset('uploads')}}/{{ $user->logo }} " style="width: 100%">
                    <!-- SVG separator -->
                    <div class="separator separator-bottom separator-skew">
                      <svg x="0" y="0" viewBox="0 0 2560 100" preserveAspectRatio="none" version="1.1" xmlns="http://www.w3.org/2000/svg">
                        <polygon class="fill-white" fill="#fff2dc" points="2560 0 2560 100 0 100"></polygon>
                      </svg>
                    </div>
                </section>
            
                <section class="mt-5 mb-2  ">
                    <div class="container">
                        <div class="row justify-content-center" >
                            <div class="col-md-12">
                                <div class="title white" style="border-bottom: 10px solid #ffffff;">
                                    <h1 class=" ">Welcom to  {{$user->restaurant_name}} </h1>
                                    
                                    <p class="" style="margin-top: 5px">{{$user->desc}}</p>
                                    <div class="row">
                        <div class="col-md-12">
                        <ul class="list-inline ">
                            </ul>
                    </div>
                    </div>
            
            
                                    <p><i class="fas fa-stopwatch me-2"></i>
                                        <span class="opened_time">Opened 00:00 closed 23:58</span>  |  
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


            
                <section class="section pt-lg-0" id="restaurant-content" style="padding-top: 0px">
                    <input type="hidden" id="rid" value="1">
                    <div class="container container-restorant">
            
                        
                        
                                <nav class="tabbable sticky" style="top: 64px;">
                            <ul class="nav nav-pills bg-white mb-2">
                                <li class="nav-item nav-item-category ">
                                    <a class="nav-link  mb-sm-3 mb-md-0 active" data-toggle="tab" role="tab" href="">All categories</a>
                                </li>   

                                @foreach($categories as $c )
                                        @if ($c->user_id == $user->id )
                                    
                                         
                                    
                               
                                            <li class="nav-item nav-item-category" id="cat_salads{{$loop->index}}">
                                                <a class="nav-link mb-sm-3 mb-md-0" data-toggle="tab" role="tab" id="nav_salads{{$loop->index}}" href="#salads{{$loop->index}}">{{$c->name}}</a>
                                             </li>
                                            
                                        @endif                                                                       
                                 @endforeach                                                                   
                                                                                          
                             </ul>
            
                            
                            </nav>
            
                        
                        
                        
                            @foreach($categories as $c )
                            @if ($c->user_id == $user->id )
            
                                                                    <div id="salads{{$loop->index}}" class="salads{{$loop->index}}">
                                                                        <h1>{{$c->name}}</h1><br>
                                                                    </div>
                                                                    
                                                                        
                                                                    
                                                                    <div class="row ">
                                                                       
                                                                        @foreach ($c->items as $i )   
                                          <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">

                                            <div class="card-container">
                                                                     <div class="strip">
                                                                            <figure>
                                                <a ><img src="{{asset('uploads')}}/{{ $i->photo }}" loading="lazy" data-src="/default/restaurant_large.jpg" class="img-fluid lazy" alt=""></a>
                                            </figure>
                                                                            
                                                                                <div class="res_title"><b><a >{{$i->name}}</a></b></div>
                                            
                                                                        <div class="res_description res_description_limit">{{$i->description}}</div>

                                            <div class="row">
                                                <div class="col-6">
                                                    <div class="res_mimimum">
                                                                                                   {{$i->price}}                                       </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="allergens" style="text-align: right;">
                                                                                                     
                                                    </div>
                                                </div>


                                                <div class="card-footer-buttons">
                                                    <a data-bs-toggle="modal" data-bs-target="#editItem{{ $i->id }}" class=""  id="edit"       data-placement="top" >
                                                        <button class="btn btn-custom float-left btn-rounded"><i class="fas fa-eye me-1"></i>View Detail</button>
                                                    </a>
                                                    <button class="btn btn-custom float-right btn-rounded"><i class="fas fa-shopping-cart me-1"></i>Add To Cart</button>
                                                </div>
                                            </div>
                                            
                                            
                                            
                                        </div>
                                    </div>
                                    </div>
                                    @endforeach
                                    @endif
                                    @endforeach
                                                       
                                                                
                                 
                                                </div>
                                                <!-- Check if is installed -->
                                        
                            <!-- Check if there is value -->
                                        
                       
                        
                    </div>
            
                                <div onclick="openNav()" class="callOutShoppingButtonBottom icon icon-shape bg-gradient-red text-white rounded-circle shadow mb-4">
                            <i class="ni ni-cart"></i>
                        </div>
                    
                </section>
                
                   
                  
             </div>

       


        

          <!-- bottom bar start-->

          @include('inc.consomateur.bottombar')
          <!-- bottom bar end-->
        
            



  






          @foreach($categories as $c )
            @if ($c->user_id == $user->id )
                @foreach ($c->items as $i )  






                    <div class="modal fade" id="editItem{{$i->id}}" tabindex="-1" aria-labelledby="exampleModalLabel"
                        
                        style="display: none;" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">{{$i->name}}</h5>
                                    
                                </div>
                                
                                    
                                
                                <form action="" method="post">
                    
                                    @csrf
                    
                                
                                    <div class="modal-body">
                                        <div class="mb-3">
                                            
                                           <label for="photo"><img src="{{asset('uploads')}}/{{ $i->photo }}" loading="lazy" data-src="/default/restaurant_large.jpg" class="img-fluid lazy" alt=""></label>
                                           <br><br>
                                           <label for="price">{{$i->price}} DTN</label>
                                           <br>
                                           <label for="desc">{{$i->description}}</label>
                                           <br>

                                            @error('name')
                                                <div class="alert alert-danger">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                        <br>
                                        <label for="quantity">Quantity</label>
                                        <input type="number" step="1"  min="1" placeholder="1">
                    
                                        <input type="hidden" value="{{ $i->id}}" name="idcategory"  name="quantity" class="form-control form-control-alternative">

                                        
                    
                                    </div>
                                    <div class="modal-footer">
                                        <button class="btn btn-primary" type="submit ">Add To Cart</button>
                                        <button class="btn btn-outline-primary" type="button"
                                            data-bs-dismiss="modal">X</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                @endforeach
            @endif
        @endforeach


           





        <!-- Scripts -->
        <script src="{{asset('mainassets/js/bootstrap.min.js')}}"></script> <!-- Bootstrap framework -->
        <script src="{{asset('mainassets/js/swiper.min.js')}}"></script> <!-- Swiper for image and text sliders -->
        <script src="{{asset('mainassets/js/purecounter.min.js')}}"></script> <!-- Purecounter counter for statistics numbers -->
        <script src="{{asset('mainassets/js/replaceme.min.js')}}"></script> <!-- ReplaceMe for rotating text -->
        <script src="{{asset('mainassets/js/scripts.js')}}"></script> <!-- Custom scripts -->
    </body>
</html>