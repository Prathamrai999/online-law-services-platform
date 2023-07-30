<?php include('header.php');?>


<!-- BANNER-inner -->
<div class="banner-inner">
	<img src="images/OnlineLegalAdvice.jpeg" alt="" class="innar-img">
</div>


<!-- consumer-complaint -->
<div class="consumer-complaint">
	<div class="container">
		<h2>Online Legal Advice</h2>
		<p>Legal advice is the giving of a professional or formal opinion regarding the substance or procedure of the law in relation to a particular factual situation</p>
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
	        				<span><b>NOTE :</b><br>999 1st YEAR<br>
	        				
											1499 2ND YEAR<br>
											1999 3Rd YEAR<br>
											2799 4th YEAR<br>
											3999 5th YEAR<br>
											1499 FSSAI STATE LICENSE (Excluding Govt Fees).<br>
											2999 FSSAI CENTRAL LICENSE (Excluding Govt Fees).</span>
	        		
	        			    <label for="name">Select Fees : </label>
	        				<select name="fess" id="fess">
							  <option value="999">999 /- </option>
							  <option value="1499">1499 /- </option>
							  <option value="1999">1999 /- </option>	
							  <option value="2799">2799 /- </option>
							  <option value="3999">3999 /- </option>	
							  <option value="2999">2999 /- </option>								  						  
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
	        				<textarea name="problem" required  id="message" placeholder="  Say Something about your problem in short or in details" ></textarea>
	        			</div>
	        			
	        			<div class="input-cont">
	        			    <label for="name">Select Fees : </label>
	        				<select name="fees" required id="fess">
                              <option value="499">499 /- </option>
							  <option value="799">799 /- </option>
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
   'type'=>'legal_advice',
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
					<h5>Get Online Legal Advice - Civil & Criminal Matters</h5>
					
					<h6>Tensions! Worries! Don't Worry.. Our Experienced Lawyers Will Help You Out We Resolve Any Kind of Cases: Divorce | Criminal Cases | Delay In Possession | Cheating Partner | Builder Dispute | Employment & Salary Issue | Cheque Bounce | Property Disputes | Money Recovery Suit | Consultation on Family Matters | Domestic Violence Police Complaint | Wrongful Termination | Removal of Copyright Objection | Unpaid Salary | Debt Recovery</h6>
					<br>

					<h6><b>What is Legal Help?</b>

				Legal Help is the way to provide assistance to the people who is not able to access the court easily. Legal Help includes various kinds of advice, providing service, forming draft or agreement etc. Legal advice is the way of giving professional opinion relating to any factual matter or any situation. Our company provides with the solution to their clients based on the applicable law. We provide the best of advice in exchange of monetary compensation.
				<br>

			In our common law system, in criminal and civil law, advice is being provided by the advocates or lawyers, or other professionals (such as tax experts, professional advisors, etc).
			In today's world, with modernization, crimes are also increasing at fast rate, so there is constant requirement of legal help. We at Legoporate Enterprise , are here to provide with the solution for the clients. Clients gets here the best of services provided by our professionals, working for the satisfaction of the client. With the advent of the internet, we offer answers to legal questions to the clients directly, through our web services.</h6>
		
				</div>
				<div class="complaint-online">
					<h6><b>What is a Legal Complaint?</b></h6>
					<li>Legal Advice Charges INR 399/-</li>
					<li>Legal Advice + Legal Notice INR 799/-</li>
					<li>Any Agreement/Will/Notary & Affidavit and any others INR 1499/-</li>

					<b>Online/Phone Legal Advice V/S In-Person Consultation</b>
					<li>A real time most demanding legal support</li>
					<li>Save time</li>
					<li>Save Transportation cost</li>
					<li>Private matters can be discussed freely</li>
					<li>Convenient for clients with busy schedules</li>
					<li>Provide urgent solutions for some clients</li>

			
				
			</div>
			</div>			
		</div>

		<div class="row">
			<h2>How We Work</h2>
			<div class="col-md-4">
				<div class="box-work">
					<p>Submit Your Legal Issue Or Query</p>
				</div>
			</div>
			<div class="col-md-4">
				<div class="box-work">
					<p>You Will Get A Call From Our Lawyer</p>
				</div>
			</div>
			<div class="col-md-4">
				<div class="box-work">
					<p>We Will Provide With The Best Advice As Possible</p>
				</div>
			</div>
			<div class="col-md-3">
								
			</div>		
			<div class="col-md-3">
				<div class="box-work">
					<p>Pay The Fee</p>
				</div>
			</div>
			<div class="col-md-3">
				<div class="box-work">
					<p>Analyzing The Case Carefully</p>
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
					<h5>Who can ask for legal advice?</h5>
					<p>Any person or body corporate in India or outside India; Government of India authorities.</p>

					<h5>On which matter legal help can be taken?</h5>
					<p>Any matter relating to Civil and Criminal, Family & Matrimonial matters, Civil and Property matters, Banking matters, Business Law Matters, Employment and Labor Matters, RTI, GST, Consumer Protection matters mentioned can ask for legal help.</p>

					<h5>Can a lawyer take legal advice from Online ?</h5>
					<p>Yes, a lawyer is always free to take advise from us and can register with us by clicking on</p>

					<h5>What if one is not satisfied with the advice?</h5>
					<p>If any individual or company is not satisfied with our advice then we will provide another legal expert without any additional costs.</p>

					<h5>What is the average time to get advice from us?</h5>
					<p>The average time taken from us to reply is 5 mins to 24 business hours.</p>
					

				</div>
			</div>							
	</div>

</div>




<?php include('footer.php');?>