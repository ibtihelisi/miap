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
        <title>Ioniq Webpage Title</title>
        
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

        @include('inc.guest.topbar')
        <!-- top bar end-->
        
        <!-- Header -->
        <header id="header" class="header">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="text-container">
                            <h1 class="h1-large">The #1 QR Menu app for <span class="replace-me">Restaurants, Bars, Hotels, Coffee shops ,tea Room</span></h1>
                            <p class="p-large">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut dignissim, neque ut vanic barem ultrices sollicitudin</p>
                            <a class="btn-solid-lg" href="{{ route('register') }}">Sign up for free</a>
                        </div> <!-- end of text-container -->
                    </div> <!-- end of col -->
                    <div class="col-lg-6">
                        <div class="image-container">
                            <img class="img-fluid" src="{{asset('mainassets/images/header-illustration.svg')}}" alt="alternative">
                        </div> <!-- end of image-container -->
                    </div> <!-- end of col -->
                </div> <!-- end of row -->
            </div> <!-- end of container -->
        </header> <!-- end of header -->
        <!-- end of header -->


        <!-- Features -->
        <div id="features" class="cards-1">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <h2 class="h2-heading">Ioniq CRM application is packed with <span>awesome features</span></h2>
                    </div> <!-- end of col -->
                </div> <!-- end of row -->
                <div class="row">
                    <div class="col-lg-12">
                        
                        <!-- Card -->
                        <div class="card">
                            <div class="card-icon">
                                <span class="fas fa-headphones-alt"></span>
                            </div>
                            <div class="card-body">
                                <h4 class="card-title">Full access to QR tool</h4>
                                <p>Streamline the ordering process for your customers by allowing them to order directly from the QR code menu. Enhance the efficiency of your service and provide a seamless experience.</p>
                            </div>
                        </div>
                        <!-- end of card -->

                        <!-- Card -->
                        <div class="card">
                            <div class="card-icon green">
                                <span class="far fa-clipboard"></span>
                            </div>
                            <div class="card-body">
                                <h4 class="card-title">Access to the menu creation tool</h4>
                                <p>Vulputate nibh feugiat. Morbi pellent diam nec libero lacinia, sed ultrices velit scelerisque. Nunc placerat justo sem</p>
                            </div>
                        </div>
                        <!-- end of card -->

                        <!-- Card -->
                        <div class="card">
                            <div class="card-icon blue">
                                <span class="far fa-comments"></span>
                            </div>
                            <div class="card-body">
                                <h4 class="card-title">Unlimited items in the menu</h4>
                                <p>Ety suscipit metus sollicitudin euqu isq imperdiet nibh nec magna tincidunt, nec pala vehicula neque sodales verum</p>
                            </div>
                        </div>
                        <!-- end of card -->

                          <!-- Card -->
                          <div class="card">
                            <div class="card-icon">
                                <span class="fas fa-headphones-alt"></span>
                            </div>
                            <div class="card-body">
                                <h4 class="card-title">Accept Orders</h4>
                                <p>Streamline the ordering process for your customers by allowing them to order directly from the QR code menu. Enhance the efficiency of your service and provide a seamless experience.</p>
                            </div>
                        </div>
                        <!-- end of card -->
                        <!-- Card -->
                        <div class="card">
                            <div class="card-icon">
                                <span class="fas fa-headphones-alt"></span>
                            </div>
                            <div class="card-body">
                                <h4 class="card-title">Manage order</h4>
                                <p>Streamline the ordering process for your customers by allowing them to order directly from the QR code menu. Enhance the efficiency of your service and provide a seamless experience.</p>
                            </div>
                        </div>
                        <!-- end of card -->


                        <!-- Card -->
                          <div class="card">
                            <div class="card-icon">
                                <span class="fas fa-headphones-alt"></span>
                            </div>
                            <div class="card-body">
                                <h4 class="card-title">Dedicated Support</h4>
                                <p>Streamline the ordering process for your customers by allowing them to order directly from the QR code menu. Enhance the efficiency of your service and provide a seamless experience.</p>
                            </div>
                        </div>
                        <!-- end of card -->


                        


                    </div> <!-- end of col -->
                </div> <!-- end of row -->
            </div> <!-- end of container -->
        </div> <!-- end of cards-1 -->
        <!-- end of services -->


        <!-- Details 1 -->
        <div id="details" class="basic-1 bg-gray">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-xl-5">
                        <div class="text-container">
                            <h2>Suivez les nouvelles recommandations sanitaires, c’est la fin des menus papiers.</h2>
                            <p>Sans contact : moins de risque.</p>
                            <p> Moins de papier : plus écolo .</p>
                            <p>Moins d’encre : moins de produits chimiques néfastes pour la nature.</p>
                            </div> <!-- end of text-container -->
                    </div> <!-- end of col -->


                    
                    <div class="col-lg-6 col-xl-7">
                        <div class="image-container">
                            <img class="img-fluid" src="{{asset('mainassets/images/details-1.svg')}}" alt="alternative">
                        </div> <!-- end of image-container -->
                    </div> <!-- end of col -->
                </div> <!-- end of row -->
            </div> <!-- end of container -->
        </div> <!-- end of basic-1 -->
        <!-- end of details 1 -->



        


        <!-- Details Modal -->
        <div id="staticBackdrop" class="modal fade" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="row">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        <div class="col-lg-8">
                            <div class="image-container">
                                <img class="img-fluid" src="{{asset('mainassets/images/details-modal.jpg')}}" alt="alternative">
                            </div> <!-- end of image-container -->
                        </div> <!-- end of col -->
                        <div class="col-lg-4">
                            <h3>Goals Setting</h3>
                            <hr>
                            <p>In gravida at nunc sodales pretium. Vivamus semper, odio vitae mattis auctor, elit elit semper magna ac tum nico vela spider</p>
                            <h4>User Feedback</h4>
                            <p>Sapien vitae eros. Praesent ut erat a tellus posuere nisi more thico cursus pharetra finibus posuere nisi. Vivamus feugiat</p>
                            <ul class="list-unstyled li-space-lg">
                                <li class="d-flex">
                                    <i class="fas fa-chevron-right"></i>
                                    <div class="flex-grow-1">Tincidunt sem vel brita bet mala</div>
                                </li>
                                <li class="d-flex">
                                    <i class="fas fa-chevron-right"></i>
                                    <div class="flex-grow-1">Sapien condimentum sacoz sil necr</div>
                                </li>
                                <li class="d-flex">
                                    <i class="fas fa-chevron-right"></i>
                                    <div class="flex-grow-1">Fusce interdum nec ravon fro urna</div>
                                </li>
                                <li class="d-flex">
                                    <i class="fas fa-chevron-right"></i>
                                    <div class="flex-grow-1">Integer pulvinar biolot bat tortor</div>
                                </li>
                                <li class="d-flex">
                                    <i class="fas fa-chevron-right"></i>
                                    <div class="flex-grow-1">Id ultricies fringilla fangor raq trinit</div>
                                </li>
                            </ul>
                            <a id="modalCtaBtn" class="btn-solid-reg" href="#your-link">Details</a>
                            <button type="button" class="btn-outline-reg" data-bs-dismiss="modal">Close</button>
                        </div> <!-- end of col -->
                    </div> <!-- end of row -->
                </div> <!-- end of modal-content -->
            </div> <!-- end of modal-dialog -->
        </div> <!-- end of modal -->
        <!-- end of details modal -->


        <!-- Details 2 -->
        <div class="basic-2">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="image-container">
                            <img class="img-fluid" src="{{asset('mainassets/images/details-2.png')}}" alt="alternative">
                        </div> <!-- end of image-container -->
                    </div> <!-- end of col -->
                    <div class="col-lg-6">
                        <div class="text-container">
                            <h2>Faites gagner du temps à vos équipes.</h2>
                            <p>Vos équipes ne perdent plus de temps pour distribuer les menus ou les désinfecter.</p>
                            <p> Vos clients feront leur choix/commandes avant mêmes l’arrivée du serveur.</p>
                            <p>Vos équipes ne perdent plus de temps pour distribuer les menus ou les désinfecter.</p>
                           
                        </div> <!-- end of text-container -->
                    </div> <!-- end of col -->
                </div> <!-- end of row -->
            </div> <!-- end of container -->
        </div> <!-- end of basic-2 -->
        <!-- end of details 2 -->

             
        
        

        <!-- Invitation -->
        <div class="basic-3">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <h4>Ioniq will change the way you think about CRM solutions due to it’s advanced tools and integrated functionalities</h4>
                        <a class="btn-outline-lg page-scroll" href="{{ route('register') }}">Sign up for free</a>
                    </div> <!-- end of col -->
                </div> <!-- end of row -->
            </div> <!-- end of container -->
        </div> <!-- end of basic-3 -->
        <!-- end of invitation -->


        <!-- Pricing -->
        <div id="pricing" class="cards-2 bg-gray">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <h2 class="h2-heading">Free forever tier and 2 pro plans</h2>
                    </div> <!-- end of col -->
                </div> <!-- end of row -->
                <div class="row">
                    <div class="col-lg-12">
                        
                        @foreach ($subscriptions as $subscription)
                        <!-- Card -->
                        <div class="card">
                            <div class="card-body">
                                <div class="card-title">
                                    <img class="decoration-lines" src="{{asset('mainassets/images/decoration-lines.svg')}}" alt="alternative">
                                    <span>{{ $subscription->name }}</span>
                                    <img class="decoration-lines flipped" src="{{asset('mainassets/images/decoration-lines.svg')}}" alt="alternative">
                                </div>
                                <ul class="list-unstyled li-space-lg">
                                    @php
                                    $features = explode(',', $subscription->features_list);
                                    @endphp
                                    @foreach($features as $feature)
                                    <li>{{ $feature }}</li>
                                    @endforeach
                                    
                                 
                                </ul>
                                <div class="price">{{ $subscription->price }} Dt<span>/mois</span></div>
                                <a href="{{ route('register') }}" class="btn-solid-reg">Sign up</a>
                            </div>
                        </div>
                        <!-- end of card -->

                        
                        @endforeach
                    </div> <!-- end of col -->
                   
                </div> <!-- end of row -->
            </div> <!-- end of container -->
        </div> <!-- end of cards-2 -->
        <!-- end of pricing -->
        <br>
        <br>
        <br>
        

       

        <!--DEMO -->
        <div id="demo" class="section section-lg pb-5 bg-soft">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center mb-5">
                    <i class="fas fa-edit mr-2 text-primary ckedit_btn" type="button" style="display: none"></i><h2 class="h2-heading" key="demo_title" id="demo_title">See a demo online menu</h2>
                    <i class="fas fa-edit mr-2 text-primary ckedit_btn" type="button" style="display: none"></i><p class="accordion-body" key="demo_subtitle" id="demo_subtitle">Just open the camera on your phone and scan the <span class="font-weight-bolder">QR code</span> below!</p>
                        <a href="#" class="icon icon-lg text-gray mr-3">
                            <img style="width:300px" src="https://zebra-qr.com/impactfront/img/qrdemo.jpg" />
        
                        </a>
        
                    </div>
                    <div class="col-12 text-center">
                        <!-- Button Modal -->

                        <a href="{{ route('register') }}" class="btn-solid-reg"><span class="mr-2"><i class="fas fa-hand-pointer"></i></span>Create a menu for you, now!</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- end of DEMO -->



         <!-- Questions -->
         <div class="accordion-1">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <h2 class="h2-heading">Frequent questions</h2>
                    </div> <!-- end of col -->
                </div> <!-- end of row -->   
                <div class="row">
                    <div class="col-lg-12">
                        <div class="accordion" id="accordionExample">
                            
                            <!-- Accordion Item -->
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingOne">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">How can I contact you quickly and get a reasonable quote more for my project?</button>
                                </h2>
                                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">Sed lacinia cursus viverra. Nunc sed libero euismod, congue dui a, vulputate quam. Pellentesque neque nisi, ultrices ut ipsum ac, mattis sollicitudin neque. Ut ac nunc sem. Etiam id erat facilisis magna sagittis porta. Donec eu dolor eu dolor finibus sodales consectetur, et condimentum elit tincidunt</div>
                                </div>
                            </div>
                            <!-- end of accordion-item -->

                            <!-- Accordion Item -->
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingTwo">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">Is the Free Tier available for unlimited time or it will end more words after a while?</button>
                                </h2>
                                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">Mauris faucibus placerat nisl. Sed eros odio, posuere at felis quis, tincidunt facilisis nibh. Nulla in ante sem. Nam aliquam urna nisi, cursus semper dolor convallis at. Duis vulputate est in consectetur, et condimentum elit tincidunt libero consectetur, et condimentum suis vulputate est in libero</div>
                                </div>
                            </div>
                            <!-- end of accordion-item -->

                            <!-- Accordion Item -->
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingThree">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">Can I use the app on mobile devices or it’s limited more words to desktop use?</button>
                                </h2>
                                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">Nullam at diam at mi facilisis consectetur at non turpis. Proin a felis nisi. Sed at orci rutrum, tincidunt magna vel, pharetra libero. Proin mauris orci, faucibus eget malesuada vel, consectetur, et condimentum elit tincidunt pellentesque vitae ligula. Pellentesque euismod tincidun</div>
                                </div>
                            </div>
                            <!-- end of accordion-item -->

                        </div> <!-- end of accordion -->
                    </div> <!-- end of col -->
                </div> <!-- end of row -->
            </div> <!-- end of container -->
        </div> <!-- end of accordion-1 -->
        <!-- end of questions -->

        

        

          <!-- bottom bar start-->

          @include('inc.guest.bottombar')
          <!-- bottom bar end-->
        
            
        <!-- Scripts -->
        <script src="{{asset('mainassets/js/bootstrap.min.js')}}"></script> <!-- Bootstrap framework -->
        <script src="{{asset('mainassets/js/swiper.min.js')}}"></script> <!-- Swiper for image and text sliders -->
        <script src="{{asset('mainassets/js/purecounter.min.js')}}"></script> <!-- Purecounter counter for statistics numbers -->
        <script src="{{asset('mainassets/js/replaceme.min.js')}}"></script> <!-- ReplaceMe for rotating text -->
        <script src="{{asset('mainassets/js/scripts.js')}}"></script> <!-- Custom scripts -->
    </body>
</html>