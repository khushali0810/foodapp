<?php 
  include '../Connection.php';
//print_r($_POST);
 //$EncodedData = file_get_contents('php://input');
// $DecodedData = json_decode($EncodedData,true);
$DecodedData=$_POST;

 $notification_msg = $DecodedData['notification_msg'];
 $notification_category = $DecodedData['notification_category'];
 $path_img = $DecodedData['path_img'];
 
 

 $InsertQuery = "INSERT INTO customer(`notification_msg`,`notification_category`,`path_img`) VALUES ('$notification_msg','$notification_category',$path_img)";


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