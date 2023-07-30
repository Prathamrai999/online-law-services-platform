<?php include('header.php');?>


<!-- BANNER-inner -->
<div class="banner-inner">
	<img src="images/Sole_Proprietorship.jpg" alt="" class="innar-img">
</div>


<!-- consumer-complaint -->
<div class="consumer-complaint">
	<div class="container">
		<h2>Sole Proprietorship Registration</h2>
		<p>Need to provide Aadhaar number for the registration process.</p>
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
	        				</span> 
	        		
	        			    <label for="name">Select Fees : </label>
	        				<select name="fess" id="fess">
							  <option value="999">999 /- </option>							  						  
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
   'type'=>'sole_prop'
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
					<h5>Sole Proprietorship</h5>
					
					<h6><b> What is Sole Proprietorship?</b><br>
						Sole proprietorship registration is required for a individual who runs a firm and manage solely on his own. It basically requires for the small firms to get registered with Sole Proprietorship. Sole proprietorship requires a very easy process and documentation..</h6>
					<br>

				</div>
				<div class="complaint-online">
					<h5>Sole Proprietorship key feature or objectives</h5>
					<h6><b>
						Simplify the registration process- </b><br>One of the main objectives of the process is to pursue small industries in a legal manner. Earlier the process of registration was very big and complicated. That is why the small businessmen of our country used to run away from this process. But now you can easily register your business under the Sole Proprietorship.</h6>

						<h6><b>Unemployment control-</b><br> By promoting small industries, people will show more interest in starting their own business, which will also increase the chances of getting new startups (new business). Not only this, the unemployed in the country will be less and people will get new opportunities.</h6>

						<h6><b>Increase competition for companies- </b><br>The government of this time is bent on promoting trade because it can be good for the country. The more the industries are in our country, the more the chances of the country becoming financially strong will increase. Along with this, the thinking between the companies moving ahead of each other will also benefit the country.
											</h6>




			</div>
			</div>			
		</div>

		<div class="row">
			<h2>How We Work</h2>
			<div class="col-md-4">
				<div class="box-work">
					<p>Fill our Form </p>
				</div>
			</div>
			<div class="col-md-4">
				<div class="box-work">
					<p>Make the Payment.</p>
				</div>
			</div>
			<div class="col-md-4">
				<div class="box-work">
					<p>CA/CS Expert of Vidhik Sevaen will be assigned for you.</p>
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
					<h5>- Who can start a Sole Proprietorship in India?</h5>
					<p><b>As </b>  per the Companies Act,2013 any Indian citizen above the age of 18 can start a Sole Proprietorship firm.</p>

					<h5>- How consultation will help me?</h5>
					<p><b>Our</b> in-house CA/CS/Experts will guide you to incorporate a Sole Proprietorship firm in India and will also suggest the types of registrations that will help you to run your business smoothly. Book a Consultation</p>

					<h5>- What next as I Book a consultation?</h5>
					<p><b>After </b> making the payment, your consultation will be booked with an Expert/CA/CS from our end. You will get a call from the Expert/CA/CS assigned they will provide you with every possible solution to your query. Book a Consultation</p>

					<h5>- Can I register my Sole Proprietorship firm under Govt. of India?</h5>
					<p><b>Yes,</b>  you can, Our Expert will guide you on how to get register under the Government of India and the type of licenses you will require for your business to function smoothly. Book a Consultation</p>

					<h5>- Why choose Vidhik Sevaen?</h5>
					<p><b>Vidhik Sevaen </b>  is the most trusted online legal platform.Book a Consultation Now.</p>
					

				</div>
			</div>							
	</div>

</div>




<?php include('footer.php');?>