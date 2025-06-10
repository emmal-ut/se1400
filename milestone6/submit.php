<?php
$name = $_POST['name'] ?? '';
$email = $_POST['email'] ?? '';
$message = $_POST['message'] ?? '';

if ($name && $email && $message) {
    echo "<h2>Thank you, $name!</h2>";
    echo "<p>We received your message:</p>";
    echo "<blockquote>" . htmlspecialchars($message) . "</blockquote>";
    echo "<p>We'll reply to <strong>$email</strong> soon.</p>";
} else {
    echo "<p>Please fill out all fields.</p>";
}
?>