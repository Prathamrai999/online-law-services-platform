<?php
include('header.php');
$show=new Oops($db);

?>
<style type="text/css">

.alert_content{ font-size:11px;}
</style>

		<div id="page-wrapper">
			<div class="main-page">

			<div class="row">

              
	       <div class="col-md-2">
            	<a href="form_page.php?type=private_limited&pg=Private Limited Company">
					<div class="alert alert-info info" role="alert">
						<div class="alert_logo"><h1 class="fa fa-home"></h1></div> 
						<div class="alert_content"><strong>Private Limited Data</strong></div>
					</div>
				</a>
            </div>	
           <div class="col-md-2">
            	<a href="form_page.php?type=limited_partner&pg=Limited Liability Partnership">
					<div class="alert alert-success warn" role="alert">
						<div class="alert_logo"><h1 class="fa fa-home"></h1></div> 
						<div class="alert_content"><strong>Limited Liability Data</strong></div>
					</div>
				</a>
            </div>
           <div class="col-md-2">
            	<a href="form_page.php?type=one_person&pg=One Person Company">
					<div class="alert alert-info error" role="alert">
						<div class="alert_logo"><h1 class="fa fa-home"></h1></div> 
						<div class="alert_content"><strong>One Person Company Data</strong></div>
					</div>
				</a>
            </div>
          <div class="col-md-2">
            	<a href="form_page.php?type=nidhi&pg=Nidhi Company">
					<div class="alert alert-info success" role="alert">
						<div class="alert_logo"><h1 class="fa fa-home"></h1></div> 
						<div class="alert_content"><strong>Nidhi Company Data</strong></div>
					</div>
				</a>
            </div>
           <div class="col-md-2">
            	<a href="form_page.php?type=tm_regis&pg=TM Registration">
					<div class="alert alert-info info" role="alert">
						<div class="alert_logo"><h1 class="fas fa-paste nav_icon"></h1></div> 
						<div class="alert_content"><strong>TM Registration </strong></div>
					</div>
				</a>
            </div>      
           <div class="col-md-2">
            	<a href="form_page.php?type=tm_object&pg=TM Objection">
					<div class="alert alert-info error" role="alert">
						<div class="alert_logo"><h1 class="fas fa-paste nav_icon"></h1></div> 
						<div class="alert_content"><strong>TM Objection</strong></div>
					</div>
				</a>
            </div>    
            
          <div class="col-md-2">
            	<a href="form_page.php?type=tm_renewal&pg=TM Renewal">
					<div class="alert alert-info success" role="alert">
						<div class="alert_logo"><h1 class="fas fa-paste nav_icon"></h1></div> 
						<div class="alert_content"><strong>TM Renewal</strong></div>
					</div>
				</a>
            </div>      
            <div class="col-md-2">
            	<a href="form_page.php?type=iso&pg=ISO">
					<div class="alert alert-info info" role="alert">
						<div class="alert_logo"><h1 class="fas fa-paste nav_icon"></h1></div> 
						<div class="alert_content"><strong>ISO</strong></div>
					</div>
				</a>
            </div>     
              <div class="col-md-2">
            	<a href="form_page.php?type=marriage_regis&pg=Marriage Registration">
					<div class="alert alert-info warn" role="alert">
						<div class="alert_logo"><h1 class="fas fa-paste nav_icon"></h1></div> 
						<div class="alert_content"><strong>Marriage Registration </strong></div>
					</div>
				</a>
            </div>  
            
           <div class="col-md-2">
            	<a href="form_page.php?type=digi_signal_certi&pg=Digital Signature Certificate">
					<div class="alert alert-info info" role="alert">
						<div class="alert_logo"><h1 class="fas fa-paste nav_icon"></h1></div> 
						<div class="alert_content"><strong>Digital Sign Certificate</strong></div>
					</div>
				</a>
            </div>      
              <div class="col-md-2">
            	<a href="form_page.php?type=gst_regis&pg=GST Registration">
					<div class="alert alert-info success" role="alert">
						<div class="alert_logo"><h1 class="fas fa-paste nav_icon"></h1></div> 
						<div class="alert_content"><strong>GST Registration</strong></div>
					</div>
				</a>
            </div>      
              <div class="col-md-2">
            	<a href="form_page.php?type=gst_file&pg=GST Filing">
					<div class="alert alert-info error" role="alert">
						<div class="alert_logo"><h1 class="fas fa-paste nav_icon"></h1></div> 
						<div class="alert_content"><strong>GST Filing</strong></div>
					</div>
				</a>
            </div>  
          
            <div class="col-md-2">
            	<a href="form_page.php?type=gst_modi&pg=GST Modification">
					<div class="alert alert-info warn" role="alert">
						<div class="alert_logo"><h1 class="fas fa-paste nav_icon"></h1></div> 
						<div class="alert_content"><strong>GST Modification</strong></div>
					</div>
				</a>
            </div>  
            <div class="col-md-2">
            	<a href="form_page.php?type=gst_cancel&pg=GST Cancel">
					<div class="alert alert-info info" role="alert">
						<div class="alert_logo"><h1 class="fas fa-paste nav_icon"></h1></div> 
						<div class="alert_content"><strong>GST Cancel</strong></div>
					</div>
				</a>
            </div>  
            <div class="col-md-2">
            	<a href="form_page.php?type=gst_nil&pg=ISO Nil">
					<div class="alert alert-info success" role="alert">
						<div class="alert_logo"><h1 class="fas fa-paste nav_icon"></h1></div> 
						<div class="alert_content"><strong>GST Nil</strong></div>
					</div>
				</a>
            </div>  
            <div class="col-md-2">
           	<a href="form_page.php?type=itr_file&pg=ITR Filing">
					<div class="alert alert-info error" role="alert">
						<div class="alert_logo"><h1 class="fas fa-paste nav_icon"></h1></div> 
						<div class="alert_content"><strong>ITR Filing</strong></div>
					</div>
				</a>
            </div>  
         <div class="col-md-2">
           	<a href="form_page.php?type=fssai&pg=FSSAI [Food license]">
					<div class="alert alert-info warn" role="alert">
						<div class="alert_logo"><h1 class="fas fa-paste nav_icon"></h1></div> 
						<div class="alert_content"><strong>FSSAI [Food license]</strong></div>
					</div>
				</a>
            </div>  
          <div class="col-md-2">
           	<a href="form_page.php?type=fssai_renew&pg=FSSAI Renewal">
					<div class="alert alert-info info" role="alert">
						<div class="alert_logo"><h1 class="fas fa-paste nav_icon"></h1></div> 
						<div class="alert_content"><strong>FSSAI Renewal </strong></div>
					</div>
				</a>
            </div>  
          <div class="col-md-2">
           	<a href="form_page.php?type=iec&pg=IEC [Import Export Code]">
					<div class="alert alert-info success" role="alert">
						<div class="alert_logo"><h1 class="fas fa-paste nav_icon"></h1></div> 
						<div class="alert_content"><strong>IEC [Import Export Code]</strong></div>
					</div>
				</a>
            </div>      
          <div class="col-md-2">
           	<a href="form_page.php?type=sole_prop&pg=Sole Proprietorship">
					<div class="alert alert-info error" role="alert">
						<div class="alert_logo"><h1 class="fas fa-paste nav_icon"></h1></div> 
						<div class="alert_content"><strong>Sole Proprietorship </strong></div>
					</div>
				</a>
            </div>     
            <div class="col-md-2">
           	<a href="form_page.php?type=license&pg=Other License">
					<div class="alert alert-info warn" role="alert">
						<div class="alert_logo"><h1 class="fas fa-paste nav_icon"></h1></div> 
						<div class="alert_content"><strong>Other License</strong></div>
					</div>
				</a>
            </div>     
            <div class="col-md-2">
           	<a href="form_page.php?type=legal_advice&pg=Online Legal Advice">
					<div class="alert alert-info info" role="alert">
						<div class="alert_logo"><h1 class="fas fa-paste nav_icon"></h1></div> 
						<div class="alert_content"><strong>Online Legal Advice</strong></div>
					</div>
				</a>
            </div>     
            <div class="col-md-2">
           	<a href="form_page.php?type=legal_notice&pg=Online Legal Notice">
					<div class="alert alert-info error" role="alert">
						<div class="alert_logo"><h1 class="fas fa-paste nav_icon"></h1></div> 
						<div class="alert_content"><strong>Online Legal Notice</strong></div>
					</div>
				</a>
            </div>     
            <div class="col-md-2">
           	<a href="form_page.php?type=divorce&pg=Divorce">
					<div class="alert alert-info success" role="alert">
						<div class="alert_logo"><h1 class="fas fa-paste nav_icon"></h1></div> 
						<div class="alert_content"><strong>Divorce</strong></div>
					</div>
				</a>
            </div> 
            <div class="col-md-2">
           	<a href="form_page.php?type=legal_service&pg=Other Legal Services">
					<div class="alert alert-info warn" role="alert">
						<div class="alert_logo"><h1 class="fas fa-paste nav_icon"></h1></div> 
						<div class="alert_content"><strong>Other Legal Services </strong></div>
					</div>
				</a>
            </div> 
            <div class="col-md-2">
           	<a href="form_page.php?type=complaint&pg=Consumer Complaint">
					<div class="alert alert-info info" role="alert">
						<div class="alert_logo"><h1 class="fas fa-paste nav_icon"></h1></div> 
						<div class="alert_content"><strong>Consumer Complaint</strong></div>
					</div>
				</a>
            </div> 

              
			</div>
			<hr>

			</div>
				
			
		</div>	

		<!--footer-->
<?php

include('footer.php');
?>