<?php include('header.php');?>


<!-- BANNER-inner -->
<div class="banner-inner">
	<img src="images/ConsumerComplaint.jpg" alt="" class="innar-img">
</div>


<!-- consumer-complaint -->
<div class="consumer-complaint">
	<div class="container">
		<h2>File Your Consumer Complaint Online.
		        <b>Submit Your Case Now in Consumer Forum/Court.</b></h2>
		<p>Submit your case to Consumer Forum with the help of Vidhik Sevaen. We believe that customer should be first priority for every company and those who cheat customers and didn't provide service in time, need to penalty. Customers are having the rights to complaints against who didn't provide in satisfactory way.
            Vidhik Sevaen helps you resolve your case with case. Save Time to get Justice.</b></p>
<br><br>
		<div class="row">
			<div class="col-md-5">
				<div class="complaint-form" data-aos-duration="1500" data-aos="zoom-in">
				<!--	<form method="post" enctype="multipart/form-data">
	        			<div class="input-cont">
	        			    <label for="name">Name </label>
	        				<input type="text" placeholder="Name" name="name" value=""   required>
	        			</div>
	        			<div class="input-cont">
	        			    <label for="name">Phone no </label>
	        				<input type="text" value="" placeholder=" Phone no" name="name"   required>
	        			</div>

	        			<div class="input-cont">
	        			    <label for="name">Email </label>
	        				<input type="email" placeholder=" :  Email" value=""  name="email"  required> 
	        			</div>

	        			<div class="input-cont">
	        			    <label for="name">Address </label>
	        				<input type="text" placeholder=" :  Address" value=""  name="address" required>
	        			</div>
	        			<div class="input-cont">
	        			    <label for="name">Aadhar card number: </label>
	        				<input type="text" value="" placeholder=" :  Aadhar card number:" required>
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
	        			<span><b>NOTE :</b><br> 699 Purchase / Loss amount [ Rs 0 - 10000 ]<br>
												999 Purchase / Loss amount [ Rs 10001 - 25000 ]<br>
												1899 Purchase / Loss amount [ Rs25000 - above ]</span>
	        			<div class="input-cont">
	        			    <label for="name">Select Fees : </label>
	        				<select name="state" id="state">
							  <option value="699">699 /- </option>
							  <option value="999">999 /-</option>
							  <option value="1899">1899 /-</option>
							</select>
	        			</div>	

						<div class="input-cont" style="margin:25px 0 0; width: 35%; ">
							<input type="submit" name="book_sub" value="submit" class="input-success" style="">
						</div>
	            	</form>-->
			
				 <form method="post" enctype="multipart/form-data">
	        			<div class="input-cont">
	        			    <h3>File Your Consumer Complaint Here..</h3>
	        			    <br>
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
	        			    <label for="name">Problem Details: </label>
	        				<textarea name="problem" required  id="message" placeholder=" Say Something about your problem in short or in details" ></textarea>
	        			</div>
	        			
	        			<div class="input-cont">
	        			    <label for="name">Select Fees : </label>
	        				<select name="fees" required id="fess">
                              
<option value="699">699 /- </option>
							  <option value="999">999 /-</option>
							  <option value="1299">1299 /-</option>
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
   'type'=>'complaint',
    'problem'=>htmlentities(strip_tags($_POST['problem'])),
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
					<h5>Complaint Online</h5>
					<h6><b>[Updated] Consumer Protection Act, 2019:-</b>
						<br>
						Consumer Protection Bill was introduced in Lok Sabha in 2019 replacing the ConsumerProtection Act, 1986. The bill has defined customer rights including the following:</h6>
						<br>
						<li>Protection against marketing goods and products which are harmful to life.</li>
						<li>Information regarding quality, quantity, purity, standard and price of goods and services.</li>
						<li>Access to different products and services at competitive costs.</li>
						<li>Reimbursement against unfair and fraudulent trade practices.</li>

						<br>
					<h6><b>Compensation & Penalties As Per Bill, 2019:-</b>
						<br>
						<b>Penalties for misleading advertisement</b>
						The CCPA can impose a penalty of up to Rs 10 lakhs and two-year imprisonment for misleading or false advertisement. The fine may be extended to Rs 50 lakhs and the imprisonment may extend to five years.</h6>

						<br>
					<h6><b>Right to file a complaint from anywhere</b>
						<br>
						As per this new rule, consumers are allowed to file a complaint from anywhere be it home, office or anywhere else.</h6>

						<br>
					<h6><b>Right to seek compensation under product liability</b>
						<br>
						In case any loss is caused to a consumer due to a defective product, the consumer can file a complaint against the manufacturer or the service provider and ask for compensation. The manufacturer or seller would be held liable if the product does not conform to express the warranty.</h6>						
				</div>
				<div class="complaint-online">
					<h5>Fees:-</h5>


					<table>
					
					  <tr>
					    <td>Purchase / Loss Amount</td>
					    <td>Purchase / Loss Amount</td>
					    <td> Purchase / Loss Amount</td>
					  </tr>
					  <tr>
					    <td>₹ 0– ₹ 10,000</td>
					    <td>₹ 10,001 – ₹ 25,000</td>
					    <td>₹ 25,001 – Above</td>
					  </tr>
					  <tr>
					    <td>Professional Fees</td>
					    <td>Professional Fees</td>
					    <td>Professional Fees</td>
					  </tr>
					  <tr>
					    <td>₹ 699 /- </td>
					    <td>₹ 999 /- </td>
					    <td>₹ 1899 /- </td>
					  </tr>
					  <tr>
					    <td>Laughing Bacchus Winecellars</td>
					    <td>Yoshi Tannamuri</td>
					    <td>Canada</td>
					  </tr>
					  <tr>
					    <td>Magazzini Alimentari Riuniti</td>
					    <td>Giovanni Rovelli</td>
					    <td>Italy</td>
					  </tr>
					</table>
					
					<h6><b>Our Advantages:-</b>
						<br>
						<b>Time Saving </b>File online consumer complaint will save your time.
						The CCPA can impose a penalty of up to Rs 10 lakhs and two-year imprisonment for misleading or false advertisement. The fine may be extended to Rs 50 lakhs and the imprisonment may extend to five years.</h6>
						<br>	

					<h6><b>Complaint Anywhere</b>
						It can be done from any location i.e. home, office or vacation trip</h6>
						<br>

					<h6><b>Legal Notice</b>
						You can send legal notice to the company</h6>
						<br>

					<h6><b>Any Device</b>
						The complaint can be filed from mobile/computers.</h6>
						<br>

					<h6><b>Expert Advice</b>
						You will receive assistance from Consumer Complaint experts of Vidhik Sevaen.</h6>
						<br>

					<h6><b>Claim for Compensation</b>
						You can claim for compensation amount from consumer court .

				</div>
			</div>			
		</div>

		<div class="row">
			<div class="col-md-7">
		
			</div>
			<div class="col-md-5">
				
			</div>			
		</div>		
	</div>


</div>


<div class="faq">
	<div class="container">
 		<h3>FAQ</h3>
 		<h6><b>Please Check The Frequenty Asked Questions.</b></h6>

 		
			<br><br>
			
			<div class="col-md-12">
				<div class="faq-box">
					<h5>Who can file a Consumer complaint?</h5>
					<p><b>Yes : </b> Any consumer who has purchased products or availed services
					<br><b>Yes : </b>A registered volunteered organization
					<br><b>Yes : </b>A group of customers with mutual interest
					<br><b>Yes : </b>Legal heirs of a dead consumer
					<br><b>Yes : </b>Relatives of a consumer
					<br><b>Yes : </b>Central or State Government </p>

					<h5>When can a consumer file a complaint</h5>
					<p>When a customer is unsatisfied by the service of any service provider or seller, when defects are detected in concerned products or service or when a customer is cheated by a seller, then a complaint can be filed from the consumer’s side.</p>

					<h5>Can a consumer Complaint be filed online?</h5>
					<p>In order to avoid difficulty, one can file a consumer complaint online through <a href="https://www.vidhiksevaen.com/">Vidhik Sevaen</a></p>

					<h5>Can a Consumer court decision be challenged?</h5>
					<p>If anyone is not satisfied with the decision of the National Commission then according to Revision Petition, he or she can file a Special Leave Petition in the Supreme Court within a period of thirty days, which is the limitation period mentioned in the Consumer Protection Act.</p>

					<h5>What are the punishments under the Consumer Protection Act?</h5>
					<p>When a complaint is made against a person and that person fails to comply with State or National Commission’s decision, he or she shall be imprisoned for up to one month that might extend to three years.</p>

					<h5>Can a customer claim compensation from a company?</h5>
					<p>Obviously a consumer can claim compensation from a company depending on the case and on condition he can prove it in the court.</p>

					<h5>How much time Vidhik Sevaen takes to resolve a case?</h5>
					<p>Though it basically depends on the company to solve customer’s problem but we immediately take required action as soon as we receive the application. We keep follow up with the company. Most of the cases are resolved quite quickly.</p>

					<h5>Where to register consumer complaints?</h5>
					<p>A customer can easily file the complaint with <a href="https://www.vidhiksevaen.com/">Vidhik Sevaen</a> Here one has to provide with the details of the applicant as well as the fraudulent company. We take strict actions against the service provider by sending legal notice to the company. The customer just needs to choose from the package options.</p>

					
					<h5> Do you need any proof to support your complaint?</h5>
					<p>Yes you do need evidence in order to support the complaint you file. The evidence should be legible and read without any problem.</p>


				</div>
			</div>							
	</div>

</div>



<?php include('footer.php');?>