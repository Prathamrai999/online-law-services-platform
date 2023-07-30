<?php include('header.php');$id=base64_decode($_REQUEST['mid']);
?>
<div class="banner-inner">
	<img src="images/banner.jpg" alt="" class="innar-img">
</div>
<div class="consumer-complaint">
	<div class="container">
	   <?php
	if($id!=''){   
	       echo "<p>Sorry !! your payment has failed. Please try again.</p>";
	}else{ header('location:index.php');}
	   
	   ?>
</div></div>

<?php include 'footer.php' ?>
