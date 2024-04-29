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
    </head>
    <body data-bs-spy="scroll" data-bs-target="#navbarExample">
        
       <!-- top bar start-->

        @include('inc.consomateur.topbar')
        <!-- top bar end-->
        
        
         

            
            
            
            
                <section class="mt-5 mb-2 ">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="title white" style="border-bottom: 10px solid #ffffff;">
                                    <h1 class="display-3 ">Taxi Pizza</h1>
                                    
                                    <p class="display-4" style="margin-top: 120px">italian, pasta, pizza</p>
                                    <div class="row">
                    <div class="col-md-12">
                        <ul class="list-inline ">
                            </ul>
                    </div>
                    </div>
            
            
                                    <p><i class="ni ni-watch-time"></i>  <span class="opened_time">Opened 00:00 closed 23:58</span>  |   <i class="ni ni-pin-3"></i> <a target="_blank" href=""><span class="notranslate">Sousse jahbdae</span></a>  |   <i class="ni ni-mobile-button"></i> <a href="">(+216) 27 777 777 </a> </p>
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
                                                                                    <li class="nav-item nav-item-category" id="cat_salads0">
                                            <a class="nav-link mb-sm-3 mb-md-0" data-toggle="tab" role="tab" id="nav_salads0" href="#salads0">Salads</a>
                                        </li>
                                                                                                            <li class="nav-item nav-item-category" id="cat_pizza1">
                                            <a class="nav-link mb-sm-3 mb-md-0" data-toggle="tab" role="tab" id="nav_pizza1" href="#pizza1">Pizza</a>
                                        </li>
                                                                                                            
                                                                                          
                                                                        </ul>
            
                            
                            </nav>
            
                        
                        
                        
            
            
                                                                    <div id="salads0" class="salads0">
                                                                        <h1>Salads</h1><br>
                                                                    </div>
                                                                    <div class="row salads0">
                                                                    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
                                                                     <div class="strip">
                                                                            <figure>
                                                <a onclick="setCurrentItem(1)" href="javascript:void(0)"><img src="https://foodtiger.mobidonia.com/uploads/restorants/bd5292e7-e898-479d-8921-4c47a776ba82_large.jpg" loading="lazy" data-src="/default/restaurant_large.jpg" class="img-fluid lazy" alt=""></a>
                                            </figure>
                                                                            
                                                                                <div class="res_title"><b><a onclick="setCurrentItem(1)" href="javascript:void(0)">Caprese Salad (350gr)</a></b></div>
                                            
                                            <div class="res_description">peeled tomatoes, mozzarella salad,...</div>
                                            <div class="row">
                                                <div class="col-6">
                                                    <div class="res_mimimum">
                                                                                                    $9.99                                        </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="allergens" style="text-align: right;">
                                                                                                     
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            
                                       
                                        </div>
                                    </div>
                                                        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
                                        <div class="strip">
                                                                            <figure>
                                                <a onclick="setCurrentItem(2)" href="javascript:void(0)"><img src="https://foodtiger.mobidonia.com/uploads/restorants/25ed56dc-45cc-473f-ad00-d4b449acc71a_large.jpg" loading="lazy" data-src="/default/restaurant_large.jpg" class="img-fluid lazy" alt=""></a>
                                            </figure>
                                                                            
                                                                                <div class="res_title"><b><a onclick="setCurrentItem(2)" href="javascript:void(0)">Caesar Salad (400g)</a></b></div>
                                            
                                            <div class="res_description">iceberg, bacon, chicken breast,...</div>
                                            <div class="row">
                                                <div class="col-6">
                                                    <div class="res_mimimum">
                                                                                                    $10.99                                        </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="allergens" style="text-align: right;">
                                                                                                     
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            
                                       
                                        </div>
                                    </div>
                                                       
                                                        <div id="pizza1" class="pizza1">
                                <h1>Pizza</h1><br>
                            </div>
                                            <div class="row pizza1">
                                                        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
                                        <div class="strip">
                                                                            <figure>
                                                <a onclick="setCurrentItem(7)" href="javascript:void(0)"><img src="https://foodtiger.mobidonia.com/uploads/restorants/f71ae2d7-f24f-4e1b-9bdd-7ab7143ce3c8_large.jpg" loading="lazy" data-src="/default/restaurant_large.jpg" class="img-fluid lazy" alt=""></a>
                                            </figure>
                                                                            
                                                                                <div class="res_title"><b><a onclick="setCurrentItem(7)" href="javascript:void(0)">Mozzarella Pizza</a></b></div>
                                            
                                            <div class="res_description">tomato sauce, mozzarella sabelli,...</div>
                                            <div class="row">
                                                <div class="col-6">
                                                    <div class="res_mimimum">
                                                                                                    $10.99                                        </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="allergens" style="text-align: right;">
                                                                                                     
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            
                                       
                                        </div>
                                    </div>
                                                        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
                                        <div class="strip">
                                                                            <figure>
                                                <a onclick="setCurrentItem(8)" href="javascript:void(0)"><img src="https://foodtiger.mobidonia.com/uploads/restorants/9b9886cb-5d4b-4bfe-a02a-dc3b94dae706_large.jpg" loading="lazy" data-src="/default/restaurant_large.jpg" class="img-fluid lazy" alt=""></a>
                                            </figure>
                                                                            
                                                                                <div class="res_title"><b><a onclick="setCurrentItem(8)" href="javascript:void(0)">Prosciutto crust pizza</a></b></div>
                                            
                                            <div class="res_description">tomato sauce, mozzarella sabelli,...</div>
                                            <div class="row">
                                                <div class="col-6">
                                                    <div class="res_mimimum">
                                                                                                    $14.99                                        </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="allergens" style="text-align: right;">
                                                                                                     
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            
                                       
                                        </div>
                                    </div>
                                                        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
                                        <div class="strip">
                                                                            <figure>
                                                <a onclick="setCurrentItem(9)" href="javascript:void(0)"><img src="https://foodtiger.mobidonia.com/uploads/restorants/4b26647d-52b8-43c5-8b62-708c99252c24_large.jpg" loading="lazy" data-src="/default/restaurant_large.jpg" class="img-fluid lazy" alt=""></a>
                                            </figure>
                                                                            
                                                                                <div class="res_title"><b><a onclick="setCurrentItem(9)" href="javascript:void(0)">Pepperoni Pizza</a></b></div>
                                            
                                            <div class="res_description">tomato sauce, mozzarella Sabelli,...</div>
                                            <div class="row">
                                                <div class="col-6">
                                                    <div class="res_mimimum">
                                                                                                    $14.99                                        </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="allergens" style="text-align: right;">
                                                                                                     
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            
                                       
                                        </div>
                                    </div>
                                         
                                                
                                 
                                      
                                                </div>
                                 
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
        
            
        <!-- Scripts -->
        <script src="{{asset('mainassets/js/bootstrap.min.js')}}"></script> <!-- Bootstrap framework -->
        <script src="{{asset('mainassets/js/swiper.min.js')}}"></script> <!-- Swiper for image and text sliders -->
        <script src="{{asset('mainassets/js/purecounter.min.js')}}"></script> <!-- Purecounter counter for statistics numbers -->
        <script src="{{asset('mainassets/js/replaceme.min.js')}}"></script> <!-- ReplaceMe for rotating text -->
        <script src="{{asset('mainassets/js/scripts.js')}}"></script> <!-- Custom scripts -->
    </body>
</html>