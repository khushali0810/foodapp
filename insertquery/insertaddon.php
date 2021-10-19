<?php 
  include '../Connection.php';

 $EncodedData = file_get_contents('php://input');
 $DecodedData = json_decode($EncodedData,true);


 $name = $DecodedData['name'];
 $addon_price = $DecodedData['addon_price'];

 

 $InsertQuery = "INSERT INTO addon(`name`,`addon_price`) VALUES ('$name','$addon_price')";


  $query = mysqli_query($conn, $InsertQuery);
  if($query)
  {
  	$mess ="done";
  }
  else{
  	$mess ="not done";
  }
echo $mess;
/*$Response[] = array('message' => $mess ); 
echo json_encode($Response);*/
?>