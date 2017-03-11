<?php

$conn = mysqli_connect("localhost", "root", "", "mydb");
if (!$conn) {
    trigger_error('Could not Connect' . mysqli_connect_error());
}

$idguest = $_GET['idguest'];

$sql = "DELETE FROM guest WHERE idguest='$idguest'";

$result = mysqli_query($conn, $sql);

$array = array();

while ($row = mysqli_fetch_assoc($result)) {
    $array[] = $row;
}
?>

