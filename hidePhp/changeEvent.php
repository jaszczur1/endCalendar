<?php

$conn = mysqli_connect("localhost", "root", "", "mydb");
if (!$conn) {
    trigger_error('Could not Connect' . mysqli_connect_error());
}

$setEndStaus = $_GET['idEvent'];

echo $setEndStaus;

$sql = "UPDATE Event SET status='end' where idEvent='$setEndStaus'";

$result = mysqli_query($conn, $sql);

mysqli_close($conn);
?>

