<?php 
  include '../Connection.php';
//print_r($_POST);
 //$EncodedData = file_get_contents('php://input');
// $DecodedData = json_decode($EncodedData,true);
$DecodedData=$_POST;

 $date_active_from = $DecodedData['date_active_from'];
 $time_active_from = $DecodedData['time_active_from'];
 $offer_price = $DecodedData['offer_price'];
 $status = $DecodedData['status'];
 

 $InsertQuery = "INSERT INTO customer(`date_active_from`,`time_active_from`,`offer_price`,`status`) VALUES ('$date_active_from','$time_active_from',$offer_price,'$status')";


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