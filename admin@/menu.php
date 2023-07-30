<ul class="nav" id="side-menu">
						<li <?php if (stripos($_SERVER['REQUEST_URI'],'dashboard.php')!== false) {echo 'class="active"';}
else
	echo 'class= ""';
 ?> >
							<a href="dashboard.php"><i class="fa fa-home nav_icon"></i>Dashboard</a>
						</li>
					     
<li style="background-color: #3aceb2;" <?php if (stripos($_SERVER['REQUEST_URI'],'profile.php')!== false  || stripos($_SERVER['REQUEST_URI'],'login_edit.php')!== false) {echo 'class="active"';}
else
	echo 'class= ""';
 ?> >
							<a href="#"><i class="fa fa-users nav_icon"></i>Company Profile<span class="fa arrow"></span></a>
								<ul class="nav nav-second-level collapse">
							
								<li><a href="profile.php">Profile</a>
								<li><a href="add_about.php">About Company</a>
								<li><a href="add_meta_data.php">Add Meta Data</a>
								<li><a href="add_terms.php">Terms & Condition</a>
								<li><a href="add_refund.php">Refund Policy</a>
								<li><a href="add_privacy.php">Privacy Policy</a>
								<li><a href="add_payment.php">Payment Gateway</a>
								<li><a href="login_edit.php">Login Page Interface</a>
								<li><a href="change_password.php">Change Password</a>
						
								
								</ul>
						</li>
		<li <?php if (stripos($_SERVER['REQUEST_URI'],'')!== false  || stripos($_SERVER['REQUEST_URI'],'')!== false) {echo 'class="active"';}
else
	echo 'class= ""';
 ?> >
							<a href="#"><i class="fas fa-user-cog nav_icon"></i>Partner Mgmnt<span class="fa arrow"></span></a>
								<ul class="nav nav-second-level collapse">
							

						        <li><a href="add_partners.php">Partners </a></li>
						
								
								</ul>
						</li>				
<li <?php if (stripos($_SERVER['REQUEST_URI'],'')!== false  || stripos($_SERVER['REQUEST_URI'],'')!== false) {echo 'class="active"';}
else
	echo 'class= ""';
 ?> >
							<a href="#"><i class="fas fa-user-cog nav_icon"></i>Business Enquiry Mgmnt<span class="fa arrow"></span></a>
								<ul class="nav nav-second-level collapse">
							

						        <li><a href="form_page.php?type=private_limited&pg=Private Limited Company">Private Limited Company </a></li>
						        <li><a href="form_page.php?type=limited_partner&pg=Limited Liability Partnership">Limited Liability Partnership </a></li>
						        <li><a href="form_page.php?type=one_person&pg=One Person Company">One Person Company </a></li>
						        <li><a href="form_page.php?type=nidhi&pg=Nidhi Company">Nidhi Company </a></li>
						
								
								</ul>
						</li>							
	
<li <?php if (stripos($_SERVER['REQUEST_URI'],'add_client.php')!== false  || stripos($_SERVER['REQUEST_URI'],'all_client.php')!== false) {echo 'class="active"';}
else
	echo 'class= ""';
 ?> >
							<a href="#"><i class="fa fa-address-book nav_icon"></i>Registration Enquiry Mgmnt<span class="fa arrow"></span></a>
								<ul class="nav nav-second-level collapse">
							    <li><a href="form_page.php?type=tm_regis&pg=TM Registration">TM Registration </a></li>
						        <li><a href="form_page.php?type=tm_object&pg=TM Objection">TM Objection</a></li>
						        <li><a href="form_page.php?type=tm_renewal&pg=TM Renewal">TM Renewal </a></li>
						        <li><a href="form_page.php?type=iso&pg=ISO">ISO </a></li>
						        <li><a href="form_page.php?type=marriage_regis&pg=Marriage Registration">Marriage Registration </a></li>
						        <li><a href="form_page.php?type=digi_signal_certi&pg=Digital Signature Certificate">Digital Signature Certificate </a></li>
								
								</ul>
						</li>	
						
	<li <?php if (stripos($_SERVER['REQUEST_URI'],'add_client.php')!== false  || stripos($_SERVER['REQUEST_URI'],'all_client.php')!== false) {echo 'class="active"';}
else
	echo 'class= ""';
 ?> >
							<a href="#"><i class="fa fa-credit-card nav_icon"></i>Tax Enquiry Mgmnt<span class="fa arrow"></span></a>
								<ul class="nav nav-second-level collapse">
							

						        <li><a href="form_page.php?type=gst_regis&pg=GST Registration">GST Registration</a></li>
						        <li><a href="form_page.php?type=gst_file&pg=GST Filing">GST Filing </a></li>
						        <li><a href="form_page.php?type=gst_modi&pg=GST Modification">GST Modification</a></li>
						        <li><a href="form_page.php?type=gst_cancel&pg=GST Cancel">GST Cancel </a></li>
						        <li><a href="form_page.php?type=gst_nil&pg=ISO Nil">GST Nil </a></li>
						        <li><a href="form_page.php?type=itr_file&pg=ITR Filing">ITR Filing</a></li>
								</ul>
						</li>			
						
	<li <?php if (stripos($_SERVER['REQUEST_URI'],'add_client.php')!== false  || stripos($_SERVER['REQUEST_URI'],'all_client.php')!== false) {echo 'class="active"';}
else
	echo 'class= ""';
 ?> >
							<a href="#"><i class="fa fa-id-card nav_icon"></i>License Enquiry Mgmnt<span class="fa arrow"></span></a>
								<ul class="nav nav-second-level collapse">
							

						        <li><a href="form_page.php?type=fssai&pg=FSSAI [Food license]">FSSAI [Food license]</a></li>
						        <li><a href="form_page.php?type=fssai_renew&pg=FSSAI Renewal">FSSAI Renewal </a></li>
						        <li><a href="form_page.php?type=iec&pg=IEC [Import Export Code]">IEC [Import Export Code]</a></li>
						        <li><a href="form_page.php?type=sole_prop&pg=Sole Proprietorship ">Sole Proprietorship </a></li>
						        <li><a href="form_page.php?type=license&pg=Other License">Other License</a></li>
						        <li><a href="form_page.php?type=PAN&pg=PAN">PAN</a></li>
						        <li><a href="form_page.php?type=TAN&pg=TAN">TAN</a></li>
								</ul>
						</li>
	<li <?php if (stripos($_SERVER['REQUEST_URI'],'add_client.php')!== false  || stripos($_SERVER['REQUEST_URI'],'all_client.php')!== false) {echo 'class="active"';}
else
	echo 'class= ""';
 ?> >
							<a href="#"><i class="fa fa-balance-scale nav_icon"></i> Legal Enquiry Mgmnt<span class="fa arrow"></span></a>
								<ul class="nav nav-second-level collapse">
							

						        <li><a href="form_page.php?type=legal_advice&pg=Online Legal Advice">Online Legal Advice</a></li>
						        <li><a href="form_page.php?type=legal_notice&pg=Online Legal Notice">Online Legal Notice</a></li>
						        <li><a href="form_page.php?type=divorce&pg=Divorce">Divorce</a></li>
						        <li><a href="form_page.php?type=legal_service&pg=Other Legal Services ">Other Legal Services </a></li>
						        <li><a href="form_page.php?type=sale_deed&pg=Sale Deed Drafting ">Sale Deed Drafting </a></li>
						        <li><a href="form_page.php?type=joint_deed&pg=Joint Venture Deed ">Joint Venture Deed </a></li>
						        <li><a href="form_page.php?type=rent_deed&pg=Rent Deed Drafting ">Rent Deed Drafting </a></li>
						        <li><a href="form_page.php?type=lease_deed&pg=Lease Deed Drafting">Lease Deed Drafting </a></li>
						        <li><a href="form_page.php?type=partner_deed&pg=Partnership Deed Drafting">Partnership Deed Drafting </a></li>
								</ul>
						</li>	
		<li <?php if (stripos($_SERVER['REQUEST_URI'],'add_client.php')!== false  || stripos($_SERVER['REQUEST_URI'],'all_client.php')!== false) {echo 'class="active"';}
else
	echo 'class= ""';
 ?> >
							<a href="#"><i class="fas fa-user-cog nav_icon"></i>Consumer Complaint<span class="fa arrow"></span></a>
								<ul class="nav nav-second-level collapse">
							

						        <li><a href="form_page.php?type=complaint&pg=Consumer Complaint">Consumer Complaint</a></li>
						       
								</ul>
						</li>	
			<li <?php if (stripos($_SERVER['REQUEST_URI'],'')!== false  || stripos($_SERVER['REQUEST_URI'],'')!== false) {echo 'class="active"';}
else
	echo 'class= ""';
 ?> >
							<a href="#"><i class="fas fa-user-cog nav_icon"></i>Testimonial Mgmnt<span class="fa arrow"></span></a>
								<ul class="nav nav-second-level collapse">
							

						        <li><a href="entry_testimonial.php">Add Testimonial</a></li>
						
								
								</ul>
						</li>					
</ul>	