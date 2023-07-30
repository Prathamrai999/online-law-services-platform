<?php include('header.php');?>


<!-- BANNER-inner -->
<div class="banner-inner">
	<img src="images/banner.jpg" alt="" class="innar-img">
</div>


<!-- INNER- Contact -->
<div class="contact-us">
 	<div class="container">
 		<h2>Get Intouch</h2>
 		<h6>Contact</h6> 		
 		

 		<div class="row" >
 			<div class="col-md-5 col-sm-5 col-xs-12">
 				<div class="conta-inner-text">
 					<ul class="cont-d">
 						<li><i class="fa fa-map-marker"></i>
 							<a target="_blank" href="https://www.google.co.in/maps/search/Kaikhali,+Vip+Road+Indraprasth+appartment,+Block-A2,+Flat-no+402/@22.6333271,88.4330347,17z/data=!3m1!4b1"> <?=$address?></a>
 						</li>
						<li><i class="fa fa-phone"></i>
							<a target="_blank" href="tel:<?=$phone?>">   +91 <?=$phone?></a> 
						</li>
						<li><i class="fa fa-envelope"></i>
							<a target="_blank" href="mailto:<?=$email?>">  <?=$email?></a>
						</li>

			            <li title="facebook"><a href="<?=$fb?>" target="_blank"><i class="fa fa-facebook"></i> Facebook</a></li>
			            <li title="instagram"><a href="<?=$insta?>" target="_blank"><i class="fa fa-instagram"></i> Instagram</a></li> 
			            <li title="linkedin"><a href="https://www.linkedin.com/in/legoporate-enterprise-100332206" target="_blank" title="linkedin" style=""><i class="fa fa-linkedin"></i> linkedin</a></li> 		            
 					</ul>
 								
 				</div>
 			</div>
 			<div class="col-md-7 col-sm-7 col-xs-12">
 				<form method="post" enctype="multipart/form-data">
            			
        			<div class="input-cont">
        			    <label for="name">Name </label>
        				<input type="text" placeholder=" :  Name" name="name" required>
        			</div>
        			<div class="input-cont">
        			    <label for="name">Phone no </label>
        				<input type="text" name="phone" placeholder=" :  Phone no" required>
        			</div>
        			<div class="input-cont">
        			    <label for="name">Email </label>
        				<input type="email" placeholder=" :  Email" name="email" required>
        			</div>
        			<div class="input-cont">
        			    <label for="name">Message </label>
        				<textarea name="content"  id="message" placeholder=" :  Message"  required></textarea>
        			</div>
					<div class="input-cont" style="margin:25px 0 0; width: 63%; ">
						<input type="submit" name="sub" value="Confirm" class="input-success" style="">
					</div>
            	</form>
 			</div>

 <?php
if(isset($_POST['sub'])){

  
/*	$data=array(
    'name'=>htmlentities(strip_tags($_POST['name'])),
    'email'=>htmlentities(strip_tags($_POST['email'])),
    'phone'=>htmlentities(strip_tags($_POST['phone'])),
    'content'=>htmlentities(strip_tags($_POST['content'])),
    'date'=>date('Y-m-d')
	);

    if($show->insert('enquiry',$data)){
    echo "<script>alert('Thank you for Enquiring. We will contact you soon');</script>";
	}	
*/
  // $my_mail="support@yadass.com";
	$email_subject = "Enquiry";
$em='<html><head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">';
$email_content="
	<style>
	h2{
	color:#000;
font-size:26px;
	}
	#b{
	width:500px;
	font-size:15px;
	}
	th{
	background-color:#fff;
	}
	body, td, input, textarea, select {
    font-family:'Podkova', serif;
    margin: 0;
}
	</style>
	</head>
	<body>
	<table style='border: 20px double #1475ad;' width='800px'>
<tr><td style='text-align:center;background: #1475ad;'>
	<h3 style='text-align: center; color: #fff; font-size: 20px; text-transform: uppercase;'>Welcome to ".$company_name." </h3></td></tr>
	
	<tr><td  style='text-align:justify;padding:12px;font-size:18px;'>New Enquiry has come :
	<br>Name ".$_POST['name'].",<br>
	<br>Email ".$_POST['email'].",<br>
	<br>Phone ".$_POST['phone'].",<br>
	<br>content ".$_POST['content'].",<br><br>


<br><br><br><br>	
<br><br><br><br>	
Thanks & Regards,<br>
".$company_name.",<br>
Web : ".$website."<br>
Email : ".$email." <br>
<br>
<br>
</td></tr>
</tr>
</table>
</body></html>";
	$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
	  
	if(@mail($email,$email_subject,$email_content,$headers) && @mail($_POST['email'],$email_subject,$email_content,$headers)) {
		echo "<script>swal('Mail has been sent. We will contact you soon');
	
		</script>";
	

		
	} else {
		echo "<script>alert('Message  not sent!')</script>";
	}
}
?>					 			
 		</div>

	</div>
</div>







<?php include('footer.php');?>