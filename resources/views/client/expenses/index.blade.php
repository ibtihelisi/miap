
<html lang="en-US" dir="ltr">

  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>QR Menu|Expneses</title>
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
              
              </br>
                <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade show active" id="management" role="tabpanel" aria-labelledby="tabs-management-main">





                            <!--contenu de l'onglet Restaurants management!-->
                            <div class="col-md-12">
                                <div class="custom">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <h1 class="mt-3" style=" color: #272556;" >Expenses Management</h1>
                                        
                                    </div>
                                    <hr>







                                    <div class="container-fluid mt--7">
                                        <div class="row">
                                            
                                            <div class="col-4">
                                              <div class="list-group" id="list-tab" role="tablist">
                                                <a class="list-group-item list-group-item-action active" id="list-home-list" data-bs-toggle="list" href="#list-home" role="tab" aria-controls="list-home" >All Expenses Categories</a>
                                                <hr>
                                                @foreach ($expenesescategory as $excat)
                                                    
                                               
                                                    <a class="list-group-item list-group-item-action" id="list-{{$excat->name}}-list" data-bs-toggle="list" href="#list-{{$excat->name}}" role="tab" aria-controls="list-{{$excat->name}}">{{$excat->name}} </a>
                                                @endforeach
                                        
                                              </div>
                                            </div>
                                            <div class="col-8">
                                              <div class="tab-content" id="nav-tabContent">
                                                <div class="tab-pane fade show active" id="list-home" role="tabpanel" aria-labelledby="list-home-list">



                                                    <br>

                                                    <h4 id="sepcustom[allergens_enable]" class="display-4 mb-0"  style="color: #272556">All Expenses Category</h4>
                                                        <hr>

                                                        <!-- Affichage des alertes de succès ou d'erreur -->
                                                        @if(session('success'))
                                                            <div class="alert alert-success alert-dismissible delete-alert" role="alert" style="background-color: green; border-color: #c3e6cb; color:#d4edda ;" >
                                                                {{ session('success') }}
                                                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close" aria-setsize="10"></button>
                                                            </div>
                                                            <script>
                                                                // Sélectionne l'alerte de succès
                                                                var successAlert = document.querySelector('.alert-success');
                                                                // Ferme l'alerte après 10 secondes (10000 millisecondes)
                                                                setTimeout(function() {
                                                                    successAlert.style.display = 'none';
                                                                }, 15000);
                                                        
                                                                // Ajoute un écouteur d'événement au bouton de fermeture
                                                                var closeButton = successAlert.querySelector('.btn-close');
                                                                closeButton.addEventListener('click', function() {
                                                                    successAlert.style.display = 'none';
                                                                });
                                                            </script>
                                                        @endif


                                                        <div>
                                                            <div class="text-end">
                                                                <a class="btn btn-danger " data-bs-toggle="modal" data-bs-target="#exampleModal" style="background-color:#f25c05">Add Expense category</a>

                                                                </br>
                                                                <br>
                                                            </div> 



                                                            <table class="table table-bordered table-striped fs--1 mb-0">
                                                                <thead class="bg-200 text-900">
                                                                    <tr>
                                                                        <th class="sort" data-sort="#">#</th>
                                                                        <th class="sort" data-sort="NAME">NAME</th>
                                                                        <th class="sort" data-sort="ACTION">ACTION</th>
                                                                    
                                                                    </tr>
                                                                </thead>
                                                                <tbody class="list">
                                                                
                                                                        
                                                                    
                                                                    @foreach ($expenesescategory as $index=>$excat)
                                                                    
                                                                    <tr>
                                                                        <td class="INDEX">{{ $index}}</td>
                                                                        
                                                                        <td class="NAME">{{ $excat->name }}</td>
                                                                        
                                                                        <td class="ACTION">
                                                                            <div class="d-inline-block">
                                                                                <form action="/expense_category/update/{{$excat->id}}" method="post">
                                                                                    @csrf
                                                                                    <a type="submit" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#editCategory{{$excat->id}}" style="background-color: #fb8b4a">
                                                                                        <i class="fas fa-edit"></i> Update
                                                                                    </a>
                                                                                </form>
                                                                            </div>
                                                                            
                                                                            <div class="d-inline-block">
                                                                                <a type="submit" class="btn btn-primary" onclick="return confirm('Are you sure you want to delete this Expense Category ? ')" href="/expense_category/delete/{{ $excat->id }}" style="background-color: #fb8b4a">
                                                                                    <i class="fas fa-trash-alt"></i> Delete
                                                                                </a>
                                                                            </div>
                                                                            
                                                                            
                                                                            
                                                                        </td>
                                                                    </tr>
                                                                    
                                                                    @endforeach
                                                                    
                                                                </tbody>
                                                            </table>
                                                        </div>



                                                </div>


                                                @foreach ($expenesescategory as $index => $excat)

                                                    <div class="tab-pane fade" id="list-{{$excat->name}}" role="tabpanel" aria-labelledby="list-{{$excat->name}}-list">


                                                        


                                                        <br>

                                                        <h4  class="display-4 mb-0"  style="color: #272556">{{$excat->name}}</h4>
                                                            <hr>
    
                                                            <!-- Affichage des alertes de succès ou d'erreur -->
                                                            @if(session('success'))
                                                                <div class="alert alert-success alert-dismissible delete-alert" role="alert" style="background-color: green; border-color: #c3e6cb; color:#d4edda ;" >
                                                                    {{ session('success') }}
                                                                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close" aria-setsize="10"></button>
                                                                </div>
                                                                <script>
                                                                    // Sélectionne l'alerte de succès
                                                                    var successAlert = document.querySelector('.alert-success');
                                                                    // Ferme l'alerte après 10 secondes (10000 millisecondes)
                                                                    setTimeout(function() {
                                                                        successAlert.style.display = 'none';
                                                                    }, 15000);
                                                            
                                                                    // Ajoute un écouteur d'événement au bouton de fermeture
                                                                    var closeButton = successAlert.querySelector('.btn-close');
                                                                    closeButton.addEventListener('click', function() {
                                                                        successAlert.style.display = 'none';
                                                                    });
                                                                </script>
                                                            @endif
    
    
                                                            <div>
                                                                <div class="text-end">
                                                                    <a class="btn btn-danger " data-bs-toggle="modal" data-bs-target="#exampleModal2-{{$index}}" id="exampleModal2" style="background-color:#f25c05">Add  {{$excat->name}} Expense </a>
    
                                                                    </br>
                                                                    <br>
                                                                </div> 
    
    
    
                                                                <table class="table table-bordered table-striped fs--1 mb-0">
                                                                    <thead class="bg-200 text-900">
                                                                        <tr>
                                                                            
                                                                            <th class="sort" data-sort="NAME">NAME</th>
                                                                            <th class="sort" data-sort="DATE">DATE</th>
                                                                            <th class="sort" data-sort="PRICE">PRICE</th>


                                                                            <th class="sort" data-sort="ACTION">ACTION</th>
                                                                        
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody class="list">
                                                                        
                                                                            @foreach($expenses as $ex)
                                                                                @if ($ex->expensecategory_id == $excat->id)
                                                                                    <tr>
                                                                                        <td class="NAME">{{ $ex->name }}</td>
                                                                                        <td class="DATE">{{ $ex->date }}</td>
                                                                                        <td class="PRICE">{{ $ex->price }}Dt</td>
                                                                                        <td class="ACTION">
                                                                                            <div class="d-inline-block">
                                                                                                <form action="/expense/update/{{$ex->id}}" method="post">
                                                                                                    @csrf
                                                                                                    <a type="submit" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#editExpense{{$ex->id}}" style="background-color: #fb8b4a" href="/expense/update/{{$ex->id}}">
                                                                                                        <i class="fas fa-edit"></i> Update
                                                                                                    </a>
                                                                                                </form>
                                                                                            </div>
                                                                                            <div class="d-inline-block">
                                                                                                <a type="submit" class="btn btn-primary" onclick="return confirm('Are you sure you want to delete this Expense Category ? ')" href="/expense/delete/{{ $ex->id }}" style="background-color: #fb8b4a">
                                                                                                    <i class="fas fa-trash-alt"></i> Delete
                                                                                                </a>
                                                                                            </div>
                                                                                        </td>
                                                                                    </tr>
                                                                                     @endif
                                                                            @endforeach   
                                                                       
                                                                    </tbody>
                                                                    
                                                                    
                                                                </table>
                                                            </div>
    


                                                    
                                                    </div>

                                                @endforeach
                                             
                                              </div>
                                            </div>
                                          </div>
                                    </div>
                                    
                                
                        
            
                                
            
                                
                        
        
                                </div>
                            </div>
                    </div>
                        
                </div>
                  
            </div>

                         

        
           
        
      </div>

                <!-- Modal Ajout category expence -->
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                    style="display: none;" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Add Expense category</h5><button class="btn p-1"
                                    type="button" data-bs-dismiss="modal" aria-label="Close"><svg
                                        class="svg-inline--fa fa-times fa-w-11 fs--1" aria-hidden="true" focusable="false"
                                        data-prefix="fas" data-icon="times" role="img"
                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 352 512" data-fa-i2svg="">
                                        <path fill="currentColor"
                                            d="M242.72 256l100.07-100.07c12.28-12.28 12.28-32.19 0-44.48l-22.24-22.24c-12.28-12.28-32.19-12.28-44.48 0L176 189.28 75.93 89.21c-12.28-12.28-32.19-12.28-44.48 0L9.21 111.45c-12.28 12.28-12.28 32.19 0 44.48L109.28 256 9.21 356.07c-12.28 12.28-12.28 32.19 0 44.48l22.24 22.24c12.28 12.28 32.2 12.28 44.48 0L176 322.72l100.07 100.07c12.28 12.28 32.2 12.28 44.48 0l22.24-22.24c12.28-12.28 12.28-32.19 0-44.48L242.72 256z">
                                        </path>
                                    </svg><!-- <span class="fas fa-times fs--1"></span> Font Awesome fontawesome.com --></button>
                            </div>
            
                            <form action="/expense_category/add" method="post" >
            
                                @csrf
            
                            
                                <div class="modal-body">
                                    <div class="mb-3">
                                        <label class="form-label" for="exampleFormControlInput1">Expense category Name</label>
                                        <input name="expencecategoryname" class="form-control" id="exampleFormControlInput1"
                                            type="text" placeholder=" expense category name..." required>
            
                                        @error('expencecategoryname')
                                            <div class="alert alert-danger">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
            
                                    <div class="mb-0">
                                        <input type="hidden" name="user_id">
                                    </div>
            
            
                        
            
            
            
                                </div>
                                <div class="modal-footer">
                                    <button class="btn btn-primary" type="submit ">Add</button>
                                    <button class="btn btn-outline-primary" type="button"
                                        data-bs-dismiss="modal">Cancel</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>





                <!-- modal modifiier category expences -->
                @foreach ($expenesescategory as $index=>$excat )
                        <div class="modal fade" id="editCategory{{$excat->id}}" tabindex="-1" aria-labelledby="exampleModalLabel"
                        style="display: none;" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Update Expense category</h5><button class="btn p-1"
                                        type="button" data-bs-dismiss="modal" aria-label="Close"><svg
                                            class="svg-inline--fa fa-times fa-w-11 fs--1" aria-hidden="true" focusable="false"
                                            data-prefix="fas" data-icon="times" role="img"
                                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 352 512" data-fa-i2svg="">
                                            <path fill="currentColor"
                                                d="M242.72 256l100.07-100.07c12.28-12.28 12.28-32.19 0-44.48l-22.24-22.24c-12.28-12.28-32.19-12.28-44.48 0L176 189.28 75.93 89.21c-12.28-12.28-32.19-12.28-44.48 0L9.21 111.45c-12.28 12.28-12.28 32.19 0 44.48L109.28 256 9.21 356.07c-12.28 12.28-12.28 32.19 0 44.48l22.24 22.24c12.28 12.28 32.2 12.28 44.48 0L176 322.72l100.07 100.07c12.28 12.28 32.2 12.28 44.48 0l22.24-22.24c12.28-12.28 12.28-32.19 0-44.48L242.72 256z">
                                            </path>
                                        </svg><!-- <span class="fas fa-times fs--1"></span> Font Awesome fontawesome.com --></button>
                                </div>
                                
                                    
                                
                                <form action="/expense_category/update/{{$excat->id}}" method="post">

                                    @csrf

                                
                                    <div class="modal-body">
                                        <div class="mb-3">
                                            <label class="form-label" for="exampleFormControlInput1">Expense category Name</label>
                                            <input name="expencecategoryname"  value ="{{$excat->name}}"  class="form-control" id="exampleFormControlInput1"
                                                type="text" placeholder=" tapper nom categorie"  >
                                            @error('expencecategoryname')
                                                <div class="alert alert-danger">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>

                                        
                                        <input type="hidden" value="{{ $excat->user_id}}" name="id_user" >



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


                @endforeach









                   <!-- Modal Ajout  expence -->

                   
                @foreach ($expenesescategory as $index=>$excat )
                   <div class="modal fade" id="exampleModal2-{{$index}}" tabindex="-1" aria-labelledby="exampleModalLabel"
                   style="display: none;" aria-hidden="true" data-category-id="{{$excat->id}}">
                   <div class="modal-dialog">
                       <div class="modal-content">
                           <div class="modal-header">
                               <h5 class="modal-title" id="exampleModalLabel">Add  New Expense </h5><button class="btn p-1"
                                   type="button" data-bs-dismiss="modal" aria-label="Close"><svg
                                       class="svg-inline--fa fa-times fa-w-11 fs--1" aria-hidden="true" focusable="false"
                                       data-prefix="fas" data-icon="times" role="img"
                                       xmlns="http://www.w3.org/2000/svg" viewBox="0 0 352 512" data-fa-i2svg="">
                                       <path fill="currentColor"
                                           d="M242.72 256l100.07-100.07c12.28-12.28 12.28-32.19 0-44.48l-22.24-22.24c-12.28-12.28-32.19-12.28-44.48 0L176 189.28 75.93 89.21c-12.28-12.28-32.19-12.28-44.48 0L9.21 111.45c-12.28 12.28-12.28 32.19 0 44.48L109.28 256 9.21 356.07c-12.28 12.28-12.28 32.19 0 44.48l22.24 22.24c12.28 12.28 32.2 12.28 44.48 0L176 322.72l100.07 100.07c12.28 12.28 32.2 12.28 44.48 0l22.24-22.24c12.28-12.28 12.28-32.19 0-44.48L242.72 256z">
                                       </path>
                                   </svg><!-- <span class="fas fa-times fs--1"></span> Font Awesome fontawesome.com --></button>
                           </div>
           
                           <form action="/expense/add" method="post" >
           
                               @csrf
           
                           
                               <div class="modal-body">

                                

                                   <div class="mb-3">
                                       <label class="form-label" for="exampleFormControlInput1">Expense  Name</label>
                                       <input name="expensename" class="form-control" id="exampleFormControlInput1"
                                           type="text" placeholder=" expense  name..." required>
           
                                       @error('expensename')
                                           <div class="alert alert-danger">
                                               {{ $message }}
                                           </div>
                                       @enderror
                                   </div>

                                   <div class="mb-3">
                                    <label class="form-label" for="exampleFormControlInput1">date of purchase</label>
                                    <input name="date" class="form-control" id="exampleFormControlInput1"
                                        type="date" placeholder=" date of purchase..." required>
        
                                    @error('date')
                                        <div class="alert alert-danger">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label class="form-label" for="exampleFormControlInput1">purchasing price</label>
                                    <input name="price" class="form-control" id="exampleFormControlInput1"
                                        type="name" placeholder=" purchasing price..." required>
        
                                    @error('price')
                                        <div class="alert alert-danger">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
           
                                   <div class="mb-0">
                                       <input type="hidden" name="expensecategory_id" value="{{$excat->id}}">
                                   </div>
           
           
                       
           
           
           
                               </div>
                               <div class="modal-footer">
                                   <button class="btn btn-primary" type="submit ">Add</button>
                                   <button class="btn btn-outline-primary" type="button"
                                       data-bs-dismiss="modal">Cancel</button>
                               </div>
                           </form>
                       </div>
                   </div>
               </div>


               @endforeach




                <!-- modal modifiier  expences -->
                @foreach ($expenses as $index=>$ex )
                        <div class="modal fade" id="editExpense{{$ex->id}}" tabindex="-1" aria-labelledby="exampleModalLabel"
                        style="display: none;" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Update Expense </h5><button class="btn p-1"
                                        type="button" data-bs-dismiss="modal" aria-label="Close"><svg
                                            class="svg-inline--fa fa-times fa-w-11 fs--1" aria-hidden="true" focusable="false"
                                            data-prefix="fas" data-icon="times" role="img"
                                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 352 512" data-fa-i2svg="">
                                            <path fill="currentColor"
                                                d="M242.72 256l100.07-100.07c12.28-12.28 12.28-32.19 0-44.48l-22.24-22.24c-12.28-12.28-32.19-12.28-44.48 0L176 189.28 75.93 89.21c-12.28-12.28-32.19-12.28-44.48 0L9.21 111.45c-12.28 12.28-12.28 32.19 0 44.48L109.28 256 9.21 356.07c-12.28 12.28-12.28 32.19 0 44.48l22.24 22.24c12.28 12.28 32.2 12.28 44.48 0L176 322.72l100.07 100.07c12.28 12.28 32.2 12.28 44.48 0l22.24-22.24c12.28-12.28 12.28-32.19 0-44.48L242.72 256z">
                                            </path>
                                        </svg><!-- <span class="fas fa-times fs--1"></span> Font Awesome fontawesome.com --></button>
                                </div>
                                
                                    
                                
                                <form action="/expense/update/{{$ex->id}}" method="post">

                                    @csrf

                                
                                    <div class="modal-body">
                                        <div class="mb-3">
                                            <label class="form-label" for="exampleFormControlInput1">Expense  Name</label>
                                            <input name="expensename"  value ="{{$ex->name}}"  class="form-control" id="exampleFormControlInput1"
                                                type="text" placeholder=" tapper nom categorie"  >
                                            @error('expensename')
                                                <div class="alert alert-danger">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>



                                        <div class="mb-3">
                                            <label class="form-label" for="exampleFormControlInput1">date of purchase</label>
                                            <input name="date" class="form-control" id="exampleFormControlInput1"
                                            value ="{{$ex->date}}"  type="date" placeholder=" date of purchase..." required>
                
                                            @error('date')
                                                <div class="alert alert-danger">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
        
                                        <div class="mb-3">
                                            <label class="form-label" for="exampleFormControlInput1">purchasing price</label>
                                            <input name="price" class="form-control" id="exampleFormControlInput1"  value ="{{$ex->price}}"
                                                type="name" placeholder=" purchasing price..." required>
                
                                            @error('price')
                                                <div class="alert alert-danger">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>

                                        
                                        <input type="hidden" value="{{ $ex->expensecategory_id }}" name="expensecategory_id" >



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


                @endforeach
  
               





    </main>
   

    
     
     
    <script src="{{asset('dashassets/js/phoenix.js')}}"></script>
    <script src="{{asset('dashassets/js/ecommerce-dashboard.js')}}"></script>
  </body>

</html>