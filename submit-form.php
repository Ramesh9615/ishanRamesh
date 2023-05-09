 
<?php
// get the form data
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['message'];

// set up the email parameters
$to = 'info@ishanbroadband.com';
$subject = 'New message from Ishan Broadband website';
$headers = "From: $name <$email>" . "\r\n";
$headers .= "Reply-To: $name <$email>" . "\r\n";
$headers .= "X-Mailer: PHP/" . phpversion();

// build the email body
$body = "Name: $name\n";
$body .= "Email: $email\n";
$body .= "Phone: $phone\n\n";
$body .= "Message:\n$message";

// send the email
if (mail($to, $subject, $body, $headers)) {
  echo "Thank you for contacting us. We will get back to you soon.";
} else {
  echo "Oops, something went wrong. Please try again later.";
}
?>
