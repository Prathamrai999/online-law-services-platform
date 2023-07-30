<?php include('header.php');?>


<!-- BANNER-inner -->
<div class="banner-inner">
	<img src="images/RentDeed.jpeg" alt="" class="innar-img">
</div>


<!-- consumer-complaint -->
<div class="consumer-complaint">
	<div class="container">
		<h2>Rent Deed Drafting</h2>
		<p>A rental agreement is an official contract signed between the owner of a property and the tenant who wishes to take temporary possession of the property for a said period of time</p>
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
	        				<textarea name="problem" required  id="message" placeholder="   Say Something about your problem in short or in details" ></textarea>
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
   'type'=>'rent_deed',
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
					<h5>Create Rental Deed/Agreement Online | Vidhik Sevaen</h5>
					
					<h6><b>A team of leagl expert will draft your rent agreement or deed in 1 day. You don't have to go anywhere. 100% online process. Get ready your rent agreement today.</b><br><br><b>What is Rent Agreement?</b><br>
					Rental agreement is actually a contract between two parties. One is the owner of a property and the other one is the tenant, when he wants to have possession of the owner's property for a certain period of time. A rental agreement is also called a rent deed or lease deed. The agreement contains the details of the property, the owner's name and the tenant's name, the term of the rent or lease and the monetary amount of the rent for the said period of time.</h6>
					<br>

					<h6><b>Why is the rent agreement for 11 months?</b><br>
					Usually most of the agreements are signed for 11 months in order to avoid stamp duty and other charges. As per the registration act, 1908 the registration of a lease agreement is essential in case of the lease term is more than 12 months. Once the agreement is registered, stamp duty and registration fee have to be paid for the same.
					<br>
					For example, in Delhi, for a lease up to 5 years, the stamp paper value is 2% of the average annual rent. If a security deposit is a part of it, then add a fee of Rs 100. For a lease of more than 5 years and less than 10 years, the cost is 3% of the annual average rent. For a lease of more than 10 years and less than 20 years, the cost is 6% of the average annual rent. The stamp paper can be made under the name of the tenant or the landlord. Also, a registration charge of Rs 1,100 has to be paid by demand draft.</h6>

					<h6>Terms commonly included in a Rent agreement<br></h6>


						<li><b>Duration</b>: The rent agreement will be effective for this period.</li>
						<li><b>Rent</b>: The amount of payment made by the tenant to the landlord for the specific property.</li>
						<li><b>Lock-in period</b>: Either party can not terminate the agreement during this lock in period. It is the minimum duration to make sure neither party changes its mind and backs out after the agreement is issued and other party faces loss. This lock in period must be specified in the agreement.</li>
						<li><b>Deposits</b>: TThe deposit amount is required for rental agreement. The purpose of the deposit and conditions of return of the deposit after the completion of rental period is mentioned in the agreement.</li>
						<li><b>Terms of Use</b>: The purpose of the rent of the property, terms and conditions regarding the usage of the property.</li>
						<li><b>Utilities</b>: The utilities that are included in the rent and the utilities the tenant is responsible for.</li>
					

				</div>
				<div class="complaint-online">

					<h5>Difference between Rent / Lease vs Leave and license</h5>

					<table>
						<tr>
							<th>Rent / Lease Agreement</th>
							<th>Leave and license Agreement</th>
						</tr>
					
					  <tr>
					    <td>Grants exclusive possession of immovable property to tenant.</td>
					    <td>Provides only a permission to occupy a certain property</td>
					  </tr> 
					  <tr>					   
					    <td>Eviction is not easily achieved</td>
					    <td>Makes eviction easier</td>
					  </tr>
					  <tr>					   
					    <td>Governed by rent control act</td>
					    <td>Governed by Indian Contract Act</td>
					  </tr>

					  <tr>					   
					    <td>Not revocable by the landlord</td>
					    <td>Revocable by the landlord</td>
					  </tr>	

					  <tr>					   
					    <td>Stamp duty is higher</td>
					    <td>Stamp duty is lower</td>
					  </tr>						  
					  <tr>					   
					    <td>Creates heritable rights</td>
					    <td>Does not create heritable rights</td>
					  </tr>	

					</table>					

				</div>
			</div>			
		</div>

		<div class="row">
			<h2>How We Work</h2>
			<div class="col-md-4">
				<div class="box-work">
					<p>Fill The Form And Make The Payment</p>
				</div>
			</div>
			<div class="col-md-4">
				<div class="box-work">
					<p>The Draft Will Be Sent To You For Approval</p>
				</div>
			</div>
			<div class="col-md-4">
				<div class="box-work">
					<p>Draft Will Be Created By Expert Team Of Lawyer</p>
				</div>
			</div>
			<div class="col-md-4">
				<div class="box-work">
					<p>You Will Get A Call From Our Lawyer</p>
				</div>				
			</div>		
			<div class="col-md-4">
				<div class="box-work">
					<p>Advocate Will Receive Entire Information From You</p>
				</div>
			</div>
			<div class="col-md-4">
				<div class="box-work">
					<p>After Approval You Will Be Able To Download the Deed</p>
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
		
					<h5>Can we do online rent agreement?</h5>
					<p>One can create rental agreement online. It is completely free of hassle and requires less time. Online rent agreement is created only by filling in the required information. Once the agreement is created it is mailed to both the parties that are the landlord and the tenant.</p>

					<h5>Is it necessary to register rent agreement?</h5>
					<p>According to section 17 in the Registration Act 1908, it is very important to register for leases and rent of immovable property for any term beyond 1 year. Registration is not mandatory as only the stamp duty is applicable for rental agreements of less than one year.</p>

					<h5>What are the documents required for rental agreement?</h5>
					<p>A copy of the address proof of both the parties and witnesses is required in the process. Along with that, a copy of Aadhar card, PAN card, passbook, ration card, driving license, passport any of them can be submitted as address proof.</p>

					<h5>How do I write a legal rental agreement?<h5>
					<p>It is generally advised to consult an expert in regards to writing a rent agreement. Online agreement is also another area where one should take the expertise of a professional. The rent agreement should be simple, explicit and easy to understand contract and should include details regarding the deposit.</p>

					<h5>What are the features of a good rent agreement?</h5>
					<p>A rent agreement should be simple. It should deal with the right person and identify each party correctly. One should agree on a way to resolve disputes and spell out all the  details.</p>

					
									
				</div>
			</div>							
	</div>

</div>




<?php include('footer.php');?>