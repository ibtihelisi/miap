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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.0/font/bootstrap-icons.css" rel="stylesheet">
  
    

    
    <style>
      body {
          opacity: 0;
          font-family: 'Nunito Sans', sans-serif;
          background-color: #fff2dc;
      }
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
              <h1 class="mt-3" style="color: #272556">Plans  Management</h1>
              <hr>
      
          </div>
          <div class="row py-2">
            <div class="col-md-14 text-end">
                <a class="btn btn-primary" href="/admin/subscriptions">Back to plans </a>
                
                
            
            </div>

            
         </div>
        
        
        
        
          
          
         <form action="/subscription/update/{{ $subscriptions->id }}" method="post">


            @csrf

          
            <div class="modal-body">
              <!--espace name-->
                <div class="mb-3">
                    <label class="col-form-label text-md-end" for="exampleFormControlInput1"> Name</label>
                    <input name="name" value ="{{$subscriptions->name}}" class="form-control" id="exampleFormControlInput1" type="text"  required  >
                    @error('name')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                  @enderror
                
                </div>

                <!--espace description-->
                <div class="mb-0">
                    <label class="col-form-label text-md-end" for="exampleTextarea">Plan Description </label>
                    <textarea name="description" class="form-control" rows="3" placeholder=" Plan description...."required > {{$subscriptions->description}}</textarea>


                    @error('description')
                        <div class="alert alert-danger">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <br/>

          

                <!--espace price-->
              <div id="form-group-price" class="form-group  ">
                <label class="col-form-label text-md-end" for="price" >Price</label>
                <input   step=".01"  value ="{{$subscriptions->price}}"   type="number" name="price" id="price" class="form-control form-control   " placeholder="Plan price"  required >
                @error('price')
                  <div class="alert alert-danger">
                      {{ $message }}
                  </div>
                @enderror
              </div>
              <br/>

              
          
                
             

              <br/>
              <div class="row">
                  <!-- epace plan period -->
                  <div class="col-md-6">
                    <label class="col-form-label text-md-end">Plan period</label>
                    <div class="custom-control custom-radio mb-3">
                        <input name="period" class="custom-control-input" id="monthly" value="monthly" type="radio" required {{ $subscriptions->period == 'monthly' ? 'checked' : '' }}>
                        <label class="custom-control-label" for="monthly">Monthly</label>
                    </div>
                    <div class="custom-control custom-radio mb-3">
                        <input name="period" class="custom-control-input" id="anually" value="anually" type="radio" required {{ $subscriptions->period == 'anually' ? 'checked' : '' }}>
                        <label class="custom-control-label" for="anually">Annually</label>
                    </div>
                  </div>
                
              

                
                
               
             
              </div>
              

            <div class="center">
              
                  <button  class="btn btn-primary" type="submit ">UPDATE</button>
                  
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