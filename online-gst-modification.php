<?php include('header.php');?>


<!-- BANNER-inner -->
<div class="banner-inner">
	<img src="images/GSTModi.jpeg" alt="" class="innar-img">
</div>


<!-- consumer-complaint -->
<div class="consumer-complaint">
	<div class="container">
		<h2>GST Modification and Amendment of GST Registration</h2>
		<p>Vidhik Sevaen will help you fulfil all the formalities regarding the GST modification and amendment of GST registration.</p>
			<br><br>
		<div class="row">
			<div class="col-md-5">
				<div class="complaint-form" data-aos-duration="1500" data-aos="zoom-in">
				<!--	<form method="post" enctype="multipart/form-data">
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
	        				<span><b>NOTE :</b><br>899 (BASIC PLAN)<br>
												1399 (STANDARD PLAN)<br>
												1599 (PREMIUM PLAN)</span>

	        			    <label for="name">Select Fees : </label>
	        				<select name="fess" id="fess">
							  <option value="899">899 /- </option>
							  <option value="1399">1399 /- </option>
							  <option value="1599">1599 /- </option>							  
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
   'type'=>'gst_modi'
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
					<h5>GST Modification</h5>
					
					<h6><b>GST MODIFICATION</b><br>
					Any changes made in the GST Registration or the details entered in the GST certificate are referred to as GST modification or update. One may go for change in GST Registration if he/she wishes from composite to normal scheme, or if there are mistakes in GST registration. To get GST modification, you need to file form GST REG 14.
				</h6>

					<h6>Details that can be changed or updated?</h6>
					<li>Address of the principal place of business</li>
					<li>An additional place of business</li>
					<li>Addition, deletion or retirement of partners or directors, Managing Committee, CEO i.e., people who are responsible for day to day affairs of the business</li>
					<li>Mobile number or e-mail address of the authorized signatory</li>
					
					
				</div>
				<div class="complaint-online">

					<h6><b>Documents Required:-</b>
					</h6>
						<li>Documentary Proof of Changes</li>
						<li>GST Filing Fees</li>
					<table>

					  <tr>
					    <th>Basic Plan</th>
					    <th>Standard Plan</th>
					    <th>Premium Plan</th>
					  </tr>		

					  <tr>
					    <td>₹ 599</td>
					    <td>₹ 799</td>
					    <td>₹ 999</td>
					  </tr>

					  <tr>
					  	<td>3 Month Plan</td>
					  	<td>6 Month Plan</td>
					  	<td>12 Month Plan</td>
					  </tr>

					  <tr>
					  	<td>Change in Non-core fields ( those related to GST applicationexcept for legal name of the business,Addition and deletion of stakeholder's detail andprincipal or additional place of business). Dedicated GST Expert Call, Chat & Email Support</td>
					  	<td>Change in core fields-Legal Name of the BusinessAddition / Deletion of Stakeholders Principal / Additional Place of Business Dedicated GST Expert Call, Chat & Email Support</td>
					  	<td>Change from Composite to Regular scheme Dedicated GST Expert Call, Chat & Email Support</td>
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
					<p>Upload all the Necessary documents. requested by our expert.</p>
				</div>
			</div>
			<div class="col-md-4">
				<div class="box-work">
					<p>Congratulations! Your GSTIN is Successfully Modified.</p>
				</div>
			</div>
			<div class="col-md-3">
			</div>		
			<div class="col-md-3">
				<div class="box-work">
					<p>Get a Call from Our GST Expert and get Consultation.</p>
				</div>
			</div>
			<div class="col-md-3">
				<div class="box-work">
					<p>Successful Submission of all your details.</p>
				</div>
			</div>


		</div>			
	</div>





<div class="faq">
	<div class="container">
 		<h3>FAQ</h3>
 		<h6><b>Please check the frequesntly asked questions</b></h6>

 		
			<br><br>
			
			<div class="col-md-12">
				<div class="faq-box">
					<h5>Can we add another business address in existing GST registration ?</h5>
					<p>Yes, if you can add an additional business address to your existing GST certificate</p>

					<h5>Can I shift from composition to regular scheme under GST ?</h5>
					<p>Yes, you can, our professional can assist you migrating composition to the regular scheme through GST modification.</p>

					<h5>Can I shift my business from regular to composition scheme under GST ?</h5>
					<p>No, GST department has discontinued this facility with effect from 31st March, 2018.</p>

					<h5>Do I need to physically present for the process ?</h5>
					<p>No, you don’t need to be physically present for the process,Vidhik Sevaen is an online corporate service provider all you need is an internet connection in your phone/computer and the required documents with you and we can get the job done no matters even if you are present at the remotest location of India.</p>

				</div>
			</div>							
	</div>

</div>




<?php include('footer.php');?>