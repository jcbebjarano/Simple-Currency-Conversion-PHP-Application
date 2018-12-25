<?php

include('conn.php');

/* Get data from Client side using $_POST array */

$pair1  = $_POST['pair1'];

$pair2  = $_POST['pair2'];

$sql    = "DELETE FROM pairs WHERE currency1='".$pair1."' AND currency2='".$pair2."'";

$stmt   = $conn->prepare($sql);


if($stmt->execute()){

	$result = 1;

}


echo $result;

$conn->close();