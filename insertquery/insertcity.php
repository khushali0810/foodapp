<?php 
  include '../Connection.php';
//print_r($_POST);
 //$EncodedData = file_get_contents('php://input');
// $DecodedData = json_decode($EncodedData,true);
$DecodedData=$_POST;

 $city_name = $DecodedData['city_name'];
 $zip_code = $DecodedData['zip_code'];
 $InsertQuery = "INSERT INTO customer(`city_name`,`zip_code`) VALUES ('$city_name','$zip_code')";


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