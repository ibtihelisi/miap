<!-- Footer -->
<div class="footer">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="footer-col first">
                    <h6>{{$contact->title}}</h6>
                    <p class="p-small">{{$contact->desc}} </p>
                </div> <!-- end of footer-col -->


                

                <div class="footer-col first">
                    <h6>Contact</h6>
                    <p class="p-small">Tel : {{$contact->tel}}</p>
                    <p class="p-small">Email  : <a href="mailto:{{$contact->tel}}"><strong>{{$contact->email}}</strong></a></p>
                
                </div> <!-- end of footer-col -->

                

                <div class="footer-col second">
                    <h6>Useful links</h6>

                    <div class="footer-col third">
                        <span class="fa-stack">
                            <a href="{{$contact->face_link}}">
                                <i class="fas fa-circle fa-stack-2x"></i>
                                <i class="fab fa-facebook-f fa-stack-1x"></i>
                            </a>
                        </span>
                       
                        <span class="fa-stack">
                            <a href="{{$contact->insta_link}}">
                                <i class="fas fa-circle fa-stack-2x"></i>
                                <i class="fab fa-instagram fa-stack-1x"></i>
                            </a>
                        </span>
                        </div> <!-- end of footer-col -->
    
                    <ul class="list-unstyled li-space-lg p-small">
                        
                        <li> <a href="#header">Home</a>
                            ,
                             <a href="#features">Features</a>
                            ,
                              <a href="#details">Details</a>
                            ,
                               <a href="#pricing">Pricing</a></li>
                    </ul>
                </div> <!-- end of footer-col -->
                
               
            </div> <!-- end of col -->
        </div> <!-- end of row -->
    </div> <!-- end of container -->
</div> <!-- end of footer -->  
<!-- end of footer -->


<!-- Copyright -->
<div class="copyright">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <p class="p-small">Copyright © <a href="#your-link">{{$contact->title}}</a></p>
            </div> <!-- end of col -->

        </div> <!-- enf of row -->
    </div> <!-- end of container -->
</div> <!-- end of copyright --> 
<!-- end of copyright -->


<!-- Back To Top Button -->
<button onclick="topFunction()" id="myBtn">
    <img src="{{asset('mainassets/images/up-arrow.png')}}" alt="alternative">
</button>
<!-- end of back to top button -->