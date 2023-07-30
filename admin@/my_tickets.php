<?php
include('header.php');
$show=new Oops($db);
?>
<link href="src/facebox.css" media="screen" rel="stylesheet" type="text/css" />
<script src="src/facebox.js" type="text/javascript"></script>
  <script type="text/javascript">
	jQuery(document).ready(function($) {
	  $('a[rel*=facebox]').facebox({
		loadingImage : 'src/loading.gif',
		closeImage   : 'src/closelabel.png'
	  })
	})
	
	function send(){
		
		if(window.confirm("Do You Really Want To Delete The Data??")){
			
			return true;
		}
		else return false;
		
		
	}
  </script>
<div class="row">
		<div id="page-wrapper">

			<div class="main-page">
				
					<div class="tables">
					
					 
					<div class="panel-body widget-shadow">
			<h3 class="title1" style="margin-top: 20px;">All Tickets</h3>
	<form method ='post'>
			<table class="table" id='example'>
							<thead>
								<tr>  
								 <th>Sl</th>
								    <th> Date</th>
							        <th>Type</th>
							        <th>Message</th>
							        <th>Status</th>
							        <th>Reply/Delete</th>
									</tr>
							 </thead>
			 <tbody>

<?php
	$sr='feedback';		
    $count=1;
    $stmt1=$show->readAll('feedback');    
    while ($row = $stmt1->fetch(PDO::FETCH_ASSOC)){
   $id=$row['id'];
    echo "<tr>
    <td>$count</td>
    <td>".date('d-m-Y',strtotime($row['date']))."</td>
    <td>".$row['type']."</td>
    <td>".$row['feedback']."</td>
    <td><font color='orange'><b>".$row['status']."</b></font></td>
    
    <td>
    <a href='edit_feedback.php?id=$id' class='label label-success'>Reply</a>  
    <a href='delete.php?id=$id&table=$sr&url=".$_SERVER['REQUEST_URI']."' class='label label-danger' onclick='return send();'>Delete</a></td>
</tr>";
									

 ++$count;
 }


?>							
</tbody>
</table>
</form>
 
</div>
</div>
</div>
</div></div>
		<!--footer-->

<?php

include('footer.php');
?>	

