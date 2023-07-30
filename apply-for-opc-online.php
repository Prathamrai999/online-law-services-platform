<?php include('header.php');?>


<!-- BANNER-inner -->
<div class="banner-inner">
	<img src="images/opc.jpg" alt="" class="innar-img">
</div>


<!-- consumer-complaint -->
<div class="consumer-complaint">
	<div class="container">
		<h2>One Person Company (OPC) Registration - Online Process</h2>
		<p>
Register a one person company registration online in India within 7 – 10 days. <br>Get expert help from Vidhik Sevaen in OPC registration.</p>
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
							  <option value="3999">3999 /- </option>
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
							  <option value="3999">3999 /-</option>
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
   'type'=>'one_person'
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

}?>				</div>
			</div>
			<div class="col-md-7">
				<div class="complaint-online">
					<h5>One Person Company</h5>
					<br>
					<h6>With the introduction of the Companies Act, 2013 the concept of the One Person Company came into existence to motivate the small traders and entrepreneurs who has the potentiality to start their own business and build up their own identity. The biggest advantages of starting a One Person Company are that only one person is required to start the business. An entrepreneur can be the master of their own domain in case of One Person Company (OPC). Wherein in case of Private Limited Company or LLP, minimum of two members is needed to be incorporated. One Person Company was introduced in the J.J Report to create empowerment for the entrepreneurs where they can give a shape to their ideas. As there is a progress in the use of information technology and growth in the service sector in India, government has launched the concept of OPC.</h6><br><br>
						
						<h6><b>FEES:-</b> We do charge Rs.3999 as professional fee, Govt. fees & DSC charge are excluded
					</h6>
					
					
				</div>
				<div class="complaint-online">

					<h6><b>Documents for One Person Company Registration :-</b>
						
					</h6>
					<br>
					
					
					<li><img src="images/pas1.png" alt="" class="pan-icon">Passport Size Photograph</li>
					<li><img src="images/pas2.png" alt="" class="pan-icon">Copy of PAN Card</li>
					<li><img src="images/pas3.png" alt="" class="pan-icon">Copy of Electricity Bill</li>
					<li><img src="images/pas4.png" alt="" class="pan-icon">Sale Deed (if owned)</li>
					<li><img src="images/pas6.png" alt="" class="pan-icon">Address Proof(Bank Statement/Mobile/Telephone Bill)</li>
					<li><img src="images/pas7.png" alt="" class="pan-icon">Copy of Rent Agreement(if rented)</li>
					<li><img src="images/pas8.png" alt="" class="pan-icon">NOC.</li>
					<br><br>

					</div>
					<div class="complaint-online">
					<h6><b>Advantages of Becoming One Person Company:-</b>
						
					</h6>
					<br>
					<li>LIMITED LIABILITY</li>
					<li>CONTINOUS EXISTENCE</li>
					<li>GREATER CREDIBILITY</li>
					<li>EASY TO SELL</li>
					<li>FULL CONTROL OVER THE COMPANY</li>
					<li>EASY TO RAISE FUNDS</li>

				</div>
		
			</div>			
		</div>

		<div class="row">
			<h2>How We Work</h2>
			<div class="col-md-4">
				<div class="box-work">
					<p>Fill our Registration Form and make the Payment.</p>
				</div>
			</div>
			<div class="col-md-4">
				<div class="box-work">
					<p>We will Create DSC and DIN Number of Director</p>
				</div>
			</div>
			<div class="col-md-4">
				<div class="box-work">
					<p>Congratulations! You’ve registered your company certificates will be sent by post.</p>
				</div>
			</div>
		
			<div class="col-md-3">
				<div class="box-work">
					<p>Expert will call you and receive all the necessary documents.</p>
				</div>
			</div>
			<div class="col-md-3">
				<div class="box-work">
					<p>Drafting MOA and AOA and Submit.</p>
				</div>
			</div>
			<div class="col-md-3">
				<div class="box-work">
					<p>Our Experts will start drafting the requirements.</p>
				</div>
			</div>
			<div class="col-md-3">
				<div class="box-work">
					<p>Your Documents will be filed and submitted to the ROC.</p>
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
					<h5>How long will it take to incorporate a One Person Company?</h5>
					<p>Online Legal Service can incorporate a One Person Company in 7-15 days. The time taken for incorporation will depend on submission of relevant documents by the client and speed of Government Approvals. To ensure speedy incorporation, please choose a unique name for your Company and ensure you have all the required documents prior to starting the incorporation process.</p>

					<h5> Who is a nominee in a One Person Company?</h5>
					<p>A nominee is a person who in the event of death or disability of the subscriber of the One Person Company shall assume his position. Memorandum of Association of a One Person Company will mandatorily prescribe the name of the person.</p>

					<h5>Can OPC become a member of another private Limited company?</h5>
					<p>Yes, the Act has not made any restriction for a One Person Company to become a member of another Private Limited Company.</p>

					<h5>How long is the incorporation of the Company valid for?/h5>
					<p>Once a Company is incorporated, it will be active and in-existence as long as the annual compliances are met with regularly. In case, annual compliances are not complied with, the Company will become a Dormant Company and may be struck off from the register after a period of time. A struck-off Company can be revived for a period of upto 20 years.</p>

					<h5>- How long is the incorporation of the Company valid for?</h5>
					<p><b>Once </b> a Company is incorporated, it will be active and in-existence as long as the annual compliances are met with regularly. In case, annual compliances are not complied with, the Company will become a Dormant Company and may be struck off from the register after a period of time. A struck-off Company can be revived for a period of upto 20 years. </p>

					<h5>What is authorized capital fee?</h5>
					<p>Authorized capital of a Company is the amount of shares a company can issue to its shareholders. Companies have to pay the Government an authorized capital fee to issue shares in a Company. Companies have to pay authorized capital fee for a minimum of Rs.1 lakh.</p>

					<h5>Can a nominee of a One Person Company be changed after incorporating the company?</h5>
					<p> A nominee can be changed at any time with due intimation to the Registrar.</p>

					<h5>What is the Director Identification Number (DIN)?</h5>
					<p>Director Identification Number is a unique identification number assigned to all existing and proposed Directors of a Company. It is mandatory for all present or proposed Directors to have a Director Identification Number. Director Identification Number never expires and a person can have only one Director Identification Number.</p>

					<h5> What are the requirements to be a Director or Nominee in an OPC?</h5>
					<p>Only a natural person who is an Indian citizen and a resident in India is eligible to incorporate a One Person Company or be a nominee member. The Director or Nominee must also be over 18 years of age. A person can incorporate upto five One Person Companies.</p>

					<h5>Is an office required for starting a One Person Company?</h5>
					<p>An address in India where the registered office of the One Person Company will be situated is required. The premises can be a commercial / industrial / residential where communication from the MCA will be received.</p>

					<h5>Do I have to be present in person to incorporate a One Person Company?</h5>
					<p>No, you will not have to be present at our office or appear at any office for the incorporation of a One Person Company. All the documents can be scanned and sent through email to our office. Some documents will also have to be couriered to our office.</p>	
					
			
				
				</div>
			</div>							
	</div>

</div>




<?php include('footer.php');?>