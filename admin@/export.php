<?php  
//export.php  
$file=uniqid();
$file_name=$file.'.xls';
$connect = mysqli_connect("localhost", "itsweb_legal", "hackit_321", "itsweb_legal");
$output = '';
if(isset($_POST["export"]))
{
// $query = "SELECT * FROM client";
 $query = "select * from business_forms  where type='".$_POST['type']."' order by id desc";

 $result = mysqli_query($connect, $query);
 if(mysqli_num_rows($result) > 0)
 {
  $output .= '
   <table class="table" border="1">  
                    <tr>  
                         <th>Date</th>  
                         <th>Enquiry For</th>  
                         <th>User ID</th>  
                         <th>Name</th>  
                         <th>Email</th>
                         <th>Phone</th>
                         <th>Address</th>
                         <th>State</th>
                         <th>Adhar</th>
                         <th>Fees</th>
                          <th>Problem</th>
                           <th>Status</th>
                          <th>Payment Status</th>
                  </tr>
  ';
  while($row = mysqli_fetch_array($result))
  {
   $output .= '
    <tr>  
                         <td>'.date('d-m-Y',strtotime($row["date"])).'</td>  
                          <td>'.$_POST['pg'].'</td>  
                         <td>'.$row["user_id"].'</td>  
                         <td>'.$row["name"].'</td>  
                         <td>'.$row["email"].'</td>  
                         <td>'.$row["phone"].'</td>
                         <td>'.$row["address"].'</td>
                         <td>'.$row["state"].'</td>
                         <td>'.$row["adhar"].'</td>
                         <td>'.$row["fees"].'</td>
                         <td>'.$row["problem"].'</td>
                         <td>'.$row["status"].'</td>
                          <td>'.$row["payment_status"].'</td>
                        
                    </tr>';
  }
  $output .= '</table>';
  header('Content-Type: application/xls');
  header('Content-Disposition: attachment; filename='.$file_name);
  echo $output;
 }
}
?>