<?php

$conn = mysqli_connect("localhost", "root", "", "mydb");
if (!$conn) {
    trigger_error('Could not Connect' . mysqli_connect_error());
}

$idguest = $_GET['idguest'];
$company = $_GET['company'];
$fullName = $_GET['fullName'];

$timeStop = $_GET['timeStop'];
$timeStart = $_GET['timeStart']; 

$sql = "UPDATE guest SET company ='$company' , fullName = '$fullName', timeStart ='$timeStart', timeStop = '$timeStop' where idguest =$idguest";



$result = mysqli_query($conn, $sql);

$array = array();

while ($row = mysqli_fetch_assoc($result)) {
    $array[] = $row;
}

echo json_encode($array);

mysqli_close($conn);
?>
