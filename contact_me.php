<?php
$name = $_POST['name']; // contain name of person
$email = $_POST['email']; // Email address of sender\
$phone = $_POST['phone']; // Your Phone
$message = $_POST['message']; // Your message 
$receiver = "joytrading2004@yahoo.com" ; // hardcorde your email address here - This is the email address that all your feedbacks will be sent to 

if (!empty($name) & !empty($email) && !empty($message)) {
    $body = "Name:{$name}\n\nEmail:{$email}\n\nPhone :{$phone}\n\nQuery:{$message}";
	$send = mail($receiver, '[Joy Trading] Online Contact Form '.$name, $body, 'From: '.$email);
}
?>