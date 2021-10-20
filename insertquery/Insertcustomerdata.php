<?php 
  include '../Connection.php';
//print_r($_POST);
 //$EncodedData = file_get_contents('php://input');
// $DecodedData = json_decode($EncodedData,true);
$DecodedData=$_POST;

 $firstname = $DecodedData['firstname'];
 $lastname = $DecodedData['lastname'];
 $number = $DecodedData['number'];
 $email = $DecodedData['email'];
 $pass = $DecodedData['pass'];
 $address = $DecodedData['address'];
 $zipcode = $DecodedData['zipcode'];
 $gender = $DecodedData['gender'];
 $dob = $DecodedData['dob'];
 

   $InsertQuery = "INSERT INTO customer(`customer_firstname`,`customer_lastname`,`contact_phone`,`email`,`password`,`address`,`zip_code`,`Gender`,`DOB`) VALUES ('$firstname','$lastname','$number','$email','$pass','$address','$zipcode','$gender','$dob')";


   $query = mysqli_query($conn, $InsertQuery);
  if($query)
  {
  	$mess ="done";
  }
  else{
  	$mess ="not done";
  }
 $mess;
$Response[] = array('message' => $mess ); 
echo json_encode($Response);
?>