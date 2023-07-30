<?php include('header.php');?>


<!-- BANNER-inner -->
<div class="banner-inner">
	<img src="images/divorce.jpeg" alt="" class="innar-img">
</div>


<!-- consumer-complaint -->
<div class="consumer-complaint">
	<div class="container">
		<h2>Divorce</h2>
		<p>The legal dissolution of a marriage by a court or other competent body</p>
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
	        				<span><b>NOTE :</b><br>499 (For Legal Advice Only)<br>
											799 (For Legal Advice plus Legal Notice)<br>
											1499 (For Agreement/ Will/ Notary & Affidavit)</span>
	        		
	        			    <label for="name">Select Fees : </label>
	        				<select name="fess" id="fess">
							  <option value="499">499 /- </option>
							  <option value="799">799 /- </option>
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
	        				<textarea name="problem" required  id="message" placeholder="  Say Something about your problem in short or in details" ></textarea>
	        			</div>
	        			
	        			<div class="input-cont">
	        			    <label for="name">Select Fees : </label>
	        				<select name="fees" required id="fess">
                              <option value="499">499 /- </option>
							  <option value="799">799 /- </option>
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
   'type'=>'divorce',
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
					<h5>Get Advice from An Experienced Divorce Lawyer | On Call Support | Divorce Filing</h5>
					
					<h6><b>[100% Confidential Guaranteed] Fill The Form > Make The Payment > Get Call Back From Highly Qualified Divorce Lawyer</b><br>
					In India, rules for divorce are connected to religion. Divorce among Hindus, Buddhists, Sikhs and Jains is governed by the Hindu Marriage Act, 1955, Muslims by the Dissolution of Muslim Marriages Act, 1939, Parsis by the Parsi Marriage and Divorce Act, 1936 and Christians by the Indian Divorce Act, 1869. All civil and inter-community marriages are governed by the Special Marriage Act, 1956.<br>

					<b>Types of Divorce in India</b><br>
					<b>Divorce in India is fundamentally of two types:</b>Divorce with Mutual Consent & Divorce without Mutual Consent<br>

					The mutual divorce is explained under Sec. 13B of the Hindu Marriage Act 1955 and Sec. 28 of the Special Marriage Act 1954, where the spouses both agree to separate peacefully. In this case, they take their own decision by agreeing with each other and seek the help of the judiciary to give their separation a legal status.</h6>
					<br>

					<h6><b>The procedure for mutual divorce can be briefed up in three steps:</b><br>
					The parties have to file a joint petition. The court fixes a date for the hearing, on that date, the couple requires to be present in court. In case court passes an order in fever of both husband and wife. Contested Divorce (Divorce without Mutual Consent) For filing a contested divorce, there are certain grounds which are mentioned under Section 13 of the Hindu Marriage Act 1955 and Section 27 of the Special Marriage Act 1954:</h6>


					<h6>
					<b>Cruelty:</b>Cruelty means both physical and mental cruelty by the wife or her family members.<br>
					<b>Adultery:</b>Adultery means to be in a sexual relationship with any person other than the spouse.<br>

					<b>Desertion:</b>If one of the spouses voluntarily abandons his/her partner for at least a period of two years, the abandoned spouse can file a divorce case on the ground of desertion.<br>

					<b>Conversion:</b>In case either of the two converts himself/herself into another religion, the other spouse may file a divorce case based on this ground.<br>

					<b>Mental Disorder:</b>Mental disorder can become a ground for filing a divorce if the spouse of the petitioner suffers from incurable mental disorder and insanity.<br>

					<b>Leprosy:</b>In case of a ‘virulent and incurable’ form of leprosy, a petition can be filed by the other spouse based on this ground.<br>

					<b>Venereal Disease:</b>If one of the spouses is suffering from a serious disease that is easily communicable, a divorce can be filed by the other spouse. The sexually transmitted diseases like AIDS are accounted to be venereal diseases.<br>

					<b>Renunciation:</b>A spouse is entitled to file for a divorce if the other renounces all worldly affairs by embracing a religious order.<br>

					<b>Not Heard Alive:</b>If a person is not seen or heard alive by those who are expected to be ‘naturally heard’ of the person for a continuous period of seven years, the person is presumed to be dead.</h6><br>

					<h6><b>How To File For Divorce ?</b></h6>
					
					<li>Preparing the Petition for Divorce</li>
					<li>Filing of the Petition</li>
					<li>Scrutiny of the Petition by Court</li>
					<li>Appearance of the opposite side party in Court</li>
					<li>Direction for Mediation</li>
					<li>Framing of issues and recording of evidence by Court</li>
					<li>Final arguments by counsels of the parties</li>
					<li>Final decision by the Court</li>
	
				</div>
				<div class="complaint-online">

					<h5>What is Alimony and its Duration & Amount?</h5>
					<h6>When two people are married, they have an obligation to support each other. This does not necessarily end with divorce. Under the Code of Criminal Procedure, 1973, the right of maintenance extends to any person economically dependent on the marriage. The claim of either spouse (though, in the vast majority of cases, it is the wife), however, depends on the husband having sufficient means. When deciding how much alimony is to be paid, the courts will take into account the earning potential of the husband, his ability to regenerate his fortune (in case, say, the property is given to the wife) and his liabilities. Duration and amount of alimony will be guided by our experienced divorce lawyers.</h6><br>

					<h6><b>What Amounts Are Required To File For Divorce? <br>Fees</b></h6>
					<li>Legal Advice Charges INR<b> 499/-</b></li>
					<li>Legal Advice + Legal Notice INR <b> 799/-</b></li>
					<li>Any Agreement/Will/Notary & Affidavit and any others INR <b> 1499/-</b></li>
					<br>
					<h6><b>Online/Phone Legal Advice V/S In-Person Consultation</b></h6>
					<li>A real time most demanding legal support</li>
					<li>Save time</li>
					<li>Save Transportation cost</li>
					<li>Private matters can be discussed freely</li>
					<li>Convenient for clients with busy schedules</li>
					<li>Provide urgent solutions for some clients</li>

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
 		<h6><b>Please Check The Frequenty Asked Questions.</b></h6>

 		
			<br><br>
			
			<div class="col-md-12">
				<div class="faq-box">
					<h5>How does an Vidhik Sevaen works in case of divorce?</h5>
					<p>Vidhik Sevaen files divorce for its clients in a proper format fruitfully. Online Divorce is basically for couples who are seeking for an uncontested divorce. This means that both individuals agree to end the marriage and issues such as the division of community property, alimony and child support payments, and others.</p>

					<h5>Are online divorces safe?</h5>
					<p>Yes! Online divorces are just as legitimate and just as good of an idea as filing in-person at the courthouse.  Most states allow divorce papers to be filed online, as well as the download of printable divorce forms from your state or county court's website.</p>

					<h5>How long does it take for an online divorce?</h5>
					<p>A divorce filed online can take anywhere between 3 and 24 months depending on whether it is contested or uncontested. The average uncontested divorce takes three months. </p>

					
				</div>
			</div>							
	</div>

</div>




<?php include('footer.php');?>