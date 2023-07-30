<?php include('header.php');?>


<!-- BANNER-inner -->
<div class="banner-inner">
	<img src="images/SaleDeedAgreement.jpg" alt="" class="innar-img">
</div>


<!-- consumer-complaint -->
<div class="consumer-complaint">
	<div class="container">
		<h2>Sale Deed Drafting</h2>
		<p>The sale deed is drafted on a non-judicial stamp paper of value as set by the state government in which the property transaction is taking place</p>
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
   'type'=>'sale_deed',
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
					<h5>Draft A Sale Deed Online | Apply For Sale Deed at Vidhik Sevaen</h5>
					
					<h6><b>A team of expert from Vidhik Sevaen will draft your sale deed. No need to visit office. 2000+ sale deeds drafted by expert team.</b><br>
						<b>What is a Sale Deed?</b><br>
						Sale Deeds are important legal functionalities that come in form of documents and incorporated between the purchaser and seller. Sale Deeds are executed during property purchasing or real estate transactions. The sides participating in a sale deed are often termed as grantee or grantor pertaining to legal expressions.<br>

						<b>Why you require Sale Deed?</b><br>

						Sale deeds are crucial during any property deals. It is like a right to agreement over the deals that are pre- determined and to be followed by either parties i.e. the buyer and seller. In order to process a sales deal, the documents required are proof of identity of parties, ownership proof and other important documents.</h6>
					<br>

					<h6><b>Sale Deed Can Be Made for:</b><br></h6>
					<li>Vehicle: Car & Bike</li>
					<li>Lands: Agricultural, Commercial & Vastu</li>
					<li>Property: Commercial & Residential</li>
					<li>House</li>
					<li>Business</li>

				</div>
				<div class="complaint-online">

					<h5>Documents required for sale deed registration</h5>
					
					<li><img src="images/pas24.png" alt="" class="pan-icon">Draft of Sale Deed/Title deed/Conveyance Deed</li>
					<li><img src="images/pas25.png" alt="" class="pan-icon">7/12 extract or RTC (Records of Rights and Tenancy Corps) Khata Certificate and Extracts</li>
					<li><img src="images/pas26.png" alt="" class="pan-icon">Joint development agreement, GPA, & Sharing/supplementary Agreement, between land owner and builder</li>
					<li><img src="images/pas27.png" alt="" class="pan-icon">Power of Attorney if any</li>
					<li><img src="images/pas28.png" alt="" class="pan-icon">Building plan sanctioned by the Statutory Authority</li>
					<li><img src="images/pas29.png" alt="" class="pan-icon">Allotment Letter from the Builder/Co-Operative Society/Housing Board/BDA.</li>
					<li><img src="images/pas30.png" alt="" class="pan-icon">If any loan on the property (Current or past) / Original Property Documents with Bank</li>
					<li><img src="images/pas31.png" alt="" class="pan-icon">Sale agreement with the Seller</li>
					<li><img src="images/pas32.png" alt="" class="pan-icon">All title documents of land owner</li>
					<li><img src="images/pas33.png" alt="" class="pan-icon">A Copy of all registered previous agreements (in case of resale property)</li>
					<li><img src="images/pas34.png" alt="" class="pan-icon">NOC from Apartment Association (in case of resale property)</li>

					<br>
					<table>
						<tr>
							<th>Points of difference</th>
							<th>Agreement of sale</th>
							<th>	Sale deed</th>
						</tr>
						<tr>
							<td>Sale deed	</td>
							<td>It implies the future transfer of the property</td>
							<td>It signifies an immediate transfer of the property titles</td>
						</tr>
						<tr>
							<td>Risk involved</td>
							<td>Risk/liabilities remain with the seller until the property is transferred in future</td>
							<td>Risk is immediately transferred to the new buyer</td>
						</tr>						
						<tr>
							<td>Contract</td>
							<td>It is an executory contract. An executory agreement is one which has not been fully implemented</td>
							<td>It is an executed contract</td>
						</tr>
						<tr>
							<td>Violation</td>
							<td>Breach of sale may result in a suit for damages</td>
							<td>Sale breach results in a legal complaint as well as monetary compensation for damages</td>
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
					<h5>What is a Sale Deed?</h5>
					<p><b>A sale deed is a document via which a seller transfers the rights and interest of a property to the buyer. As a result, the buyer obtains the ownership of the property. A sale deed includes the following details:</b> <br> Name and address of the buyer and seller
						Detailed description of the property<br>
						Total payment to be made, mode of payment, date when the payment is to be made<br>
						Date of handing over of property<br>
						Other terms and conditions of the sale</p>

					<h5>Who pays the stamp duty and registration charges? Buyer or Seller?</h5>
					<p><b> According </b> to the law, the buyer needs to pay the stamp duty and registration charges. Anyway, any other arrangement related to the stamp duty and registration charge between buyer and seller can be incorporated in the Deed.</p>

					<h5>What are the advantages of a Sale Deed?</h5>
					<p><b> The advantages of sale deed are as follows- </b> <br>It provides legal recognition of the transaction of the sale<br>
					It lays down the property description, the parties and their rights and obligation.<br>
					The registered sale deed are used as supporting evidence in case of legal dispute.</p>

					<h5>Why is the Sale deed required?</h5>
					<p><b> Sale </b>  deed consists of the transfer of property ownership from a vendor to a purchaser. This deed primarily makes the sale complete. In other terms, through this sale deed, the seller transfers the right of ownership to the buyer. After drafting of the documents, they are signed and registered and the ownership is completely transferred to the buyer as per the deal.</p>

					<h5>Can a Sale Deed be cancelled?</h5>
					<p><b> Once </b>  the document is registered it cant be cancelled. Only a court order can cancel it.</p>

					<h5>What if a sale deed is not registered?</h5>
					<p><b> If </b>  it is impossible to trace a seller, his legal heirs will be issued a notice to execute the sale deed in their favour. Without a registered sale deed, you cannot acquire a marketable title over the property.</p>

					<h5>Can I get a home loan if the original sale deed is missing?</h5>
					<p><b> Bank </b> provides loans based on original documents. It is impossible to acquire loans without these documents. Bank will not provide a home loan against a photocopy of the sale deed. If you lose the sale deed, then you can issue a certified copy issued by the jurisdictional sub registrar. Some banks want to scrutinize the FIR copy, the certificate, which is non traceable, the affidavit presented to the sub registrar. Thus, it is advised that all the documents must be preserved for acquiring a home loan.</p>	

					<h5>Can anyone apply for a copy of the sale deed?</h5>
					<p><b> A sale </b>  deed is usually a public document. Thus, a copy of the deed can be obtained by anybody. In order to obtain a copy, one has to know the significant details like property schedule information, name of the owner of the property, document number. You can get these copies issued by availing online option in states such as Tamil Nadu and Andhra Pradesh.</p>

				</div>
			</div>							
	</div>

</div>




<?php include('footer.php');?>