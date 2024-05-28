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
    <!-- Include Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/css/bootstrap.min.css" rel="stylesheet">

    <!-- Include Bootstrap Icons CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Include Bootstrap Datepicker CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css" rel="stylesheet">

    <style>
     
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


  body {
            opacity: 0;
            font-family: 'Nunito Sans', sans-serif;
            background-color: #fff2dc;
        }





      
       /* Personnalisation du datepicker */
      /* Personnalisation du datepicker */
      .datepicker
{
    border-radius: .375rem;

    direction: ltr;
}
.datepicker-inline
{
    width: 220px;
}
.datepicker-rtl
{
    direction: rtl;
}
.datepicker-rtl.dropdown-menu
{
    left: auto;
}
.datepicker-rtl table tr td span
{
    float: right;
}
.datepicker-dropdown
{
    top: 0;
    left: 0;

    padding: 20px 22px;

    box-shadow: 0 50px 100px rgba(50, 50, 93, .1), 0 15px 35px rgba(50, 50, 93, .15), 0 5px 15px rgba(0, 0, 0, .1);
}
.datepicker-dropdown.datepicker-orient-left:before
{
    left: 6px;
}
.datepicker-dropdown.datepicker-orient-left:after
{
    left: 7px;
}
.datepicker-dropdown.datepicker-orient-right:before
{
    right: 6px;
}
.datepicker-dropdown.datepicker-orient-right:after
{
    right: 7px;
}
.datepicker-dropdown.datepicker-orient-bottom:before
{
    top: -7px;
}
.datepicker-dropdown.datepicker-orient-bottom:after
{
    top: -6px;
}
.datepicker-dropdown.datepicker-orient-top:before
{
    bottom: -7px;

    border-top: 7px solid white;
    border-bottom: 0;
}
.datepicker-dropdown.datepicker-orient-top:after
{
    bottom: -6px;

    border-top: 6px solid #fff;
    border-bottom: 0;
}
.datepicker table
{
    margin: 0;

    -webkit-user-select: none;
       -moz-user-select: none;
        -ms-user-select: none;
            user-select: none;

    -webkit-touch-callout: none;
}
.datepicker table tr td
{
    border-radius: 50%;
}
.datepicker table tr th
{
    font-weight: 500;

    border-radius: .375rem;
}
.datepicker table tr td,
.datepicker table tr th
{
    font-size: .875rem;

    width: 36px;
    height: 36px;

    transition: all .15s ease;
    text-align: center;

    border: none;
}
.table-striped .datepicker table tr td,
.table-striped .datepicker table tr th
{
    background-color: transparent;
}
.datepicker table tr td.old,
.datepicker table tr td.new
{
    color: #adb5bd;
}
.datepicker table tr td.day:hover,
.datepicker table tr td.focused
{
    cursor: pointer;

    background: white;
}
.datepicker table tr td.disabled,
.datepicker table tr td.disabled:hover
{
    cursor: default;

    color: #dee2e6;
    background: none;
}
.datepicker table tr td.highlighted
{
    border-radius: 0;
}
.datepicker table tr td.highlighted.focused
{
    background: #5e72e4;
}
.datepicker table tr td.highlighted.disabled,
.datepicker table tr td.highlighted.disabled:active
{
    color: #ced4da;
    background: #5e72e4;
}
.datepicker table tr td.today
{
    background: white;
}
.datepicker table tr td.today.focused
{
    background: white;
}
.datepicker table tr td.today.disabled,
.datepicker table tr td.today.disabled:active
{
    color: #8898aa;
    background: white;
}
.datepicker table tr td.range
{
    color: #fff;
    border-radius: 0;
    background: #5e72e4;
}
.datepicker table tr td.range.focused
{
    background: #3b53de;
}
.datepicker table tr td.range.disabled,
.datepicker table tr td.range.disabled:active,
.datepicker table tr td.range.day.disabled:hover
{
    color: #8a98eb;
    background: #324cdd;
}
.datepicker table tr td.range.highlighted.focused
{
    background: #cbd3da;
}
.datepicker table tr td.range.highlighted.disabled,
.datepicker table tr td.range.highlighted.disabled:active
{
    color: #dee2e6;
    background: #e9ecef;
}
.datepicker table tr td.range.today.disabled,
.datepicker table tr td.range.today.disabled:active
{
    color: #fff;
    background: #5e72e4;
}
.datepicker table tr td.day.range-start
{
    border-top-right-radius: 0;
    border-bottom-right-radius: 0;
}
.datepicker table tr td.day.range-end
{
    border-top-left-radius: 0;
    border-bottom-left-radius: 0;
}
.datepicker table tr td.day.range-start.range-end
{
    border-radius: 50%;
}
.datepicker table tr td.selected,
.datepicker table tr td.selected.highlighted,
.datepicker table tr td.selected:hover,
.datepicker table tr td.selected.highlighted:hover,
.datepicker table tr td.day.range:hover
{
    color: #fff;
    background: #5e72e4;
}
.datepicker table tr td.active,
.datepicker table tr td.active.highlighted,
.datepicker table tr td.active:hover,
.datepicker table tr td.active.highlighted:hover
{
    color: #fff;
    background: #5e72e4;
    box-shadow: none;
}
.datepicker table tr td span
{
    line-height: 54px;

    display: block;
    float: left;

    width: 23%;
    height: 54px;
    margin: 1%;

    cursor: pointer;

    border-radius: 4px;
}
.datepicker table tr td span:hover,
.datepicker table tr td span.focused
{
    background: #e9ecef;
}
.datepicker table tr td span.disabled,
.datepicker table tr td span.disabled:hover
{
    cursor: default;

    color: #dee2e6;
    background: none;
}
.datepicker table tr td span.active,
.datepicker table tr td span.active:hover,
.datepicker table tr td span.active.disabled,
.datepicker table tr td span.active.disabled:hover
{
    text-shadow: 0 -1px 0 rgba(0, 0, 0, .25);
}
.datepicker table tr td span.old,
.datepicker table tr td span.new
{
    color: #8898aa;
}
.datepicker .datepicker-switch
{
    width: 145px;
}
.datepicker .datepicker-switch,
.datepicker .prev,
.datepicker .next,
.datepicker tfoot tr th
{
    cursor: pointer;
}
.datepicker .datepicker-switch:hover,
.datepicker .prev:hover,
.datepicker .next:hover,
.datepicker tfoot tr th:hover
{
    background: #e9ecef;
}
.datepicker .prev.disabled,
.datepicker .next.disabled
{
    visibility: hidden;
}
.datepicker .cw
{
    font-size: 10px;

    width: 12px;
    padding: 0 2px 0 5px;

    vertical-align: middle;
}

    </style>

<style>
  .text-bg-success {
      color: green; /* Couleur du texte */
      background-color: #c8e6c9; /* Couleur de fond plus claire */
      padding: 5px 10px; /* Optionnel : ajustez le rembourrage selon vos besoins */
      border-radius: 10px; /* Optionnel : pour arrondir les coins */
  }


  .custom-icon-size .bi {
    font-size: 18px; /* Adjust the size as needed */
}
</style>
<style>
  .text-bg-danger {
      color: #b71c1c; /* Red text color */
      background-color: #ffcdd2; /* Lighter red background color */
      padding: 5px 10px; /* Optional: adjust padding as needed */
      border-radius: 10px; /* Optional: to round the corners */
  }

</style>







<style>
  .delete-alert {
    max-height: 100px; /* Ajustez la valeur selon vos besoins */
    /* Ajoute une barre de défilement si nécessaire */
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
                    <h1 class="mt-3" style="color: #272556">Orders</h1>
                    <hr>






                    <div class="tab-content orders-filters">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="input-daterange datepicker row align-items-center">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-control-label">Date From</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text custom-icon-size"><i class="bi bi-calendar2-week-fill "></i></span>
                                                </div>
                                                <input name="fromDate" class="form-control datepicker" placeholder="Date from" type="text"  >
                                            </div>                                                                                                          
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-control-label">Date to</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text  custom-icon-size "><i class="bi bi-calendar2-week-fill"></i></span>
                                                </div>
                                                <input name="toDate" class="form-control datepicker" placeholder="Date to" type="text"  >
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
    
                            <!-- statuses -->
                            <div class="col-md-3">
                                <div id="form-group-status_id" class="form-group   ">
    
                                    
                                    <label class="form-control-label">Last status</label><br />
                                
                                    <select   class="form-control form-control-alternative   "  name="status_id" id="status_id">
                                        <option disabled selected value> Select Last status </option>
                                        
                                                                                <option value="2">Accepted by admin</option>
                                                                        
                                        
                                                                                <option value="13">Accepted by driver</option>
                                                                        
                                        
                                                                                <option value="3">Accepted by restaurant</option>
                                                                        
                                        
                                                                                <option value="4">Assigned to driver</option>
                                                                        
                                        
                                                                                <option value="11">Closed</option>
                                                                        
                                        
                                                                                <option value="7">Delivered</option>
                                                                        
                                        
                                                                                <option value="1">Just created</option>
                                                                        
                                        
                                                                                <option value="6">Picked up</option>
                                                                        
                                        
                                                                                <option value="5">Prepared</option>
                                                                        
                                        
                                                                                <option value="8">Rejected by admin</option>
                                                                        
                                        
                                                                                <option value="12">Rejected by driver</option>
                                                                        
                                        
                                                                                <option value="9">Rejected by restaurant</option>
                                                                        
                                        
                                                                                <option value="10">Updated</option>
                                                                        
                                            </select>
                                
                                
                                        </div>
                                                        </div>
                                
                                                        <!-- statuses -->
                                                        <div class="col-md-3">
                                                            <div id="form-group-payment_status" class="form-group   ">
                                
                                    
                                    <label class="form-control-label">Payment status</label><br />
                                
                                    <select   class="form-control form-control-alternative   "  name="payment_status" id="payment_status">
                                        <option disabled selected value> Select Payment status </option>
                                        
                                                                                <option value="paid">Paid</option>
                                                                        
                                        
                                                                                <option value="unpaid">Unpaid</option>
                                                                        
                                            </select>
                                
                                
                                        </div>
                                                        </div>
                                
                                                        
                                                                                                                                
                                                    </div>
                                
                                                        <div class="col-md-6 offset-md-6">
                                                            <div class="row">
                                                                                                    <div class="col-md-8"></div>
                                                                
                                                                <div class="col-md-4">
                                                                    <button type="submit" class="btn btn-primary btn-md btn-block">Filter</button>
                                                                </div>
                                                        </div>
                                                    </div>
                                            </div>
                                        </form>
                                    
                                </div>
      
                            </div>




                            
              <div class="mt-3">

                <div id="tableExample2" data-list="{&quot;value#s&quot;:[&quot;#&quot;,&quot;Nom Subscription&quot;,&quot;Description Subscription&quot;,&quot;Period Subscription&quot;,&quot;Ordering Subscription&quot;],&quot;page&quot;:5,&quot;pagination&quot;:true}">
                  <div class="table-responsive scrollbar">
                    <table class="table table-bordered table-striped fs--1 mb-0">
                      <thead class="bg-200 text-900">
                        <tr>
                         
                          <th class="sort" data-sort="Nom Subscription"> #</th>
                          <th class="sort" data-sort="Description Subscription"> CREATED</th>
                          <th class="sort" data-sort="Ordering Subscription">TABLE </th>
                          <th class="sort" data-sort="Period Subscription">ITEMS </th>
                          
                          <th class="sort" data-sort="Ordering Subscription">PRICE</th>
                          <th class="sort" data-sort="Ordering Subscription">STATUS</th>
                          <th class="sort" data-sort="Action">Action</th>
                        
                        </tr>
                      </thead>
                      <tbody class="list">
                       
                     </tbody>
                    </table>


                     <!-- Modal Ajout-->
     


                    






                  <div class="d-flex justify-content-center mt-3"><button class="btn btn-sm btn-falcon-default me-1 disabled" type="button" title="Previous" data-list-pagination="prev" disabled=""><svg class="svg-inline--fa fa-chevron-left fa-w-10" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="chevron-left" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" data-fa-i2svg=""><path fill="currentColor" d="M34.52 239.03L228.87 44.69c9.37-9.37 24.57-9.37 33.94 0l22.67 22.67c9.36 9.36 9.37 24.52.04 33.9L131.49 256l154.02 154.75c9.34 9.38 9.32 24.54-.04 33.9l-22.67 22.67c-9.37 9.37-24.57 9.37-33.94 0L34.52 272.97c-9.37-9.37-9.37-24.57 0-33.94z"></path></svg><!-- <span class="fas fa-chevron-left"></span> Font Awesome fontawesome.com --></button>
                    <ul class="pagination mb-0"><li class="active"><button class="page" type="button" data-i="1" data-page="5">1</button></li><li><button class="page" type="button" data-i="2" data-page="5">2</button></li><li><button class="page" type="button" data-i="3" data-page="5">3</button></li></ul><button class="btn btn-sm btn-falcon-default ms-1" type="button" title="Next" data-list-pagination="next"><svg class="svg-inline--fa fa-chevron-right fa-w-10" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="chevron-right" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" data-fa-i2svg=""><path fill="currentColor" d="M285.476 272.971L91.132 467.314c-9.373 9.373-24.569 9.373-33.941 0l-22.667-22.667c-9.357-9.357-9.375-24.522-.04-33.901L188.505 256 34.484 101.255c-9.335-9.379-9.317-24.544.04-33.901l22.667-22.667c9.373-9.373 24.569-9.373 33.941 0L285.475 239.03c9.373 9.372 9.373 24.568.001 33.941z"></path></svg><!-- <span class="fas fa-chevron-right"></span> Font Awesome fontawesome.com --></button>
                  </div>
                </div>
              </div>
          
             



         <!-- Bootstrap JS -->
         <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/js/bootstrap.bundle.min.js"></script>

          <!-- jQuery (necessary for Bootstrap Datepicker) -->
          <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
 
         <!-- Bootstrap Datepicker JS -->
         <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>

         <!-- Your custom JavaScript -->
         <script>
             $(document).ready(function() {
                 // Initialize datepicker
                 $('.datepicker').datepicker({
                autoclose: false,
                todayHighlight: true,
                position: "bottom left" // Définir la position du calendrier
            });
           
             });
         </script>
     
        <script src="{{asset('dashassets/js/phoenix.js')}}"></script>
        <script src="{{asset('dashassets/js/ecommerce-dashboard.js')}}"></script>
    </main>
  </body>

</html>