<?php

include('conn.php');

/* Get data from Client side using $_POST array */

$currency1  = $_POST['currency1'];

$currency2  = $_POST['currency2'];





/* validate whether user has entered all values. */

if(!$currency1|| !$currency2){

  $result = 2;

}else {

//SQL query to get results from database
 $sql    = " INSERT INTO pairs VALUES ('".$currency1."', '".$currency2."')";

 $stmt   = $conn->prepare($sql);


 if($stmt->execute()){

  $result = 1;

}

}

echo $result;

$conn->close();
