<?php

$conn = mysqli_connect("localhost", "root", "", "mydb");
if (!$conn) {
    trigger_error('Could not Connect' . mysqli_connect_error());
}
$idEvent=$_GET['idEvent'];
$tname = $_GET['tname'];
$room = $_GET['room'];
$email = $_GET['email'];
$guestList = $_GET['guestList'];
$start = $_GET['start'];
$stop = $_GET['stop'];


    $sql = "UPDATE event SET titleEvent='$tname',guestList='$guestList',timeEventStart='$start',timeEventStop='$stop',idRoom ='$room'  WHERE idEvent = '$idEvent'";

$result = mysqli_query($conn, $sql);

mysqli_close($conn);
    
?>

