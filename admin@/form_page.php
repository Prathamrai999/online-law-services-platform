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
			<h3 class="title1" style="margin-top: 20px;">All <?=$_REQUEST['pg']?></h3>
			<table class="table" id='example'>
							<thead>
								<tr>  
								 <th>Sl</th>
								    <th> Date</th>
							        <th>Name</th>
							        <th>Email/Phone</th>
							        <th>Aadhaar No</th>
							        <th>Payment Status</th>
							        <th>Status</th>
							        <th>Edit/Delete</th>
									</tr>
							 </thead>
			 <tbody>

<?php
    $count=1;
    $sr="business_forms";
    $stmt1=$show->readwithdata('business_forms','type',$_REQUEST['type']);    
    while ($row = $stmt1->fetch(PDO::FETCH_ASSOC)){
    $id=$row['id'];
    echo "<tr>
    <td>$count</td>
    <td>".date('d-m-Y',strtotime($row['date']))."</td>
     <td>".$row['name']."</td>
     <td>".$row['email']."<br>".$row['phone']."</td>
  <td>".$row['adhar']."</td>
    
    ";
    ?>		<td>  
		<script>
			                function pstatus(a){
                                var st="#pstatus"+a;
                                var id_txt="#pid"+a;
                               var status=$(st).val();
                                var id=$(id_txt).val();
                              //  alert(status); 
                               
                                $.ajax({
                                type: "POST",
                                url: "ajax_check.php", // Name of the php files
                                data: "data="+status+"&id="+id+"&table=business_forms&column=payment_status",
                                async: false,
                                global: false,
                                success: function(result)
                                {
                                window.location.reload();
                                }
                                });
                               
                                }
                			    
		                	</script>				
		                	<?php $interests = array('Pending','Confirmed','Cancelled','Refunded');?>
                            <select name="status" onchange="pstatus(<?=$count;?>)" id="pstatus<?=$count;?>">
                            <?php foreach( $interests as  $interest ): ?>
                            <option value="<?php echo $interest ?>"<?php if( $interest==$row['payment_status']): ?> selected="selected"<?php endif; ?>><?php echo $interest ?></option>
                            <?php endforeach; ?>
                            </select>	 
                            <input type="hidden" id="pid<?=$count?>" value="<?=$row['id']?>" >
                            </td>  
 		                    <td>  
		                    <script>
			                function status(a){
			                    
                                var st="#status"+a;
                                var id_txt="#id"+a;
                               var status=$(st).val();
                                var id=$(id_txt).val();
                               // alert(id);
                                $.ajax({
                                type: "POST",
                                url: "ajax_check.php", // Name of the php files
                                data: "data="+status+"&id="+id+"&table=business_forms&column=status",
                                async: false,
                                global: false,
                                success: function(result)
                                {
                                window.location.reload();
                                }
                                });
                                }
                			    
		                	</script>				
		                	<?php $interests = array('Pending','Confirmed','Closed');?>
                            <select name="status" onchange="status(<?=$count;?>)" id="status<?=$count;?>">
                            <?php foreach( $interests as  $interest ): ?>
                            <option value="<?php echo $interest ?>"<?php if( $interest==$row['status']): ?> selected="selected"<?php endif; ?>><?php echo $interest ?></option>
                            <?php endforeach; ?>
                            </select>	 
                            <input type="hidden" id="id<?=$count?>" value="<?=$row['id']?>" >
                            </td>  
   
    
 <?php   echo "<td>
    <a href='edit_forms.php?id=$id&enq=".$_REQUEST['pg']."' class='label label-success'>Edit</a>  
    <a href='delete.php?id=$id&table=$sr&url=".$_SERVER['REQUEST_URI']."' class='label label-danger' onclick='return send();'>Delete</a></td>
</tr>";
									

 ++$count;
 }


?>							
</tbody>
</table>
     		
 <form method="post" action="export.php">
     <input type="hidden" value="<?=$_REQUEST['type']?>" name="type">
     <input type="hidden" value="<?=$_REQUEST['pg']?>" name="pg">
     
     <input type="submit" name="export" class="btn btn-success" value="Download & Export to Excel" />
    </form> 
</div>
</div>
</div>
</div></div>
		<!--footer-->

<?php

include('footer.php');
?>	

