<?php 
  include '../Connection.php';
//print_r($_POST);
 //$EncodedData = file_get_contents('php://input');
// $DecodedData = json_decode($EncodedData,true);
$DecodedData=$_POST;

 $category_name = $DecodedData['category_name'];
 
 

 $InsertQuery = "INSERT INTO customer(`category_name`) VALUES ('$category_name')";


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