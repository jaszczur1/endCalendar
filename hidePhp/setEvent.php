<?php

$conn = mysqli_connect("localhost", "root", "", "mydb");
if (!$conn) {
    trigger_error('Could not Connect' . mysqli_connect_error());
}
//
$tname = $_GET['tname'];
$room = $_GET['room'];
$email = $_GET['email'];
$guestList = $_GET['guestList'];
$start = $_GET['start'];
$stop = $_GET['stop'];

//
//
//$tname = $_GET="s";
//$room = $_GET="AuditoriumB";
//$email = "danzel_22@o2.pl";
//$guestList = "";
//$start = "dzis";
//$stop = "jutro";


//
//$sql = "INSERT INTO Event (titleEvent, guestList, timeEventStart, timeEventStop, status, idUser, idRoom ) SELECT '$tname','$guestList','$start', '$stop','$room',user.idUser, event.idRoom FROM user,room,event WHERE user.email ='$email' and event.idRoom = room.idRoom and room.title='$room'";


//$sql = "INSERT INTO Event (titleEvent, guestList, timeEventStart, timeEventStop, idUser, idRoom )
//         SELECT '$tname','$guestList','$start', '$stop',idUser, idRoom FROM room, user WHERE idRoom = (SELECT idRoom FROM room WHERE room.title = '$room') AND idUser = (SELECT idUser FROM user WHERE user.email = '$email')";


$sql = "INSERT INTO Event (titleEvent, guestList, timeEventStart, timeEventStop, idUser, idRoom ) SELECT '$tname','$guestList','$start', '$stop',user.id, room.idRoom FROM user, room WHERE user.id = (SELECT us.id FROM user as us WHERE us.name = '$email') and idRoom = (SELECT idRoom FROM room WHERE room.title = '$room')";

$result = mysqli_query($conn, $sql);

mysqli_close($conn);
?>

