<?php
$to = "allynvo@yahoo.com";
$subject = "Message from my website";
$txt = $_POST['Message'];
$headers = $_POST['Email'] . "\r\n";

mail($to,$subject,$txt,$headers);
?>