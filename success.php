<?php include('header.php');$id=base64_decode($_REQUEST['mid']);
?>
<div class="banner-inner">
	<img src="images/banner.jpg" alt="" class="innar-img">
</div>
<div class="consumer-complaint">
	<div class="container">	<div class="row">
	   <?php
if($id!=''){
    $sq="update business_forms set payment_status='Confirmed',status='Confirmed' where id='".$id."'";
    $s=$con->prepare($sq);
    if($s->execute()){
     echo "<p>Thank You !! your payment has been successful. We have sent you a confirmation mail. We will contact you soon.</p>";
$stmt1=$show->readwithdata('business_forms','id',$id);    
while ($row = $stmt1->fetch(PDO::FETCH_ASSOC)){
    $em=$row['email'];
    $name=$row['name'];
    $phone=$row['phone'];
}
   // echo "<script>swal('Thank you','we will contact you soon','success');</script>";

  	$email_subject = "Registration Confirmation";
	$em11='<html><head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">';

	$email_content1="<html><head>
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
	<table style='border: 20px double #999;' width='800px'>
<tr><td style='text-align:center;background: #999;'>
	<h3 style='text-align: center; color: #fff; font-size: 20px; text-transform: uppercase;'>Welcome to $company_name</h3></td></tr>
	<tr><td  style='text-align:justify;font-size:18px;'><br>Hi Admin,<br><br>
	New enquiry has come ,details below given. You can also login to admin panel to see the details .
	<br>
	Name :". $name."<br>
	Email:". $em."<br>
	Phone :". $phone."
	
		<br>
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
$email_content="
<html><head>
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
	<table style='border: 20px double #999;' width='800px'>
<tr><td style='text-align:center;background: #999;'>
	<h3 style='text-align: center; color: #fff; font-size: 20px; text-transform: uppercase;'>Welcome to $company_name</h3></td></tr>
	<tr><td  style='text-align:justify;padding:12px;font-size:18px;'><br>Hi ".$name.",<br><br>
Thank You for contacting us.Your payment as been successful. we will contact you soon. <br><br>

		<br>
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
	  
	if(@mail($email,$email_subject,$email_content1,$headers) && @mail($em,$email_subject,$email_content,$headers)) {
   // echo "<script>window.location.href='otp.php?id=".base64_encode($capcha)."&uid=".base64_encode($id)."&m=".base64_encode($mail_id)."'</script>";


	}    
    }
}else{ header('location:index.php');}

	   ?></div>
</div></div>

<?php include 'footer.php' ?>
