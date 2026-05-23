<?php
// Check for empty fields
if(empty($_POST['name'])      ||
   empty($_POST['email'])     ||
   empty($_POST['tel3'])     ||
   empty($_POST['message2'])   ||
   !empty($_POST['content2'])  ||
   !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
   {
   echo "No arguments Provided!";
   return false;
   }
$name = strip_tags(htmlspecialchars($_POST['name']));
$email_address = strip_tags(htmlspecialchars($_POST['email']));
$message = strip_tags(htmlspecialchars($_POST['message2']));

// Create the email and send the message
$to = 'gregory35@wp.pl';
$email_subject = "Kwiaciarnia - Wiadomość ze strony internetowej:  $name";
$email_body = "Kwiaciarnia - Wiadomość ze strony internetowej.\n\nImię: $name\n\nEmail: $email_address\n\nWiadomość:\n$message";
$headers = "Reply-To: $email_address";

mail($to,$email_subject,$email_body,$headers);
return true;
?>