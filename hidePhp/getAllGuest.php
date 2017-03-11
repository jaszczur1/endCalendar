<?php

$conn = mysqli_connect("localhost", "root", "", "mydb");
if (!$conn) {
    trigger_error('Could not Connect' . mysqli_connect_error());
}

$idEvent = $_GET['guestsEvent'];

$sql = "select * from guest where idEvent ='$idEvent'";


$result = mysqli_query($conn, $sql);

$array = array();

while ($row = mysqli_fetch_assoc($result)) {
    $array[] = $row;
}

echo json_encode($array);

mysqli_close($conn);
?>


