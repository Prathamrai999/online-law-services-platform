<?php include('header.php');?>


<!-- BANNER-inner -->
<div class="banner-inner">
	<img src="images/nidhi.jpg" alt="" class="innar-img">
</div>


<!-- consumer-complaint -->
<div class="consumer-complaint">
	<div class="container">
		<h2>Nidhi Company Registration</h2>
		<p></p>
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
   'type'=>'nidhi'
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
					<h5>Nidhi Company Registration</h5>
					<br>
					<h6>A Nidhi Company is a company, which is a non- banking financial sector and it comes under the Companies Act, 2013. This company is formed with a motto to lend and borrow money within its members and it is very easy to form as a company. It requires at least 200 members in a year to get its Nidhi Company status. Their mode of operation is through its members only. It is the easy form of business. Nidhi Companies are regulated by the Ministry of Corporate Affairs (MCA). They are also known as Benefit Fund, Permanent Fund etc.</h6><br><br>
						
						<h6><b>FEES:-</b> We do charge Rs.3999 as professional fee, Govt. fees & DSC charge are excluded
					</h6>
					
					
				</div>
				<div class="complaint-online">

					<h6><b>Documents for Nidhi Company Registration:-</b>
						
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
					
					</div>

					<img src="images/unnamed.jpg" alt="" style="width: 100%;">
		
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
					<h5>Which Act of the Indian Govt. administrates the Nidhi Company registration process?</h5>
					<p>In India, section 406 of the Companies Act, 2013 recognizes the Nidhi Company Registration process and oversees the correlated instances with the recognition of the Ministry of Corporate Affairs (MCA) of the Indian Govt.</p>

					<h5>What is the Minimum Capital requirement to incorporate a Nidhi Company?</h5>
					<p>As per the provisions of the Ministry of Corporate Affairs (MCA), the minimum capital requirement to incorporate a Nidhi Company is Rs. 5 Lakhs. The MCA also specified that the capital has to be raised two times at least.</p>

					<h5>On what condition a Nidhi Company can provide loans to its members?</h5>
					<p>A registered Nidhi company can provide loans to its members once the particular individual provide an equivalent security expanse like Gold, Silver or any type of financial credential against the loan.</p>

					<h5>What is the requirement of minimum numbers of Members in Nidhi Company?</h5>
					<p>As per the Companies Act, 2013 and the provisions of the Ministry of Corporate Affairs, a Nidhi Company is required to have at least 200 enrolled members.</p>


					<h5>Who can become a member/shareholder in a Nidhi Company?</h5>
					<p>Any Indian citizen who is above 18 years of age, can become a member or shareholder in a Nidhi Company. In the process, the particular individual is mandated to produce the valid age-proof and address proof.</p>


				
				</div>
			</div>							
	</div>

</div>




<?php include('footer.php');?>