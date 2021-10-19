<?php 
  include '../Connection.php';
//print_r($_POST);
 //$EncodedData = file_get_contents('php://input');
// $DecodedData = json_decode($EncodedData,true);
$DecodedData=$_POST;

 $res_name = $DecodedData['res_name'];
 $address = $DecodedData['address'];
 $email = $DecodedData['email'];
 $password = $DecodedData['password'];

 

 $InsertQuery = "INSERT INTO customer(`res_name`,`address`,`email`,`password`) VALUES ('$res_name','$address','$email','$password')";


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