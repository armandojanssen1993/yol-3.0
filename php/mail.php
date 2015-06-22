<?php

$admin_email = "info@yol-lainedereve.nl";
$naam = "Naam:" . $_POST['voornaam'] . " ";
$achternaam = $_POST['achternaam'] . "\r\n" . "\r\n";
$comment = "Opmerking: " . $_POST['comment'] . "\r\n" . "\r\n";
$email = $_POST['email'];
$email_subject = "E-mail van website";
$telefoon = "Telefoonnummer: " . $_POST['telefoon'];

$test = $admin_email . $naam . $achternaam . $comment . $email . $email_subject . $telefoon;

$email_body = $naam . $achternaam . $comment . $telefoon;

$headers = "From: $email \r\n";

mail($admin_email,$email_subject,$email_body,$headers);

echo "Uw bericht is succesvol verzonden";

header("Location: http://yol-lainedereve.nl");
die();