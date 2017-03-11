<?php

$conn = mysqli_connect("localhost", "root", "", "mydb");
if (!$conn) {
    trigger_error('Could not Connect' . mysqli_connect_error());
}

$idEvent = $_GET['idEvent'];

    $sql = "UPDATE event SET status ='endend' where idEvent = '$idEvent'";

$result = mysqli_query($conn, $sql);

mysqli_close($conn);
?>



