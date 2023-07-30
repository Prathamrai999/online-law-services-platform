<?php include('header.php');?>


<!-- BANNER-inner -->
<div class="banner-inner">
	<img src="images/MarriageRegistration.jpg" alt="" class="innar-img">
</div>


<!-- consumer-complaint -->
<div class="consumer-complaint">
	<div class="container">
		<h2>Marriage Registration</h2>
		<p>
		<b>Marriage Registration</b> is a legal document representing the marital status of two people.</p>
			<br><br>
		<div class="row">
			<div class="col-md-5">
				<div class="complaint-form" data-aos-duration="1500" data-aos="zoom-in">
	
				 <form method="post" enctype="multipart/form-data">
	        			<div class="input-cont">
	        			    <label for="name">Name </label>
	        				<input type="text" placeholder="  Name" name="name" required>
	        			</div>
	        			<div class="input-cont">
	        			    <label for="name">Phone no </label>
	        				<input type="text"  placeholder="  Phone no" name="phone" required pattern="[0-9]+">
	        			</div>

	        			<div class="input-cont">
	        			    <label for="name">Email </label>
	        				<input type="email" placeholder="   Email" required  name="email">
	        			</div>

	        			<div class="input-cont">
	        			    <label for="name">Address </label>
	        				<input type="text" placeholder="  Address" required=""  name="address">
	        			</div>
	        			<div class="input-cont">
	        			    <label for="name">Aadhar card number: </label>
	        				<input type="text"  placeholder="  Aadhar card number" name="adhar" required>
	        			</div>
	        			<div class="input-cont">
	        			    <label for="name">Select State: </label>
	        				<select name="state" id="state" required>
	                  <option value="">State</option>
                            <?php  
                            $table1='state_list';
                            $stmt=$show->state($table1);
                            $num=$stmt->rowCount();
                            if($num>0){
                            while($row=$stmt->fetch(PDO::FETCH_ASSOC)){
                            	
                            echo "<option value='".$row['state']."'>".$row['state']."</option>";
                            }
                            }
                            
                            ?>
	           
							</select>
	        			</div>	        			
	        			
	        			<div class="input-cont">
	        			    <label for="name">Select Fees : </label>
	        				<select name="fees" required id="fess">
                              
                                <option value="699">699 /- </option>
							  <option value="999">999 /-</option>
							  <option value="1899">1899 /-</option>
							  </select>
	        			</div>	

	        			<div class="input-cont">
	        			    <label for="name">Uplode Image: <sub>( optional max size 2MB )</sub> </label>
	        				<input type="file" id="myFile" name="file" onchange="return fileValidation('myFile','2000')" >
	        			</div>

						<div class="input-cont" style="margin:25px 0 0; width: 35%; ">
							<input type="submit" name="book_sub" value="submit" class="input-success" style="">
						</div>
	            	</form>
<?php if(isset($_POST['book_sub'])){

$uid=$show->getid('ids','USR');

 $img=$show->imageEdit($_FILES['file']['name']);  

      $data = array(
    'user_id' => $uid, 
    'name' => htmlentities(strip_tags($_POST['name'])), 
    'phone' => htmlentities(strip_tags($_POST['phone'])), 
    'email' => htmlentities(strip_tags($_POST['email'])), 
    'address'=>htmlentities(strip_tags($_POST['address'])),
    'state'=>htmlentities(strip_tags($_POST['state'])),
    'adhar'=>htmlentities(strip_tags($_POST['adhar'])),
    'fees'=>htmlentities(strip_tags($_POST['fees'])),
    'image'=>$img,
    'date'=>date('Y-m-d'),
   'payment_status'=>'Pending',
   'status'=>'Pending',
   'type'=>'marriage_regis',
    );
 //   print_r($data);
     move_uploaded_file($_FILES['file']['tmp_name'],"product_img/".$img);
     $em=htmlentities(strip_tags($_POST['email']));
if($show->insert('business_forms',$data)){
         $id=$db->lastInsertId(); 

     echo '<script>
        setTimeout(function() {
        swal({
            title: "Thank You!",
            text: "You will be redirected to payment now.",
            type: "success"
        }, function() {
            window.location = "pay_now.php?oid='.$id.'";
        });
    }, 1000);
</script>';

        
}

}?>		
					</div>
			</div>
			<div class="col-md-7">
				<div class="complaint-online">
					<h5>MARRIAGE REGISTRATION</h5>
					<br>
					<h6>Marriage Registration is performed either under the Hindu Marriage Act, 1955 or under the Special Marriage Act, 1954. Further, in 2006, the Supreme Court made marriage registration mandatory for the welfare of women. In this article, we look at the procedure for marriage registration.</h6><br><br>
						
					<h6><b>Benefits of Marriage Certificate</b>
						<br><br>
					</h6>
					<li>Provide social security (particularly to married women’s).</li>
					<li>It is necessary for every married person.</li>
					<li>It requires in changing various other documents like passport, ration card, PAN card name change, etc.</li>
											
					

					

				</div>
				<div class="complaint-online">

					<h6><b>Documents Required:-</b>
						<br><br>
						At the time of registering the marriage, submit the following documents along with the application form:
					</h6>
					<br><br>
					<li>Residential proof of bride and groom.</li>
					<li>Passport size photograph,</li>
					<li>Age certificate of the bride and groom.</li>
					<li>Proof of marriage such as marriage invitation card, joint photograph and an affidavit from the priest or local Panchayat bodies.</li>

					<img src="images/MRG5.jpg" alt="" style="width: 100%;">
				</div>
		

			</div>			
		</div>

		<div class="row">
			<h2>How We Work</h2>
			<div class="col-md-3">
				<div class="box-work">
					<p>Fill the Form and Make the Payment.</p>
				</div>
			</div>
			<div class="col-md-3">
				<div class="box-work">
					<p>Send all the documents requested by our lawyer.</p>
				</div>
			</div>
			<div class="col-md-3">
				<div class="box-work">
					<p>Get a Call from our lawyer.</p>
				</div>
			</div>
			<div class="col-md-3">
				<div class="box-work">
					<p>Our Lawyer will be assigned for you.</p>
				</div>
			</div>

		</div>		
	</div>





<div class="faq">
	<div class="container">
 		<h3>FAQ</h3>
 		<h6><b>CLICK ON A QUESTION TO SEE THE ANSWAR</b></h6>

 		
			<br><br>
			
			<div class="col-md-12">
				<div class="faq-box">
					<h5>- Who can be a witness to register your marriage?</h5>
					<p>Any person who has attended the wedding of the couple can be a witness and must have a PAN Card and a Proof of Residence. </p>

					<h5>- What are the benefits of marriage certificate?</h5>
					<p>If you are applying for a passport or opening a bank account after the wedding, then Marriage Certificate is required. It is extremely helpful in obtaining visas for both husband and wife. As the foreign embassies in India as well as in countries outside India, do not recognize traditional marriages, the Marriage Certificate is mandatory for the couple to travel abroad using a spouse visa. It also enables a spouse in claiming life insurance return or bank deposits in case of demise of the Insurer or depositor without any nominee. </p>

					<h5>- What is the procedure of a Christian Marriage Registration in India?</h5>
					<p>Although the Hindu Marriage Act, 1955 and the Special Marriage Act, 1954 are the two main legislation governing the process of solemnization and registration of a marriage in India, there are certain other legislation enacted to oversee the process of marriage solemnization and marriage registration between certain minority religions that are present in India. </p>
				
				</div>
			</div>							
	</div>

</div>




<?php include('footer.php');?>