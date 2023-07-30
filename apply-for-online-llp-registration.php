<?php include('header.php');?>


<!-- BANNER-inner -->
<div class="banner-inner">
	<img src="images/llp.jpg" alt="" class="innar-img">
</div>


<!-- consumer-complaint -->
<div class="consumer-complaint">
	<div class="container">
		<h2>Fast LLP Registration Services In India | 24X7 Online Portal</h2>
		<p>Apply for LLP Registration Online at lowest fees in India With Vidhik Sevaen. Easy Process and Documentation. Register for Limited Liability Partnership Now!</p>
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
   'type'=>'limited_partner'
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

}?>	</div>
			</div>
			<div class="col-md-7">
				<div class="complaint-online">
					<h5>LLP Registration</h5>
					<br>
					<h6>LLP states Limited Liability Partnership and it is governed by the Limited Liability Partnership Act, 2008. It has got limited liability to the partners. In case of LLP, there are two partners involved, where there is no minimum limit of capital investment and one must be resident of India, i.e., he must be staying or have stayed for 182 days in India. LLP is often done for the small type of businesses in India. However, a LLP due to its nature does not allow to issue equity shares, thus it cannot raise money from the general public. One can register a LLP through us in a very less time. The biggest advantage of LLP form of business over a Pvt Ltd Company is in the fact that there is less compliance requirement in comparison to a Company.</h6><br>
						
					
					
				</div>
				<div class="complaint-online">

					<h6><b>Documents for LLP Partnership Registration:-</b>
						
					</h6>
					<br>
					<li><img src="images/pas9.png" alt="" class="pan-icon">Two Colour Photographs of Promoters/Individuals/ Company/ Director</li>
					<li><img src="images/pas2.png" alt="" class="pan-icon">PAN Card of each Shareholders and directors</li>
					<li><img src="images/pas5.png" alt="" class="pan-icon">Identity Proof (Voter ID / Driving License/ Passport)</li>
					<li><img src="images/pas6.png" alt="" class="pan-icon">Address Proof (Bank Statement / Electricity, Mobile, Telephone Bill)</li>
					<li><img src="images/pas7.png" alt="" class="pan-icon">Proof of Registered Office</li>
					<li><img src="images/pas10.png" alt="" class="pan-icon">Utility Bill as proof must be Latest</li>

					
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
					<p>Our Experts will start drafting the requirements.</p>
				</div>
			</div>
			<div class="col-md-4">
				<div class="box-work">
					<p>Congratulations! You’ve registered your company certificates will be sent by post.</p>
				</div>
			</div>
		
			<div class="col-md-3">
				<div class="box-work">
					<p>You Will Get A Call From Our Lawyer</p>
				</div>
			</div>
			<div class="col-md-3">
				<div class="box-work">
					<p>LLP Deed Drafting & Submit.</p>
				</div>
			</div>
			<div class="col-md-3">
				<div class="box-work">
					<p>Expert will call you and receive all the necessary documents.</p>
				</div>
			</div>
			<div class="col-md-3">
				<div class="box-work">
					<p>Your Documents will be filed & submitted to the ROC.</p>
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
					<h5>Which Act of the Indian Govt. oversees the LLP registration process in the country?</h5>
					<p>The Limited Liability Partnership (LLP) registration in India is overseen by the provisions of the Limited Liability Partnership Act, 2008 with the guidelines of the Ministry of Corporate Affairs (MCA).</p>

					<h5>Can a LLP get foreign investors?</h5>
					<p>Definitely! The registered LLPs in India can legally allure the foreign investments from the angel investors. As per the experts, it is one of the biggest benefits to incorporate a LLP in the country.</p>

					<h5>How much time does it take to register a LLP in India?</h5>
					<p>Generally, the authority takes around 12-15 days to complete the registration process of a LLP. The expert CA panel of Vidhik Sevaen  Service always makes an effort to get done with the procedure within the given timeline.</p>


					<h5>What is the minimum requirement of capital to register a LLP?</h5>
					<p>Unlike the other formats of company registration, there is no minimum capital requirement to incorporate a LLP in India. As per the market experts, this is one of the notable beneficial approaches for registering a LLP.</p>


					<h5>Can a LLP be a partner in another LLP?</h5>
					<p>Yes. A LLP can be partner in another LLP as it is formed as a separate legal entity as per the provisions of the Limited Liability Partnership Act, 2008.</p>

				
				</div>
			</div>							
	</div>

</div>




<?php include('footer.php');?>