<?php include('header.php');?>


<!-- BANNER-inner -->
<div class="banner-inner">
	<img src="images/TrademarkRenewal.jpeg" alt="" class="innar-img">
</div>


<!-- consumer-complaint -->
<div class="consumer-complaint">
	<div class="container">
		<h2>TM Renewal</h2>
		<p>
			The registration of a trademark is valid only for a period of 10 years. After which, it can be <b>renewed from time to time</b>. Trademark renewal preserves those rights which are only available to a registered mark.</p>
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
   'type'=>'tm_renewal',
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
					<h5>Renew Trademark Online – Easy & Quick Process </h5>
					<h6>File your trademark renewal application to extend your <b>Trademark rights for the next 10 years </b></h6>
						<br>
						<br>
					<h6><b>The Validity Of Trademark</b><br>
					The validity of the Trademark exists for a period of 10 years. One should renew its trademark certificate within the mentioned time period to avoid any objection & interruption. This application has to be filed on or before 6 months from the date of expiration of the registration. </h6>
						<br>
						<br>

						
					<h6><b>Documents Required</b>
						<br>
					</h6>
						<li>ID Proof of applicant</li>
						<li>TM Certificate</li>
						<li>Power of Attorney</li>
						<li>Copy of Trademark Registration</li>
					
						<br>

					

				</div>
				<div class="complaint-online">
					<h5>How we help with Trademark Renewal</h5>
					<h6>Vidhik Sevaen can help you file a trademark renewal application in 5 to 10 working days, subject to government and client processing time. Dedicated TM Expert An Vidhik Sevaen Trademark Expert would determine the details of registration for which renewal application must be filed. A trademark renewal application is prepared by the Vidhik Sevaen Trademark Expert. Renewal Filing On obtaining the consent of the client, the trademark renewal application is filed with the Trademark Registry and the processing of the application is tracked.</h6>
					<br>
					<br>
					

					<table>
					
					  <tr>
					    <td>Trademark Renewal</td>
					    <td>Rs 1999</td>
					    <td>No Hidden Charge One Time Payment</td>
					    <td><b>EXCLUDED</b> - Government fee of Rs.4500/- will be applicable after filling the TM application.</td>
					  </tr>

					</table>
					
				</div>
		

			</div>			
		</div>

		<div class="row">
			<h2>How We Work</h2>
			<div class="col-md-3">
				<div class="box-work">
					<p>Fill The Form And Make The Payment</p>
				</div>
			</div>
			<div class="col-md-3">
				<div class="box-work">
					<p>We Will Draft The Authorization Letter (Form-48)</p>
				</div>
			</div>
			<div class="col-md-3">
				<div class="box-work">
					<p>Our Expert Will File The TM Application</p>
				</div>
			</div>
			<div class="col-md-3">
				<div class="box-work">
					<p>We Will Search The Class Of Your Brand By Trademark Expert</p>
				</div>
			</div>
			<div class="col-md-3">
				
			</div>			
			<div class="col-md-3">
				<div class="box-work">
					<p>Upload The Required Documents</p>
				</div>
			</div>
			<div class="col-md-3">
				<div class="box-work">
					<p>Congratulations! You Can Use Now ™ Next To Your Brand</p>
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
					
<h5>What if the trademark expires ?</h5>

<p>You can apply for the restoration of an expired trademark within 6 months from its expiry date to keep using it. But the delay of 6 months can be risky and shall attract additional fees and documentation.</p>

<h5>What is the difference between a trademark registration and a trademark renewal ?</h5>
<p>Trademark Registration is a long process that takes a number of documents and requires more time than the renewal. A renewal is basically for continuing your ownership and use of the trademark, while registration is the initial process to get its exclusive ownership. After completion of every 10 years, the trademark needs to be renewed.</p>
<h5>What are the consequences of failure to renew the trademark ?</h5>
<P>In the case of non-renewal, the consequences are severe. Because the trademark would be removed from the register and any other person can claim it and get it registered to their name.</P>
<h5>When to file a renewal of trademark ?</h5>
<p>The Trademark renewal can be done anytime within 6 months of expiration of 10 years of trademark registration. Any further delay above 6 months will attract extra fee. If the renewal process is not completed within 12 months of expiration of trademark, the trademark will be removed from the trademark register.</p>
<h5>What is meant by trademark 'opposed' ?</h5>
<p>In case the trademark resembles or infringes any existing trademark or any other reason it might cause damages, in such cases the aggrieved party may file an objection to the examiner and the examiner may solve the issue based upon the parties statements and evidences. When the objection arose the examiner will inform to the applicant and he need to reply within sixty days on failing to do so the applicant will deem to be abandoned.</p>
<h5>Do I need to physically present for the process ?</h5>
<p>No, you don’t need to be physically present for the process, Vidhik Sevaen is an online platform all you need is an internet connection in your phone/computer and the required documents with you and we can get the job done no matters even if you are present at the remotest location of India. </p>


					
				</div>
			</div>							
	</div>

</div>




<?php include('footer.php');?>