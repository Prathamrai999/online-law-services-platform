<?php

include('header.php');
$show=new Oops($db);

?>

<script src="tinymce/tinymce.min.js"></script>
  <script>tinymce.init({ selector:'textarea' });</script>
		
        <!--  page-wrapper -->
          <div id="page-wrapper">
            <div class="row">
                <div class="col-md-6">
                    <!-- Form Elements -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
						Under Testimonial                        
						</div>
                        <div class="panel-body">
                            <div class="row">
                                    <form role="form" method="post" enctype="multipart/form-data">
               
                       <div class="form-group">
                     <label>Testimonial By</label>

                     <input type="text" name="name" class="form-control" required>

                        </div>
                                    
                       <div class="form-group">
                     <label>Testimonial</label>

                    <!-- <input type="text" name="content" class="form-control" required>-->
                    <textarea name="content"></textarea>

                        </div>
                      
						<input type="submit" class="btn btn-primary" name="sub" value="submit">
						<button type="reset" class="btn btn-success">Reset Button</button>
					</form>
                       </div>
                        </div>
                    </div>
                     <!-- End Form Elements -->
                </div>
                <div class="col-md-6">  
                <div class="tables">
                    <!-- Form Elements -->
               <h3 class="title1">All Testimonial</h3>
					<div class="panel-body widget-shadow">
		<table class="table" id="example">
			<thead>
		
				<tr>
				<th>ID</th>
				<th>Testimonial By</th>
				<th>Testimonial</th>
				<th>Delete</th>
                                            
				</tr>
			</thead>
			<tbody>
	<?php
			
$count=1;
$sr='testimonial';
$stmt =$show->readAll($sr);
$num = $stmt->rowCount();
     
     if($num>0){
 
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
        extract($row);
        $id=$row['id'];     
       

		echo "<tr>
		<td>$count</td>
		<td>".$row['name']."</td>
		<td>".$row['content']."</td>";
		?>
		<?php
		echo"<td>
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
                    </div></div>
            </div>
        </div>
<?php
if(isset($_POST['sub'])){
    
        $data1 = array(
        'content'=>$_POST['content'],
        'name'=>$_POST['name'],

        );
        if($show->insert('testimonial',$data1)){
    	echo "<script>sweetAlert('Ok','testimonial is added','success');window.location.href='".$_SERVER['REQUEST_URI']."'</script>";
        
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