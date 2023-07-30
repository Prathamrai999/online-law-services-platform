
<div class="brabd-logo-slider">
	
		<div class="container">
			<h2>We Are Associated With</h2>

			<div id="brand-slider" class="owl-carousel">
				<?php
			
$count=1;
$sr='patners';
$stmt =$show->readAll($sr);
$num = $stmt->rowCount();  while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){ ?>

                <div class="item">
					<a href="#">
						<img src="<?=$pic_img?>/<?=$row['img']?>" alt="" class="templates-img">
					</a>
				</div>
				<?php } ?>		
			</div>
		</div>	
</div>



<section class="testmonial-new" style="">
        <div class="row">

            <div class="col-md-7 col-sm-7 col-xs-9" style="">
                <div class="test-lt">
                    <div id="testmonial-slider" class="owl-carousel">
                  			<?php
			
$count=1;
$sr='testimonial';
$stmt =$show->readAll($sr);
$num = $stmt->rowCount();  while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){ ?>
      <div class="item">
                            <img src="images/test-ion03.png" alt="Textiles " class="testmonial-icon-owl">
                            <h3><?=$row['name']?></h3>
                            <p><?=$row['content']?></p>
                        </div>
                <?php } ?>        
                     
                    </div>
                </div>
            </div>

            <div class="col-md-5 col-sm-5 col-xs-3" style="">
                <div class="test-rt" data-aos-duration="1500" data-aos="zoom-in">
                    <h4>Authorize Partner</h4>
                    <img src="images/emudhra1.png" alt="" class="emudhra-img">
                </div>
            </div>

        </div>
</section>



<!-- Why People Love Us -->
<div class="we-us">
    <div class="container">
        <h2>Why People Love Us</h2>
        
        <div class="we-us-box" data-aos-duration="1000" data-aos="zoom-in">
            <img src="images/icon-1.png" alt="" class="trust-img">
            <h5>Trust</h5>
            <p>100% Trusted Brand and associated partnered with google.</p>
        </div>
        <div class="we-us-box" data-aos-duration="1100" data-aos="zoom-in">
            <img src="images/icon-2.png" alt="" class="trust-img">
            <h5>Value</h5>
            <p>Value our Customer and their requirements.</p>
        </div>
        <div class="we-us-box" data-aos-duration="1200" data-aos="zoom-in">
            <img src="images/icon-3.png" alt="" class="trust-img">
            <h5>Professional</h5>
            <p>We are Professional and Dedicated towards our responsibility.</p>
        </div>
        <div class="we-us-box" data-aos-duration="1300" data-aos="zoom-in">
            <img src="images/icon-4.png" alt="" class="trust-img">
            <h5>Time</h5>
            <p>We Provide timely Services to our clients.</p>
        </div>
        <div class="we-us-box" data-aos-duration="1400" data-aos="zoom-in">
            <img src="images/icon-5.png" alt="" class="trust-img">
            <h5>Affordable</h5>
            <p>We Provide Services at a reasonable and Affordable Cost..</p>
        </div>


    </div>  
</div>


    <!-- footer-menu -->
<div class="marquee-fixd">
    <marquee style=""><?=$notice?></marquee>
</div>


  
    <!-- footer -->
    <footer>
            <div class="row">

                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="footer-box">
                                                <img src="https://iili.io/y48Ite.png" border="0" alt="" class="footer-logo" style=" width: 100%;">
                        <h3>Disclaimer</h3>
                        <li>This is not a Government run Website and the form is not the actual registration form, it is just to collect information from our clients so that our expert can easily understand their business or needs. By proceeding forward with this website you are aware that we are a private company managing this website and providing assistance based on the request from our customers and the fee collected in this website is a consultancy fee.</li>
                        <!--<img src="images/footer-logo.png" alt="" class="footer-logo" style=" width: 60%;">-->
                    </div>
                </div>
                <div class="col-md-2 col-sm-6 col-xs-6">
                    <div class="footer-box">
                        <h3>Legal Services </h3>
                            <li><a href="apply-for-divorce-online.php">Divorce</a></li> 
                            <li><a href="online-legal-notice.php">Legal Notice</a></li>     
                            <li><a href="online-legal-advice.php">Online Legal Advice</a></li>
                            <li><a href="sale-deed-drafting.php">Sale Deed Drafting</a></li>
                            <li><a href="apply-for-joint-venture-deed.php">Joint Venture Deed</a></li>
                            <li><a href="online-rent-deed-drafting.php">Rent Deed Drafting</a></li>
                            <li><a href="apply-for-lease-deed-drafting.php">Lease Deed Drafting</a></li>
                            <li><a href="apply-for-online-partnership-deed-drafting.php">Partnership Deed Drafting</a></li> 
                        
                      
                    </div>
                </div>
                <div class="col-md-2 col-sm-4 col-xs-6">
                    <div class="footer-box">
                        <h3>Tax Registration</h3>
                          
                            <li><a href="online-gst-nil-filing.php">GST Nil</a></li>
                            <li><a href="online-itr-filing.php">ITR Filing</a></li>                            
                            <li><a href="apply-for-online-gst-filing.php">GST Filing</a></li>
                            <li><a href="apply-for-gst-cancellation.php">GST Cancel</a></li>
                            <li><a href="online-gst-modification.php">GST Modification</a></li>
                            <li><a href="online-gst-registration.php">GST Registration</a></li>
                    </div>
                </div>                
                <div class="col-md-2 col-sm-4 col-xs-6">
                    <div class="footer-box">
                        <h3>License </h3>
                        <li><a href="online-sole-proprietorship-registration.php">Sole Proprietorship</a></li>  
                                        

                    </div>
                </div>
                <div class="col-md-2 col-sm-4 col-xs-6">
                    <div class="footer-box">
                        <h3>Start Business</h3>
                            <li><a href="online-private-limited-company-registration.php">Private Limited Company</a></li>
                            <li><a href="apply-for-online-llp-registration.php">Limited Liability Partnership</a></li>
                            <li><a href="apply-for-opc-online.php">One Person Company</a></li>
                            <li><a href="apply-for-nidhi-registration.php">Nidhi Company</a></li> 
                        <br>
                    <!--<img src="images/footer-logo.png" alt="" class="footer-logo" style=" width: 100%;">-->
                    </div>
                    
                </div>                
            </div>

            

    
            <div class="cpy-right text-center">
               <div class="col-md-8">
                    <p class="text-white">Copyright <b> &copy;<?=date('Y')?> Vidhik Sevaen.</b> | By using our website, you hereby consent to our disclaimer and agree to its terms.
                    </p>
               </div>
               <div class="col-md-4">
                   	<a href="refund-policy.php">Refund Policy</a> | <a href="privacy-policy.php"> Privacy Policy</a> | <a href="terms-conditions.php"> Terms And Conditions</a>
               </div>
            </div>



    </footer>






    <style>
        .text-dark {color: #ffbf00 !important;}
    </style>
    <!-- //footer -->




<script type="text/javascript" src="js/bootstrap-3.1.1.min.js"></script>
    <!-- js -->

    <script src="js/jquery.min.js"></script>
    <!-- Mobile  menu-slider-->
    <script src="js/crbnMenu.js"></script>
    <script>
        if ($(window)) {
            $(function () {
                $('.menu').crbnMenu({
                    hideActive: true
                });
            });
        }
    </script>
    <!-- // Mobile  menu-slider -->
<!-- //js -->
   
    <script type="text/javascript">
        var blink = document.getElementById('blink');
        setInterval(function() {
            blink.style.opacity = (blink.style.opacity == 0 ? 1 : 0);
        }, 1500);
    </script>
   
<!-- sticky header -->
<script>
window.onscroll = function() {myFunction()};

var header = document.getElementById("myHeader");
var sticky = header.offsetTop;

function myFunction() {
  if (window.pageYOffset > sticky) {
    header.classList.add("sticky");
  } else {
    header.classList.remove("sticky");
  }
}
</script>

<!-- aos / animition-->
<script src="js/aos.js" type="text/javascript"></script>
    <script>
          AOS.init({
            easing: 'ease-in-out-sine'
          });

          setInterval(addItem, 500);

          var itemsCounter = 1;
          var container = document.getElementById('aos-demo');

          function addItem () {
            if (itemsCounter > 42) return;
            var item = document.createElement('div');
            item.classList.add('aos-item');
            item.setAttribute('data-aos', 'fade-up');
            item.innerHTML = '<div class="aos-item__inner"><h3>' + itemsCounter + '</h3></div>';
            container.appendChild(item);
            itemsCounter++;
          }
    </script>




<!-- about-type-text -->
<script src="js/typed.js" type="text/javascript"></script>
<script>
  $(function(){

    $("#typed").typed({
      // strings: ["Typed.js is a <strong>jQuery</strong> plugin.", "It <em>types</em> out sentences.", "And then deletes them.", "Try it out!"],
      stringsElement: $('#typed-strings'),
      typeSpeed: 30,
      backDelay: 500,
      loop: false,
      contentType: 'html', // or text
      // defaults to false for infinite loop
      loopCount: false,
      callback: function(){ foo(); },
      resetCallback: function() { newTyped(); }
    });

    $(".reset").click(function(){
      $("#typed").typed('reset');
    });

  });

  function newTyped(){ /* A new typed object */ }

  function foo(){ console.log("Callback"); }
</script>



    <!-- superfish menu -->
    <script src="js/superfish.js" type="text/javascript"></script>
    <script type="text/javascript">
        jQuery(document).ready(function($){
            jQuery('ul.sf-menu').superfish();
    
            jQuery('#nav-wrap').prepend('<div id="menu-icon"></div>');
            
            $("#menu-icon").on("click", function(){
                    jQuery(".sf-menu").slideToggle();
                    jQuery(this).toggleClass("active");
            });
        });
    </script>


<!-- Start-Smooth-Scrolling -->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
    <script type="text/javascript">
        jQuery(document).ready(function($) {
            $(".scroll").click(function(event){     
                event.preventDefault();
                $('html,body').animate({scrollTop:$(this.hash).offset().top},2000);
            });
        });
    </script>
<!-- //End-Smooth-Scrolling -->
<script src="js/particle.js"></script>
    <!-- carousel SLIDER / carousel-Requirements-slider -->
  <script type="text/javascript" src="js/owl.carousel.js"></script>
  
    <script type="text/javascript">
        var owl = $('.owl-carousel');
        $("#banner-slider").owlCarousel( {
            loop:true,
            autoplay:true,
            autoplayTimeout:5000,
            responsiveClass:true,
            responsive:{
                0:{
                    items:1,
                    nav:true
                },
                550:{
                    items:1,
                    nav:true
                },
                768:{
                    items:1,
                    nav:true,
                    loop:true
                }
            }
        });
    </script>


    <script type="text/javascript">
        var owl = $('.owl-carousel');
        $("#brand-slider").owlCarousel( {
            loop:true,
            autoplay:true,
            autoplayTimeout:1000,
            responsiveClass:true,
            responsive:{
                0:{
                    items:3,
                    nav:true
                },
                550:{
                    items:4,
                    nav:true
                },
                768:{
                    items:6,
                    nav:true,
                    loop:true
                }
            }
        });
    </script>  

    <script type="text/javascript">
        var owl = $('.owl-carousel');
        $("#testmonial-slider").owlCarousel( {
            loop:true,
            autoplay:true,
            autoplayTimeout:5000,
            responsiveClass:true,
            responsive:{
                0:{
                    items:1,
                    nav:true
                },
                550:{
                    items:1,
                    nav:true
                },
                768:{
                    items:1,
                    nav:true,
                    loop:true
                }
            }
        });
    </script> 
   
    <!-- Bootstrap core JavaScript
================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/bootstrap.min.js"></script>
</body>

</html>