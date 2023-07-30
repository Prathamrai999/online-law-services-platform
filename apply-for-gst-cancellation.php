<?php include('header.php');?>


<!-- BANNER-inner -->
<div class="banner-inner">
	<img src="images/GSTCancel.jpeg" alt="" class="innar-img">
</div>


<!-- consumer-complaint -->
<div class="consumer-complaint">
	<div class="container">
		<h2>GST Surrender or Cancellation Now - Easy Online Process</h2>
		<p>Your <b>GST</b> registration can be cancelled at anytime due to various reasons. You can easily cancel a GST registration online through Vidhik Sevaen.</p>
			<br><br>
		<div class="row">
			<div class="col-md-5">
				<div class="complaint-form" data-aos-duration="1500" data-aos="zoom-in">
					<!--<form method="post" enctype="multipart/form-data">
	        			<div class="input-cont">
	        			    <label for="name">Name </label>
	        				<input type="text" placeholder=" :  Name" name="name" value="" >
	        			</div>
	        			<div class="input-cont">
	        			    <label for="name">Phone no </label>
	        				<input type="text" value="" placeholder=" :  Phone no" >
	        			</div>

	        			<div class="input-cont">
	        			    <label for="name">Email </label>
	        				<input type="email" placeholder=" :  Email" value=""  name="email">
	        			</div>

	        			<div class="input-cont">
	        			    <label for="name">Address </label>
	        				<input type="text" placeholder=" :  Address" value=""  name="address">
	        			</div>
	        			<div class="input-cont">
	        			    <label for="name">Aadhar card number: </label>
	        				<input type="text" value="" placeholder=" :  Aadhar card number:" >
	        			</div>
	        			<div class="input-cont">
	        			    <label for="name">Select State: </label>
	        				<select name="state" id="state">
							  <option value="west bengal">WEST BENGAL</option>
							  <option value="west bengal">WEST BENGAL</option>
							  <option value="west bengal">WEST BENGAL</option>
							  <option value="west bengal">WEST BENGAL</option>
							</select>
	        			</div>	        			


	        			<div class="input-cont">
	        			    <label for="name">Problem Details: </label>
	        				<textarea name="message"  id="message" placeholder=" :  Say Something about your problem in short or in details" ></textarea>
	        			</div>
	        			
	        			<div class="input-cont">
	        				<span><b>NOTE :</b><br>1899 (BASIC PLAN 3 MONTHS)<br>
													2899 (STANDARD PLAN 6 MONTHS)<br>
													8899 (PREMIUM PLAN 12 MONTHS)</span>

	        			    <label for="name">Select Fees : </label>
	        				<select name="fess" id="fess">
							  <option value="1899">1899 /- </option>
							  <option value="2899">2899 /- </option>
							  <option value="8899">8899 /- </option>							  
							</select>
	        			</div>	

	        			<div class="input-cont">
	        			    <label for="name">Uplode Image: <sub>( optional max size 2MB )</sub> </label>
	        				<input type="file" id="myFile" >
	        			</div>

						<div class="input-cont" style="margin:25px 0 0; width: 35%; ">
							<input type="submit" name="book_sub" value="submit" class="input-success" style="">
						</div>
	            	</form>-->
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
                               <option value="399">399 /- </option>
							  
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
   'type'=>'gst_cancel'
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
					<h5>GST CANCELLATION</h5>
					
					<h6><b>GST</b> Registration can be cancelled by any person who is no longer required to file GST Return if either his annual turnover is below the <b>GST</b> exemption limit or the taxpayer is no longer liable to be a registered person or any other reasons. One must settle all the GST liability before they could apply for cancellation of GSTIN.
					</h6>
					<br>
					<h6><b>When To Go For GST Cancellation :-</b><br>
					Non-filing of <b>GST</b> Returns for 6 months Non -Filing of <b>GST</b> Returns for 3 months u/s 10 of <b>GST</b> act No business activity – If its close or death of the proprietor, discontinued or transferred fully, demerged, amalgamated with other legal entity. Unlawful <b>GST</b> Registration (Registration has been obtained by means of fraud, willful misstatement or suppression of facts.) Voluntary cancellation (Non-filing of <b>GST</b> Returns for 6 months) Non-Voluntary / SUO Moto Cancellation Change any constitution of business or any taxable person other than u/s 25(3) and u/s 22 & 24 of <b>GST</b> act.
					</h6>
					<br>
					<h6><b>How Vidhik Sevaen Help with Cancellation of <b>GST</b> Registration:-</b><br>

						Vidhik Sevaen will help you cancel <b>GST</b> registration within 30-60 days, subject to Government processing times Application Preparation Dedicated <b>GST</b> Expert will prepare your <b>GST</b> registration cancellation application and collect the necessary documents for filing of application with the <b>GST</b> Department. Application Filing Once the application is prepared and verified, <b>GST</b> expert will submit the <b>GST</b> registration cancellation application to the <b>GST</b> Department along with details of Authorized Signatory. Application Filing Once the application and the attached supporting documents are uploaded, the <b>GST</b> Department would allot an ARN number. <b>GST</b> expert will track the ARN number to completion.</h6>



				</div>
				<div class="complaint-online">
					<h6><b>Documents Required:-</b>

						The GSTIN of the business to be cancelled Details of inputs held in stock or inputs contained in semi-finished or finished goods held in stock Details of any pending GST liability, fines, penalty, etc. Details of any GST payment, made against such liability and details of input tax credit.
					</h6>

					<br>

					<h6><b>Select Your Plan:-</b>
					</h6>
					
					<table>

					  <tr>
					    <th>Basic Plan</th>
					    <th>Standard Plan</th>
					    <th>Premium Plan</th>
					  </tr>		

					  <tr>
					    <td>₹ 1899</td>
					    <td>₹ 2899</td>
					    <td>₹ 8899</td>
					  </tr>

					  <tr>
					  	<td>One Time Charges</td>
					  	<td>One Time Charges</td>
					  	<td>One Time Charges</td>
					  </tr>

					  <tr>
					  	<td>Applicable for entities with no activities. Dedicated GST Expert Call, Chat & Email Suppor</td>
					  	<td>Applicable for entities with no activities. Dedicated GST Expert Call, Chat & Email Support</td>
					  	<td>Completely managed cancellation service & reply to any notice Dedicated GST Expert Call, Chat & Email Support</td>
					  </tr>

					</table>
				</div>
		
			</div>			
		</div>

		<div class="row">
			<h2>How We Work</h2>
			<div class="col-md-4">
				<div class="box-work">
					<p>Fill our Form and Make the Payment.</p>
				</div>
			</div>
			<div class="col-md-4">
				<div class="box-work">
					<p>Upload all the Necessary documents.</p>
				</div>
			</div>
			<div class="col-md-4">
				<div class="box-work">
					<p>Congratulations! Your GST-Cancel has been successfully submitted.</p>
				</div>
			</div>
			<div class="col-md-3">
			</div>		
			<div class="col-md-3">
				<div class="box-work">
					<p>Get a Call from Our GST Expert.</p>
				</div>
			</div>
			<div class="col-md-3">
				<div class="box-work">
					<p>Our experts will proceed for your GST- Cancel after you approved it.</p>
				</div>
			</div>


		</div>			
	</div>





<div class="faq">
	<div class="container">
 		<h3>FAQ</h3>
 		<h6><b>Please Check the Frequently Asked Questions.</b></h6>

 		
			<br><br>
			
			<div class="col-md-12">
				<div class="faq-box">
					<h5>Should we still file the GST returns in the transaction period ?</h5>
					<p>Yes, you can file the returns until the cancellation order is passed to safeguard yourself from the late fees</p>

					<h5>How long does it take to cancel GST registration ?</h5>
					<p>If the proper officer is satisfied he can revoke the cancellation of registration by an order in FORM GST REG-22 within 30 days from the date of receipt of the application.</p>

					<h5>Do I need to physically present for the process ?</h5>
					<p>No, you don’t need to be physically present for the process, Vidhik Sevaen is an online corporate service provider all you need is an internet connection in your phone/computer and the required documents with you and we can get the job done no matters even if you are present at the remotest location of India.</p>

					<h5>How will I know if my GST registration is likely to be cancelled ?</h5>
					<p>If your GST registration is likely to be cancelled by order, the GST authority will send you a show cause notice to which you will have to give a suitable reply within 7 days.</p>

					<h5>Can we revoke the GST registration after GST cancellation ?</h5>
					<p>No. Following the legal directives of the Company (Incorporation) Rules, 2014 of the Indian Govt. a One Person Company (OPC) cannot become a member or be associated with a Sec. 8 company.</p>

					<h5>What is Suo Moto Cancellation in GST?</h5>
					<p>Suo Moto Cancellation of GST Registration means cancellation of registration by GST Officer on its own. There must be a valid reason for initiation of proceeding for Suo moto cancellation as specified under Section 29(2) of the CGST/SGST Act.</p>					

				</div>
			</div>							
	</div>

</div>




<?php include('footer.php');?>