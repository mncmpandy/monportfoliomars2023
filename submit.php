<?php
$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];
$to = "mncmpandy@gmail.com";

$headers = "De la part de :" . $name . "\r\n" .
           "CC: contact@monica-mpandy.fr";

$txt = "Tu as reçu un message de " . $name . "\r\nEmail : " . $email . "\r\nMessage : " . $message;

if($email != NULL){
    mail($to, $subject, $txt, $headers);
}

header('Location: merci.html');
?>