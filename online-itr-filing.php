<?php include('header.php');?>


<!-- BANNER-inner -->
<div class="banner-inner">
	<img src="images/itrfile.png" alt="" class="innar-img">
</div>


<!-- consumer-complaint -->
<div class="consumer-complaint">
	<div class="container">
		<h2>File Income Tax Return Online | Vidhik Sevaen</h2>
		<p>Filing of income taxes doesn't need to be a challenging task. If you are worried that filing taxes is about carrying hundreds of papers and organizing everything like students do before an exam, let us tell you right away that income tax filing today is nothing like that. With India embracing the digital world and the many conveniences it offers, electronic filing (e-filing) makes it possible to file income tax returns (ITRs) in a matter of few clicks.</p>
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
							  <option value="700">700 /- </option>		
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
   'type'=>'itr_file'
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
					<h5>File Income Tax Return Online</h5>
					
					<h6><b> What is Income Tax Return?</b><br>
						Income tax return is the proof that you have paid your tax on time. The tax return proof contains the details of your annual earnings and the amount you’ve paid as tax. This makes it easier for every taxpayer to calculate the tax liability, schedule tax payments, a request of refund for over payment of tax etc. To complete the income tax return process effortlessly, you should know about the various ITR (Income Tax Return) forms related to the entire process. These forms are notified every year by the Central Board of Direct Taxes (CBDT).</h6>
					<br>

					<h6><b>Who Can File Income Tax with Vidhik Sevaen?</b><br></h6>
					<li><img src="images/pas11.png" alt="" class="pan-icon">SALARIED PERSON</li>
					<li><img src="images/pas12.png" alt="" class="pan-icon">SALARIED PERSON WITH OTHERS INCOME</li>
					<li><img src="images/pas13.png" alt="" class="pan-icon">PARTNERSHIP</li>
					<li><img src="images/pas14.png" alt="" class="pan-icon">PRIVATE LIMITED COMPANY</li>
					<li><img src="images/pas15.png" alt="" class="pan-icon">LLP</li>
					
					<br>



				</div>
				<div class="complaint-online">
					<h6><b>Documents Required:-</b></h6>

					<table>

					  <tr>
					    <th>Indiviual/Salaried Person</th>
				    	<th>Private Limited Company	</th>
				    	<th>LLP Company</th>
				    </tr>

				    <tr>
						<td>Pan card and aadhaar card All bank statement TDS certificate(form 16-for TDS on salary) TDS certificate (form 16a-for TDS on non-salary) like professional fees, rent, interest etc.</td>
						<td>Directors pan and aadhaar card Company pan card Profit and loss statement Balance sheet All bank statements Investment proofs Others</td>
						<td>LLP pan, address details, date of registration proofs Partner pan, aadhaar and address details Profit and loss statement Balance sheet Bank statements</td>
					  </tr>		
					</table>
					<br>
				<table>
					<tr>
						<td>ITR 1</td>
						<td>For Individuals being a Resident (other than Not Ordinarily Resident) having Total Income upto Rs.50 lakhs, having Income from Salaries, One House Property, Other Sources (Interest etc.), and Agricultural Income upto Rs.5 thousand(Not for an Individual who is either Director in a company or has invested in Unlisted Equity Shares)</td>	
					</tr>					
					<tr>
						<td>ITR 2</td>
						<td>ITR 2 For Individuals and HUFs not having income from profits and gains of business or profession</td>	
					</tr>	
					<tr>
						<td>ITR 3</td>
						<td>For individuals and HUFs having income from profits and gains of business or profession</td>	
					</tr>					
					<tr>
						<td>ITR 4</td>
						<td>For Individuals, HUFs and Firms (other than LLP) being a Resident having Total Income upto Rs.50 lakhs and having income from Business and Profession which is computed under sections 44AD, 44ADA or 44AE (Not for an Individual who is either Director in a company or has invested in Unlisted Equity Shares)</td>	
					</tr>
					<tr>
						<td>ITR 5</td>
						<td>For persons other than:- (i) Individual, (ii) HUF, (iii) Company and (iv) Person filing Form ITR-7</td>	
					</tr>
					<tr>
						<td>ITR 6</td>
						<td>For Companies other than companies claiming exemption undersection 11</td>	
					</tr>
					<tr>
						<td>ITR 7</td>
						<td>For persons including companies required to furnish return under sections 139(4A) or 139(4B) or 139(4C) or 139(4D)</td>	
					</tr>


					</table>
					<h6><b>Advantages:-</b><br></h6>

						<li>Easy loan approval</li>
						<li>Quick visa processing</li>
						<li>Claim tax refund</li>
						<li>Income & address proof</li>
						<li>Avoid late fees under 234F</li>
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
					<p>Documentation process completed by our expert.</p>
				</div>
			</div>
			<div class="col-md-4">
				<div class="box-work">
					<p>File the ITR and provide the acknowledgement.</p>
				</div>
			</div>
			<div class="col-md-3">
				<div class="box-work">
					<p>Get a Call from Our Income Tax Expert.</p>
				</div>				
			</div>		
			<div class="col-md-3">
				<div class="box-work">
					<p>Error- Free Computation of Tax completed by our expert.</p>
				</div>
			</div>
			<div class="col-md-3">
				<div class="box-work">
					<p>Upload all the required documents requested by our expert.</p>
				</div>
			</div>
			<div class="col-md-3">
				<div class="box-work">
					<p>Confirmation of details and Filling for Returns.</p>
				</div>
			</div>

		</div>			
	</div>





<div class="faq">
	<div class="container">
 		<h3>FAQ</h3>
 		<h6><b>Please check the frequesntly asked questions</b></h6>

 		
			<br><br>
			
			<div class="col-md-12">
				<div class="faq-box">
					<h5>Who should file an ITR?</h5>
					<p>An individual whose annual income is more than the basic exemption limit of Rs 2.5 lakh should file an ITR. The basic exemption limit for senior citizens (60 years onwards and less than 80 years) is Rs 3 lakh, and for super senior citizens is Rs 5 lakh.</p>

					<h5>How can I claim deductions for tax saving?</h5>
					<p>You should file an income tax return to claim tax deductions for tax savings such as ELSS, PPF, NSC investments and for payments such as housing loan repayments, insurance premium and donations.</p>

					<h5>I receive my salary income after deduction of TDS. Am I required to file an income tax return?</h5>
					<p>You are required to file an income tax return once your annual income exceeds Rs 2.5 lakh. A deduction of TDS does not replace the requirement to file ITR. While e-filing your ITR, you should furnish the details of your annual income, claim deductions and credit for TDS deducted by your employer.</p>

					<h5>How do I check TDS details from my form 26AS?</h5>
					<p>You can check your Form 26AS from your e-filing login. Our E-filing software auto-populates the TDS details from your Form 26AS in your income tax return.</p>

					<h5>How can I claim an income tax refund?</h5>
					<p>You can claim an income tax refund by e-filing your income tax return. An e-filing enables you to claim credit for excess TDS paid and a tax refund.</p>

					<h5>Is my data filed secure with Vidhik Sevaen?</h5>
					<p>Vidhik Sevaen uses a 128 bit SSL encryption for transmission of data and enables complete data privacy. We  does not share its data with unaffiliated third parties.</p>

					<h5>How to e-verify my ITR?</h5>
					<p>You can e-verify your ITR within 120 days from the date of filing. You can e-verify using your net banking account or Aadhaar based OTP. A failure to e-verify your ITR can invalidate your ITR filing.</p>


				</div>
			</div>							
	</div>

</div>




<?php include('footer.php');?>