<?php include('header.php');?>


<!-- BANNER-inner -->
<div class="banner-inner">
	<img src="images/TMRegistration.jpeg" alt="" class="innar-img">
</div>


<!-- consumer-complaint -->
<div class="consumer-complaint">
	<div class="container">
		<h2>TM Registration</h2>
		<p>
			Trademark Registration provides ultimate protection for<b> Business Name, Brand Name, Taglines, Captions, Logo, Symbol </b>or Emblem or a combination of these as Trademark</p>
			<br><br>
		<div class="row">
			<div class="col-md-5">
				<div class="complaint-form" data-aos-duration="1500" data-aos="zoom-in">
				<!--	<form method="post" enctype="multipart/form-data">
	        			<div class="input-cont">
	        			    <label for="name">Name </label>
	        				<input type="text" placeholder="  Name" name="name" value="" >
	        			</div>
	        			<div class="input-cont">
	        			    <label for="name">Phone no </label>
	        				<input type="text" value="" placeholder=" Phone no" >
	        			</div>

	        			<div class="input-cont">
	        			    <label for="name">Email </label>
	        				<input type="email" placeholder="  Email" value=""  name="email">
	        			</div>

	        			<div class="input-cont">
	        			    <label for="name">Address </label>
	        				<input type="text" placeholder=" Address" value=""  name="address">
	        			</div>
	        			<div class="input-cont">
	        			    <label for="name">Aadhar card number: </label>
	        				<input type="text" value="" placeholder="   Aadhar card number:" >
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
	        				<textarea name="message"  id="message" placeholder=" Say Something about your problem in short or in details" ></textarea>
	        			</div>
	        			<span><b>NOTE :</b><br> 699 Purchase / Loss amount [ Rs 0 - 10000 ]<br>
												999 Purchase / Loss amount [ Rs 10001 - 25000 ]<br>
												1899 Purchase / Loss amount [ Rs25000 - above ]</span>
	        			<div class="input-cont">
	        			    <label for="name">Select Fees : </label>
	        				<select name="fess" id="fess">
							  <option value="699">699 /- </option>
							  <option value="999">999 /-</option>
							  <option value="1899">1899 /-</option>
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
   'type'=>'tm_regis',
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
					<h5>Trademark® Registration Online | Quick & Easy Online Process</h5>
					<h6>No need to visit Trademark Register Office. Easy & quick process of online TM application by sitting at your place. You can use ™ mark today.</h6>
						<br>
					
						
					<h6><b>What is the difference between ™ and ®?</b>
						<br>
						When there is a TM on the brand name or logo, it indicates that the trademark application has been filed and the registration is under process. An applicant can use the TM beside his brand name or logo once the application is filed. He can use it until the registration is done. After completion of registration, the TM gets replaced by ® which means the trademark registration is completed and it is valid for 10 years.</h6>

						<br>
					<h6><b>Who Can Obtain a Trademark?</b>
						<br>
						As per this new rule, consumers are allowed to file a complaint from anywhere be it home, office or anywhere else.</h6>
						<br>
						<img src="images/who-can-1.png" alt="" class="tedmark-img">
						<img src="images/who-can-2.png" alt="" class="tedmark-img">
						<img src="images/who-can-3.png" alt="" class="tedmark-img">
						<img src="images/who-can-4.png" alt="" class="tedmark-img">
						<img src="images/who-can-5.png" alt="" class="tedmark-img">						
						<img src="images/who-can-6.png" alt="" class="tedmark-img">						
				</div>
				<div class="complaint-online">
					<h5>Avail 50% discount on Trademark Registration</h5>
					<h6>For trademark registration, you need to pay Rs. 4200/- as Government fees. But if you own a MSME/SSI/Udyog Aadhar certificate, this Government fee is reduced to 50%.</h6>
					<br>
					<table>
					
					  <tr>
					    <td>Trademark Registration</td>
					    <td>Rs 1899 (Without DSC)</td>
					    <td>No Hidden Charge One Time Payment</td>
					    <td>EXCLUDED-Government fee of Rs.4500/- will be applicable after filling the TM application.</td>
					  </tr>

					</table>
					<li>Applicant´s / Company Name</li>
					<li>Business Type</li>
					<li>Business Details</li>
					<li>Brand/logo/slogan name</li>
					<li>Office / Business address</li>
					
				</div>
				<div class="complaint-online">
					<h5>Why Vidhik Sevaen ?</h5>
				<h6>We conduct a thorough research regarding your TM availability from the Govt.
				<br>	
				Authorization letter is prepared from our side in order to file Trademark registration on your behalf.
				<br>
				We offer the best services to make sure that our client does not have to face any responsibility of filing Trademark.

				<br>
				You will be guided on the classes you have to apply under and we are the one to guide you.
				<br>
				We will provide assistance regarding form fill up with the Registrar.
				<br>
				You will be receiving updates constantly from our side till the registration is completed.
				<br>
				We assure you to protect your brand of products or services.</h6>
					<br>
				</div>

			</div>			
		</div>

		<div class="row">
			<h2>How We Work</h2>
			<div class="col-md-3">
				<div class="box-work">
					<p>Fill The Form And Make The Payment</p>
				</div>
			</div>
			<div class="col-md-3">
				<div class="box-work">
					<p>We Will Draft The Authorization Letter (Form-48)</p>
				</div>
			</div>
			<div class="col-md-3">
				<div class="box-work">
					<p>Our Expert Will File The TM Application</p>
				</div>
			</div>
			<div class="col-md-3">
				<div class="box-work">
					<p>We Will Search The Class Of Your Brand By Trademark Expert</p>
				</div>
			</div>
			<div class="col-md-3">
				
			</div>			
			<div class="col-md-3">
				<div class="box-work">
					<p>Upload The Required Documents</p>
				</div>
			</div>
			<div class="col-md-3">
				<div class="box-work">
					<p>Congratulations! You Can Use Now ™ Next To Your Brand</p>
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
				    
<h5>What is a Trademark?</h5>
<p>Trademark is an intellectual property consisting of recognizable sign or design in order to identify products or services from a specific source, although trademarks that are used to identify services are called service marks.</p>

<h5>What can be registered as a Trademark?</h5>
<p>A trademark is basically any word, name, symbol etc. which is used to identify and distinguish products or services of one specific seller or service provider from those of other competitors in the market. It also indicates the source of the products or services.</p>

<h5>What Trademarks are not registrable?</h5>
<p>The TM logo indicates an unregistered trademark which is still distinguished from similar products or services. According to the Trademark Act, an unregistered Trademark does not get total protection and cannot prevent a third party from using the same mark.</p>

<h5>What is Trademark class?</h5>
<p>A Trademark classification is a procedure by which examiners and the trademark attorneys arrange the required documents including trademark and service mark application, according to the description of goods to which the marks are applicable.</p>

<h5>How long does it take to file a Trademark application?</h5>
<p>Filing a Trademark application usually takes around 18-24 months.</p>

 <h5>When Can I Use ™ Symbol?</h5>
<p>Once the trademark application is successful, you receive an acknowledgement providing you the right to use the TM symbol. After the registration of it, you can use the ® symbol.</p>

<h5> What is the difference between trademark, copyright and patent?</h5>
<p>Copyright<br>
It protects original works in the form of intellectual property (literary, dramatic, musical, artistic etc.). A business can copyright its books, reports, audio or video materials.
<br>Trademark<br>
It protects words, names, symbols, colors etc that distinguish products and services from those of others. It indicates the source of the goods. A company can register its business name, logos, slogans, etc that creates the brand image of a company.
<br>Patent<br>
Government grants an exclusive right to an inventor for an invention for a limited period of time in exchange for the disclosure of the discovery to the general public.</p>

<h5>What are the different kinds of trademarks I can have?</h5>
<p>A name (personal or surname of the applicant or the person’s signature)
<br>A newly coined or invented word or any other arbitrary word from dictionary, not being vividly descriptive of the character or quality of the product or service
<br>Alphanumeric or letters or numerals or combination of them
<br>Image, Symbol, Monograms, 3D shapes, letters etc.
<br>Sound marks in audio format.</p>

<h5>How long is a registered trademark valid for?</h5>
<P>Registered Trademarks are valid for 10 years from the date of filing the application. The trademark owner can file for renewal of the trademark to keep it protected for more time prior to the end of the validity.</P>

				</div>
			</div>							
	</div>



</div>




<?php include('footer.php');?>