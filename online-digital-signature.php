<?php include('header.php');?>


<!-- BANNER-inner -->
<div class="banner-inner">
	<img src="images/DigitalSignatureCertificate.jpg" alt="" class="innar-img">
</div>


<!-- consumer-complaint -->
<div class="consumer-complaint">
	<div class="container">
		<h2>Digital Signature Certificate Online </h2>
		<p>Apply For DSC Registration Online.A Digital Signature Certificate (DSC) is a secure digital key that certifies the identity of the holder, issued by a Certifying Authority (CA)</p>
			<br><br>
		<div class="row">
			<div class="col-md-5">
				<div class="complaint-form" data-aos-duration="1500" data-aos="zoom-in">
			
				 <form method="post" enctype="multipart/form-data">
	        			<div class="input-cont">
	        			    <h3>Apply For DSC Registration|Fill The Form Now</h3>
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
   'type'=>'digi_signal_certi',
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
					<h5>DIGITAL SIGNATURE CERTIFICATE</h5>
					<br>
					<h6>It typically contains your identity (name,email, country, APNIC account name and your public key). Digital Certificates use Public Key Infrastructure meaning data that has been digitally signed or encrypted by a private key can only be decrypted by its corresponding public key.</h6><br>
						
					<h6><b>There are three classes of DSC tokens and each class is used for a certain purpose:-</b>
						<br>
					</h6>
					<h6>
						<b>CLASS-2 DSC:-</b> Class 2 DSC Digital Signature is used to verify the identity of a person against a pre-verified database. Class 2 Digital Signatures are issued to a person as an USB token after verifying self-attested copies of identity and address proof. It is used for company registration, LLP registration, IT return filing, MCA return filing and IE code registration.</h6><br>

						<h6><b>CLASS-3 DSC :-</b> Class 3 Digital Signature are the most secure form of Digital Signature Certificates used to establish the identity of the signee in e-commerce and e-tendering. For instance, many of the online e-tenders require auction participants toparticipate in the bidding using a Class 3 Digital Signature to establish their acceptance of the bid electronically. Class 3 DSC can also be used for trademark registration. Class 3 Digital Signatures are issued only after the Registering Authority verifies the identity of the applicant, in-person.</h6><br>

						<h6><b>DGFT DSC:-</b> Dgft DSC is used very specifically for the individuals dealing in the Export and Import process. One needs necessarily have a Digital Signature Certificate for transactions related to the DGFT website. On validating the identity of the sender, as an Importer/Exporter authenticity of the documents and validity of the DSC, DGFT requires.
					</h6>
					
					
				</div>
				<div class="complaint-online">

					<h6><b>Documents Required:-</b>
						
					</h6>
					<br>
					<li>Aadhar Card</li>
					<li>Pan Card</li>
					<li>Photo (Passport Size)</li>

					<br>
					<h6><b>When Digital Signature Requires:-</b>
						<b>Incorporation of Company-</b> DSC is compulsorily required for incorporating Companies like Private Limited Company, Limited Liability Partnership or One Person Company.<br><br>

						<b>Intellectual Property Rights-</b> Digital Signature Certificate (DSC) is required for filing of Intellectual Property Rights like Trademark, Patent etc.<br><br>

						<b>For Employee Provident Fund- </b>Registered Employers can use Class-3DSC for submitted the PF transfer claim of their employee.<br><br>

						<b>Director Identification Number-</b> Digital Signature is required necessarily for obtaining director identification number.<br><br>

						<b>Ministry of Corporate Affairs (Compliances) -</b> When annual turnover of an organisation exceeds 60 lacs then it becomes mandatory for the owner to obtain a Digital Signature to verify returns.<br><br>

						<b>Goods and Service Tax- </b>It is mandatory to have Digital Signature Certificate for both registrations and verifying GST Returns online
					</h6>
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
					<p>We will create all your documents and file on your behalf.</p>
				</div>
			</div>
			<div class="col-md-4">
				<div class="box-work">
					<p>Congratulations! Your Digital Signature will be sent to you in a USB and Token through Courier at your address.</p>
				</div>
			</div>
			<div class="col-md-3">
				
			</div>

			<div class="col-md-3">
				<div class="box-work">
					<p>Get call from Our DSC expert.</p>
				</div>
			</div>
			<div class="col-md-3">
				<div class="box-work">
					<p>We will validate your documents in two ways: Video recording or SMS</p>
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
					<h5>- When can I use the Class 3 DSC?</h5>
					<p>In India, a registered individual can use the Class 3 DSC for any MCA & ROC compliances such as signing documents digitally, e-mailing, Company Incorporation, Business License Registration, Tax Filing, e-tendering, and any other trade related substances.</p>

					<h5>- How long does it take to get a DSC?</h5>
					<p>Usually, it takes 3-4 days for processing the DSC application after which it is couriered to you.</p>

					<h5>- Do I need to be physically present for verification of my identity?</h5>
					<p><b>No </b> you need not be present as the Vidhik Sevaen. Digital Signature Certificate process is completely done online. However, for Class-3 DSC, sometimes, you may have to be present physically which will be informed to you before the verification process.</p>


					<h5>- Is Digital Signature available in Soft Copy?</h5>
					<p><b>No </b>  Digital Signature is not available in Soft Copy format. The Competition Commission of India, CCI has officially discontinued the download of DSC in .pfx format. So, the Digital Signature can now be downloaded only to a Cryptographic Device. </p>


					<h5>- Can an individual have two Digital Signature Certificates?</h5>
					<p><b>Definitely </b>. A person can have two Digital Signatures; say one for official use and another one for personal use. </p>

					<h5>- What is E-token?</h5>
					<p><b>USB </b> e-Token is a storage device where the Digital Signature can be stored. E-Token is password-protected so that Digital Signature is never lost or tampered with even when a computer is formatted.</p>

					<h5>- How can the Digital Signature be utilized?</h5>
					<p>The Digital Signature can be utilized for the following:<br>
					To send and receive digitally signed and encrypted emails.<br>
					To carry out secure web-based transactions, or to identify other participants of web-based transactions.<br>
					For signing documents like MS-Word, MS-Excel, and PDFs.<br>
					Incorporating a paperless workplace.<br>
					In e-Tendering, e-Procurement, MCA (for Registrar of Companies e-filing), Taxation Filing, and in other prominent purposes.</p>


					<h5>- Is Digital Signatures Certificate legally valid in India?</h5>
					<p><b>Yes. </b>  Subsequent to the enactment of the Information Technology Act, 2000, Digital Signature Certificates are legally valid in India. Digital Signature Certificates are issued by licensed Certifying Authorities under the Ministry of Information Technology, Government of India as per the Information Technology Act.</p>

					<h5>- What is the difference between a Digital Signature and a Digital Signature Certificate?</h5>
					<p><b>A </b> digital signature is an electronic method of signing an electronic document whereas a Digital Signature Certificate is a computer-based record that Identifies the Certifying Authority issuing it. Has the name and other details that can identify the subscriber. Contains the subscriber's public key. Is digitally signed by the Certifying Authority issuing it. Is valid for either one year or two years.</p>	

					<h5>- Can I use one Digital Signature Certificate for multiple e-mail addresses?</h5>
					<p><b>No </b>, you cannot. A Digital Signature Certificate can comprise only one email address.</p>

					<h5>- What is a Certifying Authority (CA)?</h5>
					<p><b>A </b> Certifying Authority is a trusted agency whose central responsibility is to issue, revoke, renew, and provide directories for Digital Signature Certificates. According to Section 24 of the Information Technology Act, 2000, <b>"Certifying Authority"</b> means a person who has been granted a license to issue Digital Signature Certificates. We are an authorized partner of eMudhra.</p>


				
				</div>
			</div>							
	</div>

</div>




<?php include('footer.php');?>