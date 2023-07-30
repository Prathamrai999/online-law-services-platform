<?php

include('header.php');
$show=new Oops($db);

?>

<script src="tinymce/tinymce.min.js"></script>
  <script>tinymce.init({ selector:'textarea' });</script>
		
        <!--  page-wrapper -->
          <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-4">
                    <!-- Form Elements -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
						Entry patners Logo                        
						</div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
        <form method="post" data-toggle="validator" enctype="multipart/form-data">                                     
                                       
                      <div class="form-group">
                    <label> Logo</label>
                       
					<input type="file" name="service_img" required>
                     </div>
						<input type="submit" class="btn btn-primary" name="sub" value="submit">
						<button type="reset" class="btn btn-success">Reset Button</button>
					</form>
                      </div>
                       </div>
                        </div>
                    </div>
                     <!-- End Form Elements -->
                </div>
                <div class="col-lg-8">
                             <div class="tables">
                    <!-- Form Elements -->
               <h3 class="title1">All patners Images</h3>
					<div class="panel-body widget-shadow">
		<table class="table" id="example">
			<thead>
				<tr>
				<th>ID</th>
			    <th>Logo</th>
				<th>Delete</th>
                                            
				</tr>
			</thead>
			<tbody>
	<?php
			
$count=1;
$sr='patners';
$stmt =$show->readAll($sr);
$num = $stmt->rowCount();
     
     if($num>0){
 
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
        extract($row);
        $id=$row['id'];     
       

		echo "<tr>
		<td>$count</td>
		<td><img src='$pic_img/".$row['img']."' width='100px'></td>		
		<td>
		<a href='delete.php?id=$id&table=$sr&url=".$_SERVER['REQUEST_URI']."' class='label label-danger' onclick='return send();'>Delete</a>
		</td>
		</tr>";
			

 ++$count;
 }
}

?>						
			</tbody>
		</table>
                     </div>
                    </div>

                    
                </div>
            </div>
        </div>
<?php
if(isset($_POST['sub'])){

    
$img=$show->imageEdit($_FILES['service_img']['name']);
move_uploaded_file($_FILES['service_img']['tmp_name'],"../product_img/".$img);

	$data=array(
    'img'=>$img,
    'date'=>date('Y-m-d'),
	);
	$r1=$show->insert('patners',$data);
	if($r1){
	echo "<script>sweetAlert('Ok','Image is added','success');window.location.href='".$_SERVER['request_uri']."';</script>";
	
	}
	

}
?>	
<script src="js/bootstrap-datepicker.js"></script>
<script type="text/javascript">
            // When the document is ready
             $(document).ready(function(){
       $("#date").datepicker({
	   format: 'dd-mm-yyyy',
	   
	   });
	  
	 
       });
</script>
		<!--footer-->
<?php

include('footer.php');
?>		