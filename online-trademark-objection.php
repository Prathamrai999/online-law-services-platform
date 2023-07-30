<?php include('header.php');?>


<!-- BANNER-inner -->
<div class="banner-inner">
	<img src="images/TMObjection.jpg" alt="" class="innar-img">
</div>


<!-- consumer-complaint -->
<div class="consumer-complaint">
	<div class="container">
		<h2>TM Objection</h2>
		<p>Trademark Objection is the second stage of Trademark Registration Process</p>
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
	        			<span><b>NOTE :</b><br> 699 Purchase / Loss amount [ Rs 0 - 10000 ]<br>
												999 Purchase / Loss amount [ Rs 10001 - 25000 ]<br>
												1899 Purchase / Loss amount [ Rs25000 - above ]</span>
	        			<div class="input-cont">
	        			    <label for="name">Select Fees : </label>
	        				<select name="fess" id="fess">
							  <option value="699">699 /- </option>
							  <option value="999">999 /-</option>
							  <option value="1899">1899 /-</option>
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
   'type'=>'tm_object',
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
					<h5>All you need to know about Trademark Objection </h5>
					<h6>A trademark is a type of intellectual property consisting of an identifiable sign, design, or expression which identifies products or services of a particular source from those of others, although trademarks used to identify services are usually called service marks. <br><br>
					Once a trademark application is filed, the Trademarks Registrar will process your application and issue an Examination Report. But due to some valid reasons, trademark Registrar can have objections on any trademark application which does not meet their legal norms. The applicant gets an opportunity to prove how his/her Trademark fits the criteria for availing the valid registration within the stipulated period of 30 days from the date of the receipt of the Examination Report.</h6>
						<br>



						
					<h6><b>Reasons for Trademark Objection</b>
						<br>
					</h6>
					<li>Incorrect Name of the Trademark Applicant</li>
						<li>Incorrect Address on the Trademark Application</li>
						<li>Failure in filing Trademark Form TM-48</li>
						<li>Filing of Incorrect Trademark Form</li>
						<li>Trademark filing under the Wrong Trademark Class</li>
						<li>The proposed Trademark already exists</li>
						<li>Trademark lacks distinctive character</li>
						<li>Vague specifications of Goods and Services</li>
						<li>Deceptive Trademark</li>
						<li>User affidavit not attached</li>
					
						<br>

					<table>
					
					  <tr>
					    <td>Trademark Objection Reply</td>
					    <td>Rs 2299</td>
					    <td>No Hidden Charge One Time Payment</td>
					    <td>No Goverment fee Required</td>
					  </tr>

					</table>

				</div>
				<div class="complaint-online">
					<h5>How to File a Trademark Objection Response – Complete Process</h5>
					<h6>When an objection is raised, the status of the trademark in the Indian Trademark Registry will be marked as <b>“Objected”.</b>
					<br><br>
					<b>Step 1:</b> Analyzing and Studying the Trademark Objections Our trademark expert will analyze and Study the Trademark Objections
					<br><br>
					<b>Step 2: </b>Drafting of Trademark Objection Reply Our expert will prepare an answer to the objection raised with supporting rule of law, valid documents & proofs
					<br><br>
					<b>Step 3: </b>Submit Trademark Objection Reply Submit the reply of trademark objection to the examiner online</h6>
					<br>

					<h6></b>Required Documents for Trademark Objection</b></h6>
					<br>

					<li>Brand Logo</li>
					<li>Examination Report</li>
					<li>Supporting Proof of Logo ownership</li>
					
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
					
					
<h5> What is meant by trademark 'objected' ? </h5>
<p>During the process of registration the examiner should satisfy with the trademark which means the mark should be compelled with all criteria and rules for registration, in case the examiner feels unsatisfied with the trademark he may object  it. He will intimate to the applicant and the applicant need to respond within thirty days and such reply need to satisfy the examiner, on failing to reply the application will be abandoned and failing to satisfy the examiner may reject the application. Hence, reply should be crafted by an expert of trademark and Legal.</p>

<h5>Where to get the examination report of trademark objection?</h5>
<p>You can get the examination report of the trademark objection on the website of IPI India.</p>

<h5>How much times does it take for trademark objection reply ?</h5>
<p>TM expert drafts and files a reply within the 3 working days of objection received subject to the availability of the documents</p>

<h5> What is meant by trademark 'opposed' ?</h5>
<p>As far as the status is showing objected you can be able to file the reply for your trademark objection mentioned in the examination report, in case the trademark resembles or infringes any existing trademark or any other reason it might cause damages, in such cases the aggrieved party may file an objection to the examiner and the examiner may solve the issue based upon the parties statements and evidences. When the objection arose the examiner will inform to the applicant and he need to reply within sixty days on failing to do so the applicant will deem to be abandoned.</p>

<h5>What is difference between trademarks objected and trademark opposed ?</h5>
<p>The Trademark objected will be done by the examiner by questioning on the essential criteria for the registration and the opposed will be done by the third party on the credibility of the trademark.</p>

<h5>When a trademark gets objected ?</h5>
<p>The reason for the objection can be many either regarding the documents filed or regarding the fulfillment of criteria mandated by the statue and rules.</p>

<h5>What are the grounds available for objection ?</h5>
<p>The objection can be made with respect to the trademark statue and rules, which expressly restrains the registration of the trademark on basis of two ground absolute and relative grounds.</p>

<h5>What will happen if the response fails to satisfy the trademark office ?</h5>
<p>The response should satisfy the officer on failing to do so, the application will be rejected.</p>

<h5>What can be done further if the application is rejected ?</h5>
<p>On rejection can approach the Intellectual property appellate board.</p>

<h5>Is there any Government fee to file the examination reply ?</h5>
<p>No there isn’t any government fee to file the examination reply.</p>

<h5> Can I use the TM sign for my Trademark or Logo even if the Trademark Objection Examination Report is issued ?</h5>
<p>Yes, you can. The Trademark Registry does not intend to bar the usage of the TM sign if it issues a trademark Objection or Examination Report. It only requires a suitable legal reply w.r.t objection raised.</p>

<h5> What we have to do after the application is published in the journal ?</h5>
<p>The application is published in the trademark journal for next 3 months, where it can be objected by a third party. If no opposition has been made by the third party, trademark Registration Certificate will be issued by the Trademark Registry.</p>

					
					
				
				</div>
			</div>							
	</div>

</div>




<?php include('footer.php');?>