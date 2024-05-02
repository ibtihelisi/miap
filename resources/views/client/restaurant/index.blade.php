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
          
          <div class="container-fluid">
            <div class="nav-wrapper">
                <ul class="nav nav-pills nav-fill flex-column flex-md-row" id="res_management" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link mb-sm-3 mb-md-0 active" id="tabs-management-main" data-bs-toggle="pill" data-bs-target="#management" type="button" role="tab" aria-controls="management" aria-selected="true">
                          <i class="fas fa-award"></i>
                          Restaurant Management
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link mb-sm-3 mb-md-0" id="tabs-hours-main" data-bs-toggle="pill" data-bs-target="#hours" type="button" role="tab" aria-controls="hours" aria-selected="false">
                          <i class="far fa-clock"></i> Working Hours
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link mb-sm-3 mb-md-0" id="tabs-location-main" data-bs-toggle="pill" data-bs-target="#location" type="button" role="tab" aria-controls="location" aria-selected="false">
                          <i class="fas fa-map-marker-alt"></i> Location
                        </button>
                    </li>
                   
                </ul>
              </br>
                <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade show active" id="management" role="tabpanel" aria-labelledby="tabs-management-main">





                       <!--contenu de l'onglet Restaurants management!-->
                      <div class="col-md-12">
                        <div class="custom">
                            <div class="d-flex justify-content-between align-items-center">
                                <h1 class="mt-3">Restaurant Management</h1>
                                
                            </div>
                            <hr>
                            
                        
                  
     
                           <form action="/restaurant/update/{{Auth::user()->id}}" method="post" enctype="multipart/form-data">


                               @csrf

                           
                               <div class="modal-body">
                                <!--espace name-->
                                  <h6 class="col-md-2 col-form-label text-md-end " >Restaurant information</h6>
                                   <div class="mb-3">

                                       <label class="col-md-0 col-form-label text-md-end" for="exampleFormControlInput1"> Restaurant Name</label>
                                       <input name="restaurant_name"   value ="{{Auth::user()->restaurant_name}}"  class="form-control" id="exampleFormControlInput1" type="text"  required placeholder=" your Restaurant Name ......" >
                                       @error('restaurant_name')
                                          <div class="alert alert-danger">
                                             {{ $message }}
                                          </div>
                                       @enderror
                                   
                                   </div> 


                                   <div class="mb-3">

                                      <label class="col-md-0 col-form-label text-md-end" for="exampleFormControlInput1"> Restaurant description</label>
                                      <input name="desc"   value ="{{Auth::user()->desc}}"  class="form-control" id="exampleFormControlInput1" type="text"   placeholder=" your Restaurant Description ......" >
                                      @error('desc')
                                        <div class="alert alert-danger">
                                            {{ $message }}
                                        </div>
                                      @enderror
                                
                                   </div> 



                                    <div class="mb-3">

                                      <label class="col-md-0 col-form-label text-md-end" for="exampleFormControlInput1"> Restaurant address</label>
                                      <input name="location"   value ="{{Auth::user()->location}}"  class="form-control" id="exampleFormControlInput1" type="text"    placeholder=" your rRestaurant Adress ......">
                                      @error('location')
                                        <div class="alert alert-danger">
                                            {{ $message }}
                                        </div>
                                      @enderror
                                
                                    </div> 



                                    <div class=" mb-3">
                                      <label for="owner_phone" class="col-md-0 col-form-label text-md-end">{{ __('Owner Phone Number') }}</label>
              
                                      
                                          <input id="owner_phone" type="number" value="{{Auth::user()->owner_phone}}" class="form-control @error('owner_phone') is-invalid @enderror" name="owner_phone"  placeholder=" Owner Phone number here..." required autocomplete="owner_phone" >
              
                                          
                                      
                                    </div>


                                  

                                  
                                    <div class="center">


                                      <div class="mb-3">
                                        <label class=" col-md-0 col-form-label text-md-end " for="exampleFormControlInput1">Existing Photo</label>
                                        <div>
                                          
                                          <img src="{{asset('uploads')}}/{{Auth::user()->logo}}" alt="" width="200">
                                        </div>
                                        @error('logo')
                                        <div class="alert alert-danger">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    
                                      </div>
                      
                                      <!--espace change photo-->
                                      <div class="mb-3">
                                          <label class="col-md-0 col-form-label text-md-end" for="exampleFormControlInput1">Change Photo</label>
                                          <div>
                                          <input class="btn btn-outline-secondary fileinput-exists" type="file"  name="logo"    >
                                          </div>
                                          @error('logo')
                                          <div class="alert alert-danger">
                                            {{ $message }}
                                          </div>
                                          @enderror
                                    
                                        </div> 






                  


                                      
                


                                        <br>
                                      
                                  
                                          <button  class="btn btn-success" type="submit ">UPDATE</button>
                                      
                                      </div>
                                  
                            
                                    


                                    
                                    </div>


                                    
                                  

                               
                       
                           </form>
     
     
                           
                   
   
                         </div>
                         </div>
                </div>
                        
                        
                      
                    
                  
                  
                        


                      
                    
                    <div class="tab-pane fade" id="hours" role="tabpanel" aria-labelledby="tabs-hours-main">   



                        <!--contenu de l'onglet hours!-->

                        
                        <div class="col-md-12">
                          <div class="custom">
                              <div class="d-flex justify-content-between align-items-center">
                                  <h1 class="mt-3">Working Hours</h1>
                                  <a class="btn btn-primary me-1" href="/admin/restaurants" style="margin-left: auto;">Back to list</a>
                                 
                              </div>
                              <hr>
                              
                              <div class="card-body">
                                <div class="tab-content" id="shifts">
                                                            <div class="tab-pane fade show active" id="shift18" role="tabpanel" aria-labelledby="tabs-icons-text-1-tab">
                                <form method="post" action="https://zebra-qr.com/restaurant/workinghours" autocomplete="off" enctype="multipart/form-data">
                                    <input type="hidden" name="_token" value="ieVvhOnMvGHMnXSNvhsCuBH0hS6cHCGK6L7x4Y7Q" autocomplete="off">                    <input type="hidden" id="rid" name="rid" value="17">
                                    <input type="hidden" id="shift_id" name="shift_id" value="18">
                                    <div class="form-group">
                                                                <br>
                                        <div class="row">
                                          <div class="col-4">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" name="days" class="custom-control-input" id="day0_shift18" value="0" valuetwo="18" checked="checked">
                                                <label class="custom-control-label" for="day0_shift18">Monday</label>
                                            </div>
                                          </div>
                                          <div class="col-3">
                                              <!-- Champ de saisie de temps avec Flatpickr -->
                                            <div class="input-group">
                                              <input id="from_shift18" name="from_shift18" class="flatpickr datetimepicker form-control" placeholder="Start Time" type="text">
                                              <div class="input-group-append">
                                                  <span class="input-group-text"><i class="far fa-clock"></i></span>
                                              </div>
                                            </div>
                                          </div>

                                        
                                      
                                      
                                            <div class="col-2 text-center">
                                               <p class="display-4">-</p>
                                            </div>




                                            <div class="col-3">
                                              <!-- Champ de saisie de temps avec Flatpickr -->
                                            <div class="input-group">
                                              <input id="to_shift18" name="to_shift18" class="flatpickr datetimepicker form-control" placeholder="End Time" type="text" >
                                              <div class="input-group-append">
                                                  <span class="input-group-text"><i class="far fa-clock"></i></span>
                                              </div>
                                            </div>
                                          </div>
                                          
                                        </div>
                                                                <br>
                                        <div class="row">
                                            <div class="col-4">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" name="days" class="custom-control-input" id="day1_shift18" value="1" valuetwo="18" checked="checked">
                                                    <label class="custom-control-label" for="day1_shift18">Tuesday</label>
                                                </div>
                                            </div>
                                            <div class="col-3">
                                              <!-- Champ de saisie de temps avec Flatpickr -->
                                            <div class="input-group">
                                              <input id="from_shift18" name="from_shift18" class="flatpickr datetimepicker form-control" placeholder="Start Time" type="text">
                                              <div class="input-group-append">
                                                  <span class="input-group-text"><i class="far fa-clock"></i></span>
                                              </div>
                                            </div>
                                          </div>

                                        
                                      
                                      
                                            <div class="col-2 text-center">
                                               <p class="display-4">-</p>
                                            </div>




                                            <div class="col-3">
                                              <!-- Champ de saisie de temps avec Flatpickr -->
                                            <div class="input-group">
                                              <input id="to_shift18" name="to_shift18" class="flatpickr datetimepicker form-control" placeholder="End Time" type="text" >
                                              <div class="input-group-append">
                                                  <span class="input-group-text"><i class="far fa-clock"></i></span>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                                                <br>
                                        <div class="row">
                                            <div class="col-4">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" name="days" class="custom-control-input" id="day2_shift18" value="2" valuetwo="18" checked="checked">
                                                    <label class="custom-control-label" for="day2_shift18">Wednesday</label>
                                                </div>
                                            </div>
                                            <div class="col-3">
                                              <!-- Champ de saisie de temps avec Flatpickr -->
                                            <div class="input-group">
                                              <input id="from_shift18" name="from_shift18" class="flatpickr datetimepicker form-control" placeholder="Start Time" type="text">
                                              <div class="input-group-append">
                                                  <span class="input-group-text"><i class="far fa-clock"></i></span>
                                              </div>
                                            </div>
                                          </div>

                                        
                                      
                                      
                                            <div class="col-2 text-center">
                                               <p class="display-4">-</p>
                                            </div>




                                            <div class="col-3">
                                              <!-- Champ de saisie de temps avec Flatpickr -->
                                            <div class="input-group">
                                              <input id="to_shift18" name="to_shift18" class="flatpickr datetimepicker form-control" placeholder="End Time" type="text" >
                                              <div class="input-group-append">
                                                  <span class="input-group-text"><i class="far fa-clock"></i></span>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                                                <br>
                                        <div class="row">
                                            <div class="col-4">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" name="days" class="custom-control-input" id="day3_shift18" value="3" valuetwo="18" checked="checked">
                                                    <label class="custom-control-label" for="day3_shift18">Thursday</label>
                                                </div>
                                            </div>
                                            <div class="col-3">
                                              <!-- Champ de saisie de temps avec Flatpickr -->
                                            <div class="input-group">
                                              <input id="from_shift18" name="from_shift18" class="flatpickr datetimepicker form-control" placeholder="Start Time" type="text">
                                              <div class="input-group-append">
                                                  <span class="input-group-text"><i class="far fa-clock"></i></span>
                                              </div>
                                            </div>
                                          </div>

                                        
                                      
                                      
                                            <div class="col-2 text-center">
                                               <p class="display-4">-</p>
                                            </div>




                                            <div class="col-3">
                                              <!-- Champ de saisie de temps avec Flatpickr -->
                                            <div class="input-group">
                                              <input id="to_shift18" name="to_shift18" class="flatpickr datetimepicker form-control" placeholder="End Time" type="text" >
                                              <div class="input-group-append">
                                                  <span class="input-group-text"><i class="far fa-clock"></i></span>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                                                <br>
                                        <div class="row">
                                            <div class="col-4">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" name="days" class="custom-control-input" id="day4_shift18" value="4" valuetwo="18" checked="checked">
                                                    <label class="custom-control-label" for="day4_shift18">Friday</label>
                                                </div>
                                            </div>
                                            <div class="col-3">
                                              <!-- Champ de saisie de temps avec Flatpickr -->
                                            <div class="input-group">
                                              <input id="from_shift18" name="from_shift18" class="flatpickr datetimepicker form-control" placeholder="Start Time" type="text">
                                              <div class="input-group-append">
                                                  <span class="input-group-text"><i class="far fa-clock"></i></span>
                                              </div>
                                            </div>
                                          </div>

                                        
                                      
                                      
                                            <div class="col-2 text-center">
                                               <p class="display-4">-</p>
                                            </div>




                                            <div class="col-3">
                                              <!-- Champ de saisie de temps avec Flatpickr -->
                                            <div class="input-group">
                                              <input id="to_shift18" name="to_shift18" class="flatpickr datetimepicker form-control" placeholder="End Time" type="text" >
                                              <div class="input-group-append">
                                                  <span class="input-group-text"><i class="far fa-clock"></i></span>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                                                <br>
                                        <div class="row">
                                            <div class="col-4">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" name="days" class="custom-control-input" id="day5_shift18" value="5" valuetwo="18" checked="checked">
                                                    <label class="custom-control-label" for="day5_shift18">Saturday</label>
                                                </div>
                                            </div>
                                            <div class="col-3">
                                              <!-- Champ de saisie de temps avec Flatpickr -->
                                            <div class="input-group">
                                              <input id="from_shift18" name="from_shift18" class="flatpickr datetimepicker form-control" placeholder="Start Time" type="text">
                                              <div class="input-group-append">
                                                  <span class="input-group-text"><i class="far fa-clock"></i></span>
                                              </div>
                                            </div>
                                          </div>

                                        
                                      
                                      
                                            <div class="col-2 text-center">
                                               <p class="display-4">-</p>
                                            </div>




                                            <div class="col-3">
                                              <!-- Champ de saisie de temps avec Flatpickr -->
                                            <div class="input-group">
                                              <input id="to_shift18" name="to_shift18" class="flatpickr datetimepicker form-control" placeholder="End Time" type="text" >
                                              <div class="input-group-append">
                                                  <span class="input-group-text"><i class="far fa-clock"></i></span>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                                                <br>
                                        <div class="row">
                                            <div class="col-4">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" name="days" class="custom-control-input" id="day6_shift18" value="6" valuetwo="18" checked="checked">
                                                    <label class="custom-control-label" for="day6_shift18">Sunday</label>
                                                </div>
                                            </div>
                                            <div class="col-3">
                                              <!-- Champ de saisie de temps avec Flatpickr -->
                                            <div class="input-group">
                                              <input id="from_shift18" name="from_shift18" class="flatpickr datetimepicker form-control" placeholder="Start Time" type="text">
                                              <div class="input-group-append">
                                                  <span class="input-group-text"><i class="far fa-clock"></i></span>
                                              </div>
                                            </div>
                                          </div>

                                        
                                      
                                      
                                            <div class="col-2 text-center">
                                               <p class="display-4">-</p>
                                            </div>




                                            <div class="col-3">
                                              <!-- Champ de saisie de temps avec Flatpickr -->
                                            <div class="input-group">
                                              <input id="to_shift18" name="to_shift18" class="flatpickr datetimepicker form-control" placeholder="End Time" type="text" >
                                              <div class="input-group-append">
                                                  <span class="input-group-text"><i class="far fa-clock"></i></span>
                                              </div>
                                            </div>
                                          </div>
                                                            </div>
                                    <div class="text-center">
                                                                <button type="submit" class="btn btn-success mt-4">Save</button>   
                                    </div>
                                </form>
                            </div>
                                </div>
                        
                        </div>
                             
                     
     
                         </div>
                        </div>

                    </div>
                    <div class="tab-pane fade" id="location" role="tabpanel" aria-labelledby="tabs-location-main"> 
                      
                      
                      
                        
                    
                    
                    
                    
                    
                    
                    
                    
            </div>
        </div>
        
        
        
        
        
        
        
        
          
          
        
          
          
          
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
   

  


 
      <!-- Inclure le fichier JavaScript de Flatpickr -->
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
    <!-- Initialisation de Flatpickr pour les champs de saisie de temps -->
    <script>
      document.addEventListener('DOMContentLoaded', function() {
          // Initialisation de Flatpickr pour le champ de la première colonne
          flatpickr('#from_shift18', {
              enableTime: true,
              noCalendar: true,
              dateFormat: "H:i",
              defaultDate: "00:01"
          });
  
          // Initialisation de Flatpickr pour le champ de la deuxième colonne
          flatpickr('#to_shift18', {
              enableTime: true,
              noCalendar: true,
              dateFormat: "H:i",
              defaultDate: "23:59"
          });
      });
  </script>
     
    <script src="{{asset('dashassets/js/phoenix.js')}}"></script>
    <script src="{{asset('dashassets/js/ecommerce-dashboard.js')}}"></script>
  </body>

</html>