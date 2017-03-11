<?php

$conn = mysqli_connect("localhost", "root", "", "mydb");
if (!$conn) {
    trigger_error('Could not Connect' . mysqli_connect_error());
}


$company = $_GET['company'];
$fullName = $_GET['fullName'];
$timeStart = $_GET['timeStart'];
$timeStop = $_GET['timeStop'];
$idevent = $_GET['idEvent'];


    $sql = "INSERT INTO guest(company, fullName, timeStart, timeStop, idEvent) VALUES ('$company','$fullName','$timeStart','$timeStop','$idevent')";

$result = mysqli_query($conn, $sql);

mysqli_close($conn);
?>


