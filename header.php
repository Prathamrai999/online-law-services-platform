<?php include 'settings/settings.php'; ?>
<!DOCTYPE HTML>
<html>
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title><?=$company_name?></title>
<meta name="viewport" content="width=device-width, initial-scale=1">

<meta name="keywords" content="<?=$meta_keyword?>" />

<meta name="description" content="<?=$meta_description?>" />
<script type="applijewelleryion/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--fonts-->
    <link href='//fonts.googleapis.com/css?family=Open+Sans+Condensed:300,700' rel='stylesheet' type='text/css'>
    <link href='//fonts.googleapis.com/css?family=Open+Sans:400,600' rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
<!--fonts -->
 <link rel="icon" href="<?=$favicon?>" type="image/gif" sizes="16x16"> 

<!-- Custom Theme files -->
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" /> <!-- bootstrap css -->
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="css/font-awesome.css" rel="stylesheet">
    <link rel="stylesheet" href="fonts/fontawesome-webfont.ttf" type="text/css" media="all">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" media="screen" href="css/particle.css"/>
    <link href="css/aos.css" rel="stylesheet" type="text/css">    
    <link href="css/superfish.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="css/mobile-styles.css" />
    <link href="css/style.css" rel='stylesheet' type='text/css' />  
    <link href="css/owl.carousel.css" rel="stylesheet" type="text/css">


<script src="admin@/sweetalert-master/dist/sweetalert.min.js"></script>

<link rel="stylesheet" type="text/css" href="admin@/sweetalert-master/dist/sweetalert.css">
<!---Adsense----->
<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-4846000692977239"
     crossorigin="anonymous"></script>

<!-----Adsense Code End------>


</head>

<!--Start of Tawk.to Script-->
  <script type="text/javascript">
    var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
    (function(){
    var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
    s1.async=true;
    s1.src='https://embed.tawk.to/6069956ff7ce18270936e93f/1f2e6vfht';
    s1.charset='UTF-8';
    s1.setAttribute('crossorigin','*');
    s0.parentNode.insertBefore(s1,s0);
    })();
    </script>
    <!--End of Tawk.to Script-->


<body>
<style>
		
.sticky {
  position: fixed;
  top: 0;
  width: 100%;
  z-index: 99999;
  box-shadow: -5px 29px 34px -27px rgb(0 0 0 / 54%);
    -webkit-box-shadow: -5px 29px 34px -27px rgb(0 0 0 / 30%);
    -moz-box-shadow: -5px 29px 34px -27px rgba(0,0,0,0.54);
}

.sticky + .banner {
  padding-top: 102px;
}


</style>
<script>
        function fileValidation(file,size){
    var fileInput = document.getElementById(file);
    var filePath = fileInput.value;  

    var allowedExtensions = /(\.jpg|\.jpeg|\.png|\.gif)$/i;
    if(!allowedExtensions.exec(filePath)){
        alert('Please upload file having extensions .jpeg/.jpg/.png/.gif only.');
        fileInput.value = '';
        return false;
    }else{
       // alert(size);
     var maxSize = size * 1024; //File size is returned in Bytes
     if (fileInput.files[0].size > maxSize) {
      $(this).val("");
      alert("Sorry Max size exceeded");
            fileInput.value = '';
   return false;
     }else{
        //Image preview
        if (fileInput.files && fileInput.files[0]) {
            var reader = new FileReader();
            reader.onload = function(e) {
                document.getElementById('imagePreview').innerHTML = '<img src="'+e.target.result+'"/>';
            };
            reader.readAsDataURL(fileInput.files[0]);
        }
    }
    }
}
</script>
<!-- Custom Theme files -->



<div class="header-top">
	<div class="container">
		<div class="row">
		 	<div class="col-md-6 col-sm-6 col-xs-12">
				<div class="barnd-text">
					<ul>
						<li><i class="fa fa-phone"></i>
						<a target="_blank" href="tel:<?=$phone?>">   +91 <?=$phone?></a></li>
						<li><i class="fa fa-envelope"></i>
						<a target="_blank" href="mailto:<?=$email?>">  <?=$email?></a></li>						
					</ul>
				</div>
		 	</div>
		 	<div class="col-md-4 col-sm-3 col-xs-5">
		 		<div class="barnd-help">
					<a href=" https://www.facebook.com/Online-Legal-Service-100167218492206/" target="_blank" title="FACEBOOK" style=""><i class="fa fa-facebook-f"></i><span>Facebook</span> </a> | 
					<a href="https://www.instagram.com/online_legal_service/" target="_blank" title="Instagram" style=""><i class="fa fa-instagram"></i> <span>Instagram</span> </a> | 
					<a href="https://www.linkedin.com/in/legoporate-enterprise-100332206" target="_blank" title="linkedin" style=""><i class="fa fa-linkedin"></i> <span>linkedin</span> </a>
				</div>
		 	</div>
		 	<div class="col-md-2 col-sm-3 col-xs-7">
				<div class="barnd-catag">
					<div class="dropdown">
					  <button class="dropbtn"><i class="fa fa-sign-out"></i> Registration  <b class="caret"></b></button>
					  <div class="dropdown-content">
					    	<a class="dropdown-item" href="online-trademark-registration.php">TM Registration</a>
					    	<a class="dropdown-item" href="online-trademark-objection.php">TM Objection</a>				
					    	<a class="dropdown-item" href="online-trademark-renewal.php">TM Renewal</a>
					    	<a class="dropdown-item" href="online-iso-registration.php">ISO</a>    	
							<a class="dropdown-item" href="online-marriage-registration.php">Marriage Registration</a>
					    	<a class="dropdown-item" href="online-digital-signature.php">Digital Signature Certificate</a>
					  </div>
					</div>
				</div>
		 	</div>
	 	
		</div>
	</div>
</div>

<div class="header-bottom"  id="myHeader">
	<div class="container">
		<div class="row">
		 	<div class="col-md-3 col-sm-6 col-xs-8">
				<div class="barnd-logo">
					<a href="index.php"><img src="https://iili.io/y48Ite.png" alt="logo"></a>
				</div>
		 	</div>
		 	<div class="col-md-9 col-sm-6 col-xs-4">
		 		<div class="navigation" style="">
                        <nav id="nav-wrap">
                            <ul class="sf-menu" id="example">

								<li <?php if (stripos($_SERVER['REQUEST_URI'], 'index.php') !== false)
								 { echo 'class="active"';}
				                    ?>><a href="index.php" class="menu__link"> Home</a>
				                </li>

								<li <?php if (stripos($_SERVER['REQUEST_URI'], 'about.php') !== false)
								 { echo 'class="active"';}
				                    ?>><a href="about.php" class="menu__link"> About </a>
				                </li>	

								<li <?php if (stripos($_SERVER['REQUEST_URI'], 'start-business.php') !== false)
								 { echo 'class="active"';}
				                    ?>><a href="" class="menu__link">Start Business <b class="caret"></b> </a>
				                    <ul>
				                    	<li><a href="online-private-limited-company-registration.php">Private Limited Company</a></li>
			                            <li><a href="apply-for-online-llp-registration.php">Limited Liability Partnership</a></li>
			                            <li><a href="apply-for-opc-online.php">One Person Company</a></li>
			                            <li><a href="apply-for-nidhi-registration.php">Nidhi Company</a></li>				                    	
				                    </ul>
				                </li>

								<li <?php if (stripos($_SERVER['REQUEST_URI'], 'tax.php') !== false)
								 { echo 'class="active"';}
				                    ?>><a href="" class="menu__link"> Tax <b class="caret"></b></a>
				                    <ul>
				                    	<li><a href="online-gst-nil-filing.php">GST Nil</a></li>
			                            <li><a href="online-itr-filing.php">ITR Filing</a></li>
			                            <li><a href="apply-for-online-gst-filing.php">GST Filing</a></li>
			                            <li><a href="apply-for-gst-cancellation.php">GST Cancel</a></li>
			                            <li><a href="online-gst-modification.php">GST Modification</a></li>
			                            <li><a href="online-gst-registration.php">GST Registration</a></li>
				                    </ul>
				                </li>

								<li <?php if (stripos($_SERVER['REQUEST_URI'], 'license.php') !== false)
								 { echo 'class="active"';}
				                    ?>><a href="" class="menu__link"> License <b class="caret"></b></a>
				                    <ul>
				                    
				                    	<li><a href="online-tan-registration.php">Tan</a></li>
				                    
				                        <li><a href="online-sole-proprietorship-registration.php">Sole Proprietorship</a></li> 
				                    </ul>
				                </li>

								<li <?php if (stripos($_SERVER['REQUEST_URI'], 'legal-services.php') !== false)
								 { echo 'class="active"';}
				                    ?>><a href="" class="menu__link"> Legal Services <b class="caret"></b></a>
				                    <ul>
				                    	<li><a href="apply-for-divorce-online.php">Divorce</a></li> 
				                        <li><a href="online-legal-notice.php">Legal Notice</a></li>     
				                        <li><a href="online-legal-advice.php">Online Legal Advice</a></li>
				                        <li><a href="sale-deed-drafting.php">Sale Deed Drafting</a></li>
				                        <li><a href="apply-for-joint-venture-deed.php">joint Venture Deed</a></li>
				                        <li><a href="online-rent-deed-drafting.php">Rent Deed Drafting</a></li>
				                        <li><a href="apply-for-lease-deed-drafting.php">Lease Deed Drafting</a></li>
				                        <li><a href="apply-for-online-partnership-deed-drafting.php">Partnership Deed Drafting</a><li>
				                    </ul>
				                </li>

								<li <?php if (stripos($_SERVER['REQUEST_URI'], 'consumer-complaint.php') !== false)
								 { echo 'class="active"';}
				                    ?>><a href="file-consumer-complaint-online.php" class="menu__link"> Consumer Complaint </a>
				                </li>	

								<li <?php if (stripos($_SERVER['REQUEST_URI'], 'contact-us.php') !== false)
								 { echo 'class="active"';}
				                    ?>><a href="contact-us.php" class="menu__link"> Contact us</a>
				                </li>
							</ul>
						</nav>
				</div>
				
				<!--MOBILE MENU-->
				
                <div class="menu-container">
                    <div class="crbnMenu">
                        <div class="link-stack">
                          
                            <a id="nav-toggle" class="nav-toggle">
                                <span></span>
                            </a>
                        </div>
                
                        <ul class="menu">
                            <li>
                                <a class="nav-link" href="index.php"> Home</a>
                            </li>
                            <li>
                                <a class="nav-link" href="about.php"> About us</a>
                            </li>                            
                            <li>
                                <a class="nav-link" href="#">
                                    <span>Registration</span>
                                    <span class="menu-toggle">
                                        <i class="fa fa-angle-down" aria-hidden="true"></i>
                                    </span>
                                </a>
                                <ul>
                                    <li><a class="dropdown-item" href="online-trademark-registration.php">TM Registration</a></li>
        					    	<li><a class="dropdown-item" href="online-trademark-objection.php">TM Objection</a></li>				
        					    	<li><a class="dropdown-item" href="online-trademark-renewal.php">TM Renewal</a></li>
        					    	<li><a class="dropdown-item" href="iso.php">ISO</a></li>
        							<li><a class="dropdown-item" href="online-marriage-registration.php">Marriage Registration</a></li>
        					    	<li><a class="dropdown-item" href="online-digital-signature.php">Digital Signature Certificate</a></li>
                                </ul>
                            </li>
                            
                            
                            
                            <li>
                                <a class="nav-link" href="#">
                                    <span>Start Business </span>
                                    <span class="menu-toggle">
                                        <i class="fa fa-angle-down" aria-hidden="true"></i>
                                    </span>
                                </a>
                                <ul>
                                    <li><a href="online-private-limited-company-registration.php">Private Limited Company</a></li>
			                        <li><a href="apply-for-online-llp-registration.php">Limited Liability Partnership</a></li>
			                        <li><a href="apply-for-opc-online.php">One Person Company</a></li>
			                        <li><a href="apply-for-nidhi-registration.php">Nidhi Company</a></li>
                                </ul>
                            </li> 
                            
                            <li>
                                <a class="nav-link" href="#">
                                    <span>Tax </span>
                                    <span class="menu-toggle">
                                        <i class="fa fa-angle-down" aria-hidden="true"></i>
                                    </span>
                                </a>
                                <ul>
                                    <li><a href="online-gst-nil-filing.php">GST Nil</a></li>
		                            <li><a href="online-itr-filing.php">ITR Filing</a></li>
		                            <li><a href="apply-for-online-gst-filing.php">GST Filing</a></li>
		                            <li><a href="apply-for-gst-cancellation.php">GST Cancel</a></li>
		                            <li><a href="online-gst-modification.php">GST Modification</a></li>
		                            <li><a href="online-gst-registration.php">GST Registration</a></li>
                                </ul>
                            </li>                             
                            
                            
                            <li>
                                <a class="nav-link" href="#">
                                    <span> License  </span>
                                    <span class="menu-toggle">
                                        <i class="fa fa-angle-down" aria-hidden="true"></i>
                                    </span>
                                </a>
                                <ul>
			                    	<li><a href="online-tan-registration.php">Tan</a></li>
			                    
			                        <li><a href="online-sole-proprietorship-registration.php">Sole Proprietorship</a></li> 
			                        
			                        
                                </ul>
                            </li>                       
                            
                            <li>
                                <a class="nav-link" href="#">
                                    <span>  Legal Services   </span>
                                    <span class="menu-toggle">
                                        <i class="fa fa-angle-down" aria-hidden="true"></i>
                                    </span>
                                </a>
                                <ul>
                                    <li><a href="apply-for-divorce-online.php">Divorce</a></li> 
			                        <li><a href="online-legal-notice.php">Legal Notice</a></li>     
			                        <li><a href="online-legal-advice.php">Online Legal Advice</a></li>
			                        <li><a href="sale-deed-drafting.php">Sale Deed Drafting</a></li>
			                        <li><a href="apply-for-joint-venture-deed.php">joint Venture Deed</a></li>
			                        <li><a href="online-rent-deed-drafting.php">Rent Deed Drafting</a></li>
			                        <li><a href="apply-for-lease-deed-drafting.php">Lease Deed Drafting</a></li>
			                        <li><a href="apply-for-online-partnership-deed-drafting.php">Partnership Deed Drafting</a></li>  
                                </ul>
                            </li>  
                            <li>
                                <a class="nav-link" href="file-consumer-complaint-online.php">Consumer Complaint</a>
                            </li>                            
                            <li>
                                <a class="nav-link" href="contact-us.php"> Contact</a>
                            </li>
                            
                
                        </ul>
                    </div>
                </div>
		 	</div>
		 	<div class="clearfix"></div>
		</div>
		<div class="clearfix"></div>
	</div>
</div>





<div class="body-right">
	<ul>
		<li><a href="https://www.facebook.com/Online-Legal-Service-100167218492206/" target="_blank" title="FACEBOOK" style="background: #4164b0;"><i class="fa fa-facebook-f"></i> Facebook</a></li>
		
		<li><a href="https://www.instagram.com/online_legal_service/" target="_blank" title="Instagram" style="background: #ff9426;"><i class="fa fa-instagram"></i>  Instagram</a></li>
		
	</ul>
</div>






