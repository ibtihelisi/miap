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


        @include('inc.client.sidebar')
        @include('inc.client.nav')
        
        
        <div class="content">
          <div class="pb-5">

            <div class="container">
              <h1 class="mt-3">New table</h1>
              <hr>
      
          </div>
          <div class="row py-2">
            <div class="col-md-14 text-end">
                <a class="btn btn-primary" href="/restaurant/table">Back </a>
                
                
            
            </div>

            
         </div>
        
        
        
        
          
          
         <form action="" method="post">

            @csrf

          
            <div class="modal-body">
              <!--espace name-->
                <div class="mb-3">
                    <label class="form-group " for="exampleFormControlInput1"> Name</label>
                    <input name="name" class="form-control" id="exampleFormControlInput1" type="text" placeholder=" Enter table name or internal id (exemple:Table 2)" required >
                    @error('name')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                  @enderror
                
                </div>

          

                <!--espace size-->
                <div class="col-md-12">
                  <div id="form-group-features" class="form-group  ">
                       <label class="form-control-label" for="features">Size</label>
                       <input   step="1"    type="text" name="size" id="features" class="form-control form-control   " placeholder="Enter table person size (exemple: 4)" value=""  required >
                  </div>
                  @error('size')
                    <div class="alert alert-danger">
                       {{ $message }}
                     </div>
                  @enderror
              </div> 
              <br/>

                <!--espace area-->
              <div id="form-group-price" class="form-group  ">
                <label class="form-control-label" for="area">Area</label>
                </br>
                <select name="area" id="restaurantarea_id">
                    <option disabled="" selected="" value="" data-select2-id="2"> Select Area </option>
                    
                                                            <option value="1" data-select2-id="14">Inside</option>
                                                    
                    
                                                            <option value="2" data-select2-id="15">Terrasse</option>
                                                    
                        </select><span class="select2 select2-container select2-container--default select2-container--below" dir="ltr" data-select2-id="1" style="width: 431.333px;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-restoarea_id-container"><span class="select2-selection__rendered" id="select2-restoarea_id-container" role="textbox" aria-readonly="true" title=" Select Area ">  </span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
            
                     @error('area')
                  <div class="alert alert-danger">
                      {{ $message }}
                  </div>
                @enderror
              </div>
              <br/>



              

              
              
               
                
             

             
                
                
              
              

            <div class="center">
              
                  <button  class="btn btn-success" type="submit ">INSERT</button>
                  
            </div>
            
         

        </form>
          
          
          
          
         
        
      </div>
    </main>
   

  


 
     
    <script src="{{asset('dashassets/js/phoenix.js')}}"></script>
    <script src="{{asset('dashassets/js/ecommerce-dashboard.js')}}"></script>
  </body>

</html>