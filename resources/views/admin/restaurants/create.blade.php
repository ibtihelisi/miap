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




      .center {
    text-align: center;
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
              <h1 class="mt-3">Restaurant Management</h1>
              <hr>
      
          </div>
          <div class="row py-2">
            <div class="col-md-14 text-end">
                <a class="btn btn-primary" href="/admin/restaurants">Back to restaurants list </a>
                
                
            
            </div>

            
         </div>
        
        
        
        
          
          
         <form action="/restaurant/add" method="post">

            @csrf

          
            <div class="modal-body">
              <!--espace name-->
              <h6 class="col-md-2 col-form-label text-md-end">Restaurant information</h6>
                <div class="mb-3">

                    <label class="col-md-0 col-form-label text-md-end" for="restaurant_name"> Restaurant Name</label>
                    <input name="restaurant_name" class="form-control" id="exampleFormControlInput1" type="text" placeholder=" Restaurant Name here..."  value="{{ old('restaurant_name') }}"  required >
                    @error('restaurant_name')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                  @enderror
                
                </div> 
                <hr class="my-4">
                <!--espace owner name-->
                <h6 class="col-md-2 col-form-label text-md-end">Owner information</h6>
                <div class="mb-3">
                    <label class="col-md-0 col-form-label text-md-end" for="exampleFormControlInput1">Owner Name</label>
                    <input name="owner_name" class="form-control" id="exampleFormControlInput1" type="text" placeholder=" Owner Name here..."  value="{{ old('owner_name') }}" required >
                    @error('owner_name')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                  @enderror
                
                </div>
                

                    <div class="mb-3">
                        <label for="email" class="col-md-0 col-form-label text-md-end">{{ __('Email Address') }}</label>

                        
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" required autocomplete="email" placeholder=" Owner email here..." value="{{ old('email') }}" >

                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        
                    </div>


                    <div class=" mb-3">
                        <label for="owner_phone" class="col-md-0 col-form-label text-md-end">{{ __('Owner Phone Number') }}</label>

                        
                            <input id="owner_phone" type="number" class="form-control @error('owner_phone') is-invalid @enderror" name="owner_phone"  placeholder=" Owner Phone number here..." required autocomplete="owner_phone" value="{{ old('owner_phone') }}" >

                            @error('owner_phone')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        
                    </div>


                    <div class="mb-3">
                      <label for="password" class="col-md-0 col-form-label text-md-end">{{ __('Password') }}</label>
                      <div class="">
                          <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                          @error('password')
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                              </span>
                          @enderror
                      </div>
                  </div>
                  
                  <div class="mb-3">
                      <label for="password-confirm" class="col-md-0 col-form-label text-md-end">{{ __('Confirm Password') }}</label>
                      <div class="">
                          <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                      </div>
                  </div>
                  


                   


                <div class="center">
              
                  <button  class="btn btn-success" type="submit ">SAVE</button>
                  
                </div>
            
         

        </form>
          
          
          
          
          <!--<footer class="footer">
            <div class="row g-0 justify-content-between align-items-center h-100 mb-3">
              <div class="col-12 col-sm-auto text-center">
                <p class="mb-0 text-900">Thank you for creating with phoenix<span class="d-none d-sm-inline-block"></span><span class="mx-1">|</span><br class="d-sm-none">2022 &copy; <a href="https://themewagon.com">Themewagon</a></p>
              </div>
              <div class="col-12 col-sm-auto text-center">
                <p class="mb-0 text-600">v1.1.0</p>
              </div>
            </div>
          </footer>-->
        
      </div>
    </main>
   

  


 
     
    <script src="{{asset('dashassets/js/phoenix.js')}}"></script>
    <script src="{{asset('dashassets/js/ecommerce-dashboard.js')}}"></script>
  </body>

</html>