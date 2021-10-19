<?php 
  include '../Connection.php';
//print_r($_POST);
 //$EncodedData = file_get_contents('php://input');
// $DecodedData = json_decode($EncodedData,true);
$DecodedData=$_POST;

 $documents_name = $DecodedData['documents_name'];
 $doc_path = $DecodedData['doc_path'];
 $identity_id_num = $DecodedData['identity_id_num'];
 $status = $DecodedData['status'];

 

 $InsertQuery = "INSERT INTO customer(`documents_name`,`doc_path`,`identity_id_num`,`status`) VALUES ('$documents_name','$doc_path','$identity_id_num','$status')";


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