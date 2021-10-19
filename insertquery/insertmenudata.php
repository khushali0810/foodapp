<?php 
  include '../Connection.php';
//print_r($_POST);
 //$EncodedData = file_get_contents('php://input');
// $DecodedData = json_decode($EncodedData,true);
$DecodedData=$_POST;

 $item_name = $DecodedData['item_name'];
 $description = $DecodedData['description'];
 $ingredients = $DecodedData['ingredients'];
 $recipe = $DecodedData['recipe'];
 $price = $DecodedData['price'];
 $active = $DecodedData['active'];

 

 $InsertQuery = "INSERT INTO customer(`item_name`,`description`,`ingredients`,`recipe`,`price`,`active`) VALUES ('$item_name','$description',$ingredients,'$recipe','$price','$active')";


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