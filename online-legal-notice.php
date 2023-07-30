<?php include('header.php');?>


<!-- BANNER-inner -->
<div class="banner-inner">
	<img src="images/OnlineLegalNotice.jpeg" alt="" class="innar-img">
</div>


<!-- consumer-complaint -->
<div class="consumer-complaint">
	<div class="container">
		<h2>Online Legal Notice</h2>
		<p>All legal action can only be taken once notice has been served upon the entity or individual you wish to take to court</p>
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
	        				<span><b>NOTE :</b><br>499 (For Legal Advice Only)<br>
							799 (For Legal Advice plus Legal Notice)<br>
							1499 (For Agreement/ Will/ Notary & Affidavit or any others)</span>
	        		
	        			    <label for="name">Select Fees : </label>
	        				<select name="fess" id="fess">
							  <option value="499">499 /- </option>
							  <option value="799">799 /- </option>
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
   'type'=>'legal_notice',
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
		
	            	<img src="images/unnamedbr.jpg" alt="" style="width: 100%; margin:30px 0 0;">
				</div>
			</div>
			<div class="col-md-7">
				<div class="complaint-online">
					<h5>Send a Legal Notice/Reply to a Legal Notice – Vidhik Sevaen</h5>
					
					<h6><b>Draft your Legal Notice online with help of experienced advocates in India through Vidhik Sevaen. Send Legal notice or Reply to Legal Notice.</b><br>A "Legal Notice" is a legal intimation sent to the opponent indicating that the aggrieved is preparing to file a lawsuit against the concern in case the demand mentioned in the relevant notice is not fulfilled.<br>

					Therefore, in a nutshell a legal notice can be defined as a formal communication to any person or a legal entity, informing the other party of your intention to undertake legal proceedings against them.<br>

					This notice, when sent, conveys your intention prior to the legal proceedings and thus, makes the party aware of your grievance.</h6>
					<br>

					<h6><b>When to send a Legal Notice?</b><br>A legal notice is generally issued by an advocate appointed by the victim, on behalf of his/her client for the purpose of soliciting a settlement.

					There are numerous reasons for which one can send a legal notice to a person or a legal entity. However, the most common reasons are as follows:


					Property related disputes for example mortgage, delay in possession delivery by the builder, eviction of the tenant on unreasonable grounds, partition of family property, etc. Notice to the employer for terminating employees wrongfully, unpaid salary, violation of rights of the employees by the employer etc.

					Notice to any employee for violation of the HR policies, committing sexual harassment at workplace, leaving the job without dropping the resignation letter, violation of any provision of the employment agreement etc.

					Notice to a company manufacturing or providing service of contaminated/low standard products, negligent services, fraudulent advertisement etc.

					Notice in the case of cheque bounce to the issuer of the cheque.

					Notice regarding personal conflicts for instance divorce, maintenance, child custody, division of maternal property etc.</h6>
		
				</div>
				<div class="complaint-online">
					<h6><b>What Should You Do After Receiving A Legal Notice? - Replying to Legal Notice</b><br>It is advisable to reply to notice within the stipulated time as not replying to the notice can benefit the Addressee.
					The following important points should be kept in mind once a notice is received.</h6>
					<h6><b>Reading the notice carefully: </b>
					It is important to read the legal notice properly in order to understand the issue and the concerns raised by the other party. After going through the notice thoroughly, if the receiver feels like the concerns raised in the notice can be resolved amicably then a conversation should be initiated immediately.</h6>
			
					<h6><b>Contacting a Lawyer: </b>
					If the contents mentioned in the notice is not clear, then one must contact a profound lawyer who can take further legal action regarding the matter. Also, one must keep a record of the time of receiving the notice which will be advantageous even if the opposite party takes the matter to the court.</h6>	

					<h6><b>Briefing the lawyer: </b>
					This is the most important step to follow. You must escalate the entire matter to your appointed lawyer, providing him with all the requisite information about the facts, place, time and events related to the issue etc. which will help your Lawyer to draft a proper reply presenting your side of the argument.</h6>	

					<h6><b>Sending the reply: </b>
					Once the reply notice is drafted by your Lawyer on your behalf, it is sent through registered post or courier. A copy of the reply is also kept by your lawyer for future reference.</h6>	

					<h6><b>What Happens If Someone Doesn't Respond To A Legal Notice? </b>
					If one doesn't respond to the legal notice within the stipulated period of time, then eventually the aggrieved party will file a suit in the appropriate Court of Law. Once the suit is filed in the Court, the Court will send order the respondent to appear before the Court and answer the charges pressed as by the opposite party.</h6>

					<h6><b>Benefits of A Legal Notice</b><br>
						<b>Warning:</b> A legal notice acts as a warning as it ensures that the offender is made aware of his/her duties to be performed along with the consequences of non-compliance.<br>

						<b>Caveat:</b> The respondent is informed regarding the potential litigation and opportunity to rectify his/her error.<br>

						<b>Resolution of Dispute:</b> Both parties are given a fair chance to resolve their dispute by negotiating between them, without dragging the matter to the court.<br>

						<b>Amicable Settlement:</b> The process of litigation is time as well as money consuming in lieu of which direct settlement via legal notice makes things quicker and easier.
					<br><br> <b>Legal Advice Charges INR 499/-
<br>Legal Advice + Legal Notice INR 799/-
<br>Any Agreement/Will/Notary & Affidavit and any others INR 1499/-</b>
					
					</h6>	

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
					<p>Lawyer Will Draft Your Legal Notice</p>
				</div>
			</div>
			<div class="col-md-4">
				<div class="box-work">
					<p>After Approval, Legal Notice Will Be Sent To Defaulter</p>
				</div>
			</div>
			<div class="col-md-3">
								
			</div>		
			<div class="col-md-3">
				<div class="box-work">
					<p>Connect With A Dedicated Lawyer</p>
				</div>
			</div>
			<div class="col-md-3">
				<div class="box-work">
					<p>The Draft Will Be Sent To You For Approval</p>
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
					<h5>What Type Of Questions Can I asked?</h5>
					<p>You can ask about anything related to your legal situation, such as questions about a specific process, documents or forms related to your legal matter, or about the meaning of specific terms or phrases. You can also seek advice, strategic coaching, or insight into possible outcomes.</p>

					<h5>How Can I Keep My Identity Private While Asking Question?</h5>
					<p>Yes your identity would be kept confidential while asking any question, Lawyers who answer your query may contact you to discuss your query in detail.</p>

					<h5>Is there any hidden charges involved for Registration?</h5>
					<p>No, there are no extra charges we charge from our clients.</p>

					<h5>Is the physical presence required of the person?</h5>
					<p>The whole process is online. So, a person needn’t go anywhere to register it.
You are required to send in your documents via email and fill up our Questionnaire to get it done.	
</p>

				</div>
			</div>							
	</div>

</div>




<?php include('footer.php');?>