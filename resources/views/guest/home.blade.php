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
                @foreach($whies as $why)
                <div class="col-lg-6 col-xl-5  mb-5">
                    <div class="text-container">
                        <h2>{{$why->title }}</h2>
                        <p>{{$why->desc1 }}</p>
                        <p>{{$why->desc2 }}</p>
                        <p>{{$why->desc3 }}</p>
                        </div> <!-- end of text-container -->
                </div> <!-- end of col -->


                
                <div class="col-lg-6 col-xl-6 mb-5">
                    <div class="image-container">
                        <img class="img-fluid" src="{{asset('uploads')}}/{{ $why->icon }}" alt="alternative">
                    </div> <!-- end of image-container -->
                </div> <!-- end of col -->
                <br>
                <br>
                @endforeach
                
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of basic-1 -->
    <!-- end of details 1 -->




             
        
        

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
                    <i class="fas fa-edit mr-2 text-primary ckedit_btn" type="button" style="display: none"></i><h2 class="h2-heading" key="demo_title" id="demo_title">{{ $demo->subheading }}</h2>
                    <i class="fas fa-edit mr-2 text-primary ckedit_btn" type="button" style="display: none"></i><p class="accordion-body" key="demo_subtitle" id="demo_subtitle">{{ $demo->heading }}</p>
                    <p class="accordion-body" key="demo_subtitle" id="demo_subtitle">{{ $demo->text }}</p>
                                                                                                                
                        <a href="#" class="icon icon-lg text-gray mr-3">
                            <img style="width:350px" src="{{asset('uploads')}}/{{ $demo->photo }}" />
        
                        </a>
        
                    </div>
                    <div class="col-12 text-center">
                        <!-- Button Modal -->

                        <a href="{{ route('register') }}" class="btn-solid-reg"><span class="mr-2"><i class="fas fa-hand-pointer me-2"></i></span>{{ $demo->button_text }}</a>
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
                        <h2 class="h2-heading">{{$faq->Title}}</h2>
                    </div> <!-- end of col -->
                </div> <!-- end of row -->   
                <div class="row">
                    <div class="col-lg-12">
                        <div class="accordion" id="accordionExample">

                            @foreach($faqs as $index =>  $faq)
                                @if ($faq->id !='1')
                            
                                    <!-- Accordion Item -->
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="heading{{$index}}">
                                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse{{$index}}" aria-expanded="true" aria-controls="collapse{{$index}}"> {{"$faq->question"}} </button>
                                        </h2>
                                        <div id="collapse{{$index}}" class="accordion-collapse collapse " aria-labelledby="heading{{$index}}" data-bs-parent="#accordionExample">
                                            <div class="accordion-body"> {{"$faq->answer"}}</div>
                                        </div>
                                    </div>
                                    <!-- end of accordion-item -->
                                @endif
                            @endforeach



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