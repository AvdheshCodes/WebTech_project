<?php

$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$event = $_POST['event'];
$tickets = $_POST['tickets'];

file_put_contents("db/bookings.txt", "$name | $email | $phone | $event | $tickets\n", FILE_APPEND);

header("Location: booking-success.php?name=$name&event=$event&tickets=$tickets");
exit;

?>
