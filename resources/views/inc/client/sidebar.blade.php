<style>.nav-link-icon {
    font-size: 22px; /* Augmente la taille de l'icône */
}

.nav-link-text {
    font-size: 16px; /* Augmente la taille du texte */
}

.nav-item:not(:first-child) {
    margin-top: 10px; /* Ajoute un espacement au-dessus de chaque élément sauf le premier */
}



</style>



<nav class="navbar navbar-light navbar-vertical navbar-vibrant navbar-expand-lg">
    <div class="collapse navbar-collapse" id="navbarVerticalCollapse">
      <div class="navbar-vertical-content scrollbar">
        <ul class="navbar-nav flex-column" id="navbarVerticalNav">

            
            <li class="nav-item">
                <a class="nav-link active" href="/client/dashboard">
                    <div class="d-flex align-items-center">
                        <span class="nav-link-icon"><i class="fas fa-tachometer-alt" style="font-size: 22px;"></i></span>
                        <span class="nav-link-text">Dashboard</span>
                    </div>
                </a>
            </li>
            






            <li class="nav-item">
                <a class="nav-link " href="/restaurant/live">
                    <div class="d-flex align-items-center">
                        <span class="nav-link-icon">
                            <!-- Utiliser la balise Font Awesome pour l'icône de magasin -->
                            <i class="far fa-clock"></i>

                        </span>
                        <span class="nav-link-text"> Live orders</span>
                    </div>
                </a>
            </li>



            

            <li class="nav-item">
                <a class="nav-link " href="/restaurant/orders">
                    <div class="d-flex align-items-center">
                        <span class="nav-link-icon">
                            <!-- Utiliser la balise Font Awesome pour l'icône de magasin -->
                            <i class="fas fa-shopping-cart"></i>


                        </span>
                        <span class="nav-link-text">  Orders</span>
                    </div>
                </a>
            </li>
  
  
  

            <li class="nav-item">
              <a class="nav-link " href="/restaurant/management">
                  <div class="d-flex align-items-center">
                      <span class="nav-link-icon">
                          <!-- Utiliser la balise Font Awesome pour l'icône de magasin -->
                          <i class="fas fa-store-alt"></i>
                      </span>
                      <span class="nav-link-text"> My Restaurant </span>
                  </div>
              </a>
          </li>




          
          <li class="nav-item">
            <a class="nav-link " href="/restaurant/menu">
                <div class="d-flex align-items-center">
                    <span class="nav-link-icon">
                        <!-- Utiliser la balise Font Awesome pour l'icône de magasin -->
                        <i class="fas fa-utensils"></i>
                    </span>
                    <span class="nav-link-text">Menu</span>
                </div>
            </a>
        </li>






          <li class="nav-item">
            <a class="nav-link " href="/restaurant/table">
              <div class="d-flex align-items-center">
                <span class="nav-link-icon">
                  <!-- Remplacer le chemin vers l'icône par l'icône de finances de Font Awesome -->
                  <i class="fas fa-chair"></i>
                </span>
                <span class="nav-link-text">Tables</span>
              </div>
              </a>
          </li>

          <li class="nav-item">
            <a class="nav-link " href="/restaurant/staff">
              <div class="d-flex align-items-center">
                <span class="nav-link-icon">
                  <!-- Remplacer le chemin vers l'icône par l'icône de finances de Font Awesome -->
                  <i class="fas fa-users"></i>
                </span>
                <span class="nav-link-text">Staff</span>
              </div>
              </a>
          </li>


          <li class="nav-item">
            <a class="nav-link " href="/qrcode">
                <div class="d-flex align-items-center">
                    <span class="nav-link-icon">
                        <!-- Using Font Awesome credit card icon -->
                        <i class="fas fa-qrcode"></i>
                    </span>
                    <span class="nav-link-text">QR CODE</span>
                </div>
            </a>
        </li>




        
        <li class="nav-item">
            <a class="nav-link " href="/client/subscription">
                <div class="d-flex align-items-center">
                    <span class="nav-link-icon">
                        <!-- Using Font Awesome credit card icon -->
                        <i class="fas fa-credit-card"></i>
                    </span>
                    <span class="nav-link-text">Plan</span>
                </div>
            </a>
        </li>


         
        <li class="nav-item">
            <a class="nav-link " href="/client/expenses">
                <div class="d-flex align-items-center">
                    <span class="nav-link-icon">
                        <!-- Using Font Awesome credit card icon -->
                        <i class="fas fa-wallet "></i>
                    </span>
                    <span class="nav-link-text">Expenses</span>
                </div>
            </a>
        </li>
        



          
         
        </ul>
      </div>
      
    </div>
  </nav>