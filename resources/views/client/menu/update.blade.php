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

   
.custom-toggle input {
  display: none;
}
.custom-toggle {
  position: relative;
  display: inline-block;
  width: 50px;
  height: 1.5rem;
}
.custom-toggle input:checked + .custom-toggle-slider::before {
  transform: translateX(1.625rem);
  background: #222834;
}
.custom-toggle input:checked + .custom-toggle-slider {
  border: 1px solid #222834;
}

.custom-toggle-slider::before {
  position: absolute;
  content: "";
  height: 18px;
  width: 18px;
  left: 2px;
  bottom: 2px;
  border-radius: 50% !important;
  background-color: #222834;
  transition: all .2s cubic-bezier(.68,-.55,.265,1.55);
}
.custom-toggle-slider {
  position: absolute;
  top: 0;
  right: 0;
  bottom: 0;
  left: 0;
  cursor: pointer;
  border: 1px solid #cad1d7;
  border-radius: 34px !important;
  background-color: transparent;
}


      .center {
    text-align: center;
  }

     /* Style pour encadrer les sections */
     .section-container {
      border: 1px solid #ccc;
      padding: 20px;
      margin-bottom: 20px;
    }


   
    .card-title {
      font-size: 1.5rem; /* Taille du titre de la carte */
      margin-bottom: 15px; /* Marge inférieure du titre */
    }


    .custom {
            border: 1px solid #ccc; /* Bordure */
            border-radius: 10px; /* Coins arrondis */
            padding: 20px; /* Espacement interne */
            margin-bottom: 20px; /* Marge inférieure */
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Ombre */
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
                    <div class="row">
                        <div class="col-md-6">
                             <div class="custom">
                                <div class="d-flex justify-content-between align-items-center">
                                 <h1 class="mt-3">Item Management</h1>
                                 <a class="btn btn-primary " href="/restaurant/menu" style="margin-left: auto;">Back to items </a>
                                 
                                </div>
                                <hr>
          
                               

            
                               
        
        
        
                                
          
                                <form action="/restaurant/menu/item/update/{{$items->id}}" method="post" enctype="multipart/form-d">
    

                                    @csrf

                                
                                    <div class="modal-body">
                                    <!--espace name-->
                                    <h6 class="col-md-2 col-form-label text-md-end " >Item information</h6>
                                        <div class="mb-3">

                                            <label class="col-md-0 col-form-label text-md-end" for="exampleFormControlInput1"> Item Name</label>
                                            <input name="name"   value ="{{$items->name}}"  class="form-control" id="exampleFormControlInput1" type="text"  required  >
                                            @error('name')
                                            <div class="alert alert-danger">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                        
                                        </div> 

                                        <div class="mb-3">

                                            <label class="col-md-0 col-form-label text-md-end" for="exampleFormControlInput1"> 
                                                Category</label>

                                                <select name="category" id="" class="form-control">
                                                
                                                    <option value="">cat1</option>
                                                    
                                                    <option value="">cat2</option>
                                                    
                                                    
                                                    
                                                </select>

                                            @error('category')
                                            <div class="alert alert-danger">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                        
                                        </div>


                                        <div class="mb-3">

                                            <label class="col-md-0 col-form-label text-md-end" for="exampleFormControlInput1"> Item Description</label>
                                            <textarea id="item_description" name="item_description" class="form-control form-control-alternative"  value="" required="" autofocus="" rows="3"></textarea>
                                            @error('item_description')
                                            <div class="alert alert-danger">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                        
                                        </div> 


                                        <div class="mb-3">

                                            <div class="form-group text-center">
                                                <label class="form-control-label" for="input-name">Item Image</label>
                                                    <div class="text-center">
                                                    <div class="fileinput fileinput-new" data-provides="fileinput">
                                                        <div class="fileinput-preview img-thumbnail" data-trigger="fileinput" style="width: 290px; height:200">
                                                        <img src="/uploads/restorants/39e04f62-602e-4f80-997d-49ac271569e7_large.jpg" alt="...">
                                                    </div>
                                                        <div>
                                                            <span class="btn btn-outline-secondary btn-file">
                                                            <span class="fileinput-new">Select image</span>
                                                            <span class="fileinput-exists">Change</span>
                                                            
                                                           
                                                            <input type="file" name="item_image" accept="image/x-png,image/png,image/gif,image/jpeg">
                                                            </span>
                                                            <a href="#" class="btn btn-outline-secondary fileinput-exists" data-dismiss="fileinput">Remove</a>
                                                        </div>
                                                    </div>
                                                   
                                                    
                                                </div>
                                                </div>
                                        </div> 


                                        
                                        <div class="mb-3">

                                            <label class="col-md-0 col-form-label text-md-end" for="exampleFormControlInput1"> Item image</label>
                                            <input name="name_res" class="form-control" id="exampleFormControlInput1" type="text"  required >
                                            @error('name_res')
                                            <div class="alert alert-danger">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                        
                                        </div> 


                                        <div class="form-group">
                            
                                            <label class="col-md-0 col-form-label text-md-end" for="exampleFormControlInput1"> Item image</label>
                                            <label class="custom-toggle" style="float: right">
                                                <input type="checkbox" name="itemAvailable" id="itemAvailable" checked="">
                                                <span class="custom-toggle-slider rounded-circle"></span>
                                            </label>
                                        </div>

                                        <div class="center">
                                    
                                        <button  class="btn btn-success" type="submit ">UPDATE</button>
                                        
                                        </div>
                                    
                                
                                    </div>
                                    
                            
                                </form>
          
          
                                <div class="text-center">
                                    <form action="/restaurant/menu/item/delete/{$item->id}" method="get">
                                        <input type="hidden" name="_token"  autocomplete="off">                      
                                                      <input type="hidden" name="_method" value="delete">                                    <button type="button" class="btn btn-danger mt-4" onclick="confirm('Are you sure you want to delete this item?') ? this.parentElement.submit() : ''">Delete</button>
                                    </form>
                                </div>
                        
        
                            </div>
                        </div>





    

                        <div class="col-md-6">
                            <div class="custom">
                                <div class="d-flex justify-content-between align-items-center">
                                <h1 class="mt-3">Extras</h1>
                                <a class="btn btn-primary" href="/restaurant/menu">Add </a>
                                
            
          
                                
                                        
                                        
                                        
                                    
                            </div>
                            <hr>

                        
                            

                            
      
      
      
      
        
        
                                <form action="/restaurant/add" method="post">

                                    @csrf

                                    
                                        <div class="modal-body">
                                                <!--espace name-->
                                    
                                            <div class="table-responsive">
                                                <table class="table align-items-center">
                                                    <thead class="thead-light">
                                                        <tr>
                                                            <th scope="col" class="sort" data-sort="name">Name</th>
                                                            <th scope="col" class="sort" data-sort="name">Price</th>
                                                                                                        <th scope="col"></th>
                                                        </tr>
                                                    </thead>
                                                    <tbody class="list">
                                                        <script>
                                                            var extras=[{"id":16,"item_id":6,"price":1.2,"name":"Extra cheese","created_at":"2024-04-04T00:00:18.000000Z","updated_at":"2024-04-04T00:00:18.000000Z","deleted_at":null,"extra_for_all_variants":1,"variants":[]},{"id":17,"item_id":6,"price":0.3,"name":"Extra olives","created_at":"2024-04-04T00:00:18.000000Z","updated_at":"2024-04-04T00:00:18.000000Z","deleted_at":null,"extra_for_all_variants":1,"variants":[]},{"id":18,"item_id":6,"price":1.5,"name":"Tuna","created_at":"2024-04-04T00:00:18.000000Z","updated_at":"2024-04-04T00:00:18.000000Z","deleted_at":null,"extra_for_all_variants":1,"variants":[]}];
                                                            
                                                        </script>
                                                                                                    <tr>
                                                                <th scope="row">Extra cheese</th>
                                                                <td class="budget">$1.20</td>
                                                                                                                <td class="text-right">
                                                                    <div class="dropdown">
                                                                        <a class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                            <i class="fas fa-ellipsis-v"></i>
                                                                        </a>
                                                                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">

                                                                            <button type="button" class="dropdown-item" data-toggle="modal" data-target="#modal-new-extras" onclick="(setExtrasId(16))">Edit</button>
                                                                            <form action="https://zebra-qr.com/6/extras/16" method="post">
                                                                                <input type="hidden" name="_token" value="NjoBZWcjfc9gKOq7NVzzPBss4TdhdPyBC8yWpdyK" autocomplete="off">                                                                <input type="hidden" name="_method" value="delete">
                                                                                <button type="button" class="dropdown-item" onclick="confirm('Are you sure you want to delete this extras?') ? this.parentElement.submit() : ''">
                                                                                    Delete
                                                                                </button>
                                                                            </form>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                                                                    <tr>
                                                                <th scope="row">Extra olives</th>
                                                                <td class="budget">$0.30</td>
                                                                                                                <td class="text-right">
                                                                    <div class="dropdown">
                                                                        <a class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                            <i class="fas fa-ellipsis-v"></i>
                                                                        </a>
                                                                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">

                                                                            <button type="button" class="dropdown-item" data-toggle="modal" data-target="#modal-new-extras" onclick="(setExtrasId(17))">Edit</button>
                                                                            <form action="https://zebra-qr.com/6/extras/17" method="post">
                                                                                <input type="hidden" name="_token" value="NjoBZWcjfc9gKOq7NVzzPBss4TdhdPyBC8yWpdyK" autocomplete="off">                                                                <input type="hidden" name="_method" value="delete">
                                                                                <button type="button" class="dropdown-item" onclick="confirm('Are you sure you want to delete this extras?') ? this.parentElement.submit() : ''">
                                                                                    Delete
                                                                                </button>
                                                                            </form>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                                                                    <tr>
                                                                <th scope="row">Tuna</th>
                                                                <td class="budget">$1.50</td>
                                                                                                                <td class="text-right">
                                                                    <div class="dropdown">
                                                                        <a class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                            <i class="fas fa-ellipsis-v"></i>
                                                                        </a>
                                                                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">

                                                                            <button type="button" class="dropdown-item" data-toggle="modal" data-target="#modal-new-extras" onclick="(setExtrasId(18))">Edit</button>
                                                                            <form action="https://zebra-qr.com/6/extras/18" method="post">
                                                                                <input type="hidden" name="_token" value="NjoBZWcjfc9gKOq7NVzzPBss4TdhdPyBC8yWpdyK" autocomplete="off">                                                                <input type="hidden" name="_method" value="delete">
                                                                                <button type="button" class="dropdown-item" onclick="confirm('Are you sure you want to delete this extras?') ? this.parentElement.submit() : ''">
                                                                                    Delete
                                                                                </button>
                                                                            </form>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                                                            </tbody>
                                                </table>
                                            </div>
                                        </div>
                                
                                    
                                
                                    </form>
                                    
                                    
                                    
                            
                                
                                </div>
                                </main>
                            </div>
                        </div>
                    </div>
                </div>
   
            </div>
        </div>
  

     
 
     
    <script src="{{asset('dashassets/js/phoenix.js')}}"></script>
    <script src="{{asset('dashassets/js/ecommerce-dashboard.js')}}"></script>
  </body>

</html>