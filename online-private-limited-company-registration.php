<?php include('header.php');?>


<!-- BANNER-inner -->
<div class="banner-inner">
	<img src="images/pptltd.jpeg" alt="" class="innar-img">
</div>


<!-- consumer-complaint -->
<div class="consumer-complaint">
	<div class="container">
		<h2>Fastest Private Limited (Pvt. Ltd.) <br>Company Registration In India | Same Day Process</h2>
		<p>Register your startup company as private limited with Vidhik Sevaen from any states of India. Vidhik Sevaen is an MCA <b>(Ministry of Corporate Affairs)</b> & MSME registered company in India. Our experienced CA/CS will draft & complete all the documentations in same day.</p>
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
   'type'=>'private_limited'
    );
 //   print_r($data);
     move_uploaded_file($_FILES['file']['tmp_name'],"product_img/".$img);
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
					<h5>Private Limited Company</h5>
					<br>
					<h6>Private Limited Company is one of the popular forms of business entities in India. Approximately 90% of companies in India are registered under Private Limited Company. There are more than 150,000 companies are being registered on yearly basis. It is a separate legal entity with limited liability and perpetual existence incorporated now under the Companies Act, 2013. Eligibility to form Private Limited Company Number of Directors- Minimum 2 and Maximum 15. Number of shareholders- Minimum 2 and maximum no limit. However, one person can act as both director and shareholder. Citizenship- At least one director should hold Indian Citizenship. Minimum Authorized Share Capital Rs. 100,000 (INR One Lac)</h6><br>
						
					
					
				</div>
				<div class="complaint-online">

					<h6><b>Documents for Private Limited Company Registration:-</b>
						
					</h6>
					<br>
					<li><img src="images/pas1.png" alt="" class="pan-icon">Passport Size Photograph</li>
					<li><img src="images/pas2.png" alt="" class="pan-icon">Copy of PAN Card</li>
					<li><img src="images/pas3.png" alt="" class="pan-icon">Copy of Electricity Bill</li>
					<li><img src="images/pas4.png" alt="" class="pan-icon">Sale Deed (if owned)</li>
					<li><img src="images/pas5.png" alt="" class="pan-icon">Copy of Aadhar Card</li>
					<li><img src="images/pas6.png" alt="" class="pan-icon">Address Proof(Bank Statement/Mobile/Telephone Bill)</li>
					<li><img src="images/pas7.png" alt="" class="pan-icon">Copy of Rent Agreement(if rented)</li>
					<li><img src="images/pas8.png" alt="" class="pan-icon">NOC.</li>

					<br>
					<h6>
						<b> FEES:- </b> We do charge Rs.3999 as professional fee, Govt. fees & DSC charge are excluded

					</h6>
					<br>
					<img src="images/RTI7.jpg" alt="" class="templates-img" style="width: 100%;">
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
					<p>We will Create DSC and DIN Number of Director.</p>
				</div>
			</div>
			<div class="col-md-4">
				<div class="box-work">
					<p>Congratulations! You’ve registered your company, certificates will be sent by post</p>
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
					<p>Your Documents will be filled and submitted to the ROC.</p>
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
					<h5>How do I start a private limited company?</h5>
					<p>Starting a company is easy through Vidhik Sevaen. All that is required are PAN card, Aadhaar card, address proof and bank statement copies of the directors along with address proof for the registered office address. A company can be started in about 10 – 15 days. If you have the necessary documents, sign up for one of our packages and have a company registered with guidance from one of our Advisors.</p>

					<h5>What is limited liability protection?</h5>
					<p>Limited liability is the status of being legally responsible only to a limited amount for debts of a company. Unlike proprietorships and partnerships, in a private limited company the liability of the shareholders in respect of the company’s liabilities is limited. In other words, the liability of the shareholders of a company is limited only to the value of shares taken up by them.</p>

					<h5>What is authorised capital of the private limited company?</h5>
					<p>Authorized capital is the maximum value of equity shares that can be issued by a company. On the other hand, paid up capital is the amount of shares issued by the company to shareholders. Authorised capital can be increased after incorporation at anytime to issue additional shares to the shareholders.</p>


					<h5> Who can be a director in a company?</h5>
					<p>Any person over the age of 18 years can become a director in a company. Also, there are no conditions on residency or citizenship. Hence, NRIs and Foreign Nationals can easily start and manage a private limited company in India.</p>


					
					<h5>Is an address required in India for starting a company?</h5>
					<p>Yes, every company registered in India must have a registered office where all official communication is sent by the MCA, governmental agencies, financial institutions, etc., The registered office of a company can be in any state of India.</p>

					<h5>What is the process of getting a Private Company Registered?</h5>
					<p>
						<b>Step 1:</b> Obtaining Digital Signature (DSC) and DPIN<br>
						<b>Step 2:</b> Application of DPIN<br>
						<b>Step 3:</b> Name approval<br>
						<b>Step 4:</b> Form SPICe<br>
						<b>Step 5:</b> e-MoA (INC-33) and e-AoA (INC-34)<br>
						<b>Step 6:</b> PAN and TAN application.

					</p>

					<h5>What is Company Registration Certificate?</h5>
					<p>Once the filing of the documents is through, the ROC calls the attorney on a specific date for scrutiny and makes the necessary changes in the MoA and AoA filed. After this is done, the Certificate of Incorporation is granted to the company.</p>

					<h5>After the company is registered, what statutory requirements need to be fulfilled?</h5>
					<p>
						After the registration of the company, the following should be fulfilled:<br>
						Current account should be opened within 30 days of PAN registration.<br>
						Appoint a Statutory Auditor.<br>
						The paid-up capital should be deposited which was mentioned while registration.<br>
						Issue and allot shares.<br>
					</p>	

					<h5>What is the minimum capital needed to form a Private Limited Company?</h5>
					<p>You need to have a minimum capital of Rs. 100,000 to start a private limited company. You need not have this amount in hand or your bank account. You can show this amount as the pre-incorporation expense of the start-up. Also, you can show the capital infused in the assets.</p>

					<h5>Can a Salaried person become the director of a company?</h5>
					<p>Yes, for sure. You can become the director of any type of company. You need to go through the employment rules if that allows you to do so.
 
</p>


				
				</div>
			</div>							
	</div>

</div>




<?php include('footer.php');?>