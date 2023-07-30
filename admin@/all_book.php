<?php
include('header.php');
$show=new Oops($db);
?>
<script src="js/jquery-1.11.1.min.js"></script>

<div class="row">
		<div id="page-wrapper">

			<div class="main-page">
				
					<div class="tables">
					
					 
					<div class="panel-body widget-shadow">
			<h3 class="title1" style="margin-top: 20px;">All Private Limited Company</h3>

                                    <table class="table table-hover table-striped" id='example'>
                                        <thead>
                                             <th>ID</th>
                                            <th>Date/ Book ID</th>
                                            <th>Property Name/ID</th>
                                            <th>Property Owner Details</th>
                                            <th>Guest Details</th>
                                            <th>Book Date</th>
                                            <th>Amount</th>
                                            <th>Tax</th>
                                            <th>G.Total</th>
                                             <th>Comission</th>
                                            <th>Payment Status</th>
                                            <th>Booking Status</th>

                                             <th>Txn Id</th>
                                           <th>Edit/Delete</th>
                                            
                                        </thead>
<tbody>
		
		
<?php
			
$count=1;
 $count=1;
    $stmt1=$show->readwithdata('business_forms','type','private_limited');    
    while ($row = $stmt1->fetch(PDO::FETCH_ASSOC)){
    $id=$row['id'];  
              $rdate=$row['refund_date']==NULL?'NOT AVAILABLE':date('d-m-Y',strtotime($row['refund_date']));
          $refund_amt=$row['refund_amt']==NULL?'NOT AVAILABLE':$row['refund_amt'];

				echo "<tr>
		<td>$count</td>
		<td>".date('d-m-Y',strtotime($row['b_date']))."<br>".$row['book_id']."</td>
		<td>".$row['hotel_name']."<br>".$row['property_id']."</td>
		<td>".$row['name']."<br>".$row['email']."<br>".$row['phone']."</td>
		<td>".$row['user_id']."<br>".$row['uname']."<br>".$row['uphone']."</td>
		<td><font color='red'>".date('d-m-Y',strtotime($row['from_date']))."</font> - <font color='green'>".date('d-m-Y',strtotime($row['to_date']))."</font></td>		
		<td style='background-color:#5ea8d5;color:#fff;'>".$row['amount']." x ".$row['no_of_days']."= ".$row['total_amount']."</td>
		<td>".$row['tax']."</td>
		<td>".$row['gross_total']."</td>
		<td>".$row['commission_amt']."</td>
		<td style='color:red;'>".$row['bstatus']."</td>";
		?>
		
		<div class="modal fade" id="myModal<?=$count?>" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
          <form method="post">
        <div class="modal-header">
          <h4 class="modal-title">Reason for Cancellation</h4>
           <button type="button" class="close" data-dismiss="modal">&times;</button>
       </div>
        <div class="modal-body" id="">
     
        <label>Reason</label>
        <input type="text" name="reason<?=$count?>" required class="form-control">
       <input type="hidden" id="bid<?=$count?>" value="<?=$row['bid']?>" name="bid<?=$count?>">
        </div>
        <div class="modal-footer">
            <input type="submit" name="sub<?=$count?>" value="Cancel Now" class="btn btn-success">    
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </form>
     
<?php
$submit="sub".$count;
//$prev="prev".$count;
//$qty="qty".$count;
//$pid="p_id".$count;
$reason="reason".$count;
$site="site".$count;
$id="bid".$count;

if(isset($_POST[$submit])){
 $sq="update booking set cancell_reason='".$_POST[$reason]."',cancel_date='".date('Y-m-d')."',cancel_type='Hotel',cancelled_by='".$_SESSION['login_id']."',status='Cancelled' where id='".$_POST[$id]."'";
 $stmt_r=$con->prepare($sq);
  if( $stmt_r->execute()){
		echo "<script>swal('Order has been cancelled now.');window.location.href='".$SERVER['REQUEST_URI']."'</script>";

	
} 

}
?>
      </div>
      
    </div>
  </div>    
		<div class="modal fade" id="modal_refund<?=$count?>" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
          <form method="post">
        <div class="modal-header">
          <h4 class="modal-title">Refund Details</h4>
           <button type="button" class="close" data-dismiss="modal">&times;</button>
       </div>
        <div class="modal-body" id="">
     
        <label>Refund Date</label>
        <input type="date" name="refund_date<?=$count?>" required class="form-control">
        <label>Refund Amount</label>
       <input type="text"  pattern="[0-9]+" title="Numbers Only" name="refund<?=$count?>" required class="form-control">
      <input type="hidden" id="bid_ref<?=$count?>" value="<?=$row['bid']?>" name="bid_ref<?=$count?>">
        </div>
        <div class="modal-footer">
            <input type="submit" name="refund_sub<?=$count?>" value="Refund Now" class="btn btn-success">    
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </form>
     
<?php
$submit1="refund_sub".$count;
$refund_date="refund_date".$count;
$refund_amt="refund".$count;
$id="bid_ref".$count;

if(isset($_POST[$submit1])){
 $sq="update booking set refund_amt='".$_POST[$refund_amt]."',refund_date='".date('Y-m-d',strtotime($_POST[$refund_date]))."',status='Refunded' where id='".$_POST[$id]."'";
 $stmt_r=$con->prepare($sq);
  if( $stmt_r->execute()){
		echo "<script>swal('Order has been refunded now.');window.location.href='".$SERVER['REQUEST_URI']."'</script>";

	
} 

}
?>
      </div>
      
    </div>
  </div>    
		<td>  
		<script>
			                function status(a){
                                var st="#status"+a;
                                var id_txt="#id"+a;
                               var status=$(st).val();
                                var id=$(id_txt).val();
                                alert(status); 
                               if(status=='Cancelled'){
                                $("#myModal"+a).modal();
                                $("#bid<?=$count?>").val(id);   
                              
                                return false;
                               }else if(status=='Refunded'){
                                $("#modal_refund"+a).modal();
                                return false;
                               }
                                $.ajax({
                                type: "POST",
                                url: "ajax.php", // Name of the php files
                                data: "status="+status+"&id="+id,
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
                            <select name="status" onchange="status(<?=$count;?>)" id="status<?=$count;?>">
                            <?php foreach( $interests as  $interest ): ?>
                            <option value="<?php echo $interest ?>"<?php if( $interest==$row['book_status']): ?> selected="selected"<?php endif; ?>><?php echo $interest ?></option>
                            <?php endforeach; ?>
                            </select>	 
                            <input type="hidden" id="id<?=$count?>" value="<?=$row['bid']?>" >
                            <?php if($row['book_status']=='Cancelled' || $row['book_status']=='Refunded'){ echo "Refund Amt:".$refund_amt;echo "<br>Cancelled On:".date('d-m-Y',strtotime($row['cancel_date']));echo "<br>Refund On:".$rdate;}?>
                            </td>
	
		<?php
		echo "
		<td>".$row['txn_id']."</td>

		<td>
		<a href='bill_final.php?bid=".$row['book_id']."&ptable=$sr' target='_blank' class='label label-info'>Invoice</a>
		<a href='edit_booking.php?bid=".$row['book_id']."&ptable=$sr' class='label label-success'>Show</a>
		<a href='delete.php?id=$id&table=$sr&url=".$_SERVER['REQUEST_URI']."' class='label label-danger' onclick='return send();'>Delete</a>
		</td>
		</tr>";
			

 ++$count;
 }


?>							
</tbody>
                                    </table>

</div>
</div>
</div>
</div></div>
		<!--footer-->

<?php

include('footer.php');
?>	

