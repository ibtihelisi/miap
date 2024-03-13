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
              <h1 class="mt-3">liste Plans</h1>
              <hr>
      
          </div>
      
          <a data-bs-toggle="modal" data-bs-target="#exampleModal" class="btn btn-primary" class="mt-3">Ajouter Plan</a>


              <div class="mt-3">

                <div id="tableExample2" data-list="{&quot;value#s&quot;:[&quot;#&quot;,&quot;Nom Subscription&quot;,&quot;Description Subscription&quot;,&quot;Period Subscription&quot;,&quot;Ordering Subscription&quot;],&quot;page&quot;:5,&quot;pagination&quot;:true}">
                  <div class="table-responsive scrollbar">
                    <table class="table table-bordered table-striped fs--1 mb-0">
                      <thead class="bg-200 text-900">
                        <tr>
                          <th class="sort" data-sort="#">#</th>
                          <th class="sort" data-sort="Nom Subscription">Nom Subscription</th>
                          <th class="sort" data-sort="Description Subscription">Description Subscription </th>
                          <th class="sort" data-sort="Period Subscription">Period Subscription </th>
                          <th class="sort" data-sort="Ordering Subscription">Ordering Subscription</th>
                          <th class="sort" data-sort="Action">Action</th>
                        
                        </tr>
                      </thead>
                      <tbody class="list">
                        @foreach ($subscriptions as $index => $s)
                        <tr>
                          <th scope="row">{{ $index }}</th>
                          <td class="Nom Subscription">{{ $s->name }}</td>
                          <td class="Description Subscription">{{ $s->description }}</td>
                          <td class="Period Subscription">{{ $s->period }}</td>
                          <td class="Ordering Subscription">{{ $s->ordering }}</td>
                          <td class="Action">
                            <a  data-bs-toggle="modal" data-bs-target="#editSubscription{{ $s->id }}" class="btn btn-success"> Modifier</a>

                            <a onclick="return confirm('voulez-vouz supprimer cette Subscription ? ') "
                                href="/subscription/delete/{{ $s->id }}" class="btn btn-danger">
                                Supprimer</a>

                          </td>
                        </tr>
                      @endforeach
                     </tbody>
                    </table>


                     <!-- Modal Ajout-->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
        style="display: none;" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add Plan</h5><button class="btn p-1"
                        type="button" data-bs-dismiss="modal" aria-label="Close"><svg
                            class="svg-inline--fa fa-times fa-w-11 fs--1" aria-hidden="true" focusable="false"
                            data-prefix="fas" data-icon="times" role="img"
                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 352 512" data-fa-i2svg="">
                            <path fill="currentColor"
                                d="M242.72 256l100.07-100.07c12.28-12.28 12.28-32.19 0-44.48l-22.24-22.24c-12.28-12.28-32.19-12.28-44.48 0L176 189.28 75.93 89.21c-12.28-12.28-32.19-12.28-44.48 0L9.21 111.45c-12.28 12.28-12.28 32.19 0 44.48L109.28 256 9.21 356.07c-12.28 12.28-12.28 32.19 0 44.48l22.24 22.24c12.28 12.28 32.2 12.28 44.48 0L176 322.72l100.07 100.07c12.28 12.28 32.2 12.28 44.48 0l22.24-22.24c12.28-12.28 12.28-32.19 0-44.48L242.72 256z">
                            </path>
                        </svg><!-- <span class="fas fa-times fs--1"></span> Font Awesome fontawesome.com --></button>
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
                      

                    <div class="modal-footer">
                          <button class="btn btn-primary" type="submit ">Okay</button>
                          <button class="btn btn-outline-primary" type="button"
                              data-bs-dismiss="modal">Cancel</button>
                    </div>
                    
                 
        
                </form>
            </div>
        </div>
       </div>







                  <div class="d-flex justify-content-center mt-3"><button class="btn btn-sm btn-falcon-default me-1 disabled" type="button" title="Previous" data-list-pagination="prev" disabled=""><svg class="svg-inline--fa fa-chevron-left fa-w-10" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="chevron-left" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" data-fa-i2svg=""><path fill="currentColor" d="M34.52 239.03L228.87 44.69c9.37-9.37 24.57-9.37 33.94 0l22.67 22.67c9.36 9.36 9.37 24.52.04 33.9L131.49 256l154.02 154.75c9.34 9.38 9.32 24.54-.04 33.9l-22.67 22.67c-9.37 9.37-24.57 9.37-33.94 0L34.52 272.97c-9.37-9.37-9.37-24.57 0-33.94z"></path></svg><!-- <span class="fas fa-chevron-left"></span> Font Awesome fontawesome.com --></button>
                    <ul class="pagination mb-0"><li class="active"><button class="page" type="button" data-i="1" data-page="5">1</button></li><li><button class="page" type="button" data-i="2" data-page="5">2</button></li><li><button class="page" type="button" data-i="3" data-page="5">3</button></li></ul><button class="btn btn-sm btn-falcon-default ms-1" type="button" title="Next" data-list-pagination="next"><svg class="svg-inline--fa fa-chevron-right fa-w-10" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="chevron-right" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" data-fa-i2svg=""><path fill="currentColor" d="M285.476 272.971L91.132 467.314c-9.373 9.373-24.569 9.373-33.941 0l-22.667-22.667c-9.357-9.357-9.375-24.522-.04-33.901L188.505 256 34.484 101.255c-9.335-9.379-9.317-24.544.04-33.901l22.667-22.667c9.373-9.373 24.569-9.373 33.941 0L285.475 239.03c9.373 9.372 9.373 24.568.001 33.941z"></path></svg><!-- <span class="fas fa-chevron-right"></span> Font Awesome fontawesome.com --></button>
                  </div>
                </div>
              </div>
                
              


          </div>
          
          
          
          <footer class="footer">
            <div class="row g-0 justify-content-between align-items-center h-100 mb-3">
              <div class="col-12 col-sm-auto text-center">
                <p class="mb-0 text-900">Thank you for creating with phoenix<span class="d-none d-sm-inline-block"></span><span class="mx-1">|</span><br class="d-sm-none">2022 &copy; <a href="https://themewagon.com">Themewagon</a></p>
              </div>
              <div class="col-12 col-sm-auto text-center">
                <p class="mb-0 text-600">v1.1.0</p>
              </div>
            </div>
          </footer>
        </div>
      </div>
    </main>


  


 
     
    <script src="{{asset('dashassets/js/phoenix.js')}}"></script>
    <script src="{{asset('dashassets/js/ecommerce-dashboard.js')}}"></script>
  </body>

</html>