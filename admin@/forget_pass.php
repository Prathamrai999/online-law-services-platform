<?php
include '../settings/settings.php';

$show=new Oops($db); 
?>
<html>
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title><?=$company_name?></title>
<meta name="viewport" content="width=device-width, initial-scale=1">

<meta name="keywords" content="" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Bootstrap Core CSS -->
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- Custom CSS -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<!-- font CSS -->
<!-- font-awesome icons -->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome icons -->
 <!-- js-->
<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/modernizr.custom.js"></script>
<!--webfonts-->
<link href='//fonts.googleapis.com/css?family=Roboto+Condensed:400,300,300italic,400italic,700,700italic' rel='stylesheet' type='text/css'>
<!--//webfonts--> 
<!--animate-->
<link href="css/animate.css" rel="stylesheet" type="text/css" media="all">
<script src="js/wow.min.js"></script>
	<script>
		 new WOW().init();
	</script>
<!--//end-animate-->
<!-- Metis Menu -->
<script src="js/metisMenu.min.js"></script>
<script src="js/custom.js"></script>
<link href="css/custom.css" rel="stylesheet">
<!--//Metis Menu -->
</head> 
<body class="cbp-spmenu-push">
	<div class="main-content">
		
		<!-- main content start-->
		<div id="page-wrapper" style="background:url(images/back.jpg); background-size:100% 100%; margin:0 auto;">
			<div class="main-page login-page ">
				<div class="widget-shadow">
					<div class="login-top">
                    <p>Reset Password</p>
					</div>
					<div class="login-body">
					 <form method="post">
                        <div class="form-group">
                            <label for="email">Email Id</label>
                            <input type="email" class="form-control" name="email" placeholder="Email" required>
                        </div>

                      
                        <button type="submit" name="sub" class="btn">Submit</button>
                    </form>
					</div>
				</div>
				
 <?php
if(isset($_POST['sub'])){
 $sq="select email from admin where email='".trim($_POST['email'])."'";
$stmt=$con->prepare($sq);
$stmt->execute();
$num1=$stmt->rowCount();   
/*      $stmt=$show->readwithdata('client','phone',$_POST['phone']); 
      $num1=$stmt->rowCount();*/
if($num1>0){
$no=rand(1,10000);
$capcha=$no;
$my_mail=$_POST['email'];
$user=$_POST['email'];
$email_subject = "Reset Password-OTP";
$emcc='<html><head>';
$email_content="<html><head>
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

</style>
</head>
<body>
<table style='border: 40px solid #000;width=800px;'>
<hr>
<h3>Welcome to $company_name </h3></td></tr>
<tr><td  style='text-align:justify;padding:12px;font-size:18px;'><br>Hi ,<br><br>
your reset password OTP is : ".$capcha."<br><br>
Please visit this link and verify your OTP and reset the password.
<br>
<a href='$link/reset_password2.php?id=".base64_encode($capcha)."&m=".base64_encode($_POST['email'])."&tab=".base64_encode('admin')."'>Change Password</a>

<br><br><br><br>	
Thanks & Regards,<br>
$company_name,<br>
Web : $website/<br>
Email : $email<br>
<br>
<br>
</td></tr>
</tr>
</table>
</body></html>";
	$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
	  
if(@mail($my_mail,$email_subject,$email_content,$headers)) {
echo "<script>alert('OTP has been sent to your registered mail.')</script>";
//echo "<script>window.location.href='bill.php'</script>";
echo "<script>window.location.href='reset_password2.php?id=".base64_encode($capcha)."&m=".base64_encode($_POST['email'])."&tab=".base64_encode('client')."';</script>";   


} else {
//echo "<script>alert('Message  not sent!')</script>";
}
}else{
echo "<script>alert('Please put a registered mail id .This  mail id is not registered with us.')</script>";   
}
  
}

?>					
			
			</div>
		</div>
		<!--footer-->
		<div class="footer">
		   <p>&copy; 2020 <?=$company_name?> . All Rights Reserved | Designed & Developed by <a href="https://incrementertech.com" target="_blank">Incrementer Technology Solutions Pvt Ltd</a></p>
		</div>
        <!--//footer-->
	</div>
	<!-- Classie -->
		<script src="js/classie.js"></script>
		<script>
			var menuLeft = document.getElementById( 'cbp-spmenu-s1' ),
				showLeftPush = document.getElementById( 'showLeftPush' ),
				body = document.body;
				
			showLeftPush.onclick = function() {
				classie.toggle( this, 'active' );
				classie.toggle( body, 'cbp-spmenu-push-toright' );
				classie.toggle( menuLeft, 'cbp-spmenu-open' );
				disableOther( 'showLeftPush' );
			};
			
			function disableOther( button ) {
				if( button !== 'showLeftPush' ) {
					classie.toggle( showLeftPush, 'disabled' );
				}
			}
		</script>
	<!--scrolling js-->
	<script src="js/jquery.nicescroll.js"></script>
	<script src="js/scripts.js"></script>
	<!--//scrolling js-->
	<!-- Bootstrap Core JavaScript -->
   <script src="js/bootstrap.js"> </script>
   	<script src="js/validator.min.js"></script>

</body>
</html>