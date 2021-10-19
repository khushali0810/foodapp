<?php 
  include '../Connection.php';
//print_r($_POST);
 //$EncodedData = file_get_contents('php://input');
// $DecodedData = json_decode($EncodedData,true);
$DecodedData=$_POST;

 $full_name = $DecodedData['full_name'];
 $email = $DecodedData['email'];
 $mobile = $DecodedData['mobile'];
 $address = $DecodedData['address'];
 $password = $DecodedData['password'];
 $status = $DecodedData['status'];
 
 

 $InsertQuery = "INSERT INTO customer(`full_name`,`email`,`mobile`,`address`,`password`,'$status') VALUES ('$full_name','$email',$mobile,'$address','$password','$status')";


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