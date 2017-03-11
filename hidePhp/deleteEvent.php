<?php

$conn = mysqli_connect("localhost", "root", "", "mydb");
if (!$conn) {
    trigger_error('Could not Connect' . mysqli_connect_error());
}


$deleteEvent = $_GET['idEvent'];

    $sql = "DELETE FROM event WHERE idEvent = '$deleteEvent'";


$result = mysqli_query($conn, $sql);

mysqli_close($conn);
?>

