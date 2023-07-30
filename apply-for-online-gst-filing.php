<?php include('header.php');?>


<!-- BANNER-inner -->
<div class="banner-inner">
	<img src="images/GSTFiling.jpg" alt="" class="innar-img">
</div>


<!-- consumer-complaint -->
<div class="consumer-complaint">
	<div class="container">
		<h2>File GST Returns with Vidhik Sevaen to Save Time & Money</h2>
		<p><b>Simplify compliance with GST expert assisted online GST return filing.
		<br> Purchase plan and let us handle the GST Returns for you.</b>
		</p>
		<p>As per the GST Act, 2017, every individual / Company / LLP registered under the GST Act has to furnish the details of sales, purchases and the tax paid by filing for GST returns with the administrative authorities.</p>
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
	        				<span><b>NOTE :</b><br>2399 (BASIC 3 MONTHS)<br>
								4399 (STANDARD PLAN 6 MONTHS FILLING)<br>
								7899 (PREMIUM PLAN 12 MONTH FILLING)</span>

	        			    <label for="name">Select Fees : </label>
	        				<select name="fess" id="fess">
							  <option value="2399">2399 /- </option>
							  <option value="4399">4399 /- </option>
							  <option value="7899">7899 /- </option>							  
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
                               <option value="599">599 /- </option>
							  <option value="799">799 /- </option>
							  <option value="999">999 /- </option>		
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
   'type'=>'gst_file'
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
					<h5>File GST</h5>
					
					<h6><b>How to file GST return ?</b></h6>
					<li>Purchase a plan (Quarterly/Half Yearly/Annually)</li>
					<li>Our GST expert will call you to understand your business & volume of accounts</li>
					<li>Documents are collected from you (Tally Data for GST Compliance – Monthly/Quarterly/Half Yearly/Yearly Basis)</li>
					<li>After reconcile your data, we will send a confirmation request before filing</li>
					<li>Tax paid challan will be generated & intimated to you before filing</li>
					<li>After payment of challan, we will proceed to file the same</li>
					<li>After filing the return we will acknowledge to you</li>
					
					
				</div>
				<div class="complaint-online">

					<h6><b>Types of GST Return & Due Dates:-</b>
					</h6>
					<table>

					  <tr>
					    <th>Return Form</th>
					    <th>Particulars</th>
					    <th>Frequency</th>
					    <th>Due date</th>

					  </tr>					
					  <tr>
					    <td>GSTR-1</td>
					    <td>Details of outward supplies of goods and services</td>
					    <td>Monthly</td>
					    <td>11th of the next month</td>
					  </tr>

					  <tr>
					  	<td>GSTR-2</td>
					  	<td>Details of inward supplies of goods and services affected</td>
					  	<td>Monthly</td>
					  	<td>15th of the next month</td>					  						  	
					  </tr>

					  <tr>
					  	<td>GSTR-3</td>
					  	<td>Monthly return, in the case of finalization of details of outward supplies and inward supplies along with the payment of tax.</td>
					  	<td>Monthly</td>
					  	<td>20th of the next month</td>					  						  	
					  </tr>

					  <tr>
					  	<td>GSTR-3b</td>
					  	<td>It is a simple return in which the summary of outward supplies along with Input Tax Credit is declared and payment of tax is affected by the taxpayer.</td>
					  	<td>Monthly</td>
					  	<td>20th of the next month</td>					  						  	
					  </tr>

					  <tr>
					  	<td>GSTR-4</td>
					  	<td>For all the taxable person registered under the composition levy</td>
					  	<td>Quarterly</td>
					  	<td>18th of the next month after the quarter</td>
					  </tr>

					  <tr>
					  	<td>GSTR-5</td>
					  	<td>Returns for a non-resident foreign taxable person</td>
					  	<td>Monthly</td>
					  	<td>20th of the next month</td>					  						  	
					  </tr>

					  <tr>
					  	<td>GSTR-6</td>
					  	<td>Returns for an input service distributor</td>
					  	<td>Monthly</td>
					  	<td>13th of the next month</td>					  						  	
					  </tr>

					  <tr>
					  	<td>GSTR-7</td>
					  	<td>Returns for authorities deducting TDS</td>
					  	<td>Monthly</td>
					  	<td>10th of the next month</td>					  						  	
					  </tr>

					  <tr>
					  	<td>GSTR-8</td>
					  	<td>Details of supplies effected through the e-commerce operator and the amount of tax collected</td>
					  	<td>Monthly</td>
					  	<td>10th of the next month</td>					  						  	
					  </tr>

					  <tr>
					  	<td>GSTR-9</td>
					  	<td>Annual return for a normal taxpayer</td>
					  	<td>Annually</td>
					  	<td>31st December of the next financial year</td>					  						  	
					  </tr>

					  <tr>
					  	<td>GSTR-9b</td>
					  	<td>Annual return of a taxpayer registered under the composition levy anytime during the year</td>
					  	<td>Annually</td>
					  	<td>31st December of the next financial year</td>					  						  	
					  </tr>

					  <tr>
					  	<td>GSTR-10</td>
					  	<td>Final return</td>
					  	<td>Only once, when GST registration is cancelled or surrendered</td>
					  	<td>Within 3 months of the date of cancellation or the date of cancellation of order, whichever is later</td>					  						  	
					  </tr>

					  <tr>
					  	<td>GSTR-11</td>
					  	<td>Details of inward supplies to be furnished by a person having UIN and claiming a refund</td>
					  	<td>Monthly</td>
					  	<td>28th of the following month for which the statement is filed</td>					  						  	
					  </tr>

					</table>


				</div>
					<div class="complaint-online">
					<h6><b>Select Your Plan:-</b>
						
					</h6>
					<br>
					<table>
						<tr>
							<th>Basic Plan</th>
							<th>Standard Plan</th>
							<th>Premium Plan</th>
						</tr>
						<tr>
							<th>₹ 599</th>
							<th>₹ 799</th>
							<th>₹ 999</th>
						</tr>

					  <tr>
					    <td>3 Months GST Return Filling</td>
					    <td>6 Months GST Return Filling</td>
					    <td>12 Months GST Return Filling</td>
					  </tr>
					  <tr>
					    <td>Dedicated GST expert GSTR-1 Return Filing GSTR-3B Return Filing input Tax Credit Reconciliation Data modeling in Excel & Tally Phone, Chat & Email Support Any Accounting Software Upto 200 Entries Per Month</td>
					    <td>Dedicated GST expert GSTR-1 Return Filing GSTR-3B Return Filing input Tax Credit Reconciliation Data modeling in Excel & Tally Phone, Chat & Email Support Any Accounting Software Upto 350 Entries Per Month</td>
					    <td>Dedicated GST expert GSTR-1 Return Filing GSTR-3B Return Filing input Tax Credit Reconciliation Data modeling in Excel & Tally Phone, Chat & Email Support Any Accounting Software Upto 500 Entries Per Month</td>
					  </tr>

					</table>

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
					<p>Congratulations! Your Import and Export Code will be sent to you.</p>
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
					<p>Our Dedicated IEC Expert will apply for your IEC License.</p>
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
					<h5>What is the AATO Scheme amendment in GST Return filing?</h5>
					<p>On the recommendations of the GST Council, a new scheme of Quarterly Returns with Monthly Payments (QRMP) will be introduced from 1st January 2021. Under this scheme, taxpayers with upto Rs. 5 Crores Aggregate Annual Turnover (AATO) in the previous and the current financial year would be given an option to file their Return/Statement in Form GSTR-1 and Form GSTR-3B Quarterly with a simple payment challan for the first two months of the quarter.</p>

					<h5>Can I apply for GST Return Filing online?</h5>
					<p>Yes. Any taxpayer can apply for online GST Return Filing in Vidhik Sevaen. Our GST experts here will completely guide you regarding the process.</p>

					<h5>Is the GST threshold limit the same for all Indian states?</h5>
					<p>No. In the North-Eastern states of India, the GST limit comes to INR 20 lakh for all types of businesses. In states like Meghalaya, Assam, Nagaland, Mizoram, Tripura, and Arunachal Pradesh; the GST limit is INR 10 lakhs.</p>

					<h5>How would the Composition Scheme work under the regulations of GST?</h5>
					<p>As per the GST regulations, the Composition Scheme applies to all types of businesses with an annual turnover up to INR 50 lakhs. These taxpayers will need to pay a predominant percentage of his/her turnovers.</p>

					<h5>Does GST apply to all businesses?</h5>
					<p>Yes. GST is mandatory for all types of business identities. It applies to every kind of traders, manufacturers, and providers. It can also extend to writers, bloggers and dealers who have obtained registration for the creative works.</p>

					<h5>Do we need different forms for IGST, SGST, and CGST?</h5>
					<p>One identical GST return filing form can be used for filing SGST, CGST, and IGST. In this form, there are different columns for each one of these categories and it will have to be filled based on the type of business.</p>

					<h5>What happens if the return is not filed within the stipulated time?</h5>
					<p>In case of delay, the individual is needed to pay INR 100/day. Along with that, a fine has to be paid with an 18% per annum rate.</p>

					<h5>After filing of returns, will I be able to pay my taxes?</h5>
					<p>Business personnel would not be able to pay the taxes after filing the GST returns. Instead, the tax amount should be paid before the GST return filing procedure. Failing to do so, the return will be considered invalid by law.</p>

					<h5>- After filing of returns, will I be able to pay my taxes?</h5>
					<p><b> Business </b> personnel would not be able to pay the taxes after filing the GST returns. Instead, the tax amount should be paid before the GST return filing procedure. Failing to do so, the return will be considered invalid by law.</p>

				
				</div>
			</div>							
	</div>

</div>




<?php include('footer.php');?>