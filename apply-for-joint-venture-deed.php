<?php include('header.php');?>


<!-- BANNER-inner -->
<div class="banner-inner">
	<img src="images/JOINTVENTURE.jpg" alt="" class="innar-img">
</div>


<!-- consumer-complaint -->
<div class="consumer-complaint">
	<div class="container">
		<h2>Joint Venture Deed</h2>
		<p>Main purposes and objective of the Joint Venture shall be to execute the activities as per the Contract with the Client and shall be wound up once the activities are completed as agreed upon</p>
			<br><br>
		<div class="row">
			<div class="col-md-5">
				<div class="complaint-form" data-aos-duration="1500" data-aos="zoom-in">
				<!---	<form method="post" enctype="multipart/form-data">
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
							  <option value="1499">1499 /- </option>
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
	        			    <label for="name">Problem Details: </label>
	        				<textarea name="problem" required  id="message" placeholder="   Say Something about your problem in short or in details" ></textarea>
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
   'type'=>'joint_deed',
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
					<h5>Draft Your Joint Venture Agreement by Top Lawyers in India</h5>
					
					<h6><b>Lawyer of Vidhik Sevaen can assist you to draft Joint Venture Agreement online. You don’t have to visit any office physically. + 2000 Joint Venture Agreements had been drafted so far.</b><br><b>What is Joint Venture?</b><br>
					A joint venture is basically a tactical partnership in which two or more than two companies or individuals decides to put in products, services and capital to establish a commercial project. The main key for success in joint venture in India is the compatibility and understanding between the contracting parties.</h6>
					<br>

					<h6><b>Checklist for a Joint Venture Agreement :</b><br></h6>
					<li>Two or more parties must have the intension of getting involved in a partnership or a venture.</li>
					<li>Both the parties invest in the venture or according to the agreement.</li>
					<li>Each party is assigned with duties and rights as per the partnership.</li>

				</div>
				<div class="complaint-online">

					<h5>Types of Joint Ventures</h5>
					<h6><b>The two options available for establishing a joint venture in India are:</b></h6>
					<li>Contractual joint venture</li>
					<li>Equity based joint venture</li>
					<br>
					<br>
					<h6><b>Benefits of a Joint Venture :</b></h6>
					
					<li>New insights and expertise</li>
					<li>Better resources</li>
					<li>It is only temporary</li>
					<li>Joint ventures can be flexible</li>
					<li>There are ways to exit a joint venture</li>
					<li>You will know what’s yours and will be able to sell it</li>
					<li>You are more likely to succeed</li>
					<li>You will build relationships and networks</li>					

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
		
					<h5>What is Joint Venture?.</h5>
					<p><b>A </b>joint venture is a business entity created by two or more parties, generally characterized by shared ownership, shared returns and risks, and shared governance.</p>

					<h5>Who needs Joint Venture?.</h5>
					<p><b> Joint </b> Venture requires for Corporations, partnerships, limited liability companies (LLCs), and other business entities.</p>

					<h5>Why are joint ventures needed?</h5>
					<p><b> A joint</b> venture involves two or more businesses pooling their resources and expertise to achieve a particular goal. The reasons behind forming a joint venture include business expansion, development of new products or moving into new markets, particularly overseas.</p>



					
									
				</div>
			</div>							
	</div>

</div>




<?php include('footer.php');?>