<?php include('header.php');?>


<!-- BANNER-inner -->
<div class="banner-inner">
	<img src="images/GSTreg.jpeg" alt="" class="innar-img">
</div>


<!-- consumer-complaint -->
<div class="consumer-complaint">
	<div class="container">
		<h2>Goods and Service Tax Registration</h2>
		<p>Become a Govt. registered taxpayer in India. GST expert of Vidhik Sevaen will help you in every single step to get GST number. Apply for GSTIN from any states of India.</p>
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
   'type'=>'gst_regis'
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
					<h5>Benefits of GST</h5>

					<h6><b>GST :-</b></h6>
					
					<li>Become more competitive in Market</li>
					<li>Interstate trading is impossible without having a GST number. It is possible only after registering the</li>
					<li>business under GST.</li>
					<li>Expansion of business online</li>
					<li>You must acquire a GSTIN if you are willing to compete with big brands like Amazon, Flipkart, Shopify,</li>
					<li>Paytm on ecommerce platform or through your own website.</li>
					<li>Get Input Tax Credit</li>
					<li>If you have a GST Number, you can avail Input Tax Credit while filing for GST return.</li>
					<li>Interstate sales without restrictions</li>
					<li>You can sell your products in other states only after completing the registration for GST</li>
					
				</div>
				<div class="complaint-online">
		
					<h6>The following documents are required to register of GST <b>(Goods and Service Tax):-</b>
						
					</h6>
					<br>
					<li><img src="images/pas2.png" alt="" class="pan-icon">PAN Card</li>
					<li><img src="images/pas5.png" alt="" class="pan-icon">Aadhaar Card</li>
					<li><img src="images/pas16.png" alt="" class="pan-icon">Phone number and Email address</li>
					<li><img src="images/pas17.png" alt="" class="pan-icon">Valid Bank account number</li>
					
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
					<p>Upload all the Necessary documents.</p>
				</div>
			</div>
			<div class="col-md-4">
				<div class="box-work">
					<p>Congratulations! Your GSTIN is successfully Registered.</p>
				</div>
			</div>
			<div class="col-md-3">
			</div>		
			<div class="col-md-3">
				<div class="box-work">
					<p>Get a Call from Our GST Expert. </p>
				</div>
			</div>
			<div class="col-md-3">
				<div class="box-work">
					<p>ARN and TRN No will be generated</p>
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
				<h5>Will I be eligible to file the GST Returns?</h5>
					<p>Yes! With the free GST Registration services, Vidhik Sevaen also provides three different packages to file the GST Returns on-time for the GST registered business individuals in India. </p>

					<h5>Is it necessary to pay GST?</h5>
					<p>Yes, it is mandatory to pay GST for all the tax payers who is registered under GST regime.</p>

					<h5> What is the difference between CGST, SGST and IGST?</h5>
					<p>CGST and IGST are levied by Central Govt. and SGST is levied by State Govt. CGST and SGST are paid for Intra-State Supply and IGST is paid for inter-State supply.</p>

					<h5>What is the limit to be considered under the GST law?</h5>
					<p>The limit to be considered under GST law differs on the basis of different categories.
<br>Manufacturing Sector – 40 lakhs
<br>Service sector – 20 lakhs
<br></bt>In North Eastern states – 10 lakhs
</p>

					<h5>Do I need to visit the GST Department with papers for any purpose?</h5>
					<p>No, you don’t. Vidhik Sevaen looks after each and every procedure. You don’t need to visit any Govt. office. You just have to simply register on our official website and get your GST registration done at ease.</p>

					<h5> What is the GST tax rate?</h5>
					<p>Goods and Services are categorized into five categories of tax slabs for collection of tax- 0%, 5%, 12%, 18% and 28%.</p>

					<h5>What are the penalties for not registering under GST?</h5>
					<p>IN case of delay in GST filing, the penalty of Rs. 200/- is charged per day. There is no late fee charged in IGST.
When GST Return is not filed, then 10% of the due tax will be the penalty amount or Rs. 10000, whichever is earlier.
When someone commits fraud, then there will be a penalty which is 100% of the due tax or Rs. 10000 – whichever is earlier.
</p>

					<h5> Is PAN mandatory for the registration of GST?</h5>
					<p>PAN is mandatory for general taxpayers and also the casual taxpayers entitled under GST.</p>

					<h5>Can a business operate across India with one GST number?</h5>
					<p>Once the GST Certificate is issued, the registration is valid until it is surrendered, cancelled or suspended. Only GST certificate issued to non-resident taxable person and casual taxable person have a limited validity period. </p>

<h5>Do I need a commercial address for the registration?</h5>
					<p>If you are handling your business from your home, then you can register the residential address with the GST. It requires only the address proof such as electricity bill, NOC, sale deed or link agreement.</p>

<h5> Do I need a bank account for the GST registration?</h5>
					<p>Yes you do need a personal saving account or current account. If you are starting a new business and have a personal saving account, then it can be provided and after the registration is done, you can apply for the new current account depending on the GST certificate.</p>

<h5> Is there any chance of rejection during GST registration?</h5>
					<p>If you don’t submit correct required documents during submission of registration, then the jurisdiction officer shall reject the application. You have to apply again along with proper documents. </p>

<h5>How do I have to send my documents to Vidhik Sevaen?</h5>
					<p>We accept documents over e-mail and whatsapp. Don’t worry, we have a 100% confidential policy and once the job is done, we will delete the documents from our system.</p>

				</div>
			</div>							
	</div>

</div>




<?php include('footer.php');?>