<?php
include '../settings/settings.php';

$login=new Oops($db); 
?>
<!DOCTYPE HTML>
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
		<div id="page-wrapper" style="background:url(<?=$background_img?>); background-size:100% 100%; margin:0 auto;">
			<div class="main-page login-page ">
				<h3 class="title1"><img src="<?=$company_logo?>" width="100px"></h3>
				<h3 class="title1"><?=$signin_title?></h3>
				<div class="widget-shadow" style=" box-shadow:0 -1px 3px rgba(0, 0, 0, 0.7),0 1px 2px rgba(0,0,0,.24);webkit-box-shadow: 0 -1px 3px rgb(43, 22, 140),0 1px 2px rgb(0, 0, 0);-moz-box-shadow: 0 -1px 3px rgba(0,0,0,.12),0 1px 2px rgba(0,0,0,.24);">
					<div class="login-top">
					</div>
					<div class="login-body">
						<form method="post" data-toggle="validator">
											<div class="form-group has-feedback">
											<input type="email" class="form-control" id="inputEmail" name="email" placeholder="Enter Your Email" data-error="Bruh, that email address is invalid" required>
											<span class="glyphicon form-control-feedback" aria-hidden="true"></span>
										</div>
							<div class="form-group">
											<input type="password" data-toggle="validator" name="password" data-minlength="6" class="form-control" id="inputPassword" placeholder="Password" required>
										</div>
							<div class="bottom">
											<div class="form-group">
												<input type="submit" class="btn btn-primary" value="Login" name="sub">
											</div>
							<a href="forget_pass.php">Forgot Password?</a>
										</div>
							
						
						
						
						</form>
					</div>
				</div>
				
<?php
if(isset($_POST['sub'])){
//	echo md5('hackit_321');
	$login->data1=filter_var($_POST['email'],FILTER_SANITIZE_STRING);
	$login->data2=md5(filter_var($_POST['password'],FILTER_SANITIZE_STRING));
	$login->col1="email";
	$login->col2="password";
	$login->table="admin";

    $r=$login->login();
 
    if($r){
    $num = $r->rowCount();
    if($num>0){
    while($row= $r->fetch(PDO::FETCH_ASSOC)) //fetching the contents of the row
    {
    extract($row);
    $uid=session_id();
    $_SESSION['Logged'] = 1;
    $_SESSION['login_user'] = $row['name'];
    $_SESSION['username'] = $_POST['email'];
    $_SESSION['sessionid'] = $uid;
     //  echo 'Success!';
    header("location:dashboard.php");
    //exit();
    }
        
    }else{
    echo "<script>alert('Wrong Credentials');</script>";
}
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