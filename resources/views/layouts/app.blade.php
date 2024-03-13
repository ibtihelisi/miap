<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        
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
        <title>Sign Up - Ioniq</title>
        
        <!-- Styles -->
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,400;0,600;1,400&display=swap" rel="stylesheet">
        <link href="{{asset('mainassets/css/bootstrap.min.css')}}" rel="stylesheet">
        <link href="{{asset('mainassets/css/fontawesome-all.min.css')}}" rel="stylesheet">
        <link href="{{asset('mainassets/css/swiper.css')}}" rel="stylesheet">
        <link href="{{asset('mainassets/css/styles.css')}}" rel="stylesheet">
        
        <!-- Favicon  -->
        <link rel="icon" href="images/favicon.png">
        @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    </head>
    <body>
        
         <!-- top bar start-->

         @include('inc.guest.topbar')
         <!-- top bar end-->
         


        <!-- Header --> 
        <header class="ex-header">
            <div class="container">
                <div class="row">
                    <div class="col-xl-10 offset-xl-1">
                        <h1 class="text-center">Sign Up</h1>
                    </div> <!-- end of col -->
                </div> <!-- end of row -->
            </div> <!-- end of container -->
        </header> <!-- end of ex-header -->
        <!-- end of header -->
        
        
        <!-- Basic -->
        <div class="ex-form-1 pt-5 pb-5">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 offset-xl-3">
                        <div class="text-box mt-5 mb-5">
                            <p class="mb-4">Fill out the form below to sign up for the service. Already signed up? Then just <a class="blue" href="log-in.html">Log In</a></p>

                            <!-- Sign Up Form -->
                            <form>
                                <div class="mb-4 form-floating">
                                    <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                                    <label for="floatingInput">Email address</label>
                                </div>
                                <div class="mb-4 form-floating">
                                    <input type="text" class="form-control" id="floatingInput2" placeholder="Your name">
                                    <label for="floatingInput">Your name</label>
                                </div>
                                <div class="mb-4 form-floating">
                                    <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
                                    <label for="floatingPassword">Password</label>
                                </div>
                                <div class="mb-4 form-check">
                                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                    <label class="form-check-label" for="exampleCheck1">I agree with the site's stated <a href="privacy.html">Privacy Policy</a> and <a href="terms.html">Terms & Conditions</a></label>
                                </div>
                                <button type="submit" class="form-control-submit-button">Sign up</button>
                            </form>
                            <!-- end of sign up form -->

                        </div> <!-- end of text-box -->
                    </div> <!-- end of col -->
                </div> <!-- end of row -->
            </div> <!-- end of container -->
        </div> <!-- end of ex-basic-1 -->
        <!-- end of basic -->

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