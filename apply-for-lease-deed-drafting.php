<?php include('header.php');?>


<!-- BANNER-inner -->
<div class="banner-inner">
	<img src="images/LeaseDeedAgreement.jpeg" alt="" class="innar-img">
</div>


<!-- consumer-complaint -->
<div class="consumer-complaint">
	<div class="container">
		<h2>Lease Deed Drafting</h2>
		<p>A lease deed is a document or a written contract between the property owner or a landlord also known as lessor and the tenant or lessee, which contains all the terms and conditions, including the rent to be paid, security deposit to be made, etc</p>
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
	        				
	        			    <label for="name">Select Fees : </label>
	        				<select name="fess" id="fess">
							  <option value="1499">1499 /- </option>
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
	        			    <label for="name">Problem Details: </label>
	        				<textarea name="problem" required  id="message" placeholder="Say Something about your problem in short or in details" ></textarea>
	        			</div>
	        			
	        			<div class="input-cont">
	        			    <label for="name">Select Fees : </label>
	        				<select name="fees" required id="fess">
                              
							  <option value="1499">1499 /- </option>
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
   'type'=>'lease_deed',
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
					<h5>Lease Agreement/Deed Drafting Online by Experienced Lawyers</h5>
					
					<h6><b>Vidhik Sevaen help regarding drafting your Lease Deed online. You will not be required to visit any office physically. More than 2000 Lease Agreement have been drafted by our team by far</b><br><br><b>What is a "Lease"?</b><br>
					According to Transfer of Property Act, Section 105, Lease is defined as a handover of a right to claim property, land or estate for a particular period of time or in permanence. Owning a lease comes with the respect of an amount paid or agreed upon, a share of commodities (or any other form of supplies), service and any valuable payback. In order to understand ‘lease’, one should first come to realize the below terms:</h6>
					<br>
					<li>Less or the lease provider (property owner) will have complete authority over the property which is then handed over to the lessee</li>
					<li>Lessee the lease holder who obtains the entitlements to make use of and possess the property on contract from the Lessor</li>
					<li>Duration the period of time against which the lessee possesses the property rights is also known as "duration".</li>

					<br>
					<h6><b>What is a Lease Agreement/Deed?</b><br>
					
					A lease deed/ Agreement/ Leave and License agreement is essentially a contract wherein the tenant (the lessee) agrees upon paying the landlord (lessor) a periodic rental amount for using a property. ... It lays down the specific terms & conditions for leasing of properties.</h6>

					

				</div>
				<div class="complaint-online">

					<h5>Difference between Lease and Sale</h5>

					<table>
						<tr>
							<th>Lease</th>
							<th>Sale</th>
						</tr>
					
					  <tr>
					    <td>The tenant is able to enjoy only the rights to use the property.</td>
					    <td>In this case, the buyer gets the whole right of ownership of a property.</td>
					  </tr> 
					  <tr>					   
					    <td>Except on the condition of perpetuity, the lessee rights to process the property comes to an end once the lease is terminated.</td>
					    <td>There is no limit for usage of the property.</td>
					  </tr>
					  <tr>					   
					    <td>The money is paid like a premium or on specific intervals.</td>
					    <td>The cost of the property is paid one time.</td>
					  </tr>

					  <tr>					   
					    <td>The lessee can only enjoy the use of the property. A transfer of lease is allowed in most cases though the ownership rights to the property lies with the leaser.</td>
					    <td>Buying a property allows the buyer to enjoy the freedom selling the property in future.</td>
					  </tr>	


					</table>	

					<br>
					<h6><b>Key Contents of a Lease Deed in India</b><br>There are certain important provisions that should be included in every lease agreement in India are as follows-<br><br>
					</h6>
					<li><b>Description of Property</b>: The deed should contain the description of the property such as area, location, structure, address, and other information.</li>	
					<li><b>Duration</b>: The lease agreement should clearly state the time span for which the validity of the lease will be in force. This provision might also include the information about the renewal of lease deed in case the parties want to continue with the contract.</li>	
					<li><b>Rent, Maintenance, and Security:</b> The lease deed must clarify the rent amount, payment mode, due dates, security deposits, interest for payment delay etc. It should include the information regarding the maintenance charges, society charges and utility bills etc.</li>	
					<li><b>Subletting:</b> The lease deed must include the information about whether the tenant is able to sublet the property or not.</li>	
					<li><b>Dispute Resolution: </b>It must be mentioned in the deed that the manner in which the legal dispute arising between the parties out of breach of the agreement and how it will be dealt with. It may consist ADR process such as Arbitration.</li>							

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
		
					<h5>What is the meaning of lease deed?</h5>
					<p><b>A </b>  lease deed is an agreement where the tenant has agreed to pay a periodic rent to the landlord</p>

					<h5>Is it necessary to register lease deed?</h5>
					<p><b> If </b>  the leasing period is more than 12 months, registration of lease agreement is mandatory according to the Registration Act, 1908. If an agreement is registered then stamp duty and registration fee is applicable and needs to be paid.</p>

					<h5>What is the difference between lease deed and rent agreement?</h5>
					<p><b>Although</b>  the term rent and lease are synonymous in nature renting a property is not akin to leasing a property. A rent agreement can either be a lease or a license. It will be treated as per the terms and conditions and renting period mentioned in the agreement.</p>

					<h5>What happens if a lease is not registered?<h5>
					<p><b>Registration</b>  constitutes notice of the lease to all parties and all purposes. If not registered it means that it has not given the notice. The consequence is that a landlord may not be able to recover unpaid rent from the guarantor if the tenant fails to pay.</p>

					<h5>Which Act of the Indian Govt. overviews the Lease Agreement procedure?</h5>
					<p><b>The</b>  provisions of the Transfer of Property Act of the Indian Govt. overviews the procedure of the Lease Agreement procedures in the country.</p>

					
									
				</div>
			</div>							
	</div>

</div>




<?php include('footer.php');?>