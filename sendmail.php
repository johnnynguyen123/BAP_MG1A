<?php

$to = '23349@ma-web.nl';
$subject = $_POST['subject'];
$message = $_POST['message'];

$headers = 'From: ' . $_POST['from'];

//Mail versturen
mail($to, $subject, $message, $headers);

echo 'Uw mail is verstuurd dankuwel!';