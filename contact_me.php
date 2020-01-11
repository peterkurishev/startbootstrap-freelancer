<?php
$name = strip_tags(htmlspecialchars($_POST['name']));
$email_address = strip_tags(htmlspecialchars($_POST['email']));
$phone = strip_tags(htmlspecialchars($_POST['phone']));
$message = strip_tags(htmlspecialchars($_POST['message']));

// Create the email and send the message
$to = 'peter.kurishev@gmail.com';
$email_subject = "Новое обращение с сайта dswz.ru от  $name";
$email_body = "Hola Verónica, recibiste un mensaje desde la planilla de contacto.\n\n"."Estos son los detalles:\n\nNombre: $name\n\nEmpresa: $company\n\nEmail: $email_address\n\nTeléfono: $phone\n\nPaís: $country\n\nConsulta:\n$message";
$headers = "From: noreply@trabajosaludable.com.ar\n"; // This is the email address the generated message will be from. We recommend using something like noreply@yourdomain.com.
$headers .= "Reply-To: $email_address";   
$result = mail($to,$email_subject,$email_body,$headers);
die($result);
?>
