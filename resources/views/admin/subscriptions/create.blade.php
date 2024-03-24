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
              <h1 class="mt-3">Plans  Management</h1>
              <hr>
      
          </div>
          <div class="row py-2">
            <div class="col-md-14 text-end">
                <a class="btn btn-primary" href="/admin/subscriptions">Back to plans </a>
                
                
            
            </div>

            
         </div>
        
        
        
        
          
          
         <form action="/subscription/add" method="post">

            @csrf

          
            <div class="modal-body">
              <!--espace name-->
                <div class="mb-3">
                    <label class="form-label" for="exampleFormControlInput1"> Name</label>
                    <input name="name" class="form-control" id="exampleFormControlInput1" type="text" placeholder=" Plan name" required >
                    @error('name')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                  @enderror
                
                </div>

                <!--espace description-->
                <div class="mb-0">
                    <label class="form-label" for="exampleTextarea">Plan Description </label>
                    <textarea name="description" class="form-control" rows="3" placeholder=" Plan description...."required > </textarea>


                    @error('description')
                        <div class="alert alert-danger">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <br/>

                <!--espace features_list-->
                <div class="col-md-12">
                  <div id="form-group-features" class="form-group  ">
                       <label class="form-control-label" for="features">Features list (separate features with comma)</label>
                       <input   step=".01"    type="text" name="features_list" id="features" class="form-control form-control   " placeholder="Plan Features comma separated..." value=""  required >
                  </div>
                  @error('features_list')
                    <div class="alert alert-danger">
                       {{ $message }}
                     </div>
                  @enderror
              </div> 
              <br/>

                <!--espace price-->
              <div id="form-group-price" class="form-group  ">
                <label class="form-control-label" for="price">Price</label>
                <input   step=".01"    type="number" name="price" id="price" class="form-control form-control   " placeholder="Plan price" value="" required >
                @error('price')
                  <div class="alert alert-danger">
                      {{ $message }}
                  </div>
                @enderror
              </div>
              <br/>

              
              
                <!--espace items_limit-->
              <div class="col-md-6">
                <div id="form-group-limit_items" class="form-group  ">
                 <label class="form-control-label" for="limit_items">Items limit</label>
                 <input   step=".01"    type="number" name="items_limit" id="limit_items" class="form-control form-control   " placeholder="Number of items" value=""  required >
                 @error('items_limit')
                    <div class="alert alert-danger">
                       {{ $message }}
                    </div>
                 @enderror
                 <small class="text-muted"><strong>0 is unlimited numbers of items</strong></small>
                </div>
              </div>
                
             

              <br/>
              <div class="row">
                <!-- epace plan period -->
                <div class="col-md-6">
                    <label class="form-control-label">Plan period</label>
                    <div class="custom-control custom-radio mb-3">
                        <input name="period" class="custom-control-input" id="monthly"   checked   value="monthly" type="radio" required >
                        <label class="custom-control-label" for="monthly">Monthly</label>
                    </div>
                    <div class="custom-control custom-radio mb-3">
                        <input name="period" class="custom-control-input" id="anually" value="anually"  type="radio" required >
                        <label class="custom-control-label" for="anually">Anually</label>
                    </div>
                </div>
                
                
                <!-- espace ordering -->
                    <div class="col-md-6">
                        <label class="form-control-label">Ordering</label>
                        <div class="custom-control custom-radio mb-3">
                            <input name="ordering" class="custom-control-input" id="enabled" value="enabled"   checked   type="radio" required >
                            <label class="custom-control-label" for="enabled">Enabled</label>
                        </div>
                        <div class="custom-control custom-radio mb-3">
                            <input name="ordering" class="custom-control-input" id="disabled" value="disabled"  type="radio" required >
                            <label class="custom-control-label" for="disabled">Disabled</label>
                        </div>
                    </div>
                   
                    </div>
                <!-- espace order limit -->
                <div class="col-md-6 mt-3">
                    <div id="form-group-limit_orders" class="form-group  ">
                     <label class="form-control-label" for="limit_orders">Orders limit per plan period</label>
                     <input   step=".01"    type="number" name="orders_limit" id="limit_orders" class="form-control form-control   " placeholder="Number of orders per period" value="" required  >
                     <small class="text-muted"><strong>0 is unlimited numbers of orders per period</strong></small>
                    </div>
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