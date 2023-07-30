<?php include('header.php');?>


<!-- BANNER-inner -->
<div class="banner-inner">
	<img src="images/PartnershipDeedAgreement.jpg" alt="" class="innar-img">
</div>


<!-- consumer-complaint -->
<div class="consumer-complaint">
	<div class="container">
		<h2>Partnership Deed Drafting</h2>
		<p>Partnership deed is an agreement between the partners of a firm that outlines the terms and conditions of partnership among the partners</p>
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
	        				<textarea name="problem" required  id="message" placeholder=" Say Something about your problem in short or in details" ></textarea>
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
   'type'=>'partner_deed',
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
	
	            	<img src="images/Divorce-img.jpg" alt="" style="width: 100%; margin:30px 0 0;">
				</div>
			</div>
			<div class="col-md-7">
				<div class="complaint-online">
					<h5>Drafting Partnership Deed Online | Time Saving, Expert Writing & Affordable</h5>
					
					<h6><b>A team of lawyers from Vidhik Sevaen will draft your partnership deed online. No need to visit office. 2000+ Lease agreement drafted by expert team</b><br><b>What is Partnership Deed?</b><br>
					In order to understand the partnership deed, the buyer and the owner should acknowledge the existence of this particular deed. While commencing a business deal accompanied by more than two partners, they should map their shares of profit and losses into a written contract also known as partnership deed or agreement.

					The collaboration of these business partners agreed by the partnership deed is often termed as partnership firm<br>

					<b>Importance of partnership deed?</b><br>
					When partners have a partnership deed it helps them with legal responsibilities towards the firm. Partnership deeds do not require registrations and can be used anyway.<br>
					<br>
					<b>Benefits of a well contracted partnership deed:</b>
					<li>It adjusts and balances the privileges, duties, and responsibilities of all partners</li>
					<li>It helps in preventing any confusion and misinterpretation between the partners as all the clause of the alliance have been pre-contracted</li>
					<li>It helps in settling disputes between the associates by referring to the points mentioned in the deed.</li>
					<br>

					


					<table>
						<tr>
							<td>General Partnership (GP)</td>
							<td>Limited Partnership (LP)</td>
							<td>limited liability partnership (LLP)</td>
						</tr>

						<tr>
							<td> General partnership can be easily created.</td>
							<td> General partners have unlimited liability.</td>
							<td>• Business services are professional. Limited liability partnerships are created by specific specialized service businesses. These expert services include attorneys, accountants, doctors, architects, and other professionals.</td>
						</tr>
						<tr>
							<td> State filing not required in general partnership and can be created once the business activities start.</td>
							<td>Limited partnership requires onebusiness partner to have unlimited obligation who is also the general partner(s).</td>							
							<td> Protection of personal assets. Personal assets under LLP cannot be used to fulfil business obligations and responsibilities. LLP does not protect the business partners from personal liabilities. If partners are found of personal malpractices, LLP cannot help themin reducing the liabilities.</td>							
						</tr>

						<tr>
							<td> Operational cost is low and Formation filing fee, state fees orfranchise tax is not required.</td>
							<td>Limited partners have restricted liabilities towards their personal assets, and they cannot use it for debts.</td>
							<td></td>
						</tr>

						<tr>
							<td> General Partnerships are include business license and permissions necessary for business operations.</td>
							<td>The liability amount is limited for investment in limited partnership.</td>
							<td></td>
						</tr>
					
					</table>
	
				</div>
				<div class="complaint-online">


					<h6><b>Advantages and Benefits of Partnership firms</b></h6>
					<li>Advantages and Benefits of Partnership firms</li>
					<li>Can be created easily</li>
					<li>Large number of resources are available</li>
					<li>Better and collective decisions are made in a Partnership Firm</li>
					<li>Business operations are highly flexible</li>

					<br>
					<h6><b>Important Sections of the Partnership Deed</b><br
						>Any regulated partnership deed structure must have the following clauses as they are important for the partnership firm:</h6>
						<br>
					<li>The Names and Addresses of the Partnership firm along with its foremost business</li>
					<li>Names and Addresses of all business partners</li>
					<li>The invested capital amount contributed by each partner</li>
					<li>The firm's accounting period</li>
					<li>The date of inauguration of partnership</li>

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
					<h5>What is Partnership Deed?</h5>
					<p>In order to understand the partnership deed, the buyer and the owner should acknowledge the existence of this particular deed. While commencing a business deal accompanied by more than two partners, they should map their shares of profit and losses into a written contract also known as partnership deed or agreement.</p>

					<h5>What are the contents of a partnership deed?</h5>
					<p>The name of the firm<br>
						Name and details of all the partners<br>
						Date from which the business has started and the duration of its existence<br>
						Capital contributed by each partner and interest of capital payable to the partners<br>
						Profit sharing ratio and extend of borrowings each partner can draw</p>

					<h5>What is the difference between a partnership deed and an agreement?</h5>
					<p>Partnership agreement is not registered in the court of law, its a an agreement between the partners whereas a partnership deed is a written agreement between the partners and is registered in the court of law.</p>


					<h5>Is Partnership Deed a legal document?</h5>
					<p>Yes, it's a  written legal document that consists of an agreement between two individuals who pursue business together and share profit and losses. </p>

					<h5>What is the act that governs a partnership firm?</h5>
					<p>In India, partnerships are governed by the Indian Partnership Act 1932 (the Act). Limited liability partnerships (LLPs) are governed by the Limited Liability Partnership Act 2008 (the LLP Act). In an LLP, the partners have limited liability, whereas in a partnership the liability of the partners is unlimited.</p>
					
				</div>
			</div>							
	</div>

</div>




<?php include('footer.php');?>