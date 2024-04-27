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
                            <h1 class="h1-large"> {{$setting->subheading}} <span class="replace-me"> {{$setting->heading}}</span></h1>
                            <p class="p-large">{{$setting->text}}</p>
                            <a class="btn-solid-lg" href="{{ route('register') }}">{{$setting->button_text}}</a>
                        </div> <!-- end of text-container -->
                    </div> <!-- end of col -->
                    <div class="col-lg-6">
                        <div class="image-container">
                            <img class="img-fluid" src="{{asset('uploads')}}/{{ $setting->photo }}" alt="alternative" >
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
                        <h2 class="h2-heading">{{$feature->Title}}<span>{{$feature->span}}</span></h2>
                    </div> <!-- end of col -->
                </div> <!-- end of row -->
                <div class="row">

                    @foreach($features as $f)
                      @if ($f->id !='1')
                        <div class="col-lg-4">
                        
                        <!-- Card -->
                        <div class="card">
                            <div class="card-icon">
                                <span class="" ><img src="{{asset('uploads')}}/{{ $f->icon }}" alt="" width="50"></span>
                            </div>
                            <div class="card-body">
                                <h4 class="card-title">{{$f->feature_item_title }}</h4>
                                <p>{{$f->feature_item_paragraph}}</p>
                            </div>
                        </div>
                        <!-- end of card -->


                        


                        </div> <!-- end of col -->
                       @endif
                    @endforeach
                </div> <!-- end of row -->
            </div> <!-- end of container -->
        </div> <!-- end of cards-1 -->
        <!-- end of services -->


        <!-- Details 1 -->
        <div id="about" class="basic-1 bg-gray">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-xl-5">
                        <div class="text-container">
                            <h2>{{__('home.Follow the new sanitary recommendations, it\'s the end of paper menus.')}}</h2>
                            <p>{{__('home.Contactless: less risk.')}}</p>
                            <p>{{__('home.Less paper: more eco-friendly.')}}</p>
                            <p>{{__('home.Less ink: fewer harmful chemicals for the environment.')}}</p>
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
                            <h2>{{__('home.Save time for your teams.')}}</h2>
                            <p>{{__('home.Your teams no longer waste time distributing menus or disinfecting them.')}}</p>
                            <p> {{__('home.Your customers will make their choices/orders even before the server arrives.')}}</p>
                            <p>{{__('home.Your teams no longer waste time distributing menus or disinfecting them.')}}</p>
                           
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
                        <h4> What are you waiting for?</h4>
                         </br>
                        <h4>Start right away and digitize your menu in a few minutes!
                            In the bottom right corner we are ready to help when necessary, 7/7!  </h4>
                        <a class="btn-outline-lg page-scroll" href="{{ route('register') }}">Start now !</a>
                        </br>
                        Free 14-day trial.
                    </div> <!-- end of col -->               </div> <!-- end of row -->
            </div> <!-- end of container -->
        </div> <!-- end of basic-3 -->
        <!-- end of invitation -->


        <!-- Pricing -->
        <div id="pricing" class="cards-2 bg-gray">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <h2 class="h2-heading">{{__('home.Free forever tier and 2 pro plans')}}</h2>
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
                                <a href="{{ route('register') }}" class="btn-solid-reg">{{__('home.Sign up')}}</a>
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
                    <i class="fas fa-edit mr-2 text-primary ckedit_btn" type="button" style="display: none"></i><h2 class="h2-heading" key="demo_title" id="demo_title">See a demo online Menu</h2>
                    <i class="fas fa-edit mr-2 text-primary ckedit_btn" type="button" style="display: none"></i><p class="accordion-body" key="demo_subtitle" id="demo_subtitle">Just open the camera on your phone and scan the <span class="font-weight-bolder">QR code</span> below!</p>
                        <a href="#" class="icon icon-lg text-gray mr-3">
                            <img style="width:300px" src="https://zebra-qr.com/impactfront/img/qrdemo.jpg" />
        
                        </a>
        
                    </div>
                    <div class="col-12 text-center">
                        <!-- Button Modal -->

                        <a href="{{ route('register') }}" class="btn-solid-reg"><span class="mr-2"><i class="fas fa-hand-pointer"></i></span>Create a Menu for you, now!</a>
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
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">What do I have to do to get started?</button>
                                </h2>
                                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">Click on register, enter your details, customize our sample menu and print or order your QR codes!</div>
                                </div>
                            </div>
                            <!-- end of accordion-item -->

                            <!-- Accordion Item -->
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingTwo">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">How can my waiters ans kitchen staff view QR Menu app orders</button>
                                </h2>
                                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">Créez des identifiants de connexion distincts pour chacun de vos quatre serveurs et cuisiniers dans le panneau d'administration de votre restaurant. Demandez-leur de se connecter à instalcarte.com en utilisant les détails fournis. Cela leur permettra d'accéder et de voir toutes les commandes Instalcarte reçues.</div>
                                </div>
                            </div>
                            <!-- end of accordion-item -->

                            <!-- Accordion Item -->
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingThree">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">Can I cancel my subscription anytime?
                                       </button>
                                </h2>
                                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                    <div class="accordion-body"> Absolutely! You're free to cancel your subscription at any time.</div>
                                </div>
                            </div>
                            <!-- end of accordion-item -->


                             <!-- Accordion Item -->
                             <div class="accordion-item">
                                <h2 class="accordion-header" id="headingThree">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">Where should I place the QR Codes?
                                       
                                       </button>
                                </h2>
                                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">  QR Code menus work for dine-in, delivery, and pickup. Paste QR Codes on tables, entry points, food pickup zones, or even delivery bags for future orders.</div>
                                </div>
                            </div>
                            <!-- end of accordion-item -->


                             <!-- Accordion Item -->
                             <div class="accordion-item">
                                <h2 class="accordion-header" id="headingThree">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">Do my customers need an app to scan a QR Code?
                                      
                                       
                                       </button>
                                </h2>
                                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">    No, they can simply use their phone cameras.</div>
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