<?php 
  include '../Connection.php';
//print_r($_POST);
 //$EncodedData = file_get_contents('php://input');
// $DecodedData = json_decode($EncodedData,true);
$DecodedData=$_POST;

 $withdrawl_amount = $DecodedData['withdrawl_amount'];
 $withdrawl_mode = $DecodedData['withdrawl_mode'];
 
 

 $InsertQuery = "INSERT INTO customer(`withdrawl_amount`,`withdrawl_mode`) VALUES ('$withdrawl_amount','$withdrawl_mode')";


  $query = mysqli_query($conn, $InsertQuery);
  if($query)
  {
  	$mess ="done";
  }
  else{
  	$mess ="not done";
  }
echo $mess;
$Response[] = array('message' => $mess ); 
echo json_encode($Response);
?>