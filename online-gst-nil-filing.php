<?php include('header.php');?>


<!-- BANNER-inner -->
<div class="banner-inner">
	<img src="images/GSTnil.jpeg" alt="" class="innar-img">
</div>


<!-- consumer-complaint -->
<div class="consumer-complaint">
	<div class="container">
		<h2>GST Nil</h2>
		<p>All taxpayer who is having <b>GST</b> Registration but not having the eligibility to pay the tax needs to file GSTR-1 even if he has no business activity during the session. The tax payer can file a Nil GSTR-1 in such cases. The outward supplies include all taxable as well as exempt supplies.</p>
			<br><br>
		<div class="row">
			<div class="col-md-5">
				<div class="complaint-form" data-aos-duration="1500" data-aos="zoom-in">
			<!--		<form method="post" enctype="multipart/form-data">
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
							  <option value="599">599 /- </option>
							  <option value="799">799 /- </option>
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
   'type'=>'gst_nil'
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
					<h5>GOODS AND SERVICES TAX NIL FILING</h5>
					
					<h6><b> Do I have to file Nil GSTR3B return?</b><br>
						The taxpayers should file GSTR-3B return for the months of July and August for all taxpayers having GST registration. Even for those businesses that had no business activity during the month of July and August must file nil GSTR-3B return.</h6>
					<br>

					<h6><b>Do I have to file Nil GSTR-1 return?</b><br>

					Yes, nil GSTR-1 return must be filed by all regular taxpayers having GST registration even if there were no sales transaction in a month. If the taxpayer fails to file GSTR-1 return, a penalty of Rs.100 per day shall apply.
					</h6>
					<br>

					<h6><b>Procedure for filing nil GSTR1 return</b><br>

					In GSTR-1 return, the taxpayer provides information about all sales transactions in the previous month and upload invoices issued to the GSTN portal. The taxpayer shall still state on NIL transactions even if the business makes NIL sales. The taxpayer shall file the NIL returns on the GST portal by logging into the GST portal. submit that no transactions were done, e-sign and file GSTR-1 return.
					</h6>
					<br>

					<h6><b>Do I have to file nil GSTR-2 return?</b><br>
						
					Yes, nil GSTR-2 return must be filed by a taxpayer even if there were no purchase transactions in a month. If GSTR-2 return is not filed, a penalty of Rs.100 will be charged. While filing GSRT-2 return, most of the information is auto-populated based on GSTR-1 return filed by all taxpayers. Hence, if there were no purchases, the auto-populated form of GSTR-2 would show that non- activity of business. The taxpayer can verify GSTR-2, e-sign and submit a nil GSTR-2 return easily.
					</h6>
					<br>

					<h6><b>Do I have to file nil GSTR-3 return?</b><br>
						
					Yes, nil GSTR-3 return must be filed by a taxpayer even if there were no business activity in a month. Upon failure to file the GSTR-3 returns, a penalty of Rs.100 per day shall apply. Since most of GSTR-3 return is auto-populated, filing of nil GSTR-3 return would be very easy. The taxpayer would have to login to the GST Portal, verify the amount of tax payable, if any, e-sign and submit the GSTR-3 return.
					</h6>


				</div>
				<div class="complaint-online">
					<h5>Fees:-</h5>
					<table>

					  <tr>
					    <td>GST Nil Filing</td>
				    	<td>Monthly	</td>
				    	<td>Price Rs 599</td>
				    </tr>
				    <tr>
						<td>GST Nil Filing</td>
						<td>quarterly.</td>
						<td>Price Rs 799</td>
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
					<p>Congratulations! Your GST-Cancel has been successfully submitted.</p>
				</div>
			</div>
			<div class="col-md-3">
			</div>		
			<div class="col-md-3">
				<div class="box-work">
					<p>Get a Call from Our GST Expert.</p>
				</div>
			</div>
			<div class="col-md-3">
				<div class="box-work">
					<p>Our experts will proceed for your GST- Cancel after you approved it.</p>
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
					<h5>Is it mandatory for all the registered taxpayers to file the GST Nil Return?</h5>
					<p>	No. Filing the GST Nil Return is mandatory only for the taxpayer with no sales or purchase input within a certain time period.</p>

					<h5>Can I file my GST Nil Return on a yearly basis?</h5>
					<p>No. As per the GST Act, 2017, the GST Nil Return can be filed only on monthly or quarterly basis</p>

					<h5>Will I have to file the GST Nil Return after filing the regular GST Returns?</h5>
					<p>GST Nil Return filing is applicable only for the registered taxpayers with zero sales or purchase record within a fixed timeline. If a business individual is filing the standard GST Returns, it means he/she is not applicable for the GST Nil Return filing.</p>

					<h5>Should I visit the GST authority to file the GST Nil Return?</h5>
					<p>No. Online Legal Service provides a complete online procedure for GST Nil Return filing so that you do not have to physically present anywhere to complete the filing process.</p>

					<h5>How should I know that I am eligible for the GST Nil Return filing or not?</h5>
					<p>Following the provisions of the GST Act, 2017, a  business personnel becomes eligible for GST Nil Return filing in case of no sales/purchase input during a time period.</p>



				</div>
			</div>							
	</div>

</div>




<?php include('footer.php');?>