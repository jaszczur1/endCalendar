<?php

$conn = mysqli_connect("localhost", "root", "", "mydb");
if (!$conn) {
    trigger_error('Could not Connect' . mysqli_connect_error());
}

$sql = "SELECT * FROM Event, User, room WHERE User.id = Event.idUser and room.idRoom = Event.idRoom and Event.status = 'endend'";

$result = mysqli_query($conn, $sql);

$array= array();

while ($row = mysqli_fetch_assoc($result)) {
    $array[] = $row;
}

// echo'{"ProductsData":'.json_encode($array).'}'; //Here ProductsData is just a simple String u can write anything instead
echo json_encode($array);
  

mysqli_close($conn);
?>

