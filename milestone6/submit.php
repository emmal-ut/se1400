<?php
$name = htmlspecialchars($_POST['name'] ?? '');
$email = htmlspecialchars($_POST['email'] ?? '');
$message = htmlspecialchars($_POST['message'] ?? '');

$to = "D00417017@utahtech.edu";

$subject = "New Contact Form Submission";
$body = "You received a message from $name <$email>:\n\n$message";

$headers = "From: $email\r\n";
$headers .= "Reply-To: $email\r\n";

if (mail($to, $subject, $body, $headers)) {
  echo "<h2>Thank you!</h2><p>Your message has been sent.</p>";
} else {
  echo "<p>Sorry, something went wrong. Please try again later.</p>";
}
?>