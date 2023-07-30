<?php include('header.php');?>


<!-- BANNER-inner -->
<div class="banner-inner">
	<img src="images/TAN.jpeg" alt="" class="innar-img">
</div>


<!-- consumer-complaint -->
<div class="consumer-complaint">
	<div class="container">
		<h2>APPLY FOR TAN Registration</h2>
		<p>Tax Deduction and Collection Account Number</p>
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
                                <option value="300">300 /- </option>
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
   'type'=>'TAN'
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
					<h5>TAN</h5>
					
					<h6>TAN Number is a 10 Digit Alphanumeric Number and is used as an abbreviation for Tax Deduction and Collection Account Number. Every Assesses liable to deduct TDS is required to apply for a TAN No. Every Individual who can get tax deducted needs this license.

					<br>

					<h6><b>BENEFITS OF TAN NUMBER</b><br></h6>

					<li>This ensures transparency in taxation.</li>
					<li>Different branches of a company can separately make TAN applications online.</li>
					<li>Helps in getting TDS Return.</li>

					
				</div>
				<div class="complaint-online">
					<h6><b>Documents required:-</b></h6>
					<li><img src="images/pas1.png" alt="" class="pan-icon">Passport size Photo</li>
					<li><img src="images/pas5.png" alt="" class="pan-icon">Aadhar Card</li>
					<li><img src="images/pas6.png" alt="" class="pan-icon">Address Proof.</li>

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
					<p>Our Expert will apply for your TAN Card</p>
				</div>
			</div>
			<div class="col-md-3">
				<div class="box-work">
					<p>Upload all the required documents.</p>
				</div>
			</div>
		
			<div class="col-md-3">
				<div class="box-work">
					<p>Congratulations your TAN Card issued.</p>
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
					<h5>What is TAN Card?.</h5>
					<p><b>TAN </b> Card Tax Deducted Account Number is a 10 Digit Alpha – Numeric number issued by the Income Tax department.</p>

					<h5>Who requires TAN Card?.</h5>
					<p><b>TAN,</b> is to be obtained by all those individual who are eligible for TDS return and TCS return. It is Compulsory to quote TAN no in TDS and TCS return or TDS and TCS Payment.</p>


					<h5>Is TAN Card Mandatory for all?.</h5>
					<p><b>No, </b> it requires only for the taxpayers.Those who are eligible for deducting and Collecting TDS( Tax Deducted at Source) as well as TCS (Tax Collected at Source).</p>

					<h5>Is PAN Card and TAN Card are Same?</h5>
					<p><b>PAN </b> Card and <b>TAN,</b>  are very similar as both is required for Tax Payers and contains 10 Digit Alpha-numeric digits which is issued by Income Tax Department. But still they are not same as TAN Card is requires for TDS and TCS whereas PAN is required all Individuals.</p>

				</div>
			</div>							
	</div>

</div>




<?php include('footer.php');?>