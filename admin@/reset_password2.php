<?php
include '../settings/settings.php';

$login=new Oops($db); 
?>
<?php 
   
$m=base64_decode($_REQUEST['m']);
$otp=base64_decode($_REQUEST['id']);
$table=base64_decode($_REQUEST['tab']);
?>

<script>
  function check(){  
    
    var radioValue = $("input[name='type']:checked").val();
 //alert(radioValue);
   if(radioValue=='Email'){
            $('#em').show();
            $('#phn').hide();
            $("#email").prop('required',true);

    }else if(radioValue=='Phone'){
            $('#em').hide();
            $('#phn').show();
            $("#phone").prop('required',true);

    }
  
  
  }
function checkPass()
{
    var pass1 = document.getElementById('pass1');
    var pass2 = document.getElementById('pass2');
    var message = document.getElementById('error-nwl');
    var goodColor = "#66cc66";
    var badColor = "#ff6666";
 	
    if(pass1.value.length > 7)
    {
        message.style.color = goodColor;
        message.innerHTML = "character number ok!"
    }
    else
    {
        message.style.color = badColor;
        message.innerHTML = " you have to enter at least 8 digit!"
        return;
    }
  
    if(pass1.value == pass2.value)
    {
        message.style.color = goodColor;
        message.innerHTML = "ok!"
        document.getElementById("btn").disabled = false;
   
    }
	else
    {
        message.style.color = badColor;
        message.innerHTML = " These passwords don't match"
       document.getElementById("btn").disabled = true;

    }
}
</script>

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
		<div id="page-wrapper" style="background:url(images/back.jpg); background-size:100% 100%; margin:0 auto;">
			<div class="main-page login-page ">
				<div class="widget-shadow">
					<div class="login-top">
                    <p>Reset Password</p>
					</div>
					<div class="login-body">
					 <form method="post">
                        <?php if (filter_var($m, FILTER_VALIDATE_EMAIL)) $fname='email';
else $fname='phone'; ?>
                        <div class="form-group">
                            <label for="otp">OTP</label>
                            <input type="text" name="otp_new"  placeholder="OTP" required>
                            <input type="hidden" name="otp" value="<?=$otp?>"  placeholder="OTP">
                            <input type="hidden" name="table" value="admin">
                            <input type="hidden" name="field_name" value="email" >
                            <input type="hidden" name="field_value" value="<?=$m?>">
                            
                            <label for="password">New Password :</label>
                            <input type="password" name="password"   title="password should have an Upper case,a lower case ,number and any characters like @$#_" id="pass1" onkeyup="checkPass(); return false;" placeholder="New Password">
                            
                            <label for="password">Confirm Password :</label>
                            <input type="password"  name="cpassword1" id="pass2" onkeyup="checkPass(); return false;" placeholder="Confirm Password ">
                            <div id="error-nwl"></div>

                        </div>

                        <input type="submit" name="sub" class="btn" value="SET PASSWORD ">
                         <p class="account1">Resend OTP<a href="forget_pass.php?type=<?=base64_encode($table)?>"><strong>Click Here</strong></a></p>

                    </form>
					</div>
				</div>
				
  <?php
if(isset($_POST['sub'])){
  if($_POST['otp']==$_POST['otp_new']){
      
     $sq="update ".$_POST['table']." set password='".md5($_POST['cpassword1'])."' where ".$_POST['field_name']."='".$_POST['field_value']."'";
  // echo $sq; 
   $stmt=$con->prepare($sq);
   $r=$stmt->execute();


    if($r){
        echo "<script>alert('Yours Password has been reset.');window.location.href='index.php';</script>";
    }
     
  }else{
     echo "<script>alert('OTP mismatched.Please verify otp.');</script>";
        
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