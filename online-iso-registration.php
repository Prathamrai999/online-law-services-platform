<?php include('header.php');?>


<!-- BANNER-inner -->
<div class="banner-inner">
	<img src="images/iso.jpg" alt="" class="innar-img">
</div>


<!-- consumer-complaint -->
<div class="consumer-complaint">
	<div class="container">
		<h2>ISO</h2>
		<p>
		ISO certificates are provided in many areas of industry that is from energy management and social responsibility to medical devices and risk management.</p>
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
                              
                                <option value="699">699 /- </option>
							  <option value="999">999 /-</option>
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
   'type'=>'iso',
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
					<h5>ISO REGISTRATION</h5>
					<br>
					<h6>ISO refers to International Organization for Standardisation. It is an independent organisation that provides standards in terms of quality, safety, and efficiency of products and services provided by businesses. ... ISO certification helps to improve your business credibility as well as overall efficiency of the business. ISO certificate is one of the ways that provide standards to the organizations and thus lead to innovation and development of trade.<br>
						<br>
					These standards also ensure that the products and services of the organization meet the customer and regulatory requirements. In addition to this, it also demonstrates continuous improvement. ISO is an independent, non-governmental, international organization that creates standards to ensure the quality, safety, and efficiency of the products, services, and systems. It also certifies that the management system, manufacturing process, service or the documentation process has fulfilled all the requirements for standardization and quality assurance.</h6>
						

						
					

					

				</div>
				<div class="complaint-online">

					<h6><b>Documents Required:-</b>
						<br>
					</h6>
					<li>Copy of PAN card,</li>
					<li>Passport size photograph,</li>
					<li>Copy of Aadhar card/Voter Identity card,</li>
					<li>Two copies of Sales/Purchase bill.</li>


		
					
				</div>
				<div class="complaint-online">

					<h6><b>BENEFITS OF ISO:-</b><br>
					</h6>

			<li><b>Builds a Standard:</b> It builds a standard which attracts more and more clients.</li><br>

			<li><b>International credibility:</b> As this is an internationally recognized mark, it would ultimately help your business establish an overseas business.</li><br>

			<li><b>Customer satisfaction:</b> The ways and methods of production would improve. Thus, it would eventually result in better service to the customers.</li><br>

			<li><b>Government tenders:</b> In the case of any government tenders, the ISO mark would give your business an edge over your competitors.</li><br>

			<li><b>Business efficiency:</b> The ISO certification agency would help you improve your SOP and work instruction and thus it will ultimately make your business more efficient.</li><br>

			<li><b>Product quality:</b> ISO mark products are of international standards. There would be fewer chances of rejection that would have occurred due to flawed products.</li><br>

			<li><b>Marketability:</b> ISO (International Standards Organization) agency improves the credibility of the business and thus helps in developing business marketing directly.</li>
					
		
					
				</div>
		

			</div>			
		</div>

		<div class="row">
			<h2>How We Work</h2>
			<div class="col-md-3">
				<div class="box-work">
					<p>Fill the Form and Make the Payment.</p>
				</div>
			</div>
			<div class="col-md-3">
				<div class="box-work">
					<p>Our Expert will be assigned for you for documentation and entire application procedure.</p>
				</div>
			</div>
			<div class="col-md-3">
				<div class="box-work">
					<p>Get a Call and get informed.</p>
				</div>
			</div>
			<div class="col-md-3">
				<div class="box-work">
					<p>Our expert will be assign for you.</p>
				</div>
			</div>
		</div>			
	</div>


</div>




<?php include('footer.php');?>